
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>one-health</title>
        <style>
        label{
            display: inline-block;
            width:300px;
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

                    @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="container" align="center" style="padding-top:100px;">


                        <h1 class="font-bold text-lg text-center py-4">News</h1>

                        <form action="{{ url('/upload_news') }}" method="Post" enctype="multipart/form-data" class="text-center">

                            @csrf
                            <div style="padding:15px">
                                <label for="">Image</label>
                                <input type="file" name="image" required="" >
                            </div>
                            <div style="padding:15px">
                                <label for="">Title</label>
                                <input type="text" class="w-50 rounded p-2 ml-5" name="title" style="color:black;"
                                    placeholder="Enter title" required="">
                            </div>

                            <div style="padding:15px">
                                <label for="">Description</label>
                                <input type="text" class="w-50 rounded p-2 ml-5" name="description" style="color:black;"
                                    placeholder="Enter description" required="">
                            </div>

                            <div class="padding:15px">
                                <label for="">Name</label>
                                <input type="text" class="w-50 rounded p-2 ml-5" name="name" style="color:black;"
                                    placeholder="Enter name" required="">
                            </div><br>


                            <div class="padding:15px">
                                <label for="">Time</label>
                                <input type="text" class="w-50 rounded p-2 ml-5" name="time" style="color:black;"
                                    placeholder="Enter time" required="">
                            </div><br>




                            <div class="padding:15px">
                                <input type="submit" value="submit" class="btn btn-success">
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
