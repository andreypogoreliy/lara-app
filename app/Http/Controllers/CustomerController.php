<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $response = $this->getHeader();

        $data = DB::table('customers')->get()->toArray();
        foreach ($data as $record) {
            $response .= $record->id  . ' ' . $record->name . '<br>';
        }

        $response .= $this->getFooter();

        return $response;
    }
    protected function getHeader(){
        return '
            <!doctype html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>'. __FILE__ . '</title>
            </head>
            <body>
';
    }
    protected function getFooter(): string
    {
        return '

            </body>
            </html>
';
    }
}
