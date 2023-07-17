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
          Tabel Gambar

        </div>
        <div class="card-body">
          <form class="row g-3" action="<?php echo base_url('C_galeri/add') ?>" method="post" enctype="multipart/form-data">
              <div class="col-12">
                <tr>
                  <td colspan="3"><?php echo form_error('judul_gambar') ?></td>
                </tr>
                <label for="inputJudul" class="form-label">Judul Gambar</label>
                <input type="text" class="form-control" id="inputJudul" name="judul_gambar" placeholder="Masukkan Judul">
              </div>

              <div class="col-12">
                <tr>
                  <td colspan="3"><?php echo form_error('gambar') ?></td>
                </tr>
                <label for="inputGambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="inputGambar" name="gambar" placeholder="Masukkan Gambar">
              </div>
              <div class="col-12">
                <tr>
                  <td colspan="3"><?php echo form_error('deskripsi') ?></td>
                </tr>
                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control pb-5" id="inputDeskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Gambar">
              </div>


              <!-- <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div> -->
              <!-- <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div> -->
              <div class="col-12">
                <button type="submit" class="btn btn-success">Kirim</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </main>