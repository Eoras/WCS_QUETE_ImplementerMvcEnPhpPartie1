<?php

namespace MVC\Model;

class Pdo
{
    protected $_dao;

    public function __construct()
    {
        // Afficher les erreurs et mettre les caractère en UTF8
        $options = [
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING
        ];

        // Je me connecte à la base de donnée
        $this->_dao = new \PDO(DSN, USERNAME, PASSWORD, $options);

    }
}
