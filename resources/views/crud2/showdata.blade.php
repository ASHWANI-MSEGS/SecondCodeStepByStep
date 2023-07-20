<h1>show  2</h1>
{{  session("message")}}
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>actions</th>
      </tr>
@foreach ($showdata as $data )
        <tr>
            <td> {{$data['id']}} </td>
            <td> {{$data['name']}} </td>
            <td>
                <a href={{"delete2/".$data['id']}}>Delete |</a>
                <a href={{"edit2/".$data['id']}} >Edit </a>
            </td>
        </tr>
@endforeach
</table>
{{--
<span>
    {{$showdata->links()}}
</span>
<style>
    .w-5{
        height:20px;
        width:20px;
    } --}}
{{-- </style> --}}