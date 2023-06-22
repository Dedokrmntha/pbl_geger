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
                    <?php foreach ($galeri->result_array() as $key) {
                    ?>
                        <form class="row g-3" action="<?php echo base_url('C_galeri/edit/') . $key['id_gambar'] ?>" method="post">
                            <div class="col-12">
                                <tr>
                                    <td colspan="3"><?php echo form_error('id_gambar') ?></td>
                                </tr>
                                <label class="form-label">Id:</label>
                                <input type="text" class="form-control" value="<?php echo $key['id_gambar'] ?>" name="id_gambar" readonly>
                            </div>

                            <div class="col-12">
                                <tr>
                                    <td colspan="3"><?php echo form_error('judul_gambar') ?></td>
                                </tr>
                                <label for="inputJudul" class="form-label">Judul Gambar</label>
                                <input type="text" class="form-control" id="inputJudul" name="judul_gambar" value="<?php echo $key['judul_gambar'] ?>">
                            </div>

                            <div class="col-12">
                                <tr>
                                    <td colspan="3"><?php echo form_error('gambar') ?></td>
                                </tr>
                                <label for="inputGambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="inputGambar" name="gambar" value="<?php echo $key['gambar'] ?>">
                            </div>
                            <div class="col-12">
                                <tr>
                                    <td colspan="3"><?php echo form_error('deskripsi') ?></td>
                                </tr>
                                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control pb-5" id="inputDeskripsi" name="deskripsi" value="<?php echo $key['deskripsi'] ?>">
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