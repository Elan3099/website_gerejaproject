<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\absensi;
use \App\Modeladmin;
use PDF;

class PDFMaker extends Controller
{
	public function gen()

	{
		$data = \App\absensi2::all();
		$data1 = \App\Modeladmin::all();

		$count =count($data);

		$pdf = PDF::loadview('table2', ['data' => $data, 'data1' => $data1, 'count' => $count]);
		return $pdf->stream();
	}

}