<?php 
/*Template name: home*/
get_header();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<style type="text/css">
  
  .try{
    position: relative;
    bottom: 400px;
  }


</style>

<div class="containers">
  <h2 style="color: white;">May your heart and closet be full!</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://localhost/jayp/wp-content/uploads/2021/05/lo-collection.jpg" alt="Los Angeles" style = "width: 100%; height: 700px;">
      </div>

      <div class="item">
        <img src="http://localhost/jayp/wp-content/uploads/2021/05/lo-collection0-1.jpg" alt="Chicago" style = "width: 100%; height: 700px;">
      </div>
    
      <div class="item">
        <img src="http://localhost/jayp/wp-content/uploads/2021/05/lo1.jpg" alt="New York" style = "width: 100%; height: 700px;">
      </div>
    
      <div class="item">
        <img src="http://localhost/jayp/wp-content/uploads/2021/05/lo.jpg" alt="New York" style = "width: 100%; height: 700px;">
      </div>
    

    </div>

    <!-- Left and right controls -->
    <div class="try">
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</div>

</body>
</html>


<?php get_footer();?>