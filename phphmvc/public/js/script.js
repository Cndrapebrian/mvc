$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Pemesan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });


    $('.tampilModalUbah').on('click', function() {

        $('#formModalLabel').html('Ubah Data Pemesan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phphmvc/public/pemesan/Ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phphmvc/public/pemesan/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nip').val(data.nip);
                $('#email').val(data.email);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }
        })

    });
});