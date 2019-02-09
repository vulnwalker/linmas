<?php
namespace App\Exports\Linmas;
use App\Linma;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class LinmasData implements FromQuery, WithTitle, WithHeadings, WithEvents
{

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
                $event->sheet->getStyle('A1:T1')->applyFromArray($styleArray);
                // $event->sheet->setCellValue('E27', '=SUM(E2:E26)');
            },
        ];
    }
     /**
     * @return Builder
     */
    public function query()
    {

          $query= Linma::query()->select('id','no_angota','no_ktp','nama','alamat','alamat_kecamatan','alamat_kelurahan','rt','rw','hp','status','agama','jenis_kelamin','gol_darah','pendidikan','jabatan','keterangan','uk_baju','uk_sepatu',
            DB::raw("(CASE WHEN status_linmas = '1' THEN 'Telah Disahkan' WHEN status_linmas = '0' THEN 'Belum Disahkan' ELSE ' ' END) AS status_linmas"));
  
          if ($this->id_kecamatan  != '0') $query->where('linmas.id_kecamatan', $this->id_kecamatan);
          if ($this->id_kelurahan  != '0') $query->where('linmas.id_kelurahan', $this->id_kelurahan);
          // if (!empty($this->status_linmas)) $query->where('linmas.status_linmas', $this->status_linmas);
          if ($this->status_linmas == "0" || $this->status_linmas == "1") $query->where('linmas.status_linmas', $this->status_linmas);
          if (!empty($this->nama)) $query->where('linmas.nama', $this->nama);
          if ($this->agama  != '') $query->where('linmas.agama', $this->agama);
          if ($this->jenis_kelamin  != '') $query->where('linmas.jenis_kelamin', $this->jenis_kelamin);
          if ($this->status_kawin  != '') $query->where('linmas.status', $this->status_kawin);
          if ($this->pendidikan  != '') $query->where('linmas.pendidikan', $this->pendidikan);
          $linmas = $query;


        return $linmas;
    }
    public function headings(): array
    {
        return [
            'Id','Nomor Angota','No KTP','Nama','Alamat','Kecamatan','Kelurahan/ Desa','RT','RW','No HP','Status','Agama','Jenis Kelamin','Gol Darah','Pendidikan','Jabatan','Keterangan','Ukuran Baju','Ukuran Sepatu','Status Linmas'
        ];
    }
    /**
     * @return string
     */
    public function title(): string
    {
        return 'Linmas';
    }
}