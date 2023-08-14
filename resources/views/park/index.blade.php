<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&family=Noto+Sans+Thai+Looped&family=Noto+Sans+Thai:wght@300&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Noto Sans Thai', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-7" style="text-align: center">
                @if(session("success"))
                    <div class="alert alert-success">{{ session("success")}}</div>
                @endif
                <div class="card-header">
                    <h1>รายการช่องจอดรถทั้งหมด</h1>
                </div>
                <a href="{{ url('/') }}" class="btn btn-primary" style="float: right;margin-top:10px">Home</a>
                <div class="card-body">
                        <h3 style="color: green;text-align:left">ว่าง {{ $countpark }} ที่</h3>
                    <table class="table table-bordered">
                        <thead class="table table-primary">
                            <tr>
                                <th>ID</th>
                                <th>ชื่อ</th>
                                <th>ประเภท</th>
                                <th>สถานะที่จอด</th>

                                <th>เลขทะเบียนรถ</th>
                                <th>จำนวนวันที่เช่า</th>
                                <th>ราคา</th>
                                <th>จอง</th>
                            </tr>
                        </thead>
                        @foreach ($parking as $row)

                        <tbody>
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->park_id }}</td>
                                <td>{{ $row->type }}</td>
                                <td>@if($row->park_status == 0)
                                        ว่าง
                                    @else
                                        ไม่ว่าง
                                    @endif</td>
                                {{-- <td>@if($row->park_check == 0)
                                    ว่าง
                                @else
                                    ไม่ว่าง
                                @endif</td> --}}
                                <td>{{ $row->car_id }}</td>
                                <td>{{ $row->day_amount }}</td>
                                <td>@if($row->type == "รายเดือน")
                                    500
                                @else
                                    รายวัน -80|walk in ชม. -20
                                @endif</td>
                                <td>
                                @if($row->park_status == 0)
                                    <a href="{{ url('park/rent/'.$row->id) }}" class="btn btn-danger">จอง</a>
                                @else
                                    <button class="btn btn-danger" disabled>เต็ม</button>
                                @endif
                                </td>
                            </tr>

                        </tbody>
                </div>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
