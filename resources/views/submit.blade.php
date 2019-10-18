@extends('layout')

@section('content')
    <p>Som en {{ $answer->roll }} 
        vill jag {{ $answer->aktivitet }} 
        i {{ $answer->sammanhang }} 
        för att {{ $answer->orsak }}
    </p>

    <p>Tack för att du fyllde i dina upplevelser.</p>
    <p>Tryck på logon för att återvända till startsidan.</p>

@endsection