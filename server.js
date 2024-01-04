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

app.get('/sprite-anim-alt', (req, res) => {
	res.sendFile(__dirname + '/examples/sprite_anim_alt.html')
})

app.get('/sprite-animations', (req, res) => {
	res.sendFile(__dirname + '/examples/sprite_animations.html')
})

app.get('/title-screen', (req, res) => {
	res.sendFile(__dirname + '/examples/title_screen.html')
})

app.listen(port, () => {
	console.log('Servidor rodando')
})

