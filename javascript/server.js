const http = require('http');

function website(req, res)
{
    res.writeHead(200,{"Content-type": "text/plain"});
    res.end('My first server');

}

let server = http.createServer();

server.listen(6969,"127.0.0.1");

console.log("servidor corriendo");