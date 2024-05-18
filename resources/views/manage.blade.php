<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Users</title>
</head>
<body>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
    
        table th,
        table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    
        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    
        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    
        table tbody tr:hover {
            background-color: #ddd;
        }
    
        a.btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #ffffff;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }
    
        a.btn:hover {
            background-color: #0056b3;
        }
    </style>
    
    <body>
        <a href="/adduser" class="btn">Add New User</a>
    
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Photo</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->address }}</td>
                        <td><img src="{{ $user->photo }}" alt="" style="width: 50px"></td>
                        <td><a href="edit/{{ $user->id }}">Edit</a></td>
                        <td><a href="delete/{{ $user->id }}">Delete</a></td>
    
                    </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>