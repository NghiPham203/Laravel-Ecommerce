<?php 
namespace App\Models;
class ContactModel{
private $db;
function __construct(){
    $this->db=new DatabaseModel;
}
function contact_get_all(){
    
        $sql="SELECT * FROM baiviet order by id_Bv desc";
        return $this->db->get_all($sql);

}
}
?>