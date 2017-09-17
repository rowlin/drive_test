@extends('layout.welcome')

@section('content')

    <div class="row">
        <h2 style="text-align: center">Результаты Теста</h2>
        <div class="container">
            @foreach($cur_questions as $question )
                <div class="box">

                </div>
            @endforeach
            </div><!--container-->
    </div><!--row-->
@endsection