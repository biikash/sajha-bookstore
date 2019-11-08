<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet"> -->
<!--     <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
 -->    <style>
      *{
        margin: 0px;
        padding: 0px;
      }

      .carousel-inner img{
        width: 100%;
        height: 100%;
      }

    </style>

    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Sajha store</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="publisher_list.php">publishers</a></li>
      <li><a href="books.php">books</a></li>
       <li><a href="contact.php">contact</a></li>
        <li><a href="cart.php">cart</a></li>
        <li><a href="admin.php">admin</a></li>
        <li><a href="about.php">About Us</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>
  </head>

  <body style="margin-top: 70px;">

  

    <?php
      // if(isset($title) && $title == "Index") 
    {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!-- <div class="jumbotrons">
      <div class="container">
                    <img src="img/header.jpg" alt="books"  class="img-responsive">

        <style>
          .container{
          
           background-image: ("img/4.jpg");
           width: 140px;
           height: 780px;
           background-repeat: no-repeat;
           background-position: center;
           background-size: cover;
           background-attachment: fixed;*/
          }
          


        </style>
        <div class="row">
          <div class="col-sm-6 btn-holder">
          </div>
          <div class="col-sm-6">
        <h1>Welcome to online CSE bookstore</h1>
        <p class="lead">This site has been made using PHP with MYSQL (procedure functions)!</p>
        <p>The layout use Bootstrap to make it more responsive. It's just a simple web!</p>
        </div>
      </div>
      </div>
    </div> -->



    <?php } ?>

<!--     <div class="container" id="main"> -->