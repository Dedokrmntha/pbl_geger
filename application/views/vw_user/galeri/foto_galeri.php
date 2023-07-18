<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Pantai Geger</h6>
            <h1>Galeri Kami</h1>
        </div>

        <div class="row pb-3">
            <?php
            foreach ($galeri as $key) {
            ?>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">

                            <img class="img-fluid w-100" src="<?= base_url('galeri/') . $key['gambar'] ?>" alt="">

                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"></h6>
                                <small class="text-white text-uppercase"></small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?php echo $key['judul_gambar'] ?></a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href=""><?php echo $key['deskripsi'] ?></a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</div>