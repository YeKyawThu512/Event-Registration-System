<?php  
include("config.php");
include("title_bar.php");
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Event</title>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

  

  
<style>

.carousel-item {
  height: 70vh;
  min-height: 300px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.carousel-caption{
  text-align:center;
  
  color:#fafafa;
  padding:10px;
  margin-bottom:0px;
  opacity:.9;
  border-radius:10px 10px 0px 0px;
}
.lead1{
  float:right;
}

</style>
</head>
<body>


<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('img/slide1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Welcome!!!</h2>
          <p class="lead">This is a finest place for you...</p>
        </div>
      </div>
      
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/slide.5.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h4 class="display-4"></h4>
          <p class="lead"><a href="events.php"><input type="submit" class="btn btn-info" value="So Let's Join"></a></p>
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

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    


   <h1 class="display-4">BarCamp</h1>
   <p class="lead">BarCamp is an international network of user-generated conferences primarily focused around technology and the web. They are open, participatory workshop-events, the content of which is provided by participants. The first BarCamps focused on early-stage web applications, and were related to open source technologies, social software, and open data formats.

The format has also been used for a variety of other topics, including public transit, health care, education, and political organizing. The BarCamp format has also been adapted for specific industries like banking, education, real estate and social media.</p>
<h1 class="display-4">Free Conference</h1>
    <p class="lead1">Run a free conference call anytime and from anywhere for as many as 1,000 participants.You can easily see what's happening during your conference call and manage callers live. Run question & answer sessions like a pro!</p>
  </div>
</section>
<?php include("footer.php") ?>
</body>
</html>