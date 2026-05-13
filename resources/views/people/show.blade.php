<x-layout>

    <div style="
        max-width:700px;
        margin:auto;
        background:white;
        padding:40px;
        border-radius:20px;
        box-shadow:0 8px 20px rgba(0,0,0,0.08);
    ">

        <h1 style="
            color:#1e3c72;
            margin-bottom:25px;
            font-size:40px;
        ">
            Person's Details
        </h1>


        <div style="line-height:2; font-size:18px;">

            <p>
                <strong>ID:</strong>
                {{ $person->id }}
            </p>

            <p>
                <strong>Name:</strong>
                {{ $person->name }}
            </p>

            <p>
                <strong>Skill:</strong>
                {{ $person->skill }}
            </p>

            <p>
                <strong>Bio:</strong>
                {{ $person->bio }}
            </p>

        </div>
            <p style="margin-top:30px; font-size:16px; color:#555;">
                <strong>Dojo:</strong>
                {{ $person->dojo->name }}
            </p>


        <a 
            href="/people"
            style="
                display:inline-block;
                margin-top:25px;
                background:#1e3c72;
                color:white;
                padding:12px 20px;
                border-radius:10px;
                text-decoration:none;
                font-weight:bold;
            "
        >
            ← Back to People
        </a>
        <form action="/people/{{ $person->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="
                background:#d8000c;
                color:white;
                padding:12px 20px;
                border:none;
                border-radius:10px;
                font-weight:bold;
                cursor:pointer;
                transition: background 0.3s ease;
            ">
                Delete
            </button>
        </form>
    </div>

</x-layout>