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