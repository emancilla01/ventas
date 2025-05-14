
<?php
class db {
    public $servername = "localhost";
    public $username = "root";
    public $password = "Ch33rlos.";
    public $dbname = "ventas";
    public $conn = null;

    public function __construct(){
    }

    public function conectar(){
        try {
            $this->conn = new PDO(
                "mysql:host=$this->servername;dbname=$this->dbname;port=3306",
                $this->username,
                $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }   
    
    public function desconectar(){
        $this->conn = null;
    }   

    public function insertar($sql){
        try {
            // use exec() because no results are returned
            $this->conn->exec($sql);
            echo "Registro insertado correctamente";
        } catch(PDOException $e) {
            echo  "<br>" . $e->getMessage()."<br>Sentencia SQL: ".$sql;
        }
    }

    public function actualizar($sql){
        try {
            // use exec() because no results are returned
            $this->conn->exec($sql);
            echo "Registro actualizado correctamente";
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage()."<br>Sentencia SQL: ".$sql;
        }
    }
    public function obtenerRegistros($sql){
        $this->conn = $this->conectar();
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $datos = $stmt->fetchAll();
            return $datos;
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
        $this->desconectar($this->conn);
    }

    public function eliminar($sql){
        try {
            $this->conn->exec($sql);
            echo "Registro eliminado correctamente";
        } catch(PDOException $e) {
            echo  $e->getMessage()."<br>Sentencia SQL: ".$sql;
        }
    }
}
?>