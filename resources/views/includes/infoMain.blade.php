<div class="info">
    <div class="info-content">
        <div class="allVoiture-content">
            @foreach ($voitures as $item)
                <div class="voitureBox">
                    <div class="voitureBox-image">
                        <a href="{{ route('details', ['id' => $item->id]) }}">
                            {{-- @if (!empty($item->images))
                            @endif --}}
                            <img src="{{ asset($item->images[0])}}" alt="{{ $item->name }}">
                        </a>
                    </div>
                    <div class="voiture-name">
                        <p>
                            <strong>{{ $item->name }}</strong> <br>/
                            {{ $item->description }}/ <br>
                            {{ $item->color }}/
                            prix : {{ $item->price }} €
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination">
            <a href="#" class="page">1</a>
            <a href="#" class="page">2</a>
            <a href="#" class="page">3</a>
            <a href="#" class="page">4</a>
            <a href="#" class="page">5</a>
            <a href="#" class="next">Next</a>
        </div>
    </div>
</div>
