@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse ($trains as $train)
            <div>
                <h3>{{ $train->train_code }}</h3>
                <p>{{ $train->departure_station }} - {{ $train->departure_time }}</p>
            </div>
        @empty
            
        @endforelse
    </div>
@endsection