<?php
// namespace src\controller;
namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\CatalogModel;
class ProductController extends BaseController{
    private $ProductModel;
    private $CatalogModel ;
 function __construct(){
        $this->ProductModel=new ProductModel;
        $this->CatalogModel = new CatalogModel;
    }
    function index(){
        $url = $_SERVER['REQUEST_URI'];
        $segments = explode('/', rtrim($url, '/'));
        $idcatalog_key = array_search('catagory', $segments);
        $key_search = array_search('search', $segments);
        $idcatalog = 0;
        $product_page_key = array_search('product', $segments);
        $kyw = "";
        if ($product_page_key !== false && isset($segments[$product_page_key + 2])) {
            $page = (int) $segments[$product_page_key + 2];
        }
        if ($idcatalog_key !== false && isset($segments[$idcatalog_key + 1])) {
            $idcatalog = $segments[$idcatalog_key + 1];
        }
        if ($key_search !== false && isset($segments[$key_search + 1])) {
            $kyw = $segments[$key_search + 1];
        } 
        $this->titlepage = "Danh sách sản phẩm ";
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 8;
        $dssp = $this->ProductModel->sanpham_get_all_catalog($kyw, $idcatalog, $limit, $page);
        $tongsosp = $this->ProductModel->sanpham_get_all_cta();
        $hienthisotrang = $this->ProductModel->sanpham_page($tongsosp, $limit);
        $this->data["new_product"] = $dssp;
        $this->data["catalog_list"] = $this->CatalogModel->catalog_get_all();
        $this->data["html_page"] = $hienthisotrang;
        $this->renderView("product", $this->titlepage, $this->data);
     
    }
    

function detail(){
    preg_match('/\/product\/detail\/(\d+)/', $_SERVER['REQUEST_URI'], $matches);

     var_dump($_SERVER['REQUEST_URI'], $matches);

    if (isset($matches[1])) {
        $Id_Sp = $matches[1];
        $get_sp = $this->ProductModel->sanpham_get_one($Id_Sp); 

        if(is_array($get_sp)){
            extract($get_sp);
            $this->titlepage = $Name;
            $this->data["product_lienquanRanDom"] = $product_lienquanRanDom;
            $this->data["detail"] = $get_sp;
      
            $this->renderView("productdetail", $this->titlepage, $this->data);
        } else {
            header("location:" . PROURL);
            exit(); 
        }   
    }
}
}
?>