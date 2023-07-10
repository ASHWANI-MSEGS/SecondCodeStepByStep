<h1>first page url</h1>
<H3>current</H3>
<p> {{URL::current()}} </p>
<H3>previous</H3>
<p> {{URL::previous()}} </p>

{{-- here we are returning the url and keeping in a link --}}
<a href=" {{URL::previous()}}"> previous</a>
