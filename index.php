<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
  

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="template/img/1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="template/img/2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="template/img/3.jpg" alt="New York">
    </div>
  
  <div class="t" style="position: absolute;top: 50%;left: 25%;text-align: center;font-size: 4em;">WELCOME TO SAJHA STORE
  </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


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
        <a href="about.php" class="btn btn-primary">more</a>
      </div>

    </div>
    
  </div>
  
</section>



      <!-- Example row of columns -->
      <section>
        
      <div class="container" >
        
        <h1 class="text-center text-capitalize pt-10 my-10" style="padding: 10px; margin: 40px;">Lastest book</h1>
        <h1 class="w-25" mx-auto pt-5></h1>


       <div class="row text-center my-10">
        <?php foreach($row as $book) { ?>
      	<div class="col-lg-3 col-md-3 col-12">
          <div class="card">
      		  <a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
            <img class="card-img-top" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
            </a>
            <div class="card-body">
              <h4 class="card-title"><?php echo $book['book_title']; ?></h4>
              <!-- <p>something about this book</p> -->
              <a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>" class="btn btn-primary">Detail</a>
            </div>
          </div>
      	</div>
        <?php } ?>
       </div>


      </div>
</section>
 <hr>
  
  <section class="bg-primary">
  <article class=" text-center text-white mx-auto pt-5">
    <div style="padding: 20px; margin: 0px;">
      <h1 class="display-4">+9779865081372</h1>
      <p>If you have any problem call us now.</p>
      <a href="contact.php" class="btn btn-warning">Contct Now</a>
    </div>
  
  </article>
</section>

<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>



 
</body>
</html>