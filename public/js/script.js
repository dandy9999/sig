$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Apotek');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#lat').val('');
        $('#lng').val('');
        $('#descript').val('');
        $('#hour').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Apotek');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/sig/public/Apotek/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/sig/public/Apotek/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#lat').val(data.lat);
                $('#lng').val(data.lng);
                $('#descript').val(data.descript);
                $('#hour').val(data.hour);
                $('#id').val(data.id);
            }
        });
        
    });

    $('.loadMapData').on('click', function() {
        

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/sig/public/Map/getAllMap',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
            }
        });
        
    });

});