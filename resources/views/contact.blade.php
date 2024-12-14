@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="header_section header_bg"></div>

<div class="contact_section layout_padding">
    <div class="container">
        <div class="contact_main">
            <h1 class="request_text">A Call Back</h1>

            <!-- Tampilkan pesan sukses jika ada -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <input type="email" class="email-bt" placeholder="Email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="email-bt" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required>
                </div>
                <div class="form-group">
                    <textarea class="massage-bt" placeholder="Message" rows="5" name="message" required>{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="send_btn">SEND</button>
            </form>
        </div>
    </div>
</div>
@endsection
