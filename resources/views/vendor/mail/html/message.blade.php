@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}

{{ $slot }}
{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

<img src="{{ asset('assets/img/android-chrome-512x512.png') }}" class="logo" alt="Logo" style="width:180px; height:100px;">
{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} E-ECG. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
