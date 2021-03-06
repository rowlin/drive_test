@extends('layout.welcome')

@section('content')
    <div class="row">
        <form class="form-horizontal" method="post" action="{{ url('update_user') }}">
            <h3 class="text-center">New User</h3>
            <!-- Text input-->
            <div class="form-group row">
                <label class="col-md-4 control-label" for="name">Name</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text"  class="form-control input-md" value="{{ $user->name }}" required="">
                </div>
            </div>
            <!-- Surname-->
            <div class="form-group row">
                <label class="col-md-4 control-label" for="surname">Surname</label>
                <div class="col-md-4">
                    <input id="surname" name="surname" type="text"  class="form-control input-md" value="{{ $user->surname }}" required="">
                </div>
            </div>
            <!--hidden _token-->
            <div class="form-group row">
                <label class="col-md-4 control-label" for="disc">Discipline</label>
                <div class="col-md-4">

                    <select class="form-control input-md" name="disc[]" multiple="multiple" >

                        @foreach( $disc as $d)

                            <option value="{{ $d->id }}"
                                    @if($user->ainet->where('id', $d->id)->first())
                                    selected
                                    @endif
                            >
                            {{ $d->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $user->id }}" >

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