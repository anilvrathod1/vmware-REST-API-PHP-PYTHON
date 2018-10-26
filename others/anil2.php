<?php 

$command = escapeshellcmd(' /usr/local/bin/python cluster_list_HCI.py');
$output = shell_exec($command);
echo "*******";
var_dump($output);
echo '<br>';
echo "*******";
echo '<br>';

var_dump(json_decode($output, true)); //testing and display all array

//echo "Cluster Name: "; 
//$arr = json_decode($output, true);
//$id = $arr["value"][0]['name'];
//echo $id;

?>
