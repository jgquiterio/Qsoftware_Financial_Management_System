@extends('layouts.app')

@section('title', 'Minhas Receitas')

@section('content')
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Minhas Receitas</h2>
            <p class="text-muted">Consulte suas receitas cadastradas.</p>
        </div>

        <a href="{{ route('incomes.create') }}" class="btn btn-success">
            Nova Receita
        </a>
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
                            <th>Valor</th>
			    <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($incomes as $income)
                            <tr>
                                <td>{{ $income->description }}</td>
                                <td>{{ $income->category }}</td>
                                <td>{{ date('d/m/Y', strtotime($income->date)) }}</td>
                                <td class="text-success fw-bold">
                                    R$ {{ number_format($income->amount, 2, ',', '.') }}
                                </td>
				<td>
				    <a href="{{ route('incomes.edit', $income->id) }}" 
					class="btn btn-sm btn-primary">
					Editar
				    </a>

				    <form action="{{ route('incomes.destroy', $income->id) }}"
					method="POST"
					class="d-inline"
					onsubmit="return confirm('Deseja realmente excluir esta receita?')"
				    >
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
                                    Nenhuma receita cadastrada.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection