
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pne-health</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  @include('admin.css')
  </head>
  <body>
  <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.slider')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">

        <div class="content-wrapper">

            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


                <h1 class="font-bold text-lg text-center py-4">Update Doctor</h1>

                <form action="{{ url('/editdoctor',$data->id) }}" method="Post" enctype="multipart/form-data" class="text-center">

                    @csrf

                    <div class="mt-3">
                        <label for="">Doctor Name</label>
                        <input type="text" class="w-50 rounded p-2 ml-5" name=" name" style="color:black;"
                            value="{{$data->name}}">
                    </div>

                    <div class="mt-3">
                        <label for="">Phone</label>
                        <input type="text" class="w-50 rounded p-2 ml-5" style="color:black;"
                         name="phone"  value="{{$data->phone}}">
                    </div>

                    <div class="mt-3">
                        <label for="">Speciality</label>
                        <select name="speciality" id="" class="w-50 rounded p-2 ml-5 "  style="color:black;" value="{{$data->speciality}}">


                            <option value="skin">skin</option>
                            <option value="heart">heart</option>
                            <option value="eye">eye</option>
                            <option value="nose">nose</option>
                        </select>

                    </div>
                    <div class="mt-3">
                        <label for="">Days</label>
                        <input type="text" class="w-50 rounded p-2 ml-5" name=" days" style="color:black;"
                            value="{{$data->days}}">
                    </div>

                    <div class="mt-3">
                        <label for="">Availability</label>
                        <input type="text" class="w-50 rounded p-2 ml-5" name=" availability" style="color:black;"
                            value="{{$data->availability}}">
                    </div>


                    <div class="mt-3">
                        <label for="">Room No</label>
                        <input type="text" style="color:black;"
                        class="w-50 rounded p-2 ml-5"
                            name="room"  value="{{$data->room}}">
                    </div>



                    <div class="mt-3 text-center" >
                        <label for="">old Image</label>
                        <img src="doctorimage/{{$data->image}}" height="150" width="150"  style="display: inline-block;"   alt="">

                    </div><br>

                    <div class="mt-3">
                        <label for="">Change Image</label>
                        <input type="file" name="file">
                    </div>
                    <div class="mt-3">

                        <input type="submit" class= "btn btn-primary"value="Update">
                    </div>
                </form>


        </div>
    </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

  </body>
</html>
</body>
</html>
