<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class UsersController extends Controller
{

    public function export(){
        // UsersExportがエラー
	    return Excel::download(new UsersExport, 'users.xlsx');

    }

}
