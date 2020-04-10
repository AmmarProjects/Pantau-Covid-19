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
  </style>
</head>

<body>

  <div id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-covid-sd navbar-default fixed-top">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/index.php"><img src="/assets/about/logo-covid-white.svg"
            alt=""></a>
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

    <!-- Indonesia Section -->
    <section id="Indonesia" >
      <div class="container">
        <div class="text-center">
          <h2 class="mb-2">Data Penyebaran Di Indonesia</h2>
          <h6 class="mb-4">Sumber Data : www.kawalcorona.com</h6>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 p-15">
            <img src="/assets/about/indo.svg" alt="Peta" class="maps" style="width:100%">
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="input-group mt-3" style="width: 80%">
              <select class="custom-select" id="dropdownIndo" onchange="onChangeIndo()">
                <option value="998" selected>--Seluruh Indonesia--</option>
              </select>
            </div>
            <div class="card bg-warning mt-3" style="width: 80%">
              <div class="card-body  ml-4  text-white">
                <div class="row">
                  <div class="col">
                    <h6 class="mb-2">Positif Corona</h6>
                    <h1 class="card-title" id="positifIndo">Tunggu..</h1>
                  </div>
                  <div class="col-md-auto mr-4">
                    <i class="fa fa-plus-circle fa-3x mt-3" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="card bg-primary mt-3" style="width: 80%">
              <div class="card-body ml-4  text-white">
                <div class="row">
                  <div class="col">
                    <h6 class="mb-2">Pasien Sembuh</h6>
                    <h1 class="card-title" id="sembuhIndo">Tunggu..</h1>
                  </div>
                  <div class="col-md-auto mr-4">
                    <i class="fa fa-rotate-left fa-3x mt-3" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="card bg-danger mt-3" style="width: 80%">
              <div class="card-body ml-4  text-white">
                <div class="row">
                  <div class="col">
                    <h6 class="mb-2">Pasien Meninggal</h6>
                    <h1 class="card-title" id="meninggalIndo">Tunggu..</h1>
                  </div>
                  <div class="col-md-auto mr-4">
                    <i class="fa fa-heart fa-3x mt-3" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Indonesia Section -->

    <!-- Global Section -->
    <section id="Global" class="bg-light">
      <div class="container">
        <div class="text-center">
          <h2 class="mb-2">Data Penyebaran Global</h2>
          <h6 class="mb-4">Sumber Data : www.kawalcorona.com</h6>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 p-15">
            <img src="/assets/about/global.svg" alt="Peta" class="maps" style="width:100%">
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="input-group mt-3" style="width: 80%">
              <select class="custom-select" id="dropdownGlobal" onchange="onChangeGlobal()">
                <option value="999" selected>--Seluruh Negara--</option>
              </select>
            </div>
            <div class="card bg-warning mt-3 align-center" style="width: 80%">
              <div class="card-body ml-4  text-white">
                <div class="row">
                  <div class="col">
                    <h6 class="mb-2">Positif Corona</h6>
                    <h1 class="card-title" id="positifGlobal">Tunggu..</h1>
                  </div>
                  <div class="col-md-auto mr-4">
                  <i class="fa fa-plus-circle fa-3x mt-3" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="card bg-primary mt-3" style="width: 80%">
              <div class="card-body ml-4 text-white">
                <div class="row">
                  <div class="col">
                    <h6 class="mb-2">Pasien Sembuh</h6>
                    <h1 class="card-title" id="sembuhGlobal">Tunggu..</h1>
                  </div>
                  <div class="col-md-auto mr-4">
                    <i class="fa fa-rotate-left fa-3x mt-3" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="card bg-danger mt-3" style="width: 80%">
              <div class="card-body ml-4 text-white">
                <div class="row">
                  <div class="col">
                    <h6 class="mb-2">Pasien Meninggal</h6>
                    <h1 class="card-title" id="meninggalGlobal">Tunggu..</h1>
                  </div>
                  <div class="col-md-auto mr-4">
                    <i class="fa fa-heart fa-3x mt-3" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Global Section -->

    <!-- Contact -->
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
    var onChangeIndo = function () {
      var value = document.getElementById("dropdownIndo").value;
      if (value == 998) {
        $.getJSON("https://api.kawalcorona.com/indonesia/", function (indo) {
          document.getElementById("positifIndo").innerHTML = indo[0]["positif"];
          document.getElementById("sembuhIndo").innerHTML = indo[0]["sembuh"];
          document.getElementById("meninggalIndo").innerHTML = indo[0]["meninggal"];
        });
      } else {
        $.getJSON("https://api.kawalcorona.com/indonesia/provinsi", function (prov) {
          document.getElementById("positifIndo").innerHTML = prov[value]["attributes"]["Kasus_Posi"];
          document.getElementById("sembuhIndo").innerHTML = prov[value]["attributes"]["Kasus_Semb"];
          document.getElementById("meninggalIndo").innerHTML = prov[value]["attributes"]["Kasus_Meni"];
        });
      }
    }

    var onChangeGlobal = function () {
      var value = document.getElementById("dropdownGlobal").value;
      if (value == 999) {
        $.getJSON("https://api.kawalcorona.com/positif", function (global) {
          document.getElementById("positifGlobal").innerHTML = global["value"];
        });
        $.getJSON("https://api.kawalcorona.com/sembuh", function (global) {
          document.getElementById("sembuhGlobal").innerHTML = global["value"];
        });
        $.getJSON("https://api.kawalcorona.com/meninggal", function (global) {
          document.getElementById("meninggalGlobal").innerHTML = global["value"];
        });
      } else {
        $.getJSON("https://api.kawalcorona.com/", function (global) {
          document.getElementById("positifGlobal").innerHTML = global[value]["attributes"]["Confirmed"];
          document.getElementById("sembuhGlobal").innerHTML = global[value]["attributes"]["Recovered"];
          document.getElementById("meninggalGlobal").innerHTML = global[value]["attributes"]["Deaths"];
        });
      }
    }
    var getDropdownProvinsi = function () {
      $.getJSON("https://api.kawalcorona.com/indonesia/provinsi", function (prov) {
        for (var i = 0; i < prov.length; i++) {
          let html = '<option value="' + i + '">' + prov[i]["attributes"]["Provinsi"] + '</option>';
          $('#dropdownIndo').append(html);
        }
      });
    }
    var getDropdownGlobal = function () {
      $.getJSON("https://api.kawalcorona.com/", function (global) {
        for (var i = 0; i < global.length; i++) {
          let html = '<option value="' + i + '">' + global[i]["attributes"]["Country_Region"] + '</option>';
          $('#dropdownGlobal').append(html);
        }
      });
    }
    $(document).ready(function () {
      getDropdownProvinsi();
      getDropdownGlobal();
      onChangeIndo();
      onChangeGlobal();
    });
  </script>
</body>

</html>