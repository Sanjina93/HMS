
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
                    <th style="padding:10px">Title</th>
                    <th style="padding:10px">Description</th>
                     <th style="padding:10px">Name</th>
                   <th style="padding:10px">Time</th>
                   <th style="padding:10px">Image</th>

                    <th style="padding:10px">Update</th>
                    <th style="padding:10px">Delete</th>

                </tr>
                @foreach($data as $news)

                <tr align="center" style="background-color:skyblue">
                    <td style="padding:10px">{{$news->title}}</td>
                    <td style="padding:5px">{{$news->description}}</td>
                    <td style="padding:10px">{{$news->name}}</td>
                    <td style="padding:10px">{{$news->time}}</td>
                    <td style="padding:10px"><img height="100" width= "300" src="doctorimage/{{$news->image}}"></td>
                    <td>
                        <a href="{{url('updatenews',$news->id)}}" class="btn btn-success">Update</a>
                    </td>
                    <td>
                        <a href="{{url('deletenews',$news->id)}} " class="btn btn-danger" onclick="return confirm ('are you sure to delete it')">Delete</a>
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
