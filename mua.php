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
          <ul class="list-inline panel-sub">
            <li data-toggle="modal" data-target="#myModal" class="porto"><a href="#myGallery" data-slide-to="0"><img class="img-thumbnail" src="talents/MUA/mua_alexismua/1.jpg"></a></li>
            <li data-toggle="modal" data-target="#myModal" class="porto"><a href="#myGallery" data-slide-to="1"><img class="img-thumbnail" src="talents/MUA/mua_alexismua/2.jpg"></a></li>
            <li data-toggle="modal" data-target="#myModal" class="porto"><a href="#myGallery" data-slide-to="2"><img class="img-thumbnail" src="talents/MUA/mua_alexismua/3.jpg"></a></li>
            <li data-toggle="modal" data-target="#myModal" class="porto"><a href="#myGallery" data-slide-to="3"><img class="img-thumbnail" src="talents/MUA/mua_alexismua/4.jpg"></a></li>
            <!--end of thumbnails-->
          </ul>
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


    <!--begin modal window-->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="pull-left">My Gallery Title</div>
            <button type="button" class="close" data-dismiss="modal" title="Close"> <span class="glyphicon glyphicon-remove"></span></button>
          </div>
          <div class="modal-body">

            <!--CAROUSEL CODE GOES HERE-->
            <!--begin carousel-->
            <div id="myGallery" class="carousel slide" data-interval="false">
              <div class="carousel-inner">
                <div class="item active"> <img src="talents/MUA/mua_alexismua/1.jpg" alt="item0"></div>
                <div class="item"> <img src="talents/MUA/mua_alexismua/2.jpg" alt="item1"></div>
                <div class="item"> <img src="talents/MUA/mua_alexismua/3.jpg" alt="item2"></div>
                <div class="item"> <img src="talents/MUA/mua_alexismua/4.jpg" alt="item3"></div>
                <!--end carousel-inner--></div>
                <!--Begin Previous and Next buttons-->
                <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                <!--end carousel--></div>
                <!--end modal-body--></div>
                <div class="modal-footer">
                  <div class="pull-left">
                    <small>Photographs by <a href="https://placeimg.com" target="new">placeimg.com</a></small>
                  </div>
                  <button class="btn-sm close" type="button" data-dismiss="modal">Close</button>
                  <!--end modal-footer--></div>
                  <!--end modal-content--></div>
                  <!--end modal-dialoge--></div>
                  <!--end myModal-->></div>
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