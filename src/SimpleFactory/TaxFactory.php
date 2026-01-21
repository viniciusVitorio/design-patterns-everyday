<?php

namespace App\SimpleFactory;

use App\SimpleFactory\Tax\Icms;
use App\SimpleFactory\Tax\Ipi;

class TaxFactory
{
    public static function create($taxType)
    {
        if($taxType == "ipi") {
            return new IPI();
        }

        if($taxType == "icms") {
            return new ICMS();
        }
    }
}