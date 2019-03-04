
<?php $__env->startSection('title'); ?>
  Petunjuk Pengunaan Aplikasi Aplulkat KITE
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Petunjuk Pengunaan Aplikasi Aplulkat KITE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
  .modal-content {
    height: auto;
    min-height: 30%;
    border-radius: 0;
    width: 100%;
    margin: 2%;
    text-align: left;
}
.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 0%;
    border-top: 1px solid #e9ecef;
    padding-right: 1%;
}

.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
    padding-bottom: 0%;
}
.verical-navs .nav-stacked .nav-link.active.show:before, .verical-navs .nav-stacked .nav-link.active:before, .verical-navs .nav-stacked .nav-link.active:hover:before {
    border-right: 11px solid #d03e3e;
    border-top: 11px solid transparent;
    border-bottom: 11px solid transparent;
    content: "";
    display: inline-block;
    position: absolute;
    right: 0;
    bottom: 20px;
}

.nav-tabs .nav-item .nav-link.active, .nav-tabs .nav-item .nav-link:hover {
    color: #007bff;
}
/*img{
  border: 1px solid #0095ff;
}*/
</style>
 <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
 <div id="loadingData">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('bantuan/imageviewer.css')); ?>">
 </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header" style="margin-top: -1%;">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="card-title">Petunjuk Pengunaan Aplikasi Aplulkat KITE</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-2" >
                            <a href="<?php echo e(asset('bantuan/panduan.pdf')); ?>" download="BukuPetunjukAplikasi" class="btn btn-primary btn-sm" style="float: right;"> <i class="fal fa-download"></i> Download Buku Petunjuk</a>
                        </div>
                    </div>
                    <hr style="margin-top: 0%;margin-bottom: 0%;">
                    </div>
                    <div class="card-body" style="padding: 15px 15px 10px !important;">

                <div class="row">
                  <div class="col-lg-2 col-md-5 col-sm-4 col-6">
                    <div class="nav-tabs-navigation verical-navs" style="text-align: left !important;padding: 0px;">
                      <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs flex-column nav-stacked" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" href="#info" role="tab" data-toggle="tab">Pendataan</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#description" role="tab" data-toggle="tab">Pengesahan</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#concept" role="tab" data-toggle="tab">Sarana Prasarana</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#support" role="tab" data-toggle="tab">Pos Kamling</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#extra" role="tab" data-toggle="tab">Pembinaan</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#publikasi" role="tab" data-toggle="tab">Publikasi</a>
                          </li>
<!--                           <li class="nav-item">
                            <a class="nav-link" href="#administrasi" role="tab" data-toggle="tab">Administrasi</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#user" role="tab" data-toggle="tab">User</a>
                          </li> -->
                          <li class="nav-item">
                            <a class="nav-link" href="#pelaporan" role="tab" data-toggle="tab">Pelaporan</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-10 col-md-7 col-sm-8 col-6">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="info">
                        <div id="image-gallery-1" class="cf">
