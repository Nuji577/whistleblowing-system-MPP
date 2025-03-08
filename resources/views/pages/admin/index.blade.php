@extends('layouts.admin')

@section('content')
    <div class="d-flex">
        <h1>Hi, {{ Auth::user()->name }}👋</h1>

        <a id="logout-confirmaton" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class='bx bx-log-in'></i>
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
@endsection

