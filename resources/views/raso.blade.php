@extends('layout')

@section('content')


<form method="POST" action="submit">
    @csrf
    Som en 
    <input type="text" required name="roll" placeholder="roll">
    vill jag 
    <input type="text" required name="aktivitet" placeholder="aktivitet">
    i 
    <input type="text" required name="sammanhang" placeholder="sammanhang">
    för att 
    <input type="text" required name="orsak" placeholder="orsak">

    <button type="submit">Skicka</button>

</form>

<div class="previous-answers">
    @foreach ($answers as $answer)
        <p>Som en {{ $answer->roll }} 
            vill jag {{ $answer->aktivitet }} 
            i {{ $answer->sammanhang }} 
            för att {{ $answer->orsak }}
        </p>
        
    @endforeach
</div>

@endsection
