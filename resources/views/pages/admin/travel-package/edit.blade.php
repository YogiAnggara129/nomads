<x-layouts.admin>
    <div class="container-fluid">

        <!-- Header -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel</h1>
            <flux:link href="{{ route('travel-package.index') }}">
                <flux:button variant="outline">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali
                </flux:button>
            </flux:link>
        </div>

        <!-- Form Card -->
        <div class="card p-4 w-100">
            <form method="POST" action="{{ route('travel-package.update', $item->id) }}">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4">
                    <flux:input label="Title" name="title" value="{{ old('title', $item->title) }}" required />
                    <flux:input label="Slug" name="slug" value="{{ old('slug', $item->slug) }}" required />
                    <flux:input label="Location" name="location" value="{{ old('location', $item->location) }}"
                        required />
                    <flux:input label="Featured Event" name="featured_event"
                        value="{{ old('featured_event', $item->featured_event) }}" required />
                    <flux:input label="Language" name="language" value="{{ old('language', $item->language) }}"
                        required />
                    <flux:input label="Foods" name="foods" value="{{ old('foods', $item->foods) }}" required />
                    <flux:input type="date" label="Departure Date" name="departure_date"
                        value="{{ old('departure_date', $item->departure_date) }}" required />
                    <flux:input label="Duration" name="duration" value="{{ old('duration', $item->duration) }}"
                        required />
                    <flux:input label="Type" name="type" value="{{ old('type', $item->type) }}" required />
                    <flux:input type="number" label="Price" name="price" value="{{ old('price', $item->price) }}"
                        required />
                </div>

                <div class="mt-4">
                    <flux:textarea label="About" name="about" rows="4">{{ old('about', $item->about) }}
                    </flux:textarea>
                </div>

                <div class="mt-6 flex justify-end">
                    <flux:button type="submit" variant="primary">
                        <i class="fas fa-save mr-2"></i> Update
                    </flux:button>
                </div>
            </form>
        </div>

    </div>
</x-layouts.admin>
