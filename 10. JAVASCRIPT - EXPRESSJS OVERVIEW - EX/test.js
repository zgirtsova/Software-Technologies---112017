const express = require('express');
const app = express();
const bodyParser = require('body-parser');

app.use(bodyParser.json());

app.get('/login', (req, res) =>
    res.send(`
    <form method="post">
    Login: <input type="text" name="data[username]" />
    <br>
    Password: <input type="password" name="data[passwd]" />
    <br>
    <input type="submit" />
    </form>    
    `)
);

app.post('/login', (req, res) =>
        console.log(req.body)
);

app.get('/users', (req, res) =>
    res.send('<h1>Users</h1><p>The users are:<ul><li>pesho</li><li>gosho</li></ul></p>')
);

app.listen(3000, () =>
    console.log('Example app listening on port 3000!')
);





