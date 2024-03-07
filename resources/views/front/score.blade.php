@extends('front.app')
@section('main')

<div class="container">
    <div class="row">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Score</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Score">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
         
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection