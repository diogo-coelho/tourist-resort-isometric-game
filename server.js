const express = require('express')
const app = express()
const port = 3000

app.use(express.static('public'))

app.get('/', (req, res) => {
	res.send('Servidor Rodando')
})

app.get('/detecting-colors', (req, res) => {
	res.sendFile(__dirname + '/examples/detecting_colors.html')
})

app.get('/devices-capabilities', (req, res) => {
	res.sendFile(__dirname + '/examples/devices_capabilities.html')
})

app.get('/sprite-anim-alt', (req, res) => {
	res.sendFile(__dirname + '/examples/sprite_anim_alt.html')
})

app.get('/sprite-animations', (req, res) => {
	res.sendFile(__dirname + '/examples/sprite_animations.html')
})

app.get('/title-screen', (req, res) => {
	res.sendFile(__dirname + '/examples/title_screen.html')
})

app.get('/clickthrough', (req, res) => {
	res.sendFile(__dirname + '/examples/clickthrough.html')
})

app.get('/generating-a-grid', (req, res) => {
	res.sendFile(__dirname + '/examples/generating-a-grid.html')
})

app.get('/modified-grid-using-atr', (req, res) => {
	res.sendFile(__dirname + '/examples/modified-grid-using-ATR.html')
})

app.listen(port, () => {
	console.log('Servidor rodando')
})

