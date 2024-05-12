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

    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.google.com/share?selection.family=Philosopher:ital,wght@0,400;0,700;1,400;1,700' rel='stylesheet'>
</head>

<body style="margin-bottom:200px">
    <!--Header-->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
    <!--Header ends-->
    <video id="background-video" autoplay loop muted poster="images/Madami.jpg">
        <source src="images/videoplayback (2).mp4" type="video/mp4">
    </video>

    <div class="text-center pt-4 h3">
        * Be a Pro in just Minute *
    </div>
    <!--menu highlights start-->
    <div class="container pt-3">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php"> <img src="images/wand.jpg" class="img-fluid " alt="" style="border-radius:0.5rem">
                    <!-- https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fm=jpg&w=400&fit=max-->
                    <div class="h5 pt-3 font-weight-bolder">
                        Character
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="artifact.php">
                    <img src="images/roar.png" class="img-fluid zoom" alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Artifacts
                    </div>
                </a>
            </div>
            <style>
                .col-6.col-md-3.py-3 a:hover {
                    text-decoration: underline;
                    /* Add underline on hover */
                    color: #808080;
                    /* Change color on hover */
                }
            </style>

            <div class="col-6 col-md-3 py-3">
                <a href="https://genshin-impact-map.appsample.com/" target="_blank">
                    <img src="images/Map.jpg" class="img-fluid" alt="" style="border-radius: 0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Interactive Map
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="videoguide.php">
                    <img src="images/VideoGuide.png" class="img-fluid  " alt="" style="border-radius:0.5rem">
                    <div class="h5 pt-3 font-weight-bolder">
                        Video Guide
                    </div>
            </div>
            </a>
        </div>
    </div>

    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php' ?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    $(document).ready(function() {

        if (window.location.href.indexOf('#login') != -1) {
            $('#login').modal('show');
        }

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