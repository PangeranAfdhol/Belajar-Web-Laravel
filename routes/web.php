<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        "title" => "profil"
    ]);
});

Route::get('/about', function () {
    return view('about', [
         "title" => 'About',
         "name" => "Pangeran Afdhol",
         "email" => "afdholpangeran@gmail.com",
        "image" => "img/pangeran2.jpg"]);
});



Route::get('/berita', function () {
    $beritapost = [
        [
        "title" => "Mengapa Memilih Teknik Informatika?",
        "slug" => "judul-post-pertama",
        "author" => "Teknik Informatika",
        "body" => "Peminat jurusan Teknik Informatika setiap tahunnya selalu meningkat. Bahkan, fakultas kedokteran yang cukup lama bertengger sebagai jurusan terfavorit pun mulai tergeser. Di salah satu perguruan tinggi terbaik di Bandung contohnya, perbandingan jumlah calon mahasiswa yang mendaftar dan diterima untuk jurusan ini adalah 100:1. Artinya, dari 100 pendaftar, hanya 1 orang yang akan diterima. Persaingan yang sangat ketat, bukan?Namun, hal ini sangat dapat dimaklumi. Tidak percaya? Ini beberapa alasan mengapa jurusan Teknik Informatika kian laris manis diburu. "
    ],
    [
        "title" => "Maraknya Game Online di Kalangan Generasi Milenial, Bagaimana Dampaknya?",
        "slug" => "judul-post-kedua",
        "author" => "Game Online",
        "body" => " Di zaman milenial ini, maraknya penggunaan alat elektronik seperti HP, PC, laptop, dan lainnya, banyak digunakan untuk berbagai macam kebutuhan. Teknologi informasi yang terus berkembang setiap saat ini, terus membawa perubahan dan memberi dampak terhadap kehidupan sosial. Salah satunya, besarnya pengaruh game online pada generasi saat ini. Game online adalah sebuah program permainan yang tersambung oleh jaringan yang bisa kita mainkan kapanpun, dimanapun dan dapat dimainkan bersamaan berkelompok di seluruh dunia dan permainan itu sendiri menampilkan gambar-gambar menarik seperti yang diinginkan, yang didukung oleh komputer"
    ]
    ];
    return view('berita', [
        "title" => "Berita",
        "berita" => $beritapost
    ]);
});


//halaman single berita

Route::get('berita/{slug}', function ($slug) {
    $beritapost = [
        [
        "title" => "Mengenal Jurusan Teknik Informatika",
        "slug" => "judul-post-pertama",
        "author" => "Teknik Informatika",
        "body" => "Teknik Informatika merupakan salah satu jurusan pendidikan tingkat perguruan tinggi yang mempelajari serta menerapkan prinsip-prinsip ilmu komputer dan analisis matematis dalam perancangan, pengujian, pengembangan, dan evaluasi sistem operasi, perangkat lunak (software), dan kinerja komputer. Dalam kata lain, bidang studi ini akan melakukan pembahasan terkait pengolahan data dengan memanfaatkan teknologi komputer yang menggunakan prinsip dan proses logika.Bila memutuskan untuk memilih jurusan Teknik Informatika, maka kamu akan cukup banyak berkutat dengan pemrograman (programming), pengembangan perangkat lunak (software), dan teknologi jaringan komputer. Pada dasarnya, kamu akan menjadi penerjemah suatu ide yang harus dituangkan dalam bentuk digital menggunakan bahasa pemrograman tertentu. Dalam prosesnya, kamu akan banyak membuat flowchart alias bagan alur bagaimana sebuah sistem dapat berjalan sesuai dengan fungsi dan logikanya. Tentu saja, ketelitian dan keuletan menjadi karakter paling dasar yang harus kamu miliki."
    ],
    [
        "title" => "Maraknya Game Online di Kalangan Generasi Milenial, Bagaimana Dampaknya?",
        "slug" => "judul-post-kedua",
        "author" => "Game Online",
        "body" => "Di era digital saat ini, gaming mobile menjadi favorit para gaming. Hal ini sejalan dengan tingginya pengguna smartphone di seluruh dunia termasuk Indonesia. Saat ini game online sedang merebak di masyarakat terutama di kalangan remaja. Bahkan permainan ini pun bisa di akses semua kalangan baik oleh remaja, orangtua, bahkan anak - anak. Semua permainan yang di tawarkan dalam game online memberikan hiburan yang dapat membuat para gamers terdorong untuk memainkannya lagi dan lagi atau kecanduan. Jenis permainan di dunia maya ini bisa dijangkau oleh semua orang di seluruh dunia tanpa batas dan waktu. Lain halnya dengan permainan tradisional yang cenderung mengandalkan otot-otot tubuh.Game online, lebih banyak menggunakan kemampuan otak dalam berpikir dan kelincahan jari jemari tangan dalam menekan tombol-tombol stick pengatur. Data Newzoo menunjukkan jumlah pengguna smartphone di seluruh dunia mencapai lebih dari 3,3 miliar selama 2019. Total jumlah pemain game mobile di seluruh dunia mencapai 2,3 miliar. Di Indonesia sendiri pengguna smartphone mencapai 82 juta lebih. Pemain game mobile di Indonesia mencapai lebih dari 52 juta. Indonesia menduduki rank global ke 17 dengan jumlah pemain game mobile terbanyak. Indonesia juga menyumbang sebesar USD 624 juta atau setara Rp 8,7 triliun untuk mobile gaming selama 2019."
    ]
    ];

    $new_berita = [];
    foreach($beritapost as $beritapost) {
        if ($beritapost["slug"] === $slug) {
            $new_berita = $beritapost;
        }
    }
    return view('beritapost', [
         "title" => 'Berita',
         "berita" => $new_berita
    ]);
});



