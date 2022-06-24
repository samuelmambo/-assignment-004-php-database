<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
       <!--navbar starts here-->
       <nav class="navbar navbar-expand-lg bg-light fixed-top-shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="home.html" class="nav-link active">Home</a>
                    <a href="#" class="nav-link">About Us</a>
                    <a href="#" class="nav-link btn btn-primary"> Register now</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="p-5 bg-light  text-primary  mb-4 ">
        <h1  c>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <span> <i class="fa fa-user"></i></span>
        <span class="text-dark">20th July 2020</span> <br>
        <span> <i class="fa fa-address"></i></span>
        <span class="text-dark">Zalego Academy <br>
                Devan Plaza
        </span>
    </main>
    <div>
        <p class="text-center">Looking for a place to kick start your career in Technology? <br>
        Whether you're a local, new in town or just crushing through we've got  <br>
        load of greate tips and events for you.
        </p>
    </div>
    <div class="card shadow p-3 mb-5 bg-body rounded col-lg-6" >
        <h1 class="text-center text-primary">Sign up today?</h1>
        <form>
            <div class="row"> 
               <div class="mb-3 col-lg-6 ">
                    <label for="firstname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter your full name" >
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="Phone Number" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" placeholder="+2547" >
                </div>    
            </div>
            <div class="row"> 
                <div class="mb-3 col-lg-6 ">
                    <label for="Email Address" class="form-label">Email Address</label>
                    <input type="tel" class="form-control" placeholder="Please enter your email" >
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="Gender" class="form-label">What's your gender?</label>
                    <select class="form-select" >
                        <option selected>--Select your gender--</option>
                        <option value="1">male</option>
                        <option value="2">female</option>
                    </select>
                </div>
            </div>
            <div>
                <p class="text-center">
                    In order to complete your registration to
                     the bootcamp,you are rquired to select one course  you
                     will be undertaking  please NOTE
                     that this will be your learning
                      track during thr 2-week
                    immersion.
                </p>
            </div>
            <div>
                <label for="course" class="form-labl=el">What's your preffered course?</label>
                <select class="form-select" >
                    <option selected>--Select your course--</option>
                    <option value="1">Java</option>
                    <option value="2">Pyhton</option>
                </select>
            </div>
            <p>
                You agree by providing your information you understand all our data privacy and privacy  and  protection policy <br>
                outlined in our Terms & Condition and the Privacy Policy statement.
            </p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                 <p>Agree terms and condition.</p>
                </label>
            </div>
            <button type="submit" name="submitButton" class="btn btn-primary">Subscribe application</button>
            
        </form> 
    </div>
    <div class="text-center">
        <p>
            subsrcibe to get information,latest news About
            <p >Zalego Academy</p>
        </p>
        <label for="email"></label>
        <input type="text" placeholder="Your email address">
        <button type="submit" name="submitButton" class="btn btn-primary">Subscribe</button>
    </div>
    <hr>
    <footer>
        &copy;Company2022
    </footer>
    

    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    
</body>
</html>