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
                <li class="active"><a href="price1.php">Price</a></li>  
                <li><a href="contact1.php">Contact</a></li>  
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
            <h1>Competitive. For individual to enterprise.</h1>
              <div class="row">
               <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Features</th>
                                <th>Individual</th>
                                <th>Small Team</th>
                                <th>Medium Team</th>
                                <th>Enterprise</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td><h3>No. Of users</h3></td>
                                  <td><span class="badge">One</span></td>
                                  <td><span class="badge">Five</span></td>
                                  <td><span class="badge">Fifteen</span></td>
                                  <td><span class="badge">Unlimited</span></td>
                               </tr>
                                <tr>
                                  <td><h3>Pro training</h3></td>
                                  <td><span class="badge">No</span></td>
                                  <td><span class="badge">Yes</span></td>
                                  <td><span class="badge">Yes</span></td>
                                  <td><span class="badge">Yes</span></td>
                               </tr>
                                <tr>
                                  <td><h3>Forum Support</h3></td>
                                  <td><span class="badge">Yes</span></td>
                                  <td><span class="badge">Yes</span></td>
                                  <td><span class="badge">Yes</span></td>
                                  <td><span class="badge">Yes</span></td>
                               </tr>
                                <tr>
                                    <td><h3>In person support</h3></td>
                                    <td><span class="badge">No</span></td>
                                    <td><span class="badge">No</span></td>
                                    <td><span class="badge">Yes</span></td>
                                    <td><span class="badge">Yes</span></td>
                                </tr>
                                <tr>
                                   <td><h3>Weekly webinars</h3></td>
                                   <td><span class="badge">No</span></td>
                                   <td><span class="badge">No</span></td>
                                   <td><span class="badge">Yes</span></td>
                                   <td><span class="badge">Yes</span></td>
                                </tr>
                                 <tr>
                                   <td><h3>Price</h3></td>
                                   <td><button type="button" class="btn btn-warning btn-lg">$9/Month</button></td>
                                   <td><button type="button" class="btn btn-warning btn-lg">$19/Month</button></td>
                                   <td><button type="button" class="btn btn-warning btn-lg">$49/Month</button></td>
                                   <td><button type="button" class="btn btn-warning btn-lg">$99/Month</button></td>
                                </tr>
                                 <tr>
                                   <td></td>
                                   <td><button type="button" class="btn btn-success btn-lg">Buy now</button></td>
                                   <td><button type="button" class="btn btn-success btn-lg"">Buy now</button></td>
                                   <td><button type="button" class="btn btn-success btn-lg"">Buy now</button></td>
                                   <td><button type="button" class="btn btn-success btn-lg"">Buy now</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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