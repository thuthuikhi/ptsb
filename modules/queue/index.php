
<div class="container">
	<div class="row">
		<div class="col-md-12 block">
			<a href="?mod="><i class="fui-home"></i> Home</a> || <button class="btn btn-info mrs" onclick="auto();">Mode Otomatis</button> || <button class="btn btn-info mrs" onclick="manual();">Mode Manual</button>
		</div>
	</div>
</div>

</br>

<div class="container" id="manual" style="display:none;">
	<div class="row">
		<div class="col-md-6 block">
			<form>
				<legend>Manual Input</legend>
				<div class="form-group">
					<label id="noplat" class="col-lg-6 control-label text-danger">Nomor Plat</label>
					<div class="col-lg-6">
						<input class="form-control" type="text" maxlength="10" id="noplat" placeholder="Masukkan Nomor Plat" required>
					</div>
				</div>
				<div class="form-group">
					<label id="jenis" class="col-lg-6 control-label text-danger">Jenis Mobil</label>
					<div class="col-lg-6">
						<input class="form-control" type="text" maxlength="10" id="jenis" placeholder="Masukkan Jenis Mobil" required>
					</div>
				</div>
				<div class="form-group">
					<label id="daya" class="col-lg-6 control-label text-danger">Daya Angkut Mobil</label>
					<div class="col-lg-6">
						<input class="form-control" type="text" maxlength="10" id="daya" placeholder="Masukkan Daya Angkut Mobil" required>
					</div>
				</div>
				<div class="form-group">
					<label id="sopir" class="col-lg-6 control-label text-danger">Nama Sopir</label>
					<div class="col-lg-6">
						<input class="form-control" type="text" maxlength="10" id="sopir" placeholder="Masukkan Nama Sopir" required>
					</div>
				</div>
				<div class="form-group">
					<label id="asal" class="col-lg-6 control-label text-danger">Asal Mobil</label>
					<div class="col-lg-6">
						<input class="form-control" type="text" maxlength="10" id="asal" placeholder="Masukkan Asal Mobil" required>
					</div>
				</div>
				<div class="col-lg-6"></div>
				<div class="col-lg-6">
					<input type="submit" class="btn btn-primary mrs" value="Simpan & Cetak">
				</div>
			</form>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-5 block">
			<legend>Data Antrian</legend>
		</div>
	</div>
</div>

<div class="container" id="auto">
	<div class="row">
		<div class="col-md-6 block">
			<form>
				<legend>Automatic Input</legend>
				<div class="form-group">
					<label id="noplat" class="col-lg-6 control-label text-danger">Nomor Plat</label>
					<div class="col-lg-6">
						<input class="form-control" type="text" maxlength="10" id="noplat" readonly>
					</div>
				</div>
				<div class="form-group">
					<label id="jenis" class="col-lg-6 control-label text-danger">Jenis Mobil</label>
					<div class="col-lg-6">
						<input class="form-control" type="text" maxlength="10" id="jenis" readonly>
					</div>
				</div>
				<div class="form-group">
					<label id="daya" class="col-lg-6 control-label text-danger">Daya Angkut Mobil</label>
					<div class="col-lg-6">
						<input class="form-control" type="text" maxlength="10" id="daya" readonly>
					</div>
				</div>
				<div class="form-group">
					<label id="sopir" class="col-lg-6 control-label text-danger">Nama Sopir</label>
					<div class="col-lg-6">
						<input class="form-control" type="text" maxlength="10" id="sopir" readonly>
					</div>
				</div>
				<div class="form-group">
					<label id="asal" class="col-lg-6 control-label text-danger">Asal Mobil</label>
					<div class="col-lg-6">
						<input class="form-control" type="text" maxlength="10" id="asal" readonly>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-5 block">
			<legend>Data Antrian</legend>

			<div class="table responsive">
				<table>
					<thead>
						<tr>
							<td>Antrian Terakhir</td>
							<td>Sisa Antrian</td>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>