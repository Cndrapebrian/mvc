<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['pms']['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['pms']['nip']; ?></h6>
    <p class="card-text"><?= $data['pms']['email']; ?></p>
    <p class="card-text"><?= $data['pms']['alamat']; ?></p>
    <a href="<?= BASEURL; ?>/pemesan" class="card-link">Kembali</a>
    
  </div>
</div>

</div>