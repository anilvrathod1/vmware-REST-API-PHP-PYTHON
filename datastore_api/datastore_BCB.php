<?php

$command = escapeshellcmd(' /usr/local/bin/python datastore_list_BCB.py');
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
    //$id = $arr["value"][$i]['name'];
    $capacity = $arr["value"][$i]['capacity'];
    $free_space = $arr["value"][$i]['free_space'];

    //Percentage=100 * Free Space / Capacity
    $free_space_1 = (100*$free_space);
    $percentage = $free_space_1/$capacity;
    $percentage = intval($percentage);
    //echo $percentage;

    if ( $percentage > 20){
	// select datastore only if FREE space  percentage of datastore is greater than 20
     $id = $arr["value"][$i]['name'];
     echo '<br>';
     echo "Datastore Name : ", $id;
     echo '<br>';
     echo "Capacity : ", $capacity;
     echo '<br>';
     echo "Free Space : ", $free_space;
     echo '<br>';  
     echo " Percentage Free Space: ", $percentage;
     echo '<br>';
     echo "---------------------------------------";
    }
}

//echo "Cluster Name: ";
//$id = $arr["value"][0]['name'];
//echo $id;

?>
