<x-layout>
    <div class="bg-white p-8 rounded-lg shadow-lg w-full">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Editar Enfermidade</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 mb-4 rounded-lg">
                <strong>Oops! Existem erros no formulário.</strong>
            </div>
        @endif

        <form action="{{ route('sickness.update', $sickness->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- ID (oculto) -->
            <input type="hidden" id="id" name="id" value="{{ $sickness->id }}">

            <!-- Nome -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" id="name" name="name" value="{{ old('name', $sickness->name) }}"
                    class="mt-1 block w-1/2 p-2 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Descrição -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Descrição</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 block w-full p-2 border @error('description') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('description', $sickness->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Status -->
            <div class="flex items-center">
                <input type="checkbox" id="status" name="status" value="1" {{ old('status', $sickness->status) ? 'checked' : '' }}
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="status" class="ml-2 block text-sm font-medium text-gray-700">Ativo</label>
                <input type="hidden" name="status" value="0"> <!-- Valor padrão caso não seja marcado -->
            </div>

            <!-- Botão de Enviar -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition mt-2">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
</x-layout>