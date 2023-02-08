<?php 

function view($name, $data) {
    if (is_file('views/' . $name . '.php')) {
        include_once('views/' . $name . '.php');
    }
}