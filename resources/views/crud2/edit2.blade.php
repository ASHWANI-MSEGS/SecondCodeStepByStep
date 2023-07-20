<h1>edit 2 my boi</h1>

{{-- <form action="/update22" method="POST">
    @csrf
    @method('put')
    <input type="text" name="id" value="{{$edit2['id']}}" >
    <input type="text" name="name" value="{{$edit2['name']}}">
    <button type="submit">
        edit
    </button>
</form> --}}

<form action="/update22" method="POST">
@csrf
<input type="hidden" name="id" value="{{$edit2['id']}}">
    <input type="text" name="name" placeholder="enter the name to be edited" value="{{$edit2['name']}}">

<button type="submit">edit</button>

</form>
