@extends('layouts.app')

@section('content')
    
    <div class=container>
        <ul>
            @foreach ($trains as $train)
                <a href="">
                    <li>
                        <h2>
                            Agenzia: {{ $train->agency}}
                        </h2>
                        <div>
                            Partenza: Ore {{$train->starting_time}} da {{$train->start_from}}
                        </div>

                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
