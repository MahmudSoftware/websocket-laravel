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
let pusher = new Pusher('988bed7d54660e394e6f',{
     cluster:'ap2'
});

let channel =  pusher.subscribe('score-channel');
channel.bind('score-channel',function(data){
    $('#runScore').html(data);
    console.log(data);
})
</script>
@endpush