<div class="list-style5 mb-1-9 wow fadeInUp" data-wow-delay="200ms">
    <ul class="bg-light mb-0">
        <li class="{{$i==1?"active":"" }}">
            <a href="{{ route('detailService',['id'=>1]) }}">Transport </a>
        </li>
        <li class="{{$i==3?"active":"" }}">
            <a href="{{ route('detailService',['id'=>3]) }}">@lang("info.titre.douane")</a>
        </li>
        <li class="{{$i==2?"active":"" }}">
            <a href="{{ route('detailService',['id'=>2]) }}">Santé</a>
        </li>

    </ul>
</div>
