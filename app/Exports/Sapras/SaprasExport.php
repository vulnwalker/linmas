<?php

namespace App\Exports\Sapras;

use App\Sapra;
use App\Exports\Sapras\SaprasData;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class SaprasExport implements WithMultipleSheets
{

    public $id_kecamatan,$id_kelurahan,$jns_sapras,$kondisi,$tahun,$keteranganItem;

    public function __construct($id_kecamatan,$id_kelurahan,$jns_sapras,$kondisi,$tahun,$keteranganItem) {
    $this->id_kecamatan = $id_kecamatan;
    $this->id_kelurahan = $id_kelurahan;
    $this->jns_sapras = $jns_sapras;
    $this->kondisi = $kondisi;
    $this->tahun = $tahun;
    $this->keteranganItem = $keteranganItem;
    }

    use Exportable;
    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];
        for ($month = 1; $month <= 1; $month++) {
            $sheets[] = new SaprasData($this->id_kecamatan,$this->id_kelurahan,$this->jns_sapras,$this->kondisi,$this->tahun,$this->keteranganItem);
        }
        return $sheets;
    }
}
