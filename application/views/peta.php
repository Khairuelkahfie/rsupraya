<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peta Lombok Tengah</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>leaflet/leaflet.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   
</head>

<body>
    <div id="mapku">
    </div>
    <div class="" id="alamat" style="display:none"><?=$datak?></div>
    <script type="text/javascript" src="<?= base_url('assets/') ?>leaflet/leaflet.js"></script>
    <script src="<?= base_url('assets/') ?>js/batukeliang.js"></script>
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
       
        
        // // menampilkan jumlah data pada setiap kecamatan
        // L.marker([-8.6068562, 116.2422739]).addTo(peta)
        //     .bindPopup("<h3 style='width : 100px;'><?= $prb['kecamatan'] . ' '. $prb['al'] . ' Org' ?></h3>").openPopup();
        // akhir menampilkan data pada setiap kecamatan
        
        // L.marker([-8.8407109, 116.2068354]).bindPopup("<h3 style='width : 100px;'><?= $prb['kecamatan'] . ' '. $prb['al'] . ' Org' ?></h3>").openPopup().addTo(kec),
        // L.marker([-8.7728698, 116.1713917]).bindPopup("<h3 style='width : 100px;'><?= $pbd['kecamatan'] . ' '. $pbd['al'] . 'Org'?></h3>").addTo(kec),
        // L.marker([-8.8336359, 116.3013267]).bindPopup("<h3 style='width : 100px;'><?= $pjt['kecamatan'] . ' '. $pjt['al'] . 'Org'?></h3>").addTo(kec),
        // L.marker([-8.7771594, 116.3839765]).bindPopup("<h3 style='width : 100px;'><?= $pti['kecamatan'] . ' '. $pti['al'] . 'Org'?></h3>").addTo(kec);
        // L.marker([-8.71513, 116.4075854]).bindPopup("<h3 style='width : 100px;'><?= $jnp['kecamatan'] . ' '. $jnp['al'] . 'Org'?></h3>").addTo(kec);
        // L.marker([-8.641832, 116.3563]).bindPopup("<h3 style='width : 100px;'><?= $kpg['kecamatan'] . ' '. $kpg['al'] . 'Org'?></h3>").addTo(kec);
        // L.marker([-8.72174,	116.288597]).bindPopup("<h3 style='width : 100px;'><?= $pry['kecamatan'] . ' '. $pry['al'] . 'Org'?></h3>").addTo(kec);
        // L.marker([-8.7221426, 116.3131356]).bindPopup("<h3 style='width : 100px;'><?= $prt['kecamatan'] . ' '. $prt['al'] . 'Org'?></h3>").addTo(kec);
        // L.marker([-8.6688303, 116.2186488]).bindPopup("<h3 style='width : 100px;'><?= $jgt['kecamatan'] . ' '. $jgt['al'] . 'Org'?></h3>").addTo(kec);
        // L.marker([-8.6068562, 116.2422739]).bindPopup("<h3 style='width : 100px;'><?= $prg['kecamatan'] . ' '. $prg['al'] . 'Org'?></h3>").addTo(kec);
        // L.marker([-8.621743, 116.3131356]).bindPopup("<h3 style='width : 100px;'><?= $Bk['kecamatan'] . ' '. $Bk['al'] . 'Org'?></h3>").addTo(kec);
        // L.marker([	-8.468864, 116.3485586]).bindPopup("<h3 style='width : 100px;'><?= $Bku['kecamatan'] . ' '. $Bku['al'] . 'Org'?></h3>").addTo(kec);
        
              

        var mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
        var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1 }),
		    streets  = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1 });
            

        var peta = L.map('mapku', {
        center: [-8.6768427, 116.2127555], 
        zoom: 11,
        layers: [streets, grayscale, kec]
        });
       
        // menampilkan jumlah data pada setiap kecamatan
        


            L.marker([-8.72174,	116.288597]).addTo(peta)
            .bindPopup("<h3 style='width : 100px;'><?= $pry['kecamatan'] . ' '. $pry['al'] . 'Org'?></h3>")
            .openPopup();
                
            // addTo(peta)
            //     .bindPopup("<h3 style='width : 100px;'><?= $prb['kecamatan'] . ' '. $prb['al'] . ' Org' ?></h3>").openPopup();
            // L.marker([-8.7728698, 116.1713917])
            //     .openPopup("<h3 style='width : 100px;'><?= $pbd['kecamatan'] . ' '. $pbd['al'] . 'Org'?></h3>").addTo(peta);
                    

        // akhir menampilkan data pada setiap kecamatan

        

        var baseLayers = {
		"Grayscale": grayscale,
		"Streets": streets
        };

       

        var streets = L.tileLayer(mbUrl, {
            id: 'mapbox.streets',
        });
        // ambil data dari database
        var alamat = $('#alamat').html();
        let jum=JSON.parse(alamat);
        let arr=[];
        for(i in jum){
            arr.push(jum[i].al)
        }

        function getColor(d) {
    return d > 40000 ? '#800026' :
           d > 30000  ? '#BD0026' :
           d > 20000  ? '#E31A1C' :
           d > 10000  ? '#FC4E2A' :
           d > 5000   ? '#FD8D3C' :
           d > 2000   ? '#FEB24C' :
           d > 1000   ? '#FED976' :
                      '#FFEDA0';
}
function highlightFeature(e) {
    var layer = e.target;
}



