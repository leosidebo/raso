@extends('layout')

@section('content')
    <p>
        <i>
        Som en {{ $answer->roll }} 
        vill jag {{ $answer->aktivitet }} 
        i {{ $answer->sammanhang }} 
        för att {{ $answer->orsak }}
        </i>
    </p>
    
    <p>Tryck på logon för att återvända till startsidan.</p>

@endsection