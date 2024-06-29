 <div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Latest News</h1>

        <div class="row mt-5">
            @foreach ($test as $new)
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category"></div>
                            <a href="{{url('usernews',$new->id)}}" class="post-thumb">
                                <img src="{{ url('doctorimage/' . $new->image) }}"  alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="{{url('usernews',$new->id)}}">{{ $new->title }}</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">

                                    <span>{{$new->name}}</span>
                                </div>
                                <span class="mai-time"></span> {{$new->time}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-12 text-center mt-4 wow zoomIn">
            <a href="{{ url('usernews',$new->id) }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>

