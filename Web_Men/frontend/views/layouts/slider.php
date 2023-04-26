<div class="box">
    <form action="index.php?controller=home&action=search" method="POST" enctype="multipart/form-data"
    <div class="row12">
        <div class="col1">
            <input type="submit" name="search" value="Tìm kiếm" class="btn btn-primary" id="search">

        </div>
        <div class="col2">

            <div class="text-search">

                <input type="text" name="title" class="text-search-input" placeholder="Tìm kiếm sản phẩm" id="title"
                       value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>"
                >
            </div>

            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>


        </div>
    </div>
    </form>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../backend/assets/uploads/1676908595-product-slide1.jpg"
                 alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../backend/assets/uploads/1676908784-product-slide2.jpg"
                 alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../backend/assets/uploads/1676908762-product-slide3.jpg"
                 alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

