<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleanbnb</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="#index.html">
                    <img class="logo" src="images/Cleanbnb.png" alt="Cleanbnb Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white rounded nav-custom" href="current_clients.html">Current Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white rounded nav-custom" href="sign_up.html">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" class="nav-link" href="https://www.twitter.com/GetCleanbnb"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" class="nav-link" href="https://www.facebook.com/GetCleanbnb-347283569171291/?ref=page_internal"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" class="nav-link" href="https://www.instagram.com/GetCleanbnb"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="form-group">
            <h2 class="sectionTitle">Contact Us</h2>
            <form method="POST" action="../contact.php" class="contactForm" >
                <div class="formField">
                    <h5>First Name:</h5>
                    <input class="form-control" type="text" id="firstName">
                </div>
                <div class="formField">
                    <h5>Last Name:</h5>
                    <input class="form-control" type="text" id="lastName">
                </div>
                <div class="formField">
                    <h5>Email:</h5>
                    <input class="form-control" type="email" id="email">
                </div>
                <div class="formField">
                    <input type="file" class="form-control-file" id="upload">
                </div>
                <div class="formField">
                    <label for="comments">Example textarea</label>
                    <textarea class="form-control" id="comments" rows="3" cols="40"></textarea>
                </div>
                <div class="">
                    <button  class="form-control" type="submit" id="contactSubmit">Submit</button>
                </div>                
            </form>
        </div>
        <footer>
            <a href="#navbarNav">Top of the Page</a><br>
            <a href="contact.html">Contact</a><br>
            <a href="current_clients.html">Current Clients</a><br>
            <a href="careers.html">Careers</a><br>
        </footer>    
        <script src="script.js"></script>
        <script src="https://kit.fontawesome.com/46da648e7e.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>


