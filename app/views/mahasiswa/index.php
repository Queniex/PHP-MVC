<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-2">
            <button type="button" class="tampilModalTambah  btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data(+)
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
            <nav class="bg-light d-inline">
                    <input class="form-control me-1 d-inline" style="width: 20rem;" name="keyword" id="keyword" type="text" placeholder="Masukkan Kata Kunci" aria-label="Search">
                    <button class="btn btn-outline-dark d-inline" type="submit" id="tombolCari">Cari</button>
            </nav>
            </form>
        </div>
    </div>

    <!-- Check Again -->
    <div class="row">
        <div class="col-lg-6 mt-2">
            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group mt-2">
                    <li class="list-group-item active mt-2" style="width: 20rem;" aria-current="true">Universitas Starlogy</li>
                    <?php foreach ( $data['mhs'] as $mhs ) : ?>
                        <li class="list-group-item" style="width: 20rem;">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end ms-1" onclick="return confirm('Yakin?');">hapus</a>
                            <a href="<?= BASEURL ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="tampilModalUbah badge text-bg-warning float-end ms-1" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                            <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-dark float-end">detail</a>
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
                        <input type="hidden" name="id" id="id" class="id">
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating">
                                <input type="text" class="nama form-control" id="floatingInputGrid" name="nama" placeholder="Masukkan Nama..." value="">
                                <label for="floatingInputGrid">Nama Mahasiswa</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                <input type="number" class="nim form-control" id="floatingInputGrid" name="nim" placeholder="Masukkan Nim...">
                                <label for="floatingInputGrid">Nim</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="email form-control" id="floatingInput" name="email" placeholder="Masukkan Email...">
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
                            <button type="submit" class="btn btn-primary" id="" name="submit">Tambah Data</button>
                        </div>
                    </form> 
                </div>
            </div>
            </div>

</div>