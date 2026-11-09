@extends('layouts.app')

@section('title', 'Minhas Despesas')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Minhas Despesas</h2>
            <p class="text-muted">Consulte suas despesas cadastradas.</p>
        </div>

        <a href="{{ route('expenses.create') }}" class="btn btn-danger">
            Nova Despesa
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Data</th>
                            <th>Valor</th>
			    <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($expenses as $expense)
                            <tr>
                                <td>{{ $expense->description }}</td>
                                <td>{{ $expense->category }}</td>
                                <td>{{ date('d/m/Y', strtotime($expense->date)) }}</td>
                                <td class="text-danger fw-bold">
                                    R$ {{ number_format($expense->amount, 2, ',', '.') }}
                                </td>
				<td>
				    <a href="{{ route('expenses.edit', $expense->id) }}"
				        class="btn btn-sm btn-primary">
				        Editar
    				    </a>
				    <form action="{{ route('expenses.destroy', $expense->id) }}"
      					method="POST"
           				class="d-inline"
      					onsubmit="return confirm('Deseja realmente excluir esta despesa?')">
    					@csrf
    					@method('DELETE')

    					<button type="submit" class="btn btn-sm btn-danger">
        				    Excluir
    					</button>
				    </form>

				</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    Nenhuma despesa cadastrada.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection