<h1>showing the data</h1>
<table>
    <tr>
        <th>id</th>
        <th>email</th>
        <th>first</th>
        <th>last</th>
        <th>avatar</th>
    </tr>
    @foreach ($recieveData as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['last_name']}}</td>
        <td><img src="{{$item['avatar']}}" alt=""> </td>
    </tr>
    @endforeach
</table>