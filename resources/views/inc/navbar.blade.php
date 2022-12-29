<nav class="uk-navbar-container uk-margin" uk-navbar="mode: click">
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="{{route('welcome')}}">Home</a></li>
            <li class="uk-active"><a href="{{route('users')}}">Users</a></li>
            <li>
                <a href="#">Category</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="../public/category/1">Active</a></li>
                        <li><a href="../public/category/2">Categoty1</a></li>
                        <li><a href="../public/category/3">Category2</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="{{route('about')}}">about</a></li>
        </ul>

    </div>
</nav>


{{-- <nav class="navbar">
    <ul>
        <li>
            <a href="{{route('welcome')}}">Home</a>
        </li>
        <li>
            <a href="{{route('about')}}">About</a>
        </li>
        <li>
            <a href="{{route('users')}}">users</a>
        </li>
        <li>
            <a href="../public/category/1" >category1</a>
        </li>
    </ul>
</nav> --}}
