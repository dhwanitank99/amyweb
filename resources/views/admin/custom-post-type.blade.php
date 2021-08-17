@extends('admin.layout.layout')

@push('styles')
    <style>
        .error{
            margin-top: .25rem;
            font-size: 80%;
            color: #dc3545;
        }

        @if(isset($category))
            input, textarea{
            border: 1px solid #e9f0f7 !important;
            background-color: #e9f0f7 !important;
        }
        input{
            pointer-events: none !important;
        }
        @endif
    </style>
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Custom Post Type</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin-custom-post-types')}}">Custom Post Types</a> </li>
                        @if(isset($customPostType))
                            <li class="breadcrumb-item active">Edit Custom Post Type</li>
                        @else
                            <li class="breadcrumb-item active">Create New Post Type</li>
                        @endif
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content-message">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('failure'))
                        <div class="alert alert-error">
                            {{ session('failure') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form role="form" id="categoryForm" method="post" action="@if(isset($customPostType)){{route('admin-update-custom-post-type',['id'=>$customPostType->getId()])}}@else{{route('admin-save-custom-post-type')}}@endif">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Create Custom Post Type</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name <span>*</span></label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="" value="@if($errors->any()){{old('name')}}@elseif(isset($customPostType)){{$customPostType->getName()}}@else{{''}}@endif">
                                            <span id="pageTitle-error" class="error">
                                                @if ($errors->has('name')){{$errors->first('name')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slug">Slug <span>*</span></label>
                                            <input type="text" name="slug" class="form-control" id="slug" placeholder="" value="@if($errors->any()){{old('slug')}}@elseif(isset($customPostType)){{$customPostType->getSlug()}}@else{{''}}@endif">
                                            <span>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</span>
                                            <span id="pageTitle-error" class="error">
                                                @if ($errors->has('slug')){{$errors->first('slug')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>Additional Fields</p>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" id="addFields" class="btn btn-sm btn-secondary pull-right">+ Add</button>
                                    </div>
                                </div>
                                <div id="additionalFieldDiv" data-attr="@if(isset($customPostType)){{count($customPostType->getAdditionalFields())}}@else 0 @endif">
                                    @if(isset($customPostType))
                                        @foreach($customPostType->getAdditionalFields() as $key=>$additionalField)
                                            <div class="af{{$key}}">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" name="label[]" class="form-control" placeholder="Label" value="{{$additionalField->getLabel()}}">
                                                            <span id="pageLabel-error'+i+'" class="error">
                </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select class="form-control" name="type[]">
                                                                <option>Select Type</option>
                                                                <option value="input" @if($additionalField->getType()=='input') selected @endif>Input</option>
                                                                <option value="textbox" @if($additionalField->getType()=='textbox') selected @endif>Textbox</option>
                                                                <option value="dropdown" @if($additionalField->getType()=='dropdown') selected @endif>Dropdown</option>
                                                            </select>
                                                            <span id="pageType-error{{$key}}'" class="error">
                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="checkbox" name="isRequired[]"  @if($additionalField->isRequired()) checked @endif> Required
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <textarea name="content[]" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{--@if(!$viewFlag)--}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {{--@endif--}}
                    </form>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
    <!-- jquery-validation -->
    <script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
    <script type="text/javascript">
        $(function () {
        //     $('#jobForm').validate({
        //         rules: {
        //             jobTitle: {
        //                 required: true
        //             },
        //             jobLocation: {
        //                 required: true,
        //             },
        //             jobInfo: {
        //                 required: true
        //             },
        //             companyName: {
        //                 required: true
        //             },
        //             contactPerson: {
        //                 required: true
        //             },
        //             emailId: {
        //                 required: true,
        //                 email: true
        //             },
        //             companyAddress: {
        //                 required: true
        //             }
        //         },
        //         messages: {
        //             jobTitle: {
        //                 required: "The job title field is required."
        //             },
        //             jobLocation: {
        //                 required: "The job location field is required.",
        //             },
        //             jobInfo: {
        //                 required: "The job info field is required."
        //             },
        //             companyName: {
        //                 required: "The company name field is required"
        //             },
        //             contactPerson: {
        //                 required: "The contact person field is required"
        //             },
        //             emailId: {
        //                 required: "The email id field is required",
        //                 email: "The email id must be a valid email address"
        //             },
        //             companyAddress: {
        //                 required: "The company address field is required."
        //             }
        //         },
        //         errorElement: 'span',
        //         errorPlacement: function (error, element) {
        //             error.addClass('invalid-feedback');
        //             element.closest('.form-group').append(error);
        //         },
        //         highlight: function (element, errorClass, validClass) {
        //             $(element).addClass('is-invalid');
        //         },
        //         unhighlight: function (element, errorClass, validClass) {
        //             $(element).removeClass('is-invalid');
        //         }
        //     });
            $('#addFields').on('click', function () {
                var i = $('#additionalFieldDiv').attr('data-attr');
                var html = '<div class="af'+i+'">';
                html += '<div class="row">';
                html += '<div class="col-md-3">';
                html += '<div class="form-group">';
                html += '<input type="text" name="label[]" class="form-control" placeholder="Label" value="">';
                html += '<span id="pageLabel-error'+i+'" class="error">';
                html += '</span>';
                html += '</div>';
                html += '</div>';
                html += '<div class="col-md-3">';
                html += '<div class="form-group">';
                html += '<select class="form-control" name="type[]">';
                html += '<option>Select Type</option>';
                html += '<option value="input">Input</option>';
                html += '<option value="textbox">Textbox</option>';
                html += '<option value="dropdown">Dropdown</option>';
                html += '</select>';
                html += '<span id="pageType-error'+i+'" class="error">';
                html += '</span>';
                html += '</div>';
                html += '</div>';
                html += '<div class="col-md-2">';
                html += '<div class="form-group">';
                html += '<input type="checkbox" name="isRequired[]"> Required';
                html += '</div>';
                html += '</div>';
                html += '<div class="col-md-4">';
                html += '<div class="form-group">';
                html += '<textarea name="content[]" class="form-control"></textarea>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                $('#additionalFieldDiv').append(html);
                $('#additionalFieldDiv').attr('data-attr',++i);
            });
        });
    </script>
@endpush