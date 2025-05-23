<section id="message" class="pt-36 pb-16 bg-slate-900">
    <div class="max-w-7xl mx-auto p-6">
        @if(count($messages) > 0)
        <h4 class="font-bold uppercase text-cyan-700 text-lg mb-3">
            Message
        </h4>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-h-[600px] overflow-y-auto pr-2">
            @foreach($messages as $message)
            <div onclick="document.getElementById('message-modal-{{ $message->id }}').classList.remove('hidden')" class="bg-white rounded-2xl shadow-md p-4 cursor-pointer">
                <div class="mb-1">
                    <div class="font-semibold text-slate-800">{{ $message->name }}</div>
                    <div class="text-sm text-slate-500">{{ $message->email }}</div>
                </div>
                <p class="text-slate-700">{{ $message->message }}</p>
            </div>

            <!-- edit/delete modal -->
            <div id="message-modal-{{ $message->id }}" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6 relative">
                    <button onclick="document.getElementById('message-modal-{{ $message->id }}').classList.add('hidden')" class="absolute top-3 right-3 text-slate-500 hover:text-slate-800 text-xl font-bold">&times;</button>

                    <h2 class="text-2xl font-semibold mb-4 text-slate-800">Update Message</h2>
                    <form class="space-y-4" action="/message/{{ $message->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label class="block text-sm font-medium text-slate-700">Name</label>
                            <input type="text" name="name" placeholder="Your name" value="{{ $message->name }}" class="mt-1 block w-full rounded-xl border border-slate-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-600" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Email</label>
                            <input type="email" name="email" value="{{ $message->email }}" placeholder="you@example.com" class="mt-1 block w-full rounded-xl border border-slate-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-600" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-slate-700">Message</label>
                            <textarea name="message" rows="4" placeholder="Your message..." class="mt-1 block w-full rounded-xl border border-slate-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-600">{{ old('message', $message->message) }}</textarea>
                        </div>

                        <button type="submit" class="w-full bg-cyan-700 hover:bg-cyan-800 text-white font-semibold py-2 px-4 rounded-xl transition duration-200">
                            Update
                        </button>
                    </form>
                    <form action="/message/{{ $message->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="mt-5 w-full bg-red-700 hover:bg-red-800 text-white font-semibold py-2 px-4 rounded-xl transition duration-200">Delete</button>
                    </form>
                </div>
            </div>

            @endforeach
        </div>

        <!-- create modal -->
        <div class="flex justify-center mt-10">
            <button onclick="document.getElementById('send-message-modal').classList.remove('hidden')" class="bg-cyan-700 hover:bg-cyan-800 text-white font-semibold py-2 px-6 rounded-xl transition duration-200">
                Send Message
            </button>
        </div>

        <div id="send-message-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-2xl shadow-xl w-full max-w-md p-6 relative">
                <button onclick="document.getElementById('send-message-modal').classList.add('hidden')" class="absolute top-3 right-3 text-slate-500 hover:text-slate-800 text-xl font-bold">&times;</button>

                <h2 class="text-2xl font-semibold mb-4 text-slate-800">Send a Message</h2>
                <form class="space-y-4" action="/message" method="POST">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-slate-700">Name</label>
                        <input type="text" name="name" placeholder="Your name" class="mt-1 block w-full rounded-xl border border-slate-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-600" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Email</label>
                        <input type="email" name="email" placeholder="you@example.com" class="mt-1 block w-full rounded-xl border border-slate-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-600" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700">Message</label>
                        <textarea name="message" rows="4" placeholder="Your message..." class="mt-1 block w-full rounded-xl border border-slate-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-600"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-cyan-700 hover:bg-cyan-800 text-white font-semibold py-2 px-4 rounded-xl transition duration-200">
                        Send
                    </button>
                </form>
            </div>
        </div>


    </div>

</section>