<!DOCTYPE html>  
<html>
    <head> 
        <!-- NOTE:  jQUery needs to be the first to be referenced to -->
        <script type="text/javascript" src="../jquery/jquery-1.11.0.min.js"></script> 
        <title> Test 1 </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <!-- Bootstrap -->  
        <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">  
        <link href="../bootstrap/dist/css/custom.css" rel="stylesheet" media="screen">  
        <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.min.js"></script> 
        

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->  
        <!--[if lt IE 9]>  
          <script type="text/javascript" src="../bootstrap/assets/js/html5shiv.js"></script>
          <script type="text/javascript" src="../bootstrap/assets/js/respond.min.js"></script>       
        <![endif]--> 
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script>
              function initialize() {
                var map_canvas = document.getElementById('map_canvas');
                var map_options = {
                  center: new google.maps.LatLng(-6.8147801, 39.28805349999993),
                  zoom: 8,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(map_canvas, map_options)
              }
              google.maps.event.addDomListener(window, 'load', initialize);
         </script>
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
                <li><a href="test1.php">Home</a></li>  
                <li><a href="price1.php">Price</a></li>  
                <li class="active"><a href="contact1.php">Contact</a></li> 
                <li class="dropdown">  
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social<b class="caret"></b></a>  
                      <ul class="dropdown-menu">  
                        <li class="socials"><g:plusone annotation="inline" width="150"></g:plusone></li>  
                        <li class="socials"><div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" 
                                                 data-width="The pixel width of the plugin" data-height="The pixel height 
                                                 of the plugin" data-colorscheme="light" data-layout="standard" 
                                                 data-action="like" data-show-faces="true" data-send="false"></div></li>  
                        <li class="socials"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>  
                         <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id))
                             {js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";
                              fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>  
                      </ul>  
                </li>  
            </ul>  
        </nav> 
        
        <div class="container">
            <h1>Mail us, call us or reach us in person</h1>
            <div class="row">
                <div class="col-lg-4">
                    <form class="form-horizontal" role="form" method="POST" action="contactProcess1.php">
                        <div class="form-group">
                          <label for="email" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                              <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="name" class="col-lg-2 control-label">Name</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="country" class="col-lg-2 control-label">Country</label>
                          <div class="col-lg-10">
                            <select>
                            <option>--Select your country--</option>
                            <option>Tanzania</option>
                            <option>Kenya</option>
                            <option>Uganda</option>
                            <option>Rwanda</option>
                            <option>Burundi</option>
                            <option>USA</option>
                            <option>India</option>
                            <option>UK</option>
                            <option>Australia</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="desc" class="col-lg-2 control-label">Message</label>
                          <div class="col-lg-10">
                            <textarea rows="5" cols="34" placeholder="Type your message here."></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <p>The University of Dar es Salaam offers Bachelors, Masters, and 
                        Doctoral degrees, as well as Certification Programmes, to 
                        students from Tanzania and throughout the world . Our Programmes 
                        will enable you to rise to the top of your chosen profession.                        
                    </p>
                    <p>Phone No: 1234567890</p>
                </div>
                <div class="col-lg-4">
                    <div id="map_canvas"></div>
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