<!--
Author: Jake Donaldson
Date:   2/3/21
This page is designed to keep in touch with people I have met
-->

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

<!--add navbar-->
<?php
include("includes/navbar.html")
?>

<div class="jumbotron jumbotron-lg">
    <div class="container">

        <?php

        if(!($_SERVER['REQUEST_METHOD'] == 'post')) {
            header("Location: guestbook.php");
        }

        require('includes/php-setup.php');

        $first = $_POST['fname'];
        $last = $_POST['lname'];
        $job = $_POST['jtitle'];
        $company = $_POST['company'];
        $linkedin = $_POST['linkedin'];
        $email = $_POST['emailaddress'];
        $howwemet = $_POST['meeting'];
        $comments = $_POST['comments'];

        $sql = "INSERT INTO guestlist(first,last,jobtitle,company,linkedin,email,howwemet,comments)
        VALUES('$first','$last','$job','$company','$linkedin','$email','$howwemet','$comments');";
        $success = mysqli_query($cnxn, $sql);

        if($success) {
            echo "<h1 class='display-4'>Thank You!</h1>";
            echo "<p class='lead'>Thanks for signing my guestbook. Information submitted successfully. You may exit this page now.</p>";
        }
        else {
            echo "<h3>A Problem Ocurred</h3>";
        }
        ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="scripts/guestbook.js"></script>
</body>
</html>