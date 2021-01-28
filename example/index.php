<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>GitHub Calendar</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="bag fixed">
            <h1>Embed your GitHub contributions calendar anywhere!</h1>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
            <script src="../dist/github-calendar.min.js"></script>
            <script src="js/main.js"></script>
            <script
            src="https://unpkg.com/github-calendar@latest/dist/github-calendar.min.js"
            ></script>
            <?php
                include("content.php");
                include("precontext.php");
                print(output($color_array, $color_set));
            ?>
        </div>
    </body>
</html>
