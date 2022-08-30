<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(){
        $data = DB::table('products')->get()->toArray();
        ob_start();
        ?>
        <h3>Our products are:</h3>
        <ul>
            <?php
                foreach ($data as $record) {
                    echo '<li>'. $record->product . '</li>';
                }
            ?>
        </ul>
        <?php
        return ob_get_clean();
    }
}
