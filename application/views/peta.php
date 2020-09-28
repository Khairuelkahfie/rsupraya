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
    <script src="<?= base_url('assets/') ?>js/loteng.js"></script>
    <script>
        var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        var streets = L.tileLayer(mbUrl, {
            id: 'mapbox.streets',
            attribution: mbAttr
        });
        var peta = L.map('mapku', {
            center: [-8.5481356, 116.4674421],
            zoom: 10,
            layers: [streets]
        });

        // function getColor(d) {
        //     return d > 1000 ? '#800026' :
        //         d > 500 ? '#BD0026' :
        //         d > 200 ? '#E31A1C' :
        //         d > 100 ? '#FC4E2A' :
        //         d > 50 ? '#FD8D3C' :
        //         d > 20 ? '#FEB24C' :
        //         d > 10 ? '#FED976' :
        //         '#FFEDA0';
        // }
        // //json batas wilayah kecamatan
        // function style(feature) {
        //     return {
        //         fillColor: getColor(feature.properties.density),
        //         weight: 2,
        //         opacity: 1,
        //         color: 'white',
        //         dashArray: '3',
        //         fillOpacity: 0.7
        //     };
        // }

        // L.geoJson(btskab, {
        //     style: style
        // }).addTo(peta);

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
        L.geoJSON([btskab], {
            style: function(feature) {
                return feature.properties && feature.properties.style;
            }
        }).addTo(peta);
    </script>
</body>

</html>