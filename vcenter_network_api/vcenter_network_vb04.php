<?php

$command = escapeshellcmd(' /usr/local/bin/python vcenter_network_list_vb04.py');
$output = shell_exec($command);
//echo "*******";
//var_dump($output);
//echo '<br>';
//echo "*******";
//echo '<br>';

//var_dump(json_decode($output, true)); //testing and display all array

// Creating array
$arr = json_decode($output, true);

for($i = 0; $i < count($arr["value"]); ++$i) {
    $vlan_name = $arr["value"][$i]['name'];
    echo '<br>';
    echo "VLAN  Name : ", $vlan_name;
    echo '<br>';
    echo "---------------------------------------";
}


?>
