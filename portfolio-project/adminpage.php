<!--
This page is designed to see the people in my guestbook
-->

<?php
/* adminpage.php
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


    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">



    <link rel="stylesheet" href="styles/guestbook.css" >
    <!--favicon-->
    <link href="images/w95-book.png" type="image/png" rel="icon">
    <title>Admin</title>
</head>
<body>

<!--added navbar-->
<?php
include("includes/navbar.html");
?>

<table id="myTable" class="display">
    <thead>
    <tr>
        <th class="pr-3">First</th>
        <th class="pr-3">Last</th>
        <th class="pr-3">Job Title</th>
        <th class="pr-3">Company</th>
        <th class="pr-3">Linkedin</th>
        <th class="pr-3">Email</th>
        <th class="pr-3">How we met</th>
        <th class="pr-3">Comments</th>
        <th class="pr-3">Date Added</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT first, last, jobtitle, company, linkedin, email, howwemet, comments, dateadded FROM guestlist ORDER BY dateadded DESC";
    $result = mysqli_query($cnxn, $sql);
    foreach ($result as $row) {

        $first = $row['first'];
        $last = $row['last'];
        $jobtitle = $row['jobtitle'];
        $company = $row['company'];
        $linkedin = $row['linkedin'];
        $email = $row['email'];
        $howwemet = $row['howwemet'];
        $comments = $row['comments'];
        $dateadded = $row['dateadded'];

        echo "<tr>
                <td>$first</td>
                <td>$last</td>
                <td>$jobtitle</td>
                <td>$company</td>
                <td>$linkedin</td>
                <td>$email</td>
                <td>$howwemet</td>
                <td>$comments</td>
                <td>$dateadded</td>
              </tr>";
    }//end for each
    ?>
    </tbody>
</table>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!--jQuery Data Table Setup-->
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
</html>