<div>  
</div>
    <div>
      <h4>
        MODUL PENDATAAN
      </h4>
      <h6>
        1.&#xa0;&#xa0;&#xa0; Fungsi Menu Pada Modul Pendataan antara lain :
      </h6>
      <p>
        <img src="<?php echo e(asset('bantuan/pendataan/index pendataan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pendataan/index pendataan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
      </p>
      <h6>
        1.1&#xa0; Fungsi Filter
      </h6>
      <p>
         <img src="<?php echo e(asset('bantuan/pendataan/filter.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pendataan/filter.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
      </p>
      <p>
        &#xa0;Berfungsi untuk meng filter data pendataan berdasarkan Kecamatan, Kelurahan / Desa yang di inginkan.
      </p>
      <p>
        Cara untuk melakukan filter :
      </p>
      <ol>
        <li>
          Pilih salah satu Kecamatan yang tersedia.
        </li>
        <li>Pilih Kelurahan / Desa.
         </li>
        <li>Isi data / halaman untuk membatasi data list yang akan di munculkan, namun secara default akan memunculkan 25 data.
         </li>
        <li>
          TAMPILKAN.<br />
        </li>
      </ol>
      <h6>
        1.2&#xa0; Fungsi Tools
      </h6>
      <p>
                 <img src="<?php echo e(asset('bantuan/pendataan/tools.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pendataan/tools.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
      </p>
      <p>
        <strong>1.2.1</strong>&#xa0;&#xa0;&#xa0;&#xa0; <strong>Tombol Baru</strong>
      </p>
      <p>
        Berfungsi untuk menginput data baru di Pendataan
      </p>
      <p>
                 <img src="<?php echo e(asset('bantuan/pendataan/create pendataan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pendataan/create pendataan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
      </p>
      <p>Cara melakukan baru :
       </p>
      <ol>
        <li>
          Tekan tombol baru.
        </li>
        <li>Isi data dengan lengkap.
         </li>
        <li>Tekan tombol simpan jika sudah selesai, atau tekan tombol batal untuk kembali.
         </li>
      </ol>
      <h6>
        1.2.2&#xa0;&#xa0; Tombol Edit
      </h6>
      <p>
        Berfungsi untuk <em>edit</em> data Pendataan apabila ada kesalahan dalam nama, alamat DLL. Untuk melakukan <em>edit</em> :
      </p>
      <ol>
        <li>/ Ceklis salah satu data yang akan di  <em>edit.</em>
        </li>
        <li>
          Lalu tekan tombol <em>edit.</em>
        </li>
      </ol>
      <p>
                 <img src="<?php echo e(asset('bantuan/pendataan/edit pendataan step 1.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pendataan/edit pendataan step 1.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
      </p>
      <h6>
        1.2.3&#xa0;&#xa0; Tombol Hapus
      </h6>
      <p>
        Berfungsi untuk menghapus data Pendataan mau satu per satu ataupun semua&#xa0; data sekaligus. Untuk melakukan hapus :
      </p>
      <ol>
        <li>
          Pilih / Ceklis data yang akan di hapus
        </li>
        <li>
          Lalu tekan tombol hapus.
         </li>
      </ol>

      <h6>
        1.2.4&#xa0;&#xa0; Tombol Cari
      </h6>
      <p>
        Berfungsi untuk mempermudah pencarian data Pendataan sesuai dengan tujuan yang diperlukan. Seperti mencari data berdasarkan Nama, Alamat, Data yang sudah di Sahkan, Agama DLL yang tersedia 
      </p>
      <p>
                 <img src="<?php echo e(asset('bantuan/pendataan/cari pendataan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pendataan/cari pendataan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
      </p>
      <h6>
        1.3&#xa0; List Pendataan
      </h6>
      <p>
                 <img src="<?php echo e(asset('bantuan/pendataan/list pendataan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pendataan/list pendataan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
      </p>
      <p>
        <em>List </em>ini berfungsi sebagai tempat untuk memperlihatkan data-data pendataan yang sudah di inputkan oleh <em>user</em>. Secara default hanya akan memunculkan data yang belum di disahkan.
      </p>
      <h6>
        1.4 Print Data
      </h6>
      <p>
        <img src="<?php echo e(asset('bantuan/pendataan/print pendataan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pendataan/print pendataan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
      </p>
      <p>
        &#xa0;Cara melakukan print :
      </p>

      <ol>
        <li>
          Tekan tombol print.
        </li>
        <li>
          Lalu filter sesuai yang di inginkan, sama hal&#xa0; nya seperti CARI DATA.
         </li>
         <li>
          Lalu print / Export Excel.
         </li>
      </ol>
    </div>
  <div>
    
  </div>
                      </div>
                      </div>
                      <div class="tab-pane" id="description">

<div>
      <h4>
        MODUL PENGESAHAN
      </h4>
      <h6>
        1.&#xa0;&#xa0;&#xa0; Fungsi Menu Pada Modul Pengesahan antara lain :
       </h6>
      <p>
          <img src="<?php echo e(asset('bantuan/pengesahan/index pengesahan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pengesahan/index pengesahan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
      </p>
      <h6>
        1.1&#xa0; Sahkan
      </h6>
      <p>
        Berfungsi untuk mengesahkan anggota Linmas yang belum di sahkan
      </p>
      <p>
        Cara untuk mengesahkan anggota :
      </p>
      <ol>
        <li>
          Pilih / Ceklis salah satu Anggota yang kan di sahkan.
        </li>
        <li>
          Tekan tombol sahkan.
        </li>
        <li>
          Maka akan  tampilan seperti pada  <em>Gambar modul pengesahan 1.1.3.</em> Pilih “ CARI “ untuk memilih NO SK yang sudah ada, untuk membuat NO SK baru.
         </li>
      </ol>
      <p>
        <img src="<?php echo e(asset('bantuan/pengesahan/sahkan step 1.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pengesahan/sahkan step 1.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
      </p>
      <ol start="4">
        <li>
          Pilih  yang di inginkan, lalu tekan simpan untuk menyimpan.
         </li>
      </ol>
      <h6>
        1.2&#xa0; Batal Sahkan
      </h6>
      <p>
        Berfungsi untuk  sahkan anggota yang sudah di sahkan.
       </p>
      <p>
        Cara untuk membatal sahkan anggota :
      </p>
       
       <ol>
        <li>
          Pilih / Ceklis salah satu Anggota yang kan di sahkan.
        </li>
        <li>
          Tekan tombol batal sahkan.
        </li>
      </ol>

     
      <h6>
        &#xa0;1.3 Cetak <em>Card </em>dan Cetak SK
      </h6>
      <p>
        &#xa0;Berfungsi untuk mencetak kartu anggota / mencetak kartu SK anggota.
      </p>
      <p>
        Cara untuk mencetak kartu anggota / mencetak kartu SK anggota :
      </p>
      
       <ol>
        <li>
          Pilih salah satu anggota yang sudah di sahkan.
        </li>
        <li>
          Tekan tombol cetak <em>card</em> / cetak sk.
        </li>
      </ol>

    </div>

                      </div>
                      <div class="tab-pane" id="concept">
