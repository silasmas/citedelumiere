@extends('membres.templates.main_template', ['titre' => 'Mes formation'])


@section('content')
    @include('membres.pages.sousMenu')

    <section class="my-courses-area">
        <div class="container">
            @include('membres.parties.error')
            <div class="row align-items-baseline">
                <div class="col-lg-6 ">
                    <div class="my-course-filter-bar filter-box ">
                        <span>Filtrer par</span>
                        <div class="btn-group">
                            <a class="btn btn-outline-secondary dropdown-toggle all-btn" href="#" data-bs-toggle="dropdown">
                                Conférence </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#" id="commencer"
                                    onclick="getCoursesByCategoryId(this.id)">Pas encore debuter </a>
                                <a class="dropdown-item" href="#" id="En cour" onclick="getCoursesByCategoryId(this.id)">En
                                    cours </a>
                                <a class="dropdown-item" href="#" id="Fini" onclick="getCoursesByCategoryId(this.id)">Fini
                                </a>

                            </div>
                        </div>

                        <div class="btn-group">
                            <button class="btn reset-btn" onclick="toutesFormations()">Toutes</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="my-course-search-bar mt-3">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control py-2" placeholder="Chercher une conférence"
                                    onkeyup="getCoursesBySearchString(this.value)" />
                                <div class="input-group-append">
                                    <button class="btn py-2" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row no-gutters" id="my_courses_area">
                    @forelse ($userForm->formation as $fr)

                        <div class="col-lg-3">
                            <div class="course-box-wrap">
                                <div class="course-box">
                                    <a href="">
                                        <div class="course-image">
                                            <img src="{{ asset('storage/' . $fr->cover) }}" alt=""
                                                class="img-fluid" />
                                            <span class="play-btn"></span>
                                        </div>
                                    </a>

                                    <div class="" id="course_info_view_1">
                                        <div class="course-details">
                                            <a href="{{ route('formationDetail', ['id' => $fr->id]) }}">
                                                <h5 class="title">
                                                    {{ $fr->title }}
                                                </h5>
                                            </a>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar progress-bar-striped {{ $fr->pivot->evolution=="en cours"?"bg-danger":"bg-success" }}"
                                                        role="progressbar" style="width: {{ $fr->pivot->evolution=="en cours"?"50%":"100%"}};" aria-valuenow="100"
                                                        aria-valuemin="100" aria-valuemax="100"></div>
                                                </div>
                                                <small>{{ $fr->pivot->evolution=="en cours"?"Formation en cours":"Formation terminée" }}</small>
                                                <span class="btn btn-plus">{{ $fr->pivot->evolution}}</span>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 px-4 py-2">
                                                <a href="{{ route('formationDetail', ['id' => $fr->id]) }}"
                                                    class="btn red radius-10 w-100">Voir en detail</a>
                                            </div>
                                            <div class="col-md-12 px-4 py-2">
                                                @if ($fr->pivot->evolution == 'fini')
                                                <a href="{{ route('beginForm',['id'=> $fr->id]) }}"
                                                    class="btn green radius-10 w-100">
                                                        @lang('infos.autre.btnfini')
                                                    </a>
                                                    @else
                                                    <a href=""
                                                        class="btn red radius-10 w-100">
                                                        @lang('infos.autre.suite')
                                                        </a>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="course-details" style="display: none; padding-bottom: 10px;"
                                        id="course_rating_view_1">
                                        <a href="{{ route('formationDetail', ['id' => $fr->id]) }}">
                                            <h5 class="title">Wordpress for Beginners - Mast...</h5>
                                        </a>
                                        <form class="javascript:;" action="" method="post">
                                            <div class="form-group select">
                                                <div class="styled-select">
                                                    <select class="form-control" name="star_rating"
                                                        id="star_rating_of_course_1">
                                                        <option value="1">1 Out of 5</option>
                                                        <option value="2">2 Out of 5</option>
                                                        <option value="3">3 Out of 5</option>
                                                        <option value="4">4 Out of 5</option>
                                                        <option value="5" selected="">5 Out of 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group add_top_30">
                                                <textarea name="review" id="review_of_a_course_1" class="form-control" style="height: 120px;"
                                                    placeholder="Write your review here">Thats an awesome course to learn</textarea>
                                            </div>
                                            <button type="" class="btn red w-100 radius-10 mt-2"
                                                onclick="publishRating('1')" name="button">Publish rating</button>
                                            <a href="javascript::" class="btn red w-100 radius-10 mt-2"
                                                onclick="toggleRatingView('1')" name="button">Cancel rating</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                    @endforelse




            </div>
        </div>
    </section>

@endsection
@section('autres_script')
    <script type="text/javascript">
        function toutesFormations() {
            location.reload();
        }
    </script>
@endsection
