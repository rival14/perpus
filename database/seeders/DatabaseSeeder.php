<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "Valdano Esnaidar",
            'username' => 'dano',
            'jKelamin' => 'laki-laki',
            'alamat' => 'Perumahan Pesona Gading 2 Blok Ab11 No 2 A Kabputan Bekasi Kecamatan Cibitung Kelurahan Wanajaya',
            'telp' => '089691029906',
            'tLahir' => Carbon::parse('1998-04-04'),
            "email" => "valdanoesnaidar@gmail.com",
            "password" => bcrypt("12345"),
            'roles' => 'admin',
        ]);

        User::create([
            "name" => "Muhamad Rival",
            'username' => 'rival',
            'jKelamin' => 'laki-laki',
            'alamat' => 'Bekasi Pondok Ungu',
            'telp' => '089691029905',
            'tLahir' => Carbon::parse('2000-03-04'),
            "email" => "rival@gmail.com",
            "password" => bcrypt("12345"),
        ]);

        Kategori::create([
            "name" => "Komik",
            'slug' => 'komik',
        ]);

        Kategori::create([
            "name" => "Novel",
            'slug' => 'novel',
        ]);

        Buku::create([
            "kategoris_id" => 1,
            "judul" => "Naruto",
            "sinopsis" => '

            Tiga belas tahun sebelum cerita ini dimulai, seekor monster rubah ekor sembilan bernama Kyuubi menyerang Konoha, sebuah desa shinobi yang terletak di negara Api. Kekacauan terjadi di desa Konoha dan korban banyak berjatuhan….akhirnya ada seseorang yang berhasil menyegel Kyuubi itu ke tubuh Naruto, seseorang yang berhasil menyegel siluman rubah ekor itu dikenal sebagai Yondaime Hokage,Hokage ke 4 atau Namikaze Minato yang tidak lain adalah ayah dari Naruto. Begitu kuatnya Kyuubi sehingga penyegelan itu harus dibayar dengan kematian Yondaime Hokage sendiri.

            Tiga belas tahun kemudian, tersebutlah seorang remaja bernama Naruto Uzumaki yang sering membuat onar di desa Konoha. Naruto melakukan hal itu karena menginginkan perhatian dari penduduk desa yang menjauhinya karena rubah di tubuhnya. Naruto kemudian di tipu oleh seorang pengkhianat untuk mencuri gulungan rahasia dari Hokage ke 3 (Sarutobi Hokage), Naruto yang polos melakukan hal tersebut dan berhasil mencuri serta mempelajari jurus seribu bayangan. Setelah tahu bahwa dia dimanfaatkan Naruto menolak memberikan gulungan tersebut. Naruto kemudian ditolong oleh guru Iruka yang merupakan guru favorit Naruto. Dialah orang yang pertama kali mengakui keberadaan Naruto, karena dulu guru iruka pernah mengalami hal yang sama yaitu hidup tanpa orang tua, dan selalu diselimuti kesendirian.

            Naruto kemudian lulus menjadi genin, dan satu team dengan Sasuke dan Sakura. Team mereka disebut Team 7 yang diketuai oleh Kakashi. Saat menjalankan tes dengan Kakashi, Naruto, Sasuke dan Sakura nyaris tidak lulus, karena melihat kekompakan team antara Naruto dan Sasuke maka Kakashipun meluluskan mereka, Dengan alasan yang pernah pernah dikatakan temannya obito yaitu “orang yang tidak taat akan peraturan adalah sampah tapi orang yang membiarkan temannya menderita lebih hina dari pada sampah!!” Misi Naruto dan yang lain dimulai, yaitu mengawal seorang penduduk negeri Air. Naruto, Sakura, Sasuke dan Kakashi berhadapan dengan dua ninja kuat pelarian dari negeri kabut yaitu Haku dan Zabuza yang dikirim oleh seorang gangster kaya raya untuk menghentikan pembangunan jembatan oleh penduduk negeri air yang miskin. Pertarungan sengit terjadi, Haku hendak menyerang Naruto tetapi malah terkena Sasuke yang melindungi Naruto. Mengira Sasuke tewas Naruto marah serta chakra Kyuubi pun terlepas membuat Haku kewalahan. Kakashi yang hendak menghabisi Zabuza dengan jurus raikiri mengenai Haku yang melindungi Zabuza. Karena terharu atas pengorbanan Haku dan merasa dikhianati oleh pihak gangster yang malah mencoba membunuhnya, Zabuza pun mengamuk dan membunuh ketua gangster dengan kunai kecil di mulutnya. Akhir pertarungan Zabuza tewas disamping Haku. Penduduk negeri air pun menamai jembatan baru itu dengan nama jembatan Naruto sebagai tanda terima kasih dan penghargaan kepada Naruto yang telah membangkitkan semangat penduduk negeri air.

            Hokage 3 memanggil para Jounin Konoha untk mendiskusikan mengenai ujian chunin antara Konoha dan Sunagakure. Para Jonin sepakat untuk mengadakan ujian dan mengirim ninja – ninja pilihan mereka. Saat pendaftaran ujian Naruto, Sasuke dan Sakura bertemu dengan banyak saingan baru yang kuat antara lain, Gaara, Kankurou, Temari, Rock Lee, Neji Hyuga dan lain – lain. Ujian awal dimulai dengan tes tertulis, berkat Naruto sebagian besar peserta dapat lulus. Ujian kedua berupa pencarian gulungan di hutan. Diluar dugaan, Naruto, Sasuke dan Sakura diserang oleh salah satu sannin legendaris Orochimaru yang menyamar menjadi peserta. Orochimaru menandai Sasuke sebagai calon pengikutnya. Naruto dan yang lainya berhasil lolos berkat Kabuto yang banyak memberi petunjuk pada Naruto, Sasuke dan Sakura. Sementara itu, Kiba, Hinata dan ShinoGaara yang mengerikan, babak ketiga dimulai ! Babak ketiga dimulai, Kabuto tiba – tiba mengundurkan diri membuat Naruto keheranan. Pertarungan sengit dimulai antara Sakura versus Ino, Neji versus Hinata, Naruto versus Kiba, Garaa versus Rock Lee dan lain – lain. Pertarungan demi pertarungan berakhir dengan mengharukan, Naruto yang melihat kekejaman Neji saat melawan Hinata, dan hinata berjanji untuk mengalahkan Neji. Pertarungan Lee melawan Garaa adalah yang paling sengit dimana Lee terpaksa menggunakan serangan pamungkasnya ula renge, membuat Garaa terdesak dan nyaris gelap mata membunuh Lee apabila guru Guy tidak datang tepat waktu untuk menghentikannya. Sementara itu Kakashi memberikan pembatas segel yang diberikan Orochimaru pada Sasuke. Kakashi nyaris bertarung dengan Orochimaru yang tiba – tiba muncul. Disini juga terungkap bahwa Kabuto adalah mata – mata Orochimaru. Babak ketiga usai… menyaksikan kehebatan

            ',
            'slug' => 'naruto',
            'genre' => 'fantasy',
            'stock' => 40,
            'alamat' => 'A1',
            'penerbit' => 'Shounen Jump',
            'pengarang' => 'Musashi',
            'tPenerbit'=> '1998'
        ]);

        Buku::create([
            "kategoris_id" => 1,
            "judul" => "One Piece",
            "sinopsis" => "

            Anime One Piece menceritakan perjalanan Luffy, seorang anak laki-laki yang bertemu bajak laut hebat bernama Shanks, dimana Luffy terinspirasi oleh kehebatan Shanks dan bermimpi suatu hari nanti ingin menjadi bajak laut.

            Kemudian Shanks menjanjikan Luffy untuk reuni di masa depan dan memberikan topi jeraminya.

            Sepuluh tahun kemudian, Luffy yang sudah tumbuh dewasa akhirnya mendayung sendirian ke lautan dengan mimpi yang tak tergoyahkan 'Aku akan menjadi Raja Bajak Laut'.

            Dalam perjalanannya, Luffy mengumpulkan teman-teman yang menjadi kru bajak laut yang dapat diandalkan dan membentuk 'Bajak Laut Topi Jerami'.

            Pada episode 'Rute Hebat', Luffy dan kawan-kawan menghadapi cuaca dan makhluk yang luar biasa. Belum lagi musuh yang sangat kuat. Namun, para kru dapat mengatasi kesulitan dengan keyakinan dan ikatan yang kuat.

            Di Negara gurun Alabasta, Luffy bersama dengan kru bajak lautnya harus mengalahkan salah satu dari Tujuh Panglima Perang Laut, Buaya, dan berpetualangan di Pulau Langit yang legendaris.

            Luffy dan krunya melawan pemerintah dunia, mereka ingin menghancurkan basis peradilan yang tidak adil. Tim Bajak Laut Topi Jerami membuat keonaran demi kebaikan dunia dan menyebabkan insiden lain satu demi satu bermunculan.Para kru Bajak Laut Topi Jerami akhirnya dikejar oleh Angkatan Laut dan mereka harus berpencar.

            Luffy yang dalam perjalanannya mengetahui bahwa Ace, saudara ipar dan eksekutif Bajak Laut Shirohige telah ditangkap, akhirnya memutuskan untuk memasuki markas Angkatan Laut, Marine Ford

            ",
            'slug' => 'one-piece',
            'genre' => 'fantasy',
            'stock' => 45,
            'alamat' => 'A1',
            'penerbit' => 'Shounen Jump',
            'pengarang' => 'Musashi2',
            'tPenerbit'=> '1999'
        ]);


    }


}
