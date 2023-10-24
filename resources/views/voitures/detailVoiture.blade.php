<div class="info">
    <div class="info-content">
        <div class="banner-voiture">
            <div class="banner-voitureTop-content">
                <div class="banner-voitureLeft">
                    <div class="banner-voitureLeft-imageBox">
                        <img src="{{ asset($voitur->images[0])}}" alt="">
                    </div>
                </div>
                <div class="banner-voitureRight">
                    <div class="banner-voitureRight-content">
                        <h1>{{$voitur->name}} / {{$voitur->color}} / {{$voitur->price}} <br>
                            {{$voitur->description}}</h1>
                    </div>
                </div>
            </div>
            <div class="banner-voitureBottom">
                <div class="banner-voitureBottom-content">
                    <div class="banner-voitureBottom-items">
                        <img src="" alt="">
                    </div>
                    <div class="banner-voitureBottom-items">
                        <img src="" alt="">
                    </div>
                    <div class="banner-voitureBottom-items">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
