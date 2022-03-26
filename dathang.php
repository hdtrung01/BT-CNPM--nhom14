<?php include 'head.php' ?>
    <div class="lienhe_row">
        <div class="lienhe_btn">
            <div class="lienhe_btn-1">
                <div class="btn-12">
                    <div class="lienhe_group">
                        <h1>Thông Tin Khách Hàng</h1>
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
                            <label>Địa Chỉ Nhận Hàng</label><br>
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
                        <label>Gửi Yêu Cầu Tới Shop</label><br>
                        <textarea class="lienhe_control lienhe_control-1" placeholder="Nội Dung" name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
            </div>
        </div>
        <div class="lienhe_text">
            <h1>Chọn Phương Thức Thanh Toán</h1><br>
                <div class="radio_thanhtoan">
                    <p><input type="radio" name="phuongthuctt" value="ck" class="radio_ck"> Chuyển khoản</p>
                        <div class="radio-check">
                        <input type="radio" name="phuongthuctt" value="ck" class="radio_Momo"> Chuyển khoản
                        <input type="radio" name="phuongthuctt" value="ck" class="radio_Zalo"> Chuyển khoản
                        </div>
                    <p><input type="radio" name="phuongthuctt" value="khinhan"> Khi nhận hàng</p>
                </div>
            <h2>Chọn Phương Thức Giao Hàng</h2>
            <div class="form-group row">
                <p><input type="radio" name="phuongthuctt" value="ghnhanh"> Giao hàng nhanh</p>
                <p><input type="radio" name="phuongthuctt" value="ghtietkiem"> Giao hàng tiết kiệm</p>
                <p><input type="radio" name="phuongthuctt" value="vnpost"> VN Post</p>
                <p><input type="radio" name="phuongthuctt" value="viettel"> Viettel</p>
             </div>
        </div>
    </div>
     <div class="lienhe_btn-3">
            <a href="giohang.php"class="btn-foot_1">Trở Lại</a>
            <a href="dathang.php"class="btn-foot_2">Xác Nhận</a>
     </div>
<?php include 'foot.php' ?>