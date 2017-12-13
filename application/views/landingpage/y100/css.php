<script>
        function reveal() {
            for (var a = 0; a < view_elements.length; a++) {
                var b = 0,
                    c = view_elements[a];
                do isNaN(c.offsetTop) || (b += c.offsetTop); while (c = c.offsetParent);
                var d = window.pageYOffset,
                    e = window.innerHeight,
                    c = view_elements[a];
                window.pageXOffset, window.innerWidth;
                b >= d && d + e >= b && (view_elements[a].classList.remove("hide-background-image"), view_elements.splice(a, 1), a--)
            }
        }

        function qazy_list_maker() {
            for (var a = document.getElementsByClassName("hide-background-image"), b = 0; b < a.length; b++) view_elements.push(a[b])
        }
        var view_elements = [];
        window.addEventListener("resize", reveal, !1), window.addEventListener("scroll", reveal, !1);
        var intervalObject = setInterval(function() {
            qazy_list_maker()
        }, 50);
        window.addEventListener("load", function() {
            clearInterval(intervalObject), qazy_list_maker(), reveal();
        }, !1);
    </script>
    <script>
        var loadCSSFiles = function() {
            var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Tinos:400,700|Roboto:300,400,700|Montserrat:300,400,600,700|Roboto+Slab:300,400,700&amp;subset=latin-ext,vietnamese';
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
            #SECTION340 {
                width: 100%;
                height: 632px;
            }
            #SECTION340 .container {}
            #SECTION340 {}
            #SECTION67 {
                width: 100%;
                height: 628.96875px;
            }
            #SECTION67 .container {}
            #SECTION67 {}
            #SECTION394 {
                width: 100%;
                height: 561.9140625px;
            }
            #SECTION394 .container {}
            #SECTION394 {}
            #SECTION484 {
                width: 100%;
                height: 731px;
            }
            #SECTION484 .container {}
            #SECTION484 {}
            #SECTION159 {
                width: 100%;
                height: 641.953125px;
            }
            #SECTION159 .container {}
            #SECTION159 {}
            #SECTION492 {
                width: 100%;
                height: 693px;
            }
            #SECTION492 .container {}
            #SECTION492 {}
            #SECTION434 {
                width: 100%;
                height: 659px;
            }
            #SECTION434 .container {}
            #SECTION434 {}
            #SECTION296 {
                width: 275px;
                height: 483px;
            }
            #SECTION296 .container {}
            #SECTION296 {}
            #BOX341 {
                top: 77px;
                left: 712px;
                width: 53px;
                height: 53px;
            }
            #SHAPE342 {
                top: 12px;
                left: 12px;
                width: 29px;
                height: 29px;
            }
            #HEADLINE343 {
                top: 147px;
                left: 553px;
                padding: 0px;
                width: 400px;
                height: 33px;
            }
            #HEADLINE343 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #BOX344 {
                top: 197.984px;
                left: 489.227px;
                width: 472.3828125px;
                height: 101.015625px;
            }
            #HEADLINE345 {
                top: 3.984375px;
                left: 39.4453125px;
                padding: 0px;
                width: 415.5px;
                height: 87px;
            }
            #HEADLINE345 > .widget-content {
                font-size: 38px;
                text-align: center;
            }
            #HEADLINE346 {
                top: 252px;
                left: 551px;
                padding: 0px;
                width: 373px;
                height: 32px;
            }
            #HEADLINE346 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #PARAGRAPH347 {
                top: 319px;
                left: 537px;
                padding: 0px;
                width: 423.984375px;
                height: 120px;
            }
            #PARAGRAPH347 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BUTTON348 {
                top: 462px;
                left: 664px;
                padding: 0px;
                width: 156px;
                height: 46.5px;
            }
            #BUTTON348 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #IMAGE349 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s450/5a28c4f8c3f6592b3acabec8/848a0512-1512789708702.png);
            }
            #IMAGE349 {
                top: 117.986px;
                left: 25.9843px;
                width: 448.8046875px;
                height: 374.015625px;
            }
            #LINE91 {
                top: 125px;
                left: 0px;
                width: 65px;
                height: 25px;
            }
            #HEADLINE90 {
                top: 41px;
                left: 0px;
                padding: 0px;
                width: 703.8021240234375px;
                height: 90px;
            }
            #HEADLINE90 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #HEADLINE417 {
                top: 498.646px;
                left: 131.354px;
                padding: 0px;
                width: 726px;
                height: 90px;
            }
            #HEADLINE417 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #BOX490 {
                top: 156.016px;
                left: 0.984413px;
                width: 960px;
                height: 309.0234375px;
            }
            #GROUP286 {
                top: 33.9766px;
                left: 723.640625px;
                width: 222.984375px;
                height: 252.8671875px;
            }
            #IMAGE287 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/vp-mat-tap-trung-1512742728813.jpeg);
            }
            #IMAGE287 {
                top: 0px;
                left: 1px;
                width: 223px;
                height: 196px;
            }
            #BOX288 {
                top: 195.9609375px;
                left: 1px;
                width: 223px;
                height: 56.927085876464844px;
            }
            #HEADLINE289 {
                top: 18px;
                left: 9px;
                padding: 0px;
                width: 200.00001525878906px;
                height: 17.77777862548828px;
            }
            #HEADLINE289 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP70 {
                top: 30.9766px;
                left: 13.6797px;
                width: 223.0078125px;
                height: 252.890625px;
            }
            #IMAGE71 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/vp-dau-lung-1512742424767.jpg);
            }
            #IMAGE71 {
                top: 0px;
                left: 1.0234375px;
                width: 222.98611450195312px;
                height: 196.59722900390625px;
            }
            #BOX72 {
                top: 196.8984375px;
                left: 1px;
                width: 222.98611450195312px;
                height: 56.0069465637207px;
            }
            #HEADLINE73 {
                top: 18.0559px;
                left: 9px;
                padding: 0px;
                width: 200.00001525878906px;
                height: 17.829862594604492px;
            }
            #HEADLINE73 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP141 {
                top: 31.9688px;
                left: 249.828px;
                width: 222.98611450195312px;
                height: 252.91667556762695px;
            }
            #IMAGE142 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/vp-dau-vai-1512742560938.jpg);
            }
            #IMAGE142 {
                top: 0px;
                left: 1px;
                width: 223px;
                height: 196px;
            }
            #BOX143 {
                top: 195.97222900390625px;
                left: 1px;
                width: 223px;
                height: 56.9444465637207px;
            }
            #HEADLINE144 {
                top: 18px;
                left: 9px;
                padding: 0px;
                width: 200.00001525878906px;
                height: 17.77777862548828px;
            }
            #HEADLINE144 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP146 {
                top: 32.8438px;
                left: 486.656px;
                width: 222.98611450195312px;
                height: 252.89932250976562px;
            }
            #IMAGE147 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/vp-stressjpg-1512742618503.jpg);
            }
            #IMAGE147 {
                top: 0px;
                left: 1px;
                width: 223px;
                height: 196px;
            }
            #BOX148 {
                top: 196.9444580078125px;
                left: 1px;
                width: 223px;
                height: 55.954864501953125px;
            }
            #HEADLINE149 {
                top: 18px;
                left: 9px;
                padding: 0px;
                width: 200.00001525878906px;
                height: 17.77777862548828px;
            }
            #HEADLINE149 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #LINE395 {
                top: 137px;
                left: 312px;
                width: 335px;
                height: 25px;
            }
            #HEADLINE396 {
                top: 66.9844px;
                left: 205.289px;
                padding: 0px;
                width: 556.5px;
                height: 45px;
            }
            #HEADLINE396 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #GROUP402 {
                top: 194.640625px;
                left: 549.046875px;
                width: 378.71875px;
                height: 129px;
            }
            #HEADLINE404 {
                top: 0px;
                left: 1.0625px;
                padding: 0px;
                width: 378.66668701171875px;
                height: 22px;
            }
            #HEADLINE404 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH405 {
                top: 45px;
                left: 1px;
                padding: 0px;
                width: 377.3333435058594px;
                height: 84px;
            }
            #PARAGRAPH405 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE406 {
                top: 19.984375px;
                left: 1.0625px;
                width: 81px;
                height: 25px;
            }
            #GROUP412 {
                top: 373.96875px;
                left: 549.703125px;
                width: 378.71875px;
                height: 108px;
            }
            #HEADLINE414 {
                top: 0px;
                left: 1.0625px;
                padding: 0px;
                width: 378.66668701171875px;
                height: 22px;
            }
            #HEADLINE414 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH415 {
                top: 45px;
                left: 1px;
                padding: 0px;
                width: 377.3333435058594px;
                height: 63px;
            }
            #PARAGRAPH415 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE416 {
                top: 19.984375px;
                left: 1.0625px;
                width: 81px;
                height: 25px;
            }
            #GROUP407 {
                top: 374.96875px;
                left: 62.796875px;
                width: 425.0625px;
                height: 108px;
            }
            #HEADLINE409 {
                top: 0px;
                left: 1.0625px;
                padding: 0px;
                width: 425px;
                height: 22px;
            }
            #HEADLINE409 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH410 {
                top: 45px;
                left: 1px;
                padding: 0px;
                width: 394.66668701171875px;
                height: 63px;
            }
            #PARAGRAPH410 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE411 {
                top: 19.984375px;
                left: 1.0625px;
                width: 84.83333587646484px;
                height: 25px;
            }
            #GROUP397 {
                top: 196.875px;
                left: 60.015625px;
                width: 411.0625px;
                height: 123px;
            }
            #HEADLINE399 {
                top: 0px;
                left: 1.0625px;
                padding: 0px;
                width: 411px;
                height: 22px;
            }
            #HEADLINE399 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH400 {
                top: 45px;
                left: 1px;
                padding: 0px;
                width: 398.66668701171875px;
                height: 78px;
            }
            #PARAGRAPH400 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE401 {
                top: 19.984375px;
                left: 1.0625px;
                width: 85.47917175292969px;
                height: 25px;
            }
            #BOX485 {
                top: 91.9688px;
                left: 1.00781px;
                width: 960.984375px;
                height: 540px;
            }
            #BUTTON487 {
                top: 229px;
                left: 291px;
                padding: 0px;
                width: 376.5px;
                height: 58.5px;
            }
            #BUTTON487 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH488 {
                top: 321px;
                left: 127px;
                padding: 0px;
                width: 723px;
                height: 54px;
            }
            #PARAGRAPH488 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH489 {
                top: 391px;
                left: 119px;
                padding: 0px;
                width: 723px;
                height: 54px;
            }
            #PARAGRAPH489 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE486 {
                top: 67.6719px;
                left: 98.313px;
                padding: 0px;
                width: 771px;
                height: 114px;
            }
            #HEADLINE486 > .widget-content {
                font-size: 45px;
                text-align: center;
            }
            #HEADLINE171 {
                top: 115.101px;
                left: 139.242px;
                padding: 0px;
                width: 677.8125px;
                height: 84px;
            }
            #HEADLINE171 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #LISTOP419 {
                top: 250.162px;
                left: 306.748px;
                width: 653.265625px;
                height: 336px;
            }
            #LISTOP419 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP419 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP419 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP419 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LINE170 {
                top: 204px;
                left: 416px;
                width: 82.0078125px;
                height: 25px;
            }
            #BOX530 {
                top: 38.1563px;
                left: 111.312px;
                width: 731.671875px;
                height: 56.015625px;
            }
            #HEADLINE531 {
                top: 8.98438px;
                left: 39.4453px;
                padding: 0px;
                width: 657px;
                height: 37.5px;
            }
            #HEADLINE531 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #IMAGE160 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300/5a28c4f8c3f6592b3acabec8/img_5378-1512805728576.jpg);
            }
            #IMAGE160 {
                top: 254.647px;
                left: 10.4063px;
                width: 281.625px;
                height: 313.9921875px;
            }
            #HEADLINE494 {
                top: 95.8203px;
                left: 121px;
                padding: 0px;
                width: 741.0234375px;
                height: 49.5px;
            }
            #HEADLINE494 > .widget-content {
                font-size: 42px;
                text-align: center;
            }
            #GROUP495 {
                top: 210.984375px;
                left: -2.046875px;
                width: 910.40625px;
                height: 394.046875px;
            }
            #BOX496 {
                top: 0px;
                left: 1px;
                width: 90.046875px;
                height: 94.9921875px;
            }
            #GROUP497 {
                top: 39.984375px;
                left: 106.234375px;
                width: 137.4375px;
                height: 27px;
            }
            #SHAPE498 {
                top: 0px;
                left: 0px;
                width: 25.59375px;
                height: 27px;
            }
            #SHAPE499 {
                top: 0px;
                left: 28.441px;
                width: 25.59375px;
                height: 27px;
            }
            #SHAPE500 {
                top: 0px;
                left: 86.271px;
                width: 25.59375px;
                height: 27px;
            }
            #SHAPE501 {
                top: 0px;
                left: 57.83px;
                width: 25.59375px;
                height: 27px;
            }
            #SHAPE502 {
                top: 0px;
                left: 111.868px;
                width: 25.59375px;
                height: 27px;
            }
            #HEADLINE503 {
                top: 72.109375px;
                left: 107.40625px;
                padding: 0px;
                width: 804px;
                height: 42px;
            }
            #HEADLINE503 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP504 {
                top: 12.984375px;
                left: 105.546875px;
                width: 650.671875px;
                height: 298.140625px;
            }
            #HEADLINE505 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 277.2890625px;
                height: 24px;
            }
            #HEADLINE505 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE506 {
                top: 1.1875px;
                left: 239.171875px;
                padding: 0px;
                width: 412px;
                height: 22px;
            }
            #HEADLINE506 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE532 {
                top: 137.171875px;
                left: 239.140625px;
                padding: 0px;
                width: 412.5px;
                height: 21px;
            }
            #HEADLINE532 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE534 {
                top: 277.140625px;
                left: 239.140625px;
                padding: 0px;
                width: 412.5px;
                height: 21px;
            }
            #HEADLINE534 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE533 {
                top: 209.078125px;
                left: 107.40625px;
                padding: 0px;
                width: 804px;
                height: 22px;
            }
            #HEADLINE533 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE535 {
                top: 352.046875px;
                left: 107.40625px;
                padding: 0px;
                width: 804px;
                height: 44px;
            }
            #HEADLINE535 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP518 {
                top: 489.1640625px;
                left: -1.75px;
                width: 441.8671875px;
                height: 94.9921875px;
            }
            #BOX519 {
                top: 0px;
                left: 1px;
                width: 95px;
                height: 95px;
            }
            #GROUP520 {
                top: 40.9921875px;
                left: 109.984375px;
                width: 145px;
                height: 27px;
            }
            #SHAPE521 {
                top: 0px;
                left: 1px;
                width: 27px;
                height: 27px;
            }
            #SHAPE522 {
                top: 0px;
                left: 31px;
                width: 27px;
                height: 27px;
            }
            #SHAPE523 {
                top: 0px;
                left: 92px;
                width: 27px;
                height: 27px;
            }
            #SHAPE524 {
                top: 0px;
                left: 62px;
                width: 27px;
                height: 27px;
            }
            #SHAPE525 {
                top: 0px;
                left: 119px;
                width: 27px;
                height: 27px;
            }
            #HEADLINE528 {
                top: 13.9921875px;
                left: 112.84375px;
                padding: 0px;
                width: 330.0234375px;
                height: 19.5px;
            }
            #HEADLINE528 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX508 {
                top: 348.984px;
                left: -1.00781px;
                width: 95px;
                height: 95px;
            }
            #GROUP509 {
                top: 388.968px;
                left: 109.008px;
                width: 118px;
                height: 27px;
            }
            #SHAPE510 {
                top: 0px;
                left: 1px;
                width: 27px;
                height: 27px;
            }
            #SHAPE511 {
                top: 0px;
                left: 31px;
                width: 27px;
                height: 27px;
            }
            #SHAPE512 {
                top: 0px;
                left: 92px;
                width: 27px;
                height: 27px;
            }
            #SHAPE513 {
                top: 0px;
                left: 62px;
                width: 27px;
                height: 27px;
            }
            #HEADLINE516 {
                top: 361.968px;
                left: 111.797px;
                padding: 0px;
                width: 144px;
                height: 19.5px;
            }
            #HEADLINE516 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE435 {
                top: 481.547px;
                left: 118px;
                padding: 0px;
                width: 397.3333435058594px;
                height: 42.66666793823242px;
            }
            #HEADLINE435 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BUTTON436 {
                top: 245px;
                left: 149.008px;
                padding: 0px;
                width: 315px;
                height: 89px;
            }
            #BUTTON436 > .widget-content {
                font-size: 34px;
                text-align: left;
            }
            #PARAGRAPH437 {
                top: 157px;
                left: 36px;
                padding: 0px;
                width: 536px;
                height: 64px;
            }
            #PARAGRAPH437 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE438 {
                top: 64px;
                left: 35.25px;
                padding: 0px;
                width: 529px;
                height: 82px;
            }
            #HEADLINE438 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #BOX439 {
                top: 362.552px;
                left: 149.007px;
                width: 312.28125px;
                height: 101px;
            }
            #GROUP440 {
                top: 22px;
                left: 15px;
                width: 283px;
                height: 17px;
            }
            #PARAGRAPH441 {
                top: 0px;
                left: 0px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH441 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH442 {
                top: 0px;
                left: 73px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH442 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH443 {
                top: 0px;
                left: 147px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH443 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH444 {
                top: 0px;
                left: 222px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH444 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #COUNTDOWN445 {
                top: 38px;
                left: 10px;
                width: 298px;
                height: 45px;
            }
            #COUNTDOWN445 > .widget-content {
                font-size: 36px;
            }
            #BOX447 {
                top: 72.6667px;
                left: 606.333px;
                width: 323px;
                height: 469px;
            }
            #HEADLINE448 {
                top: 26px;
                left: 35px;
                padding: 0px;
                width: 288px;
                height: 26.666667938232422px;
            }
            #HEADLINE448 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #FORM449 {
                top: 80px;
                left: 28px;
                width: 262px;
                height: 284px;
            }
            #ITEM_FORM453 {
                top: 55.5441px;
                left: 0px;
                width: 262px;
                height: 40.6875px;
            }
            #ITEM_FORM454 {
                top: 111.089px;
                left: 0px;
                width: 262px;
                height: 40.6875px;
            }
            #ITEM_FORM455 {
                top: 160.633px;
                left: 0px;
                width: 262px;
                height: 123.390625px;
            }
            #ITEM_FORM456 {
                top: 0px;
                left: 0px;
                width: 262px;
                height: 40.6875px;
            }
            #BUTTON457 {
                top: 387px;
                left: 28.9792px;
                padding: 0px;
                width: 262.66668701171875px;
                height: 48px;
            }
            #BUTTON457 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #HEADLINE536 {
                top: 256.172px;
                left: 321px;
                padding: 0px;
                width: 200px;
                height: 55px;
            }
            #HEADLINE536 > .widget-content {
                font-size: 49px;
                text-align: left;
            }
            #LINE297 {
                top: 368px;
                left: 0px;
                width: 963px;
                height: 25px;
            }
            #HEADLINE298 {
                top: 401px;
                left: -1px;
                padding: 0px;
                width: 267px;
                height: 18px;
            }
            #HEADLINE298 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #FACEBOOK_MESSAGES299 {
                top: 113px;
                left: 576px;
                width: 265px;
                height: 210px;
            }
            #HEADLINE300 {
                top: 79px;
                left: 589px;
                padding: 0px;
                width: 246px;
                height: 27px;
            }
            #HEADLINE300 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #GROUP304 {
                top: 78px;
                left: 80.2109375px;
                width: 428.9765625px;
                height: 174.984375px;
            }
            #HEADLINE305 {
                top: 0px;
                left: 2.2890625px;
                padding: 0px;
                width: 318.8333435058594px;
                height: 27px;
            }
            #HEADLINE305 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE306 {
                top: 52.9921875px;
                left: 51.5546875px;
                padding: 0px;
                width: 377.3333435058594px;
                height: 20px;
            }
            #HEADLINE306 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #SHAPE307 {
                top: 46.9921875px;
                left: 1px;
                width: 33.6875px;
                height: 26px;
            }
            #SHAPE308 {
                top: 81px;
                left: 1px;
                width: 33.6875px;
                height: 26px;
            }
            #HEADLINE309 {
                top: 86.1796875px;
                left: 50.9921875px;
                padding: 0px;
                width: 378px;
                height: 19.5px;
            }
            #HEADLINE309 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE310 {
                top: 118.9921875px;
                left: 51.5546875px;
                padding: 0px;
                width: 378.4375px;
                height: 20px;
            }
            #HEADLINE310 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #SHAPE311 {
                top: 112.9921875px;
                left: 1px;
                width: 33.6875px;
                height: 26px;
            }
            #SHAPE312 {
                top: 148.9921875px;
                left: 1px;
                width: 33.6875px;
                height: 26px;
            }
            #HEADLINE313 {
                top: 154.9921875px;
                left: 51.5546875px;
                padding: 0px;
                width: 378.4375px;
                height: 20px;
            }
            #HEADLINE313 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
        }
        
        #SECTION340 {
            display: block;
            background-image: url("https://wallpaperbrowse.com/media/images/office-desktop-background-image_01.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-size: cover;
            background-attachment: fixed;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION340 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION67 {
            display: block;
            background-image: url("https://cdn.pixabay.com/photo/2017/07/31/11/44/laptop-2557574_960_720.jpg");
            background-color: rgba(238, 238, 238, 1);
            background-size: cover;
            background-attachment: fixed;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION67 > .ladi-widget-overlay {
            background-color: rgba(40, 39, 39, 0.8);
        }
        
        #SECTION394 {
            display: block;
            background-image: url("https://ak2.picdn.net/shutterstock/videos/12864692/thumb/1.jpg?i10c=img.resize(height:160)");
            background-color: rgba(255, 205, 210, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION394 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION484 {
            display: block;
            background-image: url("https://static.ladipage.net/s1400/uploads/images/9d8a7b7b-df3b-4db7-8897-0a3055c219a4.jpg");
            background-color: rgba(234, 15, 50, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION484 > .ladi-widget-overlay {
            background-color: rgba(41, 41, 41, 0.67);
        }
        
        #SECTION159 {
            display: block;
            background-image: url("https://ak2.picdn.net/shutterstock/videos/12864692/thumb/1.jpg?i10c=img.resize(height:160)");
            background-color: rgba(238, 238, 238, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION159 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION492 {
            display: block;
            background-image: url("https://www.walldevil.com/wallpapers/a77/texture-light-background-backgrounds-wallpaper-wallpapers.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION492 > .ladi-widget-overlay {
            background-color: rgba(250, 243, 243, 0.34);
        }
        
        #SECTION434 {
            display: block;
            background-color: rgba(37, 36, 47, 0.9);
        }
        
        #SECTION296 {
            display: block;
            background-color: rgba(31, 30, 30, 1);
        }
        
        #BOX341 {
            display: block;
        }
        
        #BOX341 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX341> .widget-content {
            border-radius: 330px;
            border-width: 2px;
            border-style: solid;
        }
        
        #BOX341> .ladi-widget-overlay {
            border-radius: 330px;
            border-width: 2px;
            border-style: solid;
        }
        
        #SHAPE342 {
            display: block;
        }
        
        #SHAPE342 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE342> .widget-content svg {
            fill: #000000;
        }
        
        #HEADLINE343 {
            display: block;
        }
        
        #HEADLINE343 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Tinos';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(3, 2, 0, 1);
            font-weight: 400;
            line-height: 34px;
        }
        
        #BOX344 {
            display: block;
        }
        
        #BOX344 > .widget-content {
            background-color: rgba(13, 13, 13, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE345 {
            display: block;
        }
        
        #HEADLINE345 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Tinos';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 44px;
            letter-spacing: 4px;
        }
        
        #HEADLINE346 {
            display: block;
        }
        
        #HEADLINE346 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 32px;
        }
        
        #PARAGRAPH347 {
            display: block;
        }
        
        #PARAGRAPH347 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(61, 61, 61, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON348 {
            display: table;
        }
        
        #BUTTON348 > .widget-content {
            background-color: rgba(254, 99, 103, 1);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 400;
            line-height: 22px;
        }
        
        #BUTTON348> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON348> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #IMAGE349 {
            display: block;
        }
        
        #IMAGE349 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE349 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0)
        }
        
        #LINE91 {
            display: block;
        }
        
        #LINE91>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(254, 99, 103, 1);
            margin-top: 10.5px;
        }
        
        #LINE91 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE90 {
            display: block;
        }
        
        #HEADLINE90 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(254, 99, 103, 1);
            font-weight: 700;
            line-height: 45px;
        }
        
        #HEADLINE417 {
            display: block;
        }
        
        #HEADLINE417 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(254, 99, 103, 1);
            font-weight: 700;
            line-height: 45px;
        }
        
        #BOX490 {
            display: block;
        }
        
        #BOX490 > .widget-content {
            background-color: rgba(207, 204, 204, 0.79);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP286 {
            display: block;
        }
        
        #GROUP286 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE287 {
            display: block;
        }
        
        #IMAGE287 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE287 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX288 {
            display: block;
        }
        
        #BOX288 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 1px 0px rgba(184, 184, 184, 1);
        }
        
        #HEADLINE289 {
            display: block;
        }
        
        #HEADLINE289 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #GROUP70 {
            display: block;
        }
        
        #GROUP70 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE71 {
            display: block;
        }
        
        #IMAGE71 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE71 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX72 {
            display: block;
        }
        
        #BOX72 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 1px 0px rgba(184, 184, 184, 1);
        }
        
        #HEADLINE73 {
            display: block;
        }
        
        #HEADLINE73 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
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
        
        #IMAGE142 {
            display: block;
        }
        
        #IMAGE142 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE142 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX143 {
            display: block;
        }
        
        #BOX143 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 1px 0px rgba(184, 184, 184, 1);
        }
        
        #HEADLINE144 {
            display: block;
        }
        
        #HEADLINE144 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #GROUP146 {
            display: block;
        }
        
        #GROUP146 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE147 {
            display: block;
        }
        
        #IMAGE147 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE147 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX148 {
            display: block;
        }
        
        #BOX148 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 1px 0px rgba(184, 184, 184, 1);
        }
        
        #HEADLINE149 {
            display: block;
        }
        
        #HEADLINE149 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #LINE395 {
            display: block;
        }
        
        #LINE395>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dashed;
            border-color: rgba(254, 99, 103, 1);
            margin-top: 10.5px;
        }
        
        #LINE395 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE396 {
            display: block;
        }
        
        #HEADLINE396 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 46px;
        }
        
        #GROUP402 {
            display: block;
        }
        
        #GROUP402 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE404 {
            display: block;
        }
        
        #HEADLINE404 > .widget-content {
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
        
        #PARAGRAPH405 {
            display: block;
        }
        
        #PARAGRAPH405 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            line-height: 21px;
        }
        
        #LINE406 {
            display: block;
        }
        
        #LINE406>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(254, 99, 103, 1);
            margin-top: 10.5px;
        }
        
        #LINE406 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP412 {
            display: block;
        }
        
        #GROUP412 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE414 {
            display: block;
        }
        
        #HEADLINE414 > .widget-content {
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
        
        #PARAGRAPH415 {
            display: block;
        }
        
        #PARAGRAPH415 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            line-height: 21px;
        }
        
        #LINE416 {
            display: block;
        }
        
        #LINE416>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(254, 99, 103, 1);
            margin-top: 10.5px;
        }
        
        #LINE416 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP407 {
            display: block;
        }
        
        #GROUP407 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE409 {
            display: block;
        }
        
        #HEADLINE409 > .widget-content {
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
        
        #PARAGRAPH410 {
            display: block;
        }
        
        #PARAGRAPH410 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            line-height: 21px;
        }
        
        #LINE411 {
            display: block;
        }
        
        #LINE411>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(254, 99, 103, 1);
            margin-top: 10.5px;
        }
        
        #LINE411 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP397 {
            display: block;
        }
        
        #GROUP397 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE399 {
            display: block;
        }
        
        #HEADLINE399 > .widget-content {
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
        
        #PARAGRAPH400 {
            display: block;
        }
        
        #PARAGRAPH400 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #LINE401 {
            display: block;
        }
        
        #LINE401>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(254, 99, 103, 1);
            margin-top: 10.5px;
        }
        
        #LINE401 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX485 {
            display: block;
        }
        
        #BOX485 > .widget-content {
            background-color: rgba(3, 3, 3, 0.42);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX485> .widget-content {
            border-radius: 7px;
            border-width: 2px;
            border-style: dashed;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX485> .ladi-widget-overlay {
            border-radius: 7px;
            border-width: 2px;
            border-style: dashed;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BUTTON487 {
            display: table;
        }
        
        #BUTTON487 > .widget-content {
            background-color: rgba(254, 99, 103, 1);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 25px;
        }
        
        #BUTTON487> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON487> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #PARAGRAPH488 {
            display: block;
        }
        
        #PARAGRAPH488 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            font-style: italic;
            line-height: 27px;
        }
        
        #PARAGRAPH489 {
            display: block;
        }
        
        #PARAGRAPH489 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 27px;
        }
        
        #HEADLINE486 {
            display: block;
        }
        
        #HEADLINE486 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 600;
            line-height: 58px;
        }
        
        #HEADLINE171 {
            display: block;
        }
        
        #HEADLINE171 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(254, 99, 103, 1);
            font-weight: 700;
            line-height: 42px;
        }
        
        #LISTOP419 {
            display: block;
        }
        
        #LISTOP419 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 21px;
        }
        
        #LINE170 {
            display: block;
        }
        
        #LINE170>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(254, 99, 103, 1);
            margin-top: 10.5px;
        }
        
        #LINE170 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX530 {
            display: block;
        }
        
        #BOX530 > .widget-content {
            background-color: rgba(13, 13, 13, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE531 {
            display: block;
        }
        
        #HEADLINE531 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Tinos';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 38px;
            letter-spacing: 4px;
        }
        
        #IMAGE160 {
            display: block;
        }
        
        #IMAGE160 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE160 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE494 {
            display: block;
        }
        
        #HEADLINE494 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 50px;
            letter-spacing: 4px;
        }
        
        #GROUP495 {
            display: block;
        }
        
        #GROUP495 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX496 {
            display: block;
        }
        
        #BOX496 > .widget-content {
            background-image: url("http://2.bp.blogspot.com/-uU8DqVUsM5g/U9dtUMEnlvI/AAAAAAAADow/PovlOcnQNsE/s1600/01.jpg");
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
        
        #BOX496> .widget-content {
            border-radius: 220px;
        }
        
        #BOX496> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #BOX496 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP497 {
            display: block;
        }
        
        #GROUP497 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE498 {
            display: block;
        }
        
        #SHAPE498 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE498> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE499 {
            display: block;
        }
        
        #SHAPE499 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE499> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE500 {
            display: block;
        }
        
        #SHAPE500 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE500> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE501 {
            display: block;
        }
        
        #SHAPE501 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE501> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE502 {
            display: block;
        }
        
        #SHAPE502 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE502> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #HEADLINE503 {
            display: block;
        }
        
        #HEADLINE503 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #GROUP504 {
            display: block;
        }
        
        #GROUP504 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE505 {
            display: block;
        }
        
        #HEADLINE505 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 700;
            line-height: 24px;
        }
        
        #HEADLINE506 {
            display: block;
        }
        
        #HEADLINE506 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(52, 49, 49, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE532 {
            display: block;
        }
        
        #HEADLINE532 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(52, 49, 49, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE534 {
            display: block;
        }
        
        #HEADLINE534 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(52, 49, 49, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE533 {
            display: block;
        }
        
        #HEADLINE533 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #HEADLINE535 {
            display: block;
        }
        
        #HEADLINE535 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #GROUP518 {
            display: block;
        }
        
        #GROUP518 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX519 {
            display: block;
        }
        
        #BOX519 > .widget-content {
            background-image: url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/18033407_774999416002128_2187159561582109052_n.jpg?oh=676fdf774916c5a5d1f25ff3a7bc30e3&oe=5A90C64F");
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
        
        #BOX519> .widget-content {
            border-radius: 220px;
        }
        
        #BOX519> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #BOX519 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP520 {
            display: block;
        }
        
        #GROUP520 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE521 {
            display: block;
        }
        
        #SHAPE521 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE521> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE522 {
            display: block;
        }
        
        #SHAPE522 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE522> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE523 {
            display: block;
        }
        
        #SHAPE523 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE523> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE524 {
            display: block;
        }
        
        #SHAPE524 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE524> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE525 {
            display: block;
        }
        
        #SHAPE525 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE525> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #HEADLINE528 {
            display: block;
        }
        
        #HEADLINE528 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #BOX508 {
            display: block;
        }
        
        #BOX508 > .widget-content {
            background-image: url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/20620794_10207690470698983_8052722718843731031_n.jpg?oh=1be2dada53a9774e719568920a201982&oe=5ACE6379");
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
        
        #BOX508> .widget-content {
            border-radius: 220px;
        }
        
        #BOX508> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #BOX508 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP509 {
            display: block;
        }
        
        #GROUP509 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE510 {
            display: block;
        }
        
        #SHAPE510 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE510> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE511 {
            display: block;
        }
        
        #SHAPE511 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE511> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE512 {
            display: block;
        }
        
        #SHAPE512 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE512> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #SHAPE513 {
            display: block;
        }
        
        #SHAPE513 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 174, 15, 1);
        }
        
        #SHAPE513> .widget-content svg {
            fill: rgba(255, 174, 15, 1);
        }
        
        #HEADLINE516 {
            display: block;
        }
        
        #HEADLINE516 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #HEADLINE435 {
            display: block;
        }
        
        #HEADLINE435 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(181, 181, 181, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BUTTON436 {
            display: table;
        }
        
        #BUTTON436 > .widget-content {
            background-color: rgba(254, 99, 103, 1);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 40px;
        }
        
        #BUTTON436> .widget-content {
            border-radius: 0px;
            border-width: 0px;
            border-style: solid;
        }
        
        #BUTTON436> .ladi-widget-overlay {
            border-radius: 0px;
            border-width: 0px;
            border-style: solid;
        }
        
        #PARAGRAPH437 {
            display: block;
        }
        
        #PARAGRAPH437 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #HEADLINE438 {
            display: block;
        }
        
        #HEADLINE438 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 41px;
        }
        
        #BOX439 {
            display: block;
        }
        
        #BOX439 > .widget-content {
            background-color: rgba(17, 118, 246, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP440 {
            display: block;
        }
        
        #GROUP440 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH441 {
            display: block;
        }
        
        #PARAGRAPH441 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #PARAGRAPH442 {
            display: block;
        }
        
        #PARAGRAPH442 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #PARAGRAPH443 {
            display: block;
        }
        
        #PARAGRAPH443 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #PARAGRAPH444 {
            display: block;
        }
        
        #PARAGRAPH444 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #COUNTDOWN445 {
            display: block;
        }
        
        #COUNTDOWN445 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
        }
        
        #BOX447 {
            display: block;
        }
        
        #BOX447 > .widget-content {
            background-color: rgba(59, 59, 59, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX447> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(17, 118, 246, 1);
        }
        
        #BOX447> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(17, 118, 246, 1);
        }
        
        #HEADLINE448 {
            display: block;
        }
        
        #HEADLINE448 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 27px;
        }
        
        #FORM449 {
            display: block;
        }
        
        #FORM449 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM449 .widget-content::-webkit-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #FORM449 .widget-content:-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #FORM449 .widget-content::-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #FORM449 .widget-content:-ms-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM453 {
            display: block;
        }
        
        #ITEM_FORM453 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM453> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #F05425;
        }
        
        #ITEM_FORM453> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #F05425;
        }
        
        #ITEM_FORM453 .widget-content::-webkit-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM453 .widget-content:-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM453 .widget-content::-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM453 .widget-content:-ms-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM454 {
            display: block;
        }
        
        #ITEM_FORM454 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM454> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #F05425;
        }
        
        #ITEM_FORM454> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #F05425;
        }
        
        #ITEM_FORM454 .widget-content::-webkit-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM454 .widget-content:-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM454 .widget-content::-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM454 .widget-content:-ms-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM455 {
            display: block;
        }
        
        #ITEM_FORM455 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM455> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #F05425;
        }
        
        #ITEM_FORM455> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #F05425;
        }
        
        #ITEM_FORM455 .widget-content::-webkit-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM455 .widget-content:-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM455 .widget-content::-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM455 .widget-content:-ms-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM456 {
            display: block;
        }
        
        #ITEM_FORM456 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM456> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #F05425;
        }
        
        #ITEM_FORM456> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #F05425;
        }
        
        #ITEM_FORM456 .widget-content::-webkit-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM456 .widget-content:-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM456 .widget-content::-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM456 .widget-content:-ms-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #BUTTON457 {
            display: table;
        }
        
        #BUTTON457 > .widget-content {
            background-color: rgba(17, 118, 246, 1);
            color: rgba(255, 255, 255, 0.87);
            font-weight: 700;
            line-height: 40px;
        }
        
        #BUTTON457> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON457> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #HEADLINE536 {
            display: block;
        }
        
        #HEADLINE536 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 55px;
        }
        
        #LINE297 {
            display: block;
        }
        
        #LINE297>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.26);
            margin-top: 12px;
        }
        
        #LINE297 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE298 {
            display: block;
        }
        
        #HEADLINE298 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(171, 171, 171, 1);
            font-weight: 400;
            line-height: 18px;
        }
        
        #FACEBOOK_MESSAGES299 {
            display: block;
        }
        
        #FACEBOOK_MESSAGES299 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FACEBOOK_MESSAGES299> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: #000;
        }
        
        #FACEBOOK_MESSAGES299> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: #000;
        }
        
        #HEADLINE300 {
            display: block;
        }
        
        #HEADLINE300 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 27px;
        }
        
        #GROUP304 {
            display: block;
        }
        
        #GROUP304 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE305 {
            display: block;
        }
        
        #HEADLINE305 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 27px;
        }
        
        #HEADLINE306 {
            display: block;
        }
        
        #HEADLINE306 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #SHAPE307 {
            display: block;
        }
        
        #SHAPE307 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE307> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #SHAPE308 {
            display: block;
        }
        
        #SHAPE308 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE308> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE309 {
            display: block;
        }
        
        #HEADLINE309 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE310 {
            display: block;
        }
        
        #HEADLINE310 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #SHAPE311 {
            display: block;
        }
        
        #SHAPE311 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE311> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #SHAPE312 {
            display: block;
        }
        
        #SHAPE312 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE312> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE313 {
            display: block;
        }
        
        #HEADLINE313 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION340 {
                width: 100%;
                height: 825.1953125px;
            }
            #SECTION340 .container {}
            #SECTION340 {
                background-image: url("https://wallpaperbrowse.com/media/images/office-desktop-background-image_01.jpg");
                background-size: cover;
                background-attachment: fixed;
                background-position: center top;
                background-repeat: no-repeat;
            }
            #SECTION67 {
                width: 100%;
                height: 1347.9921875px;
            }
            #SECTION67 .container {}
            #SECTION67 {
                background-image: linear-gradient(rgba(40, 39, 39, 0.8), rgba(40, 39, 39, 0.8)), url("https://cdn.pixabay.com/photo/2017/07/31/11/44/laptop-2557574_960_720.jpg");
                background-image: -o-linear-gradient(rgba(40, 39, 39, 0.8), rgba(40, 39, 39, 0.8)), url("https://cdn.pixabay.com/photo/2017/07/31/11/44/laptop-2557574_960_720.jpg");
                background-image: -ms-linear-gradient(rgba(40, 39, 39, 0.8), rgba(40, 39, 39, 0.8)), url("https://cdn.pixabay.com/photo/2017/07/31/11/44/laptop-2557574_960_720.jpg");
                background-image: -moz-linear-gradient(rgba(40, 39, 39, 0.8), rgba(40, 39, 39, 0.8)), url("https://cdn.pixabay.com/photo/2017/07/31/11/44/laptop-2557574_960_720.jpg");
                background-image: -webkit-linear-gradient(rgba(40, 39, 39, 0.8), rgba(40, 39, 39, 0.8)), url("https://cdn.pixabay.com/photo/2017/07/31/11/44/laptop-2557574_960_720.jpg");
                background-size: cover;
                background-attachment: fixed;
                background-position: center top;
                background-repeat: no-repeat;
            }
            #SECTION394 {
                width: 100%;
                height: 838.7890625px;
            }
            #SECTION394 .container {}
            #SECTION394 {
                background-image: url("https://ak2.picdn.net/shutterstock/videos/12864692/thumb/1.jpg?i10c=img.resize(height:160)");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION484 {
                width: 100%;
                height: 477.9921875px;
            }
            #SECTION484 .container {}
            #SECTION484 {
                background-image: linear-gradient(rgba(41, 41, 41, 0.67), rgba(41, 41, 41, 0.67)), url("https://static.ladipage.net/s400/uploads/images/9d8a7b7b-df3b-4db7-8897-0a3055c219a4.jpg");
                background-image: -o-linear-gradient(rgba(41, 41, 41, 0.67), rgba(41, 41, 41, 0.67)), url("https://static.ladipage.net/s400/uploads/images/9d8a7b7b-df3b-4db7-8897-0a3055c219a4.jpg");
                background-image: -ms-linear-gradient(rgba(41, 41, 41, 0.67), rgba(41, 41, 41, 0.67)), url("https://static.ladipage.net/s400/uploads/images/9d8a7b7b-df3b-4db7-8897-0a3055c219a4.jpg");
                background-image: -moz-linear-gradient(rgba(41, 41, 41, 0.67), rgba(41, 41, 41, 0.67)), url("https://static.ladipage.net/s400/uploads/images/9d8a7b7b-df3b-4db7-8897-0a3055c219a4.jpg");
                background-image: -webkit-linear-gradient(rgba(41, 41, 41, 0.67), rgba(41, 41, 41, 0.67)), url("https://static.ladipage.net/s400/uploads/images/9d8a7b7b-df3b-4db7-8897-0a3055c219a4.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION159 {
                width: 100%;
                height: 1056.9375px;
            }
            #SECTION159 .container {}
            #SECTION159 {
                background-image: url("https://ak2.picdn.net/shutterstock/videos/12864692/thumb/1.jpg?i10c=img.resize(height:160)");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION492 {
                width: 100%;
                height: 1214.859375px;
            }
            #SECTION492 .container {}
            #SECTION492 {
                background-image: linear-gradient(rgba(250, 243, 243, 0.34), rgba(250, 243, 243, 0.34)), url("https://www.walldevil.com/wallpapers/a77/texture-light-background-backgrounds-wallpaper-wallpapers.jpg");
                background-image: -o-linear-gradient(rgba(250, 243, 243, 0.34), rgba(250, 243, 243, 0.34)), url("https://www.walldevil.com/wallpapers/a77/texture-light-background-backgrounds-wallpaper-wallpapers.jpg");
                background-image: -ms-linear-gradient(rgba(250, 243, 243, 0.34), rgba(250, 243, 243, 0.34)), url("https://www.walldevil.com/wallpapers/a77/texture-light-background-backgrounds-wallpaper-wallpapers.jpg");
                background-image: -moz-linear-gradient(rgba(250, 243, 243, 0.34), rgba(250, 243, 243, 0.34)), url("https://www.walldevil.com/wallpapers/a77/texture-light-background-backgrounds-wallpaper-wallpapers.jpg");
                background-image: -webkit-linear-gradient(rgba(250, 243, 243, 0.34), rgba(250, 243, 243, 0.34)), url("https://www.walldevil.com/wallpapers/a77/texture-light-background-backgrounds-wallpaper-wallpapers.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION434 {
                width: 100%;
                height: 989.96875px;
            }
            #SECTION434 .container {}
            #SECTION434 {
                background-image: none;
            }
            #SECTION296 {
                width: 100%;
                height: 406.4375px;
            }
            #SECTION296 .container {}
            #SECTION296 {
                background-image: none;
            }
            #BOX341 {
                top: 20px;
                left: 161.004px;
                width: 52.984375px;
                height: 52.984375px;
            }
            #SHAPE342 {
                top: 12px;
                left: 12px;
                width: 28.984375px;
                height: 28.984375px;
            }
            #HEADLINE343 {
                top: 361.727px;
                left: 69px;
                padding: 0px;
                width: 237px;
                height: 33px;
            }
            #HEADLINE343 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #BOX344 {
                top: 404.727px;
                left: 10.0078px;
                width: 354.984375px;
                height: 160.46875px;
            }
            #HEADLINE345 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 130.5px;
            }
            #HEADLINE345 > .widget-content {
                font-size: 38px;
                text-align: center;
            }
            #HEADLINE346 {
                top: 575.204px;
                left: 1.00781px;
                padding: 0px;
                width: 372.984375px;
                height: 31.5px;
            }
            #HEADLINE346 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #PARAGRAPH347 {
                top: 590.704px;
                left: 10.0078px;
                padding: 0px;
                width: 354.984375px;
                height: 144px;
            }
            #PARAGRAPH347 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #BUTTON348 {
                top: 770.704px;
                left: 109.5px;
                padding: 0px;
                width: 156px;
                height: 35px;
            }
            #BUTTON348 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #IMAGE349 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400/5a28c4f8c3f6592b3acabec8/848a0512-1512789708702.png);
            }
            #IMAGE349 {
                top: 79.9922px;
                left: 10.0078px;
                width: 354.984375px;
                height: 278.015625px;
            }
            #LINE91 {
                top: 90px;
                left: 155.004px;
                width: 64.984375px;
                height: 24.984375px;
            }
            #HEADLINE90 {
                top: 20px;
                left: 10.0078px;
                padding: 0px;
                width: 354.984375px;
                height: 60px;
            }
            #HEADLINE90 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 30px;
            }
            #HEADLINE417 {
                display: none!important;
                top: 417.646px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 90px;
            }
            #HEADLINE417 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX490 {
                top: 124.984px;
                left: 10.0078px;
                width: 354.984375px;
                height: 1203.015625px;
            }
            #GROUP286 {
                top: 838.579px;
                left: 66px;
                width: 222.984375px;
                height: 262.84375px;
            }
            #IMAGE287 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/vp-mat-tap-trung-1512742728813.jpeg);
            }
            #IMAGE287 {
                top: 0px;
                left: 1px;
                width: 222.984375px;
                height: 195.984375px;
            }
            #BOX288 {
                top: 195.961px;
                left: 1px;
                width: 222.984375px;
                height: 56.90625px;
            }
            #HEADLINE289 {
                top: 18px;
                left: 9px;
                padding: 0px;
                width: 199.984375px;
                height: 17.765625px;
            }
            #HEADLINE289 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP70 {
                top: 20px;
                left: 66px;
                width: 222.984375px;
                height: 262.84375px;
            }
            #IMAGE71 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/vp-dau-lung-1512742424767.jpg);
            }
            #IMAGE71 {
                top: 0px;
                left: 1.02344px;
                width: 222.984375px;
                height: 196.59375px;
            }
            #BOX72 {
                top: 196.898px;
                left: 1px;
                width: 222.984375px;
                height: 55.984375px;
            }
            #HEADLINE73 {
                top: 18.0559px;
                left: 9px;
                padding: 0px;
                width: 199.984375px;
                height: 17.8125px;
            }
            #HEADLINE73 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP141 {
                top: 292.852px;
                left: 66px;
                width: 222.984375px;
                height: 262.875px;
            }
            #IMAGE142 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/vp-dau-vai-1512742560938.jpg);
            }
            #IMAGE142 {
                top: 0px;
                left: 1px;
                width: 222.984375px;
                height: 195.984375px;
            }
            #BOX143 {
                top: 195.972px;
                left: 1px;
                width: 222.984375px;
                height: 56.921875px;
            }
            #HEADLINE144 {
                top: 18px;
                left: 9px;
                padding: 0px;
                width: 199.984375px;
                height: 17.765625px;
            }
            #HEADLINE144 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP146 {
                top: 565.727px;
                left: 66px;
                width: 222.984375px;
                height: 262.84375px;
            }
            #IMAGE147 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/vp-stressjpg-1512742618503.jpg);
            }
            #IMAGE147 {
                top: 0px;
                left: 1px;
                width: 222.984375px;
                height: 195.984375px;
            }
            #BOX148 {
                top: 196.944px;
                left: 1px;
                width: 222.984375px;
                height: 55.9375px;
            }
            #HEADLINE149 {
                top: 18px;
                left: 9px;
                padding: 0px;
                width: 199.984375px;
                height: 17.765625px;
            }
            #HEADLINE149 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #LINE395 {
                display: none!important;
                top: 208px;
                left: 20px;
                width: 335px;
                height: 24.984375px;
            }
            #HEADLINE396 {
                top: 20px;
                left: 10.0078px;
                padding: 0px;
                width: 354.984375px;
                height: 45px;
            }
            #HEADLINE396 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #GROUP402 {
                top: 75px;
                left: 7.88672px;
                width: 359.21875px;
                height: 157.953125px;
            }
            #HEADLINE404 {
                top: 0px;
                left: 0px;
                padding: 0px;
                width: 359.21875px;
                height: 22px;
            }
            #HEADLINE404 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH405 {
                top: 63.9844px;
                left: 2.12109px;
                padding: 0px;
                width: 354.984375px;
                height: 84px;
            }
            #PARAGRAPH405 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE406 {
                top: 29px;
                left: 139.113px;
                width: 81px;
                height: 24.984375px;
            }
            #GROUP412 {
                top: 469.906px;
                left: 10.0078px;
                width: 354.984375px;
                height: 136.953125px;
            }
            #HEADLINE414 {
                top: 0px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 22px;
            }
            #HEADLINE414 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH415 {
                top: 63.9844px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 63px;
            }
            #PARAGRAPH415 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE416 {
                top: 29px;
                left: 136.992px;
                width: 81px;
                height: 24.984375px;
            }
            #GROUP407 {
                top: 638.859px;
                left: 10.0078px;
                width: 354.984375px;
                height: 135.953125px;
            }
            #HEADLINE409 {
                top: 0px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 44px;
            }
            #HEADLINE409 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH410 {
                top: 62.984px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 63px;
            }
            #PARAGRAPH410 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE411 {
                top: 28px;
                left: 136.992px;
                width: 81px;
                height: 24.984375px;
            }
            #GROUP397 {
                top: 264.953px;
                left: 10.0078px;
                width: 354.984375px;
                height: 150.953125px;
            }
            #HEADLINE399 {
                top: 0px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 44px;
            }
            #HEADLINE399 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH400 {
                top: 62.984px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 78px;
            }
            #PARAGRAPH400 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE401 {
                top: 28px;
                left: 136.992px;
                width: 81px;
                height: 24.984375px;
            }
            #BOX485 {
                top: 20px;
                left: 10.0078px;
                width: 354.984375px;
                height: 438px;
            }
            #BUTTON487 {
                top: 156px;
                left: 0.492188px;
                padding: 0px;
                width: 354px;
                height: 59px;
            }
            #BUTTON487 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH488 {
                top: 224.5px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 81px;
            }
            #PARAGRAPH488 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #PARAGRAPH489 {
                top: 315.5px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 81px;
            }
            #PARAGRAPH489 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE486 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 126px;
            }
            #HEADLINE486 > .widget-content {
                font-size: 36px;
                text-align: center;
                line-height: 42px;
            }
            #HEADLINE171 {
                top: 134.977px;
                left: 10.0078px;
                padding: 0px;
                width: 354.984375px;
                height: 90px;
            }
            #HEADLINE171 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 30px;
            }
            #LISTOP419 {
                top: 250.162px;
                left: 10px;
                width: 355px;
                height: 336px;
            }
            #LISTOP419 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP419 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP419 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP419 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LINE170 {
                top: 234.977px;
                left: 155.004px;
                width: 64.984375px;
                height: 24.984375px;
            }
            #BOX530 {
                top: 20px;
                left: 10.0078px;
                width: 354.984375px;
                height: 104.96875px;
            }
            #HEADLINE531 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 354.984375px;
                height: 75px;
            }
            #HEADLINE531 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #IMAGE160 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s250/5a28c4f8c3f6592b3acabec8/img_5378-1512805728576.jpg);
            }
            #IMAGE160 {
                top: 767.961px;
                left: 74.2734px;
                width: 228px;
                height: 264px;
            }
            #HEADLINE494 {
                top: 20px;
                left: 10.0078px;
                padding: 0px;
                width: 354.984375px;
                height: 99px;
            }
            #HEADLINE494 > .widget-content {
                font-size: 39px;
                text-align: center;
            }
            #GROUP495 {
                top: 136.469px;
                left: -9.03125px;
                width: 376.890625px;
                height: 1020.046875px;
            }
            #BOX496 {
                top: 0px;
                left: 147.141px;
                width: 94.984375px;
                height: 94.984375px;
            }
            #BOX496 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("http://2.bp.blogspot.com/-uU8DqVUsM5g/U9dtUMEnlvI/AAAAAAAADow/PovlOcnQNsE/s1600/01.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("http://2.bp.blogspot.com/-uU8DqVUsM5g/U9dtUMEnlvI/AAAAAAAADow/PovlOcnQNsE/s1600/01.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("http://2.bp.blogspot.com/-uU8DqVUsM5g/U9dtUMEnlvI/AAAAAAAADow/PovlOcnQNsE/s1600/01.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("http://2.bp.blogspot.com/-uU8DqVUsM5g/U9dtUMEnlvI/AAAAAAAADow/PovlOcnQNsE/s1600/01.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("http://2.bp.blogspot.com/-uU8DqVUsM5g/U9dtUMEnlvI/AAAAAAAADow/PovlOcnQNsE/s1600/01.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #GROUP497 {
                top: 198.953px;
                left: 115.781px;
                width: 137.453125px;
                height: 27px;
            }
            #SHAPE498 {
                top: 0px;
                left: 1px;
                width: 25.59375px;
                height: 27px;
            }
            #SHAPE499 {
                top: 0px;
                left: 29.4297px;
                width: 25.59375px;
                height: 27px;
            }
            #SHAPE500 {
                top: 0px;
                left: 87.25px;
                width: 25.59375px;
                height: 27px;
            }
            #SHAPE501 {
                top: 0px;
                left: 58.8203px;
                width: 25.59375px;
                height: 27px;
            }
            #SHAPE502 {
                top: 0px;
                left: 112.867px;
                width: 25.59375px;
                height: 27px;
            }
            #HEADLINE503 {
                top: 239.656px;
                left: 29.8906px;
                padding: 0px;
                width: 347.359375px;
                height: 88px;
            }
            #HEADLINE503 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #GROUP504 {
                top: 108.594px;
                left: 1px;
                width: 370.546875px;
                height: 791.734375px;
            }
            #HEADLINE505 {
                top: 0px;
                left: 89.5313px;
                padding: 0px;
                width: 270.984375px;
                height: 24px;
            }
            #HEADLINE505 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE506 {
                top: 24px;
                left: 1px;
                padding: 0px;
                width: 370px;
                height: 22px;
            }
            #HEADLINE506 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE532 {
                top: 433.188px;
                left: 51.7813px;
                padding: 0px;
                width: 270.984375px;
                height: 21px;
            }
            #HEADLINE532 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE534 {
                top: 770.734px;
                left: 100.563px;
                padding: 0px;
                width: 270.984375px;
                height: 21px;
            }
            #HEADLINE534 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE533 {
                top: 620.656px;
                left: 30.5313px;
                padding: 0px;
                width: 347.359375px;
                height: 66px;
            }
            #HEADLINE533 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE535 {
                top: 954.047px;
                left: 27.6406px;
                padding: 0px;
                width: 347.359375px;
                height: 66px;
            }
            #HEADLINE535 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #GROUP518 {
                top: 859.125px;
                left: 96.5469px;
                width: 300px;
                height: 224.453125px;
            }
            #BOX519 {
                top: 0px;
                left: 40.4922px;
                width: 94.984375px;
                height: 94.984375px;
            }
            #BOX519 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/18033407_774999416002128_2187159561582109052_n.jpg?oh=676fdf774916c5a5d1f25ff3a7bc30e3&oe=5A90C64F");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/18033407_774999416002128_2187159561582109052_n.jpg?oh=676fdf774916c5a5d1f25ff3a7bc30e3&oe=5A90C64F");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/18033407_774999416002128_2187159561582109052_n.jpg?oh=676fdf774916c5a5d1f25ff3a7bc30e3&oe=5A90C64F");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/18033407_774999416002128_2187159561582109052_n.jpg?oh=676fdf774916c5a5d1f25ff3a7bc30e3&oe=5A90C64F");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/18033407_774999416002128_2187159561582109052_n.jpg?oh=676fdf774916c5a5d1f25ff3a7bc30e3&oe=5A90C64F");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #GROUP520 {
                top: 190.461px;
                left: 12.4375px;
                width: 145px;
                height: 27px;
            }
            #SHAPE521 {
                top: 0px;
                left: 1px;
                width: 27px;
                height: 27px;
            }
            #SHAPE522 {
                top: 0px;
                left: 31px;
                width: 27px;
                height: 27px;
            }
            #SHAPE523 {
                top: 0px;
                left: 92.0078px;
                width: 27px;
                height: 27px;
            }
            #SHAPE524 {
                top: 0px;
                left: 62.0078px;
                width: 27px;
                height: 27px;
            }
            #SHAPE525 {
                top: 0px;
                left: 119.008px;
                width: 27px;
                height: 27px;
            }
            #HEADLINE528 {
                top: 118.992px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 19.5px;
            }
            #HEADLINE528 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX508 {
                top: 521.438px;
                left: 135.793px;
                width: 94.984375px;
                height: 94.984375px;
            }
            #BOX508 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/20620794_10207690470698983_8052722718843731031_n.jpg?oh=1be2dada53a9774e719568920a201982&oe=5ACE6379");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/20620794_10207690470698983_8052722718843731031_n.jpg?oh=1be2dada53a9774e719568920a201982&oe=5ACE6379");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/20620794_10207690470698983_8052722718843731031_n.jpg?oh=1be2dada53a9774e719568920a201982&oe=5ACE6379");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/20620794_10207690470698983_8052722718843731031_n.jpg?oh=1be2dada53a9774e719568920a201982&oe=5ACE6379");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://scontent.fhan3-1.fna.fbcdn.net/v/t1.0-9/20620794_10207690470698983_8052722718843731031_n.jpg?oh=1be2dada53a9774e719568920a201982&oe=5ACE6379");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #GROUP509 {
                top: 714.938px;
                left: 125.398px;
                width: 118px;
                height: 27.984375px;
            }
            #SHAPE510 {
                top: 0.984375px;
                left: 1px;
                width: 27px;
                height: 27px;
            }
            #SHAPE511 {
                top: 0.984375px;
                left: 31px;
                width: 27px;
                height: 27px;
            }
            #SHAPE512 {
                top: 0.984375px;
                left: 92.0078px;
                width: 27px;
                height: 27px;
            }
            #SHAPE513 {
                top: 0px;
                left: 62.0078px;
                width: 27px;
                height: 27px;
            }
            #HEADLINE516 {
                top: 644.43px;
                left: 147.5px;
                padding: 0px;
                width: 144px;
                height: 19.5px;
            }
            #HEADLINE516 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE435 {
                top: 931.992px;
                left: 8.0078px;
                padding: 0px;
                width: 354.984375px;
                height: 42px;
            }
            #HEADLINE435 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BUTTON436 {
                top: 94px;
                left: 30px;
                padding: 0px;
                width: 315px;
                height: 89px;
            }
            #BUTTON436 > .widget-content {
                font-size: 34px;
                text-align: left;
            }
            #PARAGRAPH437 {
                top: 715px;
                left: 13.4922px;
                padding: 0px;
                width: 354.984375px;
                height: 84px;
            }
            #PARAGRAPH437 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE438 {
                top: 64px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 56px;
            }
            #HEADLINE438 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 28px;
            }
            #BOX439 {
                top: 821px;
                left: 31.5px;
                width: 312px;
                height: 100.984375px;
            }
            #GROUP440 {
                top: 22px;
                left: 15px;
                width: 282.984375px;
                height: 16.984375px;
            }
            #PARAGRAPH441 {
                top: 0px;
                left: 0px;
                padding: 0px;
                width: 60.984375px;
                height: 16.984375px;
            }
            #PARAGRAPH441 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH442 {
                top: 0px;
                left: 73px;
                padding: 0px;
                width: 60.984375px;
                height: 16.984375px;
            }
            #PARAGRAPH442 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH443 {
                top: 0px;
                left: 147px;
                padding: 0px;
                width: 60.984375px;
                height: 16.984375px;
            }
            #PARAGRAPH443 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH444 {
                top: 0px;
                left: 222px;
                padding: 0px;
                width: 60.984375px;
                height: 16.984375px;
            }
            #PARAGRAPH444 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #COUNTDOWN445 {
                top: 38px;
                left: 10px;
                width: 297.984375px;
                height: 45px;
            }
            #COUNTDOWN445 > .widget-content {
                font-size: 36px;
            }
            #BOX447 {
                top: 203.266px;
                left: 25px;
                width: 322.984375px;
                height: 474px;
            }
            #HEADLINE448 {
                top: 26px;
                left: 35px;
                padding: 0px;
                width: 288px;
                height: 26.640625px;
            }
            #HEADLINE448 > .widget-content {
                font-size: 21px;
                text-align: left;
                line-height: 33px;
            }
            #FORM449 {
                top: 80px;
                left: 28px;
                width: 261.984375px;
                height: 283.984375px;
            }
            #ITEM_FORM453 {
                top: 55.5441px;
                left: 0px;
                width: 261.984375px;
                height: 40.6875px;
            }
            #ITEM_FORM454 {
                top: 111.089px;
                left: 0px;
                width: 261.984375px;
                height: 40.6875px;
            }
            #ITEM_FORM455 {
                top: 160.633px;
                left: 0px;
                width: 261.984375px;
                height: 123.375px;
            }
            #ITEM_FORM456 {
                top: 0px;
                left: 0px;
                width: 261.984375px;
                height: 40.6875px;
            }
            #BUTTON457 {
                top: 387px;
                left: 28.9792px;
                padding: 0px;
                width: 262px;
                height: 48px;
            }
            #BUTTON457 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #HEADLINE536 {
                top: 104.172px;
                left: 203.5px;
                padding: 0px;
                width: 200px;
                height: 55px;
            }
            #HEADLINE536 > .widget-content {
                font-size: 49px;
                text-align: left;
            }
            #LINE297 {
                display: none!important;
                top: 375px;
                left: 10px;
                width: 355px;
                height: 24.984375px;
            }
            #HEADLINE298 {
                top: 368.438px;
                left: 54px;
                padding: 0px;
                width: 267px;
                height: 18px;
            }
            #HEADLINE298 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #FACEBOOK_MESSAGES299 {
                display: none!important;
                top: 303px;
                left: 55px;
                width: 265px;
                height: 210px;
            }
            #HEADLINE300 {
                display: none!important;
                top: 250.461px;
                left: 64.5px;
                padding: 0px;
                width: 246px;
                height: 27px;
            }
            #HEADLINE300 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP304 {
                top: 39.9844px;
                left: 18.2188px;
                width: 403.46875px;
                height: 231.4375px;
            }
            #HEADLINE305 {
                top: 0px;
                left: 45.4609px;
                padding: 0px;
                width: 246px;
                height: 27px;
            }
            #HEADLINE305 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE306 {
                top: 43.9688px;
                left: 38.9688px;
                padding: 0px;
                width: 287.109375px;
                height: 39px;
            }
            #HEADLINE306 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #SHAPE307 {
                top: 40.9922px;
                left: 3.46094px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE308 {
                top: 99.9844px;
                left: 4.44531px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #HEADLINE309 {
                top: 110.273px;
                left: 38.4766px;
                padding: 0px;
                width: 366px;
                height: 19.5px;
            }
            #HEADLINE309 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE310 {
                top: 157.477px;
                left: 38.9688px;
                padding: 0px;
                width: 330.984375px;
                height: 19.5px;
            }
            #HEADLINE310 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #SHAPE311 {
                top: 151.289px;
                left: 1.98438px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE312 {
                top: 204.281px;
                left: 1px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #HEADLINE313 {
                top: 211.945px;
                left: 36.9766px;
                padding: 0px;
                width: 330.984375px;
                height: 19.5px;
            }
            #HEADLINE313 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
        }
    </style>