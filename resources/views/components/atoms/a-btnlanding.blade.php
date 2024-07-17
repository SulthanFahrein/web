<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'navbar-toggler',
    'data-bs-toggle' => 'collaps',
    'data-bs-target' => '#navbarSupportedContent',
    'aria-controls' => 'navbarSupportedContent',
    'aria-label' => 'Toggle navigation',
    'aria-expanded' => 'false'
]) }}>
    <span {{ $attributes->merge(['class' => 'navbar-toggler-icon']) }}></span>
</button>