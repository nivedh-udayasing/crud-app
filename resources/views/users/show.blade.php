<!-- Display user details -->
<h1>User Details</h1>

<table>
    <tr>
        <th>First Name:</th>
        <td>{{ $user->firstname }}</td>
    </tr>
    <tr>
        <th>Last Name:</th>
        <td>{{ $user->lastname }}</td>
    </tr>
    <tr>
        <th>Mobile:</th>
        <td>{{ $user->mobile }}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{ $user->email }}</td>
    </tr>
    <tr>
        <th>Branch:</th>
        <td>{{ $user->branch }}</td>
    </tr>
    <tr>
        <th>Hostel:</th>
        <td>{{ $user->hostel }}</td>
    </tr>
    <tr>
        <th>Subjects:</th>
        <td>{{ implode(', ', $user->subjects) }}</td>
    </tr>
    <tr>
        <th>Address:</th>
        <td>{{ $user->address }}</td>
    </tr>
</table>

<a href="{{ route('users.index') }}">Back to Users</a>
