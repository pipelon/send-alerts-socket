<?php
setAlerta('Alerta enviada desde Horus6');

function setAlerta($alerta) {
    $script = "<script src='js/node_modules/socket.io-client/dist/socket.io.js'></script>";
    $script .= "<script>";
    $script .= "var socket = io.connect( 'http://localhost:25003' );";
    $script .= "socket.emit( 'sendAlert',  '" . $alerta . "');";
    $script .= "</script>";
    echo $script;
}