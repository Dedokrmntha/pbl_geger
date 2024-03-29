<div class="container-fluid bg-registration  py-5 mt-4" style="">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Berikan Testimonial Anda!</h6>
                    <h1 class="text-white"><span class="text-primary">Pantai</span> Geger</h1>
                </div>
                <p class="text-white"></p>
                <ul class="list-inline text-white m-0">
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Silakan Masukkan Nama Anda!</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Masukkan Email Anda!</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Tulis Komentar, Saran, Maupun Kritik Anda!</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Klik Kirim Untuk Mengirim Pesan!</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-primary text-center p-4">
                        <h3 class="text-white m-0">Testimonial</h3>
                    </div>
                    <div class="card-body rounded-bottom bg-white p-5">

                        <form class="center" method="post" action="<?php echo base_url('C_komentar/add'); ?>">
                            <div class="form-group">
                                <tr>
                                    <td colspan="3"><?php echo form_error('nama') ?></td>
                                </tr>
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama ">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email ">
                            </div>

                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <input type="text" class="form-control" name="pesan" id="pesan" placeholder="Masukkan Pesan Anda">
                            </div><br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"> Kirim </button>
                            </div>

                        </form>
                    </div>

                    </body>
                </div>
            </div>
        </div>
    </div>
</div>