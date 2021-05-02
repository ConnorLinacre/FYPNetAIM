@extends('layouts.layout')

@section('title', "Welcome to Net.A.I.M")

@section('content')
Welcome to Net.A.I.M: the home of reliable infrastructure documentation.
<br/><img src="{{ asset('images/NetAIMSymbol.svg') }}" width="16px" style="display: inline;"/>&nbsp;Start your journey into Network Management today, <u><a class="link-light" href="{{route('login')}}">sign in</a></u> or <u><a class="link-light" href="{{route('register')}}">register</a></u> for free and quickly manage your infrastructure from work or home.
<br/><img src="{{ asset('images/NetAIMSymbol.svg') }}" width="16px" style="display: inline;"/>&nbsp;
<br/><img src="{{ asset('images/NetAIMSymbol.svg') }}" width="16px" style="display: inline;"/>&nbsp;
<br/><img src="{{ asset('images/NetAIMSymbol.svg') }}" width="16px" style="display: inline;"/>&nbsp;
<br/><img src="{{ asset('images/NetAIMSymbol.svg') }}" width="16px" style="display: inline;"/>&nbsp;
@endsection
