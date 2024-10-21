<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>House Type</th>
                <th>House Ownership</th>
                <th>Free Use Reason</th>
                <th>Monthly Installment</th>
                <th>Landlord Name</th>
                <th>Address</th>
                <th>Lot Ownership</th>
                <th>Lot Free Use Reason</th>
                <th>Ref. 1 Name</th>
                <th> Relation</th>
                <th> Mobile</th>
                <th>Ref. 2 Name</th>
                <th> Relation</th>
                <th> Mobile</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->rr_house_type }}</td>
                    <td>{{ $data->rr_house_ownership }}</td>
                    <td>{{ $data->rr_free_use_reason }}</td>
                    <td>{{ $data->rr_rented_mo_inst }}</td>
                    <td>{{ $data->rr_landlord_name }}</td>
                    <td>{{ $data->rr_address }}</td>
                    <td>{{ $data->rr_lot_ownership }}</td>
                    <td>{{ $data->rr_lot_free_use_reason }}</td>
                    <td>{{ $data->rr_reference1_name }}</td>
                    <td>{{ $data->rr_reference1_relation }}</td>
                    <td>{{ $data->rr_reference1_mobile }}</td>
                    <td>{{ $data->rr_reference2_name }}</td>
                    <td>{{ $data->rr_reference2_relation }}</td>
                    <td>{{ $data->rr_reference2_mobile }}</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <!-- Edit Button -->
                        <button class="btn btn-xs btn-lightbg-white text-dark me-3">
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
