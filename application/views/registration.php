<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<!--- basic page needs
    ================================================== -->
	<meta charset="UTF-8">
<title><?= $title ?></title>
<meta name="description" content="">
<meta name="author" content="">
<!-- mobile specific metas
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- CSS
    ================================================== -->
	<link rel="stylesheet" href="<?= base_url('assets/css/base.css');  ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/vendor.css');  ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/main.css');  ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">	

<!-- script
    ================================================== -->
<script src="<?= base_url('assets/js/modernizr.js');  ?>"></script>
<script src="https://kit.fontawesome.com/78cf3c7533.js"></script>
<!-- favicons
    ================================================== -->
</head>
<body>
<!-- preloader
    ================================================== -->
<div id="preloader">
	<div id="loader" class="dots-fade">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>
<div id="top" class="s-wrap site-wrapper">
	<!-- site header
        ================================================== -->
	<header class="s-header">
	<div class="header__top">
		<div class="header__logo">
			<a class="site-logo" href="<?= base_url();?>"><h5 style="color: white">XPRESO</h5></a>
		</div>
		<div class="header__search">
			<form role="search" method="get" class="header__search-form" action="#">
				<label>
				<span class="hide-content">Search for:</span>
				<input type="search" class="header__search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off"></label>
				<input type="submit" class="header__search-submit" value="Search"></form>
			<a href="#0" title="Close Search" class="header__search-close">Close</a>
		</div>
		<!-- end header__search -->
		<!-- toggles -->
		<a href="#0" class="header__search-trigger"></a>
		<a href="#0" class="header__menu-toggle"><span>Menu</span></a>
	</div>
	<!-- end header__top -->
	<nav class="header__nav-wrap">
	<ul class="header__nav">
		<li>
			<a href="welcome" title=""><i class="fas fa-home"></i> Home</a>
		</li>
		<li>
			<a href="about" title=""><i class="fas fa-users"></i> About Us</a>
		</li>
		<li>
			<a href="events" title=""><i class="far fa-calendar-check"></i> Events</a>
		</li>
		<li>
			<a href="information" title=""><i class="fas fa-info-circle"></i> Information</a>
		</li>
		<li class="current">
			<a href="registration"><i class="fas fa-user-plus"></i> Registration</a>
		</li>
		<li>
			<a href="schedule"><i class="far fa-calendar-alt"></i> Schedule</a>
		</li>
		<li>
			<a href="sponsor"><i class="fas fa-user-tie"></i> Sponsor & Media Partner</a>
		</li>
	<!-- end header__nav -->
	<ul class="header__social">
		<li class="ss-instagram">
			<a href="https://instagram.com/official.xpreso/"><span class="screen-reader-text">Instagram</span></a>
		</li>
		<li class="ss-whatsapp">
			<a href="#0"><span class="screen-reader-text">WhatsApp</span></a>
		</li>
		<li class="ss-whatsapp">
			<a href="#0"><span class="screen-reader-text">WhatsApp</span></a>
		</li>
		<li class="ss-whatsapp">
			<a href="#0"><span class="screen-reader-text">WhatsApp</span></a>
		</li>
	</ul>
	</nav>
	<!-- end header__nav-wrap --></header>
	<!-- end s-header -->
	<div class="s-content">
