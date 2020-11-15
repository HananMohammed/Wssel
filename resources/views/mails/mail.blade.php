<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th{
            background-color: grey;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<table>
    <h3> Wssal Customers Contact </h3>
    <thead>
    <th>name</th>
    <th>message</th>
    </thead>
    <tbody>
    <tr>
        <td>Customer ID</td>
        <td>{{$id}}</td>
    </tr>
    <tr>
        <td>name</td>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <td>Age</td>
        <td>{{$age}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
