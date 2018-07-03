<?php

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_b132a971425da3499f158f11a1cbc66e8df7f2944a0d60cff47ce54656ed44cf extends Twig_Template
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
        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["color_schemes"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[($context["color_scheme"] ?? null)] ?? null) : null);
        // line 45
        echo "
";
        // line 52
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 60
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 66
        echo "a        { color: ";
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "link", array());
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 77
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 81
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 90
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 108
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 112
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "success", array());
        echo ";
    color: ";
        // line 113
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 116
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 117
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 126
        echo ".label:not([class*=label-]) {
    background: ";
        // line 127
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 130
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 139
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 143
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 149
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

";
        // line 154
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 163
        echo ".toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 205
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 221
        echo "span.badge {
    background-color: ";
        // line 222
        echo ($context["brand_color"] ?? null);
        echo ";
}

";
        // line 227
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 244
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 245
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 246
($context["color_scheme"] ?? null))) {
            // line 247
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 249
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 252
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 273
        echo ($context["brand_color"] ?? null);
        echo ";
    border-color: transparent;
    color: ";
        // line 275
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: #39a0ed;
    border-color: transparent;
    color: ";
        // line 284
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 299
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 301
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 309
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 311
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}

";
        // line 315
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 321
        echo ($context["brand_color"] ?? null);
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 350
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 355
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 357
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 358
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 360
        echo "    color: ";
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 365
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 366
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 368
($context["color_scheme"] ?? null))) {
            // line 369
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 371
        echo "}

.has-error .error-block {
    color: ";
        // line 374
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 390
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text_muted", array());
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 400
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 401
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 402
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 403
($context["color_scheme"] ?? null))) {
            // line 404
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 405
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 407
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 409
        if (((array_key_exists("kernel_debug", $context)) ? (_twig_default_filter(($context["kernel_debug"] ?? null), false)) : (false))) {
            // line 410
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 413
        echo "    z-index: 9999;
}

";
        // line 418
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 424
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 429
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 430
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 431
($context["color_scheme"] ?? null))) {
            // line 432
            echo "    border-top-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 434
        echo "}
.field-group .field-divider hr {
";
        // line 436
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 437
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 438
($context["color_scheme"] ?? null))) {
            // line 439
            echo "    border-top-color: #EEE;
";
        }
        // line 441
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 447
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 448
            echo "    border-bottom: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
    color: ";
            // line 449
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 450
($context["color_scheme"] ?? null))) {
            // line 451
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 452
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 454
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 458
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 459
            echo "    color: #555;
";
        } elseif (("light" ==         // line 460
($context["color_scheme"] ?? null))) {
            // line 461
            echo "    color: #777;
";
        }
        // line 463
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 470
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 471
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 472
($context["color_scheme"] ?? null))) {
            // line 473
            echo "    border: 1px solid #EEE;
";
        }
        // line 475
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 478
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 479
            echo "    color: #555;
";
        } elseif (("light" ==         // line 480
($context["color_scheme"] ?? null))) {
            // line 481
            echo "    color: #777;
";
        }
        // line 483
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 486
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 487
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 489
($context["color_scheme"] ?? null))) {
            // line 490
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 492
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 494
        echo "    padding: 11px 10px 9px;
}
";
        // line 496
        if (("light" == ($context["color_scheme"] ?? null))) {
            // line 497
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 501
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 511
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 515
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 518
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 526
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 533
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 537
        echo ($context["brand_color"] ?? null);
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 540
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 543
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 549
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_dark", array());
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 562
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 563
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 564
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 577
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 587
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 588
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 589
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 611
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 619
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 620
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

";
        // line 626
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 634
        echo "
";
        // line 637
        echo ".content-wrapper {
    background: ";
        // line 638
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "page_background", array());
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 646
        echo ".main-header {
    background: ";
        // line 647
        echo ($context["brand_color"] ?? null);
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 651
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 653
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 678
        echo ($context["brand_color"] ?? null);
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 697
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

";
        // line 754
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 770
        echo ".main-sidebar,
.wrapper {
";
        // line 772
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 773
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 774
($context["color_scheme"] ?? null))) {
            // line 775
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        }
        // line 777
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 783
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 784
            echo "    color: #777;
