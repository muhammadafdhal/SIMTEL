@extends('template.upp')

@section('content')

<section class="site-section">
    <div class="container">
        <div class="row">
            @foreach ($jenis as $key => $p)
            <div class="col-md-4 mb-4">
                <div class="media d-block room mb-0">
                    <figure>
                        <img src="/gambar/kamar/{{$p->ik_gambar }}" class="img-fluid img-thumbnail"
                            alt="Responsive image">
                        <div class="overlap-text">
                            <span>
                                Featured Room
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </span>
                        </div>
                    </figure>
                    <div class="media-body">
                        <ul class="room-specs">
                            <li><span class="ion-ios-crop"></span> {{ $p->ik_fasilitas}}</li>
                            <!-- <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li> -->
                        </ul>
                        <h3 class="mt-0"><a href="#">Nomor Kamar {{ $p->ik_nomor}}</a></h3>



                        <p><button data-toggle="modal" data-target="#modal-default" class="btn btn-primary btn-sm">Harga
                                permalam {{$p->hj_harga}}</button></p>

                        @guest
                        <p><a href="/login_tamu"><button data-toggle="modal" data-target="#modal-default"
                                    class="btn-sm"><a href="/login_tamu">
                                        anda harus login terlebih dahulu</a></button> </p>

                        @else
                        <p><a href="/booking/{{ $p->ik_id }}" class="btn btn-primary btn-sm">
                                Pesan</a></p>
                        @endguest
                    </div>


                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

@endsection
