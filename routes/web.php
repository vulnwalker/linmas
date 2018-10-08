<?php

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
Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/logout', 'HomeController@logout')//;

Auth::routes();

Route::group(['roles' => 'master'], function () {
   Route::get('/home', 'HomeController@index')->name('home');

});
Route::group(['roles' => 'admin'], function () {
   Route::get('states/get/{id}', 'Linmas\\LinmasController@getStates');
   Route::get('getkelurahan/get/{id}', 'PosJaga\\PosJagaController@getStates');

   Route::get('admin', 'Admin\AdminController@index');

   Route::resource('wilayah/wilayah', 'Wilayah\\WilayahController');
   Route::get('/wilayah/insWilayah/', 'Wilayah\\WilayahController@insWilayah');
   Route::get('/wilayah/editWilayah/', 'Wilayah\\WilayahController@editWilayah');
   Route::resource('/wilayah/edit/', 'Wilayah\\WilayahController');
   Route::get('/wilayah/srcWilayah/', 'Wilayah\\WilayahController@srcWilayah');
   Route::get('/wilayah/delWilayah', 'Wilayah\\WilayahController@delWilayah');
   Route::get('/wilayah/srcKelDes/{id}', 'Wilayah\\WilayahController@srcKelDes');

   Route::resource('publikasi/publikasi', 'Publikasi\\PublikasiController');
   Route::get('/publikasi/insPublikasi/', 'Publikasi\\PublikasiController@insPublikasi');
   Route::get('/publikasi/editPublikasi/', 'Publikasi\\PublikasiController@editPublikasi');
   Route::get('/publikasi/srcPublikasi/', 'Publikasi\\PublikasiController@srcPublikasi');
   Route::get('/publikasi/delPublikasi/', 'Publikasi\\PublikasiController@delPublikasi');

   Route::resource('katLaporan/katLaporan', 'KatLaporan\\KatLaporanController');
   Route::get('/katLaporan/insKatLaporan/', 'KatLaporan\\KatLaporanController@insKatLaporan');
   Route::get('/katLaporan/editKatLaporan/', 'KatLaporan\\KatLaporanController@editKatLaporan');
   Route::get('/katLaporan/srcKatLaporan/', 'KatLaporan\\KatLaporanController@srcKatLaporan');
   Route::get('/katLaporan/delKatLaporan/', 'KatLaporan\\KatLaporanController@delKatLaporan');

   Route::resource('regu/regu', 'Regu\\ReguController');
   Route::get('/regu/insRegu/', 'Regu\\ReguController@insRegu');
   Route::get('/regu/delRegu', 'Regu\\ReguController@delRegu');
   Route::get('/regu/srcRegu', 'Regu\\ReguController@srcRegu');
   Route::get('/regu/editRegu', 'Regu\\ReguController@editRegu');

   Route::resource('jenisSapras/jenisSapras', 'JenisSapras\\JenisSaprasController');
   Route::get('/jenisSapras/insJnsSapras/', 'JenisSapras\\JenisSaprasController@insJnsSapras');
   Route::get('/jenisSapras/delJnsSapras', 'JenisSapras\\JenisSaprasController@delJnsSapras');
   Route::get('/jenisSapras/srcJnsSapras/', 'JenisSapras\\JenisSaprasController@srcJnsSapras');
   Route::resource('/jenisSapras/edit/', 'JenisSapras\\JenisSaprasController');
   Route::get('/jenisSapras/editJnsSapras/', 'JenisSapras\\JenisSaprasController@editJnsSapras');

   Route::resource('jabatan/jabatan', 'Jabatan\\JabatanController');
   Route::get('/jabatan/insJabatan/', 'Jabatan\\JabatanController@insJabatan');
   Route::get('/jabatan/srcJabatan/', 'Jabatan\\JabatanController@srcJabatan');
   Route::get('/jabatan/delJabatan', 'Jabatan\\JabatanController@delJabatan');
   Route::resource('/jabatan/edit/', 'Jabatan\\JabatanController');
   Route::get('/jabatan/editJabatan/', 'Jabatan\\JabatanController@editJabatan');

   Route::resource('username/username', 'Username\\UsernameController');
   Route::get('/username/srcKelDes/{id}', 'Username\\UsernameController@srcKelDes');
   Route::get('/username/insUser', 'Username\\UsernameController@insUser');
   Route::get('/username/delUsername', 'Username\\UsernameController@delUsername');
   Route::get('/username/srcUsername/', 'Username\\UsernameController@srcUsername');
   Route::resource('/username/edit/', 'Username\\UsernameController');
   Route::get('/username/editUser/', 'Username\\UsernameController@editUser');
   // Route::get('/username/srcKelDes/{id}', 'Username\\UsernameController@srcKelDes');

   Route::get('/gantiPass/gantiPass/{id}/edit/', 'GantiPass\\GantiPassController@edit');
   Route::get('/gantiPass/editPassword/', 'GantiPass\\GantiPassController@gantiPassword');

   Route::resource('adminis/adminis', 'Adminis\\AdminisController');
   Route::get('/adminis/srcKd_kelDes/{id}', 'Adminis\\AdminisController@srcKd_kelDes');
   Route::get('/adminis/insAdminis/', 'Adminis\\AdminisController@insAdminis');
   
   Route::resource('jenisLinmas/jenis-linmas', 'JenisLinmas\\JenisLinmasController');
   Route::get('jenisLinmas/jenis-linmas/create', 'JenisLinmas\\JenisLinmasController@create');
   Route::get('/jenisLinmas/delJnsLinmas/', 'JenisLinmas\\JenisLinmasController@delJnsLinmas');
   Route::get('/jenisLinmas/insJnsLinmas/', 'JenisLinmas\\JenisLinmasController@insJnsLinmas');
   Route::get('/jenisLinmas/srcJnsLinmas/', 'JenisLinmas\\JenisLinmasController@srcJnsLinmas');

   Route::resource('tugas/tugas', 'Tugas\\TugasController');
   Route::get('tugas/tugas/create', 'Tugas\\TugasController@create');
   Route::get('/tugas/insJnsTugas/', 'Tugas\\TugasController@insJnsTugas');
   Route::get('/tugas/srcTugas/', 'Tugas\\TugasController@srcTugas');
   Route::get('/tugas/delTugas/', 'Tugas\\TugasController@delTugas');

   Route::resource('jenisAset/jenisAset', 'JenisAset\\JenisAsetController');
   Route::get('jenisAset/jenisAset/create', 'JenisAset\\JenisAsetController@create');
   Route::get('jenisAset/delJnsAset', 'JenisAset\\JenisAsetController@delJnsAset');
   Route::get('jenisAset/srcJnsAset', 'JenisAset\\JenisAsetController@srcJnsAset');
   Route::get('jenisAset/insJnsAset', 'JenisAset\\JenisAsetController@insJnsAset');

   Route::resource('aset/aset', 'Aset\\AsetController');
   Route::get('aset/aset/create', 'Aset\\AsetController@create');

   Route::resource('admin/pages', 'Admin\PagesController');
   Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
       'index', 'show', 'destroy'
   ]);
   Route::resource('admin/settings', 'Admin\SettingsController');
   Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
   Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

   // Route::resource('kecamatan/kecamatan', 'kecamatan\\KecamatanController');

   // Route::resource('kelurahan/kelurahan', 'Kelurahan\\KelurahanController');
   Route::get('kelurahan/kelurahan/create', 'Kelurahan\\KelurahanController@myform');
   
   //Route For Linmas
   Route::resource('linmas/linmas', 'Linmas\\LinmasController');
   Route::get('linmas/refreshTable', 'Linmas\\LinmasController@refreshTable');
   Route::get('linmas/Delete', 'Linmas\\LinmasController@DeleteLinmas');
   //Route For Lokasi
   // Route::resource('lokasi/lokasi', 'Lokasi\\LokasiController');

   //Route For Aset Linmas
   // Route::resource('asetLimas/aset-limas', 'AsetLimas\\AsetLimasController');

   //Route For Penugasan
   Route::resource('penugasan/penugasan', 'Penugasan\\PenugasanController');

   //Route For Pendaftaran
   // Route::resource('pendaftaran/pendaftaran', 'Pendaftaran\\PendaftaranController');
   // Route::put('/pendaftaran/pendaftaran/linmas/{id}', 'Pendaftaran\\PendaftaranController@linmas');

   //Route For Possiskamling
   Route::resource('posJaga/pos-jaga', 'PosJaga\\PosJagaController');
   Route::get('posJaga/refreshTable', 'PosJaga\\PosJagaController@refreshTable');
   Route::get('posJaga/Delete', 'PosJaga\\PosJagaController@DeletePosJaga');

   Route::resource('Pengesahan/Pengesahan', 'Pengesahan\\PengesahanController');
   Route::get('tambah/no-sk', 'Pengesahan\\PengesahanController@TambahSk');
   Route::get('pengesahan/refreshTableSk', 'Pengesahan\\PengesahanController@refreshTableSk');
   Route::get('pengesahan/refreshTable', 'Pengesahan\\PengesahanController@refreshTable');
   Route::get('Delete/NoSk', 'Pengesahan\\PengesahanController@DeleteNoSk');
   Route::get('pengesahan/Create', 'Pengesahan\\PengesahanController@PengesahanCreate');
   Route::get('pengesahan/Batalkan', 'Pengesahan\\PengesahanController@PengesahanBatalkan');
   Route::get('pengesahan/getKode', 'Pengesahan\\PengesahanController@PengesahanGetKode');
   Route::get('pengesahan/getPengesahan', 'Pengesahan\\PengesahanController@GetPengesahan');
   
   Route::resource('sapras/sapras', 'Sapras\\SaprasController');
   Route::get('sapras/srcSapras', 'Sapras\\SaprasController@srcSapras');
   Route::get('sapras/delSapras', 'Sapras\\SaprasController@delSapras');
   

   Route::resource('pembinaan/pembinaan', 'Pembinaan\\PembinaanController');
   Route::get('pembinaan/pembinaan/create', 'Pembinaan\\PembinaanController@DataLinmas');
   Route::get('pembinaan/refreshTableLinmas', 'Pembinaan\\PembinaanController@refreshTableLinmas');
   Route::get('pembinaan/temp', 'Pembinaan\\PembinaanController@CreateToTmp');
   Route::get('pembinaan/pembinaan/create', 'Pembinaan\\PembinaanController@TmpLinmas');
   Route::get('pembinaan/refreshTableTmp', 'Pembinaan\\PembinaanController@refreshTableTmp');
   Route::get('Delete/tmplinmas', 'Pembinaan\\PembinaanController@DeleteTmplinmas');
   Route::get('pembinaan/TambahPembinaan', 'Pembinaan\\PembinaanController@TambahPembinaan');
   Route::get('pembinaan/Delete', 'Pembinaan\\PembinaanController@DeletePembinaan');
   Route::get('pembinaan/refreshPembinaan', 'Pembinaan\\PembinaanController@refreshPembinaan');
   Route::get('pembinaan/editTmp', 'Pembinaan\\PembinaanController@editTmp');



   Route::resource('ContentPublikasi/content-publikasi', 'ContentPublikasi\\ContentPublikasiController');
   Route::get('content-publikasi/Delete', 'ContentPublikasi\\ContentPublikasiController@DeletePublik');
   Route::get('content-publikasi/srcContent', 'ContentPublikasi\\ContentPublikasiController@srcContent');
   Route::get('content-publikasi/PDF/{id}', 'ContentPublikasi\\ContentPublikasiController@PDF');
   Route::get('contentPublikasi/srcKelDes/{id}', 'ContentPublikasi\\ContentPublikasiController@srcKelDes');

   Route::resource('pelaporan/pelaporans', 'Pelaporan\\PelaporansController');
   Route::get('pelaporan/Delete', 'Pelaporan\\PelaporansController@DeletePelaporan');
   Route::get('pelaporan/srcContent', 'Pelaporan\\PelaporansController@srcContent');
   Route::get('pelaporan/PDF/{id}', 'Pelaporan\\PelaporansController@PDF');

});

Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');



