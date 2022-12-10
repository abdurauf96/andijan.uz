@extends('layouts.admin')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item "><a href="{{ url('/admin/contacts') }}">Contacts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header">
                        <h4> Edit Contact #{{ $contact->id }} </h4>
                        <div class="card-header-form">
                            <a href="{{ url('/admin/contacts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        </div>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/contacts/' . $contact->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            @include ('admin.contacts.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="/admin/assets/bundles/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'addres_uz');
        CKEDITOR.replace( 'addres_ru');
        CKEDITOR.replace( 'addres_en');
        CKEDITOR.replace( 'addres_kr');
        CKEDITOR.replace( 'phone_uz');
        CKEDITOR.replace( 'phone_ru');
        CKEDITOR.replace( 'phone_en');
        CKEDITOR.replace( 'phone_kr');
    </script>
@endsection
