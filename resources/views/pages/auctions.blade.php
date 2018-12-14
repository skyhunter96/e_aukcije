@extends('layouts.front')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="tg-sectionhead">
                <div class="tg-sectiontitle">
                    <h2><span>Aktivne aukcije</span>Kupi i uštedi<em></em></h2>
                    <span class="tg-lighttitle"><span>kupujte i uštedite<br>pomoću e-aukcija</span>
                </div>
            </div>
        </div>
        <div class="tg-featuresproduct tg-randomproducts">
            <ul id="tg-filterbale-nav" class="tg-featuresproductnav tg-navfilterbale option-set">
                <!--
                <li><a href="#">#NEDOVRSENO Aktivne aukcije</a></li>
                <li><a href="#">#NEDOVRSENO Buduće aukcije</a></li>
                <li><a href="#">#NEDOVRSENO Završene aukcije</a></li>
                -->
            </ul>

            @foreach($auctions as $auction)
            <div id="filter-masonry" class="tg-featuredproducts tg-filtermasonry">
                <div class="col-sm-4 col-xs-6 shoes tg-productitem">
                    <div class="tg-product-auctions">
                        <div class="tg-product-max"><!-- #NEDOVRSENO --> MP: RSD79,999.00 | MAX: 7999 RSD | 90%</div>
                        <div class="tg-product-holder">
                            <figure><a href="{{ asset('/auctions/'.$auction->id ) }}"><img src="http://www/awf.png" alt="image description"></a></figure>
                            <div class="tg-productcontent">
                                <div class="tg-producttitle">
                                    <h3><a href="{{ asset('/auctions/'.$auction->id ) }}">{{ $auction->name  }}</a></h3>
                                </div>
                                <div class="tg-productprice">
                                    <span class="tg-product-time">ISTICE {{ $auction->end_date }} </span>
                                    <span class="tg-product-price"><!-- #NEDOVRSENO RSD 12.20 --></span>
                                </div>
                                <div class="tg-licitator"><span>alekexe</span></div>
                                <a href="aukcija.php" class="col-sm-12 btn btn-primary active">
                                    Licitiraj odmah
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach




            </div>
        </div>
    </div>

@endsection