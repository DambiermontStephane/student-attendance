<?php

function index()
{
    require MODELS_PATH . '/Student.php';
    $title = 'Prendre les présences';
    $students = all();

    include VIEWS_PATH . '/attendances/index.php';
}
