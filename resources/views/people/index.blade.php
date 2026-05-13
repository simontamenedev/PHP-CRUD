<x-layout>

    <h1 class="hstyle">Current Available Peoples</h1>
    <p>This is the People page.</p>



    <ul style="list-style:none; padding:0; margin-top:30px; display:grid; gap:20px;">

        @foreach ($people as $p)

            <li>
                <x-card href="/people/{{ $p['id'] }}">
                    <h2>{{ $p['name'] }}</h2>
                    <p>{{ $p['bio'] }}</p>
                    <p><strong>Dojo:</strong> {{ $p->dojo->name }}</p>
                </x-card>
            </li>

        @endforeach

    </ul>
<div style="margin-top:40px; display:flex; justify-content:center;">
    {{ $people->links() }}
</div>

<style>
/* Main pagination container */
nav[role="navigation"] {
    display: flex;
    justify-content: center;
}

/* Pagination list */
nav[role="navigation"] ul {
    display: flex;
    gap: 6px;
    list-style: none;
    padding: 0;
    margin: 0;
}

/* Page buttons */
nav[role="navigation"] li {
    display: inline-flex;
}

/* Links & spans */
nav[role="navigation"] li a,
nav[role="navigation"] li span {
    min-width: 40px;
    height: 40px;
    padding: 0 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;
    font-size: 14px;
    font-weight: 500;

    text-decoration: none;

    background: #f4f7fb;
    color: #1e3c72;
    border: 1px solid #e5e7eb;

    transition: all 0.25s ease;
}

/* Hover effect */
nav[role="navigation"] li a:hover {
    background: #1e3c72;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(30, 60, 114, 0.25);
}

/* Active page */
nav[role="navigation"] li span[aria-current="page"] {
    background: #1e3c72;
    color: white;
    border: none;
}

/* Disabled buttons */
nav[role="navigation"] li span[aria-disabled="true"] {
    opacity: 0.4;
    cursor: not-allowed;
}

/* SVG icons (Next/Prev arrows) */
nav[role="navigation"] svg {
    width: 14px !important;
    height: 14px !important;
}

/* Smooth click feel */
nav[role="navigation"] a {
    transition: all 0.2s ease;
}
</style>
</x-layout>