<?php
class BancodeDados {
    private $host = "localhost:3306";
    private $user = "root";
    private $senha = "";
    private $banco = "Shyne_Tech_Banco";
    public $con; // Changed the property name to 'con'

    function conecta() {
        $this->con = new mysqli($this->host, $this->user, $this->senha, $this->banco);

        if ($this->con->connect_error) {
            die("Problemas com a conexão: " . $this->con->connect_error);
        }
    }

    function fechar() {
        $this->con->close();
    }
}
?>