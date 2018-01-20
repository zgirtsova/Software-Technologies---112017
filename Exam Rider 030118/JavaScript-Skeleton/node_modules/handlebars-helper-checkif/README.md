# handlebars-helper-checkif

A Handlebars helper for selecting an option in a radio button group, based on an equality check

Idea and template is from [this helper module](https://github.com/zeke/handlebars-helper-equal)

## Installation

Download node at [nodejs.org](http://nodejs.org) and install it, if you haven't already.

```sh
npm install handlebars-helper-checkif --save
```

## Usage

In your JavaScript file:

`app.js`
```
var express = require("express")
var hbs = require("hbs")
hbs.registerHelper("equal", require("handlebars-helper-checkif"))
var app = express()
app.set("view engine", "hbs")
// etc...
```

In your Handlebars template:

`someView.hbs`
```
<input name="status" type="radio" value="Open" {{checkif status 'Open'}}>
```
Rendered HTML:
```
<input name="status" type="radio" value="Open" checked>
```
