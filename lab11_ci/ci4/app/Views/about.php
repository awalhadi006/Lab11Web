<?= $this->include('template/header'); ?>
<nav>
        <a href="<?= base_url('/home');?>">Home</a>
        <a href="<?= base_url('/article');?>">Artikel</a>
        <a href="<?= base_url('/about');?>" class="active">About</a>
        <a href="<?= base_url('/contact');?>">Kontak</a>
    </nav>
    <section id="wrapper">
        <section id="main"> 

<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<?= $this->include('template/footer'); ?> 