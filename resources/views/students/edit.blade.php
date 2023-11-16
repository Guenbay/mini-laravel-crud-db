//blog\resources\views\students\edit.blade.php
@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        
        <label>Mitglieds-Nr</label></br>
        <input type="text" name="mitgliedsNr" id="mitgliedsNr" value="{{$students->mitgliedsNr}}" class="form-control"></br>
        <label>Beitritt</label></br>
        <input type="text" name="beitritt" id="beitritt" value="{{$students->beitritt}}" class="form-control"></br>
        <label>Vorname</label></br>
        <input type="text" name="vorname" id="vorname" value="{{$students->vorname}}" class="form-control"></br>
        <label>Nachname</label></br>
        <input type="text" name="nachname" id="nachname" value="{{$students->nachname}}" class="form-control"></br>
        <label>Geburts Datum</label></br>
        <input type="text" name="gebDatum" id="gebDatum" value="{{$students->gebDatum}}" class="form-control"></br>
        <label>Anschrift</label></br>
        <input type="text" name="anschrift" id="anschrift" value="{{$students->anschrift}}" class="form-control"></br>
        <label>Telefon</label></br>
        <input type="text" name="telefon" id="telefon" value="{{$students->telefon}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>

<a  href="{{ url('/student') }}"><span>Back to Home</span></a>
  
@stop