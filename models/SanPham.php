<?php 

class SanPham
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    //viết hàm lấy toàn bộ danh sách sản phẩm

    public function getAllBooks(){
        try{
            $sql = 'SELECT * FROM san_pham';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(Exception $e){

            echo "lỗi" . $e->getMessage();
        
    }
    }

    public function getAllSanPham(){
        try{
            $sql = 'SELECT san_pham.*, danh_muc.ten_danh_muc
            FROM san_pham
            INNER JOIN danh_muc ON san_pham.danh_muc_id = danh_muc.id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(Exception $e){
            echo "lỗi" . $e->getMessage();
        }
    }
}


?>