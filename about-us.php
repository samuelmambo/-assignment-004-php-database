<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="zalego";

$conn=mysqli_connect($server, $username, $password, $database);
if( isset($_POST['submitButton']))
{
    $email =$_POST['email'];

    $insertData = mysqli_query($conn,"INSERT INTO subscriber2(email)VALUES('$email')");
    if($insertData)
    {
        echo "Succefully Submited ";
    }
    else {
        echo "Not Successful".mysqli_error($conn); 
    }

   
}











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>About us</title>
</head>
<body>
  <!-- Navbar design begins
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
         <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="index.html" class="nav-link active">Home</a>
                    <a href="aboutus.html" class="nav-link">About us</a>
                    <a href="contactus.html" class="nav-link">Contact us</a>
                </div>
            </div>
         </div>
     </nav> -->
     <!-- Navbar design ends here -->
     
        <div class="row">
            <p>Subscribe to get information, latest news about Zalego Academy</p>
            <form action="about-us.php" method="POST">
             <div class="mb-2 col-lg-8">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Your e-mail address">
             </div>
             <div class="mt-4 col-lg-4">
                <button type="submit" name="submitButton" class="btn btn-primary">Subscribe</button>
            </div>
            </form>
        </div>
    </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

</body>
</html>
© 2022 GitHub, Inc.
Terms
Privacy
