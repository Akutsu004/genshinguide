<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start-Co(Up)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
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
                <li class="breadcrumb-item active" aria-current="page">Characters</li>
                <li class="breadcrumb-item"><a href="artifact.php">Artifacts</a></li>
                <li class="breadcrumb-item"><a href="videoguide.php">Video Guide</a></li>

            </ol>
        </nav>
        <!--breadcrumb end-->
        <hr />
        <!--menu list-->
        <div class="row text-center" id="watch">
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/raiden.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Raiden Shogun</h6>
                        <h6>"Archon of Inazuma"</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="artifact.php?highlight=true" role="button" class="btn btn-warning text-white">Artifacts</a></p>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/nahida.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Nahida</h6>
                        <h6>"Lesser Lord Kusanali"</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="artifact.php#deepwood" role="button" class="btn btn-warning  text-white ">Artifacts</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/neuvillete.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Neuvillete</h6>
                        <h6>"Hydro Sovereign"</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="artifact.php" role="button" class="btn btn-warning  text-white ">Artifacts</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/Arlecchino.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Arlecchino</h6>
                        <h6>"The Knave"</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="artifact.php" role="button" class="btn btn-warning  text-white ">Artifacts</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="shirt">
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/furina.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Furina</h6>
                        <h6>"Foster Hydro Archon"</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="artifact.php" role="button" class="btn btn-warning  text-white ">Artifacts</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/zhongli.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Zhongli</h6>
                        <h6>"Morax"</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="artifact.php" role="button" class="btn btn-warning  text-white ">Artifacts</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/nilou.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Nilou</h6>
                        <h6>"Dance of Lotuslight"</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="artifact.php" role="button" class="btn btn-warning  text-white ">Artifacts</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/kazuha.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Kaedehara Kazuha</h6>
                        <h6>"Wandering Samurai"</h6>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="artifact.php" role="button" class="btn btn-warning  text-white ">Artifacts</a></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--menu list ends-->
        <!-- footer-->

        <!--footer ends-->
</body>
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