@extends('layouts.main')

@section('content')

<ul>
    @foreach ($symptoms as $symptom)
        <li>{{ $symptom }}</li>
    @endforeach
</ul>

@endsection
