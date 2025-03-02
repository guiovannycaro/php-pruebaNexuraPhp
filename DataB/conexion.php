<?php

class base_datos {
    
    private $dbhost = "localhost";
    private $dbuser = "postgres";
    private $dbpass = "Admin123";
    private $dbname = "nexuraBD";
    private $dbpuerto = "5432";
    private $conn;

    function __construct() {
        $this->connect();
    }

    function connect() {
        // Corregido el error en la construcción de la cadena de conexión
        $connection_string = "host={$this->dbhost} port={$this->dbpuerto} dbname={$this->dbname} user={$this->dbuser} password={$this->dbpass}";
        $this->conn = pg_connect($connection_string);
       /* 
        if (!$this->conn) {
            die("<br>❌ Falló la conexión: " . pg_last_error());
        } else {
            echo "<br>✅ Conexión exitosa";
        }*/
    }

    function query($sql) {
        $result = pg_query($this->conn, $sql);
        if (!$result) {
            die("<br>❌ Error en la consulta: " . pg_last_error($this->conn));
        }
        return $result;
    }

    function fetch_row($result) {
        return pg_fetch_assoc($result);
    }

    function numrows($result) {
        return pg_num_rows($result);
    }

    function close() {
        pg_close($this->conn);
    }

    function startTransaction() {
        pg_query($this->conn, "BEGIN");
    }

    function breakTransaction($msg = "") {
        pg_query($this->conn, "ROLLBACK");
        die("<br>❌ Transacción abortada: $msg");
    }

    function commitTransaction() {
        pg_query($this->conn, "COMMIT");
    }
}
?>