<?php
    $fields = ['football', 'hockey', 'basketball'];

    if ( !empty($_GET['field']) && in_array($_GET['field'], $fields) ) {
        $field = $_GET['field'];
        
        echo '<link rel="stylesheet" href="templates/'. $field . '/style.css">';
    }
   