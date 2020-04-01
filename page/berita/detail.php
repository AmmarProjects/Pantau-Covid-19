<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/assets/about/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pantau Corona</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link rel="stylesheet" href="/vendor/font-awesome-4.7/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-covid-sd navbar-default fixed-top">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/index.php"><img
                        src="/assets/about/logo-covid-white.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/page/penyebaran/index.php">Penyebaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/page/tentang/index.php">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/page/berita/index.php">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/page/faq/index.php">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- FAQ Section -->
        <section id="berita">
            <div class="container">
                <div id="newsDetail" class="" style="width:65%;margin: auto;">

                </div>
            </div>
        </section>
        <!-- END FAQ Section -->

        <!-- Kontak -->
        <?php include '../layout/contact.php'?>
        <!-- Footer -->
        <?php include '../layout/footer.php'?>
        <!-- END Footer -->
    </div>

    <!-- END Modal -->

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script>
        (function ($) {
            $.getJSON(
                "http://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=44a26b4ab5334e88b2bc66ba41c6e809",
                function (json) {
                    var news = json["articles"];
                    var name, author, title, description, url, imageURL, date, content;
                    var i = <?php
                    $id = $_GET['q'];
                    $id = $id / 3935841 - 1;
                    echo $id;?> ;
                    if (news[i]["urlToImage"] == null) {
                        imageURL = '/assets/artikel/default.png';
                    } else {
                        imageURL = news[i]["urlToImage"];
                    }

                    if (news[i]["author"] == null) {
                        author: "Tidak Tersedia";
                    }
                    else {
                        author: news[i]["author"];
                    }

                    let card =
                        '<h3>' + news[i]["title"] +
                        '</h3> <p class="text-secondary font-italic">Dipublish Pada : ' + news[i][
                        "publishedAt"] + '</p> <img src="' + imageURL + '" alt="' + news[i]["url"] +
                        '" class="mb-4"><p class=mb-4>'+news[i]["content"]+'</p> <h6>Author : ' + author + '</h6><h6 class="text-secondary">Sumber : <a href="' + news[
                        i]["url"] + '">' + news[i]["name"] + '</a></h6>';
                    $('#newsDetail').append(card);

                });
        })(jQuery); // End of use strict
    </script>

</body>

</html>