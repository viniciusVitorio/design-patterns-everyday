<?php

namespace App\Adapter;

interface PdfGenerator
{
    public function generate(): void;
}