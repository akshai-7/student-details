<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    body{
        font-family: 'Times New Roman', Times, serif;
    }
</style>
<body>

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                <div class="card border border-dark">
                    <div class="card-header  ">
                        <h3 class="text-primary">Edit  Details</h3>
                    </div>

                    <div class="card-body ">
                        <form method="POST" action="{{url('update/'.$user->id)}}" >
                            @csrf

                            <div class="row mb-4">
                                <label for="" class="col-md-4 col-form-label text-md-end">Name</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="name" required value="{{$user->name}}">

                                </div>
                            </div><div class="row mb-4">
                                <label for="" class="col-md-4 col-form-label text-md-end">Age</label>

                                <div class="col-md-6">
                                    <input  type="number" class="form-control" name="age" required value="{{$user->age}}">

                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4 col-form-label text-md-end">Contact</label>

                                <div class="col-md-6">
                                    <input  type="number" class="form-control" name="contact" required value="{{$user->contact}}">

                                </div>
                            </div>


                            <div class="row mb-4">
                                <label for="" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                <div class="col-md-6">
                                    <input  type="email" class="form-control" name="email" required value="{{$user->email}}">
                                </div>

                            </div>

                            <div class="row ">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
