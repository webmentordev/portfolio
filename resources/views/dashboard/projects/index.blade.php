<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Projects') }}
            </h2>
            <a href="{{ route('project.create') }}" class="font-semibold py-2 px-3 bg-black text-white">+ Add project</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-[99%] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (count($projects))
                        <table class="w-full">
                            <tr>
                                <th class="text-start p-2">Order</th>
                                <th class="text-start">Image</th>
                                <th class="text-start">Name</th>
                                <th class="text-start">GitHub</th>
                                <th class="text-start">Stacks</th>
                                <th class="text-end">Created</th>
                                <th class="text-end">Completed</th>
                                <th class="text-end">Status</th>
                                <th class="text-end">Delete</th>
                                <th class="text-end p-2">Edit</th>
                            </tr>
                            @foreach ($projects as $item)
                                <tr class="text-sm">
                                    <td class="text-start p-2">{{ $item->order }}</td>
                                    <td class="text-start"><a href="{{ asset('/storage/'. $item->image) }}" target="_blank"><img src="{{ asset('/storage/'. $item->image) }}" width="30" class="rounded-full"></a></td>
                                    <td class="text-start">{{ $item->name }}</td>
                                    <td class="text-start"><a href="{{ $item->github }}" target="_blank" class="underline text-blue-600">Visit</a></td>
                                    <td class="text-start">
                                        <div class="flex items-center">
                                            @php
                                                $array = explode(",", $item->stacks);
                                            @endphp
                                            @foreach ($array as $stack)
                                                <img src="{{ $stack }}" class="mr-2" width="20">
                                            @endforeach
                                        </div>
                                    </td>
                                    <td class="text-end">{{ $item->created_at->diffForHumans() }}</td>
                                    <td class="text-end"><form action="{{ route('project.completed', $item->id) }}" method="post">
                                        @csrf
                                        @method("PATCH")
                                        <button type="submit" class="font-semibold py-1 px-2 rounded-md @if ($item->is_completed) bg-green-600 @else bg-red-600 @endif text-white">
                                            @if ($item->is_completed)
                                                Completed
                                            @else
                                                InComplete
                                            @endif
                                        </button>
                                    </form></td>
                                    <td class="text-end"><form action="{{ route('project.status', $item->id) }}" method="post">
                                        @csrf
                                        @method("PATCH")
                                        <button type="submit" class="font-semibold py-1 px-2 rounded-md @if ($item->is_active) bg-black @else bg-indigo-600 @endif text-white">
                                            @if ($item->is_active)
                                                Active
                                            @else
                                                InActive
                                            @endif
                                        </button>
                                    </form></td>
                                    <td class="text-end p-2"><form action="{{ route('project.destroy', $item->id) }}" method="post" onsubmit="return confirm('Do you really want to delete?');">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="font-semibold text-red-500">Delete</button>
                                    </form></td>
                                    <td class="text-end p-2"><a href="{{ route('project.update', $item->id) }}" class="underline text-blue-600">Edit</a></td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p class="text-center">No project exist in the database!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>