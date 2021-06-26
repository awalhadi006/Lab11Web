<?= $this->include('template/admin_header'); ?>
 
<nav>

        <a href="<?= base_url('/admin/artikel');?>">Dashboard</a>
        <a href="<?= base_url('/artikel');?>" class="active">Artikel</a>
        <a href="<?= base_url('/admin/artikel/add');?>">Tambah Artikel</a>

    </nav>
    <section id="wrapper">
        <section id="main"> 

<article class="entry">
 <h2><?= $artikel['judul']; ?></h2>
 <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?=$artikel['judul']; ?>">
 <p><?= $artikel['isi']; ?></p>
</article>


<?= $this->include('template/admin_footer'); ?>
