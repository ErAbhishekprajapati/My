@extends('layouts.app')
@section('content')

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Courses</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .image-wrapper {
    position: relative;
    width: 100%;
    height: 400px;
}

.img-1 {
    width: 200px;
    height: 200px;
    top: 20px;
    left: 60px;
}

.img-2 {
    width: 200px;
    height: 200px;
    bottom: 20px;
    right: 60px;
}

.image-wrapper::before,
.image-wrapper::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    z-index: -1;
}

.image-wrapper::before {
    width: 120px;
    height: 120px;
    top: 80px;
    left: 30px;
    background: #f8d210;
}

.image-wrapper::after {
    width: 150px;
    height: 150px;
    bottom: 50px;
    right: 30px;
    background: #6c63ff;
}
/* Add hover effect to the card */
.card:hover {
            transform: scale(1.09); /* Slightly enlarge the card */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add a shadow effect */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
        }
/* Ensuring that all images inside cards have the same size */
.card-img-top {
            height: 200px; /* Fixed height */
            object-fit: cover; /* Maintain aspect ratio and cover the container */
            width: 100%; /* Ensure the width is full of the card */
        }
        /* CSS for responsive YouTube iframe */
    .video-container {
      max-width: 100%;
      height: 400px; /* Fixed height for the banner */
      margin: 0 auto;
      overflow: hidden;
    }

    .video-container iframe {
      width: 100%;
      height: 100%;
      border: none;
    }

    </style>
<body>
<div class="container my-5">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-md-6 text-center text-md-start">
                <p class="text-primary fw-bold">100% satisfaction guarantee</p>
                <h1 class="fw-bold">Online courses at your time!</h1>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </p>
               <!-- Button to Open Modal -->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#joinFormModal">
                Join now!
                </button>
            </div>

            <!-- Image Content -->
            <div class="col-md-6 position-relative">
                <div class="image-wrapper">
                    <img
                        src="images/study1.jpg"
                        alt="Person studying on a laptop"
                        class="rounded-circle img-fluid position-absolute img-1"
                    >
                    <img
                        src="images/callimage.JPG"
                        alt="Person writing notes"
                        class="rounded-circle img-fluid position-absolute img-2"
                    >
                   
                </div>
            </div>
        </div>
        <div class="imgwh1">
        <img src="images/12.png" alt="" style="width: 1100px; height: 430px;">
        </div>
        <!-- video tag here -->
        <div class="video-container">
        <!-- Correct autoplay parameter in the YouTube video URL -->
        <iframe src="https://www.youtube.com/embed/S88uag4h9fw?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
        <div class="imgwh1">
        <img src="images/41.jpg" alt="" style="width: 1100px; height: 450px;">
        </div>
        <div class="container mt-5">
    <h1 class="text-center mb-4">My Courses</h1>
    <div class="row">
        <!-- Course Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="images/portfolio2.jpg" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Course Title 1</h5>
                    <p class="card-text">This is a short description of the course. It covers the basic concepts of programming.</p>
                    <a href="/o_level" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Course Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="images/webdev.JPG" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Course Title 2</h5>
                    <p class="card-text">This is a short description of the course. It focuses on advanced data analytics techniques.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Course Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="images/datascience.JPG" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Course Title 3</h5>
                    <p class="card-text">This course will introduce you to the world of machine learning and AI.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Course Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="images/webdev1.JPG" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Course Title 4</h5>
                    <p class="card-text">Learn web development from scratch, covering HTML, CSS, and JavaScript fundamentals.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Course Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="images/clud.jpg" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Course Title 5</h5>
                    <p class="card-text">This course covers the basics of cloud computing, services, and deployment models.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Course Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="images/portfolio1.jpg" class="card-img-top" alt="Course Image">
                <div class="card-body">
                    <h5 class="card-title">Course Title 6</h5>
                    <p class="card-text">Master data visualization techniques using tools like Tableau and Power BI.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal form POP UP box-->
<div class="modal fade" id="joinFormModal" tabindex="-1" aria-labelledby="joinFormModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="joinFormModalLabel">Join Online Courses Enquery </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Inside Modal -->
                <form action="https://formspree.io/f/mzzpwqwo" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    ></script>
    
@include('layouts.footer')
@endsection
</body>
</html>

