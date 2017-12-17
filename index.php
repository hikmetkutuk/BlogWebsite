<?php
/**
 * Created by PhpStorm.
 * User: hikmetis
 * Date: 12/10/17
 * Time: 7:24 PM
 */

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Personal Blog Page">
    <meta name="keywords" content="HTML,CSS,Bootstrap,PHP">
    <meta name="author" content="Hikmet Kütük">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="container-fluid bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a href="index.php" class="navbar-brand">hikmetis</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#openmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="openmenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"><i class="fa fa-clipboard" aria-hidden="true"></i> Posts</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"><i class="fa fa-terminal" aria-hidden="true"></i> Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4">

                <!-- Categories -->
                <div class="card mb-4">
                    <h6 class="card-header bg-info text-white">Categories</h6>
                    <div class="card-body">
                            <div align="center"><a href="#"><h6>PHP</h6></a></div>
                            <div align="center"><a href="#"><h6>Java</h6></a></div>
                            <div align="center"><a href="#"><h6>Python</h6></a></div>
                            <div align="center"><a href="#"><h6>Javascript</h6></a></div>
                            <div align="center"><a href="#"><h6>Bootstrap</h6></a></div>
                    </div>
                </div>

                <!-- Search -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" name="" class="form-control" placeholder="Search..">
                            <span><button class="btn btn-secondary" type="button">Search</button></span>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-8">
                <h3>Trend Topics</h3>
                <hr class="bg-info">

                <!-- Article -->

                <div class="card mb-4">
                    <img src="http://via.placeholder.com/750x300" class="card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium, ad aperiam deserunt dicta et eum facere modi nesciunt nisi officia quisquam repellat voluptate!
                            Blanditiis dolor ducimus reiciendis unde voluptate! Magnam.
                        </p>
                        <a href="#" class="btn btn-info">Read More  <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <div align="center" class="card-footer text-muted">
                        <span>published date 10.12.2017 22:52</span>
                    </div>
                </div>

                <div class="card mb-4">
                    <img src="http://via.placeholder.com/750x300" class="card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium, ad aperiam deserunt dicta et eum facere modi nesciunt nisi officia quisquam repellat voluptate!
                            Blanditiis dolor ducimus reiciendis unde voluptate! Magnam.
                        </p>
                        <a href="#" class="btn btn-info">Read More  <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <div align="center" class="card-footer text-muted">
                        <span>published date 10.12.2017 22:52</span>
                    </div>
                </div>

                <div class="card mb-4">
                    <img src="http://via.placeholder.com/750x300" class="card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium, ad aperiam deserunt dicta et eum facere modi nesciunt nisi officia quisquam repellat voluptate!
                            Blanditiis dolor ducimus reiciendis unde voluptate! Magnam.
                        </p>
                        <a href="#" class="btn btn-info">Read More  <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <div align="center" class="card-footer text-muted">
                        <span>published date 10.12.2017 22:52</span>
                    </div>
                </div>

                <div class="card mb-4">
                    <img src="http://via.placeholder.com/750x300" class="card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium, ad aperiam deserunt dicta et eum facere modi nesciunt nisi officia quisquam repellat voluptate!
                            Blanditiis dolor ducimus reiciendis unde voluptate! Magnam.
                        </p>
                        <a href="#" class="btn btn-info">Read More  <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <div align="center" class="card-footer text-muted">
                        <span>published date 10.12.2017 22:52</span>
                    </div>
                </div>

                <!-- Pagination -->
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>

            </div>
        </div>
    </div>

    <footer>

    </footer>

</div>

<script src="js/jquery-3.2.1.slim.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
