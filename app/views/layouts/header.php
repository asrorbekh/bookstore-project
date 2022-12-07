<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $data["page_title"] ." |". WEB_TITLE ?></title>
    <link rel="icon" href="../../../public/assets/images/book.ico">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="description"
          content="bookly — an online bookstore">
    <meta property="og:locale" content="uz_UZ">
    <link rel="manifest" href="https://cdn.asrorbek.uz/assets/js/site.webmanifest?v=ngJ3Op0WNN" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="An Online bookstore in Uzbeksitan • Bookly uz">
    <meta property="og:description"
          content="bookly — an online bookstore">
    <meta property="og:url" content="https://book.asrorbek.uz/">
    <meta property="og:site_name" content="Bookly">
    <link rel="canonical" href="https://book.asrorbek.uz/"/>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization"
        }
    </script>

    <!-- Bootstrap css -->
    <link href="../../../public/assets/css/bootstrap.css?v=2.0" rel="stylesheet" type="text/css"/>

    <!-- Custom css -->
    <link href="../../../public/assets/css/ui.css?v=2.0" rel="stylesheet" type="text/css"/>
    <link href="../../../public/assets/css/responsive.css?v=2.0" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="../../../public/assets/fonts/fontawesome/css/all.min.css" type="text/css"
          rel="stylesheet">
<!--    <script src="//code.jivosite.com/widget/31bmw2GARo" async></script>-->

</head>
<body class="bg-light">

<header class="section-header">
    <section class="header-main bg-white">
        <div class="container">
            <div class="row gy-3 align-items-center">
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="http://bookly.uz" class="navbar-brand">
                        <img class="logo" height="40" src="../../../public/assets/images/logo.svg"
                             alt="Site logo">
                    </a>
                </div>
                <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                    <div class="float-end">
                        <?php if (!isset($_SESSION["auth_key"])): ?>
                        <a href="/login" class="btn btn-light">
                            <i class="fa fa-user"></i> <span class="ms-1 d-none d-sm-inline-block">Login</span>
                        </a>
                        <?php else: ?>
                        <a href="/profile" class="btn btn-light">
                            <i class="fa fa-user"></i> <span class="ms-1 d-none d-sm-inline-block">Profile</span>
                        </a>
                        <?php endif; ?>
                        <a href="/wishlist" class="btn btn-light">
                            <i class="fa fa-heart"></i> <span class="ms-1 d-none d-sm-inline-block">Wishlist</span>
                        </a>
                        <a href="/cart" class="btn btn-light">
                            <i class="fa fa-shopping-cart"></i> <span class="ms-1">My cart </span>
                        </a>
                    </div>
                </div> <!-- col end.// -->
                <div class="col-lg-5 col-md-12 col-12">
                    <form class="" method="get">
                        <div class="input-group">
                            <input type="search" name="query" class="form-control" style="width:55%" placeholder="Search">
                                                        <select name="category" class="form-select">
                                                            <option name="all" value="all">All type</option>
                                                            <option value="codex">Special</option>
                                                            <option value="comments">Only best</option>
                                                            <option value="content">Latest</option>
                                                        </select>
                            <button class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div> <!-- input-group end.// -->
                    </form>
                </div> <!-- col end.// -->

            </div> <!-- row end.// -->
        </div> <!-- container end.// -->
    </section> <!-- header-main end.// -->

    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler border" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar_main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ps-0" href="/category"> Categories </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/help">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">Projects</a>
                    </li>
                </ul>
            </div> <!-- collapse end.// -->
        </div> <!-- container end.// -->
    </nav> <!-- navbar end.// -->
</header> <!-- section-header end.// -->