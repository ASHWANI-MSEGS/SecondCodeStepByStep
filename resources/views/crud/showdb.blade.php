<h1>YAHA data aayega</h1>

<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>action</th>
@foreach ($roti as $rot )
        <tr>
            <td> {{$rot['id']}} </td>
            <td> {{$rot['name']}} </td>
            <td>
              <a href={{"delete2/".$rot['id']}}>Delete</a>
                <a href={{"edit2/".$rot['id']}}>| Edit</a> </td>
        </tr>
@endforeach
    </tr>
</table>
{{-- to initiate the pagination --}}
<span>
   {{ $roti->links() }}
</span>
{{-- to resize the arrow buttons --}}
<style>
    .w-5{
        height: 22px;
        width:22px;
    }
</style>