<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bell T.S.M. Corporation Limited</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link href="sstyle.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-header">
            <nav class="navbar  navbar-expand-sm bg-dark navbar-dark sticky-top">
                <button id="nav-btn" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarDiv" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="container">
                    <a class="navbar-brand" href="home.php">T.S.M.</a>
                    <div class="collapse navbar-collapse" id="navbarDiv">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container body">
            <br>
            <h2>HINO</h2><br>
            <div class="row">
                <?php
                $dirname = "images/hino/";
                $images = glob($dirname . "*.png");
                $count = 0;
                foreach ($images as $image) {
                    $count++;
                    echo '<div class="col-sm-4">';
                    echo '<a href="parts.php?'.$image.'"><img src="' . $image . '"></a><br>';
                    $file = (string) $image;
                    echo substr($file, 12, -4);
                    echo '</div>';
                    if ($count % 3 == 0) {
                        echo '</div><hr><div class="row">';
                    }
                }
                echo '</div>';
                ?>
            </div>


            <footer class="footer-copyright bg-dark py-3 mb-2 text-white ">
                <p>Copyright &copy; 2018 Bell T.S.M. Corporation Limited; All rights reserved. Icon made by Freepik from www.flaticon.com </p>
            </footer>
    </body>
</html>