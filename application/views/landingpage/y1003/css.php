
<script>
    function reveal() {
        for (var a = 0; a < view_elements.length; a++) {
            var b = 0,
                    c = view_elements[a];
            do
                isNaN(c.offsetTop) || (b += c.offsetTop);
            while (c = c.offsetParent);
            var d = window.pageYOffset,
                    e = window.innerHeight,
                    c = view_elements[a];
            window.pageXOffset, window.innerWidth;
            b >= d && d + e >= b && (view_elements[a].classList.remove("hide-background-image"), view_elements.splice(a, 1), a--)
        }
    }

    function qazy_list_maker() {
        for (var a = document.getElementsByClassName("hide-background-image"), b = 0; b < a.length; b++)
            view_elements.push(a[b])
    }
    var view_elements = [];
    window.addEventListener("resize", reveal, !1), window.addEventListener("scroll", reveal, !1);
    var intervalObject = setInterval(function () {
        qazy_list_maker()
    }, 50);
    window.addEventListener("load", function () {
        clearInterval(intervalObject), qazy_list_maker(), reveal();
    }, !1);
</script>
<script>
    var loadCSSFiles = function () {
        var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Arima+Madurai:300,400,700|Roboto:300,400,700|Baloo+Bhaina|Montserrat:300,400,600,700&amp;subset=latin-ext,vietnamese';
        var linkElement = document.createElement('link');
        linkElement.rel = 'stylesheet';
        linkElement.href = links;
        document.getElementsByTagName('head')[0].appendChild(linkElement);
    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) {
        raf(loadCSSFiles);
    } else {
        window.addEventListener('load', loadCSSFiles);
    }
