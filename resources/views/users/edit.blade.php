<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>One School</title>
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
                <img src="{{asset('images/man.png')}}" alt="profile" width="45" height="45" />
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
            <div class="col-10">
@if($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
                <div class="row-12 my-3">Student Registration</div>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
                    <div class="col-sm-12 col-md-6">
                        <label for="firstname" class="form-label">First Name<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="firstname" id="firstname" value="{{ old('firstname', $user->firstname) }}" required placeholder="Enter Student's First Name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label for="lastname" class="form-label">Last Name<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="lastname" id="lastname" value="{{ old('lastname', $user->lastname) }}" required placeholder="Enter Student's Last Name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label for="mobile" class="form-label">Mobile<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="mobile" id="mobile" value="{{ old('mobile', $user->mobile) }}" required placeholder="Enter Parents's Mobile Number">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                        <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required placeholder="Enter Parents's Email ID">
                        <div class="invalid-feedback"></div>
                    </div>
                     <div class="col-sm-12 col-md-6">
                        <label for="branch" class="form-label">Branch<span class="text-danger">*</span></label>
                        <select name="branch" id="branch" class="form-select " required>
                            <option value="" selected hidden>Select Branch</option>
                            <option value="computer science" {{ old('branch', $user->branch) == 'computer science' ? 'selected' : '' }}>Computer Science</option>
                            <option value="electrical" {{ old('branch', $user->branch) == 'electrical' ? 'selected' : '' }}>Electrical</option>
                            <option value="mechanical" {{ old('branch', $user->branch) == 'mechanical' ? 'selected' : '' }}>Mechanical</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label class="form-label d-block" for="hostel">Needs Hostel Facility<span class="text-danger">*</span></label>
                        <div class="form-check form-check-inline fix-position">
                        <input class="form-check-input " type="radio" name="hostel" id="hostel_yes" value="yes" {{ old('hostel', $user->hostel) == 'yes' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="hostel_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline fix-position">
                        <input class="form-check-input " type="radio" name="hostel" id="hostel_no" value="no" {{ old('hostel', $user->hostel) == 'no' ? 'checked' : '' }} required>
                        <label class="form-check-label"  for="hostel_no">No</label>
                        </div>
                    </div>
                     <div class="col-sm-12 col-md-6">
                        <div><label for="subjects" class="form-label">Choose Additional Subjects</label></div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="subjects[]" id="subject1" value="Cyber Security" {{ in_array('subject1', old('subjects',$user->subjects)) ? 'checked' : '' }}> Cyber Security
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="subjects[]" id="subject2" value="Artificial Inteligence" {{ in_array('subject2', old('subjects',$user->subjects)) ? 'checked' : '' }}> Artificial Inteligence
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="subjects[]" id="subject3" value="Block Chain" {{ in_array('subject3', old('subjects',$user->subjects)) ? 'checked' : '' }}> Block Chain
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="subjects[]" id="subject4" value="IOT" {{ in_array('subject4', old('subjects',$user->subjects)) ? 'checked' : '' }}> IOT
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="subjects[]" id="subject5" value="ROBOTICS" {{ in_array('subject5', old('subjects',$user->subjects)) ? 'checked' : '' }}> ROBOTICS
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label class="form-label" for="address">Address</label>
                        <textarea class="form-control" cols="30" rows="5" name="address" id="address" placeholder="Enter your address" required>{{ old('address', $user->address) }}</textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                                            <div class="col-sm-12 col-md-6 offset-6 text-end">
                        <button class="btn btn-secondary btn-sm" type="reset">
                            <i class="bi bi-reply"></i>
                            Reset
                        </button>
                        <button class="btn btn-success btn-sm" type="submit">
                            <i class="bi bi-person-plus-fill"></i>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    {{-- <a href="{{ route('users.index') }}">Back to Users</a> --}}
</body>
</html>

