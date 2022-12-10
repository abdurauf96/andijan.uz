@extends('layouts.admin')
@section('css')
    <style>
        .test__modal{
            top: 70px;
            z-index: 102 !important;
        }
        .show{
            display: none;
            z-index: 100 !important;
        }
        .answer_tr{
            background-color: #8cb3b9;
            color: white;
            margin-top: 15px;
        }

        .tbody-custom {
            display: flex;
            flex-direction: column;
            /*align-items: flex-end;*/
        }
        .table-tr-custom {
            background-color: gray;
            color:white;
            border-bottom: 1px solid;
        }

    </style>
@endsection
@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    @if(session('flash_message'))
                    <div class="alert alert-success alert-dismissible show fade col-lg-3" style="position: absolute; right: 15px; top: 15px">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('flash_message') }}
                        </div>
                    </div>
                    @endif
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">So'rovnomalar</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header">
                        <h4> So'rovnomalar </h4>
                        <div class="card-header-form">
                            <a href="{{ url('/admin/questions/create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Add new</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Title Uz</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody >
                                @foreach($questions as $item)

                                    <tr class="table-tr-custom">

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title_uz }}</td>

                                            <td>
                                                <button type="button" data-question_id="{{ $item->id }}" class="btn btn-primary answerBtn" data-toggle="modal" data-target="#exampleModal">Javob kiritish</button>
                                                <a class="btn btn-icon btn-primary" href="{{ url('/admin/questions/' . $item->id) }}" title="View Question"><i class="fas fa-eye"></i></a>
                                                <a class="btn btn-icon btn-info" href="{{ url('/admin/questions/' . $item->id . '/edit') }}" title="Edit Question"><i class="far fa-edit"></i></a>

                                                <form method="POST" action="{{ url('/admin/questions' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-icon" title="Delete Question" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                    </tr>
                                    @foreach($item->answers as $answer)
                                        <tr class="answer_tr">

                                            <td></td>
                                            <td style="display: flex; justify-content: space-around"> <div> {{ $loop->iteration }}. {{ $answer->title_uz }} </div> <div> ovozlar {{ count($answer->votes) }} ta </div> </td>
                                            <td>

                                                <a class="btn btn-icon btn-info" href="{{ url('/admin/answers/' . $answer->id . '/edit') }}" title="Edit Answer"><i class="far fa-edit"></i></a>

                                                <form method="POST" action="{{ url('/admin/answers' . '/' . $answer->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-icon" title="Delete Answer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {{ $questions->links() }} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal with form -->
    <div class="modal fade test__modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">So'rovnoma variantlari</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.answers.store') }}" method="POST" id="answerForm">
                        @csrf
                        <div class="form-group">
                            <label>Variant UZ</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="title_uz">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Variant RU</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="title_ru">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Variant EN</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="title_en">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Variant KR</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="title_kr">
                            </div>
                        </div>
                        <input type="hidden" name="question_id" class="hidden_question_id">

                        <button type="submit" class="btn btn-primary sendBtn m-t-15 waves-effect">Saqlash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('.answerBtn').click(function () {
            var question_id=$(this).data('question_id');
            $('.hidden_question_id').val(question_id);
        })
        // $('.sendBtn').click(function () {
        //     $('#answerForm').submit();
        // })
    </script>
@endsection
