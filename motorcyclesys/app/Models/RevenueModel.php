<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevenueModel extends Model
{
    use HasFactory;

    protected $table = 't_revenue';

   
    protected $fillable = [
        'rev_employer_name',
        'rev_employer_address',
        'rev_cellphone_no',
        'rev_tel_no',
        'rev_position',
        'rev_status_of_employment',
        'rev_length_of_employment_years',
        'rev_length_of_employment_months',
        'rev_sss_no',
        'rev_basic_monthly_salary',
        'rev_other_compensation',
        'rev_occupation_or_profession',
        'rev_nature_of_business',
        'rev_length_of_business_years',
        'rev_length_of_business_months',
        'rev_income',
        'rev_other_source_of_income',
    ];
}
