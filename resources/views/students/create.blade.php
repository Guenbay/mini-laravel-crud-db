@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Mitglieds-Nr</label></br>
        <input type="text" name="mitgliedsNr" id="mitgliedsNr" class="form-control"></br>
        <label>Beitritt</label></br>
        <input type="text" name="beitritt" id="beitritt" class="form-control"></br>
        <label>Vorname</label></br>
        <input type="text" name="vorname" id="vorname" class="form-control"></br>
        <label>Nachname</label></br>
        <input type="text" name="nachname" id="nachname" class="form-control"></br>
        <label>Geburts Datum</label></br>
        <input type="text" name="gebDatum" id="gebDatum" class="form-control"></br>
        <label>Anschrift</label></br>
        <input type="text" name="anschrift" id="anschrift" class="form-control"></br>
        <label>Telefon</label></br>
        <input type="text" name="telefon" id="telefon" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop