<?php

$name = "";
$email = "";
$region = "";
$season = "";
$interests = [];
$participents = 0;
$message = "";
$errors = [];


// name validation
if (!empty($_POST["name"])) {
    $name = $_POST["name"];
    if (ctype_alpha(str_replace(" ", "", $name)) === false) {
        $errors[] = "Name should contain alphabet or space";
    }
} else {
    $errors[] = "Name can not be empty";
}

// email validation
if (!empty($_POST["email"])) {
    $email = $_POST["email"];

    //// Remove all illegal characters from email
    // $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // echo " Sanitizer:- $email";

    // validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== $email) {
        $errors[] = "Email is not valid";
    }
} else {
    $errors[] = "Email should not be empty";
}


// region validation

if (!empty($_POST["region"])) {
    $region = $_POST["region"];
    $approved_region = ["Bangladesh", "India", "Pakistan", "Afganistan", "USA", "Canada"];
    if (!in_array($region, $approved_region)) {
        $errors[] = "Region is not approved";
    }
} else {
    $errors[] = "Region should be selected";
}

// season validation
if (!empty($_POST["season"])) {
    $season = $_POST["season"];
    $approved_season = ["summer", "winter", "spring", "monson"];
    if (!in_array($season, $approved_season)) {
        $errors[] = "Season is not approved";
    }
} else {
    $errors[] = "Season should be selected";
}

// interests vaidation
if (!empty($_POST["interests"])) {
    $interests = $_POST["interests"];
    // print_r($interests);
    $allowed_interest = ["Photography", "Tracking", "Star Gazing", "Camping"];

    foreach ($interests as $interest) {
        if (!in_array($interest, $allowed_interest)) {
            $errors[] = "Invalid interest";
        }
    }
} else {
    $errors[] = "Interest should be selected";
}


// participants validation

if (!empty($_POST["participents"])) {
    $participents = (int) $_POST["participents"];
} else {
    $errors[] = "Participants should not be empty";
}



// message validation

if (!empty($_POST["textarea"])) {
    $message = (string) $_POST["textarea"];
} else {
    $errors[] = "Message should not be empty";
}



if ($errors) {
    echo "<pre>";
    print_r($errors);
    echo "</pre>";
} else {
    echo "Name: $name" . "<br>";
    echo "Email: $email" . "<br>";
    echo "Country: $region" . "<br>";
    echo "Season: $season" . "<br>";
    echo "<pre>";
    print_r($interests);
    echo "</pre>";
    echo "Participents: $participents" . "<br>";
    echo "Message: $message" . "<br>";
}
