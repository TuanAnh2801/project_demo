<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Men Clothes</title>
    <link rel="shortcut icon" href="../backend/assets/uploads/1676913112-user-anh6.2.jpg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/Web_Men/frontend/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>

<body>
<header>
    <div class="header">
        <div class="row">

            <div class="men">

                <a class="men_style" href="trang-chu.html">Men</a>
            </div>
            <div class="menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light dark">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="trang-chu.html">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gioi-thieu.html">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="ao.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Áo
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="ao.html">Áo Sweater</a>
                                    <a class="dropdown-item" href="ao.html">Áo Khoác</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="quan.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Quần
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="quan.html">Quần jean</a>
                                    <a class="dropdown-item" href="quan.html">Quần âu</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="phukien.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Phụ kiện
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="phukien.html">Thắt lưng</a>
                                    <a class="dropdown-item" href="phukien.html">Ví da</a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="lien-he.html">Liên hệ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gio-hang-cua-ban.html" >
                                    <i class="fa-solid fa-cart-plus"></i>
                                    <?php
                                    $cart_total = 0;

                                    if (isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] AS $cart) {
                                            $cart_total += $cart['quantity'];

                                        }
                                    }
//                                    var_dump($cart_total);
//                                    die();
                                    ?>
                                    <span class="cart-amount">
                                <?php echo $cart_total; ?>
                            </span>

                                </a>

                            </li>
                            <li>
                                <span id="login">
                                <i class="far fa-user"></i>

                                    <a href="register.html">Đăng ký</a>
                                    <span style="color: white">/</span>
                                    <a href="login.html">Đăng nhập</a>

                                </span>
                                <span id="user">
                                 <i class="far fa-user"></i>

                                    <a>Cá nhân</a>
                                    <ul>
                                        <li>
                                            <i class="fas fa-user-cog"></i>
                                            Quản lý Admin
                                        </li>
                                        <li>
                                            <i class="fas fa-sign-out-alt"></i>
                                            Đăng xuất
                                        </li>

                                    </ul>

                                </span>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </div>

</header>
    <span class="notification"></span>