@extends('layouts.app')




@section('content')
    <main class="bg-dark text-white py-3">


        <div class="container">
            <h1 class="text-center py-3">Movies</h1>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                @forelse ($movies as $movie)
                    <div class="col pos_rel">
                        <div class="card bg_dark h-100">
                            <div class="card-body text-white text-center">
                                <h3 class="card-title">
                                    Title: {{ $movie->title }}
                                </h3>
                                <div>
                                    Original Title: <strong>{{ $movie->original_title }}</strong>
                                </div>
                                <div>Date: <strong>{{ $movie->date }}</strong></div>
                                <div>Vote: <strong>{{ $movie->vote }}</strong></div>
                                <div>Language: <strong>{{ $movie->language }}</strong></div>

                            </div>
                        </div>
                        <div class="bg_image">

                        </div>
                    </div>
                @empty
                    <div class="col">
                        <h2>
                            Not Movies Found
                        </h2>
                    </div>
                @endforelse
            </div>
        </div>

    </main>
@endsection
