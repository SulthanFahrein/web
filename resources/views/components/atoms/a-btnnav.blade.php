<button {{ $attributes->merge(['style' => 'background-color: white; color: black; border-radius: 20px; border: none']) }}>
<i {{ $attributes->merge(['class'=> 'nav-icon fa fa-user', 'style'=>'padding-right: 7px', 'aria-hidden'=>'true']) }}></i>
  {{ $slot }}
</button>

