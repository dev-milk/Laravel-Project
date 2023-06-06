<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{

    public function export(){

        // ダウンロードする場合
        // return Excel::download(new UsersExport, 'users.xlsx');
        // ファイルをサーバに保存する場合　storage/app
        return Excel::store(new UsersExport, 'users.xlsx');


    }

}
