@if($type === "danger")
    <div class="alert-box">
        {{ $message }}
    </div>
@else
    <div class="alert-green">
        {{ $message }}
    </div>
@endif