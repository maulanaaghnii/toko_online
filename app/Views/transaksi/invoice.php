<html>
    <head>
    </head>
    <body>
        <div style="font-size:64px; color:'#dddddd'"><i>Invoice</i></div>
        <p>
            <i>Alliance Shop</i><br>
            Bekasi,Indonesia<br>
            021123456
        </p>
        <hr>
        <hr>
        <p>
            Pembeli : <?= $pembeli->username ?><br>
            Alamat : <?= $transaksi->alamat ?><br>
            Transaksi No : <?= $transaksi->no ?><br>
            Tanggal : <?= date('Y-m-d',strtotime($transaksi->created_date)) ?>
        </p>
        <table >
            <tr>
                <th><strong>Barang</strong></th>
                <th><strong>Harga Satuan</strong></th>
                <th><strong>Jumlah</strong></th>
                <th><strong>Ongkir</strong></th>
                <th><strong>Total Harga</strong></th>
            </tr>
            <tr>
                <td><?= $barang->nama ?></td>
                <td><?="Rp ",number_format($m->harga,2,',','.') ?> </td>
                <td><?= $transaksi->jumlah ?></td>
                <td><?="Rp ",number_format($transaksi->ongkir,2,',','.') ?> </td>
                <td><?="Rp ",number_format($transaksi->total_harga,2,',','.') ?> </td>
            </tr>
        </table>
    </body>
</html>