<h1>edit data blade</h1>

<form action="saveAfterUpdate">
    @csrf

    <input type="hidden"  name="id" value="{{$editable['id']}}">
    <input type="text" name="name" placeholder="enter your name" value="{{$editable['name']}}">
    <button type="submit">
        edit
    </button>
</form>