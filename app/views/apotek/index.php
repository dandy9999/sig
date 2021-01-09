<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Apotek
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/Apotek/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari Apotek.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  
    <div class="row">
        <div class="col-lg-6">
          <h3>Daftar Apotek</h3>
          <ul class="list-group">
            <?php foreach( $data['apt'] as $apt ) : ?>
              <li class="list-group-item">
                  <?= $apt['nama']; ?>
                  <a href="<?= BASEURL; ?>/Apotek/hapus/<?= $apt['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= BASEURL; ?>/Apotek/ubah/<?= $apt['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $apt['id']; ?>">ubah</a>
                  <a href="<?= BASEURL; ?>/Apotek/detail/<?= $apt['id']; ?>" class="badge badge-primary float-right">detail</a>
                  <a href="<?= BASEURL; ?>/Map/<?= $apt['id']; ?>" class="badge badge-primary float-right">open map</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Apotek</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/Apotek/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="lat">Latitude</label>
            <input type="text" class="form-control" id="lat" name="lat" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="lng">Longitude</label>
            <input type="text" class="form-control" id="lng" name="lng" autocomplete="off">
          </div>
          
          <div class="form-group">
            <label for="descript">Deskripsi</label>
            <input type="text" class="form-control" id="descript" name="descript" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="hour">Jam Buka</label>
            <input type="text" class="form-control" id="hour" name="hour" autocomplete="off">
          </div>

          

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>




