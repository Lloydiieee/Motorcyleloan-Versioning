<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Proof of Billing</th>
                <th>Status</th>
                <th>Capacity</th>
                <th>Capital</th>
                <th>Condition</th>
                <th>ID Type</th>
                <th>Date Issued</th>
                <th>ID Number</th>
                <th>Expiration Date</th>
                <th>Barangay Captain</th>
                <th>Captain Contact</th>
                <th>Feedback/Comments</th>
                <th>Approval Status</th>
                <th>Reasons (If Disapproved)</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->req_proof_of_billing }}</td>
                    <td>{{ $data->req_status }}</td>
                    <td>{{ $data->req_capacity }}</td>
                    <td>{{ $data->req_capital }}</td>
                    <td>{{ $data->req_condition }}</td>
                    <td>{{ $data->req_id_type }}</td>
                    <td>{{ $data->req_id_date_issued }}</td>
                    <td>{{ $data->req_id_number }}</td>
                    <td>{{ $data->req_id_expiration_date }}</td>
                    <td>{{ $data->req_name_of_brgy_capt }}</td>
                    <td>{{ $data->req_brgy_capt_contact }}</td>
                    <td>{{ $data->req_feedback_comments }}</td>
                    <td>{{ $data->req_approved }}</td>
                    <td>{{ $data->req_reasons }}</td>
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
