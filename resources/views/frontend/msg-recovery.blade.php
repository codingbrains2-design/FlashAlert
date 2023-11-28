@extends('frontend.layouts.app')
@section('content')
    <section>
        <div style="background: #c5e3ed">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="intro-box ">
                    <div class="intro-text d-flex justify-content-center align-items-center">
                        <h1>PASSWORD RECOVERY</h1>
                    </div>
                </div>
            </div>
        </div>
        @if (isset($success))
            <div class="alert alert-success">{{ $success }}</div>
        @endif

        @if (isset($error))
            <div class="alert alert-danger">{{ $error }}</div>
        @endif
        <div class="container" style="min-height: 42vh;">
            <form class="log-input front-login" method="post" action="{{ route('frontend-changepasss') }}">
                @csrf
                <p><strong>Change your Account Password:</strong></p>
                <p>Passwords are not case-sensitive and you may reuse a previous password.</p>
                <label for="New Password" class="mb-3"><b>New Password</b></label>
                <input placeholder="" type="text" id="" name="NPW" class="srch-form mb-4" required>
                @isset($listdata)
                <input type="hidden" name="email"  value={{$listdata['EmaillAddress']}}>
                <input type="hidden" name="token" value={{$listdata['Resetcode']}}>
                @endisset
                <label for="Confirm New Password" class="mb-3"><b>Confirm New Password</b></label>
                <input placeholder="" type="text" id="" name="ConfirmNPW" class="srch-form mb-4" required>
                <button type="submit" name="Submit" class="srch-btn">Change password</button>
            </form>
        </div>
    </section>
@endsection
