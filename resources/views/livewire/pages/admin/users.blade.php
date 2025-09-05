<?php

use App\Enums\UserRole;
use App\Models\User;
use Livewire\Volt\Component;

new class extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::where('id', '!=', Auth::id())->get();
    }
}; ?>

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-12 text-gray-900 dark:text-gray-100">
                    <table class="w-full text-center text-xl">
                        <thead>
                            <th colspan="6" class="pt-2 pb-4 text-2xl">Registered users</th>
                        <thead>
                        <tbody>
                            <tr class="dark:bg-gray-600">
                                <th class="py-2">Name</th>
                                <th class="py-2">Last name</th>
                                <th class="py-2">Role</th>
                                <th class="py-2">Email</th>
                                <th class="py-2">Phone number</th>
                                <th class="py-2">Actions</th>
                            </tr>
                            @foreach ($users as $user)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="py-4 border-gray-200">{{ $user->name }}</td>
                                    <td class="py-4 border-gray-200">{{ $user->last_name }}</td>
                                    <td class="py-4 border-gray-200">{{ App\Enums\UserRole::display($user->role) }}</td>
                                    <td class="py-4 border-gray-200">{{ $user->email }}</td>
                                    @if ($user->phone_num === null)
                                        <td class="py-2">Not registered yet</td>
                                    @else
                                        <td class="py-2">{{ $user->phone_num }}</td>                                    
                                    @endif
                                    <td class="dark:text-blue-500">
                                        <button @click="$dispatch('open-modal', 'details-modal')" class="px-2">Details</button>
                                        <button @click="$dispatch('open-modal', 'edit-modal')" x-data="" class="px-2">Edit</button>
                                        <button @click="$dispatch('open-modal', 'delete-modal')" x-data="" class="px-2">Delete</button>
                                    </td>
                                </tr>                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-modal name="details-modal">
        <p> WIP </p>
    </x-modal>

    <x-modal name="edit-modal">
        <p> WIP </p>
    </x-modal>

    <x-modal name="delete-modal">
        <p> WIP </p>
    </x-modal>
</div>


