@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Final Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>

    
    <!-- slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/2.jpg" alt="Image slider">
            </div>
            <div class="carousel-item ">
                <img src="images/4.jpg" alt="Image slider">
            </div>
            <div class="carousel-item ">
                <img src="images/5.jpg" alt="Image slider">
            </div>
        </div>
    </div>

    <div class="carousel-caption">
        <h1 class="display-2">JOSHAN KARKI</h1>
        <div class="btn btn-primary btn-lg"><a href="#aboutme" style="color: #fff; text-decoration: none;">KNOW ABOUT PROJECT</a></div>
        <div class="btn btn-primary btn-lg"><a href="#contact" style="color: #fff; text-decoration: none;">CONTACT</a></div>
    </div>



    <!-- Welcome Section -->
    <div id="aboutme" class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4"><strong>About Project</strong></h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">Nepal, country of Asia, lying along the southern slopes of the Himalayan mountain ranges. It is a landlocked country located between India to the east, south, and west and the Tibet Autonomous Region of China to the north. Nepal is a country of highly diverse and rich geography, culture, and religions. The mountainous north has eight of the world's ten highest mountains, including the highest, Sagarmatha, known in English as Mount Everest. The fertile and humid south is heavily urbanized. It contains over 240 peaks more than 20,000 ft. (6,096 m) above sea.
                People of many    castes and religions leave here. About hundred languages are spoken. Our popular foods are dal bhat, dhindo, gundurk etc. dashain, tihar,losar,Id etc. are the most popular festivals. They observe these festivals very happily.
                </p>
            </div>
        </div>
    </div>




    
    <!--- Connect -->
    <div id="contact" class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <section id="contact-section">
                    <div class="container">
                        <h2>Connect</h2>
                    </div>

                    <div>
                        <form name="contactForm" 
                        onsubmit="validateForm()">
                            <input type="text" name="firstName" 
                            placeholder="Your name" required> <br> </br>
                            <input type="text" name="lastName"
                             placeholder="Last name" required><br> </br>
                            <input type="email" name="email"
                             placeholder="Email" required><br> </br>
                            <textarea name="message"
                             placeholder="Message" rows="5" required></textarea>
                            <input type="submit" value="Send your Message">
                        </form>
                        <!--Javascript-->
                        <script>
                            /*Form validation*/
                            function validateForm() {
                                var firstName = document.forms["contactForm"]["firstName"].value;
                                var lastName = document.forms["contactForm"]["lastName"].value;
                                var email = document.forms["contactForm"]["email"].value;
                                var message = document.forms["contactForm"]["message"].value;
                                if (firstName == " " || lastName == " " || email == " " || message == " ") {
                                    alert("Empty fields found. Please fill the form correctly.");
                                } else {
                                    alert("Thank you for your message. We will get back to you soon!");
                                }
                            }
                        </script>
                    </div>

                    <div class="col-12 social padding">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </section>
            </div>
        </div>
    </div>



    <!--- Footer -->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class=" col-12">
                    <hr class="light">
                    <h5>Joshan Karki</h5>
                    <p>zoshankarkey1@gmail.com</p>
                    <p>+977-9824784833</p>
                    <p>Kathmandu,Nepal</p>
                

                </div>

                <div class="col-12">
                    <hr class="light">
                    <h5>&copy; 2020.All Right Reserved</h5>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>

@endsection