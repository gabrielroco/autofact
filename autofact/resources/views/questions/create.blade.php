@extends('layout')
<div>
    <h1 align=center>Formulario</h1>
</div>
<div class="container">
    <form method="post" action="{{ route('questions.store') }}">
        @csrf
        <div class="form-group">
            
            <input type="hidden" class="form-control" name="questioner" value="{{ Auth::user()->name }}">
        </div>
        <div class="form-group">
            <label for="add_question_form">Qué te gustaría que agregaramos al informe?</label>
            <textarea type="text" class="form-control" name="add_question_form"></textarea>
        </div>
        <div class="form-group">
            <label for="info_is_correct">La información es correcta?</label>
            <select name="info_is_correct">
                <option value="Si" selected>Si</option>
                <option value="No">No</option>
                <option value="Mas o Menos">Mas o Menos</option>
            </select>
        </div>
        <div class="form-group">
            <label for="fast_site">Del 1 al 5, es rápido el sitio?</label>
            <input type="number" class="form-control" name="fast_site" min="1" max="5"/>
        </div>

        <button type="submit" class="btn btn-primary">Subir Formulario</button>

    </form>
</div>