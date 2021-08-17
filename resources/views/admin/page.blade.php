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
                    <h1>Pages</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin-pages')}}">Pages</a> </li>
                        @if(isset($page))
                            <li class="breadcrumb-item active">Edit Page</li>
                        @else
                            <li class="breadcrumb-item active">Create New Page</li>
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
                    <form role="form" id="pageForm" method="post" action="@if(isset($page)){{route('admin-update-page',['id'=>$page->getId()])}}@else{{route('admin-save-page')}}@endif">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Create Page</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title <span>*</span></label>
                                            <input type="text" name="title" class="form-control" id="title" placeholder="E.g Home" value="@if($errors->any()){{old('title')}}@elseif(isset($page)){{$page->getTitle()}}@else{{''}}@endif">
                                            <span id="title-error" class="error">
                                                @if ($errors->has('title')){{$errors->first('title')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slug">Slug<span>*</span></label>
                                            <input type="text" name="slug" class="form-control" id="slug" placeholder="E.g home" value="@if($errors->any()){{old('slug')}}@elseif(isset($page)){{$page->getSlug()}}@else{{''}}@endif">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="banner_id">Banner</label>
                                            <select class="form-control" name="banner_id">
                                                <option>Select Banner</option>
                                                @foreach($banners as $banner)
                                                    <option value="{{$banner->getId()}}" @if(isset($page) && $page->getBanner()!=null && $page->getBanner()->getId()==$banner->getId()) selected @endif>{{$banner->getName()}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status">
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="content">Content<span>*</span></label>
                                            <textarea name="content" class="form-control">@if(isset($page)){{$page->getContent()}}@endif</textarea>
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
        $(function () {

        });
    </script>
@endpush