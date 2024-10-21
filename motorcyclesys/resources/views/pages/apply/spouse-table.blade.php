<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
        <tr>
                <th>#</th>
                <th>Name</th>
                <th>Alias</th>
                <th>Date of Birth</th>
                <th>Place of Birth</th>
                <th>Civil Status</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Tel. No.</th>
                <th>License</th>
                <th>Present Address</th>
                <th>Present Length of Service</th>
                <th>Present Zip Code</th>
                <th>Previous Address</th>
                <th>Previous Length of Service</th>
                <th>Previous Zip Code</th>
                <th>Provincial Address</th>
                <th>Provincial Length of Service</th>
                <th>Provincial Zip Code</th>
                <th>Relative Name</th>
                <th>Relative Address</th>
                <th>Relationship</th>
                <th>Phone Number</th>

                <th width="100" class="text-center"> Action </th>
            </tr>

        </thead>
        <tbody>
            @foreach ($info as $data)
        @csrf
            <tr>
                <td>{{$data['id']}}</td>
                <td>{{$data['spouse_last_name'] . ', ' . $data['applicant_first_name'] . ' ' . $data['applicant_middle_name']}}</td>
                <td>{{$data['spouse_alias']}}</td>
                <td>{{$data['spouse_birthdate']}}</td>
                <td>{{$data['spouse_birthplace']}}</td>
                <td>{{$data['spouse_civil_status']}}</td>
                <td>{{$data['spouse_gender']}}</td>
                <td>{{$data['spouse_phone_number']}}</td>
                <td>{{$data['spouse_telephone_number']}}</td>
                <td>{{$data['spouse_license']}}</td>
                <td>{{$data['spouse_present_add_region'] . ', ' . $data['spouse_present_add_province'] . ',' . $data['spouse_present_add_municipal'] . ','. $data['spouse_present_add_barangay'] . ', ' . $data['spouse_present_add_house_number'] }} </td>
                <td>{{$data['spouse_present_add_length_service']}}</td>
                <td>{{$data['spouse_present_add_zip_code']}}</td>
                <td>{{$data['spouse_previous_add_region'] . ', ' . $data['spouse_previous_add_province'] . ',' . $data['spouse_previous_add_municipal'] . ','. $data['spouse_previous_add_barangay'] . ', ' . $data['spouse_previous_house_number'] }} </td>
                <td>{{$data['spouse_previous_add_length_service']}}</td>
                <td>{{$data['spouse_previous_add_zip_code']}}</td>
                <td>{{$data['spouse_provincial_add_region'] . ', ' . $data['spouse_provincial_add_province'] . ',' . $data['spouse_provincial_add_municipal'] . ','. $data['spouse_provincial_add_barangay'] . ', ' . $data['spouse_provincial_house_number'] }} </td>
                <td>{{$data['spouse_provincial_add_length_service']}}</td>
                <td>{{$data['spouse_provincial_add_zip_code']}}</td>
                <td>{{$data['spouse_relative_name']}}</td>
                <td>{{$data['spouse_relative_address']}}</td>
                <td>{{$data['spouse_relative_relationship']}}</td>
                <td>{{$data['spouse_relative_phone_number']}}</td>

            <td>

                    <button class="btn btn-xs btn-light}">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                        <button type="submit" class="btn btn-xs btn-danger text-white">
                            <em class="icon ni ni-trash"></em>
                        </button>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>