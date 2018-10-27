<?php
	function showHeader($tab) {
        $classes = array("" , "", "", "","","","","","" , "" , "");
        $classes[$tab] = "text-success font-weight-bold underline-text ";
		echo '<header class="blog-header py-3">
	        <div class="row flex-nowrap justify-content-between align-items-center">
	  
	          <div class="col text-center">
	            <a class="blog-header-logo text-dark float-left" href="index.php">IWEPE 2019</a>
	          </div>
	          
	        </div>
	      </header>
	      <nav class="navbar navbar-center navbar-expand-md  navbar-light  navi"  id="navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link '.$classes[6].' " href="./howtoreachus.php">How to reach Us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link '.$classes[7].'" href="./contact.php">Contact</a>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link '.$classes[8].'" href="./isepp2018/index.html">ISEPP 2018</a>
                </li>
                
                </ul>
            </div>
        </nav>
	      <div class="nav-scroller py-1 mb-2" id="navbar-main">
	        <nav class="nav d-flex navbar-inverse justify-content-between">
	          <a class="p-2 text-secondary '.$classes[0].'" href="index.php">Home</a>
	          <a class="p-2 text-secondary '.$classes[1].'" href="schedule.php">Schedule</a>
	          <a class="p-2 text-secondary '.$classes[2].'" href="speakers.php">Speakers</a>
	          <a class="p-2 text-secondary '.$classes[3].'" href="sponsors.php">Sponsors</a>
	          <a class="p-2 text-secondary '.$classes[4].'" href="callforposter.php">Call for Posters</a>
	          <a class="p-2 text-secondary '.$classes[5].'" href="registration.php">Registration</a>
	          <a class="p-2 text-secondary '.$classes[6].'" href="howtoreachus.php">How to Reach Us</a>
	          <a class="p-2 text-secondary '.$classes[7].'" href="contact.php">Contact</a>
	          <a class="p-2 text-secondary '.$classes[8].'" href="isepp2018/index.html">ISEPP 2018</a>
	        </nav>
	      </div>

	      <div class="jumbotron p-3 p-md-5 text-white justify-content-between rounded bg-dark">
	        <div class="row">
	        <div class="col-sm-12 col-md-1 text-center center  px-0">
	          <img src="./images/nit.png" width="150" height="150" class="nitimage">
	        </div><div class="col-md-1 col-sm-0"></div>
	        <div class="col-md-10 col-sm-12  px-0 text-workshop">
	          <h4 class="display-6 workshop-text text-center"> <b>INTERNATIONAL WORKSHOP</b> on <b>ENERGY, POWER & ENVIRONMENT</b></h4>
	          <p class="lead my-3 text-center">March 17 - 19, 2019</p>
	          <p class="lead mb-0 text-center"><a href="http://nitkkr.ac.in" class="text-white font-weight-bold text-center"> National Institute of Technology Kurukshetra, India</a></p>
	        </div>
	      </div>
	      </div>
          ';
	  }


?>