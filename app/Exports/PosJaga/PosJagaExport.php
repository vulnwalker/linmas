<?php

namespace App\Exports\PosJaga;

use App\PosJaga;
use App\Exports\PosJaga\PosJagaData;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class PosJagaExport implements WithMultipleSheets
{

    public $id_kecamatan,$id_kelurahan,$nama_pos,$kontruksi,$kondisi,$aktifitas;

    public function __construct($id_kecamatan,$id_kelurahan,$nama_pos,$kontruksi,$kondisi,$aktifitas) {
    $this->id_kecamatan = $id_kecamatan;
    $this->id_kelurahan = $id_kelurahan;
    $this->nama_pos = $nama_pos;
    $this->kontruksi = $kontruksi;
    $this->kondisi = $kondisi;
    $this->aktifitas = $aktifitas;
    }

    use Exportable;
    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];
        for ($month = 1; $month <= 1; $month++) {
            $sheets[] = new PosJagaData($this->id_kecamatan,$this->id_kelurahan,$this->nama_pos,$this->kontruksi,$this->kondisi,$this->aktifitas);
        }
        return $sheets;
    }
}
