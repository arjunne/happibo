<?php include "header.php" ?>

<div class="start-shopping">
	<div class="container">
		<div class="col-xs-12 col-sm-12">
			<h3>We are currently available in a few stores across Bengaluru</h3>
		</div>
	</div>
	<div class="container">
		<div class="col-md-6 col-xs-12">
			<div class="map">
			<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAZzrhlgT3Mu2OvdVGshyQlPYGRdDkMDhM&sensor=false&extension=.js'></script> 
 
<script> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(12.9716, 77.5946),
            zoom: 11,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            },
            scaleControl: true,
            scrollwheel: true,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}],
        }
        var mapElement = document.getElementById('Happibo');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['Baby\'s Dayout', 'undefined', '+91 80 4121 8776', 'undefined', 'undefined', 12.9369453, 77.6145304, 'https://mapbuildr.com/assets/img/markers/default.png'],['The Baby Shop', 'undefined', '+91 80 4211 5129', 'undefined', 'undefined', 12.9715332, 77.6992977, 'https://mapbuildr.com/assets/img/markers/default.png'],['appleofmyi', 'undefined', '+91 92060 72827', 'undefined', 'undefined', 12.970246, 77.6413768, 'https://mapbuildr.com/assets/img/markers/default.png'],['Baby Mart', 'undefined', '+91 99168 86691', 'undefined', 'undefined', 12.9532297, 77.7001065, 'https://mapbuildr.com/assets/img/markers/default.png'],['Toys N Toys Baby Shop', 'undefined', '+91 80 4126 9426', 'undefined', 'undefined', 12.9784236, 77.6437155, 'https://mapbuildr.com/assets/img/markers/default.png'],['appleofmyi', 'undefined', '+91 92060 72827', 'undefined', 'undefined', 12.9798468, 77.6916984, 'https://mapbuildr.com/assets/img/markers/default.png'],['Blues & Pinks', 'undefined', '+91 80 2654 7243', 'undefined', 'undefined', 12.930827, 77.5831571, 'https://mapbuildr.com/assets/img/markers/default.png']
        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';            bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
     }
 function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
      var infoWindowVisible = (function () {
              var currentlyVisible = false;
              return function (visible) {
                  if (visible !== undefined) {
                      currentlyVisible = visible;
                  }
                  return currentlyVisible;
               };
           }());
           iw = new google.maps.InfoWindow();
           google.maps.event.addListener(marker, 'click', function() {
               if (infoWindowVisible()) {
                   iw.close();
                   infoWindowVisible(false);
               } else {
                   var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+telephone+"<p></div>";
                   iw = new google.maps.InfoWindow({content:html});
                   iw.open(map,marker);
                   infoWindowVisible(true);
               }
        });
        google.maps.event.addListener(iw, 'closeclick', function () {
            infoWindowVisible(false);
        });
 }
}
</script>
<style>
    #Happibo {
        height:400px;
        width:100%;
    }
    .gm-style-iw * {
        display: block;
        width: 100%;
    }
    .gm-style-iw h4, .gm-style-iw p {
        margin: 0;
        padding: 0;
    }
    .gm-style-iw a {
        color: #4272db;
    }
</style>

<div id='Happibo'></div>
			
		</div>
	</div>
    <div class="col-md-offset-1 col-sm-4 col-xs-12">
      <div class="address">
        <h3>Apple of my I – Indiranagar</h3>
        <p>12th Main Road, HAL 2nd Stage, Indira Nagar, Bengaluru, Karnataka 560008</p>
        <h3>Apple of my I – Whitefield</h3>
        <p>575, C Block, AECS Layout, Kundalahalli, Whitefield, Bengaluru, Karnataka 560037</p>
        <h3>Baby Mart – Marathahalli</h3>
        <p>Shop No.94/4, Outer Ring Road, Marathahalli - Sarjapur Outer Ring Rd, Chandra Layout, Marathahalli, Bengaluru, Karnataka 560037</p>
        <h3>Blues & Pinks – Jayanagar</h3>
        <p>68/69/31/32, 27th Cross Road, 8th F Main Road, Jayanagar 3rd Block, Bengaluru, Karnataka 560011</p>
        <h3>Toys N Toys Baby Shop – CMH Road</h3>
        <p>No. 238, DSOUZA Complex, 7th Cross, Chinmaya Mission Hospital Rd, Indira Nagar 1st Stage, Bengaluru, Karnataka 560038</p>
        <h3>The Baby Shop – Indiranagar</h3>
        <p>3164, Esi domlur Service road, Indira Nagar, Bengaluru, Karnataka 560008</p>
        <h3>Baby’s Dayout - Koramangala</h3>
        <p>411, 'C' Cross, Behind Vodafone, 1st Main Rd, 7th Block, Koramangala, Bengaluru, Karnataka 560095</p>
      </div>
    </div>
	</div>
</div>

<div class="container">
	<div class="col-md-12 col-xs-12">
		<div class="buy-text">
			<p>You can also buy online from our <a href="happibonew/our-products.php">products page</a> or simply call us at +91 99869 53040 to place an order via phone</p>

			<p>At this stage we are delivering only within Bengaluru.</p>
		</div>
	</div>
</div>

<?php include "footer.php" ?>