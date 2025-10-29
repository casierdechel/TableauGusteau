<?php
// =====================
// Class: Report
// =====================
class Report {
    private $reportId;
    private $bulan;
    private $tahun;

    public function __construct($reportId, $bulan, $tahun) {
        $this->reportId = $reportId;
        $this->bulan = $bulan;
        $this->tahun = $tahun;
    }

    public function reportBulanan() {
        echo "Membuat laporan untuk bulan {$this->bulan}/{$this->tahun}.<br>";
    }

    public function cetakReportBulanan() {
        echo "Laporan bulanan dengan ID {$this->reportId} telah dicetak.<br>";
    }
}
?>