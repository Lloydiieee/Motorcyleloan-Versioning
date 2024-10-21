@php
    use App\Models\categoryModel;
@endphp
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Motorcycle Products') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your motorcycle and register new products here.') }}</x-slot>
    <x-slot name="btn">
        <div class="nk-block-head-content">
            <div class="toggle-expand-contentx">
                    <li class="nk-block-tools-opt" onclick="window.location.href = '/motorcycle/new'">
                        <a href="/motorcycle/new" data-target="addProduct"
                            class="toggle btn btn-icon btn-outline-danger d-md-none text-dark"><em
                                class="icon ni ni-plus"></em>
                        </a>
                        <a href="/motorcycle/new" data-target="addProduct"
                            class="toggle btn btn-primary d-none d-md-inline-flex">
                            <span>New Product</span>
                            <em class="icon ni ni-plus-circle"></em>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </x-slot>

    <div class="nk-block ">
        <div class="row g-gs">
            <div class="col-sm-12">
                @if (session('trash'))
                    <div class="alert alert-pro alert-success">
                        <div class="alert-text">
                            <h6>
                                <em class="icon ni ni-check" style="font-size: 18px"></em>
                                &nbsp; Moved to Trash Successfully.
                            </h6>
                            <p>
                                The post <i>{{ session('trash') }}</i> have been move to trash. You can check to
                                trash bin.
                            </p>
                        </div>
                    </div>
                @endif
                <div class="card h-100">
                    <div class="card-inner">
                        <table class="datatable-init table table-hover text-dark">
                            <thead>
                                <tr>
                                    <th>Motorcycle Name</th>
                                    <th width="120" class="">Status</th>
                                    <th width="200">Date Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
