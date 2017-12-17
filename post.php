<?php
/**
 * Created by PhpStorm.
 * User: hikmetis
 * Date: 12/11/17
 * Time: 2:16 AM
 */

?>

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

                <!-- Article -->

                <div class="card mb-4">
                    <img src="http://via.placeholder.com/750x300" class="card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Post Title <small style="font-size: 14px">10.12.2017 22:52</small></h2>
                        <hr>
                        <p class="card-text lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium, ad aperiam deserunt dicta et eum facere modi nesciunt nisi officia quisquam repellat voluptate!
                            Blanditiis dolor ducimus reiciendis unde voluptate! Magnam.
                        </p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium, ad aperiam deserunt dicta et eum facere modi nesciunt nisi officia quisquam repellat voluptate!
                            Blanditiis dolor ducimus reiciendis unde voluptate! Magnam.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium, ad aperiam deserunt dicta et eum facere modi nesciunt nisi officia quisquam repellat voluptate!
                            Blanditiis dolor ducimus reiciendis unde voluptate! Magnam.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium, ad aperiam deserunt dicta et eum facere modi nesciunt nisi officia quisquam repellat voluptate!
                            Blanditiis dolor ducimus reiciendis unde voluptate! Magnam.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium, ad aperiam deserunt dicta et eum facere modi nesciunt nisi officia quisquam repellat voluptate!
                            Blanditiis dolor ducimus reiciendis unde voluptate! Magnam.
                        </p>

                    </div>
                </div>

                <!-- Media Object -->
                <div class="col-md-12">
                    <h4>About the Author</h4>
                    <hr>
                    <div class="media">
                        <img class="mr-3" src="http://via.placeholder.com/100x100" alt="Author">
                        <div class="media-body mt-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus accusantium, adipisci aspernatur atque consectetur
                            cupiditate debitis eligendi illum ipsum laudantium magnam nihil
                            obcaecati odit perferendis reiciendis sequi suscipit, vel voluptas.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus accusantium, adipisci aspernatur atque consectetur
                            cupiditate debitis eligendi illum ipsum laudantium magnam nihil
                            obcaecati odit perferendis reiciendis sequi suscipit, vel voluptas.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus accusantium, adipisci aspernatur atque consectetur
                            cupiditate debitis eligendi illum ipsum laudantium magnam nihil
                            obcaecati odit perferendis reiciendis sequi suscipit, vel voluptas.
                        </div>
                    </div>
                </div>

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

