<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequirementsModel extends Model
{
    protected $table = 't_requirements';

    protected $fillable = [
       'req_proof_of_billing',
        'req_status',
        'req_capacity',
        'req_capital',
        'req_condition',
        'req_id_type',
        'req_id_number',
        'req_id_date_issued',
        'req_id_expiration_date',
        'req_name_of_brgy_capt',
        'req_brgy_capt_contact',
        'req_feedback_comments',
        'req_approved',
        'req_reasons',
    ];
}
