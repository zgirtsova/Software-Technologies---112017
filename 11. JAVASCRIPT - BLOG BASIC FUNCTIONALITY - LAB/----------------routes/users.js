var express = require('express');
var router = express.Router();

/* GET user listing. */
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});

router.get('/login', function(req, res, next) {
    res.render('user/login');
});

router.get('/register', function(req, res, next) {
    res.render('user/register');
});

module.exports = router;
