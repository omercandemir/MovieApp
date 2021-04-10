<div>
    <div class="flex-wrap-movielist">
        @foreach ($movies as $movie)
            <div class="movie-item-style-2 movie-item-style-1">
                <a href="redirect-url">
                    <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" :alt="{{$movie['title']}}">
                </a>
                <div class="hvr-inner">
                    <a href="{{url('movies/'.$movie['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                </div>
                <div class="mv-item-infor">
                    <h6><a href="{{url('movies/'.$movie['id'].'')}}">{{$movie['title']}}</a></h6>
                    <p class="rate"><i class="ion-android-star"></i><span>{{$movie['vote_average']}}</span> /10</p>
                </div>
            </div>
        @endforeach
    </div>
    <?php dump($movies) ?>
    <div class="topbar-filter">
        <div class="pagination2">
            @if ($this->page != 1)
                <button wire:click="previousPage" style="border: 0 solid; color:yellow; background-color:transparent;">Previous Page <<</button>
            @endif
            <button wire:click="nextPage" style="border: 0 solid; color: yellow; background-color:transparent;">Next Page >></button>
            <span style="color:white">Current Page: {{$page}}</span>
        </div>
    </div>
</div>