<?= $this->include('template/admin_header'); ?>
 
<nav>

        <a href="<?= base_url('/admin/artikel');?>">Dashboard</a>
        <a href="<?= base_url('/artikel');?>" class="active">Artikel</a>
        <a href="<?= base_url('/admin/artikel/add');?>">Tambah Artikel</a>

    </nav>
    <section id="wrapper">
        <section id="main"> 
            
<?php if($artikel): foreach($artikel as $row): ?>
<article class="entry">
    <h2><a href="<?= base_url('/artikel/' . $row['slug']);?>"><?= $row['judul']; ?></a>
</h2>
    <img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?= $row['judul']; ?>">
    <p><?= substr($row['isi'], 0, 200); ?></p>
</article>
<hr class="divider" />
<?php  endforeach; else: ?>
<article class="entry">
    <h2>Belum ada data.</h2>
</article>
<?php endif; ?>

<?= $this->include('template/admin_footer'); ?>