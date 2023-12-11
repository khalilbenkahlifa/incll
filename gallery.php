<?php include('include/head.php')?>

<body>


    <!-- ==========Preloader Overlay Starts Here========== -->
    <div class="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <div class="scrollToTop"><i class="fas fa-angle-up"></i></div>
    <div class="overlay"></div>
    <div class="overlayTwo"></div>
    <!-- ==========Preloader Overlay Ends Here========== -->

    <!-- ==========Header Section Starts Here========== -->
    <header>
            <!-- ==========BAR========== -->
            <?php include('include/bar.php')?>
            <!-- ==========BAR========== -->



            <!-- ==========Header========== -->
            <?php include('include/header.php')?>
            <!-- ==========Header========== -->
    </header>
    <!-- ==========Header Section Ends Here========== -->

    <!-- ===========Header Search=========== -->
    <div class="header-form">
        <div class="bg-lay">
            <div class="cross">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <form class="form-container">
            <input type="text" placeholder="Input Your Search" name="name">
            <button type="submit">Search</button>
        </form>
    </div>
    <!-- ===========Header Search=========== -->

    <!-- ===========Header Cart=========== -->
   
    <!-- ===========Header Cart=========== -->

    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="assets/images/banner/page-header.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Galerie</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Accuril</a>
                    </li>
                   
                    <li>
                    Galerie
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Gallery Section Starts Here========== -->
    <div class="gallery-section padding-top padding-bottom pos-rel">
        <div class="top-shape-center">
            <img src="assets/css/img/gallery1.png" alt="css">
        </div>
        <div class="bottom-shape-left">
            <img src="assets/css/img/bottom-shape.png" alt="css">
        </div>
        <div class="container">
          
            <div class="masonary-wrapper three-items">
                
                <div class="masonary-item toddler programe">
                    <div class="masonary-thumb">
                       
                        <img src="assets/images/gallery/t12.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item preschool kinder">
                    <div class="masonary-thumb">
                       
                        <img src="assets/images/gallery/t11.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler preschool kinder">
                    <div class="masonary-thumb">
                        
                        <img src="assets/images/gallery/t14.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item preschool">
                    <div class="masonary-thumb">
                     
                        <img src="assets/images/gallery/t15.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler kinder">
                    <div class="masonary-thumb">
                        
                        <img src="assets/images/gallery/t16.jpg" alt="gallery">
                    </div>
                </div>
                <div class="masonary-item toddler kinder preschool">
                    <div class="masonary-thumb">
                       
                        <img src="assets/images/gallery/t17.jpg" alt="gallery">
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    <!-- ==========Gallery Section Ends Here========== -->


    <!-- ==========Footer Section Starts Here========== -->
    <footer class="bg_img" data-background="assets/images/footer/footer-bg.jpg">
    <?php include('include/footer.php')?>
    </footer>
    <!-- ==========Footer Section Ends Here========== -->

    <!-- ==========js Section Starts Here========== -->
    <?php include('include/js.php')?>
    <!-- ==========js Section End Here========== -->
</body>



</html>