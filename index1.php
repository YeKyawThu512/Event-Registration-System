<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<style>
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.carousel-caption{
  text-align:center;
  background-color:#2d3135;
  color:#fafafa;
  padding:20px;
  margin-bottom:0px;
  opacity:.7;
  border-radius:10px 10px 0px 0px;
}

</style>
</head>
<body>


<!-- Navigation -->

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('img/slide1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Event Viewer</h2>
          <p class="lead">This is make a connection between attendees and organziers.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/slide2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Look at the same event with fresh yes</h2>
          <p class="lead">Sometimes letting go is simply changing the labels you place on an event.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/slide.5.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h4 class="display-4">Corporate event or Conference?Find your led solution here!</h4>
          <p class="lead"><a href="events.php"><input type="submit" class="btn btn-info" value="Getting Started"></a></p>
        </div>
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
</header>

<!-- Page Content
<section class="py-5">
  <div class="container">
    <h1 class="display-4">Full Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>
  </div>
</section> -->
</body>
</html>