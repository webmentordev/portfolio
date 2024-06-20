<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Useful Techs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('tech.create') }}" method="post" class="flex items-center mb-3">
                @csrf
                <div class="w-full">
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required placeholder="Tech Name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <x-primary-button class="ml-3 py-3">
                    {{ __('Create') }}
                </x-primary-button>
            </form>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (count($techs))
                        <table class="w-full">
                            <tr>
                                <th class="text-start p-2">Name</th>
                                <th class="text-start">Created</th>
                                <th class="text-end p-2">Delete</th>
                            </tr>
                            @foreach ($techs as $item)
                                <tr class="text-sm">
                                    <td class="text-start p-2">{{ $item->name }}</td>
                                    <td class="text-start">{{ $item->created_at }}</td>
                                    <td class="text-end p-2"><form action="{{ route('qualification.destroy', $item->id) }}" method="post" onsubmit="return confirm('Do you really want to delete?');">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="font-semibold text-red-500">Delete</button>
                                    </form></td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p class="text-center">No techs exist in the database!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>