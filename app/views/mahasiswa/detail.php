<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-header bg-dark text-white">
            Detail Mahasiswa :
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama : <?= $data['mhs']['nama']; ?></li>
            <li class="list-group-item">Nim : <?= $data['mhs']['nim']; ?></li>
            <li class="list-group-item">Email : <?= $data['mhs']['email']; ?></li>
            <li class="list-group-item">Jurusan : <?= $data['mhs']['jurusan']; ?></li>
            <li class="list-group-item"><a href="<?= BASEURL; ?>/mahasiswa" class="badge text-bg-info"> Kembali</a></li>
        </ul>
    </div>
</div>