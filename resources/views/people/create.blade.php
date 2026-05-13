<x-layout>
    <h1>Create a New Person</h1>
    <form action="/people" method="POST" style="margin-top:30px; display:flex; flex-direction:column; gap:20px; max-width:400px;">
        @csrf
        <input type="text" name="name" placeholder="Name" required style="padding:10px; border-radius:8px; border:1px solid #ccc;">
        <input type="number" name="skill" placeholder="Skill Level (1-100)" required style="padding:10px; border-radius:8px; border:1px solid #ccc;">
        <textarea name="bio" placeholder="Bio" required style="padding:10px; border-radius:8px; border:1px solid #ccc;"></textarea>
            <select name="dojo_id" required style="padding:10px; border-radius:8px; border:1px solid #ccc;">
               @foreach ($dojos as $dojo)
                   <option value="{{ $dojo->id }}">{{ $dojo->name }}</option>
               @endforeach
            </select>
        <button type="submit" style="
            background:#1e3c72;
            color:white;
            padding:12px 20px;
            border:none;
            border-radius:10px;
            font-weight:bold;
            cursor:pointer;
            transition: background 0.3s ease;
        " onmouseover="this.style.background='#16325c';" onmouseout="this.style.background='#1e3c72';">
            Create Person
        </button>
        @if($errors->any())
            <div style="background:#ffe5e5; color:#d8000c; padding:10px; border-radius:8px;">
                <ul style="margin:0; padding-left:20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</x-layout>    