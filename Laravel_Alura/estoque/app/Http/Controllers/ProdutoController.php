<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24/04/18
 * Time: 17:30
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('SELECT * FROM tb_usuario');
        return view('listagem')->with('produtos',$produtos);
    }
}