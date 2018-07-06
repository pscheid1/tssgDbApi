<!DOCTYPE html>
<html lang="en">

<head>
  <title>TSSG-sprint2-18june2018</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <style>
    body {
      position: relative;
      padding-top: 105px;
      /* brings the top of each section below the logo and navbar */
      /* all body text defaults to Arial, black letters and white background */
      font-family: arial, sans-serif;
      color: black;
      background: white
    }


    .tssg-logo {
      /* max-width: 50%; */
      max-width: 150px;
      max-height: 100px;
    }


    p {
      font-size: 16px;
    }

    li {
      font-size: 16px;
    }

    h1 {
      font-size: 18px;
      text-decoration: underline;
    }

    h2 {
      font-size: 16px;
    }

    /* Set the fixed height of the footer here */

    #footer {
      height: 60px;
      background-color: #0000ab;
      /* match the blue of the logo */
      /* margin-top:50px; */
      /* Remove this line? To avoid space between the last section and the footer. */
      padding-top: 20px;
      padding-bottom: 20px;
    }

    /* carousel text */

    .car-text {
      min-height: 50px;
      background-color: black;
      /* help see where the carousel is on the screen while debugging */
      color: white
    }

    /* blinking animation - not being used */

    .blinking {
      animation: blinkingText 0.8s infinite;
    }

    @keyframes blinkingText {
      0%   { color: #000;      }
      49%  { color: transparent; }
      50%  { color: transparent; }
      99%  { color: transparent; }
      100% { color: #000;      }
    }

    /* This will color the background of each section, the "even" numbered ones */

    div.anchor:nth-of-type(odd) {
      background-color: #88c8cc;
    }

    .anchor {
      position: relative;
    }

    #schedule {
      position: relative;
      top: 0;
    }

    .anchor a {
      position: absolute;
      left: 0;
      top: -90px; /* a test value for now */
    }

    .anchor .schedule-link {
      position: relative;
      top: 0;
    }

    .schedule-1:hover {
      background-color: red;
      color: red;
    }

    /* Custom page CSS
-------------------------------------------------- */
  </style>
</head>

<body data-spy="scroll" data-target="#myNavbar">
  <div class="top-image-navbar-block fixed-top">
    <!--div class="top-img" style="background-color: white;"></div-->

      <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #0000ab">
        <!--div class="container-fluid"-->
        <a href="#">
          <img class="navbar-brand img-fluid tssg-logo" src="Images/Logo_TSSG.png" alt="">
        </a> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" 
            aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#section1">General&nbsp;Meeting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section2">Schedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section3">Web&nbsp;Development</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section4">Mobile&nbsp;Development</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section5">QA&nbsp;Study</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#section6">Data&nbsp;Analytics</a>
              </li>
            </ul>
          </div>
        <!-- /div-->
        <!-- container-fluid -->
      </nav>
      <!-- navbar -->
    <!-- /div -->
    <!-- top-image -->
  </div> <!-- fixed-top -->

  <div class="d-flex flex-row row">
    <!-- style="margin: 10px" -->
    <!--div class="col-sm-6 align-self-center">
      <img class="d_block img-fluid tssg-logo" src="Images/Logo_TSSG.png" alt="">
    </div-->
    <div class="col-sm-12 align-self-center">
      <div id="Slide" class="container-fluid text-center" style="max-width: 350px">
        <!-- bg-ltblue -->
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner text-center" role="listbox">
            <div class="carousel-item active">
              <p class="car-text"> we develop web and mobile applications </p>
            </div>
            <div class="carousel-item">
              <p class="car-text"> we perform software quality assurance </p>
            </div>
            <div class="carousel-item">
              <p class="car-text"> we perform data analytics </p>
            </div>
          </div>
          <!-- slide wrapper -->
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

        </div>
        <!-- Slide -->
      </div>
      <!-- col-sm-6 -->
    </div>
    <!-- row -->
  </div>
  <!-- d-flex flex-row -->

  <div class="anchor">
      <a id="section1">&nbsp;</a>
  <section id="section11" class="container-fluid group-section" role="navigation">
    <!--hr-->
    <h1><strong>GENERAL MEETING INFORMATION</strong></h1>
    <br>
    <div class="row">
    <div class="col-9">
    <p>The TSSG General Meeting is on Wednesdays. It is an all-team meeting for introductions, updates and discussions</p>
    <p> Before joining, you must attend, in-person, one TSSG general meeting.
      <span class="">Please note that the group generally meets in the Eastern Massachusetts area.</span>
    </p>
    </div>
    <div class="col-3" >
    <a href="#section2" class="schedule-link">
        <img class="img-fluid schedule-1" src="Images/icon-calendar5.png" alt="Schedule" data-toggle="tooltip" title="Wednesday Weekly Meeting Schedule"> 
    </a>
    </div>
    </div> <!-- row -->
    <p>Wednesday 12:30 to 5pm, Please check the schedule, General Manager: Andy Leuper</p>
    <ul>
      <li>Anyone interested in any aspect of the software development life cycle is welcome to attend </li>
      <li>Developers, web designers, project managers, support persons and those interested in learning about these and other
        roles are welcome</li>
      <li>If you are not sure where you may fit in, we will help you to figure it out</li>
    </ul>
    <p>Sample Wednesday Agenda</p>
    <ul>
    <li>12:30 to 1:00 pm: <strong>Intros, Announcements and recruiting updates</strong></li>
    <li>1:00 to 2:10 pm: <strong>Web Application Project (PHP, JavaScript, HTML5)</strong>
    <ul>
      <li>Scrum</li>
      <li>Program or Technology review</li>
      <li>Review, Analyze and Update user stories</li>
    </ul>
    </li>
    <li>2:10 to 2:20 pm: <strong>Break</strong></li>
    <li>2:20 to 3:30 pm: <strong>Mobile Application Project (Java, Android)</strong>
    <ul>
      <li>Scrum</li>
      <li>Program or Technology review</li>
      <li>Review, Analyze and Update user stories</li>
    </ul>
    </li>
    <li>3:30 to 3:40 pm: <strong>Break</strong></li>
    <li>3:40 to 5:00 pm: <strong>Data Analytics Project (Python, R, Hadoop)</strong>
    <ul>
      <li>Scrum</li>
      <li>Program or Technology review</li>
      <li>Review, Analyze and Update user stories</li>
    </ul>
    </li>
  </ul>
  </section>
</div>

<div class="anchor">
    <a id="section2">&nbsp;</a>
  <section id="section22" class="container-fluid text-left group-section" role="navigation">
  <h1><strong>WEDNESDAY WEEKLY MEETING SCHEDULE</strong></h1>
    <br>
      <?php include("schedule.php"); ?>
    <br>
  </section>
</div>


  <div class="anchor">
      <a id="section3">&nbsp;</a>
  <section id="section33" class="container-fluid text-left group-section" role="navigation">
    <h1><strong>THE WEBSITE APPLICATION DEVELOPMENT TEAM</strong></h1>
    <p>Mon 1:30 to 3:30pm, Online, Team Lead: Jim Turner</p>
    <p>As web professionals we develop web applications using current technologies to learn and explore. We have found that
      active involvement in projects enhances our members&CloseCurlyQuote; opportunities for new roles or new challenges. All are welcome
      if they have an interest in Web Application Development.
    </p>
    <h2><strong>Projects:</strong></h2>

    <p>Musicians Manager</p>
    <ul>
      <li>LARAVEL &dash; Experimental version</li>
      <li>PHP &dash; Live version with a real-world customer</li>
      <li>MEAN Stack &dash; Experimental version</li>
    </ul>
    <p>TSSG.TECH website development</p>
    <h2><strong>Technologies:</strong></h2>
    <ul>
      <li>Agile model using CA Rally / CA Central Project Management</li>
      <li>Subversion (SVN) and GitHub source code repositories</li>
      <li>LARAVEL (PHP framework)</li>
      <li>Bootstrap</li>
      <li>JQuery</li>
      <li>PHP</li>
      <li>MySQL db</li>
      <li>JavaScript</li>
      <li>HTML5</li>
      <li>CSS3</li>
      <li>MEAN Stack (MongoDB, Express, Angular, Node.js)</li>
      <li>Jenkins (Continuous Integration)</li>
      <li>Selenium &amp; Selenium Grid test automation</li>
      <li>Cucumber/Behavior Driven Development (BDD)</li>
      <li>User Experience Design</li>
      <li>Responsive Design</li>
    </ul>
  </section>
</div>

  <!--hr-->
  <div class="anchor">
      <a id="section4">&nbsp;</a>
  <section id="section44" class="container-fluid text-left group-section" role="navigation">
    <h1><strong>THE MOBILE APPLICATION DEVELOPMENT TEAM</strong></h1>
    <p>Tue 10 to 1pm, Acton Library and Online, Team Lead: Mark Pralat</p>
    <p>As mobile application development professionals we develop applications using current technologies. The group currently
      focuses on Android development and welcomes other mobile technologies. All are welcome if they have an interest in
      mobile development, from inception to release and beyond.
    </p>
    <p>Project management using Agile/Scrum, and Kanban methods.</p>
    <h2><strong>Projects:</strong></h2>
    <ul>
      <li>EventBoss &dash; RSS Feed Reader</li>
      <li>SleepAnalyzer &dash; EEG Brain Wave Monitor using a Muse headband</li>
    </ul>
    <h2><strong>Technologies:</strong></h2>
    <ul>
      <li>Android Studio</li>
      <li>Agile/Scrum, Kanban</li>
      <li>Android OS, Java, XML</li>
      <li>Android Architecture Components, Constraint Layout, Material Design</li>
      <li>Gradle</li>
      <li>Jira</li>
      <li>Git, GitHub, Subversion (SVN)</li>
      <li>Appium, Selenium</li>
      <li>Coming soon: Kotlin, Espresso, JUnit, Android Things (IoT)</li>
      <li>Eclipse (replaced by Android Studio)</li>
      <li>SeeNowDo: retired</li>
    </ul>
    <h2><strong>Past Projects:</strong></h2>
    <ul>
      <li>Mobile Robot (individual project) using MIT App Inventor</li>
    </ul>
    
  </section>
</div>

  <div class="anchor">
      <a id="section5">&nbsp;</a>
  <section id="section55" class="container-fluid text-left group-section" role="navigation">
    <h1><strong>THE QUALITY ASSURANCE STUDY AND DISCUSSION GROUP</strong></h1>
    <p>Thu 10 to Noon, Online, Team Lead: Ray Bloom</p>
    <p>As Quality Assurance (QA) professionals, we explore and learn current technologies within various platforms to expand
      our skill sets. We help investigate QA issues encountered by study group members. Any member of TSSG with an interest
      in QA is welcome to participate.
    </p>

    <h2><strong>Technologies:</strong></h2>
    <ul>
      <li>Selenium, Appium</li>
      <li>Java, Python</li>
      <li>Junit, TestNG, PyUnit (&OpenCurlyDoubleQuote;unit test&CloseCurlyDoubleQuote;)</li>
      <li>Maven, Gradle</li>
      <li>Jenkins Continuous Integration Server</li>
      <li>Docker, Azure, AWS, VirtualBox, other approaches to virtualization</li>
      <li>Cucumber, Geb, Spock, Behavior Driven Development (BDD)</li>
    </ul>
  </section>
</div>

  <div class="anchor">
      <a id="section6">&nbsp;</a>
  <section id="section66" class="container-fluid text-left group-section" role="navigation">
    <h1><strong>THE DATA ANALYTICS DEVELOPMENT TEAM</strong></h1>
    <p>Fri 1 to 3pm, Acton Library and Online, Team Lead: Norm Heckman</p>
    <h2><strong>Technologies:</strong></h2>
    <ul>
      <li>Project Management using Agile/Scrum model. </li>
      <li>JQuery</li>
      <li>Yahoo widgets</li>
      <li>YAML (CSS framework)</li>
      <li>Subversion (SVN - source code repository),</li>
      <li>Tortoise (Windows GUI interface for Subversion)</li>
      <li>LARAVEL (PHP framework)</li>
      <li>PHP</li>
      <li>MySQL db</li>
      <li>Javascript</li>
      <li>HTML5</li>
      <li>CSS3</li>
      <li>Bootstrap</li>
      <li>GitHub</li>
      <li>MEAN Stack </li>
      <li>MongoDB</li>
      <li>Express</li>
      <li>Angular</li>
      <li>Jenkins</li>
      <li>Selenium &amp; Selenium Grid test automation</li>
      <li>Cucumber and BDD</li>
    </ul>
  </section>
</div>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <script>

  $('.navbar-nav li a').on('click', function(){
    if(!$( this ).hasClass('dropdown-toggle')){
        $('.navbar-collapse').collapse('hide');
    }
  });

      // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            console.log(`target.offset().top = ${target.offset().top}`);
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });
    </script>
    
  <div id="footer"></div>
</body>

</html>