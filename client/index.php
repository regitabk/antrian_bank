
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Client : Queue</title>
	    <link href="../dashboard.css" rel="stylesheet">
	    <link href="../css/bootstrap.min.css" rel="stylesheet">
	    <link href="/assert/css/jumbotron-narrow.css" rel="stylesheet">
	    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
  	<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Antrian Bank</a>



    </nav>

<div class="card text-center">
  <div class="card-header">
    Antrian Bank
  </div>
  <div class="card-body">
    <h4 class="card-title">Client Antrian</h4>
    <h4 class="card-title">CUSTOMER SERVICE</h4>


    <div class="container">
        
        <div class="jumbotron">
        <h1 class="counter">
        	<?php
			 $location_counter = "data.txt";
			 $location_date = "date.txt";
			 $itis = date ("d");
			 
			$aday = join('', file($location_date));
			trim($aday);
		
			if("$aday"=="$itis"){

				$tcounter = join('', file($location_counter));
				trim($tcounter);
				$tcounter++;
				
				$fp = fopen($location_counter,"w");
				fputs($fp, $tcounter);
				fclose($fp);
			}else{

				$fp = fopen($location_counter,"w");
				fputs($fp, 0);
				fclose($fp);
				$tcounter = join('', file($location_counter));
				trim($tcounter);
				$tcounter++;

				$fp = fopen($location_counter,"w");
				fputs($fp, $tcounter);
				fclose($fp);

				$fp = fopen($location_date,"w");
				fputs($fp, $itis);
				fclose($fp);	
			}

			$panjang=strlen($tcounter);
			$antrian=$tcounter;
			
			for($i=0;$i<$panjang;$i++){
		?>
        		 		        
        <?php
			}
		?>
		
      
        <div class="kontainer">
          <div align="center"><a ><?php echo $antrian; ?></a></div>
        </div>
        
        </h1>
        <p>
	         <p>
	        
	        	Nomor Antrian Anda 
	        
        </p>
        </p>
      	</div>
    	<form>
        	<footer class="footer">
        <p> <a class="btn btn-lg btn-primary next_queue" href="#" role="button"><?php
        date_default_timezone_set('Asia/Jakarta');
         echo date("Y-m-d H:i:s");?></a></p>
      	</footer>

        	

			<p>Silakan Screen Shoot No Antrian Anda</p>

        	<br/>
       
    	</form>
      	
    </div>
</div>
</div>
</main>
  	</body>
  	
</html>

