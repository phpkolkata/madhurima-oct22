<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin::@yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
