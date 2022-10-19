<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
        Dimension by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
    -->
    <html>
    <head>
        <title>Lorencia - MMORPG Minecraft</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="/assets/css/main.css" />
        <link rel="icon" href="/images/titel.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="/assets/css/design.css" />

        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
            <noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
        </head>
        <body>
         <?php if(isset($_SESSION['username'])) require_once("lib/header.php"); ?>
         <!-- Wrapper -->
         <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <div class="logo">
                    <img src="/images/titel.png" style="width:100%">
                </div>
                <div class="content">
                    <div class="inner">
                        <h1>LORENCIA - MMORPG SERVER</h1>
                        <p>
                            <i>-Beta 0.1-</i><br>
                            <!--[-->CÙNG CHÌM VÀO CUỘC PHIÊU LƯU ĐẦY MẠO HIỂM VÀ THỬ THÁCH,<!--]--><br />
                            <!--[-->TRỞ THÀNH ANH HÙNG THỐNG NHẤT LỤC ĐỊA CỦA 4 VƯƠNG QUỐC!<!--]-->
                        </p>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Cốt truyện</a></li>
                        <li><a href="#log">Cập nhật</a></li>
                        <li><a href="#play">Chơi Ngay</a></li>
                        <?php 
                        if (!isset($_SESSION['username'])) { 
                            echo '<li><a href="#dangnhap">Đăng nhập</a></li>
                            <li><a href="#dangky">Đăng ký</a></li>';
                        }else{
                            echo '
                            <li><a href="#napthe">Nạp thẻ</a></li>
                            <li><a href="#">Hướng dẫn</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </header>

            <!-- Main -->
            <div id="main">

                <!-- Map Info -->
                <article id="MapInfo">
                    <h2 class="major">TRAILER</h2>
                    <span class="image main"><iframe style="width:100%;height:300px;" src="https://www.youtube.com/embed/kSe6ofv9k1Y" frameborder="0" allowfullscreen></iframe></span>

                    <h2 class="major">CỐT TRUYỆN</h2>
                    <h3>Tình hình:</br></h3>
                    <div style="font-size:20px;">  
                    Năm 113 Kỉ I, lục địa Lorencia lúc trước kia là một vùng đất còn cằn cõi, các tộc người còn đang chung sống hòa và phát triển cùng nhau, vì sự ham muốn thông trị dẫn đến giữa xung đột giữa các tộc đã làm lục địa Lorencia bị phân chia thành hai vùng đất: </br>
                - Nhân giới: Gồm loài người sinh sống và cai quản tại đồng bằng Greendale và xa mạc Sandore.</br>
            - Hắc giới: Nằm phía đối diện với nhân giới được ngăn cách bởi dòng chảy dung nham của địa ngục Saburem. Ở đó gồm tộc người phù thuỷ, tộc orc/goblin và những gã chiến binh hắc ám thèm khác sự chiến tranh dưới thống trị của thần hắc ám.</br></br>
        Lúc bấy giờ, bên phía hắc giới đang chuẩn bị lực lượng để bắt đầu cuộc xâm chiếm nhân giới. Đứng trước tình hình đó, những người đứng đầu ngôi làng đang tích cực đoàn kết với nhau và chiêu mộ những chiến binh xuất chúng đến từ bên ngoài lục địa Lorencia để có thể bảo về Greendale và Sandore đồng thời với mục đích tiêu diệt chúa tể hắc ám.</br></br>
    </div>
    <h3>Chương I: Ngày đầu ở Carynville</br></h3>
    <div style="font-size:20px;">  
    Ầm ầm, ầm ầm, tôi đang ở trên con tàu bon chen giữa dòng biển lạnh dưới cơn mưa bão, màn đêm đã buông xuống, đôi mắt tôi cũng bắt đầu nhắm lại và ngủ.</br>
- "Bộp bộp" "Dậy nào Scarlet, tới nơi rồi đấy" - Eldrie vỗ vào vai tôi và nói.</br>
Trời sáng rồi ư? Tôi đã có một giấc ngủ khá ngon vào đêm qua nhưng giờ không phải là lúc ngủ nữa.</br>
- "Tạch.....kéttttttt" - Bỗng nhiên có tiếng cửa mở... Một người đàn ông bước vào, không ai khác chính là thuyền trưởng của con tàu chúng tôi đi nhờ.</br>
- "Con thuyền đã cập bến Carynville, chúc cô cậu có một ngày tốt đẹp" - Đúng vậy, nới chúng tôi đặt chân ở đây chính là Carynville - một thị trấn yên bình ở tận cùng phía nam lục địa Lorencia. Theo lời chiêu mộ của trưởng làng, chúng tôi sẽ có những công tác kiểm tra để trở thành chiến binh chống lại thế lực hắc ám đã chuẩn bị xâm chiếm nơi đây.</br>

</div>
</br>
<p>
    <a href="#Theteam" class="button">THÀNH VIÊN DỰ ÁN</a>
</p>
<span class="image main"><img src="images/1.jpg" alt="" /></span>
<span class="image main"><img src="images/2.jpg" alt="" /></span>
<span class="image main"><img src="images/3.jpg" alt="" /></span>


<h3 class="major">Liên hệ:</h3>
<ul class="actions">
    <li>
        <a target="_blank" href="https://discordapp.com/invite/hA3trW9" class="button">Discord Server</a>
    </li>
</ul>
<ul class="actions">
    <li>
        <a target="_blank" href="https://www.facebook.com/groups/2314781248558761" class="button">Group</a>
    </li>
</ul>
<ul class="actions">
    <li>
        <a target="_blank" href="https://www.facebook.com/Lorenciammorpg/" class="button">Fanpage</a>
    </li>
</ul>

<span class="image main"><img src="images/4.jpg" alt="" /></span>

<h3 class="major">Đóng góp ý kiến:</h3>
<p>
    Everything on earth costs money except of our adventure map ;) We wanted to create a 100% free game experience for you! But that's not that free for us: We need to pay for this website and domain and other things :(<br><br>
    If you want to support us, you can donate some money. We promise, that we will use every money for this project and not for some luxury in the private life!<br><br>
    <b>Every donator will be shown below and on the planeminecraft project page (optional with link to websites or advertising) (only if the donator wants that!).</b>
