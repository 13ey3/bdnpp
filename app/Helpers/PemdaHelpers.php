<?php

use App\Models\Setting\Pemda;

function logo_pemda()
{
    return Pemda::pluck('logo_pemda')->first();
}