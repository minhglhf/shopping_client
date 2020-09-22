@if($category->categoryChildren->count() > 0)


    @foreach($category->categoryChildren as $categoryChild)

            @include('home.components.child_products', ['category' => $categoryChild])

    @endforeach

@else
    @include('home.components.child_products', ['category' => $category])
@endif



