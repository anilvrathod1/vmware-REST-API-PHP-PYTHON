<?php 

$command = escapeshellcmd('/usr/local/bin/python cluster_list.py');
$output = shell_exec($command);
//var_dump($output);
echo "Cluster Name: "; 
$arr = json_decode($output, true);
$id = $arr["value"][0]['name'];
echo $id;

?>
