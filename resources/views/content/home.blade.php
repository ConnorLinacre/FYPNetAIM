@extends('layouts.layout')

@section('title', "Welcome to Net.A.I.M")

@section('content')
<span style="font-size: 24px">Welcome to Net.A.I.M: the home of reliable infrastructure documentation.</span>
<br/><img src="{{ asset('images/NetAIMSymbol.svg') }}" width="16px" style="display: inline;"/>&nbsp;Start your journey into Network Management today, <u><a class="link-light" href="{{route('login')}}">sign in</a></u> or <u><a class="link-light" href="{{route('register')}}">register</a></u> for free and quickly manage your infrastructure from work or home.
<br/><img src="{{ asset('images/NetAIMSymbol.svg') }}" width="16px" style="display: inline;"/>&nbsp;We offer unlimited access for any account, and can include documentation such as: Location, Building, Network Device and Ethernet storage!
<br/><img src="{{ asset('images/NetAIMSymbol.svg') }}" width="16px" style="display: inline;"/>&nbsp;Persistent storage allows all your documentation to be stored easily and without fuss, out AIM allows you to quickly retrieve, modify and remove anything.
<br/><img src="{{ asset('images/NetAIMSymbol.svg') }}" width="16px" style="display: inline;"/>&nbsp;Try using our new search feature! It will allow you to now filter data to quickly find what you need within massive documents.
<br/><img src="{{ asset('images/NetAIMSymbol.svg') }}" width="16px" style="display: inline;"/>&nbsp;Please contact support at: U1653940@unimail.hud.ac.uk, if you need any help with account deletion.
@endsection
