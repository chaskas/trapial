$(document).ready(function(){
  $("#left-bg2").height($("#center-bg").height() - $("#left-bg").height());
  $("#right-bg2").height($("#center-bg").height() - $("#right-bg").height());

  $("#sideBar").height($("#center-bg").height());
  Cufon.replace('#sidebar-News');
  Cufon.replace('.content-title');
  Cufon.replace('.gallery-title');
  Cufon.replace('h1.lastest-news-h1');
  Cufon.replace('h1.titulo-equipo');
  Cufon.replace('h2.titulo-nivel');
});

$(function(){
  $("#login-button").click(function(event){
    event.preventDefault();
    $("#login-box").slideToggle();
  })
});