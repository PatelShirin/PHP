<?php
$quizISSubmitted = isset( $_POST['quiz-submitted']);
if( $quizISSubmitted ){
    $answer = $_POST['answer'];
    $output = showQuizResponse( $answer );
} else {
    $output = include_once "views/quiz-form.php";
}
return $output;

function showQuizResponse ( $answer ) {
    $response = "<p>You clicked $answer</p>";
    $response .= "<p>
                    <a href = 'index.php?page=quiz'>Try quiz again?</a>
                  </p>";
    return $response;
}