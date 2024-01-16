<?php
require('../../fpdf186/fpdf.php');

class LaporanPDF extends FPDF
{
    // Fungsi untuk membuat header
    function Header()
    {
        // Set font
        $this->SetFont('Arial','B',16);
        // Move to the right
        $this->Cell(80);
        // Title
        $text = "Data Transaksi";
        $x = ($this->GetPageWidth() - $this->GetStringWidth($text)) / 2;
        $this->Text($x,20,$text);
        // Line break
        $this->Ln(20);
    }
    
    // Fungsi untuk membuat footer
    
    
    
    // Fungsi untuk membuat isi laporan
    function IsiLaporan($data)
    {
        // Set font
        $this->SetFont('Arial','',12);
        // Loop through data and add to PDF
        foreach($data as $row) {

            //tabel outlet
            $this->Cell(0, 10, 'Outlet ' . ": ". $row['id_outlet'], 0, 1);
            
            // tabel pelanggan
            $this->Cell(0, 10, 'Pelanggan ' . ": ". $row['id_member'], 0, 1);

            // tabel Pemesanan
            $this->Cell(0, 10, 'Tanggal Pemesanan ' . ": ". $row['tgl'], 0, 1);

            // tabel batas waktu
            $this->Cell(0, 10, 'Batas Bayar ' . ": ". $row['batas_waktu'], 0, 1);

            // tabel bayar
            $this->Cell(0, 10, 'Tanggal Bayar ' . ": ". $row['tgl_bayar'], 0, 1);
            
            // tabel status
            $this->Cell(0, 10, 'Status ' . ": ". $row['status'], 0, 1);
            
            // tabel pembayaran
            $this->Cell(0, 10, 'Status pembayaran' . ": ". $row['dibayar'], 0, 1);

            // tabel nominal
            $this->Cell(0, 10, 'Nominal' . ": ". $row['nominal'], 0, 1);

            // tabel kasir
            $this->Cell(0, 10, 'Kasir' . ": ". $row['id_user'], 0, 1);

        }
    }

    
}
?>