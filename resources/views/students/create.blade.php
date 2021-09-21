@extends('layouts.app')

@section('template')

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Profile View</h5>
            </div>

            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{route('student_save')}}">

                    {{ csrf_field() }}

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Student Name</label>
                                <input type="text" class="form-control" name="student_name" id="fname"placeholder=" Name">
                            </div>





                            <div class="form-group{{ $errors->has('fathers_email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail Address</label>

                                <input id="email" type="email" class="form-control" name="fathers_email" value="{{ old('fathers_email') }}" required>

                                @if ($errors->has('fathers_email'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('fathers_email') }}</strong>
                                                             </span>
                                @endif

                            </div>



                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Father's Name</label>
                                <input type="text" class="form-control" name="father_name" id="father_name"placeholder="father_name">
                            </div>

                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="mobile" id="father_name"placeholder="mobile">
                            </div>


                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

            </div>

        </div>
        <!-- Input group -->

    </div>




@endsection
