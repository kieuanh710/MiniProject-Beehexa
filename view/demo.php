<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>


<body>
    <?php
        // require_once('./models/Database.php');
        // require_once('./models/QuestionModel.php');
        // require_once('./controllers/QuestionController.php');
        // print_r($checkboxes);
    ?>
    <h1>sfdfs</h1>


    <!-- <form method="POST" action="">
        <?php foreach($checkboxes as $checkbox): ?>
        <div class="form-item">
            <input type="checkbox" id="type-1--<?php echo($checkbox['id']) ?>" class="form-item--checkbox" name=""
                value="c" />
            <label for="type-1--v" class="form-item--content"><?php echo($checkbox['question']) ?></label>
        </div>
        <?php endforeach; ?>
        <input type="submit" name="submit" value="Save">
    </form> -->


    <form method="post" action="index.php?controller=question&action=update">
        <!-- <input type="hidden" name="id" value="<?php echo $question['id']; ?>"> -->
        <!-- COURAGE -->
        <div>
            <h3>Courage</h3>
            <?php foreach ($questions as $question): ?>
            <?php if ($question['type_name'] == 'courage'): ?>
            <div>
                <label>
                    <input type="checkbox" name="courage[]" id="<?php echo $question['id']; ?>"
                        value="<?php echo $question['id']; ?>">
                    <?php echo $question['question']; ?>
                </label>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <!-- OPENESS -->
        <div>
            <h3>Openness</h3>
            <?php foreach ($questions as $question): ?>
            <?php if ($question['type_name'] == 'commitment'): ?>
            <div>
                <label>
                    <input type="checkbox" name="openness[]" value="<?php echo $question['id']; ?>">
                    <?php echo $question['question']; ?>
                </label>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <input type="submit" name="submit" value="Save">
    </form>

</body>

</html>