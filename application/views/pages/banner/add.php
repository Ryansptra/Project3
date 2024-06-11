<div class="container">
	<div class="row mt-4">
		<div class="col">
			<h2 class="text-center">Tambah Banner</h2>
		</div>
	</div>

	<div class="row bg-light p-3 mt-4">
		<div class="col">

			<?= form_open_multipart(base_url('banner/add')) ?>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Judul Banner</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="head">
						<?= form_error('head', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Deskripsi Banner</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="content">
						<?= form_error('content', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Warna Text</label>
					<div class="col-sm-10">
						<select class="form-control" name="text_color">
							<option value="text-dark">Hitam</option>
							<option value="text-light">Putih</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Link Produk</label>
					<div class="col-sm-10">
						<select class="form-control" name="product_id">
							<?php foreach($games as $g) : ?>
								<option value="<?= $g['id'] ?>"><?= $g['name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label font-weight-bold">Foto Banner</label>
					<br>
					<div class="col-sm-10">
						<input name="image" type="file" class="form-control-file">
						<?php if($this->session->flashdata('image_error')) :  ?>
							<small class="form-text text-danger">
								<?= $this->session->flashdata('image_error') ?>
							</small>
						<?php endif ?>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<a href="<?= base_url('banner') ?>" class="btn btn-secondary btn-sm">
							<i class="fa fa-arrow-left mr-1"></i>
							Kembali
						</a>
						<button type="submit" class="btn btn-info btn-sm float-right">
							<i class="fa fa-save mr-2"></i>
							Simpan
						</button>
					</div>
				</div>
			<?= form_close() ?>			
		</div>
	</div>
</div>

