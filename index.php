<?php
if ($_POST['submit']) {

  if (!$_POST['name']) {
    $error="<br/>- Please enter your name";
  }
  if (!$_POST['email']) {
    $error.="<br/>- Please enter your email";
  }
  if (!$_POST['message']) {
    $error.="<br/>- Please enter your message";
  }
  if (!$_POST['check']) {
    $error.="<br/>- Please confirm you are human";
  }
  if ($error) {
    $result="<div class='alert alert-danger' role='alert'><strong>There is an error! Please edit: </strong>$error</div>";
  } 
  
  else {
    mail("webdev@hunterking.info", "Webdev Contact Message", "Name: ".$_POST['name']." Email: ".$_POST['email']." Message: ".$_POST['message']);
    {
      $_POST = array();
      $result="<div class='alert alert-success' role='alert'><strong>Thank you, I'll be in touch shortly.<strong></div>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Hunter King">
  <meta name="description" content="Web Developer Portfolio">
  <meta name="keywords" content="web,development,developer,javascript,react,blockchain,portfolio,python,computer,science,sociology">


  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="css/style.css">
  <title>Hunter King | web developer</title>
</head>

<body>
  
  <canvas id="nodes" class="nodes"></canvas>

  <header class="header">
    <a id="top"></a>
    <h1 class="heading-primary header__title-bar">
      <span>Hello, I'm <span class="heading-primary-name">Hunter King.</span></span>
      <br>
      <span>I'm a full-stack web developer.</span>
    </h1>
    
    <a href="#nav" class="header__btn btn-text btn-text__header" id="arrow-label">
      View my portfolio <img src="css/about-icons/arrow.png" alt="arrow" class="btn-text__arrow" id="arrow">
    </a>

    <div class="header__sidebar">
      <div class="header__icon">
        <a href="https://www.linkedin.com/in/hunter-king6776/" target="blank">
          <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" class="social social__footer">
            <path d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"></path>
          </svg>
        </a>
      </div>
      <div class="header__icon">
        <a href="https://github.com/hking2" target="blank">
          <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" class="social social__footer">
            <path d="M256 70.7c-102.6 0-185.9 83.2-185.9 185.9 0 82.1 53.3 151.8 127.1 176.4 9.3 1.7 12.3-4 12.3-8.9V389.4c-51.7 11.3-62.5-21.9-62.5-21.9 -8.4-21.5-20.6-27.2-20.6-27.2 -16.9-11.5 1.3-11.3 1.3-11.3 18.7 1.3 28.5 19.2 28.5 19.2 16.6 28.4 43.5 20.2 54.1 15.4 1.7-12 6.5-20.2 11.8-24.9 -41.3-4.7-84.7-20.6-84.7-91.9 0-20.3 7.3-36.9 19.2-49.9 -1.9-4.7-8.3-23.6 1.8-49.2 0 0 15.6-5 51.1 19.1 14.8-4.1 30.7-6.2 46.5-6.3 15.8 0.1 31.7 2.1 46.6 6.3 35.5-24 51.1-19.1 51.1-19.1 10.1 25.6 3.8 44.5 1.8 49.2 11.9 13 19.1 29.6 19.1 49.9 0 71.4-43.5 87.1-84.9 91.7 6.7 5.8 12.8 17.1 12.8 34.4 0 24.9 0 44.9 0 51 0 4.9 3 10.7 12.4 8.9 73.8-24.6 127-94.3 127-176.4C441.9 153.9 358.6 70.7 256 70.7z"></path>
          </svg>
        </a>
      </div>
      <div class="header__icon">
        <a href="https://www.instagram.com/hunt.rrr/?hl=en" target="blank">
          <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" class="social social__footer">
            <path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"></path>
            <path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"></path>
            <circle cx="351.5" cy="160.5" r="21.5"></circle>
          </svg>
        </a>
      </div>
    </div>
  </header>


  <nav class="nav" id="nav">
    <ul class="nav__list">
      <a href="#top" class="nav__link">Home</a>
      <a href="#about" class="nav__link">About</a>
      <a href="#projects" class="nav__link">Portfolio</a>
      <a href="#resume" class="nav__link">Resumé</a>
      <a href="#contact" class="nav__link">Contact</a>
    </ul>
  </nav>

  <section class="section-about" id="about">

    <div class="u-center-text u-margin-bottom-1">
      <h2 class="heading-secondary">About</h2>
      <hr class="hr hr__section">
    </div>

    <div class="row row__bio frame-2">
      <div class="profile">
        <div class="col-1-of-3-about frame-1">
          <div class="shape-1"></div>
          <img class="profile__pic" src="css/img/profile.jpeg" alt="Picture of Hunter King.">
        </div>
        <div class="shape-2"></div>
        <div class="col-2-of-3 ">
          <p class="bio bio__statement">
            Passionate about learning new skills, finding creative solutions, and building meaningful projects with other developers.
          </p>
        </div>
      </div>
    </div>

    <div class="row row__skills row__skills-1">
      <div class="col-1-of-4 skills">
        <img src="css/about-icons/001-html5.svg" alt="HTML5 icon" class="skills__img">
      </div>
      <div class="col-1-of-4 skills">
        <img src="css/about-icons/002-css.svg" alt="CSS icon" class="skills__img">
      </div>
      <div class="col-1-of-4 skills">
        <img src="css/about-icons/006-sass.svg" alt="Sass icon" class="skills__img">
      </div>
      <div class="col-1-of-4 skills">
        <img src="css/about-icons/008-mysql.svg" alt="MySQL icon" class="skills__img">
      </div>
    </div>
    <div class="row row__skills row__skills-2">
      <div class="col-1-of-4 skills">
        <img src="css/about-icons/003-javascript.svg"  alt="JS icon" class="skills__img">
      </div>
      <div class="col-1-of-4 skills">
        <img src="css/about-icons/007-react.svg" alt="React icon" class="skills__img">
      </div>
      <div class="col-1-of-4 skills">
        <img src="css/about-icons/005-redux.svg" alt="Redux icon" class="skills__img">
      </div>
      <div class="col-1-of-4 skills">
        <img src="css/about-icons/004-nodejs.svg" alt="Node icon" class="skills__img">
      </div>
    </div>

  </section>


  <section class="section-projects" id="projects">
    <div class="u-center-text u-margin-bottom-1">
      <h2 class="heading-secondary">Portfolio</h2>
      <hr class="hr hr__section">
    </div>

<div class="container_projects">
  <div class="item item--1">
    <a href="https://hking2.github.io/Cypherpunk-Quiz/" target="blank">
      <div class="pic-projects pic-projects_1">
        <div class="desc-projects desc-projects_1">
          <h3 class="desc-projects_title">Cypherpunk Quiz App</h3>
          <p class="desc-projects_text">HTML, CSS, JavaScript, and JQuery</p>
        </div>
      </div>
    </a>
  </div>
  <div class="item item--2">
    <a href="https://hking2.github.io/Budget-Monthly/" target="blank">
      <div class="pic-projects pic-projects_2">
        <div class="desc-projects desc-projects_2">
          <h3 class="desc-projects_title">Budget Monthly Calculator</h3>
          <p class="desc-projects_text">HTML, CSS, and JavaScript</p>
        </div>
      </div>
    </a>
  </div>
  <div class="item item--3">
    <a href="https://hking2.github.io/Github-Search/" target="blank">
      <div class="pic-projects pic-projects_3">
        <div class="desc-projects desc-projects_3">
          <h3 class="desc-projects_title">Github Search API</h3>
          <p class="desc-projects_text">HTML, CSS, Bootstrap, JavaScript, and JQuery</p>
        </div>
      </div>
    </a>
  </div>
  <div class="item item--4">
    <a href="https://github.com/hking2/" target="blank">
      <div class="pic-projects pic-projects_4">
        <div class="desc-projects desc-projects_4">
          <h3 class="desc-projects_title">Crypto Network</h3>
          <p class="desc-projects_text">HTML, Python, and Django</p>
        </div>
      </div>
    </a>
  </div>
</div>

  </section>


  <section class="section-resume" id="resume">
    <div class="u-center-text u-margin-bottom-1">
      <h2 class="heading-secondary">Resumé</h2>
      <hr class="hr hr__section">
    </div>
    <details>
      <summary class="btn btn-resume" id="resume-btn">View Resumé</summary>
      <hr class="hr hr__top">
        <div class="resume">
          <h3 class="resume__heading">Education:</h3>
          <p class="resume__sub">
            Associates of Science in Computer Science <br>
            &emsp;&ensp; University of the People, Pasadena CA <br>
            &emsp;&ensp; Expected graduation, Spring 2021 <br>
            <br>
            Bachelor of Arts in Sociology: Law & Society Program<br>
            &emsp;&ensp; California State University Los Angeles, Los Angeles CA<br>
            &emsp;&ensp; Graduated magna cum laude, August 2019
          </p>
          <h3 class="resume__heading">Selected Conference Presentation: <i> Sussex University, Brighton U.K. </i></h3>
          <p class="resume__sub">
            Presented my senior thesis, "From Theory to Praxis: Implementing Anarchism in Revolutionary Spain and Rojava"
            at Sussex University in Brighton, U.K. at the conference, "Political Autonomy Beyond the Nation-State,"
            April 2019.
          </p>
          <h3 class="resume__heading">Internship: <i> House of Representatives, Washington D.C. </i></h3>
          <p class="resume__sub">
            Accepted to the Hilda Solis Washington D.C. Program where I interned for California representative, Grace Napolitano, in the House of Representatives, Summer 2017.
          </p>
        </div>
      <hr class="hr hr__bottom">
    </details>
  </section>


  <section class="section-contact section-contact__clippy" id="contact">
    <h2 class="heading-secondary heading-secondary__contact u-margin-bottom-2">Contact</h2>
    <h3 class="heading-sub u-margin-bottom-2">Have questions? Want to work together?</h3>

    <form method="POST" action="http://hunterking.info/#contact" role="form" class="card">

      <div class="card__section">
        <label for="enter-name" class="card__label"></label>
        <input type="text" name="name" class="card__input" id="enter-name" placeholder="Your name" value="<?php echo $_POST['name']; ?>"/>
      </div>
      
      <div class="card__section">
        <label for="enter-email" class="card__label"></label>
        <input type="email" name="email" class="card__input" id="enter-email" placeholder="Your email" value="<?php echo $_POST['email']; ?>"/>
      </div>
      
      <div class="card__section">
        <label for="enter-message" class="card__label"></label>
        <textarea name="message" class="card__textera" id="enter-message" placeholder="Message..."><?php echo $_POST['message']; ?></textarea>
      </div>

      <div class="card__section">
        <label for="checkbox">
          <input type="checkbox" name="check" id="checkbox"/>&ensp;Please confirm humanity.
        </label>
        <input type="submit" name="submit" class="fuckybutton" value="Submit" />
      </div>

      <?php echo $result; ?>

    </form>
  </section>


  <footer class="footer">
    <div class="row row__icon">
      <div class="col-1-of-3">
        <a href="https://www.linkedin.com/in/hunter-king6776/" target="blank">
          <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" class="social social__footer">
            <path d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"></path>
          </svg>
        </a>
      </div>
      <div class="col-1-of-3">
        <a href="https://github.com/hking2" target="blank">
          <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" class="social social__footer">
            <path d="M256 70.7c-102.6 0-185.9 83.2-185.9 185.9 0 82.1 53.3 151.8 127.1 176.4 9.3 1.7 12.3-4 12.3-8.9V389.4c-51.7 11.3-62.5-21.9-62.5-21.9 -8.4-21.5-20.6-27.2-20.6-27.2 -16.9-11.5 1.3-11.3 1.3-11.3 18.7 1.3 28.5 19.2 28.5 19.2 16.6 28.4 43.5 20.2 54.1 15.4 1.7-12 6.5-20.2 11.8-24.9 -41.3-4.7-84.7-20.6-84.7-91.9 0-20.3 7.3-36.9 19.2-49.9 -1.9-4.7-8.3-23.6 1.8-49.2 0 0 15.6-5 51.1 19.1 14.8-4.1 30.7-6.2 46.5-6.3 15.8 0.1 31.7 2.1 46.6 6.3 35.5-24 51.1-19.1 51.1-19.1 10.1 25.6 3.8 44.5 1.8 49.2 11.9 13 19.1 29.6 19.1 49.9 0 71.4-43.5 87.1-84.9 91.7 6.7 5.8 12.8 17.1 12.8 34.4 0 24.9 0 44.9 0 51 0 4.9 3 10.7 12.4 8.9 73.8-24.6 127-94.3 127-176.4C441.9 153.9 358.6 70.7 256 70.7z"></path>
          </svg>
        </a>
      </div>
      <div class="col-1-of-3">
        <a href="https://www.instagram.com/hunt.rrr/?hl=en" target="blank">
          <svg viewbox="0 0 512 512" preserveAspectRatio="xMidYMid meet" class="social social__footer">
            <path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"></path>
            <path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"></path>
            <circle cx="351.5" cy="160.5" r="21.5"></circle>
          </svg>
        </a>
      </div>
    </div>
    <div class="footer__copyright u-center-text ">
      <p>Hunter King &copy; 2020</p>
    </div>
  </footer>

<script type="text/javascript" src="js/nodes.js"></script>
<script type="text/javascript" src="js/canvas.js"></script>

</body>
</html>
