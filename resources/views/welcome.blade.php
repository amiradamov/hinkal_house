@extends('layouts/layout')
@section('content')

<div class="container">
    @foreach($categories as $category)
    <p class="fs-4 fw-bold text-capitalize">{{ $category->category_name }}</p>
    <hr style="height:2px; width:20%; border-width:0; color:#000000; background-color:#000000;">
    <div class="row">
        @foreach ($category->item as $item)
        <div class="col-md-4 col-sm-12 mt-4">
            <div class="justify-content-center" style="background: #ffffff;">
                
                <div class="fakeimg" style="background:grey">fake img</div>
                <div class="container">
                    <div style="height: 50px"><p class="fs-4 fw-bold text-capitalize">{{ $item->item_name}}</p></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <form action="">
                                <input type="submit" class="button text-white" id="add_to_cart" value="Add to cart">
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <p class="text-end fs-4 fw-bold" id="item_price">{{ $item->item_price}}</p>
                        </div>
                    </div>
                    <div>
                        @foreach ($item_association as $itemmm)
                            <p>{{$itemmm->item2_id}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
    </div>

@endforeach
</div>
@endsection
