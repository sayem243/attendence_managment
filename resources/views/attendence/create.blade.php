@extends('layouts.app')

@section('template')

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Attendence</h5>
            </div>

            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{route('attendence_save')}}">

                    {{ csrf_field() }}

                    <div class="row">

                        <div class="col-md-12">



                                <table class= "table table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>SL</th>
                                        {{--<th>ID</th>--}}
                                        <th>Student Name</th>
                                        <th style="font-weight: bold;">Present?</th>


                                        <th scope="col text-center" class="sorting_disabled" rowspan="1" colspan="1" aria-label style="width: 24px;">
                                            <i class="feather icon-settings"></i>

                                        </th>
                                    </tr>
                                    </thead>
                                    @php $i=0; @endphp
                                    @foreach($students as $student)
                                        @php $i++ ; @endphp
                                        <tr>
                                            <td>{{$i}}</td>
                                            {{--<td>{{$company->id}} </td>--}}
                                            <td>{{$student->student_name}}
                                                <input type="hidden" name="students_id[{{$student->id}}]" value="{{$student->id}}">

                                            </td>



                                            <td><input type="checkbox" onclick="setPresent(this)"  name="is_present[{{$student->id}}]" value="no"></td>





                                            <td>

                                            </td>

                                        </tr>

                                    @endforeach

                                </table>









                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

            </div>

        </div>
        <!-- Input group -->

    </div>


    <script>
        function setPresent(t)
        {
            var s = 'no';
            if($(t).prop('checked')) {
                s = 'yes'
            }
            else {
                s = 'no';
            }
            $(t).val(s)

        }
    </script>

@endsection
