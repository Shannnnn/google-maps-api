<!DOCTYPE html>
<html>
	<head>
      <script src = "https://maps.googleapis.com/maps/api/js"></script>
   </head>
		<script>
			function myMap() {
				var mapProp= {
	 			 center:new google.maps.LatLng(51.508742,-0.120850),
	 			 zoom:5,
	 			 mapTypeId:google.maps.MapTypeId.ROADMAP
				};
			
				var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			}
		</script>
	<body>
		<h1>Google Map</h1>

		<div id="googleMap" style="width:100%;height:400px;"></div>
	</body>
</html>