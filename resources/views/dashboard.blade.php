<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @role('doctors')
                        <a href="{{ route('doctor') }}" class="btn btn-primary">Go to Doctor</a>
                    @endrole

                    @role('patients')
                        <h1>HellO Patient</h1>
                        <a href="{{ route('patient') }}" class="btn btn-primary">Go to Patient</a>
                        {{i would want to send the value for checking}}
                        <a hreff="{{route('Ask_For_Approval')}}" class="btn btn-primary">Sending the Request</a>
                    @endrole

                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{in patients dashboad frontpage they can request for approval and they can receive data and after approval and sending the date and two wont collide}}