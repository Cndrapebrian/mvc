<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
  <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
  Tambah Daftar Pemesan
</button>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/pemesan/cari" method="post">
      <div class="input-group">
    <input type="text" class="form-control" placeholder="Cari Pemesan" name="keyword" id="keyword" autocomplete="off">
    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
</div>
  </form>
  </div>
</div>

<div class="row">
<div class="col-lg-6">
<h3>Daftar Pemesan</h3>

<ul class="list-group">
    <?php foreach( $data['pms'] as $pms ) : ?>
  <li class="list-group-item">
    <?= $pms['nama']; ?>
  <a href="<?= BASEURL; ?>/pemesan/detail/<?= $pms['id']; ?>" class="badge text-bg-success float-end m-1">Detail</a>
  <a href="<?= BASEURL; ?>/pemesan/ubah/<?= $pms['id']; ?>" class="badge text-bg-secondary float-end m-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $pms['id']; ?>">Ubah</a>
  <a href="<?= BASEURL; ?>/pemesan/hapus/<?= $pms['id']; ?>" class="badge text-bg-danger float-end m-1" onclick="return confirm('Yakin?');">Hapus</a>
</li>
  <?php endforeach; ?>
</ul>

</div>
</div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Daftar Pemesan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/pemesan/tambah" method="post">
        <input type="hidden" name="id" id="id"> 
        <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">

    <div class="form-group">
    <label for="nip">NIP</label>
    <input type="text" class="form-control" id="nip" name="nip">

    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">

    <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="alamat" class="form-control" id="alamat" name="alamat">
    



  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
      </div>
    </div>
  </div>
</div>