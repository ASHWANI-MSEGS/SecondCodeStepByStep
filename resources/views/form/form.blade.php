<h1>User form </h1>


<form action="submitform" method="POST" >
    @csrf
    {{-- value="{{old('username')}} is used to restore the data if incase they dont fillin
    properly and they have to do it again --}}
    <input type="text" name="username" placeholder="enter your name here" value="{{old('username')}}" ><br><br>
    <span>
     @error('username')     {{--what you keep in the name you keep here --}}
        {{$message}}
        @enderror
    </span><br>
    <input type="text" name="address" placeholder="enter the address" value="{{old('address')}}" ><br>
    <input type="passwords" name="password" placeholder="enter your password" ><br>
    <button type="submit">Login</button>
</form>