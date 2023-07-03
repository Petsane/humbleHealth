<x-app-layout>

    <div style="display: grid; grid-template-columns: 15% 75%;">

        @include('admin.sideBar')

        <div class="m-5">
            <div class="bg-white overflow-hidden shadow-xl p-5 mb-5">
                {{ $slot }}
            </div>
        </div>

    </div>

</x-app-layout>