function zoomToFeature(e) {
    peta.fitBounds(e.target.getBounds());
}
function onEachFeature(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        
        click: zoomToFeature
    });
}

function style(a) {
    return {
        fillColor: getColor(a),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
    };
}

        var bk = L.geoJSON([batukliang], {
            style: style(arr[0]),onEachFeature: onEachFeature
        }).addTo(peta);
        // layer.bindPopup('<h1>'+feature.properties.f1+'</h1><p>name: '+feature.properties.f2+'</p>');
        var bku = L.geoJSON([batu_keliang_utara], {
            style: style(arr[1]),onEachFeature: onEachFeature
        }).addTo(peta);
        var jnp = L.geoJSON([janapria], {
            style: style(arr[2]),onEachFeature: onEachFeature
        }).addTo(peta);
        var jng = L.geoJSON([jonggat], {
            style: style(arr[3]),onEachFeature: onEachFeature
        }).addTo(peta);
        var kpg = L.geoJSON([kopang], {
            style: style(arr[4]),onEachFeature: onEachFeature
        }).addTo(peta);
        var pry = L.geoJSON([praya], {
            style: style(arr[5]),onEachFeature: onEachFeature
        }).addTo(peta);
        var prateng = L.geoJSON([praya_tengah], {
            style: style(arr[6]),onEachFeature: onEachFeature
        }).addTo(peta);
        var prabada = L.geoJSON([praya_barat_daya], {
            style: style(arr[7]),onEachFeature: onEachFeature
        }).addTo(peta);
        var praba = L.geoJSON([praya_barat], {
            style: style(arr[8]),onEachFeature: onEachFeature
        }).addTo(peta);
        var pratim = L.geoJSON([praya_timur], {
            style: style(arr[9]),onEachFeature: onEachFeature
        }).addTo(peta);
        var prg = L.geoJSON([peringgarata], {
            style: style(arr[10]),onEachFeature: onEachFeature
        }).addTo(peta);
        var pjt = L.geoJSON([pujut], {
            style: style(arr[11]),onEachFeature: onEachFeature
        }).addTo(peta);
        // var pjt = L.geoJSON([pujut], {
        //     style: function(featur) {
        //         return featur.properties && featur.properties.style;
        //     }
        // }).addTo(peta);
        // L.geoJSON([btskab], {
        //     style: function(feature) {
        //         return feature.properties && feature.properties.style;
        //     }
        // }).addTo(peta);
        L.control.layers(baseLayers).addTo(peta);
        

var legend = L.control({position: 'bottomright'});

legend.onAdd = function (map) {

    var div = L.DomUtil.create('div', 'info legend'),
        grades = [1000, 2000, 5000, 10000, 20000, 30000, 40000],
        labels = [];

    // loop through our density intervals and generate a label with a colored square for each interval
    for (var i = 0; i < grades.length; i++) {
        div.innerHTML +=
            '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
            grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
    }

    return div;
};

legend.addTo(peta);


    </script>
    <style>
    .info {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    border-radius: 5px;
}
.info h4 {
    margin: 0 0 5px;
    color: #777;
}
.legend {
    line-height: 18px;
    color: #555;
}
.legend i {
    width: 18px;
    height: 18px;
    float: left;
    margin-right: 8px;
    opacity: 0.7;
}
    </style>
</body>

</html>