<div class="col-md-12">
    <div class="card">
        <div class="card-inner">
            <h1 class="text-2xl text-dark"><b>ISO/IEC 9126 in Software Engineering</b></h1>
            <hr class="mt-2 mb-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="100" class="text-center">Status</th>
                        <th>External and Internal Quantity</th>
                        <th width="50">..</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $num = 1;
                    @endphp
                    @foreach ($category as $data)
                        @php
                            $list = $category_raw->where('category', $data);
                        @endphp
                        <tr>
                            <td width="50" class="text-center">
                                -
                            </td>
                            <td><span class="text-lg fw-bolder text-dark">{{ $data }}</span></td>
                            <td class="text-center">
                                -
                            </td>
                        </tr>
                        @foreach ($list as $rw)
                            @php
                                $check = $checking->where('project_id', $project->id)->where('resources_id', $rw->id);
                            @endphp
                            <tr>
                                <td>
                                    @if ($check->count() != 0)
                                        <center>
                                            <em class="icon ni ni-check-circle text-success text-2xl"></em>
                                        </center>
                                    @endif
                                </td>
                                <td style="padding-left: 50px">
                                    <span class="text-lg text-dark">
                                        <em class="icon ni ni-dot"></em>
                                        {{ $rw->name }}
                                    </span>
                                </td>
                                <td>
                                    @if ($check->count() == 0)
                                        <center>
                                            <button onclick="update_quality({{ $project->id }}, {{ $rw->id }})"
                                                class="btn btn-xs btn-success">
                                                <em class="icon ni ni-check"></em>
                                            </button>
                                        </center>
                                        @else
                                        <center>-</center>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
