<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TravelSafe - Your Travel Health Companion</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

body {
  font-family: 'Poppins', sans-serif;
  padding-top: 56px;
}

.navbar {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.navbar-brand img {
  max-height: 40px; /* Adjust the max-height to fit your desired size */
  margin-right: 10px;
}

.jumbotron {
  background-color: #007bff;
  color: #fff;
  padding: 8rem 2rem;
}

.jumbotron h1 {
  font-weight: 700;
}

.card {
  border: none;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
}

.card-body i {
  color: #007bff;
}

.feature-link {
  color: inherit;
  text-decoration: none;
}

.feature-link:hover {
  text-decoration: none;
}
.smooth-scroll {
  position: relative;
}

section {
  padding: 5rem 0;
}

section h2 {
  font-weight: 700;
  margin-bottom: 2rem;
}

.bg-primary {
  background-color: #007bff !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

footer {
  background-color: #343a40;
  color: #fff;
  padding: 3rem 0;
}

footer a {
  color: #fff;
}

footer a:hover {
  color: #007bff;
  text-decoration: none;
}

@media (max-width: 767px) {
  .jumbotron {
    padding: 4rem 1rem;
  }
}
</style>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="TravelSafe Logo">
        TravelSafe
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonials">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-light" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header id="home" class="jumbotron jumbotron-fluid bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="display-4">Stay Healthy While Traveling</h1>
          <p class="lead">TravelSafe is your ultimate companion for managing your health while exploring the world.</p>
          <a href="#" class="btn btn-light btn-lg">Download Now</a>
        </div>
        <div class="col-md-6">
          <img src="travel.jpg" alt="TravelSafe App" class="img-fluid">
        </div>
      </div>
    </div>
  </header>

  <!-- Features -->
  <section id="features" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">Key Features</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <a href="#" class="feature-link">
            <div class="card">
              <div class="card-body text-center">
                <i class="fas fa-globe-americas fa-3x mb-3"></i>
                <h5 class="card-title">Travel Health Advisory</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 mb-4">
          <a href="#" class="feature-link">
            <div class="card">
              <div class="card-body text-center">
                <i class="fas fa-clinic-medical fa-3x mb-3"></i>
                <h5 class="card-title">Find Medical Facilities</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 mb-4">
          <a href="#" class="feature-link">
            <div class="card">
              <div class="card-body text-center">
                <i class="fas fa-language fa-3x mb-3"></i>
                <h5 class="card-title">Translation Services</h5>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>How TravelSafe Works</h2>
          <p class="lead">Our innovative app provides a comprehensive suite of features to help you stay healthy and safe during your travels:</p>
          <ul>
            <li>Get up-to-date travel health advisories for your destinations</li>
            <li>Easily locate nearby medical facilities, including hospitals, clinics, and pharmacies</li>
            <li>Access reliable translation services for medical terms and phrases</li>
            <li>Store and access your medical records securely</li>
            <li>Receive personalized health recommendations based on your travel itinerary</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img src="smile.png" alt="How TravelSafe Works" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5">What Our Users Say</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">
              <p>"TravelSafe has been a lifesaver on my trips abroad. The medical translation feature has helped me communicate with doctors in foreign countries, and the travel advisories have kept me informed about potential health risks."</p>
              <div class="text-right">
                <strong>- Sarah T.</strong>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">
              <p>"I've always struggled to find reliable medical facilities when traveling, but TravelSafe's location services have made it so much easier. I can now explore new destinations with confidence, knowing that I have access to healthcare if needed."</p>
              <div class="text-right">
                <strong>- John S.</strong>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">
              <p>"As someone with a chronic medical condition, TravelSafe has been an invaluable companion on my adventures. The ability to access my medical records and receive personalized health recommendations has given me peace of mind and allowed me to travel more freely."</p>
              <div class="text-right">
                <strong>- Emily R.</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-white py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>About TravelSafe</h5>
        <p>TravelSafe is a leading travel health app that provides essential tools and information to help you stay safe and healthy while exploring the world.</p>
      </div>
      <div class="col-md-3">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#features" class="text-white">Features</a></li>
          <li><a href="#about" class="text-white">About</a></li>
          <li><a href="#contact" class="text-white">Contact</a></li>
          <li><a href="#" class="text-white">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>Follow Us</h5>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-facebook fa-lg"></i></a></li>
          <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a></li>
          <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a></li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy; 2024 TravelSafe. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
  // Smooth scrolling for navigation links
  $('.nav-link').on('click', function(e) {
    if (this.hash !== '') {
      e.preventDefault();
      const hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800);
    }
  });
});
</script>
</body>
</html>
