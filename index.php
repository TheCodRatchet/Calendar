<?php

require_once "vendor/autoload.php";

use Spatie\CalendarLinks\Link;

if (isset($_POST['submit'])) {
    $from = DateTime::createFromFormat('Y-m-d H:i', $_POST['from']);
    $to = DateTime::createFromFormat('Y-m-d H:i', $_POST['to']);

    $link = Link::create($_POST['title'], $from, $to)
        ->description($_POST['description'])
        ->address($_POST['address']);

    echo "<a href='" . $link->google() . "' target='_blank'>Click Here</a>";
}

?>

<form method="post">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="from">From:</label><br>
    <input type="text" id="from" name="from"><br>
    <label for="to">To:</label><br>
    <input type="text" id="to" name="to"><br>
    <label for="description">Description:</label><br>
    <input type="text" id="description" name="description"><br>
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address"><br>
    <input type="submit" name="submit" value="Submit">
</form>