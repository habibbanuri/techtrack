<!-- Main Content -->
<div class="px-8 pt-8 pb-20 max-h-screen overflow-x-auto h-full soft-scrollbar">

    <!-- Companies hiring section start here -->
    <h3 class="text-xl mb-5 font-bold text-gray-700">
        <span class="text-gray-100 bg-blue-500 p-1 capitalize inline-block -skew-y-3">Companies</span> you may want to
        apply
    </h3>
    <div class="grid grid-cols-2 gap-x-16 gap-y-8 pb-8 ">
        @if ($companies)
            @foreach ($companies as $company)
                <div
                    class="p-6 rounded-xl shadow-[rgba(149,157,165,0.2)_0px_8px_24px] flex justify-between items-center gap-5 ">
                    <div class="flex flex-col items-start space-y-2">
                        <h1 class="text-lg font-semibold">{{ $company->company }}</h1>
                        <h1 class="text-sm">{{ str_replace('"', '', $company->location) }}</h1>
                    </div>
                    <a href="{{ $company->company_url }}" target="_blank"
                        class="text-sm font-medium px-4 py-1.5 bg-gray-200 rounded-lg hover:bg-gray-300 transition">LinkedIn</a>
                </div>
            @endforeach
        @endif

    </div>
    {{-- <div class="my-5 pb-16 flex items-center justify-between">
        {{ $companies->links() }}
    </div> --}}
</div>
