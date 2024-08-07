@extends("layouts.template",['titre'=>'Programmes'])


@section("content")
@include("parties.bannier")

<section>
    <div class="container">

        <div class="text-center title-style3 mb-2-3 mb-md-6 wow fadeIn" data-wow-delay="100ms">
            <span>Sermons</span>
            <h2 class="mb-0 h1">Nos recents sermons</h2>
        </div>

        <div class="row g-xl-5 mt-n2-6">

                @php
                switch (Route::current()->getName()) {
                case 'enseignement':
                // dd($enseignement);
                $datas=$enseignement;
                break;
                case 'adoration':
                $datas=$adoration;
                break;
                case 'priere':
                $datas=$priere;
                break;
                case 'seminaire':
                $datas=$seminaire;
                break;

                default:
                $datas=$seminaire;
                break;
                }
                @endphp
                @forelse ($datas as $p)
                <div class="col-md-6 col-lg-4 mt-2-6 wow fadeIn" data-wow-delay="200ms">
                <article class="card card-style2 h-100">
                    <div class="card-img position-relative">
                        <img src="{{ asset('storage/'.$p->cover) }}" class="card-img-top" alt="...">
                        <a href="#!" class="rounded category">{{ datas($p->subtitle) }}</a>
                        {{-- <a href="#!" class="rounded category">{{ $p->subtitle=="adoration"?"Culte d'":"Culte de " }} {{ $p->subtitle??"Séminaire" }}</a> --}}
                    </div>
                    <div class="card-body p-2-0 p-xl-2-4">
                        <span class="mb-2 text-secondary d-block font-weight-500">
                            {{\Carbon\Carbon::parse($p->date)->isoFormat('LLL')}}
                        </span>
                        <h3 class="mb-4 h5"><a href="{{ route('detail',['id'=>1]) }}">{{ $p->titre }}</a></h3>
                        <a href="{{ route('detail',['id'=>1]) }}" class="font-weight-600">Voir en detail &#10230;</a>
                    </div>
                    <div class="py-3 bg-white card-footer px-2-0 px-xl-2-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><span class="font-weight-600">Par : <i class="fa fa-user"></i> </span><a href="#!">{{ $p->predicateur }}</a></div>
                            <span>
                                <img width="50" height="50" src="{{ asset($p->profil?'storage/'.$p->profil:'assets/admin/images/default.jpg') }}"
                                alt="" style="border-radius: 50%;width: 50px;height: 50px;">
                                {{-- <i class="ti-comment-alt me-2"></i>02 --}}
                            </span>
                        </div>
                    </div>
                </article>
            </div>
                @empty

                @endforelse


                <div class="wow fadeIn mt-2-9" data-wow-delay="200ms">
                    {{-- <ul class="text-center pagination justify-content-center d-block d-sm-flex text-sm-start">
                        @if ($datas->onFirstPage())
                        <li><a class="next page-numbers disabled" href="#!"><i class="fa fa-angle-double-left"></i></a></li>
                        @else
                        <li><a class="next page-numbers " href="{{ $datas->previousPageUrl() }}"><i class="fa fa-angle-double-left"></i></a></li>
                        @endif
                        @foreach ($datas as $article)
                        <li><span aria-current=""  class="page-numbers current">{{ $loop->index+1 }}</span></li>
                    @endforeach
                        @if ($datas->hasMorePages())
                        <li><a class="next page-numbers" href="{{ $datas->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a></li>
                    @else
                        <li><a class="next page-numbers disabled" href="#!"><i class="fa fa-angle-double-right"></i></a></li>
                    @endif
                    </ul> --}}
                </div>

        </div>
    </div>
</section>



@endsection