";
        } elseif (("light" ==         // line 785
($context["color_scheme"] ?? null))) {
            // line 786
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        }
        // line 788
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 793
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 794
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 795
($context["color_scheme"] ?? null))) {
            // line 796
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 798
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 815
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 816
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 818
($context["color_scheme"] ?? null))) {
            // line 819
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 821
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 827
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 828
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 829
($context["color_scheme"] ?? null))) {
            // line 830
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 832
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 841
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 842
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 845
($context["color_scheme"] ?? null))) {
            // line 846
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 849
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 858
        echo ".sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
";
        // line 863
        echo ".sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}

";
        // line 869
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 886
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 887
            echo "    background: #333;
";
        } elseif (("light" ==         // line 888
($context["color_scheme"] ?? null))) {
            // line 889
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        }
        // line 891
        echo "}

";
        // line 894
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 895
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 896
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 897
($context["color_scheme"] ?? null))) {
            // line 898
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 900
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 910
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 915
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 916
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 917
($context["color_scheme"] ?? null))) {
            // line 918
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 920
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text_muted", array());
            echo ";
";
        }
        // line 922
        echo "    margin: 10px 0 5px;
}

";
        // line 928
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 964
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 977
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
";
        // line 978
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 979
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 980
($context["color_scheme"] ?? null))) {
            // line 981
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 983
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 987
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 1028
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 1041
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1048
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1049
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 1050
($context["color_scheme"] ?? null))) {
            // line 1051
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 1053
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1055
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    border-color: ";
        // line 1056
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 1058
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1061
        echo ($context["brand_color"] ?? null);
        echo ";
    color: ";
        // line 1062
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1074
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1082
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1084
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    font-size: 16px;
}

";
        // line 1091
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1113
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1135
        echo "body.show .form-control {
";
        // line 1136
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1137
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1138
($context["color_scheme"] ?? null))) {
            // line 1139
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 1141
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1155
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1160
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    border: 1px solid ";
        // line 1161
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 1162
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1167
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 1168
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

";
        // line 1184
        echo "
";
        // line 1188
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1212
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1259
        echo "    body.list table {
        background: ";
        // line 1260
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
        border: 1px solid ";
        // line 1261
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1267
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1271
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1276
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1282
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1287
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1288
            echo "        background: ";
            echo ($context["brand_color"] ?? null);
            echo ";
        color: ";
            // line 1289
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
            echo ";
";
        }
        // line 1291
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1294
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1295
            echo "        color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1296
