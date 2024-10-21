<!-- Employer Name -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_employer_name">Employer Name <b class="text-danger">*</b></label>
            <span class="form-note">Specify your Employer Name here.</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_employer_name" name="inp_employer_name"
                placeholder="Enter your Employer Name here..." required maxlength="255">
        </div>
    </div>
</div>

<!-- Employer Address -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_employer_address">Employer Address <b class="text-danger">*</b></label>
            <span class="form-note">Specify your Employer Address here.</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_employer_address" name="inp_employer_address"
                placeholder="Enter your Employer Address here..." required>
        </div>
    </div>
</div>

<!-- Cellphone Number -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_cellphone_no">Cellphone Number</label>
            <span class="form-note">Specify your Cellphone Number here (optional).</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_cellphone_no" name="inp_cellphone_no"
                placeholder="Enter your Cellphone Number here..." maxlength="15">
        </div>
    </div>
</div>

<!-- Telephone Number -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_tel_no">Telephone Number</label>
            <span class="form-note">Specify your Telephone Number here (optional).</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_tel_no" name="inp_tel_no"
                placeholder="Enter your Telephone Number here..." maxlength="15">
        </div>
    </div>
</div>

<!-- Position -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_position">Position <b class="text-danger">*</b></label>
            <span class="form-note">Specify your position here.</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_position" name="inp_position"
                placeholder="Enter your position here..." required maxlength="100">
        </div>
    </div>
</div>

<!-- Status of Employment -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_status_of_employment">Status of Employment <b class="text-danger">*</b></label>
            <span class="form-note">Specify your status of employment here.</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <select name="inp_status_of_employment" required id="inp_status_of_employment" class="form-select">
                <option value="" selected disabled>- SELECT STATUS -</option>
                <option value="Contractual">Contractual</option>
                <option value="Probationary">Probationary</option>
                <option value="Casual">Casual</option>
                <option value="Permanent">Permanent</option>
            </select>
        </div>
    </div>
</div>

<!-- Length of Employment (Years and Months) -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_length_of_employment_years">Length of Employment (Years)</label>
            <span class="form-note">Specify the number of years here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_length_of_employment_years" name="inp_length_of_employment_years"
                placeholder="Enter years of employment here..." maxlength="4">
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-group">
            <label class="form-label" for="inp_length_of_employment_months">Months</label>
            <span class="form-note">Specify the number of months here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_length_of_employment_months" name="inp_length_of_employment_months"
                placeholder="Enter months of employment here..." maxlength="2">
        </div>
    </div>
</div>

<!-- SSS Number -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_sss_no">SSS Number</label>
            <span class="form-note">Specify your SSS number here (optional).</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_sss_no" name="inp_sss_no"
                placeholder="Enter your SSS number here..." maxlength="20">
        </div>
    </div>
</div>

<!-- Basic Monthly Salary -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_basic_monthly_salary">Basic Monthly Salary <b class="text-danger">*</b></label>
            <span class="form-note">Specify your basic monthly salary here.</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="number" class="form-control" id="inp_basic_monthly_salary" name="inp_basic_monthly_salary"
                placeholder="Enter your basic monthly salary here..." required min="0">
        </div>
    </div>
</div>

<!-- Other Compensation -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_other_compensation">Other Compensation</label>
            <span class="form-note">Specify any other compensation (optional).</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="number" class="form-control" id="inp_other_compensation" name="inp_other_compensation"
                placeholder="Enter any other compensation here..." min="0">
        </div>
    </div>
</div>

<!-- Occupation/Profession -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_occupation_or_profession">Occupation/Profession <b class="text-danger">*</b></label>
            <span class="form-note">Specify your occupation or profession here.</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_occupation_or_profession" name="inp_occupation_or_profession"
                placeholder="Enter your occupation or profession here..." required maxlength="255">
        </div>
    </div>
</div>

<!-- Nature of Business -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_nature_of_business">Nature of Business</label>
            <span class="form-note">Specify the nature of your business here (optional).</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_nature_of_business" name="inp_nature_of_business"
                placeholder="Enter the nature of your business here..." maxlength="255">
        </div>
    </div>
</div>

<!-- Length of Business (Years and Months) -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_length_of_business_years">Length of Business (Years)</label>
            <span class="form-note">Specify the number of years in business here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_length_of_business_years" name="inp_length_of_business_years"
                placeholder="Enter years in business here..." maxlength="4">
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-group">
            <label class="form-label" for="inp_length_of_business_months">Months</label>
            <span class="form-note">Specify the number of months in business here.</span>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-control-wrap">
            <input type="text" class="form-control" id="inp_length_of_business_months" name="inp_length_of_business_months"
                placeholder="Enter months in business here..." maxlength="2">
        </div>
    </div>
</div>

<!-- Income -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_income">Income</label>
            <span class="form-note">Specify your income here (optional).</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="number" class="form-control" id="inp_income" name="inp_income"
                placeholder="Enter your income here..." min="0">
        </div>
    </div>
</div>

<!-- Other Source of Income -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <div class="form-group">
            <label class="form-label" for="inp_other_source_of_income">Other Source of Income</label>
            <span class="form-note">Specify any other sources of income (optional).</span>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-control-wrap">
            <input type="number" class="form-control" id="inp_other_source_of_income" name="inp_other_source_of_income"
                placeholder="Enter any other sources of income here..." min="0">
        </div>
    </div>
</div>

<!-- Submit Buttons -->
<div class="row mt-2 align-center">
    <div class="col-lg-3">
        <!-- Empty for spacing -->
    </div>
    <div class="col-lg-9 d-flex justify-content-end">
        <div class="form-group mt-2 mb-2 justify-end">
            <button type="reset" class="btn btn-light bg-white mx-3">
                <em class="icon ni ni-repeat"></em>&ensp;
                Reset
            </button>
            <button type="submit" class="btn btn-success">
                <em class="icon ni ni-save"></em>&ensp;
                Submit Record
            </button>
        </div>
    </div>
</div>
