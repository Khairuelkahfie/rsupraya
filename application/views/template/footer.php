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
<script src="<?= base_url('assets/') ?>js/peta.js"></script>

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

<script>
    var mymap = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);

    L.marker([51.5, -0.09]).addTo(mymap)
        .bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

    L.circle([51.508, -0.11], 500, {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5
    }).addTo(mymap).bindPopup("I am a circle.");

    L.polygon([
        [51.509, -0.08],
        [51.503, -0.06],
        [51.51, -0.047]
    ]).addTo(mymap).bindPopup("I am a polygon.");


    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }
</script>


</body>

</html>