<!DOCTYPE html>
<html>
<head>
	<title>Peringkasan Teks</title>
</head>
<body>
		<?php echo form_open('C_praproccess/proses') ?>
		<div class="col-md-5">
			<div class="form-group">
			  <label for="input_text">Masukkan Teks (Bahasa Indonesia):</label>
			  <textarea class="form-control" rows="5" name="input_text" required></textarea>
			</div>
		</div>
		<div class="col-md-2 text-center">
			<input type="submit" value="Ringkas" class="btn btn-primary btn-lg" name="ringkas"></input>
		</div>
		<?php echo form_close() ?>

		<div class="col-md-5">
			<div class="form-group">
			  <label for="output_text">Hasil:</label>
			  <textarea class="form-control" rows="5" name="output_text"></textarea>
			</div>
		</div>
	

</body>
</html>