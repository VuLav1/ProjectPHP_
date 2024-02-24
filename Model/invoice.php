<?php
class invoice
{
    function insertHoaDon($makh)
    {
        $db = new connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "insert into hoadon(mahd,makh,ngaydat,tongtien) values(Null,$makh,'$ngay',0)";
        $db->exec($query);
        $select = "select a.mahd from hoadon a order by a.mahd desc limit 1";
        $mahd = $db->getInstance($select);
        return $mahd[0];
    }
    function insertCTHoaDon($mahd, $mahh, $soluong, $thanhtien)
    {
        $db = new connect();
        $query = "insert into cthoadon(sohd,mahh,soluong,thanhtien,tinhtrang) values ($mahd,$mahh,$soluong,$thanhtien,0)";
        $db->exec($query);
    }
    function updateTotal($mahd, $makh, $tongtien)
    {
        $db = new connect();
        $query = "update hoadon set tongtien=$tongtien where mahd=$mahd and makh=$makh";
        $db->exec($query);
    }
    function selectThongTinKH($mahd){
        $db = new connect();
        $select = "select a.mahd, b.tenkh, b.diachi, b.sdt, a.ngaydat from hoadon a, khachhang b where a.makh=b.makh and a.mahd=$mahd";
        $result = $db->getInstance($select);
        return $result;
    }
    function selectThongTinHoaDon($mahd){
        $db = new connect();
        $select = "select a.tenhh, b.dongia, c.soluong from hanghoa a,cthanghoa b, cthoadon c WHERE a.mahh=b.idhanghoa and a.mahh=c.mahh and a.mahh=c.mahh and c.sohd=$mahd";
        $result = $db->getList($select);
        return $result;
    }
    function updateSoLuongTon($soluong, $mahh){
        $db = new connect();
        $query = "update cthanghoa set soluongton=soluongton-$soluong where idhanghoa=$mahh";
        $db->exec($query);
    }
}
