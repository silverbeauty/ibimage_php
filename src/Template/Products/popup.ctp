<div class="ajax-text-and-image white-popup-block">
    <style>

        @keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Firefox < 16 */
        @-moz-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Safari, Chrome and Opera > 12.1 */
        @-webkit-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Internet Explorer */
        @-ms-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        /* Opera < 12.1 */
        @-o-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        .ajax-text-and-image {
            max-width:800px; margin: 20px auto; background: transparent; padding: 0; line-height: 0;
            -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
            -moz-animation: fadein 2s; /* Firefox < 16 */
            -ms-animation: fadein 2s; /* Internet Explorer */
            -o-animation: fadein 2s; /* Opera < 12.1 */
            animation: fadein 2s;
        }
        .ajcol {
            width: 50%; float:left;
        }
        .ajcol img {
            width: 100%; height: auto;
            border: 3px solid white;
        }
        @media all and (max-width:30em) {
            .ajcol {
                width: 100%;
                float:none;
            }
        }

        .div-img::after {
            content: " ";
            display: block;
            width: 100%;
            height: 0;
            clear: both;
        }
    </style>
    <div class="div-img">
        <div class="ajcol">
            <img src="<?= $photo ?>"/>
            <div style="margin-top: 30px; text-align: center">
                <p>Share this photograph with your friends</p>
                <div style="margin-top: 30px;">
                    <a class="social-icon icon-facebook" data-img-url="" onclick="click_facebook(this)" id="facebook"></a>
                    <a download class="social-icon icon-instagram" id="instagram"></a>
                    <a class="social-icon icon-snapchat" id="snapchat"></a>
                    <a class="social-icon icon-pinterest" data-img-url="" onclick="click_pinterest(this)" id="pinterest"></a>
                    <a class="social-icon icon-tweet" data-img-url="" onclick="click_tweet(this)" id="tweet"></a>
                </div>
            </div>
        </div>
        <div class="ajcol" style="line-height: 1.231;">
            <div style="padding: 1em">
                <h1>This is just block of HTML, loaded via ajax</h1>
                <p>You can put absolutely any HTML here and resize it dynamically just with help of CSS.</p>
            </div>
        </div>
    </div>

</div>