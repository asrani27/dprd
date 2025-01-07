<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>
<body>

    <table width="100%">
        <tr>
            <td width="15%">
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('logo/dprd.png'))) }}" width="80px"> &nbsp;&nbsp;
            </td>
            <td style="text-align: center;" width="60%">
                DEWAN PERWAKILAN RAKYAT<BR/>
                PROVINSI KALIMANTAN SELATAN<br/>
                SEKRETARIAT DPRD PROVINSI KALIMANTAN SELATAN<br/>
                JL Lambung Mangkurat No 8 Banjarmasin. Kalimantan Selatan 70111
            </td>
            <td width="15%">
            </td>
            
        </tr>
    </table>
    <hr>
    <h3 style="text-align: center">LAPORAN PANITIA KHUSUS (PANSUS) <br>
        DPRD  PROVINSI KALIMANTAN SELATAN
    </h3> 
    <center>PERIODE : {{\Carbon\Carbon::createFromFormat('m', $bulan)->translatedFormat('F')}} {{$tahun}}</center>
    <br/>
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Masa Kerja</th>
            <th>Pembahasan</th>
            <th>Jumlah Anggota</th>
            <th>Pimpinan</th>
            <th>Komisi</th>
            <th>Anggota</th>
            <th>Keterangan</th>
        </tr>
        @php
            $no =1;
        @endphp
        
        @foreach ($data as $key => $item)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->masa_kerja}}</td>
          <td>{{$item->pembahasan}}</td>
          <td>{{$item->jumlah}}</td>
          <td>{{$item->pimpinan == null ? null : $item->pimpinan->nama}}</td>
          <td>{{$item->komisi == null ? null : $item->komisi->nama}}</td>
          <td>{{$item->anggota == null ? null : $item->anggota->nama}}</td>
          <td>{{$item->keterangan}}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td style="text-align: center"><br/>Banjarmasin, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br/>
            Sekretariat DPRD Prov Kalsel<br/>
            Sekretariat DPRD <br/><br/><br/><br/>

            <u>Drs. H. A.M. Rozaniansyah</u><br/>
            NIP. 19620516 198701 1 015
            </td>
        </tr>
    </table>
</body>
</html>