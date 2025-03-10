@props(['label', 'src' => ''])

<div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    @if($src)
    <img src="{{ $src }}" class="w-16 md:w-32 w-full h-auto rounded-l" alt="IMG">
    @else
    <p class="text-sm text-gray-500">Chưa có ảnh</p>
    @endif

    <input type="file" name="{{ $attributes['name'] }}" class="mt-2 p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" />
</div>