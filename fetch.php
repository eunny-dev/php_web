<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    include('nav.php');
    ?>
    <div class="container">
        <table class="table">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th> Email</th>
                <th>Id Number</th>
                <th>Age</th>
                <th>Location</th>
                <th>Phone</th>
                <th>Delete</th>
            </tr>


            <?php

            $dbhost = "localhost";
            $dbuser = "root";
            $dbpassword = "";
            $db = "trial";

            $con = mysqli_connect('localhost', 'root', '', 'trial');

            $sql = "select * from contact";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {

                $fname = $row['fname'];
                $lname = $row['lname'];
                $gender = $row['gender'];
                $number = $row['number'];
                $id = $row['idnum'];
                $email = $row['email'];
                $location = $row['location'];
                $age = $row['age'];
                echo "<tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$id</td>
            <td>$age</td>
            <td>$location</td>
            
            <td>$number</td>
            <td> <a href='delete.php?id=$id' class='btn btn-danger' >Delete</a> </td>
        </tr>";
            }

            ?>

        </table>
    </div>
</body>

</html>