<?= $this->include('template/admin_header'); ?>
<nav>
        <a href="<?= base_url('/admin/artikel');?>">Dashboard</a>
        <a href="<?= base_url('/article');?>">Artikel</a>
        <a href="<?= base_url('/admin/artikel/add');?>" class="active">Tambah Artikel</a>
    </nav>
    <section id="wrapper">
        <section id="main"> 
        
<h2><?= $title; ?></h2>
<form action="" method="post">
 <p>
 <input type="text" name="judul">
 </p>
 <p>
 <textarea name="isi" cols="50" rows="10"></textarea>
 </p>
 <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>
<?= $this->include('template/admin_footer'); ?>