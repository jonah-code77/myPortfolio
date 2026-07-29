
<?php
/**
 * @var string $name
*/
use App\Core\View;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/asset/style.css" rel="stylesheet" />
</head>
<body class="bg-dark text light">

<!-- nav bar -->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
    <div class="container">
        <a href="#" class="navbar-brand fw-bold">Big_Jonah</a>
        <button class="navbar-toggler " type="button" data-bs-target="#navbarNav" data-bs-toggle="collapse"
        aria-controls="navbarNav" aria-expanded="false" aria-label="toggle-navigation">
            <span class="" id="toggle-icon">&#9776;</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#projects" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="#skill" class="nav-link">Skills</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contacts</a></li>
            </ul>
        </div>
    </div>
 </nav>

 <div class="container text-center py-5 hero" id="home">
    <h1 class="fw-bold">Hi, i'm Jonathan - a Full-stack PHP Developer</h1>
    <p class="lead">I build scalable web apps and user-friendly digital experiences.</p>
    <div class="mt-4">
        <a href="#projects" class="btn btn-outline-light me-2">View My Works</a>
        <a href="#" class="btn btn-outline-light me-2">Download Resume</a>
    </div>
 </div>

 <div class="container py-5" id="about">
    <h3 class="text-uppercase fw-bold">About Me</h3>
    <p>
        i'm a computer science graduate from the prestigious UNIVERSITY OF BENIN(UNIBEN).
        my passion lies in Web Devlopment and Database management.
        i enjoy solving real-world problems with code and learning new technologies.
    </p>
 </div>

 <div class="container py-5" id="projects">
        <?php View::yield('content'); ?>
</div>


<div class="container py-5">
    <div class="row">
        <!-- Skills -->
        <div class="col-md-6">
          <h3>Skills</h3>
          <div class="row">
            <div class="col-6">
              <h5>Languages</h5>
              <p>PHP, JavaScript<br>Python</p>
              <h4>Databases</h4>
              <p>MySQL</p>
            </div>
            <div class="col-6">
              <h4>Frameworks</h4>
              <p>Laravel, Bootstrap</p>
              <h6>Tools</h6>
              <p>Git, XAMPP, VS Code</p>
            </div>
          </div>
        </div>
        <!-- Testimonials -->
        <div class="col-md-6">
          <h4>Testimonials</h4>
          <div class="border p-3 rounded bg-secondary">
            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quat accumsan elementum."</p>
            <p class="mb-0 text-muted">Client / Colleague</p>
          </div>
        </div>
    </div>
</div>

<section class="py-4 bg-secondary">
<div class="container " id="contact">
      <h4>Blog / Articles</h4>
      <p class="mb-1">Let’s build something together.</p>
      <p>
        <a href="#" class="text-decoration-none text-light">📧 email@example.com</a><br>
        <a href="#" class="text-decoration-none text-light">GitHub</a> |
        <a href="#" class="text-decoration-none text-light">LinkedIn</a>
      </p>
</div>
</section>
  <!-- Footer -->
  <footer class="text-center py-3 small text-bold">
    © <?= date('Y');?> Big_Jonah
  </footer>

<!-- <div id="contact" class=" container bg-secondary py-5 text-center">
    <h3>Contact me</h3>
    <p>Email me at:<a href="#" class="text-decoration-none text-light">jonah@gmaill.com</a></p>
    <a href="#" class="btn btn-outline-light">Send Email</a>
</div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="">
    const toggleIcon = document.getElementById("toggle-icon");
    const navbarNav = document.getElementById("navbarNav");

    navbarNav.addEventListener("show.bs.collapse",()=>{
    toggleIcon.innerHTML = "&times;";
    });


    navbarNav.addEventListener("hide.bs.collapse",()=>{
    toggleIcon.innerHTML = "&#9776;";
    });
</script>
</body>
</html>