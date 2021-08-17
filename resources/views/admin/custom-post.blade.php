@extends('admin.layout.layout')

@push('styles')
    <style>
        .error{
            margin-top: .25rem;
            font-size: 80%;
            color: #dc3545;
        }

        @if(isset($page))
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
                    <h1>{{$customPostType->getName()}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Home</a></li>
                        {{--<li class="breadcrumb-item"><a href="{{route('admin-pages')}}">Post</a> </li>--}}
                        {{--@if(isset($page))--}}
                            {{--<li class="breadcrumb-item active">Edit Page</li>--}}
                        {{--@else--}}
                            <li class="breadcrumb-item active">Create New {{$customPostType->getName()}}</li>
                        {{--@endif--}}
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
                    <form role="form" id="pageForm" method="post" action="@if(isset($customPost)){{route('admin-update-custom-post',['slug'=>$slug,'id'=>$customPost->getId()])}}@else{{route('admin-save-custom-post',['slug'=>$slug])}}@endif" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Create {{$customPostType->getName()}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title <span>*</span></label>
                                            <input type="text" name="title" class="form-control" id="title" placeholder="" value="@if(isset($customPost)){{$customPost->getTitle()}}@endif">
                                            <span id="title-error" class="error">
                                                @if ($errors->has('title')){{$errors->first('title')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status">
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                            <span id="status-error" class="error">
                                                @if ($errors->has('status')){{$errors->first('status')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @if($customPostType->getAdditionalFields())
                                        @foreach($customPostType->getAdditionalFields() as $key=>$additionalField)
                                            <div class="col-md-6">
                                                @if($additionalField->getType()=='input')
                                                    <div class="form-group">
                                                        <label for="{{$additionalField->getFieldName()}}">{{$additionalField->getLabel()}} <span>@if($additionalField->isRequired())*@endif</span></label>
                                                        <input type="text" name="{{$additionalField->getFieldName()}}" class="form-control" id="{{$additionalField->getFieldName()}}" placeholder="" value="@if(isset($customPost) && !$customPost->getAdditionalFields()->isEmpty()){{$customPost->getAdditionalFields()[$key]->getFieldValue()}}@endif">
                                                        <span id="{{$additionalField->getFieldName()}}-error" class="error">
                                                            @if ($errors->has($additionalField->getFieldName())){{$errors->first($additionalField->getFieldName())}}@endif
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="file">Featured Image <span></span></label>
                                            @if(isset($customPost) && $customPost->getFeaturedImage()!=null)
                                                <a href="{{Storage::url($customPost->getFeaturedImage())}}" target="_blank">View</a>
                                            @endif
                                            <input type="file" name="file" class="form-control" id="file" placeholder="">
                                            <span id="file-error" class="error">
                                                @if ($errors->has('file')){{$errors->first('file')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea name="content" class="form-control"></textarea>
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
        CKEDITOR.replace('content');
    </script>
@endpush