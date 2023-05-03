<?php

    header("Access-Control-Allow-Origin: *");

    require __DIR__ . '/../vendor/autoload.php';

    use app\controllers\StudentController;

    $obj = new StudentController();
    $arr = array(
        0 => array("id",$_POST['id']
        ),
        1 => array("nome",$_POST['nome']
        ),
        2 => array("turma",$_POST['turma']
        )
    );
    $data = $obj->update($arr);
    print_r($data);
    