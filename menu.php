<html>
    <?php 
        $BaoCAn=[ 'Tintuc1'=> '<a href="https://congan.com.vn/vu-an/chu-dam-chet-chau-ruot-sau-chau-nhau_146086.html" title="freetuts">Chú đâm chết cháu ruột sau chầu nhậu</a>',
                  'Tintuc2'=> '<a href="https://congan.com.vn/vu-an/bat-giu-doi-tuong-sat-hai-1-phu-nu-roi-giau-xac-trong-o-to_146055.html" title="freetuts">Bắt đối tượng sát hại "người tình", cướp tài sản rồi giấu xác trong ôtô</a>',
                  'Tintuc3'=> '<a href="https://congan.com.vn/vu-an/3-doi-tuong-co-8-tien-an-thue-oto-di-trom-cap_146050.html" title="freetuts">3 đối tượng có 8 tiền án, vẫn thuê ô tô đi trộm cắp tài sản</a>',
                  'Tintuc4'=> '<a href="https://congan.com.vn/vu-an/mot-csgt-phu-lam--vi-vay-bat-ke-trom-xe-may_146040.html" title="freetuts">CSGT TPHCM tuần tra, truy nóng kẻ trộm xe máy từ trình báo của người dân</a>',
                  'Tintuc5'=> '<a href="https://congan.com.vn/vu-an/bang-nhom-to-chuc-danh-bac-quy-mo-lon-lanh-an_146064.html" title="freetuts">Băng nhóm tổ chức đánh bạc quy mô lớn lãnh án</a>'
                ]; 
        $Bao24h=[ 'Tintuc1'=> '<a href="https://www.w3schools.com/signup/index.html" title="freetuts">“Ông xã” Mai Phương Thúy chụp hình thân thiết cùng Trấn Thành là ai?</a>',
                  'Tintuc2'=> '<a href="https://www.w3schools.com/signup/index.html" title="freetuts">Phim về bạo lực học đường của Song Hye Kyo "hot" trở lại</a>',
                  'Tintuc3'=> '<a href="https://www.w3schools.com/signup/index.html" title="freetuts">Lo ngại khi phim Việt phải dán cảnh báo bạo lực, tình dục, khỏa thân</a>',
                  'Tintuc4'=> '<a href="https://www.w3schools.com/signup/index.html" title="freetuts">Cởi bỏ áo yếm, người đẹp Hải Dương gây ngỡ ngàng</a>',
                  'Tintuc5'=> '<a href="https://www.w3schools.com/signup/index.html" title="freetuts">Đi tìm mỹ nữ Trung Quốc "ngàn năm có một" để đóng phim khắt khe như thế nào?</a>',
                  'Tintuc6'=> '<a href="https://www.w3schools.com/signup/index.html" title="freetuts">NSƯT Trịnh Kim Chi đảm nhận chức vụ mới</a>',
                  'Tintuc7'=> '<a href="https://www.w3schools.com/signup/index.html" title="freetuts">“Đồi Hành Xác”: Dự án phim kinh dị Á Đông tham vọng ra thế giới</a>',
                  'Tintuc8'=> '<a href="https://www.w3schools.com/signup/index.html" title="freetuts">Bức ảnh năm 19 tuổi của ‘Đông Phương Bất Bại’ Lâm Thanh Hà gây sốt</a>',
                  'Tintuc9'=> '<a href="https://www.w3schools.com/signup/index.html" title="freetuts">Bộ Văn hóa yêu cầu hiển thị mức cảnh báo đối với phim chiếu mạng, truyền hình</a>',
                  'Tintuc10'=> '<a href="https://www.w3schools.com/signup/index.html" title="freetuts">Bộ phim Trung Quốc "hot" nhất 3 năm qua đã "qua mặt" khán giả như thế này</a>'
                ]; 
    ?>

    <div class="menu">
        <img src="pics\pic5.ico">
        <a href="https://www.w3schools.com/" title="W3School">Trang chủ</a>
        <a href="https://www.w3schools.com/signup/index.html" title="freetuts">Đăng Ký</a>
        <a href="https://www.w3schools.com/spaces/index.html" title="freetuts">Liên hệ</a>
        
        

        <h2>Báo Công An</h2>
            <p>                    
                <?php foreach ($BaoCAn as $key => $value) :?> 
                    <table>
                        <tr>
                            <td><?php echo $value ?></td>           
                        </tr>
                    </table>
                <?php endforeach;?>
            </p>

    
        <h2>Báo 24h</h2>
            <p>                    
                <?php foreach ($Bao24h as $key => $value) :?> 
                    <table>
                        <tr>
                            <td><?php echo $value ?></td>           
                        </tr>
                    </table>
                <?php endforeach;?>
            </p>  
                     
    </div>
</html>

