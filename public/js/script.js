$(function() {
    

    $('.tambahData').on('click', function() {
       
        $('#judulModal').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');      

    });

    $('.tampilModalUbah').on('click', function() {
       
        $('#judulModal').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/siswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nis').val(data.nis);
                $('#nama').val(data.nama);
                $('#kelas').val(data.kelas);
                $('#id').val(data.id);
            }
        });

    });
}); 