<template>
    <div>
        <div class="flex-wrap-movielist">
            <div class="movie-item-style-2 movie-item-style-1">
                <a href="redirect-url">
                    <img src="https://image.tmdb.org/t/p/w500/poster-path" alt="altnametitle">
                </a>
                <div class="hvr-inner">
                    <a href="movie-id"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                </div>
                <div class="mv-item-infor">
                    <h6><a href="movie-id">movie title</a></h6>
                    <p class="rate"><i class="ion-android-star"></i><span>7.1</span> /10</p>
                </div>
            </div>
        </div>
        <div class="topbar-filter">
            <div class="pagination2">
                <span>Page 1 of 5:</span>
                <span href="#">1</span>
                <span href="#">2</span>
                <span href="#">3</span>
                <span href="#">4</span>
                <span href="#">5</span>
                <span style="color:white">page num</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                sehir: 0,
                sehirler: [],
                ilce:0,
                ilceler: [],
            }
        },
        methods: {
            moviesResults: function(){
                axios.get('https://api.themoviedb.org/3/movie/popular')
                .then(function (response) {
                    this.sehirler = response.data;
                }.bind(this));
            },
        },
    }
</script>
