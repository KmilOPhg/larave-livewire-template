@props([
    'label',
    'name'
])

{{-- Componente para input --}}
<div class="flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
    <label for="{{ $name }}" class="w-fit pl-0.5 text-sm">{{ $label }}</label>
    <input
        {{ $attributes }}
        wire:model="{{ $name }}"
        id="{{ $name }}"
        type="text"
        class="w-full rounded-radius border border-outline bg-surface-alt px-2 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark"
        name="{{ $name }}"
    />
</div>
