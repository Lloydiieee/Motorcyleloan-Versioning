<?php

namespace App\Http\Controllers;

use App\Models\RequirementsModel;
use App\Models\DependentModel;
use App\Models\RevenueModel;
use App\Models\ResidenceReferenceModel;
use App\Models\SpouseModel;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public static function residence(){
        $info = ResidenceReferenceModel::get();
        return view('pages.apply.residence.rr-index')->with(['info' => $info]);
    }
    public static function revenue(){
        $info = RevenueModel::get();
        return view('pages.apply.revenue.revenue-index')->with(['info' => $info]);
    }
    public static function dependent(){
        $info = DependentModel::get();
        return view('pages.apply.dependents.dependents-index')->with(['info' => $info]);
    }
    public static function requirement(){
        $info = RequirementsModel::get();
        return view('pages.apply.requirement.requirement-index')->with(['info' => $info]);
    }
    public static function spouse()
    {
        $info = SpouseModel::get();
        return view('pages.apply.spouse-index')->with(['info' => $info]);
    }


    public function residence_store(Request $request)
    {
        // Validate form input
        $request->validate([
            'inp_house_type' => 'required|string',
            'inp_house_ownership' => 'required|string',
            'inp_free_use_reason' => 'nullable|string',
            'inp_rented_mo_inst' => 'nullable|numeric',
            'inp_landlord_name' => 'nullable|string',
            'inp_address' => 'required|string',
            'inp_lot_ownership' => 'required|string',
            'inp_lot_free_use_reason' => 'nullable|string',
            'inp_reference1_name' => 'required|string',
            'inp_reference1_address' => 'required|string',
            'inp_reference1_relation' => 'required|string',
            'inp_reference1_mobile' => 'required|numeric', 
            
        ]);
    
        // Store the validated data
        ResidenceReferenceModel::create([
            'rr_house_type' => $request->inp_house_type,
            'rr_house_ownership' => $request->inp_house_ownership,
            'rr_free_use_reason' => $request->inp_free_use_reason,
            'rr_rented_mo_inst' => $request->inp_rented_mo_inst,
            'rr_landlord_name' => $request->inp_landlord_name,
            'rr_address' => $request->inp_address,
            'rr_lot_ownership' => $request->inp_lot_ownership,
            'rr_lot_free_use_reason' => $request->inp_lot_free_use_reason,
            'rr_reference1_name' => $request->inp_reference1_name,
            'rr_reference1_address' => $request->inp_reference1_address,
            'rr_reference1_relation' => $request->inp_reference1_relation,
            'rr_reference1_mobile' => $request->inp_reference1_mobile,
            
        ]);
    
        // Redirect or return success message
        return redirect()->back()->with('success', 'Data saved successfully!');
    }
    
    public function revenue_store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'inp_employer_name' => 'required|string|max:255',
        'inp_employer_address' => 'required|string|max:255',
        'inp_cellphone_no' => 'required|string|max:255',
        'inp_tel_no' => 'required|string|max:255',
        'inp_position' => 'required|string|max:255',
        'inp_status_of_employment' => 'required|in:Contractual,Probationary,Casual,Permanent',
        'inp_length_of_employment_years' => 'required|string|max:255',
        'inp_length_of_employment_months' => 'required|string|max:255',
        'inp_sss_no' => 'required|string|max:255',
        'inp_basic_monthly_salary' => 'required|numeric|min:0',
        'inp_other_compensation' => 'required|numeric|min:0',
        'inp_occupation_or_profession' => 'required|string|max:255',
        'inp_nature_of_business' => 'required|string|max:255',
        'inp_length_of_business_years' => 'required|string|max:255',
        'inp_length_of_business_months' => 'required|string|max:255',
        'inp_income' => 'required|numeric|min:0',
        'inp_other_source_of_income' => 'required|numeric|min:0',
    ]);

    // Create a new revenue record in the database
    RevenueModel::create([
        'rev_employer_name' => $request->inp_employer_name,
        'rev_employer_address' => $request->inp_employer_address,
        'rev_cellphone_no' => $request->inp_cellphone_no,
        'rev_tel_no' => $request->inp_tel_no,
        'rev_position' => $request->inp_position,
        'rev_status_of_employment' => $request->inp_status_of_employment,
        'rev_length_of_employment_years' => $request->inp_length_of_employment_years,
        'rev_length_of_employment_months' => $request->inp_length_of_employment_months,
        'rev_sss_no' => $request->inp_sss_no,
        'rev_basic_monthly_salary' => $request->inp_basic_monthly_salary,
        'rev_other_compensation' => $request->inp_other_compensation,
        'rev_occupation_or_profession' => $request->inp_occupation_or_profession,
        'rev_nature_of_business' => $request->inp_nature_of_business,
        'rev_length_of_business_years' => $request->inp_length_of_business_years,
        'rev_length_of_business_months' => $request->inp_length_of_business_months,
        'rev_income' => $request->inp_income,
        'rev_other_source_of_income' => $request->inp_other_source_of_income,
    ]);

    // Redirect or return success message
    return redirect()->back()->with('success', 'Revenue data saved successfully!');
}


         public function dependent_store(Request $request){

        $request->validate([
            'inp_name' => 'required|string|max:255',
            'inp_age' => 'required|integer|min:0',
            'inp_school_status' => 'nullable|string|max:255',
            'inp_school_name' => 'nullable|string|max:255',
            'inp_address' => 'nullable|string|max:255',
            'inp_matriculation' => 'nullable|string|max:255',
            'inp_occupation' => 'nullable|string|max:255',
            'inp_company' => 'nullable|string|max:255',
            'inp_income' => 'nullable|numeric|min:0',
        ]);

        DependentModel::create([
            'dep_name' => $request->inp_name,
            'dep_age' => $request->inp_age,
            'dep_school_status' => $request->inp_school_status,
            'dep_school_name' => $request->inp_school_name,
            'dep_address' => $request->inp_address,
            'dep_matriculation' => $request->inp_matriculation,
            'dep_occupation' => $request->inp_occupation,
            'dep_company' => $request->inp_company,
            'dep_income' => $request->inp_income,
        ]);

        // Redirect or return success message
        return redirect()->back()->with('success', 'Dependent details saved successfully!');
    }
    public function requirement_store(Request $request)
    {
        $request->validate([
            'inp_proof_of_billing' => 'required|string|max:255',
            'inp_status' => 'required|string|max:255',
            'inp_capacity' => 'required|string|max:255',
            'inp_capital' => 'required|string|max:255',
            'inp_condition' => 'required|string|max:255',
            'inp_id_type' => 'nullable|string|max:255',
            'inp_id_number' => 'nullable|string|max:255',
            'inp_id_date_issued' => 'nullable|date',
            'inp_id_expiration_date' => 'nullable|date',
            'inp_name_of_brgy_capt' => 'nullable|string|max:255',
            'inp_brgy_capt_contact' => 'nullable|string|max:255',
            'inp_feedback_comments' => 'nullable|string|max:255',
            'inp_approved' => 'nullable|string|max:255',
            'inp_reasons' => 'nullable|string',
        ]);

        RequirementsModel::create([
            'req_proof_of_billing' => $request->inp_proof_of_billing,
            'req_status' => $request->inp_status,
            'req_capacity' => $request->inp_capacity,
            'req_capital' => $request->inp_capital,
            'req_condition' => $request->inp_condition,
            'req_id_type' => $request->inp_id_type,
            'req_id_number' => $request->inp_id_number,
            'req_id_date_issued' => $request->inp_id_date_issued,
            'req_id_expiration_date' => $request->inp_id_expiration_date,
            'req_name_of_brgy_capt' => $request->inp_name_of_brgy_capt,
            'req_brgy_capt_contact' => $request->inp_brgy_capt_contact,
            'req_feedback_comments' => $request->inp_feedback_comments,
            'req_approved' => $request->inp_approved,
            'req_reasons' => $request->inp_reasons,
        ]);
        // Redirect or return success message
        return redirect()->back()->with('success', 'Requirement data saved successfully!');
    }
    public static function spouse_store(Request $request)
    {
        $request->validate([
            'inp_fn' => 'required|string|max:255',
            'inp_mn' => 'required|string|max:255',
            'inp_ln' => 'required|string|max:255',
            'inp_alias' => 'required|string|max:255',
            'inp_dob' => 'required|date|max:255',
            'inp_pob' => 'required|string|max:255',
            'inp_cs' => 'required|string|max:255',
            'inp_gender' => 'required|string|max:255',
            'inp_pn' => 'required|string|max:255',
            'inp_tn' => 'required|string|max:255',
            'inp_dl' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'citymun' => 'required|string|max:255',
            'brgy' => 'required|string|max:255',
            'inp_pahns' => 'required|string|max:255',
            'inp_palos' => 'required|string|max:255',
            'inp_pazc' => 'required|string|max:255',
            'region_previous' => 'required|string|max:255',
            'province_previous' => 'required|string|max:255',
            'citymun_previous' => 'required|string|max:255',
            'brgy_previous' => 'required|string|max:255',
            'inp_prehns' => 'required|string|max:255',
            'inp_prelos' => 'required|string|max:255',
            'inp_prezc' => 'required|string|max:255',
            'region_provincial' => 'required|string|max:255',
            'province_provincial' => 'required|string|max:255',
            'citymun_provincial' => 'required|string|max:255',
            'brgy_provincial' => 'required|string|max:255',
            'inp_provhns' => 'required|string|max:255',
            'inp_provlos' => 'required|string|max:255',
            'inp_provzc' => 'required|string|max:255',
            'inp_relname' => 'required|string|max:255',
            'inp_reladd' => 'required|string|max:255',
            'inp_relrel' => 'required|string|max:255',
            'inp_relphone' => 'required|string|max:255',





        ]);

        SpouseModel::create([
            'spouse_first_name' =>$request->inp_fn,
            'spouse_middle_name'=>$request->inp_mn,
            'spouse_last_name'=>$request->inp_ln,
            'spouse_alias'=>$request->inp_alias,
            'spouse_birthdate'=>$request->inp_dob,
            'spouse_birthplace'=>$request->inp_pob,
            'spouse_civil_status'=>$request->inp_cs,
            'spouse_gender'=>$request->inp_gender,
            'spouse_phone_number'=>$request->inp_pn,
            'spouse_telephone_number'=>$request->inp_tn,
            'spouse_license'=>$request->inp_dl,
            'spouse_present_add_region'=>$request->region,
            'spouse_present_add_province'=>$request->province,
            'spouse_present_add_municipal'=>$request->citymun,
            'spouse_present_add_barangay'=>$request->brgy,
            'spouse_present_add_house_number'=>$request->inp_pahns,
            'spouse_present_add_length_service'=>$request->inp_palos,
            'spouse_present_add_zip_code'=>$request->inp_pazc,
            'spouse_previous_add_region'=>$request->region_previous,
            'spouse_previous_add_province'=>$request->province_previous,
            'spouse_previous_add_municipal'=>$request->citymun_previous,
            'spouse_previous_add_barangay'=>$request->brgy_previous,
            'spouse_previous_add_house_number'=>$request->inp_prehns,
            'spouse_previous_add_length_service'=>$request->inp_prelos,
            'spouse_previous_add_zip_code'=>$request->inp_prezc,
            'spouse_provincial_add_region'=>$request->region_provincial,
            'spouse_provincial_add_province'=>$request->province_provincial,
            'spouse_provincial_add_municipal'=>$request->citymun_provincial,
            'spouse_provincial_add_barangay'=>$request->brgy_provincial,
            'spouse_provincial_add_house_number'=>$request->inp_provhns,
            'spouse_provincial_add_length_service'=>$request->inp_provlos,
            'spouse_provincial_add_zip_code'=>$request->inp_provzc,
            'spouse_relative_name'=>$request->inp_relname,
            'spouse_relative_address'=>$request->inp_reladd,
            'spouse_relative_relationship'=>$request->inp_relrel,
            'spouse_relative_phone_number'=>$request->inp_relphone,

        ]);

        return redirect()->back()->with('success', 'Family Background added successfully!');

    }
}
