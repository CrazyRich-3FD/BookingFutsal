<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;


class TransaksiExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
            $transaksi = DB::table('transaksi')
            ->join('pelanggan', 'pelanggan.id', '=', 'transaksi.pelanggan_id')
            ->join('booking', 'booking.id', '=', 'transaksi.booking_id')
            ->join('lapangan', 'lapangan.id', '=', 'booking.lapangan_id')

            ->select(
                'pelanggan.nama AS nama',
                'lapangan.nama AS nama lapangan',
                'booking.tgl_booking AS tanggal booking',
                'booking.jam_booking AS jam booking',
                'booking.durasi AS durasi booking',
                'pelanggan.no_tlp AS no tlp',
                'pelanggan.alamat AS alamat',
                'transaksi.metode_pembayaran',
            )
            ->get();


        return $transaksi;
    }

    public function headings(): array
    {
        return ["Nama Pelanggan", "Nama Lapangan", "Tanggal Booking", "Jam Booking", "Durasi Booking", "No Telephone", "Alamat", "Metode Pembayaran"];
    }

    public function registerEvents(): array
    {
        $styleArray = [
            
            'alignment' => array(
				'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ),

        ];

        return [
            AfterSheet::class    => function (AfterSheet $event) use ($styleArray) {

                $cellRange = 'A1:H1'; // All headers

                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setName('Calibri Bold');
                $event->sheet->getDelegate()->getStyle($cellRange)->ApplyFromArray($styleArray);
                
            },
        ];
    }
}
