<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;


// class UsersExport implements FromCollection, WithHeadings, WithTitle
class UsersExport implements FromView, WithHeadings, WithTitle

{

    // use Exportable;

    // public function collection()
    // {
    //     return User::all();
    // }

    public function view(): View
    {
        return view('exports.users', [
            'users' => User::all()
        ]);
    }

    public function headings(): array
    {
        return [
            '#',
            'name',
            'email',
            'email_verified_at',
            'created_at',
            'updated_at'
        ];
    }

    public function title(): string{

		return 'test';

	}



}




