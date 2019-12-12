
function loadMap(){
	var yangon={lat:16.8661, lng:96.1951};
	var map= new google.maps.Map(document.getElementById('map'),{
          zoom: 10,
          center:yangon
        });
}