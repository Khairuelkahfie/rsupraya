

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

<!-- chart.js -->
<!-- <script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.js"></script> -->
<script src="<?= base_url('assets/') ?>js/Chart.min.js"></script>
<script src="<?= base_url('assets/') ?>js/utils.js"></script>
<!-- peta -->
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
        
              

        var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
        var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr}),
		    streets  = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});

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
            attribution: mbAttr
        });
        function style(feature) {
            return {
                fillColor: '#800026',
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }
       
        var bk = L.geoJSON([batu_keliang], {
            color : function style(){
                fillColor
            } ,
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
        L.control.layers(baseLayers, overlays).addTo(peta);
    </script>

<script>
    var canvasAG = document.getElementById("Ribayar");
    var ctxag = canvasAG.getContext('2d');
    var myChartAG = new Chart(ctxag, {
        type: 'doughnut',
        data: {
            labels: [
                <?php
                foreach ($ribayar as $b) {
                    $cara_bayar = $b['cara_bayar'];
                    echo "'$cara_bayar'" . ",";
                }
                ?>
            ],
            datasets: [{
                backgroundColor: [
                    'rgba(216,170,95,0.9)',
                    'rgba(221,206,111,0.9)',
                    'rgba(149,196,243,0.9)',
                    'rgba(94,130,157,0.9)',
                    'rgba(211,175,167,0.9)',
                    'rgba(255,87,34,0.9)',
                    'rgba(0,150,136,0.9)',
                    'rgba(0,188,212,0.9)',
                    'rgba(33,150,243,0.9)',
                    'rgba(63,81,181,0.9)',
                    'rgba(63,21,181,1)',
                    'rgba(63,81,18,1)',
                ],
                data: [
                    <?php
                    foreach ($ribayar as $b) {
                        $totalbayar = $b['total'];
                        echo "'$totalbayar'" . ",";
                    }
                    ?>
                ]
            }]
        },
        options: {
            legend: {
                display: true,
                position: 'right',
                labels: {
                    usePointStyle: true,
                    fontSize: 10
                },
            },
            responsive: true,
            segmentShowStroke: false,
            scaleBeginAtZero: false,
            elements: {
                arc: {
                    borderWidth: 1
                }
            }
        },

    });
</script>




<script>
    var ctx = document.getElementById("Rjcarabayar").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php
                        foreach ($rjbayar as $b) {
                            $cara_bayar = $b['cara_bayar'];
                            echo "'$cara_bayar'" . ",";
                        }
                        ?>],
            datasets: [{

                data: [<?php
                        foreach ($rjbayar as $b) {
                            $totalbayar = $b['total'];
                            echo "'$totalbayar'" . ",";
                        }
                        ?>],
                backgroundColor: [
                    <?php
                    foreach ($rjbayar as $b) {
                        echo "'rgba(174, 252, 36, 1)',";
                    }
                    ?>
                ],
                label: 'Rawat Jalan',
                fill: true,
                //                        lineTension: 0.1,
                backgroundColor: "rgba(111,192,29, 0.2)",
                borderColor: "rgba(111,192,29, 1)",
                borderCapStyle: 'butt',
                borderWidth: 2,
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(111,192,29, 1)",
                pointBackgroundColor: "#aaa",
                pointBorderWidth: 2,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(111,192,29, 1)",
                pointHoverBorderColor: "rgba(111,192,29, 1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                display: false
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem) {
                        console.log(tooltipItem)
                        return tooltipItem.yLabel;
                    }
                }
            }
        }

    });
</script>


<script>
    var cts = document.getElementById("Dpwaktu").getContext('2d');
    var myChart = new Chart(cts, {
        type: 'bar',

        data: {
            labels: [<?php
                        foreach ($ridimwaktu as $wkt) {
                            $waktu = $wkt->tahun;
                            echo "'$waktu'" . ",";
                        }
                        ?>],
            datasets: [{
                data: [<?php
                        foreach ($ridimwaktu as $wkt) {
                            $waktu = $wkt->psn;
                            echo "'$waktu'" . ",";
                        }
                        ?>],
                backgroundColor: [<?php
                                    foreach ($ridimwaktu as $wkt) {
                                        echo "'rgba(255, 195, 48, 1)',";
                                       
                                    }
                                    ?>],
                borderColor: [
                    <?php
                    foreach ($ridimwaktu as $wkt) {
                        echo "'rgba(255, 195, 48, 1)',";
                    }
                    ?>
                ],
            }]
        },
        options: {
            legend: {
                display: false
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem) {
                        console.log(tooltipItem)
                        return tooltipItem.yLabel;
                    }
                }
            }
        }
    });
