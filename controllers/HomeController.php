<?php 

class HomeController
{
    public $modelSanPham;
    public function __construct()
    {
      $this->modelSanPham = new SanPham();
    }
    
public function Home(){
    $listSanPham = $this->modelSanPham->getAllSanPham();
    $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
    require_once './views/home.php';
}

public function danhSachSanPham(){
   $listBooks = $this->modelSanPham->getAllBooks();
//    var_dump($listBooks);die();

    require_once './views/ListBooks.php';
}

public function chiTietSanPham(){
    $id = $_GET['id_san_pham'];

    $sanPham = $this->modelSanPham->getDetailSanPham($id);

    $listAnhSanPham = $this->modelSanPham->getListAnhSanPham($id);

    $listBinhLuan = $this->modelSanPham->getBinhLuanFromSanPham($id);

    if($sanPham){
        require_once './views/detailSanPham.php';
    }else{
        header('Location: ' . BASE_URL . '?act=danh-sach-san-pham');
        exit();
    }
}
}