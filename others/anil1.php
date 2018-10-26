<?php 

$command = escapeshellcmd(' /usr/local/bin/python /var/www/html/test/api/cluster_list.py');
$output = shell_exec($command);
//echo $output;

var_dump($output);
//var_dump(json_decode($output));
//var_dump(json_decode($output, true));



var_dump($output->value[0]->name);
echo '<br>';
$arr = json_decode($output, true);
$id = $arr["value"][0]['name'];
$id2 = $arr[0]['name'];

echo $id;
//echo $id2;

?>
