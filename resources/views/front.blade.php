@extends('template.upp')

@section('content')

    <!-- END section -->


    <!-- END section -->

    <section class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 heading-wrap text-center">
                    
                    <h2 class="heading">Promosi Terbaru</h2>
                </div>
            </div>
            <div class="row ">
                @foreach ($info_promo as $key => $p)
                <div class="col-md-6">
                    <div class="media d-block room mb-0">

                        <figure>
                            <img src="/gambar/promo/{{$p->ip_gambar }}" class="img-fluid img-thumbnail"
                                alt="Responsive image">
                            <div class="overlap-text">
                                <span>
                                    Promo Terbatas
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                </span>
                            </div>
                        </figure>
                        <div class="media-body">

                            <p> {{$p->ip_keterangan}} </p>

                            <p>
                                <div class="btn btn-primary btn-sm">Kode Promo : {{$p->ip_kode}}</div>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 heading-wrap text-center">
                    <h4 class="sub-heading">Pilih Kamar</h4>
                    <h2 class="heading">PESAN SEKARANG</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-7">
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="/front/images/kamar4.jpg" width="600" height="333" alt="Generic placeholder image" class="img-fluid">
                            <div class="overlap-text">
                                <span>
                                    Double Deluxe
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                </span>
                            </div>
                        </figure>
                        <div class="media-body"> 
                            <p><a href="/jenis/Deluxe Double" class="btn btn-primary btn-sm">Lihat Info Kamar</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 room-thumbnail-absolute">
                    <a href="/jenis/Deluxe Single" class="media d-block room bg first-room"
                        style="background-image: url(/front/images/images.jpg); ">
                        <!-- <figure> -->
                        <div class="overlap-text">
                            <span>
                                Deluxe Single
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </span>
                            <span class="pricing-from">
                                Lihat Kamar
                            </span>
                        </div>
                        <!-- </figure> -->
                    </a>

                    <a href="/jenis/Standart Budget" class="media d-block room bg second-room"
                        style="background-image: url(/front/images/kamar1.jpg); ">
                        <!-- <figure> -->
                        <div class="overlap-text">
                            <span>
                                Standart Budget
                                <span class="ion-ios-star"></span>
                            </span>
                            <span class="pricing-from">
                                Lihat Kamar
                            </span>
                        </div>
                        <!-- </figure> -->
                    </a>

                </div>
            </div>
        </div>


    <!-- END section -->

    {{-- <section class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 heading-wrap text-center">
                    <h4 class="sub-heading">Our Blog</h4>
                    <h2 class="heading">Our Recent Blog</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <div class="post-entry">
                        <img src="/front/images/img_3.jpg" alt="Image placeholder" class="img-fluid">
                        <div class="body-text">
                            <div class="category">Rooms</div>
                            <h3 class="mb-3"><a href="#">New Rooms</a></h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt
                                illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <img src="/front/images/img_6.jpg" alt="Image placeholder" class="img-fluid">
                        <div class="body-text">
                            <div class="category">News</div>
                            <h3 class="mb-3"><a href="#">New Staff Added</a></h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt
                                illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <img src="/front/images/img_5.jpg" alt="Image placeholder" class="img-fluid">
                        <div class="body-text">
                            <div class="category">New Rooms</div>
                            <h3 class="mb-3"><a href="#">Big Rooms for All</a></h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt
                                illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- END section -->

    @endsection
