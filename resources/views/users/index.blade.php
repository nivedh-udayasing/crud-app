<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>One school</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid justify-content-between">
      <a class="navbar-brand" href="{{ route('users.index') }}">
        <img src="{{asset('images/logo.svg')}}" alt="Logo" width="40" height="30" class="d-inline-block align-text-top" />
        ONE SCHOOL
      </a>
      <a class="navbar-brand" href="{{ route('users.index') }}">
        <img class="rounded-circle" src="{{asset('images/man.png')}}" alt="profile" width="45" height="45" />
      </a>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="container_height row">
      <div class="sidebar_border col-2">
        <ul class="list-unstyled">
          <li class="my-3 mx-4">Student</li>
          <li class="my-3 mx-4">Staff</li>
          <li class="my-3 mx-4">Exams</li>
        </ul>
      </div>
      <div class="col-10 main">
        <div class="row my-3">
          <div class="col-10">
            <p>STUDENTS</p>
          </div>
          <div class="icon col-2">
            <a href="{{ route('users.create') }}" class="btn btn-success">ADD STUDENTS</a>
          </div>
<table class="table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Branch</th>
            <th>Hostel</th>
            <th>Subjects</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->mobile }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->branch }}</td>
            <td>{{ $user->hostel }}</td>
            <td>{{ implode(', ', $user->subjects) }}</td>
            <td>{{ $user->address }}</td>
            <div style="display: flex">
              <td>
                  <a  href="{{ route('users.edit', $user->id) }}"><i class="bi bi-pen">Edit</i></a>
                  <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this user?')"><i class="bi bi-trash3"></i></button>
                  </form>
              </td>
            </div>
        </tr>
        @endforeach
    </tbody>
</table>
