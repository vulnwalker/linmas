<?php
namespace App\Exports\Sapras;
use App\Sapra;
use App\Wilayah;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class SaprasData implements FromQuery, WithTitle, WithHeadings, WithEvents
{

    public function __construct($id_kecamatan,$id_kelurahan,$jns_sapras,$kondisi,$tahun,$keteranganItem) {
    $this->id_kecamatan = $id_kecamatan;
    $this->id_kelurahan = $id_kelurahan;
    $this->jns_sapras = $jns_sapras;
    $this->kondisi = $kondisi;
    $this->tahun = $tahun;
    $this->keteranganItem = $keteranganItem;
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
        $jenis_sapras = '';
        $kondisi = '';
        $tahun = '';
        $keteranganItem = '';
        $id_kecamatan = '';
        $id_kelurahan = '';

        if(!empty($this->id_kecamatan)) {
          $id_kecamatan = " AND a.id_kecamatan ='".$this->id_kecamatan."'";
        }

        if(!empty($this->id_kelurahan)) {
          $id_kelurahan = " AND a.id_kelurahan ='".$this->id_kelurahan."'";
        }

        if(!empty($this->jns_sapras)) {
          $jenis_sapras = " AND a.jenis_sapras ='".$this->jns_sapras."'";
        }

        if(!empty($this->kondisi)) {
          $kondisi = " AND a.kondisi ='".$this->kondisi."'";
        }

        if(!empty($this->tahun)) {
          $tahun = " AND a.tahun ='".$this->tahun."'";
        }

        if(!empty($this->keteranganItem)) {
          $keteranganItem = " AND a.ket_item LIKE '%".$this->keteranganItem."%'";
        }
        
        $where = " where 1=1 ".$id_kecamatan.$id_kelurahan.$jenis_sapras.$kondisi.$tahun.$keteranganItem; 
          $query= DB::query()->select(DB::raw(
            "a.id,d.nama as nama_sapras,a.ket_item,a.keterangan, b.nama as nama_kec,c.nama as nama_kel,a.tahun,a.kondisi from sapras a 
             left join jns_sapras d on a.jenis_sapras = d.id 
             left join wilayah b on a.id_kecamatan = b.kd_kec and b.kd_kel_des = '00'
             left join wilayah c on a.id_kecamatan = c.kd_kec and a.id_kelurahan = c.kd_kel_des".$where
           ))->orderBy('id', 'asc');
          //$query= Sapra::select('sapras.*','jns_sapras.nama')->join('jns_sapras', 'sapras.jenis_sapras', '=', 'jns_sapras.id');
  
          // if ($this->id_kecamatan  != '0') $query->where('linmas.id_kecamatan', $this->id_kecamatan);
          // if ($this->id_kelurahan  != '0') $query->where('linmas.id_kelurahan', $this->id_kelurahan);
          // if ($this->status_linmas == "0" || $this->status_linmas == "1") $query->where('linmas.status_linmas', $this->status_linmas);
         $sapras = $query;

        return $sapras;
    }
    public function headings(): array
    {
        return [
            'ID','JENIS SAPRAS','MERK / TYPE / SPESIFIKASI','KETERANGAN','KECAMATAN','KELURAHAN','TAHUN','KONDISI'
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