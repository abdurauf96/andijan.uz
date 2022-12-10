@extends('layouts.admin')

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> Dashboard</a></li>
                                <li class="breadcrumb-item "><a href="{{ url('/admin/open-infos') }}">Openinfos</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Create</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header">
                        <h4>Create New OpenInfo </h4>
                        <div class="card-header-form">
                            <a href="{{ url('/admin/open-infos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
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
                        <form method="POST" action="{{ url('/admin/open-infos') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @csrf

                            @include ('admin.open-infos.form', ['formMode' => 'create'])

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
        CKEDITOR.replace('passport_uz');
        CKEDITOR.replace('passport_ru',);
        CKEDITOR.replace('passport_en');
        CKEDITOR.replace('passport_kr');
        CKEDITOR.replace('table_uz');
        CKEDITOR.replace('table_ru',);
        CKEDITOR.replace('table_en');
        CKEDITOR.replace('table_kr');
    </script>
@endsection
