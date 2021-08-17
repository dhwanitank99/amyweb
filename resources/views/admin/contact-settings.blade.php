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
                    <h1>General</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">General</li>
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
                    <form role="form" id="pageForm" method="post" action="{{route('admin-save-settings')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="@if($contact){{$contact->getId()}}@endif">
                        <div class="col-md-12">
                            <div class="col-md-4 float-left">
                                <div class="form-group">
                                    <label for="name">Name <span>*</span></label>
                                    <input type="text" class="form-control" id="name" placeholder="" name="name" value="@if($contact){{$contact->getName()}}@endif">
                                    @if($errors->has('name'))
                                        <label class="error">{{$errors->first('name')}}</label>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="file">Featured Image</label>
                                    @if(isset($contact))
                                        <a href="{{Storage::url($contact->getLogo())}}" target="_blank">View</a>
                                    @endif
                                    <input type="file" class="form-control" id="file" placeholder="" name="file">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="" name="phone" value="@if($contact){{$contact->getPhone()}}@endif">
                                    @if($errors->has('phone'))
                                        <label class="error">{{$errors->first('phone')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="" name="mobile" value="@if($contact){{$contact->getMobile()}}@endif">
                                    @if($errors->has('mobile'))
                                        <label class="error">{{$errors->first('mobile')}}</label>
                                    @endif
                                </div>

                            </div>
                            <div class="col-md-4 float-left">
                                <div class="form-group">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="email" value="@if($contact){{$contact->getEmail()}}@endif">
                                    @if($errors->has('email'))
                                        <label class="error">{{$errors->first('email')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="website">Website <span>*</span></label>
                                    <input type="text" class="form-control" id="website" placeholder="" name="website" value="@if($contact){{$contact->getWebsite()}}@endif">
                                    @if($errors->has('website'))
                                        <label class="error">{{$errors->first('website')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="address">Address <span>*</span></label>
                                    <input type="text" class="form-control" id="address" placeholder="" name="address" value="@if($contact){{$contact->getAddress()}}@endif">
                                    @if($errors->has('address'))
                                        <label class="error">{{$errors->first('address')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="details">Details</label>
                                    <textarea id="details" class="form-control" name="details">@if($contact){{$contact->getDetails()}}@endif</textarea>
                                    @if($errors->has('details'))
                                        <label class="error">{{$errors->first('details')}}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 float-left">
                                <div class="form-group">
                                    <label for="city">City <span>*</span></label>
                                    <input type="text" class="form-control" id="city" placeholder="" name="city" value="@if($contact){{$contact->getCity()}}@endif">
                                    @if($errors->has('city'))
                                        <label class="error">{{$errors->first('city')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="state">State <span>*</span></label>
                                    <input type="text" class="form-control" id="state" placeholder="" name="state" value="@if($contact){{$contact->getState()}}@endif">
                                    @if($errors->has('state'))
                                        <label class="error">{{$errors->first('state')}}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="pin-code">Pin code <span>*</span></label>
                                    <input type="text" class="form-control" id="pin-code" placeholder="" name="pin-code" value="@if($contact){{$contact->getPinCode()}}@endif">
                                    @if($errors->has('pin-code'))
                                        <label class="error">{{$errors->first('pin-code')}}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group row">
                            <div class="col-lg-12 ml-auto">
                                <button type="submit" class="btn btn-primary pull-right">Save</button>
                            </div>
                        </div>
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

    </script>
@endpush