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
                    <h1>Posts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin-posts')}}">Posts</a> </li>
                        @if(isset($post))
                            <li class="breadcrumb-item active">Edit Post</li>
                        @else
                            <li class="breadcrumb-item active">Create New Post</li>
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
                    <form role="form" id="form" method="post" action="@if(isset($post)){{route('admin-update-post',['id'=>$post->getId()])}}@else{{route('admin-save-post')}}@endif" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Create Post</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title <span>*</span></label>
                                            <input type="text" name="title" class="form-control" id="title" placeholder="" value="@if($errors->any()){{old('title')}}@elseif(isset($post)){{$post->getTitle()}}@else{{''}}@endif">
                                            <span id="title-error" class="error">
                                                @if ($errors->has('title')){{$errors->first('title')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slug">Slug <span>*</span></label>
                                            <input type="text" name="slug" class="form-control" id="slug" placeholder="" value="@if($errors->any()){{old('slug')}}@elseif(isset($post)){{$post->getSlug()}}@else{{''}}@endif">
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
                                            <label for="category_id">Category</label>
                                            <select class="form-control" name="category_id">
                                                <option>Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->getId()}}" @if(isset($post) && $post->getCategory()!=null && $post->getCategory()->getId()==$category->getId()) selected @endif>{{$category->getName()}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="file">Featured Image <span></span></label>
                                            @if(isset($post) && $post->getFeaturedImage()!=null)
                                                <a href="{{Storage::url($post->getFeaturedImage())}}" target="_blank">View</a>
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
                                            <label for="content">Description</label>
                                            <textarea name="content" class="form-control">@if(isset($post)){{$post->getContent()}}@endif</textarea>
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