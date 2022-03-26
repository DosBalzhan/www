
<?php include ("path.php");

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f7d669cc58.js" crossorigin="anonymous"></script>
    <title>Registration</title>
</head>
<body>

<?php include ("app/include/header.php");

?>




<div class="container reg_form">
    <form class="row justify-content-center"method="post" action="log.php">
        <h2>Authorization</h2>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Your login</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-primary">Enter</button>
            <a href="reg.php">Registration</a>
        </div>
    </form>

</div>




<div class="footer container-fluid">
    <div class="footer-content container">
        <div class="row">
            <div class="footer-section about col-md col-12">
                <h3 class="logo-text">Online Library</h3>
                <p> Read online for free books of all genres can be read online for free.
                    The literature is available in full, without abbreviations.
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> &nbsp; 8 747 145 0616</span>
                    <span><i class="fas fa-envelope"></i> &nbsp; info@myblog.com</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class ="footer-section links col-md-4 col-12">
                <h3>Quick Links</h3>
                <br>
                <ul>
                    <a href="#">
                        <li>Online books</li>
                    </a>
                    <a href="#">
                        <li>Reviews</li>
                    </a>
                    <a href="#">
                        <li>Comments</li>
                    </a>
                    <a href="#">
                        <li>Gallery</li>
                    </a>

                </ul>
            </div>
            <div class="footer-section contact-form col-md-4 col-12">
                <h3>Contacts</h3>
                <br>


                <form action="index.php" method="post">
                    <input type="email" class="text-input contact-input" placeholder="Your email address...">
                    <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="fas fa-envelope"></i>
                        Send
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; myblog.com | Designed by Dos Balzhan
        </div>
    </div>
</div>


