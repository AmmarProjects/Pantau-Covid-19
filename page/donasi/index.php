<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/assets/about/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pantau Covid-19</title>

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
                            <a class="nav-link js-scroll-trigger" href="/page/donasi/index.php">Donasi</a>
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

        <!-- Donation Section -->
        <section id="donasi">
            <div class="container">
                <div class="text-center">
                    <h2 class="mb-4">Donasi</h2>
                </div>
                <div id="donate" class="row justify-content-md-center">
                </div>
            </div>
        </section>
        <!-- END Donation Section -->

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

    <script>
        $(document).ready(function () {
            $.getJSON("/Donasi.json", function (json) {
                var data = json["donasi"];
                for (var i = 0; i < data.length; i++) {
                    let html =
                        '<div class="col-sm-12 col-md-4 card m-3"><h6 class="my-2 text-secondary">' +
                        data[i]["agen"] + '</h6><img src="/assets/donasi/' + data[i]["img"] +
                        '" alt="Donasi" style="width:100%"> <h5 class="mt-4">' + data[i]["title"] +
                        '</h5> <p id="desc">' + data[i]["desc"].split(" ").splice(0,15).join(" ")+" ..."+'</p> <a href="' + data[i]["link"] +
                        '"class="btn btn-primary mb-4">Donasi Sekarang</a></div>';
                    $('#donate').append(html);
                }
            });
        });
    </script>
</body>
</html>