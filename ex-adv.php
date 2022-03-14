<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise advanced</title>
</head>
<body>
    <?php
    $uberarray = array("mickey" => array(
        "mickey mouse" => array(
            "height" => 15,
            "age" => 50,
            "power" => "none"
        ),
        "minnie mouse" => array(
            "height" => 14,
            "age" => 36,
            "power" => "none"
        ),
        "donald duck" => array(
            "height" => 12,
            "age" => 48,
            "power" => "none"
        )
    ), "pokemon"  => array(
        "charmander" => array(
            "height" => 11,
            "age" => 3,
            "power" => "water"
        ),
        "squirtle" => array(
            "height" => 8,
            "age" => 1,
            "power" => "fire"
        ),
        "bulbasaur" => array(
            "height" => 7,
            "age" => 4,
            "power" => "grass"
        )
    ), "dbz" => array(
        "goku" => array(
            "height" => 27,
            "age" => 42,
            "power" => "ssj"
        ),
        "vegeta" => array(
            "height" => 25,
            "age" => 40,
            "power" => "ssj"
        ),
        "bulma" => array(
            "height" => 23,
            "age" => 41,
            "power" => "none"
        )
    ));

echo $uberarray["dbz"]["goku"]["power"];

    ?>
</body>
</html>