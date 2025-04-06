@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <p>Formulario de contacto:</p>
    <form>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection