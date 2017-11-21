  <main id="home" class="grid">
    <a class="grid-item" href="#">
      <img src="upload/adult-travel.jpg" alt="road">
      <h3></h3>
      <p></p>
    </a>
    <a class="grid-item" href="#">
      <img src="upload/autumn-nature.jpg" alt="autumn">
      <h3></h3>
      <p></p>
    </a>
    <a class="grid-item" href="#">
      <img src="upload/balloon-travel.jpg" alt="balloon">
      <h3></h3>
      <p></p>
    </a>
    <a class="grid-item" href="#">
      <img src="upload/bike-travel.jpg" alt="travel">
      <h3></h3>
      <p></p>
    </a>
    <a class="grid-item" href="#">
      <img src="upload/blue-nature.jpg" alt="blue_lagon">
      <h3></h3>
      <p></p>
    </a>
    <a class="grid-item" href="#">
      <img src="upload/forest-nature.jpg" alt="forest">
      <h3></h3>
      <p></p>
    </a>
    <a class="grid-item" href="#">
      <img src="upload/balloon-travel.jpg" alt="balloon">
      <h3></h3>
      <p></p>
    </a>
    <a class="grid-item" href="#">
      <img src="upload/bike-travel.jpg" alt="travel">
      <h3></h3>
      <p></p>
    </a>
    <a class="grid-item" href="#">
      <img src="upload/blue-nature.jpg" alt="blue_lagon">
      <h3></h3>
      <p></p>
    </a>
    <a class="grid-item" href="#">
      <img src="upload/forest-nature.jpg" alt="forest">
      <h3></h3>
      <p></p>
    </a>
  </main>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script type="text/javascript">
var elem = document.querySelector('.grid');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});

// element argument can be a selector string
//   for an individual element
var msnry = new Masonry( '.grid', {
  gutter: 0,
});
</script>
