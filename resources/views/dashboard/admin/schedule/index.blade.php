@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">

        <div class="col-md-12">
            <h2>Schedule <a class="btn btn-primary" href="{{ URL::to('dashboard/admin/schedules/create') }}" role="button">Add New</a></h2>
        </div>
        @if (Session::has('message'))
        <div class="col-md-12">
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        </div>
        @endif
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <td>Academic Year</td>
            <td>Program Study</td>
            <td>course id</td>
            <td>study id</td>
            <td>class room</td>
            <td>lecture id</td>
            <td>day id</td>
            <td>start time</td>
            <td>finish time</td>
            <td>date midterm exam</td>
            <td>start midterm exam time</td>
            <td>finish midterm exam time</td>
            <td>midterm exam room</td>
            <td>date final exam</td>
            <td>start final exam time</td>
            <td>finish final exam time</td>
            <td>final exam room</td>
            <td>&nbsp;</td>
        </tr>
    </thead>
    <tbody>
    @foreach($schedule as $value)
        <tr>
          <td>{{$value->academic_year}}</td>
          <td>{{$value->program_study}}</td>
          <td>{{$value->course_id}}</td>
          <td>{{$value->study_id}}</td>
          <td>{{$value->class_room}}</td>
          <td>{{$value->lecture_id}}</td>
          <td>{{$value->day_id}}</td>
          <td>{{$value->start_time}}</td>
          <td>{{$value->finish_time}}</td>
          <td>{{$value->date_midterm_exam}}</td>
          <td>{{$value->start_midterm_exam_time}}</td>
          <td>{{$value->finish_midterm_exam_time}}</td>
          <td>{{$value->midterm_exam_room}}</td>
          <td>{{$value->date_final_exam}}</td>
          <td>{{$value->start_final_exam_time}}</td>
          <td>{{$value->finish_final_exam_time}}</td>
          <td>{{$value->final_exam_room}}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('dashboard/admin/schedules/' . $value->id . '/edit') }}">Edit</a>
                {!! Form::open(array('url' => 'dashboard/admin/schedules/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete', array('class' => 'btn btn-warning')) !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

</div>
</div>
@endsection