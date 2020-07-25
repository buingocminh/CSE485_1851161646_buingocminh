function Map1() {
    // The location of Uluru
    var loc1 = {lat: 10.760803, lng: 106.661598};
    // The map, centered at Uluru
    var map1 = new google.maps.Map(
        document.getElementById('map1'), {zoom: 16, center: loc1});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: loc1, map: map1});
  }
  function Map2() {
    var loc2 = {lat: 10.760803, lng: 106.661598};
    var map2 = new google.maps.Map(
        document.getElementById('map2'), {zoom: 50, center: loc2});
    var marker = new google.maps.Marker({position: loc2, map: map2});
  }
 