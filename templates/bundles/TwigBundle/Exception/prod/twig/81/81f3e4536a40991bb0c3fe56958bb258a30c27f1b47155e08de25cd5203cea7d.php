<?php

/* site/footer.html.twig */
class __TwigTemplate_4c6e925dfc36ad5685846ec5f8ee2fdd73d77f321baab3d23d4033420b01ca89 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"contact\" class=\"contact\">
    <div class=\"container-contact\">
        <h1 class=\"title\"><a class=\"underline--magical\">Rejoignez-nous</a></h1>
        <div class=\"contact-bloc\">
            <div id=\"soutenir\">
                <h3>Soutenez-les</h3>
                <p class=\"padding-soutenir\">Tu aimes écouter de nouveaux artistes? Rejoins l'expérience Meloven et découvre nos musiciens préférés !</p>
                <div class=\"div-btn\">
                    <span class=\"button--bubble__container\">
                      <a href=\"#\" class=\"button button--bubble btn-souvenir\">
                        Je veux soutenir
                      </a>
                      <span class=\"button--bubble__effect-container\">
                        <span class=\"circle top-left\"></span>
                        <span class=\"circle top-left\"></span>
                        <span class=\"circle top-left\"></span>
                        <span class=\"button effect-button\"></span>
                        <span class=\"circle bottom-right\"></span>
                        <span class=\"circle bottom-right\"></span>
                        <span class=\"circle bottom-right\"></span>
                      </span>
                    </span>
                </div>
                ";
        // line 25
        echo "            </div>
            <div id=\"realisez\">
                <h3>Réalisez-vous</h3>
                <p>Tu es passionné par la musique? Tu veux en faire ton métier ? Meloven t’aide à réaliser ce rêve en t’apportant plus de visibilité afin de booster ta notoriété.</p>
                <div class=\"div-btn\">
                    <span class=\"button--bubble__container\">
                      <a href=\"#\" class=\"button button--bubble btn-realisez\">
                        Je suis artiste
                      </a>
                      <span class=\"button--bubble__effect-container\">
                        <span class=\"circle top-left\"></span>
                        <span class=\"circle top-left\"></span>
                        <span class=\"circle top-left\"></span>
                        <span class=\"button effect-button\"></span>
                        <span class=\"circle bottom-right\"></span>
                        <span class=\"circle bottom-right\"></span>
                        <span class=\"circle bottom-right\"></span>
                      </span>
                    </span>
                </div>
                ";
        // line 46
        echo "            </div>
        </div>

        <div class=\"contact-blog-soutenir\" style=\"display: none;\">
            <p>Découvre l'actualité de nos artistes préférés et nos nouveaux talents avant tout le monde</p>
            <form id=\"signup\">
                <input type=\"email\" id=\"request\" name=\"request\" placeholder=\"Adresse email...\">
                <small id=\"emailHelp\" class=\"error\">Votre adresse email est invalide !</small>
                <small id=\"emailHelp\" class=\"valid\">Merci d'avoir souscrit à la newsletter !</small>
                <input type=\"hidden\" id=\"list\" name=\"list\" value=\"76c0a7833d\">
                <div class=\"div-btn\">
                <span class=\"button--bubble__container\">
                  <input type=\"submit\" value=\"Inscription\" class=\"button button--bubble\">
                  <span class=\"button--bubble__effect-container\">
                    <span class=\"circle top-left\"></span>
                    <span class=\"circle top-left\"></span>
                    <span class=\"circle top-left\"></span>
                    <span class=\"button effect-button\"></span>
                    <span class=\"circle bottom-right\"></span>
                    <span class=\"circle bottom-right\"></span>
                    <span class=\"circle bottom-right\"></span>
                  </span>
                </span>
                </div>
                ";
        // line 71
        echo "            </form>
            <a href=\"#\" class=\"revenir-en-arriere\">Revenir en arrière</a>
            <div id=\"successMessage\"><p></p></div>
        </div>


        <div class=\"contact-blog-devenir\" style=\"display: none;\">
            <p>Présente toi et explique nous ton projet en quelques mot, nous reviendrons vers toi le plus vite possible !</p>
            <form id=\"signup\">
                <input type=\"email\" id=\"request\" name=\"request\" placeholder=\"Adresse email...\">
                ";
        // line 82
        echo "                <input type=\"hidden\" id=\"list\" name=\"list\" value=\"76c0a7833d\">
                <div class=\"div-btn\">
                <span class=\"button--bubble__container\">
                  <input type=\"submit\" value=\"Inscription\" class=\"button button--bubble\">
                  <span class=\"button--bubble__effect-container\">
                    <span class=\"circle top-left\"></span>
                    <span class=\"circle top-left\"></span>
                    <span class=\"circle top-left\"></span>
                    <span class=\"button effect-button\"></span>
                    <span class=\"circle bottom-right\"></span>
                    <span class=\"circle bottom-right\"></span>
                    <span class=\"circle bottom-right\"></span>
                  </span>
                </span>
                </div>
                ";
        // line 98
        echo "            </form>
            <a href=\"#\" class=\"revenir-en-arriere\">Revenir en arrière</a>
            <div id=\"successMessage\"><p></p></div>
        </div>


    </div>
