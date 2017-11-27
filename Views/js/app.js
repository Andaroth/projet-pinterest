$(document).ready(function() {
  
  $("#pseudoinput").attr("value", "Pseudo");
  
  $("#mailinput").attr("value", "votre@mail");
  
  $(".grid-item").click(function(e) {
    e.preventDefault();
    $("#home").addClass("hidden");
    $("#onepic").removeClass("hidden");
    
    var imgurl = $(this).children("img").prop("src");
    console.log(imgurl);
    var descr = $(this).children("p").text();
    var title = $(this).children("h2").text();
   
    $("#onepic").children("img").attr("src", imgurl);
    $("#onepic").children("h2").text(title);
    $("#onepic").children("p").text(descr);
  });
  
  $("#calltoconnect").click(function(e) {
    e.preventDefault();
    // $("#home").addClass("hidden");
    $("#registermodal").removeClass("hidden");
  });
  
  $(".close").click(function(e) {
    e.preventDefault();
    $("#home").removeClass("hidden");
    $(".modal").addClass("hidden");
  });
  
  $("#profilicon").click(function(e) {
    e.preventDefault();
    $("#usermenu").toggleClass("hidden");
  });
  
  $("#opencat").click(function(e) {
    e.preventDefault();
    $("#catlist").toggleClass("hidden");
    $("#opencat").toggleClass("firebrickbg");
    $("#searchbar").toggleClass("firebrickborder");
  });
  
  $("#searchbar").click(function(){
    var barvar = $(this).val();
    if (barvar == "Faire une recherche...") {
      $("#searchbar").val("");
    }
  });
  $("#searchbar").focusout(function(){
    var barvar = $(this).val();
    if (barvar == "") {
      $("#searchbar").val("Faire une recherche...");
    }
  });
  
  $("#home").scroll(function(){
    $("#usermenu").addClass("hidden");
    $("#catlist").addClass("hidden");
  });
  
  // masonry
  var vWidth = $('body').width();
  var vHeight = $('body').height();
  
  $(window).resize(function() {
    vWidth = $('body').width();
    vHeight = $('body').height();
    console.log(vWidth+"*"+vHeight);
  });
  
  var elem = document.querySelector('.grid');
  var msnry = new Masonry( elem, {
    // options
    itemSelector: '.grid-item',
    columnWidth: function() {
      return (elem.width /4);// depends how many boxes per row
    }()
  });

  // element argument can be a selector string
  //   for an individual element
  var msnry = new Masonry( '.grid', {
    gutter: 0,
  });
});
