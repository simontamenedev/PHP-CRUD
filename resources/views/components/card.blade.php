@props(['highlight' => false])

<div 
    class="card-component"
    style="{{ $highlight ? 'border:2px solid #1e3c72; background:#eef4ff;' : '' }}"
>
    {{ $slot }}

    <a 
        {{ $attributes }}
        style="
            display:inline-block;
            margin-top:12px;
            background:#1e3c72;
            color:white;
            padding:10px 18px;
            border-radius:8px;
            text-decoration:none;
            font-weight:bold;
        "
    >
        View Details
    </a>
</div>