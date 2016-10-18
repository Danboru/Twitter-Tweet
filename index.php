<!DOCUMENT>
<html lang="en">
 <head>
 
  <title>Twikker</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/style.css"> 
  <link rel="icon" type="image/png" href="images/twikker.png">


  <!-- External JS -->
  <script src="js/input_handler.js"></script>

 
 </head>
 <body>
 
<!--
<div id="auto_load_div"></div>
<div></div>
 
   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script>
      function auto_load(){
        $.ajax({
          url: "data.php",
          cache: false,
          success: function(data){

             $("#auto_load_div").html(data);
          } 
        });
      }
 
      $(document).ready(function(){
 
        auto_load(); //Call auto_load() function when DOM is Ready
 
      });
 
      //Refresh auto_load() function after 10000 milliseconds
      setInterval(auto_load,2000);

   </script>
   -->

   <nav class="navbar navbar-default" style="background-color: #1DA1F2;>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color: #fff">Twikker</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#" style="color: #fff">Wall<span class="sr-only">(current)</span></a></li>
        <li><a href="#" style="color: #fff">Profile</a></li>
      </ul>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Cari Teman Kamu">
        </div>
        <button type="submit" class="btn btn-default">Cari</button>
      </form>

      <ul class="nav navbar-nav navbar-right">
    
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;">Akun <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Iklan</a></li>
            <li><a href="#">Setting</a></li>
            <li><a href="#">Privacy</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Keluar</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


   <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
     
     <div class="container box">  
                <form name="add_tweet" method="post">  
                     <h1 align="center">Twikker Page</h1>
                     <h4 align="center">Connecting Jomblo</h4>  
                     <div class="form-group">  
                          <textarea name="tweet" id="tweet" class="form-control" rows="3" placeholder="Apa yang ada di Dompetmu ?"></textarea>  
                     </div>  
                     <div class="form-group" align="right">  
                          <input type="button" name="btn_tweet" id="btn_tweet" value="Sebarkan" class="btn btn-info" />  
                     </div>  
                </form>  
                <br />  
                <br />  
                <div id="load_tweets"></div>  
                <!-- Refresh this Div content every second!-->  
                <!-- For Refresh Div content every second  
                          we use setInterval() !-->  
           </div>  

   </div>
   
 </body>
</html>