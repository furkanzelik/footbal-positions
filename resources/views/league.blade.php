@extends('layouts.app')

@section('content')

    @foreach($league as $leagues)


    <div class="row row-cols-1 row-cols-md-2 g-5">
        <div class="col">
            <div class="card">
                <img src="resources/images/premierleague.jpg" class="card-img-top" alt="PremierLeague">
                <div class="card-body">
                    <h5 class="card-title">{{ $leagues->league_most_pos }}</h5>
                    <p class="card-text">{{ $leagues->country }}</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
