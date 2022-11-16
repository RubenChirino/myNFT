@csrf

<label class="flex flex-col gap-1.5">
    Name
    <input
    class="border-gray-200 rounded"
    type="text"
    name="name"
    id="name"
    value="{{ old('name', $nft->name) }}">
    <span>@error('name') {{ $message }} @enderror</span>
</label>

<label class="flex flex-col my-6 gap-1.5">
    Price (ARS)
    <input
    class="border-gray-200 rounded"
    type="text"
    name="price"
    id="price"
    value="{{ old('price', $nft->price) }}">
    <span>@error('price') {{ $message }} @enderror</span>
</label>

<label class="flex flex-col gap-1.5">
    Image
    <div class="border border-gray-200 rounded py-2 px-4">
        <input class="text-xs" type="file" name="image" id="image" value="{{ old('image', $nft->image) }}">
    </div>
    <span>@error('image') {{ $message }} @enderror</span>
</label>

<input class="mt-7 rounded text-white bg-blue-600 p-2" type="submit"
value="{{ ($nft->id) ? ('Edit') : ('Add') }}">
