@props([
    'label',
    'name',
    'rows'
])
{{---- Componente para textarea --}}
<div class="flex w-full max-w-md flex-col gap-1 text-on-surface dark:text-on-surface-dark">
    <label for="{{ $label }}" class="w-fit pl-0.5 text-sm">{{ $label }}</label>
    <textarea
        {{ $attributes }}
        wire:model="{{ $name }}"
        id="{{ $name }}"
        class="w-full rounded-radius border border-outline bg-surface-alt px-2.5 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark"
        placeholder="We'd love to hear from you..."
        rows="{{ $rows }}">
    </textarea>
</div>
