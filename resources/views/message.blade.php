<section id="about" class="pt-36 pb-16 bg-slate-900">
    <div class="max-w-7xl mx-auto p-6">
        <h4 class="font-bold uppercase text-cyan-700 text-lg mb-3">
            Message
        </h4>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-h-[600px] overflow-y-auto pr-2">
        @foreach($messages as $message)
            <div class="bg-white rounded-2xl shadow-md p-4">
                <div class="mb-1">
                    <div class="font-semibold text-slate-800">{{ $message->name }}</div>
                    <div class="text-sm text-slate-500">{{ $message->email }}</div>
                </div>
                <p class="text-slate-700">{{ $message->message }}</p>
            </div>
        @endforeach
        </div>
    </div>

</section>