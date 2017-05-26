<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="estilos.css">
</style>
<body>
	<?php include("header.php"); ?>

	<div class="w3-container" id="where" style="padding-bottom:32px;">
	  <div class="w3-content" style="max-width:700px">
	    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
	    <p>Find us at some address at some place.</p>
	    <div id="googleMap" class="w3-sepia" style="width:100%;height:400px;"></div>
	    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
	    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
	    <form action="/action_page.php" target="_blank">
	      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
	      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
	      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
	      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
	      <p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
	    </form>
	  </div>
	</div>
	<script>
		  function myMap()
	    {
	      myCenter=new google.maps.LatLng(41.878114, -87.629798);
	      var mapOptions= {
	        center:myCenter,
	        zoom:12, scrollwheel: false, draggable: false,
	        mapTypeId:google.maps.MapTypeId.ROADMAP
	      };
	      var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
	      var marker = new google.maps.Marker({
	        position: myCenter,
	      });
	      marker.setMap(map);
	    }
	</script>
	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKrRvBF8kMMFg4UJJGMyKhZUa6suNjNpU&callback=myMap"></script>

	<?php include("footer.php"); ?>

</body>
</html>