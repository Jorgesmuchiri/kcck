<?php

namespace App\Exports;

use App\Enquiries;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class EnquiriesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Enquiries::select('id','name','email','phone_no')->get();
    }
    

 public function headings(): array
    {
        return [
            'id',
            'Name',
            'Email',
            'Phone No'
            
                ];
    }

}
