@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Usuario que responde</td>
          <td>Agregar nueva pregunta?</td>
          <td>Es la informacion correcta?</td>
          <td>Rapidez del sitio de 1 a 5</td>
        </tr>
    </thead>
    <tbody>
        @foreach($questions as $question)
        <tr>
            <td>{{$question->id}}</td>
            <td>{{$question->questioner}}</td>
            <td>{{$question->add_question_form}}</td>
            <td>{{$question->info_is_correct}}</td>
            <td>{{$question->fast_site}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection