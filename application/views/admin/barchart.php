<script src="<?= base_url('assets/') ?>js/Chart.min.js"></script>
<script src="<?= base_url('assets/') ?>js/utils.js"></script>
<script>
var chartData = {
    labels: [<?php
                foreach ($ridimwaktu as $wkt) {
                    $waktu = $wkt->tahun;
                    echo "'$waktu'" . ",";
                }
            ?>],
        datasets: [
            {
                fillColor: "#79D1CF",
                strokeColor: "#79D1CF",
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
            }
        ]

    };

var opt = {
    events: false,
    tooltips: {
        enabled: false
    },
    hover: {
        animationDuration: 0
    },
    animation: {
        duration: 1,
        onComplete: function () {
            var chartInstance = this.chart,
                ctx = chartInstance.ctx;
            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
            ctx.textAlign = 'center';
            ctx.textBaseline = 'bottom';

            this.data.datasets.forEach(function (dataset, i) {
                var meta = chartInstance.controller.getDatasetMeta(i);
                meta.data.forEach(function (bar, index) {
                    var data = dataset.data[index];                            
                    ctx.fillText(data, bar._model.x, bar._model.y - 5);
                });
            });
        }
    },
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
};
 var ctx = document.getElementById("Dpwaktu"),
     myLineChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: opt
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
            },
            events: false,
            tooltips: {
                enabled: false
            },
            hover: {
                animationDuration: 0
            },
            animation: {
                duration: 1,
                onComplete: function () {
                    var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];                            
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);
                        });
                    });
                }
            },
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
            },
            events: false,
            tooltips: {
                enabled: false
            },
            hover: {
                animationDuration: 0
            },
            animation: {
                duration: 1,
                onComplete: function () {
                    var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];                            
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);
                        });
                    });
                }
            }
        }
    };

    var ctx = document.getElementById("penyakitri").getContext("2d");
    new Chart(ctx, config);
</script>
</body>

</html>