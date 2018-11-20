<!doctype html>
<html lang="en">
  <head>
    <?php require("include.php");?>
  </head>

  <body>
    <?php require('header.php'); showHeader(9); ?>
    <div class="container">
      
<!-- 
      <br><br>
      <p class="text-center font-weight-bold">Comming Soon</p>
      <br><br> -->
      <div class="row mb-2">
          <div class="col-md-12">
            <div class="row">
              <div class="card flex-md-row mb-4 box-shadow h-md-350">
                <div class="card-body d-flex flex-column align-items-start text-justify">
                  <!-- <strong class="d-inline-block mb-2 text-success">Call For Posters </strong> -->
                   <?php
                    require 'connection.php';
                    $id=($_GET['id']);
                    $sql = "SELECT * FROM speaker where id = '".$id."'";
                    $result = mysqli_query($conn,$sql);
                      while($ans=mysqli_fetch_assoc($result)) {
                                 echo ' <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                      <img src="'.$ans['picture'].'" class="img-thumbnail" height="150" width="150">
                                    </div>
                                    <div class="col-md-8 col-sm-12 ">
                                      <strong class="text-success ">'.$ans['topic'].'</strong> 
                                      <p><small> <b>'.$ans['name'].'</b> <br>

                                        '.$ans['details'].'<br>
                              Email: '.$ans['email'].' </small>
                                      </p>
                                    </div>

                                  </div>


                                  <div class="row">
                                    <div class="col-12">
                                      <strong class="text-success ">BIO</strong> 
                                      <p><small> '.$ans['bio'].'</small>
                                      </p>
                                    </div>
                                    <div class="col-12 ">
                                      <strong class="text-success ">Abstract </strong> 
                                      <p> <small>'.$ans['abstract'].'</small>
                                      </p>
                                    </div>
                                                                 <div class="col-12 ">
                                      <a href="'.$ans['download_url'].'" class="float-right"> <img height="30" width = "30"  src="./images/dwn.jpg"></a>
                                    </div>
                                  </div>';
                           }
                              $conn->close();
                  ?> 
                </div>
              </div>
            </div>
            
        </div>

      
        <!--  -->
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
   
  </body>
</html>
