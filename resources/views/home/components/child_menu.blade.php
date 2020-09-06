@if($category->categoryChildren->count())
    <ul role="menu" class="sub-menu">
        @foreach($category->categoryChildren as $categoryChild)
            <li><a href="#">{{$categoryChild->name}}</a></li>

            @if($categoryChild->categoryChildren->count())
                @include('home.components.child_menu',['category' => $categoryChild])
            @endif
        @endforeach
    </ul>
@endif
