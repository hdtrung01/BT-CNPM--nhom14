<?php include 'head.php' ?>
    <div class="lienhe_row">
        <div class="lienhe_btn">
            <div class="lienhe_btn-1">
                <div class="btn-12">
                    <div class="lienhe_group">
                        <input type="text" class="lienhe_form" placeholder="Tiêu Đề Liên Hệ" name="title" id="title" style ="margin-top: 28px;">
                    </div>
                </div>
                <div class="lienhe-btn_1">
                    <div class="btn-6">
                        <div class="lienhe_group">
                            <label>Họ Tên</label><br>
                            <input type="text" class="lienhe_form" placeholder="Họ Tên" name="name" id="name">
                        </div>
                    </div>
                    <div class="btn-6">
                        <div class="lienhe_group">
                            <label>Địa Chỉ</label><br>
                            <input type="text" class="lienhe_form" placeholder="Địa Chỉ" name="address" id="address">
                        </div>
                    </div>
                </div>
                <div class="lienhe-btn_1">
                    <div class="btn-6">
                        <div class="lienhe_group">
                            <label>Điện Thoại</label><br>
                            <input type="text" class="lienhe_form" placeholder="Điện Thoại" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="btn-6">
                        <div class="lienhe_group">
                            <label>Email</label><br>
                            <input type="text" class="lienhe_form" placeholder="Email" name="email" id="email">
                        </div>
                    </div>
                </div>   
                <div class="lienhe-btn_1">
                </div>
            </div>
            <div class="lienhe_btn-2">
                    <div class="lienhe_group">
                        <label>Nội Dung</label><br>
                        <textarea class="lienhe_control" placeholder="Nội Dung" name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
            </div>
            <div class="lienhe_btn-3">
                <button class="btn_lienhe" type="gui">Gửi</button>
                <button class="btn_lienhe" type="xoa">Xóa</button>

            </div>
        </div>
        <div class="lienhe_text">
            <br>
                <span class="span_text-1">
                    Thời Trang N14 là nơi mua sắm các sản phẩm Quần áo - Váy - Đầm uy tín và chất lượng, kiểu dáng đẹp, hợp thời trang đồng hành cùng cung cách phục vụ chuyên nghiệp nhất.
                </span>
                <br>
                <br>
                <span class="span_text-1">
                    Nếu bạn là một tín đồ thời trang và luôn muốn “săn lùng” những mặt hàng thời trang mới nhất, hợp thời trang nhất, đẹp nhất, giá cả phù hợp nhất, đồng thời trải nghiệm dịch vụ tốt nhất, hãy để Thời Trang N14 đồng hành cùng bạn!
                </span>
                <br>
                <br>
                <span class="span_text-1">
                    ------------------------------------------
                </span>
                <br>
                <span class="span_text-2">
                  <i class="fa-solid fa-location-dot"></i><span class="span_text--1">175-Tây Sơn - Quận Đống Đa - Thành Phố Hà Nội</span>
                </span>
                <br>
                <br>
                <span class="span_text-2">
                    <i class="fa-solid fa-phone"></i><span class="span_text--1">(84)123456789</span>
                </span>
                <br>
                <br>
                <span class="span_text-3">
                    <i class="fa-solid fa-envelope"></i><span class="span_text--1">TTN14@gmail.com</span> <br><br>
                    <i class="fa-solid fa-house"></i><span class="span_text--1">Thời Trang N14</span> <br><br>
                    <i class="fa-brands fa-facebook"></i><span class="span_text--1">facebook.com</span> <br><br>
                </span>
        </div>
    </div>
    <div class="map">
            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=175%20T%C3%A2y%20S%C6%A1n,%20%C4%90%E1%BB%91ng%20%C4%90a,%20H%C3%A0%20N%E1%BB%99i,%20Vi%E1%BB%87t%20Nam+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                <a href="https://www.gps.ie/marine-gps/">shipping gps</a>
            </iframe>
        </div>
<?php
                        if(isset($_POST['email'])) {
                        $email_to = "nhokcunpvp@gmail.com";
                        
                        
                        function died($error) {
                        echo "Lỗi Biểu Mẫu";
                        echo "Bạn Gặp Lỗi.<br /><br />";
                        echo $error."<br /><br />";
                        echo "Vui Lòng Thử Lại.<br /><br />";
                        die();
                        }
                        
                        // validation expected data exists
                        if(!isset($_POST['name']) ||
                        !isset($_POST['address']) ||
                        !isset($_POST['phone']) ||
                        !isset($_POST['email']))
                        !isset($_POST['content']) ||
                        $email_subject = $_POST['title'];
                        $name = $_POST['name'];
                        $address = $_POST['address'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $content = $_POST['content'];
                        
                        $error_message = "";
                        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                        if(!preg_match($email_exp,$email)) {
                        $error_message .= ' Địa chỉ email không hợp lệ.<br />';
                        }
                        $string_exp = "/^[A-Za-z .'-]+$/";
                        if(!preg_match($string_exp,$email_subject)) {
                        $error_message .= 'tiêu Đề Không Hợp Lệ.<br />';
                        }
                        if(!preg_match($string_exp,$name)) {
                        $error_message .= 'Tên Bạn Nhập Không Hợp Lệ.<br />';
                        }
                        if(!preg_match($string_exp,$address)) {
                            $error_message .= 'Địa Chỉ Bạn Nhập Không Hợp Lệ.<br />';
                            }
                        if(strlen($content) < 2) {
                        $error_message .= 'Nội Dung không hợp lệ.<br />';
                        }
                        if(strlen($error_message) > 0) {
                        died($error_message);
                        }
                        $email_message = "Chi Tiết.\n\n";
                        
                        function clean_string($string) {
                        $bad = array("content-type","bcc:","to:","cc:","href");
                        return str_replace($bad,"",$string);
                        }
                        
                        $email_message .= "title: ".clean_string($title)."\n";
                        $email_message .= "Name: ".clean_string($name)."\n";
                        $email_message .= "Address: ".clean_string($address)."\n";
                        $email_message .= "Telephone: ".clean_string($phone)."\n";
                        $email_message .= "Email: ".clean_string($email)."\n";
                        $email_message .= "Comments: ".clean_string($content)."\n";
                        
                        $headers = 'From: '.$email_from."\r\n".
                        'Reply-To: '.$email_from."\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                        @mail($email_to, $email_subject, $email_message, $headers);
    ?> -->
  
        <?php
                        }
     ?>
<?php include 'foot.php' ?>