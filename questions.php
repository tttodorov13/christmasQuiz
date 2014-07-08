<?php

header("Content-Type: text/html; charset=utf-8");
$link = mysqli_connect("localhost", "christmas_quiz", "christmas_quiz", "christmas_quiz");

if (mysqli_connect_errno($link)) {
    echo "Failed to connect to My DataBase: " . mysqli_connect_error();
}


if ($_REQUEST['type'] == "add") {
    add($link);
}
if ($_REQUEST['type'] == "edit") {
    edit($link);
}
if ($_REQUEST['type'] == "delete") {
    delete($link);
}
if ($_REQUEST['type'] == "make-quiz") {
    make($link);
}

function add($link) {


    if (isset($_REQUEST['submit'])) {
        $id = mysqli_real_escape_string($link, $_REQUEST['id']);
        $question = mysqli_real_escape_string($link, $_REQUEST['question']);
        $ans1 = mysqli_real_escape_string($link, $_REQUEST['ans1']);
        $ans2 = mysqli_real_escape_string($link, $_REQUEST['ans2']);
        $ans3 = mysqli_real_escape_string($link, $_REQUEST['ans3']);
        $ans4 = mysqli_real_escape_string($link, $_REQUEST['ans4']);
        $selected_option = mysqli_real_escape_string($link, $_REQUEST['selected_option']);
    } else {
        echo "error";
    }

    mysqli_query($link, "INSERT INTO questions 
					SET question = '$question', ans1 = '$ans1', 
						ans2 = '$ans2', ans3 = '$ans3', 
						ans4 =  '$ans4', correct = '$selected_option'");
    header("Location: home-page.php");
}

function edit($link) {


    if (isset($_REQUEST['submit'])) {
        $id = mysqli_real_escape_string($link, $_REQUEST['id']);
        $question = mysqli_real_escape_string($link, $_REQUEST['question']);
        $ans1 = mysqli_real_escape_string($link, $_REQUEST['ans1']);
        $ans2 = mysqli_real_escape_string($link, $_REQUEST['ans2']);
        $ans3 = mysqli_real_escape_string($link, $_REQUEST['ans3']);
        $ans4 = mysqli_real_escape_string($link, $_REQUEST['ans4']);
        $selected_option = mysqli_real_escape_string($link, $_REQUEST['selected_option']);
    } else {
        echo "error";
    }
    mysqli_query($link, "UPDATE questions 
						 SET question = '$question', ans1 = '$ans1', 
						 ans2 = '$ans2', ans3 = '$ans3', 
						 ans4 =  '$ans4', correct = '$selected_option'
						 WHERE id = '$id' ");

    header("Location: home-page.php");
}

function delete($link) {


    if (isset($_REQUEST['submit'])) {
        $id = mysqli_real_escape_string($link, $_REQUEST['id']);
        $question = mysqli_real_escape_string($link, $_REQUEST['question']);
        $ans1 = mysqli_real_escape_string($link, $_REQUEST['ans1']);
        $ans2 = mysqli_real_escape_string($link, $_REQUEST['ans2']);
        $ans3 = mysqli_real_escape_string($link, $_REQUEST['ans3']);
        $ans4 = mysqli_real_escape_string($link, $_REQUEST['ans4']);
        $selected_option = mysqli_real_escape_string($link, $_REQUEST['selected_option']);
    } else {
        echo "error";
    }
    mysqli_query($link, "DELETE FROM questions
						 WHERE id = '$id' ");

    header("Location: home-page.php");
}
//
//function delete($link) {
//
//
//    if (isset($_REQUEST['submit'])) {
//        $id = mysqli_real_escape_string($link, $_REQUEST['id']);
//        $question = mysqli_real_escape_string($link, $_REQUEST['question']);
//        $ans1 = mysqli_real_escape_string($link, $_REQUEST['ans1']);
//        $ans2 = mysqli_real_escape_string($link, $_REQUEST['ans2']);
//        $ans3 = mysqli_real_escape_string($link, $_REQUEST['ans3']);
//        $ans4 = mysqli_real_escape_string($link, $_REQUEST['ans4']);
//        $selected_option = mysqli_real_escape_string($link, $_REQUEST['selected_option']);
//    } else {
//        echo "error";
//    }
//    header("Location: home-page.php");
//}

mysqli_close($link);
?>