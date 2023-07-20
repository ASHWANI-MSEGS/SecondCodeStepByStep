<table>
    @foreach ($directData as $data )
    <tr>
        <td>{{$data->id}} </td>
        <td>{{$data->name}} </td>
    </tr>
    @endforeach
</table>