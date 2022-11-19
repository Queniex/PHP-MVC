<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group mt-2">
                    <li class="list-group-item active mt-2 w-50" aria-current="true">Universitas Starlogy</li>
                    <?php foreach ( $data['mhs'] as $mhs ) : ?>
                        <li class="w-50 list-group-item d-flex justify-content-between align-items-start">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-info">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>

</div>