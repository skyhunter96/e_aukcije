@extends('layouts.front')

@section('content')

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <!--<div class="hidden-xs visible-sm visible-md visible-lg">
            <a id="glavna_slika" href="https://www.limundo.com/VelikaSlika/Samsung-s4mini-i9195-zakljucan/163650077" target="_blank" data-pozovi="163650077">
                <img class="img-thumbnail img-responsive" src="./e-aukcije -_files/slikaSamsung-s4mini-i9195-zakljucan-163650077v800h600.jpg" id="mainImage" title="#NEDOVRSENO Samsung s4mini i9195 -zaključan" alt="Samsung s4mini i9195 -zaključan">
            </a>

            <input type="hidden" value="http://www.limundo.com" id="prefixSlikeLimundo"><input type="hidden" value="Samsung-s4mini-i9195-zakljucan" id="NazivPredmeta">                    <div class="row thumbnails-list" style="
    width: 406px;
    padding-top: 6px;
">
                <div class="col-sm-4">
                    <a href="./e-aukcije -_files/slikaSamsung-s4mini-i9195-zakljucan-163650069v800h600.jpg" class="" id="data-pozovi-163650069" rel="prettyPhoto[gallery]" title="<a href='//static.limundoslike.com/originalslika_Samsung-s4mini-i9195-zakljucan-163650069.jpg' target='_blank'>Slika u punoj veličini</a>">
                        <img itemprop="image" id="thumb163650069" class="img-thumbnail img-responsive" src="./e-aukcije -_files/slikaSamsung-s4mini-i9195-zakljucan-163650069v80h60.jpg" alt="Samsung s4mini i9195 -zaključan" title="#NEDOVRSENO Samsung s4mini i9195 -zaključan">
                    </a>
                </div>
            </div>
        </div>
        -->
        <img src="{{ asset($auction->pic) }}">


    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

        <h2 itemprop="name" class="aukcija_heading">
            {{ $auction->name }}
        </h2>


        <hr>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



                <div class="clearfix"></div>

                <table class="table table-aukcija table-clear">
                    <tbody><tr>
                        <td>Broj aukcije:</td>
                        <td style="
    text-align: right;
">{{ $auction->id }}</td>
                    </tr>
                    <tr>
                        <td>Preostalo vreme:</td>
                        <td class="counter_polje">
                            <strong id="clockdiv"></strong>
                            <br>
                            <small><em>( {{ date($auction->end_date) }} )</em></small>

                        </td>
                    </tr>
                    <tr>
                        <td>Broj ponuda:</td>
                        <td>
                            <a id="broj_ponuda" href="https://www.limundo.com/kupovina/Mobilni-telefoni/Mobilni-telefoni/Alcatel-pixi-Pixi-4-5/65988105/Ponude">
                                {{ $auction->offers }} ponuda                                </a>
                            <a class="question-href" data-toggle="popover-bottom" href="http://www/e-aukcije.rs/product/aukcija.php#" data-original-title="" data-content="Kada do kraja aukcije ostane manje od 60 minuta, sistem će početi da odbrojava sekunde.<br> Ukoliko želite da pratite trenutnu cenu i ponude, potrebno je da koristite dugme &quot;<strong>Osveži</strong>&quot;."><span class="glyphicon glyphicon-question-sign"></span></a>
                            <a id="osvezi-btn" onclick="osveziPrikaz();" class="btn btn-sm btn-default osvezi-btn"><span class="glyphicon glyphicon-repeat"></span> Osveži</a>
                        </td>
                    </tr>
                    </tbody></table>

                <table class="table table-aukcija table-nudjenje table-clear" style="
    display: block;
    overflow: hidden;
    margin: 20px 0px;
    background:  white;
    border-radius: 7px;
    padding: 20px;