</script>
<style id="lp-css-page">
    .popup.ladi-popup-form,
    .popup.ladi-popup-form .popup-title,
    body {
        font-family: "Open Sans", sans-serif
    }

    .closePop,
    .widget-element[lp-type=contact_form].bold-label label {
        font-weight: 700
    }

    *,
    a,
    abbr,
    acronym,
    address,
    applet,
    article,
    aside,
    audio,
    b,
    big,
    blockquote,
    body,
    canvas,
    caption,
    center,
    cite,
    code,
    dd,
    del,
    details,
    dfn,
    div,
    dl,
    dt,
    em,
    embed,
    fieldset,
    figcaption,
    figure,
    footer,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    header,
    hgroup,
    html,
    i,
    img,
    ins,
    kbd,
    label,
    legend,
    li,
    mark,
    menu,
    nav,
    object,
    ol,
    output,
    p,
    pre,
    q,
    ruby,
    s,
    samp,
    section,
    small,
    span,
    strike,
    strong,
    sub,
    summary,
    sup,
    table,
    tbody,
    td,
    tfoot,
    th,
    thead,
    time,
    tr,
    tt,
    u,
    ul,
    var,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        vertical-align: baseline;
        background: 0 0;
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    section,
    summary {
        display: block
    }

    ol,
    ul {
        list-style: none
    }

    blockquote,
    q {
        quotes: none
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    a {
        cursor: pointer;
        text-decoration: none
    }

    body {
        font-size: 13px;
        line-height: 18px;
        background: #fafafa;
        color: #000
    }

    .widget-element {
        position: absolute;
        z-index: 1
    }

    .widget-element .widget-content {
        text-rendering: unset!important;
        width: 100%;
        height: 100%;
        word-break: break-word;
        overflow-wrap: break-word;
        word-wrap: break-word;
        display: inline-block;
        letter-spacing: 0
    }

    .widget-element i.widget-content {
        font-style: normal
    }

    .widget-element[lp-type=item_menu] .widget-content:first-child {
        display: table-cell;
        vertical-align: middle;
        text-align: center
    }

    .widget-element[lp-type=textinline] .widget-content {
        width: 100%;
        height: 100%;
        min-height: 35px;
        background: 0 0!important
    }

    .widget-element[lp-type=textparagraph] .widget-content {
        width: 100%;
        height: 100%;
        min-height: 10px;
        background: 0 0!important
    }

    .widget-element[lp-type=slider] {
        overflow: hidden
    }

    .widget-element[lp-type=item_slider] {
        top: 0
    }

    .widget-element[lp-type=group-tmp] {
        border: 1px dashed #00a52e
    }

    .widget-group .widget-content[lp-type=content-group] {
        width: 100%;
        height: 100%
    }

    .widget-section {
        width: 100%!important;
        height: 300px;
        margin: 0;
        padding: 0;
        float: left;
        position: relative;
        background: #fafafa
    }

    .widget-section[lp-popup=true] {
        width: 100%;
        height: 100vh!important;
        background: rgba(0, 0, 0, .5)!important;
        display: block;
        justify-content: center;
        align-items: center;
        z-index: 99999;
        position: fixed!important;
        top: 0!important;
        left: 0!important;
        border: 0!important;
        overflow-x: hidden;
        overflow-y: scroll;
        right: 0;
        bottom: 0;
        behavior: "smooth"
    }

    .widget-section[lp-popup=true] .container {
        background: #fff;
        position: relative;
        margin: 0 auto 40px
    }

    .widget-element[lp-type=button] {
        cursor: pointer;
        border-radius: 0;
        display: table!important;
        text-align: center;
        font-size: 20px;
        height: 50px;
        width: 100%;
        position: absolute
    }

    .widget-element[lp-type=button]>.widget-content {
        display: table-cell;
        vertical-align: middle
    }

    .widget-element[lp-type=shape]>.widget-content {
        background: 0 0
    }

    .widget-element[lp-type=contact_form] .item {
        width: 100%;
        position: relative
    }

    .widget-element[lp-type=contact_form] label {
        margin: 8px 0;
        display: block;
        font-weight: 700;
        font-size: 13px
    }

    .widget-element[lp-type=contact_form] input {
        -webkit-appearance: none;
        -moz-appearance: none
    }

    .widget-element[lp-type=contact_form] input,
    select,
    textarea {
        width: 100%;
        color: #666;
        font-size: 13px;
        border: 1px solid #eee;
        padding: 8px 5px;
        font-family: "Open Sans", sans-serif
    }

    .widget-element[lp-type=contact_form] button {
        border: 0;
        cursor: pointer;
        background: #3d9be9;
        padding: 10px 15px;
        color: #fff;
        font-size: 17px;
        width: 100%
    }

    .widget-element[lp-type=contact_form].left-label .item {
        position: relative
    }

    .widget-element[lp-type=contact_form].left-label label {
        display: inline-block;
        margin-right: 10px;
        position: absolute;
        top: 0;
        max-width: 95px;
        overflow: hidden;
        line-height: 18px;
        height: 22px;
        padding: 4px
    }

    .widget-element[lp-type=contact_form].left-label input,
    .widget-element[lp-type=contact_form].left-label textarea {
        max-width: calc(100% - 120px);
        margin-left: 120px
    }

    .widget-element[lp-type=contact_form].left-label button {
        float: right;
        display: inline-block;
        width: auto
    }

    .widget-element[lp-type=contact_form].hide-label label {
        display: none
    }

    .widget-element[lp-type=contact_form].input-radius input,
    .widget-element[lp-type=contact_form].input-radius textarea {
        border-radius: 7px
    }

    .widget-element[lp-type=menu-header][lp-navigation=true] .menuMobile,
    .widget-element[lp-type=menu-header][lp-navigation=true] .menuMobile>div {
        width: 100%;
        height: 100%
    }

    @media(max-width:959px) {
        .container {
            height: 100%;
            width: 375px;
            margin: 0 auto;
            padding: 0;
            position: relative
        }
        .widget-element[lp-type=menu-header][lp-navigation=true] {
            width: 50px;
            height: 50px
        }
        .widget-element[lp-type=menu-header][lp-navigation=true] .widget-element[lp-type=item_menu] {
            position: static;
            width: 100vw!important
        }
        .widget-element[lp-type=menu-header][lp-navigation=true] .widget-element[lp-type=item_menu] a {
            display: table-cell!important;
            vertical-align: middle
        }
        .widget-element[lp-type=menu-header] .menuMobile div {
            display: none
        }
    }

    @media(min-width:768px) {
        .container {
            height: 100%;
            width: 960px;
            margin: 0 auto;
            padding: 0;
            position: relative
        }
        .widget-element[lp-type=menu-header] .menuMobile {
            display: none
        }
    }

    @media(min-width:960px) {
        .container {
            height: 100%;
            width: 960px;
            margin: 0 auto;
            padding: 0;
            position: relative
        }
        .widget-element[lp-type=menu-header] .menuMobile {
            display: none
        }
    }

    .widget-element[lp-type=menu-header] {
        z-index: 999
    }

    .widget-element[lp-type=image] {
        width: 150px;
        height: 150px
    }

    .widget-element[lp-type=image] img {
        width: 100%;
        height: 100%
    }

    .widget-element[lp-type=slide_show] .widget-content {
        position: relative;
        margin: 0 auto 60px;
        padding: 0;
        width: 100%;
        height: 100%
    }

    .widget-element[lp-type=slide_show] .item_slide {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        float: left
    }

    .widget-element[lp-type=slide_show] .item_slide li {
        width: 100%;
        height: 100%;
        float: left;
        display: none;
        position: absolute
    }

    .widget-element[lp-type=slide_show] .item_slide li:first-child {
        display: block
    }

    .widget-element[lp-type=slide_show] .item_slide .desc {
        position: absolute;
        left: 0;
        bottom: 0;
        background: rgba(80, 80, 80, .75);
        width: 100%;
        height: 50px;
        overflow: hidden;
        overflow-y: scroll;
        padding: 5px 10px;
        color: #fff;
        display: none
    }

    .lp-popup-pub,
    .widget-element[lp-type=facebook_messages]>.widget-content,
    .widget-element[lp-type=image]>.widget-content {
        overflow: hidden
    }

    .widget-element[lp-type=slide_show] .item_slide .desc span {
        color: #FFF;
        display: block;
        font-size: .85em;
        padding: 10px
    }

    .widget-element[lp-type=slide_show] .item_slide li .main-slide {
        width: 100%;
        max-width: 960px;
        height: 100%;
        margin: 0 auto;
        position: relative
    }

    .widget-element[lp-type=slide_show] .item_slide li img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute
    }

    .widget-element[lp-type=slide_show] .control_slide i,
    .widget-element[lp-type=slide_show] .control_slide svg {
        font-size: 32px;
        line-height: 32px;
        width: 32px;
        height: 32px
    }

    .widget-element[lp-type=slide_show] .control_slide .control_left,
    .widget-element[lp-type=slide_show] .control_slide .control_right {
        width: 32px;
        height: 32px;
        position: absolute;
        top: 50%;
        margin-top: -16px;
        outline: 0;
        z-index: 9999;
        color: #eee;
        background: rgba(0, 0, 0, .2);
        border-radius: 50%;
        text-align: center;
        cursor: pointer
    }

    .widget-element[lp-type=slide_show] .control_slide .control_left {
        left: 10px
    }

    .widget-element[lp-type=slide_show] .control_slide .control_right {
        right: 10px
    }

    .widget-element[lp-type=slide_show] .control_slide .control_left:hover,
    .widget-element[lp-type=slide_show] .control_slide .control_right:hover {
        background: rgba(0, 0, 0, .4)
    }

    .widget-element[lp-type=slide_show] .pager {
        position: absolute;
        bottom: -30px;
        width: 100%;
        text-align: center;
        display: none
    }

    .widget-element[lp-type=slide_show] .pager .pager-item {
        display: inline-block
    }

    .widget-element[lp-type=slide_show] .pager a {
        text-indent: -9999px;
        display: block;
        width: 10px;
        height: 10px;
        margin: 0 5px;
        outline: 0;
        border-radius: 5px;
        background: #666
    }

    .widget-element[lp-type=slide_show] .pager a.active,
    .widget-element[lp-type=slide_show] .pager a:hover {
        background: #000
    }

    .widget-element[lp-type=slide_show].pager-white .pager a {
        background: #fff
    }

    .widget-element[lp-type=slide_show].pager-white .pager a.active,
    .widget-element[lp-type=slide_show].pager-white .pager a:hover {
        background: #eee
    }

    .widget-element[lp-type=slide_show].hide-caption .desc,
    .widget-element[lp-type=slide_show].hide-direction .control_slide,
    .widget-element[lp-type=slide_show].hide-pager .pager {
        display: none
    }

    .widget-element[lp-type=slide_show].no-border .widget-content {
        box-shadow: none;
        border: 0
    }

    .screen-overlay {
        background: rgba(0, 0, 0, .8);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 150!important;
        display: block
    }

    span.formHintBubble:after {
        height: 0;
        width: 0;
        position: absolute;
        margin-left: -15px;
        bottom: 0;
        z-index: 9;
        border-color: #323232 transparent #32323200;
        border-style: solid;
        border-width: 7px;
        content: "";
        margin-bottom: -14px;
        left: 25px
    }

    div[lp-type=countdown] .widget-content>div {
        width: 25%;
        height: 100%;
        float: left;
        display: table
    }

    div[lp-type=countdown] .widget-content>div>span {
        display: table-cell;
        vertical-align: middle;
        text-align: center
    }

    div[lp-type=linevertical] .widget-content .linevertical {
        height: 100%
    }

    div[lp-type=line] .widget-content .line {
        width: 100%;
        height: 1px
    }

    .important,
    .important .widget-content {
        width: 100%!important;
        height: 100%!important
    }

    .important {
        top: 0!important;
        left: 0!important;
        transform: rotate(0)!important;
        mozTransform: rotate(0)!important;
        msTransform: rotate(0)!important;
        webkitTransform: rotate(0)!important;
        oTransform: rotate(0)!important
    }

    .lp-overlay-popup,
    .lp-popup-pub {
        width: 100%;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0
    }

    .lp-popup-pub {
        z-index: 999999999;
        overflow-y: scroll
    }

    .lp-overlay-popup {
        z-index: 99999999;
        background: rgba(0, 0, 0, .5)
    }

    .lp-popup-pub .container {
        background: #fff
    }

    .lp-popup-pub .widget-section {
        margin: 50px auto;
        background: rgba(0, 0, 0, 0)!important;
        background-image: url()!important
    }

    .closePop {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQwMzBEODQ2NkVCMjExRTdBREFEQTM5NDRBRTAwNDkwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQwMzBEODQ3NkVCMjExRTdBREFEQTM5NDRBRTAwNDkwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDAwQUIzRTA2RUIyMTFFN0FEQURBMzk0NEFFMDA0OTAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDAzMEQ4NDU2RUIyMTFFN0FEQURBMzk0NEFFMDA0OTAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6EnkxkAAABbklEQVR42mIUEhJl4uHmZP70+RMnHy/fdwYSAEzPl6/f/4INYefkljp/4VJzdkG5PLEGeHj5GoH0gNhgQQEBAb77Dx5N/A8Ev3//vtPZO1VFTlaOFRcGqU9LzzYHqQXpAekFiTOACJBmmATMMJAGQoaA6H0HT8jBDSLGMHyGoBiEzTCQRpAB2AxBDwIGdKdjMywgONwTnyEgzAg2DS1GwsKjNadOmbCUhYVF+c+fP3dB4jB236RZHlMndD5Ej0lmfn5+ZmQBdnb2P+fOnfnw8NGzQ54ebo4gA5iYmIRghrQ3V78CqUE3iImUBHj31jVhXHIYLsLmtX///r0HsUEuBLkU5GIMVxFKJ6CAxSaGns4YCBlCUvQToxBb0kBWAzaIkCHEGIaRaZGTPS6MbBgs0zKLiYr9mzRpwuGIyGjui1duZSTEhD0nlAxOnzj68S8j5xZpKQkGe1ubElB5xAgq2ECSoHKJgQwAMgREAwQYAMyAsyyW5hiCAAAAAElFTkSuQmCC);
        cursor: pointer;
        top: 10px!important;
        right: 10px!important;
        position: fixed;
        z-index: 99999998;
        width: 18px;
        height: 18px;
        color: transparent
    }

    .widget-element[lp-type=menu-header] .widget-content li[lp-item-show=hide] {
        display: none
    }

    .widget-element[lp-type=image] img {
        object-fit: cover
    }

    .popup.ladi-popup-form {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        background-color: rgba(0, 0, 0, .5)
    }

    .popup.ladi-popup-form .popup-header {
        position: relative;
        background: #009FE3;
        padding: 15px 20px
    }

    .popup.ladi-popup-form .popup-dialog {
        border-radius: 8px!important;
        width: 600px;
        min-height: 200px;
        min-width: 600px;
        max-width: 1400px;
        overflow: hidden;
        position: absolute;
        top: 25%;
        left: 0;
        right: 0;
        margin: 0 auto;
        background: #fff
    }

    .popup.ladi-popup-form .popup-title {
        margin: 0;
        color: #fff
    }

    .popup.ladi-popup-form button {
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 20px;
        color: #fff;
        background: 0 0;
        border: 0;
        font-size: 25px
    }

    .popup.ladi-popup-form .popup-content {
        padding: 30px 20px;
        color: rgba(6, 21, 40, .8);
        text-align: center
    }

    .popup.ladi-popup-form .popup-content p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        padding: 0;
        margin: 0;
        font-size: 20px
    }

    @media(max-width:767px) {
        .popup.ladi-popup-form .popup-dialog {
            width: 300px;
            min-width: 300px
        }
    }

    .control-slider-left,
    .control-slider-right {
        position: absolute;
        z-index: 9999;
        top: calc(50% - 15px);
        width: 19px;
        height: 39px;
        cursor: pointer
    }

    .control-slider-left {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAnCAYAAADtu3N3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA25pVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpCNjlCRUVFNTZFQjAxMUU3ODYyN0ZDRTE3QzAxQzA4MCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpERDkwOUM5QzZFQjAxMUU3QTg4MTlERTQ3M0Q1OUQzMyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpERDkwOUM5QjZFQjAxMUU3QTg4MTlERTQ3M0Q1OUQzMyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNSAoV2luZG93cykiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpkZDBlM2QwZC1mMWUxLWQ4NGYtOGMwZi0zY2NjNjQzZTY1NGIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjY5QkVFRTU2RUIwMTFFNzg2MjdGQ0UxN0MwMUMwODAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz51tYnBAAADDUlEQVR42mL8//8/g29WEQMp4NjKJUz//v3mcXB2t169YslkFhYW5R8/f3UzMZABQAYxMjLrTJ82tQlkEFDoUGhhRRnJhl3aspZVVExScNGylckSYsImf4Hg6fPXqSA5JlK9x87JLRUWFurh7e6UCBJ7/uJVTEZz+y2SDQN5783rV9IN9bWljEAACqfM1u4VMHmiDTuyfD4fKJzOnT9fCQqnP3/+3N2062Q9shomUsJpweLlfgrysj6gcHr5+r3X4u3rv5NkGCicPn3+xKmtq6fl7eFUAhJjZmbOhIUTSYbBksHsmTP6gIYwf/7ydT0wXc7GppaJGO9t2rKjRkRYQAMUTp8/f0/CpZ4Fn0GgZJCTVxxhY2XiCcwp/1+/eRud3tz5AZceJkLhlJUeD06QT5+/qk9r6jyJzydMxGaXzJbOZkLhy4QrnFZu2hGJnl1IMgw5u7hYG2ejZxeSDAN5DxROuLIL0YbBskt/b3cWruxClGHEZheiDCM2uxBlGB8v3/eD+/Z8fP32w3moeAw5JTDYsC9fv//9///vlcys7DqQF4FCdtNrymvJMswqPOYfyHVXL1+6NnXGgmqQmLSkWOOsunJzkg0DAT2f4N8/v399NmVS74ojx85sByUNURHhpTNrqwRINgxm4OtXz9/7+Xi0vHn74QYoifDycs4jyzCwABPrFxFRsaep6RlFoPDj5eEO3DytL5Usw0DhB/IuKPy27tjXAxIDmjl9Rm2lGsmGIXs3ITZy04OHj7eASlhxUcFtsZ6BnCQbBgI2kYmfQMmlsLh0GihrgcLPz828kSzDYOEH8m5DY3M3qKTlYGcrnV5dGkGWYbDwW7Vq9Y6tO/fNB4lJSogtwRV+BGsnWPjFRYXPffHq7RlQ+ElLis4myzCYd2HZDRR+oOy2ur+jiyzDkLPbtJkLwa4Chd+06lJ3kg3Dlt3A4ScuOhU5u5HUCiKU3Uhu7MHCD1t2I9kw5PCDZTdgEpwJSi5ktWlh4QfLbqDiSliIP4Usw2AGgrzr5uae8+Tp80hQAxkgwAD+Y9slwtqyIgAAAABJRU5ErkJggg==);
        left: 30px
    }

    .control-slider-left svg,
    .control-slider-right svg {
        margin-top: 2px;
        fill: rgba(0, 0, 0, .3);
        display: none
    }

    .control-slider-right {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAnCAYAAADtu3N3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjdGODg0MDRBNkVBRTExRTdCRjRCQjY2Qzc4RDQ5NjJFIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjdGODg0MDRCNkVBRTExRTdCRjRCQjY2Qzc4RDQ5NjJFIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6N0Y1MTAyNzA2RUFFMTFFN0JGNEJCNjZDNzhENDk2MkUiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6N0Y1MTAyNzE2RUFFMTFFN0JGNEJCNjZDNzhENDk2MkUiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5AB837AAADFklEQVR42mL8//8/w4+fv7o42NlK//z5czc0Iib3wN6dR5mYWL9Yhcf8YyABMIGI0MKKMiB1iIWFRXn6tKlNjIzMOv/+/eZhIBEwwRhPn79O/QsEEmLCJouWrUwWFZMUvLRlLStZhmU0t996/uJVDIjt7e6UGBYW6sHOyS11bOUSJpINA4HM1u4VwPDrZgSChvra0jevX0mT4l0MWzftOlkPighQ+J07f74SFH5Hls/nI8uwxdvXf3/5+r0XKPwU5GV9Fixe7kds+GEND1D4MTMzZ4LDz8OpRFtXT+vT50+chMIPp6RvVtHsz1++rgcayjx75ow+YpILXps+f/6eBAo/EWEBjU1bdtQQ8i5ew9Kb2z68fvM2GphL/ttYmXjm5BVHgJILLgMJpqG0ps6TT5+/qgexs9LjU/GFH1EJMrOls5mY7EZ06kbObis37YjEFn5EG4ac3VysjbOxZTcmUjIyenYDhR+yd5lILWaQs1t/b3cWcnYj2TB82Y1kw/BlN7IMgwJwZLx+++H8wX17PvLx8n0ny7DpNeW1QMoO5NXMrOy6////Xvny9ftfkg2bVVduLi0p1ghiT52xoPrq5UvXQK4CVT4spBg0s7ZKQFREYCkoaRw5dmb7lEm9K35+//pMzyf4N0ieJMN4eTnngZLEm7cfbvj5eLQAvffeJjLxN8npbPO0vlReHu5AUDilpmcUiYiKPQXVrSRnpxm1lWpAM6aD2Ft37OsBhRPIe+iVNEFvxnoGcoqLCm4DlbgPHj7ekhAbuQnde0S7zM/NvBEUTqAsVFhcOg2UDIAGfSK5cJxeXRoBaoOAStqGxuZukPfQw4kob4LCSUJMaAk4nHbum79q1eod2MKJKMOkJUVnAynmF6/enomLCp+LK5wIenN1f0cXKLuAwgmWXfB5D6fLplWXuoPCCcyeuXA2LLsAU/k/kgwDZRcxUYGpIDa27EKSYYSyC9GGgbILkIJnF2LDCcMwUDIAJqWZwMIAnl2IDSeM2BQW4k8BFSuw7EJKOGFtID95+jzSzc09B+Q9cgwCAYAAAwDRmt4KYtvcrgAAAABJRU5ErkJggg==);
        right: 30px
    }

    .widget-element[lp-type=listop] ol.widget-content {
        counter-reset: linum;
        list-style: none;
        padding: 0
    }

    .widget-element[lp-type=listop] ol.widget-content>li:last-child {
        margin-bottom: 0!important
    }

    .widget-element[lp-type=listop] ol.widget-content>li {
        counter-increment: linum;
        word-wrap: break-word
    }

    .widget-element[lp-type=listop] ol.widget-content>li::before {
        float: left;
        clear: left;
        contain: content;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        position: relative;
        left: 0;
        top: 0;
        padding: 0!important
    }

    .widget-element[lp-type=image]>.widget-content {
        overflow: hidden
    }

    .widget-element[lp-type=videoyoutube] .widget-content {
        position: absolute;
        top: 0;
        left: 0;
        vertical-align: middle
    }

    .widget-element[lp-type=videoyoutube] .widget-content embed {
        position: absolute;
        top: 0;
        left: 0
    }

    .widget-element[lp-type=facebook_messages] .lp-close-fb-mes {
        position: absolute;
        z-index: 99999;
        top: 0;
        right: 0;
        width: 30px;
        height: 30px;
        background: #29487d;
        cursor: pointer;
        text-align: center;
        padding: 5px;
        font-size: 16px;
        font-weight: 700;
        color: #fff;
        line-height: 20px
    }

    .widget-element[lp-type=facebook_messages] .lp-open-fb-mes svg {
        width: 30px;
        height: 30px;
        float: left;
        margin-right: 10px
    }

    .widget-element[lp-type=facebook_messages] .lp-open-fb-mes {
        display: none;
        cursor: pointer;
        font-size: 16px;
        z-index: 99999;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 45px;
        padding: 5px 10px;
        color: #fff;
        background: #29487d;
        line-height: 30px
    }

    .widget-element[lp-type=facebook_comment] .widget-content:first-child {
        overflow: auto;
        -webkit-overflow-scrolling: touch
    }

    ;
    .widget-element input,
    
    .widget-element textarea,
    
    body input,
    
    body textarea {
        font-family: "Open Sans", sans-serif!important
    }

    ;
    input::-webkit-input-placeholder {
        font-family: "Open Sans", sans-serif
    }

    input:-moz-placeholder {
        font-family: "Open Sans", sans-serif
    }

    input::-moz-placeholder {
        font-family: "Open Sans", sans-serif
    }

    input::-ms-input-placeholder {
        font-family: "Open Sans", sans-serif
    }

    textarea::-webkit-input-placeholder {
        font-family: "Open Sans", sans-serif
    }

    textarea:-moz-placeholder {
        font-family: "Open Sans", sans-serif
    }

    textarea::-moz-placeholder {
        font-family: "Open Sans", sans-serif
    }

    textarea::-ms-input-placeholder {
        font-family: "Open Sans", sans-serif
    }

    .fb-comments iframe {
        overflow: inherit!important
    }

    .widget-element[lp-type=item_form] .widget-content {
        font-family: "Open Sans", sans-serif
    }

    @media(max-width:767px) {
        .container {
            width: 375px;
            margin: 0 auto
        }
        .widget-element[lp-type=slider] .widget-element[lp-type=item_slider] {
            display: none
        }
        .widget-element[lp-type=slider] .widget-element[lp-type=item_slider]:nth-child(3) {
            display: block
        }
        .widget-element[lp-type=item_slider] {
            top: 0!important;
            left: auto!important;
            position: relative!important;
            float: left!important;
            display: inline-block!important
        }
    }

    @media(max-width:375px) {
        .container {
            width: 375px;
            margin: 0 auto
        }
    }

    .formHintBubble {
        opacity: .9;
        right: 0;
        bottom: -35px;
        z-index: 999;
        padding: 0 5px;
        border-radius: 10px;
        height: 35px;
        position: absolute;
        background: #323232;
        color: #fff;
        text-align: center;
        line-height: 35px
    }

    .hide-background-image,
    .hide-background-image .container:first-child,
    .hide-background-image .widget-content:first-child,
    .hide-background-image .widget-content:first-child>.lp-show-image {
        background-image: none!important
    }

    .iframeTks {
        display: none!important
    }

    .widget-element[lp-type=slider] .wrap-child {
        position: absolute;
        top: 0;
        width: 20000%;
        height: 100%;
        left: 0
    }

    .wrap-child .widget-item-child[lp-type=item_slider] {
        position: relative!important;
        left: auto!important;
        display: inline-block!important
    }

    .ladi-widget-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    .widget-element[lp-type=customhtml] .ladi-widget-overlay,
    .widget-element[lp-type=googlemap] .ladi-widget-overlay,
    .widget-element[lp-type=videoyoutube] .ladi-widget-overlay,
    .widget-element[lp-type=facebook_messages] .ladi-widget-overlay {
        display: none!important
    }

    @media(max-width:860px) and (min-width:767px) {
        .ladi-wraper-page {
            display: inline
        }
    }

    body {
        width: 100%;
        margin: 0 auto;
        overflow-x: hidden
    }

    .ladi-wraper-page {
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .lp-strikeThrough {
        text-decoration-line: line-through;
        -webkit-text-decoration-line: line-through;
        -moz-text-decoration-line: line-through
    }

    .lp-underline {
        text-decoration-line: underline;
        -webkit-text-decoration-line: underline;
        -moz-text-decoration-line: underline
    }

    .widget-section[lp-popup=true] {
        -webkit-overflow-scrolling: touch
    }

    .widget-section[lp-popup=true]::-webkit-scrollbar {
        width: 0;
        background-color: rgba(0, 0, 0, 0);
        -webkit-border-radius: 100px
    }

    .widget-section[lp-popup=true]::-ms-scrollbar {
        width: 0;
        background-color: rgba(0, 0, 0, 0);
        -webkit-border-radius: 100px
    }

    .widget-section[lp-popup=true]::-moz-scrollbar {
        width: 0;
        background-color: rgba(0, 0, 0, 0);
        -webkit-border-radius: 100px
    }

    .hide-background-image .widget-content:first-child>img {
        display: none;
        visibility: hidden
    }
</style>
<style id="lp-css-ladi">
    @media(min-width:768px) {
        #SECTION2 {
            width: 100%;
            height: 671px;
        }
        #SECTION2 .container {}
        #SECTION2 {}
        #SECTION20 {
            width: 100%;
            height: 845px;
        }
        #SECTION20 .container {}
        #SECTION20 {}
        #SECTION31 {
            width: 100%;
            height: 555px;
        }
        #SECTION31 .container {}
        #SECTION31 {}
        #SECTION108 {
            width: 100%;
            height: 721px;
        }
        #SECTION108 .container {}
        #SECTION108 {}
        #SECTION246 {
            width: 100%;
            height: 758.6666870117188px;
        }
        #SECTION246 .container {}
        #SECTION246 {}
        #SECTION167 {
            width: 297px;
            height: 499px;
        }
        #SECTION167 .container {}
        #SECTION167 {}
        #SECTION195 {
            width: 100%;
            height: 655px;
        }
        #SECTION195 .container {}
        #SECTION195 {}
        #SECTION217 {
            width: 100%;
            height: 939px;
        }
        #SECTION217 .container {}
        #SECTION217 {}
        #POPUP11 {
            width: 100%;
            height: 100%;
        }
        #POPUP11 .container {
            width: 389px;
            height: 434px;
            top: calc(100%-434px);
        }
        #POPUP11 {}
        #BUTTON3 {
            top: 561px;
            left: 0.666687px;
            padding: 0px;
            width: 212px;
            height: 42.66666793823242px;
        }
        #BUTTON3 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #LINE4 {
            top: 365px;
            left: 0.666687px;
            width: 475px;
            height: 25px;
        }
        #HEADLINE5 {
            top: 191px;
            left: 5px;
            padding: 0px;
            width: 606.3333740234375px;
            height: 106.66667175292969px;
        }
        #HEADLINE5 > .widget-content {
            font-size: 45px;
            text-align: left;
        }
        #LISTOP6 {
            top: 445px;
            left: 0.666687px;
            width: 357px;
            height: 94px;
        }
        #LISTOP6 > .widget-content {
            font-size: 16px;
            text-align: left;
        }
        #LISTOP6 > ol.widget-content li::before {
            content: counter(linum, decimal);
            width: 21px;
            height: 21px;
            font-size: 10.5px;
            color: rgba(222, 106, 0, 1);
            margin-right: 15px;
            content: url('data:image/svg+xml;utf8,<svg fill="rgba(222,106,0,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.4-.188-2.794-.688-4.094L26.688 13.5c.2.8.313 1.6.313 2.5 0 6.1-4.9 11-11 11S5 22.1 5 16 9.9 5 16 5c3 0 5.694 1.194 7.594 3.094L25 6.688C22.7 4.388 19.5 3 16 3zm11.28 4.28L16 18.563l-4.28-4.28-1.44 1.437 5 5 .72.686.72-.687 12-12-1.44-1.44z"/> </svg>');
            background-repeat: no-repeat;
            position: relative;
            top: 0px;
            left: 0;
        }
        #LISTOP6 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP6 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #IMAGE7 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848a8821-1512738501975.png);
        }
        #IMAGE7 {
            top: 20px;
            left: 443.334px;
            width: 514.3333740234375px;
            height: 613.3333740234375px;
        }
        #HEADLINE8 {
            top: 321px;
            left: 0.666687px;
            padding: 0px;
            width: 556px;
            height: 53.333335876464844px;
        }
        #HEADLINE8 > .widget-content {
            font-size: 45px;
            text-align: left;
        }
        #IMAGE9 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-blue-216678.png);
        }
        #IMAGE9 {
            top: 132px;
            left: 0px;
            width: 443.3333435058594px;
            height: 40px;
        }
        #HEADLINE10 {
            top: 8px;
            left: 16px;
            padding: 0px;
            width: 371.3333435058594px;
            height: 28px;
        }
        #HEADLINE10 > .widget-content {
            font-size: 24px;
            text-align: left;
        }
        #YOUTUBE21 {
            top: 0px;
            left: -1px;
            width: 957px;
            height: 510px;
        }
        #GROUP22 {
            top: 567.6666870117188px;
            left: 0px;
            width: 299px;
            height: 216px;
        }
        #IMAGE23 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/ad-1512742149725.png);
        }
        #IMAGE23 {
            top: 0px;
            left: 1px;
            width: 299px;
            height: 175px;
        }
        #PARAGRAPH24 {
            top: 196px;
            left: 1px;
            padding: 0px;
            width: 293.3333435058594px;
            height: 20px;
        }
        #PARAGRAPH24 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP25 {
            top: 567.6666870117188px;
            left: 330px;
            width: 299px;
            height: 216px;
        }
        #IMAGE26 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/1-1512742164710.png);
        }
        #IMAGE26 {
            top: 0px;
            left: 1px;
            width: 299px;
            height: 175px;
        }
        #PARAGRAPH27 {
            top: 196px;
            left: 1px;
            padding: 0px;
            width: 293.3333435058594px;
            height: 20px;
        }
        #PARAGRAPH27 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP28 {
            top: 567.6666870117188px;
            left: 661px;
            width: 299px;
            height: 216px;
        }
        #IMAGE29 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848a0348-1512742258554.png);
        }
        #IMAGE29 {
            top: 0px;
            left: 1px;
            width: 299px;
            height: 175px;
        }
        #PARAGRAPH30 {
            top: 196px;
            left: 1px;
            padding: 0px;
            width: 293.3333435058594px;
            height: 20px;
        }
        #PARAGRAPH30 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX32 {
            top: 227px;
            left: 1.17188e-08px;
            width: 304px;
            height: 222px;
        }
        #PARAGRAPH34 {
            top: 132px;
            left: 16px;
            padding: 0px;
            width: 272px;
            height: 20px;
        }
        #PARAGRAPH34 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX35 {
            top: 33px;
            left: 105.646px;
            width: 102.33333587646484px;
            height: 101px;
        }
        #SHAPE50 {
            top: 17.6875px;
            left: 16.97918701171875px;
            width: 71.375px;
            height: 72.6875px;
        }
        #HEADLINE33 {
            top: 143px;
            left: 27px;
            padding: 0px;
            width: 256px;
            height: 21.33333396911621px;
        }
        #HEADLINE33 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #HEADLINE37 {
            top: 69.3333px;
            left: 120.333px;
            padding: 0px;
            width: 774.6875px;
            height: 77.33333587646484px;
        }
        #HEADLINE37 > .widget-content {
            font-size: 72px;
            text-align: center;
        }
        #BOX44 {
            top: 229px;
            left: 656px;
            width: 304px;
            height: 222px;
        }
        #HEADLINE45 {
            top: 130px;
            left: 32.6667px;
            padding: 0px;
            width: 256px;
            height: 42.66666793823242px;
        }
        #HEADLINE45 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #BOX39 {
            top: 226.751px;
            left: 335.667px;
            width: 304px;
            height: 222px;
        }
        #HEADLINE40 {
            top: 132.5px;
            left: 26.6667px;
            padding: 0px;
            width: 256px;
            height: 42.66666793823242px;
        }
        #HEADLINE40 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #BOX51 {
            top: 26.375px;
            left: 108.667px;
            width: 102.33333587646484px;
            height: 101px;
        }
        #SHAPE52 {
            top: 17.3125px;
            left: 16.021px;
            width: 71.375px;
            height: 72.6875px;
        }
        #BOX54 {
            top: 20.25px;
            left: 430.98px;
            width: 102.33333587646484px;
            height: 101px;
        }
        #SHAPE55 {
            top: 17.3125px;
            left: 16.021px;
            width: 71.375px;
            height: 72.6875px;
        }
        #HEADLINE109 {
            top: 69px;
            left: 242px;
            padding: 0px;
            width: 500px;
            height: 28px;
        }
        #HEADLINE109 > .widget-content {
            font-size: 24px;
            text-align: center;
        }
        #PARAGRAPH110 {
            top: 110px;
            left: 158px;
            padding: 0px;
            width: 685.3333740234375px;
            height: 42.66666793823242px;
        }
        #PARAGRAPH110 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #GROUP111 {
            top: 225px;
            left: 10px;
            width: 216px;
            height: 161px;
        }
        #GROUP117 {
            top: 293.333px;
            left: 60.6667px;
            width: 166.6666717529297px;
            height: 73.66666793823242px;
        }
        #BOX119 {
            top: 0px;
            left: 33px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE121 {
            top: 39px;
            left: 1px;
            padding: 0px;
            width: 166.6666717529297px;
            height: 34.66666793823242px;
        }
        #HEADLINE121 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP123 {
            top: 296px;
            left: 280px;
            width: 173.33334350585938px;
            height: 73.66666793823242px;
        }
        #BOX125 {
            top: 0px;
            left: 35px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE127 {
            top: 39px;
            left: 1px;
            padding: 0px;
            width: 173.33334350585938px;
            height: 34.66666793823242px;
        }
        #HEADLINE127 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP129 {
            top: 297px;
            left: 515px;
            width: 174.6666717529297px;
            height: 73.66666793823242px;
        }
        #BOX131 {
            top: 0px;
            left: 39px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE133 {
            top: 39px;
            left: 1px;
            padding: 0px;
            width: 174.6666717529297px;
            height: 34.66666793823242px;
        }
        #HEADLINE133 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP135 {
            top: 292.667px;
            left: 757px;
            width: 174px;
            height: 57px;
        }
        #BOX137 {
            top: 0px;
            left: 43px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE139 {
            top: 39px;
            left: 1px;
            padding: 0px;
            width: 173.33334350585938px;
            height: 34.66666793823242px;
        }
        #HEADLINE139 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP141 {
            top: 489px;
            left: 59px;
            width: 165.33334350585938px;
            height: 73.66666793823242px;
        }
        #BOX143 {
            top: 0px;
            left: 34px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE145 {
            top: 39px;
            left: 1px;
            padding: 0px;
            width: 165.33334350585938px;
            height: 34.66666793823242px;
        }
        #HEADLINE145 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP147 {
            top: 490px;
            left: 290px;
            width: 168px;
            height: 57px;
        }
        #BOX149 {
            top: 0px;
            left: 34px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE151 {
            top: 39px;
            left: 1px;
            padding: 0px;
            width: 168px;
            height: 17.33333396911621px;
        }
        #HEADLINE151 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP153 {
            top: 492px;
            left: 516px;
            width: 173px;
            height: 57px;
        }
        #BOX155 {
            top: 0px;
            left: 38px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE157 {
            top: 39px;
            left: 1px;
            padding: 0px;
            width: 172px;
            height: 17.33333396911621px;
        }
        #HEADLINE157 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE120 {
            top: 296.333px;
            left: 99.6667px;
            padding: 0px;
            width: 102.66667175292969px;
            height: 16px;
        }
        #HEADLINE120 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE126 {
            top: 299px;
            left: 321px;
            padding: 0px;
            width: 102.66667175292969px;
            height: 16px;
        }
        #HEADLINE126 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE132 {
            top: 300px;
            left: 560px;
            padding: 0px;
            width: 102.66667175292969px;
            height: 16px;
        }
        #HEADLINE132 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE138 {
            top: 295.667px;
            left: 806px;
            padding: 0px;
            width: 102.66667175292969px;
            height: 16px;
        }
        #HEADLINE138 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE144 {
            top: 492px;
            left: 99px;
            padding: 0px;
            width: 102.66667175292969px;
            height: 16px;
        }
        #HEADLINE144 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE150 {
            top: 493px;
            left: 330px;
            padding: 0px;
            width: 102.66667175292969px;
            height: 16px;
        }
        #HEADLINE150 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE156 {
            top: 495px;
            left: 560px;
            padding: 0px;
            width: 102.66667175292969px;
            height: 16px;
        }
        #HEADLINE156 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #SHAPE160 {
            top: 225.354px;
            left: 114.334px;
            width: 74.97917175292969px;
            height: 56.645835876464844px;
        }
        #SHAPE161 {
            top: 227.521px;
            left: 334.605px;
            width: 74.97917175292969px;
            height: 56.645835876464844px;
        }
        #SHAPE162 {
            top: 227.292px;
            left: 569.667px;
            width: 74.97917175292969px;
            height: 56.645835876464844px;
        }
        #SHAPE163 {
            top: 227.959px;
            left: 816.667px;
            width: 74.97917175292969px;
            height: 56.645835876464844px;
        }
        #SHAPE164 {
            top: 421.25px;
            left: 107.979px;
            width: 74.97917175292969px;
            height: 56.645835876464844px;
        }
        #SHAPE165 {
            top: 423.896px;
            left: 338.958px;
            width: 74.97917175292969px;
            height: 56.645835876464844px;
        }
        #SHAPE166 {
            top: 425.542px;
            left: 571.938px;
            width: 74.97917175292969px;
            height: 56.645835876464844px;
        }
        #SHAPE262 {
            top: 421.646px;
            left: 808.333px;
            width: 74.97917175292969px;
            height: 56.645835876464844px;
        }
        #GROUP263 {
            top: 490.66666412353516px;
            left: 758.3125610351562px;
            width: 172px;
            height: 56.33333396911621px;
        }
        #BOX264 {
            top: 0px;
            left: 38px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE265 {
            top: 39px;
            left: 1px;
            padding: 0px;
            width: 172px;
            height: 17.33333396911621px;
        }
        #HEADLINE265 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE266 {
            top: 491.334px;
            left: 817.313px;
            padding: 0px;
            width: 200px;
            height: 20px;
        }
        #HEADLINE266 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE247 {
            top: 93px;
            left: 36.6667px;
            padding: 0px;
            width: 924px;
            height: 41.333335876464844px;
        }
        #HEADLINE247 > .widget-content {
            font-size: 36px;
            text-align: center;
        }
        #BOX248 {
            top: 0px;
            left: -476px;
            width: 2003px;
            height: 10px;
        }
        #PARAGRAPH250 {
            top: 285px;
            left: 338px;
            padding: 0px;
            width: 517.3333740234375px;
            height: 72px;
        }
        #PARAGRAPH250 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE251 {
            top: 233.333px;
            left: 334.667px;
            padding: 0px;
            width: 500px;
            height: 42.66666793823242px;
        }
        #HEADLINE251 > .widget-content {
            font-size: 18px;
            text-align: left;
        }
        #HEADLINE252 {
            top: 215px;
            left: 370px;
            padding: 0px;
            width: 500px;
            height: 18px;
        }
        #HEADLINE252 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE253 {
            top: 212px;
            left: 335px;
            width: 24px;
            height: 24px;
        }
        #LINE254 {
            top: 382px;
            left: 338.667px;
            width: 618px;
            height: 25px;
        }
        #SHAPE255 {
            top: 422px;
            left: 339.104px;
            width: 24px;
            height: 24px;
        }
        #HEADLINE256 {
            top: 429px;
            left: 372.333px;
            padding: 0px;
            width: 500px;
            height: 18px;
        }
        #HEADLINE256 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE257 {
            top: 464.667px;
            left: 338.542px;
            padding: 0px;
            width: 500px;
            height: 21.33333396911621px;
        }
        #HEADLINE257 > .widget-content {
            font-size: 18px;
            text-align: left;
        }
        #PARAGRAPH258 {
            top: 501px;
            left: 340.104px;
            padding: 0px;
            width: 534.25px;
            height: 96px;
        }
        #PARAGRAPH258 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #LINE259 {
            top: 667px;
            left: 336px;
            width: 627px;
            height: 25px;
        }
        #IMAGE260 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/uploads/images/bfc1d1bf-af34-4fe2-9361-35f7f9120640.png);
        }
        #IMAGE260 {
            top: 207.667px;
            left: -51.7396px;
            width: 390.4375px;
            height: 551px;
        }
        #BOX168 {
            top: 107px;
            left: 8px;
            width: 297px;
            height: 297px;
        }
        #HEADLINE169 {
            top: 89px;
            left: 305.334px;
            padding: 0px;
            width: 636.3333740234375px;
            height: 33.333335876464844px;
        }
        #HEADLINE169 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE171 {
            top: 115px;
            left: 312.333px;
            padding: 0px;
            width: 630.6666870117188px;
            height: 298.66668701171875px;
        }
        #HEADLINE171 > .widget-content {
            font-size: 16px;
            text-align: left;
        }
        #LINE196 {
            top: 166px;
            left: 421.969px;
            width: 119px;
            height: 25px;
        }
        #PARAGRAPH197 {
            top: 129px;
            left: 131px;
            padding: 0px;
            width: 700px;
            height: 20px;
        }
        #PARAGRAPH197 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE198 {
            top: 86px;
            left: 171px;
            padding: 0px;
            width: 618px;
            height: 34px;
        }
        #HEADLINE198 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #GROUP199 {
            top: 232.667px;
            left: 110px;
            width: 300px;
            height: 323px;
        }
        #BOX200 {
            top: 80px;
            left: 1px;
            width: 300px;
            height: 243px;
        }
        #HEADLINE201 {
            top: 103px;
            left: 43px;
            padding: 0px;
            width: 208px;
            height: 20px;
        }
        #HEADLINE201 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE202 {
            top: 130px;
            left: 26px;
            padding: 0px;
            width: 248px;
            height: 16px;
        }
        #HEADLINE202 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #PARAGRAPH203 {
            top: 152px;
            left: 28px;
            padding: 0px;
            width: 236px;
            height: 56px;
        }
        #PARAGRAPH203 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX204 {
            top: 0px;
            left: 77px;
            width: 155px;
            height: 155px;
        }
        #GROUP205 {
            top: 233px;
            left: 561px;
            width: 300px;
            height: 323px;
        }
        #BOX206 {
            top: 80px;
            left: 1px;
            width: 300px;
            height: 243px;
        }
        #HEADLINE207 {
            top: 103px;
            left: 43px;
            padding: 0px;
            width: 208px;
            height: 20px;
        }
        #HEADLINE207 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE208 {
            top: 130px;
            left: 26px;
            padding: 0px;
            width: 248px;
            height: 16px;
        }
        #HEADLINE208 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #PARAGRAPH209 {
            top: 152px;
            left: 28px;
            padding: 0px;
            width: 236px;
            height: 56px;
        }
        #PARAGRAPH209 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX210 {
            top: 0px;
            left: 77px;
            width: 155px;
            height: 155px;
        }
        #BOX218 {
            top: 142.333px;
            left: 288px;
            width: 385px;
            height: 504px;
        }
        #GROUP220 {
            top: 109px;
            left: 40px;
            width: 298px;
            height: 98px;
        }
        #GROUP221 {
            top: 0px;
            left: 1.8125px;
            width: 294.34375px;
            height: 98px;
        }
        #BOX222 {
            top: 28px;
            left: 1px;
            width: 68.453125px;
            height: 70px;
        }
        #HEADLINE223 {
            top: 0px;
            left: 6.25px;
            padding: 0px;
            width: 61.4375px;
            height: 18px;
        }
        #HEADLINE223 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE224 {
            top: 0px;
            left: 81.265625px;
            padding: 0px;
            width: 61.4375px;
            height: 18px;
        }
        #HEADLINE224 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX225 {
            top: 28px;
            left: 76px;
            width: 68.453125px;
            height: 70px;
        }
        #BOX226 {
            top: 28px;
            left: 226.890625px;
            width: 68.453125px;
            height: 70px;
        }
        #HEADLINE227 {
            top: 0px;
            left: 228.171875px;
            padding: 0px;
            width: 61.4375px;
            height: 18px;
        }
        #HEADLINE227 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE228 {
            top: 0px;
            left: 156.171875px;
            padding: 0px;
            width: 61.4375px;
            height: 18px;
        }
        #HEADLINE228 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX229 {
            top: 28px;
            left: 150.875px;
            width: 68.453125px;
            height: 70px;
        }
        #COUNTDOWN230 {
            top: 40px;
            left: 1px;
            width: 298px;
            height: 43px;
        }
        #COUNTDOWN230 > .widget-content {
            font-size: 36px;
        }
        #GROUP231 {
            top: 241px;
            left: 40px;
            width: 301px;
            height: 224.95833587646484px;
        }
        #FORM233 {
            top: 0px;
            left: 2px;
            width: 300px;
            height: 163.9375px;
        }
        #FORM233 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM234 {
            top: 0px;
            left: 0px;
            width: 300px;
            height: 46.140625px;
        }
        #ITEM_FORM234 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM235 {
            top: 58.9268px;
            left: 0px;
            width: 300px;
            height: 46.140625px;
        }
        #ITEM_FORM235 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM236 {
            top: 117.854px;
            left: 0px;
            width: 300px;
            height: 46.140625px;
        }
        #ITEM_FORM236 > .widget-content {
            font-size: 16px;
        }
        #BUTTON232 {
            top: 175.625px;
            left: 1px;
            padding: 0px;
            width: 300px;
            height: 49.333335876464844px;
        }
        #BUTTON232 > .widget-content {
            font-size: 23px;
            text-align: center;
        }
        #HEADLINE219 {
            top: 17px;
            left: 18.66668701171875px;
            padding: 0px;
            width: 340px;
            height: 53.333335876464844px;
        }
        #HEADLINE219 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #HEADLINE245 {
            top: 72px;
            left: 109.5px;
            padding: 0px;
            width: 200px;
            height: 37.333335876464844px;
        }
        #HEADLINE245 > .widget-content {
            font-size: 32px;
            text-align: left;
        }
        #PARAGRAPH267 {
            top: 778.333px;
            left: 186px;
            padding: 0px;
            width: 280px;
            height: 112px;
        }
        #PARAGRAPH267 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #FORM15 {
            top: 159px;
            left: 46.5px;
            width: 300px;
            height: 164.109375px;
        }
        #FORM15 > .widget-content {
            font-size: 14px;
        }
        #ITEM_FORM16 {
            top: 0px;
            left: 0px;
            width: 300px;
            height: 44.015625px;
        }
        #ITEM_FORM16 > .widget-content {
            font-size: 14px;
        }
        #ITEM_FORM17 {
            top: 58.7167px;
            left: 0px;
            width: 300px;
            height: 44.015625px;
        }
        #ITEM_FORM17 > .widget-content {
            font-size: 14px;
        }
        #ITEM_FORM18 {
            top: 120.103px;
            left: 0px;
            width: 300px;
            height: 44.015625px;
        }
        #ITEM_FORM18 > .widget-content {
            font-size: 14px;
        }
        #BOX12 {
            top: 0px;
            left: -0.5px;
            width: 390px;
            height: 124px;
        }
        #HEADLINE13 {
            top: 36px;
            left: 97px;
            padding: 0px;
            width: 266.66668701171875px;
            height: 84px;
        }
        #HEADLINE13 > .widget-content {
            font-size: 21px;
            text-align: left;
        }
        #SHAPE14 {
            top: 36px;
            left: 34px;
            width: 50px;
            height: 50px;
        }
        #BUTTON19 {
            top: 352px;
            left: 46.5198px;
            padding: 0px;
            width: 294.66668701171875px;
            height: 58.66666793823242px;
        }
        #BUTTON19 > .widget-content {
            font-size: 25px;
            text-align: center;
        }
    }

    #SECTION2 {
        display: block;
        background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/product_bg.png");
        background-color: rgba(0, 251, 94, 0.18);
        background-origin: content-box;
        background-size: auto 100%;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: repeat;
    }

    #SECTION2 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0);
    }

    #SECTION20 {
        display: block;
        background-color: rgba(255, 255, 255, 1);
    }

    #SECTION31 {
        display: block;
        background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/lotus-1205631_1920-1512742821196.jpg");
        background-color: rgba(17, 16, 25, 1);
        background-size: cover;
        background-attachment: fixed;
        background-position: top right;
        background-repeat: no-repeat;
    }

    #SECTION31 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #SECTION108 {
        display: block;
        background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-2959233_1920-1512744521408.jpg");
        background-color: rgba(255, 255, 255, 1);
        background-size: cover;
        background-attachment: fixed;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #SECTION108 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #SECTION246 {
        display: block;
        background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/stock.jpg");
        background-color: rgba(23, 23, 23, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #SECTION246 > .ladi-widget-overlay {
        background-color: rgba(3, 2, 2, 0.82);
    }

    #SECTION167 {
        display: block;
        background-color: rgba(0, 188, 212, 0.2);
    }

    #SECTION195 {
        display: block;
        background-image: url("https://static.ladipage.net/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
        background-color: rgba(255, 255, 255, 0);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #SECTION195 > .ladi-widget-overlay {
        background-color: rgba(31, 31, 31, 0.89);
    }

    #SECTION217 {
        display: block;
        background-image: url("https://static.ladipage.net/uploads/images/5a8563a5-5f68-4470-b806-42ec62e2cac6.jpg");
        background-color: rgba(255, 255, 255, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #SECTION217 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0);
    }

    #POPUP11 .container {
        display: block;
        background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg-1.png");
        background-color: rgba(237, 237, 237, 1);
        background-origin: content-box;
        background-size: auto 100%;
        background-attachment: scroll;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #POPUP11 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0);
    }

    #BUTTON3 {
        display: table;
    }

    #BUTTON3 > .widget-content {
        background-color: rgba(247, 89, 0, 1);
        color: #ffffff;
        font-weight: 600;
        line-height: 22px;
        box-shadow: 0px 1px 0px rgba(237, 78, 116, 1);
    }

    #BUTTON3> .widget-content {
        border-radius: 35px;
    }

    #BUTTON3> .ladi-widget-overlay {
        border-radius: 35px;
    }

    #LINE4 {
        display: block;
    }

    #LINE4>.widget-content .line {
        border-top-width: 2px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: dashed;
        border-color: rgba(56, 56, 56, 1);
        margin-top: 10.5px;
    }

    #LINE4 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE5 {
        display: block;
    }

    #HEADLINE5 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Arima Madurai';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 87, 34, 1);
        font-weight: 600;
        line-height: 54px;
    }

    #LISTOP6 {
        display: block;
    }

    #LISTOP6 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(56, 56, 56, 1);
        font-weight: 600;
        line-height: 22px;
    }

    #IMAGE7 {
        display: block;
    }

    #IMAGE7 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE7 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #HEADLINE8 {
        display: block;
    }

    #HEADLINE8 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Arima Madurai';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(56, 56, 56, 1);
        font-weight: 600;
        line-height: 54px;
    }

    #IMAGE9 {
        display: block;
    }

    #IMAGE9 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE9 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #HEADLINE10 {
        display: block;
    }

    #HEADLINE10 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Baloo Bhaina';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 28px;
        letter-spacing: 1px;
    }

    #YOUTUBE21 {
        display: block;
    }

    #YOUTUBE21 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #GROUP22 {
        display: block;
    }

    #GROUP22 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE23 {
        display: block;
    }

    #IMAGE23 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE23 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #PARAGRAPH24 {
        display: block;
    }

    #PARAGRAPH24 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(64, 64, 64, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #GROUP25 {
        display: block;
    }

    #GROUP25 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE26 {
        display: block;
    }

    #IMAGE26 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE26 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #PARAGRAPH27 {
        display: block;
    }

    #PARAGRAPH27 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(64, 64, 64, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #GROUP28 {
        display: block;
    }

    #GROUP28 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE29 {
        display: block;
    }

    #IMAGE29 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE29 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #PARAGRAPH30 {
        display: block;
    }

    #PARAGRAPH30 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(64, 64, 64, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #BOX32 {
        display: block;
    }

    #BOX32 > .widget-content {
        background-color: rgba(255, 255, 255, 0.91);
        color: rgba(0, 0, 0, 1);
        box-shadow: 4px 5px 21px rgba(64, 64, 64, 0.09);
    }

    #BOX32> .widget-content {
        border-radius: 1px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #BOX32> .ladi-widget-overlay {
        border-radius: 1px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #PARAGRAPH34 {
        display: block;
    }

    #PARAGRAPH34 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(82, 82, 82, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #BOX35 {
        display: block;
    }

    #BOX35 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX35> .widget-content {
        border-radius: 300px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #BOX35> .ladi-widget-overlay {
        border-radius: 300px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #SHAPE50 {
        display: block;
    }

    #SHAPE50 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE50> .widget-content svg {
        fill: #000000;
    }

    #HEADLINE33 {
        display: block;
    }

    #HEADLINE33 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(74, 73, 73, 1);
        font-weight: 700;
        line-height: 22px;
    }

    #HEADLINE37 {
        display: block;
    }

    #HEADLINE37 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(251, 251, 251, 1);
        font-weight: 700;
        line-height: 78px;
    }

    #BOX44 {
        display: block;
    }

    #BOX44 > .widget-content {
        background-color: rgba(255, 255, 255, 0.91);
        color: rgba(0, 0, 0, 1);
        box-shadow: 4px 5px 21px rgba(64, 64, 64, 0.09);
    }

    #BOX44> .widget-content {
        border-radius: 1px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #BOX44> .ladi-widget-overlay {
        border-radius: 1px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #HEADLINE45 {
        display: block;
    }

    #HEADLINE45 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(74, 73, 73, 1);
        font-weight: 600;
        line-height: 22px;
    }

    #BOX39 {
        display: block;
    }

    #BOX39 > .widget-content {
        background-color: rgba(255, 255, 255, 0.91);
        color: rgba(0, 0, 0, 1);
        box-shadow: 4px 5px 21px rgba(64, 64, 64, 0.09);
    }

    #BOX39> .widget-content {
        border-radius: 1px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #BOX39> .ladi-widget-overlay {
        border-radius: 1px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #HEADLINE40 {
        display: block;
    }

    #HEADLINE40 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(74, 73, 73, 1);
        font-weight: 600;
        line-height: 22px;
    }

    #BOX51 {
        display: block;
    }

    #BOX51 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX51> .widget-content {
        border-radius: 300px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #BOX51> .ladi-widget-overlay {
        border-radius: 300px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #SHAPE52 {
        display: block;
    }

    #SHAPE52 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE52> .widget-content svg {
        fill: #000000;
    }

    #BOX54 {
        display: block;
    }

    #BOX54 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX54> .widget-content {
        border-radius: 300px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #BOX54> .ladi-widget-overlay {
        border-radius: 300px;
        border-width: 2px;
        border-style: solid;
        border-color: rgba(48, 120, 207, 1);
    }

    #SHAPE55 {
        display: block;
    }

    #SHAPE55 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE55> .widget-content svg {
        fill: #000000;
    }

    #HEADLINE109 {
        display: block;
    }

    #HEADLINE109 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(46, 46, 46, 1);
        font-weight: 700;
        line-height: 28px;
    }

    #PARAGRAPH110 {
        display: block;
    }

    #PARAGRAPH110 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 22px;
    }

    #GROUP111 {
        display: block;
    }

    #GROUP111 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #GROUP117 {
        display: block;
    }

    #GROUP117 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX119 {
        display: block;
    }

    #BOX119 > .widget-content {
        background-color: rgba(214, 0, 0, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX119> .widget-content {
        border-radius: 30px;
    }

    #BOX119> .ladi-widget-overlay {
        border-radius: 30px;
    }

    #HEADLINE121 {
        display: block;
    }

    #HEADLINE121 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #GROUP123 {
        display: block;
    }

    #GROUP123 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX125 {
        display: block;
    }

    #BOX125 > .widget-content {
        background-color: rgba(214, 0, 0, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX125> .widget-content {
        border-radius: 30px;
    }

    #BOX125> .ladi-widget-overlay {
        border-radius: 30px;
    }

    #HEADLINE127 {
        display: block;
    }

    #HEADLINE127 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #GROUP129 {
        display: block;
    }

    #GROUP129 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX131 {
        display: block;
    }

    #BOX131 > .widget-content {
        background-color: rgba(214, 0, 0, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX131> .widget-content {
        border-radius: 30px;
    }

    #BOX131> .ladi-widget-overlay {
        border-radius: 30px;
    }

    #HEADLINE133 {
        display: block;
    }

    #HEADLINE133 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #GROUP135 {
        display: block;
    }

    #GROUP135 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX137 {
        display: block;
    }

    #BOX137 > .widget-content {
        background-color: rgba(214, 0, 0, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX137> .widget-content {
        border-radius: 30px;
    }

    #BOX137> .ladi-widget-overlay {
        border-radius: 30px;
    }

    #HEADLINE139 {
        display: block;
    }

    #HEADLINE139 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #GROUP141 {
        display: block;
    }

    #GROUP141 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX143 {
        display: block;
    }

    #BOX143 > .widget-content {
        background-color: rgba(214, 0, 0, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX143> .widget-content {
        border-radius: 30px;
    }

    #BOX143> .ladi-widget-overlay {
        border-radius: 30px;
    }

    #HEADLINE145 {
        display: block;
    }

    #HEADLINE145 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #GROUP147 {
        display: block;
    }

    #GROUP147 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX149 {
        display: block;
    }

    #BOX149 > .widget-content {
        background-color: rgba(214, 0, 0, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX149> .widget-content {
        border-radius: 30px;
    }

    #BOX149> .ladi-widget-overlay {
        border-radius: 30px;
    }

    #HEADLINE151 {
        display: block;
    }

    #HEADLINE151 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #GROUP153 {
        display: block;
    }

    #GROUP153 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX155 {
        display: block;
    }

    #BOX155 > .widget-content {
        background-color: rgba(214, 0, 0, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX155> .widget-content {
        border-radius: 30px;
    }

    #BOX155> .ladi-widget-overlay {
        border-radius: 30px;
    }

    #HEADLINE157 {
        display: block;
    }

    #HEADLINE157 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #HEADLINE120 {
        display: block;
    }

    #HEADLINE120 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 16px;
    }

    #HEADLINE126 {
        display: block;
    }

    #HEADLINE126 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 16px;
    }

    #HEADLINE132 {
        display: block;
    }

    #HEADLINE132 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 16px;
    }

    #HEADLINE138 {
        display: block;
    }

    #HEADLINE138 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 16px;
    }

    #HEADLINE144 {
        display: block;
    }

    #HEADLINE144 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 16px;
    }

    #HEADLINE150 {
        display: block;
    }

    #HEADLINE150 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 16px;
    }

    #HEADLINE156 {
        display: block;
    }

    #HEADLINE156 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 16px;
    }

    #SHAPE160 {
        display: block;
    }

    #SHAPE160 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE160> .widget-content svg {
        fill: #000000;
    }

    #SHAPE161 {
        display: block;
    }

    #SHAPE161 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE161> .widget-content svg {
        fill: #000000;
    }

    #SHAPE162 {
        display: block;
    }

    #SHAPE162 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE162> .widget-content svg {
        fill: #000000;
    }

    #SHAPE163 {
        display: block;
    }

    #SHAPE163 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE163> .widget-content svg {
        fill: #000000;
    }

    #SHAPE164 {
        display: block;
    }

    #SHAPE164 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE164> .widget-content svg {
        fill: #000000;
    }

    #SHAPE165 {
        display: block;
    }

    #SHAPE165 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE165> .widget-content svg {
        fill: #000000;
    }

    #SHAPE166 {
        display: block;
    }

    #SHAPE166 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE166> .widget-content svg {
        fill: #000000;
    }

    #SHAPE262 {
        display: block;
    }

    #SHAPE262 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: #000000;
    }

    #SHAPE262> .widget-content svg {
        fill: #000000;
    }

    #GROUP263 {
        display: block;
    }

    #GROUP263 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX264 {
        display: block;
    }

    #BOX264 > .widget-content {
        background-color: rgba(214, 0, 0, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX264> .widget-content {
        border-radius: 30px;
    }

    #BOX264> .ladi-widget-overlay {
        border-radius: 30px;
    }

    #HEADLINE265 {
        display: block;
    }

    #HEADLINE265 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #HEADLINE266 {
        display: block;
    }

    #HEADLINE266 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 20px;
    }

    #HEADLINE247 {
        display: block;
    }

    #HEADLINE247 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Montserrat', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: #fed5005;
        font-weight: 300;
        line-height: 42px;
    }

    #BOX248 {
        display: block;
    }

    #BOX248 > .widget-content {
        background-color: #fed500;
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH250 {
        display: block;
    }

    #PARAGRAPH250 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 24px;
    }

    #HEADLINE251 {
        display: block;
    }

    #HEADLINE251 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: #fed500;
        font-weight: 400;
        line-height: 22px;
        letter-spacing: 0px;
    }

    #HEADLINE252 {
        display: block;
    }

    #HEADLINE252 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #SHAPE253 {
        display: block;
    }

    #SHAPE253 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE253> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #LINE254 {
        display: block;
    }

    #LINE254>.widget-content .line {
        border-top-width: 1px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: dashed;
        border-color: rgba(64, 64, 64, 1);
        margin-top: 12px;
    }

    #LINE254 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #SHAPE255 {
        display: block;
    }

    #SHAPE255 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE255> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #HEADLINE256 {
        display: block;
    }

    #HEADLINE256 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #HEADLINE257 {
        display: block;
    }

    #HEADLINE257 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: #fed500;
        font-weight: 400;
        line-height: 22px;
        letter-spacing: 0px;
    }

    #PARAGRAPH258 {
        display: block;
    }

    #PARAGRAPH258 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 24px;
    }

    #LINE259 {
        display: block;
    }

    #LINE259>.widget-content .line {
        border-top-width: 1px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: dashed;
        border-color: rgba(64, 64, 64, 1);
        margin-top: 12px;
    }

    #LINE259 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE260 {
        display: block;
    }

    #IMAGE260 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE260 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #BOX168 {
        display: block;
    }

    #BOX168 > .widget-content {
        background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5378-1512744600241.png");
        background-origin: content-box;
        background-size: auto 100%;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
        background-color: rgba(189, 189, 189, 1);
        color: rgba(0, 0, 0, 1);
        background-origin: content-box;
        background-size: auto 100%;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #BOX168> .widget-content {
        border-radius: 220px;
        border-width: 0px;
        border-style: dotted;
        border-color: rgba(76, 175, 80, 1);
    }

    #BOX168> .ladi-widget-overlay {
        border-radius: 220px;
        border-width: 0px;
        border-style: dotted;
        border-color: rgba(76, 175, 80, 1);
    }

    #BOX168 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #HEADLINE169 {
        display: block;
    }

    #HEADLINE169 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Baloo Bhaina', cursive;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 34px;
    }

    #HEADLINE171 {
        display: block;
    }

    #HEADLINE171 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(71, 71, 71, 1);
        font-weight: 400;
        line-height: 22px;
    }

    #LINE196 {
        display: block;
    }

    #LINE196>.widget-content .line {
        border-top-width: 2px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: rgba(255, 193, 7, 1);
        margin-top: 10.5px;
    }

    #LINE196 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH197 {
        display: block;
    }

    #PARAGRAPH197 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 300;
        line-height: 20px;
    }

    #HEADLINE198 {
        display: block;
    }

    #HEADLINE198 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 34px;
    }

    #GROUP199 {
        display: block;
    }

    #GROUP199 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX200 {
        display: block;
    }

    #BOX200 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX200> .widget-content {
        border-radius: 5px;
    }

    #BOX200> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #HEADLINE201 {
        display: block;
    }

    #HEADLINE201 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(61, 61, 61, 1);
        font-weight: 700;
        line-height: 20px;
    }

    #HEADLINE202 {
        display: block;
    }

    #HEADLINE202 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 193, 7, 1);
        font-weight: 400;
        line-height: 16px;
    }

    #PARAGRAPH203 {
        display: block;
    }

    #PARAGRAPH203 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(13, 13, 13, 1);
        line-height: 19px;
    }

    #BOX204 {
        display: block;
    }

    #BOX204 > .widget-content {
        background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5380-1512806157919.jpg");
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
        background-color: rgba(189, 189, 189, 1);
        color: rgba(0, 0, 0, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
        box-shadow: 0px 0px 8px rgba(20, 20, 20, 0.16);
    }

    #BOX204> .widget-content {
        border-radius: 220px;
        border-width: 4px;
        border-style: solid;
        border-color: rgba(255, 255, 255, 1);
    }

    #BOX204> .ladi-widget-overlay {
        border-radius: 220px;
        border-width: 4px;
        border-style: solid;
        border-color: rgba(255, 255, 255, 1);
    }

    #BOX204 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #GROUP205 {
        display: block;
    }

    #GROUP205 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX206 {
        display: block;
    }

    #BOX206 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX206> .widget-content {
        border-radius: 5px;
    }

    #BOX206> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #HEADLINE207 {
        display: block;
    }

    #HEADLINE207 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(61, 61, 61, 1);
        font-weight: 700;
        line-height: 20px;
    }

    #HEADLINE208 {
        display: block;
    }

    #HEADLINE208 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 193, 7, 1);
        font-weight: 400;
        line-height: 16px;
    }

    #PARAGRAPH209 {
        display: block;
    }

    #PARAGRAPH209 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(13, 13, 13, 1);
        line-height: 19px;
    }

    #BOX210 {
        display: block;
    }

    #BOX210 > .widget-content {
        background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
        background-origin: content-box;
        background-size: auto 100%;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
        background-color: rgba(189, 189, 189, 1);
        color: rgba(0, 0, 0, 1);
        background-origin: content-box;
        background-size: auto 100%;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
        box-shadow: 0px 0px 8px rgba(20, 20, 20, 0.16);
    }

    #BOX210> .widget-content {
        border-radius: 220px;
        border-width: 4px;
        border-style: solid;
        border-color: rgba(255, 255, 255, 1);
    }

    #BOX210> .ladi-widget-overlay {
        border-radius: 220px;
        border-width: 4px;
        border-style: solid;
        border-color: rgba(255, 255, 255, 1);
    }

    #BOX210 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #BOX218 {
        display: block;
    }

    #BOX218 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX218> .widget-content {
        border-radius: 5px;
    }

    #BOX218> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #GROUP220 {
        display: block;
    }

    #GROUP220 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #GROUP221 {
        display: block;
    }

    #GROUP221 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX222 {
        display: block;
    }

    #BOX222 > .widget-content {
        background-color: rgba(20, 20, 20, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX222> .widget-content {
        border-radius: 6px;
    }

    #BOX222> .ladi-widget-overlay {
        border-radius: 6px;
    }

    #HEADLINE223 {
        display: block;
    }

    #HEADLINE223 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(64, 64, 64, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #HEADLINE224 {
        display: block;
    }

    #HEADLINE224 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(64, 64, 64, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #BOX225 {
        display: block;
    }

    #BOX225 > .widget-content {
        background-color: rgba(20, 20, 20, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX225> .widget-content {
        border-radius: 6px;
    }

    #BOX225> .ladi-widget-overlay {
        border-radius: 6px;
    }

    #BOX226 {
        display: block;
    }

    #BOX226 > .widget-content {
        background-color: rgba(20, 20, 20, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX226> .widget-content {
        border-radius: 6px;
    }

    #BOX226> .ladi-widget-overlay {
        border-radius: 6px;
    }

    #HEADLINE227 {
        display: block;
    }

    #HEADLINE227 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(64, 64, 64, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #HEADLINE228 {
        display: block;
    }

    #HEADLINE228 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(64, 64, 64, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #BOX229 {
        display: block;
    }

    #BOX229 > .widget-content {
        background-color: rgba(20, 20, 20, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX229> .widget-content {
        border-radius: 6px;
    }

    #BOX229> .ladi-widget-overlay {
        border-radius: 6px;
    }

    #COUNTDOWN230 {
        -webkit-animation-duration: 5s;
        animation-duration: 5s;
        display: block;
    }

    #COUNTDOWN230 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 0px;
    }

    #GROUP231 {
        display: block;
    }

    #GROUP231 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #FORM233 {
        display: block;
    }

    #FORM233 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #FORM233 .widget-content::-webkit-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #FORM233 .widget-content:-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #FORM233 .widget-content::-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #FORM233 .widget-content:-ms-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM234 {
        display: block;
    }

    #ITEM_FORM234 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM234> .widget-content {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM234> .ladi-widget-overlay {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM234 .widget-content::-webkit-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM234 .widget-content:-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM234 .widget-content::-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM234 .widget-content:-ms-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM235 {
        display: block;
    }

    #ITEM_FORM235 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM235> .widget-content {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM235> .ladi-widget-overlay {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM235 .widget-content::-webkit-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM235 .widget-content:-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM235 .widget-content::-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM235 .widget-content:-ms-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM236 {
        display: block;
    }

    #ITEM_FORM236 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM236> .widget-content {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM236> .ladi-widget-overlay {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM236 .widget-content::-webkit-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM236 .widget-content:-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM236 .widget-content::-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM236 .widget-content:-ms-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #BUTTON232 {
        display: table;
    }

    #BUTTON232 > .widget-content {
        background-color: #4db90a;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: #ffffff;
        font-weight: 700;
        line-height: 29px;
    }

    #BUTTON232> .widget-content {
        border-radius: 2px;
    }

    #BUTTON232> .ladi-widget-overlay {
        border-radius: 2px;
    }

    #HEADLINE219 {
        display: block;
    }

    #HEADLINE219 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(38, 38, 38, 1);
        font-weight: 700;
        line-height: 27px;
    }

    #HEADLINE245 {
        -webkit-animation-duration: 4s;
        animation-duration: 4s;
        display: block;
    }

    #HEADLINE245 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 38px;
    }

    #PARAGRAPH267 {
        display: block;
    }

    #PARAGRAPH267 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #FORM15 {
        display: block;
    }

    #FORM15 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
    }

    #FORM15 .widget-content::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #FORM15 .widget-content:-moz-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #FORM15 .widget-content::-moz-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #FORM15 .widget-content:-ms-input-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM16 {
        display: block;
    }

    #ITEM_FORM16 > .widget-content {
        background-color: rgba(255, 255, 255, 0.32);
    }

    #ITEM_FORM16> .widget-content {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(204, 204, 204, 1);
    }

    #ITEM_FORM16> .ladi-widget-overlay {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(204, 204, 204, 1);
    }

    #ITEM_FORM16 .widget-content::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM16 .widget-content:-moz-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM16 .widget-content::-moz-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM16 .widget-content:-ms-input-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM17 {
        display: block;
    }

    #ITEM_FORM17 > .widget-content {
        background-color: rgba(255, 255, 255, 0.32);
    }

    #ITEM_FORM17> .widget-content {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(204, 204, 204, 1);
    }

    #ITEM_FORM17> .ladi-widget-overlay {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(204, 204, 204, 1);
    }

    #ITEM_FORM17 .widget-content::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM17 .widget-content:-moz-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM17 .widget-content::-moz-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM17 .widget-content:-ms-input-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM18 {
        display: block;
    }

    #ITEM_FORM18 > .widget-content {
        background-color: rgba(255, 255, 255, 0.32);
    }

    #ITEM_FORM18> .widget-content {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(204, 204, 204, 1);
    }

    #ITEM_FORM18> .ladi-widget-overlay {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(204, 204, 204, 1);
    }

    #ITEM_FORM18 .widget-content::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM18 .widget-content:-moz-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM18 .widget-content::-moz-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #ITEM_FORM18 .widget-content:-ms-input-placeholder {
        color: rgba(255, 255, 255, 1)
    }

    #BOX12 {
        display: block;
    }

    #BOX12 > .widget-content {
        background-color: rgba(46, 125, 50, 1);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE13 {
        display: block;
    }

    #HEADLINE13 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 29px;
    }

    #SHAPE14 {
        display: block;
    }

    #SHAPE14 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE14> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #BUTTON19 {
        display: table;
    }

    #BUTTON19 > .widget-content {
        background-color: rgba(17, 128, 48, 1);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 31px;
        box-shadow: 0px 2px 0px rgba(255, 255, 255, 1);
    }

    #BUTTON19> .widget-content {
        border-radius: 0px;
    }

    #BUTTON19> .ladi-widget-overlay {
        border-radius: 0px;
    }

    @media(max-width: 767px) {
        body {
            position: relative;
        }
        #SECTION2 {
            width: 100%;
            height: 1051.3334159851074px;
        }
        #SECTION2 .container {}
        #SECTION2 {
            background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/product_bg.png");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: repeat;
        }
        #SECTION20 {
            width: 100%;
            height: 1044.6458740234375px;
        }
        #SECTION20 .container {}
        #SECTION20 {
            background-image: none;
        }
        #SECTION31 {
            width: 320px;
            height: 821.0001220703125px;
        }
        #SECTION31 .container {}
        #SECTION31 {
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/lotus-1205631_1920-1512742821196.jpg");
            background-size: cover;
            background-attachment: fixed;
            background-position: center top;
            background-repeat: no-repeat;
        }
        #SECTION108 {
            width: 100%;
            height: 1143px;
        }
        #SECTION108 .container {}
        #SECTION108 {
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-2959233_1920-1512744521408.jpg");
            background-size: cover;
            background-attachment: fixed;
            background-position: center top;
            background-repeat: no-repeat;
        }
        #SECTION246 {
            width: 100%;
            height: 978px;
        }
        #SECTION246 .container {}
        #SECTION246 {
            background-image: linear-gradient(rgba(3, 2, 2, 0.82), rgba(3, 2, 2, 0.82)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/stock.jpg");
            background-image: -o-linear-gradient(rgba(3, 2, 2, 0.82), rgba(3, 2, 2, 0.82)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/stock.jpg");
            background-image: -ms-linear-gradient(rgba(3, 2, 2, 0.82), rgba(3, 2, 2, 0.82)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/stock.jpg");
            background-image: -moz-linear-gradient(rgba(3, 2, 2, 0.82), rgba(3, 2, 2, 0.82)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/stock.jpg");
            background-image: -webkit-linear-gradient(rgba(3, 2, 2, 0.82), rgba(3, 2, 2, 0.82)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/stock.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        #SECTION167 {
            width: 100%;
            height: 972.6666870117188px;
        }
        #SECTION167 .container {}
        #SECTION167 {
            background-image: none;
        }
        #SECTION195 {
            width: 100%;
            height: 831px;
        }
        #SECTION195 .container {}
        #SECTION195 {
            background-image: linear-gradient(rgba(31, 31, 31, 0.89), rgba(31, 31, 31, 0.89)), url("https://static.ladipage.net/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
            background-image: -o-linear-gradient(rgba(31, 31, 31, 0.89), rgba(31, 31, 31, 0.89)), url("https://static.ladipage.net/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
            background-image: -ms-linear-gradient(rgba(31, 31, 31, 0.89), rgba(31, 31, 31, 0.89)), url("https://static.ladipage.net/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
            background-image: -moz-linear-gradient(rgba(31, 31, 31, 0.89), rgba(31, 31, 31, 0.89)), url("https://static.ladipage.net/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
            background-image: -webkit-linear-gradient(rgba(31, 31, 31, 0.89), rgba(31, 31, 31, 0.89)), url("https://static.ladipage.net/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        #SECTION217 {
            width: 100%;
            height: 890.3125px;
        }
        #SECTION217 .container {}
        #SECTION217 {
            background-image: url("https://static.ladipage.net/uploads/images/5a8563a5-5f68-4470-b806-42ec62e2cac6.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        #POPUP11 {
            width: 100%;
            height: 100%;
        }
        #POPUP11 .container {
            width: 375px;
            height: 416.109375px;
            top: calc(100%-416.109375px);
        }
        #POPUP11 {
            background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg-1.png");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        #BUTTON3 {
            top: 977.667px;
            left: 82.1667px;
            padding: 0px;
            width: 212px;
            height: 43px;
        }
        #BUTTON3 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #LINE4 {
            top: 823.667px;
            left: 37px;
            width: 285px;
            height: 25px;
        }
        #HEADLINE5 {
            top: 525px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 160px;
        }
        #HEADLINE5 > .widget-content {
            font-size: 45px;
            text-align: center;
        }
        #LISTOP6 {
            top: 864.667px;
            left: 9.16669px;
            width: 357px;
            height: 94px;
        }
        #LISTOP6 > .widget-content {
            font-size: 16px;
            text-align: left;
        }
        #LISTOP6 > ol.widget-content li::before {
            content: counter(linum, decimal);
            width: 21px;
            height: 21px;
            font-size: 10.5px;
            color: rgba(222, 106, 0, 1);
            margin-right: 15px;
            content: url('data:image/svg+xml;utf8,<svg fill="rgba(222,106,0,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.4-.188-2.794-.688-4.094L26.688 13.5c.2.8.313 1.6.313 2.5 0 6.1-4.9 11-11 11S5 22.1 5 16 9.9 5 16 5c3 0 5.694 1.194 7.594 3.094L25 6.688C22.7 4.388 19.5 3 16 3zm11.28 4.28L16 18.563l-4.28-4.28-1.44 1.437 5 5 .72.686.72-.687 12-12-1.44-1.44z"/> </svg>');
            background-repeat: no-repeat;
            position: relative;
            top: 0px;
            left: 0;
        }
        #LISTOP6 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP6 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #IMAGE7 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848a8821-1512738501975.png);
        }
        #IMAGE7 {
            top: 0px;
            left: -2.17706px;
            width: 374.3125px;
            height: 444.3125px;
        }
        #HEADLINE8 {
            top: 695px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 106.640625px;
        }
        #HEADLINE8 > .widget-content {
            font-size: 45px;
            text-align: center;
        }
        #IMAGE9 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-blue-216678.png);
        }
        #IMAGE9 {
            top: 457px;
            left: 24.1016px;
            width: 326.765625px;
            height: 58px;
        }
        #HEADLINE10 {
            top: 20px;
            left: 23.75px;
            padding: 0px;
            width: 299.3125px;
            height: 28px;
        }
        #HEADLINE10 > .widget-content {
            font-size: 24px;
            text-align: left;
        }
        #YOUTUBE21 {
            top: 20px;
            left: 37.5px;
            width: 300px;
            height: 146.66666666666666px;
        }
        #GROUP22 {
            top: 211.646px;
            left: 38.1667px;
            width: 299px;
            height: 216px;
        }
        #IMAGE23 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/ad-1512742149725.png);
        }
        #IMAGE23 {
            top: 0px;
            left: 1px;
            width: 299px;
            height: 175px;
        }
        #PARAGRAPH24 {
            top: 196px;
            left: 1px;
            padding: 0px;
            width: 293.3125px;
            height: 20px;
        }
        #PARAGRAPH24 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP25 {
            top: 462.646px;
            left: 38px;
            width: 299px;
            height: 216px;
        }
        #IMAGE26 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/1-1512742164710.png);
        }
        #IMAGE26 {
            top: 0px;
            left: 1px;
            width: 299px;
            height: 175px;
        }
        #PARAGRAPH27 {
            top: 196px;
            left: 1px;
            padding: 0px;
            width: 293.3125px;
            height: 20px;
        }
        #PARAGRAPH27 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP28 {
            top: 748.656px;
            left: 38px;
            width: 299px;
            height: 276px;
        }
        #IMAGE29 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848a0348-1512742258554.png);
        }
        #IMAGE29 {
            top: 0px;
            left: 1px;
            width: 299px;
            height: 175px;
        }
        #PARAGRAPH30 {
            top: 196px;
            left: 1px;
            padding: 0px;
            width: 293.3125px;
            height: 20px;
        }
        #PARAGRAPH30 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX32 {
            top: 133px;
            left: 35.5px;
            width: 304px;
            height: 202px;
        }
        #PARAGRAPH34 {
            top: 132px;
            left: 16px;
            padding: 0px;
            width: 272px;
            height: 20px;
        }
        #PARAGRAPH34 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX35 {
            top: 37.6458px;
            left: 109px;
            width: 102.3125px;
            height: 95.3125px;
        }
        #SHAPE50 {
            top: 11px;
            left: 25px;
            width: 51px;
            height: 72.6875px;
        }
        #HEADLINE33 {
            top: 143px;
            left: 27px;
            padding: 0px;
            width: 256px;
            height: 21.3125px;
        }
        #HEADLINE33 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #HEADLINE37 {
            top: 20px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 98.640625px;
        }
        #HEADLINE37 > .widget-content {
            font-size: 40px;
            text-align: center;
            line-height: 50px;
        }
        #BOX44 {
            top: 577px;
            left: 35.5px;
            width: 304px;
            height: 224px;
        }
        #HEADLINE45 {
            top: 130px;
            left: 32.6667px;
            padding: 0px;
            width: 256px;
            height: 42.640625px;
        }
        #HEADLINE45 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #BOX39 {
            top: 345px;
            left: 35.5px;
            width: 304px;
            height: 222px;
        }
        #HEADLINE40 {
            top: 132.5px;
            left: 26.6667px;
            padding: 0px;
            width: 256px;
            height: 42.640625px;
        }
        #HEADLINE40 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #BOX51 {
            top: 26.375px;
            left: 108.667px;
            width: 102.3125px;
            height: 101px;
        }
        #SHAPE52 {
            top: 17.3125px;
            left: 16.021px;
            width: 71.375px;
            height: 72.6875px;
        }
        #BOX54 {
            top: 248.25px;
            left: 101.98px;
            width: 102.3125px;
            height: 101px;
        }
        #SHAPE55 {
            top: 17.3125px;
            left: 16.021px;
            width: 71.375px;
            height: 72.6875px;
        }
        #HEADLINE109 {
            top: 20px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 28px;
        }
        #HEADLINE109 > .widget-content {
            font-size: 24px;
            text-align: center;
        }
        #PARAGRAPH110 {
            top: 58px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 85.3125px;
        }
        #PARAGRAPH110 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #GROUP111 {
            top: 383.938px;
            left: 438.5px;
            width: 216px;
            height: 161px;
        }
        #GROUP117 {
            top: 228.583px;
            left: 108.813px;
            width: 166.640625px;
            height: 63.078125px;
        }
        #BOX119 {
            top: 0px;
            left: 28px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE121 {
            top: 28.4375px;
            left: 1px;
            padding: 0px;
            width: 166.640625px;
            height: 34.640625px;
        }
        #HEADLINE121 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP123 {
            top: 355.938px;
            left: 106.813px;
            width: 173.3125px;
            height: 61.703125px;
        }
        #BOX125 {
            top: 0px;
            left: 32px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE127 {
            top: 27.0625px;
            left: 1px;
            padding: 0px;
            width: 173.3125px;
            height: 34.640625px;
        }
        #HEADLINE127 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP129 {
            top: 487.521px;
            left: 103.813px;
            width: 174.640625px;
            height: 65.375px;
        }
        #BOX131 {
            top: 0px;
            left: 32px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE133 {
            top: 30.7083px;
            left: 1px;
            padding: 0px;
            width: 174.640625px;
            height: 34.640625px;
        }
        #HEADLINE133 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP135 {
            top: 605px;
            left: 97.8125px;
            width: 173.3125px;
            height: 60.640625px;
        }
        #BOX137 {
            top: 0px;
            left: 34.6875px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE139 {
            top: 26px;
            left: 1px;
            padding: 0px;
            width: 173.3125px;
            height: 34.640625px;
        }
        #HEADLINE139 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP141 {
            top: 830.979px;
            left: 103.75px;
            width: 165.3125px;
            height: 56.265625px;
        }
        #BOX143 {
            top: 0px;
            left: 28.375px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE145 {
            top: 21.6458px;
            left: 1px;
            padding: 0px;
            width: 165.3125px;
            height: 34.640625px;
        }
        #HEADLINE145 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP147 {
            top: 728.292px;
            left: 101.5px;
            width: 168px;
            height: 46.015625px;
        }
        #BOX149 {
            top: 0px;
            left: 26.3125px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE151 {
            top: 28.7083px;
            left: 1px;
            padding: 0px;
            width: 168px;
            height: 17.3125px;
        }
        #HEADLINE151 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP153 {
            top: 943.938px;
            left: 93.5px;
            width: 172px;
            height: 48.0625px;
        }
        #BOX155 {
            top: 0px;
            left: 38.3125px;
            width: 107px;
            height: 21px;
        }
        #HEADLINE157 {
            top: 30.75px;
            left: 1px;
            padding: 0px;
            width: 172px;
            height: 17.3125px;
        }
        #HEADLINE157 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE120 {
            top: 234.563px;
            left: 142.146px;
            padding: 0px;
            width: 102.640625px;
            height: 16px;
        }
        #HEADLINE120 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE126 {
            top: 361.917px;
            left: 139.146px;
            padding: 0px;
            width: 102.640625px;
            height: 16px;
        }
        #HEADLINE126 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE132 {
            top: 488.5px;
            left: 141.146px;
            padding: 0px;
            width: 102.640625px;
            height: 16px;
        }
        #HEADLINE132 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE138 {
            top: 610.979px;
            left: 132.834px;
            padding: 0px;
            width: 102.640625px;
            height: 16px;
        }
        #HEADLINE138 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE144 {
            top: 729.271px;
            left: 133.146px;
            padding: 0px;
            width: 102.640625px;
            height: 16px;
        }
        #HEADLINE144 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE150 {
            top: 831.565px;
            left: 133.125px;
            padding: 0px;
            width: 102.640625px;
            height: 16px;
        }
        #HEADLINE150 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #HEADLINE156 {
            top: 949.917px;
            left: 137.146px;
            padding: 0px;
            width: 102.640625px;
            height: 16px;
        }
        #HEADLINE156 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #SHAPE160 {
            top: 430.875px;
            left: 151.01px;
            width: 74.953125px;
            height: 56.625px;
        }
        #SHAPE161 {
            top: 171.938px;
            left: 155.833px;
            width: 74.953125px;
            height: 56.625px;
        }
        #SHAPE162 {
            top: 300.563px;
            left: 154.833px;
            width: 74.953125px;
            height: 56.625px;
        }
        #SHAPE163 {
            top: 671.646px;
            left: 144.01px;
            width: 74.953125px;
            height: 56.625px;
        }
        #SHAPE164 {
            top: 552.25px;
            left: 146.01px;
            width: 74.953125px;
            height: 56.625px;
        }
        #SHAPE165 {
            top: 775.291px;
            left: 149.791px;
            width: 74.953125px;
            height: 56.625px;
        }
        #SHAPE166 {
            top: 887.523px;
            left: 148.01px;
            width: 74.953125px;
            height: 56.625px;
        }
        #SHAPE262 {
            top: 998px;
            left: 145.146px;
            width: 74.953125px;
            height: 56.625px;
        }
        #GROUP263 {
            top: 1054.98px;
            left: 109.125px;
            width: 154.3125px;
            height: 43.328125px;
        }
        #BOX264 {
            top: 0px;
            left: 20.6667px;
            width: 112.3125px;
            height: 19.625px;
        }
        #HEADLINE265 {
            top: 26.0208px;
            left: 1px;
            padding: 0px;
            width: 154.3125px;
            height: 17.3125px;
        }
        #HEADLINE265 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE266 {
            top: 1055.29px;
            left: 146.105px;
            padding: 0px;
            width: 134.375px;
            height: 20px;
        }
        #HEADLINE266 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE247 {
            top: 40px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 64px;
        }
        #HEADLINE247 > .widget-content {
            font-size: 26px;
            text-align: center;
            line-height: 32px;
        }
        #BOX248 {
            top: 20px;
            left: 10px;
            width: 355px;
            height: 10px;
        }
        #PARAGRAPH250 {
            top: 502.667px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 80px;
        }
        #PARAGRAPH250 > .widget-content {
            font-size: 14px;
            text-align: center;
            line-height: 20px;
        }
        #HEADLINE251 {
            top: 450px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 42.640625px;
        }
        #HEADLINE251 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #HEADLINE252 {
            top: 422px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 18px;
        }
        #HEADLINE252 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #SHAPE253 {
            top: 388px;
            left: 175.5px;
            width: 24px;
            height: 24px;
        }
        #LINE254 {
            top: 672px;
            left: 10px;
            width: 355px;
            height: 25px;
        }
        #SHAPE255 {
            top: 707px;
            left: 175.5px;
            width: 24px;
            height: 24px;
        }
        #HEADLINE256 {
            top: 741px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 18px;
        }
        #HEADLINE256 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE257 {
            top: 769px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 21.3125px;
        }
        #HEADLINE257 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #PARAGRAPH258 {
            top: 800.333px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 120px;
        }
        #PARAGRAPH258 > .widget-content {
            font-size: 14px;
            text-align: center;
            line-height: 20px;
        }
        #LINE259 {
            top: 933px;
            left: 10px;
            width: 355px;
            height: 25px;
        }
        #IMAGE260 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/uploads/images/bfc1d1bf-af34-4fe2-9361-35f7f9120640.png);
        }
        #IMAGE260 {
            top: 166px;
            left: 89px;
            width: 197px;
            height: 286px;
        }
        #BOX168 {
            top: 79px;
            left: 30.5001px;
            width: 297px;
            height: 297px;
        }
        #BOX168 > .widget-content {
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5378-1512744600241.png");
            background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5378-1512744600241.png");
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5378-1512744600241.png");
            background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5378-1512744600241.png");
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5378-1512744600241.png");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #HEADLINE169 {
            top: 394px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 66.640625px;
        }
        #HEADLINE169 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #HEADLINE171 {
            top: 115px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 426.65625px;
        }
        #HEADLINE171 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #LINE196 {
            top: 110px;
            left: 128px;
            width: 119px;
            height: 25px;
        }
        #PARAGRAPH197 {
            top: 60px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 40px;
        }
        #PARAGRAPH197 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE198 {
            top: 20px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 30px;
        }
        #HEADLINE198 > .widget-content {
            font-size: 24px;
            text-align: center;
            line-height: 30px;
        }
        #GROUP199 {
            top: 145px;
            left: 37.5px;
            width: 300px;
            height: 323px;
        }
        #BOX200 {
            top: 80px;
            left: 0px;
            width: 300px;
            height: 243px;
        }
        #HEADLINE201 {
            top: 103px;
            left: 43px;
            padding: 0px;
            width: 208px;
            height: 20px;
        }
        #HEADLINE201 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE202 {
            top: 130px;
            left: 26px;
            padding: 0px;
            width: 248px;
            height: 16px;
        }
        #HEADLINE202 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #PARAGRAPH203 {
            top: 152px;
            left: 28px;
            padding: 0px;
            width: 236px;
            height: 56px;
        }
        #PARAGRAPH203 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX204 {
            top: 0px;
            left: 76px;
            width: 155px;
            height: 155px;
        }
        #BOX204 > .widget-content {
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5380-1512806157919.jpg");
            background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5380-1512806157919.jpg");
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5380-1512806157919.jpg");
            background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5380-1512806157919.jpg");
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5380-1512806157919.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #GROUP205 {
            top: 478px;
            left: 37.5px;
            width: 300px;
            height: 323px;
        }
        #BOX206 {
            top: 80px;
            left: 0px;
            width: 300px;
            height: 243px;
        }
        #HEADLINE207 {
            top: 103px;
            left: 43px;
            padding: 0px;
            width: 208px;
            height: 20px;
        }
        #HEADLINE207 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE208 {
            top: 130px;
            left: 26px;
            padding: 0px;
            width: 248px;
            height: 16px;
        }
        #HEADLINE208 > .widget-content {
            font-size: 12px;
            text-align: center;
        }
        #PARAGRAPH209 {
            top: 152px;
            left: 28px;
            padding: 0px;
            width: 236px;
            height: 56px;
        }
        #PARAGRAPH209 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX210 {
            top: 0px;
            left: 76px;
            width: 155px;
            height: 155px;
        }
        #BOX210 > .widget-content {
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
            background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
            background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #BOX218 {
            top: 20px;
            left: 37.5px;
            width: 300px;
            height: 469.375px;
        }
        #GROUP220 {
            top: 114px;
            left: 2px;
            width: 298px;
            height: 98px;
        }
        #GROUP221 {
            top: 0px;
            left: 1.8125px;
            width: 294.3125px;
            height: 98px;
        }
        #BOX222 {
            top: 28px;
            left: 1px;
            width: 68.4375px;
            height: 70px;
        }
        #HEADLINE223 {
            top: 0px;
            left: 6.25px;
            padding: 0px;
            width: 61.4375px;
            height: 18px;
        }
        #HEADLINE223 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE224 {
            top: 0px;
            left: 81.2656px;
            padding: 0px;
            width: 61.4375px;
            height: 18px;
        }
        #HEADLINE224 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX225 {
            top: 28px;
            left: 76px;
            width: 68.4375px;
            height: 70px;
        }
        #BOX226 {
            top: 28px;
            left: 226.891px;
            width: 68.4375px;
            height: 70px;
        }
        #HEADLINE227 {
            top: 0px;
            left: 228.172px;
            padding: 0px;
            width: 61.4375px;
            height: 18px;
        }
        #HEADLINE227 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE228 {
            top: 0px;
            left: 156.172px;
            padding: 0px;
            width: 61.4375px;
            height: 18px;
        }
        #HEADLINE228 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX229 {
            top: 28px;
            left: 150.875px;
            width: 68.4375px;
            height: 70px;
        }
        #COUNTDOWN230 {
            top: 40px;
            left: 1px;
            width: 298px;
            height: 43px;
        }
        #COUNTDOWN230 > .widget-content {
            font-size: 36px;
        }
        #GROUP231 {
            top: 182px;
            left: 16px;
            width: 268px;
            height: 277.375px;
        }
        #FORM233 {
            top: 20px;
            left: 0px;
            width: 268px;
            height: 188.375px;
        }
        #FORM233 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM234 {
            top: 20px;
            left: 0px;
            width: 268px;
            height: 46.125px;
        }
        #ITEM_FORM234 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM235 {
            top: 76.1406px;
            left: 0px;
            width: 268px;
            height: 46.125px;
        }
        #ITEM_FORM235 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM236 {
            top: 132.281px;
            left: 0px;
            width: 268px;
            height: 46.125px;
        }
        #ITEM_FORM236 > .widget-content {
            font-size: 16px;
        }
        #BUTTON232 {
            top: 218.396px;
            left: 0px;
            padding: 0px;
            width: 268px;
            height: 49px;
        }
        #BUTTON232 > .widget-content {
            font-size: 23px;
            text-align: center;
        }
        #HEADLINE219 {
            top: 17px;
            left: 0px;
            padding: 0px;
            width: 300px;
            height: 42.640625px;
        }
        #HEADLINE219 > .widget-content {
            font-size: 21px;
            text-align: center;
            line-height: 22px;
        }
        #HEADLINE245 {
            top: 59.9792px;
            left: 79px;
            padding: 0px;
            width: 200px;
            height: 37.3125px;
        }
        #HEADLINE245 > .widget-content {
            font-size: 32px;
            text-align: left;
        }
        #PARAGRAPH267 {
            top: 778.333px;
            left: 47.5px;
            padding: 0px;
            width: 280px;
            height: 112px;
        }
        #PARAGRAPH267 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #FORM15 {
            top: 182px;
            left: 37.5px;
            width: 300px;
            height: 164.109px;
        }
        #FORM15 > .widget-content {
            font-size: 14px;
        }
        #ITEM_FORM16 {
            top: 0px;
            left: 0px;
            width: 300px;
            height: 44.0156px;
        }
        #ITEM_FORM16 > .widget-content {
            font-size: 14px;
        }
        #ITEM_FORM17 {
            top: 58.7167px;
            left: 0px;
            width: 300px;
            height: 44.0156px;
        }
        #ITEM_FORM17 > .widget-content {
            font-size: 14px;
        }
        #ITEM_FORM18 {
            top: 120.103px;
            left: 0px;
            width: 300px;
            height: 44.0156px;
        }
        #ITEM_FORM18 > .widget-content {
            font-size: 14px;
        }
        #BOX12 {
            top: 0px;
            left: 0px;
            width: 375px;
            height: 152px;
        }
        #HEADLINE13 {
            top: 36px;
            left: 54.1665px;
            padding: 0px;
            width: 266.667px;
            height: 58px;
        }
        #HEADLINE13 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #SHAPE14 {
            top: 91px;
            left: 162.5px;
            width: 50px;
            height: 50px;
        }
        #BUTTON19 {
            top: 352px;
            left: 40.1665px;
            padding: 0px;
            width: 294.667px;
            height: 98.6667px;
        }
        #BUTTON19 > .widget-content {
            font-size: 25px;
            text-align: center;
        }
    }
</style>
