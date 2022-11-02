@extends('layouts.app')

{{-- set title --}}
@section('title', 'Edit - Event')

@section('content')
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            {{-- error --}}
            @if ($errors->any())
                <div class="alert bg-danger alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- breadcumb --}}
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Edit Event</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">Event</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- forms --}}
            <div class="content-body"><!-- Basic form layout section start -->
                <section id="horizontal-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="horz-layout-basic">Form Input</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Please complete the input <code>required</code>, before you click the submit button.</p>
                                        </div>
                                        <form class="form form-horizontal" action="{{ route("backsite.event.update", [$event->id]) }}" method="POST" enctype="multipart/form-data">

                                                @method('PUT')
                                                @csrf

                                                <div class="form-body">

                                                    <h4 class="form-section"><i class="fa fa-edit"></i> Form Event</h4>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="name">Name <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="name" name="name" class="form-control" placeholder="example Webinar Fikti 2022" value="{{ old('name', isset($event) ? $event->name : '') }}" autocomplete="off" required>

                                                            @if($errors->has('name'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('name') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="instance">Instance <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="instance" name="instance" class="form-control" placeholder="Gojek,Tokopedia,your Company" value="{{ old('instance', isset($event) ? $event->instance : '') }}" autocomplete="off" required>

                                                            @if($errors->has('instance'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('instance') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="time">time <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="time" name="time" class="form-control" placeholder="Gojek,Tokopedia,your Company" value="{{ old('time', isset($event) ? $event->time : '') }}" autocomplete="off" required>

                                                            @if($errors->has('time'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('time') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <<div class="form-group row">
                                                        <label class="col-md-3 label-control">Category <code
                                                                style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <select name="category" id="category" class="form-control select2"
                                                                required>
                                                                <option value="{{ old('category', isset($event) ? $event->category : '') }}" disabled selected>Choose
                                                                </option>
    
                                                                <option value="Webinar"> Webinar
                                                                </option>
                                                                <option value="Workshop"> Workshop
                                                                </option>
                                                                <option value="Job Fair"> Job Fair
                                                                </option>
    
                                                            </select>
    
                                                            @if ($errors->has('category'))
                                                                <p style="font-style: bold; color: red;">
                                                                    {{ $errors->first('category') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="invite_group_link">Invite
                                                            Grup Link <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="invite_group_link"
                                                                name="invite_group_link" class="form-control"
                                                                placeholder="https://forms.gle/DLf4gJGmL8wpsfhf9"
                                                                value="{{ old('invite_group_link', isset($event) ? $event->invite_group_link : '') }}" autocomplete="off"
                                                                required>
    
                                                            @if ($errors->has('invite_group_link'))
                                                                <p style="font-style: bold; color: red;">
                                                                    {{ $errors->first('invite_group_link') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="description">Description
                                                            <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="description" name="description"
                                                                class="form-control" placeholder="A-Z"
                                                                value="{{ old('description', isset($event) ? $event->description : '') }}" autocomplete="off" required>
    
                                                            @if ($errors->has('description'))
                                                                <p style="font-style: bold; color: red;">
                                                                    {{ $errors->first('description') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                        <p class="text-muted"><small class="text-danger">Hanya dapat
                                                                mengunggah 1 file</small><small> dan yang dapat
                                                                digunakan
                                                                JPEG, SVG, PNG & Maksimal ukuran file hanya 10
                                                                MegaBytes</small></p>

                                                        @if ($errors->has('poster'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('poster') }}</p>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">Status <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <select name="status" id="status" class="form-control select2"
                                                            required>
                                                            <option value="{{ old('status', isset($event) ? $event->status : '') }}" disabled selected>Upload or No
                                                            </option>

                                                            <option value="1"> Hold
                                                            </option>
                                                            <option value="2"> Post
                                                            </option>
                                                        </select>

                                                        @if ($errors->has('status'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('status') }}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-actions text-right">
                                                <a href="{{ route('backsite.event.index') }}" style="width:120px;" class="btn bg-blue-grey text-white mr-1" onclick="return confirm('Are you sure want to close this page? , Any changes you make will not be saved.')">
                                                    <i class="ft-x"></i> Cancel
                                                </a>
                                                <button type="submit" style="width:120px;" class="btn btn-cyan" onclick="return confirm('Are you sure want to save this data ?')">
                                                    <i class="la la-check-square-o"></i> Submit
                                                </button>
                                            </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
<!-- END: Content-->

@endsection