<div>
			<h4>
				MODUL SARANA PRASARANA
			</h4>
			<h6>
				1.&#xa0;&#xa0;&#xa0; Fungsi Menu Pada Modul Sarana Prasarana Antara Lain :
			</h6>
			<p>
				 <img src="<?php echo e(asset('bantuan/sapras/index sapras.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/sapras/index sapras.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				1.1&#xa0; Input Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/sapras/create sapras.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/sapras/create sapras.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
			<h6>
				1.2&#xa0; Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/sapras/edit sapras.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/sapras/edit sapras.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara untuk melakukan edit :
			</p>
			<ol>
				<li>
					Pilih / Ceklis salah satu data.
				</li>
				<li>
					Tekan tombol edit.
				</li>
			</ol>
			<h6>
				1.3&#xa0; Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/sapras/index sapras.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/sapras/index sapras.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara untuk melakukan hapus :
			</p>
			<ol>
				<li>
					Pilih data yang akan di hapus.
				</li>
				<li>
					Tekan tombol hapus.
				</li>
			</ol>
			<br />
			<h6>
				1.4 Print Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/sapras/print sapras.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/sapras/print sapras.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara print data :
			</p>
			<ol>
				<li>
					Lalu filter sesuai yang di inginkan, sama hal nya dengan CARI DATA.
				</li>
				<li>
					Lalu print / export excel.
				</li>
			</ol>
		</div>
                      </div>
                      <div class="tab-pane" id="support">
