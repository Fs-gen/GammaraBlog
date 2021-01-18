<div class="container">
	<!-- <hr>
	<div class="input-group mb-3 w-50">
		<input type="text" class="form-control" placeholder="Sedang Mencari Apa?" aria-label="Sedang Mencari Apa?" aria-describedby="button-addon2">
		<div class="input-group-append">
			<button class="btn btn-outline-success px-4" type="button" id="button-addon2">Cari</button>
		</div>
	</div> -->
	<hr>


	<!-- <h3>Grafik Peristiwa Nikah dan Rujuk</h3>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<canvas id="peristiwaNikah" width="400" height="200"></canvas>
		</div>
		<div class="col-md-6">
			<canvas id="peristiwaRujuk" width="400" height="200"></canvas>
		</div>
	</div> -->

	<!-- menu -->
	<h2 class="text-center font-weight-bolder">Selamat Datang Di Website KUA Cenrana Maros</h2>
	<div class="row text-center my-5  bg-dark p-5 rounded">
		<div class="col-md-3">
			<a target="_blank" href="https://simkah.kemenag.go.id/">
				<img src="<?= base_url() ?>assets/img/logo-simkah-01.png" width="200" height="200" alt="" srcset="">
				<p class="text-white">
					SISTEM INFORMASI MANAJEMEN NIKAH
				</p>
			</a>
		</div>
		<div class="col-md-3">
			<a target="_blank" href="http://simbi.kemenag.go.id/">
				<img src="<?= base_url() ?>assets/img/simbi.png" width="200" height="200" alt="" srcset="">
				<p class="text-white">
					SISTEM INFORMASI MANAJEMEN BIMAS ISLAM
				</p>
			</a>
		</div>
		<div class="col-md-3">
			<a target="_blank" href="https://sulsel.kemenag.go.id/">
				<img src="<?= base_url() ?>assets/img/kemenag.png" width="200" height="200" alt="" srcset="">
				<p class="text-white">
					KEMENTERIAN AGAMA SULAWESI SELATAN
				</p>
			</a>
		</div>
		<div class="col-md-3">
			<a target="_blank" href="https://kemenagmaros.or.id/">
				<img src="<?= base_url() ?>assets/img/kemenag.png" width="200" height="200" alt="" srcset="">
				<p class="text-white">
					KEMENTERIAN AGAMA MAROS
				</p>
			</a>
		</div>
	</div>

	<div class="mb-5">
		<h3 class="font-weight-bold">Berita Terbaru</h3>
		<hr>
		<div class="row mb-5">
			<?php for ($i = 0; $i < 8; $i++) : ?>
				<div class="col-md-4">

					<div class="card mb-2" style="">
						<img src="<?= $news['img'][$i] ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<!-- <h5 class="card-title">Card title</h5> -->
							<p class="card-text font-weight-bold"><?= $news['judul'][$i] ?></p>
							<a href="<?= $news['link'][$i] ?>" class="btn btn-outline-success">Baca Selengkapnya ...</a>
						</div>
					</div>

				</div>

			<?php endfor; ?>
		</div>

	</div>


</div>