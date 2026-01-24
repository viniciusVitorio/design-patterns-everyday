<?php

namespace App\Adapter;

class GeneratePdf
{
    private PdfGenerator $generator;

    public function __construct(PdfGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function handle(): void
    {
        $this->generator->generate();
    }
}