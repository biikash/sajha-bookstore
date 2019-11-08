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
  <style>

  	*{
  		margin: 0px;
  		padding: 0px;
  	}
  
  </style>
</head>
<body>

<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="publisher_list.php">publishers</a></li>
      <li><a href="books.php">books</a></li>
       <li><a href="contact.php">contact</a></li>
        <li><a href="cart.php">cart</a></li>
        <li><a href="admin.php">admin</a></li>
        <li class="active"><a href="about.php">About Us</a></li>
        
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>About us section</h1> 
    <p>Bootstrap is the most popular HTML, CSS...</p> 
  </div>
</div>
</header>
<section>
  <div class="cantainer-fluid">
    <h1 class="text-center text-capitalize pt-5">About Us</h1>
    <h1 class="w-25 mx-auto pt-5"></h1>
    <div class="row mt-5">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="template/img/book1.jpg" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h1>Who am I</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
      </div>

    </div>
    
  </div>
</section>
<hr>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
</body>

</html>
 
