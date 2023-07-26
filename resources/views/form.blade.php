<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Data Diri</title>
</head>
<body>
<table>
	<tr><th>Form Data Diri</th></tr>
	<tr><td>
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>: <input type="text" id="nama"></td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>: 
					<input type="text" id="tempat">,
					<input type="text" id="tgl" style="width: 50px;">/
					<input type="text" id="bln" style="width: 50px;">/
					<input type="text" id="thn" style="width: 100px;">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: <input type="textarea" id="alamat" style="height: 50px; max-height: 50px;"></td>
			</tr>
			<tr>
				<td>No. Telp/HP</td>
				<td>: <input type="text" id="tlp"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>: 
					<input type="radio" name="kelamin" value="Laki-Laki"> Laki-Laki
					<input type="radio" name="kelamin" value="Perempuan"> Perempuan
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>: <select id="agama">
					<option value="Islam"> Islam
					<option value="Kristen"> Kristen
					<option value="Buddha"> Buddha
				</select></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>: 
					<input type="checkbox" name="hobi" value="Baca Buku"> Baca Buku
					<input type="checkbox" name="hobi" value="Olah Raga"> Olah Raga
					<input type="checkbox" name="hobi" value="Main Game"> Main Game
					<input type="checkbox" name="hobi" value="Hiking"> Hiking
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button onclick="showForm()">Tampilkan</button>
					<button onclick="resetForm()">Reset</button>
				</td>
			</tr>
		</table>
	</td></tr>
</table>
<script src="{{asset('jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript">
	function showForm() {
		var value = document.getElementsByName('kelamin');
		var kelamin = '';
		var hobi = '';
		for (var radio of value){ if (radio.checked) { kelamin = radio.value; } }

		var markedCheckbox = document.getElementsByName('hobi');  
		for (var checkbox of markedCheckbox) {
			if (hobi != '') { hobi += ','; }
			if (checkbox.checked) { hobi += (checkbox.value == '') ? '' : checkbox.value; }
		}
		alert('Nama Lengkap : '+$('#nama').val()+'\n'+
			'Tempat, Tanggal Lahir : '+$('#tempat').val()+', '+$('#tgl').val()+'/'+$('#bln').val()+'/'+$('#thn').val()+'\n'+
			'Alamat : '+$('#alamat').val()+'\n'+
			'No. Telp/HP : '+$('#tlp').val()+'\n'+
			'Jenis Kelamin : '+kelamin+'\n'+
			'Agama : '+$('#agama').val()+'\n'+
			'Hobi : '+hobi);
	}
</script>
</body>
</html>