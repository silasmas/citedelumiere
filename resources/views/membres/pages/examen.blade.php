@extends('client.connecte.templates.main_template', ['titre' => 'Mon examen'])

@section('autres_style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/parsley/parsley.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aos.css') }}">
@endsection
@section('content')
<section class="my-courses-area">
    <div class="container">
        <div class="content-title-box">
            <h1>Temps imparti :{{ $temps }} minutes</h1>
            {{-- --}}
            <h1 class="title" data-temps="{{ $temps }}" id="timer">Temps restant : 00:00</h1>

            @include('client.connecte.parties.error')
        </div>
        <form action="{{ url('SendExam') }}" method="post" class='form-group' name="formexam" data-parsley-validate>
            @csrf
            <div class="user-dashboard-content">
                <div class="content-box">
                    <input type="text" value="{{ $examen->id }}" name="idexam" hidden>
                    <div class="basic-group">
                        @forelse ($questions as $id => $qrr)
                        @forelse ($qrr as $q)
                        <div class="form-group">
                            <label for="FristName">{{ $q->question}}</label><br>
                            @switch($loop->parent->iteration)
                            @case(1)
                            {!! question($q->reponsevrai,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse1,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse4,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse2,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse3,$q->ponderation,"q-".$q->id) !!}

                            @break
                            @case(2)
                            {!! question($q->reponse1,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse2,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponsevrai,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse3,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse4,$q->ponderation,"q-".$q->id) !!}
                            @break
                            @case(3)
                            {!! question($q->reponse1,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse2,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse4,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse3,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponsevrai,$q->ponderation,"q-".$q->id) !!}
                            @break
                            @case(4)
                            {!! question($q->reponse1,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponsevrai,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse3,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse4,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse2,$q->ponderation,"q-".$q->id) !!}

                            @break
                            @case(5)

                            {!! question($q->reponse1,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse2,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse3,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponse4,$q->ponderation,"q-".$q->id) !!}
                            {!! question($q->reponsevrai,$q->ponderation,"q-".$q->id) !!}
                            @break
                            @endswitch

                        </div>
                        @empty

                        @endforelse
                        @empty

                        @endforelse
                        <div class="content-update-box">
                            <label for="checkbox">Si vous êtes sûr de vos réponses, cocher ici pour soumetre :</label>
                            <input type="checkbox" id="checkbox" name="consentement" required><br>
                            <button type="submit" class="btn">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
@section('autres_script')
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/parsley/js/parsley.js') }}"></script>
<script src="{{ asset('assets/parsley/i18n/fr.js') }}"></script>
<script>
    function editCompte(val) {
            event.preventDefault()
            edite(val, "../editCompte")
        }

        function edite(form, url) {

            $.ajax({
                url: url,
                method: "POST",
                data: $(form).serialize(),
                success: function(data) {
                    if (!data.reponse) {
                        swal({
                            title: data.msg,
                            icon: 'error'
                        })
                    } else {
                        swal({
                            title: data.msg,
                            icon: 'success'
                        })
                        actualiser()
                    }

                },
            });

        }


        var timeInMinutes = {{ $temps  }};
            var currentTime = Date.parse(new Date());
            var deadline = new Date(currentTime + timeInMinutes*60*1000);

            function getTimeRemaining(endtime){
                var total = Date.parse(endtime) - Date.parse(new Date());
                var seconds = Math.floor( (total/1000) % 60 );
                var minutes = Math.floor( (total/1000/60) % 60 );

                return {
                    'total': total,
                    'minutes': minutes,
                    'seconds': seconds
                };
            }

            function initializeClock(id, endtime){
                var clock = document.getElementById(id);
                function updateClock(){
                    var t = getTimeRemaining(endtime);

                    clock.innerHTML = 'Temps restant : ' + t.minutes + ':' + ('0' + t.seconds).slice(-2);

                    if (t.total <= timeInMinutes * 60 * 1000 / 2) {
                        clock.style.color = 'red';
                    } else {
                        clock.style.color = 'black';
                    }
                    if(t.total <= 0){
                        clearInterval(timeinterval);
                        clock.innerHTML = 'Le temps est écoulé!!';
                        clock.style.color = 'red';
                        document.body.style.pointerEvents = 'none'; // Bloque la page
                        swal({
                            title: 'Le temps imparti est fini.',
                            icon: 'error'
                        })
                        // Faire attendre l'action suivante pendant 5 secondes
                        var form={{ $examen->id }};
                        var urls='/resultat/'+form+"&time";
                        setTimeout(function() {
                            window.location.href=urls; // Remplacez par l'URL de la page vers laquelle vous souhaitez rediriger l'utilisateur
                        }, 5000); // 5000 millisecondes = 5 secondes

                    }
                }

                updateClock(); // run function once at first to avoid delay
                var timeinterval = setInterval(updateClock,1000);
            }

            initializeClock('timer', deadline);
</script>
@endsection
