<?php

var_dump($_POST);

if (isset($_POST["edit"])) {
    $json = readBackgroundJSON();
    $json["expertise"][$_POST["key"]] = [
        "en" => $_POST["english"],
        "es" => $_POST["spanish"]
    ];
    writeBackgroundJSON($json);
}

if (isset($_POST["add"])) {
    $json = readBackgroundJSON();
    $json["expertise"][] = [
        "en" => $_POST["english"],
        "es" => $_POST["spanish"]
    ];
    writeBackgroundJSON($json);
}

if (isset($_POST["delete"])) {
    $json = readBackgroundJSON();
    unset($json["expertise"][$_POST["key"]]);
    writeBackgroundJSON($json);
}

header("Location: ../index.php?page=background");
die();

function readBackgroundJSON()
{
    return json_decode(file_get_contents("../../db/expertise.json"), true);
}

function writeBackgroundJSON($data)
{
    return file_put_contents("../../db/expertise.json", json_encode($data));
}
