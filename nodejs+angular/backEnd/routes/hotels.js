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
          res.send(response);
          conn.end()
          .then(() => {
            console.log("closed connection mariadb");
            next()
          })
          .catch(err => {
            console.log("error connected whit connection id is " + err);
          })
        });
      })
      .catch(err => {
        res.send("not connected due to error: " + err);
        console.log("not connected due to error: " + err);
        conn.end()
        .then(() => {
          console.log("closed connection mariadb");
        })
        .catch(err => {
          console.log("error connected whit connection id is " + err);
        })
      });
});

router.post('/filtro/:filter', function(req, res, next) {
  try {
    if (!req.body.data) {
      res.status(500).send('Es necesario enviar los parametros en una variable con en nombre data');
      next()
    }
    mariadb.createConnection({
          host: 'localhost',
          user:'hotel',
          password: 'hotel',
          database: 'hotel'
        })
        .then(conn => {
          console.log("connected ! connection id is " + conn.threadId);
            if (req.params.filter == 'nombre') {
              conn.query('SELECT * FROM hotels WHERE name LIKE "%' + req.body.data +'%"')
              .then(response => {
                res.send(response);
                conn.end()
                .then(() => {
                  console.log("closed connection mariadb");
                  next()
                })
                .catch(err => {
                  console.log("error connected whit connection id is " + err);
                })
              });
            } else {
              res.status(400).send('filtro ' + req.params.filter +' aún no es soportado');
            }
        })
        .catch(err => {
          res.send("not connected due to error: " + err);
          console.log("not connected due to error: " + err);
          conn.end()
          .then(() => {
            console.log("closed connection mariadb");
            next()
          })
          .catch(err => {
            console.log("error connected whit connection id is " + err);
          })
        });
  } catch (e) {

  }

});

module.exports = router;
