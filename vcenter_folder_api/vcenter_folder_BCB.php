<?php

$command = escapeshellcmd(' /usr/local/bin/python vcenter_folder_list_BCB.py');
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
    $folder_name = $arr["value"][$i]['name'];
    echo '<br>';
    echo "Folder Name : ", $folder_name;
    echo '<br>';
    echo "---------------------------------------";
}


?>
