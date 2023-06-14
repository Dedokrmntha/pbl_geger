<form class="center" method="post" action="<?php echo base_url('C_galeri/add'); ?>">
    <div class="form-group">
        
        <label for="nama">Judul</label>
        <input type="text" class="form-control" name="judul_gambar" id="judul_gambar" placeholder="Masukkan Nama ">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="gambar" id="email" placeholder="Masukkan Email ">
    </div>
    <div class="form-group">
        <label for="subjek">Subjek</label>
        <input type="text" class="form-control" name="deskripsi" id="subjek" placeholder="Masukkan Subjek ">
    </div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-primary"> Kirim </button>
    </div>

</form>