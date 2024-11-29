<?php

use App\Models\Anggota;
use App\Models\Komisi;
use App\Models\Pimpinan;

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
