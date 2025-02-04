<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- About Section start-->
     <!-- About section end -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>kopi kenangan senja</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- feathers icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar start -->

    <nav class="navbar">
      <a href="#" class="navbar-logo">TEN<span>One Cafe</span>.</a>

      <div class="navbar-nav">
        <a href="#home">home</a>
        <a href="#about">tentang kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- hero section start-->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari nikmati secangkir <span>kopi</span></h1>
        <p>lorem ipsum dolor sit amet consectetur adipisticing elit.</p>
        <a href="#" class="cta">beli sekarang</a>
      </main>
    </section>

    <!-- hero section end-->

    <!-- About Section start-->
    <section id="about" class="about">
      <h2><span>Tentang </span>Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/p.jpeg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>kenapa memilih kopi kami ?</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi
            quidem, voluptatibus eos rem dignissimos quaerat fugit atque sint
            repellendus deserunt.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, illo?
          </p>
        </div>
      </div>
    </section>

    <!-- About section end -->

    <!-- Menu Section Start -->
    <section id="menu" class="menu">
      <h2><span> Menu </span>Kami</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed repellendus
        cupiditate autem aspernatur earum ipsum.
      </p>

      <div class="row">
        <div class="menu-card">
          <img src="img/menu/e.png" alt="x" />
          <h3 class="menu-card-title">espresso</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/e.png" alt="x" />
          <h3 class="menu-card-title">espresso</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/e.png" alt="x" />
          <h3 class="menu-card-title">espresso</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
          <img src="img/menu/e.png" alt="x" />
          <h3 class="menu-card-title">espresso</h3>
          <p class="menu-card-price">IDR 15K</p>
        </div>
      </div>
    </section>

    <!-- Menu Section End -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h2><span> Kontak </span>Kami</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed repellendus
        cupiditate autem aspernatur earum ipsum.
      </p>
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.25766577323!2d112.63028049802683!3d-7.275441714818259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1732000868450!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <button type="submit" class="btn">Kirim pesan</button>
        </form>
      </div>
    </section>
    <!-- Contact section end -->


    <!-- footer start -->

<footer>
  <div class="socials">
    <a href="#"><i data-feather="instagram" ></i></a>
    <a href="#"><i data-feather="twitter" ></i></a>
    <a href="#"><i data-feather="facebook" ></i></a>
  </div>


  <div class="links">
    <a href="#home">Home</a>
    <a href="#about">Tentang Kami</a>
    <a href="#menu">Menu</a>
    <a href="#contact">kontak</a>
  </div>

  <div class="credit"><p>Created by <a href="">afiandy</a>. | &copy; 2024.</p></div>


</footer>

     <!-- footer end -->

    <!-- feathers icons -->
    <script>
      feather.replace();
    </script>

    <!-- My javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
