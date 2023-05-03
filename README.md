
# API - Gerenciamento dos Estudantes de TADS [![Author](https://img.shields.io/badge/author-anapaullamb-7225d0?style=flat-square)](https://github.com/anapaullamb)
Atividade 03 da disciplina de desenvolvimento web.
## Descrição
  Utilizando o exemplo apresentado em aula, desenvolva uma API que possibilite gerenciar (CRUD) os estudantes do curso Tecnólogo em Análise e Desenvolvimento de Sistemas (TADS). Os estudantes devem conter apenas as seguintes informações: “nome”, “turma”. Os dados manipulados pela aplicação devem ser armazenados numa tabela do banco de dados, para consistência. A API deve utilizar os seguintes conceitos: Namespace, Traits, PDO. Cada item do CRUD deve ser codificado via Trait, como apresentado no exemplo de aula para a funcionalidade “Read”. O aluno deve implementar ainda: “Create”, “Update”, “Delete” e “Monitor”.

## :electric_plug: Instalação

1. Alterar as varíaveis da classe FabricaConexao `str_conn, host, dbname, USERNAME, PASSWORD`
    - localização: `/app/database/Connection.php`
    ```php
        $str_conn = "mysql:host=localhost;dbname=dbwii";

                static::$pdo = new PDO($str_conn, 'admin', 'nmQ0Qi0hN974',[
                  ...
                ]);
    ```
    
1. Criar a tabela `student` no banco de dados no mesmo dbname configurado em sua `Connection.php`
    ```mysql
        CREATE TABLE students ( id int NOT NULL AUTO_INCREMENT , 
                       nome varchar(255) NOT NULL , 
                       turma varchar(255) NOT NULL , 
                       PRIMARY KEY (`id`))
    ```
