<?php
$get_data = callAPI('GET', 'https://bcb-hci-vcs-001.ahs.cos.lan/rest/vcenter/cluster'.$user['administrator@vsphere.local']['Nutanix/4u'], false);
$response = json_decode($get_data, true);
$errors = $response['response']['errors'];
$data = $response['response']['data'][0];


