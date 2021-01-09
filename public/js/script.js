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

   
        var param = {}
        const urlParams = new URLSearchParams(window.location.search);

        if(id_apotik !== null){
            param = {apotik_id : id_apotik}
        }else if( urlParams.get('keyword') !== null){
            param = {keyword:  urlParams.get('keyword')}
        }

        
        $.ajax({
            url: 'http://localhost/sig/public/Map/getMap',
            data:param,
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                if(typeof data === "object" &&  !$.isArray(data)){
                    data = [data]
                }
                 var map = L.map('map').setView([data[0].lat,data[0].lng], data.length > 1 ? 13 : 17);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map)

                data.forEach((item) => {
                    L.marker([item.lat, item.lng]).addTo(map)
                        .bindPopup(item.nama);
                })
            }
        });
        
   

});