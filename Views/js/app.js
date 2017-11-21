$(document).ready(function() {
  
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
