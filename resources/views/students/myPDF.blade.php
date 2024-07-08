<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p> dasdsada </p>


    <table class="w-100 mx-auto text-sm text-left text-gray-500">
        <tr>
            <th scope="col" class="py-3 px-6">
                First Name
            </th>
            <th scope="col" class="py-3 px-6">
                Last Name
            </th>
            <th scope="col" class="py-3 px-6">
              Gender
            </th>
            <th scope="col" class="py-3 px-6">
                Email
            </th>
            <th scope="col" class="py-3 px-6">
                Age
            </th>
            <th scope="col" class="py-3 px-8 text-center">
                Action
            </th>
        </tr>

        @foreach ($students as $stud)
            <tr>
                <td class="py-4 px-6 "> {{$stud -> first_name }} </td>
                <td class="py-4 px-6"> {{$stud -> last_name }} </td>
                <td class="py-4 px-6"> {{$stud -> gender }} </td>
                <td class="py-4 px-6"> {{$stud -> email }} </td>
                <td class="py-4 px-6"> {{$stud -> age }} </td>
            </tr>
        @endforeach
    </table>
</body>
</html>