<?php

namespace App\Adapter;

class PdfLibAdapter implements PdfGenerator
{
    protected PdfLib $pdfLib;

    public function __construct(PdfLib $pdfLib)
    {
        $this->pdfLib = $pdfLib;
    }

    public function generate(): void
    {
        $this->pdfLib->createPdf();
    }
}