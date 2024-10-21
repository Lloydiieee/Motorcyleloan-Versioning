<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpouseModel extends Model
{
    use HasFactory;

    protected $table = "t_spouse";

    protected $fillable = [
        'spouse_first_name',
        'spouse_middle_name',
        'spouse_last_name',
        'spouse_alias',
        'spouse_birthdate',
        'spouse_birthplace',
        'spouse_civil_status',
        'spouse_gender',
        'spouse_phone_number',
        'spouse_telephone_number',
        'spouse_license',
        'spouse_present_add_region',
        'spouse_present_add_province',
        'spouse_present_add_municipal',
        'spouse_present_add_barangay',
        'spouse_present_add_house_number',
        'spouse_present_add_length_service',
        'spouse_present_add_zip_code',
        'spouse_previous_add_region',
        'spouse_previous_add_province',
        'spouse_previous_add_municipal',
        'spouse_previous_add_barangay',
        'spouse_previous_add_house_number',
        'spouse_previous_add_length_service',
        'spouse_previous_add_zip_code',
        'spouse_provincial_add_region',
        'spouse_provincial_add_province',
        'spouse_provincial_add_municipal',
        'spouse_provincial_add_barangay',
        'spouse_provincial_add_house_number',
        'spouse_provincial_add_length_service',
        'spouse_provincial_add_zip_code',
        'spouse_relative_name',
        'spouse_relative_address',
        'spouse_relative_relationship',
        'spouse_relative_phone_number',
    ];
}