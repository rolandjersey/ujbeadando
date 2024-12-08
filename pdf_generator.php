<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// TCPDF könyvtár betöltése
require_once('libs/tcpdf/tcpdf.php');

// Adatbázis kapcsolat
include_once 'database.php';

// PDF példány létrehozása
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// PDF metaadatok beállítása
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Szélerőművek');
$pdf->SetTitle('Szélerőművek Adatok');
$pdf->SetSubject('Helyszínek, Megyék, Tornyok');
$pdf->SetKeywords('PDF, Szélerőművek, Adatok');

// Alapértelmezett fejléc és lábléc kikapcsolása
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Betűtípus beállítása
$pdf->SetFont('dejavusans', '', 12);

// 1. Táblázat: Megyék
$pdf->AddPage();
$query = "SELECT id, nev, regio FROM megye ORDER BY id ASC";
$result = $conn->query($query);

$html = '<h1 style="text-align: center;">Megyék</h1>';
$html .= '<table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">';
$html .= '<thead>
            <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Régió</th>
            </tr>
          </thead>';
$html .= '<tbody>';
while ($row = $result->fetch_assoc()) {
    $html .= '<tr>';
    $html .= '<td>' . htmlspecialchars($row['id']) . '</td>';
    $html .= '<td>' . htmlspecialchars($row['nev']) . '</td>';
    $html .= '<td>' . htmlspecialchars($row['regio']) . '</td>';
    $html .= '</tr>';
}
$html .= '</tbody>';
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');

// 2. Táblázat: Helyszínek
$pdf->AddPage();
$query = "SELECT helyszin.id, helyszin.nev, megye.nev AS megye_nev 
          FROM helyszin 
          INNER JOIN megye ON helyszin.megyeid = megye.id 
          ORDER BY helyszin.id ASC";
$result = $conn->query($query);

$html = '<h1 style="text-align: center;">Helyszínek</h1>';
$html .= '<table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">';
$html .= '<thead>
            <tr>
                <th>ID</th>
                <th>Helyszín</th>
                <th>Megye</th>
            </tr>
          </thead>';
$html .= '<tbody>';
while ($row = $result->fetch_assoc()) {
    $html .= '<tr>';
    $html .= '<td>' . htmlspecialchars($row['id']) . '</td>';
    $html .= '<td>' . htmlspecialchars($row['nev']) . '</td>';
    $html .= '<td>' . htmlspecialchars($row['megye_nev']) . '</td>';
    $html .= '</tr>';
}
$html .= '</tbody>';
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');

// 3. Táblázat: Tornyok
$pdf->AddPage();
$query = "SELECT 
            torony.id AS torony_id, 
            torony.darab, 
            torony.teljesitmeny, 
            helyszin.nev AS helyszin_nev
          FROM 
            torony
          INNER JOIN 
            helyszin 
          ON 
            torony.helyszinid = helyszin.id
          ORDER BY torony.id ASC";
$result = $conn->query($query);

$html = '<h1 style="text-align: center;">Tornyok és Helyszínek</h1>';
$html .= '<table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">';
$html .= '<thead>
            <tr>
                <th>ID</th>
                <th>Darab</th>
                <th>Teljesítmény</th>
                <th>Helyszín</th>
            </tr>
          </thead>';
$html .= '<tbody>';
while ($row = $result->fetch_assoc()) {
    $html .= '<tr>';
    $html .= '<td>' . htmlspecialchars($row['torony_id']) . '</td>';
    $html .= '<td>' . htmlspecialchars($row['darab']) . '</td>';
    $html .= '<td>' . htmlspecialchars($row['teljesitmeny']) . '</td>';
    $html .= '<td>' . htmlspecialchars($row['helyszin_nev']) . '</td>';
    $html .= '</tr>';
}
$html .= '</tbody>';
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');

// PDF megjelenítése a böngészőben
$pdf->Output('szeleromuvek_adatok.pdf', 'I');
?>
