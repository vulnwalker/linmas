<?php

namespace App\Exports\Pembinaan;

use App\Pembinaan;
use App\Exports\Pembinaan\PembinaanData;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class PembinaanExport implements WithMultipleSheets
{

    public $tanggal_mulai,$tanggal_selesai,$nama,$penyelengara,$lokasi,$kegiatan;

    public function __construct($tanggal_mulai,$tanggal_selesai,$nama,$penyelengara,$lokasi,$kegiatan) {
    $this->tanggal_mulai = $tanggal_mulai;
    $this->tanggal_selesai = $tanggal_selesai;
    $this->nama = $nama;
    $this->penyelengara = $penyelengara;
    $this->lokasi = $lokasi;
    $this->kegiatan = $kegiatan;
    }

    use Exportable;
    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];
        for ($month = 1; $month <= 1; $month++) {
            $sheets[] = new PembinaanData($this->tanggal_mulai,$this->tanggal_selesai,$this->nama,$this->penyelengara,$this->lokasi,$this->kegiatan);
        }
        return $sheets;
    }
}
