<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styling.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	<title>The Best Website Ever</title>
    </head>
    <body class="text-center">
        <?php
        // require "include/redirect.php";
        if (isset($_GET['error'])) {
            echo "<h1>The following error happened: ".$_GET['error']."</h1>";
        }
        ?>
                    <nav class="navbar navbar-dark box-shadow">
             <a href="index.php"><h1 class="col-lg-6">Home</h1></a>
            <h1 class="col-lg-11">Welcome to the best website ever!</h1>
            <!-- <a href="index.php"><h1 class="col-lg-4">Logout</h1></a> -->
        </nav>
        <main>
            <section class="container">
                <div class="row">
                    <form action="signin.php" method="post" class="form-signin col-lg-6">
                    <!-- <?php include("signin.php"); ?>
                        <?php if (count($errors) > 0) : ?>
                        <div>
                            <?php foreach ($errors as $error) : ?>
                                <p><?php echo $error; ?></p>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?> -->
                        <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <div class="checkbox mb-3">
                          <label>
                            <input type="checkbox" value="remember-me"> Remember me
                          </label>
                        </div>
                        <input name="sigin" type="submit" value=" Login ">
                        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                    </form>
                    <form method="post" action="verify.php" class="form-signin col-lg-6">
                        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
                        <label for="inputFirstName" class="sr-only">First Name</label>
                        <input name="firstname" type="text" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus>
                        <label for="inputLastName" class="sr-only">Last Name</label>
                        <input name="lastname" type="text" id="inputLastName" class="form-control" placeholder="Last Name" required>
                        <label for="inputDOB" class="sr-only">Date of Birth</label>
                        <input name="dob" type="Date" id="inputDOB" class="form-control" required>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                    </form>
                </div>
            </section>
        </main>
    </body>
</html>