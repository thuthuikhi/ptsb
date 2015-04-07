
<div class="container">
	<div class="row">
		<div class="col-md-12 block">
			<a href="?"><i class="fui-home"></i> Home</a> || <button class="btn btn-info mrs" onclick="auto();">Mode Otomatis</button> || <button class="btn btn-info mrs" onclick="manual();">Mode Manual</button>
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
					<label id="noplat">Nomor Plat</label>
					<input class="form-control" type="text" maxlength="10" id="noplat" placeholder="Masukkan Nomor Plat" required>
				</div>
			</form>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-5 block">
			<form>
				<legend>Cetak Antrian</legend>
			</form>
		</div>
	</div>
</div>

<div class="container" id="auto">
	<div class="row">
		<div class="col-md-6 block">
			<form>
				<legend>Automatic Input</legend>
				<div class="form-group">
					<label id="noplat">Nomor Plat</label>
					<input class="form-control" type="text" maxlength="10" id="noplat" readonly required>
				</div>
			</form>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-5 block">
			<form>
				<legend>Cetak Antrian</legend>
			</form>
		</div>
	</div>
</div>