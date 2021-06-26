<?= $this->include('template/header'); ?>
<nav>
        <a href="<?= base_url('/home');?>" class="active">Home</a>
        <a href="<?= base_url('/article');?>">Artikel</a>
        <a href="<?= base_url('/about');?>">About</a>
        <a href="<?= base_url('/contact');?>">Kontak</a>
    </nav>
    <section id="wrapper">
        <section id="main"> 

<h1>Hello World!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem elit, iaculis innisl volutpat, malesuada tincidunt arcu. Proin in leo fringilla, vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
            <a href="home" class="btn-default">Learn more &raquo;</a>
<?= $this->include('template/footer'); ?> 