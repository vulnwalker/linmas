<?php

namespace App\Exports\Linmas;

use App\Linma;
use App\Exports\Linmas\LinmasData;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class LinmasExport implements WithMultipleSheets
{

    public $status_linmas,$id_kecamatan,$id_kelurahan,$nama,$agama,$jenis_kelamin,$status_kawin,$pendidikan;

    public function __construct($status_linmas,$id_kecamatan,$id_kelurahan,$nama,$agama,$jenis_kelamin,$status_kawin,$pendidikan) {
    $this->status_linmas = $status_linmas;
    $this->id_kecamatan = $id_kecamatan;
    $this->id_kelurahan = $id_kelurahan;
    $this->nama = $nama;
    $this->agama = $agama;
    $this->jenis_kelamin = $jenis_kelamin;
    $this->status_kawin = $status_kawin;
    $this->pendidikan = $pendidikan;
    }

    use Exportable;
    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];
        for ($month = 1; $month <= 1; $month++) {
            $sheets[] = new LinmasData($this->status_linmas,$this->id_kecamatan,$this->id_kelurahan,$this->nama,$this->agama,$this->jenis_kelamin,$this->status_kawin,$this->pendidikan);
        }
        return $sheets;
    }
}
