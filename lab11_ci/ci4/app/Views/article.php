<?= $this->include('template/header'); ?>
<nav>
        <a href="<?= base_url('/home');?>">Home</a>
        <a href="<?= base_url('/article');?>" class="active">Artikel</a>
        <a href="<?= base_url('/about');?>">About</a>
        <a href="<?= base_url('/contact');?>">Kontak</a>
    </nav>
    <section id="wrapper">
        <section id="main"> 
            
<article class="entry">
                <h2>First featurette heading.</h2>
                <img src="https://dummyimage.com/150/7b8a70/fff.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem elit, iaculis in inisl volutpat, malesuada tindicunt arcu. Proin in leo fringilla, vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
            </article>
            <hr class="divider" />
            <article class="entry">
                <h2>First featurette heading</h2>
                <img src="https://dummyimage.com/150/7b8a70/fff.png" alt="" class="right-img">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem elit, iaculis in nisl voultpat, malesuada tincidunt arcu. Proin in leo fringilla, vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
            </article>
<?= $this->include('template/footer'); ?> 