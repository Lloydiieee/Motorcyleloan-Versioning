<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Employer Name</th>
                <th>Employer Address</th>
                <th>Cellphone No</th>
                <th>Telephone No</th>
                <th>Position</th>
                <th>Status of Employment</th>
                <th>Length of Employment (Years)</th>
                <th>Length of Employment (Months)</th>
                <th>SSS No</th>
                <th>Basic Monthly Salary</th>
                <th>Other Compensation</th>
                <th>Occupation/Profession</th>
                <th>Nature of Business</th>
                <th>Length of Business (Years)</th>
                <th>Length of Business (Months)</th>
                <th>Income</th>
                <th>Other Source of Income</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->rev_employer_name }}</td>
                    <td>{{ $data->rev_employer_address }}</td>
                    <td>{{ $data->rev_cellphone_no }}</td>
                    <td>{{ $data->rev_tel_no }}</td>
                    <td>{{ $data->rev_position }}</td>
                    <td>{{ $data->rev_status_of_employment }}</td>
                    <td>{{ $data->rev_length_of_employment_years }}</td>
                    <td>{{ $data->rev_length_of_employment_months }}</td>
                    <td>{{ $data->rev_sss_no }}</td>
                    <td>{{ $data->rev_basic_monthly_salary }}</td>
                    <td>{{ $data->rev_other_compensation }}</td>
                    <td>{{ $data->rev_occupation_or_profession }}</td>
                    <td>{{ $data->rev_nature_of_business }}</td>
                    <td>{{ $data->rev_length_of_business_years }}</td>
                    <td>{{ $data->rev_length_of_business_months }}</td>
                    <td>{{ $data->rev_income }}</td>
                    <td>{{ $data->rev_other_source_of_income }}</td>
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
