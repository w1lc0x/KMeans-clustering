var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res){
  res.render('index.html', {
    title: 'Home'
  });
});

/*get the pages*/
	router.get('/contact', function(req, res){
  res.render('contact.html', {
    title: 'Contact'
  });
});


router.get('/blog', function(req, res){
  res.render('blog.php', {
    title: 'Blog'
  });
});


router.get('/about', function(req, res){
  res.render('about.html', {
    title: 'About'
  });
});


router.get('/forum', function(req, res){
  res.render('forum,html', {
    title: 'Forum'
  });
});

  router.get('/news', function(req, res){
  res.render('news.php', {
    title: 'News'
  });
});


module.exports = router;