<div>
			<h4>
				MODUL POS KAMLING
			</h4>
			<h6>
				1.&#xa0;&#xa0;&#xa0; Fungsi Menu Pada Modul Pos Kamling Antara Lain :
			 </h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pos kamling/index pos jaga.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pos kamling/index pos jaga.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				1.1&#xa0; Input Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pos kamling/create pos kamling.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pos kamling/create pos kamling.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				<em>Gambar modul pos kamling 1.1 </em>
			</p>
			<h6>
				1.2&#xa0; Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pos kamling/edit pos kamling.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pos kamling/edit pos kamling.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara untuk melakukan edit  </p>
			<ol>
				<li>
					Pilih / Ceklis salah satu data.
				</li>
				<li>
					Tekan tombol edit.
				</li>
			</ol>
			<h6>
				1.3&#xa0; Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pos kamling/hapus pos kamling.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pos kamling/hapus pos kamling.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara untuk melakukan hapus :
			</p>
			<ol>
				<li>
					Pilih data yang akan di hapus.
				</li>
				<li>
					Tekan tombol hapus.
				</li>
			</ol>
			<h6>
				1.4 Print Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pos kamling/print pos jaga.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pos kamling/print pos jaga.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara melakukan print data :
			</p>
			<ol>
				<li>
					Tekan tombol print.
				</li>
				<li>
					Cari Data sesuai yang di inginkan.
				</li>
				<li>
					Print / Export Excel.
				</li>
			</ol>
		</div>
                      </div>
                      <div class="tab-pane" id="extra">

		<div>
			<h4>
				MODUL PEMBINAAN
			</h4>
			<h6>
				1.&#xa0;&#xa0;&#xa0; Fungsi Menu Pada Modul Pembinaan Antara Lain :
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pembinaan/index pembinaan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pembinaan/index pembinaan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				1.1&#xa0; Input Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pembinaan/create pembinaan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pembinaan/create pembinaan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;
			</p>
			<p>
				&#xa0;
			</p>
			<p>
				Cara melakukan input Data</p>
			<p>
				1. Isi data kegiatan
			 </p>
			<p>
				2. Tekan tombol tambahkan untuk mengisi peserta linmas.
			</p>
			<p>
				&#xa0;
			</p>
			<h6>
				1.2&#xa0; Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pembinaan/edit pembinaan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pembinaan/edit pembinaan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara untuk melakukan edit :
			 </p>
			<ol>
				<li>
					Pilih / Cari salah satu data.
				 </li>
				<li>
					Tekan tombol edit.
				</li>
			</ol>
			<h6>
				1.3&#xa0; Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pembinaan/index pembinaan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pembinaan/index pembinaan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara untuk melakukan hapus :
			</p>
			<ol>
				<li>Pilih data yang akan di hapus.
				 </li>
				<li>
					Tekan tombol hapus.
				</li>
			</ol>
			<h6>
				1.4 Print Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pembinaan/print pembinaan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pembinaan/print pembinaan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara melakukan print data :
			</p>
			<ol>
				<li>
					Tekan tombol print.
				</li>
				<li>
					Filter sesuai yang di inginkan.
				</li>
				<li>
					Print / Export Excel.
				</li>
			</ol>
		</div>

                      </div>


                       <div class="tab-pane" id="publikasi">
			<div>
			<h4>
				MODUL PUBLIKASI
			</h4>
			<h6>
				1.&#xa0;&#xa0;&#xa0; Fungsi Menu Pada Modul Publikasi Antara Lain :
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/content publikasi/index content publikasi.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/content publikasi/index content publikasi.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				1.1&#xa0; Input Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/content publikasi/create content publikasi.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/content publikasi/create content publikasi.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				1.2&#xa0; Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/content publikasi/edit content publikasi.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/edit content publikasi.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara untuk melakukan edit :
			</p>
			<ol>
				<li>
					Pilih / Ceklis salah satu data.
				</li>
				<li>
					Tekan tombol edit.
				</li>
			</ol>
			<h6>
				1.3&#xa0; Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/content publikasi/index content publikasi.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/content publikasi/index content publikasi.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara untuk melakukan hapus :
			</p>
			<ol>
				<li>
					Pilih data yang akan di hapus.
				 </li>
				<li>
					Tekan tombol hapus.
				</li>
			</ol>
		</div>
                      </div>
                      
                      <div class="tab-pane" id="administrasi">
