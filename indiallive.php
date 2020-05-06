<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- link file CSS -->
    <link rel="stylesheet" href="css/home.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>COVID-19</title>
</head>


<body>
    <!-- navbar start -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light nav_style  p-2">
            <a class="navbar-brand pl-4" href="#">COVID-19</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto pr-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Home <a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"> <i class="fas fa-user-nurse"></i>symptom</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="indiallive"> Statistics <span class="sr-only">(current)</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="helpline.html"><i class="fas fa-phone-alt"></i>Helpline </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="f&q.html"> <i class="fa fa-question-circle " aria-hidden="true "></i>FAQ </a>
                    </li>
                </ul>



            </div>
        </nav>
    </div>
	<!-- india live -->

	      <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">Covid-19 Tracker</h1>
        <h5 class="text-muted"> all the COVID-19 cases around the indian state & <a href="index.php">world</a>  .</h5>
    </div>
	
<?php


$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);


 //echo "<pre>";

//print_r($coranalive);

//echo "</pre>";

$statescount = count($coranalive['statewise']);


$i=0;
if ($i < $statescount){
	?>
	 <div class="container my-5">
	 <div class="row text-center">
	           <div class="col-4 text-warning">
                <h5>Confirmed</h5>
  <h3> <?php  echo $coranalive['statewise'][0]['confirmed'] ; ?> </h3>

            </div>
			            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $coranalive['statewise'][0]['recovered']  ; ?>
            </div>
            <div class="col-4 text-danger">
                <h5>Active</h5>
                <?php  echo $coranalive['statewise'][0]['active'] ;?>
            </div>
 </div>
</div>

<?php  
}

?>
	 <div class="container bg-light p-3 my-5 text-center">
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Indoors Stay Safe.</p>
    </div>
	<div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
	       <tr>
		     <th  scope="col"> last updatime</th>
			 <th scope="col"> state</th>
			 <th scope="col"> confirmed</th>
		
			 <th scope="col" > active</th>
			  <th scope="col">recovered</th>
			 <th scope="col" >deaths</th>
		   
		   </tr>
	   
<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);




$i=1;
while($i < $statescount){
?>
<tr>
<td  ><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['state'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>

<td><?php echo $coranalive['statewise'][$i]['active'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
<td><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
</tr>
 <!-- echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ; -->
<?php
  $i++;
}


?>
	   
	   
	   
	   
	   
	   
	   
	   </table>
	   
	
	
	
	</div>
	
</div>
	
	
	
	
	
	
	
	
	
	
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>