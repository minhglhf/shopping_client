<div class="category-tab"><!--category-tab-->
    @foreach($categories as  $category)

        <div class="col-sm-12">

            <div style="background-color: #ce0707; padding-top: 10px; padding-bottom: 10px">
                <b>
                    <a style=" color: white" href="#category_tap_{{$category->id}}">
                        {{$category->name}}
                    </a>
                </b>
            </div>


            <div class="tab-content">
                <div class="tab-pane fade active in" id="category_tap_{{$category->id}}">
                    @include('home.components.child_category_tab', ['category' => $category])
                </div>
            </div>
        </div>

    @endforeach
</div>
