<x-layout>

<div class="container mx-auto bg-white p-6 rounded-lg shadow-lg">
        <!-- Botão de Adicionar Clínica -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Lista de Clínicas</h2>
            <a href="{{ route('medic.create') }}" 
                class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                + Adicionar Medico
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('success_update'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-4">
                {{ session('success_update') }}
            </div>
        @endif

        <table id="medicsTable" class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 text-left">Nome</th>
                    <th class="p-2 text-left">Email</th>
                    <th class="p-2 text-left">Telefone</th>
                    <th class="p-2 text-left">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medics as $medic)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="p-2">
                            <a href="{{ route('medic.show', $medic->id) }}" class="text-blue-500 hover:underline">
                                {{ $medic->name }}
                            </a>
                        </td>
                        <td class="p-2">{{ $medic->email }}</td>
                        <td class="p-2">{{ $medic->phone }}</td>
                        <td class="p-2 flex space-x-2">
                            <!-- Botão Editar -->
                            <a href="{{ route('medic.edit', $medic->id) }}" 
                                class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                Editar
                            </a>

                            <!-- Botão Deletar -->
                            <form action="{{ route('medic.destroy', $medic->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                    Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Script de Inicialização do DataTables -->
    <script>
        $(document).ready( function () {
            $('#medicsTable').DataTable({
                language: {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "Nenhuma clínica encontrada",
                    "info": "Mostrando _PAGE_ de _PAGES_",
                    "infoEmpty": "Nenhum registro disponível",
                    "infoFiltered": "(filtrado de _MAX_ registros totais)"
                }
            });
        });
    </script>

</x-layout>