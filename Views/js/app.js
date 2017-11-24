$(document).ready(function() {
  
  /*$(document).click(function(){
    if (!($("#catlist").hasClass("hidden"))) {
      $("#catlist").addClass("hidden");
    }
    if (!($("#usermenu").hasClass("hidden"))) {
      $("#usermenu").addClass("hidden");
    }
  });*/
  
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
