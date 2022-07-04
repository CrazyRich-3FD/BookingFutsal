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
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($data as $d)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $d->pelanggan->nama }}</td>
                <td>{{ $d->booking->lapangan->nama }}</td>
                <td>{{ $d->booking->tgl_booking }}</td>
                <td>{{ $d->booking->jam_booking }}</td>
                <td>{{ $d->booking->durasi }} Jam</td>
                <td>{{ $d->pelanggan->no_tlp }}</td>
                <td>{{ $d->pelanggan->alamat }}</td>
                <td>{{ $d->metode_pembayaran }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>