</section>
<footer>
    <div class=\"footer-wrapper\">
        <ul>
            <li>
                <h2>La musique partout autour de vous.</h2>
            </li>
            <li>
                <h3><a class=\"underline--magical\">Meloven</a></h3>
                <ul>
                    <li><a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qui_sommes_nous");
        echo "\">Qui est Meloven</a></li>
                    <li><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#artistes\">Nos artistes</a></li>
                    <li><a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\" target=\"_blank\">Blog</a></li>
                </ul>
            </li>
            <li>
                <h3><a class=\"underline--magical\">Contact</a></h3>
                <ul>
                    <li><a href=\"mailto:contact@meloven.fr\">contact@meloven.fr</a></li>
                </ul>
            </li>
            <li>
                <h3><a class=\"underline--magical\">A propos</a></h3>
                <ul>
                    <li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions-legales");
        echo "\">Mentions légales</a></li>
                    <li><a href=\"http://bit.ly/Kit-meloven\" target=\"_blank\">Kit Presse</a></li>
                </ul>
            </li>
            <li>
                <h3><a class=\"underline--magical\">Rejoignez-nous</a></h3>
                <ul class=\"rs-footer\">
                    <li><a class=\"facebook-rose-round\" href=\"https://www.facebook.com/Meloven.fr\" target=\"_blank\"></a></li>
                    <li><a class=\"youtube-rose-round\" href=\"https://www.instagram.com/melovenfr/\" target=\"_blank\"></a></li>
                    <li><a class=\"twitter-rose-round\" href=\"https://twitter.com/melovenfr\" target=\"_blank\"></a></li>
                </ul>
            </li>
        </ul>
    </div>


    ";
        // line 158
        echo "
</footer>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
";
        // line 185
        echo "
