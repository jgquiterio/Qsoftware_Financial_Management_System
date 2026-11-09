@extends('layouts.app')

@section('title', 'Detalhes da Movimentação')

@section('content')

    <div class="mb-4">
        <h2 class="fw-bold">Detalhes da Movimentação</h2>
        <p class="text-muted">Visualize as informações completas da movimentação.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <div class="mb-3">
                <strong>Descrição:</strong>
                <p>{{ $transaction->description }}</p>
            </div>

            <div class="mb-3">
                <strong>Categoria:</strong>
                <p>{{ $transaction->category }}</p>
            </div>

            <div class="mb-3">
                <strong>Data:</strong>
                <p>{{ \Carbon\Carbon::parse($transaction->date)->format('d/m/Y') }}</p>
            </div>

            <div class="mb-3">
                <strong>Tipo:</strong>
                <p>
                    @if ($transaction->type === 'income')
                        <span class="badge bg-success">Receita</span>
                    @else
                        <span class="badge bg-danger">Despesa</span>
                    @endif
                </p>
            </div>

            <div class="mb-3">
                <strong>Valor:</strong>
                <p>R$ {{ number_format($transaction->amount, 2, ',', '.') }}</p>
            </div>

            <a href="{{ route('transactions.index') }}" class="btn btn-secondary">
                Voltar
            </a>

        </div>
    </div>

@endsection