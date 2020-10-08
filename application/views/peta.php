<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peta Lombok Tengah</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>leaflet/leaflet.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/style.css">
   
   
</head>

<body>
    <div id="mapku">

    </div>

    <script type="text/javascript" src="<?= base_url('assets/') ?>leaflet/leaflet.js"></script>
    <script src="<?= base_url('assets/') ?>js/batu_keliang.js"></script>
    <script src="<?= base_url('assets/') ?>js/batu_keliang_utara.js"></script>
    <script src="<?= base_url('assets/') ?>js/janapria.js"></script>
    <script src="<?= base_url('assets/') ?>js/jonggat.js"></script>
    <script src="<?= base_url('assets/') ?>js/kopang.js"></script>
    <script src="<?= base_url('assets/') ?>js/praya.js"></script>
    <script src="<?= base_url('assets/') ?>js/praya_barat.js"></script>
    <script src="<?= base_url('assets/') ?>js/praya_barat_daya.js"></script>
    <script src="<?= base_url('assets/') ?>js/praya_tengah.js"></script>
    <script src="<?= base_url('assets/') ?>js/praya_timur.js"></script>
    <script src="<?= base_url('assets/') ?>js/peringgarata.js"></script>
    <script src="<?= base_url('assets/') ?>js/pujut.js"></script>
    <!-- <script src="<?= base_url('assets/') ?>js/loteng.js"></script> -->
    <script src="<?= base_url('assets/') ?>js/leaflet.uGeoJSON.js"></script>
    <script>
    var kec = L.layerGroup();
       

        L.marker([-8.8407109, 116.2068354]).bindPopup("<h3 style='width : 100px;'><?= $prb['kecamatan'] . ' '. $prb['al'] . ' Org' ?></h3>").addTo(kec),
        L.marker([-8.7728698, 116.1713917]).bindPopup("<h3 style='width : 100px;'><?= $pbd['kecamatan'] . ' '. $pbd['al'] . 'Org'?></h3>").addTo(kec),
        L.marker([-8.8336359, 116.3013267]).bindPopup("<h3 style='width : 100px;'><?= $pjt['kecamatan'] . ' '. $pjt['al'] . 'Org'?></h3>").addTo(kec),
        L.marker([-8.7771594, 116.3839765]).bindPopup("<h3 style='width : 100px;'><?= $pti['kecamatan'] . ' '. $pti['al'] . 'Org'?></h3>").addTo(kec);
        L.marker([-8.71513, 116.4075854]).bindPopup("<h3 style='width : 100px;'><?= $jnp['kecamatan'] . ' '. $jnp['al'] . 'Org'?></h3>").addTo(kec);
        L.marker([-8.641832, 116.3563]).bindPopup("<h3 style='width : 100px;'><?= $kpg['kecamatan'] . ' '. $kpg['al'] . 'Org'?></h3>").addTo(kec);
        L.marker([-8.72174,	116.288597]).bindPopup("<h3 style='width : 100px;'><?= $pry['kecamatan'] . ' '. $pry['al'] . 'Org'?></h3>").addTo(kec);
        L.marker([-8.7221426, 116.3131356]).bindPopup("<h3 style='width : 100px;'><?= $prt['kecamatan'] . ' '. $prt['al'] . 'Org'?></h3>").addTo(kec);
        L.marker([-8.6688303, 116.2186488]).bindPopup("<h3 style='width : 100px;'><?= $jgt['kecamatan'] . ' '. $jgt['al'] . 'Org'?></h3>").addTo(kec);
        L.marker([-8.6068562, 116.2422739]).bindPopup("<h3 style='width : 100px;'><?= $prg['kecamatan'] . ' '. $prg['al'] . 'Org'?></h3>").addTo(kec);
        L.marker([-8.621743, 116.3131356]).bindPopup("<h3 style='width : 100px;'><?= $Bk['kecamatan'] . ' '. $Bk['al'] . 'Org'?></h3>").addTo(kec);
        L.marker([	-8.468864, 116.3485586]).bindPopup("<h3 style='width : 100px;'><?= $Bku['kecamatan'] . ' '. $Bku['al'] . 'Org'?></h3>").addTo(kec);
        
              

        var mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
        var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1 }),
		    streets  = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1 });

        var peta = L.map('mapku', {
        center: [-8.6768427, 116.2127555], 
        zoom: 11,
        layers: [streets, grayscale, kec]
        });
        var baseLayers = {
		"Grayscale": grayscale,
		"Streets": streets
        };

        var overlays = {
            "Kecamatan": kec
        };

        var streets = L.tileLayer(mbUrl, {
            id: 'mapbox.streets',
        });
        // ambil data dari database
        var alamat = <?=   $datak ;?>

        
        
        var bk = L.geoJSON([batu_keliang], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var bku = L.geoJSON([batu_keliang_utara], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var jnp = L.geoJSON([janapria], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var jng = L.geoJSON([jonggat], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var kpg = L.geoJSON([kopang], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var pry = L.geoJSON([praya], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var prateng = L.geoJSON([praya_tengah], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var prabada = L.geoJSON([praya_barat_daya], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var praba = L.geoJSON([praya_barat], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var pratim = L.geoJSON([praya_timur], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var prg = L.geoJSON([peringgarata], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);

        var pjt = L.geoJSON([pujut], {
            style: function(featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta);
        // L.geoJSON([btskab], {
        //     style: function(feature) {
        //         return feature.properties && feature.properties.style;
        //     }
        // }).addTo(peta);
        L.control.layers(baseLayers, overlays).addTo(peta);
        
    </script>
</body>

</html>