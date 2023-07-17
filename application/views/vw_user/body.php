                      <div id="layoutSidenav_content">
                          <main>
                              <div class="container-fluid px-4">
                                  <ol class="breadcrumb mb-4">
                                      <!-- <li class="breadcrumb-item active">Halaman Utama</li> -->
                                      <!-- <img class="img-fluid w-100" src="<?= base_url('template/img/slider3.jpg') ?>" alt=""> -->
                                      <div class="text-center ">
                                          <video muted autoplay plays-inline loop class="back-video w-100 pt-2">
                                              <source src="<?= base_url(); ?>/template/img/d1.mp4" type="video/mp4">
                                          </video>
                                          <div class="carousel-caption d-flex flex-column ">
                                              <div class="pb-5" style="max-width: 900px;">
                                                  <?php
                                                    foreach ($data_user as $key) {
                                                    ?>
                                                      <h4 class="text-white text-uppercase mb-md-3"><b>Selamat datang di Admin <?php echo $key['username'] ?></b></h4>
                                                      <h1 class="display-3 text-white mb-5 pb-5"><b>Website Admin Pantai Geger</b></h1>
                                                      <!-- <h1 class="display-3 text-white mb-5 pb-5">    </h1>
                                                      <h1 class="display-3 text-white mb-5 pb-5">   </h1> -->
                                                  <?php
                                                    }
                                                    ?>
                                              </div>
                                          </div>
                                      </div>
                                  </ol>

                              </div>
                          </main>