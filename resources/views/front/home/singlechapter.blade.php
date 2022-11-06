<a href="{{route('chapter',['chapter'=> $sc->where('id',$data->id)->first()->slug])}}" class="single-chapter">
    <img class="feature-image" src="{{asset($data->desktop_image)}}" alt="">
    <div class="chapter-info">
        <div class="logo">
            <img src="{{asset($data->logo)}}" alt="">
        </div>
            <span class="title">
                {{$data->title}}
            </span>
    </div>
</a>
