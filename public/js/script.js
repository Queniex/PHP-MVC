$(function() {

    $('.tampilModalTambah').on('click', function() {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    })

    $('.tampilModalUbah').on('click', function() {
        // console.log('OK');

        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id'); // id didapatkan dari sini

        $.ajax({
            url: "http://localhost/phpmvc/public/Mahasiswa/getUbah",
            data: {id : id}, // id sebelah kiri yang dikirimkan, id sebelah kanan isi datanya
            method: 'post',
            dataType: "json",
            success: function(data) {
                $('.nama').val(data.nama);
                $('.nim').val(data.nim);
                $('.email').val(data.email);
                $('#jurusan').find(":selected").text();
            }
        });
    })

});
