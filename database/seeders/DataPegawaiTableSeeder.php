<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPegawaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('data_pegawai')->delete();

        DB::table('data_pegawai')->insert(array(
            0 =>
            array(
                'id_pegawai' => 1,
                'nama_lengkap' => 'Ahmad Fauzi',
                'jenis_kelamin' => 'Pria',
                'tanggal_lahir' => '1990-01-15',
                'alamat' => 'Jl. Merdeka No. 1, Jakarta',
                'no_telepon' => '081234567890',
                'email' => 'ahmad.fauzi@example.com',
                'jabatan' => 'Manager',
                'departemen' => 'Keuangan',
                'tanggal_masuk' => '2020-01-10',
                'gaji_pokok' => '8000000.00',
                'status_kepegawaian' => 'Tetap',
                'foto_profil' => 'url/foto1.jpg',
                'nik' => '1234567890123456',
                'npwp' => '1234567890',
            ),
            1 =>
            array(
                'id_pegawai' => 2,
                'nama_lengkap' => 'Ayu Lestari',
                'jenis_kelamin' => 'Wanita',
                'tanggal_lahir' => '1992-05-12',
                'alamat' => 'Jl. Sudirman No. 20, Bandung',
                'no_telepon' => '081234567891',
                'email' => 'ayu.lestari@example.com',
                'jabatan' => 'Staf',
                'departemen' => 'Keuangan',
                'tanggal_masuk' => '2021-03-12',
                'gaji_pokok' => '5000000.00',
                'status_kepegawaian' => 'Kontrak',
                'foto_profil' => 'url/foto2.jpg',
                'nik' => '1234567890123457',
                'npwp' => '1234567891',
            ),
            2 =>
            array(
                'id_pegawai' => 3,
                'nama_lengkap' => 'Budi Santoso',
                'jenis_kelamin' => 'Pria',
                'tanggal_lahir' => '1985-07-18',
                'alamat' => 'Jl. Diponegoro No. 32, Surabaya',
                'no_telepon' => '081234567892',
                'email' => 'budi.santoso@example.com',
                'jabatan' => 'Supervisor',
                'departemen' => 'Operasional',
                'tanggal_masuk' => '2019-07-25',
                'gaji_pokok' => '7000000.00',
                'status_kepegawaian' => 'Tetap',
                'foto_profil' => 'url/foto3.jpg',
                'nik' => '1234567890123458',
                'npwp' => '1234567892',
            ),
            3 =>
            array(
                'id_pegawai' => 4,
                'nama_lengkap' => 'Cici Indah',
                'jenis_kelamin' => 'Wanita',
                'tanggal_lahir' => '1993-03-22',
                'alamat' => 'Jl. Gajah Mada No. 45, Semarang',
                'no_telepon' => '081234567893',
                'email' => 'cici.indah@example.com',
                'jabatan' => 'Staf',
                'departemen' => 'Operasional',
                'tanggal_masuk' => '2020-06-15',
                'gaji_pokok' => '4500000.00',
                'status_kepegawaian' => 'Kontrak',
                'foto_profil' => 'url/foto4.jpg',
                'nik' => '1234567890123459',
                'npwp' => '1234567893',
            ),
            4 =>
            array(
                'id_pegawai' => 5,
                'nama_lengkap' => 'Doni Saputra',
                'jenis_kelamin' => 'Pria',
                'tanggal_lahir' => '1995-10-09',
                'alamat' => 'Jl. Imam Bonjol No. 3, Medan',
                'no_telepon' => '081234567894',
                'email' => 'doni.saputra@example.com',
                'jabatan' => 'Analyst',
                'departemen' => 'IT',
                'tanggal_masuk' => '2022-02-20',
                'gaji_pokok' => '6000000.00',
                'status_kepegawaian' => 'Magang',
                'foto_profil' => 'url/foto5.jpg',
                'nik' => '1234567890123460',
                'npwp' => '1234567894',
            ),
            5 =>
            array(
                'id_pegawai' => 6,
                'nama_lengkap' => 'Eka Sari',
                'jenis_kelamin' => 'Wanita',
                'tanggal_lahir' => '1988-11-02',
                'alamat' => 'Jl. Hayam Wuruk No. 15, Palembang',
                'no_telepon' => '081234567895',
                'email' => 'eka.sari@example.com',
                'jabatan' => 'Manager',
                'departemen' => 'HRD',
                'tanggal_masuk' => '2018-09-10',
                'gaji_pokok' => '8500000.00',
                'status_kepegawaian' => 'Tetap',
                'foto_profil' => 'url/foto6.jpg',
                'nik' => '1234567890123461',
                'npwp' => '1234567895',
            ),
            6 =>
            array(
                'id_pegawai' => 7,
                'nama_lengkap' => 'Fahmi Rizky',
                'jenis_kelamin' => 'Pria',
                'tanggal_lahir' => '1991-12-30',
                'alamat' => 'Jl. Pemuda No. 7, Yogyakarta',
                'no_telepon' => '081234567896',
                'email' => 'fahmi.rizky@example.com',
                'jabatan' => 'Staf',
                'departemen' => 'HRD',
                'tanggal_masuk' => '2021-08-22',
                'gaji_pokok' => '5200000.00',
                'status_kepegawaian' => 'Kontrak',
                'foto_profil' => 'url/foto7.jpg',
                'nik' => '1234567890123462',
                'npwp' => '1234567896',
            ),
            7 =>
            array(
                'id_pegawai' => 8,
                'nama_lengkap' => 'Gita Permata',
                'jenis_kelamin' => 'Wanita',
                'tanggal_lahir' => '1994-06-15',
                'alamat' => 'Jl. Wahidin No. 9, Makassar',
                'no_telepon' => '081234567897',
                'email' => 'gita.permata@example.com',
                'jabatan' => 'Staf',
                'departemen' => 'Pemasaran',
                'tanggal_masuk' => '2020-12-05',
                'gaji_pokok' => '4800000.00',
                'status_kepegawaian' => 'Tetap',
                'foto_profil' => 'url/foto8.jpg',
                'nik' => '1234567890123463',
                'npwp' => '1234567897',
            ),
            8 =>
            array(
                'id_pegawai' => 9,
                'nama_lengkap' => 'Hadi Wijaya',
                'jenis_kelamin' => 'Pria',
                'tanggal_lahir' => '1990-09-22',
                'alamat' => 'Jl. Pahlawan No. 23, Bali',
                'no_telepon' => '081234567898',
                'email' => 'hadi.wijaya@example.com',
                'jabatan' => 'Supervisor',
                'departemen' => 'Pemasaran',
                'tanggal_masuk' => '2019-04-01',
                'gaji_pokok' => '6800000.00',
                'status_kepegawaian' => 'Tetap',
                'foto_profil' => 'url/foto9.jpg',
                'nik' => '1234567890123464',
                'npwp' => '1234567898',
            ),
            9 =>
            array(
                'id_pegawai' => 10,
                'nama_lengkap' => 'Indra Gunawan',
                'jenis_kelamin' => 'Pria',
                'tanggal_lahir' => '1987-08-17',
                'alamat' => 'Jl. Kartini No. 10, Lampung',
                'no_telepon' => '081234567899',
                'email' => 'indra.gunawan@example.com',
                'jabatan' => 'Staf',
                'departemen' => 'Produksi',
                'tanggal_masuk' => '2021-05-12',
                'gaji_pokok' => '4700000.00',
                'status_kepegawaian' => 'Magang',
                'foto_profil' => 'url/foto10.jpg',
                'nik' => '1234567890123465',
                'npwp' => '1234567899',
            ),
            10 =>
            array(
                'id_pegawai' => 11,
                'nama_lengkap' => 'Yunita Pratiwi',
                'jenis_kelamin' => 'Wanita',
                'tanggal_lahir' => '1996-04-15',
                'alamat' => 'Jl. Sisingamangaraja No. 29, Malang',
                'no_telepon' => '081234567940',
                'email' => 'yunita.pratiwi@example.com',
                'jabatan' => 'Analis',
                'departemen' => 'Produksi',
                'tanggal_masuk' => '2022-08-19',
                'gaji_pokok' => '6300000.00',
                'status_kepegawaian' => 'Kontrak',
                'foto_profil' => 'url/foto50.jpg',
                'nik' => '1234567890123506',
                'npwp' => '1234567950',
            ),
        ));
    }
}