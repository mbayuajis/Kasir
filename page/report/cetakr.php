<style>
	@media print{
		input.noPrint{
			display: none;
		}
	}

</style>

<table border="1" width="100%" style="border-collapse: collapse;">
	<caption>
		<h3><b>Laporan Data Penjualan</b></h3>
		<h2><b>PRARARAMA SPORT</b></h2>
		<h4>Jl. Andonohu No. 32B Kota Kendari Sulawesi Tenggara</h4>
	</caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Tgl. Transaksi</th>
			<th>No. Transaksi</th>
			<th>Barcode</th>
			<th>Nama Barang</th>
			<th>Qty</th>
			<th>Harga</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>2019/01/22</td>
			<td>201902001</td>
            <td>201901001</td>
            <td>T-Shirt</td>
            <td>1</td>
            <td>156,000</td>
		</tr>
	</tbody>
</table>
<br>

<input type="button" class="noPrint" value="Cetak" onclick="window.print()">