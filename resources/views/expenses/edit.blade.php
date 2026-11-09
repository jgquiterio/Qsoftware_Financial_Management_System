@extends('layouts.app')

@section('title', 'Editar Despesa')

@section('content')

    <div class="mb-4">
        <h2 class="fw-bold">Editar Despesa</h2>
        <p class="text-muted">Atualize os dados da despesa.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <input
                        type="text"
                        name="description"
                        id="description"
                        class="form-control"
                        value="{{ old('description', $expense->description) }}"
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
                        value="{{ old('amount', $expense->amount) }}"
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
                        value="{{ old('date', $expense->date) }}"
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
                        value="{{ old('category', $expense->category) }}"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary">
                    Atualizar Despesa
                </button>

                <a href="{{ route('expenses.index') }}" class="btn btn-secondary">
                    Cancelar
                </a>

            </form>

        </div>
    </div>

@endsection