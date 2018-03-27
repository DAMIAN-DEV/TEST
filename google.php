<?php
/**
 * Created by PhpStorm.
 * User: Alger13
 * Date: 14.01.2018
 * Time: 11:23
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            margin: 0px;
        }
        #map {

            height:200px;
            width:20%;
            margin-left: 40%;
            margin-top: 250px;

        }
    </style>
</head>
<body>

 <div id="map" >



 </div>

 <script>
  function initMap(){

      var mainPoint = {lat:50.4130559,lng:30.636074};

      var map = document.getElementById('map');

      var optinons = {
          zoom:17,
          center:mainPoint
      };

      var GMA = new google.maps.Map(map,optinons);

      var marker = new google.maps.Marker({position:mainPoint,map:GMA});

      var InfoWindow = new google.maps.InfoWindow({content:'<strong>This is main point =)</strong>'});

      InfoWindow.open(GMA,marker);

      marker.addListener('click',function () {
          document.body.innerHTML = "Go naher";
      });



  }
 </script>

 <script async defer src ="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqyJU_CwzcmISFbWekd1NXH1oo1fIDFx0&callback=initMap">
 </script>
</body>
</html>
