@extends('front.app')
@section('main')

{{-- <div class="container">
    <div class="row">

            <div class="form-group">
              <label for="exampleInputEmail1">Score</label>
              <input type="number" class="form-control" id="scoreValue" aria-describedby="emailHelp" placeholder="Enter Score">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>


            <button class="scoreUpdate btn btn-primary">Submit</button>

            <h4 class="lastScore"></h4>

    </div>
</div> --}}


<div class="container">
    <div class="row">
<div>
        {{-- <form action=""> --}}
            <small class="lastScore">aaaa</small>
            <div class="form-group">
              <label for="exampleInputPassword1">Score</label>
              <input id="scoreValue" type="number" class="form-control" id="exampleInputPassword1" placeholder="Score">
            </div>

            <button  class="scoreUpdate btn btn-primary">Submit</button>
        {{-- </form> --}}
    </div>
    </div>
</div>



@endsection

@push('script')
  <script>
    $('.scoreUpdate').click(function(){

      let score = $('#scoreValue').val();

      let url = '/update/score';

      axios.post(url,{score:score}).then(function(response){

        $('.lastScore').html(response.data)
       console.log(response.data);
      }).catch(function(){

      })
    })
  </script>

@endpush
