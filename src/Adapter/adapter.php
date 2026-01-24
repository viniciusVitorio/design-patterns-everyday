<?php

require '../../vendor/autoload.php';

use App\Adapter\PdfLib;
use App\Adapter\GeneratePdf;
use App\Adapter\PdfLibAdapter;

$pdfLib = new PdfLib();
$adapter = new PdfLibAdapter($pdfLib);

$service = new GeneratePdf($adapter);
$service->handle();
