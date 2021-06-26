<?= $this->include('template/header'); ?>
<nav>
        <a href="<?= base_url('/home');?>">Home</a>
        <a href="<?= base_url('/article');?>">Artikel</a>
        <a href="<?= base_url('/about');?>">About</a>
        <a href="<?= base_url('/contact');?>" class="active">Kontak</a>
    </nav>
    <section id="wrapper">
        <section id="main2"> 
        <div class="contact-form">
            <form action="" method="POST" onSubmit="return validasi(this)">
                    <div class="judul">
                    <h2>Let's have a Talk</h2>
                    </div>
                <p>
                    <label class="labelnew">Alamat Email</label>
                    <input type="email" class="form-contact" id="email" placeholder="emailanda@email.com">
                    <img src="contact_us.png" width="240" alt="">
                </p>
                <p>
                    <label class="labelnew">Nama Lengkap</label>
                    <input type="text" class="form-contact" id="nama" placeholder="nama lengkap">
                </p>    
                <p>
                    <label class="labelnew">Pesan</label>
                    <textarea class="form-contact form-contact_p" rows="4" placeholder="apa yang ingin Anda sampaikan"></textarea>
                  <button type="submit" class="btn fourth"><strong>Kirim</strong></button>
                </p>
            </form>
            </div>
<?= $this->include('template/footer'); ?> 
<script type="text/javascript">
    function validasi(form) {
        if (form.nama.value=="") {
            alert('Nama harus di isi terlebih dahulu!');
            form.nama.focus();
            return false;
        } else if(form.email.value=="") {
            alert('Alamat email harus di isi terlebih dahulu!');
            form.email.focus();
            return false;
        }
    }
</script>