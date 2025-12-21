<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- ✅ Ganti jadi "tampilTambahData" biar sama dengan JS -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Insert Data Siswa
            </button>
            <br>
            <h3>Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach($data["siswa"] as $siswa): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $siswa["nama"]; ?>
                    <div>
                        <a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa["id"]; ?>" class="badge text-bg-success me-2">Detail</a>
                        <!-- ✅ Hapus href karena pakai modal, bukan redirect -->
                        <a href="#" class="badge text-bg-primary me-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $siswa['id']; ?>">Edit</a>
                        <a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa["id"]; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?');">Delete</a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- ✅ Tambahkan id="formModal" di form -->
      <form action="<?= BASEURL; ?>/siswa/tambah" method="post" id="formModal">
        <div class="modal-body">
          
          <!-- ✅ PENTING! Tambahkan hidden input untuk ID -->
          <input type="hidden" name="id" id="id">
          
          <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
              <label for="nik" class="form-label">NIK</label>
              <input type="number" class="form-control" id="nik" name="nik" required>
          </div>
          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <select class="form-control" id="jurusan" name="jurusan" required>
                  <option value="TI">TI</option>
                  <option value="SI">SI</option>
                  <option value="AKL">AKL</option>
                  <option value="SIPIL">T.SIPIL</option>
                  <option value="MESIN">T.MESIN</option>
              </select>
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
      
    </div>
  </div>
</div>