@extends('admin.layout.layout')

@push('styles')
    <style>
        .error{
            margin-top: .25rem;
            font-size: 80%;
            color: #dc3545;
        }

    </style>
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin-categories')}}">Categories</a> </li>
                        @if(isset($category))
                            <li class="breadcrumb-item active">Edit Category</li>
                        @else
                            <li class="breadcrumb-item active">Create New Category</li>
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
                    <form role="form" id="categoryForm" method="post" action="@if(isset($category)){{route('admin-update-category',['id'=>$category->getId()])}}@else{{route('admin-save-category')}}@endif">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Create Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name <span>*</span></label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="" value="@if($errors->any()){{old('name')}}@elseif(isset($category)){{$category->getName()}}@else{{''}}@endif">
                                            <span id="pageTitle-error" class="error">
                                                @if ($errors->has('name')){{$errors->first('name')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slug">Slug <span>*</span></label>
                                            <input type="text" name="slug" class="form-control" id="slug" placeholder="" value="@if($errors->any()){{old('slug')}}@elseif(isset($category)){{$category->getSlug()}}@else{{''}}@endif">
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
        // $(function () {
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
        // });
    </script>
@endpush