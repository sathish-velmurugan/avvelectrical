<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>AVV Electricals</title>
    <?php include 'gtm-head-tag.php';?>
  </head>
  <body>
    <!-- Navbar section start -->
    <?php include 'header.php';?>
    <!-- Navbar section end -->
    <!-- Banner section start -->
    <section class="contact-banner text-center project-width">
        <div class="container">
            <h1 class="font-weight-600 text-black">Contact Us</h1>
            <p class="text-black">If you need reliable electrical service provider in Singapore, look no further. Contact us today to get your electrical issues fixed quickly and efficiently. Our team of skilled electricians are equipped to handle any job, big or small. We pride ourselves on providing exceptional customer service and quality workmanship. Don't hesitate to reach out to us for all your electrical needs.</p>
            <div class="row contact-info">
                <div class="col-md-4">
                    <h6 class="text-black font-weight-600">Phone Number</h6>
                    <a href="tel:+65 9169 4893">+65 9169 4893</a>
                </div>
                <div class="col-md-4">
                    <h6 class="text-black font-weight-600">Email</h6>
                    <a href="mailto:avvelectrical@gmail.com">avvelectrical@gmail.com</a>
                </div>
                <div class="col-md-4">
                    <h6 class="text-black font-weight-600">Location</h6>
                    <map>21 Toh Guan Rd E, Singapore</map>
                </div>
            </div>
            <form method="POST" class="contact-form" id="contact__form">
                <div id="result"></div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <input class="form-control" type="text" placeholder="Name*" name="name">
                    </div>
                    <div class="col-md-4 mb-4">
                        <input class="form-control" type="text" placeholder="Phone Number*" name="phone">
                    </div>
                    <div class="col-md-4 mb-4">
                        <input class="form-control" type="email" placeholder="Email*" name="email">
                    </div>
                    <div class="col-md-12">
                        <div class="mb-4">
                            <textarea class="form-control" placeholder="Describe Your Problem" rows="3" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark mb-3 text-center">SUBMIT</button> 
                        <div id="loader_div"><img style="width:30px;" src="images/loading.gif" alt="loader"></div>
                    </div>
                </div>
            </form>
        </div>   
    </section>
    <!-- Banner section end -->
    <!-- Our extensive service area includes section start -->
    <section class="contact-service-area text-black project-width">
        <div class="container">
            <h5 class="text-center font-weight-600">Our extensive service area includes</h5>
            <p class="text-center">We are proud to be among the very few electrical service providers to operate in an extensive area, while consistently providing excellent workmanship and the highest level of service for every customer. </p>
            <div class="row">
                <div class="col-md-3">
                    <ul>
                        <li><span>Bukit Merah</span></li>
                        <li><span>Central Area</span></li>
                        <li><span>Geylang</span></li>
                        <li><span>Kallang</span></li>
                        <li><span>Marine Parade</span></li>
                        <li><span>Novena, Queenstown</span></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><span>Toa Payoh</span></li>
                        <li><span>Bedok</span></li>
                        <li><span>Changi</span></li>
                        <li><span>Pasir Ris</span></li>
                        <li><span>Tampines</span></li>
                        <li><span>Woodlands</span></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><span>Yishun</span></li>
                        <li><span>Sembawang</span></li>
                        <li><span>Admiralty</span></li>
                        <li><span>Hougang</span></li>
                        <li><span>Punggol</span></li>
                        <li><span>Sengkang</span></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><span>Serangoon</span></li>
                        <li><span>Bukit Batok</span></li>
                        <li><span>Choa Chu Kang</span></li>
                        <li><span>Clementi</span></li>
                        <li><span>Jurong East</span></li>
                        <li><span>Jurong West</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Our extensive service area includes section end -->
    <!-- Footer start -->
    <?php include 'footer.php';?>
    <!-- Footer end -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script>
    // Contact us form submission scripts
    $("#contact__form").validate({
        rules: {
        name: {
            required: true,
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
            number: true,
            minlength: 7,
            maxlength: 15
        }
        },
        messages: {
        name: {
            required: "Please Enter Your Name",
            specialChar: "Please enter alphabetical letters only"
        },
        email: {
            required: "Please Enter Your Email",
            email: "The email should be in the format: abc@domain.tld",
        },
        phone: {
            required: "Please Enter your Phone number",
            number: "Please Enter your Phone number",
            minlength: "Please Enter valid Phone number"
        }
        }
    });
    // Contact form submission and validations
    jQuery("#contact__form .message").hide();
    jQuery("#contact__form #loader_div").hide();
    jQuery('#contact__form').on('submit', function(g) {
      g.preventDefault();
      var name = jQuery('#contact__form input[name=name]').val();
      var email = jQuery('#contact__form input[name=email]').val();
      var phone = jQuery('#contact__form input[name=phone]').val();
      var message = jQuery('#contact__form textarea[name=message]').val();
      if (jQuery('#contact__form').valid()) {
        jQuery("#contact__form #loader_div").show();
        jQuery.ajax({
            type: "POST",
            url: "sendmail.php",
            data: {
                name: name,
                email: email,
                phone: phone,
                message: message,
            },
            dataType: 'json',
            success: function(response) {
                $("#contact__form #loader_div").hide();
                if (response.success) {
                    $('#result').html('<div class="alert alert-success">'+ response.message +'</div>');
                } else {
                    $('#result').html('<div class="alert alert-danger">'+ response.message +'</div>');
                }
                setTimeout(function() { $('#result').empty(); }, 5000);
                $('#contact__form')[0].reset();
            },
            error: function(xhr, status, error) {
                console.log('Error:', error);
            }
        });
      } else {}
      return false;
    });
    </script>
  </body>
</html>