</p>
<ul class="actions">
    <li>
        <a href="#Donate" class="button">Donate</a>
    </li>
</ul>
<span class="image main"><img src="images/5.jpg" alt="" /></span>
</article>


<!-- Cập nhật sv -->
<article id="log">
    <h2 class="major">NHẬT KÝ CẬP NHẬT</h2>

    <h3 class="major">Update - 7/4/2020</h3>
    <ul>
        <li>Vẫn đang phát triển</li>
    </ul>

    <h3 class="major">Update - 7/4/2020</h3>
    <ul>                          
        <li>Vẫn đang phát triển</li>
    </ul>
</article>

<!-- Download -->
<article id="play">
    <h2 class="major">THAM GIA MÁY CHỦ</h2>
    <h3 class="major"><span style="color:#ff3434;">Bước 1:</span> Tải game</h3>
    <ul>
        <li>
            <p>
                <a href="http://download.oracle.com/otn-pub/java/jdk/8u181-b13/96a7b8442fe848ef90c96a2fad6ed6d1/jre-8u181-windows-x64.exe" class="button icon fa-download" target="_blank">TẢI JAVA 8</a>
            </p>
        </li>
        <li>
            <p>
                <a href="#" class="button icon fa-download" target="_blank">TẢI MINECRAFT LAUNCHER</a>
            </p>
        </li>
        <li>
            <p>
                <a href="http://optifine.net" class="button icon fa-download" target="_blank">TẢI OPTIFINE</a>
            </p>
        </li>
        <li>
            <p>
                Mở launcher và chọn phiên bản tùy chọn (từ 1.12.x)! Nhấn tải và đợi 5-10 phút.
            </p>
        </li>
        <li>
            <p style="color:#ff3434;">
                Khuyến khích tải OPTIFINE để có thể trải nghiệm máy chủ ở mức tốt nhất !<br>
            </p>
        </li>
    </ul>
    <a href="#Download2" class="button special">OK, TIẾP</a>
    <span class="image main"><img src="images/8.png" alt="" /></span>
