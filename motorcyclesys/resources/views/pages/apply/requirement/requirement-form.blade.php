<div class="row mt-2 align-center">
    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_proof_of_billing">Proof of Billing <b class="text-danger">*</b></label>
            <span class="form-note">Select a proof of billing type (e.g., Electric Bill).</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <select class="form-control" id="inp_proof_of_billing" name="inp_proof_of_billing" required>
                <option value="" selected disabled>-Select proof of bill-</option>
                <option value="Electric Bill">Electric Bill</option>
                <option value="Water Bill">Water Bill</option>
                <option value="Phone Bill">Phone Bill</option>
                <option value="Rental">Rental</option>
            </select>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_status">Status <b class="text-danger">*</b></label>
            <span class="form-note">Select the billing status (e.g., Past Due).</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <select class="form-control" id="inp_status" name="inp_status" required>
                <option value="" selected disabled>-Select status-</option>
                <option value="Updated">Updated</option>
                <option value="Past Due">Past Due</option>
                <option value="Delinquent">Delinquent</option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_capacity">Capacity <b class="text-danger">*</b></label>
            <span class="form-note">Select a capacity type (e.g., Birth Certificate).</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <select class="form-control" id="inp_capacity" name="inp_capacity" required>
                <option value="" selected disabled>-Select capacity type-</option>
                <option value="Birth Certificate">Birth Certificate</option>
                <option value="Diploma">Diploma</option>
                <option value="Pay Slip">Pay Slip</option>
                <option value="Company ID">Company ID</option>
                <option value="Business Permit">Business Permit</option>
            </select>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_capital">Capital <b class="text-danger">*</b></label>
            <span class="form-note">Enter the capital details for the record.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <select class="form-control" id="inp_capital" name="inp_capital">
                <option value="" selected disabled>-Select capital details-</option>
                <option value="Bank Statement">Bank Statement</option>
                <option value="Certificate of Title">Certificate of Title</option>
                <option value="OR/CR from LTO">OR/CR from LTO</option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_condition">Condition <b class="text-danger">*</b></label>
            <span class="form-note">Select a condition type (e.g., Certificate of Membership).</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <select class="form-control" id="inp_condition" name="inp_condition" required>
                <option value="" selected disabled>-Select proof of bill-</option>
                <option value="Certificate of Membership">Certificate of Membership</option>
                <option value="Driver’s License">Driver’s License</option>
            </select>
        </div>
    </div>
</div>

<hr class="mt-4 mb-4">
<h6 class="title overline-title text-danger text-base mb-4">Valid ID Presented</h6>

<div class="row mt-2 align-center">
    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_id_type">ID Type</label>
            <span class="form-note">Enter the type of ID presented.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_id_type" name="inp_id_type" placeholder="Enter ID type...">
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_id_date_issued">Date Issued</label>
            <span class="form-note">Enter the date the ID was issued.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="date" class="form-control" id="inp_id_date_issued" name="inp_id_date_issued">
        </div>
    </div>

</div>

<div class="row mt-2 align-center">
    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_id_number">ID Number</label>
            <span class="form-note">Enter the ID number from the presented ID.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="number" class="form-control" id="inp_id_number" name="inp_id_number" placeholder="Enter ID number...">
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_id_expiration_date">Expiration Date</label>
            <span class="form-note">Enter the expiration date of the ID.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="date" class="form-control" id="inp_id_expiration_date" name="inp_id_expiration_date">
        </div>
    </div>
</div>

<hr class="mt-4 mb-4">
<h6 class="title overline-title text-danger text-base mb-4">Barangay Captain Information</h6>

<div class="row mt-2 align-center">
    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_name_of_brgy_capt">Name of Brgy. Capt.</label>
            <span class="form-note">Enter the name of the Barangay Captain.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_name_of_brgy_capt" name="inp_name_of_brgy_capt" placeholder="Enter name...">
        </div>
    </div>

    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_brgy_capt_contact">Cellphone No. / Tel. No.</label>
            <span class="form-note">Enter the contact number of the Barangay Captain.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_brgy_capt_contact" name="inp_brgy_capt_contact" placeholder="Enter contact number...">
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_feedback_comments">Feedback/Comments</label>
            <span class="form-note">Enter any relevant feedback or comments.</span>
        </div>
    </div>
    <div class="col-lg-10">
        <div class="form-control-wrap">
            <textarea class="form-control" id="inp_feedback_comments" name="inp_feedback_comments" placeholder="Enter feedback..."></textarea>
        </div>
    </div>
</div>

<hr class="mt-4 mb-4">
<h6 class="title overline-title text-danger text-base mb-4">Recommendations</h6>

<div class="row mt-2 align-center">
    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_approved">Approval Status</label>
            <span class="form-note">Select the approval status for this record.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <select class="form-control" id="inp_approved" name="inp_approved">
                <option value="" selected disabled>-Select approval status-</option>
                <option value="Approved">Approved</option>
                <option value="Disapproved">Disapproved</option>
            </select>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="form-group">
            <label class="form-label" for="inp_reasons">Reasons (If Disapproved)</label>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <textarea class="form-control" id="inp_reasons" name="inp_reasons" placeholder="Enter reasons..."></textarea>
        </div>
    </div>
</div>


<div class="row mt-2 align-center">
    <div class="col-lg-5"></div>
    <div class="col-lg-7 justify-end" style="float: right">
        <div class="form-group mt-2 mb-2 justify-end">
            <button type="reset" class="btn btn-light bg-white mx-3">
                <em class="icon ni ni-repeat"></em> Reset
            </button>
            <button type="submit" class="btn btn-light bg-white mx-3">
                <em class="icon ni ni-save"></em> Submit Record
            </button>
        </div>
    </div>
</div>