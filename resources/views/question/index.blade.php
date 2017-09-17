
@extends('layout.welcome')

@section('content')

    <div class="row">
        <div class="container">
                <div class="panel">
                    <h2 class="text-center">Вопросы:</h2>
                    <div style="float: right; display: block;">
                    <a class="btn btn-primary ">Добавить вопрос</a>
                    </div>
                </div>
            @foreach($questions as  $question)
                <div class="box">
                    <h3>{{ $question->question }}</h3>
                    <ul>
                        <li>{{ $question->ans1 }}</li>
                        <li>{{ $question->ans2 }}</li>
                        <li>{{ $question->ans3 }}</li>
                         @if($question->ans4 != "")
                            <li>{{$question->ans4}}</li>
                         @endif
                    </ul>

                    @if(isset($question->answers))
                        <?php $answer =  $question->answers; ?>
                        {{ $answer->ans_1 }}
                        {{ $answer->ans_2 }}
                        {{ $answer->ans_3 }}
                        {{ $answer->ans_4 }}
                        <a class="btn btn-primary" href="{{ url('change_ans/'.$question->id) }}">Изменить</a>
                    @else
                        <a class="btn btn-primary" href="{{ url('add_ans/'. $question->id) }}"> Добавить ответ</a>
                    @endif
                </div>
            @endforeach

            {{ $questions->links() }}
        </div><!--container-->
    </div><!--row-->

@endsection

