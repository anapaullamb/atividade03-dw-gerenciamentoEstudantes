<?php

    namespace app\traits;

    trait Delete {
        public function delete($dados) {
            try {           
                $queryWhere = $dados[0] . "=".$dados[1];
                $query = $this->connection->query("DELETE FROM {$this->table} WHERE {$queryWhere}");
                return  true;
            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }
    }