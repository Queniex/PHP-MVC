<div class="container mt-3">

    <div class="row">
        <div class="col-6">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data(+)
            </button>

            <br>

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

            <!-- Modal -->
            <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">   
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" name="nama" placeholder="Masukkan Nama...">
                                <label for="floatingInputGrid">Nama Mahasiswa</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                <input type="number" class="form-control" id="floatingInputGrid" name="nim" placeholder="Masukkan Nim...">
                                <label for="floatingInputGrid">Nim</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="floatingInput" name="email" placeholder="Masukkan Email...">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" id="jurusan" name="jurusan" aria-label="Floating label select example">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Multimedia">Teknik Multimedia</option>
                                <option value="Teknik Jaringan">Teknik Jaringan</option>
                            </select>
                            <label for="jurusan">Jurusan Mahasiswa</label>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
                        </div>
                    </form> 
                </div>
            </div>
            </div>

</div>