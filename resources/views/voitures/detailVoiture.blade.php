<div class="info">
    <div class="info-content">
        <div class="banner-voiture">
            <div class="banner-voitureTop-content">
                <div class="banner-voitureLeft">
                    <div class="banner-voitureLeft-imageBox">
                        <img src="{{ asset($voitur->images[0]) }}" alt="">
                    </div>
                </div>
                <div class="banner-voitureRight">
                    <div class="banner-voitureRight-content">
                        <h1>{{ $voitur->name }} / {{ $voitur->color }} / {{ $voitur->price }} <br>
                            {{ $voitur->description }}</h1>
                    </div>
                </div>
            </div>
            <div class="banner-voitureBottom">
                <hr> <br>
                <div class="banner-voitureBottom-content">
                    <div class="banner-voitureBottom-content-left">
                        <div class="banner-voitureBottom-items">
                            <img src="{{ asset($voitur->images[0]) }}" alt="">
                        </div>
                        <div class="banner-voitureBottom-items">
                            <img src="{{ asset($voitur->images[1]) }}" alt="">
                        </div>
                        <div class="banner-voitureBottom-items">
                            <img src="{{ asset($voitur->images[2]) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="detailDescription-content">
                <hr>
                <div class="descriptionTitle">
                    <h3>Description</h3>
                </div>
                <div class="description-paragraphe">
                    <br>
                    <p>{{ $voitur->name }} / {{ $voitur->color }} / {{ $voitur->price }}
                        {{ $voitur->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
