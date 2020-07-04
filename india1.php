<!DOCtype html>
<html>
<head>
     <title></title>
	 
	 <link rel="stylesheet" type="text/css" href="style.css"/>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  
</head>
<body>
  
  
<nav class="navbar navbar-expand-lg navbar-light bg-warning p-3">
  <a class="navbar-brand pl-4 text-primary " href="index.html">Covid-19Tracker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-4 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="ss.html">Covid-19</a>
      </li>
	  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Covid-19LiveCases
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-primary" href="world.html">WorldWide</a>
		  <div class="dropdown-divider"></div>
         
          <a class="dropdown-item" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/events-as-they-happen">Covid-19LetestNews</a>
		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/travel-advice">TravelAdvice</a>
		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/global-research-on-novel-coronavirus-2019-ncov">Research and Guidance</a>
		    <div class="dropdown-divider"></div>
			  <a class="dropdown-item" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">Public Advice</a>
		  
        </div>
      </li>
	  
	   <li class="nav-item">
        <a class="nav-link" href="help.html">StateWiseHelpline</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<section class="corona_update container-fluid">
   <div class="my-4">
       <h3 class="text-capitalize text-center">Covid-19 Live Update of All Indian State and Territory</h3>
    </div>
	 <div class="table-responsive">
     <table class="table table-bordered table-striped text-center" id="tbval">
	     <tr>
		      <th class="text-capitalize">LastUpdateTime</th>
			  <th class="text-capitalize">State</th>
			  <th class="text-capitalize">Confirmed</th>
			  <th class="text-capitalize">Active</th>
			  <th class="text-capitalize">Recovered</th>
			  <th class="text-capitalize">Deaths</th>
			  
           </tr>
<?php 
    $data=file_get_contents('https://api.covid19india.org/data.json');
     $coronalive=json_decode($data,true);
     $statescount=count($coronalive['statewise']);
		$i=1;
		while($i<$statescount){
			?>
			
			<tr>
			   <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
			   <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
			   <td><?php echo $coronalive['statewise'][$i]['confirmed']  ?></td>
			   <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
			   <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
			   <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>
			</tr>
			
			
		<!--	echo $coronalive['statewise'][$i]['lastupdatetime']. "</br>" ;
			echo $coronalive['statewise'][$i]['state']. "</br>" ;
			echo $coronalive['statewise'][$i]['confirmed']. "</br>" ;
			echo $coronalive['statewise'][$i]['active']. "</br>" ;
			echo $coronalive['statewise'][$i]['reccovered']. "</br>" ;
			echo $coronalive['statewise'][$i]['deaths']. "</br>" ; -->
	<?php
	$i++;
		}
		   
	?>	   
	   </table>
  </div>
</section>


<div class="container scrolltop float-right pr-5">
   <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" style="font-size:24px"></i></button>
 </div>

 <!-- Footer -->
	<section id="footer">
		<div class="container">
		
		
			<div class="row">
			
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
					<h3 class="text-center text-success">Visit My another Website</h3>
		<p class="text-center"><a  href="https://krishna3ku.github.io/KrishnaYadav/" target="_blank">1- My Portfolio</a></p>
		<p class="text-center"><a  href="https://thejabinfo.wordpress.com/" target="_blank">2- thejabinfo.wordpress.com</a></p>
					<h3 class="text-center text-success ">Get connected with us on social networks</h3>
						<li class="list-inline-item"><a href="https://www.facebook.com/krishnakumar.yadav.18488169/"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/Krishna09988033/"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/krishnakumar8636"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.linkedin.com/in/krishna-yadav-597698170/"><i class="fa fa-linkedin"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/Krishna3Ku"><i class="fa fa-github"></i></a></li>
						<li class="list-inline-item"><a href="https://www.quora.com/profile/Krishna-Yadav-1295"><i class="fa fa-quora"></i></a></li>
						
						
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					
					<p class="h6">© All right Reversed-<a class="text-green ml-2 text-primary" href="https://krishna3ku.github.io/KrishnaYadav/" target="_blank">Krishna Yadav</a></p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->


<script>
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>



<body>
</html>