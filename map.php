<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyC8wseCoHlv0vPHlMEppukYLO8RhleEb48'></script>
<div style='overflow:hidden;height:464px;width:381px;'>
<div id='gmap_canvas' style='height:464px;width:381px;'></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important}
</style>
</div> 
<a href='https://www.add-map.net/'>embed google map on website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=afe8f0c64e6234c65717e715c621b33afc9c4778'>
  
</script>
<script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(32.9588,-96.9812),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(32.9588,-96.9812)});infowindow = new google.maps.InfoWindow({content:'<strong>Myanmar</strong><br>Botahtaung<br>1996 Yangon<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>

</html>