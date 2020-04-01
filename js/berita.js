(function ($) {
    var getBerita = function () {
        $.getJSON(
            "http://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=44a26b4ab5334e88b2bc66ba41c6e809",
            function (json) {
                var news = json["articles"];
                // console.log(news[0]["urlToImage"]);
                // console.log(faq.length)
                var name, author, title, description, url, imageURL, date, content;
                // var author;
                for (var i = 0; i < 20; i++) {
                    if (news[i]["content"] == null) {
                        i++;
                    } else {
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
                            '<div class="card m-4" style="height: 220px;"> <div class="card-body"><div class="row"> <div class="col-md-auto"> <img src="' +
                            imageURL + '" class="img-news m-2" alt="Sumber : ' + news[i]["url"] +
                            '"></div>  <div class="col"><h4 class="card-title mt-3">' + news[i]["title"] +
                            '</h4> <p class="card-text">' + news[i]["description"] +
                            '</p><div class="text-right"><a href="' + news[i]["url"] +'" class="btn btn-link">Baca Selengkapnya</a></div></div></div></div></div>';
                            //a href="detail.php?q='+(i+1)*3935841+
                        $('#news').append(card);
                    }
                }
            });
    }
    getBerita();
})(jQuery); // End of use strict