<div class="mainmenu ">
    <ul class="nav navbar-nav collapse navbar-collapse" >
        <li><a href="{{ route('home') }}" class="active">Home</a></li>

        @foreach($categories as $category)
            <li class="dropdown"><a href="{{route('category.product',['slug' => $category->slug, 'id' => $category->id ])}}">{{$category->name}}</a>
                @include('home.components.child_menu', ['category' => $category])
            </li>
        @endforeach

    </ul>
</div>
