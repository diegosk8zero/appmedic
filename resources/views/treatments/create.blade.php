<x-layout>
    <div class="bg-white p-8 rounded-lg shadow-lg w-full">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Añadir Tratamiento</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 mb-4 rounded-lg">
                <strong>Oops! Existem erros no formulário.</strong>
            </div>
        @endif

        <div class="flex justify-between items-center mb-4">
         
            <button onClick="adicionaCampos()" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600"> Adicionar mais tratamentos </button>           
           
        </div>

        <form id="form-treatment" class="form-treatment" name="treatment[]" action="{{ route('treatment.store') }}" method="POST" class="space-y-4">
            @csrf

            <!-- ID (geralmente oculto para novos cadastros) -->
            <input type="hidden" id="id" name="id" value="{{ old('id') }}">

            <!-- Nome -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" id="name" name="treatment[0][name]" value="{{ old('name') }}"
                    class="mt-1 block w-1/2 p-2 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Status -->
            <div class="flex items-center mt-5">
                <input type="checkbox" id="status" name="treatment[0][status]" value="1" {{ old('status') ? 'checked' : '' }}
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="status" class="ml-2 block text-sm font-medium text-gray-700">Ativo</label>
                
                @error('status')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Descrição -->
            <div id="description" class="mt-5">
                <label for="description" class="block text-sm font-medium text-gray-700">Descrição</label>
                <textarea id="description" name="treatment[0][description]" rows="4"
                    class="mt-1 block w-full p-2 border @error('description') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div id="novoCampo">
            </div>

            

            <!-- Botão de Enviar -->
            <div class="flex justify-end mt-5">
                <button type="submit"
                    class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition mt-2">
                    Salvar
                </button>
            </div>
        </form>
    </div>

    
<script>

var count = 0;
function adicionaCampos(){

    const div = document.getElementById("novoCampo");
    count++;
    let html = `
            
            <div>
                <label for="name" class="mt-5 block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" id="name" name="treatment[${count}][name]" value="{{ old('name') }}"
                    class="mt-1 block w-1/2 p-2 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            
            <!-- Status -->
            <div class="flex items-center mt-5">
                <input type="checkbox" id="status" name="treatment[${count}][status]" value="1" {{ old('status') ? 'checked' : '' }}
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="status" class="ml-2 block text-sm font-medium text-gray-700">Ativo</label>
                
                @error('status')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Descrição -->
            <div id="description" class="mt-5">
                <label for="description" class="block text-sm font-medium text-gray-700">Descrição</label>
                <textarea id="description" name="treatment[${count}][description]" rows="4"
                    class="mt-1 block w-full p-2 border @error('description') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
             
            `;
    console.log(count);
    div.insertAdjacentHTML("afterend", html);
}

</script>
</x-layout>
