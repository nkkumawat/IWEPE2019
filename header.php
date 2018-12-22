<?php
	function showHeader($tab) {
        $classes = array("" , "", "", "","","","","","" , "" , "");
        $classes[$tab] = "nav-success font-weight-bold underline-text ";
		echo '

        <div class="top-header">
        
        <div class="container header-top">

         <header class="blog-header py-3">
	        <div class="row flex-nowrap justify-content-between align-items-center">
	  
	          <div class="col text-center">
	            <a class="blog-header-logo  float-left" href="index.php">IWEPE 2019</a>
	          </div>
	          
	        </div>
	      </header> 
             <!-- <div class="row">
                    <div class="col-sm-12 col-md-2 text-center center  px-0">
                      <img src="./images/nit1.png" width="130" height="130" class="nitimage">
                    </div>
                    <div class="col-md-10 col-sm-12  px-0 text-workshop">
                      <p class="lead my-3 text-center">  <span id="workshop-name" class="text-dark font-weight-bold text-center" > <b>INTERNATIONAL WORKSHOP</b>on <b>ENERGY, POWER & ENVIRONMENT</b></span> <br>
                      <small>March 17 - 19, 2019</small> <br> <a href="http://nitkkr.ac.in" class=" nit-name font-weight-bold text-center"> National Institute of Technology Kurukshetra, India</a></p>
                    </div>
                </div> 
            -->
	      <nav class="navbar navbar-center navbar-expand-md  navbar-light  navi"  id="navbar">
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="navbar-brand d-flex flex-fill  iwepe"></span>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav justify-content-center " >
                <li class="nav-item  ">
                    <a class="nav-link '.$classes[0].' " href="/">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link  '.$classes[1].'" href="./schedule.php">Schedule</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link  '.$classes[2].'" href="./speakers.php">Speakers</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link '.$classes[3].'" href="./sponsors.php">Sponsors</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link '.$classes[4].'" href="./callforposter.php">Call For Posters</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link '.$classes[5].'" href="./registration.php">Registration</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link '.$classes[6].' " href="./howtoreachus.php">How to reach</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link '.$classes[7].'" href="./contact.php">Contact</a>
                </li>
                 
                <li class="nav-item ">
                    <a class="nav-link '.$classes[9].'" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link '.$classes[8].'" href="./isepp2018/index.html">ISEPP 2018</a>
                </li>
                
                </ul>
            </div>
        </nav>
	      <div class="nav-scroller py-1 mb-2" id="navbar-main">
	        <nav class="nav d-flex navbar-inverse justify-content-between">
              
	          <a class="p-2 navlink-a '.$classes[0].'" href="index.php">Home</a>
	          <a class="p-2 navlink-a '.$classes[1].'" href="schedule.php">Schedule</a>
	          <a class="p-2 navlink-a '.$classes[2].'" href="speakers.php">Speakers</a>
	          <a class="p-2 navlink-a '.$classes[3].'" href="sponsors.php">Sponsors</a>
	          <a class="p-2 navlink-a '.$classes[4].'" href="callforposter.php">Call for Posters</a>
	          <a class="p-2 navlink-a '.$classes[5].'" href="registration.php">Registration</a>
	          <a class="p-2 navlink-a '.$classes[6].'" href="howtoreachus.php">How to Reach</a>
	          <a class="p-2 navlink-a '.$classes[7].'" href="contact.php">Contact</a>
              <a class="p-2 navlink-a '.$classes[9].'" href="gallery.php">Gallery</a>
              <a class="p-2 navlink-a '.$classes[8].'" href="isepp2018/index.html">ISEPP 2018</a>
	          
	        </nav>
	      </div>';

          if ($tab <= 0 ){
	       echo'
            <div class="jumbotron jumbotron-header p-3 p-md-5 text-white justify-content-between rounded " style="background: transparent;">
    	        <div class="row">
    	        <div class="col-sm-12 col-md-1 text-center center  px-0">
    	          <img src="./images/nit.png" width="150" height="150" class="nitimage">
    	        </div><div class="col-md-1 col-sm-0"></div>
    	        <div class="col-md-10 col-sm-12  px-0 text-workshop">
    	          <h5 class="display-6 workshop-text text-center"> <b>INTERNATIONAL WORKSHOP</b> on <b>ENERGY, POWER & ENVIRONMENT</b></h5>
    	          <p class="lead my-3 text-center">March <span class="theme-color" >|</span> 17 - 19 <span class="theme-color" >|</span> 2019</p>
    	          <p class="lead mb-0 text-center"><a href="http://nitkkr.ac.in" class="text-white font-weight-bold text-center"> National Institute of Technology Kurukshetra<span class="theme-color" >  |</span> India</a></p>
    	        </div>
    	        </div>
	        </div> ';

        }else {
            echo '<small><br></small>';
        }
            echo '
            </div>
            </div>
           
          ';
	  }


?>