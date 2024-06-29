<div class="page-section">
    <div class="container">


        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($doctor as $doctors)
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img height="300 px" src="doctorimage/{{$doctors->image}}" alt="">
                            <div class="meta">
                                <a href="{{ url('profile', $doctors->id) }}"><button class="btn btn-primary">Profile</button></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{$doctors->name}}</p>
                            <span class="text-sm text-grey">{{$doctors->speciality}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

