
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>one-health</title>
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


                <h1 class="font-bold text-lg text-center py-4">Update Details</h1>

                <form action="{{ url('/editdetail',$detail->id) }}" method="Post" enctype="multipart/form-data" class="text-center">

                    @csrf

                    <div class="mt-3 text-center" >
                        <label for="">old Image</label>
                        <img src="doctorimage/{{$detail->image}}" height="150" width="150"  style="display: inline-block;"   alt="">

                    </div><br>

                    <div class="mt-3">
                        <label for="">Change Image</label>
                        <input type="file" name="file">
                    </div>

                    <div>
                        <label for="">Description</label>
                        <input type="text" class="w-50 rounded p-2 ml-5" name=" description" style="color:black;"
                        value="{{$detail->name}}">>
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
