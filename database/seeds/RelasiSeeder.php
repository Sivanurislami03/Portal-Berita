<?php

use Illuminate\Database\Seeder;
use App\Wali;
use App\Dosen;
use App\Mahasiswa;
use App\Hobi;


class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        // Membuat Data Dosen
        $dosen = Dosen::create(array(
        	'nipd' => '12345678',
            'nama' => 'Abdul Musthafa'
        ));
        $this->command->info('Data Dosen Telah Di Isi!');

        // Membuat Data Mahasiswa
        $irsyal = Mahasiswa::create(array(
            'nama' => 'Syahrul',
            'nim' => '1010101',
            'id_dosen' => $dosen->id
        ));

        $ntut = Mahasiswa::create(array(
            'nama' => 'Entut Marsinah',
            'nim' => '1010102',
            'id_dosen' => $dosen->id
        ));

        $icih = Mahasiswa::create(array(
            'nama' => 'Icih Bersin',
            'nim' => '1010103',
            'id_dosen' => $dosen->id
        ));

        $this->command->info('Data Mahasiswa Berhasil Di Isi!');

        // Membuat Data Wali
        $dadang = Wali::create(array(
            'nama' => 'Dadang Peloy',
            'id_mahasiswa' => $irsyal->id
        ));

        $ucup = Wali::create(array(
            'nama' => 'Ucup Mambo',
            'id_mahasiswa' => $ntut->id
        ));

        $agus = Wali::create(array(
            'nama' => 'Agus Pepsodent',
            'id_mahasiswa' => $icih->id
        )); 
                      
        $this->command->info('Data Wali Berhasil Di Isi!');

        // Membuat Data Hobi
        $melukis_langit = Hobi::create(array('hobi' => 'Melukis Langit'));
        $mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
        $ambyar = Hobi::create(array('hobi' => 'Stalking Mantan'));

        $irsyal->hobi()->attach($melukis_langit->id);
        $irsyal->hobi()->attach($ambyar->id);
        $ntut->hobi()->attach($mandi_hujan->id);
        $icih->hobi()->attach($ambyar->id);

    }
}
