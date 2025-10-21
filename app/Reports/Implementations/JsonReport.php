<?php
namespace App\Reports\Implementations;

use App\Interfaces\ReportInterface;

class JsonReport implements ReportInterface
{
public function generate(array $data): string
{
// Lógica real: formatar dados para CSV
$output = "ID,Nome\n";
foreach ($data as $item) {
$output .= "{$item['id']},{$item['name']}\n";
}
return "Conteúdo JSON Gerado: \n" . $output;
}

public function getFileType(): string
{
return 'json';

}
}