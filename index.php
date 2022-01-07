<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>CENTRAL BANK</title>
  </head>

  <body>
  <style>
    #ques {
        min-height: 433px;
    }
    </style>
  <?php
  include 'navbar.php';
  ?>
 
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" id="ques">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="img/slider1.jfif" height="390" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider31.jfif" height="390" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="img/slider3.jpg" height="390" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container my-4" id="ques">
        <h2 class="text-center my-4">Welcome to Central Bank</h2>

     
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user-group-icon.png" class="d-block" height="250" width="335">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Create User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="d-block" height="250" width="335">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/historytran.png" class="d-block" height="250" width="335">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
</div>

<?php include 'partials/footer.php';?>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>