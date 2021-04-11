<div x-data="{ isOpen: true }" @click.away="isOpen = false">
    <div class="top-search">
        <select wire:model="option">
            <option selected="selected" value="3">Movie</option>
            <option value="1">Series</option>
            <option value="2">Actor</option>
        </select>    
        <input wire:model.debounce.500ms="search"
        type="text"
        placeholder="Search for a movie, TV Show or celebrity that you are looking for"
        @focus="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false">
    </div>
    @if ($searchResults->count() > 0)
        <div class="top-search" x-show="isOpen" @keydown.escape.window="isOpen = false">
            <div style="
            height: auto;
            border: none;
            background-color: #233a50 !important;
            font-family: 'Nunito', sans-serif;
            font-size: #abb7c4;
            color: #abb7c4;
            font-weight: 300;
            text-transform: none;
            width: 100%;
            padding: 6px 12px;
            font-size: 14px;">
                @foreach ($searchResults as $result)
                    @if ($this->option == 0)
                        <li style="list-style: none;">
                            <p>
                                <a href="{{url('movies/'.$result['id'].'')}}"><img src="<?php 
                                    if($result['poster_path'] == null){
                                        echo asset('images/uploads/ava2.jpg');
                                    } else {
                                        echo 'https://image.tmdb.org/t/p/w500/'.$result['poster_path'].'';
                                    }
                                ?>" alt="moviename" width="50px" height="50px">
                                <span style="
                                font-size: 18px;
                                font-family: 'Dosis', sans-serif;
                                font-size: 14px;
                                color: #ffffff;
                                font-weight: bold;
                                text-transform: uppercase;
                                "><b>{{$result['title']}}</b></span></a>
                            <p>
                        </li>
                    @elseif ($this->option == 1)
                        <li style="list-style: none;">
                            <p>
                                <a href="{{url('tv/'.$result['id'].'')}}"><img src="<?php 
                                    if($result['poster_path'] == null){
                                        echo asset('images/uploads/ava2.jpg');
                                    } else {
                                        echo 'https://image.tmdb.org/t/p/w500/'.$result['poster_path'].'';
                                    }
                                ?>" alt="moviename" width="50px" height="50px"></a>
                                <a href="{{url('tv/'.$result['id'].'')}}" style="
                                font-size: 18px;
                                font-family: 'Dosis', sans-serif;
                                font-size: 14px;
                                color: #ffffff;
                                font-weight: bold;
                                text-transform: uppercase;
                                "><b>{{$result['name']}}</b></a>
                            <p>
                        </li>
                    @else
                        <li style="list-style: none;">
                            <p>
                                <a href="{{url('person/'.$result['id'].'')}}"><img src="<?php 
                                    if($result['profile_path'] == null){
                                        echo asset('images/uploads/ava2.jpg');
                                    } else {
                                        echo 'https://image.tmdb.org/t/p/w500/'.$result['profile_path'].'';
                                    }
                                ?>" alt="moviename" width="50px" height="50px"></a>
                                <a href="{{url('person/'.$result['id'].'')}}" style="
                                font-size: 18px;
                                font-family: 'Dosis', sans-serif;
                                font-size: 14px;
                                color: #ffffff;
                                font-weight: bold;
                                text-transform: uppercase;
                                "><b>{{$result['name']}}</b></a>
                            <p>
                        </li>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
</div>
