$(document).ready(function(){
   $("#left-bg2").height($("#center-bg").height() - $("#left-bg").height());
  $("#right-bg2").height($("#center-bg").height() - $("#right-bg").height());

  $("#sideBar").height($("#center-bg").height());
  Cufon.replace('#sidebar-News');
  Cufon.replace('.content-title');
});

$(function(){
  $("#login-button").click(function(event){
    event.preventDefault();
    $("#login-box").slideToggle();
  })
});