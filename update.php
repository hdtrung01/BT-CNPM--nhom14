<?php include 'head.php' ?>

<div class="container shadow">

    <h1 class = "bg-info text-center" style="color:White">Thêm sản phẩm mới</h1>
    <form enctype=" multipart/form-data" action="update_process.php" method = "POST">
        
        <label class="form-label">Tên sản phẩm:</label>
        <input type="text" class="form-control" name="tensanpham">

        <label class="form-label">Mã sản phẩm:</label>
        <input type="text" class="form-control" name="masanpham">

        <label class="form-label">loại:</label>
        <input type="text" class="form-control" name="loai">

        <label class="form-label">giá bán:</label>
        <input type="number" class="form-control" name="gia">

        <label class="form-label">Mô tả:</label>
        <textarea type="text" class="form-control" rows="5" name="mota"></textarea>

        <label class="form-lable">Ảnh Minh Hoạ</label>
        <div >
        <input type="file" class="form-control" name="anh" required>
        <div class="invalid-feedback">Vui Lòng chọn 1 tệp</div>
        </div>
        <button  style="margin-top:4%"type="submit" class="btn btn-primary" name='sbmUpdate'>Thêm</button>

    </form>
</div>

<?php include 'foot.php' ?>
