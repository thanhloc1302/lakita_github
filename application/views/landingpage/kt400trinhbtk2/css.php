
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
            var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto+Slab:300,400,700|Source+Sans+Pro:300,400,600,700|Roboto:300,400,700&amp;subset=latin-ext,vietnamese';
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
            #SECTION222 {
                width: 100%;
                height: 689.9296875px;
            }
            #SECTION222 .container {}
            #SECTION222 {}
            #SECTION9 {
                width: 100%;
                height: 303.94097900390625px;
            }
            #SECTION9 .container {}
            #SECTION9 {}
            #SECTION36 {
                width: 100%;
                height: 680px;
            }
            #SECTION36 .container {}
            #SECTION36 {}
            #SECTION94 {
                width: 100%;
                height: 949.96875px;
            }
            #SECTION94 .container {}
            #SECTION94 {}
            #POPUP441 {
                width: 100%;
                height: 100%;
            }
            #POPUP441 .container {
                width: 563px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP441 {}
            #POPUP436 {
                width: 100%;
                height: 100%;
            }
            #POPUP436 .container {
                width: 563px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP436 {}
            #POPUP430 {
                width: 100%;
                height: 100%;
            }
            #POPUP430 .container {
                width: 563px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP430 {}
            #POPUP404 {
                width: 100%;
                height: 100%;
            }
            #POPUP404 .container {
                width: 724px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP404 {}
            #POPUP400 {
                width: 100%;
                height: 100%;
            }
            #POPUP400 .container {
                width: 563px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP400 {}
            #POPUP395 {
                width: 100%;
                height: 100%;
            }
            #POPUP395 .container {
                width: 714px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP395 {}
            #POPUP386 {
                width: 100%;
                height: 100%;
            }
            #POPUP386 .container {
                width: 763.65625px;
                height: 399.65625px;
                top: calc(100%-399.65625px);
            }
            #POPUP386 {}
            #POPUP380 {
                width: 100%;
                height: 100%;
            }
            #POPUP380 .container {
                width: 923px;
                height: 719px;
                top: calc(100%-719px);
            }
            #POPUP380 {}
            #SECTION205 {
                width: 100%;
                height: 569px;
            }
            #SECTION205 .container {}
            #SECTION205 {}
            #SECTION321 {
                width: 100%;
                height: 456.9444580078125px;
            }
            #SECTION321 .container {}
            #SECTION321 {}
            #SECTION42 {
                width: 100%;
                height: 573.5px;
            }
            #SECTION42 .container {}
            #SECTION42 {}
            #SECTION232 {
                width: 100%;
                height: 971px;
            }
            #SECTION232 .container {}
            #SECTION232 {}
            #HEADLINE5 {
                top: 278.99px;
                left: -8.99654px;
                padding: 0px;
                width: 979px;
                height: 110px;
            }
            #HEADLINE5 > .widget-content {
                font-size: 49px;
                text-align: center;
            }
            #HEADLINE171 {
                top: 351px;
                left: 129px;
                padding: 0px;
                width: 689px;
                height: 69px;
            }
            #HEADLINE171 > .widget-content {
                font-size: 63px;
                text-align: center;
            }
            #LINE174 {
                top: 420px;
                left: 164px;
                width: 615px;
                height: 25px;
            }
            #BUTTON178 {
                top: 477.523px;
                left: 396px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON178 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BOX350 {
                top: -21.25px;
                left: -505.063px;
                width: 2061.9375px;
                height: 102.75px;
            }
            #HEADLINE353 {
                top: 59.875px;
                left: 608.015625px;
                padding: 0px;
                width: 213px;
                height: 25px;
            }
            #HEADLINE353 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #HEADLINE363 {
                top: 60.296875px;
                left: 1101.02px;
                padding: 0px;
                width: 182px;
                height: 25px;
            }
            #HEADLINE363 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #HEADLINE365 {
                top: 60.640625px;
                left: 1267.33px;
                padding: 0px;
                width: 219px;
                height: 25px;
            }
            #HEADLINE365 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #LINEVERTICAL354 {
                top: 56.875px;
                left: 781.203px;
                width: 24.984375px;
                height: 28.3359375px;
            }
            #LINEVERTICAL361 {
                top: 55.640625px;
                left: 966px;
                width: 24.984375px;
                height: 28.3359375px;
            }
            #HEADLINE360 {
                top: 59.640625px;
                left: 988.98px;
                padding: 0px;
                width: 115px;
                height: 25px;
            }
            #HEADLINE360 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #HEADLINE359 {
                top: 59.875px;
                left: 801.1875px;
                padding: 0px;
                width: 213px;
                height: 25px;
            }
            #HEADLINE359 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #IMAGE352 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo_white-1513079500.png);
            }
            #IMAGE352 {
                top: -27.5348px;
                left: -119.227px;
                width: 158.2291717529297px;
                height: 156.5104217529297px;
            }
            #LINEVERTICAL362 {
                top: 33.4588px;
                left: 572.313px;
                width: 24.984375px;
                height: 28.3359375px;
            }
            #LINEVERTICAL364 {
                top: 33.7924px;
                left: 743.313px;
                width: 24.984375px;
                height: 28.3359375px;
            }
            #GROUP11 {
                top: 21.75px;
                left: -16px;
                width: 285px;
                height: 231.75px;
            }
            #GROUP12 {
                top: 106.75px;
                left: 1px;
                width: 285px;
                height: 125px;
            }
            #HEADLINE13 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 285px;
                height: 24px;
            }
            #HEADLINE13 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH14 {
                top: 41px;
                left: 42px;
                padding: 0px;
                width: 211px;
                height: 84px;
            }
            #PARAGRAPH14 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #SHAPE15 {
                top: 0px;
                left: 100px;
                width: 100px;
                height: 100px;
            }
            #GROUP26 {
                top: 23.75px;
                left: 318px;
                width: 285px;
                height: 231.75px;
            }
            #GROUP27 {
                top: 106.75px;
                left: 1px;
                width: 285px;
                height: 125px;
            }
            #HEADLINE28 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 285px;
                height: 24px;
            }
            #HEADLINE28 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH29 {
                top: 41px;
                left: 42px;
                padding: 0px;
                width: 211px;
                height: 84px;
            }
            #PARAGRAPH29 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #SHAPE30 {
                top: 0px;
                left: 100px;
                width: 100px;
                height: 100px;
            }
            #GROUP31 {
                top: 23.75px;
                left: 657.9375px;
                width: 285px;
                height: 231.703125px;
            }
            #GROUP32 {
                top: 106.734375px;
                left: 1px;
                width: 285px;
                height: 124.96875px;
            }
            #HEADLINE33 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 285px;
                height: 24px;
            }
            #HEADLINE33 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH34 {
                top: 40.96875px;
                left: 42px;
                padding: 0px;
                width: 210px;
                height: 84px;
            }
            #PARAGRAPH34 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #SHAPE35 {
                top: 0px;
                left: 101px;
                width: 100px;
                height: 100px;
            }
            #HEADLINE37 {
                top: 43px;
                left: 200px;
                padding: 0px;
                width: 613px;
                height: 37px;
            }
            #HEADLINE37 > .widget-content {
                font-size: 31px;
                text-align: left;
            }
            #YOUTUBE180 {
                top: 190px;
                left: 443px;
                width: 517px;
                height: 287px;
            }
            #LISTOP41 {
                top: 179.109px;
                left: 0px;
                width: 409.9921875px;
                height: 392.90625px;
            }
            #LISTOP41 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #LISTOP41 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 21px;
                height: 21px;
                font-size: 10.5px;
                color: rgba(56, 142, 60, 1);
                margin-right: 0px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(56,142,60,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP41 > ol.widget-content li {
                margin-bottom: 13px;
            }
            #LISTOP41 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE182 {
                top: 150px;
                left: 0px;
                padding: 0px;
                width: 270px;
                height: 23.33333396911621px;
            }
            #HEADLINE182 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON447 {
                top: 627.563px;
                left: 405.984px;
                padding: 0px;
                width: 149px;
                height: 39px;
            }
            #BUTTON447 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #HEADLINE95 {
                top: 54px;
                left: 315px;
                padding: 0px;
                width: 348px;
                height: 36px;
            }
            #HEADLINE95 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP144 {
                top: 151.890625px;
                left: 492px;
                width: 467.984375px;
                height: 690.984375px;
            }
            #BOX145 {
                top: 23.984375px;
                left: 2px;
                width: 466.9965515136719px;
                height: 167.98611450195312px;
            }
            #HEADLINE146 {
                top: 24px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 27px;
            }
            #HEADLINE146 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE147 {
                top: 55px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 72px;
            }
            #HEADLINE147 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX149 {
                top: 0px;
                left: 22px;
                width: 119px;
                height: 116px;
            }
            #BOX191 {
                top: 280.984375px;
                left: 1px;
                width: 467px;
                height: 168px;
            }
            #HEADLINE192 {
                top: 24px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 27px;
            }
            #HEADLINE192 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE193 {
                top: 55px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 48px;
            }
            #HEADLINE193 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX195 {
                top: 522.984375px;
                left: 1px;
                width: 467px;
                height: 168px;
            }
            #HEADLINE196 {
                top: 24px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 27px;
            }
            #HEADLINE196 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE197 {
                top: 55px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 48px;
            }
            #HEADLINE197 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX201 {
                top: 255px;
                left: 17px;
                width: 119px;
                height: 116px;
            }
            #BOX202 {
                top: 498.984375px;
                left: 16px;
                width: 119px;
                height: 116px;
            }
            #GROUP117 {
                top: 152.203125px;
                left: 0px;
                width: 468px;
                height: 691.96875px;
            }
            #BOX118 {
                top: 23.96875px;
                left: 2px;
                width: 466.9965515136719px;
                height: 167.98611450195312px;
            }
            #HEADLINE119 {
                top: 24px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 27px;
            }
            #HEADLINE119 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE120 {
                top: 55px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 72px;
            }
            #HEADLINE120 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX122 {
                top: 0px;
                left: 22px;
                width: 119px;
                height: 116px;
            }
            #BOX183 {
                top: 280.9375px;
                left: 1px;
                width: 467px;
                height: 168px;
            }
            #HEADLINE184 {
                top: 24px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 27px;
            }
            #HEADLINE184 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE185 {
                top: 55px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 48px;
            }
            #HEADLINE185 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX187 {
                top: 523.96875px;
                left: 2px;
                width: 467px;
                height: 168px;
            }
            #HEADLINE188 {
                top: 24px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 27px;
            }
            #HEADLINE188 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE189 {
                top: 55px;
                left: 152px;
                padding: 0px;
                width: 285px;
                height: 48px;
            }
            #HEADLINE189 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX199 {
                top: 256.96875px;
                left: 17px;
                width: 119px;
                height: 116px;
            }
            #BOX200 {
                top: 500.96875px;
                left: 20.625px;
                width: 119px;
                height: 116px;
            }
            #BUTTON448 {
                top: 893.609px;
                left: 405px;
                padding: 0px;
                width: 149px;
                height: 39px;
            }
            #BUTTON448 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #PARAGRAPH446 {
                top: 40px;
                left: 40.5px;
                padding: 0px;
                width: 491px;
                height: 138px;
            }
            #PARAGRAPH446 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #PARAGRAPH440 {
                top: 44px;
                left: 33.5px;
                padding: 0px;
                width: 485px;
                height: 120px;
            }
            #PARAGRAPH440 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH434 {
                top: 98.5px;
                left: -273.5px;
                padding: 0px;
                width: 280px;
                height: 90px;
            }
            #PARAGRAPH434 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH435 {
                top: 31px;
                left: 31.5px;
                padding: 0px;
                width: 468px;
                height: 192px;
            }
            #PARAGRAPH435 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH409 {
                top: 29.5px;
                left: 51px;
                padding: 0px;
                width: 625px;
                height: 171px;
            }
            #PARAGRAPH409 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE428 {
                top: 142.5px;
                left: 181.5px;
                padding: 0px;
                width: 200px;
                height: 30px;
            }
            #HEADLINE428 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH429 {
                top: 67.5px;
                left: 21.5px;
                padding: 0px;
                width: 515px;
                height: 198px;
            }
            #PARAGRAPH429 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE399 {
                top: 48.5px;
                left: 26px;
                padding: 0px;
                width: 653px;
                height: 198px;
            }
            #HEADLINE399 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH394 {
                top: 55.828125px;
                left: 22.828125px;
                padding: 0px;
                width: 710.6666870117188px;
                height: 298.66668701171875px;
            }
            #PARAGRAPH394 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX381 {
                top: -0.5px;
                left: -0.5px;
                width: 524px;
                height: 75px;
            }
            #LINEVERTICAL383 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 316px;
            }
            #HEADLINE206 {
                top: 58px;
                left: 245.516px;
                padding: 0px;
                width: 473px;
                height: 34px;
            }
            #HEADLINE206 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #LINE211 {
                top: 100px;
                left: 398px;
                width: 142px;
                height: 25px;
            }
            #HEADLINE208 {
                top: 125.667px;
                left: 319.719px;
                padding: 0px;
                width: 392px;
                height: 28px;
            }
            #HEADLINE208 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX212 {
                top: 180px;
                left: 0.666687px;
                width: 268px;
                height: 268px;
            }
            #BUTTON449 {
                top: 511.625px;
                left: 402px;
                padding: 0px;
                width: 149px;
                height: 39px;
            }
            #BUTTON449 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #LISTOP267 {
                top: 179.334px;
                left: 314.167px;
                width: 776px;
                height: 279px;
            }
            #LISTOP267 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #LISTOP267 > ol.widget-content li::before {
                content: counter(linum, none);
                width: 26px;
                height: 26px;
                font-size: 13px;
                color: rgba(230, 74, 25, 1);
                margin-right: 0px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(230,74,25,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP267 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP267 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE323 {
                top: 30.9722px;
                left: 174.316px;
                padding: 0px;
                width: 617.77783203125px;
                height: 37.77777862548828px;
            }
            #HEADLINE323 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #GROUP324 {
                top: 137.63890075683594px;
                left: 337.732666015625px;
                width: 672.4305725097656px;
                height: 195.625px;
            }
            #PARAGRAPH325 {
                top: 0px;
                left: 3.96875px;
                padding: 0px;
                width: 508.9930725097656px;
                height: 36.66666793823242px;
            }
            #PARAGRAPH325 > .widget-content {
                font-size: 31px;
                text-align: left;
            }
            #PARAGRAPH333 {
                top: 115.625px;
                left: 8.986114501953125px;
                padding: 0px;
                width: 664.4444580078125px;
                height: 80px;
            }
            #PARAGRAPH333 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LINE334 {
                top: 63.298614501953125px;
                left: 1px;
                width: 490.0000305175781px;
                height: 25px;
            }
            #PARAGRAPH335 {
                top: 45.173614501953125px;
                left: 2.979156494140625px;
                padding: 0px;
                width: 543.0034790039062px;
                height: 25.555557250976562px;
            }
            #PARAGRAPH335 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE348 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png);
            }
            #IMAGE348 {
                top: 114.024px;
                left: 25px;
                width: 280.8507080078125px;
                height: 273.0208435058594px;
            }
            #HEADLINE43 {
                top: 74px;
                left: 171px;
                padding: 0px;
                width: 618px;
                height: 30px;
            }
            #HEADLINE43 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #PARAGRAPH44 {
                top: 107px;
                left: 130px;
                padding: 0px;
                width: 700px;
                height: 22px;
            }
            #PARAGRAPH44 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #GROUP410 {
                top: 181.5px;
                left: -4px;
                width: 962px;
                height: 159.5px;
            }
            #GROUP50 {
                top: 2px;
                left: 319px;
                width: 308px;
                height: 157.5px;
            }
            #BOX51 {
                top: 0px;
                left: 4px;
                width: 84px;
                height: 79.5px;
            }
            #PARAGRAPH52 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 80px;
            }
            #PARAGRAPH52 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH53 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH53 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH54 {
                top: 125.5px;
                left: 1px;
                padding: 0px;
                width: 152px;
                height: 32px;
            }
            #PARAGRAPH54 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP45 {
                top: 1.5px;
                left: 1px;
                width: 308px;
                height: 120.5px;
            }
            #BOX46 {
                top: 0px;
                left: 4px;
                width: 84px;
                height: 79.5px;
            }
            #PARAGRAPH47 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 60px;
            }
            #PARAGRAPH47 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH48 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH48 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP55 {
                top: 0px;
                left: 655px;
                width: 308px;
                height: 141.5px;
            }
            #BOX56 {
                top: 0px;
                left: 4px;
                width: 84px;
                height: 79.5px;
            }
            #PARAGRAPH57 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 60px;
            }
            #PARAGRAPH57 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH58 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH58 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH59 {
                top: 125.5px;
                left: 1px;
                padding: 0px;
                width: 152px;
                height: 16px;
            }
            #PARAGRAPH59 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP411 {
                top: 384.641px;
                left: -3px;
                width: 962px;
                height: 122.5px;
            }
            #GROUP412 {
                top: 1.45313px;
                left: 655px;
                width: 308px;
                height: 120.5px;
            }
            #BOX413 {
                top: 0px;
                left: 4px;
                width: 84px;
                height: 79.5px;
            }
            #PARAGRAPH414 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 40px;
            }
            #PARAGRAPH414 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH415 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH415 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP417 {
                top: 3.45313px;
                left: 319px;
                width: 308px;
                height: 120.5px;
            }
            #BOX418 {
                top: 0px;
                left: 4px;
                width: 84px;
                height: 79.5px;
            }
            #PARAGRAPH419 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 40px;
            }
            #PARAGRAPH419 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH420 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH420 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP422 {
                top: 2.48438px;
                left: 1px;
                width: 308px;
                height: 120.5px;
            }
            #BOX423 {
                top: 0px;
                left: 4px;
                width: 84px;
                height: 79.5px;
            }
            #PARAGRAPH424 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 80px;
            }
            #PARAGRAPH424 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH425 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH425 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX233 {
                top: 104.965px;
                left: 473.003px;
                width: 487.98614501953125px;
                height: 611.99658203125px;
            }
            #GROUP235 {
                top: 94.30557250976562px;
                left: 79.9375px;
                width: 333.00347900390625px;
                height: 97.98611450195312px;
            }
            #GROUP236 {
                top: 0px;
                left: 8.86456298828125px;
                width: 317.3125228881836px;
                height: 98px;
            }
            #BOX237 {
                top: 28px;
                left: 1px;
                width: 73.77083587646484px;
                height: 70px;
            }
            #HEADLINE238 {
                top: 0px;
                left: 6.66668701171875px;
                padding: 0px;
                width: 66.22917175292969px;
                height: 18px;
            }
            #HEADLINE238 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE239 {
                top: 0px;
                left: 87.54168701171875px;
                padding: 0px;
                width: 66.22917175292969px;
                height: 18px;
            }
            #HEADLINE239 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX240 {
                top: 28px;
                left: 81.875px;
                width: 73.77083587646484px;
                height: 70px;
            }
            #BOX241 {
                top: 28px;
                left: 244.54168701171875px;
                width: 73.77083587646484px;
                height: 70px;
            }
            #HEADLINE242 {
                top: 0px;
                left: 245.93756103515625px;
                padding: 0px;
                width: 66.22917175292969px;
                height: 18px;
            }
            #HEADLINE242 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE243 {
                top: 0px;
                left: 168.31256103515625px;
                padding: 0px;
                width: 66.22917175292969px;
                height: 18px;
            }
            #HEADLINE243 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX244 {
                top: 28px;
                left: 162.60418701171875px;
                width: 73.77083587646484px;
                height: 70px;
            }
            #COUNTDOWN245 {
                top: 41.111114501953125px;
                left: 1px;
                width: 333.00347900390625px;
                height: 35.8506965637207px;
            }
            #COUNTDOWN245 > .widget-content {
                font-size: 36px;
            }
            #GROUP246 {
                top: 220px;
                left: 31.6875px;
                width: 422.0208435058594px;
                height: 345.3541717529297px;
            }
            #BUTTON247 {
                top: 258.6875px;
                left: 1px;
                padding: 0px;
                width: 418.97918701171875px;
                height: 86.66667175292969px;
            }
            #BUTTON247 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #FORM248 {
                top: 0px;
                left: 1px;
                width: 422.0208435058594px;
                height: 234.25px;
            }
            #FORM248 > .widget-content {
                font-size: 18px;
            }
            #ITEM_FORM249 {
                top: 0px;
                left: 1.4375px;
                width: 420.5833435058594px;
                height: 70.89583587646484px;
            }
            #ITEM_FORM249 > .widget-content {
                font-size: 18px;
            }
            #ITEM_FORM251 {
                top: 84.59px;
                left: 0.438123px;
                width: 420.5833435058594px;
                height: 70.89583587646484px;
            }
            #ITEM_FORM251 > .widget-content {
                font-size: 18px;
            }
            #ITEM_FORM261 {
                top: 167.963px;
                left: 0px;
                width: 422px;
                height: 66.29167175292969px;
            }
            #ITEM_FORM261 > .widget-content {
                font-size: 18px;
            }
            #HEADLINE234 {
                top: 9.6180419921875px;
                left: 24.982666015625px;
                padding: 0px;
                width: 448.888916015625px;
                height: 66.66667175292969px;
            }
            #HEADLINE234 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #HEADLINE268 {
                top: 850.667px;
                left: 10px;
                padding: 0px;
                width: 912px;
                height: 120px;
            }
            #HEADLINE268 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP252 {
                top: 107.8993148803711px;
                left: -57.979164123535156px;
                width: 494.01043701171875px;
                height: 419.39237213134766px;
            }
            #SHAPE253 {
                top: 0px;
                left: 206.97223663330078px;
                width: 57px;
                height: 57px;
            }
            #HEADLINE254 {
                top: 70.95486450195312px;
                left: 1px;
                padding: 0px;
                width: 494.01043701171875px;
                height: 71.11111450195312px;
            }
            #HEADLINE254 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX256 {
                top: 367.3958435058594px;
                left: 81.95487213134766px;
                width: 52px;
                height: 52px;
            }
            #SHAPE257 {
                top: 9px;
                left: 9px;
                width: 33px;
                height: 33px;
            }
            #BUTTON258 {
                top: 365.3993225097656px;
                left: 133.93402862548828px;
                padding: 0px;
                width: 250.00001525878906px;
                height: 53.333335876464844px;
            }
            #BUTTON258 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE285 {
                top: 355.975px;
                left: 1.01041px;
                padding: 0px;
                width: 409.045166015625px;
                height: 48.888893127441406px;
            }
            #HEADLINE285 > .widget-content {
                font-size: 43px;
                text-align: left;
            }
            #HEADLINE286 {
                top: 297.202px;
                left: 107px;
                padding: 0px;
                width: 200.00001525878906px;
                height: 44.4444465637207px;
            }
            #HEADLINE286 > .widget-content {
                font-size: 39px;
                text-align: left;
            }
        }
        
        #SECTION222 {
            display: block;
            background-image: url("https://static.ladipage.net/d/uploads/images/ef320418-ea3a-4379-bfa2-284fbdb05a21.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION222 > .ladi-widget-overlay {
            background-color: rgba(25, 25, 25, 0.75);
        }
        
        #SECTION9 {
            display: block;
            background-color: rgba(56, 142, 60, 1);
        }
        
        #SECTION36 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION94 {
            display: block;
            background-color: rgba(46, 125, 50, 1);
        }
        
        #POPUP441 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP441 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP436 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP436 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP430 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP430 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP404 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP404 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP400 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP400 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP395 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP395 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP386 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP386 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP380 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(46, 125, 50, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP380 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION205 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION321 {
            display: block;
            background-image: url("https://static.ladipage.net/d/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION321 > .ladi-widget-overlay {
            background-color: rgba(31, 31, 31, 0.89);
        }
        
        #SECTION42 {
            display: block;
            background-color: rgba(236, 240, 241, 1);
        }
        
        #SECTION232 {
            display: block;
            background-image: url("https://static.ladipage.net/d/uploads/images/5a8563a5-5f68-4470-b806-42ec62e2cac6.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION232 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #HEADLINE5 {
            display: block;
        }
        
        #HEADLINE5 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 55px;
            letter-spacing: 0px;
        }
        
        #HEADLINE171 {
            display: block;
        }
        
        #HEADLINE171 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 69px;
            letter-spacing: 0px;
        }
        
        #LINE174 {
            display: block;
        }
        
        #LINE174>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 9.5px;
        }
        
        #LINE174 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON178 {
            display: table;
        }
        
        #BUTTON178 > .widget-content {
            background-color: rgba(46, 125, 50, 1);
            color: #ffffff;
            font-weight: 700;
            line-height: 23px;
        }
        
        #BUTTON178> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON178> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX350 {
            display: block;
        }
        
        #BOX350 > .widget-content {
            background-color: rgba(56, 142, 60, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE353 {
            display: block;
        }
        
        #HEADLINE353 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE363 {
            display: block;
        }
        
        #HEADLINE363 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE365 {
            display: block;
        }
        
        #HEADLINE365 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #LINEVERTICAL354 {
            display: block;
        }
        
        #LINEVERTICAL354>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 2px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-left: 10.4921875px;
        }
        
        #LINEVERTICAL354 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL361 {
            display: block;
        }
        
        #LINEVERTICAL361>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 2px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-left: 10.4921875px;
        }
        
        #LINEVERTICAL361 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE360 {
            display: block;
        }
        
        #HEADLINE360 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE359 {
            display: block;
        }
        
        #HEADLINE359 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #IMAGE352 {
            display: block;
        }
        
        #IMAGE352 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE352 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #LINEVERTICAL362 {
            display: block;
        }
        
        #LINEVERTICAL362>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 2px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-left: 10.4921875px;
        }
        
        #LINEVERTICAL362 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL364 {
            display: block;
        }
        
        #LINEVERTICAL364>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 2px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-left: 10.4921875px;
        }
        
        #LINEVERTICAL364 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP11 {
            display: block;
        }
        
        #GROUP11 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP12 {
            display: block;
        }
        
        #GROUP12 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE13 {
            display: block;
        }
        
        #HEADLINE13 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 24px;
            letter-spacing: 2px;
        }
        
        #PARAGRAPH14 {
            display: block;
        }
        
        #PARAGRAPH14 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 21px;
            letter-spacing: 1px;
        }
        
        #SHAPE15 {
            display: block;
        }
        
        #SHAPE15 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE15> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP26 {
            display: block;
        }
        
        #GROUP26 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP27 {
            display: block;
        }
        
        #GROUP27 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE28 {
            display: block;
        }
        
        #HEADLINE28 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 24px;
            letter-spacing: 2px;
        }
        
        #PARAGRAPH29 {
            display: block;
        }
        
        #PARAGRAPH29 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 21px;
            letter-spacing: 1px;
        }
        
        #SHAPE30 {
            display: block;
        }
        
        #SHAPE30 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE30> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP31 {
            display: block;
        }
        
        #GROUP31 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP32 {
            display: block;
        }
        
        #GROUP32 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE33 {
            display: block;
        }
        
        #HEADLINE33 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 24px;
            letter-spacing: 2px;
        }
        
        #PARAGRAPH34 {
            display: block;
        }
        
        #PARAGRAPH34 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 21px;
            letter-spacing: 1px;
        }
        
        #SHAPE35 {
            display: block;
        }
        
        #SHAPE35 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE35> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE37 {
            display: block;
        }
        
        #HEADLINE37 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(23, 23, 23, 1);
            font-weight: 700;
            line-height: 37px;
        }
        
        #YOUTUBE180 {
            display: block;
        }
        
        #YOUTUBE180 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #YOUTUBE180> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #YOUTUBE180> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP41 {
            display: block;
        }
        
        #LISTOP41 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 22px;
        }
        
        #HEADLINE182 {
            display: block;
        }
        
        #HEADLINE182 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 24px;
        }
        
        #BUTTON447 {
            display: table;
        }
        
        #BUTTON447 > .widget-content {
            background-color: rgba(46, 125, 50, 1);
            color: #ffffff;
            font-weight: 700;
            line-height: 21px;
        }
        
        #BUTTON447> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON447> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE95 {
            display: block;
        }
        
        #HEADLINE95 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #GROUP144 {
            display: block;
        }
        
        #GROUP144 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX145 {
            display: block;
        }
        
        #BOX145 > .widget-content {
            background-color: rgba(6, 21, 64, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX145> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #BOX145> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #HEADLINE146 {
            display: block;
        }
        
        #HEADLINE146 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #HEADLINE147 {
            display: block;
        }
        
        #HEADLINE147 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX149 {
            display: block;
        }
        
        #BOX149 > .widget-content {
            background-image: url("https://static.ladipage.net/m/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX149> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #BOX149> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #BOX149 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX191 {
            display: block;
        }
        
        #BOX191 > .widget-content {
            background-color: rgba(6, 21, 64, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX191> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #BOX191> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #HEADLINE192 {
            display: block;
        }
        
        #HEADLINE192 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #HEADLINE193 {
            display: block;
        }
        
        #HEADLINE193 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX195 {
            display: block;
        }
        
        #BOX195 > .widget-content {
            background-color: rgba(6, 21, 64, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX195> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #BOX195> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #HEADLINE196 {
            display: block;
        }
        
        #HEADLINE196 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #HEADLINE197 {
            display: block;
        }
        
        #HEADLINE197 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX201 {
            display: block;
        }
        
        #BOX201 > .widget-content {
            background-image: url("https://cmo-togo.com/wp-content/uploads/2017/11/dashboard_icon1.png");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX201> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #BOX201> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #BOX201 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX202 {
            display: block;
        }
        
        #BOX202 > .widget-content {
            background-image: url("https://image.flaticon.com/icons/svg/216/216239.svg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(255, 138, 101, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX202> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #BOX202> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: #f1c40f;
        }
        
        #BOX202 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP117 {
            display: block;
        }
        
        #GROUP117 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX118 {
            display: block;
        }
        
        #BOX118 > .widget-content {
            background-color: rgba(6, 21, 64, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX118> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX118> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE119 {
            display: block;
        }
        
        #HEADLINE119 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #HEADLINE120 {
            display: block;
        }
        
        #HEADLINE120 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX122 {
            display: block;
        }
        
        #BOX122 > .widget-content {
            background-image: url("https://static.ladipage.net/m/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX122> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX122> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX122 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX183 {
            display: block;
        }
        
        #BOX183 > .widget-content {
            background-color: rgba(6, 21, 64, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX183> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX183> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE184 {
            display: block;
        }
        
        #HEADLINE184 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #HEADLINE185 {
            display: block;
        }
        
        #HEADLINE185 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX187 {
            display: block;
        }
        
        #BOX187 > .widget-content {
            background-color: rgba(6, 21, 64, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX187> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX187> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE188 {
            display: block;
        }
        
        #HEADLINE188 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #HEADLINE189 {
            display: block;
        }
        
        #HEADLINE189 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX199 {
            display: block;
        }
        
        #BOX199 > .widget-content {
            background-image: url("http://www.pvhc.net/img40/xqhvwugeksohjulylbjc.png");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(224, 247, 250, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX199> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX199> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX199 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX200 {
            display: block;
        }
        
        #BOX200 > .widget-content {
            background-image: url("https://cdn4.iconfinder.com/data/icons/business-and-office-9-1/64/494-512.png");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(77, 208, 225, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX200> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX200> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX200 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BUTTON448 {
            display: table;
        }
        
        #BUTTON448 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(46, 125, 50, 1);
            font-weight: 700;
            line-height: 21px;
        }
        
        #BUTTON448> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON448> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #PARAGRAPH446 {
            display: block;
        }
        
        #PARAGRAPH446 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #PARAGRAPH440 {
            display: block;
        }
        
        #PARAGRAPH440 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #PARAGRAPH434 {
            display: block;
        }
        
        #PARAGRAPH434 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #PARAGRAPH435 {
            display: block;
        }
        
        #PARAGRAPH435 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #PARAGRAPH409 {
            display: block;
        }
        
        #PARAGRAPH409 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #HEADLINE428 {
            display: block;
        }
        
        #HEADLINE428 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #PARAGRAPH429 {
            display: block;
        }
        
        #PARAGRAPH429 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE399 {
            display: block;
        }
        
        #HEADLINE399 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #PARAGRAPH394 {
            display: block;
        }
        
        #PARAGRAPH394 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #BOX381 {
            display: block;
        }
        
        #BOX381 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
        }
        
        #LINEVERTICAL383 {
            display: block;
        }
        
        #LINEVERTICAL383>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL383 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE206 {
            display: block;
        }
        
        #HEADLINE206 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 300;
            line-height: 34px;
        }
        
        #LINE211 {
            display: block;
        }
        
        #LINE211>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 87, 34, 1);
            margin-top: 10.5px;
        }
        
        #LINE211 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE208 {
            display: block;
        }
        
        #HEADLINE208 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 300;
            line-height: 28px;
        }
        
        #BOX212 {
            display: block;
        }
        
        #BOX212 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007673.jpg");
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
            box-shadow: 0px 0px 0px rgba(255, 87, 34, 1);
        }
        
        #BOX212> .widget-content {
            border-radius: 550px;
        }
        
        #BOX212> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #BOX212 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BUTTON449 {
            display: table;
        }
        
        #BUTTON449 > .widget-content {
            background-color: rgba(46, 125, 50, 1);
            color: #ffffff;
            font-weight: 700;
            line-height: 21px;
        }
        
        #BUTTON449> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON449> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #LISTOP267 {
            display: block;
        }
        
        #LISTOP267 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 26px;
        }
        
        #HEADLINE323 {
            display: block;
        }
        
        #HEADLINE323 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 38px;
        }
        
        #GROUP324 {
            display: block;
        }
        
        #GROUP324 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH325 {
            display: block;
        }
        
        #PARAGRAPH325 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 37px;
        }
        
        #PARAGRAPH333 {
            display: block;
        }
        
        #PARAGRAPH333 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #LINE334 {
            display: block;
        }
        
        #LINE334>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.16);
            margin-top: 12px;
        }
        
        #LINE334 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH335 {
            display: block;
        }
        
        #PARAGRAPH335 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 26px;
        }
        
        #IMAGE348 {
            display: block;
        }
        
        #IMAGE348 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE348> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE348> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE348 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE43 {
            display: block;
        }
        
        #HEADLINE43 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(3, 3, 3, 1);
            font-weight: 700;
            line-height: 30px;
        }
        
        #PARAGRAPH44 {
            display: block;
        }
        
        #PARAGRAPH44 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(107, 107, 107, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #GROUP410 {
            display: block;
        }
        
        #GROUP410 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP50 {
            display: block;
        }
        
        #GROUP50 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX51 {
            display: block;
        }
        
        #BOX51 > .widget-content {
            background-image: url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
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
        
        #BOX51> .widget-content {
            border-radius: 220px;
        }
        
        #BOX51> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #BOX51 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH52 {
            display: block;
        }
        
        #PARAGRAPH52 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 20px;
        }
        
        #PARAGRAPH53 {
            display: block;
        }
        
        #PARAGRAPH53 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 600;
            line-height: 18px;
        }
        
        #PARAGRAPH54 {
            display: block;
        }
        
        #PARAGRAPH54 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(150, 150, 150, 1);
            font-weight: 400;
            line-height: 16px;
        }
        
        #GROUP45 {
            display: block;
        }
        
        #GROUP45 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX46 {
            display: block;
        }
        
        #BOX46 > .widget-content {
            background-image: url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX46> .widget-content {
            border-radius: 220px;
        }
        
        #BOX46> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #BOX46 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH47 {
            display: block;
        }
        
        #PARAGRAPH47 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 20px;
        }
        
        #PARAGRAPH48 {
            display: block;
        }
        
        #PARAGRAPH48 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 600;
            line-height: 18px;
        }
        
        #GROUP55 {
            display: block;
        }
        
        #GROUP55 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX56 {
            display: block;
        }
        
        #BOX56 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19657448_1506657509398351_7206365245466502454_n-1513413033.jpg");
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX56> .widget-content {
            border-radius: 220px;
        }
        
        #BOX56> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #BOX56 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH57 {
            display: block;
        }
        
        #PARAGRAPH57 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 20px;
        }
        
        #PARAGRAPH58 {
            display: block;
        }
        
        #PARAGRAPH58 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 600;
            line-height: 18px;
        }
        
        #PARAGRAPH59 {
            display: block;
        }
        
        #PARAGRAPH59 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(150, 150, 150, 1);
            font-weight: 400;
            line-height: 16px;
        }
        
        #GROUP411 {
            display: block;
        }
        
        #GROUP411 > .widget-content {
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
        
        #BOX413 {
            display: block;
        }
        
        #BOX413 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/11390491_850585825022393_2193545903750965363_n-1513412320.jpg");
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX413> .widget-content {
            border-radius: 220px;
        }
        
        #BOX413> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #BOX413 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH414 {
            display: block;
        }
        
        #PARAGRAPH414 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 20px;
        }
        
        #PARAGRAPH415 {
            display: block;
        }
        
        #PARAGRAPH415 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 600;
            line-height: 18px;
        }
        
        #GROUP417 {
            display: block;
        }
        
        #GROUP417 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX418 {
            display: block;
        }
        
        #BOX418 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/10351598_470525099757357_3708220468651167693_n-1513412021.jpg");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
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
        
        #BOX418> .widget-content {
            border-radius: 220px;
        }
        
        #BOX418> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #BOX418 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH419 {
            display: block;
        }
        
        #PARAGRAPH419 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 20px;
        }
        
        #PARAGRAPH420 {
            display: block;
        }
        
        #PARAGRAPH420 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 600;
            line-height: 18px;
        }
        
        #GROUP422 {
            display: block;
        }
        
        #GROUP422 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX423 {
            display: block;
        }
        
        #BOX423 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19598512_2476784115796364_8480913555474826671_n-1513411462.jpg");
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX423> .widget-content {
            border-radius: 220px;
        }
        
        #BOX423> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #BOX423 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH424 {
            display: block;
        }
        
        #PARAGRAPH424 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 20px;
        }
        
        #PARAGRAPH425 {
            display: block;
        }
        
        #PARAGRAPH425 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(77, 77, 77, 1);
            font-weight: 600;
            line-height: 18px;
        }
        
        #BOX233 {
            display: block;
        }
        
        #BOX233 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX233> .widget-content {
            border-radius: 5px;
        }
        
        #BOX233> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #GROUP235 {
            display: block;
        }
        
        #GROUP235 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP236 {
            display: block;
        }
        
        #GROUP236 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX237 {
            display: block;
        }
        
        #BOX237 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX237> .widget-content {
            border-radius: 6px;
        }
        
        #BOX237> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #HEADLINE238 {
            display: block;
        }
        
        #HEADLINE238 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #HEADLINE239 {
            display: block;
        }
        
        #HEADLINE239 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #BOX240 {
            display: block;
        }
        
        #BOX240 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX240> .widget-content {
            border-radius: 6px;
        }
        
        #BOX240> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #BOX241 {
            display: block;
        }
        
        #BOX241 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX241> .widget-content {
            border-radius: 6px;
        }
        
        #BOX241> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #HEADLINE242 {
            display: block;
        }
        
        #HEADLINE242 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #HEADLINE243 {
            display: block;
        }
        
        #HEADLINE243 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #BOX244 {
            display: block;
        }
        
        #BOX244 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX244> .widget-content {
            border-radius: 6px;
        }
        
        #BOX244> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #COUNTDOWN245 {
            display: block;
        }
        
        #COUNTDOWN245 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 0px;
        }
        
        #GROUP246 {
            display: block;
        }
        
        #GROUP246 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON247 {
            display: table;
        }
        
        #BUTTON247 > .widget-content {
            background-color: #4db90a;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 32px;
        }
        
        #BUTTON247> .widget-content {
            border-radius: 2px;
        }
        
        #BUTTON247> .ladi-widget-overlay {
            border-radius: 2px;
        }
        
        #FORM248 {
            display: block;
        }
        
        #FORM248 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM248 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM248 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM248 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM248 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM249 {
            display: block;
        }
        
        #ITEM_FORM249 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM249> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM249> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM249 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM249 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM249 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM249 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM251 {
            display: block;
        }
        
        #ITEM_FORM251 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM251> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM251> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM251 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM251 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM251 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM251 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM261 {
            display: block;
        }
        
        #ITEM_FORM261 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM261> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM261> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM261 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM261 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM261 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM261 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #HEADLINE234 {
            display: block;
        }
        
        #HEADLINE234 > .widget-content {
            color: rgba(38, 38, 38, 1);
            font-weight: 700;
            line-height: 34px;
        }
        
        #HEADLINE268 {
            display: block;
        }
        
        #HEADLINE268 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #GROUP252 {
            display: block;
        }
        
        #GROUP252 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE253 {
            display: block;
        }
        
        #SHAPE253 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE253> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE254 {
            display: block;
        }
        
        #HEADLINE254 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #BOX256 {
            display: block;
        }
        
        #BOX256 > .widget-content {
            background-color: #4db90a;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX256> .widget-content {
            border-radius: 550px;
        }
        
        #BOX256> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #SHAPE257 {
            display: block;
        }
        
        #SHAPE257 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE257> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #BUTTON258 {
            display: table;
        }
        
        #BUTTON258 > .widget-content {
            background-color: rgba(77, 185, 10, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 27px;
        }
        
        #BUTTON258> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON258> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE285 {
            display: block;
        }
        
        #HEADLINE285 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 49px;
        }
        
        #HEADLINE286 {
            display: block;
        }
        
        #HEADLINE286 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 400;
            text-decoration: line-through;
            -webkit-text-decoration-line: line-through;
            line-height: 45px;
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION222 {
                width: 100%;
                height: 293.9930419921875px;
            }
            #SECTION222 .container {}
            #SECTION222 {
                background-image: linear-gradient(rgba(25, 25, 25, 0.75), rgba(25, 25, 25, 0.75)), url("https://static.ladipage.net/uploads/images/ef320418-ea3a-4379-bfa2-284fbdb05a21.jpg");
                background-image: -o-linear-gradient(rgba(25, 25, 25, 0.75), rgba(25, 25, 25, 0.75)), url("https://static.ladipage.net/uploads/images/ef320418-ea3a-4379-bfa2-284fbdb05a21.jpg");
                background-image: -ms-linear-gradient(rgba(25, 25, 25, 0.75), rgba(25, 25, 25, 0.75)), url("https://static.ladipage.net/uploads/images/ef320418-ea3a-4379-bfa2-284fbdb05a21.jpg");
                background-image: -moz-linear-gradient(rgba(25, 25, 25, 0.75), rgba(25, 25, 25, 0.75)), url("https://static.ladipage.net/uploads/images/ef320418-ea3a-4379-bfa2-284fbdb05a21.jpg");
                background-image: -webkit-linear-gradient(rgba(25, 25, 25, 0.75), rgba(25, 25, 25, 0.75)), url("https://static.ladipage.net/uploads/images/ef320418-ea3a-4379-bfa2-284fbdb05a21.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION9 {
                width: 320px;
                height: 729px;
            }
            #SECTION9 .container {}
            #SECTION9 {
                background-image: none;
            }
            #SECTION36 {
                width: 100%;
                height: 324.98784722222223px;
            }
            #SECTION36 .container {}
            #SECTION36 {
                background-image: none;
            }
            #SECTION94 {
                width: 100%;
                height: 2204px;
            }
            #SECTION94 .container {}
            #SECTION94 {
                background-image: none;
            }
            #POPUP441 {
                width: 100%;
                height: 100%;
            }
            #POPUP441 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP441 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP436 {
                width: 100%;
                height: 100%;
            }
            #POPUP436 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP436 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP430 {
                width: 100%;
                height: 100%;
            }
            #POPUP430 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP430 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP404 {
                width: 100%;
                height: 100%;
            }
            #POPUP404 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP404 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP400 {
                width: 100%;
                height: 100%;
            }
            #POPUP400 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP400 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP395 {
                width: 100%;
                height: 100%;
            }
            #POPUP395 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP395 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP386 {
                width: 100%;
                height: 100%;
            }
            #POPUP386 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP386 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP380 {
                width: 100%;
                height: 100%;
            }
            #POPUP380 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP380 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION205 {
                width: 100%;
                height: 629.000244140625px;
            }
            #SECTION205 .container {}
            #SECTION205 {
                background-image: none;
            }
            #SECTION321 {
                width: 100%;
                height: 690.5559539794922px;
            }
            #SECTION321 .container {}
            #SECTION321 {
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
            #SECTION42 {
                width: 100%;
                height: 180.140625px;
            }
            #SECTION42 .container {}
            #SECTION42 {
                background-image: none;
            }
            #SECTION232 {
                width: 100%;
                height: 916.40625px;
            }
            #SECTION232 .container {}
            #SECTION232 {
                background-image: url("https://static.ladipage.net/uploads/images/5a8563a5-5f68-4470-b806-42ec62e2cac6.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #HEADLINE5 {
                top: 43.993px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 240px;
            }
            #HEADLINE5 > .widget-content {
                font-size: 49px;
                text-align: center;
                line-height: 48px;
            }
            #HEADLINE171 {
                top: 37px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 95.96875px;
            }
            #HEADLINE171 > .widget-content {
                font-size: 63px;
                text-align: center;
                line-height: 48px;
            }
            #LINE174 {
                top: 79.5px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #BUTTON178 {
                top: 53px;
                left: 107.5px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON178 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BOX350 {
                top: -74.4922px;
                left: 10px;
                width: 355px;
                height: 191.9375px;
            }
            #HEADLINE353 {
                top: 59.875px;
                left: 71px;
                padding: 0px;
                width: 213px;
                height: 25px;
            }
            #HEADLINE353 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #HEADLINE363 {
                top: 60.2969px;
                left: 86.5px;
                padding: 0px;
                width: 182px;
                height: 25px;
            }
            #HEADLINE363 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #HEADLINE365 {
                top: 60.6406px;
                left: 68px;
                padding: 0px;
                width: 219px;
                height: 25px;
            }
            #HEADLINE365 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #LINEVERTICAL354 {
                top: 77px;
                left: 175px;
                width: 25px;
                height: 29.3125px;
            }
            #LINEVERTICAL361 {
                top: 76px;
                left: 175px;
                width: 25px;
                height: 29.3125px;
            }
            #HEADLINE360 {
                top: 59.6406px;
                left: 120px;
                padding: 0px;
                width: 115px;
                height: 25px;
            }
            #HEADLINE360 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #HEADLINE359 {
                top: 59.875px;
                left: 71px;
                padding: 0px;
                width: 213px;
                height: 25px;
            }
            #HEADLINE359 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #IMAGE352 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo_white-1513079500.png);
            }
            #IMAGE352 {
                top: -27.5088px;
                left: 86.5104px;
                width: 201.96875px;
                height: 205.4375px;
            }
            #LINEVERTICAL362 {
                top: 77px;
                left: 175px;
                width: 25px;
                height: 29.3125px;
            }
            #LINEVERTICAL364 {
                top: 77.3333px;
                left: 175px;
                width: 25px;
                height: 29.3125px;
            }
            #GROUP11 {
                top: 20px;
                left: 45px;
                width: 285px;
                height: 222.9375px;
            }
            #GROUP12 {
                top: 122px;
                left: 1px;
                width: 285px;
                height: 100.953125px;
            }
            #HEADLINE13 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 285px;
                height: 23.96875px;
            }
            #HEADLINE13 > .widget-content {
                font-size: 18px;
                text-align: center;
                line-height: 18px;
            }
            #PARAGRAPH14 {
                top: 41px;
                left: 42px;
                padding: 0px;
                width: 211px;
                height: 84px;
            }
            #PARAGRAPH14 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #SHAPE15 {
                top: 0px;
                left: 92px;
                width: 99.96875px;
                height: 99.96875px;
            }
            #GROUP26 {
                top: 253px;
                left: 45px;
                width: 285px;
                height: 222.9375px;
            }
            #GROUP27 {
                top: 122px;
                left: 1px;
                width: 285px;
                height: 100.953125px;
            }
            #HEADLINE28 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 285px;
                height: 23.96875px;
            }
            #HEADLINE28 > .widget-content {
                font-size: 18px;
                text-align: center;
                line-height: 18px;
            }
            #PARAGRAPH29 {
                top: 41px;
                left: 42px;
                padding: 0px;
                width: 211px;
                height: 84px;
            }
            #PARAGRAPH29 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #SHAPE30 {
                top: 0px;
                left: 92px;
                width: 99.96875px;
                height: 99.96875px;
            }
            #GROUP31 {
                top: 486px;
                left: 45px;
                width: 285px;
                height: 222.9375px;
            }
            #GROUP32 {
                top: 122px;
                left: 1px;
                width: 285px;
                height: 100.953125px;
            }
            #HEADLINE33 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 285px;
                height: 23.96875px;
            }
            #HEADLINE33 > .widget-content {
                font-size: 18px;
                text-align: center;
                line-height: 18px;
            }
            #PARAGRAPH34 {
                top: 40.9688px;
                left: 42px;
                padding: 0px;
                width: 210px;
                height: 84px;
            }
            #PARAGRAPH34 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #SHAPE35 {
                top: 0px;
                left: 92px;
                width: 99.96875px;
                height: 99.96875px;
            }
            #HEADLINE37 {
                top: 43px;
                left: 10px;
                padding: 0px;
                width: 354.96875px;
                height: 60px;
            }
            #HEADLINE37 > .widget-content {
                font-size: 31px;
                text-align: center;
                line-height: 30px;
            }
            #YOUTUBE180 {
                top: 167px;
                left: 10px;
                width: 354.96875px;
                height: 177.20486111111111px;
            }
            #LISTOP41 {
                top: 179.109px;
                left: 10px;
                width: 354.96875px;
                height: 392.875px;
            }
            #LISTOP41 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #LISTOP41 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 21px;
                height: 21px;
                font-size: 10.5px;
                color: rgba(56, 142, 60, 1);
                margin-right: 0px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(56,142,60,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP41 > ol.widget-content li {
                margin-bottom: 13px;
            }
            #LISTOP41 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE182 {
                top: 150px;
                left: 52.5px;
                padding: 0px;
                width: 270px;
                height: 23.28125px;
            }
            #HEADLINE182 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON447 {
                top: 627.563px;
                left: 113px;
                padding: 0px;
                width: 149px;
                height: 40px;
            }
            #BUTTON447 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #HEADLINE95 {
                top: 54px;
                left: 13.5px;
                padding: 0px;
                width: 347.96875px;
                height: 35.96875px;
            }
            #HEADLINE95 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP144 {
                top: 150px;
                left: 10px;
                width: 354.96875px;
                height: 690.953125px;
            }
            #BOX145 {
                top: 146px;
                left: 0px;
                width: 354.96875px;
                height: 158.96875px;
            }
            #HEADLINE146 {
                top: 24px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 26.953125px;
            }
            #HEADLINE146 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE147 {
                top: 55px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 71.953125px;
            }
            #HEADLINE147 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX149 {
                top: 20px;
                left: 118px;
                width: 118.953125px;
                height: 115.953125px;
            }
            #BOX149 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #BOX191 {
                top: 281px;
                left: 0px;
                width: 354.96875px;
                height: 167.96875px;
            }
            #HEADLINE192 {
                top: 24px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 26.953125px;
            }
            #HEADLINE192 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE193 {
                top: 55px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 71.953125px;
            }
            #HEADLINE193 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX195 {
                top: 523px;
                left: 0px;
                width: 354.96875px;
                height: 167.96875px;
            }
            #HEADLINE196 {
                top: 24px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 26.953125px;
            }
            #HEADLINE196 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE197 {
                top: 55px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 71.953125px;
            }
            #HEADLINE197 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX201 {
                top: 225px;
                left: 118px;
                width: 118.953125px;
                height: 115.953125px;
            }
            #BOX201 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://cmo-togo.com/wp-content/uploads/2017/11/dashboard_icon1.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://cmo-togo.com/wp-content/uploads/2017/11/dashboard_icon1.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://cmo-togo.com/wp-content/uploads/2017/11/dashboard_icon1.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://cmo-togo.com/wp-content/uploads/2017/11/dashboard_icon1.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://cmo-togo.com/wp-content/uploads/2017/11/dashboard_icon1.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #BOX202 {
                top: 467px;
                left: 118px;
                width: 118.953125px;
                height: 115.953125px;
            }
            #BOX202 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://image.flaticon.com/icons/svg/216/216239.svg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://image.flaticon.com/icons/svg/216/216239.svg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://image.flaticon.com/icons/svg/216/216239.svg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://image.flaticon.com/icons/svg/216/216239.svg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://image.flaticon.com/icons/svg/216/216239.svg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #GROUP117 {
                top: 150px;
                left: 10px;
                width: 354.96875px;
                height: 691.953125px;
            }
            #BOX118 {
                top: 146px;
                left: 0px;
                width: 354.96875px;
                height: 182.96875px;
            }
            #HEADLINE119 {
                top: 24px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 26.953125px;
            }
            #HEADLINE119 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE120 {
                top: 55px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 90px;
            }
            #HEADLINE120 > .widget-content {
                font-size: 24px;
                text-align: left;
                line-height: 30px;
            }
            #BOX122 {
                top: 20px;
                left: 118px;
                width: 118.953125px;
                height: 115.953125px;
            }
            #BOX122 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #BOX183 {
                top: 281px;
                left: 0px;
                width: 354.96875px;
                height: 167.96875px;
            }
            #HEADLINE184 {
                top: 24px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 26.953125px;
            }
            #HEADLINE184 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE185 {
                top: 55px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 60px;
            }
            #HEADLINE185 > .widget-content {
                font-size: 24px;
                text-align: left;
                line-height: 30px;
            }
            #BOX187 {
                top: 524px;
                left: 0px;
                width: 354.96875px;
                height: 167.96875px;
            }
            #HEADLINE188 {
                top: 24px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 26.953125px;
            }
            #HEADLINE188 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE189 {
                top: 55px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 90px;
            }
            #HEADLINE189 > .widget-content {
                font-size: 24px;
                text-align: left;
                line-height: 30px;
            }
            #BOX199 {
                top: 226px;
                left: 118px;
                width: 118.953125px;
                height: 115.953125px;
            }
            #BOX199 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("http://www.pvhc.net/img40/xqhvwugeksohjulylbjc.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("http://www.pvhc.net/img40/xqhvwugeksohjulylbjc.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("http://www.pvhc.net/img40/xqhvwugeksohjulylbjc.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("http://www.pvhc.net/img40/xqhvwugeksohjulylbjc.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("http://www.pvhc.net/img40/xqhvwugeksohjulylbjc.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #BOX200 {
                top: 469px;
                left: 118px;
                width: 118.953125px;
                height: 115.953125px;
            }
            #BOX200 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://cdn4.iconfinder.com/data/icons/business-and-office-9-1/64/494-512.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://cdn4.iconfinder.com/data/icons/business-and-office-9-1/64/494-512.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://cdn4.iconfinder.com/data/icons/business-and-office-9-1/64/494-512.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://cdn4.iconfinder.com/data/icons/business-and-office-9-1/64/494-512.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://cdn4.iconfinder.com/data/icons/business-and-office-9-1/64/494-512.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #BUTTON448 {
                top: 893.609px;
                left: 113px;
                padding: 0px;
                width: 149px;
                height: 39px;
            }
            #BUTTON448 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #PARAGRAPH446 {
                top: 40px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 138px;
            }
            #PARAGRAPH446 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #PARAGRAPH440 {
                top: 44px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 120px;
            }
            #PARAGRAPH440 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH434 {
                top: 98.5px;
                left: 47.5px;
                padding: 0px;
                width: 280px;
                height: 75px;
            }
            #PARAGRAPH434 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH435 {
                top: 31px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 192px;
            }
            #PARAGRAPH435 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH409 {
                top: 29.5px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 57px;
            }
            #PARAGRAPH409 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE428 {
                top: 142.5px;
                left: 87.5px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE428 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH429 {
                top: 67.5px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 198px;
            }
            #PARAGRAPH429 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE399 {
                top: 48.5px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 22px;
            }
            #HEADLINE399 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH394 {
                top: 55.8281px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 149.333px;
            }
            #PARAGRAPH394 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX381 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #LINEVERTICAL383 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #HEADLINE206 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 354.96875px;
                height: 66.625px;
            }
            #HEADLINE206 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #LINE211 {
                top: 150.667px;
                left: 116.5px;
                width: 141.9375px;
                height: 24.96875px;
            }
            #HEADLINE208 {
                top: 185.667px;
                left: 10px;
                padding: 0px;
                width: 354.96875px;
                height: 27.9375px;
            }
            #HEADLINE208 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #BOX212 {
                top: 109px;
                left: 67.5px;
                width: 240px;
                height: 240px;
            }
            #BOX212 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007673.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007673.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007673.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007673.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007673.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #BUTTON449 {
                top: 646.625px;
                left: 113px;
                padding: 0px;
                width: 149px;
                height: 40px;
            }
            #BUTTON449 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #LISTOP267 {
                top: 179.334px;
                left: 10px;
                width: 355px;
                height: 279px;
            }
            #LISTOP267 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #LISTOP267 > ol.widget-content li::before {
                content: counter(linum, none);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(230, 74, 25, 1);
                margin-right: 8px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(230,74,25,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP267 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP267 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE323 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 354.96875px;
                height: 75.53125px;
            }
            #HEADLINE323 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #GROUP324 {
                top: 442.577px;
                left: 37.5px;
                width: 300px;
                height: 377.9375px;
            }
            #PARAGRAPH325 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 73.296875px;
            }
            #PARAGRAPH325 > .widget-content {
                font-size: 31px;
                text-align: center;
            }
            #PARAGRAPH333 {
                top: 208px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 159.96875px;
            }
            #PARAGRAPH333 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LINE334 {
                top: 173px;
                left: 0px;
                width: 300px;
                height: 24.96875px;
            }
            #PARAGRAPH335 {
                top: 103.333px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 51.09375px;
            }
            #PARAGRAPH335 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #IMAGE348 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png);
            }
            #IMAGE348 {
                top: 105.556px;
                left: 47.0746px;
                width: 280.8125px;
                height: 272.984375px;
            }
            #HEADLINE43 {
                top: 74px;
                left: 10px;
                padding: 0px;
                width: 354.96875px;
                height: 29.28125px;
            }
            #HEADLINE43 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 30px;
            }
            #PARAGRAPH44 {
                top: 90px;
                left: 10px;
                padding: 0px;
                width: 354.96875px;
                height: 39.96875px;
            }
            #PARAGRAPH44 > .widget-content {
                font-size: 16px;
                text-align: center;
                line-height: 20px;
            }
            #GROUP410 {
                top: 181.5px;
                left: 10px;
                width: 355px;
                height: 159.5px;
            }
            #GROUP50 {
                top: 2px;
                left: 23.5px;
                width: 308px;
                height: 157.5px;
            }
            #BOX51 {
                top: 0px;
                left: 4px;
                width: 83.96875px;
                height: 79.453125px;
            }
            #BOX51 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #PARAGRAPH52 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 80px;
            }
            #PARAGRAPH52 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH53 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH53 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH54 {
                top: 125.5px;
                left: 1px;
                padding: 0px;
                width: 152px;
                height: 32px;
            }
            #PARAGRAPH54 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP45 {
                top: 1.5px;
                left: 23.5px;
                width: 308px;
                height: 120.5px;
            }
            #BOX46 {
                top: 0px;
                left: 3px;
                width: 83.96875px;
                height: 79.453125px;
            }
            #BOX46 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #PARAGRAPH47 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 60px;
            }
            #PARAGRAPH47 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH48 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH48 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP55 {
                top: 0px;
                left: 23.5px;
                width: 308px;
                height: 141.5px;
            }
            #BOX56 {
                top: 0px;
                left: 4px;
                width: 83.96875px;
                height: 79.453125px;
            }
            #BOX56 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19657448_1506657509398351_7206365245466502454_n-1513413033.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19657448_1506657509398351_7206365245466502454_n-1513413033.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19657448_1506657509398351_7206365245466502454_n-1513413033.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19657448_1506657509398351_7206365245466502454_n-1513413033.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19657448_1506657509398351_7206365245466502454_n-1513413033.jpg");
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #PARAGRAPH57 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 60px;
            }
            #PARAGRAPH57 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH58 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH58 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH59 {
                top: 125.5px;
                left: 1px;
                padding: 0px;
                width: 152px;
                height: 16px;
            }
            #PARAGRAPH59 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP411 {
                top: 420.219px;
                left: 10px;
                width: 355px;
                height: 122.5px;
            }
            #GROUP412 {
                top: 0px;
                left: 23.5px;
                width: 308px;
                height: 120.5px;
            }
            #BOX413 {
                top: 0px;
                left: 4px;
                width: 84px;
                height: 79.5px;
            }
            #BOX413 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/11390491_850585825022393_2193545903750965363_n-1513412320.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/11390491_850585825022393_2193545903750965363_n-1513412320.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/11390491_850585825022393_2193545903750965363_n-1513412320.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/11390491_850585825022393_2193545903750965363_n-1513412320.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/11390491_850585825022393_2193545903750965363_n-1513412320.jpg");
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #PARAGRAPH414 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 40px;
            }
            #PARAGRAPH414 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH415 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH415 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP417 {
                top: 2px;
                left: 23.5px;
                width: 308px;
                height: 120.5px;
            }
            #BOX418 {
                top: 0px;
                left: 4px;
                width: 84px;
                height: 79.5px;
            }
            #BOX418 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/10351598_470525099757357_3708220468651167693_n-1513412021.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/10351598_470525099757357_3708220468651167693_n-1513412021.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/10351598_470525099757357_3708220468651167693_n-1513412021.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/10351598_470525099757357_3708220468651167693_n-1513412021.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/10351598_470525099757357_3708220468651167693_n-1513412021.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #PARAGRAPH419 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 40px;
            }
            #PARAGRAPH419 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH420 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH420 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP422 {
                top: 1.01563px;
                left: 23.5px;
                width: 308px;
                height: 120.5px;
            }
            #BOX423 {
                top: 0px;
                left: 4px;
                width: 84px;
                height: 79.5px;
            }
            #BOX423 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19598512_2476784115796364_8480913555474826671_n-1513411462.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19598512_2476784115796364_8480913555474826671_n-1513411462.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19598512_2476784115796364_8480913555474826671_n-1513411462.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19598512_2476784115796364_8480913555474826671_n-1513411462.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/19598512_2476784115796364_8480913555474826671_n-1513411462.jpg");
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #PARAGRAPH424 {
                top: 4px;
                left: 98px;
                padding: 0px;
                width: 211px;
                height: 80px;
            }
            #PARAGRAPH424 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH425 {
                top: 102.5px;
                left: 1px;
                padding: 0px;
                width: 242px;
                height: 18px;
            }
            #PARAGRAPH425 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX233 {
                top: 20px;
                left: 37.5px;
                width: 300px;
                height: 385.34375px;
            }
            #GROUP235 {
                top: 74px;
                left: 0px;
                width: 300px;
                height: 97.96875px;
            }
            #GROUP236 {
                top: 0px;
                left: 1.8125px;
                width: 294.28125px;
                height: 97.96875px;
            }
            #BOX237 {
                top: 28px;
                left: 1px;
                width: 68.4375px;
                height: 69.96875px;
            }
            #HEADLINE238 {
                top: 0px;
                left: 6.25px;
                padding: 0px;
                width: 61.40625px;
                height: 17.96875px;
            }
            #HEADLINE238 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE239 {
                top: 0px;
                left: 81.2656px;
                padding: 0px;
                width: 61.40625px;
                height: 17.96875px;
            }
            #HEADLINE239 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX240 {
                top: 28px;
                left: 76px;
                width: 68.4375px;
                height: 69.96875px;
            }
            #BOX241 {
                top: 28px;
                left: 226.891px;
                width: 68.4375px;
                height: 69.96875px;
            }
            #HEADLINE242 {
                top: 0px;
                left: 228.172px;
                padding: 0px;
                width: 61.40625px;
                height: 17.96875px;
            }
            #HEADLINE242 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE243 {
                top: 0px;
                left: 156.172px;
                padding: 0px;
                width: 61.40625px;
                height: 17.96875px;
            }
            #HEADLINE243 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX244 {
                top: 28px;
                left: 150.875px;
                width: 68.4375px;
                height: 69.96875px;
            }
            #COUNTDOWN245 {
                top: 40px;
                left: 1px;
                width: 297.9375px;
                height: 42.9375px;
            }
            #COUNTDOWN245 > .widget-content {
                font-size: 36px;
            }
            #GROUP246 {
                top: 98px;
                left: 16px;
                width: 267.9375px;
                height: 277.34375px;
            }
            #BUTTON247 {
                top: 258.688px;
                left: 0px;
                padding: 0px;
                width: 264px;
                height: 87px;
            }
            #BUTTON247 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #FORM248 {
                top: 20px;
                left: 0px;
                width: 267.9375px;
                height: 241.46875px;
            }
            #FORM248 > .widget-content {
                font-size: 18px;
            }
            #ITEM_FORM249 {
                top: 20px;
                left: 0px;
                width: 267.9375px;
                height: 46.09375px;
            }
            #ITEM_FORM249 > .widget-content {
                font-size: 18px;
            }
            #ITEM_FORM251 {
                top: 132.281px;
                left: 0px;
                width: 267.9375px;
                height: 46.09375px;
            }
            #ITEM_FORM251 > .widget-content {
                font-size: 18px;
            }
            #ITEM_FORM261 {
                top: 188.406px;
                left: 0px;
                width: 267.9375px;
                height: 43.125px;
            }
            #ITEM_FORM261 > .widget-content {
                font-size: 18px;
            }
            #HEADLINE234 {
                top: 9.61804px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 42.1875px;
            }
            #HEADLINE234 > .widget-content {
                font-size: 25px;
                text-align: center;
                line-height: 22px;
            }
            #HEADLINE268 {
                top: 845.167px;
                left: 10px;
                padding: 0px;
                width: 354.96875px;
                height: 210px;
            }
            #HEADLINE268 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP252 {
                top: 499.406px;
                left: 37px;
                width: 300.953125px;
                height: 224.734375px;
            }
            #SHAPE253 {
                top: 20px;
                left: 122px;
                width: 56.953125px;
                height: 56.953125px;
            }
            #HEADLINE254 {
                top: 70.9549px;
                left: 0px;
                padding: 0px;
                width: 300.953125px;
                height: 142.1875px;
            }
            #HEADLINE254 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX256 {
                top: 152.111px;
                left: 124.5px;
                width: 51.9375px;
                height: 51.9375px;
            }
            #SHAPE257 {
                top: 9px;
                left: 9px;
                width: 32.96875px;
                height: 32.96875px;
            }
            #BUTTON258 {
                top: 365.399px;
                left: 25.4948px;
                padding: 0px;
                width: 248px;
                height: 54px;
            }
            #BUTTON258 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE285 {
                top: 356.076px;
                left: 10px;
                padding: 0px;
                width: 354.96875px;
                height: 48.84375px;
            }
            #HEADLINE285 > .widget-content {
                font-size: 43px;
                text-align: left;
            }
            #HEADLINE286 {
                top: 297.202px;
                left: 87.5px;
                padding: 0px;
                width: 199.96875px;
                height: 44.421875px;
            }
            #HEADLINE286 > .widget-content {
                font-size: 39px;
                text-align: left;
            }
        }
    </style>