<div>
			<h4>
				MODUL ADMINISTRASI
			</h4>
			<h6>
				1.&#xa0;&#xa0;&#xa0; Fungsi Menu Pada Modul Administrasi - Wilayah Antara Lain :
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/index wilayah.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/index wilayah.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				1.1&#xa0; Input Data Wilayah
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/create wilayah.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/create wilayah.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara <em>input</em> wilayah kecamatan :
			</p>
			<ol>
				<li>Isi kode kecamatan, untuk kode kelurahan / desa nya “00”.
				 </li>
				<li>
					Isi nama Kecamatan.
				</li>
				<li>
					Simpan.
				</li>
			</ol>
			<p>Cara input wilayah Kelurahan / Desa :
			 </p>
			<ol>
				<li>
					Isi kode kecamatan dan kode Kelurahan / desa.
				 </li>
				<li>
					Isi nama kelurahan / desa.
				</li>
				<li>
					Simpan.
				</li>
			</ol>
			<p>
				<br />
			</p>
			<h6>
				1.2&#xa0; Hapus Data Wilayah
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/hapus wilayah.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/hapus wilayah.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara hapus data wilayah :
			 </p>
			<ol>
				<li>
					Pilih / Ceklis data yang akan di hapus.
				</li>
				<li>
					Tekan tombol hapus.
				</li>
			</ol>
			<p>
				-&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; Keterangan
			</p>
			<p>
				Data kecamatan tidak dapat di hapus apabila, masih memiliki Kelurahan / Desa.
			</p>
			<h6>
				2.&#xa0;&#xa0;&#xa0; Fungsi Menu Pada Modul Administrasi – Jenis Sapras Antara Lain :
			 </h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/index jenis sapras.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/index jenis sapras.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				<br />
			</p>
			<h6>
				2.1&#xa0; Input Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/create jenis sapras.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/create jenis sapras.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				2.2&#xa0; Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/edit jenis sapras.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/edit jenis sapras.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara edit data : 
			</p>
			<ol>
				<li>
					Pilih / Ceklis salah satu data yang akan di edit.
				</li>
				<li>
					Tekan tombol edit.
				</li>
			</ol>
			<p>
				<br />
			</p>
			<h6>
				2.3&#xa0; Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/index jenis sapras.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/index jenis sapras.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara hapus data :
			</p>
			<ol>
				<li>
					Pilih data yang akan di Hapus </li>
				<li>
					Tekan tombol hapus.
				</li>
			</ol>
			<p>
				-&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; Keterangan
			</p>
			<p>
				Data Jenis Sapras tidak dapat di hapus apabila status sudah “terpakai”.
			</p>
			<h6>
				3.&#xa0;&#xa0;&#xa0; &#xa0; Fungsi Menu Pada Modul Administrasi – Regu Antara Lain :
			</h6>
			<h6>
				3.1&#xa0; Input Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/create regu.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/create regu.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				3.2&#xa0; Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/edit regu.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/edit regu.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara edit data :
			</p>
			<ol>
				<li>
					Pilih / Ceklis salah satu data.
				</li>
				<li>
					Tekan tombol edit.
				</li>
			</ol>
			<h6>
				3.3&#xa0; Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/hapus regu.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/hapus regu.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara hapus data :
			</p>
			<ol>
				<li>
					Pilih data yang akan di hapus.
				</li>
				<li>
					Tekan tombol hapus.
				</li>
			</ol>
			<h6>
				4. Fungsi Menu Pada Modul Administrasi – Kategori Publikasi :
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/index kategori publikasi.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/index kategori publikasi.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				4.1 Input data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/create kategori publikasi.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/create kategori publikasi.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				4.2 Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/edit kategori publikasi.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/edit kategori publikasi.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara melakukan edit :
			 </p>
			<p>
				1. Pilih / Ceklis salah satu data yang akan di edit.
			</p>
			<p>
				2. Tekan tombol edit.
			</p>
			<h6>
				4.3 Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/edit kategori publikasi.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/edit kategori publikasi.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara melakukan hapus:
			</p>
			<p>
				&#xa0;1. Pilih / Ceklis data yang akan di hapus.
			</p>
			<p>
				&#xa0;2. Tekan tombol hapus.
			</p>
			<h6>
				5. Fungsi Menu Pada Modul Administrasi – Jabatan :
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/index jabatan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/index jabatan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				<br />
			</p>
			<h6>
				&#xa0;5.1 Input Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/create jabatan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/create jabatan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				&#xa0;5.2 Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/edit jabatan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/edit jabatan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara melakukan edit :
			</p>
			<p>
				&#xa0;1. Pilih / Ceklis data yang akan di edit.
			</p>
			<p>
				&#xa0;2. Tekan tombol edit.
			</p>
			<h6>
				&#xa0;5.3 Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/edit jabatan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/edit jabatan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				&#xa0;6. Fungsi Menu Pada Modul Administrasi – Kategori Laporan :
			 </h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/index kategori laporan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/index kategori laporan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				&#xa0;6.1 Input Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/create kategori laporan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/create kategori laporan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				&#xa0;6.2 Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/edit kategori laporan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/edit kategori laporan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara melakukan edit :
			</p>
			<p>
				&#xa0;1. Pilih / Ceklis salah satu data yang akan di edit.
			</p>
			<p>
				&#xa0;2. Tekan tombol Edit </p>
			<h6>
				&#xa0;6.3 Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/edit kategori laporan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/edit kategori laporan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara melakukan hapus :
			</p>
			<p>
				&#xa0;1. Pilih data yang akan di hapus.
			</p>
			<p>
				&#xa0;2. Tekan tombol hapus.
			 </p>
			<p>
				<br />
			</p>
			<h6>
				7. Fungsi Menu Pada Modul Administrasi – Images
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/index images.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/index images.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				&#xa0;7.1 Input Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/create images.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/create images.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara melaukan input data :
			</p>
			<p>
				&#xa0;1. Status akan secara otomatis AKTIF.
			</p>
			<p>
				&#xa0;2. Drag and Drop images ke kolom kotak biru / tekan kolom kotak biru lalu pilih images.
			</p>
			<p>
				&#xa0;3. Jika images berhasil di upload akan ada pilan Remove File, untuk menghapus images.
			</p>
			<p>
				&#xa0;4. Images yang di upload otomatis tersimpan, beserta status nya.
			 </p>
			<h6>
				<br />&#xa0;7.2 Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/edit images.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/edit images.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara melakukan edit :
			</p>
			<p>
				&#xa0;1. Pilih / Ceklis salah satu data yang akan di edit.
			</p>
			<p>
				&#xa0;2. Tekan tombol edit.
			</p>
			<p>
				&#xa0;3. Ubah status menjadi AKTIF / TIDAK AKTIF.
			</p>
			<p>
				&#xa0;Keterangan :
			</p>
			<p>
				-&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; Status Aktif : Data yang berstatus aktif akan di tampilkan di halaman metro.
			 </p>
			<p>
				-&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; Data Tidak Aktif : Images tidak akan di tampilkan di halaman metro.
			 </p>
			<p>
				<br />
			</p>
			<h6>
				7.3 Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/administrasi/hapus images.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/administrasi/hapus images.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara melakukan hapus :
			</p>
			<p>
				&#xa0;1. Pilih / Ceklis data yang akan di hapus.
			</p>
			<p>
				&#xa0;2. Tekan tombol hapus.
			</p>
		</div>
                      </div>

                      <div class="tab-pane" id="user">
