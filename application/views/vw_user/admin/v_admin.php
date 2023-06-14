                      <div id="layoutSidenav_content">
                          <main>
                              <div class="container-fluid px-4">
                                  <h1 class="mt-4">Data Admin</h1>
                                  <ol class="breadcrumb mb-4">
                                      <li class="breadcrumb-item active">Admin</li>
                                  </ol>
                                  <div class="card mb-4">
                                      <div class="card-header">
                                          <i class="fas fa-table me-1"></i>
                                          Tabel Admin
                                      </div>
                                      <div class="card-body">
                                          <table class="table" id="datatablesSimple">
                                              <thead>
                                                  <tr>
                                                      <th>No</th>
                                                      <th>Nama</th>
                                                      <th>Username</th>
                                                      <th>Password</th>
                                                      <th>Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <?php
                                                        $no = 1;
                                                        foreach ($admin as $key) {
                                                        ?>
                                                  <tr>
                                                      <td class="text-secondary text-xxs font-weight-bold"><?php echo $no++ ?></td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $key['nama'] ?>
                                                      </td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $key['username'] ?>
                                                      </td>
                                                      <td class="text-secondary text-xs font-weight-bold"><?php echo $key['password'] ?></td>
                                                      <td>
                                                          <a class="btn btn-primary" href="">Edit</a>
                                                          <a class="btn btn-danger" href="">Delete</a>
                                                          <!-- <a class="btn btn-danger" href="<?php echo base_url('C_admin/delete/' . $key['id']) ?>">Delete</a> -->
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