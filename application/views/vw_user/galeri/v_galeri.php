                      <div id="layoutSidenav_content">
                          <main>
                              <div class="container-fluid px-4">
                                  <h1 class="mt-4">Data Galeri</h1>
                                  <ol class="breadcrumb mb-2">
                                      <li class="breadcrumb-item active">Admin</li>
                                  </ol>
                                  <a class="btn btn-success mb-3" href="<?= base_url('C_galeri/tambah/') ?>">Tambah</a> <br>
                                  <div class="card mb-4">
                                      <div class="card-header">

                                          <i class="fas fa-table me-1"></i>
                                          Tabel Gambar

                                      </div>
                                      <div class="card-body">
                                          <table class="table" id="datatablesSimple">
                                              <thead>
                                                  <tr>
                                                      <th>No</th>
                                                      <th>Judul</th>
                                                      <th>Gambar</th>
                                                      <th>Deskripsi</th>
                                                      <th>Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <?php
                                                        $no = 1;
                                                        foreach ($galeri as $key) {
                                                        ?>
                                                  <tr>
                                                      <td class="text-secondary text-xxs font-weight-bold"><?php echo $no++ ?></td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $key['judul_gambar'] ?>
                                                      </td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $key['gambar'] ?>
                                                      </td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $key['deskripsi'] ?></td>
                                                      <td>
                                                          <a class="btn btn-primary mb-1" href="<?php echo base_url('C_galeri/ubah/' . $key['id_gambar']) ?>">Edit</a>
                                                          <a class="btn btn-danger" onclick="javascript: return confirm('Apakah anda yakin ingin hapus?')" href="<?php echo base_url('C_galeri/delete/' . $key['id_gambar']) ?>">Delete</a>
                                                      </td>


                                                  </tr>
                                              <?php
                                                        }
                                                ?>
                                              </tr>
                                              </tbody>

                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </main>