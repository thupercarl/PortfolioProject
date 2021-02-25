<!--
Author: Jake Donaldson
Date:   2/3/21
This page is designed to keep in touch with people I have met
-->

<?php
/* index.php
 * Reads from a database
 */

require('includes/php-setup.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/guestbook.css" >
    <!--favicon-->
    <link href="images/w95-book.png" type="image/png" rel="icon">
    <title>Guestbook</title>
</head>
<body>

<?php
include("includes/navbar.html")
?>

<div class="jumbotron jumbotron-lg">
    <div class="container">
        <h1 class="display-4">Sign My Guestbook</h1>
        <p class="lead">Please fill out the form below.</p>

        <?php
        /**TESTING DB
        $sql = "SELECT sid, first, last, advisor FROM student";
        $result = mysqli_query($cnxn, $sql);
        foreach ($result as $row) {

            $sid = $row['sid'];
            $last = $row['last'];
            $first = $row['first'];
            $advisor = $row['advisor'];

            echo "<p>$sid - $first $last (Advisor: $advisor)</p>";
        }
        */
        //works
        ?>


        <form action="confirm.php" method="post" id="guestbookform">

            <!-- Contact Information -->
            <fieldset class="form-group border p-2">
                <legend>Contact Info</legend>

                <div class="row">
                <div class="form-group col-sm">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control rounded-pill" id="fname"
                           placeholder="Enter first name" name="fname">
                    <span class="err" id="err-fname">
                    Please enter a first name
                </span>
                </div>
                <div class="form-group col-sm">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control rounded-pill" id="lname"
                           placeholder="Enter last name" name="lname">
                    <span class="err" id="err-lname">
                    Please enter a last name
                </span>
                </div>
                </div>

                <div class="row">
                <div class="form-group col-sm">
                    <label for="jtitle">Job Title</label>
                    <input type="text" class="form-control rounded-pill" id="jtitle"
                           placeholder="Enter job title" name="jtitle">
                    <!--
                    <span class="err" id="err-title">
                    Please enter a job title
                </span>
                    -->
                </div>

                <div class="form-group col-sm">
                    <label for="company">Company</label>
                    <input type="text" class="form-control rounded-pill" id="company"
                           placeholder="Enter company" name="company">
                    <!--
                    <span class="err" id="err-company">
                    Please enter your company name
                </span>
                -->
                </div>
                </div>

                <div class="form-group">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" class="form-control rounded-pill" id="linkedin"
                           placeholder="Enter LinkedIn URL" name="linkedin">
                    <span class="err" id="err-linkedin">
                    Please enter your LinkedIn URL
                </span>
                </div>

                <div class="form-group">
                    <label for="emailaddress">Email</label>
                    <input type="text" class="form-control rounded-pill" id="emailaddress"
                           placeholder="Enter email address" name="emailaddress">
                    <span class="err" id="err-emailaddress">
                    Please enter your Email address
                </span>
                </div>
            </fieldset>

            <!-- How did we meet? -->
            <fieldset class="form-group border p-2">
                <legend>How have we met?</legend>
                <div class="form-group">
                    <select id="meeting" class="form-control" name="meeting">
                        <option value="none">Please Select</option>
                        <option value="meetup">Meetup</option>
                        <option value="jobfair">Job Fair</option>
                        <option value="other">Other (please specify below)</option>
                    </select>
                    <span class="err" id="err-howwemet">
                    Please select from the list
                </span>
                    <div class="form-group">
                        <input type="text" class="form-control rounded-pill" id="howwemet"
                               placeholder="how did we meet? (if none above apply)" name="howwemet">
                    </div>
                    <div class="form-group mt-5">
                        <label for="comments">Comments</label>
                        <textarea class="form-control" rows="5" id="comments"
                                  name="comments">

                        </textarea>
                    </div>
                </div>
            </fieldset>

            <!-- Email Format -->
            <fieldset class="form-group border p-2">
                <div class="form-check">
                    <label class="form-check-label" >
                        <input class="form-check-input" type="checkbox"
                               value="addme" name="mailinglist" id="emailme">Please add me to your mailing list
                    </label>
                </div>
                <fieldset>
                <legend>Please choose an email format:</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"
                               name="method" value="html">HTML
                    </label>
                </div>
                </fieldset>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input"
                               name="method" value="text">Text
                    </label>
                </div>
                <!--
                <span class="err" id="err-method">
                    Please select HTML or Text
                </span>
                -->
            </fieldset>

            <!--submit button-->
            <div class="text-center">
            <button type="submit" class="btn btn-primary btn-default">Submit</button>
            </div>

        </form>
        <footer class="rounded-pill">
            <h6 class="contact ml-5">Contact me</h6>

            <div class="row ml-5">
            <p><a class="text-dark col-sm" href="#">JDonaldson1999@gmail.com</a></p>
            <a class="text-dark col-sm ml-5" href="tel:#">206-858-2848</a>
            </div>

            <p class="ml-5">Jake Donaldson - Software Development Student</p>
        </footer>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="scripts/guestbook.js"></script>
</body>
</html>