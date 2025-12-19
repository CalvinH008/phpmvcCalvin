<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Siswa</h3>
            <ul class="list-group">
                <?php foreach($data["siswa"] as $siswa): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $siswa["nama"]; ?>
                    <a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa["id"]; ?>"class="badge text-bg-primary ">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
           
                
        </div>
    </div>
</div>