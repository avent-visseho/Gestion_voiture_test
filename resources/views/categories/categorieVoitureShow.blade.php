<h1>Voitures de la catégorie {{ $categorie->name }}</h1>

@foreach ($voitures as $item)
    <div class="voiture">
        <h2>{{ $item->name }}</h2>
    </div>
@endforeach
