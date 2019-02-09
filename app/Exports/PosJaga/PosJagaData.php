<?php
namespace App\Exports\PosJaga;
use App\PosJaga;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class PosJagaData implements FromQuery, WithTitle, WithHeadings, WithEvents
{

    public function __construct($id_kecamatan,$id_kelurahan,$nama_pos,$kontruksi,$kondisi,$aktifitas) {
    $this->id_kecamatan = $id_kecamatan;
    $this->id_kelurahan = $id_kelurahan;
    $this->nama_pos = $nama_pos;
    $this->kontruksi = $kontruksi;
    $this->kondisi = $kondisi;
    $this->aktifitas = $aktifitas;
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

          $query= PosJaga::query()->select(
            'id',
            'nama',
            'alamat_kec',
            'alamat_kel',
            'alamat',
            'luas',
            'luas_tanah',
            'kepemilikan',
            DB::raw("(CASE WHEN konstruksi = '1' THEN 'Permanen' WHEN konstruksi = '2' THEN 'Semi Permanen' WHEN konstruksi = '3' THEN 'Darurat' ELSE ' ' END) AS konstruksi"),
            DB::raw("(CASE WHEN kondisi  = '1' THEN 'Baik' WHEN kondisi  = '2' THEN 'Kurang Baik' WHEN kondisi  = '3' THEN 'Rusak Berat' ELSE ' ' END) AS kondisi "),
            DB::raw("(CASE WHEN aktifitas = '1' THEN 'Aktif' WHEN aktifitas = '2' THEN 'Tidak Aktif' ELSE ' ' END) AS aktifitas"),
            'keterangan'
          );
  
          if ($this->id_kecamatan  != '0') $query->where('pos_jagas.id_kecamatan', $this->id_kecamatan);
          if ($this->id_kelurahan  != '0') $query->where('pos_jagas.id_kelurahan', $this->id_kelurahan);
          if (!empty($this->nama_pos)) $query->where('pos_jagas.nama','LIKE',"%$this->nama_pos%");
          if ($this->kontruksi  != '0') $query->where('pos_jagas.konstruksi', $this->kontruksi);
          if ($this->kondisi  != '0') $query->where('pos_jagas.kondisi', $this->kondisi);
          if ($this->aktifitas  != '0') $query->where('pos_jagas.aktifitas', $this->aktifitas);
          $PosJaga = $query;


        return $PosJaga;
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nama',
            'Kecamatan',
            'Kelurahan/ Desa',
            'Alamat',
            'Luas',
            'Luas Tanah',
            'Kepemilikan',
            'Konstruksi',
            'Kondisi',
            'Aktifitas',
            'Keterangan'
        ];
    }
    /**
     * @return string
     */
    public function title(): string
    {
        return 'PosJaga';
    }
}