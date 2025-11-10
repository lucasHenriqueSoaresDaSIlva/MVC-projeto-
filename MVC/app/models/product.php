<?php
class Product {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getAll() {
        $query = "SELECT * FROM products ORDER BY id DESC";
        return $this->db->query($query);
    }
    
    public function getById($id) {
        $query = "SELECT * FROM products WHERE id = :id";
        return $this->db->query($query, [':id' => $id])[0] ?? null;
    }
    
    public function create($data) {
        $query = "INSERT INTO products (name, price, category) VALUES (:name, :price, :category)";
        return $this->db->execute($query, [
            ':name' => $data['name'],
            ':price' => $data['price'],
            ':category' => $data['category']
        ]);
    }
    
    public function update($id, $data) {
        $query = "UPDATE products SET name = :name, price = :price, category = :category WHERE id = :id";
        return $this->db->execute($query, [
            ':name' => $data['name'],
            ':price' => $data['price'],
            ':category' => $data['category'],
            ':id' => $id
        ]);
    }
    
    public function delete($id) {
        $query = "DELETE FROM products WHERE id = :id";
        return $this->db->execute($query, [':id' => $id]);
    }
}
?>