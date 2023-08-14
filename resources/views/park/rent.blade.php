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
        <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 50vh;">
            <div class="col-7">
                <div class="card-header" style="text-align:center">
                    <h1>การจองที่จอดรถ</h1>
                </div>
                <form action="{{ url('/park/update/'.$rent_park->id) }}" method="POST">
                    @csrf
                    <div class="col-5 card-body" style="margin-left: 30%;margin-top:10px">
                        <div class="form-group">
                            <label for="" style="font-size:20px;">ชื่อ-นามสกุลผู้จอง:</label>
                            <input type="text" name="username" class="form-control">
                            @error('username')
                                <div class="my-2">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="" style="font-size:20px;">ช่องที่จอง:</label>
                            <input type="text" name="park_id"  class="form-control" value="{{ $rent_park->park_id }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="" style="font-size:20px;">ประเภท:</label>
                            @if(!empty($rent_park->type))
                                <input type="text" name="type" class="form-control" value="{{ $rent_park->type }}">
                            @else
                                <input type="text" name="type" class="form-control" value="รายวัน" >
                            @endif
                        </div>
                        <br>
                        <button class="btn btn-success">ยืนยันการจอง</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
