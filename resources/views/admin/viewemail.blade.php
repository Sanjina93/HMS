<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<base href="/public">

</style>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
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


                        <h1 class="font-bold text-lg text-center py-4">Send Email</h1>

                        <form action="{{ url('/sendemail' ,$data->id) }}" method="Post" enctype="multipart/form-data" class="text-center">

                            @csrf

                            <div class="mt-3">
                                <label for="">Greeting</label>
                                <input type="text" class="w-50 rounded p-2 ml-5" name=" greeting" style="color:black;"
                                    placeholder="" required="">
                            </div>


                            <div class="mt-3">
                                <label for="">Body</label>
                                <input type="text" class="w-50 rounded p-2 ml-5" style="color:black;"
                                 name="body" placeholder=" " required="">
                            </div>

                            <div class="mt-3">
                                <label for="">Action Text</label>
                                <input type="text" class="w-50 rounded p-2 ml-5" style="color:black;"
                                name="actiontext" placeholder=" " required="">
                            </div>
                            {{-- <div class="mt-3">
                                <label for="">Action Url</label>
                                <input type="text" class="w-50 rounded p-2 ml-5" style="color:black;"
                                name="actionurl" placeholder=" " required="">
                            </div> --}}

                            <div class="mt-3">
                                <label for="">End Part</label>
                                <input type="text"
                                class="w-50 rounded p-2 ml-5" style="color:black;"
                                    name="endpart" placeholder="" required="">
                            </div>




                            <div class="mt-3">

                                <input type="submit" value="submit" class="btn btn-primary">
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
