@extends('layouts.app')

@section('title')
    NMax    
@endsection

@section('content')

      <!-- header -->
      <header class="text-center">

        <h1>
            Sekali liburan
            <br />
            Bakal Ketagihan
        </h1>
        <p class="mt-3">
            Anda akan merasakan
            <br />
            Bahwa Indonesia itu Luas
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Nothing glass forever
                            <br />
                            You can change the Future
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <!-- destinasion -->
                <div class="section-popular-travel row justify-content-center">
               @foreach ($items as $item)
                <div class="col sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('{{  $item->galleries->count() ? Storage::url
                ($item->galleries->first()->image) : ''  }}');">
                       
                       <div class="travel-country">{{  $item->location }}</div>
                        <div class="travel-location">{{ $item->title    }}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route ('detail', $item->slug) }}" 
                            class="btn btn-travel-details px-4">View Details
                            </a>
                        </div>
                    </div>
                </div>
               @endforeach

                   
                </div>
            </div>
            </div>
        </section>

        <div class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>
                            This time to begin
                            <br />
                            The first a Lesson
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/Group 1.png" alt="Logo Partner" class="img-partner">
                    </div>
                </div>

            </div>
        </div>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They are Loving Us</h2>
                        <p>Moments were giving them
                            <br />
                            the Best Experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        </section>
        <section class="section testimonial-content" id="testimonial-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testi1.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Nadiem Makarim</h3>
                                <p class="testimonial">
                                    "Travel NMAX bekerja sama dengan GOJEK, app yang responsive dan buatan anak negri"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to MENARA EIFEL
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testi2.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Steve Job</h3>
                                <p class="testimonial">
                                    "Travel NMAX is a good website for people Traveller World"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to FUJI MOUNTAIN
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/testi3.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Tri Rismaharini</h3>
                                <p class="testimonial">
                                    "Travel NMAX sangat dibutuhkan oleh masyarakat Surabaya, terutama pada
                                    saat liburan tiba"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to MONAS
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    
@endsection