<?= $this->include('template/admin_header'); ?>
 
<nav>
        <a href="<?= base_url('/admin/artikel');?>" class="active">Dashboard</a>
        <a href="<?= base_url('/artikel');?>">Artikel</a>
        <a href="<?= base_url('/admin/artikel/add');?>">Tambah Artikel</a>

    </nav>

    <section class="size-form">
<form method="get" class="form-search">
    <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari data">
    <input type="submit" value="Cari" class="btn-primary">
</form>
</section>

    <section id="wrapper">
        <section id="main"> 

<table class="table">
 <thead>
 <tr>
 <th>ID</th>
 <th>Judul</th>
 <th>Status</th>
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php if($artikel): foreach($artikel as $row): ?>
 <tr>
 <td><?= $row['id']; ?></td>
 <td>
 <b><?= $row['judul']; ?></b>
 <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
 </td>
 <td><?= $row['status']; ?></td>
 <td>
 <a class="btn" href="<?= base_url('/admin/artikel/edit/' . $row['id']);?>">Ubah</a>
 <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . $row['id']);?>">Hapus</a>
 </td>
 </tr>
 <?php endforeach; else: ?>
 <tr>
 <td colspan="4">Belum ada data.</td>
 </tr>
 <?php endif; ?>
 </tbody>
 <tfoot>
 <tr>
 <th>ID</th>
 <th>Judul</th>
 <th>Status</th>
 <th>Aksi</th>
 </tr>
 </tfoot>
</table>

<?= $pager->only(['q'])->links('bootstrap', 'bootstrap_pagination'); ?>

<?= $this->include('template/admin_footer'); ?>