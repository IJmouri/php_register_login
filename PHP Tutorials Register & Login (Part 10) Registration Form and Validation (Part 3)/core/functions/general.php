<?php

function sanitize($data){
$link = mysqli_connect('localhost', 'root', '', 'a_database1');

    return mysqli_real_escape_string($link, $data);
}

function output_errors($errors){
    
    return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
?>