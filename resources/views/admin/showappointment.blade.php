
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
                    <th style="padding:10px">Patient name</th>
                    <th style="padding:10px">Email</th>
                    <th style="padding:10px">Phone</th>
                    <th style="padding:10px">Doctor Name</th>
                    <th style="padding:10px">Date</th>
                    <th style="padding:10px">Message</th>
                    <th style="padding:10px">Status</th>
                    <th style="padding:10px">Approved</th>
                    <th style="padding:10px">Cancelled</th>
                    <th style="padding:10px">Email Send</th>
                </tr>
                @foreach($data as $appoint)

                <tr align="center" style="background-color:skyblue">
                    <td style="padding:10px">{{$appoint->name}}</td>
                    <td style="padding:10px">{{$appoint->email}}</td>
                    <td style="padding:10px">{{$appoint->phone}}</td>
                    <td style="padding:10px">{{$appoint->doctor}}</td>
                    <td style="padding:10px">{{$appoint->date}}</td>
                    <td style="padding:10px">{{$appoint->message}}</td>
                    <td style="padding:10px">{{$appoint->status}}</td>
                    <td>
                        <a href="{{url('approved',$appoint->id)}}" class="btn btn-success">Approved</a>
                    </td>
                    <td>
                        <a href="{{url('cancelled',$appoint->id)}}" class="btn btn-danger">Cancelled</a>
                    </td>
                    <td>
                        <a href="{{url('viewemail',$appoint->id)}}" class="btn btn-primary">Send Email</a>
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
