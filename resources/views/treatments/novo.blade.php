<x-layout>
    <div class="bg-white p-8 rounded-lg shadow-lg w-full">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Añadir Tratamiento</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 mb-4 rounded-lg">
                <strong>Oops! Existem erros no formulário.</strong>
            </div>
        @endif

        <form action="{{ route('treatment.store') }}" method="POST" class="space-y-4">
            @csrf

            <div id="treatments-wrapper" class="space-y-6">

                {{-- >>>>>>>>>> ADICIONAR AQUI (grupo repetível de campos) <<<<<<<<<< --}}
                <div class="treatment-group border border-gray-200 rounded-lg p-4 relative" data-index="0">

                    <!-- ID (geralmente oculto para novos cadastros) -->
                    <input type="hidden" id="id_0" name="treatments[0][id]" value="{{ old('treatments.0.id') }}">

                    <!-- Nome -->
                    <div>
                        <label for="name_0" class="block text-sm font-medium text-gray-700">Nome</label>
                        <input type="text" id="name_0" name="treatments[0][name]" value="{{ old('treatments.0.name') }}"
                            class="mt-1 block w-1/2 p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        @error('treatments.0.name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div class="flex items-center mt-3">
                        <input type="checkbox" id="status_0" name="treatments[0][status]" value="1" {{ old('treatments.0.status') ? 'checked' : '' }}
                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="status_0" class="ml-2 block text-sm font-medium text-gray-700">Ativo</label>

                        @error('treatments.0.status')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Descrição -->
                    <div class="mt-3">
                        <label for="description_0" class="block text-sm font-medium text-gray-700">Descrição</label>
                        <textarea id="description_0" name="treatments[0][description]" rows="4"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('treatments.0.description') }}</textarea>
                        @error('treatments.0.description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Botão remover (escondido no primeiro grupo) -->
                    <button type="button" class="remove-group hidden absolute top-2 right-2 text-red-500 hover:text-red-700 text-sm font-semibold">
                        Remover
                    </button>
                </div>
                {{-- >>>>>>>>>> FIM <<<<<<<<<< --}}

            </div>

            <!-- Botão de Adicionar -->
            <div class="mt-2">
                <button type="button" id="add-treatment"
                    class="text-blue-600 font-medium hover:text-blue-800 transition">
                    + Adicionar outro tratamento
                </button>
            </div>

            <!-- Botão de Enviar -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition mt-2">
                    Salvar
                </button>
            </div>
        </form>
    </div>

    {{-- >>>>>>>>>> ADICIONAR AQUI (script de clonagem) <<<<<<<<<< --}}
    <script>
        let treatmentIndex = 0;

        document.getElementById('add-treatment').addEventListener('click', function () {
            treatmentIndex++;

            const wrapper = document.getElementById('treatments-wrapper');
            const firstGroup = wrapper.querySelector('.treatment-group');
            const newGroup = firstGroup.cloneNode(true);

            newGroup.setAttribute('data-index', treatmentIndex);

            // Atualiza name, id e for de cada campo para o novo índice, e limpa os valores
            newGroup.querySelectorAll('input, textarea, label').forEach(el => {
                if (el.hasAttribute('name')) {
                    const newName = el.getAttribute('name').replace(/\[\d+\]/, `[${treatmentIndex}]`);
                    el.setAttribute('name', newName);
                }
                if (el.hasAttribute('id')) {
                    const newId = el.getAttribute('id').replace(/_\d+$/, `_${treatmentIndex}`);
                    el.setAttribute('id', newId);
                }
                if (el.tagName === 'LABEL' && el.hasAttribute('for')) {
                    const newFor = el.getAttribute('for').replace(/_\d+$/, `_${treatmentIndex}`);
                    el.setAttribute('for', newFor);
                }
                if (el.tagName === 'INPUT' && el.type === 'checkbox') {
                    el.checked = false;
                } else if (el.tagName !== 'LABEL') {
                    el.value = '';
                }
            });

            // Mostra e ativa o botão de remover deste grupo
            const removeBtn = newGroup.querySelector('.remove-group');
            removeBtn.classList.remove('hidden');
            removeBtn.addEventListener('click', () => newGroup.remove());

            wrapper.appendChild(newGroup);
        });
    </script>
    {{-- >>>>>>>>>> FIM <<<<<<<<<< --}}
</x-layout>