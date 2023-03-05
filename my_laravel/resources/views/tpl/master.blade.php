<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin::@yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table class="table" height="690" width="100%">
        <tr class="table-primary">
            <td colspan="2" height="100">
                <h1>Header</h1>
            </td>
        </tr>
        <tr class="table">
            <td width="20%" valign="top">
                @section('nav')
                parant navigation
                @show
            </td>
            <td valign="top">@yield('body')</td>
        </tr>
        <tr class="table-primary">
            <td colspan="2" height="50">footer</td>
        </tr>
    </table>
</body>
</html>
