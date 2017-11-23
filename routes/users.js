var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});

/*get the pages*/
	router.get('/contact', function(req, res){
  res.render('contact', {
    title: 'Contact'
  });
});


router.get('/blog', function(req, res){
  res.render('blog', {
    title: 'Blog'
  });
});

router.get('/', function(req, res){
  res.render('index', {
    title: 'Home'
  });
});

router.get('/about', function(req, res){
  res.render('about', {
    title: 'About'
  });
});


router.get('/forum', function(req, res){
  res.render('forum', {
    title: 'Forum'
  });
});


module.exports = router;
