<?php

namespace App\Http\Controllers;

// use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class UsersController extends Controller
{

    public function export(){

        // return Excel::download(new UsersExport, 'users.html');
        return (new UsersExport)->download('test.xlsx');


    }

}
