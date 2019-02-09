<?php
namespace App\Exports\Pembinaan;
use App\Pembinaan;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class PembinaanData implements FromQuery, WithTitle, WithHeadings, WithEvents
{

    public function __construct($tanggal_mulai,$tanggal_selesai,$nama,$penyelengara,$lokasi,$kegiatan) {
    $this->tanggal_mulai = $tanggal_mulai;
    $this->tanggal_selesai = $tanggal_selesai;
    $this->nama = $nama;
    $this->penyelengara = $penyelengara;
    $this->lokasi = $lokasi;
    $this->kegiatan = $kegiatan;
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        $styleArray = [
            'font' => [
                'bold' => true,
            ]
        ];
        return [
            // Handle by a closure.
            AfterSheet::class => function (AfterSheet $event) use ($styleArray) {
                // $event->sheet->insertNewRowBefore(7, 2);
                // $event->sheet->insertNewColumnBefore('A', 2);
                $event->sheet->getStyle('A1:S1')->applyFromArray($styleArray);
                // $event->sheet->setCellValue('E27', '=SUM(E2:E26)');
            },
        ];
    }
     /**
     * @return Builder
     */
    public function query()
    {

      $nama = $this->nama;
      $penyelengara = $this->penyelengara;
      $lokasi = $this->lokasi;
      $kegiatan = $this->kegiatan;
      $tanggal_mulai = $this->tanggal_mulai;
      $tanggal_selesai = $this->tanggal_selesai;
      $dari = "";
      $sampai ="";

    if (!empty($tanggal_mulai)){
        $tanggalMulaiExplode = explode('/',$this->tanggal_mulai);
        $dari =  date($tanggalMulaiExplode[2].'-'.$tanggalMulaiExplode[0].'-'.$tanggalMulaiExplode[1]);
      }   

    if (!empty($tanggal_selesai)){
        $tanggalSelesaiExplode = explode('/',$this->tanggal_selesai);
        $sampai = date($tanggalSelesaiExplode[2].'-'.$tanggalSelesaiExplode[0].'-'.$tanggalSelesaiExplode[1]);
    }

          $query= Pembinaan::query()->select('id');
  
          if (!empty($nama)) $query->where('pembinaans.nama','LIKE', "%$nama%");
          if (!empty($penyelengara)) $query->where('pembinaans.penyelengara','LIKE', "%$penyelengara%");
          if (!empty($lokasi)) $query->where('pembinaans.lokasi','LIKE', "%$lokasi%");
          if (!empty($kegiatan)) $query->where('pembinaans.kegiatan','LIKE', "%$kegiatan%");
          if (!empty($tanggal_mulai) && empty($tanggal_selesai)){
            $query->where('tanggal_mulai','<=', $dari);
          } 
          if (!empty($tanggal_mulai) && !empty($tanggal_selesai)){
            $query->whereBetween('tanggal_mulai', [$dari, $sampai]);
          } 

          $Pembinaan = $query;


        return $Pembinaan;
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nama Kegiatan',
            'Lokasi',
            'Kegaitan',
            'Tanggal Mulai',
            'Tanggal Selesai',
            'Penyelengara',
        ];
    }
    /**
     * @return string
     */
    public function title(): string
    {
        return 'Pembinaan';
    }
}