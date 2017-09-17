@extends('layout.welcome')

@section('content')

    <div class="row">
        <h2 style="text-align: center">Результаты Теста</h2>
        <div class="container">
            @foreach($cur_questions as $question )


                <div class="box">
                    <h3>{!! $question->question !!}</h3>
                    @if($result[$question->id][1] == "ok" )
                        <p style="background-color: green"><input type="checkbox" checked>
                    @else
                        <p style="background-color: red"><input type="checkbox">
                    @endif
                            {!! $question->ans1 !!}</p>

                        @if($result[$question->id][2] == "ok" )
                            <p style="background-color: green"><input type="checkbox" checked>
                        @else
                            <p style="background-color: red"><input type="checkbox">
                        @endif
                            {!! $question->ans2 !!}</p>


                            @if($result[$question->id][3] == "ok" )
                                <p style="background-color: green"><input type="checkbox" checked>
                            @else
                                <p style="background-color: red"><input type="checkbox">
                            @endif
                                 {!! $question->ans3 !!}</p>

                                @if( !empty($question->ans4))
                                    @if($result[$question->id][4] == "ok" )
                                        <p style="background-color: green"><input type="checkbox" checked>
                                    @else
                                        <p style="background-color: red"><input type="checkbox">
                                    @endif
                                            {!! $question->ans4 !!}</p>
                                @endif

            @endforeach
        </div><!--container-->
    </div><!--row-->
@endsection