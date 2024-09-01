@extends('front.app')
@section('main')

<div class="container">
    <div class="row">
            <div class="form-group">
             <h2 id="runScore">500</h2>
             <p>Run</p>
            </div>
    </div>
</div>
@endsection

@push('script')
<script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>

<script>
let pusher = new Pusher('73456f2a5a91b5d864fc',{
     cluster:'ap2'
});

let channel =  pusher.subscribe('my-channel');
channel.bind('my-event',function(data){

    $('#runScore').html(data.scoreValue);
    console.log(data.scoreValue);
})
</script>
@endpush
