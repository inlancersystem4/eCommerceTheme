<?php include 'header.php';?>

<script>
    jQuery(document).ready(function () {
        jQuery(".product-img").zbox({
            margin: 40
        });
    });
</script>


<section class="w-100 container border-b product-page">
    <div class="grid-wrapper-left">
        <a class="product-img front-img" rel="group"
            href="https://uploads-ssl.webflow.com/6400d82951450087c6d1eba8/64342f30da060942820af72b_63c1bed2aa744236cba36b46_DoubleLuna_Carouseljpg.webp">
            <img
                src="https://uploads-ssl.webflow.com/6400d82951450087c6d1eba8/64342f30da060942820af72b_63c1bed2aa744236cba36b46_DoubleLuna_Carouseljpg.webp" />
        </a>
        <a class="product-img back-img" rel="group"
            href="https://uploads-ssl.webflow.com/6400d82951450087c6d1eba8/64342f30da0609be480af72c_63a5fd8276dc2e4724b31d7b_DoubleLuna_Top.webp">
            <img
                src="https://uploads-ssl.webflow.com/6400d82951450087c6d1eba8/64342f30da0609be480af72c_63a5fd8276dc2e4724b31d7b_DoubleLuna_Top.webp" />
        </a>
    </div>
    <div class="grid-wrapper-right">
        <div class="content-small">
            <div class="product-category-name">
                <a href="#" class="overline">Fresh Flowers</a> <b class="overline">/</b>
                <a href="#" class="overline">Blue Harmony</a>
            </div>
            <div class="product-name">
                <h3>Blue Harmony</h3>
                <span class="overline">-</span>
                <h3>$55</h3>
            </div>
            <p class="product-description">The bohemian spirit and undeniable beauty of "Blue Harmony" are hard to
                resist. Hints of blue, coupled with ivory and lavender, make it a harmonious choice that is both
                calming and balancing. It’s the obvious choice for adding some soft sweetness and tranquility to
                your space.</p>
                <div class="product-quantity">
                <p class="subtitle">Quantity</p>
                <div class="quantity-box">
                    <button class="decrement">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                            <path d="M5.25 12.75v-1.5h13.5v1.5Z" />
                        </svg>
                    </button>
                    <input type="number" value="1" max="99">
                    <button class="increment">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24">
                            <path d="M11.25 18.75v-6h-6v-1.5h6v-6h1.5v6h6v1.5h-6v6Z" />
                        </svg>
                    </button>
                </div>
            </div>
            <p class="subtitle">Price options</p>
            <form actions="#">
                <div class="radio-button">
                    <input type="radio" id="radio1" checked>
                    <label for="radio1">
                        <p>One time purchase. Price</p>
                        <p>$55</p>
                    </label>
                </div>
                <div class="radio-button">
                    <input type="radio" id="radio2">
                    <label for="radio2">
                        <p>Subscribe now, and save 25% on this order.</p>
                    </label>
                </div>
            </form>
            <button class="button w-100 link openDrawer">add to basket</button>
        </div>
    </div>
</section>


<section class="w-100">
    <div class="content flex-center border-b">
        <h3>You may also like…</h3>
    </div>
    <div class="product-grid-row">
        <a href="#" class="product-card">
            <img
                src="https://uploads-ssl.webflow.com/6400d82951450087c6d1eba8/64342f32e6dcecbc89f1519a_6408c011b8c50c3437263eb4_nestnewyork_rattan_grapefruit_candle_classic_1_540x.webp">
            <div class="product-details">
                <h6>Rattan Grapefruit</h6>
                <p class="caption-small">Price $48</p>
            </div>
        </a>
        <a href="#" class="product-card">
            <img
                src="https://uploads-ssl.webflow.com/6400d82951450087c6d1eba8/64342f3253b60dff794e8c8e_640a14c4f6e4026c4b5ea553_nestnewyork_rattan_cedarleaflavender_reeddiffuser_1_720x%2520copy-p-500.webp">
            <div class="product-details">
                <h6>Cedar & Lavender</h6>
                <p class="caption-small">Price $64</p>
            </div>
        </a>
        <a href="#" class="product-card">
            <img
                src="https://uploads-ssl.webflow.com/6400d82951450087c6d1eba8/64342f31620f2b53066da61c_640a14a8a46e68073be0f597_nestnewyork_wellness_himalayansaltrosewater_reeddiffuser_1_540x%2520copy.webp">
            <div class="product-details">
                <h6>Himalayan Salt & Rosewater</h6>
                <p class="caption-small">Price $32</p>
            </div>
        </a>
        <a href="#" class="product-card">
            <img
                src="https://uploads-ssl.webflow.com/6400d82951450087c6d1eba8/64342f3125c6466b22084232_640a14d4f378af50e97cb83b_nestnewyork_wellness_wildminteucalyptus_reeddiffuser_1_720x%2520copy.webp">
            <div class="product-details">
                <h6>Wild Mint & Eucalyptus</h6>
                <p class="caption-small">Price $58</p>
            </div>
        </a>
    </div>
</section>








<?php include 'footer.php';?>