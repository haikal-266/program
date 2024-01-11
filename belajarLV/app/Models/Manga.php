<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Manga extends Model
{
    static $manga_list = [
        [
            "Judul" => "Tomodachi game",
            "Slug" => "Tomodachi-game",
            "Author" => "Mikoto Yamaguchi & Yuuki Satou",
            "Genre" => "Action, Drama, Psycology, Mystery",  
            "Sinopsis" => "Manga Tomodachi Game bercerita tentang Katagiri Yuichi percaya bahwa teman lebih penting daripada uang, tetapi dia juga tahu kesulitan tidak memiliki cukup dana. Dia bekerja keras untuk menabung untuk melanjutkan perjalanan sekolahnya karena dia telah berjanji kepada empat teman baiknya bahwa mereka semua akan pergi bersama. Namun, setelah uang kelas dikumpulkan, itu dicuri! Kecurigaan jatuh pada dua teman Yuichi, Sawaragi Shiho dan Shibe Makoto. Segera setelah itu, mereka berlima diculik dan bangun di ruangan aneh dengan karakter dari anime yang berumur pendek. Rupanya, salah satu dari mereka telah memasukkan mereka ke dalam permainan persahabatan untuk menjaga hutang besar mereka. Tetapi siapa itu, dan mengapa mereka memiliki hutang seperti itu? Mungkinkah mereka mencuri uang dari kelas untuk membayar masuk ke dalam permainan? Katagiri dan teman-teman baiknya harus berhasil dalam permainan psikologis yang akan menguji atau menghancurkan kepercayaan mereka satu sama lain."
        ],
        [
            "Judul" => "Kumo Desu Ga Nani Ka?",
            "Slug" => "Kumo-Desu-Ga-Nani-Ka?",
            "Author" => "Asahiro Kakashi & Okina Baba",
            "Genre" => "Action, Psycology, Fantasy, Monster",
            "Sinopsis" => "Manga Kumo desu ga, Nani ka? bercerita tentang Seorang gadis sekolah menengah terbangun dengan bingung ketika dia menemukan bahwa dia telah bereinkarnasi sebagai laba-laba Dengan munculnya predator yang tidak terduga, ia harus segera beradaptasi dengan gaya hidup laba-laba Saat ia terbiasa dengan kehidupan barunya, ia berubah dari tidak ambisius menjadi lebih ulet Ketika sebuah ledakan misterius menewaskan seluruh kelas yang penuh dengan siswa sekolah menengah, jiwa semua orang di kelas dipindahkan ke dunia fantasi dan bereinkarnasi. Sementara beberapa siswa bereinkarnasi sebagai pangeran atau anak ajaib, yang lain tidak diberkati. Tokoh kita, yang merupakan yang terendah di kelas, menemukan bahwa dia bereinkarnasi sebagai laba-laba !? Sekarang di bagian bawah rantai makanan, dia perlu beradaptasi dengan situasi saat ini dengan kemauan untuk hidup! Terjebak dalam labirin berbahaya yang dipenuhi monster, dimakan atau dimakan! Ini adalah kisah laba-laba yang melakukan apapun yang dia bisa untuk bertahan hidup!"
        ]
    ];

    public static function list()
    {
        return collect(self::$manga_list);
    }

}
