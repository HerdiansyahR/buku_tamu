<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Reservation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Insert Identity</h3>
                </div>
                <form action="{{ route('storeGuest.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for=""><strong>NIK</strong></label>
                            <input type="text" name="nik" class="form-control" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Name</strong></label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Email</strong></label>
                            <input name="email" class="form-control" placeholder="Email"></input>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Phone Number</strong></label>
                            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Reason</strong></label>
                            <input type="text" name="reason" class="form-control" placeholder="Your Reason?">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>