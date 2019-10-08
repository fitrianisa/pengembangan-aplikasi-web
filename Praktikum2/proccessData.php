<?php
$errors = array();
if (isset($_POST)) {
    require 'validate.inc';
    validateAlphabetOnly($errors, $_POST, 'surname');
    validateAlphabetOnly($errors, $_POST, 'firstName');
    validateAlphabetOnly($errors, $_POST, 'lastName');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');
    validateMatchPass($errors, $_POST, 'cPassword');
    if ($errors) {
        // tampilkan kembali form
        require 'form.html';
    } else {
        echo 'Form submitted successfully with no errors';
    }
} else
    // tampilkan kembali form
    require 'form.html';
