var express = require('express');
var app = express();
var server = require('http').Server(app);

var io = require('socket.io')(server);

app.get('/', function (req, res) {
    res.status(200).send('Server OK!');
});
io.origins('*:*');
io.sockets.on('connection', function (socket) {
    console.log('Alguien se ha conectado');

    socket.on('sendAlert', function (data) {
        console.log('Message received ' + data);
        io.sockets.emit('AlertaHorus', data);
    });
});


server.listen('25003', function () {
    console.info("Ok!");
});