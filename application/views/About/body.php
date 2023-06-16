    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img class="w-100" src="<?= base_url('template/img/slider1.jpg') ?>" alt="Image"> -->
                    <video muted autoplay plays-inline loop class="back-video w-100">
                        <source src="<?= base_url(); ?>/template/img/d1.mp4" type="video/mp4">
                    </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style=" max-height:100px; max-width: 900px;">
                        <h1 class="display-3 text-white mb-md-4">Deskripsi</h1>
                            <h4 class="text-white text-uppercase mb-md-3">Pantai Geger </h4>
                           
                            
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Kunjungi</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <video muted autoplay plays-inline loop class="back-video w-100">
                        <source src="<?= base_url(); ?>/template/img/c1.mp4" type="video/mp4">
                        <!-- <img class="w-100" src="<?= base_url('template/img/slider2.jpg') ?>" alt="Image"> -->
                    </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-3 text-white mb-md-4">Deskripsi</h1>
                            <h4 class="text-white text-uppercase mb-md-3">Pantai Geger </h4>
                           
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Kunjungi</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pt-3 pb-2">
        <div class="container pb-4">
            <div class="bg-light shadow" style="padding: 10px;">
                <div class="row align-items-center" style="min-height: 60px;">

                    <!-- <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 1</option>
                                        <option value="3">Destination 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">Duration 1</option>
                                        <option value="2">Duration 1</option>
                                        <option value="3">Duration 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-2">
                        <img class="w-100 h-10" src="<?= base_url('template/img/slider2.jpg') ?>" alt="Image">
                    </div>
                    <div class="col-md-2">
                        <img class="w-100 h-10" src="<?= base_url('template/img/slider1.jpg') ?>" alt="Image">
                    </div>
                    <div class="col-md-2">
                        <img class="w-100 h-10" src="<?= base_url('template/img/slider3.jpg') ?>" alt="Image">
                    </div>
                    <div class="col-md-2">
                        <img class="w-100 h-10" src="<?= base_url('template/img/slider1.jpg') ?>" alt="Image">
                    </div>
                    <div class="col-md-2">
                        <img class="w-100 h-10" src="<?= base_url('template/img/slider5.jpg') ?>" alt="Image">
                    </div>
                    <div class="col-md-2">
                        <img class="w-100 h-10" src="<?= base_url('template/img/slider3.jpg') ?>" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->

    

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="<?= base_url('template/img/geger2.jpg') ?>" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">DESKRIPSI</h4>
                    <h1 class="mb-3">Tentang Pantai Geger</h1>
                    <p>Pantai Geger disebut sebagai private beach karena kondisi pantai masih bersih dan memiliki air yang jernih. Pantai berpasir putih ini merupakan pantai yang landai dengan kondisi air laut yang tenang nyaris tanpa ombak.</p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="<?= base_url('template/img/geger1aja.jpg') ?>" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="<?= base_url('template/img/geger4aja.jpg') ?>" alt="">
                        </div>
                    </div>
                    <a href="https://ksmtour.com/informasi/tempat-wisata/bali/pantai-geger-pantai-pasir-putih-yang-tenang-di-bali.html" class="btn btn-primary mt-1">Baca Selengkapnya</a>
                </div>

            </div>
        </div>

    </div>
</div>
 <!-- google maps start -->
 <div class="container-fluid py-5">
        <div class="container pt-3 pb-2">
            <div class="text-center mb-3 ">

                <h2>Vidio Kami</h2>
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Pantai Geger</h6>
            </div>
        </div>
    </div>
    <div class="container-fluid booking mt-5 pt-3 pb-2 ml-2">
        <div class="container pb-4">
            <div class="row align-items-center" style="min-height: 60px;">
                <div class="bg-light shadow" style="padding: 10px;">
                    <iframe src="https://www.youtube.com/embed/nyOXV76NUS4" width="1100" height="720" margin="auto" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- google maps end -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Pantai Geger</h6>
                <h1>Galeri Kami</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?= base_url('template/img/slider3.jpg') ?>" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"></h6>
                                <small class="text-white text-uppercase"></small> 
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?= base_url('template/img/slider2.jpg') ?>" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?= base_url('template/img/slider1.jpg') ?>" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                        </div>
                    </div>
                </div>
<!-- Team Start -->
<!-- <div class="container-fluid py-5"> -->
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tampilan</h5>
            <h1>Galeri</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?= base_url('template/img/slider5.jpg') ?>" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <!-- <div class="text-center py-4"> -->
                        <!-- <h5 class="text-truncate">Guide Name</h5> -->
                        <!-- <p class="m-0">Designation</p> -->
                    <!-- </div> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?= base_url('template/img/slider1.jpg') ?>" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <!-- <h5 class="text-truncate">Guide Name</h5> -->
                        <!-- <p class="m-0">Designation</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?= base_url('template/img/slider2.jpg') ?>" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <!-- <h5 class="text-truncate">Guide Name</h5> -->
                        <!-- <p class="m-0">Designation</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?= base_url('template/img/slider3.jpg') ?>" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <!-- <h5 class="text-truncate">Guide Name</h5> -->
                        <!-- <p class="m-0">Designation</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
<!-- Team End -->

<!-- About End -->

<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="<?= base_url('template/img/slider1.jpg') ?>" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">PANTAI GEGER</h4>
                    <h1 class="mb-3">Berpasir Putih Dan Tenang</h1>
                    <p>Seperti diketahui wilayah alam pesisir Bali Selatan terutama di Kabupaten Badung, lebih didominasi dengan pantai berpasir putih, begitu juga dengan pantai Geger yang terletak di Nusa Dua. Menyuguhkan pemandangan alam laut biru, dengan pasir putihnya yang lembut.</p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="<?= base_url('template/img/slider3.jpg') ?>" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="<?= base_url('template/img/slider5.jpg') ?>" alt="">
                        </div>
                    </div>
                    <a href="https://www.balitoursclub.net/pantai-geger/" class="btn btn-primary mt-1">Baca Selengkapnya</a>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="ratings">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star"></i>
            </div>
            <h5 class="review-count">12 Reviews</h5>
        </div>
        
        
        <div class="mt-5 d-flex justify-content-between align-items-center">
            <h5 class="review-stat">Cleanliness</h5>
            <div class="small-ratings">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            
        </div>
        
        <div class="mt-1 d-flex justify-content-between align-items-center">
            <h5 class="review-stat">Approachability of SLT</h5>
            <div class="small-ratings">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        
        
        <div class="mt-1 d-flex justify-content-between align-items-center">
            <h5 class="review-stat">Front Office</h5>
            <div class="small-ratings">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        
        
        <div class="mt-1 d-flex justify-content-between align-items-center">
            <h5 class="review-stat">CPD</h5>
            <div class="small-ratings">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
            </div>
        </div>
        
        
        <div class="mt-1 d-flex justify-content-between align-items-center">
            <h5 class="review-stat">Pastrol</h5>
            <div class="small-ratings">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        
        <div class="mt-1 d-flex justify-content-between align-items-center">
            <h5 class="review-stat">Office Space</h5>
            <div class="small-ratings">
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star rating-color"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
    </div>
    
</div> -->
<!-- Feature Start -->
<!-- <div class="container-fluid pb-5"> -->
    <!-- <div class="container ">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-money-check-alt text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Competitive Pricing</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-award text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Best Services</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-globe text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Worldwide Coverage</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Feature End -->



<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>