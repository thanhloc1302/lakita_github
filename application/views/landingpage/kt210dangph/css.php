
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
        var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Montserrat:300,400,600,700|Roboto:300,400,700|Roboto+Slab:300,400,700&amp;subset=latin-ext,vietnamese';
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
        #SECTION247 {
            width: 100%;
            height: 716.9765625px;
        }
        #SECTION247 .container {}
        #SECTION247 {}
        #POPUP514 {
            width: 100%;
            height: 100%;
        }
        #POPUP514 .container {
            width: 411px;
            height: 372px;
            top: calc(100%-372px);
        }
        #POPUP514 {}
        #SECTION350 {
            width: 100%;
            height: 594.984375px;
        }
        #SECTION350 .container {}
        #SECTION350 {}
        #SECTION323 {
            width: 100%;
            height: 376.96875px;
        }
        #SECTION323 .container {}
        #SECTION323 {}
        #SECTION31 {
            width: 100%;
            height: 411.9609375px;
        }
        #SECTION31 .container {}
        #SECTION31 {}
        #SECTION372 {
            width: 100%;
            height: 824.96533203125px;
        }
        #SECTION372 .container {}
        #SECTION372 {}
        #SECTION416 {
            width: 100%;
            height: 576.984375px;
        }
        #SECTION416 .container {}
        #SECTION416 {}
        #SECTION437 {
            width: 100%;
            height: 500px;
        }
        #SECTION437 .container {}
        #SECTION437 {}
        #SECTION481 {
            width: 100%;
            height: 982.9375px;
        }
        #SECTION481 .container {}
        #SECTION481 {}
        #POPUP417 {
            width: 100%;
            height: 100%;
        }
        #POPUP417 .container {
            width: 600px;
            height: 242px;
            top: calc(100%-242px);
        }
        #POPUP417 {}
        #POPUP461 {
            width: 100%;
            height: 100%;
        }
        #POPUP461 .container {
            width: 600px;
            height: 180px;
            top: calc(100%-180px);
        }
        #POPUP461 {}
        #POPUP463 {
            width: 100%;
            height: 100%;
        }
        #POPUP463 .container {
            width: 600px;
            height: 400px;
            top: calc(100%-400px);
        }
        #POPUP463 {}
        #POPUP465 {
            width: 100%;
            height: 100%;
        }
        #POPUP465 .container {
            width: 600px;
            height: 294px;
            top: calc(100%-294px);
        }
        #POPUP465 {}
        #POPUP467 {
            width: 100%;
            height: 100%;
        }
        #POPUP467 .container {
            width: 600px;
            height: 176px;
            top: calc(100%-176px);
        }
        #POPUP467 {}
        #POPUP469 {
            width: 100%;
            height: 100%;
        }
        #POPUP469 .container {
            width: 600px;
            height: 147px;
            top: calc(100%-147px);
        }
        #POPUP469 {}
        #IMAGE248 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/uploads/images/f04c3efc-50e6-4b47-9462-12d7627fcd1d.png);
        }
        #IMAGE248 {
            top: 602.5px;
            left: 469.5px;
            width: 0px;
            height: 0px;
        }
        #PARAGRAPH249 {
            top: 283px;
            left: -30px;
            padding: 0px;
            width: 426px;
            height: 135px;
        }
        #PARAGRAPH249 > .widget-content {
            font-size: 35px;
            text-align: left;
        }
        #HEADLINE250 {
            top: 94px;
            left: 144px;
            padding: 0px;
            width: 702px;
            height: 49px;
        }
        #HEADLINE250 > .widget-content {
            font-size: 43px;
            text-align: left;
        }
        #BUTTON257 {
            top: 26px;
            left: 728px;
            padding: 0px;
            width: 255px;
            height: 27px;
        }
        #BUTTON257 > .widget-content {
            font-size: 14px;
            text-align: right;
        }
        #BUTTON258 {
            top: 493px;
            left: 50px;
            padding: 0px;
            width: 218px;
            height: 40px;
        }
        #BUTTON258 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX260 {
            top: 196px;
            left: 485px;
            width: 487px;
            height: 268px;
        }
        #PARAGRAPH262 {
            top: 84.5px;
            left: 9px;
            padding: 0px;
            width: 466px;
            height: 44px;
        }
        #PARAGRAPH262 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE261 {
            top: 6px;
            left: 36px;
            padding: 0px;
            width: 399px;
            height: 68px;
        }
        #HEADLINE261 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #GROUP271 {
            top: 136px;
            left: 78px;
            width: 306px;
            height: 98px;
        }
        #BOX272 {
            top: 28px;
            left: 239px;
            width: 68px;
            height: 70px;
        }
        #BOX273 {
            top: 28px;
            left: 159.015625px;
            width: 70.609375px;
            height: 70px;
        }
        #BOX274 {
            top: 28px;
            left: 82.40625px;
            width: 70.609375px;
            height: 70px;
        }
        #BOX275 {
            top: 28px;
            left: 9.40625px;
            width: 66px;
            height: 70px;
        }
        #COUNTDOWN276 {
            top: 41px;
            left: 1px;
            width: 305px;
            height: 43px;
        }
        #COUNTDOWN276 > .widget-content {
            font-size: 31px;
        }
        #HEADLINE277 {
            top: 0px;
            left: 11px;
            padding: 0px;
            width: 63.375px;
            height: 18px;
        }
        #HEADLINE277 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE278 {
            top: 0px;
            left: 83px;
            padding: 0px;
            width: 63.375px;
            height: 18px;
        }
        #HEADLINE278 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE279 {
            top: 0px;
            left: 237px;
            padding: 0px;
            width: 63.375px;
            height: 18px;
        }
        #HEADLINE279 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE280 {
            top: 0px;
            left: 162px;
            padding: 0px;
            width: 63.375px;
            height: 18px;
        }
        #HEADLINE280 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #LINE284 {
            top: 143px;
            left: 202px;
            width: 514px;
            height: 25px;
        }
        #IMAGE285 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo1-1512808012297.png);
        }
        #IMAGE285 {
            top: 32.8821px;
            left: 11.4063px;
            width: 101.40625762939453px;
            height: 25.97222328186035px;
        }
        #PARAGRAPH304 {
            top: 350.5px;
            left: -39px;
            padding: 0px;
            width: 485px;
            height: 90px;
        }
        #PARAGRAPH304 > .widget-content {
            font-size: 35px;
            text-align: left;
        }
        #LINE305 {
            top: 325px;
            left: -30px;
            width: 400px;
            height: 25px;
        }
        #LINE306 {
            top: 440px;
            left: -32px;
            width: 400px;
            height: 25px;
        }
        #BOX264 {
            top: 441.5px;
            left: 485px;
            width: 487px;
            height: 216.75px;
        }
        #FORM308 {
            top: 14.75px;
            left: 25px;
            width: 424px;
            height: 126px;
        }
        #ITEM_FORM309 {
            top: 0px;
            left: 0px;
            width: 424px;
            height: 36px;
        }
        #ITEM_FORM310 {
            top: 45px;
            left: 0px;
            width: 424px;
            height: 36px;
        }
        #ITEM_FORM311 {
            top: 90px;
            left: 0px;
            width: 424px;
            height: 36px;
        }
        #BUTTON313 {
            top: 176.75px;
            left: 22px;
            padding: 0px;
            width: 0px;
            height: 40px;
        }
        #BUTTON313 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BUTTON322 {
            top: 156.5px;
            left: 29px;
            padding: 0px;
            width: 160px;
            height: 40px;
        }
        #BUTTON322 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX515 {
            top: 177px;
            left: -0.5px;
            width: 412px;
            height: 194.25px;
        }
        #LINE516 {
            top: 12px;
            left: 192px;
            width: 38px;
            height: 25px;
        }
        #HEADLINE517 {
            top: 34px;
            left: 89px;
            padding: 0px;
            width: 241px;
            height: 84px;
        }
        #HEADLINE517 > .widget-content {
            font-size: 36px;
            text-align: center;
        }
        #PARAGRAPH518 {
            top: 133px;
            left: 34px;
            padding: 0px;
            width: 349px;
            height: 60px;
        }
        #PARAGRAPH518 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #IMAGE519 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/thankyou.png);
        }
        #IMAGE519 {
            top: 37.5px;
            left: 81.5px;
            width: 241.8125px;
            height: 110px;
        }
        #BUTTON354 {
            top: 494px;
            left: 362px;
            padding: 0px;
            width: 204px;
            height: 34px;
        }
        #BUTTON354 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #LISTOP359 {
            top: 136.406px;
            left: -105.976px;
            width: 636.99658203125px;
            height: 308.4028015136719px;
        }
        #LISTOP359 > .widget-content {
            font-size: 17px;
            text-align: left;
        }
        #LISTOP359 > ol.widget-content li::before {
            content: counter(linum, decimal);
            width: 51px;
            height: 51px;
            font-size: 25.5px;
            color: rgba(240, 199, 21, 1);
            margin-right: 0px;
            content: url('data:image/svg+xml;utf8,<svg fill="rgba(240,199,21,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M9,5A3.5,3.5 0 0,1 12.5,8.5A3.5,3.5 0 0,1 9,12A3.5,3.5 0 0,1 5.5,8.5A3.5,3.5 0 0,1 9,5M9,13.75C12.87,13.75 16,15.32 16,17.25V19H2V17.25C2,15.32 5.13,13.75 9,13.75M17,12.66L14.25,9.66L15.41,8.5L17,10.09L20.59,6.5L21.75,7.91L17,12.66Z"/> </svg>');
            background-repeat: no-repeat;
            position: relative;
            top: 0px;
            left: 0;
        }
        #LISTOP359 > ol.widget-content li {
            margin-bottom: 16px;
        }
        #LISTOP359 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #HEADLINE360 {
            top: 21px;
            left: 201px;
            padding: 0px;
            width: 647px;
            height: 46px;
        }
        #HEADLINE360 > .widget-content {
            font-size: 40px;
            text-align: left;
        }
        #YOUTUBE361 {
            top: 128.029px;
            left: 564.299px;
            width: 457.4765625px;
            height: 307.9921875px;
        }
        #LINE450 {
            top: 67px;
            left: 253px;
            width: 418px;
            height: 25px;
        }
        #HEADLINE325 {
            top: 37.9688px;
            left: 195px;
            padding: 0px;
            width: 592px;
            height: 68px;
        }
        #HEADLINE325 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #BOX362 {
            top: 175px;
            left: -18px;
            width: 309px;
            height: 170px;
        }
        #HEADLINE363 {
            top: 13px;
            left: 24px;
            padding: 0px;
            width: 268px;
            height: 30px;
        }
        #HEADLINE363 > .widget-content {
            font-size: 24px;
            text-align: left;
        }
        #PARAGRAPH364 {
            top: 54px;
            left: 17px;
            padding: 0px;
            width: 292px;
            height: 95px;
        }
        #PARAGRAPH364 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #BOX365 {
            top: 175px;
            left: 318px;
            width: 321px;
            height: 170px;
        }
        #HEADLINE366 {
            top: 182px;
            left: 330px;
            padding: 0px;
            width: 297px;
            height: 58px;
        }
        #HEADLINE366 > .widget-content {
            font-size: 23px;
            text-align: left;
        }
        #BOX368 {
            top: 175px;
            left: 661px;
            width: 321px;
            height: 170px;
        }
        #PARAGRAPH369 {
            top: 65px;
            left: 17px;
            padding: 0px;
            width: 292px;
            height: 57px;
        }
        #PARAGRAPH369 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH367 {
            top: 240px;
            left: 330px;
            padding: 0px;
            width: 292px;
            height: 76px;
        }
        #PARAGRAPH367 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE370 {
            top: 182px;
            left: 718px;
            padding: 0px;
            width: 297px;
            height: 29px;
        }
        #HEADLINE370 > .widget-content {
            font-size: 23px;
            text-align: left;
        }
        #LINE371 {
            top: 104px;
            left: 298.758px;
            width: 400px;
            height: 25px;
        }
        #GROUP72 {
            top: 114px;
            left: 767.75px;
            width: 226px;
            height: 191px;
        }
        #PARAGRAPH73 {
            top: 153px;
            left: 4px;
            padding: 0px;
            width: 223px;
            height: 38px;
        }
        #PARAGRAPH73 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #SHAPE74 {
            top: 0px;
            left: 65px;
            width: 103px;
            height: 103px;
        }
        #HEADLINE75 {
            top: 113px;
            left: 1px;
            padding: 0px;
            width: 218px;
            height: 27px;
        }
        #HEADLINE75 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #GROUP76 {
            top: 123px;
            left: 493.75px;
            width: 260px;
            height: 198px;
        }
        #PARAGRAPH77 {
            top: 141px;
            left: 1px;
            padding: 0px;
            width: 223px;
            height: 57px;
        }
        #PARAGRAPH77 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #SHAPE78 {
            top: 0px;
            left: 66px;
            width: 87px;
            height: 103px;
        }
        #HEADLINE79 {
            top: 106.5px;
            left: 2px;
            padding: 0px;
            width: 259px;
            height: 27px;
        }
        #HEADLINE79 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #HEADLINE373 {
            top: 35px;
            left: 122px;
            padding: 0px;
            width: 764px;
            height: 36px;
        }
        #HEADLINE373 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #GROUP67 {
            top: 126.5px;
            left: -19.25px;
            width: 223px;
            height: 194.5px;
        }
        #PARAGRAPH36 {
            top: 137.5px;
            left: 1px;
            padding: 0px;
            width: 223px;
            height: 57px;
        }
        #PARAGRAPH36 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #HEADLINE38 {
            top: 103px;
            left: 2px;
            padding: 0px;
            width: 218px;
            height: 27px;
        }
        #HEADLINE38 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #SHAPE37 {
            top: 0px;
            left: 62px;
            width: 92px;
            height: 102px;
        }
        #GROUP68 {
            top: 119px;
            left: 226.75px;
            width: 248px;
            height: 185px;
        }
        #PARAGRAPH69 {
            top: 147px;
            left: 13px;
            padding: 0px;
            width: 223px;
            height: 38px;
        }
        #PARAGRAPH69 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #SHAPE70 {
            top: 0px;
            left: 74px;
            width: 103px;
            height: 103px;
        }
        #HEADLINE71 {
            top: 113px;
            left: 1px;
            padding: 0px;
            width: 248px;
            height: 27px;
        }
        #HEADLINE71 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #LINE374 {
            top: 338px;
            left: 69px;
            width: 817px;
            height: 25px;
        }
        #BOX377 {
            top: 136px;
            left: 0px;
            width: 468px;
            height: 147px;
        }
        #HEADLINE385 {
            top: 11px;
            left: 13px;
            padding: 0px;
            width: 200px;
            height: 36px;
        }
        #HEADLINE385 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE386 {
            top: 47px;
            left: 54px;
            padding: 0px;
            width: 414px;
            height: 32px;
        }
        #HEADLINE386 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #BUTTON391 {
            top: 89px;
            left: 163px;
            padding: 0px;
            width: 107px;
            height: 40px;
        }
        #BUTTON391 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX378 {
            top: 18.0156px;
            left: 298px;
            width: 374px;
            height: 59px;
        }
        #HEADLINE379 {
            top: 30.0156px;
            left: 321px;
            padding: 0px;
            width: 372px;
            height: 36px;
        }
        #HEADLINE379 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #BOX381 {
            top: 77.0156px;
            left: 206px;
            width: 573px;
            height: 30px;
        }
        #HEADLINE380 {
            top: 0px;
            left: 46px;
            padding: 0px;
            width: 484px;
            height: 30px;
        }
        #HEADLINE380 > .widget-content {
            font-size: 24px;
            text-align: left;
        }
        #BOX392 {
            top: 138px;
            left: 492px;
            width: 468px;
            height: 147px;
        }
        #BUTTON395 {
            top: 89px;
            left: 163px;
            padding: 0px;
            width: 107px;
            height: 40px;
        }
        #BUTTON395 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE394 {
            top: 47px;
            left: 45px;
            padding: 0px;
            width: 414px;
            height: 64px;
        }
        #HEADLINE394 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #HEADLINE393 {
            top: 138px;
            left: 511px;
            padding: 0px;
            width: 200px;
            height: 36px;
        }
        #HEADLINE393 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #BOX396 {
            top: 346px;
            left: 0px;
            width: 468px;
            height: 147px;
        }
        #HEADLINE397 {
            top: 11px;
            left: 13px;
            padding: 0px;
            width: 200px;
            height: 36px;
        }
        #HEADLINE397 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE398 {
            top: 47px;
            left: 54px;
            padding: 0px;
            width: 414px;
            height: 32px;
        }
        #HEADLINE398 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #BUTTON399 {
            top: 89px;
            left: 163px;
            padding: 0px;
            width: 107px;
            height: 40px;
        }
        #BUTTON399 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX403 {
            top: 346.198px;
            left: 494.014px;
            width: 468px;
            height: 147px;
        }
        #HEADLINE404 {
            top: 11px;
            left: 13px;
            padding: 0px;
            width: 200px;
            height: 36px;
        }
        #HEADLINE404 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE405 {
            top: 47px;
            left: 54px;
            padding: 0px;
            width: 414px;
            height: 32px;
        }
        #HEADLINE405 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #BUTTON406 {
            top: 89px;
            left: 163px;
            padding: 0px;
            width: 107px;
            height: 40px;
        }
        #BUTTON406 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX407 {
            top: 550px;
            left: 0px;
            width: 468px;
            height: 147px;
        }
        #HEADLINE408 {
            top: 11px;
            left: 13px;
            padding: 0px;
            width: 200px;
            height: 36px;
        }
        #HEADLINE408 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE409 {
            top: 47px;
            left: 54px;
            padding: 0px;
            width: 414px;
            height: 32px;
        }
        #HEADLINE409 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #BUTTON410 {
            top: 89px;
            left: 163px;
            padding: 0px;
            width: 107px;
            height: 40px;
        }
        #BUTTON410 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX411 {
            top: 550px;
            left: 492px;
            width: 468px;
            height: 147px;
        }
        #HEADLINE412 {
            top: 11px;
            left: 13px;
            padding: 0px;
            width: 200px;
            height: 36px;
        }
        #HEADLINE412 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE413 {
            top: 47px;
            left: 54px;
            padding: 0px;
            width: 414px;
            height: 32px;
        }
        #HEADLINE413 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #BUTTON414 {
            top: 89px;
            left: 163px;
            padding: 0px;
            width: 107px;
            height: 40px;
        }
        #BUTTON414 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BUTTON415 {
            top: 757px;
            left: 407px;
            padding: 0px;
            width: 150px;
            height: 40px;
        }
        #BUTTON415 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #IMAGE423 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/13096361_1093472814056448_1943901872542939421_n-1513094053.jpg);
        }
        #IMAGE423 {
            top: 158px;
            left: 107.773px;
            width: 238px;
            height: 238px;
        }
        #HEADLINE424 {
            top: 35.1875px;
            left: 239px;
            padding: 0px;
            width: 511px;
            height: 36px;
        }
        #HEADLINE424 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #LINE425 {
            top: 70.8359px;
            left: 286.734px;
            width: 400px;
            height: 25px;
        }
        #HEADLINE426 {
            top: 134px;
            left: 374.773px;
            padding: 0px;
            width: 157px;
            height: 33px;
        }
        #HEADLINE426 > .widget-content {
            font-size: 27px;
            text-align: left;
        }
        #HEADLINE428 {
            top: 127.008px;
            left: 531.75px;
            padding: 0px;
            width: 352px;
            height: 41px;
        }
        #HEADLINE428 > .widget-content {
            font-size: 35px;
            text-align: left;
        }
        #LISTOP429 {
            top: 188.133px;
            left: 373.773px;
            width: 579px;
            height: 295px;
        }
        #LISTOP429 > .widget-content {
            text-align: left;
        }
        #LISTOP429 > ol.widget-content li::before {
            content: counter(linum, decimal);
            width: 30px;
            height: 30px;
            font-size: 15px;
            color: rgba(243, 233, 233, 1);
            margin-right: 0px;
            content: url('data:image/svg+xml;utf8,<svg fill="rgba(243,233,233,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M10.5,17.5L7,14L8.41,12.59L10.5,14.67L15.68,9.5L17.09,10.91M10,4H14V6H10M20,6H16V4L14,2H10L8,4V6H4C2.89,6 2,6.89 2,8V19C2,20.11 2.89,21 4,21H20C21.11,21 22,20.11 22,19V8C22,6.89 21.11,6 20,6Z"/> </svg>');
            background-repeat: no-repeat;
            position: relative;
            top: 0px;
            left: 0;
        }
        #LISTOP429 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP429 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #IMAGE471 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/luu_tuan_anh-1513135583.PNG);
        }
        #IMAGE471 {
            top: 133.015625px;
            left: 675px;
            width: 217px;
            height: 185px;
        }
        #PARAGRAPH473 {
            top: 379.047px;
            left: 672px;
            padding: 0px;
            width: 280px;
            height: 57px;
        }
        #PARAGRAPH473 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE474 {
            top: 341.047px;
            left: 655px;
            padding: 0px;
            width: 361px;
            height: 38px;
        }
        #HEADLINE474 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE472 {
            top: 318.015625px;
            left: 741px;
            padding: 0px;
            width: 200px;
            height: 23px;
        }
        #HEADLINE472 > .widget-content {
            font-size: 17px;
            text-align: left;
        }
        #IMAGE447 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/capture1-1512785087576.png);
        }
        #IMAGE447 {
            top: 134.921875px;
            left: 337px;
            width: 196.578125px;
            height: 193.15625px;
        }
        #CAROUSEL438 {
            top: -0.617188px;
            left: -807.258px;
            width: 2478px;
            height: 648px;
        }
        #ITEM-CAROUSEL439 {
            top: 0px;
            left: 0px;
            width: 2686.2421875px;
            height: 671.296875px;
        }
        #HEADLINE443 {
            top: 77.0987px;
            left: 1009.26px;
            padding: 0px;
            width: 516.0234375px;
            height: 55.2421875px;
        }
        #HEADLINE443 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE444 {
            top: 32.7559px;
            left: 981.492px;
            padding: 0px;
            width: 1730.8359375px;
            height: 110.765625px;
        }
        #HEADLINE444 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #PARAGRAPH453 {
            top: 435.3px;
            left: 745.781px;
            padding: 0px;
            width: 359.4609375px;
            height: 173.2265625px;
        }
        #PARAGRAPH453 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH459 {
            top: 491.288px;
            left: 1121.04px;
            padding: 0px;
            width: 378.9375px;
            height: 76.96875px;
        }
        #PARAGRAPH459 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH538 {
            top: 492.216px;
            left: 1538.44px;
            padding: 0px;
            width: 348.984375px;
            height: 62.53125px;
        }
        #PARAGRAPH538 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #IMAGE579 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/Lac_hong-1513135584.PNG);
        }
        #IMAGE579 {
            top: 163.003px;
            left: 799.641px;
            width: 209.6015625px;
            height: 244.9453125px;
        }
        #IMAGE580 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/luu_tuan_anh-1513135583.PNG);
        }
        #IMAGE580 {
            top: 166.787px;
            left: 1527.98px;
            width: 244.6875px;
            height: 241.1015625px;
        }
        #IMAGE581 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/Capture1-1513087592.PNG);
        }
        #IMAGE581 {
            top: 177.84px;
            left: 1173.96px;
            width: 243.1640625px;
            height: 234.140625px;
        }
        #HEADLINE460 {
            top: 452.392px;
            left: 1143.23px;
            padding: 0px;
            width: 461.5546875px;
            height: 22.6640625px;
        }
        #HEADLINE460 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE458 {
            top: 423.772px;
            left: 1186.24px;
            padding: 0px;
            width: 307.7109375px;
            height: 28.6171875px;
        }
        #HEADLINE458 > .widget-content {
            font-size: 18px;
            text-align: left;
        }
        #HEADLINE452 {
            top: 423.52px;
            left: 836.25px;
            padding: 0px;
            width: 307.7109375px;
            height: 29.859375px;
        }
        #HEADLINE452 > .widget-content {
            font-size: 19px;
            text-align: left;
        }
        #HEADLINE537 {
            top: 455.851px;
            left: 1545.26px;
            padding: 0px;
            width: 380.9765625px;
            height: 19.2421875px;
        }
        #HEADLINE537 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE536 {
            top: 417.205px;
            left: 1605.73px;
            padding: 0px;
            width: 307.7109375px;
            height: 27.796875px;
        }
        #HEADLINE536 > .widget-content {
            font-size: 18px;
            text-align: left;
        }
        #LINE445 {
            top: 107.59px;
            left: 1067.48px;
            width: 446.25px;
            height: 36.1875px;
        }
        #PARAGRAPH482 {
            top: 732px;
            left: 110px;
            padding: 0px;
            width: 764px;
            height: 84px;
        }
        #PARAGRAPH482 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #HEADLINE484 {
            top: 340.642px;
            left: 111.007px;
            padding: 0px;
            width: 225px;
            height: 22px;
        }
        #HEADLINE484 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #HEADLINE485 {
            top: 293.377px;
            left: 198.004px;
            padding: 0px;
            width: 534px;
            height: 20px;
        }
        #HEADLINE485 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #GROUP486 {
            top: 237.938px;
            left: 297.5px;
            width: 364px;
            height: 46px;
        }
        #HEADLINE487 {
            top: 18px;
            left: 193.875px;
            padding: 0px;
            width: 171.140625px;
            height: 28px;
        }
        #HEADLINE487 > .widget-content {
            font-size: 24px;
            text-align: left;
        }
        #HEADLINE488 {
            top: 0px;
            left: 196.4375px;
            padding: 0px;
            width: 99.90625px;
            height: 16px;
        }
        #HEADLINE488 > .widget-content {
            font-size: 12px;
            text-align: left;
        }
        #BOX489 {
            top: 3px;
            left: 1px;
            width: 177.515625px;
            height: 39px;
        }
        #HEADLINE490 {
            top: 8px;
            left: 22.9895px;
            padding: 0px;
            width: 139.203125px;
            height: 22px;
        }
        #HEADLINE490 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #FORM491 {
            top: 459.5px;
            left: 31px;
            width: 375px;
            height: 177.625px;
        }
        #ITEM_FORM492 {
            top: 5e-06px;
            left: 0px;
            width: 375px;
            height: 37.671875px;
        }
        #ITEM_FORM493 {
            top: 93.9844px;
            left: 0px;
            width: 375px;
            height: 37.671875px;
        }
        #ITEM_FORM494 {
            top: 46px;
            left: 0px;
            width: 374px;
            height: 37px;
        }
        #ITEM_FORM508 {
            top: 141.656px;
            left: 0px;
            width: 375px;
            height: 36px;
        }
        #BUTTON496 {
            top: 807.595px;
            left: 9.031px;
            padding: 0px;
            width: 10px;
            height: 30px;
        }
        #BUTTON496 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP498 {
            top: 375.688px;
            left: 73.5626px;
            width: 277px;
            height: 56px;
        }
        #BOX499 {
            top: 1px;
            left: 1px;
            width: 55px;
            height: 55px;
        }
        #HEADLINE500 {
            top: 35px;
            left: 3px;
            padding: 0px;
            width: 46px;
            height: 17px;
        }
        #HEADLINE500 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX501 {
            top: 1px;
            left: 75px;
            width: 55px;
            height: 55px;
        }
        #HEADLINE502 {
            top: 35px;
            left: 3px;
            padding: 0px;
            width: 46px;
            height: 17px;
        }
        #HEADLINE502 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX503 {
            top: 0px;
            left: 148px;
            width: 55px;
            height: 55px;
        }
        #HEADLINE504 {
            top: 35px;
            left: 3px;
            padding: 0px;
            width: 46px;
            height: 17px;
        }
        #HEADLINE504 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX505 {
            top: 0px;
            left: 223px;
            width: 55px;
            height: 55px;
        }
        #HEADLINE506 {
            top: 35px;
            left: 3px;
            padding: 0px;
            width: 46px;
            height: 17px;
        }
        #HEADLINE506 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #COUNTDOWN507 {
            top: 386.313px;
            left: 73.5625px;
            width: 290px;
            height: 26px;
        }
        #COUNTDOWN507 > .widget-content {
            font-size: 30px;
        }
        #BUTTON509 {
            top: 654.345px;
            left: 35.0069px;
            padding: 0px;
            width: 272px;
            height: 40px;
        }
        #BUTTON509 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GOOGLE_MAP510 {
            top: 350.984px;
            left: 454.99px;
            width: 598px;
            height: 349px;
        }
        #LINE511 {
            top: 815.984px;
            left: 251px;
            width: 488px;
            height: 25px;
        }
        #HEADLINE512 {
            top: 848.968px;
            left: 200px;
            padding: 0px;
            width: 589px;
            height: 44px;
        }
        #HEADLINE512 > .widget-content {
            font-size: 16px;
            text-align: left;
        }
        #HEADLINE513 {
            top: 900.906px;
            left: 340px;
            padding: 0px;
            width: 439px;
            height: 21px;
        }
        #HEADLINE513 > .widget-content {
            font-size: 15px;
            text-align: left;
        }
        #HEADLINE483 {
            top: 181.852px;
            left: 82px;
            padding: 0px;
            width: 815px;
            height: 38px;
        }
        #HEADLINE483 > .widget-content {
            font-size: 32px;
            text-align: center;
        }
        #PARAGRAPH421 {
            top: 16px;
            left: 0px;
            padding: 0px;
            width: 600px;
            height: 198px;
        }
        #PARAGRAPH421 > .widget-content {
            font-size: 16px;
            text-align: left;
        }
        #PARAGRAPH462 {
            top: 10.5px;
            left: 8px;
            padding: 0px;
            width: 571px;
            height: 171px;
        }
        #PARAGRAPH462 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH464 {
            top: 17px;
            left: 13px;
            padding: 0px;
            width: 575px;
            height: 361px;
        }
        #PARAGRAPH464 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH466 {
            top: 17px;
            left: 15px;
            padding: 0px;
            width: 572px;
            height: 266px;
        }
        #PARAGRAPH466 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH468 {
            top: 16px;
            left: 12px;
            padding: 0px;
            width: 573px;
            height: 133px;
        }
        #PARAGRAPH468 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH470 {
            top: 16px;
            left: 15px;
            padding: 0px;
            width: 565px;
            height: 114px;
        }
        #PARAGRAPH470 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
    }

    #SECTION247 {
        display: block;
        background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/home2-event-box-1.jpg");
        background-color: rgba(255, 255, 255, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #SECTION247 > .ladi-widget-overlay {
        background-color: rgba(8, 6, 28, 0.78);
    }

    #POPUP514 .container {
        display: block;
        background-color: rgba(56, 64, 81, 1);
    }

    #SECTION350 {
        display: block;
        background-image: url("https://static.ladipage.net/d/5a28c4f8c3f6592b3acabec8/bdfb-1513072341.jpg");
        background-color: rgba(255, 255, 255, 0);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #SECTION350 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0.71);
    }

    #SECTION323 {
        display: block;
        background-image: url("https://static.ladipage.net/d/5a28c4f8c3f6592b3acabec8/strength-people-hands-success-meeting_1150-1690-1512778819512.jpg");
        background-color: rgba(42, 28, 138, 0.84);
        background-size: cover;
        background-attachment: fixed;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #SECTION323 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0.87);
    }

    #SECTION31 {
        display: block;
        background-image: url("https://static.ladipage.net/d/5a28c4f8c3f6592b3acabec8/954-1512977756.jpg");
        background-color: rgba(246, 246, 246, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #SECTION31 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0.83);
    }

    #SECTION372 {
        display: block;
        background-image: url("https://static.ladipage.net/d/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
        background-color: rgba(255, 255, 255, 0);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #SECTION372 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0.67);
    }

    #SECTION416 {
        display: block;
        background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/footer-star-2.png");
        background-color: rgba(25, 4, 4, 0.82);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #SECTION416 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0.52);
    }

    #SECTION437 {
        display: block;
        background-color: rgba(255, 255, 255, 0);
    }

    #SECTION481 {
        display: block;
        background-image: url("https://static.ladipage.net/d/5a28c4f8c3f6592b3acabec8/time-2980690_1920-1513152253.jpg");
        background-color: rgba(255, 255, 255, 0);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #SECTION481 > .ladi-widget-overlay {
        background-color: rgba(8, 8, 8, 0.85);
    }

    #POPUP417 .container {
        display: block;
        background-color: rgba(111, 228, 13, 1);
    }

    #POPUP461 .container {
        display: block;
        background-color: rgba(111, 228, 13, 1);
    }

    #POPUP463 .container {
        display: block;
        background-color: rgba(111, 228, 13, 1);
    }

    #POPUP465 .container {
        display: block;
        background-color: rgba(111, 228, 13, 1);
    }

    #POPUP467 .container {
        display: block;
        background-color: rgba(111, 228, 13, 1);
    }

    #POPUP469 .container {
        display: block;
        background-color: rgba(111, 228, 13, 1);
    }

    #IMAGE248 {
        display: block;
    }

    #IMAGE248 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE248 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #PARAGRAPH249 {
        display: block;
    }

    #PARAGRAPH249 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Montserrat', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 45px;
    }

    #HEADLINE250 {
        display: block;
    }

    #HEADLINE250 > .widget-content {
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 49px;
    }

    #BUTTON257 {
        display: table;
    }

    #BUTTON257 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 11px;
    }

    #BUTTON257> .widget-content {
        border-radius: 5px;
    }

    #BUTTON257> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #BUTTON258 {
        display: table;
    }

    #BUTTON258 > .widget-content {
        background-color: rgba(240, 199, 21, 1);
        color: rgba(25, 21, 21, 1);
        font-weight: 700;
        line-height: 40px;
        box-shadow: 3px 3px 5px rgba(255, 255, 255, 1);
    }

    #BUTTON258> .widget-content {
        border-radius: 5px;
    }

    #BUTTON258> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #BOX260 {
        display: block;
    }

    #BOX260 > .widget-content {
        background-color: rgba(255, 255, 255, 0.22);
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH262 {
        display: block;
    }

    #PARAGRAPH262 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 22px;
    }

    #HEADLINE261 {
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        display: block;
    }

    #HEADLINE261 > .widget-content {
        color: rgba(240, 199, 21, 1);
        font-weight: 700;
        line-height: 34px;
    }

    #GROUP271 {
        display: block;
    }

    #GROUP271 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX272 {
        display: block;
    }

    #BOX272 > .widget-content {
        background-color: rgba(110, 110, 110, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX272> .widget-content {
        border-radius: 6px;
    }

    #BOX272> .ladi-widget-overlay {
        border-radius: 6px;
    }

    #BOX273 {
        display: block;
    }

    #BOX273 > .widget-content {
        background-color: rgba(110, 110, 110, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX273> .widget-content {
        border-radius: 6px;
    }

    #BOX273> .ladi-widget-overlay {
        border-radius: 6px;
    }

    #BOX274 {
        display: block;
    }

    #BOX274 > .widget-content {
        background-color: rgba(110, 110, 110, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX274> .widget-content {
        border-radius: 6px;
    }

    #BOX274> .ladi-widget-overlay {
        border-radius: 6px;
    }

    #BOX275 {
        display: block;
    }

    #BOX275 > .widget-content {
        background-color: rgba(110, 110, 110, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX275> .widget-content {
        border-radius: 6px;
    }

    #BOX275> .ladi-widget-overlay {
        border-radius: 6px;
    }

    #COUNTDOWN276 {
        display: block;
    }

    #COUNTDOWN276 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(240, 217, 17, 1);
        font-weight: 700;
        line-height: 0px;
    }

    #HEADLINE277 {
        display: block;
    }

    #HEADLINE277 > .widget-content {
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #HEADLINE278 {
        display: block;
    }

    #HEADLINE278 > .widget-content {
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #HEADLINE279 {
        display: block;
    }

    #HEADLINE279 > .widget-content {
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #HEADLINE280 {
        display: block;
    }

    #HEADLINE280 > .widget-content {
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #LINE284 {
        display: block;
    }

    #LINE284>.widget-content .line {
        border-top-width: 2px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: rgba(249, 242, 242, 1);
        margin-top: 10.5px;
    }

    #LINE284 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE285 {
        display: block;
    }

    #IMAGE285 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE285 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #PARAGRAPH304 {
        display: block;
    }

    #PARAGRAPH304 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Montserrat', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 45px;
    }

    #LINE305 {
        display: block;
    }

    #LINE305>.widget-content .line {
        border-top-width: 2px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: rgba(243, 227, 227, 1);
        margin-top: 10.5px;
    }

    #LINE305 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #LINE306 {
        display: block;
    }

    #LINE306>.widget-content .line {
        border-top-width: 2px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: rgba(243, 227, 227, 1);
        margin-top: 10.5px;
    }

    #LINE306 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX264 {
        display: block;
    }

    #BOX264 > .widget-content {
        background-color: rgba(239, 231, 231, 0.9);
        color: rgba(0, 0, 0, 1);
        box-shadow: 0px 4px 10px rgba(56, 56, 56, 0.13);
    }

    #FORM308 {
        display: block;
    }

    #FORM308 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM309 {
        display: block;
    }

    #ITEM_FORM309 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM309> .widget-content {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(240, 199, 21, 1);
    }

    #ITEM_FORM309> .ladi-widget-overlay {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(240, 199, 21, 1);
    }

    #ITEM_FORM310 {
        display: block;
    }

    #ITEM_FORM310 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM310> .widget-content {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(240, 199, 21, 1);
    }

    #ITEM_FORM310> .ladi-widget-overlay {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(240, 199, 21, 1);
    }

    #ITEM_FORM311 {
        display: block;
    }

    #ITEM_FORM311 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM311> .widget-content {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(240, 199, 21, 1);
    }

    #ITEM_FORM311> .ladi-widget-overlay {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(240, 199, 21, 1);
    }

    #BUTTON313 {
        display: table;
    }

    #BUTTON313 > .widget-content {
        background-color: #3D9BE9;
        color: #ffffff;
        line-height: 40px;
    }

    #BUTTON313> .widget-content {
        border-radius: 5px;
    }

    #BUTTON313> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #BUTTON322 {
        display: table;
    }

    #BUTTON322 > .widget-content {
        background-color: rgba(240, 199, 21, 1);
        color: rgba(23, 20, 20, 1);
        font-weight: 700;
        line-height: 40px;
    }

    #BUTTON322> .widget-content {
        border-radius: 5px;
    }

    #BUTTON322> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #BOX515 {
        display: block;
    }

    #BOX515 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #LINE516 {
        display: block;
    }

    #LINE516>.widget-content .line {
        border-top-width: 4px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: #358aff;
        margin-top: 8.5px;
    }

    #LINE516 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
    }

    #HEADLINE517 {
        display: block;
    }

    #HEADLINE517 > .widget-content {
        font-family: 'Montserrat', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(46, 46, 46, 1);
        font-weight: 400;
        line-height: 42px;
    }

    #PARAGRAPH518 {
        display: block;
    }

    #PARAGRAPH518 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Montserrat', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(143, 143, 143, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #IMAGE519 {
        display: block;
    }

    #IMAGE519 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE519 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #BUTTON354 {
        display: table;
    }

    #BUTTON354 > .widget-content {
        background-color: rgba(240, 199, 21, 1);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(33, 29, 29, 1);
        font-weight: 400;
        line-height: 24px;
    }

    #BUTTON354> .widget-content {
        border-radius: 5px;
    }

    #BUTTON354> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #LISTOP359 {
        display: block;
    }

    #LISTOP359 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(248, 237, 237, 1);
        line-height: 23px;
    }

    #HEADLINE360 {
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        display: block;
    }

    #HEADLINE360 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(252, 252, 252, 1);
        font-weight: 700;
        line-height: 46px;
    }

    #YOUTUBE361 {
        display: block;
    }

    #YOUTUBE361 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        box-shadow: 4px 2px 3px rgba(243, 230, 230, 1);
    }

    #LINE450 {
        display: block;
    }

    #LINE450>.widget-content .line {
        border-top-width: 2px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: rgba(248, 242, 242, 1);
        margin-top: 10.5px;
    }

    #LINE450 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE325 {
        display: block;
    }

    #HEADLINE325 > .widget-content {
        opacity: 1;
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(248, 239, 239, 1);
        font-weight: 400;
        line-height: 34px;
    }

    #BOX362 {
        display: block;
    }

    #BOX362 > .widget-content {
        background-color: rgba(218, 198, 26, 0.61);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE363 {
        display: block;
    }

    #HEADLINE363 > .widget-content {
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(245, 245, 245, 1);
        font-weight: 400;
        line-height: 30px;
    }

    #PARAGRAPH364 {
        display: block;
    }

    #PARAGRAPH364 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(242, 230, 230, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #BOX365 {
        display: block;
    }

    #BOX365 > .widget-content {
        background-color: rgba(218, 198, 26, 0.61);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE366 {
        display: block;
    }

    #HEADLINE366 > .widget-content {
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(245, 245, 245, 1);
        font-weight: 400;
        line-height: 29px;
    }

    #BOX368 {
        display: block;
    }

    #BOX368 > .widget-content {
        background-color: rgba(218, 198, 26, 0.61);
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH369 {
        display: block;
    }

    #PARAGRAPH369 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(242, 230, 230, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #PARAGRAPH367 {
        display: block;
    }

    #PARAGRAPH367 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(242, 230, 230, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #HEADLINE370 {
        display: block;
    }

    #HEADLINE370 > .widget-content {
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(245, 245, 245, 1);
        font-weight: 400;
        line-height: 29px;
    }

    #LINE371 {
        display: block;
    }

    #LINE371>.widget-content .line {
        border-top-width: 2px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: rgba(245, 236, 236, 1);
        margin-top: 10.5px;
    }

    #LINE371 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #GROUP72 {
        display: block;
    }

    #GROUP72 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH73 {
        display: block;
    }

    #PARAGRAPH73 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(248, 242, 242, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #SHAPE74 {
        display: block;
    }

    #SHAPE74 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: #008ed6;
    }

    #SHAPE74> .widget-content svg {
        fill: #008ed6;
    }

    #HEADLINE75 {
        display: block;
    }

    #HEADLINE75 > .widget-content {
        opacity: 1;
        font-family: 'Roboto Slab', serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(240, 234, 234, 1);
        font-weight: 400;
        line-height: 27px;
    }

    #GROUP76 {
        display: block;
    }

    #GROUP76 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH77 {
        display: block;
    }

    #PARAGRAPH77 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(246, 240, 240, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #SHAPE78 {
        display: block;
    }

    #SHAPE78 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: #008ed6;
    }

    #SHAPE78> .widget-content svg {
        fill: #008ed6;
    }

    #HEADLINE79 {
        display: block;
    }

    #HEADLINE79 > .widget-content {
        opacity: 1;
        font-family: 'Roboto Slab', serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(246, 240, 240, 1);
        font-weight: 400;
        line-height: 27px;
    }

    #HEADLINE373 {
        display: block;
    }

    #HEADLINE373 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(245, 245, 246, 1);
        font-weight: 700;
        line-height: 36px;
    }

    #GROUP67 {
        display: block;
    }

    #GROUP67 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH36 {
        display: block;
    }

    #PARAGRAPH36 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(248, 237, 237, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #HEADLINE38 {
        display: block;
    }

    #HEADLINE38 > .widget-content {
        opacity: 1;
        font-family: 'Roboto Slab', serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(248, 242, 242, 1);
        font-weight: 400;
        line-height: 27px;
    }

    #SHAPE37 {
        display: block;
    }

    #SHAPE37 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: #008ed6;
    }

    #SHAPE37> .widget-content svg {
        fill: #008ed6;
    }

    #GROUP68 {
        display: block;
    }

    #GROUP68 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH69 {
        display: block;
    }

    #PARAGRAPH69 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(248, 234, 234, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #SHAPE70 {
        display: block;
    }

    #SHAPE70 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: #008ed6;
    }

    #SHAPE70> .widget-content svg {
        fill: #008ed6;
    }

    #HEADLINE71 {
        display: block;
    }

    #HEADLINE71 > .widget-content {
        opacity: 1;
        font-family: 'Roboto Slab', serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(240, 227, 227, 1);
        font-weight: 400;
        line-height: 27px;
    }

    #LINE374 {
        display: block;
    }

    #LINE374>.widget-content .line {
        border-top-width: 2px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: rgba(246, 243, 243, 1);
        margin-top: 10.5px;
    }

    #LINE374 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX377 {
        display: block;
    }

    #BOX377 > .widget-content {
        background-color: rgba(255, 253, 231, 0.88);
        color: rgba(0, 0, 0, 1);
    }

    #BOX377> .widget-content {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #BOX377> .ladi-widget-overlay {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #HEADLINE385 {
        display: block;
    }

    #HEADLINE385 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 36px;
    }

    #HEADLINE386 {
        display: block;
    }

    #HEADLINE386 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 32px;
    }

    #BUTTON391 {
        display: table;
    }

    #BUTTON391 > .widget-content {
        background-color: rgba(33, 185, 24, 1);
        color: #ffffff;
        line-height: 40px;
    }

    #BUTTON391> .widget-content {
        border-radius: 5px;
    }

    #BUTTON391> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #BOX378 {
        display: block;
    }

    #BOX378 > .widget-content {
        background-color: rgba(33, 185, 24, 1);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE379 {
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        display: block;
    }

    #HEADLINE379 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(239, 229, 229, 1);
        font-weight: 700;
        line-height: 36px;
    }

    #BOX381 {
        display: block;
    }

    #BOX381 > .widget-content {
        background-color: rgba(33, 185, 24, 1);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE380 {
        display: block;
    }

    #HEADLINE380 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(246, 237, 237, 1);
        font-weight: 400;
        line-height: 30px;
    }

    #BOX392 {
        display: block;
    }

    #BOX392 > .widget-content {
        background-color: rgba(246, 239, 239, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX392> .widget-content {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #BOX392> .ladi-widget-overlay {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #BUTTON395 {
        display: table;
    }

    #BUTTON395 > .widget-content {
        background-color: rgba(33, 185, 24, 1);
        color: #ffffff;
        line-height: 40px;
    }

    #BUTTON395> .widget-content {
        border-radius: 5px;
    }

    #BUTTON395> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #HEADLINE394 {
        display: block;
    }

    #HEADLINE394 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 32px;
    }

    #HEADLINE393 {
        display: block;
    }

    #HEADLINE393 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 36px;
    }

    #BOX396 {
        display: block;
    }

    #BOX396 > .widget-content {
        background-color: rgba(246, 239, 239, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX396> .widget-content {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #BOX396> .ladi-widget-overlay {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #HEADLINE397 {
        display: block;
    }

    #HEADLINE397 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 36px;
    }

    #HEADLINE398 {
        display: block;
    }

    #HEADLINE398 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 32px;
    }

    #BUTTON399 {
        display: table;
    }

    #BUTTON399 > .widget-content {
        background-color: rgba(33, 185, 24, 1);
        color: #ffffff;
        line-height: 40px;
    }

    #BUTTON399> .widget-content {
        border-radius: 5px;
    }

    #BUTTON399> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #BOX403 {
        display: block;
    }

    #BOX403 > .widget-content {
        background-color: rgba(246, 239, 239, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX403> .widget-content {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #BOX403> .ladi-widget-overlay {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #HEADLINE404 {
        display: block;
    }

    #HEADLINE404 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 36px;
    }

    #HEADLINE405 {
        display: block;
    }

    #HEADLINE405 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 32px;
    }

    #BUTTON406 {
        display: table;
    }

    #BUTTON406 > .widget-content {
        background-color: rgba(33, 185, 24, 1);
        color: #ffffff;
        line-height: 40px;
    }

    #BUTTON406> .widget-content {
        border-radius: 5px;
    }

    #BUTTON406> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #BOX407 {
        display: block;
    }

    #BOX407 > .widget-content {
        background-color: rgba(246, 239, 239, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX407> .widget-content {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #BOX407> .ladi-widget-overlay {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #HEADLINE408 {
        display: block;
    }

    #HEADLINE408 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 36px;
    }

    #HEADLINE409 {
        display: block;
    }

    #HEADLINE409 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 32px;
    }

    #BUTTON410 {
        display: table;
    }

    #BUTTON410 > .widget-content {
        background-color: rgba(33, 185, 24, 1);
        color: #ffffff;
        line-height: 40px;
    }

    #BUTTON410> .widget-content {
        border-radius: 5px;
    }

    #BUTTON410> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #BOX411 {
        display: block;
    }

    #BOX411 > .widget-content {
        background-color: rgba(246, 239, 239, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX411> .widget-content {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #BOX411> .ladi-widget-overlay {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(116, 186, 35, 1);
    }

    #HEADLINE412 {
        display: block;
    }

    #HEADLINE412 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 700;
        line-height: 36px;
    }

    #HEADLINE413 {
        display: block;
    }

    #HEADLINE413 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 32px;
    }

    #BUTTON414 {
        display: table;
    }

    #BUTTON414 > .widget-content {
        background-color: rgba(33, 185, 24, 1);
        color: #ffffff;
        line-height: 40px;
    }

    #BUTTON414> .widget-content {
        border-radius: 5px;
    }

    #BUTTON414> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #BUTTON415 {
        display: table;
    }

    #BUTTON415 > .widget-content {
        background-color: rgba(240, 199, 21, 1);
        color: rgba(33, 29, 29, 1);
        font-weight: 700;
        line-height: 40px;
    }

    #BUTTON415> .widget-content {
        border-radius: 5px;
    }

    #BUTTON415> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #IMAGE423 {
        display: block;
    }

    #IMAGE423 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE423 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #HEADLINE424 {
        display: block;
    }

    #HEADLINE424 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(248, 237, 237, 1);
        font-weight: 700;
        line-height: 36px;
    }

    #LINE425 {
        display: block;
    }

    #LINE425>.widget-content .line {
        border-top-width: 2px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: rgba(245, 236, 236, 1);
        margin-top: 10.5px;
    }

    #LINE425 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE426 {
        display: block;
    }

    #HEADLINE426 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(245, 237, 237, 1);
        font-weight: 400;
        line-height: 33px;
    }

    #HEADLINE428 {
        display: block;
    }

    #HEADLINE428 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(240, 233, 233, 1);
        font-weight: 400;
        line-height: 41px;
    }

    #LISTOP429 {
        display: block;
    }

    #LISTOP429 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(246, 239, 239, 1);
        line-height: 20px;
    }

    #IMAGE471 {
        display: block;
    }

    #IMAGE471 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE471> .widget-content {
        border-width: 0px;
        border-style: solid;
        border-color: rgba(0, 0, 0, 1);
    }

    #IMAGE471> .ladi-widget-overlay {
        border-width: 0px;
        border-style: solid;
        border-color: rgba(0, 0, 0, 1);
    }

    #IMAGE471 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #PARAGRAPH473 {
        display: block;
    }

    #PARAGRAPH473 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(252, 248, 248, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #HEADLINE474 {
        display: block;
    }

    #HEADLINE474 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(251, 245, 245, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #HEADLINE472 {
        display: block;
    }

    #HEADLINE472 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(252, 251, 251, 1);
        font-weight: 400;
        line-height: 23px;
    }

    #IMAGE447 {
        display: block;
    }

    #IMAGE447 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE447> .widget-content {
        border-width: 0px;
        border-style: solid;
        border-color: rgba(0, 0, 0, 1);
    }

    #IMAGE447> .ladi-widget-overlay {
        border-width: 0px;
        border-style: solid;
        border-color: rgba(0, 0, 0, 1);
    }

    #IMAGE447 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #CAROUSEL438 {
        display: block;
    }

    #CAROUSEL438 > .widget-content {
        color: rgba(0, 0, 0, 1);
    }

    #ITEM-CAROUSEL439 {}

    #ITEM-CAROUSEL439 > .widget-content {
        background-image: url("https://static.ladipage.net/d/5a28c4f8c3f6592b3acabec8/action-2277292_1920-1513095389.jpg");
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: repeat;
        background-color: rgba(255, 255, 255, 0);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: repeat;
    }

    #ITEM-CAROUSEL439 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0.75);
    }

    #HEADLINE443 {
        display: block;
    }

    #HEADLINE443 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 36px;
    }

    #HEADLINE444 {
        display: block;
    }

    #HEADLINE444 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(246, 240, 240, 1);
        font-weight: 700;
        line-height: 36px;
    }

    #PARAGRAPH453 {
        display: block;
    }

    #PARAGRAPH453 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(248, 240, 240, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #PARAGRAPH459 {
        display: block;
    }

    #PARAGRAPH459 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(251, 246, 246, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #PARAGRAPH538 {
        display: block;
    }

    #PARAGRAPH538 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(247, 244, 244, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #IMAGE579 {
        display: block;
    }

    #IMAGE579 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE579 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #IMAGE580 {
        display: block;
    }

    #IMAGE580 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE580 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #IMAGE581 {
        display: block;
    }

    #IMAGE581 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #IMAGE581 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0)
    }

    #HEADLINE460 {
        display: block;
    }

    #HEADLINE460 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(252, 248, 248, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #HEADLINE458 {
        display: block;
    }

    #HEADLINE458 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(251, 248, 248, 1);
        font-weight: 400;
        line-height: 24px;
    }

    #HEADLINE452 {
        display: block;
    }

    #HEADLINE452 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(254, 252, 252, 1);
        font-weight: 400;
        line-height: 25px;
    }

    #HEADLINE537 {
        display: block;
    }

    #HEADLINE537 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(250, 246, 246, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #HEADLINE536 {
        display: block;
    }

    #HEADLINE536 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(244, 244, 244, 1);
        font-weight: 400;
        line-height: 24px;
    }

    #LINE445 {
        display: block;
    }

    #LINE445>.widget-content .line {
        border-top-width: 3px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: rgba(245, 240, 240, 1);
        margin-top: 13.08506965637207px;
    }

    #LINE445 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH482 {
        display: block;
    }

    #PARAGRAPH482 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        line-height: 21px;
    }

    #HEADLINE484 {
        display: block;
    }

    #HEADLINE484 > .widget-content {
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 22px;
    }

    #HEADLINE485 {
        display: block;
    }

    #HEADLINE485 > .widget-content {
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 20px;
    }

    #GROUP486 {
        display: block;
    }

    #GROUP486 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE487 {
        display: block;
    }

    #HEADLINE487 > .widget-content {
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(216, 67, 21, 1);
        font-weight: 700;
        line-height: 28px;
    }

    #HEADLINE488 {
        display: block;
    }

    #HEADLINE488 > .widget-content {
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 16px;
    }

    #BOX489 {
        display: block;
    }

    #BOX489 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX489> .widget-content {
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 330px;
        border-top-left-radius: 330px;
        border-top-right-radius: 0px;
    }

    #BOX489> .ladi-widget-overlay {
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 330px;
        border-top-left-radius: 330px;
        border-top-right-radius: 0px;
    }

    #HEADLINE490 {
        display: block;
    }

    #HEADLINE490 > .widget-content {
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(36, 36, 36, 1);
        font-weight: 700;
        text-decoration: line-through;
        -webkit-text-decoration-line: line-through;
        line-height: 22px;
    }

    #FORM491 {
        display: block;
    }

    #FORM491 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #FORM491 .widget-content::-webkit-input-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #FORM491 .widget-content:-moz-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #FORM491 .widget-content::-moz-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #FORM491 .widget-content:-ms-input-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM492 {
        display: block;
    }

    #ITEM_FORM492 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(110, 110, 110, 1);
    }

    #ITEM_FORM492> .widget-content {
        border-radius: 4px;
        border-width: 1px;
        border-style: solid;
        border-color: #eee;
    }

    #ITEM_FORM492> .ladi-widget-overlay {
        border-radius: 4px;
        border-width: 1px;
        border-style: solid;
        border-color: #eee;
    }

    #ITEM_FORM492 .widget-content::-webkit-input-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM492 .widget-content:-moz-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM492 .widget-content::-moz-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM492 .widget-content:-ms-input-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM493 {
        display: block;
    }

    #ITEM_FORM493 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(110, 110, 110, 1);
    }

    #ITEM_FORM493> .widget-content {
        border-radius: 4px;
        border-width: 1px;
        border-style: solid;
        border-color: #eee;
    }

    #ITEM_FORM493> .ladi-widget-overlay {
        border-radius: 4px;
        border-width: 1px;
        border-style: solid;
        border-color: #eee;
    }

    #ITEM_FORM493 .widget-content::-webkit-input-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM493 .widget-content:-moz-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM493 .widget-content::-moz-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM493 .widget-content:-ms-input-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM494 {
        display: block;
    }

    #ITEM_FORM494 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(110, 110, 110, 1);
    }

    #ITEM_FORM494> .widget-content {
        border-radius: 4px;
        border-width: 1px;
        border-style: solid;
        border-color: #eee;
    }

    #ITEM_FORM494> .ladi-widget-overlay {
        border-radius: 4px;
        border-width: 1px;
        border-style: solid;
        border-color: #eee;
    }

    #ITEM_FORM494 .widget-content::-webkit-input-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM494 .widget-content:-moz-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM494 .widget-content::-moz-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM494 .widget-content:-ms-input-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM508 {
        display: block;
    }

    #ITEM_FORM508 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(110, 110, 110, 1);
    }

    #ITEM_FORM508> .widget-content {
        border-radius: 4px;
    }

    #ITEM_FORM508> .ladi-widget-overlay {
        border-radius: 4px;
    }

    #ITEM_FORM508 .widget-content::-webkit-input-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM508 .widget-content:-moz-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM508 .widget-content::-moz-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #ITEM_FORM508 .widget-content:-ms-input-placeholder {
        color: rgba(71, 71, 71, 1)
    }

    #BUTTON496 {
        display: table;
    }

    #BUTTON496 > .widget-content {
        background-color: rgba(5, 5, 5, 1);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 22px;
    }

    #BUTTON496> .widget-content {
        border-radius: 5px;
    }

    #BUTTON496> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #GROUP498 {
        display: block;
    }

    #GROUP498 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX499 {
        display: block;
    }

    #BOX499 > .widget-content {
        background-color: rgba(244, 67, 54, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX499> .widget-content {
        border-radius: 4px;
    }

    #BOX499> .ladi-widget-overlay {
        border-radius: 4px;
    }

    #HEADLINE500 {
        display: block;
    }

    #HEADLINE500 > .widget-content {
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 17px;
    }

    #BOX501 {
        display: block;
    }

    #BOX501 > .widget-content {
        background-color: rgba(244, 67, 54, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX501> .widget-content {
        border-radius: 4px;
    }

    #BOX501> .ladi-widget-overlay {
        border-radius: 4px;
    }

    #HEADLINE502 {
        display: block;
    }

    #HEADLINE502 > .widget-content {
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 17px;
    }

    #BOX503 {
        display: block;
    }

    #BOX503 > .widget-content {
        background-color: rgba(244, 67, 54, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX503> .widget-content {
        border-radius: 4px;
    }

    #BOX503> .ladi-widget-overlay {
        border-radius: 4px;
    }

    #HEADLINE504 {
        display: block;
    }

    #HEADLINE504 > .widget-content {
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 17px;
    }

    #BOX505 {
        display: block;
    }

    #BOX505 > .widget-content {
        background-color: rgba(244, 67, 54, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX505> .widget-content {
        border-radius: 4px;
    }

    #BOX505> .ladi-widget-overlay {
        border-radius: 4px;
    }

    #HEADLINE506 {
        display: block;
    }

    #HEADLINE506 > .widget-content {
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 17px;
    }

    #COUNTDOWN507 {
        display: block;
    }

    #COUNTDOWN507 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 0px;
    }

    #BUTTON509 {
        display: table;
    }

    #BUTTON509 > .widget-content {
        background-color: rgba(244, 67, 54, 1);
        color: #ffffff;
        font-weight: 700;
        line-height: 40px;
        box-shadow: 1px 3px 3px rgba(249, 248, 248, 1);
    }

    #BUTTON509> .widget-content {
        border-radius: 5px;
    }

    #BUTTON509> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #GOOGLE_MAP510 {
        display: block;
    }

    #GOOGLE_MAP510 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #LINE511 {
        display: block;
    }

    #LINE511>.widget-content .line {
        border-top-width: 2px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: solid;
        border-color: rgba(248, 242, 242, 1);
        margin-top: 10.5px;
    }

    #LINE511 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE512 {
        display: block;
    }

    #HEADLINE512 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(245, 243, 243, 1);
        font-weight: 400;
        line-height: 22px;
    }

    #HEADLINE513 {
        display: block;
    }

    #HEADLINE513 > .widget-content {
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(251, 240, 240, 1);
        font-weight: 400;
        line-height: 21px;
    }

    #HEADLINE483 {
        -webkit-animation-delay: 3s;
        animation-delay: 3s;
        -webkit-animation-duration: 3s;
        animation-duration: 3s;
        display: block;
    }

    #HEADLINE483 > .widget-content {
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 38px;
    }

    #PARAGRAPH421 {
        display: block;
    }

    #PARAGRAPH421 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 22px;
    }

    #PARAGRAPH462 {
        display: block;
    }

    #PARAGRAPH462 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #PARAGRAPH464 {
        display: block;
    }

    #PARAGRAPH464 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #PARAGRAPH466 {
        display: block;
    }

    #PARAGRAPH466 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #PARAGRAPH468 {
        display: block;
    }

    #PARAGRAPH468 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 19px;
    }

    #PARAGRAPH470 {
        display: block;
    }

    #PARAGRAPH470 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 19px;
    }

    @media(max-width: 767px) {
        body {
            position: relative;
        }
        #SECTION247 {
            width: 100%;
            height: 1322.75px;
        }
        #SECTION247 .container {}
        #SECTION247 {
            background-image: linear-gradient(rgba(8, 6, 28, 0.78), rgba(8, 6, 28, 0.78)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/home2-event-box-1.jpg");
            background-image: -o-linear-gradient(rgba(8, 6, 28, 0.78), rgba(8, 6, 28, 0.78)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/home2-event-box-1.jpg");
            background-image: -ms-linear-gradient(rgba(8, 6, 28, 0.78), rgba(8, 6, 28, 0.78)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/home2-event-box-1.jpg");
            background-image: -moz-linear-gradient(rgba(8, 6, 28, 0.78), rgba(8, 6, 28, 0.78)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/home2-event-box-1.jpg");
            background-image: -webkit-linear-gradient(rgba(8, 6, 28, 0.78), rgba(8, 6, 28, 0.78)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/home2-event-box-1.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        #POPUP514 {
            width: 100%;
            height: 100%;
        }
        #POPUP514 .container {
            width: 375px;
            height: 358px;
            top: calc(100%-358px);
        }
        #POPUP514 {
            background-image: none;
        }
        #SECTION350 {
            width: 100%;
            height: 364px;
        }
        #SECTION350 .container {}
        #SECTION350 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.71), rgba(0, 0, 0, 0.71)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/bdfb-1513072341.jpg");
            background-image: -o-linear-gradient(rgba(0, 0, 0, 0.71), rgba(0, 0, 0, 0.71)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/bdfb-1513072341.jpg");
            background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.71), rgba(0, 0, 0, 0.71)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/bdfb-1513072341.jpg");
            background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.71), rgba(0, 0, 0, 0.71)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/bdfb-1513072341.jpg");
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.71), rgba(0, 0, 0, 0.71)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/bdfb-1513072341.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        #SECTION323 {
            width: 100%;
            height: 394px;
        }
        #SECTION323 .container {}
        #SECTION323 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.87), rgba(0, 0, 0, 0.87)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/strength-people-hands-success-meeting_1150-1690-1512778819512.jpg");
            background-image: -o-linear-gradient(rgba(0, 0, 0, 0.87), rgba(0, 0, 0, 0.87)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/strength-people-hands-success-meeting_1150-1690-1512778819512.jpg");
            background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.87), rgba(0, 0, 0, 0.87)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/strength-people-hands-success-meeting_1150-1690-1512778819512.jpg");
            background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.87), rgba(0, 0, 0, 0.87)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/strength-people-hands-success-meeting_1150-1690-1512778819512.jpg");
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.87), rgba(0, 0, 0, 0.87)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/strength-people-hands-success-meeting_1150-1690-1512778819512.jpg");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        #SECTION31 {
            width: 100%;
            height: 902px;
        }
        #SECTION31 .container {}
        #SECTION31 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/954-1512977756.jpg");
            background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/954-1512977756.jpg");
            background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/954-1512977756.jpg");
            background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/954-1512977756.jpg");
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/954-1512977756.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        #SECTION372 {
            width: 100%;
            height: 500px;
        }
        #SECTION372 .container {}
        #SECTION372 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.67), rgba(0, 0, 0, 0.67)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
            background-image: -o-linear-gradient(rgba(0, 0, 0, 0.67), rgba(0, 0, 0, 0.67)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
            background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.67), rgba(0, 0, 0, 0.67)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
            background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.67), rgba(0, 0, 0, 0.67)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.67), rgba(0, 0, 0, 0.67)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #SECTION416 {
            width: 100%;
            height: 784px;
        }
        #SECTION416 .container {}
        #SECTION416 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.52)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/footer-star-2.png");
            background-image: -o-linear-gradient(rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.52)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/footer-star-2.png");
            background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.52)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/footer-star-2.png");
            background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.52)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/footer-star-2.png");
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.52)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/footer-star-2.png");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #SECTION437 {
            width: 100%;
            height: 476px;
        }
        #SECTION437 .container {}
        #SECTION437 {
            background-image: none;
        }
        #SECTION481 {
            width: 100%;
            height: 929.84375px;
        }
        #SECTION481 .container {}
        #SECTION481 {
            background-image: linear-gradient(rgba(8, 8, 8, 0.85), rgba(8, 8, 8, 0.85)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/time-2980690_1920-1513152253.jpg");
            background-image: -o-linear-gradient(rgba(8, 8, 8, 0.85), rgba(8, 8, 8, 0.85)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/time-2980690_1920-1513152253.jpg");
            background-image: -ms-linear-gradient(rgba(8, 8, 8, 0.85), rgba(8, 8, 8, 0.85)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/time-2980690_1920-1513152253.jpg");
            background-image: -moz-linear-gradient(rgba(8, 8, 8, 0.85), rgba(8, 8, 8, 0.85)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/time-2980690_1920-1513152253.jpg");
            background-image: -webkit-linear-gradient(rgba(8, 8, 8, 0.85), rgba(8, 8, 8, 0.85)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/time-2980690_1920-1513152253.jpg");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        #POPUP417 {
            width: 100%;
            height: 100%;
        }
        #POPUP417 .container {
            width: 100%;
            height: 400px;
            top: calc(100%-400px);
        }
        #POPUP417 {
            background-image: none;
        }
        #POPUP461 {
            width: 100%;
            height: 100%;
        }
        #POPUP461 .container {
            width: 100%;
            height: 400px;
            top: calc(100%-400px);
        }
        #POPUP461 {
            background-image: none;
        }
        #POPUP463 {
            width: 100%;
            height: 100%;
        }
        #POPUP463 .container {
            width: 100%;
            height: 400px;
            top: calc(100%-400px);
        }
        #POPUP463 {
            background-image: none;
        }
        #POPUP465 {
            width: 100%;
            height: 100%;
        }
        #POPUP465 .container {
            width: 100%;
            height: 400px;
            top: calc(100%-400px);
        }
        #POPUP465 {
            background-image: none;
        }
        #POPUP467 {
            width: 100%;
            height: 100%;
        }
        #POPUP467 .container {
            width: 100%;
            height: 400px;
            top: calc(100%-400px);
        }
        #POPUP467 {
            background-image: none;
        }
        #POPUP469 {
            width: 100%;
            height: 100%;
        }
        #POPUP469 .container {
            width: 100%;
            height: 400px;
            top: calc(100%-400px);
        }
        #POPUP469 {
            background-image: none;
        }
        #IMAGE248 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/uploads/images/f04c3efc-50e6-4b47-9462-12d7627fcd1d.png);
        }
        #IMAGE248 {
            top: 293px;
            left: 187.5px;
            width: 0px;
            height: 0px;
        }
        #PARAGRAPH249 {
            top: 233px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 79.984375px;
        }
        #PARAGRAPH249 > .widget-content {
            font-size: 35px;
            text-align: center;
            line-height: 20px;
        }
        #HEADLINE250 {
            top: 75.3542px;
            left: 0.0173855px;
            padding: 0px;
            width: 364.96875px;
            height: 126.65625px;
        }
        #HEADLINE250 > .widget-content {
            font-size: 43px;
            text-align: center;
            line-height: 43px;
        }
        #BUTTON257 {
            top: 7px;
            left: 60.9549px;
            padding: 0px;
            width: 253px;
            height: 27px;
        }
        #BUTTON257 > .widget-content {
            font-size: 14px;
            text-align: right;
        }
        #BUTTON258 {
            top: 444px;
            left: 116.5px;
            padding: 0px;
            width: 141px;
            height: 41px;
        }
        #BUTTON258 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX260 {
            top: 643px;
            left: 8px;
            width: 358.96875px;
            height: 439.984375px;
        }
        #PARAGRAPH262 {
            top: 84.5px;
            left: 0px;
            padding: 0px;
            width: 358.96875px;
            height: 65.96875px;
        }
        #PARAGRAPH262 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE261 {
            top: 6px;
            left: 0px;
            padding: 0px;
            width: 358.96875px;
            height: 65.96875px;
        }
        #HEADLINE261 > .widget-content {
            font-size: 24px;
            text-align: center;
            line-height: 33px;
        }
        #GROUP271 {
            top: 36px;
            left: 25.625px;
            width: 307.734375px;
            height: 107.96875px;
        }
        #BOX272 {
            top: 28px;
            left: 236.563px;
            width: 67.96875px;
            height: 69.984375px;
        }
        #BOX273 {
            top: 28px;
            left: 157.438px;
            width: 70.59375px;
            height: 69.984375px;
        }
        #BOX274 {
            top: 28px;
            left: 78.0469px;
            width: 70.59375px;
            height: 69.984375px;
        }
        #BOX275 {
            top: 28px;
            left: 2.57813px;
            width: 65.96875px;
            height: 69.984375px;
        }
        #COUNTDOWN276 {
            top: 40px;
            left: 1.57813px;
            width: 304.984375px;
            height: 42.984375px;
        }
        #COUNTDOWN276 > .widget-content {
            font-size: 31px;
        }
        #HEADLINE277 {
            top: 0px;
            left: 1px;
            padding: 0px;
            width: 63.34375px;
            height: 17.96875px;
        }
        #HEADLINE277 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE278 {
            top: 0px;
            left: 82.5px;
            padding: 0px;
            width: 63.34375px;
            height: 17.96875px;
        }
        #HEADLINE278 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE279 {
            top: 0px;
            left: 245.375px;
            padding: 0px;
            width: 63.34375px;
            height: 17.96875px;
        }
        #HEADLINE279 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE280 {
            top: 0px;
            left: 163.891px;
            padding: 0px;
            width: 63.34375px;
            height: 17.96875px;
        }
        #HEADLINE280 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #LINE284 {
            top: 198px;
            left: 10.5035px;
            width: 354.984375px;
            height: 24.984375px;
        }
        #IMAGE285 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo1-1512808012297.png);
        }
        #IMAGE285 {
            top: 27px;
            left: 117.906px;
            width: 139.171875px;
            height: 38.96875px;
        }
        #PARAGRAPH304 {
            top: 299.5px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 79.984375px;
        }
        #PARAGRAPH304 > .widget-content {
            font-size: 35px;
            text-align: center;
            line-height: 20px;
        }
        #LINE305 {
            top: 274.5px;
            left: 10px;
            width: 354.984375px;
            height: 24.984375px;
        }
        #LINE306 {
            top: 389.5px;
            left: 10px;
            width: 354.984375px;
            height: 24.984375px;
        }
        #BOX264 {
            top: 347px;
            left: 13.5px;
            width: 331.96875px;
            height: 111.234375px;
        }
        #FORM308 {
            top: 11px;
            left: 10px;
            width: 300px;
            height: 125.96875px;
        }
        #ITEM_FORM309 {
            top: 0px;
            left: 0px;
            width: 300px;
            height: 35.96875px;
        }
        #ITEM_FORM310 {
            top: 45px;
            left: 0px;
            width: 300px;
            height: 35.96875px;
        }
        #ITEM_FORM311 {
            top: 90px;
            left: 0px;
            width: 300px;
            height: 35.96875px;
        }
        #BUTTON313 {
            top: 171.75px;
            left: 160px;
            padding: 0px;
            width: 0px;
            height: 41px;
        }
        #BUTTON313 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BUTTON322 {
            top: 235.5px;
            left: 88px;
            padding: 0px;
            width: 159px;
            height: 41px;
        }
        #BUTTON322 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX515 {
            top: 140px;
            left: 10px;
            width: 355px;
            height: 198px;
        }
        #LINE516 {
            top: 20px;
            left: 158.5px;
            width: 38px;
            height: 25px;
        }
        #HEADLINE517 {
            top: 55px;
            left: 34px;
            padding: 0px;
            width: 287px;
            height: 30px;
        }
        #HEADLINE517 > .widget-content {
            font-size: 24px;
            text-align: center;
            line-height: 30px;
        }
        #PARAGRAPH518 {
            top: 133px;
            left: 3px;
            padding: 0px;
            width: 349px;
            height: 80px;
        }
        #PARAGRAPH518 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #IMAGE519 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/thankyou.png);
        }
        #IMAGE519 {
            top: 30px;
            left: 66.5938px;
            width: 241.813px;
            height: 110px;
        }
        #BUTTON354 {
            top: 320px;
            left: 85.5px;
            padding: 0px;
            width: 202px;
            height: 35px;
        }
        #BUTTON354 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #LISTOP359 {
            top: 91.406px;
            left: 10px;
            width: 354.984375px;
            height: 308.390625px;
        }
        #LISTOP359 > .widget-content {
            font-size: 17px;
            text-align: left;
        }
        #LISTOP359 > ol.widget-content li::before {
            content: counter(linum, decimal);
            width: 30px;
            height: 30px;
            top: 0;
            font-size: 15px;
            color: rgba(240, 199, 21, 1);
            margin-right: 8px;
            content: url('data:image/svg+xml;utf8,<svg fill="rgba(240,199,21,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M9,5A3.5,3.5 0 0,1 12.5,8.5A3.5,3.5 0 0,1 9,12A3.5,3.5 0 0,1 5.5,8.5A3.5,3.5 0 0,1 9,5M9,13.75C12.87,13.75 16,15.32 16,17.25V19H2V17.25C2,15.32 5.13,13.75 9,13.75M17,12.66L14.25,9.66L15.41,8.5L17,10.09L20.59,6.5L21.75,7.91L17,12.66Z"/> </svg>');
            background-repeat: no-repeat;
            position: relative;
            top: 0px;
            left: 0;
        }
        #LISTOP359 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP359 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #HEADLINE360 {
            top: 29px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 91.96875px;
        }
        #HEADLINE360 > .widget-content {
            font-size: 40px;
            text-align: left;
        }
        #YOUTUBE361 {
            top: 86px;
            left: 10px;
            width: 354.984375px;
            height: 177.21354166666666px;
        }
        #LINE450 {
            top: 55px;
            left: 10px;
            width: 354.984375px;
            height: 24.984375px;
        }
        #HEADLINE325 {
            top: 21px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 101.96875px;
        }
        #HEADLINE325 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #BOX362 {
            top: 156px;
            left: 33px;
            width: 308.96875px;
            height: 169.984375px;
        }
        #HEADLINE363 {
            top: 13px;
            left: 24px;
            padding: 0px;
            width: 267.984375px;
            height: 30px;
        }
        #HEADLINE363 > .widget-content {
            font-size: 24px;
            text-align: left;
        }
        #PARAGRAPH364 {
            top: 54px;
            left: 17px;
            padding: 0px;
            width: 291.984375px;
            height: 94.984375px;
        }
        #PARAGRAPH364 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #BOX365 {
            top: 156px;
            left: 27px;
            width: 320.96875px;
            height: 169.984375px;
        }
        #HEADLINE366 {
            top: 163px;
            left: 39px;
            padding: 0px;
            width: 296.96875px;
            height: 57.984375px;
        }
        #HEADLINE366 > .widget-content {
            font-size: 23px;
            text-align: left;
        }
        #BOX368 {
            top: 156px;
            left: 27px;
            width: 320.96875px;
            height: 169.984375px;
        }
        #PARAGRAPH369 {
            top: 65px;
            left: 17px;
            padding: 0px;
            width: 291.984375px;
            height: 56.96875px;
        }
        #PARAGRAPH369 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH367 {
            top: 221px;
            left: 41.5px;
            padding: 0px;
            width: 291.984375px;
            height: 75.984375px;
        }
        #PARAGRAPH367 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE370 {
            top: 163px;
            left: 39px;
            padding: 0px;
            width: 296.96875px;
            height: 28.96875px;
        }
        #HEADLINE370 > .widget-content {
            font-size: 23px;
            text-align: left;
        }
        #LINE371 {
            top: 89px;
            left: 10px;
            width: 354.984375px;
            height: 24.984375px;
        }
        #GROUP72 {
            top: 438px;
            left: 76px;
            width: 222.984375px;
            height: 216.984375px;
        }
        #PARAGRAPH73 {
            top: 153px;
            left: 4px;
            padding: 0px;
            width: 222.984375px;
            height: 37.96875px;
        }
        #PARAGRAPH73 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #SHAPE74 {
            top: 0px;
            left: 62px;
            width: 102.984375px;
            height: 102.984375px;
        }
        #HEADLINE75 {
            top: 113px;
            left: 1px;
            padding: 0px;
            width: 217.96875px;
            height: 26.96875px;
        }
        #HEADLINE75 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #GROUP76 {
            top: 665px;
            left: 76px;
            width: 222.984375px;
            height: 216.984375px;
        }
        #PARAGRAPH77 {
            top: 141px;
            left: 1px;
            padding: 0px;
            width: 222.984375px;
            height: 56.96875px;
        }
        #PARAGRAPH77 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #SHAPE78 {
            top: 0px;
            left: 62px;
            width: 102.984375px;
            height: 102.984375px;
        }
        #HEADLINE79 {
            top: 106.5px;
            left: 0px;
            padding: 0px;
            width: 222.984375px;
            height: 53.96875px;
        }
        #HEADLINE79 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #HEADLINE373 {
            top: 16px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 107.96875px;
        }
        #HEADLINE373 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #GROUP67 {
            top: 20px;
            left: 76px;
            width: 222.984375px;
            height: 216.984375px;
        }
        #PARAGRAPH36 {
            top: 137.5px;
            left: 1px;
            padding: 0px;
            width: 222.984375px;
            height: 56.96875px;
        }
        #PARAGRAPH36 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #HEADLINE38 {
            top: 103px;
            left: 2px;
            padding: 0px;
            width: 217.96875px;
            height: 26.96875px;
        }
        #HEADLINE38 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #SHAPE37 {
            top: 0px;
            left: 61px;
            width: 102.984375px;
            height: 102.984375px;
        }
        #GROUP68 {
            top: 211px;
            left: 76px;
            width: 222.984375px;
            height: 216.984375px;
        }
        #PARAGRAPH69 {
            top: 147px;
            left: 13px;
            padding: 0px;
            width: 222.984375px;
            height: 37.96875px;
        }
        #PARAGRAPH69 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #SHAPE70 {
            top: 0px;
            left: 62px;
            width: 102.984375px;
            height: 102.984375px;
        }
        #HEADLINE71 {
            top: 113px;
            left: 0px;
            padding: 0px;
            width: 222.984375px;
            height: 53.96875px;
        }
        #HEADLINE71 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #LINE374 {
            top: 319px;
            left: 10px;
            width: 354.984375px;
            height: 24.984375px;
        }
        #BOX377 {
            top: 136px;
            left: 10px;
            width: 354.984375px;
            height: 146.96875px;
        }
        #HEADLINE385 {
            top: 11px;
            left: 77.5px;
            padding: 0px;
            width: 199.984375px;
            height: 35.96875px;
        }
        #HEADLINE385 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE386 {
            top: 47px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 31.96875px;
        }
        #HEADLINE386 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #BUTTON391 {
            top: 89px;
            left: 124px;
            padding: 0px;
            width: 105px;
            height: 41px;
        }
        #BUTTON391 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX378 {
            top: 18px;
            left: 0.5px;
            width: 373.96875px;
            height: 58.96875px;
        }
        #HEADLINE379 {
            top: 30px;
            left: 1.5px;
            padding: 0px;
            width: 371.96875px;
            height: 35.96875px;
        }
        #HEADLINE379 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #BOX381 {
            top: 77px;
            left: 10px;
            width: 354.984375px;
            height: 30px;
        }
        #HEADLINE380 {
            top: 0px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 60px;
        }
        #HEADLINE380 > .widget-content {
            font-size: 24px;
            text-align: left;
        }
        #BOX392 {
            top: 138px;
            left: 10px;
            width: 354.984375px;
            height: 146.96875px;
        }
        #BUTTON395 {
            top: 89px;
            left: 124px;
            padding: 0px;
            width: 105px;
            height: 41px;
        }
        #BUTTON395 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE394 {
            top: 47px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 63.984375px;
        }
        #HEADLINE394 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #HEADLINE393 {
            top: 138px;
            left: 87.5px;
            padding: 0px;
            width: 199.984375px;
            height: 35.96875px;
        }
        #HEADLINE393 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #BOX396 {
            top: 346px;
            left: 10px;
            width: 354.984375px;
            height: 146.96875px;
        }
        #HEADLINE397 {
            top: 11px;
            left: 77.5px;
            padding: 0px;
            width: 199.984375px;
            height: 35.96875px;
        }
        #HEADLINE397 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE398 {
            top: 47px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 31.96875px;
        }
        #HEADLINE398 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #BUTTON399 {
            top: 89px;
            left: 124px;
            padding: 0px;
            width: 105px;
            height: 41px;
        }
        #BUTTON399 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX403 {
            top: 345px;
            left: 10px;
            width: 354.984375px;
            height: 146.96875px;
        }
        #HEADLINE404 {
            top: 11px;
            left: 77.5px;
            padding: 0px;
            width: 199.984375px;
            height: 35.96875px;
        }
        #HEADLINE404 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE405 {
            top: 47px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 63.984375px;
        }
        #HEADLINE405 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #BUTTON406 {
            top: 89px;
            left: 124px;
            padding: 0px;
            width: 105px;
            height: 41px;
        }
        #BUTTON406 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX407 {
            top: 550px;
            left: 10px;
            width: 354.984375px;
            height: 146.96875px;
        }
        #HEADLINE408 {
            top: 11px;
            left: 77.5px;
            padding: 0px;
            width: 199.984375px;
            height: 35.96875px;
        }
        #HEADLINE408 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE409 {
            top: 47px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 31.96875px;
        }
        #HEADLINE409 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #BUTTON410 {
            top: 89px;
            left: 124px;
            padding: 0px;
            width: 105px;
            height: 41px;
        }
        #BUTTON410 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX411 {
            top: 550px;
            left: 10px;
            width: 354.984375px;
            height: 146.96875px;
        }
        #HEADLINE412 {
            top: 11px;
            left: 77.5px;
            padding: 0px;
            width: 199.984375px;
            height: 35.96875px;
        }
        #HEADLINE412 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE413 {
            top: 47px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 63.984375px;
        }
        #HEADLINE413 > .widget-content {
            font-size: 26px;
            text-align: left;
        }
        #BUTTON414 {
            top: 89px;
            left: 124px;
            padding: 0px;
            width: 105px;
            height: 41px;
        }
        #BUTTON414 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BUTTON415 {
            top: 757px;
            left: 112.5px;
            padding: 0px;
            width: 150px;
            height: 41px;
        }
        #BUTTON415 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #IMAGE423 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/13096361_1093472814056448_1943901872542939421_n-1513094053.jpg);
        }
        #IMAGE423 {
            top: 231px;
            left: 68.5px;
            width: 237.984375px;
            height: 237.984375px;
        }
        #HEADLINE424 {
            top: 20px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 71.96875px;
        }
        #HEADLINE424 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #LINE425 {
            top: 102px;
            left: 10px;
            width: 354.984375px;
            height: 24.984375px;
        }
        #HEADLINE426 {
            top: 188px;
            left: 109px;
            padding: 0px;
            width: 156.984375px;
            height: 32.96875px;
        }
        #HEADLINE426 > .widget-content {
            font-size: 27px;
            text-align: left;
        }
        #HEADLINE428 {
            top: 137px;
            left: 11.5px;
            padding: 0px;
            width: 351.984375px;
            height: 40.96875px;
        }
        #HEADLINE428 > .widget-content {
            font-size: 35px;
            text-align: left;
        }
        #LISTOP429 {
            top: 479px;
            left: 10px;
            width: 354.984375px;
            height: 294.984375px;
        }
        #LISTOP429 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #LISTOP429 > ol.widget-content li::before {
            content: counter(linum, decimal);
            width: 30px;
            height: 30px;
            top: 0;
            font-size: 15px;
            color: rgba(243, 233, 233, 1);
            margin-right: 8px;
            content: url('data:image/svg+xml;utf8,<svg fill="rgba(243,233,233,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M10.5,17.5L7,14L8.41,12.59L10.5,14.67L15.68,9.5L17.09,10.91M10,4H14V6H10M20,6H16V4L14,2H10L8,4V6H4C2.89,6 2,6.89 2,8V19C2,20.11 2.89,21 4,21H20C21.11,21 22,20.11 22,19V8C22,6.89 21.11,6 20,6Z"/> </svg>');
            background-repeat: no-repeat;
            position: relative;
            top: 0px;
            left: 0;
        }
        #LISTOP429 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP429 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #IMAGE471 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/luu_tuan_anh-1513135583.PNG);
        }
        #IMAGE471 {
            top: 134px;
            left: 69px;
            width: 216.984375px;
            height: 184.984375px;
        }
        #PARAGRAPH473 {
            top: 356px;
            left: 37.5px;
            padding: 0px;
            width: 279.984375px;
            height: 56.96875px;
        }
        #PARAGRAPH473 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE474 {
            top: 342px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 37.96875px;
        }
        #HEADLINE474 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE472 {
            top: 319px;
            left: 77.5px;
            padding: 0px;
            width: 199.984375px;
            height: 22.96875px;
        }
        #HEADLINE472 > .widget-content {
            font-size: 17px;
            text-align: left;
        }
        #IMAGE447 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/capture1-1512785087576.png);
        }
        #IMAGE447 {
            top: 141px;
            left: 79.2109px;
            width: 196.546875px;
            height: 172.96875px;
        }
        #CAROUSEL438 {
            top: 20px;
            left: 10px;
            width: 354.984375px;
            height: 424.984375px;
        }
        #ITEM-CAROUSEL439 {
            top: 0px;
            left: 0px;
            width: 354.984375px;
            height: 406.984375px;
        }
        #ITEM-CAROUSEL439 > .widget-content {
            background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/action-2277292_1920-1513095389.jpg");
            background-image: -o-linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/action-2277292_1920-1513095389.jpg");
            background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/action-2277292_1920-1513095389.jpg");
            background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/action-2277292_1920-1513095389.jpg");
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/action-2277292_1920-1513095389.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: repeat;
        }
        #HEADLINE443 {
            top: 50px;
            left: 70.7344px;
            padding: 0px;
            width: 213.515625px;
            height: 39.984375px;
        }
        #HEADLINE443 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #HEADLINE444 {
            top: 14px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 143.96875px;
        }
        #HEADLINE444 > .widget-content {
            font-size: 30px;
            text-align: left;
        }
        #PARAGRAPH453 {
            top: 407.086px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 162px;
        }
        #PARAGRAPH453 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH459 {
            top: 459.445px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 72px;
        }
        #PARAGRAPH459 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH538 {
            top: 460.313px;
            left: 3px;
            padding: 0px;
            width: 348.984375px;
            height: 58.5px;
        }
        #PARAGRAPH538 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #IMAGE579 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/Lac_hong-1513135584.PNG);
        }
        #IMAGE579 {
            top: 153.211px;
            left: 62.4141px;
            width: 230.15625px;
            height: 236.953125px;
        }
        #IMAGE580 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/luu_tuan_anh-1513135583.PNG);
        }
        #IMAGE580 {
            top: 156.023px;
            left: 55.1563px;
            width: 244.6875px;
            height: 225.46875px;
        }
        #IMAGE581 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/Capture1-1513087592.PNG);
        }
        #IMAGE581 {
            top: 176.227px;
            left: 55.9219px;
            width: 243.140625px;
            height: 218.953125px;
        }
        #HEADLINE460 {
            top: 212.969px;
            left: 27.5px;
            padding: 0px;
            width: 300px;
            height: 18.984375px;
        }
        #HEADLINE460 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE458 {
            top: 328.938px;
            left: 77.5px;
            padding: 0px;
            width: 199.984375px;
            height: 23.96875px;
        }
        #HEADLINE458 > .widget-content {
            font-size: 18px;
            text-align: left;
        }
        #HEADLINE452 {
            top: 332.438px;
            left: 77.5px;
            padding: 0px;
            width: 199.984375px;
            height: 24.984375px;
        }
        #HEADLINE452 > .widget-content {
            font-size: 19px;
            text-align: left;
        }
        #HEADLINE537 {
            top: 426.305px;
            left: 0px;
            padding: 0px;
            width: 354.984375px;
            height: 36px;
        }
        #HEADLINE537 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE536 {
            top: 158.836px;
            left: 77.5px;
            padding: 0px;
            width: 199.984375px;
            height: 23.3125px;
        }
        #HEADLINE536 > .widget-content {
            font-size: 18px;
            text-align: left;
        }
        #LINE445 {
            top: 91.2344px;
            left: 0px;
            width: 354.984375px;
            height: 24.984375px;
        }
        #PARAGRAPH482 {
            top: 393.344px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 146.96875px;
        }
        #PARAGRAPH482 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #HEADLINE484 {
            top: 460.344px;
            left: 75px;
            padding: 0px;
            width: 225px;
            height: 21.984375px;
        }
        #HEADLINE484 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #HEADLINE485 {
            top: 235px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 39.984375px;
        }
        #HEADLINE485 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #GROUP486 {
            top: 179px;
            left: 45px;
            width: 285px;
            height: 45.984375px;
        }
        #HEADLINE487 {
            top: 18px;
            left: 194.133px;
            padding: 0px;
            width: 171.109375px;
            height: 27.984375px;
        }
        #HEADLINE487 > .widget-content {
            font-size: 24px;
            text-align: left;
        }
        #HEADLINE488 {
            top: 0px;
            left: 154px;
            padding: 0px;
            width: 78.203125px;
            height: 15.984375px;
        }
        #HEADLINE488 > .widget-content {
            font-size: 12px;
            text-align: left;
        }
        #BOX489 {
            top: 3px;
            left: 1px;
            width: 138.984375px;
            height: 51.984375px;
        }
        #HEADLINE490 {
            top: 20px;
            left: 0px;
            padding: 0px;
            width: 138.984375px;
            height: 21.984375px;
        }
        #HEADLINE490 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #FORM491 {
            top: 161px;
            left: 37.5px;
            width: 300px;
            height: 172.328125px;
        }
        #ITEM_FORM492 {
            top: 20px;
            left: 0px;
            width: 300px;
            height: 37.640625px;
        }
        #ITEM_FORM493 {
            top: 67.6719px;
            left: 0px;
            width: 300px;
            height: 37.640625px;
        }
        #ITEM_FORM494 {
            top: 115.344px;
            left: 0px;
            width: 300px;
            height: 36.984375px;
        }
        #ITEM_FORM508 {
            top: 115.344px;
            left: 0px;
            width: 300px;
            height: 35.96875px;
        }
        #BUTTON496 {
            top: 550.344px;
            left: 182.5px;
            padding: 0px;
            width: 9px;
            height: 38px;
        }
        #BUTTON496 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP498 {
            top: 827.844px;
            left: 49px;
            width: 276.984375px;
            height: 55.96875px;
        }
        #BOX499 {
            top: 1px;
            left: 0px;
            width: 54.984375px;
            height: 54.984375px;
        }
        #HEADLINE500 {
            top: 35px;
            left: 3px;
            padding: 0px;
            width: 45.984375px;
            height: 16.96875px;
        }
        #HEADLINE500 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX501 {
            top: 0px;
            left: 74px;
            width: 54.984375px;
            height: 54.984375px;
        }
        #HEADLINE502 {
            top: 35px;
            left: 3px;
            padding: 0px;
            width: 45.984375px;
            height: 16.96875px;
        }
        #HEADLINE502 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX503 {
            top: 0px;
            left: 147px;
            width: 54.984375px;
            height: 54.984375px;
        }
        #HEADLINE504 {
            top: 35px;
            left: 3px;
            padding: 0px;
            width: 45.984375px;
            height: 16.96875px;
        }
        #HEADLINE504 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX505 {
            top: 0px;
            left: 222px;
            width: 54.984375px;
            height: 54.984375px;
        }
        #HEADLINE506 {
            top: 35px;
            left: 3px;
            padding: 0px;
            width: 45.984375px;
            height: 16.96875px;
        }
        #HEADLINE506 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #COUNTDOWN507 {
            top: 893.844px;
            left: 42.5px;
            width: 289.984375px;
            height: 25.96875px;
        }
        #COUNTDOWN507 > .widget-content {
            font-size: 30px;
        }
        #BUTTON509 {
            top: 343.344px;
            left: 51.5px;
            padding: 0px;
            width: 270px;
            height: 41px;
        }
        #BUTTON509 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GOOGLE_MAP510 {
            top: 492.344px;
            left: 10px;
            width: 354.984375px;
            height: 325.46875px;
        }
        #LINE511 {
            top: 598.344px;
            left: 10px;
            width: 354.984375px;
            height: 24.984375px;
        }
        #HEADLINE512 {
            top: 633.344px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 65.96875px;
        }
        #HEADLINE512 > .widget-content {
            font-size: 16px;
            text-align: left;
        }
        #HEADLINE513 {
            top: 709.344px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 20.96875px;
        }
        #HEADLINE513 > .widget-content {
            font-size: 15px;
            text-align: left;
        }
        #HEADLINE483 {
            top: 20px;
            left: 10px;
            padding: 0px;
            width: 354.984375px;
            height: 113.96875px;
        }
        #HEADLINE483 > .widget-content {
            font-size: 32px;
            text-align: center;
        }
        #PARAGRAPH421 {
            top: 16px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 198px;
        }
        #PARAGRAPH421 > .widget-content {
            font-size: 16px;
            text-align: left;
        }
        #PARAGRAPH462 {
            top: 10.5px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 57px;
        }
        #PARAGRAPH462 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH464 {
            top: 17px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 38px;
        }
        #PARAGRAPH464 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH466 {
            top: 17px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 57px;
        }
        #PARAGRAPH466 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH468 {
            top: 16px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 57px;
        }
        #PARAGRAPH468 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH470 {
            top: 16px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 57px;
        }
        #PARAGRAPH470 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
    }
</style>
