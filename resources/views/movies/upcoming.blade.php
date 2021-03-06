@extends('layouts.main')
@section('content')

<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold"> Upcoming Movies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($upcomingMovies as $movie)
             <x-movie-card :movie="$movie" />            
            @endforeach
        </div>

    </div> <!-- end pouplar-movies -->

    <div class="page-load-status my-8">
        <div class="flex justify-center">
            <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div>
        </div>
        <p class="infinite-scroll-last">End of content</p>
        <p class="infinite-scroll-error">Error</p>
    </div>

</div>

          
@endsection

@section('scripts')
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.grid');
    var infScroll = new InfiniteScroll( elem, {
      path: '/upcoming/page/@{{#}}',
      append: '.movie',
      status: '.page-load-status',
      // history: false,
    });
</script>
@endsection
