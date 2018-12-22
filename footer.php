<?php

echo '<footer class="blog-footer">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-4 col-sm-12 left-text" >
			<h6 class=" theme-color"> Contact Us</h6>
			<p >
			    Training and Placement Cell<br>
			    National Institute of Technology | Kurukshetra<br>
			    Kurukshetra | 136119 | India<br>
			    Telephone: +91 1744 238491 | +91 1744 233302
			</p>
			</div>

			<div class="col-md-4 col-sm-12 left-text" >
				<p>&copy; 2018 - 19  <a class="footer-text" href="https://nitkkr.ac.in"> NIT KURUKSHETRA</a>
      			&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp; <a class="footer-text"  href="downloads.php" > DOWNLOADS</a>
      		</p>
			</div>
			<div class="col-md-3 col-sm-12 left-text" >
			<h6 class=" theme-color"> Quick Links</h6>
				<a href="./downloads.php" class="theme-color">Downloads</a><br>
				<a href="./gallery.php" class="theme-color">Gallery</a><br>
				<a href="./isepp2018/index.html" class="theme-color"> ISEPP 2018</a>
			</div>
		</div>
	  </footer>

	 <!-- <div class="floating-button">
	  	<a href="./downloads.php" > <img style="margin:12px; " height="25" width = "25"  src="./images/dw.png"></a>
	  </div> -->


	  ';


	  $file = fopen("visits.txt", "r");
	  $visits = fgets($file);
	  // echo $visits ;
	  fclose($file);
	  $file = fopen("visits.txt", "w");
	  // echo "string";
	  fwrite($file, $visits +1);
	  fclose($file);

?>