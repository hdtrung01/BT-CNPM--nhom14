<?php
session_start();
include 'head.php' ?>
    <?php
    $page = $_GET['page'];
    $item = ($page-1)*10;
    include 'head.php';
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
                                    <li class="category-item category-item--active">
                                        <a href="#" class="category-item__link">Áo Quần Mùa Hè</a>
                                    </li>
                                    <li class="category-item">
                                        <a href="#" class="category-item__link">Áo Quần Mùa Đông</a>
                                    </li>
                                    <li class="category-item">
                                        <a href="#" class="category-item__link">Áo Quần</a>
                                    </li>
                                    <li class="category-item">
                                        <a href="#" class="category-item__link">Áo Quần</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="grid__column-10">
                            <div class="home-filter">
                                <span class="home-filter__label">Sắp Sếp Theo</span>
                                <button class="home-filter__btn btn_1">Phổ Biến</button>
                                <button class="home-filter__btn btn_1 btn--primary">Mới Nhất</button>
                                <button class="home-filter__btn btn_1">Size</button>

                                <div class="select-input">
                                    <span class="select-input__label">Giá</span>
                                    <i class="select-input__icon fa-solid fa-angle-down"></i>
                                <!-- list  -->
                                    <ul class="select-input__list">
                                        <li class="select-input__item">
                                            <a href="" class="select-input__link">Giá: Thấp Đến Cao</a>     
                                        </li>
                                        <li class="select-input__item">
                                            <a href="" class="select-input__link">Giá: Cao Đến Thấp</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="home-filter__page">
                                    <span class="home-filter__page-number">
                                        <span class="home-filter__page-current">1</span>/14
                                    </span>
                                        <div class="home-filter__page-control">
                                            <a href="" class="home-filter__page-btn home-filter__page-btn-disabled">
                                                <i class="home-filter__page-icon fa-solid fa-angle-left"></i>
                                            </a>
                                            <a href="" class="home-filter__page-btn">
                                                <i class="home-filter__page-icon fa-solid fa-angle-right"></i>
                                            </a>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="home-product">
                                <div class="grid__row">
                                    <!--Product item-->
                                    <?php
                                        $sql="SELECT * FROM sanpham LIMIT 10 OFFSET $item";
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
                                $result = mysqli_query($conn,"select count(1) FROM sanpham");
                                $row = mysqli_fetch_array($result);
                                $total = 1+$row[0]/10;
                                for ($i=1; $i <= $total ; $i++) { 
                                    if($page == $i){echo '<li class="pagination-item pagination-item--active">
                                        <a href="?page='.$i.'" class="pagination-item__link">'.$i.'</a>
                                        </li>';}
                                    else{
                                    echo '<li class="pagination-item">
                                        <a href="?page='.$i.'" class="pagination-item__link">'.$i.'</a>
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