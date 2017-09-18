<?php

header('Content-Type: application/json');

//Includes
include 'config/config.php'

//Variables
$user_agent = "lmgtfy/0.1 (https://github.com/shokinn/lmgtfy-slack-slash-command)";
$command = $_POST['command'];
$search = $_POST['text'];
$token = $_POST['token'];
if ($_ENV["SLACKSLASHCOMMANDTOKEN"] != "") {
	$tokenMatch = $_ENV["SLACKSLASHCOMMANDTOKEN"];
} elseif ($tokenMatch == "") {
	$msg = "{ \"error_msg\": \"You have to specify a token match string\" }";
	die($msg);
        echo $msg;
}

if ($token != $tokenMatch or $token == "" or $tokenMatch == "") {
	$msg = "{ \"error_msg\": \"The token for the slash command doesn't match. Check your script.\" }";
	die($msg);
	echo $msg;
}

if ($search == "") {
	$reply_json = json_encode(array('response_type'=>'ephemeral','text'=>'Please add a search string.'));
} else {
	$longUrl = "http://lmgtfy.com/?q=".$search;
	$reply_json = json_encode(array('response_type'=>'in_channel','text'=>"Here, check this:\n*<".$longUrl.">*"));
}
echo $reply_json;
?>
