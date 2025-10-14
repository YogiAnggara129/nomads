<x-layouts.admin>
    <div class="container-fluid">

        <!-- Header -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
            <flux:link href="{{ route('travel-package.index') }}">
                <flux:button variant="outline">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali
                </flux:button>
            </flux:link>
        </div>

        <!-- Form Card -->
        <div class="card p-4 w-100">
            <form method="POST" action="{{ route('travel-package.store') }}">
                @csrf

                <div class="grid grid-cols-2 gap-4">
                    <flux:input label="Title" name="title" value="{{ old('title') }}" required />
                    <flux:input label="Slug" name="slug" value="{{ old('slug') }}" required />
                    <flux:input label="Location" name="location" value="{{ old('location') }}" required />
                    <flux:input label="Featured Event" name="featured_event" value="{{ old('featured_event') }}"
                        required />
                    <flux:input label="Language" name="language" value="{{ old('language') }}" required />
                    <flux:input label="Foods" name="foods" value="{{ old('foods') }}" required />
                    <flux:input type="date" label="Departure Date" name="departure_date"
                        value="{{ old('departure_date') }}" required />
                    <flux:input label="Duration" name="duration" value="{{ old('duration') }}" required />
                    <flux:input label="Type" name="type" value="{{ old('type') }}" required />
                    <flux:input type="number" label="Price" name="price" value="{{ old('price') }}" required />
                </div>

                <div class="mt-4">
                    <flux:textarea label="About" name="about" rows="4">{{ old('about') }}</flux:textarea>
                </div>

                <div class="mt-6 flex justify-end">
                    <flux:button type="submit" variant="primary">
                        <i class="fas fa-save mr-2"></i> Simpan
                    </flux:button>
                </div>
            </form>
        </div>

    </div>
</x-layouts.admin>
