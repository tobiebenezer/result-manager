@extends('layouts.lecturer.leclayout')
@section($viewData['title'])
@section('content')


    <div class="card p-5 align-items-center">
    @if (Session::get('status'))
            <div class="row alert alert-success list-unstyled">
               {{Session::get('status')}}
            </div>
        @endif
    <div class="row ml-1"> insert result Excel files only</div>
    <div class="row">
    <form action="{{ route('lresult.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="mb-3 row">
            <label for="course_title">Course title</label>
            <div id='res' class="col-lg-10 col-md-6 col-sm-12">
                <input type="text"  id= "course_title" name="course_title" class="form-control">
            </div>

            <label for="credit">Credit Load</label>
            <div id='credit' class="col-lg-10 col-md-6 col-sm-12">
                <input type="text"  id= "credit" name="credit_load" class="form-control">
            </div>

            <label for="level">Level</label>
            <div id='level' class="col-lg-10 col-md-6 col-sm-12">
                <input type="text"  id= "level" name="level" class="form-control">
            </div>

            <label for="session">Session</label>
            <div id='session' class="col-lg-10 col-md-6 col-sm-12">
                <input type="text"  id= "session " name="session" class="form-control">
            </div>

            <label for="res">Result:</label>
            <div id='res' class="col-lg-10 col-md-6 col-sm-12">
                <input type="file" accept="xls,xlsx,xlsm,xlsb" name="result" class="form-control">
            </div>

        </div>
        <div class="row">
        &nbsp;
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        
</div>
        </form>
        
      
    </div>
    </div>
@endsection