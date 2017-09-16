@extends('layout.welcome')

@section('content')
    <div class="row">
        <form class="form-horizontal" method="post" action="{{ url('update_disc') }}">
            <h3 class="text-center">Edit discipline</h3>
            <!-- Text input-->


            <div class="form-group row">
                <label class="col-md-4 control-label" for="name">Name</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text"   class="form-control input-md" value="{{ $disc->name }}" required="">
                </div>
            </div>
            <!-- Textarea to description-->
            <div class="form-group row">
                <label class="col-md-4 control-label" for="desc">Description</label>
                <div class="col-md-4">
                    <textarea id="desc" name="desc"  class="form-control input-md"  required="">{{ $disc->about }}</textarea>
                </div>
            </div>
            <!--hidden _token and id-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" id="id" name="id" value="{{ $disc->id }}">


            <div class="form-group row">
                <label class="col-md-4 control-label" for="desc">Students</label>
                <div class="col-md-4">
                    <ul style="list-style-type:none">
                @foreach($disc->users as $student )
                    <li style="padding: 6px;"><span style=" text-align: center">{{$student->name}}</span>
                @endforeach
                    </ul>
                </div>
            </div>


            <div class="form-group row">
                <div class="offset-md-4 col-md-8">
                    <div class="button-group pull-right">
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection


@section('script')

    <script>



        $(document).ready(function() {

            var student_id = $(this).attr('data-student_id');
            $('#drop').click(function() {
                $.ajax({
                    type: 'post',
                    url: '/expulsion',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $('#id').val(),
                        'student_id': student_id
                    },
                    success: function (p_data) {
                        if (p_data.v == 1) {
                            $('#my_text').html(p_data.text);
                            $('#btn-del').hide();
                            $('.btn-cancel').text('OK');
                        } else {
                            location.reload(true);
                            //$('#string'+my_attr).hide();
                            //скроем .. ибо delete не хочет работать((
                            //а лучше перезагрузим
                        }
                    }
                })


            })
            });

    </script>



@endsection