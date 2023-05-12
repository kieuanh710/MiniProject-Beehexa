<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form scrum value</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="./assets/main.css" />
</head>

<body>
    <!-- introduce scrum values -->
    <h1 class="form-heading">VISUALISING SCRUM VALUES</h1>
    <div class="introduce">
        <p>Working as a Scrum Master I asked myself...</p>
        <blockquote>
            <p>
                "How do I know if my team are demonstrating the Scrum Values? What can
                I use to show their current state?"
            </p>
        </blockquote>
        <p></p>
        Remembering an exercise I did some years ago whist at my local Agile
        group - <a href="http://www.agileyorkshire.org/">Agile Yorkshire</a>, I
        thought I could use a "Spider Web" to visualise the state. ( SO a big
        thank you to Agile Yorkshire and
        <a href="https://www.linkedin.com/in/roydbrayshay/">Royd Brayshay</a>)
        </p>
        <br />
        <p>
            The exercise I used is to rate yourself of against a list of questions,
            giving yourself 1 point for each question you agreed with and then mark
            result on a scale. Once completed you should end up with something like
            this:
        </p>
        <br />
        <img src="./assets/scrum-values.jpg" alt="Scrum Values" />
    </div>

    <!-- Form scrum values -->
    <form method="post" action="submit.php"></form>
    <h2>What Questions Did I Use?</h2>
    <div class="form-container">
        <!-- COURAGE -->
        <div class="form-content">
            <h3 class="form-content--heading">Courage</h3>
            <?php 
            if(isset($data["questions"])){
                foreach($questions as $question) {
            ?>
            <div class="form-item">
                <input type="checkbox" id="type-1--<?php echo($question['id']) ?>" class="form-item--checkbox"
                    name="type-1--[]" value="<?php echo $question['id']; ?>" />
                <label for="type-1--<?php echo($question['id']) ?>"
                    class="form-item--content"><?php echo($question['question']) ?></label>
            </div>
            <?php
                }
            }
            ?>
        </div>

    </div>
    <div class="form-button">
        <button type="submit" name="btn-click" onclick="showChart()">
            Show the result
        </button>
    </div>
    </form>

    <div class="chartBox">
        <canvas id="myChart"></canvas>
    </div>


    <!-- <script src="/main.js"></script> -->
    <script src="./assets/main.js"></script>
    <!-- chart library -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
</body>

</html>