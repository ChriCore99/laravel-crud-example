@extends('layouts.app')

@section('content')

<section>
    @foreach($names as $name)
        <div>
            {{$name->nome}}         
        </div>
    @endforeach
</section>

@endsection
