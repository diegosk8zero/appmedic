<x-layout>
    <div class="bg-white p-8 rounded-lg shadow-lg w-full">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Editar Médico</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-3 mb-4 rounded-lg">
                <strong>Oops! Existem erros no formulário.</strong>
            </div>
        @endif

        <form action="{{ route('medic.update', $medic->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- ID -->
            <input type="hidden" id="id" name="id" value="{{ $medic->id }}">

            <!-- Nome -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" id="name" name="name" value="{{ old('name', $medic->name) }}"
                    class="mt-1 block w-1/2 p-2 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $medic->email) }}"
                    class="mt-1 block w-1/2 p-2 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Telefone -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', $medic->phone) }}"
                    class="mt-1 block w-1/2 p-2 border @error('phone') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('phone')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Telefone Secundário -->
            <div>
                <label for="phone_2" class="block text-sm font-medium text-gray-700">Telefone Secundário</label>
                <input type="text" id="phone_2" name="phone_2" value="{{ old('phone_2', $medic->phone_2) }}"
                    class="mt-1 block w-1/2 p-2 border @error('phone_2') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('phone_2')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Certificação -->
            <div>
                <label for="certification" class="block text-sm font-medium text-gray-700">Certificação</label>
                <input type="text" id="certification" name="certification" value="{{ old('certification', $medic->certification) }}"
                    class="mt-1 block w-1/2 p-2 border @error('certification') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('certification')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Data de Nascimento -->
            <div>
                <label for="birth" class="block text-sm font-medium text-gray-700">Data de Nascimento</label>
                <input type="date" id="birth" name="birth" value="{{ old('birth', $medic->birth) }}"
                    class="mt-1 block w-1/2 p-2 border @error('birth') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">
                @error('birth')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Clínica (Select) -->
            <div>
                <label for="clinic_id" class="block text-sm font-medium text-gray-700">Clínica</label>
                <select id="clinic_id" name="clinic_id" 
                    class="mt-1 block w-1/2 p-2 border @error('clinic_id') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Selecione uma clínica</option>
                    @foreach($clinics as $clinic)
                        <option value="{{ $clinic->id }}" {{ (old('clinic_id', $medic->clinic_id) == $clinic->id) ? 'selected' : '' }}>
                            {{ $clinic->name }}
                        </option>
                    @endforeach
                </select>
                @error('clinic_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Descrição -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Descrição</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 block w-full p-2 border @error('description') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-blue-500 focus:border-blue-500">{{ old('description', $medic->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botões -->
            <div class="flex justify-end space-x-2">
                <a href="{{ route('medic.index') }}" 
                   class="bg-gray-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-gray-600 transition mt-2">
                    Cancelar
                </a>
                <button type="submit"
                    class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition mt-2">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
</x-layout>