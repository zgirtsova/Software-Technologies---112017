// app.js
var express = require("express")
var hbs = require("hbs")
hbs.registerHelper("checkif", require("handlebars-helper-checkif"))
var app = express()
app.set("view engine", "hbs")
// etc...

// someView.hbs
<input name="status" type="radio" value="Open" {{checkif status 'Open'}}>

// rendered html
<input name="status" type="radio" value="Open" checked>