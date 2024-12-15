<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css\footer.css">
    <link rel="stylesheet" href="css\courses.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
.navbar {
            background-color: #004085;
        }
        .navbar-brand img {
            width: 50px;
            height: auto;
            color: white;

        }
        .navbar-brand {
            color: white;
        }
        .nav-link {
            color: #ffffff !important;
        }
        .nav-link:hover {
            color: #ffc107 !important;
        }
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
        .card {
            margin: 20px 0;
            height: 70%;
            width: 70%;
            
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
        .testimonial-img {
            width: 350px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .social-links a {
            margin: 0 5px;
            color: #0077b5; /* LinkedIn Blue */
        }
       
        .mode {
            float:right;
            color: white;
        }
        .change {
            cursor: pointer;
            border: 1px solid #555;
            border-radius: 40%;
            width: 20px;
            text-align: center;
            padding: 5px;
            margin-left: 8px;
        }
        .dark{
            background-color: #222;
            color: #e6e6e6;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            gap: 20px;

        }
        .box {
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 30%;
        }
        h2 {
            background-color: #004080;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 0;
            border-radius: 5px 5px 0 0;
        }
        .recent-events ul,
        .college-events ul,
        .campus-news ul {
            list-style-type: none;
            padding: 0;
        }
        .recent-events li,
        .campus-news li,
        .college-events li {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
        }
        .recent-events li .date,
        .campus-news li .date,
        .college-events li .date {
            font-size: 0.9em;
            color: #e74c3c;
            font-style: italic;
        }
        .recent-events li .new,
        .campus-news li .new {
            color: #e74c3c;
            font-weight: bold;
            font-size: 0.8em;
            margin-left: 5px;
        }
        .campus-news img {
            float: left;
            margin-right: 10px;
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
        .campus-news li::after {
            content: "";
            display: table;
            clear: both;
        }
        .college-events li .date-box {
            background-color: #e74c3c;
            color: white;
            padding: 5px;
            text-align: center;
            width: 50px;
            float: left;
            margin-right: 15px;
            border-radius: 5px;
        }
        .college-events li .event-desc {
            font-size: 0.9em;
        }
        .college-events li::after {
            content: "";
            display: table;
            clear: both;
        }
        .container1{
    width: 1300px;
    margin: 0px auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}





    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">
        <img src="image\logo.jpeg"alt="Institute Logo">
        I T Hunt
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="About_us.html" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Admissions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <div class="mode">
                    Dark mode:             
                    <span class="change">OFF</span>

            </li>
        </ul>
    </div>
</nav>

<!-- Carousel -->
<div id="testimonialCarousel" class="carousel slide mt-3" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active text-center">
            <img src="image\1.png" alt="Testimonial 1" class="d-block w-100">
            <div class="carousel-caption">
                <p></p>
                <h5></h5>
            </div>
        </div>
        <div class="carousel-item text-center">
            <img src="image\13.png" alt="Testimonial 2" class="d-block w-100">
            <div class="carousel-caption">
                <p></p>
                <h5></h5>
            </div>
        </div>
        <div class="carousel-item text-center">
            <img src="image\11.png" alt="Testimonial 3" class="d-block w-100">
            <div class="carousel-caption">
            </div>
        </div>
        
    </div>

    <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--news section-->
<div class="header">
    <div class="container1">
        <b>NEWS :</b>
        <marquee>
            How to knows my institude information to like in subscribe the my channel
        </marquee>

<div class="container">
    <!-- Recent Events -->
    <div class="box recent-events">
        <h2>Recent Event</h2>
        <marquee direction="up">
        <ul>
            <li>
                <span class="date">01-April-2023</span> : Lorem ipsum dolor sit amet, consectetur adipiscing elit... <span class="new"><img src="image\latest-news-blink-img.gif" alt=""></span>
            </li>
            <li>
                <span class="date">01-April-2023</span> : Lorem ipsum dolor sit amet, consectetur adipiscing elit... <span class="new"><img src="image\latest-news-blink-img.gif" alt=""></span>
            </li>
            <li>
                <span class="date">01-April-2023</span> : Lorem ipsum dolor sit amet, consectetur adipiscing elit... <span class="new"><img src="image\latest-news-blink-img.gif" alt=""></span>
            </li>
        </ul>
        </marquee>
    </div>

    <!-- Campus News -->
    <div class="box campus-news">
        <h2>Campus News</h2>
        <ul>
            <li>
                <img src="image\campus1.jpg"alt="News image">
                <strong>There are many variations.</strong><br>
                <span class="date">Sep.04.2012</span><br>
                Lorem Ipsum is simply dummy text...
            </li>
            <li>
                <img src="image\campus2.jpg" alt="News image">
                <strong>There are many variations.</strong><br>
                <span class="date">Sep.04.2012</span><br>
                Lorem Ipsum is simply dummy text...
            </li>
            <li>
                <img src="image\campus2.jpg"alt="News image">
                <strong>There are many variations.</strong><br>
                <span class="date">Sep.04.2012</span><br>
                Lorem Ipsum is simply dummy text...
            </li>
        </ul>
    </div>

    <!-- College Event Calendar -->
    <div class="box college-events">
        <h2>College Event Calendar</h2>
        <ul>
            <li>
                <div class="date-box">
                    <span>11</span><br>
                    April
                </div>
                <div class="event-desc">
                    Lorem Ipsum is simply dummy text of the printing industry...
                </div>
            </li>
            <li>
                <div class="date-box">
                    <span>19</span><br>
                    May
                </div>
                <div class="event-desc">
                    Lorem Ipsum is simply dummy text of the printing industry...
                </div>
            </li>
            <li>
                <div class="date-box">
                    <span>21</span><br>
                    June
                </div>
                <div class="event-desc">
                    Lorem Ipsum is simply dummy text of the printing industry...
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- Card Section -->
<!-- <div class="container mt-5">
    <h2 class="text-center"><b>My Selected Students in Top Company</b></h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="image\sir.jpg" class="card-img-top" alt="Program 1">
                <div class="card-body">
                    <h5 class="card-title">Program Title 1</h5>
                    <p class="card-text">Short description of Program 1. Learn more about what we offer.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="image\s1.jpg" class="card-img-top" alt="Program 1">
                <div class="card-body">
                    <h5 class="card-title">Program Title 1</h5>
                    <p class="card-text">Short description of Program 1. Learn more about what we offer.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="image\s1.jpg" class="card-img-top" alt="Program 3">
                <div class="card-body">
                    <h5 class="card-title">Program Title 3</h5>
                    <p class="card-text">Short description of Program 3. Join us for an enriching experience.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
                
            </div>


            
        </div>
    </div>
</div> -->
<!-- testimonial part here -->









<div class="container mt-5"></div>
    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <img src="image\s1.jpg"alt="Er.Abhishek" class="testimonial-img">
                <p>"This service is fantastic! Highly recommend."</p>
                <h4>- Er.Abhishek</h4>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
            <div class="carousel-item text-center">
                <img src="image\sir.jpg" alt="Lakhman sir" class="testimonial-img">
                <p>"I had an amazing experience, will come back again!"</p>
                <h4>- Lakhman Singh Chouhan</h4>
                <h6>-CEO OF THE NIELIT-</h6>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
            <div class="carousel-item text-center">
                <img src="image/mahendrapic1.jpg" alt="Mahendra bhai" class="testimonial-img">
                <p>"Absolutely loved it! Five stars all the way."</p>
                <h4>-Mahendra Mourya</h4>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--Our Course -->
    <!-- Main Content Section -->
    <section id="courses">
        <div class="courses-header">
            <h1><b>Explore My Courses</b></h1>
            <p><b><u>Choose a course that best suits your goals and start learning today!</u></b></p>
        </div>

        <div class="courses-container">
            <!-- Course 1 -->
            <div class="course-card">
                <img src="image\portfolio2.jpg" alt="Web Development">
                <h2>BCA</h2>
                <p>Learn to build modern websites from scratch using HTML, CSS, JavaScript, and more.</p>
                <a href="#enroll" class="btn">Enroll Now</a>
            </div>

            <!-- Course 2 -->
            <div class="course-card">
                <img src="image\portfolio2.jpg" alt="Data Science">
                <h2>MCA</h2>
                <p>Dive deep into data analysis, machine learning, and AI with our Data Science program.</p>
                <a href="#enroll" class="btn">Enroll Now</a>
            </div>

            <!-- Course 3 -->
            <div class="course-card">
                <img src="image\portfolio2.jpg" alt="Graphic Design">
                <h2>O level</h2>
                <p>Unleash your creativity by mastering Adobe Photoshop, Illustrator, and other design tools.</p>
                <a href="#enroll" class="btn">Enroll Now</a>
            </div>
            <!-- Course 4 -->
            <div class="course-card">
                <img src="image\portfolio2.jpg" alt="Graphic Design">
                <h2>A level</h2>
                <p>Unleash your creativity by mastering Adobe Photoshop, Illustrator, and other design tools.</p>
                <a href="#enroll" class="btn">Enroll Now</a>
            </div>

            <!-- Course 5 -->
            <div class="course-card">
                <img src="image\portfolio2.jpg" alt="Graphic Design">
                <h2>ADCA</h2>
                <p>Unleash your creativity by mastering Adobe Photoshop, Illustrator, and other design tools.</p>
                <a href="#enroll" class="btn">Enroll Now</a>
            </div>
            <!-- Course 6 -->
            <div class="course-card">
                <img src="image\portfolio2.jpg" alt="Graphic Design">
                <h2>CCC</h2>
                <p>Unleash your creativity by mastering Adobe Photoshop, Illustrator, and other design tools.</p>
                <a href="#enroll" class="btn">Enroll Now</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy;2015 to<?php echo "Today is ".date("Y/m/d");?> All rights reserved.</p>
    </footer>
    <style>
        .box1 {
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        h2 {
            background-color: #004080;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 0;
            border-radius: 5px 5px 0 0;
        }
        .chairman-section img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        .chairman-info {
            display: flex;
            align-items: center;
            padding: 10px 0;
        }
        .chairman-info strong {
            font-size: 1.2em;
        }
        .chairman-info .position {
            color: #e74c3c;
        }
        .chairman-info .details {
            padding-left: 10px;
        }
        .awards-section img, .certificate-section img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <!-- Our Chairman Section -->
        <div class="col-md-4">
            <div class="box1 chairman-section">
                <h2>Our Chairman</h2>
                <div class="chairman-info">
                    <img src="image/sir1.JPG" alt="Chairman">
                    <div class="details">
                        <strong>Er. Lakhman Singh Chouhan</strong><br>
                        <span class="position">CEO, IT Hunt</span><br>
                        <span>2010-2024</span>
                    </div>
                </div>
                <div class="chairman-info">
                    <img src="image/sir1.JPG" alt="Principal">
                    <div class="details">
                        <strong>Er.Lakhman Singh Chouhan</strong><br>
                        <span class="position">Principal, IT Hunt</span><br>
                        <span>2020-2024</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our College Awards Section -->
        <div class="col-md-4">
            <div class="box1 awards-section">
                <h2>Our College Awards</h2>
                <img src="image/award.JPG" alt="Awards Image">
            </div>
        </div>

        <!-- My College Certificate Section -->
        <div class="col-md-4">
            <div class="box1 certificate-section">
                <h2>My College Certificate</h2>
                <img src="image/Certificate.JPG" alt="Certificate Image">
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<!--Main footer here-->
<footer class="footer-distributed">

    <div class="footer-left">
        <h3>Abhishek<span>Developer</span></h3>
  
        <p class="footer-links">
            <a href="index.html">Home</a>
            |
            <a href="#">About</a>
            |
            <a href="#">Contact</a>
            |
            <a href="#">Blog</a>
        </p>
  
        <p class="footer-company-name">Copyright © 2023 <strong>Er.Abhishek prajapati</strong> All rights reserved</p>
    </div>
  
    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Ghaziabad</span>
                Delhi</p>
        </div>
  
        <div>
            <i class="fa fa-phone"></i>
            <p>+91 7011218444</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="abhishekpra633@gmail.com">abhishekpra633@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the Institute</span>
            <strong>App Developer wala</strong> is a Youtube channel where you can find more creative CSS Animations
            and 
            Effects along with
            HTML,CSS JS Reactjs python and Projects using pandas and other libray
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook" target="_blank"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/@appdeveloperwala2932" target="_blank"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
  </footer>
 

<footer class="text-center">
    <div class="container">
        <p>&copy; 2015 to till now IT Hunt. All rights reserved.</p>
        <div class="social-links">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">LinkedIn</a>
        </div>
    </div>
</footer> 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
<script>
    $( ".change" ).on("click", function() {
        if( $( "body" ).hasClass( "dark" )) {
            $( "body" ).removeClass( "dark" );
            $( ".change" ).text( "OFF" );
        } else {
            $( "body" ).addClass( "dark" );
            $( ".change" ).text( "ON" );
        }
    }); 
</script>
</body>
</html>
