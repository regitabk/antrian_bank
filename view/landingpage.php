<?php 
  session_start();
  if (!isset($_SESSION["loket_client"])) 
  {
    $_SESSION["loket_client"] = 0;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>antrian bank punten</title>
        <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dashboard.css" rel="stylesheet">
    
  </head>
  
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">antrian bank punten</a>



    </nav>
    

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
<div class="list-group panel">

<a href="landingpage.php" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-dashboard"></i> <span class="hidden-sm-down">Beranda</span></a>

                <a href="#menu1" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="fa fa-credit-card-alt"></i> <span class="hidden-sm-down">Buka Rekening</span> </a>
                <div class="collapse" id="menu1">
                    <a href="tabungan.php" class="list-group-item"><i class="fa fa-credit-card"></i> <span class="hidden-sm-down">pank punten plus </a>
                    
                    <a href="#" class="list-group-item" data-parent="#menu1"><i class="fa fa-credit-card"></i> <span class="hidden-sm-down">bank punten</a>
                    <a href="#" class="list-group-item" data-parent="#menu1"><i class="fa fa-credit-card"></i> <span class="hidden-sm-down">bank punten OK</a>
                </div>
                <a href="layanan.php" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-lock"></i> <span class="hidden-sm-down">Layanan</span></a>

                <a href="../admin/admin.php" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-plus"></i> <span class="hidden-sm-down">Tambah Loket</span></a>
                
                
                 <a href="index.php" class="list-group-item collapsed" data-parent="#sidebar"><i class="fa fa-user-circle-o"></i> <span class="hidden-sm-down">Keluar</span></a>
            </div>


        </nav>

<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">


<div class="card text-center">
  <div class="card-header">
    bank punten
  </div>
  <div class="card-body">
    <h4 class="card-title">PILIH</h4>


<div class="row loket">
        </div>

    <script type="text/javascript">
  $("document").ready(function(){
    var tmp_loket=0;
    setInterval(function() {
      $.post("../apps/monitoring-daemon.php", function( data ){
        if(tmp_loket!=data['jumlah_loket']){
          $(".col-md-3").remove();
          tmp_loket=0;
        }
        if (tmp_loket==0) {
          for (var i = 1; i<= data['jumlah_loket']; i++) {
            loket = '<div class="col-md-6">'+
                  '<center><div class="'+ i +
                   ' jumbotron" style="padding-top:20px;padding-bottom:20px;">'+
                    '<h1> '+data["init_counter"][i]+' </h1>'+
                    '<button class="btn btn-light btn-lg" type="button"><span class="fa fa-university">&nbsp;</span>LOKET '+ i +'</button>'+
                  '</div>'+
                '</div>';
            $(".loket").append(loket);
          }

          tmp_loket = data['jumlah_loket'];
        }
        for (var i = 1; i <= data['jumlah_loket']; i++) {           
          if (data["counter"]==i) {
            $("."+i+" h1").html(data["next"]);
          }
        }
        if (data["next"]) {
          var angka = data["next"];
          for (var i = 0 ; i < angka.toString().length; i++) 
          mulai(data["next"],data["counter"]);
        }else{
          for (var i = 1; i <= data['jumlah_loket']; i++) {           
            if (data["counter"]==i) {
              $("."+i+" h1").html(data["next"]);
            }
          }
        };

      }, "json"); 
    }, 1000);
    //change
  });
  
  
  </script>
<center><div class="container">
<div class="row">
  <div class="col-md-6">
    <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h4 class="card-title">CS</h4>
          <a href="../client/index.php" class="btn btn-primary">Klik disini</a>
        </div>
      </div>
    </div>

<div class="col-md-6">
    <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h4 class="card-title">TELLER</h4>
          <a href="../admin/index.php" class="btn btn-primary">Klik disini</a>
        </div>
      </div>
    </div> 

</div>  
</div>
</center>

<br>

</div>
  <div class="card-footer text-muted">
   Copyright <i class="fa fa-copyright" aria-hidden="true"></i> bank punten 2020 UAD
  </div>
</div>
</main>


  </body>
</html>
