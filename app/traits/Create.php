<?php

    namespace app\traits;

    function getCampos($dados){
        $queryCampos = "(";
        $queryValues = "(";
        for($i = 0; $i< sizeof($dados); $i++){
            $queryCampos = $queryCampos . $dados[$i][0];
            $queryValues = $queryValues ."'" . $dados[$i][1] . "'" ;

            if($i+1 != sizeof($dados)){
                $queryCampos = $queryCampos . ', ';
                $queryValues = $queryValues . ', ';
            }
        }
        $arr = array(
            0 => $queryCampos . ')',
            1 => $queryValues . ')'
            
        );
        return  $arr;
    }

    trait Create {
        public function create($dados) {
            try {              
                $queryValues = getCampos($dados);
                $query = $this->connection->query("INSERT INTO {$this->table} {$queryValues[0]} VALUES {$queryValues[1]}");
                return  true ;

            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }
    }