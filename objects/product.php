<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "products";
 
    // object properties
    public $id;
    public $name;
    public $price;
    public $image;
    public $description;
    public $category_id;
    public $category_name;
    public $status_file = 0;
    public $created;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    // create product
    function create(){
 
        //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    name=:name, price=:price, image=:image, description=:description, category_id=:category_id, created=:created";
 
        $stmt = $this->conn->prepare($query);
 
        // posted values
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->price=htmlspecialchars(strip_tags($this->price));
        $this->description=htmlspecialchars(strip_tags($this->description));
        $this->category_id=htmlspecialchars(strip_tags($this->category_id));
        $this->image=htmlspecialchars(strip_tags($this->image));
 
        // to get time-stamp for 'created' field
        $this->created = date('Y-m-d H:i:s');
 
        // bind values 
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":category_id", $this->category_id);
        $stmt->bindParam(":created", $this->created);
        $stmt->bindParam(":image", $this->image);
 
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
 
    }

    // will upload image file to server
    public function uploadPhoto(){
    
        if($this->image){

            $file_upload_errors = [];
    
            $target_directory = "uploads/";
            $target_file = $target_directory . $this->image;
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);

            // file validation
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
            if(!in_array($file_type, $allowed_types)){
                $file_upload_errors[] = "<div class='alert alert-danger'>Only JPG, JPEG, PNG, GIF files are allowed</div>";
            }
            if($_FILES['image']['size'] > 1024000){
                $file_upload_errors[] = "<div class='alert alert-danger>File must be less than 1 MB in size</div>";
            }
            if(!is_dir($target_directory)){
                mkdir($target_directory);
            }
            if(count($file_upload_errors) == 0){
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            }
            
        }
        
    }

    public function readAll(){

            $query = "SELECT
            products.id,
            products.name,
            products.description,
            products.image,
            products.price,
            categories.name AS cat_name,
            products.created
        FROM
            products
        INNER JOIN categories ON products.category_id = categories.id
        ORDER BY products.created DESC;";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;

    }

    public function readOne(){

        $query = "SELECT
            products.id,
            products.name,
            products.description,
            products.price,
            products.image,
            categories.name AS cat_name,
            products.created
        FROM
            products
        INNER JOIN categories ON products.category_id = categories.id
        WHERE products.id = ?
        ORDER BY products.created DESC;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;

    }

    public function update(){

        $query = "UPDATE
        products
        SET 
        name=:name,
        price=:price,
        description=:description,
        category_id=:category_id
        WHERE
        id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->bindParam(':id', $this->id);
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    public function delete(){
        $query = "DELETE FROM products WHERE id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$this->id);
        
        if($stmt->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function search($search_term){

        $query = "SELECT
            products.id,
            products.name,
            products.description,
            products.price,
            products.image,
            categories.name AS cat_name,
            products.created
        FROM
            products
        INNER JOIN categories ON products.category_id = categories.id
        WHERE products.name LIKE ? 
        ORDER BY products.created DESC;";

        $stmt = $this->conn->prepare($this->name);
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);
        $stmt->execute();
        return $stmt;
    }
}
?>