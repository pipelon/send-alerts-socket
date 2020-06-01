<?php
setAlerta($_GET['ds'], $_GET['st'], $_GET['fe']);

function setAlerta($ds, $st, $fe) {
    $script = "<script src='js/node_modules/socket.io-client/dist/socket.io.js'></script>";
    $script .= "<script>";
	$script .= "var messages = [{ ds: '".$ds."', st: '".$st."', fe: '".$fe."' }];"; 
    $script .= "var socket = io.connect( 'http://localhost:25003' );";
    $script .= "socket.emit( 'sendAlert',  messages);";
    $script .= "</script>";
    echo $script;
}