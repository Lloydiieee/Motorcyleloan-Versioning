@php
    use App\Models\categoryModel;
@endphp
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Register New Motorcycle') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your motorcycle and register new motorcycle here.') }}</x-slot>
    <x-slot name="btn">
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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('motorcycle.save') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="nk-block ">
                        <div class="row g-gs">
                            <div class="col-sm-8">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <label class="mb-1"><b>PRODUCT NAME : <b class="text-danger">*</b></b></label>
                                        <input type="text" name="inp_title" class="form-control mb-3"
                                            placeholder="Post Title here..">
                                        <div class="summernote-basic" id="summernote-basic"
                                            style="height: 500px !important">
                                            <table class="min-w-full border-collapse block md:table">
                                                <tbody class="block md:table-row-group">
                                                    <tr class="bg-gray-100 border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Model</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>Honda Click 160i</b></td>
                                                    </tr>
                                                    <tr class="bg-white border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Engine Type</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>4-Stroke, Single Overhead Cam
                                                                (SOHC)</b></td>
                                                    </tr>
                                                    <tr class="bg-gray-100 border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Displacement</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>160cc</b></td>
                                                    </tr>
                                                    <tr class="bg-white border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Transmission</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>Automatic (CVT)</b></td>
                                                    </tr>
                                                    <tr class="bg-gray-100 border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Fuel System</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>Fuel Injection (FI)</b></td>
                                                    </tr>
                                                    <tr class="bg-white border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Brakes (Front/Rear)</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>Disc / Drum</b></td>
                                                    </tr>
                                                    <tr class="bg-gray-100 border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Tire Type (Front/Rear)</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>80/90 - 14 (Front), 100/80 - 14
                                                                (Rear)</b></td>
                                                    </tr>
                                                    <tr class="bg-white border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Fuel Capacity</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>5.5 Liters</b></td>
                                                    </tr>
                                                    <tr class="bg-gray-100 border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Weight</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>116 kg</b></td>
                                                    </tr>
                                                    <tr class="bg-white border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Seat Height</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>778 mm</b></td>
                                                    </tr>
                                                    <tr class="bg-gray-100 border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Ground Clearance</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>138 mm</b></td>
                                                    </tr>
                                                    <tr class="bg-white border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Price Range</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>₱ 64,000.00 - ₱ 75,645.00</b></td>
                                                    </tr>
                                                    <tr class="bg-gray-100 border border-black-300 block md:table-row">
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            Monthly Installment</td>
                                                        <td
                                                            class="p-2 md:border md: border-black-300 block md:table-cell">
                                                            <b>₱ 2,000.00 x 36 Months</b></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br><br>
                                        </div>
                                        <textarea id="hrefContent" rows="10" cols="50" name="inp_content" style="display: none"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <button type="submit" class="btn btn-wider btn-success btn-block"><em
                                                class="icon ni ni-check"></em> <span>SUBMIT NEW POST</span><em
                                                class="icon ni ni-arrow-right"></em></button>
                                        <hr class="mt-4 mb-4">
                                        <div class="form-group">
                                            <i><label class="form-label">Categories : <b
                                                        class="text-danger">*</b></label></i>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2" id="inp_category"
                                                    name="inp_category[]" multiple="multiple"
                                                    data-placeholder="Select Categories">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->cat_id }}">
                                                            {{ $category->cat_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <i><label class="form-label">Thumbnail : <b
                                                    class="text-danger">*</b></label></i><br>
                                        <img src="/upload_y.png" style="height: 300px; width: 100%;"
                                            class="img-thumbnail" id="thumbnail">
                                        <input type="file" id="fileInput" style="display: none;"
                                            name="inp_thumbnail" accept="image/*">
                                        <a href="#"
                                            class="btn btn-dim btn-outline-light text-dark btn-block mt-1"
                                            onclick="document.getElementById('fileInput').click(); return false;">
                                            <em class="icon ni ni-upload"></em>&ensp; Upload Thumbnail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <script src="/assets/js/libs/editors/tinymce.js?ver=3.0.3"></script>
                <script src="/assets/js/editors.js?ver=3.0.3"></script>

                <script>
                    $(document).ready(function() {
                        // Initialize Summernote
                        $('#summernote-basic').summernote({
                            height: 300 // Set editor height
                        });
            
                        // When form is submitted, transfer content from Summernote to textarea
                        $('#postForm').on('submit', function(e) {
                            // Get Summernote content
                            var content = $('#summernote-basic').summernote('code');
            
                            // Set the content to the hidden textarea
                            $('#hrefContent').val(content);
                        });
                    });
                </script>
                
                <script>
                    document.getElementById('fileInput').addEventListener('change', function(event) {
                        const file = event.target.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                document.getElementById('thumbnail').src = e.target.result;
                            };
                            reader.readAsDataURL(file);
                        }
                    });

                    $('#summernote-basic').summernote({
                        height: 500, // Set height in pixels (adjust the value)
                        minHeight: 300, // Minimum height
                        maxHeight: 1200, // Maximum height
                    });
                </script>

            </div>
        </div>
    </div>

</x-app-layout>
