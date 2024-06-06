<?php 
namespace App\Models;
class CatalogModel{
    private $db;
    function __construct(){
        $this->db=new DatabaseModel;
    }
    function catalog_get_all(){
        $sql="SELECT * FROM danhmuc order by id_Dm desc";
        return $this->db->get_all($sql);
        }
     
        function sanpham_get_all_catalog($idcatalog,$limit,$sottrang){
            $sql="SELECT * FROM sanpham where 1";
            if($idcatalog>0){
                $sql.=" AND id_Dm= ".$idcatalog;
            }
            return $this->db->get_all($sql);
        } 
    
    }

?>