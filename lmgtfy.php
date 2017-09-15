<?php

header('Content-Type: application/json');

//Variables
$user_agent = "lmgtfy/0.1 (https://github.com/shokinn/lmgtfy-slack-slash-command)";
$command = $_POST['command'];
$search = $_POST['text'];
$token = $_POST['token'];
$tokenMatch = "";

if($token != $tokenMatch){ 
    $msg = "The token for the slash command doesn't match. Check your script.";
    die($msg);
    echo $msg;
}

$longUrl = "http://lmgtfy.com/?q=".$search;

$reply_json = json_encode(array('response_type'=>'in_channel','text'=>"You'll find your answer here:\n*<".$longUrl.">.*"));
echo $reply_json;
?>
