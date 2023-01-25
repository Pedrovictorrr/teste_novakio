@extends('angular')
@section('content')

<div class="row">
    <div class="d-flex justify-content-center mt-5">
  <h3>Hello, world Laravel OK</h3>  
</div>
<div class="text-center">
<strong>Data: </strong>{{$result['data']}}
<br>
<strong>Hora: </strong>{{$result['hora']}}
</div></div>
<form action="{{route('start.post')}}" method="POST">
    @csrf
<div class="row">
<div class="d-flex justify-content-center">
    <div class="mb-3 col-md-3 ">
        <label for="exampleInputEmail1" class="form-label">Entre com texto</label>
        <input type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
      
</div>
<div class="d-flex justify-content-center"><button class="btn btn-success" type="submit">Enviar</button></div>
<div class="text-center mt-5">
    <strong>Resposta:</strong> {{$result['text']}}
</div>
</form>
</div>
@endsection