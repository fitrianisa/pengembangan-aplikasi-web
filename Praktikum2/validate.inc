<?php

function validateAlphabetOnly(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name])) 
        $errors[$field_name] = 'required';
    else if (!preg_match("/^[a-zA-Z'-]+$/", $field_list[$field_name]))  
        $errors[$field_name] = 'must contain alphabets only';
}
function validateEmail(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name])) 
        $errors[$field_name] = 'required';
    else if (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL))  
        $errors[$field_name] = 'invalid email address';
} 
function validatePassword(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name])) 
        $errors[$field_name] = 'required';
    else if (!preg_match("/\w{6,20}/", $field_list[$field_name]))  
        $errors[$field_name]= 'must contain min 6 digit';
    else if (!preg_match("/[0-9]/", $field_list[$field_name]))  
        $errors[$field_name] = 'must contain number';
}
function validateMatchPass(&$errors, $field_list, $field_name){
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name])) 
        $errors[$field_name] = 'required';
    else if ($field_list['password']!==$field_list[$field_name])
        $errors[$field_name] = 'do not match';
}

