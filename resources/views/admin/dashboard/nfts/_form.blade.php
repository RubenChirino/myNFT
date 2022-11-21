@csrf

<!-- ## Name ## -->

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

<!-- ## Price ## -->

<label class="flex flex-col my-6 gap-1.5">
    Price (ARS)
    <input
    class="border-gray-200 rounded"
    type="number"
    name="price"
    id="price"
    value="{{ old('price', $nft->price) }}">
    <span>@error('price') {{ $message }} @enderror</span>
</label>

<!-- ## Category ## -->

@php
$opt1 = (old('category', $nft->category) == 'common') ? 'selected' : '';

$opt2 = (old('category', $nft->category) == 'rare') ? 'selected' : '';

$opt3 = (old('category', $nft->category) == 'especial') ? 'selected' : '';

$opt4 = (old('category', $nft->category) == 'exceptional') ? 'selected' : '';

$opt5 = (old('category', $nft->category) == 'legendary') ? 'selected' : '';
@endphp

<label class="flex flex-col my-6 gap-1.5">
    Category

    <select class="border-gray-200 py-2 px-4 rounded" name="category" id="category">
        <option value="common"
        {{ $opt1 }}
        >Common</option>

        <option value="rare"
        {{ $opt2 }}
        >Rare</option>

        <option value="especial"
        {{ $opt3 }}
        >Especial</option>

        <option value="exceptional"
        {{ $opt4 }}
        >Exceptional</option>

        <option value="legendary"
        {{ $opt5 }}
        >Legendary</option>
    </select>

    {{-- <input
    class=""
    type="text"


    value=""> --}}
    {{-- {{ old('category', $nft->category) }} --}}
    <span>@error('category') {{ $message }} @enderror</span>
</label>

<!-- ## Image ## -->

<label for="image" class="flex flex-col gap-1.5">
    Image
    <div class="border border-gray-200 rounded py-2 px-4">
        <input class="text-xs" type="file" name="image" id="image" accept="image/png, image/gif, image/jpeg">
    </div>
    <span>@error('image') {{ $message }} @enderror</span>
</label>
