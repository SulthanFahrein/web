<button {{ $attributes->merge(['class' => 'close', 'type' => 'button', 'data-bs-dismiss' => 'modal', 'aria-label' => 'Close', 'aria-hidden' => 'true']) }}>
    <span {{ $attributes->merge(['aria-hidden' => 'true'])}}>&times;</span>
</button>