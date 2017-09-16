@extends('layout.welcome')

@section('content')

    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <td class="text-center">Name</td>
                    <td class="text-center">Surname</td>
                    <td class="text-center">Discipline</td>
                    <td class="text-center">Action</td>
                </tr>

                </thead>
                @foreach($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->surname }} </td>
                        <td class="text-center">
                            @if(count($user->ainet) != 0)
                                 @foreach( $user->ainet as $desc)
                                    <span style="background-color: #2579A9; border:5px solid #2579A9; border-radius: 10px; color: #ffffff; ">{{ $desc->name }}</span>
                                @endforeach
                            @else
                                <p>No Discipline</p>
                            @endif

                            </td>
                        <td>
                            <div class="button-group text-center">
                                <a href="{{ url('edit_user/'. $user->id) }}" class="btn btn-primary">Edit</a>
                                <form method="post" action="{{ url('delete_user') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $user->id }}"/>
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                @endforeach
            </table>
        </div>
    </div>


@endsection