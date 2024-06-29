<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>one-health</title>
    <style type="text/css">
        label {
            display: inline-block;
            width: 300px;
        }
    </style>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.slider')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper ">


            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif


            <div class="container" align="center" style="padding-top:50px;">

                <h1 class="font-bold text-lg text-center py-4">Add Doctor</h1>

                <form action="{{ url('/upload_doctor') }}" method="Post" enctype="multipart/form-data"
                    class="text-center">

                    @csrf

                    <div style="padding:15px">
                        <label for="">Doctor Name</label>
                        <input type="text"  class="w-50 rounded p-2 ml-5" style="color:black;" name=" name" placeholder="Enter name"
                            required="">
                    </div>

                    <div style="padding:15px">
                        <label for="">Phone</label>
                        <input type="text"  class="w-50 rounded p-2 ml-5"style="color:black;" name="phone" placeholder="Enter number"
                            required="">
                    </div>

                    <div style="padding:15px">
                        <label for="">Speciality</label>
                        <select name="speciality"  class="w-50 rounded p-2 ml-5" id="" style="color:black; width:230px" required="">
                            <option>select</option>

                            <option value="skin">skin</option>
                            <option value="heart">heart</option>
                            <option value="eye">eye</option>
                            <option value="nose">nose</option>
                        </select>

                    </div>

                    <div style="padding:15px">
                        <label for="">Room No</label>
                        <input type="text"  class="w-50 rounded p-2 ml-5"style="color:black;" name="room" placeholder="Enter room no"
                            required="">
                    </div>
                    <div style="padding:15px">
                        <label for="">Days</label>
                        <input type="text"  class="w-50 rounded p-2 ml-5"style="color:black;" name="days" placeholder="Enter days"
                            required="">
                    </div>
                    <div style="padding:15px">
                        <label for="">Availability</label>
                        <input type="text"  class="w-50 rounded p-2 ml-5"style="color:black;" name="availability" placeholder="Enter available"
                            required="">
                    </div>



                    <div class="mt-3">
                        <label for="">Doctor Image</label>
                        <input type="file" name="image" required="">
                    </div>
                    <div class="mt-3">

                        <input type="submit" value="submit" class="btn btn-success">
                    </div>
                </form>
            </div>


        </div>
    </div>


    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')


</body>

</html>
</body>

</html>