($context["color_scheme"] ?? null))) {
            // line 1297
            echo "        color: ";
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1299
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1307
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1310
        echo ($context["brand_color"] ?? null);
        echo ";
    }
    ";
        // line 1313
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1314
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1315
            echo "        border-left: 1px solid ";
            echo ($context["brand_color"] ?? null);
            echo ";
        border-top: 1px solid ";
            // line 1316
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1318
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1320
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1329
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "table_row_border", array());
        echo ";
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1341
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1342
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1345
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1385
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/css/easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1865 => 1385,  1824 => 1345,  1818 => 1342,  1814 => 1341,  1799 => 1329,  1787 => 1320,  1783 => 1318,  1778 => 1316,  1773 => 1315,  1771 => 1314,  1768 => 1313,  1763 => 1310,  1757 => 1307,  1747 => 1299,  1741 => 1297,  1739 => 1296,  1734 => 1295,  1732 => 1294,  1727 => 1291,  1722 => 1289,  1717 => 1288,  1715 => 1287,  1707 => 1282,  1698 => 1276,  1690 => 1271,  1683 => 1267,  1674 => 1261,  1670 => 1260,  1667 => 1259,  1619 => 1212,  1594 => 1188,  1591 => 1184,  1575 => 1168,  1571 => 1167,  1563 => 1162,  1559 => 1161,  1555 => 1160,  1548 => 1155,  1535 => 1141,  1529 => 1139,  1527 => 1138,  1522 => 1137,  1520 => 1136,  1517 => 1135,  1496 => 1113,  1475 => 1091,  1468 => 1084,  1464 => 1082,  1457 => 1074,  1445 => 1062,  1441 => 1061,  1435 => 1058,  1430 => 1056,  1426 => 1055,  1422 => 1053,  1416 => 1051,  1414 => 1050,  1409 => 1049,  1407 => 1048,  1398 => 1041,  1385 => 1028,  1343 => 987,  1337 => 983,  1331 => 981,  1329 => 980,  1324 => 979,  1322 => 978,  1318 => 977,  1303 => 964,  1267 => 928,  1262 => 922,  1257 => 920,  1253 => 918,  1251 => 917,  1246 => 916,  1244 => 915,  1237 => 910,  1228 => 900,  1224 => 898,  1222 => 897,  1219 => 896,  1217 => 895,  1214 => 894,  1210 => 891,  1204 => 889,  1202 => 888,  1199 => 887,  1197 => 886,  1178 => 869,  1171 => 863,  1165 => 858,  1155 => 849,  1150 => 846,  1148 => 845,  1141 => 842,  1139 => 841,  1128 => 832,  1122 => 830,  1120 => 829,  1117 => 828,  1115 => 827,  1107 => 821,  1101 => 819,  1099 => 818,  1095 => 816,  1093 => 815,  1074 => 798,  1068 => 796,  1066 => 795,  1063 => 794,  1061 => 793,  1054 => 788,  1048 => 786,  1046 => 785,  1043 => 784,  1041 => 783,  1033 => 777,  1027 => 775,  1025 => 774,  1022 => 773,  1020 => 772,  1016 => 770,  1000 => 754,  942 => 697,  920 => 678,  893 => 653,  889 => 651,  882 => 647,  879 => 646,  870 => 638,  867 => 637,  864 => 634,  857 => 626,  850 => 620,  846 => 619,  836 => 611,  813 => 589,  809 => 588,  806 => 587,  796 => 577,  781 => 564,  777 => 563,  774 => 562,  760 => 549,  751 => 543,  745 => 540,  739 => 537,  732 => 533,  722 => 526,  711 => 518,  705 => 515,  699 => 511,  690 => 501,  684 => 497,  682 => 496,  678 => 494,  673 => 492,  667 => 490,  665 => 489,  661 => 487,  659 => 486,  654 => 483,  650 => 481,  648 => 480,  645 => 479,  643 => 478,  638 => 475,  634 => 473,  632 => 472,  629 => 471,  627 => 470,  618 => 463,  614 => 461,  612 => 460,  609 => 459,  607 => 458,  601 => 454,  596 => 452,  593 => 451,  591 => 450,  587 => 449,  582 => 448,  580 => 447,  572 => 441,  568 => 439,  566 => 438,  563 => 437,  561 => 436,  557 => 434,  551 => 432,  549 => 431,  546 => 430,  544 => 429,  537 => 424,  531 => 418,  526 => 413,  521 => 410,  519 => 409,  515 => 407,  510 => 405,  505 => 404,  503 => 403,  499 => 402,  494 => 401,  492 => 400,  479 => 390,  460 => 374,  455 => 371,  449 => 369,  447 => 368,  441 => 366,  439 => 365,  430 => 360,  426 => 358,  424 => 357,  419 => 355,  412 => 350,  382 => 321,  374 => 315,  368 => 311,  363 => 309,  352 => 301,  347 => 299,  329 => 284,  317 => 275,  312 => 273,  288 => 252,  283 => 249,  277 => 247,  275 => 246,  270 => 245,  268 => 244,  249 => 227,  243 => 222,  240 => 221,  223 => 205,  179 => 163,  172 => 154,  165 => 149,  155 => 143,  148 => 139,  137 => 130,  131 => 127,  128 => 126,  119 => 117,  115 => 116,  109 => 113,  105 => 112,  99 => 108,  81 => 90,  71 => 81,  64 => 77,  49 => 66,  43 => 60,  36 => 52,  33 => 45,  31 => 44,  28 => 43,  26 => 5,  23 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/css/easyadmin.css.twig", "/homepages/14/d740445017/htdocs/vendor/easycorp/easyadmin-bundle/src/Resources/views/css/easyadmin.css.twig");
    }
}
