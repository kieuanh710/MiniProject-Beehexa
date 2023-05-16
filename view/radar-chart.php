<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form scrum value</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="view/assets/grid.css" />
    <link rel="stylesheet" href="view/assets/main.css" />
</head>

<body>
    <nav class="navbar">
        <div class="grid wide">
            <div class="navbar_container">
                <div class="row">
                    <div class="col l-3 m-0 c-0">
                        <a href="" class="navbar_container-logo-link">
                            <img class="logo-link" src="view/assets/img/scrum.png" alt="Scrum org">
                        </a>
                    </div>
                    <div class="col l-8 m-12 c-12 navbar_container-list--item">
                        <ul class="navbar_container-list">
                            <li class="navbar_container-item">
                                <a href="#" class="navbar_container-link active">About</a>
                            </li>
                            <li class="navbar_container-item">
                                <a href="#" class="navbar_container-link">Training</a>
                            </li>
                            <li class="navbar_container-item">
                                <a href="#" class="navbar_container-link">Certification</a>
                            </li>
                            <li class="navbar_container-item">
                                <a href="#" class="navbar_container-link">Community</a>
                            </li>
                            <li class="navbar_container-item">
                                <a href="#" class="navbar_container-link">Innovations</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-1 m-0 c-0 navbar_container-search">
                        <img src="https://cdn-icons-png.flaticon.com/512/54/54481.png " alt="" title=""
                            class="img-small">
                        <input type="text" id="search-form" class="navbar_container-search-input"
                            placeholder="Search...">

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="chart">
        <h1>Your chart</h1>
        <div class="row">
            <div class="col l-12 m-6 c-12">
                <div class="chart_radar">
                    <canvas id="myChart"></canvas>
                    <a class="chart_radar-link" href="http://localhost/MiniProject/index.php?controller=question">Back
                        to
                        home
                        page</a>
                    <button onclick="download()">Download</button>
                </div>
            </div>
            <!-- <div class="col l-4 m-6 c-12">
                <div class="chart_form">
                    <form action="">
                        <label for="name">Name</label>
                        <input type="text" id="" name="name" placeholder="Your name.." required>

                        <label for="email">Email</label>
                        <!-- <input type="email" id="" name="email" placeholder="Your email.." required> -->
            <!-- <input type="email" id="" name="email" placeholder="Your email.."
                title="The domain portion of the email address is invalid (the portion after the @)."
                pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$">

            <input class="chart_form__submit" name="submit" type="submit" value="Submit"> -->
        </div>
    </div> -->
    </div>

    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // SETUP
    const data = {
        labels: ["Courage", "Openness", "Focus", "Commitment", "Respect"],
        datasets: [{
            label: "Scrum values",
            data: [<?= $countCourage ?>, <?= $countOpenness ?>, <?= $countFocus ?>, <?= $countCommitment ?>,
                <?= $countRespect ?>
            ],
            // data: [1, 2, 4, 3, 5],
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

    function download() {
        var a = document.createElement('a');
        const canvas = document.getElementById('myChart');
        a.download = 'canvas.png';

        a.href = canvas.toDataURL('/image/png', 1);
        a.click();
    }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.0.0-beta.12/html2canvas.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>

</body>

</html>