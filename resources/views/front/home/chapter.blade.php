<div class="chapters-desktop">

    @php
        $sc=DB::table('chapters')->get(['slug','id']);
    @endphp
    <div class="chapter-row" >
        <div class="col-md-6 main">
            <div class="chapter-row">
                <div class="col-md-12">
                    @include('front.home.singlechapter',['data'=>$chaptermap['chapter_1']])
                </div>
                <div class="col-md-12 main">
                    <div class="chapter-row">
                       <div class="col-md-6">
                        @include('front.home.singlechapter',['data'=>$chaptermap['chapter_2']])

                       </div>
                       <div class="col-md-6">
                        @include('front.home.singlechapter',['data'=>$chaptermap['chapter_3']])

                       </div>
                    </div>
                </div>
                <div class="col-md-12">
                    @include('front.home.singlechapter',['data'=>$chaptermap['chapter_4']])

                </div>
            </div>
        </div>
        <div class="col-md-6 main">
            <div class="chapter-row">

                <div class="col-md-12 main">
                    <div class="chapter-row">
                       <div class="col-md-6">
                        @include('front.home.singlechapter',['data'=>$chaptermap['chapter_5']])

                       </div>
                       <div class="col-md-6">
                        @include('front.home.singlechapter',['data'=>$chaptermap['chapter_6']])

                       </div>
                    </div>
                </div>
                <div class="col-md-12">
                    @include('front.home.singlechapter',['data'=>$chaptermap['chapter_7']])

                </div>
                <div class="col-md-12">
                    @include('front.home.singlechapter',['data'=>$chaptermap['chapter_8']])

                </div>
            </div>
        </div>
    </div>
</div>
<div class="chapters-mobile">
    <div class="chapter-row">
        @for ($i = 1; $i < 9; $i++)
        @php
            $data=$chaptermap['chapter_'.$i];
        @endphp
            <div class="col-md-6">
                <a href="{{route('chapter',['chapter'=>$sc->where('id',$data->id)->first()->slug])}}" class="single-chapter">
                    <img class="feature-image" src="{{asset($data->mobile_image)}}" alt="">
                    <div class="chapter-info">
                        <div class="logo">
                            <img src="{{asset($data->logo)}}" alt="">
                        </div>
                            <span class="title">
                                {{$data->title}}
                            </span>
                    </div>
                </a>
            </div>
        @endfor
    </div>
</div>
