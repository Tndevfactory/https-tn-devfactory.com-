<?php

namespace App\Imports;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow,DateTimeInterface
{

    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        // echo($row[2]);
        // var_dump($row[2]);

        return new User(
            [
                'name'     => $row['name'],
                'email'    => $row['email' ],
                 'email_verified_at'    => Date::dateTimeToExcel($row['email_verified_at']),
                 'password' => Hash::make($row['password'])
            ]
        );
    }
}