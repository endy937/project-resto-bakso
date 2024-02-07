<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Baso Gejrot Tasikmalaya</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
    /* Style untuk elemen select */
    select {
      appearance: none; /* Menghilangkan default styling browser */
      -webkit-appearance: none;
      -moz-appearance: none;
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    /* Style untuk tampilan item pilihan */
    .option-item {
      display: flex;
      align-items: center;
      padding: 5px;
    }

    /* Style untuk gambar di dalam opsi */
    .option-image {
      width: 567px;
      height: 400px;
    }
  </style>


  </head>
  <body>
  <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+6282262664937</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Buka</span> <span>Setiap Hari</span> <span> Pukul 10:00 - 22:00</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">BASO GEJROT</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="pemesanan.php" class="nav-link">Memesan</a></li>
            <li class="nav-item"><a href="admin/index.php" class="nav-link">Admin</a></li> 

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
   
		
    <section class="ftco-section img" style="background-image: url(images/gambar1.png);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5 mx-auto">
            <div class="heading-section ftco-animate mb-5 text-center">
              <h2 class="mb-4">Buat Pesanan</h2>
            </div>
            <form action="input_aksi.php" method="post" class="mx-auto">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="productSelect">Pilih Menu</label>
                    <select name="pilihan_menu" id="productSelect" class="custom-select">
                      <option  value="bakso Kerikil" data-image="images/kerikil.png" data-price="15.000">Bakso Kerikil</option>
                      <option value="Bakso gejrot" data-image="images/about1.png" data-price="13.000">Bakso gejrot</option>
                      <option value="Bakso Medium" data-image="images/medium.png" data-price="10.000">Bakso Medium</option>
                      <option value="Bakso Istigfar" data-image="images/gambar7.png" data-price="25.000">Bakso Istigfar</option>
                    </select>
                  </div>
                </div>
                <div id="productInfo" class="col-md-12 mt-3">
                  <h4>Info Menu</h4>
                  <div id="productImage"></div>
                  <h5 id="productPrice" style="padding-top : 10px;"></h5>
                </div>

				        <div class="col-md-6">
                  <div class="form-group">
                    <label for=""> Atas Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda">
                  </div>
                </div>

				            <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Kuantitas</label>
                    <input type="text" name="jml" class="form-control" placeholder="masukan jumlah">
                  </div>
                </div>

                <div class="col">
                  <div class="form-group">
                    <label for="">Nomor Meja</label>
                    <input type="text" name="no_meja" class="form-control" placeholder="Nomor Meja">
                  </div>
                </div>


                <div class="col-md-12 mt-3">
                  <div class="form-group text-center">
                    <input type="submit" value="Membuat Reservasi" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Baso Gejrot</h2>
              <p>Berawal dari gerobak dorong kini menjadi prusahaan besar kini siap untuk memenuhi perut anda.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Jam Buka</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>senin</span><span>10:00 - 22:00</span></li>
                <li class="d-flex"><span>selasa</span><span>10:00 - 22:00</span></li>
                <li class="d-flex"><span>rabu</span><span>10:00 - 22:00</span></li>
                <li class="d-flex"><span>kamis</span><span>10:00 - 22:00</span></li>
                <li class="d-flex"><span>jum'at</span><span>10:00 - 22:00</span></li>
                <li class="d-flex"><span>sabtu</span><span>10:00 - 22:00</span></li>
                <li class="d-flex"><span>minggu</span><span>10:00 - 22:00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/about1.png);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/about2.png);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/kerikil.png);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/gambar7.png);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/Medium1.png);">
	            	</a>
	            	<a href="#" class="thumb-menu img" style="background-image: url(images/gambar1.png);">
	            	</a>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script>
  // Mengambil elemen-elemen HTML yang dibutuhkan
  const productSelect = document.getElementById('productSelect');
  const productImage = document.getElementById('productImage');
  const productPrice = document.getElementById('productPrice');

  // Menambahkan event listener untuk mendeteksi perubahan pada elemen select
  productSelect.addEventListener('change', updateProductInfo);

  // Fungsi untuk memperbarui informasi produk
  function updateProductInfo() {
    const selectedOption = productSelect.options[productSelect.selectedIndex];
    const imagePath = selectedOption.getAttribute('data-image');
    const price = selectedOption.getAttribute('data-price');

    // Menampilkan gambar dan harga produk
    productImage.innerHTML = `<img src="${imagePath}" alt="Product Image" class="option-image">`;
    productPrice.textContent = `Harga: Rp.${price}`;
  }

  // Memanggil fungsi updateProductInfo untuk menginisialisasi tampilan awal
  updateProductInfo();
</script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
