<html>
  <head>
    <script type="text/javascript">
      function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(saveLocation);
        } else {
          alert("Geolocation is not supported by this browser.");
        }
      }

      function saveLocation(position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;
        var accuracy = position.coords.accuracy;
        var timestamp = new Date().toLocaleString();
        var data = timestamp + "," + lat + "," + lng + "," + accuracy + "\n";
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "save.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("data=" + data);
        alert("Location saved.");
      }
    </script>
  </head>
  <body>
    <button onclick="getLocation()">Get Location</button>
  </body>
</html>
