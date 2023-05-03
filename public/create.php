<?php

    header("Access-Control-Allow-Origin: *");

    require __DIR__ . '/../vendor/autoload.php';

    use app\controllers\StudentController;

    $obj = new StudentController();

    $arr = array(
        0 => array("nome",$_POST['nome']
        ),
        1 => array("turma",$_POST['turma']
        )
    );
    $data = $obj->create($arr);
    print_r($data);
    