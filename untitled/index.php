
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
    <title>Library</title>
</head>
<body>

<?php include ("app/include/header.php");

?>
<div class="container">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/maxresdefault.jpg" height="600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">


                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/i285697114374839341._szw1280h1280_1.jpg" height="600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3><a href="https://www.livelib.ru/genres ">Cсылка</a></h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/review.jpg" height="600" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">


                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="card1">
            <div class="card-header">
                <h3> Quote </h3>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <footer class="blockquote-footer">Books have a special charm; books give us pleasure: they talk to us, give us good advice, they become living friends for us.
                  </footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="content row">
        <!--main content -->
        <div class="main-content col-md-9 col-12">
            <h2>Информация про команд</h2>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/photo.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">About Library</a>
                    </h3>
                    <i class="far fa-user">Autors name: Balzhan</i>
                    <i class="far fa-calendar">Mar 5, 2022</i>
                    <p class="preview-text">
                        il Сундштайн. Название не имеет официальной расшифровки. За первые два сезона коллектив выиграл четыре мейджора из пяти, однако неудачно выступил на The International 2016 и 2017 годов.
                    </p>
                </div>
                <div class="img col-12 col-md-4">
                    <img src="assets/images/book-610189_1280.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Most popular</a>
                    </h3>
                    <i class="far fa-user">Autors name: Balzhan</i>
                    <i class="far fa-calendar">Mar 5, 2022</i>
                    <p class="preview-text">
                        il Сундштайн. Название не имеет официальной расшифровки. За первые два сезона коллектив выиграл четыре мейджора из пяти, однако неудачно выступил на The International 2016 и 2017 годов.
                    </p>
                </div>
            </div>
        </div>

<!--Search-->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3> Search</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>

            <div class="section topics">
                <h3> Categories</h3>
                <ul>
                    <li> <a href="#">Poems</a></li>
                    <li> <a href="#">Quotes</a></li>
                    <li> <a href="#">Fictions</a></li>
                    <li> <a href="#">Biography</a></li>
                    <li> <a href="#"> Motivation</a></li>
                    <li> <a href="#"> Happiness</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end main block -->
<!--FOOTER -->



<!-- Main Content -->
<!-- sidebar Content -->



<!-- block main END-->
<!--
<form class="row g-3 needs-validation" novalidate>
    <div class="col-md-1">
        <label for="validationCustom01" class="form-label"><h6><strong>First name</strong></h6> </label>
        <input type="text" class="form-control" id="validationCustom01"  required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-1">
        <label for="validationCustom02" class="form-label"><h6><strong> Last name</strong></h6> </label>
        <input type="text" class="form-control"  id="validationCustom02"  required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-1">
        <label for="validationCustomUsername" class="form-label"><h6><strong>Username</strong></h6></label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
    </div>

    <div class="col-2">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>

-->
<!--

<div class="col-md-3">
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5><strong> Most Popular</strong></h5>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h5><strong> Featured authors</strong></h5>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h5><strong> Novelties</strong></h5>
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
</div>
</div>


<div class="row">
    <div class="sidebar col-md-3 col-12">
        <div class="section search">
            <h4> Search </h4>
            <form action="/"method="post">
                <input type="text" name="search-term" clas="tewt-input"placeholder="enter the search word...">

            </form>
        </div>
    </div>
</div>

<!--
<div class="container">
    <div class="row">
        <div class="col-md-11">
<div class="card-group">
    <div class="card">
        <img src="0_onjCSahWKQONpBcu.jpg" height="400"class="card-img-top" alt="...">
        <div class="card-body">
            <a href="https://knigopoisk.org/ratings/knigi_istoricheskie_romany" class="card-title"><h3>Historical novels </h3>  </a>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>

    </div>
    <div class="card">
        <img src="photo5.jpg" height="400"  class="card-img-top" alt="...">
        <div class="card-body">
            <a href="https://knigopoisk.org/ratings/knigi_istoricheskie_romany" class="card-title"><h3> Drama</h3></a>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>
    <div class="card">
        <img src="photo6.jpg" height="400" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="https://knigopoisk.org/ratings/knigi_istoricheskie_romany" class="card-title"><h3> Autobiography</h3></a>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
    </div>
</div>
        </div>


</div>
</div>

<div class="container">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        <div class="col">
            <div class="p-3 border bg-light"><h5>Classic</h5></div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light"><h5>Love Story</h5></div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light"><h5> Romance</h5></div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light"><h5>Novel</h5></div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light"><h5>Row column</h5></div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light"><h5>Row column</h5></div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light"><h5>Row column</h5></div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light"><h5>Row column</h5></div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light"><h5>Row column</h5></div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light"><h5>Row column</h5></div>
        </div>
    </div>
</div>
-->

<?php include ("app/include/footer.php");

?>




-->
<!--block main--
<div class="container">
    <div class="content row">
        <h2>Last publications</h2>

        <div class="post row">
            <div class="img col-12 col-md-4">
                <img src="img6.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="post_text col-12 col-md-8">
                <h2>
                    <a href="#">An interesting article on the genres of different books...</a>
                </h2>
                <i class="far fa-user"> Dos Balzhan</i>
                <i class="far fa-calendar"> Feb 28, 2022</i>
                <i class="far fa-telephone">7 770 123 456</i>
                <p class="preview-text">
                    What is a literary genre and what genres of works are there? Collected everything in tables. ...
                    We can say that the genres of literature appeared thanks to Aristotle.
                </p>
            </div>
        </div>


            <div class="footer container-fluid">
                <div class="footer-section about col-md-4 col-12">
                    <h3 class="logo-text">My blog</h3>
                    <p>  My library is very interesting, I guess and You can find genres
                    </p>
                    <div class="contact">
            </div>

            <!- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
</body>
</html>