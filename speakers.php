<!doctype html>
<html lang="en">
  <head>
    <?php require("include.php");?>
  </head>

  <body>
    <?php require('header.php'); showHeader(2); ?>
    <div class="container">
       
      <div class="row mb-2">
          <div class="col-md-4">
            <div class="row">
              <div class="card flex-md-row mb-4 box-shadow h-md-350">
                <div class="card-body d-flex flex-column align-items-start">
                  <strong class="d-inline-block mb-2 text-primary">Chief Guest</strong>
                  <div class="row speaker" onclick= "openlink('https://www.drdo.gov.in/drdo/English/index.jsp?pg=dg-ace.jsp');">
                    <div class="col-4">
                      <img src="./images/pkmehta.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Shri PK Mehta</b></small><br>
                      <p style="line-height: 1em"><small>DS & Director General<br>ACE , DRDO, Govt. of India</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="card flex-md-row mb-4 box-shadow h-md-350">
                <div class="card-body d-flex flex-column align-items-start">
                  <strong class="d-inline-block mb-2 text-primary">Guest of Honour</strong>
                  <div class="row speaker" onclick= "openlink('#');">
                    <div class="col-4">
                      <img src="./images/index.png" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Shri GK Gupta</b></small><br>
                      <p style="line-height: 1em"><small>Joint Secretary, MNRE<br> India</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  

         
        </div>

        <!-- second half  -->
        <div class="col-md-4">
            <div class="row">
              <div class="card flex-md-row mb-4 box-shadow h-md-350">
                  <div class="card-body d-flex flex-column align-items-start">
                   <strong class="d-inline-block mb-2 text-success">Speakers </strong>

                    <div class="row speaker" onclick= "speaker('profile.php?id=1');">
                        <div class="col-4">
                          <img src="./isepp2018/resources/drawable/speakers/3.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                        </div>
                        <div class="col-8">
                          <small><b>Dr. Suresh Aggarwal</b></small><br>
                          <p style="line-height: 1em"><small>University of Illinois<br> USA </small></p>
                        </div>
                      </div>

                    <!-- <div class="row speaker" onclick= "speaker('profile.php?id=2');">
                      <div class="col-4">
                        <img src="./isepp2018/resources/drawable/speakers/4.jpg" class="img-thumbnail rounded-circle" >
                      </div>
                      <div class="col-8">
                        <small><b>Dr. Ashoke De </b></small><br>
                        <p style="line-height: 1em"><small>IIT Kanpur<br> India  </small></p>
                      </div>
                    </div> -->
                   <div class="row speaker" onclick= "speaker('profile.php?id=3');" >
                     <div class="col-4">
                      <img src="./isepp2018/resources/drawable/speakers/2.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. A. K. Gupta</b></small><br>
                      <p style="line-height: 1em"><small>University of Maryland<br> USA</small></p>
                    </div>
                  </div>
                   <div class="row speaker" onclick= "speaker('profile.php?id=4');" >
                    <div class="col-4">
                      <img src="./images/isa/8.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Ryo Amano </b></small><br>
                      <p style="line-height: 1em"><small>UWM<br> USA</small></p>
                    </div>
                  </div>
                 <div class="row speaker" onclick= "speaker('profile.php?id=5');"  >
                    <div class="col-4">
                      <img src="./images/isa/10.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Klas Engvell </b></small><br>
                      <p style="line-height: 1em"><small>KTH<br> Sweden</small></p>
                    </div>
                  </div>

                  <div class="row speaker" onclick= "speaker('profile.php?id=6');"  >
                    <div class="col-4">
                      <img src="./images/isa/11.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Marcelo De Lemos </b></small><br>
                      <p style="line-height: 1em"><small>ITA<br> Brazil</small>
                      </p>
                    </div>
                  </div>

                  <div class="row speaker" onclick= "speaker('profile.php?id=7');"  >
                    <div class="col-4">
                      <img src="./images/ssen.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Swarnendu Sen </b></small><br>
                      <p style="line-height: 1em"><small>Jadavpur University<br> India</small></p>
                    </div>
                  </div>



                  <div class="row speaker" onclick= "speaker('profile.php?id=8');" >
                    <div class="col-4">
                      <img src="./isepp2018/resources/drawable/speakers/54.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Mikko Hupa </b></small><br>
                      <p style="line-height: 1em"><small>Rector, Abo Akademi, Finland </small></p>
                    </div>
                  </div>

                    <div class="row speaker" onclick= "speaker('profile.php?id=9');" > 
                      <div class="col-4">
                        <img src="./images/11.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                      </div>
                      <div class="col-8">
                        <small><b>Dr. Hukam Mongia </b></small><br>
                        <p style="line-height: 1em"><small> University of Connecticut<br> USA </small></p>
                      </div>
                    </div>
                    <div class="row speaker" onclick= "speaker('profile.php?id=10');" >
                      <div class="col-4">
                        <img src="./images/suta.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                      </div>
                      <div class="col-8">
                        <small><b>Dr. S. Kwankaomeng </b></small><br>
                        <p style="line-height: 1em"><small> KMITL<br> Thailand </small></p>
                      </div>
                    </div>
                    <div class="row speaker" onclick= "speaker('profile.php?id=11');" >
                      <div class="col-4">
                        <img src="./images/kei.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                      </div>
                      <div class="col-8">
                        <small><b>Dr. Keiichi OKAI </b></small><br>
                        <p style="line-height: 1em"><small> JAXA <br> Japan  </small></p>
                      </div>
                    </div>
                    <div class="row speaker" onclick= "speaker('profile.php?id=12');" >
                      <div class="col-4">
                        <img src="./images/mcg.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                      </div>
                      <div class="col-8">
                        <small><b>Dr. James McGuirk </b></small><br>
                        <p style="line-height: 1em"><small>  Loughborough University<br>UK </small></p>
                      </div>
                    </div>
                    <div class="row speaker" onclick= "speaker('profile.php?id=13');" >
                      <div class="col-4">
                        <img src="./images/sm.png" class="img-thumbnail rounded-circle" height="200" width="200">
                      </div>
                      <div class="col-8">
                        <small><b>Dr. S. Massimo </b></small><br>
                        <p style="line-height: 1em"><small> Politecnico di Torino<br> Italy </small></p>
                      </div>
                    </div>
                    <div class="row speaker" onclick= "speaker('profile.php?id=14');" >
                    <div class="col-4">
                      <img src="./images/sc.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. S. Choudhury</b></small><br>
                      <p style="line-height: 1em"><small>IISC <br> India  </small></p>
                    </div>
                  </div>
                  <div class="row speaker" onclick= "speaker('profile.php?id=29');" >
                    <div class="col-4">
                      <img src="./images/hn.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Hiranya Nath</b></small><br>
                      <p style="line-height: 1em"><small>GE Aviation <br> India  </small></p>
                    </div>
                  </div>
                  <div class="row speaker" onclick= "speaker('profile.php?id=33');" >
                    <div class="col-4">
                      <img src="./images/mi.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Mohammed Ibrahim</b></small><br>
                      <p style="line-height: 1em"><small>IIT Kanpur<br> India  </small></p>
                    </div>
                  </div>
                  <div class="row speaker" onclick= "speaker('profile.php?id=34');" >
                    <div class="col-4">
                      <img src="./images/golla.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. S. R. Golllahalli</b></small><br>
                      <p style="line-height: 1em"><small>University of Oklahoma  <br> Oklahoma  </small></p>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
        </div>
        <!--third column  -->
         <div class="col-md-4">
           <div class="row">
            <div class="card flex-md-row mb-4 box-shadow h-md-400">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">Speakers </strong>
                   <!-- <div class="row speaker" onclick= "speaker('profile.php?id=15');" >
                     <div class="col-4">
                      <img src="./isepp2018/resources/drawable/speakers/5.jpg" class="img-thumbnail rounded-circle " height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Abhijit Kushari </b><br></small>
                      <p style="line-height: 1em"><small> IIT Kanpur<br> India</small></p>
                    </div>
                  </div> -->
                   <div class="row speaker" onclick= "speaker('profile.php?id=16');" >
                     <div class="col-4">
                      <img src="./isepp2018/resources/drawable/speakers/1.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Akshai Runchal </b></small><br>
                      <p style="line-height: 1em"><small>ACRI Los Angeles<br> USA </small></p>
                    </div>
                  </div>
                  <div class="row speaker" onclick= "speaker('profile.php?id=17');" >
                    <div class="col-4">
                      <img src="./isepp2018/resources/drawable/speakers/55.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. B. Khandelwal</b></small><br>
                      <p style="line-height: 1em"><small>Sheffield University<br> UK </small></p>
                    </div>
                  </div>

                  <div class="row speaker" onclick= "speaker('profile.php?id=18');" >
                    <div class="col-4">
                      <img src="./images/isa/20.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Somrat Kedsuwan </b></small><br>
                      <p style="line-height: 1em"><small>KMUT Bangkok<br> Thailand </small></p>
                    </div>
                  </div>

                  <div class="row speaker" onclick= "speaker('profile.php?id=19');" >
                    <div class="col-4">
                      <img src="./images/isa/21.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Y. H. Taufiq-Yap</b></small><br>
                      <p style="line-height: 1em"><small>Universiti Putra<br> Malaysia   </small></p>
                    </div>
                  </div>

                <div class="row speaker" onclick= "speaker('profile.php?id=20');" >
                    <div class="col-4">
                      <img src="./images/isa/15.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Assaad Masri </b></small><br>
                      <p style="line-height: 1em"><small>TUS<br>Australia </small></p>
                    </div>
                  </div>

                <div class="row speaker" onclick= "speaker('profile.php?id=21');" >
                    <div class="col-4">
                      <img src="./images/isa/16.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. K. Kailasanath</b></small><br>
                      <p style="line-height: 1em"><small>NRL<br>USA </small></p>
                    </div>
                  </div>

                  <div class="row speaker" onclick= "speaker('profile.php?id=22');" >
                    <div class="col-4">
                      <img src="./images/isa/17.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Naveen Kumar </b></small><br>
                      <p style="line-height: 1em"><small>DTU<br> India </small></p>
                    </div>
                  </div>

                  <div class="row speaker" onclick= "speaker('profile.php?id=32');">
                    <div class="col-4">
                      <img src="./images/isa/18.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Anjan Ray</b></small><br>
                      <p style="line-height: 1em"><small>IIT Delhi<br> India   </small></p>
                    </div>
                  </div>

                  <!-- f -->        
                  <div class="row speaker" onclick= "speaker('profile.php?id=23');" >
                    <div class="col-4">
                      <img src="./images/isa/19.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. A. Mukhopadhyay </b></small><br>
                      <p style="line-height: 1em"><small>Jadavpur University<br> India  </small></p>
                    </div>
                  </div>

                 

                  <div class="row speaker" onclick= "speaker('./docs/24.pdf');" >
                    <div class="col-4">
                      <img src="./images/basu.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. S. Basu </b></small><br>
                      <p style="line-height: 1em"><small>IISc<br> India </small></p>
                    </div>
                  </div>

                  <div class="row speaker" onclick= "speaker('profile.php?id=25');" >
                    <div class="col-4">
                      <img src="./images/sudar.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. S. Kumar </b></small><br>
                      <p style="line-height: 1em"><small> IIT Bombay<br> India  </small></p>
                    </div>
                  </div>                
                  <div class="row speaker" onclick= "speaker('profile.php?id=26');" >
                    <div class="col-4">
                      <img src="./isepp2018/resources/drawable/speakers/4.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Ashoke De</b></small><br>
                      <p style="line-height: 1em"><small>IIT Kanpur<br> India </small></p>
                    </div>
                  </div>
                  <div class="row speaker" onclick= "speaker('profile.php?id=27');" >
                    <div class="col-4">
                      <img src="./images/sum.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. S. Mukhopadhay</b></small><br>
                      <p style="line-height: 1em"><small>IIT Jodhpur <br> India  </small></p>
                    </div>
                  </div>

                  <div class="row speaker" onclick= "speaker('profile.php?id=28');" >
                    <div class="col-4">
                      <img src="./images/sde.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr.  Santanu De</b></small><br>
                      <p style="line-height: 1em"><small>IIT Kanpur <br> India    </small></p>
                    </div>
                  </div>
                  <div class="row speaker" onclick= "speaker('profile.php?id=30');" >
                    <div class="col-4">
                      <img src="./images/sm1.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Sirshendu Mondal</b></small><br>
                      <p style="line-height: 1em"><small>NIT
                        Durgapur <br> India    </small></p>
                    </div>
                  </div>
                  <div class="row speaker" onclick= "speaker('profile.php?id=35');" >
                    <div class="col-4">
                      <img src="./images/ssit.jpg" class="img-thumbnail rounded-circle" height="200" width="200">
                    </div>
                    <div class="col-8">
                      <small><b>Dr. Stefania Specchia</b></small><br>
                      <p style="line-height: 1em"><small>Politecnico di Toino <br>  Italy   </small></p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php require('footer.php'); ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
    <script src="js/main.js"></script>
   
  </body>
</html>
