<x-app-layout>
    @section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Card Header with Profile Image -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg flex items-center space-x-4">
                <div class="w-24 h-24 rounded-full overflow-hidden bg-gray-200">
                    <img src="{{ asset('storage/profile-pic.jpg') }}" alt="Profile Picture" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700">Welcome, {{ Auth::user()->name }}!</h3>
                    <p class="text-sm text-gray-500">Update your profile information below.</p>
                </div>
            </div>

            <!-- Update Profile Form -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <!-- Update Password Form -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <!-- Delete Account Form -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>
