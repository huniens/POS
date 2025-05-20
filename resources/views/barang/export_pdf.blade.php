<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 6px 20px 5px 20px;
            line-height: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td, th {
            padding: 4px 3px;
        }

        th {
            text-align: left;
        }

        .d-block {
            display: block;
        }

        img.image {
            width: auto;
            height: 80px;
            max-width: 150px;
            max-height: 150px;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .p-1 {
            padding: 5px 1px 5px 1px;
        }

        .font-10 {
            font-size: 10pt;
        }

        .font-11 {
            font-size: 11pt;
        }

        .font-12 {
            font-size: 12pt;
        }

        .font-13 {
            font-size: 13pt;
        }

        .border-bottom-header {
            border-bottom: 1px solid;
        }

        .border-all, .border-all th, .border-all td {
            border: 1px solid;
        }
    </style>
</head>
<body>
<table width="100%" style="border-bottom: 2px solid black; padding-bottom: 10px;">
    <tr>
        <td width="15%" style="text-align: center; vertical-align: top;">
            <img src="{{ asset('logo.png') }}" style="width: 90px; height: auto;">
        </td>
        <td width="85%" style="text-align: center; line-height: 1.4;">
            <div style="font-size: 14px; font-weight: bold;">
                KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI
            </div>
            <div style="font-size: 16px; font-weight: bold;">
                POLITEKNIK NEGERI MALANG
            </div>
            <div style="font-size: 12px;">
                Jl. Soekarno-Hatta No. 9 Malang 65141
            </div>
            <div style="font-size: 12px;">
                Telepon (0341) 404424 Pes. 101-105, 0341-404420, Fax. (0341) 404420
            </div>
            <div style="font-size: 12px;">
                Laman: www.polinema.ac.id
            </div>
        </td>
    </tr>
</table>
<h3 class="text-center">LAPORAN DATA BARANG</h3>
<table class="border-all">
    <thead>
    <tr>
        <th class="text-center">No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th class="text-right">Harga Beli</th>
        <th class="text-right">Harga Jual</th>
        <th>Kategori</th>
    </tr>
    </thead>
    <tbody>
    @foreach($barang as $b)
        <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $b->barang_kode }}</td>
            <td>{{ $b->barang_nama }}</td>
            <td class="text-right">{{ number_format($b->harga_beli, 0, ',', '.') }}</td>
            <td class="text-right">{{ number_format($b->harga_jual, 0, ',', '.') }}</td>
            <td>{{ $b->kategori->kategori_nama }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>