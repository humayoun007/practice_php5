<?php


$grand_father = array();

$grand_father['father'] = array('jamal','kamal','based');
$grand_father['uncle'] = array('nargis','rokon');
$grand_father['aunt'] = array('rahsed','adil');


foreach($grand_father as $key => $value){
    echo "<b>".$key." childs are :"."</b><br/>";
    foreach($grand_father[$key] as $child){
        echo $child."<br/>";
    }
     echo "<br />";
}