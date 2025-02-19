@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Development Services</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background: linear-gradient(135deg, rgb(121, 121, 177), rgb(92, 92, 109));
      color: white;
    }
    .services-container {
      margin-top: 50px;
      text-align: center;
    }
    .service-box {
      background: white;
      color: #333;
      border-radius: 8px;
      padding: 20px;
      transition: transform 0.3s, box-shadow 0.3s;
      position: relative;
      overflow: hidden;
    }
    .service-box img {
      max-width: 150px;
      margin: 0 auto 10px;
    }
    .service-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    .service-icon {
      font-size: 40px;
      color: #007bff;
      transition: color 0.3s;
    }
    .service-box:hover .service-icon {
      color: #0056b3;
    }
    .contact-button {
      margin-top: 20px;
      text-transform: uppercase;
    }
    /* General Styling */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background: linear-gradient(135deg, #74b9ff, #0984e3);
  color: #333;
}

main {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px;
  margin: 50px 20px;
}

/* Card Base Styling */
.card-basic,
.card-standard,
.card-premium {
  width: 300px;
  background: white;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s, box-shadow 0.3s;
}

.card-basic:hover,
.card-standard:hover,
.card-premium:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* Card Header Styling */
.card-header {
  padding: 1rem 0;
  text-align: center;
  font-size: 1.5rem;
  font-weight: bold;
  color: white;
}

.header-basic {
  background: #74b9ff;
}

.header-standard {
  background: #55efc4;
}

.header-premium {
  background: #fd79a8;
}

/* Card Body Styling */
.card-body {
  padding: 1rem;
  text-align: center;
}

.card-body h2 {
  font-size: 2rem;
  color: #0984e3;
}

.card-body p {
  margin: 0;
}

/* List Styling */
.card-element-container {
  list-style: none;
  padding: 0;
  margin: 1rem 0;
}

.card-element {
  margin: 0.5rem 0;
  font-size: 1rem;
}

/* Button Styling */
.btn {
  display: inline-block;
  padding: 0.7rem 1.5rem;
  font-size: 1rem;
  font-weight: bold;
  text-transform: uppercase;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn-basic {
  background: #74b9ff;
}

.btn-basic:hover {
  background: #0984e3;
}

.btn-standard {
  background: #55efc4;
}

.btn-standard:hover {
  background: #00cec9;
}

.btn-premium {
  background: #fd79a8;
}

.btn-premium:hover {
  background: #e84393;
}

    
  </style>
</head>
<body>
  <div class="container services-container">
    <h1>Professional Web Development Services</h1>
    <p class="mt-3">We are a reliable and affordable digital agency and talent network. We channel creativity, colors, copy, and code to help our clients with better branding.</p>
    <div class="row mt-5">
      <div class="col-md-3">
        <div class="service-box">
          <img src="images/webdev.JPG" alt="Branding">
          <i class="service-icon bi bi-card-text"></i>
          <h5 class="mt-3">Branding</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="service-box">
          <img src="images/webdev1.JPG" alt="Quality">
          <i class="service-icon bi bi-patch-check-fill"></i>
          <h5 class="mt-3">Quality</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="service-box">
          <img src="images/webdev1.JPG" alt="Design">
          <i class="service-icon bi bi-palette-fill"></i>
          <h5 class="mt-3">Design</h5>
        </div>
      </div>
      <div class="col-md-3">
        <div class="service-box">
          <img src="images/webdev.JPG" alt="Creativity">
          <i class="service-icon bi bi-send-fill"></i>
          <h5 class="mt-3">Creativity</h5>
        </div>
      </div>
    </div>
     <!-- Button to Open Modal -->
     <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#joinFormModal">
                Join now!
                </button>
  </div>
<!-- princing list page  -->
<main>
      <div class="card-basic">
        <div class="card-header header-basic">
          <h1>Basic</h1>
        </div>
        <div class="card-body">
          <p>
            <h2>$5 / mo</h2>
          </p>
          <div class="card-element-hidden-basic">
            <ul class="card-element-container">
              <li class="card-element">2 Teachers</li>
              <li class="card-element">2 Seat left </li>
              <li class="card-element">1000 request per day</li>
              <li class="card-element">20000 Students</li>
            </ul>
            <button class="btn btn-basic">Enroll Now</button>
          </div>
        </div>
      </div>
  
      <div class="card-standard">
        <div class="card-header header-standard">
          <h1>Standard</h1>
        </div>
        <div class="card-body">
          <p>
            <h2>$10 / mo</h2>
          </p>
          <div class="card-element-hidden-standard">
            <ul class="card-element-container">
              <li class="card-element">5 Teachers</li>
              <li class="card-element"> Seat Limited</li>
              <li class="card-element">2000 request per day</li>
              <li class="card-element">40000 users</li>
            </ul>
            <button class="btn btn-standard">Enroll Now</button>
          </div>
        </div>
      </div>
       <div class="card-premium">
        <div class="card-header header-premium">
          <h1>Premium</h1>
        </div>
        <div class="card-body">
          <p>
            <h2>$20 / mo</h2>
          </p>
          <div class="card-element-hidden-premium">
            <ul class="card-element-container">
              <li class="card-element">Unlimited team members</li>
              <li class="card-element">Few Seat Available</li>
              <li class="card-element">5000 request per day</li>
              <li class="card-element">Unlimited users</li>
            </ul>
            <button class="btn btn-premium">Enroll Now</button>
          </div>
      </div>
      </div>
    </main>
  <!-- Bootstrap Bundle with Icons -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- Modal form POP UP -->
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


@include('layouts.footer')


@endsection