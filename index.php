<?php
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ISC Website — Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Roboto:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo site_href('assets/css/home.css'); ?>">
</head>

<body>
  <main class="page container-fluid p-0">
    <div class="hero-decor" aria-hidden="true">
      <div class="bg-orb red-left"></div>
      <div class="bg-orb yellow-right"></div>
      <div class="bg-orb yellow-left-top"></div>
      <div class="bg-orb blue-right"></div>
    </div>

    <section class="hero-region">
      <div class="hero-col hero-col--illus">
        <img class="hero-illustration" src="<?php echo site_href('assets/images/hero-illustration.svg'); ?>" alt="" />
      </div>
      <div class="hero-col hero-col--center">
        <h1 class="hero-title">Community of<br />PUPian Innovators</h1>
        <p class="hero-subtitle">We build crazy things for society!</p>
        <div class="cta-group d-flex" aria-label="Call to action buttons">
          <button class="cta-join btn" type="button">
            <img src="<?php echo site_href('assets/images/arrow-right.svg'); ?>" alt="" />
            <span>Join the Community</span>
          </button>
          <button class="cta-learn btn" type="button">Learn more</button>
        </div>
      </div>
      <div class="hero-col hero-col--aside">
        <img class="hero-photo" src="<?php echo site_href('assets/images/hero-photo-cropped-5048ac.png'); ?>" alt="Students" />
        <div class="hero-placeholder"></div>
      </div>
    </section>

    <section class="about-section">
      <h2>About ISC</h2>
      <p>
        Iskonnovators Student Community (ISC) is the interdisciplinary community of student innovators
        within PUP Sto. Tomas. Our goal is to hone our members to create tech projects that blossom into
        entries for tech competitions or student-led start ups.
        <br /><br />
        We celebrate the joy and art of building tech projects and we serve as the community for young
        passionate minds to flourish. Our mission is to foster a culture of innovation in our school.
      </p>
      <img src="<?php echo site_href('assets/images/about-photo.png'); ?>" alt="ISC team" />
    </section>

    <section class="welcome-block">
      <h2 class="cards-heading">Everyone is welcome</h2>
      <p class="cards-intro">
        Lacus condimentum tincidunt tellus eu. Vitae leo pretium et nulla. Ut dolor amet nulla nulla ac
        libero tempor tincidunt commodo. Ipsum in molestie amet odio.
      </p>
      <div class="cards">
        <article class="card card-1"><h3>Find a team</h3></article>
        <article class="card card-2"><h3>Build your project</h3></article>
        <article class="card card-3"><h3>Expose your project and your team</h3></article>
      </div>
    </section>

    <section class="grid-placeholders" aria-hidden="true">
      <div></div><div></div><div></div><div></div><div></div><div></div>
    </section>
  </main>
</body>

</html>