<script>
    \$(document).ready(function() {
        \$('.btn-souvenir').click(function(e) {
            e.preventDefault();
            \$('.contact-bloc').fadeOut();
            \$(\".contact-blog-soutenir\").delay( 300 ).fadeIn();
        });

        \$('.btn-realisez').click(function(e) {
            e.preventDefault();
            \$('.contact-bloc').fadeOut();
            \$(\".contact-blog-devenir\").delay( 300 ).fadeIn();
        });

        \$('.revenir-en-arriere').click(function(e) {
            e.preventDefault();
            \$(\".contact-blog-soutenir\").fadeOut();
            \$(\".contact-blog-devenir\").fadeOut();
            \$('.contact-bloc').delay( 300 ).fadeIn();
        });


        /*function validateEmail(email) {
            var re = /^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
            return re.test(String(email).toLowerCase());
        }*/

        \$('#signup').submit(function() {
            /*var email = \$(\"#request\").val();
            /!*\$result.text(\"\");*!/
            if (validateEmail(email) == true) {
                console.log('not ok');
                var \$result = \$(\".error\");
                /!*\$result.text(email + \" is valid :)\");*!/
                \$result.css(\"display\", \"block\");
                function hideBlock() {
                    \$result.css(\"display\", \"none\");
                }
                setTimeout(hideBlock, 2000);
            } else {
                console.log('ok');
                var \$result = \$(\".valid\");
                /!*\$result.text(email + \" is not valid :(\");*!/
                \$result.css(\"display\", \"block\");
                function hideBlock() {
                    \$result.css(\"display\", \"none\");
                }
                setTimeout(hideBlock, 2000);
            }
            /!*return false;*!/*/

            var data = {
                request : \$('#request').val(),
                list : \$('#list').val(),
            };
            console.log(data);
            \$.ajax({
                url: \"";
        // line 243
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mailchimp");
        echo "\", // proper url to your \"store-address.php\" file
                type: 'POST', // <- IMPORTANT
                data: data,
                success: function(msg) {
                    \$(\"#successMessage p\").html('Merci pour votre inscription !');
                    \$(\"#successMessage\").show();
                    setTimeout(function() {
                        \$(\"#successMessage\").hide()
                    }, 5000);
                    \$(\"#request\").val('');
                    var message = \$.parseJSON(msg),
                        result = '';
                    if (message.status === 'pending') { // success
                        result = 'Success!  Please click the confirmation link that will be emailed to you shortly.';
                    } else { // error
                        result = 'Error: ' + message.detail;
                    }
                    \$('#message').html(result); // display the message
                }
            });
            return false;
        });
    });
</script>
<script>
    \$(document).ready(function() {
        function hideBlocks () {
            \$(\".block-changable-evenement\").hide();
            \$(\".block-changable-photos\").hide();
            \$(\".block-changable-video\").hide();
            \$(\".block-changable-photos-error\").hide();
            \$(\".block-changable-video-error\").hide();
            \$(\".block-changable-bio\").hide();
            \$(\"#evenement\").removeClass('active');
            \$(\"#photos\").removeClass('active');
            \$(\"#video\").removeClass('active');
            \$(\"#bio\").removeClass('active');
        }
        \$(\"#evenement\").click(function(e) {
            e.preventDefault();
            hideBlocks();
            \$(\"#evenement\").addClass('active');
            \$(\".block-changable-evenement\").fadeIn().css('display', 'flex');
        });
        \$(\"#photos\").click(function(e) {
            e.preventDefault();
            hideBlocks();
            \$(\"#photos\").addClass('active');
            if(\$(\".block-changable-photos\").length) { // 0 == false; >0 == true
                \$(\".block-changable-photos\").fadeIn();
            }else{
                \$(\".block-changable-photos-error\").fadeIn();
            }
        });
        \$(\"#video\").click(function(e) {
            e.preventDefault();
            hideBlocks();
            \$(\"#video\").addClass('active');
            if(\$(\".block-changable-video\").fadeIn().length) { // 0 == false; >0 == true
                \$(\".block-changable-video\").fadeIn();
            }else{
                \$(\".block-changable-video-error\").fadeIn();
            }

        });
        \$(\"#bio\").click(function(e) {
            e.preventDefault();
            hideBlocks();
            \$(\"#bio\").addClass('active');
            \$(\".block-changable-bio\").fadeIn();
        });
    });
</script>
<script>
    \$(document).ready(function() {
        \$(\".scroll-btn a\").click(function(e) {
            e.preventDefault();
            document.querySelector('#explain').scrollIntoView({
                behavior: 'smooth'
            });
        });
        \$(\".btn-contact-nav\").click(function(e) {
            e.preventDefault();
            document.querySelector('#contact').scrollIntoView({
                behavior: 'smooth'
            });
        });
        console.log(window.location.pathname);
        if( window.location.pathname == '/'){
            \$(\".btn-nos-artistes-nav\").click(function(e) {
                e.preventDefault();
                document.querySelector('#artistes').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }

    });
</script>
";
        // line 363
        echo "<script>
    // Open the Modal
    function openModal() {
        document.getElementById('myModal').style.display = \"block\";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById('myModal').style.display = \"none\";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    /*// Thumbnail image controls*/
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName(\"mySlides\");
        var dots = document.getElementsByClassName(\"demo\");
        var captionText = document.getElementById(\"caption\");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = \"none\";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(\" active\", \"\");
        }
        slides[slideIndex-1].style.display = \"block\";
        dots[slideIndex-1].className += \" active\";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
<script>
    /*\$('.qui-sommes-nous-header-content h1').hover(function(){
        \$('.qui-sommes-nous-header-content audio').play();
    });*/

    function PlaySound(soundobj) {
        var thissound=document.getElementById(soundobj);
        thissound.play();
    }

</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js\"></script>
<script>
    \$('.button--bubble').each(function() {
        var \$circlesTopLeft = \$(this).parent().find('.circle.top-left');
        var \$circlesBottomRight = \$(this).parent().find('.circle.bottom-right');

        var tl = new TimelineLite();
        var tl2 = new TimelineLite();

        var btTl = new TimelineLite({ paused: true });

        tl.to(\$circlesTopLeft, 1.2, { x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false) });
        tl.to(\$circlesTopLeft.eq(0), 0.1, { scale: 0.2, x: '+=6', y: '-=2' });
        tl.to(\$circlesTopLeft.eq(1), 0.1, { scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7' }, '-=0.1');
        tl.to(\$circlesTopLeft.eq(2), 0.1, { scale: 0.2, x: '-=15', y: '+=6' }, '-=0.1');
        tl.to(\$circlesTopLeft.eq(0), 1, { scale: 0, x: '-=5', y: '-=15', opacity: 0 });
        tl.to(\$circlesTopLeft.eq(1), 1, { scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0 }, '-=1');
        tl.to(\$circlesTopLeft.eq(2), 1, { scale: 0, x: '-=15', y: '+=5', opacity: 0 }, '-=1');

        var tlBt1 = new TimelineLite();
        var tlBt2 = new TimelineLite();

        tlBt1.set(\$circlesTopLeft, { x: 0, y: 0, rotation: -45 });
        tlBt1.add(tl);

        tl2.set(\$circlesBottomRight, { x: 0, y: 0 });
        tl2.to(\$circlesBottomRight, 1.1, { x: 30, y: 30, ease: SlowMo.ease.config(0.1, 0.7, false) });
        tl2.to(\$circlesBottomRight.eq(0), 0.1, { scale: 0.2, x: '-=6', y: '+=3' });
        tl2.to(\$circlesBottomRight.eq(1), 0.1, { scale: 0.8, x: '+=7', y: '+=3' }, '-=0.1');
        tl2.to(\$circlesBottomRight.eq(2), 0.1, { scale: 0.2, x: '+=15', y: '-=6' }, '-=0.2');
        tl2.to(\$circlesBottomRight.eq(0), 1, { scale: 0, x: '+=5', y: '+=15', opacity: 0 });
        tl2.to(\$circlesBottomRight.eq(1), 1, { scale: 0.4, x: '+=7', y: '+=7', opacity: 0 }, '-=1');
        tl2.to(\$circlesBottomRight.eq(2), 1, { scale: 0, x: '+=15', y: '-=5', opacity: 0 }, '-=1');

        tlBt2.set(\$circlesBottomRight, { x: 0, y: 0, rotation: 45 });
        tlBt2.add(tl2);

        btTl.add(tlBt1);
        btTl.to(\$(this).parent().find('.button.effect-button'), 0.8, { scaleY: 1.1 }, 0.1);
        btTl.add(tlBt2, 0.2);
        btTl.to(\$(this).parent().find('.button.effect-button'), 1.8, { scale: 1, ease: Elastic.easeOut.config(1.2, 0.4) }, 1.2);

        btTl.timeScale(2.6);

        \$(this).on('mouseover', function() {
            btTl.restart();
        });
    });
</script>
<script>
    \$(document).ready(function() {
        \$('#cookie-banner-close').click(function(e) {
            e.preventDefault();
            \$('#cookie-banner').css('display', 'none');
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "site/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 363,  255 => 243,  195 => 185,  191 => 161,  186 => 158,  167 => 129,  152 => 117,  148 => 116,  144 => 115,  125 => 98,  108 => 82,  96 => 71,  70 => 46,  48 => 25,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "site/footer.html.twig", "/homepages/14/d740445017/htdocs/templates/site/footer.html.twig");
    }
}
