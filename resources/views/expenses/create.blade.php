@extends('layouts.app')

@section('title', 'Cadastrar Despesa')

@section('content')

    <div class="mb-4">
        <h2 class="fw-bold">Cadastrar Despesa</h2>
        <p class="text-muted">Informe os dados da despesa.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="{{ route('expenses.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <input
                        type="text"
                        name="description"
                        id="description"
                        class="form-control"
                        value="{{ old('description') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Valor</label>
                    <input
                        type="number"
                        name="amount"
                        id="amount"
                        class="form-control"
                        step="0.01"
                        min="0.01"
                        value="{{ old('amount') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Data</label>
                    <input
                        type="date"
                        name="date"
                        id="date"
                        class="form-control"
                        value="{{ old('date', date('Y-m-d')) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <input
                        type="text"
                        name="category"
                        id="category"
                        class="form-control"
                        value="{{ old('category') }}"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-danger">
                    Salvar Despesa
                </button>

                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                    Cancelar
                </a>

            </form>

        </div>
    </div>

@endsection