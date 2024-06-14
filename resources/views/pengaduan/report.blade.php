<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengaduan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Laporan Pengaduan</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Pelapor</th>
                <th>Telepon</th>
                <th>Kategori</th>
                <th>Tersangka</th>
                <th>Tanggal Kejadian</th>
                <th>Isi Pengaduan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengaduan as $item)
            <tr>
                <td>{{ $item->nama_pelapor }}</td>
                <td>{{ $item->telp_pelapor }}</td>
                <td>{{ $item->kategori->nama_pengaduan }}</td>
                <td>{{ $item->tersangka }}</td>
                <td>{{ $item->tgl_kejadian }}</td>
                <td>{{ $item->isi_pengaduan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
