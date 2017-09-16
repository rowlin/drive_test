@extends('layout.welcome')

@section('content')
    <div class="row">
        <form class="form-horizontal" method="post" action="{{ url('create_disc') }}">
            <h3 class="text-center">New discipline</h3>
            <!-- Text input-->
            <div class="form-group row">
                <label class="col-md-4 control-label" for="name">Name</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text"  class="form-control input-md" required="">
                </div>
            </div>
            <!-- Textarea to description-->
            <div class="form-group row">
                <label class="col-md-4 control-label" for="desc">Description</label>
                <div class="col-md-4">
                    <textarea id="desc" name="desc"  class="form-control input-md" required=""></textarea>
                </div>
            </div>
            <!--hidden _token-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

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