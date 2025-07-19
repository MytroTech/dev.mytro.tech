<x-filament-panels::page>
    <form wire:submit.prevent="save" class="space-y-6 max-w-2xl">

        <div>
            <label class="block text-sm font-medium">Site Name</label>
            <x-filament::input type="text" wire:model.defer="site_name" required class="mt-1 w-full" />
        </div>

        <div>
            <label class="block text-sm font-medium">Feedback Email</label>
            <x-filament::input type="email" wire:model.defer="support_email" required class="mt-1 w-full" />
            <p class="text-xs text-gray-500 mt-1">This Email address will be used as a recipient in the feedback form.</p>
        </div>

        <div>
            <label class="block text-sm font-medium">Default Language</label>
{{--            <x-filament::select wire:model.defer="default_language" class="mt-1 w-full">--}}
{{--                <option value="en">English</option>--}}
{{--                <option value="ru">Русский</option>--}}
{{--                <option value="uk">Українська</option>--}}
{{--            </x-filament::select>--}}
        </div>

        <div class="space-y-2">
            @if($presentation_file)
                <div>
                    📎 <a href="{{ Storage::disk('public')->url($presentation_file) }}" target="_blank" class="text-blue-600 underline">
                        View current file
                    </a>
                </div>
            @endif

            <div>
                <label class="block text-sm font-medium">Presentation</label>
                <input type="file" wire:model="presentation_upload" class="mt-1" accept=".pdf,.doc,.docx" />
            </div>
        </div>

        <x-filament::button type="submit" color="primary">
            Save changes
        </x-filament::button>
    </form>
</x-filament-panels::page>
