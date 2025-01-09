<?php
include "bgtoolbox/Toolbox.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BG PHP Toolbox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4">BG PHP Toolbox!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">createStringWithFormat($string, $values)</h5>
                    <p class="card-text">Result: <?= \Toolbox::createStringWithFormat("There are {0} new members today and {1} yesterday.", array("15", "45"))?></p>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">createSpecialVersion($startDate)</h5>
                    <p class="card-text">Result: <?= \Toolbox::createSpecialVersion("2024-01-01")?></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
