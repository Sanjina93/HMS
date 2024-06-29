<style>
    .error {
        color: red;
    }
</style>

<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{ url('appointment') }}" method="POST">

        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
            @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text"  name="email"class="form-control" placeholder="Email address">
            @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text"  name="age" class="form-control" placeholder="Age">
            @error('age')
            <div class="error">{{ $message }}</div>
        @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <select name="gender"  class="custom-select">
                <option>--select gender-- </option>

                <option value="male">male</option>
                <option value="female">female</option>

            </select>
            @error('gender')
            <div class="error">{{ $message }}</div>
        @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
            @error('date')
            <div class="error">{{ $message }}</div>
        @enderror
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">
                <option>--select doctor--</option>


                @foreach($doctor as $doctors)

                <option value="{{$doctors->name}}">{{$doctors->name}} --speciality--{{$doctors->speciality}}</option>
              @endforeach
            </select>
            @error('doctor')
            <div class="error">{{ $message }}</div>
        @enderror
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text"  name="phone" class="form-control" placeholder="Number">
            @error('phone')
            <div class="error">{{ $message }}</div>
        @enderror
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message"></textarea>
            @error('message')
            <div class="error">{{ $message }}</div>
        @enderror
          </div>
        </div>

        <button class="btn btn-primary mt-3 wow zoomIn ;" type="submit;">Submit Request</a></button>

      </form>
    </div>
  </div>
