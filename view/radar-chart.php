<!DOCTYPE html>
<html>

<head>
    <title>Radar Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="./assets/main.css">
</head>

<body>
    <?php
    // require_once ('./controllers/QuestionController.php');
    ?>

    <h1>Checked Items Count: <?= $count ?></h1>
    <div class="chartBox">
        <canvas id="myChart"></canvas>
    </div>
    <script>
    // SETUP
    const data = {
        labels: ["Openness", "Respect", "Courage", "Focus", "Commitment"],
        datasets: [{
            label: "Scrum values",
            data: [<?= $count ?>, 1, 3, 3, 2],
            backgroundColor: [
                "rgba(255, 26, 104, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 206, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(0, 0, 0, 0.2)",
            ],
            borderColor: [
                "rgba(255, 26, 104, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)",
                "rgba(0, 0, 0, 1)",
            ],
            borderWidth: 1,
        }, ],
    };

    // CONFIG
    const config = {
        type: "radar",
        data,
        options: {
            scales: {
                r: {
                    beginAtZero: true,
                    min: 0,
                    max: 5,
                    ticks: {
                        stepSize: 1,
                        callback: (value, tick, values) => {
                            console.log(value);
                            return "";
                        },
                    },
                },
            },
        },
    };
    // render init block
    const myChart = new Chart(document.getElementById("myChart"), config);

    // Instantly assign Chart.js version
    const chartVersion = document.getElementById("chartVersion");
    chartVersion.innerText = Chart.version;
    // }
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>

</body>

</html>
<?php 
// print_r($results);
// print_r($results1);
?>