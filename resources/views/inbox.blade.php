@extends('layouts.app')

@section('content')
<div class="container">
                <div class="card-header" id="header-inbox" style="border-top-right-radius:2rem;border-top-left-radius:2rem;"> <h5 class="display-4" style="font-size:1.8rem;margin:0;font-weight:600;color:white;">Inbox</h5></div>
            <div class="card" style="border-bottom-right-radius:2rem;border-bottom-left-radius:2rem;">
                <div class="card-body" id="app" style="padding:0;">
                    <inbox :user="{{ auth()->user() }}"></inbox>
                </div>
            </div>
</div>
@endsection
