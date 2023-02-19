<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'kode' => 'Admin1',
            // 'nis'    => '203910',
            'fullname'    => 'Admin',
            'username' => 'admin',
            'password'    => Hash::make("password"),
            // 'kelas'    => 'XII-RPL',
            // 'alamat' => 'JL.BUNGA SARI',
            // 'verif'    => '',
            'role' => 'admin',
            'join_date'    => '2023-01-06',
            // 'terakhir_login' => '2023-01-06',
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'AA002',
            'nis'    => '0046378',
            'fullname'    => 'User',
            'username' => 'user',
            'password'    => Hash::make("password"),
            'kelas'    => 'XII - RPL',
            'alamat' => 'JL. Bakti Mulya',
            // 'verif'    => '',
            'role' => 'user',
            'join_date'    => '2023-01-06',
            // 'terakhir_login' => '',
            'foto' => '',
        ]);

        //KATEGORI
        Kategori::create([
            'kode' => 'aksi',
            'nama' => 'aksi',
        ]);

        //PENERBIT
        Penerbit::create([
            'kode' => '1-00-839289-0',
            'nama'    => 'spoon',
            // 'verif' => 'intermedia',
        ]);

        //BUKU
        Buku::create([
            'judul' => 'Who Made Me A Princess',
            'kategori_id' => '1',
            'penerbit_id' => '1',
            'pengarang' => 'Spoon',
            'tahun_terbit' => '2018',
            'isbn' => '',
            'j_buku_baik' => '10',
            'j_buku_rusak' => '1',
            'foto' => '',
        ]);

        //PEMINJAMAN
        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '1',
            'tgl_peminjaman' => '2023-01-06',
            'tgl_pengembalian' => '2023-01-12',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'rusak',
            'denda' => '20000',
        ]);

        //PESAN
        Pesan::create([
            'penerima_id' => '1',
            'pengirim_id' => '2',
            'judul' => 'Pengembalian Buku',
            'isi' => 'Buku akan saya kembalikan segera',
            'status' => 'terkirim',
            'tgl_kirim' => '2023-01-21',
        ]);

        //IDENTITAS
        Identitas::create([
            'nama_app'    => 'PERPUS SMKN 10 JAKARTA',
            'alamat_app' => 'JL. SMEAN 6, Cawang, Kramat Jati',
            'email_app'    => 'naauraastn113@gmail.com',
            'nomor_hp'    => '089606844365',
            'foto' => '',
        ]);
    }
}
