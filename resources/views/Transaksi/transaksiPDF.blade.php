<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
</head>

<body>
    <h1 align="center">Data Transaksi</h1>
    <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
            <tr bgcolor="grey">
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Booking Lapangan</th>
                <th>Tgl Booking</th>
                <th>Jam Booking</th>
                <th>Durasi</th>
                <th>No. Hp</th>
                <th>Alamat</th>
                <th>Pembayaran</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($data as $d)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $d->user->nama }}</td>
                <td>{{ $d->booking->lapangan->nama }}</td>
                <td>{{ $d->booking->tgl_booking }}</td>
                <td>{{ $d->booking->jam_booking }}</td>
                <td>{{ $d->booking->durasi }} Jam</td>
                <td>{{ $d->user->no_hp }}</td>
                <td>{{ $d->user->alamat }}</td>
                <td>{{ $d->metode_pembayaran }}</td>
                <td>Rp. {{ number_format($d->booking->lapangan->harga_normal * $d->booking->durasi, '2', ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>