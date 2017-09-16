@extends('layout.welcome')

@section('content')

    <div class="row">
        <h2 style="text-align: center">Тесты</h2>
        <p class="text-center">Добавлено {{ count(\App\Question::all()) }} вопросов</p>
        <div class="container">
            <div class="row">

                <form action="{{ url('form') }}" method="post">
                    <?php $i = 0; ?>

                    <ul id="listContainer">

                        <div id="q{{ ++$i }}">
                            <li style="display:list-item; list-style: none;">
                                Начать тест

                            </li>
                        </div>

                        @foreach($test as $item )

                            <div class="box" id="q{{ $i++ }}">
                                <li style="display:none ; list-style: none;">
                                    @foreach($item as $element)
                                        <p>{!! $element->question !!}</p>
                                        <p><input type="checkbox"
                                                  name="question{{ $element->id }}[1]">{!! $element->ans1 !!}</p>
                                        <p><input type="checkbox"
                                                  name="question{{ $element->id }}[2]">{!! $element->ans2 !!}</p>
                                        <p><input type="checkbox"
                                                  name="question{{ $element->id }}[3]">{!! $element->ans3 !!}</p>

                                        @if( $element->ans4 != null || $element->ans4 != '')
                                            <p><input type="checkbox" name="question{{ $element->id }}[]"
                                                      value="ans4">{!! $element->ans4 !!}</p>
                                        @else
                                            <input name="question{{ $element->id }}[]" value="0" hidden>
                                        @endif
                                    @endforeach
                                </li>
                            </div><!--box-->


                        @endforeach
                    </ul>

                    <a class="btn btn-default"   id="next">next</a>
                        <input type="hidden" name="_token" id="_token" value="{!! csrf_field() !!}" >

                        <button type="submit" id="sub_form"  >show</button>
                </form>

            </div><!--ROW-->
        </div>
    </div>
@endsection


@section('script')
    <script type="application/javascript">
      //  var FirstItem = document.getElementsById('q0');
      //  FirstItem.style.display = "list-item";
        document.getElementById('next').addEventListener("click", function () {

            var listContainer = document.getElementById("listContainer");
            var listItem = listContainer.getElementsByTagName("li");
            //var Submit = = document.getElementsById('sub_form');
            for (var i = 0; i < listItem.length - 1; i++) {
                if (listItem[i].style.display == "list-item") {
                    listItem[i].style.display = "none";
                    listItem[i + 1].style.display = "list-item";
                    if (i == listItem.length - 2)
                        this.disabled = "true";
                    break;
                }
            }
        });
    </script>
@endsection