</article>


<!-- Download2 -->
<article id="Download2">
    <h2 class="major">THAM GIA MÁY CHỦ</h2>
    <h3 class="major"><span style="color:#ff3434;">Bước 2:</span> Nhập IP máy chủ</h3>
    <ul>

        <li>
            <p>
                Bật cho phép server tải gói tài nguyên
            </p>
        </li>
        <li>
            <p>
                Nhập IP máy chủ: <br>
                <code>
                    Lorencia-mc.net
                </code><br>

            </p>
        </li>
    </ul>
    <a href="#dangky" class="button special">OK, done</a>
    <span class="image main"><img src="/images/3.jpg" alt="" /></span>
</article>

<!-- dangky -->
<?php
if(!isset($_SESSION['username'])){
    echo'
    <article id="dangky">
    <h2 class="major">Tài khoản</h2>
    <h3 class="major"><span style="color:#ff3434;">Bước cuối cùng:</span> Đăng ký tài khoản!</h3>
    <form action="lib/dangky.php" method="post">
    <table>
    <tr>
    <td colspan="2" align="center">ĐĂNG KÝ</td>
    </tr>   
    <tr>
    <td>Tên tài khoản:</td>
    <td><input type="text" id="username" name="username" placeholder="Đây sẽ là tên đăng nhập trong máy chủ." autocomplete="off"></td>
    </tr>
    <tr>
    <td>Mật khẩu :</td>
    <td><input type="password" id="pass" name="pass" placeholder="Dài trên 6 ký tự."></td>
    </tr>
    <tr>
    <td>Nhập lại mật khẩu :</td>
    <td><input type="password" id="pass1" name="pass1" placeholder="Dài trên 6 ký tự."></td>
    </tr>
    <tr>
    <td>Email :</td>
    <td><input type="text" id="email" name="email" placeholder="diachiemail@gmail.com" autocomplete="off"></td>
    <tr>
    <td>Nhập mã xác nhận<img src="lib/captcha.php" width="120" height="35" border="1" alt="CAPTCHA" align="right"></td>
    <td><input type="text" id="maxacnhan" name="maxacnhan" placeholder="Nhập số trong hình." autocomplete="off"></td>
    </tr>
    <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Đăng Ký"></td>
    </tr>

    </table>
    </form>
    </article>
    <article id="dangnhap">
    <h2 class="major">Tài khoản</h2>
    <h3 class="major"><span style="color:#ff3434;">Điền thông tin để</span> đăng nhập!</h3>
    <form action="lib/progress.php" method="post">
    <table>
    <tr>
    <td colspan="2" align="center">ĐĂNG NHẬP</td>
    </tr>	
    <tr>
    <td>Tên tài khoản:</td>
    <td><input type="text" id="username" name="username"></td>
    </tr>
    <tr>
    <td>Mật khẩu: </td>
    <td><input type="password" id="password" name="password"></td>
    </tr>
    <tr>
    <td align="center"><a href="#quenmatkhau" class="button">QUÊN MẬT KHẨU</a></td>
    <td align="center"><input type="submit" name="btn_submit" value="Đăng nhập"></td>
    </tr>

    </table>

    </form>
    </article>
    <article id="quenmatkhau">
    <h2 class="major">KHÔI PHỤC MẬT KHẨU</h2>
    <form action="lib/recoverypassword.php" method="post">
    <table>
    <tr>
    <td colspan="2" align="center">QUÊN MẬT KHẨU</td>
    </tr>	
    <tr>
    <td>Email tài khoản:</td>
    <td><input type="text" id="email" name="email"></td>
    </tr>
    <tr>
    <td>Nhập mã xác nhận<img src="lib/captcha.php" width="120" height="35" border="1" alt="CAPTCHA" align="right"></td>
    <td><input type="text" id="maxacnhan" name="maxacnhan" placeholder="Nhập số trong hình." autocomplete="off"></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" name="btn_submit" value="XÁC NHẬN"></td>
    </tr>
    </table>
    </form>
    </article>';
}
?>
<!-- Thông tin -->
<article id="thongtin">
    <h2 class="major">Tài khoản</h2>
    <h3 class="major"><span style="color:#ff3434;">Thông tin tài khoản</span> người chơi!</h3>
    <?php
    if(isset($_SESSION['username'])){							
     $status = '<td align="left" style="color: red;">Chưa kích hoạt</td>';
     if($data["active"] == "true"){
        $status = '<td align="left" style="color: green;">Đã kích hoạt</td>';
    }

    $loc = explode("||LOC||", $data["location"]);
    $loc1 = (count($loc)<3)? "ĐANG CẬP NHẬT ..." : $loc[0].', '.$loc[1].', '.$loc[2];
    if($data["ownedEffects"] == "") $data["ownedEffects"] = "KHÔNG CÓ";
    echo'
    <form action="lib/progress.php" method="post">
    <table>
    <tr>
    <td colspan="2" align="center" style="color: yellow;">THÔNG TIN CHI TÀI KHOẢN</td>
    </tr>	
    <tr>
    <td>TÊN: </td>
    <td align="left">'.$data["name"].'</td>
    </tr>
    <tr>
    <td>TÌNH TRẠNG:</td>
    '.$status.'
    </tr>
    <tr>
    <td>MẬT KHẨU:</td>
    <td align="left"> ************</td>
    </tr>
    <tr>
    <td>ĐỊA CHỈ EMAIL: </td>
    <td align="left"> '.$data["email"].'</td>
    </tr>
    </table>
    <table>
    <tr>
    <td colspan="2" align="center" style="color: aqua;">THÔNG TIN NHÂN VẬT</td>
    </tr>	
    <tr>
    <td>TỘC: </td>
    <td align="left"> '.$data["classType"].'</td>
    </tr>
    <tr>
    <td>CẤP ĐỘ/KINH NGHIỆM: </td>
    <td align="left"> Lv.'.$data["level"].' ['.$data["exp"].' EXP]</td>
    </tr>
    <tr>
    <td>RANK: </td>
    <td align="left"> '.$data["rank"].'</td>
    </tr>
    <tr>
    <td>MÁU/NĂNG LƯỢNG: </td>
    <td align="left"> '.$data["hp"].'/'.$data["mana"].'</td>
    </tr>
    <tr>
    <td>GIẾT QUÁI: </td>
    <td align="left"> '.$data["mobKills"].'</td>
    </tr>
    <tr>
    <td>GIẾT NGƯỜI: </td>
    <td align="left"> '.$data["playerKills"].'</td>
    </tr>
    <tr>
    <td>HIỆU ỨNG ĐÃ SỞ HỮU: </td>
    <td align="left"> '.$data["ownedEffects"].'</td>
    </tr>
    <tr>
    <td>VỊ TRÍ: </td>
    <td align="left"> '.$loc1.'</td>
    </tr>
    </table>
    <p>
    <a href="#giaodich" class="button" >LỊCH SỬ GIAO DỊCH</a>
    <a href="#" class="button" style="float: right;">ĐỔI MẬT KHẨU</a><br></br>
    <a href="#" class="button" style="float: right;">ĐỔI EMAIL</a>
    </p>
    </form>';
}else{
 echo '<li>Vui lòng đăng nhập</li>';
};
?>
</article>

