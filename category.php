<!doctype html>
<html lang="zxx">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>aranoz</title>
        <link rel="icon" href="img/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- nice select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="css/all.css">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/price_rangs.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <!--::header part start::-->
        <?php include 'partials/nav.php';?>
        <!-- Header part end-->

        <!--================Home Banner Area =================-->
        <!-- breadcrumb start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item">
                                <h2>Shop Category</h2>
                                <p>Home <span>-</span> Shop Category</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb start-->

        <!--================Category Product Area =================-->
        <section class="cat_product_area section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="left_sidebar_area">
                            <aside class="left_widgets p_filter_widgets">
                                <div class="l_w_title">
                                    <h3>Categorías</h3>
                                </div>
                                <div class="widgets_inner">
                                    <ul class="list">
                                        <?php
                                        include 'conexion/conexion.php';
                                        $query_cat = "SELECT * FROM categorias";
                                        $resultado_cat = $conexion->query($query_cat);

                                        while ($row_cat = $resultado_cat->fetch_assoc()) {
                                            ?>
                                            <li>
                                                <a href="#"><?php echo $row_cat['categoria'];?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product_top_bar d-flex justify-content-between align-items-center">
                                    <?php include 'conexion/conexion.php';
                                    $query_cantidad_p = "SELECT COUNT(*) AS total FROM productos";
                                    $resultado_cantidad_p = $conexion->query($query_cantidad_p);
                                    $row_cantidad_p = $resultado_cantidad_p->fetch_assoc();
                                    ?>
                                    <div class="single_product_menu">
                                        <p><span><?php echo $row_cantidad_p['total']; ?></span> Prodict Found</p>
                                    </div>
                                    <div class="single_product_menu d-flex">
                                        <h5>show :</h5>
                                        <div class="top_pageniation">
                                            <ul>
                                                <li>1</li>
                                                <li>2</li>
                                                <li>3</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center latest_product_inner">
                            <?php
                            include 'conexion/conexion.php';

                            $query = "SELECT nombre, imagen FROM productos";
                            $resultado = $conexion->query($query);

                            while ($row = $resultado->fetch_assoc()) {
                                ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" alt="">
                                        <div class="single_product_text">
                                            <h4><?php echo $row['nombre']; ?></h4>
                                            <a href="{{ route('single-product', $product->slug) }}" class="add_cart">Ver mas<i></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                            <div class="col-lg-12">
                                <div class="pageination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="ti-angle-double-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="ti-angle-double-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Category Product Area =================-->

        <!--::footer_part start::-->
        <footer class="footer_part">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-sm-6 col-lg-2">
                        <div class="single_footer_part">
                            <h4>Top Products</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Managed Website</a></li>
                                <li><a href="">Manage Reputation</a></li>
                                <li><a href="">Power Tools</a></li>
                                <li><a href="">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="single_footer_part">
                            <h4>Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Jobs</a></li>
                                <li><a href="">Brand Assets</a></li>
                                <li><a href="">Investor Relations</a></li>
                                <li><a href="">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="single_footer_part">
                            <h4>Features</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Jobs</a></li>
                                <li><a href="">Brand Assets</a></li>
                                <li><a href="">Investor Relations</a></li>
                                <li><a href="">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="single_footer_part">
                            <h4>Resources</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Guides</a></li>
                                <li><a href="">Research</a></li>
                                <li><a href="">Experts</a></li>
                                <li><a href="">Agencies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_footer_part">
                            <h4>Newsletter</h4>
                            <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                            </p>
                            <div id="mc_embed_signup">
                                <form target="_blank"
                                      action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                      method="get" class="subscribe_form relative mail_part">
                                    <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                           class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = ' Email Address '">
                                    <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="copyright_part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="copyright_text">
                                <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer_icon social_icon">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--::footer_part end::-->

        <!-- jquery plugins here-->
        <script src="js/jquery-1.12.1.min.js"></script>
        <!-- popper js -->
        <script src="js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- easing js -->
        <script src="js/jquery.magnific-popup.js"></script>
        <!-- swiper js -->
        <script src="js/swiper.min.js"></script>
        <!-- swiper js -->
        <script src="js/masonry.pkgd.js"></script>
        <!-- particles js -->
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- slick js -->
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="js/price_rangs.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
    </body>

</html>