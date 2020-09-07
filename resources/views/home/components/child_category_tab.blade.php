<?php isset($number) && $number != null ? null : $number = 0?>
<?php
    use Illuminate\Support\Facades\Session;
    Session::put('counter', 1);
?>
@if($category->categoryChildren->count() > 0)


    @foreach($category->categoryChildren as $categoryChild)
        @if(\Illuminate\Support\Facades\Session::get('counter') <= 6)

            @if($categoryChild->categoryChildren->count() > 0)
                @if(\Illuminate\Support\Facades\Session::get('counter') <= 6)
                    @foreach($categoryChild->categoryChildren as $categoryChildChild)

                        @include('home.components.child_products', ['category' => $categoryChildChild, 'number' => $number])

                    @endforeach
                @else {{\Illuminate\Support\Facades\Session::put('counter', 1)}}
                @endif
            @else
                @include('home.components.child_products', ['category' => $categoryChild, 'number' => $number])
            @endif
        @else {{\Illuminate\Support\Facades\Session::put('counter', 1)}}
        @endif

    @endforeach

@else
    @include('home.components.child_products', ['category' => $category, 'number' => $number])
@endif



