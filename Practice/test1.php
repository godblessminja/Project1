<!DOCTYPE html>  
<html>
    <head> 
        <!-- NOTE:  jQUery needs to be the first to be referenced to -->
        <script type="text/javascript" src="../jquery/jquery-1.11.0.min.js"></script> 
        <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.min.js"></script> 
        <title> Test 1 </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <!-- Bootstrap -->  
        <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">  
        <link href="../bootstrap/dist/css/custom.css" rel="stylesheet" media="screen">  
       
        

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->  
        <!--[if lt IE 9]>  
          <script type="text/javascript" src="../bootstrap/assets/js/html5shiv.js"></script>
          <script type="text/javascript" src="../bootstrap/assets/js/respond.min.js"></script>       
        <![endif]-->  
    </head>
    <body>
        <div id="fb-root"></div> 
        <script>
           (function(d, s, id) 
            {  
             var js, fjs = d.getElementsByTagName(s)[0];  
             if (d.getElementById(id)) return;  
             js = d.createElement(s); js.id = id;  
             js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";  
             fjs.parentNode.insertBefore(js, fjs);  
           }(document, 'script', 'facebook-jssdk'));
       
        </script>
         <!-- the navigation bar  -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">  
            <ul class="nav navbar-nav">  
                <li>
                    <a href="test1.php" class="navbar-brand">
                    <img src="../Computers/logo.png"></a>
                </li>  
                <li class="active"><a href="test1.php">Home</a></li>  
                <li><a href="price1.php">Price</a></li>  
                <li><a href="contact1.php">Contact</a></li>  
                <li class="dropdown">  
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social<b class="caret"></b></a>  
                      <ul class="dropdown-menu">  
                        <li class="socials"><g:plusone annotation="inline" width="150"></g:plusone></li>  
                        <li class="socials"><div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" 
                                                 data-width="The pixel width of the plugin" data-height="The pixel height 
                                                 of the plugin" data-colorscheme="light" data-layout="standard" 
                                                 data-action="like" data-show-faces="true" data-send="false"></div>
                        </li>  
                        <li class="socials"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>  
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id))
                                {js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";
                                 fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                            </script>
                        </li>  
                      </ul>  
                </li>  
            </ul>  
        </nav> 
        <!-- the slide show     data-ride="carousel" - makes the slide show images to slide-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                  <img src="../Computers/img1.jpg"   alt="...">  
                <div class="carousel-caption">
                  <h1>Large Desktops are everywhere</h1>
                  <p><button class="btn btn-success btn-lg">Try 30 day trial now</button></p>
                </div>
              </div>
              <div class="item">
                  <img src="../Computers/img2.jpg"    alt="...">
                <div class="carousel-caption">
                  <h1>Mobiles are outnumbering desktops</h1>
                  <p><button class="btn btn-success btn-lg">Try 30 day trial now</button></p>
                </div>
              </div>
                <div class="item">
                    <img src="../Computers/img3.jpg"  alt="...">  
                    <div class="carousel-caption">
                      <h1>Enterprises are adopting Cloud computing fast</h1>
                      <a href="#"><p><button class="btn btn-success btn-lg">Try 30 day trial now</button></p></a>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <!-- The Grid System -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2>Frontend</h2>
                    <p>Below the slideshow, we have placed our content using grids. We opened the grid with a div with 'container' class. Note that we are going to develop a responsive website and unlike previous versions of Bootstrap, here, we have single class for container and the is responsive by default.</p>
                    <p></p>
                </div>
                 <div class="col-lg-4">
                    <h2>Serverside</h2>
                    <p>Below the slideshow, we have placed our content using grids. We opened the grid with a div with 'container' class. Note that we are going to develop a responsive website and unlike previous versions of Bootstrap, here, we have single class for container and the is responsive by default.</p>
                </div>
                   <div class="col-lg-4">
                    <h2>Databases</h2>
                    <p>Below the slideshow, we have placed our content using grids. We opened the grid with a div with 'container' class. Note that we are going to develop a responsive website and unlike previous versions of Bootstrap, here, we have single class for container and the is responsive by default.</p>
                </div>
             </div>
            <div class="row barone">
                <div class="col-lg-2">
                <p><img src="../Computers/w3resourcelogo.gif"></p>  
                </div>
                <div class="col-lg-2">
                <p><img src="../Computers/php.png"></p>  
                </div>
                <div class="col-lg-2">
                <p><img src="../Computers/mysql-logo.jpg"></p>
                </div>
                <div class="col-lg-2">
               <p><img src="../Computers/javascript-logo.png"></p>  
                </div>
                <div class="col-lg-2">
                <p><img src="../Computers/java.png"></p> 
                </div>
                <div class="col-lg-2">
                 <p><img src="../Computers/postgresql.png"></p>
                </div>
            </div>
            <hr>
             <p style="text-align: center">
                Copyright@2013- <?php echo date("Y"); ?> by Minja1 App.
                 
            </p>
        </div>
        <script>
            (function() {  
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;  
                po.src = 'https://apis.google.com/js/plusone.js';  
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);  
              })();  
        </script>
    </body>    
</html>