">
                    <tbody><tr>
                        <td><!--#NEDOVRSENO--> Aktuelna ponuda:
                        </td>
                        <td><b id="aktuelna_ponuda">RSD 1.50</b></td>
                    </tr>
                    <tr>
                        <td><!--#NEDOVRSENO--> Moja ponuda:</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="table-nudjenje-biding">

                            <form id="formMojaPonuda" name="formMojaPonuda" action="{{ asset('/auctions/'.$auction->id.'/offer') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="hidden" name="minBid" id="minBid" value="{{ $auction->id }}">
                                    <input type="hidden" name="minBid" id="minBid" value="{{ $auction->name }}">
                                    <input type="hidden" name="minBid" id="minBid" value="{{ $auction->descript }}">
                                    <input type="hidden" name="minBid" id="minBid" value="{{ $auction->price }}">
                                    <input type="hidden" name="minBid" id="minBid" value="{{ $auction->end_date }}">
                                    <input name="txtIznos" id="bidValue" type="text" autocomplete="off" placeholder="(min. RSD 1.50)" class="form-control">
                                    <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-success">Licitiraj</button>
                                                </span>
                                </div>
                            </form>

                        </td>
                    </tr>
                    <!--  ako je vise predmeta u lageru, jedan predmet ce biti namenjen za aukciju, a ostatak za opciju kupi odmah-->
                    <tr>
                        <td>
                            <!--#NEDOVRSENO--> Kupi odmah:
                            <a href="javascript:;" data-toggle="popover" title="" data-content="Klikom na dugme <span class=&quot;label label-info&quot;>Kupi odmah</span> kupićete ovaj predmet po Kupi odmah ceni bez potrebe da čekate kraj aukcije." data-original-title="Kupi odmah?">
                                <span class="glyphicon glyphicon-question-sign"></span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form name="formKupiOdmah" action="http://www/kupovina/Mobilni-telefoni/Mobilni-telefoni/Alcatel-pixi-Pixi-4-5/65988105/KupiOdmah" class="my_offer" method="post">
                                <div class="input-group">
                                    <span class="input-group-addon">6.000 din</span>
                                    <span class="input-group-btn ko-btn">
                                                        <button type="submit" class="btn btn-info">Kupi odmah</button>
                                                    </span>
                                </div>
                            </form>
                        </td>
                    </tr>
                    </tbody></table>

                <!-- START Popust uplate preko VISA kartice -->
                <!-- END Popust uplate preko VISA kartice -->

                <table class="table table-aukcija table-opcije-placanja table-clear">
                    <tbody>

                    <tr>
                        <td><!--#NEDOVRSENO--> Stanje:</td>
                        <td>Polovno</td>
                    </tr>
                    <tr>
                        <td><!--#NEDOVRSENO--> Garantni list:</td>
                        <td>
                            Da                            </td>
                    </tr>
                    </tbody></table>

            </div>

        </div>
    </div>
    </div>

    <div id="app"></div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
        Echo.channel('auctions')
            .listen('AuctionMade', e => {
            console.log('Auction has been made');
            console.log(e.foo);
            console.log(e);
        });
    </script>

    <script type="text/javascript">
        //var deadline = 'September 31 2018 23:59:59 GMT+0100';
        var deadline = '<?php echo date($auction->end_date) ?>';


        function getTimeRemaining(endtime){
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor( (t/1000) % 60 );
            var minutes = Math.floor( (t/1000/60) % 60 );
            var hours = Math.floor( (t/(1000*60*60)) % 24 );
            var days = Math.floor( t/(1000*60*60*24) );
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        function initializeClock(id, endtime){
            var clock = document.getElementById(id);
            var timeinterval = setInterval(function(){
                var t = getTimeRemaining(endtime);
            /*    clock.innerHTML = 'days: ' + t.days + '<br>' +
                    'hours: '+ t.hours + '<br>' +
                    'minutes: ' + t.minutes + '<br>' +
                    'seconds: ' + t.seconds;
            */
                clock.innerHTML = t.days + ' dana ' +
                                  t.hours + ' sati '+
                                  t.minutes + ' minuta ' +
                                  t.seconds + ' sekundi ';
                if(t.total<=0){
                    clearInterval(timeinterval);
                }
            },1000);
        }

        initializeClock('clockdiv', deadline);

    </script>


@endsection