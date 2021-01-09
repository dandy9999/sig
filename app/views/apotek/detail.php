<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['apt']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['apt']['descript']; ?></h6>
        <p class="card-text">Latitude : <?= $data['apt']['lat']; ?></p>
        <p class="card-text">Longitude: <?= $data['apt']['lng']; ?></p>
        <p class="card-text"><?= $data['apt']['hour']; ?></p>
        <a href="<?= BASEURL; ?>/Apotek" class="card-link">Kembali</a>
      </div>
    </div>

</div>