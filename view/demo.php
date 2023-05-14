<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/assets/grid.css">
    <!-- <link rel="stylesheet" href="view/assets/base.css"> -->
    <link rel="stylesheet" href="view/assets/main.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css"> -->
</head>

<body>
    <header class="header">
        <div class="scroll-top">
            <i class="fa-solid fa-up"></i>
        </div>
        <!-- TOPBAR -->
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


        <!-- SLIDER -->
        <div class="slider">
            <div class="grid wide">
                <div class="slider_container">
                    <div class="row">
                        <div class="col l-6 m-0 c-0">
                            <div class="slider_container-heading">About Scrum</div>
                            <h2>What is scrum?</h2>
                            <p>
                                Scrum helps people and teams <strong>deliver value incrementally</strong> in a
                                <strong>collaborative</strong> manner.
                                If you are just getting started, think of it as a way to get work done as a team in
                                small pieces at a time,
                                with experimentation and feedback loops along the way.
                            </p>
                            <a href="" class="slider_container-button">Learn more</a>

                        </div>
                        <div class="col l-6 m-0 c-0">
                            <img src="https://static.scrum.org/web/images/Scrumorg-Scrum-Framework-scrubbed.png"
                                aria-hidden="true" alt="Scrum Framework">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="container">
            <div class="container_card">
                <ul class="container_card-list hide-on-mobile-tablet">
                    <li class="container_card-item active">
                        <img src="https://cdn-icons-png.flaticon.com/512/10368/10368405.png " alt="" title=""
                            class=" img-small">
                        <span>Courage</span>
                    </li>
                    <li class="container_card-item">
                        <img src="https://cdn-icons-png.flaticon.com/512/4185/4185551.png " alt="" title=""
                            class="img-small">
                        <span>Focus</span>
                    </li>
                    <li class="container_card-item">
                        <img src="   https://cdn-icons-png.flaticon.com/512/7178/7178931.png " alt="" title=""
                            class="img-small">
                        <span>Commitment</span>

                    </li>
                    <li class="container_card-item">
                        <img src="https://cdn-icons-png.flaticon.com/512/5526/5526430.png " alt="" title=""
                            class="img-small">
                        <span>Respect</span>
                    </li>
                    <li class="container_card-item">
                        <img src="https://cdn-icons-png.flaticon.com/512/194/194331.png " alt="" title=""
                            class="img-small">
                        <span>Openness</span>
                    </li>
                </ul>
            </div>
            <div class="container_form">
                <h1 class="container_form-heading">VISUALISING SCRUM VALUES</h1>
                <div class="container_form-introduce">
                    <p>Working as a Scrum Master I asked myself...</p>
                    <blockquote>
                        <p>
                            "How do I know if my team are demonstrating the Scrum Values? What can
                            I use to show their current state?"
                        </p>
                    </blockquote>
                    <p>
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
                    <center><img src="view/assets/img/scrum-values.jpg" alt="Scrum Values" /></center>
                    <h2>What Questions did you use?</h1>
                        <p><strong>Note:</strong>You read the questions and tick the check box if it suits you, then the
                            system will return
                            your
                            chart.</p>

                </div>
                <form method="post" class="container_form-content" action="index.php?controller=question&action=update">
                    <!-- COURAGE -->
                    <div class="form-content">
                        <h3 class="form-content--heading">Courage</h3>
                        <div class="form-item">
                            <?php foreach ($questions as $question): ?>
                            <?php if ($question['type_name'] == 'courage'): ?>
                            <label class="form-item--content">
                                <input type="checkbox" name="courage[]" id="<?php echo $question['id']; ?>"
                                    value="<?php echo $question['id']; ?>">
                                <?php echo $question['question']; ?>
                            </label>

                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- OPENESS -->
                    <div class="form-content">
                        <h3 class="form-content--heading">Openness</h3>
                        <div class="form-item">
                            <?php foreach ($questions as $question): ?>
                            <?php if ($question['type_name'] == 'openness'): ?>
                            <div>
                                <label class="form-item--content">
                                    <input type="checkbox" name="openness[]" value="<?php echo $question['id']; ?>">
                                    <?php echo $question['question']; ?>
                                </label>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- FOCUS -->
                    <div class="form-content">
                        <h3 class="form-content--heading">Focus</h3>
                        <div class="form-item">
                            <?php foreach ($questions as $question): ?>
                            <?php if ($question['type_name'] == 'focus'): ?>

                            <label class="form-item--content">
                                <input type="checkbox" name="focus[]" value="<?php echo $question['id']; ?>">
                                <?php echo $question['question']; ?>
                            </label>

                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div class="form-content">
                    <!-- COMMITMENT -->
                    <div>
                        <h3 class="form-content--heading">Commitment</h3>
                        <div class="form-item">
                            <?php foreach ($questions as $question): ?>
                            <?php if ($question['type_name'] == 'commitment'): ?>

                            <label class="form-item--content">
                                <input type="checkbox" name="commitment[]" value="<?php echo $question['id']; ?>">
                                <?php echo $question['question']; ?>
                            </label>

                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div class="form-content">
                    <!-- RESPECT -->
                    <div>
                        <h3 class="form-content--heading">Respect</h3>
                        <div class="form-item">
                            <?php foreach ($questions as $question): ?>
                            <?php if ($question['type_name'] == 'respect'): ?>

                            <label class="form-item--content">
                                <input type="checkbox" name="respect[]" value="<?php echo $question['id']; ?>">
                                <?php echo $question['question']; ?>
                            </label>

                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="form-button">
                        <input type="submit" name="submit" value="Save">
                    </div>
                </form>
            </div>
        </div>


</body>

</html>