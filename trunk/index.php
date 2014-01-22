<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lorem ipsum dolor</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <h1>i3-Studio</h1>
            </div>
            <ul class="nav nav-pills pull-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
            <div class="clearfix"></div>
        </header>
        
    </div>
        
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php for ($i = 1; $i <= 5; ++$i):?>
            <div class="item <?php if ($i==1) echo 'active'?>">
                <img src="img/slides/istock-<?php echo $i?>.jpg" >
                <div class="carousel-caption"></div>
            </div>
            <?php endfor;?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> 
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a> 
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> 
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
        
    <div class="container">
        <!-- Features -->
        <div class="content-block">
            <div class="well well-md">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aliquid atque doloribus nemo fuga qui accusantium velit maiores obcaecati laudantium voluptas deleniti id architecto assumenda culpa earum quae nesciunt facilis.</p>
            </div>
            <div class="row features">
                <div class="col-md-4">
                    <div class="block">
                        <div class="text-center"><img data-src="holder.js/150x150" alt="" class="img-thumbnail"/></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate a libero quibusdam nemo sed doloremque nulla deserunt iusto. Autem dolorem debitis perspiciatis a harum animi totam quod delectus accusantium vel.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="text-center"><img data-src="holder.js/150x150" alt="" class="img-thumbnail"/></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate a libero quibusdam nemo sed doloremque nulla deserunt iusto. Autem dolorem debitis perspiciatis a harum animi totam quod delectus accusantium vel.</p>            
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="text-center"><img data-src="holder.js/150x150" alt="" class="img-thumbnail"/></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate a libero quibusdam nemo sed doloremque nulla deserunt iusto. Autem dolorem debitis perspiciatis a harum animi totam quod delectus accusantium vel.</p>
                    </div>
                </div>
            </div>
        </div> <!-- ./ Features -->
    </div>
    
    <div class="cover-1">
        <div class="container">
            <!-- Product -->
            <div class="products content-block">
                <div class="row">
                    <div class="col-md-4">
                        <img data-src="holder.js/250x250" alt="" class="img-thumbnail"/>
                    </div>
                    <div class="col-md-8 caption">
                        <h2 class="title">Lorem ipsum dolor</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum iste minus eligendi nobis mollitia reiciendis ipsam iure inventore deserunt similique? Maiores modi voluptatum error dicta distinctio expedita vel illo quisquam?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 caption">
                        <h2 class="title">Lorem ipsum dolor</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum iste minus eligendi nobis mollitia reiciendis ipsam iure inventore deserunt similique? Maiores modi voluptatum error dicta distinctio expedita vel illo quisquam?</p>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center"><img data-src="holder.js/250x250" alt="" class="img-thumbnail"/></div>
                    </div>
                </div>
                <div class="row third">
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum iste minus eligendi nobis mollitia reiciendis ipsam iure inventore deserunt similique? Maiores modi voluptatum error dicta distinctio expedita vel illo quisquam?</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <img data-src="holder.js/300x350" class="img-thumbnail">
                    </div>
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum iste minus eligendi nobis mollitia reiciendis ipsam iure inventore deserunt similique? Maiores modi voluptatum error dicta distinctio expedita vel illo quisquam?</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Lorem ipsum dolor sit amet</li>
                        </ul>
                    </div>
                </div>
            </div><!-- ./ Products -->
        </div>
    </div>
    
    
    <div class="cover-2">
        <div class="container">
            <!-- Contact -->
            <div class="contact">
                <div class="intro">
                    <h2 class="title">Lorem ipsum dolor ?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Aut ex error esse aliquid debitis saepe impedit iure officia.</p>
                </div>
                <button class="btn btn-success">Contact</button>
            </div><!-- ./Contact -->
        </div>
    </div>
        
    <div class="cover-3">
        <div class="container">
            <!-- Footer -->
            <footer>
                <div class="text-center">
                    <ul class="list-inline links">
                        <li><a href=""><img src="" alt="" data-src="holder.js/64x64/#a3e1a9:#82b487" class="img-thumbnail"/></a></li>
                        <li><a href=""><img src="" alt="" data-src="holder.js/64x64/#a3e1a9:#82b487" class="img-thumbnail"/></a></li>
                        <li><a href=""><img src="" alt="" data-src="holder.js/64x64/#a3e1a9:#82b487" class="img-thumbnail"/></a></li>
                        <li><a href=""><img src="" alt="" data-src="holder.js/64x64/#a3e1a9:#82b487" class="img-thumbnail"/></a></li>
                    </ul>
                </div>
            </footer><!-- ./Footer -->
        </div>
    </div>
    
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/custom.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 10]>
        <script src="js/html5shiv.js"></script>
        <script src="http://webdet.dev/js/placeholder.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('input, textarea').placeholder();
            });
        </script>
    <![endif]-->
</body>
</html>