<h3> ALUR DAN PERSYARATAN PENDAFTARAN </h3>
	<ol>
		<li>Peserta merupakan siswa/i SMP/MTs sederajat atau SMA/SMK/MA sederajat sewilayah Jawa Barat kecuali untuk peserta E-Sports karena terdapa peserta Umum.</li>
		<li>Alur pendaftaran sebagai berikut :
			<ol style="list-style-type: lower-alpha">
				<li>Mendaftarkan diri melalui website XPRESO 12 atau menyerahkan formulir pendaftaran beserta berkas persyaratan kepada panitia yang berada di Kampus SMA Pesantren Terpadu Hayatan Thayyibah, Jl. Karamat No. 123.</li>
				<li>Berkas persyaratan pendaftaran sebagai berikut :
					<ol>
						<li>Surat rekomendasi dari sekolah (disertai tanda tangan kepala sekolah dan stempel sekolah asli).</li>
						<li>Fotokopi kartu pelajar/KTP</li>
						<li>Pas foto 3x4 sebanyak tiga buah (dibagian belakang foto dicantumkan nama lengkap dan asal sekolah).</li>
						<li>Formulir pendaftaran</li>
					</ol>
				</li>
				<li>Poin b.1 tidak berlaku bagi peserta Umum (E-Sport)</li>
				<li>Semua berkas persyaratan dimasukan kedalam amplop coklat.</li>
				<li>Apabila berkas persyaratan sudah lengkap, calon peserta mentransfer uang registrasi selambat-lambatnya 3 hari setelah dikonfirmasi kelengkapannya oleh panitia.</li>
				<li>Biaya pendaftaran dapat dikirim ke rekening berikut :</li>
				<li>Mengirim bukti pemabayaran melalui Whatsapp ...</li>
				<li>Setelah pembayaran dikonfirmasi oleh panitia maka calon peserta dinyatakan sebagai peserta.</li>
			</ol>
		</li>
	</ol>

<h3>KETENTUAN PENDAFTARAN </h3>
		<ol>
			<li>Pendaftaran dibukan pada bulan Agustus hingga satu hari sebelum <i>Technical Meeting</i>. </li>
			<li>Kuota maksimal peserta tercantum pada “Petunjuk Teknis dan Pelaksaan Perlombaan”. </li>
			<li>Apabila kuota maksimal sudah terpenuhi, peserta yang baru mendaftar akan dimasukan kedalam <i>waiting list</i> dan diharapkan menunggu konfirmasi dari panitia perlombaan terkait. </li>
			<li>Konfirmasi terakhir terhadap kuota peserta adalah pada hari <i>Technical Meeting</i>, dengan demikian bagi peserta yang ingin mengundurkan diri selambat-lambatnya pada saat <i>Technical Meeting</i>. </li>
			<li>Uang pendaftaran tidak dapat dikembalikan apabila sekolah yang bersangkutan ingin mengundurkan diri. </li>
		</ol>
<h3>BIAYA PENDAFTARAN</h3>
<table>
<tr></tr>
	<td>No.</td>
	<td>Nama Lomba</td>
	<td>Biaya Pendaftaran (Rp.)</td>
</tr>
	<?php 
	$no =1;
	foreach ($biaya as $b):
	?>
<tr>
	<td><?= $no++?></td>
	<td><?= $b['nama_lomba']?></td>
	<td><?= $b['biaya'] .$b['row']. $b['sub_harga'] ?></td>
