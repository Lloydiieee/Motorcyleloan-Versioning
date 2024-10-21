<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Applicant Employer Name</th>
                <th>Applicant Employer Address</th>
                <th>Applicant Employer Phone</th>
                <th>Applicant Position</th>
                <th>Applicant Status of Employment</th>
                <th>Applicant Length of Employment (Years)</th>
                <th>Applicant Length of Employment (Months)</th>
                <th>Applicant Basic Monthly Salary</th>
                <th>Applicant Other Compensation</th>
                <th>Applicant Occupation/Profession</th>
                <th>Applicant Self Business Name</th>
                <th>Applicant Length of Business (Years)</th>
                <th>Applicant Length of Business (Months)</th>
                <th>Applicant Income</th>
                <th>Applicant Other Source of Income</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->req_applicant_employer_name }}</td>
                    <td>{{ $data->req_applicant_employer_address }}</td>
                    <td>{{ $data->req_applicant_employer_phone }}</td>
                    <td>{{ $data->req_applicant_position }}</td>
                    <td>{{ $data->req_applicant_status_of_employment }}</td>
                    <td>{{ $data->req_applicant_length_of_employment_years }}</td>
                    <td>{{ $data->req_applicant_length_of_employment_months }}</td>
                    <td>{{ $data->req_applicant_basic_monthly_salary }}</td>
                    <td>{{ $data->req_applicant_other_compensation }}</td>
                    <td>{{ $data->req_applicant_occupation_profession }}</td>
                    <td>{{ $data->req_applicant_self_business_name }}</td>
                    <td>{{ $data->req_applicant_length_of_business_years }}</td>
                    <td>{{ $data->req_applicant_length_of_business_months }}</td>
                    <td>{{ $data->req_applicant_income }}</td>
                    <td>{{ $data->req_applicant_other_source_of_income }}</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <!-- Edit Button -->
                        <button class="btn btn-xs btn-light bg-white text-dark me-3">
                            <em class="icon ni ni-edit"></em>
                        </button>
                        <button type="submit" class="btn btn-xs btn-block btn-danger">
                            <em class="icon ni ni-trash"></em>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
