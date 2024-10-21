<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidenceReferenceModel extends Model
{
    use HasFactory;

    // Define the table name if it's not the default
    protected $table = 't_residence_reference';

    protected $fillable = [
        'rr_house_type',           
        'rr_house_ownership',      
        'rr_free_use_reason',      
        'rr_rented_mo_inst',       
        'rr_landlord_name',        
        'rr_address',              
        'rr_lot_ownership',        
        'rr_lot_free_use_reason',  
        'rr_reference1_name',      
        'rr_reference1_address',   
        'rr_reference1_relation',  
        'rr_reference1_mobile',    
       
    ];
}