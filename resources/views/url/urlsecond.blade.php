<h1>second page url</h1>
<H3>current</H3>
<p> {{URL::current()}} </p>
<H3>previous</H3>
<p> {{URL::previous()}} </p>

<p>yaha kucn ana he</p>
<x-saar componentName="This is the second"   />


{{-- // thing the view on being passed data via route faltu things --}}
@foreach ($trying as $ke => $try)
    <p>{{ $ke." ".$try }}</p>

@endforeach
{{-- including the another blade file --}}
<p>including another blade file</p>
@include("url.urlfirst")

