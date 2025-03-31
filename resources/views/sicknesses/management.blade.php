<form action="{{ route('managementStore') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
    @csrf
    
    <!-- Seleção de Doença -->
    <div class="mb-4">
        <label for="sickness" class="block text-sm font-medium text-gray-700">Selecione a Doença</label>
        <select name="sickness" id="sickness" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @foreach($sicknesses as $sickness)
                <option value="{{ $sickness->id }}">{{ $sickness->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Seleção de Tratamentos (Multi-Select) -->
    <div class="mb-4">
        <label for="treatments" class="block text-sm font-medium text-gray-700">Selecione os Tratamentos</label>
        <select name="treatments[]" id="treatments" multiple class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @foreach($treatments as $treatment)
                <option value="{{ $treatment->id }}">{{ $treatment->name }}</option>
            @endforeach
        </select>
        <p class="text-xs text-gray-500 mt-1">Segure Ctrl (ou Cmd no Mac) para selecionar múltiplos tratamentos.</p>
    </div>
    
    <!-- Botão de Envio -->
    <div class="text-right">
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm hover:bg-indigo-700">Salvar</button>
    </div>
</form>
