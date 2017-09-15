<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

  <!-- jQuery library -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="js/jquery.min.js"></script> 

  <!-- Latest compiled JavaScript -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/bootstrap.js"></script>
  
</head>
<body>
  <header role="banner" class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <div class="col-xs-2" style="position: relative; top: 50%; transform: translateY(12%);">
          <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="col-xs-8 text-center">
          <a href="index.php">
            <img src="img/pruine_logo_fix.png" alt="PRUINE" class="text-center logo">
          </a>
        </div>
      </div>
      <div class="navbar-inverse side-collapse in">
        <nav role="navigation" class="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#users">Users</a></li>
            <li><a href="http://placesforlove.com">Places</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div class="container side-collapse-container">
    <div class="row header-talent">
      <img src="img/user_profile_female.jpg" alt="" class="list-photo img-circle">
      <div class="header-talent-content">
        <h1 class="text-center">Irene Paulina</h1>
        <p class="price text-center">Rp 300.000,-</p>
        <a href="booking.php"><button class="btn btn-lg btn-success col-xs-8 col-xs-offset-2">BOOK NOW!</button></a>
        <div class="clearfix"></div>
        <p class="details text-center">Irene is a MUA based in Surabaya. Currently she is studying in Universitas Ciputra. She acquired her skills in MUA after she enrolled in the school of makeup by Ms Abc which is located in Surabaya.</p>
      </div>
    </div>
    <div class="row list-content">
      <div class="col-xs-10 col-xs-offset-1 panel-group portofolio">
      <h2 class="text-center">Portofolio</h2>
        <div class="panel-sub">
          <a href="mua.php" class="panel porto">
            <img src="img/user_profile_female.jpg" alt="" class="img-thumbnail">
            <!-- <div class="col-xs-12">
              <p class="nama text-center">Irene Paulina</p>
              <p class="harga text-center">Rp 300.000,-</p>
            </div> -->
          </a>
          <a href="mua.php" class="panel porto">
            <img src="img/user_profile_female.jpg" alt="" class="img-thumbnail">
            <!-- <div class="col-xs-12">
              <p class="nama text-center">Regina Martha</p>
              <p class="harga text-center">Rp 400.000,-</p>
            </div> -->
          </a>
        </div>
        <div class="panel-sub">
          <a href="mua.php" class="panel porto">
            <img src="img/user_profile_female.jpg" alt="" class="img-thumbnail">
            <!-- <div class="col-xs-12">
              <p class="nama text-center">Jessica Silviana</p>
              <p class="harga text-center">Rp 350.000,-</p>
            </div> -->
          </a>
          <a href="mua.php" class="panel porto">
            <img src="img/user_profile_female.jpg" alt="" class="img-thumbnail">
            <!-- <div class="col-xs-12">
              <p class="nama text-center">Hans Christian</p>
              <p class="harga text-center">Rp 400.000,-</p>
            </div> -->
          </a>
        </div>
      </div>
    </div>
    <div class="row text-center join">
      <p>MUA or Photographer?</p>
      <div class="joinButton"><button class="btn btn-lg">Join Us!</button></div>
    </div>
  </div>

  <script>
    $(document).ready(function() {   
      var sideslider = $('[data-toggle=collapse-side]');
      var sel = sideslider.attr('data-target');
      var sel2 = sideslider.attr('data-target-2');
      sideslider.click(function(event){
        $(sel).toggleClass('in');
        $(sel2).toggleClass('out');
      });
    });
  </script>
</body>
</html>