<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Galeri</h1>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item active">Admin</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">

                    <i class="fas fa-table me-1"></i>
                    Ubah Tabel Gambar

                </div>
                <div class="card-body">
                    <?php foreach ($komentar->result_array() as $key) {
                    ?>
                        <form class="row g-3" action="<?php echo base_url('C_komentar/edit/') . $key['id_komentar'] ?>" method="post">
                            <div class="col-12">

                                <label class="form-label">Id:</label>
                                <input type="text" class="form-control" value="<?php echo $key['id_komentar'] ?>" name="id_komentar" readonly>
                            </div>

                            <div class="col-12">

                                <label for="inputNama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="inputNama" name="nama" value="<?php echo $key['nama'] ?>" readonly>
                            </div>

                            <div class="col-12">

                                <label for="inputEmail" class="form-label">email</label>
                                <input type="text" class="form-control" id="inputEmail" name="email" value="<?php echo $key['email'] ?>" readonly>
                            </div>
                            <div class="col-12">

                                <label for="inputPesan" class="form-label">Pesan</label>
                                <input type="text" class="form-control pb-5" id="inputPesan" name="pesan" value="<?php echo $key['pesan'] ?>" readonly>
                            </div>
                            <div class="col-12">

                                <label for="inputBalas" class="form-label">Balasan</label>
                                <input type="text" class="form-control pb-5" id="inputBalas" name="balas" value="<?php echo $key['balas'] ?>">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success">Kirim</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>