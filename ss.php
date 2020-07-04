<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{   margin: 30px; }
    .accordion .fa{ margin-right: 1.5rem; }
	#myBtn { display: none; position: fixed; bottom: 10px; right: 10px; z-index: 50;font-size: 10px; border: none;  outline: none; background-color: black; color: white;cursor:pointer;padding: 10px; border-radius: 4px;}
    #myBtn:hover { background-color: #555;}	
	
	
	@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {padding: 60px 0;}

section .section-title {text-align: center; color: #000b5e;margin-bottom: 50px;text-transform: uppercase;}
#footer {background:#021114 !important;}
#footer h5{padding-left: 10px; border-left: 3px solid #eeeeee; padding-bottom: 6px; margin-bottom: 20px; color:#ffffff;}
#footer a {color: #ffffff; text-decoration: none !important; background-color: transparent; -webkit-text-decoration-skip: objects;}
#footer ul.social li{padding: 3px 0;}
#footer ul.social li a i { margin-right: 5px;font-size:25px;-webkit-transition: .5s all ease;-moz-transition: .5s all ease;transition: .5s all ease;}
#footer ul.social li:hover a i {font-size:30px;margin-top:-10px;}
#footer ul.social li a,
#footer ul.quick-links li a{color:#ffffff;}
#footer ul.social li a:hover{color:#eeeeee;}
#footer ul.quick-links li{padding: 3px 0;-webkit-transition: .5s all ease;-moz-transition: .5s all ease;transition: .5s all ease;}
#footer ul.quick-links li:hover{padding: 3px 0;margin-left:5px;font-weight:700;}
#footer ul.quick-links li a i{margin-right: 5px;}
#footer ul.quick-links li:hover a i { font-weight: 700;}

@media (max-width:767px){#footer h5 { padding-left: 0; border-left: transparent;padding-bottom: 0px; margin-bottom: 10px;}}

</style>
<script>

    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning p-3">
  <a class="navbar-brand pl-4 text-primary " href="index.php">Covid-19Tracker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-4 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="ss.php">Covid-19</a>
      </li>
	  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Covid-19LiveCases
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-primary" href="world.php">WorldWide</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item text-primary" href="india1.php">India</a>
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
        <a class="nav-link" href="help.php">StateWiseHelpline</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="my-4">
       <h3 class="text-capitalize text-center text-success">Everything You Should Know About the 2019 Coronavirus and COVID-19</h3>
 </div>
 
 <div class="bs-example">
    <div class="accordion" id="accordionExample">
       
          <div class="card">
            <div class="card-header" id="heading1">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1"><i class="fa fa-plus"></i>What is a coronavirus?</button> 
				</h2>
            </div>
            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>Coronaviruses are a large family of viruses which may cause illness in animals or humans.  In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.
					</p>
                </div>
            </div>
        </div>
		
		<div class="card">
            <div class="card-header" id="heading2">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2"><i class="fa fa-plus"></i>What treatments are available?</button> 
				</h2>
            </div>
            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>There’s currently no treatment specifically approved for COVID-19, and no cure for an infection, although treatments and vaccines are currently under study.
Instead, treatment focuses on managing symptoms as the virus runs its course.<br>Seek medical help if you think you have COVID-19. Your doctor will recommend treatment for any symptoms or complications that develop and let you know if you need to seek emergency treatment.<br>Other coronaviruses like SARS and MERS are also treated by managing symptoms. In some cases, experimental treatments have been tested to see how effective they are.
Examples of therapies used for these illnesses include:<br>* antiviral or retroviral medications<br>* breathing support, such as mechanical ventilation<br>* steroids to reduce lung swelling<br>* blood plasma transfusions<br>
					</p>
                </div>
            </div>
        </div>
		
		
		<div class="card">
            <div class="card-header" id="heading6">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6"><i class="fa fa-plus"></i>How does COVID-19 spread?</button> 
				</h2>
            </div>
            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>People can catch COVID-19 from others who have the virus. The disease spreads primarily from person to person through small droplets from the nose or mouth, which are expelled when a person with COVID-19 coughs, sneezes, or speaks. These droplets are relatively heavy, do not travel far and quickly sink to the ground. People can catch COVID-19 if they breathe in these droplets from a person infected with the virus.  This is why it is important to stay at least 1 meter) away from others. These droplets can land on objects and surfaces around the person such as tables, doorknobs and handrails.  People can become infected by touching these objects or surfaces, then touching their eyes, nose or mouth.  This is why it is important to wash your hands regularly with soap and water or clean with alcohol-based hand rub.WHO is assessing ongoing research on the ways that COVID-19 is spread and will continue to share updated findings
					</p>
                </div>
            </div>
        </div>
		
		
		<div class="card">
            <div class="card-header" id="heading8">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8"><i class="fa fa-plus"></i>What does it mean to self-isolate?</button> 
				</h2>
            </div>
            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>Self-isolation is an important measure taken by those who have COVID-19 symptoms to avoid infecting others in the community, including family members.<br>
Self-isolation is when a person who is experiencing fever, cough or other COVID-19 symptoms stays at home and does not go to work, school or public places. This can be voluntarily or based on his/her health care provider’s recommendation. However, if you live in an area with malaria or dengue fever it is important that you do not ignore symptoms of fever. Seek medical help. When you attend the health facility wear a mask if possible, keep at least 1 metre distant from other people and do not touch surfaces with your hands. If it is a child who is sick help the child stick to this advice.<br>If you do not live in an area with malaria or dengue fever please do the following:<br>If a person is in self-isolation, it is because he/she is ill but not severely ill (requiring medical attention)<br>1- have a large, well-ventilated with hand-hygiene and toilet facilities<br>2-If this is not possible, place beds at least 1 metre apart<br>3-Keep at least 1 metre from others, even from your family members<br>4-Monitor your symptoms daily<br>5-Isolate for 14 days, even if you feel healthy<br>6-If you develop difficulty breathing, contact your healthcare provider immediately – call them first if possible<br>7-Stay positive and energized by keeping in touch with loved ones by phone or online, and by exercising yourself at home.</p>
                </div>
            </div>
        </div>
		
		




 <div class="my-4">
       <h3 class="text-capitalize text-center text-success">Coronavirus Symptoms (COVID-19)</h3>
 </div>



	   <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed " data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i> What are the symptoms of someone infected with a coronavirus?</button>									
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                <p>    People with COVID-19 have had a wide range of symptoms reported – ranging from mild symptoms to severe illness. 
					These symptoms may appear 2-14 days after exposure to the virus:<br> Fever,Cough,Shortness of breath or difficulty breathing,Chills,Repeated shaking with chills,Muscle pain,Headache,Sore throat,New loss of taste or smell,Symptoms of Coronavirus </p>
                </div>
            </div>
        </div>
		
		
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i>Typical Symptoms</button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p >COVID-19 typically causes flu-like symptoms including a fever and cough.<br>In some patients - particularly the elderly and others with other chronic health conditions - these symptoms can develop into pneumonia, with chest tightness, chest pain, and shortness of breath.<br>It seems to start with a fever, followed by a dry cough.<br>After a week, it can lead to shortness of breath, with about 20% of patients requiring hospital treatment.<br>Notably, the COVID-19 infection rarely seems to cause a runny nose, sneezing, or sore throat (these symptoms have been observed in only about 5% of patients). Sore throat, sneezing, and stuffy nose are most often signs of a cold.</p>
                </div>
            </div>
        </div>
		
		
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i>80% of cases are mild?</button> 
				</h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>80.9% of infections are mild (with flu-like symptoms) and can recover at home.<br>13.8% are severe, developing severe diseases including pneumonia and shortness of breath.<br>4.7% as critical and can include: respiratory failure, septic shock, and multi-organ failure.<br>In about 2% of reported cases the virus is fatal.<br>Risk of death increases the older you are.<br>Relatively few cases are seen among children. </p>
                </div>
            </div>
        </div>
		
		
		 <div class="card">
            <div class="card-header" id="heading4">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4"><i class="fa fa-plus"></i>Pre-existing conditions before symptoms</button> 
				</h2>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>Pre-existing illnesses that put patients at higher risk:<br>1. cardiovascular disease<br>2. diabetes<br>3. chronic respiratory disease<br>4. hypertension<br>
That said, some otherwise healthy people do seem to develop a severe form of pneumonia after being infected by the virus. The reason for this is being investigated as we try to learn more about this new virus.</p>
                </div>
            </div>
        </div>
		
		<div class="card">
            <div class="card-header" id="heading5">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5"><i class="fa fa-plus"></i>What is difference between  common symptoms V/s COVID-19 symptoms?</button> 
				</h2>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>Many people with COVID-19 have mild, flu-like symptoms (see above question 1), which are rather common and need to be distinguished from similar symptoms caused by common cold viruses and from allergic symptoms during springtime.<br>
					<div class="container">
                    <img class="img-fluid" src="Image/20.png"> </div>
					</p>
                </div>
            </div>
        </div>
		
		
		<div class="card">
            <div class="card-header" id="heading7">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7"><i class="fa fa-plus"></i>How long do symptoms last?</button> 
				</h2>
            </div>
            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>Using available preliminary data, the Report of the WHO-China Joint Mission published on Feb. 28 by WHO, [5] which is based on 55,924 laboratory confirmed cases, observed the following median time from symptoms onset to clinical recovery:<br>* mild cases: approximately 2 weeks<br>* severe or critical disease: 3 - 6 weeks<br>* time from onset to the development of severe disease (including hypoxia): 1 week<br>* Among patients who have died, the time from symptom onset to outcome ranges from 2 - 8 weeks.
					</p>
                </div>
            </div>
        </div>
		
		
	
		
  <div class="my-4">
      <h3 class="text-capitalize text-center text-success">Coronavirus(COVID-19) Prevention</h3>
  </div>
		
		<div class="card">
            <div class="card-header" id="heading9">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9"><i class="fa fa-plus"></i>How can we protect others and ourselves if we don't know who is infected?</button> 
				</h2>
            </div>
            <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>Practicing hand and respiratory hygiene is important at ALL times and is the best way to protect others and yourself.<br>When possible maintain at least a 1 meter distance between yourself and others. This is especially important if you are standing by someone who is coughing or sneezing.  Since some infected persons may not yet be exhibiting symptoms or their symptoms may be mild, maintaining a physical distance with everyone is a good idea if you are in an area where COVID-19 is circulating. 
					</p>
                </div>
            </div>
        </div>
		
		<div class="card">
            <div class="card-header" id="heading10">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10"><i class="fa fa-plus"></i>What should I do if I have come in close contact with someone who has COVID-19?</button> 
				</h2>
            </div>
            <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>If you have been in close contact with someone with COVID-19, you may be infected.<br>Close contact means that you live with or have been in settings of less than 1 metre from those who have the disease. In these cases, it is best to stay at home.<br>However, if you live in an area with malaria or dengue fever it is important that you do not ignore symptoms of fever. Seek medical help. When you attend the health facility wear a mask if possible, keep at least 1 metre distant from other people and do not touch surfaces with your hands. If it is a child who is sick help the child stick to this advice.<br>If you do not live in an area with malaria or dengue fever please do the following:<br>1- If you become ill, even with very mild symptoms you must self-isolate<br>2- Even if you don’t think you have been exposed to COVID-19 but develop symptoms, then self-isolate and monitor yourself<br>3- You are more likely to infect others in the early stages of the disease when you just have mild symptoms, therefore early self-isolation is very important.<br>4- If you do not have symptoms, but have been exposed to an infected person, self-quarantine for 14 days.<br>If you have definitely had COVID-19 (confirmed by a test) self-isolate for 14 days even after symptoms have disappeared as a precautionary measure – it is not yet known exactly how long people remain infectious after they have recovered. Follow national advice on self-isolation.
					</p>
                </div>
            </div>
        </div>
		
		
		<div class="card">
            <div class="card-header" id="heading12">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse12"><i class="fa fa-plus"></i>What is the difference between self-isolation, self-quarantine and distancing?</button> 
				</h2>
            </div>
            <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>Quarantine means restricting activities or separating people who are not ill themselves but may have been exposed to COVID-19. The goal is to prevent spread of the disease at the time when people just develop symptoms.<br>Isolation means separating people who are ill with symptoms of COVID-19 and may be infectious to prevent the spread of the disease.<br>Physical distancing means being physically apart. WHO recommends keeping at least 1-metre distance from others. This is a general measure that everyone should take even if they are well with no known exposure to COVID-19. 
					</p>
                </div>
            </div>
        </div>
		
		
		<div class="card">
            <div class="card-header" id="heading11">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse11"><i class="fa fa-plus"></i>Are antibiotics effective in preventing or treating COVID-19?</button> 
				</h2>
            </div>
            <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>No. Antibiotics do not work against viruses; they only work on bacterial infections. COVID-19 is caused by a virus, so antibiotics do not work. Antibiotics should not be used as a means of prevention or treatment of COVID-19. In hospitals physicians will sometimes use antibiotics to prevent or treat secondary bacterial infections which can be a complication of COVID-19 in severely ill patients. They should only be used as directed by a physician to treat a bacterial infection. 
					</p>
                </div>
            </div>
        </div>
		
		
		<div class="card">
            <div class="card-header" id="heading13">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse13"><i class="fa fa-plus"></i>How long does the virus survive on surfaces?</button> 
				</h2>
            </div>
            <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                <div class="card-body bg-success text-white">
                    <p>The most important thing to know about coronavirus on surfaces is that they can easily be cleaned with common household disinfectants that will kill the virus. Studies have shown that the COVID-19 virus can survive for up to 72 hours on plastic and stainless steel, less than 4 hours on copper and less than 24 hours on cardboard.<br>As, always clean your hands with an alcohol-based hand rub or wash them with soap and water. Avoid touching your eyes, mouth, or nose.
					</p>
                </div>
            </div>
        </div>
		
		
		
    </div>
</div>




<div class="container scrolltop float-right pr-5">
   <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" style="font-size:24px"></i></button>
 </div>

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


</body>
</html>























