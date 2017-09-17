@extends('layout.welcome')

@section('styles')
    <style>
        #red{
            background-color: red ;
            opacity: 0.7;
            color: #000;
        }

        #green{
            background-color: green ;
            opacity: 0.7;
            color: #000;
        }


    </style>

@endsection

@section('content')

    <div class="row">
        <h2 class="text-center">Результаты Теста :</h2>
        <div class="container">
            @foreach($cur_questions as $question )

                <div class="box">
                    <h3>{!! $question->question !!}</h3>
                    @if($result[$question->id][1] == "ok" )
                        <p id="green"><input type="checkbox" checked>
                    @else
                        <p id="red"><input type="checkbox">
                    @endif
                            {!! $question->ans1 !!}</p>

                        @if($result[$question->id][2] == "ok" )
                            <p id="green"><input type="checkbox" checked>
                        @else
                            <p id="red"><input type="checkbox">
                        @endif
                            {!! $question->ans2 !!}</p>


                            @if($result[$question->id][3] == "ok" )
                                <p id="green"><input type="checkbox" checked>
                            @else
                                <p id="red"><input type="checkbox">
                            @endif
                                 {!! $question->ans3 !!}</p>

                                @if( !empty($question->ans4))
                                    @if($result[$question->id][4] == "ok" )
                                        <p id="green"><input type="checkbox" checked>
                                    @else
                                        <p id="red"><input type="checkbox">
                                    @endif
                                            {!! $question->ans4 !!}</p>
                                @endif
                        @if( $result[$question->id][1] == "ok" &&
                             $result[$question->id][2] == "ok" &&
                             $result[$question->id][3] == "ok" &&
                             $result[$question->id][4] == "ok" )
                            <a href="{{ url('dont_show/' .  $question->id ) }}" class="btn btn-primary">Не показывать</a>
                        @endif



                        </div><!--box-->
            @endforeach
        </div><!--container-->
    </div><!--row-->
@endsection