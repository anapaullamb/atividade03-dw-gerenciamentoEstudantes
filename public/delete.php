<?php

    header("Access-Control-Allow-Origin: *");

    require __DIR__ . '/../vendor/autoload.php';

    use app\controllers\StudentController;

    $obj = new StudentController();

    $arr = array(
        0 => 'id',
        1 => $_POST['id']
    );
    $data = $obj->delete($arr);
    print_r($data);
    