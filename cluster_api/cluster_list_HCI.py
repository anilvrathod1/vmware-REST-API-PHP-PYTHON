#!/usr/local/bin/python3
import yaml;
import requests
from requests.auth import HTTPBasicAuth
import json
from requests.packages.urllib3.exceptions import InsecureRequestWarning

api_url = 'https://cos-ahs-evc-005.ahs.cos.lan/rest'
api_user = 'cganiratho@ahs.cos.lan'
api_pass = ''

def main():
    requests.packages.urllib3.disable_warnings(InsecureRequestWarning) #Disable SSL warnings
    get_vcenter_cluster_status()

def get_vcenter_cluster_status():
    resp = get_api_data('{}/vcenter/cluster'.format(api_url))
    #print(resp.content)
    j = resp.content
    #j = resp.json()
    #print('Cluster: {}'.format(j)) 
    print(format(j)) 

def auth_vcenter(username,password):
    #print('Authenticating to vCenter, user: {}'.format(username))
    resp = requests.post('{}/com/vmware/cis/session'.format(api_url),auth=(api_user,api_pass),verify=False)
    if resp.status_code != 200:
        print('Error! API responded with: {}'.format(resp.status_code))
        return
    return resp.json()['value']

def get_api_data(req_url):
    sid = auth_vcenter(api_user,api_pass)
    #print('Requesting Page: {}'.format(req_url))
    resp = requests.get(req_url,verify=False,headers={'vmware-api-session-id':sid})
    if resp.status_code != 200:
        print('Error! API responded with: {}'.format(resp.status_code))
        return
    return resp

main()
