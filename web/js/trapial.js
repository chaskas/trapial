$(document).ready(function(){
    $("#left-bg2").height($("#center-bg").height() - 679);
    $("#right-bg2").height($("#center-bg").height() -679);
    $("#sideBar").height($("#center-bg").height());
});

$(function(){
  $("#login-button").click(function(event){
    event.preventDefault();
    $("#login-box").slideToggle();
  })
});

function initialize() {
  var latlng = new google.maps.LatLng(-36.82854, -73.045889);
  var myOptions = {
    zoom: 15,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

  var marker = new google.maps.Marker({map: map, position: map.getCenter()});

  var infowindow = new google.maps.InfoWindow();
  infowindow.setContent('<p><b>Mundo cantaclaro</b></p><p>Cochrane 870, Concepci&oacute;n</p><p>041 223 73 84</p>');
  google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
  });
}