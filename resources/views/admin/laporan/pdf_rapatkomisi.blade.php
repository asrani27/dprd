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
    <h3 style="text-align: center">LAPORAN AGENDA RAPAT KOMISI <br>
        DPRD  PROVINSI KALIMANTAN SELATAN
    </h3> 
    <center>PERIODE : {{\Carbon\Carbon::createFromFormat('m', $bulan)->translatedFormat('F')}} {{$tahun}}</center>
    <br/>
    <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tanggal Rapat</th>
            <th>Nama Rapat</th>
            <th>Jenis Rapat</th>
            <th>Tempat Rapat</th>
            <th>Komisi</th>
            <th>Keterangan</th>
        </tr>
        @php
            $no =1;
        @endphp
        
        @foreach ($data as $key => $item)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{\Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y')}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->jenis}}</td>
          <td>{{$item->tempat}}</td>
          <td>{{$item->komisi == null ? null : $item->komisi->nama}}</td>
          <td>{{$item->keterangan}}</td>
        </tr>
        @endforeach
    </table>

    <table width="100%">
        <tr>
            <td width="60%"></td>
            <td></td>
            <td><br/>Banjarmasin, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br/>
            Sekretariat DPRD Prov Kalsel<br/>
            Sekretariat DPRD <br/><br/><br/><br/>

            <u>Drs. H. A.M. Rozaniansyah</u><br/>
            NIP. 19620516 198701 1 015
            </td>
        </tr>
    </table>
</body>
</html>