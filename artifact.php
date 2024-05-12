<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genshin Guide</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style4.css">

    <link href='https://fonts.google.com/share?selection.family=Philosopher:ital,wght@0,400;0,700;1,400;1,700' rel='stylesheet'>
</head>

<body>
    <!--header -->
    <?php
    include 'includes/check-if-added.php';
    ?>
    <!--header ends -->
    <div class="container" style="margin-top:65px">
        <!--jumbutron start-->
        <nav class="navbar fixed-top navbar-expand-sm navbar-dark">
            <a class="navbar-brand" href="index.php">
                <img src="images/LOGOs.png" alt="logo" style="width: 275px;">
            </a>
            <div class="ml-auto">
                <ul class="navbar-nav">
                    <!-- Your menu items here -->
                </ul>
            </div>
        </nav>
        <div class="jumbotron text-center">
            <h1>.</h1>

        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="products.php">Characters</a></li>

                <li class="breadcrumb-item active" aria-current="page">Artifacts</li>
                <li class="breadcrumb-item"><a href="videoguide.php">Video Guide</a></li>

            </ol>
        </nav>
        <!--breadcrumb end-->
        <div class="row text-center" id="shoes">
            <div class="col-md-3 col-6 py-3">
                <div class="card" id="severe">
                    <img src="images/severe.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h5>Severed Fate</h5>
                        <h6>Raiden Best in Slot</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="products.php" role="button" class="btn btn-warning  text-white ">Characters</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card" id="deepwood">
                    <img src="images/deepwood.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h5>Deepwood Memories</h5>
                        <h6>Nahida Best in Slot</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="products.php" role="button" class="btn btn-warning  text-white ">Characters</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/hunter.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h5>Maréchaussée Hunter</h5>
                        <h6>Neuvillete Best in Slot</h6>

                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="products.php" role="button" class="btn btn-warning  text-white ">Characters</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/harmonic.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h5>Harmonic Whimsey</h5>
                        <h6>Arlecchino Best in Slot</h6>

                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="products.php" role="button" class="btn btn-warning  text-white ">Characters</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="headphones">
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/golden.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h5>Golden Troupe</h5>
                        <h6>Furina Best in Slot</h6>

                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="products.php" role="button" class="btn btn-warning  text-white ">Characters</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/tenacity.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h5>Tenacity </h5>
                        <h6>Zhongli Best in Slot</h6>

                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="products.php" role="button" class="btn btn-warning  text-white ">Characters</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/flower2.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h5>Flower of Paradise </h5>
                        <h6>Nilou Best in Slot</h6>

                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="products.php" role="button" class="btn btn-warning  text-white ">Characters</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/determination.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h5>Viridescent Venerer's</h5>
                        <h6>Kazuha Best in Slot</h6>

                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="products.php" role="button" class="btn btn-warning  text-white ">Characters</a></p>
                            <?php
                        } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } else {
                            ?>
                                <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });
    </script>
    <?php if (isset($_GET['error'])) {
        $z = $_GET['error'];
        echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
        echo "<script type='text/javascript'>alert('" . $z . "')</script>";
    } ?>
    <?php if (isset($_GET['errorl'])) {
        $z = $_GET['errorl'];
        echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
        echo "<script type='text/javascript'>alert('" . $z . "')</script>";
    } ?>

</html>