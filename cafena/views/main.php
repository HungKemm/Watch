<div class="main">
    <?php

    ?>
    <div class="maincontent">

        <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
        if (isset($_GET['quanly'])) {
            $bientam = $_GET['quanly'];
        } else {
            $bientam = "";
        }
        if ($bientam == 'gioithieu') {
            include("main/about.php");
        } elseif ($bientam == 'giohang') {
            include("main/giohang/cart.php");
        } elseif ($bientam == 'dangky') {
            header("Location:user/signup.php");
        } elseif ($bientam == 'contact') {
            include("main/contact.php");
        } elseif ($bientam == 'blog') {
            include("main/blogs.php");
        } elseif ($bientam == 'chitietsanpham') {
            include("main/coffees.php");
        } elseif ($bientam == 'sanpham') {
            include("main/sanpham.php");
        } elseif ($bientam == 'sanphammoi') {
            include("main/sanphamnoi.php");
        } elseif ($bientam == 'dangnhap') {
            header("Location:user/login.php");
        } elseif ($bientam == 'thongtin') {
            include("main/info.php");
        } elseif ($bientam == 'dathang') {
            include("main/thanhtoan/dathang.php");
        } elseif ($bientam == 'timkiem') {
            include("actions/timkiem.php");
        } else {
        ?>
            <section class="home" id="home">
            <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="images/1a.jpg" style="width:100%">
                        <!-- <div class="text">Caption Text</div> -->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="images/2a.jpg" style="width:100%">
                        <!-- <div class="text">Caption Two</div> -->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="images/banner.jpg" style="width:100%">
                        <!-- <div class="text">Caption Three</div> -->
                    </div>
                </div>
<br>

                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>
                <div class="content">
                    <h3>cà phê tươi vào buổi sáng</h3>
                    <p>Hãy có niềm vui trong lao động, hãy có sự phân biệt trong mong muốn chối bỏ thời gian..</p>
                    <a href="#" class="btn">bắt đầu ngay</a>
                </div>

            </section>


<script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 3000); // Change image every 2 seconds
                }
</script>           
        <?php

        }
        ?>

    </div>
</div>