</script>
<script>
    var config = {
        type: 'bar',
        data: {
            labels: [<?php
                        foreach ($rjdimwaktu as $waktu) {
                            $tanggal = $waktu->tahun;
                            echo "'$tanggal'" . ",";
                        }
                        ?>],
            datasets: [{
                data: [<?php
                        foreach ($rjdimwaktu as $waktu) {
                            $tanggal = $waktu->pas;
                            echo "'$tanggal'" . ",";
                        }
                        ?>],
                backgroundColor: [
                    <?php
                    foreach ($rjdimwaktu as $waktu) {
                        echo "'rgba(174, 252, 36, 1)',";
                    }
                    ?>
                ],
                borderColor: [
                    <?php
                    foreach ($rjdimwaktu as $waktu) {
                        echo "'rgba(174, 252, 36, 1)',";
                    }
                    ?>
                ],
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            legend: {
                display: false
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem) {
                        console.log(tooltipItem)
                        return tooltipItem.yLabel;
                    }
                }
            }
        }
    };

    var ctx = document.getElementById("Dptanggal").getContext("2d");
    new Chart(ctx, config);
</script>

<script>
    var config = {
        type: 'bar',
        data: {
            labels: [<?php
                        foreach ($penyakitri as $penyakit) {
                            $penyakit = $penyakit->jenis_penyakit;
                            echo "'$penyakit'" . ",";
                        }
                        ?>],
            datasets: [{
                data: [<?php
                        foreach ($penyakitri as $penyakit) {
                            $penyakit = $penyakit->t;
                            echo "'$penyakit'" . ",";
                        }
                        ?>],
                backgroundColor: [
                    <?php
                    foreach ($penyakitri as $penyakit) {
                        echo "'rgb(255, 87, 51)',";
                    }
                    ?>
                ],
                borderColor: [
                    <?php
                    foreach ($penyakitri as $penyakit) {
                        echo "'rgb(255, 87, 51)',";
                    }
                    ?>
                ],
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            legend: {
                display: false
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem) {
                        console.log(tooltipItem)
                        return tooltipItem.yLabel;
                    }
                }
            }
        }
    };

    var ctx = document.getElementById("penyakitri").getContext("2d");
    new Chart(ctx, config);
</script>
<script>
    var lineChartData = {
        labels: [<?php
                    foreach ($penyakitrijk as $penyakit) {
                        $penyakit = $penyakit->jenis_penyakit;
                        echo "'$penyakit'" . ",";
                    }
                    ?>],
        datasets: [{
            label: 'Laki Laki',
            borderColor: window.chartColors.blue,
            backgroundColor: window.chartColors.blue,
            fill: false,
            data: [<?php
                    foreach ($penyakitrijk as $penyakit) {
                        $penyakit = $penyakit->lk;
                        echo "'$penyakit'" . ",";
                    }
                    ?>],
            yAxisID: 'y-axis-1',
        }, {
            label: 'Perempuan',
            borderColor: window.chartColors.red,
            backgroundColor: window.chartColors.red,
            fill: false,
            data: [
                <?php
                foreach ($penyakitrijk as $penyakit) {
                    $penyakit = $penyakit->pr;
                    echo "'$penyakit'" . ",";
                }
                ?>
            ],
            yAxisID: 'y-axis-2'
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById('penyakitrijk').getContext('2d');
        window.myLine = Chart.Line(ctx, {
            data: lineChartData,
            options: {
                responsive: true,
                hoverMode: 'index',
                stacked: false,
                title: {
                    display: true,
                    // text: 'Chart.js Line Chart - Multi Axis'
                },
                scales: {
                    yAxes: [{
                        type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: 'left',
                        id: 'y-axis-1',
                    }, {
                        type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: 'right',
                        id: 'y-axis-2',

                        // grid line settings
                        gridLines: {
                            drawOnChartArea: false, // only want the grid lines for one axis to show up
                        },
                    }],
                }
            }
        });
    };
</script>
</body>

</html>