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
                    <h1>Sliders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Slider</a> </li>
                        <li class="breadcrumb-item active">Create New Slider</li>
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
                    <form role="form" id="pageForm" method="post" action="@if(isset($banner)){{route('admin-update-banner',['id'=>$banner->getId()])}}@else{{route('admin-save-banner')}}@endif" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Create Slider</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Title <span>*</span></label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="" value="@if(isset($banner)){{$banner->getName()}}@endif">
                                            <span id="title-error" class="error">
                                                @if ($errors->has('name')){{$errors->first('name')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
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
                                <div id="bannerDetail">
                                    <button type="button" class="btn btn-sm btn-secondary" id="addMore">Add More</button>
                                    @if(isset($banner))
                                        @foreach($banner->getBannerDetail() as $bannerDetail)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="file">Featured Image <span>*</span></label>
                                                        <br>
                                                        <a href="{{Storage::url($bannerDetail->getFeaturedImage())}}" target="_blank">{{Storage::url($bannerDetail->getFeaturedImage())}}</a>
                                                        <input type="file" name="file[]" class="form-control" id="file" placeholder="">
                                                        <span id="file-error" class="error">
                                                @if ($errors->has('file')){{$errors->first('file')}}@endif
                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="buttonUrl"><span></span>Button URL</label>
                                                        <input type="text" name="buttonUrl[]" class="form-control" id="buttonUrl" placeholder="" value="{{$bannerDetail->getButtonLink()}}">
                                                        <span id="buttonUrl-error" class="error">
                                                    @if ($errors->has('buttonUrl')){{$errors->first('buttonUrl')}}@endif
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="buttonName"><span></span>Button Name</label>
                                                        <input type="text" name="buttonName[]" class="form-control" id="buttonName" placeholder="" value="{{$bannerDetail->getButtonName()}}">
                                                        <span id="buttonUrl-error" class="error">
                                                    @if ($errors->has('buttonName')){{$errors->first('buttonName')}}@endif
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="content">Content</label>
                                                        <textarea name="content[]" class="form-control">{{$bannerDetail->getContent()}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="file">Featured Image <span>*</span></label>
                                                <input type="file" name="file[]" class="form-control" id="file" placeholder="">
                                                <span id="file-error" class="error">
                                                @if ($errors->has('file')){{$errors->first('file')}}@endif
                                            </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="buttonUrl"><span></span>Button URL</label>
                                                <input type="text" name="buttonUrl[]" class="form-control" id="buttonUrl" placeholder="">
                                                <span id="buttonUrl-error" class="error">
                                                    @if ($errors->has('buttonUrl')){{$errors->first('buttonUrl')}}@endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="buttonName"><span></span>Button Name</label>
                                                <input type="text" name="buttonName[]" class="form-control" id="buttonName" placeholder="">
                                                <span id="buttonUrl-error" class="error">
                                                    @if ($errors->has('buttonName')){{$errors->first('buttonName')}}@endif
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="content">Content</label>
                                                <textarea name="content[]" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
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
        $(function(){
           $('#addMore').on('click', function () {
                var html = '<div class="row">';
                html += '<div class="col-md-6">';
               html += '<div class="form-group">';
               html += '<label for="file">Featured Image <span>*</span></label>';
               html += '<input type="file" name="file[]" class="form-control" id="file" placeholder="">';
               html += '</div>';
               html += '</div>';
               html += '<div class="col-md-6">';
               html += '<div class="form-group">';
               html += '<label for="buttonUrl"><span></span>Button URL</label>';
               html += '<input type="text" name="buttonUrl[]" class="form-control" id="buttonUrl" placeholder="">';
               html += '</div>';
               html += '</div>';
               html += '<div class="col-md-6">';
               html += '<div class="form-group">';
               html += '<label for="buttonName"><span></span>Button Name</label>';
               html += '<input type="text" name="buttonName[]" class="form-control" id="buttonName" placeholder="">';
               html += '</div>';
               html += '</div>';
               html += '<div class="col-md-6">';
               html += '<div class="form-group">';
               html += '<label for="content">Content</label>';
               html += '<textarea name="content[]" class="form-control"></textarea>';
               html += '</div>';
               html += '</div>';
               html += '</div>';
               $('#bannerDetail').append(html);
           });
        });
    </script>
@endpush