var express = require('express');
var router = express.Router();
const mariadb = require('mariadb');


/* GET users listing. */
router.get('/', function(req, res, next) {
  mariadb.createConnection({
        host: 'localhost',
        user:'hotel',
        password: 'hotel',
        database: 'hotel'
      })
      .then(conn => {
        console.log("connected ! connection id is " + conn.threadId);
        conn.query('select * from hotels')
        .then(response => {
          console.log(response);
          res.send(response);
        });
      })
      .catch(err => {
        res.send("not connected due to error: " + err);
        console.log("not connected due to error: " + err);
      });
});

module.exports = router;
