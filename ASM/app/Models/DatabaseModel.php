<?php
namespace App\Models;
use PDO;
use PDOException;
class DatabaseModel{
  private $dbhost=DB_HOST;
  private $dbname=DB_NAME;
  private $dbuser=DB_USER;
  private $dbpass=DB_PASS;
 private $conn;
 
  private $stmt;
  function __construct(){
    try {
      $this->conn = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname, $this->dbuser, $this->dbpass);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
  // Function huy ket noi
  // function __destruct(){
  //   unset($this->conn);
  // }
  function get_all($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $this->stmt = $this->conn->prepare($sql); // Chuẩn bị câu lệnh SQL
        $this->stmt->execute($sql_args); // Thực thi câu lệnh SQL với các giá trị tham số
        $rows = $this->stmt->fetchAll(); // Lấy tất cả các hàng kết quả và đặt chúng vào một mảng
        return $rows; // Trả về mảng chứa dữ liệu từ câu lệnh SQL
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
 

  function get_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->execute($sql_args);
        $row = $this->stmt->fetch(PDO::FETCH_ASSOC); // Lấy một hàng kết quả và đặt chúng vào một mảng liên kết
        return $row; // Trả về mảng liên kết chứa dữ liệu từ câu lệnh SQL
            }
            catch(PDOException $e){
                throw $e;
            }
            finally{
                unset($conn);
            }
        }
        public function execute($sql, $params = []) {
          try {
              $stmt = $this->conn->prepare($sql);
              $stmt->execute($params); // Đảm bảo rằng $params là một mảng
              return $stmt;
          } catch (PDOException $e) {
              die("Error: " . $e->getMessage());
          }
      }
      
}


?>