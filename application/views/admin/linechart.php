<script src="<?= base_url('assets/') ?>js/Chart.min.js"></script>
<script src="<?= base_url('assets/') ?>js/utils.js"></script>



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

    });
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
        }],
        
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
        });
    };
</script>