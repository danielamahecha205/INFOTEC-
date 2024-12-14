<?php
class CRUD {    
    private $conn;
    private $table;
        
    public function __construct($db, $table) {        
        $this->conn = $db;        
        $this->table = $table;    
    }    
    // Create 
    public function create($data) {        
        $keys = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $query = "INSERT INTO " . $this->table . " ($keys) VALUES ($values)";
        $stmt = $this->conn->prepare($query);        
        
        foreach ($data as $key => $val) {            
            $stmt->bindValue(":$key", $val);        
        }        
        
        if ($stmt->execute()) {            
            return true;        
        }        
        return false;    
    }    
    // Read
    public function read($id = null) {
        $query = "SELECT * FROM " . $this->table;        
        if ($id) {
            $query .= " WHERE id = :id";        
        }        
        
        $stmt = $this->conn->prepare($query);        
        
        if ($id) {
            $stmt->bindParam(":id", $id);
        }        
        
        $stmt->execute();        
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);    
    }    
    // Update
    public function update($id, $data) {        
        $set = "";        
        foreach ($data as $key => $val) {
            $set .= "$key = :$key, ";        
        }        
        
        $set = rtrim($set, ", ");       
        $query = "UPDATE " . $this->table . " SET $set WHERE id = :id";
        $stmt = $this->conn->prepare($query);        
        $stmt->bindParam(":id", $id);        
        
        foreach ($data as $key => $val) {
            $stmt->bindValue(":$key", $val);        
        }        
        
        if ($stmt->execute()) {
            return true;        
        }        
            return false;    
    }    
    // Delete
    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        
        if ($stmt->execute()) {
            return true;
        }        
        
        return false;    
    }
}

?>