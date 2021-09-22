<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center bg-white border-b border-gray-200">
                    <section>
                        <h1 class="text-4xl text-blue-800">Short your link</h1>
                        @if (session('success_message'))
                            {!! session('success_message') !!}
                        @endif
                        <form method="POST" action="{{ route('short.url') }}">
                            @csrf
                          <input class="border border-gray-300 rounded-lg" 
                                       type="text"
                                       name="original_url" />
                            @error('original_url')
                                <span class="text-red-400 m-2 p-2">{{ $message }}</span>
                            @enderror
                          <button class="m-2 px-6 py-2 bg-green-500 hover:bg-green-700 rounded-lg" type="submit">Short</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