<div>
			<h4>
				MODUL USER
			</h4>
			<h6>
				1.&#xa0;&#xa0;&#xa0; Fungsi Menu Pada Modul User Antara Lain :
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/user/index user.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/user/index user.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				1.1&#xa0; Input Data  <em>User</em>
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/user/user adminis.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/user/user adminis.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Untuk level administrasi secara <em>default </em>hak akses dcptrial di  <em>write</em> semua.
			</p>
			<p>
				<img src="<?php echo e(asset('bantuan/user/user operator.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/user/user operator.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Sedangkan untuk level operator modul adminis, dan modul user secara default akan <em>disable</em>.
			</p>
			<p>
				-&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; Keterangan
			</p>
			<ol>
				<li>
					Hak Akses <em>Read</em> &#xa0;: <em>User </em>dapat membuka modul, namun tidak dapat membuat data baru, edit, dan hapus.
				</li>
				<li>
					Hak Akses <em>Write</em> &#xa0;: <em>User </em>dapat dcptrial modul, beserta dapat membuat data baru, edit, dan hapus.
				 </li>
				<li>
					Hak Akses <em>Disable</em> &#xa0;: <em>User</em> tidak dapat membuka modul.
				</li>
				<li>
					Status Aktif&#xa0;: <em>User</em> dapat login.
				</li>
				<li>
					Status Tidak Aktif&#xa0;: <em>User</em> tidak dapat login.
				</li>
			</ol>
		</div>
                      </div>

                      <div class="tab-pane" id="pelaporan">
<div>
			<h4>
				MODUL PELAPORAN
			</h4>
			<h6>
				1.&#xa0;&#xa0;&#xa0; Fungsi Menu Pada Modul Pelaporan Antara Lain :
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pelaporan/index pelaporan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pelaporan/index pelaporan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				1.1&#xa0; Input Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pelaporan/create pelaporan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pelaporan/create pelaporan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<h6>
				1.2&#xa0; Edit Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pelaporan/edit pelaporan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pelaporan/edit pelaporan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara untuk DocConverter edit :
			 </p>
			<ol>
				<li>
					Pilih / Ceklis salah satu data.
				</li>
				<li>
					Tekan tombol edit.
				</li>
			</ol>
			<h6>
				1.3&#xa0; Hapus Data
			</h6>
			<p>
				<img src="<?php echo e(asset('bantuan/pelaporan/edit pelaporan.png')); ?>" data-high-res-src="<?php echo e(asset('bantuan/pelaporan/edit pelaporan.png')); ?>" class="gallery-items" style=" cursor: pointer;"/>
			</p>
			<p>
				&#xa0;Cara untuk melakukan hapus :
			</p>
			<ol>
				<li>
					Pilih data yang akan di hapus.
				</li>
				<li>
					Tekan tombol hapus.
				</li>
			</ol>
		</div>
                      </div>
                    </div>
                  </div>
                </div>


   	 	   </div>
   	 	  </div>
   	 	 </div>
   		</div>
       </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('bantuan/imageviewer.js')); ?>"></script>
    <script type="text/javascript">
      $(function () {
          var viewer = ImageViewer();
          $('.gallery-items').click(function () {
              var imgSrc = this.src,
                  highResolutionImage = $(this).data('high-res-img');
       
              viewer.show(imgSrc, highResolutionImage);
          });
      });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>