<!--
Author: Jake Donaldson
Date:   1/26/21
This webpage hosts an electronic version of my resume
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles/resume.css" >
    <title>Resume</title>
</head>
<body>

<?php
include("includes/navbar.html")
?>

<div class="container">

    <nav class="navbar navbar-dark bg-dark navbar-expand-sm">

        <div class="align-content-end">
            <h6>Resume</h6>
        </div>

        <div class="container">
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#myTogglerNav"
                    aria-controls="myTogglerNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myTogglerNav">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/305/portfolio-project/resume.php">Home</a>
                    <a class="nav-item nav-link active" href="https://das.greenriverdev.com">ConeyBeare Cleantech Project</a>
                </div><!-- navbar -->
            </div><!-- collapse-->
        </div><!-- container -->
    </nav><!-- nav -->

    <img src="images/jake_donaldson.PNG" class="rounded float-right" alt="jakeDonaldson" width="200" height="200">

    <h2>Education</h2>
    <ul>
        <li>Bachelor of Applied Science: Software Development</li>
        <li>Associate of Science</li>
        <li>Institution: Green River College - Auburn, WA</li>
        <li>Date of Graduation: Spring 2022</li>
    </ul>

    <h2>Experience</h2>
    <div>
        <h4>Work</h4>
        <ul>
            <li>Retail Specialist: Big Lots Retailers - 2019-present
            <ul>
                <li class="sublist">Advise customers with furniture sales</li>
                <li class="sublist">Mentored new associates on skills they would need in the profession</li>
            </ul><!--Big Lots-->
            </li>

            <li>Northwest Harvest Volunteer Work - 2017
            <ul>
                <li class="sublist">Forged bonds with others</li>
                <li class="sublist">Acquired information regarding the surrounding area's economy</li>
            </ul><!--Northwest Harvest-->
            </li>
        </ul><!--Work experience-->

        <h4>Project</h4>
        <ul>
            <li>Grammar Creator (Java)
            <ul>
                <li class="sublist">Developed a program based on given grammar rules</li>
                <li class="sublist">Streamlined program after completed</li>
            </ul><!--Grammar creator-->
            </li>

            <li>Data Structure Design (Java)
            <ul>
                <li class="sublist">Built several list classes from the ground up</li>
            </ul><!--Data structure design-->
            </li>

            <li>Database Display Site (HTML/CSS/JavaScript)
            <ul>
                <li class="sublist">Designed a page that displays information from a database</li>
                <li class="sublist">Refined the site to display more concise data</li>
            </ul><!--Database display site-->
            </li>

            <li>SDEV305 Team Project: ConeyBeare Sustainability Catalogue
            <ul>
                <li class="sublist">Designed a responsive page for a real world client</li>
                <li class="sublist">Created to allow green companies to submit contact information for storage</li>
                <li class="sublist">Envisioned to be a green marketplace</li>
            </ul><!--CCT-->
            </li>
        </ul><!--Project-->
    </div><!--Experience-->

    <h2>Skills</h2>
    <div>
        <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="softwareSection" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Software
            </button>
            <ul class="dropdown-menu">
                <li>Intellij</li>
                <li>Webstorm</li>
                <li>PHPStorm</li>
                <li>IDLE</li>
                <Li>jGrasp</Li>
            </ul><!--Software-->
        </div><!--software group-->

        <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="languageSection" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Languages
            </button>
            <ul class="dropdown-menu">
                <li>Java</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>SQL</li>
                <li>PHP</li>
                <li>Python</li>
            </ul><!--Languages-->
        </div>


        <h4>Specific Skills</h4>
        <ul>
            <li>Java Data Structures</li>
            <li>Website development, design, and scripting</li>
            <li>Database manipulation</li>
        </ul>
    </div>

    <footer>
        <h4 class="contact">Contact</h4>
        <p><a class="text-light" href="#">JDonaldson1999@gmail.com</a></p>
        <a class="text-light" href="tel:#">206-858-2848</a>
        <p>Jake Donaldson - Software Development Student</p>
    </footer>
</div><!--Container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>