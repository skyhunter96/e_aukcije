@extends('layouts.admin')

@section('content')

    @foreach($auctions as $auction)
        <div id="filter-masonry" class="tg-featuredproducts tg-filtermasonry">
            <div class="col-sm-4 col-xs-6 shoes tg-productitem">
                <div class="tg-product-auctions">

                    <div class="tg-product-holder">
                        <figure><a href="{{ asset('/auctions/'.$auction->id ) }}"><img src="http://www/awf.png" alt="image description"></a></figure>
                        <div class="tg-productcontent">
                            <div class="tg-producttitle">
                                <h3><a href="{{ asset('/auctions/'.$auction->id ) }}">{{ $auction->name  }}</a></h3>
                            </div>
                            <div class="tg-productprice">
                                <span class="tg-product-time">ISTICE {{ $auction->end_date }}</span>
                            </div>
                            <a href="{{ asset('/auction/destroy/'.$auction->id) }}" class="col-sm-12 btn btn-primary active">
                                Izbriši
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach

@endsection