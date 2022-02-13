<header>
    <img src="{{asset('img/dc-logo.png')}}" alt="">
    <ul>
        <li><a href="{{route('characters')}}">CHARACTERS</a></li>
        <li><a href="{{route('comics')}}">COMICS</a></li>
        <li><a href="{{route('movies')}}">MOVIES</a></li>
        <li><a href="{{route('tv')}}">TV</a></li>
        <li><a href="{{route('games')}}">GAMES</a></li>
        <li><a href="{{route('collectibles')}}">COLLECTIBLES</a></li>
        <li><a href="{{route('videos')}}">VIDEOS</a></li>
        <li><a href="{{route('fans')}}">FANS</a></li>
        <li><a href="{{route('news')}}">NEWS</a></li>
        <li><a href="{{route('shop')}}">SHOP</a></li>
    </ul>
</header>

<style lang="scss" scoped>
    header {
        padding: 2em 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 90%;
        margin: auto;
    }
    header img {
        display: block;
    }

    header ul{
        list-style: none;
        display: flex;
        align-items: center;
    }

    header ul li{
        padding-left: 2em;
    }

    header ul li a{
        text-decoration: none;
        color: black;
    }

    header ul li:hover a{
        color: #0c7cec;
    }

</style>