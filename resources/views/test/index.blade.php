@extends('layout.welcome')

@section('content')

    <div class="row">
        <h2 style="text-align: center">Тесты</h2>
        <p class="text-center">Добавлено {{ count(\App\Question::all()) }} вопросов</p>
      <div class="container">
          <div class="row">
             <div class="btn-group center-block">
                    <a class="btn btn-default text-center" href="{{ url('start/10') }}">10 вопросов</a>
                 <a class="btn btn-default text-center" href="{{ url('start/20') }}">20 вопросов</a>
             </div>
          </div>
      </div>
 </div>
@endsection