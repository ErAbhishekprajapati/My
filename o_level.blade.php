@extends('layouts.app')

@section('content')
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Add the following CSS to make the text blink and change color -->
<style>
    .blink-text {
        animation: blink-color 1s linear infinite;
        font-weight: bold; /* Make the text bolder */
        font-size:150%;
    }

    @keyframes blink-color {
        0% {
            opacity: 1;
            color: #ff0; /* Yellow */
        }
        50% {
            opacity: 0;
            color: #f00; /* Red */
        }
        100% {
            opacity: 1;
            color: #0f0; /* Green */
        }
    }
</style>

<!-- Hero Section with Offer -->
<section class="hero-section bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Choose Our Courses</h1>
        <p class="lead mb-4 blink-text">Get a <span class="font-weight-bold">20% Discount</span> when you book your course today!</p>
        <!-- Link now points to the section with id 'courses' -->
        <a href="#courses" class="btn btn-light btn-lg">Book Your Course Now</a>
    </div>
</section>

<!-- O-Level Overview Section -->
<section class="container py-5">
    <h1 class="text-center mb-4">O Level Education: An Overview</h1>

    <p class="lead">
        The O-Level (Ordinary Level) is a crucial stage in the educational system, particularly for students in countries like the UK, Singapore, and many other nations that follow the British curriculum. It is typically taken by students around the age of 16, marking the completion of secondary education before moving on to higher studies.
    </p>
    
    <h2>All Subjects in O-Level</h2>
    <ul>
        <li><strong>IT Tools:</strong> Basic arithmetic, algebra, geometry, and more.</li>
        <li><strong>Python Programming Language:</strong> Learning the fundamentals of Python programming, syntax, and applications.</li>
        <li><strong>Web Design:</strong> Principles of creating websites, HTML, CSS, and basic web development.</li>
        <li><strong>IOT (Internet of Things):</strong> Understanding the technology that connects everyday objects to the internet.</li>
    </ul>

    <h2>What is O-Level?</h2>
    <p>
        The O-Level is a series of exams that are part of the General Certificate of Education (GCE), offering students an opportunity to prove their academic abilities in various subjects. It serves as an essential qualification for students aiming to continue their education, either by advancing to A-levels (Advanced Level) or pursuing vocational training and apprenticeships.
    </p>

    <h2>Key Subjects in O-Level</h2>
    <ul>
        <li><strong>Mathematics:</strong> Basic arithmetic, algebra, geometry, and more.</li>
        <li><strong>English Language:</strong> Reading, writing, and communication skills.</li>
        <li><strong>Science:</strong> Physics, Chemistry, and Biology.</li>
        <li><strong>Social Studies/History:</strong> Understanding historical events.</li>
        <li><strong>Foreign Languages:</strong> French, Spanish, Mandarin, etc.</li>
        <li><strong>Geography:</strong> The physical world and human geography.</li>
        <li><strong>ICT:</strong> Digital tools, programming, and technology.</li>
    </ul>

    <h2>Why is O-Level Important?</h2>
    <p>
        O-Level qualifications are recognized internationally, making them crucial for further academic studies or career paths.
    </p>

    <h2>How to Prepare for O-Level Exams</h2>
    <ul>
        <li><strong>Study regularly:</strong> Make time each day for study.</li>
        <li><strong>Practice past papers:</strong> Familiarize yourself with exam formats.</li>
        <li><strong>Stay organized:</strong> Keep track of deadlines.</li>
        <li><strong>Seek help when needed:</strong> Ask teachers for clarification.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>
        O-Level education equips students with the necessary skills for future studies or careers.
    </p>
</section>

<!-- Call to Action Section -->
<section class="cta-section text-center py-5" id="courses">
    <div class="container">
        <h2 class="display-4 text-white">Don’t Wait – Book Your Course Today and Save 20%!</h2>

        <!-- Button for English -->
        <a href="#courses" class="btn btn-lg btn-warning mt-4" data-toggle="modal" data-target="#courseModal" data-course="English Language">Book Now for English</a>

        <!-- Button for Hindi -->
        <a href="#courses" class="btn btn-lg btn-warning mt-4" data-toggle="modal" data-target="#courseModal" data-course="Hindi">Book Now for Hindi</a>
    </div>
</section>

<!-- Modal for Booking Course -->
<div class="modal fade" id="courseModal" tabindex="-1" role="dialog" aria-labelledby="courseModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="courseModalLabel">Book Your Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="https://formspree.io/f/mzzpwqwo" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="email">Phone Number</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your Contact Number" required>
          </div>
          <div class="form-group">
            <label for="course">Course</label>
            <!-- Pre-fill the course field with the selected O-Level subject -->
            <input type="text" class="form-control" id="course" value="" readonly>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- jQuery Script to dynamically set course value in the modal -->
<script>
  // jQuery to handle the setting of the course value in the modal
  $('#courseModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var course = button.data('course') // Extract info from data-* attributes
    var modal = $(this)
    modal.find('.modal-body #course').val(course) // Set course value dynamically
  })
</script>

@include('layouts.footer')

@endsection
