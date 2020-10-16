<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.js"></script>
<script src="https://rawgit.com/beaver71/Chart.PieceLabel.js/master/build/Chart.PieceLabel.min.js"></script>
<script>
        var canvasAG = document.getElementById("Ribayar");
        var ctxag = canvasAG.getContext('2d');
        var myChartAG = new Chart(ctxag, {
            type: 'doughnut',
            data: {
                labels:[
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
                    data:[
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
                },
                
                pieceLabel: {
                render: 'value',
                fontSize: 14,
                fontStyle: 'bold',
                fontColor: '#000',
                fontFamily: '"Lucida Console", Monaco, monospace'
                }
            }
           
    
        });
    </script>