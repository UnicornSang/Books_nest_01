<?php

class AdminTaiKhoan{
 public $conn;

    public function __construct()
    {
        $this->conn = connectDB();

    }
    public function getAllTaiKhoan($chuc_vu_id){
        try{
            $sql = 'SELECT * FROM tai_khoan WHERE chuc_vu_id = :chuc_vu_id ';
            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':chuc_vu_id'=>$chuc_vu_id]);

            return $stmt->fetchAll();
        }catch(Exception $e){
        echo "lỗi" . $e->getMessage();

    }
    }
public function insertTaiKhoan($ho_ten, $email, $password, $chuc_vu_id){
        try {
            $sql = 'INSERT INTO tai_khoan (ho_ten, email, mat_khau,chuc_vu_id)   
            VALUES (:ho_ten, :email, :password, :chuc_vu_id)';
            
            $stmt = $this->conn->prepare($sql);

            $stmt->execute([

                ':ho_ten'=>$ho_ten,
                ':email'=>$email,
                ':password'=>$password,
                ':chuc_vu_id'=>$chuc_vu_id,

            ]);

            return true;
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function getDetaiTaikhoan($id){
        try{
            $sql = 'SELECT * FROM tai_khoan WHERE id = :id ';
            
            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':id' => $id,
               
            ]);

            return $stmt->fetch();
        }catch(Exception $e){
        echo "lỗi" . $e->getMessage();

    }
    }

    public function updateTaiKhoan($id, $ho_ten, $email, $so_dien_thoai, $trang_thai){
        try{
            $sql = 'UPDATE tai_khoan SET 
            ho_ten = :ho_ten,
            email =:email,
            so_dien_thoai = :so_dien_thoai,
            trang_thai = :trang_thai       
            
            WHERE id = :id';
            
            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':ho_ten' => $ho_ten,
                ':email' => $email,    
                ':so_dien_thoai' => $so_dien_thoai,
                ':trang_thai' => $trang_thai,
                ':id' => $id,
                
            ]);

            return true;
        }catch(Exception $e){
        echo "lỗi" . $e->getMessage();

    }
    }

    public function resetPassword($id, $mat_khau){
        try{
            $sql = 'UPDATE tai_khoan 
            
            SET

            mat_khau = :mat_khau
           
            WHERE id = :id';
            
            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':mat_khau' => $mat_khau,
               
                ':id' => $id,
                
            ]);

            return true;
        }catch(Exception $e){
        echo "lỗi" . $e->getMessage();

    }
    }


public function updateKhachHang($id, $ho_ten, $email, $so_dien_thoai,$ngay_sinh,$gioi_tinh,$dia_chi, $trang_thai){
        try{
            $sql = 'UPDATE tai_khoan SET 
            ho_ten = :ho_ten,
            email =:email,
            so_dien_thoai = :so_dien_thoai,
            ngay_sinh = :ngay_sinh,
            gioi_tinh = :gioi_tinh,
            dia_chi = :dia_chi,
            trang_thai = :trang_thai       
            
            WHERE id = :id';
            
            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':ho_ten' => $ho_ten,
                ':email' => $email,    
                ':so_dien_thoai' => $so_dien_thoai,
                ':ngay_sinh' => $ngay_sinh,
                ':gioi_tinh' => $gioi_tinh,
                ':dia_chi' => $dia_chi,
                ':trang_thai' => $trang_thai,
                ':id' => $id,
                
            ]);

            return true;
        }catch(Exception $e){
        echo "lỗi" . $e->getMessage();

    }
    }






    
}







?>