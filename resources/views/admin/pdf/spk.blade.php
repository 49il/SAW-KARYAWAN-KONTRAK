<!DOCTYPE html>
<html>
<head>
    <title>SPK Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f5f5f5;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #e3e3e3;
        }

        .rank-column {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>SPK Report Karyawan Kontrak</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>Absensi</th>
                <th>Ide Proposal</th>
                <th>Lama Kerja</th>
                <th>Pendidikan</th>
                <th>Pengalaman Kerja</th>
                <th>Nilai</th>
                <th>Rank</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($ranking as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    @foreach ($value as $key_1 => $value_1)
                        <td>{{ number_format($value_1, 1) }}</td>
                    @endforeach
                    <td class="rank-column">{{ $no++ }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
