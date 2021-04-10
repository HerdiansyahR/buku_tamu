<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman dashboard, <strong>{{ Auth::user()->name }}</strong></h5>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                    <hr>
                    <a href="{{ route('createGuest') }}" class="btn btn-primary">Create Guest</a>
                    <div class="card-body">
                        <table id="customers">
                            <thead>
                                <th> NIK </th>
                                <th> Name</th>
                                <th> Email</th>
                                <th> Phone Number</th>
                                <th> Reason</th>
                                <th> Status</th>
                                <th> action</th>
                            </thead>
                            <tbody>
                                @foreach($guest as $guest)
                                <tr>
                                    <td>{{$guest->nik}}</td>
                                    <td>{{$guest->name}}</td>
                                    <td>{{$guest->email}}</td>
                                    <td>{{$guest->phone_number}}</td>
                                    <td>{{$guest->reason}}</td>
                                    <td>
                                        @if ($guest->status === 2)
                                        <button style="background-color: #4CAF50;">Verified</button>
                                        @else
                                        <button style="background-color: #f44336;">Unverified</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button>
                                            <a href="{{ route('editStatus.edit', $guest->id) }}"
                                                style="background-color: #e7e7e7; color: black;">Edit</a>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>