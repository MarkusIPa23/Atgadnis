<x-app-layout>

<div class="p-6">

    <h1 class="text-2xl font-bold mb-2">Uzdevumi</h1>
    <p class="text-sm text-gray-600 mb-4">Skats, kur redzi savus uzdevumus un statistiku.</p>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
        <div class="bg-white rounded shadow p-4">
            <div class="text-sm text-gray-500">Kopa</div>
            <div class="text-2xl font-semibold">{{ $totalTasks }}</div>
        </div>
        <div class="bg-white rounded shadow p-4">
            <div class="text-sm text-gray-500">Pabeigti</div>
            <div class="text-2xl font-semibold">{{ $completedTasks }}</div>
        </div>
        <div class="bg-white rounded shadow p-4">
            <div class="text-sm text-gray-500">Atlikti</div>
            <div class="text-2xl font-semibold">{{ $pendingTasks }}</div>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('tasks.store') }}" class="mb-6 flex gap-2">
        @csrf
        <input name="title" placeholder="Ievadi uzdevumu..." class="border p-2 rounded w-full">
        <button class="bg-blue-500 text-white px-4 py-2 rounded">
            Pievienot
        </button>
    </form>

    @forelse($tasks as $task)
        <div class="bg-white p-3 mb-2 rounded shadow flex justify-between items-center">

            <span class="{{ $task->completed ? 'line-through text-gray-400' : '' }}">
                {{ $task->title }}
            </span>

            <div class="flex gap-2">
                <form method="POST" action="/tasks/{{ $task->id }}/toggle">
                    @csrf
                    @method('PATCH')
                    <button class="text-sm text-green-700">Done</button>
                </form>

                <form method="POST" action="/tasks/{{ $task->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-sm text-red-700">Delete</button>
                </form>
            </div>

        </div>
    @empty
        <div class="bg-white p-3 rounded shadow text-gray-600">
            Nav uzdevumu. Pievieno pirmo augstak.
        </div>
    @endforelse

</div>

</x-app-layout>
