<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Home</title>
</head>

<body>
    <?php include_once("Includer/Header.php")?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pics(H)/bg1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="pics(H)/bg2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="pics(H)/bg3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="pics(H)/bg4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="pics(H)/bg5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="pics(H)/bg6.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <img src="pics(H)/gpu.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Just In!</h5>
                    <p class="card-text">Gaming Uncompromised: With the new cooling technology the new Zotac 3080 is all
                        you'll need</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="pics(H)/i9.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">i9</h5>
                    <p class="card-text">Super fast single core performance upto 5.3GHZ!</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="pics(H)/mobo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Overclocking on a budget</h5>
                    <p class="card-text">All the bells and whistles in a NOT so wallet breaking price</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="pics(H)/ram.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Best DRAMs</h5>
                    <p class="card-text">Hand picked DRam chips for best performance</p>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("Includer/Footer.php")?>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>