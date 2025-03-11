<div class="p-2 bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300" style="z-index: 1;">
    <div class="relative">
        <img src="{{ $imageUrl }}" alt="House Listing" class="w-full h-48 object-cover rounded-lg">
        <div class="absolute bottom-0 left-0 w-full bg-red-500 bg-opacity-80 text-white p-2 rounded-b-lg">
            <p class="text-lg font-bold">{{ $price }}</p>
        </div>
    </div>
    <p class="text-sm mt-3 text-gray-700"><i class="fas fa-map-marker-alt ml-1"></i> {{ $location }}</p>
</div>