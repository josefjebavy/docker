/// npm install ws
const WebSocket = require('ws');

// Vytvoření WebSocket serveru na portu 8080
const wss = new WebSocket.Server({port: 8080});

// Událost, která se spustí při připojení klienta
wss.on('connection', (ws) => {
    console.log('Nové spojení navázáno.');

    // Událost, která se spustí při přijetí zprávy od klienta
    ws.on('message', (message) => {
        console.log('Přijata zpráva od klienta: ' + message);

        // Odeslání zprávy zpět klientovi
        ws.send(message);
    });

    // Událost, která se spustí při ukončení spojení s klientem
    ws.on('close', () => {
        console.log('Spojení s klientem bylo ukončeno.');
    });
});

console.log('WebSocket server běží na portu 8080.');
