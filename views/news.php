<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A construction company with the best team of engineers, contractors, project manager to suit your needs">
    <meta name="keyword" content="construction,contractors,contractor,project manager ">
    <meta name="author" content="wilcox">

    <title>Aggrey Consultants</title>

        <!-- Bootstrap Core CSS -->
    <link href="/stylesheets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/stylesheets/business-casual.css" rel="stylesheet">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div class="brand">Aggrey Consultants</div>
    <div class="address-bar"> Nandi Arcade | Eldoret 00100 - 30200 </div>
    <!-- Navigation -->
    <nav class="navbar navbar-default " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="/">Aggrey Consultants</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/blog">Blog</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">News
                        <strong></strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="https://images.pexels.com/photos/209266/pexels-photo-209266.jpeg?h=350&auto=compress&cs=tinysrgb" alt="">
                    <h2>NCA to Develop New Industry Policy
                        <br>
                        <small>May 13, 2017</small>
                    </h2>
                    <p>The National Construction Authority (NCA) has announced commissioning of a research seeking to establish the capacity of Kenyan contractors, standardize construction materials and technology used in the industry. The research which will be a key output during this year's Annual Construction Research Conference and Exhibition (ACoRCE) will bring together the region's regulators who have adopted construction policies, manufacturers with new technologies adaptable for local industries and development partners.

                     </p>
                    <a href="https://www.standardmedia.co.ke/business/article/2000216102/national-construction-authority-to-develop-new-industry-policy"class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
<?php
$html=file_get_contents("https://newsapi.org/v2/everything?q=construction-companies&language=en&apiKey=ea0b1f5d660a4388811dc6b2612ea117");
$newsarray=json_decode($html,true);
$sources = $newsarray['articles'];


for ($i=0; $i < count($sources); $i++) { 
    $site = $newsarray ['articles'][$i];
    //echo $i;
    echo'<img width="100%" class="img-responsive img-border img-full" src="'.$site['urlToImage'].'">';
    echo'<br>';
    echo '<h3>'.$site['title'].'</h3>';
    echo'<br>';
    echo'<br>';
    echo $site['author'];
    echo'<br>';
    echo'<br>';
    echo '<p>'.$site['description'].'</p>';
    echo'<br>';
    echo'<br>';
    //echo $site['url'];
    echo'<a class="btn-default btn-lg" href="'.$site['url'].'">read more</a> ';
    echo'<br>';
    echo'<br>';
    //echo $site['urlToImage'];
    echo'<img alt="https://images.pexels.com/photos/8092/pexels-photo.jpg?h=350&auto=compress&cs=tinysrgb" width="100%" class="img-responsive img-border img-full" src="'.$site['urlToImage'].'">';
    echo'<br>';
    echo'<hr>';
}

?>

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="http://www.the-star.co.ke/sites/default/files/styles/new_full_content/public/1573050.jpg?itok=eyCLBE2A" alt="">
                    <h2>Standard Gauge Railway
                        <br>
                        <small>June 12, 2017</small>
                    </h2>
                    <p>The SGR, in one genius masterstroke, connects two of the most popular spots – the Kenyan Coast and Maasai Mara – to Kisumu. A journey from Mombasa to Kisumu, through Narok would take only 10 hours. Tourism planners say a daylong trip from the sandy beaches in Mombasa through the beautiful Tsavo, Nairobi National Park, and the breathtaking Rift Valley to the cool and refreshing Lake Victoria beach would be a must do for all tourists.</p>
                    <a href="http://www.the-star.co.ke/news/2017/06/12/it-beats-logic-to-oppose-sgr_c1577104" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="/news.php">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Aggrey Contractors</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
