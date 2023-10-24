<@php
use App\Models\Categorie;
$categories = Categorie::all();
  
@endphp

<div class="sidebar">
    <h2>Sidebar</h2>
    <ul>

        @foreach ($categories as $item)
            <li><a href="{{ route('categories.show', ['id' => $item->id]) }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
</div>
