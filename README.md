# Lab11Web
<h1> Langkah-langkah Praktikum </h1>

<p>
<ol>
  <li><b>Persiapan</b></br>
Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4.

Berikut beberapa ekstensi yang perlu diaktifkan :
<ul>
  <li><b>php-json</b> ekstension untuk bekerja dengan JSON;
  <li><b>php-mysqlnd</b> native driver untuk MySQL;
  <li><b>php-xml</b> ekstension untuk bekerja dengan XML;
  <li><b>php-intl</b> ekstension untuk membuat aplikasi multibahasa;
  <li><b>libcurl</b> (opsional), jika ingin pakai Curl.
 </ul>
 
 Untuk mengaktifkan ekstensi tersebut, melalui <b>XAMPP Control Panel</b>, pada bagian Apache klik <b>Config -> PHP.ini</b>
 
 ![Screenshot_302](https://user-images.githubusercontent.com/24362384/122524297-29a48980-d042-11eb-8f0a-abd9a7dcb7ed.png)

 Pada bagian ekstension, hilangkan tanda ";" (titik koma) pada ekstension yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![Screenshot_303](https://user-images.githubusercontent.com/24362384/122525136-1f36bf80-d043-11eb-9003-16242ac20347.png)

  <li><b>Instalasi Codeigniter 4</b></br>
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan <b><i>composer</i></b>. Pada praktikum ini kita menggunakan cara manual.

  <ul>
  <li>Unduh <b>Codeigniter</b> dari website https://codeigniter.com/download
  <li>Ektrak file zip Codeigniter ke direktori <b>..htdcos/lab11_ci</b>.
  <li>Ubah nama direktori <b>framework-4.x.xx</b> menjadi <b>ci4</b>.
  <li>Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/
  </ul>  
  
  ![Screenshot_306](https://user-images.githubusercontent.com/24362384/122566219-82d7e180-d071-11eb-9acc-383e7674d831.png)


  <li><b>Menjalankan CLI (<i>Command Line Interface</i>)</b></br>
  Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt.
  
![Screenshot_308](https://user-images.githubusercontent.com/24362384/122569967-7c4b6900-d075-11eb-9b74-cc21b99f68c2.png)

Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/<b>htdocs/lab11_ci/ci4</b>/)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:

```php
php spark
```

![Screenshot_309](https://user-images.githubusercontent.com/24362384/122570394-e8c66800-d075-11eb-8cef-fb3ad0e5ba23.png)


  <li><b>Mengaktifkan Mode Debugging</b></br>
  Codeigniter 4 menyediakan fitur <b>debugging</b> untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.
  
  Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.
  
  ![Screenshot_310](https://user-images.githubusercontent.com/24362384/122571089-8f126d80-d076-11eb-8d68-41cb0549b1c6.png)

 Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable <b>CI_ENVIRONMENT</b> menjadi <b>development.</b>

![Screenshot_311](https://user-images.githubusercontent.com/24362384/122571476-f92b1280-d076-11eb-9db2-b05df131f3f2.png)

  <li><b>Struktur Direktori</b></br>
  Untuk lebih memahami Framework Codeigniter 4 perlu mengetahui struktur direktori dan file yang ada. Buka pada <b>Windows Explorer</b> atau dari <b>Visual Studio Code -> Open Folder.</b>
  
  Terdapat beberapa direktori dan file yang perlu dipahami fungsi dan kegunaannya.
  <ul>
    <li><b>.github</b> folder ini kita butuhkan untuk konfigurasi repo github, seperti konfigurasi untuk build dengan github action;
    <li><b>app</b> folder ini akan berisi kode dari aplikasi yang kita kembangkan;
    <li><b>public</b> folder ini berisi file yang bisa diakses oleh publik, seperti file index.php;
    <li><b>tests</b> folder ini berisi kode untuk melakukan testing dengna PHPunit, robots.txt, favicon.ico, ads.txt, dll;
    <li><b>vendor</b> folder ini berisi library yang dibutuhkan oleh aplikasi, isinya juga termasuk kode core dari system CI;
    <li><b>writable</b> folder ini berisi file yang ditulis oleh aplikasi. Nantinya, kita bisa pakai untuk menyimpan file yang di-upload, logs, session, dll.
  </ul>

Sedangkan file-file yang berada pada root direktori CI sebagai berikut.
  <ul>
    <li><b>.env</b> adalah file yang berisi variabel environment yang dibutuhkan oleh aplikasi;
    <li><b>.gitignore</b> adalah file yang berisi daftar nama file dan folder yang akan diabaikan oleh Git;
    <li><b>build</b> adalah script untuk mengubah versi codeigniter yang digunakan. Ada versi release (stabil) dan development (labil);
    <li><b>composer.json</b> adalah file JSON yang berisi informasi tentang proyek dan daftar library yang dibutuhkannya. File ini digunakan oleh Composer sebagai acuan;
    <li><b>composer.lock</b> adalah file yang berisi informasi versi dari libraray yang digunakan aplikasi;
    <li><b>license.txt</b> adalah file yang berisi penjelasan tentang lisensi Codeigniter;
    <li><b>phpunit.xml.dist</b> adalah file XML yang berisi konfigurasi untuk PHPunit;
    <li><b>README.md</b> adalah file keterangan tentang codebase CI. Ini biasanya akan dibutuhkan pada repo github atau gitlab;
    <li><b>spark</b> adalah program atau script yang berfungsi untuk menjalankan server, generate kode, dll.
  </ul>

![Screenshot_312](https://user-images.githubusercontent.com/24362384/122574484-e36b1c80-d079-11eb-844d-439eb7d81642.png)

Fokus kita pada folder <b>app</b>, dimana folder tersebut adalah kerja kita untuk membuat aplikasi. Dan folder <b>public</b> untuk menyimpan aset web seperti css, gambar, javascript, dll.

  <li><b>Memahami Konsep MVC</b></br>
  Codeigniter menggunakan konsep MVC. MVC meripakan singkatan dari <i>Model-View-Controller.</i> MVC merupakan konsep arsitektur yang umum digunakan dalam pengembangan aplikasi. Konsep MVC adalah memisahkan kode program berdasarkan logic proses, data, dan tampilan. Untuk logic proses diletakkan pada direktori Contoller, Objek data diletakkan pada direktori Model, dan desain tampilan diletakkan pada direktori View.
  
  Codeigniter menggunakan konsep pemrograman berorientasi objek dalam
mengimplementasikan konsep MVC.  

  <b>Model</b> merupakan kode program yang berisi pemodelan data. Data dapat berupa database ataupun sumber lainnya. 
  
  <b>View</b> merupakan kode program yang berisi bagian yang menangani terkait tampilan user interface sebuah aplikasi. didalam aplikasi web biasanya pasti akan berhubungan dengan html dan css. 
  
  <b>Controller</b> merupakaan kode program yang berkaitan dengan logic proses yang menghubungkan antara view dan model. Controller berfungsi untuk menerima request dan data dari user kemudian diproses dengan menghubungkan bagian model dan view.

  <li><b>Routing dan Controller</b></br>
Routing merupakan proses yang mengatur arah atau rute dari request untuk menentukan
fungsi/bagian mana yang akan memproses request tersebut. Pada framework CI4, routing bertujuan untuk menentukan Controller mana yang harus merespon sebuah request. Controller adalah class atau script yang bertanggung jawab merespon sebuah request. 

Pada Codeigniter, request yang diterima oleh file index.php akan diarahkan ke Router untuk kemudian oleh router tesebut diarahkan ke Controller.  

Router terletak pada file <b>app/config/Routes.php</b>

![Screenshot_313](https://user-images.githubusercontent.com/24362384/122575912-63de4d00-d07b-11eb-8130-d42b8e7810c8.png)

Pada file tersebut kita dapat mendefinisikan route untuk aplikasi yang kita buat.

Contoh:
```php
$routes->get('/', 'Home::index');
```
Kode tersebut akan mengarahkan rute untuk halaman home.

  <li><b>Membuat Route Baru</b></br>
  Tambahkan kode berikut di dalam <b>Routes.php</b>
  
```php
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```
Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.

```php
php spark routes
```

![Screenshot_315](https://user-images.githubusercontent.com/24362384/122576958-74db8e00-d07c-11eb-96b0-f8688617f6d3.png)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about

![Screenshot_314](https://user-images.githubusercontent.com/24362384/122577560-21b60b00-d07d-11eb-94d9-de9f60653d50.png)

Ketika diakses akan muncul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Controller yang sesuai dengan routing yang dibuat yaitu Controller Page.

  <li><b>Membuat Controller</b></br>
  Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama <b>page.php</b> pada direktori Controller kemudian isi kodenya seperti berikut.

```php
<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "Ini halaman About";
    }

    public function contact()
    {
        echo "Ini halaman Contact";
    }

    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
} 
```

Selanjutnya refresh kembali browser, maka akan ditampilkan hasilnya yaitu halaman sudah dapat diakses.

![Screenshot_316](https://user-images.githubusercontent.com/24362384/122578112-c2a4c600-d07d-11eb-9b46-12b989cb4a1a.png)

  <li><b>Auto Routing</b></br>
Secara default fitur <i>autoroute</i> pada Codeigniter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai <b>true</b> menjadi <b>false</b>.

```php
$route->setAutoRoute(true);
```

menjadi

```php
$route->setAutoRoute(false);
```

Tambahkan method baru pada <b>Controller Page</b> seperti berikut.

```php
public function tos()
{
    echo "ini halaman Term of Services";
}
```

Method ini belum ada pada <b>Routing</b>, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos

![Screenshot_319](https://user-images.githubusercontent.com/24362384/122580824-950d4c00-d080-11eb-95b0-5f9166473968.png)

  <li><b>Membuat View</b></br>
  Selanjutnya adalah membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view <b>(app/Views/about.php)</b> kemudian isi kodenya seperti berikut.
  
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $title; ?></h1>
    <hr>
    <p><?= $content; ?></p>
</body>
</html> 
```

Ubah <b>method about</b> pada class <b>Controller Page</b> menjadi seperti berikut:

```php
public function about()
{
    return view('about', [
        'title' => 'Halaman About',
        'content' => 'Ini adalah halaman about yang menjelaskan tentang isi
halaman ini.'
    ]);
}
```

Kemudian lakukan refresh pada halaman tersebut.

![Screenshot_320](https://user-images.githubusercontent.com/24362384/122581713-8d01dc00-d081-11eb-8303-e104959c0c15.png)

  <li><b>Membuat Layout Web dengan CSS</b></br>
  Pada dasarnya layout web dengan css dapat diimplementasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori <b>public</b>.
  
  Buat file css pada direktori <b>public</b> dengan nama <b>style.css</b> (copy file dari praktikum <b>lab4_layout</b>. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.
  
  ![Screenshot_321](https://user-images.githubusercontent.com/24362384/122582114-f8e44480-d081-11eb-8fad-0f7ebacd9a05.png)

  Kemudian buat folder <b>template</b> pada direktori <b>Views</b> kemudian buat file <b>header.php</b> dan <b>footer.php</b>
  
  File <b>app/Views/template/header.php</b>
  
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
    <div id="container">
    <header>
        <h1>Layout Sederhana</h1>
    </header>
    <nav>
        <a href="<?= base_url('/');?>">Home</a>
        <a href="<?= base_url('/artikel');?>">Artikel</a>
        <a href="<?= base_url('/about');?>" class="active">About</a>
        <a href="<?= base_url('/contact');?>">Kontak</a>
    </nav>
    <section id="wrapper">
        <section id="main"> 
```

File <b>app/Views/template/footer.php</b>

```php
        </section>
        <aside id="sidebar"> 
                    <div class="widget-box">
                <h3 class="title">Widget Header</h3>
                <ul>
                    <li><a href="#">Widget Link</a></li>
                    <li><a href="#">Widget Link</a></li>
                </ul>
            </div>
            <div class="widget-box">
                <h3 class="title">Widget Text</h3>
                <p>Vestibulum lorem elit, iaculis in nisl volutpat, malesuada tincidunt arcu. Proin in leo fringilla, vestibulum mi porta, faucibus felis. Integer pharetra est nunc, nec pretium nunc pretium ac.</p>
            </div>
        </aside>
    </section>
    <footer>
        <p>&copy; 2021 - Universitas Pelita Bangsa</p>
    </footer>
    </div>
</body>
</html> 
```

Kemudian ubah file <b>app/Views/about.php</b> seperti berikut.

```php
<?= $this->include('template/header'); ?>

<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<?= $this->include('template/footer'); ?>
```

Selanjutnya refresh tampilan pada alamat http://localhost:8080/about

![Screenshot_323](https://user-images.githubusercontent.com/24362384/122584120-2af6a600-d084-11eb-97a4-964d65905c04.png)


</li>
</ol>
</p>


  <h3>Pertanyaan dan Tugas</h3>
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.</br>
 </ol>
 
 <h3>Jawaban</h3>
 Hasilnya :
 <ol>
  <li>Halaman Home</br>
  
  ![Screenshot_322](https://user-images.githubusercontent.com/24362384/122585006-34344280-d085-11eb-9be5-152e3a8004ba.png)

  <li>Halaman Artikel</br>
  
  ![Screenshot_324](https://user-images.githubusercontent.com/24362384/122586334-bd984480-d086-11eb-9f24-804cb62f6173.png)

  <li>Halaman Kontak</br>
  
  ![Screenshot_325](https://user-images.githubusercontent.com/24362384/122588486-5def6880-d089-11eb-81c0-3c2eedaa10dc.png)

</li>
</ol>

# Praktikum 12
<h1> Langkah-langkah Praktikum </h1>
<p>
<ol>
  <li><b>Membuat Database</b></br>

```php
CREATE DATABASE lab_ci4;
```

  <li><b>Membuat Tabel</b></br>
  
```php
CREATE TABLE artikel (
  id INT(11) auto_increment,
  judul VARCHAR(200) NOT NULL,
  isi TEXT,
  gambar VARCHAR(200),
  status TINYINT(1) DEFAULT 0,
  slug VARCHAR(200),
  PRIMARY KEY(id)
); 
```

  <li><b>Konfigurasi koneksi database</b></br>
  Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Konfigurasi dapat dilakukan dengan dua cara, yaitu pada file <b>app/config/database.php</b> atau menggunakan file <b>.env</b>. Pada praktikum ini kita gunakan konfigurasi pada file .env.
  
![Screenshot_329](https://user-images.githubusercontent.com/24362384/123217498-d4122600-d4f4-11eb-8dd9-5788183e3f35.png)

  <li><b>Membuat Model</b></br>
  Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori <b>app/Models</b> dengan nama <b>ArtikelModel.php</b>
  
```php
<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar'];

}
```

  <li><b>Membuat Controller</b></br>
  Buat Controller baru dengan nama <b>Artikel.php</b> pada direktori <b>app/Controllers</b>
  
```php
<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index() 
    { 
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel', 'title'));
    }
}     
```

  <li><b>Membuat View</b></br>
  Buat direktori baru dengan nama <b>Artikel</b> pada direktori <b>app/views</b>, kemudian buat file baru dengan nama <b>index.php</b>
  
```php
<?= $this->include('template/header'); ?>

<?php if($artikel): foreach($artikel as $row): ?>
<article class="entry">
    <h2<a href="<?= base_url('/artikel/' . $row['slug']);?>"><?=
$row['judul']; ?></a>
</h2>
    <img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?=
$row['judul']; ?>">
    <p><?= substr($row['isi'], 0, 200); ?></p>
</article>
<hr class="divider" />
<?php  endforeach; else: ?>
<article class="entry">
    <h2>Belum ada data.</h2>
</article>
<?php endif; ?>

<?= $this->include('template/footer'); ?> 
```

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

![Screenshot_328](https://user-images.githubusercontent.com/24362384/123216331-99f45480-d4f3-11eb-94d3-ca4b02a48380.png)

Belum ada data yang ditampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.

```php
INSERT INTO artikel (judul, isi, slug) VALUE 
('Artikel pertama', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri
percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi
standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak
dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah
buku contoh huruf.', 'artikel-pertama'), 
('Artikel kedua', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah
teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari
era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih
dari 2000 tahun.', 'artikel-kedua'); 
```

![Screenshot_332](https://user-images.githubusercontent.com/24362384/123428555-23894c80-d5f0-11eb-9d9b-f96bc4755274.png)

  <li><b>Membuat Tampilan Detail Artikel</b></br>
  Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada <b>Controller Artikel</b> dengan nama <b>view()</b>.
  
```php
 public function view($slug)
 {
      $model = new ArtikelModel();
      $artikel = $model->where([
      'slug' => $slug
      ])->first();
      
      // Menampilkan error apabila data tidak ada.
      if (!$artikel)
      {
          throw PageNotFoundException::forPageNotFound();
      }
    $title = $artikel['judul'];
    return view('artikel/detail', compact('artikel', 'title'));
 }
```

  <li><b>Membuat View Detail</b></br>
  Buat view baru untuk halaman detail dengan nama </b>app/views/artikel/detail.php</b>.
  
```php
<?= $this->include('template/header'); ?>

<article class="entry">
   <h2><?= $artikel['judul']; ?></h2>
   <img src="<?= base_url('/gambar/' . $artikel['gambar']);?>" alt="<?=$artikel['judul']; ?>">
   <p><?= $row['isi']; ?></p>
</article>

<?= $this->include('template/footer'); ?>
```

  <li><b>Membuat Routing untuk artikel detail</b></br>
  Buka kembali file <b>app/config/Routes.php</b>, kemudian tambahkan routing untuk artikel detail.
  
```php
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
```

![Screenshot_333](https://user-images.githubusercontent.com/24362384/123430951-f0948800-d5f2-11eb-83c8-bdcfc8c9fe52.png)

  <li><b>Membuat Menu Admin</b></br>
  Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada <b>Controller Artikel</b> dengan nama <b>admin_index()</b>.
  
```php
 public function admin_index()
 {
      $title = 'Daftar Artikel';
      $model = new ArtikelModel();
      $artikel = $model->findAll();
      return view('artikel/admin_index', compact('artikel', 'title'));
 }
 ```
 
 Selanjutnya buat view untuk tampilan admin dengan nama <b>admin_index.php</b>.
 
 ```php
<?= $this->include('template/admin_header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
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
            <a class="btn" href="<?= base_url('/admin/artikel/edit/' .$row['id']);?>">Ubah</a>
            <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' .$row['id']);?>">Hapus</a>
        </td>
    </tr>
    <?php  endforeach; else: ?>
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

<?= $this->include('template/admin_footer'); ?> 
```

Tambahkan routing untuk menu admin seperti berikut:

```php
    $routes->group('admin', function($routes) {
      $routes->get('artikel', 'Artikel::admin_index');
      $routes->add('artikel/add', 'Artikel::add');
      $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
      $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
    });
```

Akses menu admin dengan url http://localhost:8080/admin/artikel

![Screenshot_334](https://user-images.githubusercontent.com/24362384/123440345-dfe90f80-d5fc-11eb-8984-77787ed8fad4.png)

  <li><b>Menambah Data Artikel</b></br>
  Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>add()</b>/
  
```php
 public function add()
    public function add() 
    {
        // validasi data.
        $validation =  \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $artikel = new ArtikelModel();
            $artikel->insert([
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'slug' => url_title($this->request->getPost('judul')),
            ]);
            return redirect('admin/artikel');
        }
        $title = "Tambah Artikel";
        return view('artikel/form_add', compact('title'));
    } 
 ```
 
 Kemudian buat view untuk form tambah dengan nama form <b>add.php</b>
 
 ```php
 <?= $this->include('template/admin_header'); ?>

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
```

![Screenshot_335](https://user-images.githubusercontent.com/24362384/123442269-e9737700-d5fe-11eb-8b40-d87f5f362019.png)

  <li><b>Mengubah Data</b></br>
  Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>edit()</b>.
  
```php
    public function edit($id) 
    {
        $artikel = new ArtikelModel();

        // validasi data.
        $validation =  \Config\Services::validation();
        $validation->setRules(['judul' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $artikel->update($id, [
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
            ]);
            return redirect('admin/artikel');
        }

        // ambil data lama
        $data = $artikel->where('id', $id)->first();
        $title = "Edit Artikel";
        return view('artikel/form_edit', compact('title', 'data'));
    } 
 ```
 
 Kemudian buat view untuk form tambah dengan nama <b>form_edit.php</b>.
 
```php
<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="judul" value="<?= $data['judul'];?>" >
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"><?=
$data['isi'];?></textarea>
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?> 
```

![Screenshot_336](https://user-images.githubusercontent.com/24362384/123442768-6c94cd00-d5ff-11eb-9a70-cad19714f32a.png)

  <li><b>Menghapus Data</b></br>
  Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>delete()</b>.
  
```php
    public function delete($id) 
    {
        $artikel = new ArtikelModel();
        $artikel->delete($id);
        return redirect('admin/artikel');
    } 
 ```
 
 </li>
</ol>
  <h3>Pertanyaan dan Tugas</h3>
Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.</br>
 
 <h3>Jawaban</h3>
 Hasilnya :</br>
 Penambahan link navigasi Artikel :
 
 ![Screenshot_338](https://user-images.githubusercontent.com/24362384/123496070-81e61780-d650-11eb-9533-71ab2bccd115.png)

Penambahan link navigasi tambah artikel : 

 ![Screenshot_339](https://user-images.githubusercontent.com/24362384/123496075-8a3e5280-d650-11eb-8754-925b9c9670a0.png)

# Praktikum 13
<h1> Langkah-langkah Praktikum </h1>
<p>
<ol>
  <li><b>Membuat Tabel User</b></br>
  
```php
CREATE TABLE user (
 id INT(11) auto_increment,
 username VARCHAR(200) NOT NULL,
 useremail VARCHAR(200),
 userpassword VARCHAR(200),
 PRIMARY KEY(id)
);
```

<li><b>Membuat Model User</b></br>
Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori <b>app/Models</b> dengan nama <b>UserModel.php</b>.

```php
<?php
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
 {
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['username', 'useremail', 'userpassword'];
}
```

<li><b>Membuat Controller User</b></br>
Buat Controller baru dengan nama <b>User.php</b> pada direktori <b>app/Controllers</b>.
Kemudian tambahkan method <b>index()</b> untuk menampilkan daftar user, dan method <b>login()</b> untuk proses login.

```php
<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index() 
    {
        $title = 'Daftar User';
        $model = new UserModel();
        $users = $model->findAll();
        return view('user/index', compact('users', 'title'));
    }

    public function login()
    {
        helper(['form']);
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        if (!$email)
        {
            return view('user/login');
        }

        $session = session();
        $model = new UserModel();
        $login = $model->where('useremail', $email)->first();
        if ($login)
        {
            $pass = $login['userpassword'];
            if (password_verify($password, $pass))
            {
                $login_data = [ 
                    'user_id' => $login['id'],
                    'user_name' => $login['username'],
                    'user_email' => $login['useremail'],
                    'logged_in' => TRUE,
                ];
                $session->set($login_data);
                return redirect('admin/artikel');
            }
            else 
            {
                $session->setFlashdata("flash_msg", "Password salah.");
                return redirect()->to('/user/login');
            }
        }
        else
        {
            $session->setFlashdata("flash_msg", "email tidak terdaftar.");
            return redirect()->to('/user/login');
        }
    }
} 
```

<li><b>Membuat View Login</b></br>
Buat direktori baru dengan nama <b>user</b> pada direktori <b>app/views</b>, kemudian buat file baru dengan nama <b>login.php</b>.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
    <div id="login-wrapper">
            <h1>Sign In</h1>
            <?php if(session()->getFlashdata('flash_msg')):?>
                <div class="alert alert-danger"><?=
session()->getFlashdata('flash_msg') ?></div>
            <?php endif;?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="InputForEmail" class="form-label">Email
address</label>
                    <input type="email" name="email" class="form-control"
id="InputForEmail" value="<?= set_value('email') ?>">
                </div> 
                <div class="mb-3">
                    <label for="InputForPassword"
class="form-label">Password</label>
                    <input type="password" name="password"
class="form-control" id="InputForPassword">
                </div>
                <button type="submit" class="btn
btn-primary">Login</button>
            </form>
    </div>
</body>
</html>
```

<li><b>Membuat Database Seeder</b></br>
Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut.

```php
php spark make:seeder UserSeeder
```

Selanjutnya, buka file <b>UserSeeder.php</b> yang berada di lokasi direktori <b>app/Database/Seeds/UserSeeder.php</b> kemudian isi dengan kode berikut.

```php
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'admin',
            'useremail' => 'admin@email.com',
            'userpassword' => password_hash('admin123', PASSWORD_DEFAULT),
        ]);
    }
}
```

Selanjutnya buka kembali CLI dan ketik perintah berikut:

```php
php spark db:seed UserSeeder
```

<li><b>Uji Coba Login</b></br>
Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

![Screenshot_349](https://user-images.githubusercontent.com/24362384/124296995-c871cf80-db84-11eb-8e25-dd88eb82b408.png)

<li><b>Menambahkan Auth Filter</b></br>
Selanjutnya membuat filter untuk halaman admin. Buat file baru dengan nama <b>Auth.php</b> pada direktori <b>app/Filters</b>.

```php
<?php namespace App\Filters;
 
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
 
class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // jika user belum login
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to('/user/login');
        }
    }
 
    public function after(RequestInterface $request, ResponseInterface
$response, $arguments = null)
    {
        // Do something here
    }
} 
```

Selanjutnya buka file <b>app/Config/Filters.php</b> tambahkan kode berikut.

```php
'auth' => App\Filters\Auth::class
```

![Screenshot_350](https://user-images.githubusercontent.com/24362384/124297725-8e54fd80-db85-11eb-843a-89c03ab9e89f.png)

Selanjutnya buka file <b>app/Config/Routes.php</b> dan sesuaikan kodenya.

![Screenshot_351](https://user-images.githubusercontent.com/24362384/124297898-ceb47b80-db85-11eb-9cca-86d059df0b54.png)

<li><b>Percobaan Akses Menu Admin</b></br>
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses, maka akan dimunculkan halaman login.

![Screenshot_353](https://user-images.githubusercontent.com/24362384/124300405-bd20a300-db88-11eb-85d1-b5ed9f6fecd0.png)

<li><b>Fungsi Logout</b></br>
Tambahkan method logout pada Controller User seperti berikut:

```php
    public function logout() 
    {
        session()->destroy();
        return redirect()->to('/user/login');
    }
```
  </li>
  </ol>
  
 <h3>Pertanyaan dan Tugas</h3>
Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.</br>
 
 <h3>Jawaban</h3>
Program sudah lengkap dan dapat berjalan dengan semestinya.

