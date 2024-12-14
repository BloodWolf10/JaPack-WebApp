<?php
// Include TCPDF library
require_once('vendor/autoload.php');

// Sample table data (replace with your actual data)
$tableData = [
    ['ID', 'Name', 'Age', 'City'],
    [1, 'John Doe', 25, 'New York'],
    [2, 'Jane Smith', 30, 'Los Angeles'],
    [3, 'Sam Green', 22, 'Chicago'],
];

// Initialize TCPDF
$pdf = new TCPDF();

// Set document information
$pdf->SetCreator('My Application');
$pdf->SetTitle('Table Data Export');
$pdf->SetHeaderData('', 0, 'Table Data', 'Generated with TCPDF');

// Set font
$pdf->SetFont('helvetica', '', 12);

// Add a page
$pdf->AddPage();

// Create HTML table
$html = '<table border="1" cellpadding="5">';
foreach ($tableData as $row) {
    $html .= '<tr>';
    foreach ($row as $cell) {
        $html .= '<td>' . $cell . '</td>';
    }
    $html .= '</tr>';
}
$html .= '</table>';

// Output the HTML as PDF
$pdf->writeHTML($html);

// Close and output PDF document
$pdf->Output('table_data.pdf', 'I');
?>
