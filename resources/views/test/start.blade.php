@extends('layout.welcome')



@section('content')

    <div class="row">
     <div class="container">
                <form action="{{ url('form') }}" method="post">
                    <?php $i = 0; ?>
                    <ul id="listContainer">

                            <li style="display:list-item; list-style: none;" class="box" id="q{{ $i }}">
                             <h1>Поехали !</h1>
                            </li>
                        @foreach($test as $element )

                                <li style="display:none ; list-style: none;" class="box" id="q{{ ++$i}}">

                                       <div class="container">
                                       @if($element->image != "")
                                        <img src="{{ url($element->image) }}" alt="{{ $element->question }}" style="max-width: 200px;">
                                       @endif
                                        <span style="font-size: 1.3em; ">{!! $element->question !!}</span>
                                        </div><!--container-->
                                        <p><input type="checkbox" name="question[{{ $element->id }}][1]" value="1">{!! $element->ans1 !!}</p>

                                        <p><input type="checkbox"
                                                  name="question[{{ $element->id }}][2]" value="1">{!! $element->ans2 !!}</p>
                                        <p><input type="checkbox"
                                                  name="question[{{ $element->id }}][3]" value="1">{!! $element->ans3 !!}</p>

                                        @if( $element->ans4 != null || $element->ans4 != '')
                                            <p><input type="checkbox" name="question[{{ $element->id }}][4]"
                                                      value="1">{!! $element->ans4 !!}</p>
                                        @else
                                            <input name="question[{{ $element->id }}][4]" value="1" hidden>
                                        @endif
                                </li>
                        @endforeach
                    </ul>
                        {{ csrf_field() }}
                    <a class="btn btn-default"   id="next">next</a>
                    <button type="submit" id="send" class="btn bg-primary" style="float: right;" >Send</button>
                </form>
        </div><!--container-->
    </div><!--row-->
@endsection


@section('script')


    <script type="application/javascript">
  var next_button = document.getElementById('next');
  var send_button = document.getElementById('send');
      //send_button.style.visibility = "hidden";
      next_button.addEventListener("click", function () {
            var listContainer = document.getElementById("listContainer");
            var listItem = listContainer.getElementsByTagName("li");
            for (var i = 0; i < listItem.length; i++) {
                if (listItem[i].style.display == "list-item") {
                    listItem[i].style.display = "none";
                    listItem[i + 1].style.display = "list-item";
                    //send_button.style.visibility = "hidden";
                    console.log(i, listItem.length);
                    if (i >= listItem.length - 2)
                        next_button.style.display = "none";
                        send_button.style.visibility = "visible";
                    break;
                }
            }
        });

        send_button.addEventListener("click" , function (){

        });
    </script>
@endsection
