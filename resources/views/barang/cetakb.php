<style>
	@media print{
		input.noPrint{
			display: none;
		}
	}

</style>

<table border="1" width="100%" style="border-collapse: collapse;">
	<caption>
		<h3><b>Laporan Data Barang</b></h3>
		<h2><b>PRARARAMA SPORT</b></h2>
		<h4>Jl. Andonohu No. 32B Kota Kendari Sulawesi Tenggara</h4>
	</caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Barcode</th>
			<th>Nama Barang</th>
			<th>Stock</th>
			<th>Harga Satuan</th>
			<th>Harga Jual</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>201901001</td>
            <td>T-Shirt</td>
            <td>50</td>
            <td>120,000</td>
            <td>156,000</td>
		</tr>
	</tbody>
</table>
<br>

<input type="button" class="noPrint" value="Cetak" onclick="window.print()">