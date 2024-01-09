const express = require('express')
const app = express()
const port = 3000

app.use(express.static('public'))
require('./routes.js')(app)

app.listen(port, () => {
	console.log('Servidor rodando')
})

