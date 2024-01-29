<style>
    img {
        width: 400px;
        /* Adjust the width as needed */
        height: 400px;
        /* Adjust the height as needed */
        object-fit: cover;
        /* Maintain aspect ratio and cover container */
        border-radius: 5px;
        /* Optional: add border radius for rounded corners */
    }
</style>
<!-- banner -->
<div class="w3l-hear-top">
    <!-- header -->
    <header>
        <!-- logo -->
        <div class="logo">
            <h1>
                <a href="home" class="text-center">
                    beauty
                    <span class="d-block">Shop</span>
                </a>
            </h1>
        </div>
        <!-- //logo -->
        <!-- search -->
        <div class="w3ls_search">
            <div class="cd-main-header">
                <ul class="cd-header-buttons">
                    <li>
                        <a class="cd-search-trigger" href="#cd-search">
                            <span></span>
                        </a>
                    </li>
                </ul>
                <!-- cd-header-buttons -->
            </div>
            <div id="cd-search" class="cd-search">
                <form action="#" method="post">
                    <input name="Search" type="search" placeholder="search site">
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- //search -->
        <!-- menu -->
        <div class="side_menu">
            <div class="burger_box">
                <div class="menu-icon-container">
                    <a href="#" class="menu-icon js-menu_toggle closed">
                        <span class="menu-icon_box">
                            <span class="menu-icon_line menu-icon_line--1"></span>
                            <span class="menu-icon_line menu-icon_line--2"></span>
                            <span class="menu-icon_line menu-icon_line--3"></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="container">
                <ul class="sidebar-menu">
                    <li class="treeview">
                        <a href="home">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="about">
                            <span>About</span>
                        </a>
                    </li>
                    <!--  -->
                    <li class="treeview active">
                        <a href="#">
                            <span>Category</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview active">
                                <a href="#">
                                    <span>Skin Care</span>
                                    <i class="skincare"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="active">
                                        <a href="sunscreen">
                                            <i class="sunscreen"></i>Sunscreen</a>
                                    </li>


                                    <li class="treeview">
                                        <a href="contact">
                                            <span>Contact</span>
                                        </a>
                                    </li>
                                </ul>
            </div>
        </div>
        <!-- //menu -->
    </header>
    <!-- //header -->
    <!-- banner-slider -->
    <section class="diagonal-stripe-one inner-bg">
        <div class="container">
            <div class="ml-md-5 pl-md-5">
            </div>
        </div>
    </section>
    <!-- banner-slider -->
</div>
<!-- //banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="home">Home</a>
        </li>
        <li class="breadcrumb-item">Skin Care</li>
        <li class="breadcrumb-item active" aria-current="page">
            <a href="sunscreen">Sunscreen</a>
        </li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- single -->
<div class="single-w3l py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="row inner_sec_info pt-md-4">
            <!-- left side -->
            <?php
            $card = 0;
            foreach ($sunscreendata['Data'] as $key => $value) {
                ?>
                <div class="col-lg-4">
                    <!-- blog grid -->
                    <div class="full_width_blog_grid">
                        <div class="card">
                            <div class="card-header p-0">

                                <img class="card-img-bottom"
                                    src="<?php echo $this->base_url . "images/" . $value->p_image; ?>" alt="Card image cap">

                            </div>
                            <div class="card-body">

                                <?php echo $value->p_des; ?><br>
                                MRP:₹
                                <?php echo $value->p_price; ?>
                                <div class="text-center"><br>
                                    <a href="addcart?productid=<?php echo $value->p_id; ?>"><button type="button"
                                            class="btn" style="width:48%">Add To Cart</button></a>
                                    <a href="buynow"> <button type="button" class="btn" name="btn-buynow"
                                            style="background: #e83e8c; color:white;width:48%">Buy
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //blog grid -->
                </div>
                <!-- blog grid -->
                <?php
                $card++;
                if ($card == 3) { ?>
                </div>
                <div class="row inner_sec_info pt-md-4">
                    <?php $card = 0;
                }
            }
            ?>
            <!-- //single -->