<h1>Flash form</h1>
@if(session('good')) 
<h3 > {{session('good')}} has been updated</h3>
@endif
<form action="flashsubmit " method="POST">
    @csrf
<input type="text " name="user" placeholder="naam likhna"><br>
<input type="text " name="password" placeholder="pass likhna"><br>
<button type="Submit">sdfjksdhfjkhsdf</button>
</form>