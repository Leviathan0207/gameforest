<section id="home_carousel" class="bg-inverse p-y-0">
    <div class="owl-carousel owl-slide full-height">
        <div v-for="item in this.CarouselData" :key="item.id" class="carousel-item" :style="{ 'background-image': 'url(' + item.background + ')' }">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption">
                <div>
                    <h3 class="carousel-title">{{ item.title }}</h3>
                    <p>{{item.description}}</p>
                    <a class="btn btn-primary btn-rounded btn-shadow btn-lg" :href="item.button.url" data-lightbox role="button">{{ item.button.text }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Vue({
            el: '#home_carousel',
            data:{
                CarouselData : []
            },
            created() {
                this.getCarouselData();
            },
            methods: {
                getCarouselData() {
                    this.CarouselData.push({
                        id: 1,
                        title: "For Honor: The Berserker",
                        description: "Enter the chaos of a raging war as a bold knight, brutal viking, or mysterious samurai.",
                        button: {
                            url: "https://www.youtube.com/watch?v=zFUymXnQ5z8",
                            text: "Watch Gameplay"
                        },
                        background: "https://img.youtube.com/vi/BhTkoDVgF6s/maxresdefault.jpg"
                    });
                    this.CarouselData.push({
                        id: 2,
                        title: "The Last of Us: Remastered",
                        description: "Survive an apocalypse on Earth in The Last of Us, a PlayStation 4-exclusive title.",
                        button: {
                            url: "https://www.youtube.com/watch?v=W2Wnvvj33Wo",
                            text: "Watch Gameplay"
                        },
                        background: "img/carousel/carousel-2.jpg"
                    });
                    this.CarouselData.push({
                        id: 3,
                        title: "The Witcher 3: Blood and Wine",
                        description: "The world is in chaos. The air is thick with tension and the smoke of burnt villages.",
                        button: {
                            url: "https://www.youtube.com/watch?v=c0i88t0Kacs",
                            text: "Watch Gameplay"
                        },
                        background: "img/carousel/carousel-1.jpg"
                    });
                }
            },
            mounted() {
                $(function () {
                    "use strict";
                    // Full Width Carousel
                    $('.owl-slide').owlCarousel({
                        nav: true,
                        loop: true,
                        autoplay: true,
                        items: 1
                    });

                    // Recent Reviews
                    $('.owl-list').owlCarousel({
                        margin: 25,
                        nav: true,
                        dots: false,
                        responsive: {
                            0: {
                                items: 1
                            },
                            500: {
                                items: 2
                            },
                            701: {
                                items: 3
                            },
                            1000: {
                                items: 4
                            }
                        }
                    });

                    // lightbox
                    $('[data-lightbox]').lightbox();
                })
            }
        })

    }, false);
</script>