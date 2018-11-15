<?php

if (isset($_POST['text'])) {
    $name = $_POST['text'];
    $commands = $_POST['text'];
    addjson($name, $commands);
}


function datajson(){
    $data = file_get_contents("data.json");
    return $cart = json_decode($data);
    
}

function addjson(string $name, string $commands)
{
    $file = file_get_contents('data.json');       
    $taskList = json_decode($file,TRUE);                     
    unset($file);        
    $taskList[] = array('name' => $name,'commands'=>$commands);    
    file_put_contents('data.json',json_encode($taskList));  
    unset($taskList); 
}


