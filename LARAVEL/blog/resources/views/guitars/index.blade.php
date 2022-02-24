@extends('layout')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    @foreach ($guitars as $guitar)
        
        <div>
            <h3>
                <a href="{{ route('guitars.show', ['guitar' => $guitar['id']]) }}"> {{ $guitar['name'] }} </a>
                <ul>
                    <li>
                        Made by : {{  $guitar['brand'] }}
                    </li>
                    <li>
                        Year made : {{  $guitar['year_made'] }}
                    </li>
                </ul>
            </h3>
        </div>

    @endforeach

    <div>
        User Input: {{ $userInput }}
    </div>
</div>

@endsection