</tr>
<?php endforeach;?>
</table>
<button id="myBtn">CLICK HERE FOR REGISTRATION</button>
<!-- Buat modal kita simpen disini ya-->
<div id="myModal" class="modal">
<div class="modal-content">
<div class="s-content">
<span class="close">&times;</span>
	<h4>INFORMATION</h4>
	<ol>
		<li>Mohon untuk membaca ALUR DAN PERSYARATAN PENDAFTARAN dan KETENTUAN PENDAFTARAN agar tidak terjadi kesalah pahaman.</li>
		<li>Untuk mata lomba SILAT tidak ada pendaftaraan online</li>
		<li>Mata lomba yang pesertanya berkelompok cukup daftarkan ketuanya saja. Untuk data para anggotanya bisa dikirim melalui e-mail officialxpreso@gmail.com, dengan format  : <br>
		<!-- ini blom WARNING -->
		Subjek	: ANGGOTA (MATA LOMBA) (NAMA KETUA) (ASAL SEKOLAH/NAMA TIM KHUSUS E-Sport UMUM) <br>
		Isi		:
		<ul>
			<li>Nama Anggota :</li>
			<li>Jenis Kelamin :</li>
			<li>Tanggal Lahir :</li>
			<li>Alamat :</li>
			<li>Nomor HP :</li>
		</ul>
		</li>
		<li>Berkas persyaratan pendaftaran dapat dikirim ke kampus SMA Pesantren Terpadu Hayatan Thayyibah di Jalan Karamat No. 123 Sukabumi 43122 Jawa Barat.</li>
		<li>Apabila berkas persyaratan akan dikirim melalui kurir, cantumkan asal sekolah dan nama ketua pada amplop coklat.</li>
		<li>Untuk E-Sport UMUM, segala yang berkaitan dengan instansi pendidikan tidak usah diisi dan dilengkapi.</li>
	</ol>

	<h3 class="h2">Mohon Isi Data Dibawah Ini</h3>
                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                        <fieldset>
    
                            <div class="form-field">
                                <input name="cName" id="cName" class="full-width" placeholder="Nama Lengkap" value="" type="text">
                            </div>
    
                            <div class="form-field">
                                <input name="cEmail" id="cEmail" class="full-width" placeholder="Alamat Email" value="" type="email">
                            </div>
    
                            <div class="form-field">
								<label>Jenis Kelamin:</label><br>
								<input name="cGender" id="cGenderL" value="L" type="radio"> <label  for="cGenderL">Pria</label><br>
								<input name="cGender" id="cGenderP" value="P" type="radio"> <label for="cGenderP">Wanita</label>
							</div>
							
							<div class="form-field">
								<label for="cDateBirth">Tanggal Lahir : </label><br><input name="cDateBirth" id="cDateBirth" type="date">
							</div>
    
                            <div class="message form-field">
                                <textarea name="cAdress" id="cAddress" class="full-width" placeholder="Alamat Lengkap"></textarea>
							</div>
							
							<div class="form-field">
								<input type="text" name="cPhone" class="full-width" id="cPhone" placeholder="No Telpon">
							</div>

							<div class="form-field">
								<select name="cLomba" id="cLomba" class="full-width">
									<?php foreach($lomba as $l) :?>
									<option value="<?= $l['id']?>"><?= $l['nama_lomba']?></option>
									<?php endforeach;?>
								</select>
							</div>

							<div class="form-field">
								<select name="cLagu" id="cLagu" class="cLagu full-width">
									<option value="-">--Pilih Lagu--</option>
								</select>
							</div>
							<div class="form-field">
                                <input name="cAsal" id="cAsal" class="full-width" placeholder="Asal Sekolah" value="" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNoSekolah" id="cNoSekolah" class="full-width" placeholder="No Telpon Sekolah" value="" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNamaPembina" id="cNamaPembina" class="full-width" placeholder="Nama Pembina" value="" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNoPembina" id="cNoPembina" class="full-width" placeholder="No HP Pembina" value="" type="text">
                            </div>
    
                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large full-width" value="Submit" type="submit">
    
                        </fieldset>
                    </form> <!-- end form -->
</div>
</div>
</div>
<!-- /Modal -->
	</div>
	<!-- end s-content -->
	<!-- footer
        ================================================== -->
</div>

<!-- end s-wrap -->
<!-- Java Script
    ================================================== -->
<script src="<?= base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
<script src="<?= base_url('assets/js/plugins.js');?>"></script>
<script src="<?= base_url('assets/js/main.js');?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 
</script>
<script type="text/javascript">

	
	$(document).ready(function(){
		$('#cLomba').change(function(){
			var id=$(this).val();
			$.ajax({
				url : "<?= base_url();?>/registration/get_sublomba",
				method : "POST",
				data : {id: id},
				async : false,
		        dataType : 'json',
				success: function(data){
					var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<option>'+data[i].nama+'</option>';
		            }
		            $('.cLagu').html(html);
					
				}
			});
		});
	});
</script>
</body>