<!-- The team -->
<article id="Theteam">
    <h2 class="major">THÀNH VIÊN DỰ ÁN</h2>
    <span class="image main"><img src="images/6.jpg" alt="" /></span>

    <h3>Main Map building & setup</h3>
    <ol>
        <li>Asghx</li>
        <li>ChinnSu</li>
        <li>RinHaxor(retired)</li>
    </ol>

    <h3>Server owner</h3>
    <ol>
        <li>ChinnSu</li>
        <li>TriHuynh(retired)</li>
    </ol>

    <h3>Developer</h3>
    <ol>
        <li>ChinnSu</li>
    </ol>

    <h3>Ressource pack</h3>
    <ol>
        <li>Jinseiga(retired)</li>
        <li>ChinnSu</li>
    </ol>

    <h3>Other staffs</h3>
    <ol>
        <li>Death</li>
        <li>TPNRPaker</li>
        <li>Miao(retired)</li>
        <li>Coco(retired)</li>
    </ol>

    <h3 class="major">MUỐN TRỞ THÀNH STAFF?</h3>
    <a href="https://discordapp.com/invite/hA3trW9" class="button">Discord Server</a>

    <!-- <span class="image main"><img src="images/27.png" alt="" /></span> -->
</article>

<?php if(isset($_SESSION['username'])){
    if($data["active"] != "true"){
        echo '
        <article id="active">
        <h2 class="major">KÍCH HOẠT TÀI KHOẢN</h2>
        <form action="lib/payment1.php" method="post">
        <table> 
        <tr>
        <td>Nhập lại mật khẩu :</td>
        <td><input type="password" id="password" name="password" placeholder="Dài trên 6 ký tự."></td>
        </tr>

        <tr>
        <td>GIÁ:</td>
        <td>0 PEARLS</td>
        </tr>
        <tr>
        <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thanh toán"></td>
        </tr>
        </table>
        </form>
        </article>
        ';
    }else{
        echo'
        <article id="active">
        <h3 class="major">BẠN ĐÃ KÍCH HOẠT TÀI KHOẢN RỒI</h3>
        </article>
        ';
    }
}else{
    echo'
    <article id="active">
    <h3 class="major">VUI LÒNG ĐĂNG NHẬP</h3>
    </article>
    ';
}
?>

