<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index()
    {
        // Dummy konten profil
        $profil = [
            'nama' => 'SDN Balas Klumprik',
            'alamat' => 'JL BALAS KLUMPRIK 125 ,Kel. BALAS KLUMPRIK, Kec. Wiyung, 60222',
            'telepon' => '031-7671224',
            'email' => 'sdnbalaslumprik@example.com',
            'sejarah' => 'SDN Balas Lumprik didirikan pada tanggal 12 Juli 1985 dengan tujuan memberikan pendidikan dasar yang berkualitas bagi anak-anak di Kecamatan Kedamean
            Kabupaten Gresik. Sejak awal berdiri, sekolah ini menekankan pada pengembangan karakter
            kedisiplinan, dan kecakapan akademik siswa, sehingga menjadi salah satu sekolah unggulan di wilayahnya.
            
            Seiring berjalannya waktu, SDN Balas Lumprik terus berinovasi dengan fasilitas pembelajaran modern
            tenaga pendidik yang kompeten, dan berbagai kegiatan ekstrakurikuler. 
            Sekolah ini juga menjalin kerja sama dengan berbagai pihak untuk meningkatkan kualitas pendidikan dan membentuk generasi muda yang siap menghadapi tantangan masa depan.',
            
            'visi' => 'Menjadi sekolah yang unggul dalam pendidikan dasar ...',
            'misi' => [
                'Menyelenggarakan pendidikan dasar berkualitas.',
                'Mengembangkan karakter dan kreativitas siswa.',
                'Melibatkan masyarakat dalam kegiatan sekolah.'
            ],
            'foto' => [
                asset('images/profil1.jpg'),
                asset('images/profil2.jpg')
            ]
        ];

        return view('public.profil', compact('profil'));
    }
}
