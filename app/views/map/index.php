<div class="row mb-3">
    <div class="col-lg-6">
    <button type="button" class="btn btn-primary loadMapData" id="loadMapData">
        Load Map
    </button>
    </div>
</div>
<div id="map"></div>

<script type="text/javascript">
    /* contoh menggunakan ajax untuk mendapatkan list dari database dalam bentuk json*/
    /*async function GetMapData() {
        try {
            var data = await $.ajax({
                url: 'http://localhost/getmap', //url untuk endpoint backend
                dataType: 'json',
                method: 'GET' //menyesuaikan settingan backend mu , method httpnya
            })
            return data;
        } catch (err) {
            alert(err);
        }
    }
    
    var dataFromInet = GetMapData(); //contoh akses data
    */


    //contoh penggunaan data statis
    


    //var map = L.map('map').setView([dataFromInet[0].lat, dataFromInet[0].lng], 10);

    //L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    //}).addTo(map);

    //dataFromInet.forEach((item) => {
    //    L.marker([item.lat, item.lng]).addTo(map)
    //        .bindPopup(item.nama)
    //})
</script>