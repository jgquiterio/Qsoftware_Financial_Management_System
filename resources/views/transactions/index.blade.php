@extends('layouts.app')

@section('title', 'Movimentações')

@section('content')

    <div class="mb-4">
        <h2 class="fw-bold">Movimentações</h2>
        <p class="text-muted">Visualize todas as suas receitas e despesas.</p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Data</th>
                            <th>Tipo</th>
                            <th>Valor</th>
			    <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->description }}</td>
                                <td>{{ $transaction->category }}</td>
                                <td>{{ \Carbon\Carbon::parse($transaction->date)->format('d/m/Y') }}</td>
                                <td>
                                    @if ($transaction->type === 'income')
                                        <span class="badge bg-success">Receita</span>
                                    @else
                                        <span class="badge bg-danger">Despesa</span>
                                    @endif
                                </td>
                                <td>
                                    R$ {{ number_format($transaction->amount, 2, ',', '.') }}
                                </td>
				<td>
    				    <a href="{{ route('transactions.show', $transaction->id) }}"
				    class="btn btn-sm btn-primary">
        				Detalhes
    				    </a>
				</td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    Nenhuma movimentação cadastrada.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection