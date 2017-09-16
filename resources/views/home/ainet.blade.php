@extends('layout.welcome')

@section('content')


    <div class="row">
        <div class="table-responsive">
    <table class="table table-hover">
    <thead>
    <tr>
        <td class="text-center">Name</td>
        <td class="text-center" >About</td>
        <td class="text-center" >Students</td>
        <td class="text-center" >Action</td>
    </tr>

    </thead>
        @foreach($ainet as $ai)
        <tr>
        <td class="text-center">{{ $ai->name }}</td>
        <td class="text-center">{{ $ai->about }} </td>
        <td class="text-center">
            @if(count($ai->users) != 0)
            @foreach($ai->users as $student  )
                <span style="background-color: #2579A9; border:5px solid #2579A9; border-radius: 10px; color: #ffffff; ">{{ $student->name }}</span>
            @endforeach
                @else
            <span style="text-align: center"> No students</span>
            @endif
        </td>
        <td>
            <div class="button-group text-center">
                <a href="{{ url('edit_disc/'. $ai->id) }}" class="btn btn-primary">Edit</a>
                <form method="post" action="{{ url('delete_disc') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{ $ai->id }}"/>
                <button type="submit">Delete</button>
                </form>
            </div>
        </td>
        @endforeach
    </table>
        </div>
    </div>


@endsection