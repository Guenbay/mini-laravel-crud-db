//blog\resources\views\students\show.blade.php
@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name: {{ $students->vorname }} {{$students->nachname}}</h5>
        <p class="card-text">Mitglieds-Nr : {{ $students->mitgliedsNr }}</p>
        <p class="card-text">Beitritt : {{ $students->beitritt }}</p>
        <p class="card-text">Geburts Datum : {{ $students->gebDatum }}</p>
        <p class="card-text">Anschrift : {{ $students->anschrift }}</p>
        <p class="card-text">Telefon : {{ $students->telefon }}</p>
  </div>
    </hr>
  </div>
</div>

<a  href="{{ url('/student') }}"><span>Back to Home</span></a>
