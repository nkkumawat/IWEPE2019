<!doctype html>
<html lang="en">
  <head>
    <?php require("include.php"); ?>
  </head>

  <body>
    <?php require('header.php'); showHeader(2); ?>
    <div class="container">
      <div class="row mb-2">
          <div class="col-md-12">
            <div class="row">
              <div class="card flex-md-row mb-4 box-shadow h-md-350">
                <div class="card-body d-flex flex-column align-items-start text-justify">
                   <?php
                    require ('connection.php');
                    $id=($_GET['id']);
                    $sql = "SELECT * FROM speaker where id = '".$id."'";
                    $result = mysqli_query($conn,$sql);
                    if($ans=mysqli_fetch_assoc($result)) { ?>
                       
                        <div class="row">
                          <div class="col-md-2">
                            <img src="<?php echo $ans['picture'] ?>" class="img-thumbnail speaker-image-profile" width="150">
                          </div>
                          <div class="col-md-10">
                            <strong class="text-success "><?php echo $ans['topic'] ?></strong> 
                            <p><small> <b>Dr. <?php echo $ans['name'] ?></b> <br>
                              <?php echo $ans['details'] ?><br>
                              Email: <?php echo $ans['email'] ?> </small>
                            </p>
                          </div>
                          <div class="col-md-12 "><br>
                            <strong class="text-success ">BIO </strong> 
                            <p> <small><?php echo $ans['bio'] ?></small>
                            </p>
                          </div>
                          <div class="col-md-12 ">
                            <strong class="text-success ">Abstract </strong> 
                            <p> <small><?php echo $ans['abstract'] ?></small>
                            </p>
                          </div>
                           <div class="col-md-12 ">
                            <a href="<?php echo $ans['download_url'] ?>" class="float-right"> <img height="30" width = "30"  src="./images/dwn.jpg"></a>
                          </div>
                        </div>    
                       <?php  }
                        $conn->close(); ?>
                       
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
