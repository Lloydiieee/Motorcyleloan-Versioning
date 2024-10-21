<x-app-layout>
    <x-slot name="back">
        <div class="nk-block-head-sub">
            <a class="back-to" href="/dashboard">
                <em class="icon ni ni-arrow-left"></em>
                <span>Back</span>
            </a>
        </div>
    </x-slot>
    <x-slot name="header">{{ __('Quality Management') }}</x-slot>
    <x-slot
        name="subHeader">{{ __('You can monitor your project quality here.') }}</x-slot>

    <x-slot name="btn">
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                        class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt d-none d-sm-block">
                            @if ($project->status == 'In Progress')
                                <a href="#" onclick="move({{ $project->id }}, 'Completed')"
                                    class="btn btn-success"><em class="icon ni ni-check"></em>
                                    <span>Mark Project as Completed</span>
                                    <em class="icon ni ni-arrow-right-c"></em>
                                </a>
                            @elseif($project->status == 'Pending')
                                <a href="#" onclick="move({{ $project->id }}, 'In Progress')"
                                    class="btn btn-info"><em class="icon ni ni-setting"></em>
                                    <span>Mark Project as In Progress</span>
                                    <em class="icon ni ni-arrow-right-c"></em>
                                </a>
                            @endif
                        </li>
                        <li class="nk-block-tools-opt d-none d-sm-block">
                            <a href="/projects/print/{{ $project->id }}" target="_blank"
                                class="btn btn-primary"><em class="icon ni ni-printer"></em>
                                <span>Print Report</span>
                            </a>
                        </li>
                        <li class="nk-block-tools-opt d-block d-sm-none">
                            <a class="btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        <h1 class="text-dark text-2xl"><b> Team Leader :</b> &nbsp; {{ $project->team_leader }}</h1>
                        <h1 class="text-2xl text-dark"><b>{{ $project->name }}</b></h1>
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                @include('projects.details.quality')
            </div>
        </div>
    </div>

    <script>
        function update_quality(pid, rid) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Confirm it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/api/projects/quality/store',
                        type: 'POST',
                        data: {
                            project_id: pid,
                            resources_id: rid
                        },
                        success: function() {
                            Swal.fire({
                                title: "Updated!",
                                text: "Your record has been updated.",
                                icon: "success"
                            });
                            setTimeout(function() {
                                location.reload(); // Reload the page
                            }, 1000);
                        },
                        error: function(res){
                            console.log(res)
                        }
                    })
                }
            });
        }
    </script>
</x-app-layout>
