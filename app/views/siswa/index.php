<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
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
                        <a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa["id"]; ?>" class="badge text-bg-danger" onclick="return confirm('Yakin?');">Delete</a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" class="form-control" id="nik" name="nik">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
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
        </form>
      </div>
    </div>
  </div>
</div>