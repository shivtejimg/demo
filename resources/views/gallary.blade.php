@extends('../main')


@push('meta')       
    <title>Trusted Mobile App Development Company in India | IMG Global Infotech</title>
@endpush


@push('styles')
@endpush


@section('content')
{{-- gallary Page start --}}
{{-- <div class="container-fluid gallarySectionMain">
    <div class="row">
        <div class="col-12 px-0">
            <div class="upperBack">
                <div class="text d-flex align-items-center justify-content-center h-100">
                    <div class="name">
                        Gallary
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid headingSection newsSection gallarySection contactheading position-relative">
    <div class="h-100 d-flex align-items-center position-relative z-1">
        <div class="container">
            <div class="row">
                <div class="col-12 pageheading text-center">Gallery</div>
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="headingBreadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item headingTitle"><a href="index.html" class="text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item headingTitle active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- glight Section Start --}}
<div class="container-fluid gallarySection px-0 py-lg-5 pt-sm-4 pt-lg-5 pt-4 pb-0 ">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12">
                <div class="row glightboxMain g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="row h-100 g-4">
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/ga1.jpg')}}" class=" GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/ga1.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-21.jpeg')}}" class=" glightImg GLightbox gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-21.jpeg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="{{ url('public/assets/img/gallaryimg/ga2.jpeg')}}" class=" glightImg GLightbox gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/ga2.jpeg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <a href="{{ url('public/assets/img/aboutman.png')}}" class=" glightImg GLightbox gallary d-block h-100">
                            <img src="{{ url('public/assets/img/aboutman.png')}}" alt="image" class="rounded-3" />
                        </a>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="row h-100 g-4">
                            <div class="col-12">
                                <a href="{{ url('public/assets/img/gallaryimg/ga5.jpeg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/ga5.jpeg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-06.jpg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-06.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/ga6.jpeg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/ga6.jpeg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row glightboxMain g-4">
                    <div class="col-lg-4 col-md-6 ">
                        <a href="{{ url('public/assets/img/gallaryimg/g-11.jpg')}}" class=" glightImg GLightbox gallary d-block h-100">
                            <img src="{{ url('public/assets/img/gallaryimg/g-11.jpg')}}" alt="image" class="rounded-3" />
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="row h-100 g-4">
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/ga8.jpeg')}}" class=" GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/ga8.jpeg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/ga10.jpg')}}" class=" glightImg GLightbox gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/ga10.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="{{ url('public/assets/img/gallaryimg/g-10.jpg')}}" class=" glightImg GLightbox gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-10.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="row h-100 g-4">
                            <div class="col-12">
                                <a href="{{ url('public/assets/img/gallaryimg/g-12.jpg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-12.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-13.jpg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-13.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/ga11.jpeg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/ga11.jpeg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row glightboxMain g-4">
                    <div class="col-lg-4 col-md-12">
                        <div class="row h-100 g-4">
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-15.jpg')}}" class=" GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-15.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-16.jpg')}}" class=" glightImg GLightbox gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-16.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="{{ url('public/assets/img/gallaryimg/g-17.jpg')}}" class=" glightImg GLightbox gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-17.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="row h-100 g-4">
                            <div class="col-12">
                                <a href="{{ url('public/assets/img/gallaryimg/g-19.jpeg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-19.jpeg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-23.jpeg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-23.jpeg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-21.jpeg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-21.jpeg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 ">
                        <a href="{{ url('public/assets/img/gallaryimg/g-22.jpeg')}}" class=" glightImg GLightbox gallary d-block h-100">
                            <img src="{{ url('public/assets/img/gallaryimg/g-22.jpeg')}}" alt="image" class="rounded-3" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- glight Section Ends --}}

{{-- gallary Page Ends --}}
@endsection

@push('scripts')

<script>
    GLightbox({
    selector: '.gallary'
    })
</script>
@endpush