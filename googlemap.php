<!DOCTYPE html>
<html>
<head>
<style>
.container{
	height:450px;
}
#map{
	width:100%;
	height:100%;
	border:1px solid blue;
}


</style>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(16.8661,96.1951),
    zoom:5,
   
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
 <div class="container">
 
<div id="googleMap" style="width:500px;height:380px;"></div>

</body>
</html>