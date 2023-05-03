<?php

    namespace app\traits;

    function getValues($dados){
        $values = "";
        for($i = 1; $i< sizeof($dados); $i++){
            $values = $values . $dados[$i][0] . "='". $dados[$i][1] . "'";
            if($i+1 != sizeof($dados)){
                $values = $values . ', ';
            }
        }
        return  $values;
    }

    trait Update {
        public function update($dados) {
            try {              

                //UPDATE `students` SET nome='feraa' WHERE id = '1'
                $queryValues = getValues($dados);
                $queryWhere = $dados[0][0] . "=".$dados[0][1];
                $query = $this->connection->query("UPDATE {$this->table} SET {$queryValues} WHERE {$queryWhere}");
                return  true;

            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }
    }