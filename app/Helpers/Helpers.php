<?php

use App\Models\Komisi;
use App\Models\Anggota;
use App\Models\Pimpinan;
use App\Models\RapatKomisi;
use App\Models\RapatPansus;

function pimpinan()
{
    return Pimpinan::get();
}

function komisi()
{
    return Komisi::get();
}

function anggota()
{
    return Anggota::get();
}

function rapatkomisi()
{
    return RapatKomisi::get();
}
function rapatpansus()
{
    return RapatPansus::get();
}
