@extends('layouts.app')

@section('title', 'Dashboard Financeiro')

@section('content')

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="mb-4">
        <h2 class="fw-bold">Dashboard Financeiro</h2>
        <p class="text-muted">Visão geral das suas movimentações financeiras.</p>

        <a href="{{ route('incomes.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Nova Receita
        </a>
    </div>

    <div class="row g-3">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total de Receitas</h6>
                    <h3 class="text-success fw-bold">R$ {{ number_format($totalIncome, 2, ',', '.')}}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Total de Despesas</h6>
                    <h3 class="text-danger fw-bold">R$ {{ number_format($totalExpense, 2, ',', '.')}}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h6 class="text-muted">Saldo Atual</h6>
                    <h3 class="text-primary fw-bold">R$ {{ number_format($balance, 2, ',', '.')}}</h3>
                </div>
            </div>
        </div>

    </div>

@endsection