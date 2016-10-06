<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\StreamedResponse;
use App\Models\Category;

class CsvController extends Controller
{

     //download CSV
    public function downloadCsv($type)
    {	
    	$type = ucfirst($type);
    	$model = 'App\Models\\'.$type;
        $response = new StreamedResponse(function() use($model){
            // Open output stream
            $handle = fopen('php://output', 'w');

            // Add CSV headers
            fputcsv($handle, $model::$fieldCsv);

            // Get all data
            $model::chunk(1000, function($modelAll) use($handle, $model) {
                foreach ($modelAll as $item) {
                	$data = [];
                   // Add a new row with data
                   foreach( $model::$fieldCsv as $value) {
                   		array_push($data, $item->$value);
                   }
                   fputcsv($handle, $data);
                }
            });
            // Close the output stream
            fclose($handle);
        }, 200, [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="'.$type.'.csv"',
            ]);
        return $response;
    }
}
