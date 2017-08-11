<html>
  <head>
    <meta charset="utf-8">
    <title>Project 1</title>
    <style>
      html, body {
        height: 90%;
        margin: 0;
        padding: 0;
      }
      #map, #pano {
        float: left;
        height: 100%;
        width: 50%;
      }
    </style>
  </head>
  <body> <center>
  <br>
	<h3> GOOGLE MAPS WITH STREET VIEW</h3>
	<h4> MOJOKERTO AREA</h4>
    <div id="map"></div>
    <div id="pano"></div>
    <script>

      function initialize() {
        var fenway = {lat: -7.470475, lng: 112.440133};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: fenway,
          zoom: 14
        });
        var panorama = new google.maps.StreetViewPanorama(
            document.getElementById('pano'), {
              position: fenway,
              pov: {
                heading: 34,
                pitch: 10
              }
            });
        map.setStreetView(panorama);
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzeQ13FENDxC-AfyslMh0z6y9QBPIQRzU&callback=initialize">
    </script>
  </center>
  </body>
</html>