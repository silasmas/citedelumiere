@extends("layouts.template",['titre'=>'Detail programme'])

@section("content")

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-2-9 mb-lg-0">
                <article class="card card-style2">
                    <div class="card-img position-relative">
                        @if ($info->is_video)
                        <div class="min-height-300">
                            <div class="bg-img cover-background min-height-300" data-overlay-dark="0"
                                data-background="{{asset('storage/'.$info->cover)}}">
                                <div class="opacity-extra-medium bg-black"></div>
                                <div class="inner-border"></div>
                                <div class="text-center position-absolute top-50 start-50 translate-middle z-index-1">
                                    <a class="popup-social-video video_btn"
                                        href="https://www.youtube.com/watch?v={{ $info->video_id }}">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @else
                        <img src="{{ asset('storage/'.$info->cover) }}" class="rounded wow fadeIn" alt="..."
                            data-wow-delay="200ms">
                        @endif
                    </div>

                    <div class="card-body p-2-0 p-xl-2-4">
                        <ul class="meta wow fadeIn" data-wow-delay="200ms">
                            <li>
                                <a href="#!">
                                    <span>
                                        <img width="50" height="50"
                                            src="{{ asset($info->profil?'storage/'.$info->profil:'assets/admin/images/default.jpg') }}"
                                            alt="" style="border-radius: 50%;width: 50px;height: 50px;">
                                        {{-- <i class="ti-comment-alt me-2"></i>02 --}}
                                    </span>
                                    {{ $info->predicateur }}
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                {{\Carbon\Carbon::parse($info->date)->isoFormat('LL')}}
                            </li>
                            {{-- <li>
                                <i class="fa fa-comments"></i> 2 Comments
                            </li> --}}
                        </ul>
                        <span>Thème :</span> <h2>{{ $info->titre  }}</h2>

                        <div class="wow fadeIn" data-wow-delay="200ms">
                            <p>{{ $info->description }}</p>


                            <div class="row border-top border-color-light-black pt-5 mt-5 g-0">
                                <div class="col-md-8 mb-4 mb-md-0 wow fadeIn" data-wow-delay="200ms">
                                    <h5 class="h6 mb-3">Tags associés:</h5>
                                    <div class="tags mt-n2">
                                        <a href="{{ route('adoration') }}">Culte d'adoration</a>
                                        <a href="{{ route('priere') }}">Culte de prière</a>
                                        <a href="{{ route('enseignement') }}">Culte d'enseignement</a>
                                        <a href="{{ route('seminaire') }}">Séminaire</a>
                                    </div>
                                </div>
                                <div class="col-md-4 wow fadeIn" data-wow-delay="400ms">
                                    <div class="blog-share-icon text-start text-md-end">
                                        <h5 class="h6 mb-3">Partager:</h5>
                                        <ul class="share-post m-0 p-0">
                                            <li style="cursor: pointer"><a target="blank"><i class="fab fa-facebook-f"
                                                        onclick="facebookShared()"></i></a></li>
                                            <li style="cursor: pointer"><a onclick="whatsappShared()"
                                                    target="blank"><span class="fab fa-whatsapp"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                </article>

                <div class="page-navigation mb-6 wow fadeIn mt-2-9" data-wow-delay="200ms">
                    @if ($avant!=null)
                    <div class="prev-page">
                        <div class="page-info">
                            <a href="{{ route('detail',['id'=>$avant->id]) }}">
                                <span class="image-prev"><img src="{{ asset('storage/'.$avant->cover) }}"
                                        alt="..."></span>
                                <div class="prev-link-page-info">
                                    <h4 class="prev-title">{{ $avant->titre }}</h4>
                                    <span class="date-details"><span
                                            class="create-date">{{\Carbon\Carbon::parse($avant->date)->isoFormat('LLL')}}</span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @if($apres!=null)
                    <div class="next-page">
                        <div class="page-info">
                            <a href="{{ route('detail',['id'=>$apres->id]) }}">
                                <div class="next-link-page-info">
                                    <h4 class="next-title">{{ $apres->titre }}</h4>
                                    <span class="date-details"><span
                                            class="create-date">{{\Carbon\Carbon::parse($apres->date)->isoFormat('LL')}}</span></span>
                                </div>
                                <span class="image-next"><img src="{{ asset('storage/'.$apres->cover) }}"
                                        alt="..."></span>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>



            </div>
            <div class="col-lg-4">
                <div class="ps-lg-4 ps-xl-5">

                    <div class="widget wow fadeInUp" data-wow-delay="300ms">
                        <div class="title-style3 mb-4">
                            <span>Recent Posts</span>
                        </div>
                        @forelse ($recent as $r)
                        <div class="media mb-4">
                            <img src="{{ asset('storage/'.$r->cover) }}" width="100" class="me-3" alt="...">
                            <div class="media-body">
                                <h5 class="display-30 mb-0"><a href="{{ route('detail',['id'=>$r->id]) }}">
                                        {{ Str::limit($r->titre, 50, '...') }}
                                    </a></h5>
                                <small
                                    class="font-weight-500">{{\Carbon\Carbon::parse($r->date)->isoFormat('LL')}}</small>
                            </div>
                        </div>
                        @empty

                        @endforelse
                    </div>
                    <div class="widget wow fadeInUp" data-wow-delay="400ms">
                        <div class="title-style3 mb-4">
                            <span>Categories</span>
                        </div>
                        <ul class="category-listing">
                            @forelse ($categories as $cat)
                            <li><a href="{{ route(routes($cat->subtitle??"seminaire")) }}">{{ $cat->subtitle??"Séminaire" }} <span class="float-end"> ({{ $cat->preach }})</span></a></li>
                            @empty

                            @endforelse

                        </ul>
                    </div>
                    <div class="widget wow fadeInUp" data-wow-delay="600ms">
                        <div class="title-style3 mb-4">
                            <span>Suivez-nous</span>
                        </div>
                        <ul class="social-icons-style1 ps-0">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>

                    </div>
                    <div class="bg-img secondary-overlay cover-background rounded wow fadeInUp" data-wow-delay="700ms"
                        data-overlay-dark="85" data-background="img/bg/bg-06.jpg">
                        <div class="position-relative z-index-9 text-center py-5 px-1-9">
                            <i class="fas fa-headset text-white mb-4 display-14"></i>
                            <h5 class="text-white mb-4">Comment vous aidez?</h5>
                            <div class="separator-line-horrizontal-full bg-white opacity4 mb-4"></div>
                            <ul class="text-center mb-0 list-unstyled ps-0">
                                <li class="text-white mb-2"><i class="fa fa-phone small text-white me-2"></i><a
                                        href="#!" class="text-white">
                                        @lang("infos.adresse.phone")
                                        @lang("infos.adresse.phone2")
                                    </a></li>
                                <li class="text-white"><i class="fa fa-envelope-open small text-white me-2"></i><a
                                        href="#!" class="text-white">@lang("infos.adresse.email")</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
