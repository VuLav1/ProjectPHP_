<?php
    class products{
        function getHangHoaCPUNew(){
            // b1: Kết nối với dữ liệu
            $db=new connect();
            // b2: Viết câu truy vấn
            $select="SELECT a.mahh,a.tenhh,b.dongia,a.soluotxem,a.hinh FROM hanghoa a,cthanghoa b where a.mahh=b.idhanghoa and a.idloai=4 ORDER by a.mahh DESC limit 4;";
            // b3: 
            $result=$db->getList($select);
            return $result;
        }
        function getHangHoaVGANew(){
            $db=new connect();
            // b2: Viết câu truy vấn
            $select="SELECT a.mahh,a.tenhh,b.dongia,a.soluotxem,a.hinh,a.giamgia FROM hanghoa a,cthanghoa b where a.mahh=b.idhanghoa and a.idloai=1 ORDER BY a.mahh DESC limit 4;";
            // b3: 
            $result=$db->getList($select);
            return $result;
        }
        function getHangHoaSale(){
            // b1: Kết nối với dữ liệu
            $db=new connect();
            // b2: Viết câu truy vấn
            $select="SELECT a.mahh,a.tenhh,b.dongia,a.soluotxem,a.hinh,a.giamgia FROM hanghoa a,cthanghoa b where a.mahh=b.idhanghoa and a.giamgia!=0 ORDER by a.mahh DESC limit 4;";
            // b3: 
            $result=$db->getList($select);
            return $result;
        }
        function getHangHoaCPUAll(){
            // b1: Kết nối với dữ liệu
            $db=new connect();
            // b2: Viết câu truy vấn
            $select="SELECT a.mahh,a.tenhh,b.dongia,a.soluotxem,a.hinh FROM hanghoa a,cthanghoa b where a.mahh=b.idhanghoa and a.giamgia=0 and a.idloai=4 ORDER by a.mahh;";
            // b3: 
            $result=$db->getList($select);
            return $result;
        }
        function getHangHoaSaleAll(){
            // b1: Kết nối với dữ liệu
            $db=new connect();
            // b2: Viết câu truy vấn
            $select="SELECT a.mahh,a.tenhh,b.dongia,a.soluotxem,a.hinh,a.giamgia FROM hanghoa a,cthanghoa b where a.mahh=b.idhanghoa and a.giamgia!=0 ORDER by a.mahh;";
            // b3: 
            $result=$db->getList($select);
            return $result;
        }
        function getHangHoaAllPage(){
            $db=new connect();
            $select="SELECT a.mahh,a.tenhh,b.dongia,a.soluotxem,a.hinh FROM hanghoa a,cthanghoa b where a.mahh=b.idhanghoa and a.giamgia=0 and a.idloai=4 ORDER by a.mahh";
            $result=$db->getList($select);
            return $result;
        }
        function getHangHoaVGAAll(){
            $db=new connect();
            // b2: Viết câu truy vấn
            $select="SELECT a.mahh,a.tenhh,b.dongia,a.soluotxem,a.hinh,a.giamgia FROM hanghoa a,cthanghoa b where a.mahh=b.idhanghoa and a.idloai=1 ORDER BY a.mahh;";
            // b3: 
            $result=$db->getList($select);
            return $result;
        }
        function getHangHoaChiTiet($id){
            $db=new connect();
            // b2: Viết câu truy vấn
            $select="SELECT DISTINCT a.mahh,a.tenhh,b.dongia,a.soluotxem,a.hinh,a.giamgia,a.mota,b.soluongton FROM hanghoa a,cthanghoa b where a.mahh=b.idhanghoa and a.mahh=$id";
            // b3: 
            $result=$db->getInstance($select);
            return $result;
        }
        
        function getMaHangHoa($id){
            $db=new connect();
            $select="SELECT DISTINCT a.mahh,a.hinh,a.tenhh,b.dongia,a.mota FROM hanghoa a, cthanghoa b WHERE a.mahh=b.idhanghoa and a.mahh=$id;";
            $result=$db->getList($select);
            return $result;
        }
        function search_products($timkiem){
            $db=new connect();
            $select="SELECT a.mahh,a.tenhh,b.dongia,a.soluotxem,a.hinh,a.giamgia FROM hanghoa a,cthanghoa b where a.mahh=b.idhanghoa and a.giamgia=0 and a.tenhh like '%$timkiem%' order by a.mahh DESC";
            echo $select;
            $result=$db->getList($select);
            return $result;
        }
    }
?>