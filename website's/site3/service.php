

<!-- head includes -->

<?php include 'includes/head.php' ?>

<!-- end head include -->



<body> 
  

  <!-- header section strats -->
  <?php include 'includes/navbar.php' ?>
  <!-- end header section -->





  <!-- service section -->
  <section class="service_section layout_padding-top">
    <div class="container">
      <div class="service_detail">
        <h3>
          We
        </h3>
        <h2>
          we provide service
        </h2>
      </div>
      <div class="service_img-container">
        <div class="service_img-box i-box-1">
          <a href=""> Bank security</a>
        </div>
        <div class="service_img-box i-box-2">
          <a href="">society Guard </a>
        </div>
        <div class="service_img-box i-box-3">
          <a href="">Hotel Security </a>
        </div>
        <div class="service_img-box i-box-4">
          <a href=""> Home security</a>
        </div>
      </div>
      <div class="service_btn">
        <a href="">
          <span>
            Read More
          </span>
          <img src="images/arrow-black.png" alt="" class="ml-2" />
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- security section -->

  <section class="security_section layout_padding">
    <h3>
      Security


    </h3>
    <h2>
      Our Guard
    </h2>
    <div class="security_container">
      <div class="carousel-wrap">
        <div class="owl-carousel">
          <div class="item">
            <div class="security_img-box i-box-1">
              <a href=""> View More</a>
            </div>
          </div>
          <div class="item">
            <div class="security_img-box i-box-2">
              <a href=""> View More</a>
            </div>
          </div>
          <div class="item">
            <div class="security_img-box i-box-3">
              <a href=""> View More</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="security_btn">
      <a href="">
        <span>
          Read More
        </span>
        <img src="images/arrow-black.png" alt="" class="ml-2" />
      </a>
    </div>
  </section>
  <!-- end security section -->






  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class=" col-md-4 info_detail">
          <div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
          </div>
        </div>
        <div class=" col-md-4 address_container">
          <div>
            <h3>
              Address:
            </h3>
            <div class="address_link-container">
              <a href="">
                <img src="images/location.png" alt="">
                <span> Address: 73 Canal Street, New York, NY
                </span>
              </a>
              <a href="">
                <img src="images/phone.png" alt="">
                <span> Tel: +1 123 456 789
                </span>
              </a>
              <a href="">
                <img src="images/mail.png" alt="">
                <span>
                  Email: demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class=" col-md-4 news_container">
          <div>
            <div>
              <h3>
                newsletter

              </h3>
              <form action="">
                <input type="email" placeholder="ENTER YOUR EMAIL">
                <div>
                  <button type="submit">
                    Subscribe
                  </button>
                </div>
              </form>
            </div>
            <div class="social_container">
              <div>
                <img src="images/fb.png" alt="">
              </div>
              <div>
                <img src="images/twitter.png" alt="">
              </div>
              <div>
                <img src="images/linkedin.png" alt="">
              </div>
              <div>
                <img src="images/youtube.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>

  <script>
    $(".nav_search-btn").click(function () {
      if ($(".nav_search-input").hasClass("d-none")) {
        event.preventDefault();
        $(".nav_search-input")
          .animate({
              left: "-1000px"
            },
            "1000000"
          )
          .removeClass("d-none");
      } else {
        $(".nav_search-input")
          .animate({
              left: "0px"
            },
            "1000000"
          )
          .addClass("d-none");
      }
    });
  </script>



</body>

</html>