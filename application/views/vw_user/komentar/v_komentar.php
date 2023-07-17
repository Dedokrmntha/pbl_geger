                      <div id="layoutSidenav_content">
                          <main>
                              <div class="container-fluid px-4">
                                  <h1 class="mt-4">Data Komentar</h1>
                                  <ol class="breadcrumb mb-4">
                                      <li class="breadcrumb-item active">Admin</li>
                                  </ol>
                                  <div class="card mb-4">
                                      <div class="card-header">
                                          <i class="fas fa-table me-1"></i>
                                          Tabel Komentar
                                      </div>
                                      <div class="card-body">
                                          <table class="table" id="datatablesSimple">
                                              <thead>
                                                  <tr>
                                                      <th>No</th>
                                                      <th>Nama</th>
                                                      <th>Email</th>
                                                      <th>Komentar</th>
                                                      <th>Balasan</th>
                                                      <th>Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <?php
                                                        $no = 1;
                                                        foreach ($komentar as $key) {
                                                        ?>
                                                  <tr>
                                                      <td class="text-secondary text-xxs font-weight-bold"><?php echo $no++ ?></td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $key['nama'] ?>
                                                      </td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $key['email'] ?>
                                                      </td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $key['pesan'] ?></td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $key['balas'] ?></td>
                                                      <td >
                                                          <a class="btn btn-success  mb-1" href="<?php echo base_url('C_komentar/balas/' . $key['id_komentar']) ?>">Balas</a>
                                                         
                                                          <a class="btn btn-danger" onclick="javascript: return confirm('Apakah anda yakin ingin hapus?')" href="<?php echo base_url('C_komentar/delete/' . $key['id_komentar']) ?>">Delete</a>
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