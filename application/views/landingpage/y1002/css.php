
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
        var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,700|Montserrat:300,400,600,700|Quicksand|Pattaya|Arima+Madurai:300,400,700&amp;subset=latin-ext,vietnamese';
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

    *,#SECTION2
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
            height: 681px;
        }
        #SECTION2 .container {}
        #SECTION2 {}
        #SECTION41 {
            width: 100%;
            height: 120px;
        }
        #SECTION41 .container {}
        #SECTION41 {}
        #SECTION81 {
            width: 100%;
            height: 831.15234375px;
        }
        #SECTION81 .container {}
        #SECTION81 {}
        #SECTION122 {
            width: 100%;
            height: 123px;
        }
        #SECTION122 .container {}
        #SECTION122 {}
        #SECTION132 {
            width: 100%;
            height: 634px;
        }
        #SECTION132 .container {}
        #SECTION132 {}
        #SECTION558 {
            width: 100%;
            height: 123px;
        }
        #SECTION558 .container {}
        #SECTION558 {}
        #SECTION37 {
            width: 100%;
            height: 488px;
        }
        #SECTION37 .container {}
        #SECTION37 {}
        #SECTION290 {
            width: 100%;
            height: 134px;
        }
        #SECTION290 .container {}
        #SECTION290 {}
        #SECTION292 {
            width: 100%;
            height: 418.9453125px;
        }
        #SECTION292 .container {}
        #SECTION292 {}
        #SECTION317 {
            width: 100%;
            height: 134px;
        }
        #SECTION317 .container {}
        #SECTION317 {}
        #SECTION319 {
            width: 100%;
            height: 617px;
        }
        #SECTION319 .container {}
        #SECTION319 {}
        #SECTION221 {
            width: 100%;
            height: 127px;
        }
        #SECTION221 .container {}
        #SECTION221 {}
        #SECTION198 {
            width: 100%;
            height: 492.98828125px;
        }
        #SECTION198 .container {}
        #SECTION198 {}
        #SECTION624 {
            width: 100%;
            height: 608.96484375px;
        }
        #SECTION624 .container {}
        #SECTION624 {}
        #SECTION409 {
            width: 100%;
            height: 484px;
        }
        #SECTION409 .container {}
        #SECTION409 {}
        #BUTTON5 {
            top: 429px;
            left: 2.5e-06px;
            padding: 0px;
            width: 265px;
            height: 60px;
        }
        #BUTTON5 > .widget-content {
            font-size: 29px;
            text-align: center;
        }
        #HEADLINE496 {
            top: 22px;
            left: 19.21875px;
            padding: 0px;
            width: 199.5px;
            height: 28px;
        }
        #HEADLINE496 > .widget-content {
            font-size: 22px;
            text-align: left;
        }
        #PARAGRAPH7 {
            top: 353px;
            left: 0.773438px;
            padding: 0px;
            width: 631px;
            height: 44px;
        }
        #PARAGRAPH7 > .widget-content {
            font-size: 16px;
            text-align: left;
        }
        #HEADLINE8 {
            top: 261px;
            left: 0.773438px;
            padding: 0px;
            width: 591px;
            height: 72px;
        }
        #HEADLINE8 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #BOX471 {
            top: 156px;
            left: 700.01px;
            width: 302px;
            height: 398px;
        }
        #HEADLINE472 {
            top: 28px;
            left: 36.673px;
            padding: 0px;
            width: 243.5625px;
            height: 54px;
        }
        #HEADLINE472 > .widget-content {
            font-size: 21px;
            text-align: center;
        }
        #GROUP484 {
            top: 111px;
            left: -37.015625px;
            width: 304.5625px;
            height: 238.953125px;
        }
        #FORM485 {
            top: 0px;
            left: 1px;
            width: 304.5625px;
            height: 171.140625px;
        }
        #FORM485 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM486 {
            top: -5e-06px;
            left: 66.5625px;
            width: 238px;
            height: 46.140625px;
        }
        #ITEM_FORM486 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM487 {
            top: 66.9112px;
            left: 66.6875px;
            width: 235.5625px;
            height: 46.140625px;
        }
        #ITEM_FORM487 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM488 {
            top: 125px;
            left: 67.0156px;
            width: 235.5625px;
            height: 46.140625px;
        }
        #ITEM_FORM488 > .widget-content {
            font-size: 16px;
        }
        #BUTTON489 {
            top: 188.953125px;
            left: 92.25px;
            padding: 0px;
            width: 184px;
            height: 49.5px;
        }
        #BUTTON489 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE492 {
            top: 146.945px;
            left: -0.0234275px;
            padding: 0px;
            width: 616.5px;
            height: 102px;
        }
        #HEADLINE492 > .widget-content {
            font-size: 45px;
            text-align: left;
        }
        #HEADLINE493 {
            top: 152.93px;
            left: 0.984372px;
            padding: 0px;
            width: 199.5px;
            height: 30px;
        }
        #HEADLINE493 > .widget-content {
            font-size: 24px;
            text-align: left;
        }
        #HEADLINE495 {
            top: 432px;
            left: 96.2422px;
            padding: 0px;
            width: 199px;
            height: 55px;
        }
        #HEADLINE495 > .widget-content {
            font-size: 49px;
            text-align: left;
        }
        #BUTTON686 {
            top: 505.012px;
            left: 1px;
            padding: 0px;
            width: 315px;
            height: 97px;
        }
        #BUTTON686 > .widget-content {
            font-size: 32px;
            text-align: left;
        }
        #HEADLINE692 {
            top: 11px;
            left: 158px;
            padding: 0px;
            width: 136.734375px;
            height: 59px;
        }
        #HEADLINE692 > .widget-content {
            font-size: 53px;
            text-align: left;
        }
        #HEADLINE42 {
            top: 44px;
            left: 14px;
            padding: 0px;
            width: 925px;
            height: 35px;
        }
        #HEADLINE42 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #BOX120 {
            top: 400.016px;
            left: 0px;
            width: 960px;
            height: 79px;
        }
        #HEADLINE121 {
            top: 9px;
            left: 65px;
            padding: 0px;
            width: 848px;
            height: 60px;
        }
        #HEADLINE121 > .widget-content {
            font-size: 24px;
            text-align: center;
        }
        #IMAGE423 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/s350/5a28c4f8c3f6592b3acabec8/yoga_vp-1512980010.jpg);
        }
        #IMAGE423 {
            top: 72.948px;
            left: 314.012px;
            width: 318.984375px;
            height: 229.1015625px;
        }
        #PARAGRAPH115 {
            top: 82.0391px;
            left: 718px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH115 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH112 {
            top: 179px;
            left: 718px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH112 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH109 {
            top: 277px;
            left: 721px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH109 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH538 {
            top: 352.023px;
            left: 418.992px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH538 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH88 {
            top: 81.9922px;
            left: 57.9883px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH88 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE540 {
            top: 77.0078px;
            left: 10.00391px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #PARAGRAPH103 {
            top: 178.996px;
            left: 57.9883px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH103 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH106 {
            top: 280px;
            left: 57.9883px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH106 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE541 {
            top: 171.977px;
            left: 10px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #SHAPE542 {
            top: 275.961px;
            left: 10px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #SHAPE544 {
            top: 74.977px;
            left: 671px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #SHAPE545 {
            top: 175.945px;
            left: 670.996px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #SHAPE548 {
            top: 270.922px;
            left: 670.977px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #SHAPE549 {
            top: 346.875px;
            left: 376.977px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #PARAGRAPH550 {
            top: 57.992px;
            left: 57.9883px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH550 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH551 {
            top: 153.988px;
            left: 57.9883px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH551 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH552 {
            top: 258.984px;
            left: 57.9883px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH552 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH553 {
            top: 56.0313px;
            left: 718.973px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH553 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH554 {
            top: 155.016px;
            left: 718.957px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH554 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH555 {
            top: 254px;
            left: 718.957px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH555 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #BOX267 {
            top: 501.773px;
            left: 487.641px;
            width: 322.36328125px;
            height: 238.984375px;
        }
        #HEADLINE268 {
            top: 17px;
            left: 25px;
            padding: 0px;
            width: 116.25px;
            height: 48.75px;
        }
        #HEADLINE268 > .widget-content {
            font-size: 45px;
            text-align: left;
        }
        #BOX269 {
            top: 28px;
            left: 60px;
            width: 134.00390625px;
            height: 28.984375px;
        }
        #HEADLINE270 {
            top: 2px;
            left: 7.9961px;
            padding: 0px;
            width: 119.98046875px;
            height: 22.5px;
        }
        #HEADLINE270 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #HEADLINE271 {
            top: 78px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE271 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE272 {
            top: 114px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE272 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE273 {
            top: 153px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE273 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE274 {
            top: 194px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE274 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #LINE275 {
            top: 92px;
            left: 25px;
            width: 266px;
            height: 25px;
        }
        #LINE276 {
            top: 131px;
            left: 25px;
            width: 266px;
            height: 25px;
        }
        #LINE277 {
            top: 169px;
            left: 25px;
            width: 266px;
            height: 25px;
        }
        #BUTTON289 {
            top: 767.258px;
            left: 388px;
            padding: 0px;
            width: 176px;
            height: 41px;
        }
        #BUTTON289 > .widget-content {
            font-size: 19px;
            text-align: center;
        }
        #BOX256 {
            top: 501.875px;
            left: 142.637px;
            width: 320.3125px;
            height: 239px;
        }
        #HEADLINE257 {
            top: 17px;
            left: 25px;
            padding: 0px;
            width: 116.25px;
            height: 48.75px;
        }
        #HEADLINE257 > .widget-content {
            font-size: 45px;
            text-align: left;
        }
        #BOX258 {
            top: 28px;
            left: 81px;
            width: 117px;
            height: 29px;
        }
        #HEADLINE259 {
            top: 2px;
            left: 11px;
            padding: 0px;
            width: 90px;
            height: 22.5px;
        }
        #HEADLINE259 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #HEADLINE260 {
            top: 78px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE260 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE261 {
            top: 114px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE261 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE262 {
            top: 153px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE262 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #LINE263 {
            top: 92px;
            left: 25px;
            width: 266px;
            height: 25px;
        }
        #LINE264 {
            top: 131px;
            left: 25px;
            width: 266px;
            height: 25px;
        }
        #LINE265 {
            top: 169px;
            left: 25px;
            width: 266px;
            height: 25px;
        }
        #HEADLINE266 {
            top: 194px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE266 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH693 {
            top: 330px;
            left: 418.953px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH693 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE123 {
            top: 29px;
            left: 14px;
            padding: 0px;
            width: 925px;
            height: 72.5px;
        }
        #HEADLINE123 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #GROUP179 {
            top: 39.98046875px;
            left: -1px;
            width: 462.98828125px;
            height: 250.9765625px;
        }
        #BOX145 {
            top: 30.9765625px;
            left: 1px;
            width: 463px;
            height: 220px;
        }
        #BOX177 {
            top: 0px;
            left: 190.00390625px;
            width: 68px;
            height: 68px;
        }
        #SHAPE178 {
            top: 20px;
            left: 19px;
            width: 29px;
            height: 29px;
        }
        #GROUP180 {
            top: 39.96875px;
            left: 496.703125px;
            width: 462.984375px;
            height: 250.96875px;
        }
        #BOX181 {
            top: 30.96875px;
            left: 1px;
            width: 462.98828125px;
            height: 220px;
        }
        #GROUP572 {
            top: 52.96875px;
            left: 26.0625px;
            width: 416.046875px;
            height: 125px;
        }
        #HEADLINE573 {
            top: 0px;
            left: 1.0625px;
            padding: 0px;
            width: 415.99609375px;
            height: 22px;
        }
        #HEADLINE573 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #PARAGRAPH574 {
            top: 45px;
            left: 1px;
            padding: 0px;
            width: 413.359375px;
            height: 80px;
        }
        #PARAGRAPH574 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX184 {
            top: 0px;
            left: 190px;
            width: 68px;
            height: 68px;
        }
        #SHAPE185 {
            top: 20px;
            left: 19px;
            width: 29px;
            height: 29px;
        }
        #GROUP192 {
            top: 325.96875px;
            left: -2px;
            width: 464px;
            height: 250.78125px;
        }
        #BOX193 {
            top: 30.78125px;
            left: 2px;
            width: 463px;
            height: 220px;
        }
        #BOX196 {
            top: 0px;
            left: 191px;
            width: 68px;
            height: 68px;
        }
        #SHAPE197 {
            top: 20px;
            left: 19px;
            width: 29px;
            height: 29px;
        }
        #GROUP584 {
            top: 88.75px;
            left: 1px;
            width: 434px;
            height: 105px;
        }
        #PARAGRAPH586 {
            top: 45px;
            left: 27.5px;
            padding: 0px;
            width: 396.46484375px;
            height: 60px;
        }
        #PARAGRAPH586 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE585 {
            top: 0px;
            left: 17px;
            padding: 0px;
            width: 434px;
            height: 22px;
        }
        #HEADLINE585 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #GROUP560 {
            top: 123.765625px;
            left: 23.875px;
            width: 415px;
            height: 101.796875px;
        }
        #HEADLINE561 {
            top: 0px;
            left: 1px;
            padding: 0px;
            width: 415px;
            height: 22px;
        }
        #HEADLINE561 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #PARAGRAPH562 {
            top: 41.796875px;
            left: 1.640625px;
            padding: 0px;
            width: 397.5px;
            height: 60px;
        }
        #PARAGRAPH562 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP186 {
            top: 325.96875px;
            left: 496.890625px;
            width: 463px;
            height: 250.78125px;
        }
        #BOX187 {
            top: 30.78125px;
            left: 1px;
            width: 463px;
            height: 220px;
        }
        #GROUP596 {
            top: 59.859375px;
            left: 35.265625px;
            width: 378.703125px;
            height: 105px;
        }
        #HEADLINE597 {
            top: 0px;
            left: 1.046875px;
            padding: 0px;
            width: 378.66668701171875px;
            height: 22px;
        }
        #HEADLINE597 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #PARAGRAPH598 {
            top: 45px;
            left: 1px;
            padding: 0px;
            width: 376.25px;
            height: 60px;
        }
        #PARAGRAPH598 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX190 {
            top: 0px;
            left: 190px;
            width: 68px;
            height: 68px;
        }
        #SHAPE191 {
            top: 20px;
            left: 19px;
            width: 29px;
            height: 29px;
        }
        #HEADLINE559 {
            top: 44px;
            left: 14px;
            padding: 0px;
            width: 925px;
            height: 35px;
        }
        #HEADLINE559 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #HEADLINE38 {
            top: 408px;
            left: 467px;
            padding: 0px;
            width: 508.75px;
            height: 24px;
        }
        #HEADLINE38 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #YOUTUBE40 {
            top: 106px;
            left: 480px;
            width: 462.98828125px;
            height: 291px;
        }
        #LISTOP490 {
            top: 124.391px;
            left: 0.980464px;
            width: 448.984375px;
            height: 308px;
        }
        #LISTOP490 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #LISTOP490 > ol.widget-content li::before {
            content: counter(linum, disc);
            width: 26px;
            height: 26px;
            font-size: 13px;
            color: rgba(93, 198, 98, 1);
            margin-right: 0px;
        }
        #LISTOP490 > ol.widget-content li {
            margin-bottom: 4px;
        }
        #LISTOP490 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #HEADLINE497 {
            top: 41px;
            left: -30px;
            padding: 0px;
            width: 508.75px;
            height: 38px;
        }
        #HEADLINE497 > .widget-content {
            font-size: 32px;
            text-align: center;
        }
        #HEADLINE621 {
            top: 715.063px;
            left: 472.715px;
            padding: 0px;
            width: 508.75px;
            height: 23px;
        }
        #HEADLINE621 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #HEADLINE684 {
            top: 980.738px;
            left: -19.008px;
            padding: 0px;
            width: 508.75px;
            height: 24px;
        }
        #HEADLINE684 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #HEADLINE685 {
            top: 675.77px;
            left: 465.984px;
            padding: 0px;
            width: 508.75px;
            height: 38px;
        }
        #HEADLINE685 > .widget-content {
            font-size: 32px;
            text-align: center;
        }
        #HEADLINE498 {
            top: 79.5859px;
            left: -29.2383px;
            padding: 0px;
            width: 508.75px;
            height: 22px;
        }
        #HEADLINE498 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE291 {
            top: 44px;
            left: 14px;
            padding: 0px;
            width: 925px;
            height: 35px;
        }
        #HEADLINE291 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #YOUTUBE295 {
            top: 71.8125px;
            left: 0px;
            width: 485px;
            height: 271px;
        }
        #PARAGRAPH294 {
            top: 130.813px;
            left: 533px;
            padding: 0px;
            width: 395px;
            height: 198px;
        }
        #PARAGRAPH294 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE318 {
            top: 50px;
            left: 14px;
            padding: 0px;
            width: 925px;
            height: 37.5px;
        }
        #HEADLINE318 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #GROUP343 {
            top: 33.984375px;
            left: -1px;
            width: 223px;
            height: 559.796875px;
        }
        #BOX322 {
            top: 0px;
            left: 1px;
            width: 223px;
            height: 185px;
        }
        #BOX323 {
            top: 184.797px;
            left: 1px;
            width: 222.984375px;
            height: 375px;
        }
        #HEADLINE324 {
            top: 17.5625px;
            left: 6.984375px;
            padding: 0px;
            width: 203.0078125px;
            height: 18px;
        }
        #HEADLINE324 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP344 {
            top: 33.984375px;
            left: 242.90625px;
            width: 223px;
            height: 559.796875px;
        }
        #BOX345 {
            top: 0px;
            left: 1px;
            width: 223px;
            height: 185px;
        }
        #BOX346 {
            top: 184.796875px;
            left: 1px;
            width: 222.98828125px;
            height: 375px;
        }
        #HEADLINE347 {
            top: 16px;
            left: 41px;
            padding: 0px;
            width: 140px;
            height: 18px;
        }
        #HEADLINE347 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #LISTOP348 {
            top: 54.53125px;
            left: 13.88671875px;
            width: 205.99609375px;
            height: 225px;
        }
        #LISTOP348 > .widget-content {
            text-align: left;
        }
        #LISTOP348 > ol.widget-content li::before {
            content: counter(linum, disc);
            width: 30px;
            height: 30px;
            font-size: 15px;
            color: rgba(181, 81, 67, 1);
            margin-right: 0px;
        }
        #LISTOP348 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP348 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #GROUP349 {
            top: 33.921875px;
            left: 490px;
            width: 224px;
            height: 560px;
        }
        #BOX350 {
            top: 0px;
            left: 1.00448px;
            width: 224px;
            height: 185px;
        }
        #BOX351 {
            top: 185px;
            left: 1.00448px;
            width: 224px;
            height: 375px;
        }
        #HEADLINE352 {
            top: 16px;
            left: 41.1839px;
            padding: 0px;
            width: 140.625px;
            height: 18px;
        }
        #HEADLINE352 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #LISTOP353 {
            top: 54px;
            left: 12.0538px;
            width: 206.90625px;
            height: 265px;
        }
        #LISTOP353 > .widget-content {
            text-align: left;
        }
        #LISTOP353 > ol.widget-content li::before {
            content: counter(linum, disc);
            width: 30px;
            height: 30px;
            font-size: 15px;
            color: rgba(181, 81, 67, 1);
            margin-right: 0px;
        }
        #LISTOP353 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP353 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #GROUP354 {
            top: 33.921875px;
            left: 733px;
            width: 225px;
            height: 560px;
        }
        #BOX355 {
            top: 0px;
            left: 3px;
            width: 223px;
            height: 185px;
        }
        #BOX356 {
            top: 185px;
            left: 1px;
            width: 223px;
            height: 375px;
        }
        #HEADLINE357 {
            top: 16px;
            left: 24.004px;
            padding: 0px;
            width: 166.09375px;
            height: 18px;
        }
        #HEADLINE357 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #LISTOP358 {
            top: 53.8125px;
            left: 12px;
            width: 205.984375px;
            height: 150px;
        }
        #LISTOP358 > .widget-content {
            text-align: left;
        }
        #LISTOP358 > ol.widget-content li::before {
            content: counter(linum, disc);
            width: 30px;
            height: 30px;
            font-size: 15px;
            color: rgba(181, 81, 67, 1);
            margin-right: 0px;
        }
        #LISTOP358 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP358 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #LISTOP342 {
            top: 272.7734375px;
            left: 15.99609375px;
            width: 205.984375px;
            height: 325px;
        }
        #LISTOP342 > .widget-content {
            text-align: left;
        }
        #LISTOP342 > ol.widget-content li::before {
            content: counter(linum, disc);
            width: 30px;
            height: 30px;
            font-size: 15px;
            color: rgba(181, 81, 67, 1);
            margin-right: 0px;
        }
        #LISTOP342 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP342 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #HEADLINE222 {
            top: 44px;
            left: 14px;
            padding: 0px;
            width: 925px;
            height: 35px;
        }
        #HEADLINE222 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #GROUP211 {
            top: 280.96875px;
            left: 9.953125px;
            width: 453px;
            height: 144px;
        }
        #BOX212 {
            top: 0px;
            left: 1px;
            width: 144px;
            height: 144px;
        }
        #HEADLINE213 {
            top: 82.984375px;
            left: 164px;
            padding: 0px;
            width: 290px;
            height: 52.5px;
        }
        #HEADLINE213 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE214 {
            top: 19.96875px;
            left: 165px;
            padding: 0px;
            width: 283.75px;
            height: 20px;
        }
        #HEADLINE214 > .widget-content {
            font-size: 17px;
            text-align: left;
        }
        #HEADLINE215 {
            top: 48.953125px;
            left: 164px;
            padding: 0px;
            width: 132.5px;
            height: 16.25px;
        }
        #HEADLINE215 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #GROUP216 {
            top: 294.21875px;
            left: 490px;
            width: 454px;
            height: 144px;
        }
        #BOX217 {
            top: 0px;
            left: 1px;
            width: 144px;
            height: 144px;
        }
        #HEADLINE218 {
            top: 80.8125px;
            left: 164px;
            padding: 0px;
            width: 291px;
            height: 54px;
        }
        #HEADLINE218 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE219 {
            top: 20px;
            left: 165px;
            padding: 0px;
            width: 284px;
            height: 21px;
        }
        #HEADLINE219 > .widget-content {
            font-size: 17px;
            text-align: left;
        }
        #HEADLINE220 {
            top: 49px;
            left: 165px;
            padding: 0px;
            width: 208px;
            height: 17px;
        }
        #HEADLINE220 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #BOX207 {
            top: 76.984px;
            left: 494.969px;
            width: 144px;
            height: 144px;
        }
        #HEADLINE208 {
            top: 143.968px;
            left: 659.985px;
            padding: 0px;
            width: 290px;
            height: 35px;
        }
        #HEADLINE208 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE209 {
            top: 87.968px;
            left: 658.985px;
            padding: 0px;
            width: 284px;
            height: 21px;
        }
        #HEADLINE209 > .widget-content {
            font-size: 17px;
            text-align: left;
        }
        #HEADLINE210 {
            top: 113.876px;
            left: 661.906px;
            padding: 0px;
            width: 230px;
            height: 16.25px;
        }
        #HEADLINE210 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #BOX202 {
            top: 64.984px;
            left: 9.9375px;
            width: 144px;
            height: 144px;
        }
        #HEADLINE203 {
            top: 142.812px;
            left: 172.954px;
            padding: 0px;
            width: 290px;
            height: 70px;
        }
        #HEADLINE203 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE204 {
            top: 84.9684px;
            left: 173.953px;
            padding: 0px;
            width: 283.75px;
            height: 20px;
        }
        #HEADLINE204 > .widget-content {
            font-size: 17px;
            text-align: left;
        }
        #HEADLINE205 {
            top: 111.968px;
            left: 176.001px;
            padding: 0px;
            width: 283.75px;
            height: 16.25px;
        }
        #HEADLINE205 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE625 {
            top: 481.547px;
            left: 118px;
            padding: 0px;
            width: 397.3333435058594px;
            height: 42.66666793823242px;
        }
        #HEADLINE625 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BUTTON626 {
            top: 245px;
            left: 149.008px;
            padding: 0px;
            width: 315px;
            height: 91px;
        }
        #BUTTON626 > .widget-content {
            font-size: 36px;
            text-align: left;
        }
        #PARAGRAPH627 {
            top: 157px;
            left: 36px;
            padding: 0px;
            width: 535px;
            height: 66px;
        }
        #PARAGRAPH627 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE628 {
            top: 64px;
            left: 35.25px;
            padding: 0px;
            width: 529px;
            height: 82px;
        }
        #HEADLINE628 > .widget-content {
            font-size: 36px;
            text-align: center;
        }
        #BOX629 {
            top: 362.552px;
            left: 149.007px;
            width: 312.28125px;
            height: 101px;
        }
        #GROUP630 {
            top: 22px;
            left: 14px;
            width: 283px;
            height: 17px;
        }
        #PARAGRAPH631 {
            top: 0px;
            left: 1px;
            padding: 0px;
            width: 61px;
            height: 17px;
        }
        #PARAGRAPH631 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #PARAGRAPH632 {
            top: 0px;
            left: 74px;
            padding: 0px;
            width: 61px;
            height: 17px;
        }
        #PARAGRAPH632 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #PARAGRAPH633 {
            top: 0px;
            left: 148px;
            padding: 0px;
            width: 61px;
            height: 17px;
        }
        #PARAGRAPH633 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #PARAGRAPH634 {
            top: 0px;
            left: 223px;
            padding: 0px;
            width: 61px;
            height: 17px;
        }
        #PARAGRAPH634 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #COUNTDOWN635 {
            top: 38px;
            left: 10px;
            width: 298px;
            height: 45px;
        }
        #COUNTDOWN635 > .widget-content {
            font-size: 36px;
        }
        #BOX636 {
            top: 72.6667px;
            left: 606.333px;
            width: 323px;
            height: 469px;
        }
        #HEADLINE637 {
            top: 26px;
            left: 35px;
            padding: 0px;
            width: 288px;
            height: 26.666667938232422px;
        }
        #HEADLINE637 > .widget-content {
            font-size: 21px;
            text-align: left;
        }
        #FORM638 {
            top: 80px;
            left: 27.9883px;
            width: 261.9921875px;
            height: 284.00390625px;
        }
        #ITEM_FORM639 {
            top: 55.5441px;
            left: 0px;
            width: 262px;
            height: 40.6875px;
        }
        #ITEM_FORM640 {
            top: 111.089px;
            left: 0px;
            width: 262px;
            height: 40.6875px;
        }
        #ITEM_FORM641 {
            top: 160.633px;
            left: 0px;
            width: 262px;
            height: 123.390625px;
        }
        #ITEM_FORM642 {
            top: 0px;
            left: 0px;
            width: 262px;
            height: 40.6875px;
        }
        #BUTTON643 {
            top: 387px;
            left: 28.9792px;
            padding: 0px;
            width: 262.66668701171875px;
            height: 48px;
        }
        #BUTTON643 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #HEADLINE691 {
            top: 254.938px;
            left: 327px;
            padding: 0px;
            width: 200px;
            height: 59px;
        }
        #HEADLINE691 > .widget-content {
            font-size: 53px;
            text-align: left;
        }
        #BOX410 {
            top: 413.813px;
            left: -635px;
            width: 2163px;
            height: 70px;
        }
        #PARAGRAPH411 {
            top: 23px;
            left: 943px;
            padding: 0px;
            width: 376px;
            height: 20px;
        }
        #PARAGRAPH411 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP499 {
            top: 74.23828125px;
            left: 62.90625px;
            width: 428.984375px;
            height: 174.98046875px;
        }
        #HEADLINE500 {
            top: 0px;
            left: 2.2890625px;
            padding: 0px;
            width: 318.8333435058594px;
            height: 27px;
        }
        #HEADLINE500 > .widget-content {
            font-size: 21px;
            text-align: left;
        }
        #HEADLINE501 {
            top: 52.98828125px;
            left: 51.546875px;
            padding: 0px;
            width: 376.25px;
            height: 20px;
        }
        #HEADLINE501 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE502 {
            top: 46.9921875px;
            left: 1px;
            width: 33.6875px;
            height: 26px;
        }
        #SHAPE503 {
            top: 80.99609375px;
            left: 1px;
            width: 33.6875px;
            height: 26px;
        }
        #HEADLINE504 {
            top: 86.171875px;
            left: 50.98046875px;
            padding: 0px;
            width: 377.5px;
            height: 20px;
        }
        #HEADLINE504 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE505 {
            top: 118.984375px;
            left: 51.546875px;
            padding: 0px;
            width: 377.5px;
            height: 20px;
        }
        #HEADLINE505 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE506 {
            top: 112.98828125px;
            left: 1px;
            width: 33.6875px;
            height: 26px;
        }
        #SHAPE507 {
            top: 148.984375px;
            left: 1px;
            width: 33.6875px;
            height: 26px;
        }
        #HEADLINE508 {
            top: 154.98046875px;
            left: 51.546875px;
            padding: 0px;
            width: 378.4375px;
            height: 20px;
        }
        #HEADLINE508 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #GROUP519 {
            top: 645.195px;
            left: 320.977px;
            width: 428.9765625px;
            height: 174.984375px;
        }
        #HEADLINE520 {
            top: 0px;
            left: 2.28906px;
            padding: 0px;
            width: 318.8333435058594px;
            height: 27px;
        }
        #HEADLINE520 > .widget-content {
            font-size: 21px;
            text-align: left;
        }
        #HEADLINE521 {
            top: 52.9922px;
            left: 51.5547px;
            padding: 0px;
            width: 377.3333435058594px;
            height: 20px;
        }
        #HEADLINE521 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE522 {
            top: 46.9922px;
            left: 1px;
            width: 33.6875px;
            height: 26px;
        }
        #SHAPE523 {
            top: 81px;
            left: 1px;
            width: 33.6875px;
            height: 26px;
        }
        #HEADLINE524 {
            top: 86.1797px;
            left: 50.9922px;
            padding: 0px;
            width: 378px;
            height: 19.5px;
        }
        #HEADLINE524 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE525 {
            top: 118.992px;
            left: 51.5547px;
            padding: 0px;
            width: 378.4375px;
            height: 20px;
        }
        #HEADLINE525 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE526 {
            top: 112.992px;
            left: 1px;
            width: 33.6875px;
            height: 26px;
        }
        #SHAPE527 {
            top: 148.992px;
            left: 1px;
            width: 33.6875px;
            height: 26px;
        }
        #HEADLINE528 {
            top: 154.992px;
            left: 51.5547px;
            padding: 0px;
            width: 378.4375px;
            height: 20px;
        }
        #HEADLINE528 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #FACEBOOK_MESSAGES529 {
            top: 129.254px;
            left: 615px;
            width: 265px;
            height: 210px;
        }
        #HEADLINE532 {
            top: 76.2539px;
            left: 625px;
            padding: 0px;
            width: 246px;
            height: 27px;
        }
        #HEADLINE532 > .widget-content {
            font-size: 21px;
            text-align: left;
        }
    }

    #SECTION2 {
        display: block;
        background-image: url("https://lakita.vn/public/y1002/yoga.jpg");
        background-color: rgba(255, 255, 255, 0);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #SECTION2 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0.36);
    }

    #SECTION41 {
        display: block;
        background-image: url("https://static.ladipage.net/s1400/5a28c4f8c3f6592b3acabec8/blue-wallpaper9-1513050775.jpg");
        background-color: rgba(15, 16, 33, 1);
        background-origin: content-box;
        background-size: 100% auto;
        background-attachment: scroll;
        background-position: top right;
        background-repeat: no-repeat;
    }

    #SECTION41 > .ladi-widget-overlay {
        background-color: rgba(255, 243, 243, 0);
    }

    #SECTION81 {
        display: block;
        background-color: rgba(255, 255, 255, 1);
    }

    #SECTION122 {
        display: block;
        background-image: url("https://static.ladipage.net/s1400/5a28c4f8c3f6592b3acabec8/blue-wallpaper9-1513050775.jpg");
        background-color: rgba(15, 16, 33, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #SECTION122 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0);
    }

    #SECTION132 {
        display: block;
        background-color: rgba(245, 245, 245, 1);
    }

    #SECTION558 {
        display: block;
        background-image: url("https://static.ladipage.net/s1400/5a28c4f8c3f6592b3acabec8/blue-wallpaper9-1513050775.jpg");
        background-color: rgba(97, 139, 80, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #SECTION558 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0);
    }

    #SECTION37 {
        display: block;
        background-color: rgba(255, 255, 255, 1);
    }

    #SECTION290 {
        display: block;
        background-image: url("https://static.ladipage.net/s1400/5a28c4f8c3f6592b3acabec8/blue-wallpaper9-1513050775.jpg");
        background-color: rgba(97, 139, 80, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #SECTION290 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0);
    }

    #SECTION292 {
        display: block;
        background-image: url("rgba(245,245,245,1)");
        background-color: rgba(245, 245, 245, 1);
        background-size: cover;
        background-attachment: fixed;
        background-position: top left;
        background-repeat: no-repeat;
    }

    #SECTION292 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0);
    }

    #SECTION317 {
        display: block;
        background-image: url("https://static.ladipage.net/s1400/5a28c4f8c3f6592b3acabec8/nen_cam-1513052101.jpg");
        background-color: rgba(215, 167, 0, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #SECTION317 > .ladi-widget-overlay {
        background-color: rgba(234, 191, 6, 0.72);
    }

    #SECTION319 {
        display: block;
        background-color: rgba(255, 255, 255, 1);
    }

    #SECTION221 {
        display: block;
        background-image: url("https://static.ladipage.net/s1400/5a28c4f8c3f6592b3acabec8/blue-wallpaper9-1513050775.jpg");
        background-color: rgba(97, 139, 80, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #SECTION221 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0);
    }

    #SECTION198 {
        display: block;
        background-color: rgba(255, 255, 255, 0);
    }

    #SECTION624 {
        display: block;
        background-color: rgba(37, 36, 47, 0.9);
    }

    #SECTION409 {
        display: block;
        background-color: rgba(28, 28, 28, 1);
    }

    #BUTTON5 {
        display: table;
    }

    #BUTTON5 > .widget-content {
        background-color: rgba(253, 216, 53, 1);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 196, 0, 1);
        font-weight: 700;
        line-height: 35px;
        letter-spacing: 0px;
    }

    #BUTTON5> .widget-content {
        border-radius: 0px;
    }

    #BUTTON5> .ladi-widget-overlay {
        border-radius: 0px;
    }

    #HEADLINE496 {
        display: block;
    }

    #HEADLINE496 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 28px;
    }

    #PARAGRAPH7 {
        display: block;
    }

    #PARAGRAPH7 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Montserrat', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 300;
        line-height: 22px;
        letter-spacing: 1px;
    }

    #HEADLINE8 {
        display: block;
    }

    #HEADLINE8 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Quicksand', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 252, 252, 1);
        font-weight: 400;
        line-height: 36px;
        letter-spacing: 3px;
    }

    #BOX471 {
        display: block;
    }

    #BOX471 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX471> .widget-content {
        border-radius: 5px;
    }

    #BOX471> .ladi-widget-overlay {
        border-radius: 5px;
    }

    #HEADLINE472 {
        display: block;
    }

    #HEADLINE472 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(38, 38, 38, 1);
        font-weight: 400;
        line-height: 27px;
    }

    #GROUP484 {
        display: block;
    }

    #GROUP484 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #FORM485 {
        display: block;
    }

    #FORM485 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #FORM485 .widget-content::-webkit-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #FORM485 .widget-content:-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #FORM485 .widget-content::-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #FORM485 .widget-content:-ms-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM486 {
        display: block;
    }

    #ITEM_FORM486 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM486> .widget-content {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM486> .ladi-widget-overlay {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM486 .widget-content::-webkit-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM486 .widget-content:-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM486 .widget-content::-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM486 .widget-content:-ms-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM487 {
        display: block;
    }

    #ITEM_FORM487 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM487> .widget-content {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM487> .ladi-widget-overlay {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM487 .widget-content::-webkit-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM487 .widget-content:-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM487 .widget-content::-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM487 .widget-content:-ms-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM488 {
        display: block;
    }

    #ITEM_FORM488 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM488> .widget-content {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM488> .ladi-widget-overlay {
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(194, 194, 194, 1);
    }

    #ITEM_FORM488 .widget-content::-webkit-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM488 .widget-content:-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM488 .widget-content::-moz-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #ITEM_FORM488 .widget-content:-ms-input-placeholder {
        color: rgba(130, 130, 130, 1)
    }

    #BUTTON489 {
        display: table;
    }

    #BUTTON489 > .widget-content {
        background-color: rgba(10, 13, 45, 1);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: #ffffff;
        font-weight: 700;
        line-height: 22px;
    }

    #BUTTON489> .widget-content {
        border-radius: 2px;
    }

    #BUTTON489> .ladi-widget-overlay {
        border-radius: 2px;
    }

    #HEADLINE492 {
        display: block;
    }

    #HEADLINE492 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Pattaya', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 252, 252, 1);
        font-weight: 400;
        line-height: 51px;
        letter-spacing: 1px;
    }

    #HEADLINE493 {
        display: block;
    }

    #HEADLINE493 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Quicksand', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 30px;
        letter-spacing: 6px;
    }

    #HEADLINE495 {
        display: block;
    }

    #HEADLINE495 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 55px;
    }

    #BUTTON686 {
        display: table;
    }

    #BUTTON686 > .widget-content {
        background-color: rgba(253, 216, 53, 1);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 0.84);
        font-weight: 700;
        line-height: 38px;
    }

    #BUTTON686> .widget-content {
        border-radius: 0px;
        border-width: 0px;
        border-style: solid;
    }

    #BUTTON686> .ladi-widget-overlay {
        border-radius: 0px;
        border-width: 0px;
        border-style: solid;
    }

    #HEADLINE692 {
        display: block;
    }

    #HEADLINE692 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 59px;
    }

    #HEADLINE42 {
        display: block;
    }

    #HEADLINE42 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 36px;
        letter-spacing: 4px;
    }

    #BOX120 {
        display: block;
    }

    #BOX120 > .widget-content {
        background-color: rgba(255, 202, 40, 1);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE121 {
        display: block;
    }

    #HEADLINE121 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Arima Madurai', cursive;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        font-style: italic;
        line-height: 30px;
        letter-spacing: 2px;
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

    #PARAGRAPH115 {
        display: block;
    }

    #PARAGRAPH115 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        line-height: 20px;
    }

    #PARAGRAPH112 {
        display: block;
    }

    #PARAGRAPH112 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        line-height: 20px;
    }

    #PARAGRAPH109 {
        display: block;
    }

    #PARAGRAPH109 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        line-height: 20px;
    }

    #PARAGRAPH538 {
        display: block;
    }

    #PARAGRAPH538 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        line-height: 20px;
    }

    #PARAGRAPH88 {
        display: block;
    }

    #PARAGRAPH88 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        line-height: 20px;
    }

    #SHAPE540 {
        display: block;
    }

    #SHAPE540 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(10, 13, 45, 1);
    }

    #SHAPE540> .widget-content svg {
        fill: rgba(10, 13, 45, 1);
    }

    #PARAGRAPH103 {
        display: block;
    }

    #PARAGRAPH103 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        line-height: 20px;
    }

    #PARAGRAPH106 {
        display: block;
    }

    #PARAGRAPH106 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        line-height: 20px;
    }

    #SHAPE541 {
        display: block;
    }

    #SHAPE541 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(10, 13, 45, 1);
    }

    #SHAPE541> .widget-content svg {
        fill: rgba(10, 13, 45, 1);
    }

    #SHAPE542 {
        display: block;
    }

    #SHAPE542 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(10, 13, 45, 1);
    }

    #SHAPE542> .widget-content svg {
        fill: rgba(10, 13, 45, 1);
    }

    #SHAPE544 {
        display: block;
    }

    #SHAPE544 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(10, 13, 45, 1);
    }

    #SHAPE544> .widget-content svg {
        fill: rgba(10, 13, 45, 1);
    }

    #SHAPE545 {
        display: block;
    }

    #SHAPE545 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(10, 13, 45, 1);
    }

    #SHAPE545> .widget-content svg {
        fill: rgba(10, 13, 45, 1);
    }

    #SHAPE548 {
        display: block;
    }

    #SHAPE548 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(10, 13, 45, 1);
    }

    #SHAPE548> .widget-content svg {
        fill: rgba(10, 13, 45, 1);
    }

    #SHAPE549 {
        display: block;
    }

    #SHAPE549 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(10, 13, 45, 1);
    }

    #SHAPE549> .widget-content svg {
        fill: rgba(10, 13, 45, 1);
    }

    #PARAGRAPH550 {
        display: block;
    }

    #PARAGRAPH550 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        font-weight: 600;
        line-height: 20px;
    }

    #PARAGRAPH551 {
        display: block;
    }

    #PARAGRAPH551 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        font-weight: 600;
        line-height: 20px;
    }

    #PARAGRAPH552 {
        display: block;
    }

    #PARAGRAPH552 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        font-weight: 600;
        line-height: 20px;
    }

    #PARAGRAPH553 {
        display: block;
    }

    #PARAGRAPH553 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        font-weight: 600;
        line-height: 20px;
    }

    #PARAGRAPH554 {
        display: block;
    }

    #PARAGRAPH554 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        font-weight: 600;
        line-height: 20px;
    }

    #PARAGRAPH555 {
        display: block;
    }

    #PARAGRAPH555 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        font-weight: 600;
        line-height: 20px;
    }

    #BOX267 {
        display: block;
    }

    #BOX267 > .widget-content {
        background-color: rgba(253, 216, 53, 1);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE268 {
        display: block;
    }

    #HEADLINE268 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 49px;
    }

    #BOX269 {
        display: block;
    }

    #BOX269 > .widget-content {
        background-color: rgba(13, 13, 13, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX269> .widget-content {
        border-radius: 20px;
    }

    #BOX269> .ladi-widget-overlay {
        border-radius: 20px;
    }

    #HEADLINE270 {
        display: block;
    }

    #HEADLINE270 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 23px;
        letter-spacing: 0px;
    }

    #HEADLINE271 {
        display: block;
    }

    #HEADLINE271 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #HEADLINE272 {
        display: block;
    }

    #HEADLINE272 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #HEADLINE273 {
        display: block;
    }

    #HEADLINE273 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #HEADLINE274 {
        display: block;
    }

    #HEADLINE274 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #LINE275 {
        display: block;
    }

    #LINE275>.widget-content .line {
        border-top-width: 1px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: dotted;
        border-color: rgba(255, 255, 255, 1);
        margin-top: 11.5px;
    }

    #LINE275 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #LINE276 {
        display: block;
    }

    #LINE276>.widget-content .line {
        border-top-width: 1px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: dotted;
        border-color: rgba(255, 255, 255, 1);
        margin-top: 11.5px;
    }

    #LINE276 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #LINE277 {
        display: block;
    }

    #LINE277>.widget-content .line {
        border-top-width: 1px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: dotted;
        border-color: rgba(255, 255, 255, 1);
        margin-top: 11.5px;
    }

    #LINE277 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BUTTON289 {
        display: table;
    }

    #BUTTON289 > .widget-content {
        background-color: rgba(10, 13, 45, 1);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 25px;
    }

    #BUTTON289> .widget-content {
        border-radius: 0px;
        border-width: 0px;
        border-style: solid;
        border-color: rgba(15, 15, 15, 1);
    }

    #BUTTON289> .ladi-widget-overlay {
        border-radius: 0px;
        border-width: 0px;
        border-style: solid;
        border-color: rgba(15, 15, 15, 1);
    }

    #BOX256 {
        display: block;
    }

    #BOX256 > .widget-content {
        background-color: rgba(255, 193, 7, 1);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE257 {
        display: block;
    }

    #HEADLINE257 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 49px;
    }

    #BOX258 {
        display: block;
    }

    #BOX258 > .widget-content {
        background-color: rgba(13, 13, 13, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX258> .widget-content {
        border-radius: 20px;
    }

    #BOX258> .ladi-widget-overlay {
        border-radius: 20px;
    }

    #HEADLINE259 {
        display: block;
    }

    #HEADLINE259 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 23px;
        letter-spacing: 1px;
    }

    #HEADLINE260 {
        display: block;
    }

    #HEADLINE260 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #HEADLINE261 {
        display: block;
    }

    #HEADLINE261 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #HEADLINE262 {
        display: block;
    }

    #HEADLINE262 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #LINE263 {
        display: block;
    }

    #LINE263>.widget-content .line {
        border-top-width: 1px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: dotted;
        border-color: rgba(255, 255, 255, 1);
        margin-top: 11.5px;
    }

    #LINE263 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #LINE264 {
        display: block;
    }

    #LINE264>.widget-content .line {
        border-top-width: 1px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: dotted;
        border-color: rgba(255, 255, 255, 1);
        margin-top: 11.5px;
    }

    #LINE264 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #LINE265 {
        display: block;
    }

    #LINE265>.widget-content .line {
        border-top-width: 1px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-style: dotted;
        border-color: rgba(255, 255, 255, 1);
        margin-top: 11.5px;
    }

    #LINE265 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE266 {
        display: block;
    }

    #HEADLINE266 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #PARAGRAPH693 {
        display: block;
    }

    #PARAGRAPH693 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(117, 117, 117, 1);
        font-weight: 600;
        line-height: 20px;
    }

    #HEADLINE123 {
        display: block;
    }

    #HEADLINE123 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 37px;
        letter-spacing: 4px;
    }

    #GROUP179 {
        display: block;
    }

    #GROUP179 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX145 {
        display: block;
    }

    #BOX145 > .widget-content {
        background-color: rgba(192, 57, 43, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #BOX145> .widget-content {
        border-width: 2px;
        border-style: dotted;
        border-color: rgba(0, 0, 0, 1);
    }

    #BOX145> .ladi-widget-overlay {
        border-width: 2px;
        border-style: dotted;
        border-color: rgba(0, 0, 0, 1);
    }

    #BOX177 {
        display: block;
    }

    #BOX177 > .widget-content {
        background-color: rgba(242, 189, 2, 1);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #BOX177> .widget-content {
        border-radius: 220px;
    }

    #BOX177> .ladi-widget-overlay {
        border-radius: 220px;
    }

    #SHAPE178 {
        display: block;
    }

    #SHAPE178 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE178> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #GROUP180 {
        display: block;
    }

    #GROUP180 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX181 {
        display: block;
    }

    #BOX181 > .widget-content {
        background-color: rgba(192, 57, 43, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #BOX181> .widget-content {
        border-width: 2px;
        border-style: dotted;
        border-color: rgba(0, 0, 0, 1);
    }

    #BOX181> .ladi-widget-overlay {
        border-width: 2px;
        border-style: dotted;
        border-color: rgba(0, 0, 0, 1);
    }

    #GROUP572 {
        display: block;
    }

    #GROUP572 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE573 {
        display: block;
    }

    #HEADLINE573 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        text-transform: uppercase;
        font-weight: 700;
        line-height: 22px;
    }

    #PARAGRAPH574 {
        display: block;
    }

    #PARAGRAPH574 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        line-height: 21px;
    }

    #BOX184 {
        display: block;
    }

    #BOX184 > .widget-content {
        background-color: rgba(242, 189, 2, 1);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #BOX184> .widget-content {
        border-radius: 220px;
    }

    #BOX184> .ladi-widget-overlay {
        border-radius: 220px;
    }

    #SHAPE185 {
        display: block;
    }

    #SHAPE185 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE185> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #GROUP192 {
        display: block;
    }

    #GROUP192 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX193 {
        display: block;
    }

    #BOX193 > .widget-content {
        background-color: rgba(192, 57, 43, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #BOX193> .widget-content {
        border-width: 2px;
        border-style: dotted;
        border-color: rgba(0, 0, 0, 1);
    }

    #BOX193> .ladi-widget-overlay {
        border-width: 2px;
        border-style: dotted;
        border-color: rgba(0, 0, 0, 1);
    }

    #BOX196 {
        display: block;
    }

    #BOX196 > .widget-content {
        background-color: rgba(242, 189, 2, 1);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #BOX196> .widget-content {
        border-radius: 220px;
    }

    #BOX196> .ladi-widget-overlay {
        border-radius: 220px;
    }

    #SHAPE197 {
        display: block;
    }

    #SHAPE197 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE197> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #GROUP584 {
        display: block;
    }

    #GROUP584 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH586 {
        display: block;
    }

    #PARAGRAPH586 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        line-height: 21px;
    }

    #HEADLINE585 {
        display: block;
    }

    #HEADLINE585 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        text-transform: uppercase;
        font-weight: 700;
        line-height: 22px;
    }

    #GROUP560 {
        display: block;
    }

    #GROUP560 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE561 {
        display: block;
    }

    #HEADLINE561 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        text-transform: uppercase;
        font-weight: 700;
        line-height: 22px;
    }

    #PARAGRAPH562 {
        display: block;
    }

    #PARAGRAPH562 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #GROUP186 {
        display: block;
    }

    #GROUP186 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX187 {
        display: block;
    }

    #BOX187 > .widget-content {
        background-color: rgba(192, 57, 43, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #BOX187> .widget-content {
        border-width: 2px;
        border-style: dotted;
        border-color: rgba(0, 0, 0, 1);
    }

    #BOX187> .ladi-widget-overlay {
        border-width: 2px;
        border-style: dotted;
        border-color: rgba(0, 0, 0, 1);
    }

    #GROUP596 {
        display: block;
    }

    #GROUP596 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE597 {
        display: block;
    }

    #HEADLINE597 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        text-transform: uppercase;
        font-weight: 700;
        line-height: 22px;
    }

    #PARAGRAPH598 {
        display: block;
    }

    #PARAGRAPH598 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        line-height: 21px;
    }

    #BOX190 {
        display: block;
    }

    #BOX190 > .widget-content {
        background-color: rgba(242, 189, 2, 1);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
    }

    #BOX190> .widget-content {
        border-radius: 220px;
    }

    #BOX190> .ladi-widget-overlay {
        border-radius: 220px;
    }

    #SHAPE191 {
        display: block;
    }

    #SHAPE191 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE191> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #HEADLINE559 {
        display: block;
    }

    #HEADLINE559 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 36px;
        letter-spacing: 3px;
    }

    #HEADLINE38 {
        display: block;
    }

    #HEADLINE38 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(8, 25, 10, 1);
        font-weight: 600;
        line-height: 24px;
        letter-spacing: 4px;
    }

    #YOUTUBE40 {
        display: block;
    }

    #YOUTUBE40 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        box-shadow: 7px 12px 15px rgba(217, 217, 217, 0.69);
    }

    #YOUTUBE40> .widget-content {
        border-radius: 3px;
    }

    #YOUTUBE40> .ladi-widget-overlay {
        border-radius: 3px;
    }

    #LISTOP490 {
        display: block;
    }

    #LISTOP490 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #HEADLINE497 {
        display: block;
    }

    #HEADLINE497 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 193, 7, 1);
        font-weight: 700;
        line-height: 38px;
    }

    #HEADLINE621 {
        display: block;
    }

    #HEADLINE621 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 600;
        line-height: 23px;
        letter-spacing: 1px;
    }

    #HEADLINE684 {
        display: block;
    }

    #HEADLINE684 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        font-weight: 600;
        line-height: 24px;
        letter-spacing: 4px;
    }

    #HEADLINE685 {
        display: block;
    }

    #HEADLINE685 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(240, 181, 3, 1);
        font-weight: 700;
        line-height: 38px;
    }

    #HEADLINE498 {
        display: block;
    }

    #HEADLINE498 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(6, 7, 19, 1);
        font-weight: 600;
        line-height: 22px;
    }

    #HEADLINE291 {
        display: block;
    }

    #HEADLINE291 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 36px;
        letter-spacing: 4px;
    }

    #YOUTUBE295 {
        display: block;
    }

    #YOUTUBE295 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        box-shadow: 7px 12px 15px rgba(217, 217, 217, 0.69);
    }

    #YOUTUBE295> .widget-content {
        border-radius: 3px;
    }

    #YOUTUBE295> .ladi-widget-overlay {
        border-radius: 3px;
    }

    #PARAGRAPH294 {
        display: block;
    }

    #PARAGRAPH294 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(97, 97, 97, 1);
        font-weight: 400;
        line-height: 22px;
    }

    #HEADLINE318 {
        display: block;
    }

    #HEADLINE318 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 38px;
        letter-spacing: 4px;
    }

    #GROUP343 {
        display: block;
    }

    #GROUP343 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX322 {
        display: block;
    }

    #BOX322 > .widget-content {
        background-image: url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_dung-1512980057.jpg");
        background-origin: content-box;
        background-size: auto 100%;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
        background-color: rgba(189, 189, 189, 1);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        background-origin: content-box;
        background-size: auto 100%;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #BOX322 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #BOX323 {
        display: block;
    }

    #BOX323 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        box-shadow: 0px 0px 0px rgba(184, 184, 184, 1);
    }

    #HEADLINE324 {
        display: block;
    }

    #HEADLINE324 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #GROUP344 {
        display: block;
    }

    #GROUP344 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX345 {
        display: block;
    }

    #BOX345 > .widget-content {
        background-image: url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/co-Hoang-Quy-Ly-1512980107.jpg");
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
        background-color: rgba(189, 189, 189, 1);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #BOX345 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #BOX346 {
        display: block;
    }

    #BOX346 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        box-shadow: 0px 0px 0px rgba(184, 184, 184, 1);
    }

    #HEADLINE347 {
        display: block;
    }

    #HEADLINE347 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #LISTOP348 {
        display: block;
    }

    #LISTOP348 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        line-height: 20px;
    }

    #GROUP349 {
        display: block;
    }

    #GROUP349 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX350 {
        display: block;
    }

    #BOX350 > .widget-content {
        background-image: url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/ut4-1512980148.JPG");
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
        background-color: rgba(189, 189, 189, 1);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #BOX350 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #BOX351 {
        display: block;
    }

    #BOX351 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        box-shadow: 0px 0px 0px rgba(184, 184, 184, 1);
    }

    #HEADLINE352 {
        display: block;
    }

    #HEADLINE352 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #LISTOP353 {
        display: block;
    }

    #LISTOP353 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        line-height: 20px;
    }

    #GROUP354 {
        display: block;
    }

    #GROUP354 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX355 {
        display: block;
    }

    #BOX355 > .widget-content {
        background-image: url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
        background-color: rgba(189, 189, 189, 1);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        background-origin: content-box;
        background-size: cover;
        background-attachment: scroll;
        background-position: top center;
        background-repeat: no-repeat;
    }

    #BOX355 > .ladi-widget-overlay {
        background-color: rgba(0, 0, 0, 0);
    }

    #BOX356 {
        display: block;
    }

    #BOX356 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(0, 0, 0, 1);
        box-shadow: 0px 0px 0px rgba(184, 184, 184, 1);
    }

    #HEADLINE357 {
        display: block;
    }

    #HEADLINE357 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        opacity: 1;
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 18px;
    }

    #LISTOP358 {
        display: block;
    }

    #LISTOP358 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        line-height: 20px;
    }

    #LISTOP342 {
        display: block;
    }

    #LISTOP342 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
        line-height: 20px;
    }

    #HEADLINE222 {
        display: block;
    }

    #HEADLINE222 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 36px;
        letter-spacing: 4px;
    }

    #GROUP211 {
        display: block;
    }

    #GROUP211 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX212 {
        display: block;
    }

    #BOX212 > .widget-content {
        background-image: url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512980279.jpg");
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
    }

    #BOX212> .widget-content {
        border-radius: 300px;
        border-width: 0px;
        border-style: solid;
        border-color: rgba(224, 224, 224, 1);
    }

    #BOX212> .ladi-widget-overlay {
        border-radius: 300px;
        border-width: 0px;
        border-style: solid;
        border-color: rgba(224, 224, 224, 1);
    }

    #BOX212 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #HEADLINE213 {
        display: block;
    }

    #HEADLINE213 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Arima Madurai';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(133, 133, 133, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #HEADLINE214 {
        display: block;
    }

    #HEADLINE214 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(192, 57, 43, 1);
        font-weight: 700;
        line-height: 21px;
    }

    #HEADLINE215 {
        display: block;
    }

    #HEADLINE215 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(158, 158, 158, 1);
        font-weight: 700;
        line-height: 17px;
    }

    #GROUP216 {
        display: block;
    }

    #GROUP216 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #BOX217 {
        display: block;
    }

    #BOX217 > .widget-content {
        background-image: url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/son-1512980213.jpg");
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
    }

    #BOX217> .widget-content {
        border-radius: 300px;
        border-width: 0px;
        border-style: solid;
        border-color: rgba(224, 224, 224, 1);
    }

    #BOX217> .ladi-widget-overlay {
        border-radius: 300px;
        border-width: 0px;
        border-style: solid;
        border-color: rgba(224, 224, 224, 1);
    }

    #BOX217 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #HEADLINE218 {
        display: block;
    }

    #HEADLINE218 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Arima Madurai';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(133, 133, 133, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #HEADLINE219 {
        display: block;
    }

    #HEADLINE219 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(192, 57, 43, 1);
        font-weight: 700;
        line-height: 21px;
    }

    #HEADLINE220 {
        display: block;
    }

    #HEADLINE220 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(158, 158, 158, 1);
        font-weight: 700;
        line-height: 17px;
    }

    #BOX207 {
        display: block;
    }

    #BOX207 > .widget-content {
        background-image: url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/trinh_tai-1512980240.jpg");
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
    }

    #BOX207> .widget-content {
        border-radius: 300px;
        border-width: 0px;
        border-style: solid;
        border-color: rgba(224, 224, 224, 1);
    }

    #BOX207> .ladi-widget-overlay {
        border-radius: 300px;
        border-width: 0px;
        border-style: solid;
        border-color: rgba(224, 224, 224, 1);
    }

    #BOX207 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #HEADLINE208 {
        display: block;
    }

    #HEADLINE208 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Arima Madurai';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(133, 133, 133, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #HEADLINE209 {
        display: block;
    }

    #HEADLINE209 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(192, 57, 43, 1);
        font-weight: 700;
        line-height: 21px;
    }

    #HEADLINE210 {
        display: block;
    }

    #HEADLINE210 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(158, 158, 158, 1);
        font-weight: 700;
        line-height: 17px;
    }

    #BOX202 {
        display: block;
    }

    #BOX202 > .widget-content {
        background-image: url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512980256.jpg");
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
    }

    #BOX202> .widget-content {
        border-radius: 300px;
        border-width: 0px;
        border-style: solid;
        border-color: rgba(224, 224, 224, 1);
    }

    #BOX202> .ladi-widget-overlay {
        border-radius: 300px;
        border-width: 0px;
        border-style: solid;
        border-color: rgba(224, 224, 224, 1);
    }

    #BOX202 > .ladi-widget-overlay {
        background-color: rgba(255, 255, 255, 0);
    }

    #HEADLINE203 {
        display: block;
    }

    #HEADLINE203 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Arima Madurai';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(133, 133, 133, 1);
        font-weight: 400;
        line-height: 18px;
    }

    #HEADLINE204 {
        display: block;
    }

    #HEADLINE204 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(192, 57, 43, 1);
        font-weight: 700;
        line-height: 21px;
    }

    #HEADLINE205 {
        display: block;
    }

    #HEADLINE205 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(158, 158, 158, 1);
        font-weight: 700;
        line-height: 17px;
    }

    #HEADLINE625 {
        display: block;
    }

    #HEADLINE625 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(181, 181, 181, 1);
        font-weight: 400;
        line-height: 22px;
    }

    #BUTTON626 {
        display: table;
    }

    #BUTTON626 > .widget-content {
        background-color: rgba(242, 189, 2, 1);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: #ffffff;
        font-weight: 700;
        line-height: 42px;
    }

    #BUTTON626> .widget-content {
        border-radius: 0px;
        border-width: 0px;
        border-style: solid;
    }

    #BUTTON626> .ladi-widget-overlay {
        border-radius: 0px;
        border-width: 0px;
        border-style: solid;
    }

    #PARAGRAPH627 {
        display: block;
    }

    #PARAGRAPH627 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 22px;
    }

    #HEADLINE628 {
        display: block;
    }

    #HEADLINE628 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 41px;
    }

    #BOX629 {
        display: block;
    }

    #BOX629 > .widget-content {
        background-color: rgba(240, 241, 248, 1);
        color: rgba(0, 0, 0, 1);
    }

    #GROUP630 {
        display: block;
    }

    #GROUP630 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH631 {
        display: block;
    }

    #PARAGRAPH631 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 17px;
    }

    #PARAGRAPH632 {
        display: block;
    }

    #PARAGRAPH632 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 17px;
    }

    #PARAGRAPH633 {
        display: block;
    }

    #PARAGRAPH633 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 17px;
    }

    #PARAGRAPH634 {
        display: block;
    }

    #PARAGRAPH634 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans';
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
        line-height: 17px;
    }

    #COUNTDOWN635 {
        display: block;
    }

    #COUNTDOWN635 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Open Sans', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(10, 13, 45, 1);
        font-weight: 700;
    }

    #BOX636 {
        display: block;
    }

    #BOX636 > .widget-content {
        background-color: rgba(59, 59, 59, 1);
        color: rgba(0, 0, 0, 1);
    }

    #BOX636> .widget-content {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(242, 189, 2, 1);
    }

    #BOX636> .ladi-widget-overlay {
        border-width: 2px;
        border-style: solid;
        border-color: rgba(242, 189, 2, 1);
    }

    #HEADLINE637 {
        display: block;
    }

    #HEADLINE637 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 600;
        line-height: 27px;
    }

    #FORM638 {
        display: block;
    }

    #FORM638 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #FORM638 .widget-content::-webkit-input-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #FORM638 .widget-content:-moz-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #FORM638 .widget-content::-moz-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #FORM638 .widget-content:-ms-input-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM639 {
        display: block;
    }

    #ITEM_FORM639 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM639> .widget-content {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(242, 189, 2, 1);
    }

    #ITEM_FORM639> .ladi-widget-overlay {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(242, 189, 2, 1);
    }

    #ITEM_FORM639 .widget-content::-webkit-input-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM639 .widget-content:-moz-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM639 .widget-content::-moz-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM639 .widget-content:-ms-input-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM640 {
        display: block;
    }

    #ITEM_FORM640 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM640> .widget-content {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(242, 189, 2, 1);
    }

    #ITEM_FORM640> .ladi-widget-overlay {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(242, 189, 2, 1);
    }

    #ITEM_FORM640 .widget-content::-webkit-input-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM640 .widget-content:-moz-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM640 .widget-content::-moz-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM640 .widget-content:-ms-input-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM641 {
        display: block;
    }

    #ITEM_FORM641 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM641> .widget-content {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(242, 189, 2, 1);
    }

    #ITEM_FORM641> .ladi-widget-overlay {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(242, 189, 2, 1);
    }

    #ITEM_FORM641 .widget-content::-webkit-input-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM641 .widget-content:-moz-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM641 .widget-content::-moz-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM641 .widget-content:-ms-input-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM642 {
        display: block;
    }

    #ITEM_FORM642 > .widget-content {
        background-color: rgba(255, 255, 255, 1);
        color: rgba(0, 0, 0, 1);
    }

    #ITEM_FORM642> .widget-content {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(242, 189, 2, 1);
    }

    #ITEM_FORM642> .ladi-widget-overlay {
        border-width: 1px;
        border-style: solid;
        border-color: rgba(242, 189, 2, 1);
    }

    #ITEM_FORM642 .widget-content::-webkit-input-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM642 .widget-content:-moz-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM642 .widget-content::-moz-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #ITEM_FORM642 .widget-content:-ms-input-placeholder {
        color: rgba(51, 45, 45, 1)
    }

    #BUTTON643 {
        display: table;
    }

    #BUTTON643 > .widget-content {
        background-color: rgba(242, 189, 2, 1);
        color: rgba(255, 255, 255, 0.87);
        font-weight: 700;
        line-height: 40px;
    }

    #BUTTON643> .widget-content {
        border-radius: 0px;
    }

    #BUTTON643> .ladi-widget-overlay {
        border-radius: 0px;
    }

    #HEADLINE691 {
        display: block;
    }

    #HEADLINE691 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: "Open Sans", sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 700;
        line-height: 59px;
    }

    #BOX410 {
        display: block;
    }

    #BOX410 > .widget-content {
        background-color: rgba(4, 217, 179, 1);
        color: rgba(0, 0, 0, 1);
    }

    #PARAGRAPH411 {
        display: block;
    }

    #PARAGRAPH411 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(28, 28, 28, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #GROUP499 {
        display: block;
    }

    #GROUP499 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE500 {
        display: block;
    }

    #HEADLINE500 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 600;
        line-height: 27px;
    }

    #HEADLINE501 {
        display: block;
    }

    #HEADLINE501 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #SHAPE502 {
        display: block;
    }

    #SHAPE502 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE502> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #SHAPE503 {
        display: block;
    }

    #SHAPE503 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE503> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #HEADLINE504 {
        display: block;
    }

    #HEADLINE504 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #HEADLINE505 {
        display: block;
    }

    #HEADLINE505 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #SHAPE506 {
        display: block;
    }

    #SHAPE506 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE506> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #SHAPE507 {
        display: block;
    }

    #SHAPE507 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE507> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #HEADLINE508 {
        display: block;
    }

    #HEADLINE508 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #GROUP519 {
        display: block;
    }

    #GROUP519 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #HEADLINE520 {
        display: block;
    }

    #HEADLINE520 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 600;
        line-height: 27px;
    }

    #HEADLINE521 {
        display: block;
    }

    #HEADLINE521 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #SHAPE522 {
        display: block;
    }

    #SHAPE522 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE522> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #SHAPE523 {
        display: block;
    }

    #SHAPE523 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE523> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #HEADLINE524 {
        display: block;
    }

    #HEADLINE524 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #HEADLINE525 {
        display: block;
    }

    #HEADLINE525 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #SHAPE526 {
        display: block;
    }

    #SHAPE526 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE526> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #SHAPE527 {
        display: block;
    }

    #SHAPE527 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(255, 255, 255, 1);
    }

    #SHAPE527> .widget-content svg {
        fill: rgba(255, 255, 255, 1);
    }

    #HEADLINE528 {
        display: block;
    }

    #HEADLINE528 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 400;
        line-height: 20px;
    }

    #FACEBOOK_MESSAGES529 {
        display: block;
    }

    #FACEBOOK_MESSAGES529 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        color: rgba(0, 0, 0, 1);
    }

    #FACEBOOK_MESSAGES529> .widget-content {
        border-width: 0px;
        border-style: solid;
        border-color: #000;
    }

    #FACEBOOK_MESSAGES529> .ladi-widget-overlay {
        border-width: 0px;
        border-style: solid;
        border-color: #000;
    }

    #HEADLINE532 {
        display: block;
    }

    #HEADLINE532 > .widget-content {
        background-color: rgba(255, 255, 255, 0);
        font-family: 'Roboto', sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        color: rgba(255, 255, 255, 1);
        font-weight: 600;
        line-height: 27px;
    }

    @media(max-width: 767px) {
        body {
            position: relative;
        }
        #SECTION2 {
            width: 100%;
            height: 589.96875px;
        }
        #SECTION2 .container {}
        #SECTION2 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.36), rgba(0, 0, 0, 0.36)), url("https://lakita.vn/public/y1002/yoga.jpg");
            background-image: -o-linear-gradient(rgba(0, 0, 0, 0.36), rgba(0, 0, 0, 0.36)), url("https://lakita.vn/public/y1002/yoga.jpg");
            background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.36), rgba(0, 0, 0, 0.36)), url("https://lakita.vn/public/y1002/yoga.jpg");
            background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.36), rgba(0, 0, 0, 0.36)), url("https://lakita.vn/public/y1002/yoga.jpg");
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.36), rgba(0, 0, 0, 0.36)), url("https://lakita.vn/public/y1002/yoga.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        #SECTION41 {
            width: 100%;
            height: 78px;
        }
        #SECTION41 .container {}
        #SECTION41 {
            background-image: url("https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/blue-wallpaper9-1513050775.jpg");
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top right;
            background-repeat: no-repeat;
        }
        #SECTION81 {
            width: 100%;
            height: 1114.078125px;
        }
        #SECTION81 .container {}
        #SECTION81 {
            background-image: none;
        }
        #SECTION122 {
            width: 100%;
            height: 101.25px;
        }
        #SECTION122 .container {}
        #SECTION122 {
            background-image: url("https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/blue-wallpaper9-1513050775.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #SECTION132 {
            width: 100%;
            height: 1178px;
        }
        #SECTION132 .container {}
        #SECTION132 {
            background-image: none;
        }
        #SECTION558 {
            width: 100%;
            height: 88px;
        }
        #SECTION558 .container {}
        #SECTION558 {
            background-image: url("https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/blue-wallpaper9-1513050775.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #SECTION37 {
            width: 100%;
            height: 924.2578125px;
        }
        #SECTION37 .container {}
        #SECTION37 {
            background-image: none;
        }
        #SECTION290 {
            width: 100%;
            height: 112px;
        }
        #SECTION290 .container {}
        #SECTION290 {
            background-image: url("https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/blue-wallpaper9-1513050775.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #SECTION292 {
            width: 100%;
            height: 616.4453125px;
        }
        #SECTION292 .container {}
        #SECTION292 {
            background-image: url("rgba(245,245,245,1)");
            background-size: cover;
            background-attachment: fixed;
            background-position: center top;
            background-repeat: no-repeat;
        }
        #SECTION317 {
            width: 100%;
            height: 136px;
        }
        #SECTION317 .container {}
        #SECTION317 {
            background-image: linear-gradient(rgba(234, 191, 6, 0.72), rgba(234, 191, 6, 0.72)), url("https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/nen_cam-1513052101.jpg");
            background-image: -o-linear-gradient(rgba(234, 191, 6, 0.72), rgba(234, 191, 6, 0.72)), url("https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/nen_cam-1513052101.jpg");
            background-image: -ms-linear-gradient(rgba(234, 191, 6, 0.72), rgba(234, 191, 6, 0.72)), url("https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/nen_cam-1513052101.jpg");
            background-image: -moz-linear-gradient(rgba(234, 191, 6, 0.72), rgba(234, 191, 6, 0.72)), url("https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/nen_cam-1513052101.jpg");
            background-image: -webkit-linear-gradient(rgba(234, 191, 6, 0.72), rgba(234, 191, 6, 0.72)), url("https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/nen_cam-1513052101.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #SECTION319 {
            width: 100%;
            height: 2299.62890625px;
        }
        #SECTION319 .container {}
        #SECTION319 {
            background-image: none;
        }
        #SECTION221 {
            width: 100%;
            height: 136px;
        }
        #SECTION221 .container {}
        #SECTION221 {
            background-image: url("https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/blue-wallpaper9-1513050775.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #SECTION198 {
            width: 100%;
            height: 935.9375px;
        }
        #SECTION198 .container {}
        #SECTION198 {
            background-image: none;
        }
        #SECTION624 {
            width: 100%;
            height: 1025.96875px;
        }
        #SECTION624 .container {}
        #SECTION624 {
            background-image: none;
        }
        #SECTION409 {
            width: 100%;
            height: 342.48046875px;
        }
        #SECTION409 .container {}
        #SECTION409 {
            background-image: none;
        }
        #BUTTON5 {
            top: 412px;
            left: 55px;
            padding: 0px;
            width: 265px;
            height: 60px;
        }
        #BUTTON5 > .widget-content {
            font-size: 29px;
            text-align: center;
        }
        #HEADLINE496 {
            top: 22px;
            left: 19.2188px;
            padding: 0px;
            width: 199.5px;
            height: 28px;
        }
        #HEADLINE496 > .widget-content {
            font-size: 22px;
            text-align: left;
        }
        #PARAGRAPH7 {
            top: 299px;
            left: 10px;
            padding: 0px;
            width: 352px;
            height: 88px;
        }
        #PARAGRAPH7 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE8 {
            top: 192px;
            left: 10.5px;
            padding: 0px;
            width: 355px;
            height: 84px;
        }
        #HEADLINE8 > .widget-content {
            font-size: 24px;
            text-align: center;
            line-height: 28px;
        }
        #BOX471 {
            display: none!important;
            top: 172.5px;
            left: 10px;
            width: 355px;
            height: 331.9921875px;
        }
        #HEADLINE472 {
            top: 28px;
            left: 36.673px;
            padding: 0px;
            width: 243.563px;
            height: 54px;
        }
        #HEADLINE472 > .widget-content {
            font-size: 18px;
            text-align: center;
            line-height: 22px;
        }
        #GROUP484 {
            top: 74px;
            left: 27.5px;
            width: 300px;
            height: 181px;
        }
        #FORM485 {
            top: 0px;
            left: 1px;
            width: 300px;
            height: 163.984px;
        }
        #FORM485 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM486 {
            top: 0px;
            left: 0px;
            width: 300px;
            height: 46.1328px;
        }
        #ITEM_FORM486 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM487 {
            top: 58.9268px;
            left: 0px;
            width: 300px;
            height: 46.1328px;
        }
        #ITEM_FORM487 > .widget-content {
            font-size: 16px;
        }
        #ITEM_FORM488 {
            top: 117.854px;
            left: 0px;
            width: 300px;
            height: 46.1328px;
        }
        #ITEM_FORM488 > .widget-content {
            font-size: 16px;
        }
        #BUTTON489 {
            top: 180.977px;
            left: 1px;
            padding: 0px;
            width: 300px;
            height: 48.75px;
        }
        #BUTTON489 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE492 {
            top: 3.5px;
            left: 14.5082px;
            padding: 0px;
            width: 340px;
            height: 165px;
        }
        #HEADLINE492 > .widget-content {
            font-size: 45px;
            text-align: center;
            line-height: 56px;
        }
        #HEADLINE493 {
            top: 13.0078px;
            left: 101.754px;
            padding: 0px;
            width: 199.484375px;
            height: 30px;
        }
        #HEADLINE493 > .widget-content {
            font-size: 24px;
            text-align: left;
        }
        #HEADLINE495 {
            top: 432px;
            left: 88px;
            padding: 0px;
            width: 199px;
            height: 55px;
        }
        #HEADLINE495 > .widget-content {
            font-size: 49px;
            text-align: left;
        }
        #BUTTON686 {
            top: 493.012px;
            left: 30px;
            padding: 0px;
            width: 315px;
            height: 73px;
        }
        #BUTTON686 > .widget-content {
            font-size: 32px;
            text-align: left;
        }
        #HEADLINE692 {
            top: -1px;
            left: 156px;
            padding: 0px;
            width: 136.734375px;
            height: 59px;
        }
        #HEADLINE692 > .widget-content {
            font-size: 53px;
            text-align: left;
        }
        #HEADLINE42 {
            top: 20px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 47.5px;
        }
        #HEADLINE42 > .widget-content {
            font-size: 24px;
            text-align: center;
            line-height: 24px;
        }
        #BOX120 {
            top: 327.055px;
            left: 12px;
            width: 355px;
            height: 152px;
        }
        #HEADLINE121 {
            top: 9px;
            left: 0px;
            padding: 0px;
            width: 355px;
            height: 130px;
        }
        #HEADLINE121 > .widget-content {
            font-size: 24px;
            text-align: center;
            line-height: 26px;
        }
        #IMAGE423 .widget-content:first-child .lp-show-image:first-child {
            width: 100%;
            height: 100%;
            background-position: center center;
            background-size: cover;
            background-image: url(https://static.ladipage.net/s300/5a28c4f8c3f6592b3acabec8/yoga_vp-1512980010.jpg);
        }
        #IMAGE423 {
            top: 26px;
            left: 56.002px;
            width: 260.984375px;
            height: 270.984375px;
        }
        #PARAGRAPH115 {
            display: none!important;
            top: 479.862px;
            left: 50.5078px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH115 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH112 {
            display: none!important;
            top: 686.932px;
            left: 50px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH112 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH109 {
            display: none!important;
            top: 865.74px;
            left: 50.5078px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH109 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH538 {
            display: none!important;
            top: 968.884px;
            left: 50px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH538 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH88 {
            display: none!important;
            top: 449.862px;
            left: 50.5078px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH88 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #SHAPE540 {
            display: none!important;
            top: 404.98px;
            left: 169.512px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #PARAGRAPH103 {
            display: none!important;
            top: 656.932px;
            left: 50px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH103 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH106 {
            display: none!important;
            top: 895.74px;
            left: 50.5078px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH106 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #SHAPE541 {
            display: none!important;
            top: 568.964px;
            left: 169.512px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #SHAPE542 {
            display: none!important;
            top: 820.916px;
            left: 169.512px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #SHAPE544 {
            display: none!important;
            top: 360.996px;
            left: 169.512px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #SHAPE545 {
            display: none!important;
            top: 612.948px;
            left: 169.512px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #SHAPE548 {
            display: none!important;
            top: 776.932px;
            left: 169.512px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #SHAPE549 {
            display: none!important;
            top: 924.9px;
            left: 169.512px;
            width: 35.9765625px;
            height: 33.984375px;
        }
        #PARAGRAPH550 {
            display: none!important;
            top: 50px;
            left: 50px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH550 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH551 {
            display: none!important;
            top: 509.862px;
            left: 50.5078px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH551 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH552 {
            display: none!important;
            top: 746.932px;
            left: 50px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH552 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH553 {
            display: none!important;
            top: 20px;
            left: 50px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH553 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH554 {
            display: none!important;
            top: 538.964px;
            left: 50px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH554 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #PARAGRAPH555 {
            display: none!important;
            top: 716.932px;
            left: 50px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH555 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #BOX267 {
            top: 770.349px;
            left: 32.4336px;
            width: 300px;
            height: 242px;
        }
        #HEADLINE268 {
            top: 17px;
            left: 25px;
            padding: 0px;
            width: 116.25px;
            height: 48.75px;
        }
        #HEADLINE268 > .widget-content {
            font-size: 45px;
            text-align: center;
        }
        #BOX269 {
            top: 28px;
            left: 120px;
            width: 134px;
            height: 28.984375px;
        }
        #HEADLINE270 {
            top: 2px;
            left: 7.9961px;
            padding: 0px;
            width: 119.96875px;
            height: 22.5px;
        }
        #HEADLINE270 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #HEADLINE271 {
            top: 78px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE271 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE272 {
            top: 114px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE272 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE273 {
            top: 153px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE273 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE274 {
            top: 194px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE274 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #LINE275 {
            top: 92px;
            left: 25px;
            width: 265.984375px;
            height: 25px;
        }
        #LINE276 {
            top: 171.656px;
            left: 25.9844px;
            width: 265.984375px;
            height: 25px;
        }
        #LINE277 {
            top: 133px;
            left: 25px;
            width: 265.984375px;
            height: 25px;
        }
        #BUTTON289 {
            top: 1039.34px;
            left: 94.5px;
            padding: 0px;
            width: 176px;
            height: 41px;
        }
        #BUTTON289 > .widget-content {
            font-size: 19px;
            text-align: center;
        }
        #BOX256 {
            top: 513.87px;
            left: 32.5px;
            width: 300px;
            height: 234px;
        }
        #HEADLINE257 {
            top: 17px;
            left: 25px;
            padding: 0px;
            width: 116.25px;
            height: 48.75px;
        }
        #HEADLINE257 > .widget-content {
            font-size: 45px;
            text-align: center;
        }
        #BOX258 {
            top: 28px;
            left: 124px;
            width: 116.984375px;
            height: 28.984375px;
        }
        #HEADLINE259 {
            top: 2.99219px;
            left: 0.9961px;
            padding: 0px;
            width: 90px;
            height: 22.5px;
        }
        #HEADLINE259 > .widget-content {
            font-size: 17px;
            text-align: right;
        }
        #HEADLINE260 {
            top: 78px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE260 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE261 {
            top: 114px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE261 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE262 {
            top: 153px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE262 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #LINE263 {
            top: 92px;
            left: 25px;
            width: 265.984375px;
            height: 25px;
        }
        #LINE264 {
            top: 177px;
            left: 25px;
            width: 265.984375px;
            height: 25px;
        }
        #LINE265 {
            top: 133px;
            left: 25px;
            width: 265.984375px;
            height: 25px;
        }
        #HEADLINE266 {
            top: 194px;
            left: 25px;
            padding: 0px;
            width: 255px;
            height: 18px;
        }
        #HEADLINE266 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #PARAGRAPH693 {
            display: none!important;
            top: 716.932px;
            left: 50px;
            padding: 0px;
            width: 275px;
            height: 20px;
        }
        #PARAGRAPH693 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #HEADLINE123 {
            top: 20px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 71.25px;
        }
        #HEADLINE123 > .widget-content {
            font-size: 24px;
            text-align: center;
            line-height: 24px;
        }
        #GROUP179 {
            top: 40px;
            left: 8.9375px;
            width: 355px;
            height: 235.984375px;
        }
        #BOX145 {
            top: 77.9844px;
            left: 1px;
            width: 355px;
            height: 158px;
        }
        #BOX177 {
            top: 0px;
            left: 144.484px;
            width: 67.984375px;
            height: 67.984375px;
        }
        #SHAPE178 {
            top: 20px;
            left: 19px;
            width: 28.984375px;
            height: 28.984375px;
        }
        #GROUP180 {
            top: 310px;
            left: 8.71875px;
            width: 355px;
            height: 230.96875px;
        }
        #BOX181 {
            top: 75.9688px;
            left: 1px;
            width: 355px;
            height: 155px;
        }
        #GROUP572 {
            top: 17.75px;
            left: 3.98438px;
            width: 355.984375px;
            height: 124.515625px;
        }
        #HEADLINE573 {
            top: 0px;
            left: 1px;
            padding: 0px;
            width: 355.984375px;
            height: 22px;
        }
        #HEADLINE573 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #PARAGRAPH574 {
            top: 29.9844px;
            left: 7.01563px;
            padding: 0px;
            width: 343px;
            height: 94.53125px;
        }
        #PARAGRAPH574 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX184 {
            top: 0px;
            left: 144.484px;
            width: 67.984375px;
            height: 67.984375px;
        }
        #SHAPE185 {
            top: 20px;
            left: 19px;
            width: 28.984375px;
            height: 28.984375px;
        }
        #GROUP192 {
            top: 850.984px;
            left: 1.59375px;
            width: 361px;
            height: 241.703125px;
        }
        #BOX193 {
            top: 94.7188px;
            left: 7px;
            width: 355px;
            height: 146.984375px;
        }
        #BOX196 {
            top: 0px;
            left: 152.484px;
            width: 67.984375px;
            height: 67.984375px;
        }
        #SHAPE197 {
            top: 20px;
            left: 19px;
            width: 28.984375px;
            height: 28.984375px;
        }
        #GROUP584 {
            top: 119.719px;
            left: 1px;
            width: 355px;
            height: 113px;
        }
        #PARAGRAPH586 {
            top: 53px;
            left: 1px;
            padding: 0px;
            width: 355px;
            height: 60px;
        }
        #PARAGRAPH586 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE585 {
            top: 0px;
            left: 3px;
            padding: 0px;
            width: 313px;
            height: 44px;
        }
        #HEADLINE585 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #GROUP560 {
            top: 131.703px;
            left: 9.9375px;
            width: 353px;
            height: 124px;
        }
        #HEADLINE561 {
            top: 0px;
            left: 10px;
            padding: 0px;
            width: 344px;
            height: 44px;
        }
        #HEADLINE561 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #PARAGRAPH562 {
            top: 44px;
            left: 1px;
            padding: 0px;
            width: 344px;
            height: 80px;
        }
        #PARAGRAPH562 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP186 {
            top: 580px;
            left: 8.95313px;
            width: 355px;
            height: 229.96875px;
        }
        #BOX187 {
            top: 77.9844px;
            left: 1px;
            width: 355px;
            height: 151.984375px;
        }
        #GROUP596 {
            top: 23.7188px;
            left: -1px;
            width: 344px;
            height: 111.25px;
        }
        #HEADLINE597 {
            top: -22px;
            left: 11.4531px;
            padding: 0px;
            width: 344px;
            height: 22px;
        }
        #HEADLINE597 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #PARAGRAPH598 {
            top: 9.25px;
            left: 15px;
            padding: 0px;
            width: 327.984375px;
            height: 80px;
        }
        #PARAGRAPH598 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BOX190 {
            top: 0px;
            left: 144.484px;
            width: 67.984375px;
            height: 67.984375px;
        }
        #SHAPE191 {
            top: 20px;
            left: 19px;
            width: 28.984375px;
            height: 28.984375px;
        }
        #HEADLINE559 {
            top: 20px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 47.5px;
        }
        #HEADLINE559 > .widget-content {
            font-size: 24px;
            text-align: center;
            line-height: 24px;
        }
        #HEADLINE38 {
            display: none!important;
            top: 535.195px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 24px;
        }
        #HEADLINE38 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #YOUTUBE40 {
            top: 30px;
            left: 10px;
            width: 355px;
            height: 177.22222222222223px;
        }
        #LISTOP490 {
            top: 319.391px;
            left: 10px;
            width: 355px;
            height: 308px;
        }
        #LISTOP490 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #LISTOP490 > ol.widget-content li::before {
            content: counter(linum, disc);
            width: 26px;
            height: 26px;
            font-size: 13px;
            color: rgba(93, 198, 98, 1);
            margin-right: 0px;
        }
        #LISTOP490 > ol.widget-content li {
            margin-bottom: 4px;
        }
        #LISTOP490 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #HEADLINE497 {
            top: 236.578px;
            left: 6px;
            padding: 0px;
            width: 355px;
            height: 38px;
        }
        #HEADLINE497 > .widget-content {
            font-size: 32px;
            text-align: center;
        }
        #HEADLINE621 {
            top: 1137.77px;
            left: 10.5px;
            padding: 0px;
            width: 355px;
            height: 23px;
        }
        #HEADLINE621 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #HEADLINE684 {
            display: none!important;
            top: 898.222px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 24px;
        }
        #HEADLINE684 > .widget-content {
            font-size: 18px;
            text-align: center;
        }
        #HEADLINE685 {
            top: 1054.77px;
            left: 37px;
            padding: 0px;
            width: 300px;
            height: 76px;
        }
        #HEADLINE685 > .widget-content {
            font-size: 32px;
            text-align: center;
        }
        #HEADLINE498 {
            top: 274.586px;
            left: 6px;
            padding: 0px;
            width: 355px;
            height: 22px;
        }
        #HEADLINE498 > .widget-content {
            font-size: 16px;
            text-align: center;
        }
        #HEADLINE291 {
            top: 20px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 70px;
        }
        #HEADLINE291 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #YOUTUBE295 {
            top: 388px;
            left: 12px;
            width: 355px;
            height: 177.22222222222223px;
        }
        #PARAGRAPH294 {
            top: 148.813px;
            left: 10.5px;
            padding: 0px;
            width: 355px;
            height: 198px;
        }
        #PARAGRAPH294 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE318 {
            top: 20px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 112.5px;
        }
        #HEADLINE318 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #GROUP343 {
            top: 20px;
            left: 76px;
            width: 222.984375px;
            height: 569.796875px;
        }
        #BOX322 {
            top: 0px;
            left: 1px;
            width: 222.984375px;
            height: 185px;
        }
        #BOX322 > .widget-content {
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_dung-1512980057.jpg");
            background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_dung-1512980057.jpg");
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_dung-1512980057.jpg");
            background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_dung-1512980057.jpg");
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_dung-1512980057.jpg");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #BOX323 {
            top: 184.813px;
            left: 1px;
            width: 222.984375px;
            height: 375px;
        }
        #HEADLINE324 {
            top: 17.5625px;
            left: 6.98438px;
            padding: 0px;
            width: 203px;
            height: 18px;
        }
        #HEADLINE324 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #GROUP344 {
            top: 599.813px;
            left: 76px;
            width: 222.984375px;
            height: 559.796875px;
        }
        #BOX345 {
            top: 0px;
            left: 1px;
            width: 222.984375px;
            height: 185px;
        }
        #BOX345 > .widget-content {
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/co-Hoang-Quy-Ly-1512980107.jpg");
            background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/co-Hoang-Quy-Ly-1512980107.jpg");
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/co-Hoang-Quy-Ly-1512980107.jpg");
            background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/co-Hoang-Quy-Ly-1512980107.jpg");
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/co-Hoang-Quy-Ly-1512980107.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #BOX346 {
            top: 184.813px;
            left: 1px;
            width: 222.984375px;
            height: 357px;
        }
        #HEADLINE347 {
            top: 16px;
            left: 41px;
            padding: 0px;
            width: 140px;
            height: 18px;
        }
        #HEADLINE347 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #LISTOP348 {
            top: 36.5313px;
            left: 13.8867px;
            width: 205.984375px;
            height: 225px;
        }
        #LISTOP348 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #LISTOP348 > ol.widget-content li::before {
            content: counter(linum, disc);
            width: 30px;
            height: 30px;
            font-size: 15px;
            color: rgba(181, 81, 67, 1);
            margin-right: 0px;
        }
        #LISTOP348 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP348 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #GROUP349 {
            top: 1169.63px;
            left: 76px;
            width: 222.984375px;
            height: 560px;
        }
        #BOX350 {
            top: 0px;
            left: 1px;
            width: 222.984375px;
            height: 185px;
        }
        #BOX350 > .widget-content {
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/ut4-1512980148.JPG");
            background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/ut4-1512980148.JPG");
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/ut4-1512980148.JPG");
            background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/ut4-1512980148.JPG");
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/ut4-1512980148.JPG");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #BOX351 {
            top: 185px;
            left: 1px;
            width: 222.984375px;
            height: 357px;
        }
        #HEADLINE352 {
            top: 16px;
            left: 41.1839px;
            padding: 0px;
            width: 140.625px;
            height: 18px;
        }
        #HEADLINE352 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #LISTOP353 {
            top: 54px;
            left: 12.0538px;
            width: 206.90625px;
            height: 265px;
        }
        #LISTOP353 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #LISTOP353 > ol.widget-content li::before {
            content: counter(linum, disc);
            width: 30px;
            height: 30px;
            font-size: 15px;
            color: rgba(181, 81, 67, 1);
            margin-right: 0px;
        }
        #LISTOP353 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP353 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #GROUP354 {
            top: 1739.63px;
            left: 75.9922px;
            width: 222.984375px;
            height: 560px;
        }
        #BOX355 {
            top: 0px;
            left: 1px;
            width: 222.984375px;
            height: 185px;
        }
        #BOX355 > .widget-content {
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
            background-image: -o-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
            background-image: -ms-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
            background-image: -moz-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
            background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url("https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #BOX356 {
            top: 185px;
            left: 1px;
            width: 222.984375px;
            height: 357px;
        }
        #HEADLINE357 {
            top: 16px;
            left: 24.004px;
            padding: 0px;
            width: 166.09375px;
            height: 18px;
        }
        #HEADLINE357 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #LISTOP358 {
            top: 53.8125px;
            left: 12px;
            width: 205.984375px;
            height: 150px;
        }
        #LISTOP358 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #LISTOP358 > ol.widget-content li::before {
            content: counter(linum, disc);
            width: 30px;
            height: 30px;
            font-size: 15px;
            color: rgba(181, 81, 67, 1);
            margin-right: 0px;
        }
        #LISTOP358 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP358 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #LISTOP342 {
            top: 272.773px;
            left: 84.5078px;
            width: 205.984375px;
            height: 325px;
        }
        #LISTOP342 > .widget-content {
            font-size: 13px;
            text-align: left;
        }
        #LISTOP342 > ol.widget-content li::before {
            content: counter(linum, disc);
            width: 30px;
            height: 30px;
            font-size: 15px;
            color: rgba(181, 81, 67, 1);
            margin-right: 0px;
        }
        #LISTOP342 > ol.widget-content li {
            margin-bottom: 15px;
        }
        #LISTOP342 > ol.widget-content li:last-child {
            margin-bottom: 0px;
        }
        #HEADLINE222 {
            top: 34px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 70px;
        }
        #HEADLINE222 > .widget-content {
            font-size: 30px;
            text-align: center;
        }
        #GROUP211 {
            top: 314px;
            left: 42.0078px;
            width: 290.984375px;
            height: 295.96875px;
        }
        #BOX212 {
            top: 20px;
            left: 73.5px;
            width: 143.984375px;
            height: 143.984375px;
        }
        #BOX212 > .widget-content {
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512980279.jpg");
            background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512980279.jpg");
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512980279.jpg");
            background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512980279.jpg");
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512980279.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #HEADLINE213 {
            top: 231.984px;
            left: 0.492188px;
            padding: 0px;
            width: 290px;
            height: 54px;
        }
        #HEADLINE213 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE214 {
            top: 173.984px;
            left: 3.61719px;
            padding: 0px;
            width: 283.75px;
            height: 21px;
        }
        #HEADLINE214 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #HEADLINE215 {
            top: 204.984px;
            left: 79.2422px;
            padding: 0px;
            width: 132.5px;
            height: 17px;
        }
        #HEADLINE215 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #GROUP216 {
            top: 619.969px;
            left: 42.0078px;
            width: 290.984375px;
            height: 295.96875px;
        }
        #BOX217 {
            top: 20px;
            left: 73.5px;
            width: 143.984375px;
            height: 143.984375px;
        }
        #BOX217 > .widget-content {
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/son-1512980213.jpg");
            background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/son-1512980213.jpg");
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/son-1512980213.jpg");
            background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/son-1512980213.jpg");
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/son-1512980213.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #HEADLINE218 {
            top: 231.984px;
            left: 0px;
            padding: 0px;
            width: 290.984375px;
            height: 54px;
        }
        #HEADLINE218 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE219 {
            top: 173.984px;
            left: 3.5px;
            padding: 0px;
            width: 283.984375px;
            height: 21px;
        }
        #HEADLINE219 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #HEADLINE220 {
            top: 204.984px;
            left: 41.5px;
            padding: 0px;
            width: 207.984375px;
            height: 17px;
        }
        #HEADLINE220 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX207 {
            display: none!important;
            top: 160.00015624999997px;
            left: 115.5px;
            width: 144px;
            height: 143.984375px;
        }
        #BOX207 > .widget-content {
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/trinh_tai-1512980240.jpg");
            background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/trinh_tai-1512980240.jpg");
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/trinh_tai-1512980240.jpg");
            background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/trinh_tai-1512980240.jpg");
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/trinh_tai-1512980240.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #HEADLINE208 {
            display: none!important;
            top: 370.23415624999996px;
            left: 42.5px;
            padding: 0px;
            width: 290px;
            height: 36px;
        }
        #HEADLINE208 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE209 {
            display: none!important;
            top: 313.98415624999996px;
            left: 45.5px;
            padding: 0px;
            width: 284px;
            height: 21px;
        }
        #HEADLINE209 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #HEADLINE210 {
            display: none!important;
            top: 344.98015625000005px;
            left: 72.5px;
            padding: 0px;
            width: 230px;
            height: 17px;
        }
        #HEADLINE210 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #BOX202 {
            top: 20px;
            left: 115.5px;
            width: 144px;
            height: 144px;
        }
        #BOX202 > .widget-content {
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512980256.jpg");
            background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512980256.jpg");
            background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512980256.jpg");
            background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512980256.jpg");
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s150/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512980256.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        #HEADLINE203 {
            top: 232px;
            left: 42.5px;
            padding: 0px;
            width: 290px;
            height: 72px;
        }
        #HEADLINE203 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE204 {
            top: 174px;
            left: 45.625px;
            padding: 0px;
            width: 283.75px;
            height: 21px;
        }
        #HEADLINE204 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #HEADLINE205 {
            top: 205px;
            left: 45.625px;
            padding: 0px;
            width: 283.75px;
            height: 17px;
        }
        #HEADLINE205 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #HEADLINE625 {
            top: 968.98px;
            left: 12px;
            padding: 0px;
            width: 355px;
            height: 42.5px;
        }
        #HEADLINE625 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #BUTTON626 {
            top: 245px;
            left: 30px;
            padding: 0px;
            width: 315px;
            height: 91px;
        }
        #BUTTON626 > .widget-content {
            font-size: 36px;
            text-align: left;
        }
        #PARAGRAPH627 {
            top: 129px;
            left: 10.5px;
            padding: 0px;
            width: 355px;
            height: 88px;
        }
        #PARAGRAPH627 > .widget-content {
            font-size: 14px;
            text-align: center;
        }
        #HEADLINE628 {
            top: 64px;
            left: 10px;
            padding: 0px;
            width: 355px;
            height: 56px;
        }
        #HEADLINE628 > .widget-content {
            font-size: 24px;
            text-align: center;
            line-height: 28px;
        }
        #BOX629 {
            top: 854.484px;
            left: 30.2109px;
            width: 312.265625px;
            height: 100.984375px;
        }
        #GROUP630 {
            top: 22px;
            left: 15px;
            width: 282.984375px;
            height: 16.984375px;
        }
        #PARAGRAPH631 {
            top: 0px;
            left: 1px;
            padding: 0px;
            width: 61px;
            height: 17px;
        }
        #PARAGRAPH631 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #PARAGRAPH632 {
            top: 0px;
            left: 74px;
            padding: 0px;
            width: 61px;
            height: 17px;
        }
        #PARAGRAPH632 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #PARAGRAPH633 {
            top: 0px;
            left: 148px;
            padding: 0px;
            width: 61px;
            height: 17px;
        }
        #PARAGRAPH633 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #PARAGRAPH634 {
            top: 0px;
            left: 223px;
            padding: 0px;
            width: 61px;
            height: 17px;
        }
        #PARAGRAPH634 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #COUNTDOWN635 {
            top: 38px;
            left: 10px;
            width: 297.984375px;
            height: 45px;
        }
        #COUNTDOWN635 > .widget-content {
            font-size: 36px;
        }
        #BOX636 {
            top: 351.453px;
            left: 27.5px;
            width: 322.984375px;
            height: 468.984375px;
        }
        #HEADLINE637 {
            top: 26px;
            left: 35px;
            padding: 0px;
            width: 287.984375px;
            height: 26.65625px;
        }
        #HEADLINE637 > .widget-content {
            font-size: 21px;
            text-align: left;
            line-height: 33px;
        }
        #FORM638 {
            top: 80px;
            left: 27.9844px;
            width: 261.984375px;
            height: 284px;
        }
        #ITEM_FORM639 {
            top: 55.5441px;
            left: 0px;
            width: 261.984375px;
            height: 40.671875px;
        }
        #ITEM_FORM640 {
            top: 111.089px;
            left: 0px;
            width: 261.984375px;
            height: 40.671875px;
        }
        #ITEM_FORM641 {
            top: 160.633px;
            left: 0px;
            width: 261.984375px;
            height: 123.375px;
        }
        #ITEM_FORM642 {
            top: 0px;
            left: 0px;
            width: 261.984375px;
            height: 40.671875px;
        }
        #BUTTON643 {
            top: 387px;
            left: 28.9792px;
            padding: 0px;
            width: 262px;
            height: 48px;
        }
        #BUTTON643 > .widget-content {
            font-size: 17px;
            text-align: center;
        }
        #HEADLINE691 {
            top: 254.422px;
            left: 209.5px;
            padding: 0px;
            width: 200px;
            height: 59px;
        }
        #HEADLINE691 > .widget-content {
            font-size: 53px;
            text-align: left;
        }
        #BOX410 {
            top: 214.98px;
            left: 37.5px;
            width: 300px;
            height: 50.984375px;
        }
        #PARAGRAPH411 {
            top: 20px;
            left: 0px;
            padding: 0px;
            width: 300px;
            height: 20px;
        }
        #PARAGRAPH411 > .widget-content {
            font-size: 13px;
            text-align: center;
        }
        #GROUP499 {
            top: 32.25px;
            left: 17.5625px;
            width: 356.34375px;
            height: 166.46875px;
        }
        #HEADLINE500 {
            top: 0px;
            left: 20.4844px;
            padding: 0px;
            width: 318.828125px;
            height: 26.25px;
        }
        #HEADLINE500 > .widget-content {
            font-size: 18px;
            text-align: left;
        }
        #HEADLINE501 {
            top: 52.9844px;
            left: 1px;
            padding: 0px;
            width: 355.34375px;
            height: 20px;
        }
        #HEADLINE501 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE502 {
            display: none!important;
            top: 36.25px;
            left: 161.64453125px;
            width: 33.671875px;
            height: 25.99609375px;
        }
        #SHAPE503 {
            display: none!important;
            top: 102.2265625px;
            left: 162.07421875px;
            width: 33.671875px;
            height: 25.99609375px;
        }
        #HEADLINE504 {
            top: 86.1719px;
            left: 1px;
            padding: 0px;
            width: 355.34375px;
            height: 20px;
        }
        #HEADLINE504 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE505 {
            top: 118.969px;
            left: 1px;
            padding: 0px;
            width: 355.34375px;
            height: 20px;
        }
        #HEADLINE505 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE506 {
            display: none!important;
            top: 168.22265625px;
            left: 162.07421875px;
            width: 33.671875px;
            height: 25.99609375px;
        }
        #SHAPE507 {
            display: none!important;
            top: 234.21875px;
            left: 162.07421875px;
            width: 33.671875px;
            height: 25.99609375px;
        }
        #HEADLINE508 {
            top: 146.469px;
            left: 2.34375px;
            padding: 0px;
            width: 355px;
            height: 20px;
        }
        #HEADLINE508 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #GROUP519 {
            display: none!important;
            top: 295.95703125px;
            left: 9px;
            width: 355px;
            height: 290.21484375px;
        }
        #HEADLINE520 {
            top: 0px;
            left: 19.0664px;
            padding: 0px;
            width: 318.828px;
            height: 26.25px;
        }
        #HEADLINE520 > .widget-content {
            font-size: 18px;
            text-align: left;
        }
        #HEADLINE521 {
            top: 72.2461px;
            left: 1px;
            padding: 0px;
            width: 355px;
            height: 20px;
        }
        #HEADLINE521 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE522 {
            top: 36.25px;
            left: 161.645px;
            width: 33.6719px;
            height: 25.9961px;
        }
        #SHAPE523 {
            top: 102.227px;
            left: 161.645px;
            width: 33.6719px;
            height: 25.9961px;
        }
        #HEADLINE524 {
            top: 138.223px;
            left: 1px;
            padding: 0px;
            width: 355px;
            height: 20px;
        }
        #HEADLINE524 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #HEADLINE525 {
            top: 204.219px;
            left: 1px;
            padding: 0px;
            width: 355px;
            height: 20px;
        }
        #HEADLINE525 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #SHAPE526 {
            top: 168.223px;
            left: 161.645px;
            width: 33.6719px;
            height: 25.9961px;
        }
        #SHAPE527 {
            top: 234.219px;
            left: 161.645px;
            width: 33.6719px;
            height: 25.9961px;
        }
        #HEADLINE528 {
            top: 270.215px;
            left: 1px;
            padding: 0px;
            width: 355px;
            height: 20px;
        }
        #HEADLINE528 > .widget-content {
            font-size: 14px;
            text-align: left;
        }
        #FACEBOOK_MESSAGES529 {
            display: none!important;
            top: 303px;
            left: 55px;
            width: 265px;
            height: 210px;
        }
        #HEADLINE532 {
            display: none!important;
            top: 250.461px;
            left: 64.5px;
            padding: 0px;
            width: 246px;
            height: 27px;
        }
        #HEADLINE532 > .widget-content {
            font-size: 18px;
            text-align: left;
        }
    }
</style>
