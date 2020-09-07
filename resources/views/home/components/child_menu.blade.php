@if($category->categoryChildren->count())
    <ul role="menu" class="sub-menu" style="background-color: white;">
        @foreach($category->categoryChildren as $categoryChild)
            <li><a style="color: black;" href="{{route('category.product',['slug' => $categoryChild->slug, 'id' => $categoryChild->id ])}}">{{$categoryChild->name}}</a></li>

{{--            @if($categoryChild->categoryChildren->count())--}}
{{--                @include('home.components.child_menu',['category' => $categoryChild])--}}
{{--            @endif--}}

            <ul role="menu" class="">
                @foreach($categoryChild->categoryChildren as $categoryChildChild)
                    <li><a style="color: black;" href="{{route('category.product',['slug' => $categoryChildChild->slug, 'id' => $categoryChildChild->id ])}}" >{{$categoryChildChild->name}}</a></li>
                @endforeach
            </ul>
        @endforeach
    </ul>
@endif
