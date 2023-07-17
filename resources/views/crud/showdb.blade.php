<h1>YAHA data aayega</h1>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
@foreach ($roti as $rot )
        <tr>
            <td> {{$rot['id']}} </td>
            <td> {{$rot['name']}} </td>

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