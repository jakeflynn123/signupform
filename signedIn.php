<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styling.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>The Best Website Ever</title>
    </head>
    <body class="text-center">
        <?php
            if(isset($_GET['error']))
            {
                echo "<h1>The following error happened: ".$_GET['error']."</h1>";
            }
        ?>
        <nav class="row navbar navbar-dark box-shadow">
            <a href="index.php"><h1 class="col-lg-4">Home</h1></a>
            <h1 class="col-lg-4">Welcome to the best website ever!</h1>
            <a href="index.php"><h1 class="col-lg-4">Logout</h1></a>
        </nav>
        <main>
            <?php 
            <?php // Create connection
            include "databaseconnect.php";

            $conn = new mysqli($servername, $username, $password, $databasename);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

        // Attempt select query execution

        $sql = "SELECT * from users";
        if($result = mysqli_query($conn, $sql)){

            if(mysqli_num_rows($result) > 0){
                echo "<table class='container'>";

                    echo "<tr>";

                        echo "<th>id</th>";

                        echo "<th>firstname</th>";

                        echo "<th>lastname</th>";

                        echo "<th>email</th>";

                        echo "<th>date of birth</th>";

                         echo "<th>passwords</th>";

                    echo "</tr>";

                    while($row = mysqli_fetch_array($result)){

                    echo "<tr>";

                        echo "<td>" . $row['id'] . "</td>";

                        echo "<td>" . $row['firstname'] . "</td>";

                        echo "<td>" . $row['lastname'] . "</td>";

                        echo "<td>" . $row['email'] . "</td>";

                        echo "<td>" . $row['dob'] . "</td>";

                        echo "<td>" . $row['password'] . "</td>";

                    echo "</tr>";

                }

                echo "</table>";

                // Free result set

                mysqli_free_result($result);

            } else{

                echo "No records matching your query were found.";

            }

        } else{

            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

        }

         

        // Close connection

        mysqli_close($link);

        ?>
        </main>
    </body>
</html>