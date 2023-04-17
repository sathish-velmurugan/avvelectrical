<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap">
    <title>AVV Electricals</title>
    <?php include 'gtm-head-tag.php';?>
  </head>
  <body>
    <!-- Navbar section start -->
    <?php include 'header.php';?>
    <!-- Navbar section end -->
    <!-- Banner section start -->
    <section class="gallery-banner text-center">
        <div class="container">
            <h1 class="font-weight-600">Project Gallery</h1>
            <p class="text-white">We serving best electrical services in Singapore. Our electricians are HDB Electrician in Singapore and we offer 24 hours electrical services to all regions of Singapore. We listed our project gallery for your reference, so that you can trust us and give your office or home place for electrical service. All Works from our side is handled by professional and experienced electricians from AVV Electrical Service Singapore.</p>
        </div>
    </section>
    <!-- Banner section end -->
    <!-- Gallery slider section -->
    <section class="gallery-thumbnail-slider">
        <div class="container">
            <div class="gpage-width">
                <div id="sync1" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="images/gallery-img-1.jpg" alt="gallery" />
                    </div>
                    <div class="item">
                        <img src="images/gallery-img-1.jpg" alt="gallery" />
                    </div>
                    <div class="item">
                        <img src="images/gallery-img-1.jpg" alt="gallery" />
                    </div>
                    <div class="item">
                        <img src="images/gallery-img-1.jpg" alt="gallery" />
                    </div>
                    <div class="item">
                        <img src="images/gallery-img-1.jpg" alt="gallery" />
                    </div>
                </div>
                <div id="sync2" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="images/gallery-thumbnail-img1.jpg" alt="gallery" />
                    </div>
                    <div class="item">
                        <img src="images/gallery-thumbnail-img1.jpg" alt="gallery" />
                    </div>
                    <div class="item">
                        <img src="images/gallery-thumbnail-img1.jpg" alt="gallery" />
                    </div>
                    <div class="item">
                        <img src="images/gallery-thumbnail-img1.jpg" alt="gallery" />
                    </div>
                    <div class="item">
                        <img src="images/gallery-thumbnail-img1.jpg" alt="gallery" />
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <!-- 24/7 Emergency Electrician Services in Singapore section start -->
    <section class="home-bookappointment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5>Want to learn more about TV Point Installation Experts?</h5>
                    <p>To schedule your next TV point service, please feel free to call us at [insert phone number. Alternatively, you can contact us online. We provide services to all regions of the county.</p>
                </div>
                <div class="col-md-6 text-center">
                    <h6 class="pb-3">Book An Appoinment</h6>
                    <a href="tel:+65 9169 4893">+65 9169 4893</a>
                </div>
            </div>   
        </div>
    </section>
    <!-- 24/7 Emergency Electrician Services in Singapore section end -->
    <!-- Footer start -->
    <?php include 'footer.php';?>
    <!-- Footer end -->
    <script src="js/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
    $(document).ready(function() {

    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: false,
        autoplay: false, 
        dots: false,
        loop: true,
        responsiveRefreshRate: 200,
    }).on('changed.owl.carousel', syncPosition);

    sync2.on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
    .owlCarousel({
        items: slidesPerPage,
        dots: false,
        nav: true,
        margin:10,
        //center: true,
        smartSpeed: 200,
        slideSpeed: 500,
        slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
        responsiveRefreshRate: 100
    }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block
        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
        }

        function syncPosition2(el) {
            if (syncedSecondary) {
                var number = el.item.index;
                sync1.data('owl.carousel').to(number, 100, true);
            }
        }

        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).index();
            sync1.data('owl.carousel').to(number, 300, true);
        });
    });
    </script>
  </body>
</html>