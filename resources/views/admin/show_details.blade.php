<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>one-health</title>
</head>

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


            <div class="container-fluid page-body-wrapper">
                <div align="center" style="padding-top:100px";>


                    <table>
                        <tr style="background-color:black;">
                            <th style="padding:10px">Image</th>
                            <th style="padding:10px">Description</th>
                            <th style="padding:10px">Update</th>
                            <th style="padding:10px">Delete</th>

                        </tr>
                        @foreach ($detail as $details)
                            <tr align="center" style="background-color:skyblue">
                                <td style="padding:10px"><img height="100" width= "100"
                                        src="doctorimage/{{ $details->image }}"></td>
                                <td style="padding:10px">{{ $details->description }}</td>



                                <td>
                                    <a href="{{ url('updatedetail', $details->id) }}" class="btn btn-success">Update</a>
                                </td>
                                <td>
                                    <a href="{{ url('deletedetail', $details->id) }}" class="btn btn-danger" onclick="return confirm ('are you sure to delete it')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.script')

    </body>

    </html>
</body>

</html>
