const mongoose = require('mongoose');

let filmSchema = mongoose.Schema({
    //TODO: Implement me ...
});

let Film = mongoose.model('Film', filmSchema);

module.exports = Film;