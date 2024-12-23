<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all(); // Return all user data
    }

    public function headings(): array
    {
        return ['ID', 'Name', 'Email', 'Role']; // Adjust headers as needed
    }
}
