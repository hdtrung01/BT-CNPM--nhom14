<?php
session_start();
include 'head.php' ?>
    <?php
    if(isset($_GET['page'])){
    $page = $_GET['page'];
    }else{$page = 1;}
    $item = ($page-1)*10;
    if(isset($_GET['category'])){
        $category = $_GET['category'];
        }else $category = 'all';
    if(isset($_GET['size'])){
        $size = $_GET['size'];
        }else $size = '';
    if(isset($_GET['gia'])){
        $gia = $_GET['gia'];
        }else $gia = '';
    if(isset($_GET['search'])){
        $search = $_GET['search'];
        }else $search = '';
    $conn = mysqli_connect('localhost','root','','shop');
    if (!$conn){
        die("Ko ket noi duoc");
    }
    ?>
<div class="body_sp">
    <div class="app__container">
                <div class="grid">
                    <div class="grid__row app__content">
                        <div class="grid__column-2">
                            <nav class="category">
                                <h3 class="category__heading"> Danh Mục</h3>
                                <ul class="category-list">
                                    <li class="category-item <?php if($category == 'all'){echo "category-item--active";} ?>">
                                        <a href="?category=all" class="category-item__link">Tất Cả Sản Phẩm</a>
                                    </li>
                                    <li class="category-item <?php if($category == 'Quần áo mùa đông'){echo "category-item--active";} ?>">
                                        <a href="?category=Quần%20áo%20mùa%20đông" class="category-item__link">Áo Quần Mùa Đông</a>
                                    </li>
                                    <li class="category-item <?php if($category == 'Quần áo mùa hè'){echo "category-item--active";} ?>">
                                        <a href="?category=Quần%20áo%20mùa%20hè" class="category-item__link">Áo Quần Mùa Hè</a>
                                    </li>
                                    <li class="category-item <?php if($category == 'Mới'){echo "category-item--active";} ?>">
                                        <a href="?category=Mới" class="category-item__link">Mới</a>
                                    </li>
                                    <li class="category-item <?php if($category == 'Hot Sell'){echo "category-item--active";} ?>">
                                        <a href="?category=Hot%20Sell" class="category-item__link">Hot Sell</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="grid__column-10">
                            <div class="home-filter">
                                <span class="home-filter__label">Sắp Sếp Theo</span>
                                <button class="home-filter__btn btn_1 btn--primary">Phổ Biến</button>
                                <button class="home-filter__btn btn_1">Mới Nhất</button>
                                <button class="home-filter__btn btn_1"><div class="select-input">
                                    <span class="select-input__label">Size <?php echo $size?></span>
                                    <i class="select-input__icon fa-solid fa-angle-down"></i>
                                    <ul class="select-input__list">
                                        <li class="select-input__item">
                                            <a href="?search=<?php echo $search?>&category=<?php echo $category?>" class="select-input__link">Tất Cả</a>     
                                        </li>
                                        <li class="select-input__item">
                                            <a href="?search=<?php echo $search?>&category=<?php echo $category?>&size=L" class="select-input__link">L</a>     
                                        </li>
                                        <li class="select-input__item">
                                            <a href="?search=<?php echo $search?>&category=<?php echo $category?>&size=X" class="select-input__link">X</a>
                                        </li>
                                        <li class="select-input__item">
                                            <a href="?search=<?php echo $search?>&category=<?php echo $category?>&size=XL" class="select-input__link">XL</a>     
                                        </li>
                                        <li class="select-input__item">
                                            <a href="?search=<?php echo $search?>&category=<?php echo $category?>&size=XXL" class="select-input__link">XXL</a>
                                        </li>
                                    </ul>
                                </div></button>

                                <div class="select-input">
                                    <span class="select-input__label">Giá</span>
                                    <i class="select-input__icon fa-solid fa-angle-down"></i>
                                    <ul class="select-input__list">
                                        <li class="select-input__item">
                                            <a href="?search=<?php echo $search?>&category=<?php echo $category?>&gia=ASC" class="select-input__link">Giá: Thấp Đến Cao</a>     
                                        </li>
                                        <li class="select-input__item">
                                            <a href="?search=<?php echo $search?>&category=<?php echo $category?>&gia=DESC" class="select-input__link">Giá: Cao Đến Thấp</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="home-product">
                                <div class="grid__row">
                                    <!--Product item-->
                                    <?php
                                        if ($size =='') {
                                            if($category == 'all'){
                                                $sql="SELECT * FROM sanpham";
                                            }else if ($category == 'Mới') {
                                                $sql="SELECT * FROM sanpham ORDER BY MaSP desc";
                                            }else if ($category == 'Hot Sell') {
                                                $sql="SELECT * FROM sanpham ORDER BY MaSP LIMIT 5";
                                            }else{
                                                $sql="SELECT * FROM sanpham WHERE LoaiSP = '$category'";
                                            }
                                        }else {
                                            if($category == 'all'){
                                                $sql="SELECT * FROM sanpham WHERE size = '$size'";
                                            }else if ($category == 'Mới') {
                                                $sql="SELECT * FROM sanpham WHERE size = '$size' ORDER BY MaSP desc LIMIT 5";
                                            }else if ($category == 'Hot Sell') {
                                                $sql="SELECT * FROM sanpham WHERE size = '$size' ORDER BY MaSP LIMIT 5";
                                            }else{
                                                $sql="SELECT * FROM sanpham WHERE size = '$size' AND LoaiSP = '$category'";
                                            }
                                        }

                                        if ($search != '') {
                                            if ($size ==''){
                                                $sql = "SELECT * FROM `sanpham` WHERE TenSP LIKE '%$search%'";
                                            }else{
                                                $sql = "SELECT * FROM `sanpham` WHERE TenSP LIKE '%$search%' AND size = '$size'";
                                            }
                                        }


                                        if($gia != ''){
                                            $sql = "SELECT * FROM (".$sql.")sp ORDER BY Gia $gia LIMIT 10 OFFSET $item";
                                        }else $sql = "SELECT * FROM (".$sql.")sp LIMIT 10 OFFSET $item";
                                        $result=mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result)>0){
                                        while ($row=mysqli_fetch_assoc($result)){
                                        echo '<div class="grid__column-2-4">                               
                                        <a href="mua.php?id='.$row['MaSP'].'" class="home-product-item">
                                            <div href="mua.php?id='.$row['MaSP'].'" class="home-product-item__img" style="background-image: url(./img/'.$row['anh'].');"></div>
                                            <h4 class="home-product-item__name">'.$row['TenSP'].'</h4>
                                            <div class="home-product-item__price">
                                                <Span class="home-product-item__price-current">'.number_format($row['Gia']).'</Span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__Like home-product-item__Like--liked">
                                                    <i class="home-product-item__Like-icon-no fa-regular fa-heart"></i>
                                                    <i class="home-product-item__Like-icon-yes fa-solid fa-heart"></i>
                                                </span>
                                                <div class="home-product-item__ratting">
                                                    <i class="home-product-item__star-gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star-gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star-gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star-gold fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Thời Trang N14</span>
                                                <span class="home-product-item__origin-name">Việt Nam</span>
                                            </div>
                                            <div class="home-product-item__favourite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span> 
                                            </div>
                                        </a>
                                    </div>';
                                        }
                                    }
                                    ?>
                            </div>
                            <ul class="pagination home-product__pagination">
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fa-solid fa-angle-left"></i>
                                    </a>
                                </li>
                                <?php
                                if($category == 'all'){
                                    $sql="select count(1) FROM sanpham WHERE true";
                                }else{
                                    $sql="select count(1) FROM sanpham WHERE LoaiSP = '$category'";
                                }
                                if($size !='')$sql = $sql." AND size = '$size'";
                                $result=mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($result);
                                $total = 1+$row[0]/10;
                                for ($i=1; $i <= $total ; $i++) { 
                                    if($page == $i){echo '<li class="pagination-item pagination-item--active">
                                        <a href="?category='.$category.'&page='.$i.'&gia='.$gia.'&size='.$size.'&search='.$search.'" class="pagination-item__link">'.$i.'</a>
                                        </li>';}
                                    else{
                                    echo '<li class="pagination-item">
                                        <a href="?category='.$category.'&page='.$i.'&gia='.$gia.'&size='.$size.'&search='.$search.'" class="pagination-item__link">'.$i.'</a>
                                        </li>';
                                    }
                                }
                                ?>
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fa-solid fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php include 'foot.php' ?>