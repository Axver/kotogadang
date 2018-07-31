
<!DOCTYPE html>
<html>
<head>
<title>WebGIS Kotogadang</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.4.3/proj4.js"></script>
<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="plugin_video/dist/js/jquery.popVideo.js"></script>
    <link rel="stylesheet" href="plugin_video/dist/css/jquery.popVideo.css">
    <script>



        $('#video').click(function () {
            $('#video').popVideo({
                playOnOpen: true,
                title: "Video Rumah",
                closeOnEnd: true,
                pauseOnClose: true,
            }).open()
        });



    </script>
</head>
<body>

	<?php
    include "view/header.php";
	 ?>
	 <div class="container">

		 <div class="panel panel-info">

			 <div class="panel-body">
				 <div class="row">

					 <div class="col-sm-8">
					   <div id="map" style="width: 100%; height: 600px;"></div>
					 </div>

					 <div class="col-sm-4">
            <?php

                 include "view/sidebar.php";
						 ?>
					 </div>

				 </div>

			 </div>

		 </div>



	 </div>

<script>
var newMap = L.map('map').setView([-0.3209300221041996,100.35993168965847], 13);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href=”http://osm.org/copyright”>OpenStreetMap</a> contributors'
}).addTo(newMap);

var myStyle = {
    "color": "#ff7800",
    "weight": 5,
    "opacity": 0.65
};


$.getJSON("geojson/bangunan.json",function(data){
// add GeoJSON layer to the map once the file is loaded
var datalayer = L.geoJson(data ,{
onEachFeature: function(feature, featureLayer) {

featureLayer.bindPopup("<b>Id : 273 </b> <br/> Nama Pemilik: Silvia Rismantia<br/>" +
    "<img style='width:200px; haight:100px;' src='gambar/273B.jpg'> <br/> " +
    "<button onclick='detilrumah()' class='btn btn-info'> Info Lengkap </button> " +
    "<br/>" +
    "" +
    "");



}
}).addTo(newMap);
newMap.fitBounds(datalayer.getBounds());
console.log(data);


});


function tampiljalan ()
{
//  Jalan di tampilkan hanya saat fungsi dipanggil
}

function hapusjalan()
{
//    Kodingan untuk menghapus Layer Jalan
}
function tampilrumahAll()
{
//    Kodingan untuk menampilkan rumah
}

function tampilrumahkosong()
{
//    Kodingan untuk menampilkan rumah kosong
}

function tampilrumahberisi()
{
//    Fungsi Untuk menampilkan rumah berisi

}

function hapusrumah()
{
//    Hapus Rumah yang ada
}


$.getJSON("geojson/jalan.json",function(data1){
// add GeoJSON layer to the map once the file is loaded
var datalayer1 = L.geoJson(data1 ,{
onEachFeature: function(feature, featureLayer) {
featureLayer.bindPopup(" <br>" +
    "<br/> <b> Jalan Dt. Kayo </b>" +
    "</br>Jenis Jalan: - <br/>" +
    "<img style='width:200px; height:100px;' src='gambar/IMG_20180720_101137.jpg'>" +
    "<br/><button class='btn btn-info' onclick='jalanm1()'> View Detail </button style='margin-right:5px;'>" +
    "<br/>" +
    "<video width='80%' height='80%' style=\"\" src=\"video/VID_20180714_153116.mp4\" webkit-playsinline playsinline data-video=\"https://www.w3schools.com/html/movie.mp4\"\n" +
    "                         loop muted autoplay id=\"video\" class=\"video\" style=\"width: 300px\">\n" +
    "                  </video>" +
    "<br/><button onclick='detiljalan()' class='btn btn-info'>Tampil Video HD</button>");
}
}).addTo(newMap);
newMap.fitBounds(datalayer.getBounds());
console.log(data1);
});



</script>

    <script>

        function jalanm1()
        {
            alert("Fungsi Jalan button info!! Tampilkan dalam halaman pop up");
        }


        function jalanm2() {
            alert("Fungsi Jalan button sucess!! Tampilkan dalam halaman pop up");

        }

        function jalanm3()
        {
            alert("Fungsi Jalan button warning!! Tampilkan dalam halaman pop up");

        }

        function detilrumah() {

            alert("Tampilkan Detil Rumah dalam Halaman Pop up Test");

        }

        function detiljalan() {

            window.location.href = 'detilitem/jalan.php';

        }

    </script>



<?php
include "view/footer.php";

?>
<div> Test </div>
</body>
</html>
