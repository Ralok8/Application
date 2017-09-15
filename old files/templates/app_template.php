<?php

    $fields = ['football', 'hockey','basketball'];

    if ( !empty($_GET['field']) && in_array($_GET['field'], $fields) ) {
        $field = $_GET['field'];
        
        require_once ($field . '/template.php');
    }