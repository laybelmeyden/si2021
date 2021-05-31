<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExport implements FromCollection,WithHeadings,ShouldAutoSize 
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Номер пользователя', 'Почта', 'Имя', 'Телефон', 'Город', 'Дата регистрации'
        ];
    }

    public function collection()
    {
        return User::select('id','email', 'user_name', 'user_phone', 'user_city', 'created_at')->get();
    }
}
