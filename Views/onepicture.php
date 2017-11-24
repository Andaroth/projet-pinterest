  <div class="modal modalphoto hidden">
    <img src="<?= UP ?>adult-travel.jpg" alt="oneView">
    <h2>Ma photo</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eaque esse, magnam. Dolore animi, omnis blanditiis recusandae! Reiciendis voluptates, quidem quo. Odio, facere dolorem neque aliquam? Similique nemo, veniam ipsa?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eaque esse, magnam. Dolore animi, omnis blanditiis recusandae! Reiciendis voluptates, quidem quo. Odio, facere dolorem neque aliquam? Similique nemo, veniam ipsa?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eaque esse, magnam. Dolore animi, omnis blanditiis recusandae! Reiciendis voluptates, quidem quo. Odio, facere dolorem neque aliquam? Similique nemo, veniam ipsa?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eaque esse, magnam. Dolore animi, omnis blanditiis recusandae! Reiciendis voluptates, quidem quo. Odio, facere dolorem neque aliquam? Similique nemo, veniam ipsa?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eaque esse, magnam. Dolore animi, omnis blanditiis recusandae! Reiciendis voluptates, quidem quo. Odio, facere dolorem neque aliquam? Similique nemo, veniam ipsa?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eaque esse, magnam. Dolore animi, omnis blanditiis recusandae! Reiciendis voluptates, quidem quo. Odio, facere dolorem neque aliquam? Similique nemo, veniam ipsa?</p>
  </div>
  <style>
    .modal {
      
    }
    .modalphoto {
      position: fixed;
      display: block;
      top: 0;
      left: 0;
      height: 100vh;
      z-index: 15;
      background: #2B2B2B;
      color: white;
      padding: 100px 50px 30px 50px;
      box-sizing: border-box;
      width: 100%;
      text-align: center;
      overflow-y: scroll;
      transition: 1s ease-in-out;
    }
    .modalphoto:before {
      display: block;
      content: "";
      position: fixed;
      width: 20px;
      top: 0;
      left: 0;
      height: 100vh;
      background: white;
      z-index: 20;
    }
    .modalphoto img {
      max-width: 100%;
      max-height: 50vh;
    }
    .modalphoto > p {
      max-width: 50%;
      margin: 20px auto;
    }
    .modalphoto > p:last-child {
      margin-bottom: 50px;
    }
  </style>
  