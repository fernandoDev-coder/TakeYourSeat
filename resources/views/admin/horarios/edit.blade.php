@extends('layouts.app')

@section('content')
@php
    $salaNumero = is_string($horario->sala) ? (int) preg_replace('/\D+/', '', $horario->sala) : (int) $horario->sala;
@endphp

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                    <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card bg-dark text-white">
                <div class="card-header bg-gradient-primary">
                    <h2 class="mb-0">
                        <i class="fas fa-edit"></i> Editar Horario
                    </h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.horarios.update', $horario->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="pelicula_id" class="form-label">Película</label>
                            <select class="form-select bg-dark text-white" id="pelicula_id" name="pelicula_id" required>
                                <option value="">Selecciona una película</option>
                                @foreach($peliculas as $pelicula)
                                    <option value="{{ $pelicula->id }}" {{ (int) old('pelicula_id', $horario->pelicula_id) === (int) $pelicula->id ? 'selected' : '' }}>
                                        {{ $pelicula->titulo }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date"
                                   class="form-control bg-dark text-white"
                                   id="fecha"
                                   name="fecha"
                                   value="{{ old('fecha', optional($horario->fecha)->format('Y-m-d') ?? $horario->fecha) }}"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label for="hora" class="form-label">Hora</label>
                            <select class="form-select bg-dark text-white" id="hora" name="hora" required>
                                <option value="">Selecciona una hora</option>
                                @foreach(['15:00', '17:30', '20:00', '22:30'] as $hora)
                                    <option value="{{ $hora }}" {{ old('hora', \Carbon\Carbon::parse($horario->hora)->format('H:i')) === $hora ? 'selected' : '' }}>
                                        {{ $hora }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="sala" class="form-label">Sala</label>
                            <select class="form-select bg-dark text-white" id="sala" name="sala" required>
                                <option value="">Selecciona una sala</option>
                                @foreach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10] as $sala)
                                    <option value="{{ $sala }}" {{ (int) old('sala', $salaNumero) === (int) $sala ? 'selected' : '' }}>
                                        Sala {{ $sala }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="precio" class="form-label">Precio (€)</label>
                            <input type="number"
                                   step="0.01"
                                   min="0"
                                   class="form-control bg-dark text-white"
                                   id="precio"
                                   name="precio"
                                   value="{{ old('precio', $horario->precio ?? 8.00) }}"
                                   required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.horarios.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Volver
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card-header {
    background: linear-gradient(45deg, #4e73df 0%, #224abe 100%);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.form-control, .form-select {
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.form-control:focus, .form-select:focus {
    background-color: #2c3e50;
    border-color: #3498db;
    box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
    color: white;
}

.btn {
    padding: 0.5rem 1.5rem;
    border-radius: 0.375rem;
    transition: all 0.3s ease;
}

.btn-primary {
    background: linear-gradient(45deg, #4e73df 0%, #224abe 100%);
    border: none;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
}
</style>
@endsection