<!-- Nạp thẻ -->
<article id="napthe">
    <h2 class="major">NẠP THẺ</h2>
    <form method="POST" action="napthe/ajax/card.php" id="myform">
     <table class="table table-condensed table-bordered">
       <tbody>
           <tr>
            <td><label>Ingame:</label></td>
            <td><input type="text" class="form-control" name="username" value="<?php echo $_SESSION['username']; ?>" required readonly /></td>
        </tr>
        <tr>
            <td><label>Loại thẻ:</label></td>
            <td><select class="form-control" name="card_type" required>
                <option value="">Chọn loại thẻ</option>
                <?php 
                $obj = json_decode(file_get_contents("https://thesieutoc.net/card_info.php"), true);
                $length = count($obj);
                for ($i = 0; $i < $length; $i++) {
                    if ($obj[$i]['status'] == 1){
                        echo '<option value="'.$obj[$i]['name'].'">'.$obj[$i]['name'].' ('.$obj[$i]['chietkhau'].'%)</option> ';
                    }
                }
                ?>
            </select></td>
        </tr>
        <tr>
            <td><label>Mệnh giá:</label></td>
            <td><select class="form-control" name="card_amount" required>
                <option value="">Chọn mệnh giá</option>
                <option value="10000">10.000</option>
                <option value="20000">20.000</option>
                <option value="30000">30.000</option>
                <option value="50000">50.000</option>
                <option value="100000">100.000</option>
                <option value="200000">200.000</option>
                <option value="300000">300.000</option>
                <option value="500000">500.000</option>
                <option value="1000000">1.000.000</option>
            </select></td>
        </tr>
        <tr>
            <td><label>Số seri:</label></td>
            <td><input type="text" class="form-control" name="serial" required /></td>
        </tr>
        <tr>
            <td><label>Mã thẻ:</label></td>
            <td><input type="text" class="form-control" name="pin" required /></td>
        </tr>
           <td><center><p><b>Nhìn con cặt, đã làm xong đéo đâu mà vào xem</b></p>
        </center></td>
    </tr>
</tbody>
</table>    
</form>
<div id="status"></div>
</article>
</div>
<!-- Footer -->
<footer id="footer">
    <p class="copyright">&copy; Website by <a href="#">Rin Lê (RinHaxor)</a></p>
    <p class="copyright"> Sword icon: <a href="#">RinHaxor</a></p>
</footer>

</div>

<!-- BG -->
<div id="bg">
    <img src="/images/bg.jpg" width="100%">
    </div>

    <!-- Scripts -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/skel.min.js"></script>
    <script src="/assets/js/util.js"></script>
    <script src="/assets/js/main.js"></script>

</body>
</html>
