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

<label class="flex flex-col my-6 gap-1.5">
    Category
    <input
    class="border-gray-200 rounded"
    type="text"
    name="category"
    id="category"
    value="{{ old('category', $nft->category) }}">
    <span>@error('category') {{ $message }} @enderror</span>
</label>


<label for="image" class="flex flex-col gap-1.5">
    Image
    <div class="border border-gray-200 rounded py-2 px-4">
        <input class="text-xs" type="file" name="image" id="image" accept="image/*"> 
    </div>
    <span>@error('image') {{ $message }} @enderror</span>
</label>
