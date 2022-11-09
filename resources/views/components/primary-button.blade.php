<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full items-center px-9 py-4 bg-blue-600 border border-indigo-700 rounded-md shadow-4x1 font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 bg-indigo-600 focus:border-gray-900 focus:ring focus:ring-indigo-300 transition ease-in-out duration-200']) }}>
    {{ $slot }}
</button>
