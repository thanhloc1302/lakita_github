
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
            var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Athiti:400,600,700|Roboto:300,400,700|Source+Sans+Pro:300,400,600,700&amp;subset=latin-ext,vietnamese';
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
        ;
        .widget-element textarea,
        ;
        body input,
        ;
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
            #SECTION172 {
                width: 100%;
                height: 568.96875px;
            }
            #SECTION172 .container {}
            #SECTION172 {}
            #SECTION132 {
                width: 100%;
                height: 725px;
            }
            #SECTION132 .container {}
            #SECTION132 {}
            #SECTION32 {
                width: 100%;
                height: 456px;
            }
            #SECTION32 .container {}
            #SECTION32 {}
            #SECTION12 {
                width: 100%;
                height: 498px;
            }
            #SECTION12 .container {}
            #SECTION12 {}
            #SECTION88 {
                width: 100%;
                height: 589.953125px;
            }
            #SECTION88 .container {}
            #SECTION88 {}
            #SECTION53 {
                width: 100%;
                height: 455px;
            }
            #SECTION53 .container {}
            #SECTION53 {}
            #SECTION111 {
                width: 100%;
                height: 667px;
            }
            #SECTION111 .container {}
            #SECTION111 {}
            #SECTION231 {
                width: 100%;
                height: 506px;
            }
            #SECTION231 .container {}
            #SECTION231 {}
            #GROUP175 {
                top: 125px;
                left: -9px;
                width: 463px;
                height: 322px;
            }
            #HEADLINE176 {
                top: 0px;
                left: 10px;
                padding: 0px;
                width: 454px;
                height: 153px;
            }
            #HEADLINE176 > .widget-content {
                font-size: 45px;
                text-align: left;
            }
            #HEADLINE177 {
                top: 174px;
                left: 9px;
                padding: 0px;
                width: 449px;
                height: 52px;
            }
            #HEADLINE177 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE178 {
                top: 256px;
                left: 1px;
                padding: 0px;
                width: 424px;
                height: 40px;
            }
            #HEADLINE178 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #LINE179 {
                top: 227px;
                left: 11px;
                width: 406px;
                height: 25px;
            }
            #IMAGE365 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848A0512-1512985005.png);
            }
            #IMAGE365 {
                top: 61px;
                left: 462.012px;
                width: 476.140625px;
                height: 395px;
            }
            #LINE135 {
                top: 137px;
                left: 420.969px;
                width: 119px;
                height: 25px;
            }
            #GROUP148 {
                top: 161.984375px;
                left: 654.640625px;
                width: 304px;
                height: 323.28125px;
            }
            #HEADLINE149 {
                top: 147.984375px;
                left: 20px;
                padding: 0px;
                width: 257.5px;
                height: 17.5px;
            }
            #HEADLINE149 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE150 {
                top: 125.34375px;
                left: 85.484375px;
                padding: 0px;
                width: 132px;
                height: 20px;
            }
            #HEADLINE150 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX151 {
                top: 0px;
                left: 91.34375px;
                width: 104.140625px;
                height: 109.00390625px;
            }
            #BOX152 {
                top: 190.28125px;
                left: 1px;
                width: 304px;
                height: 133px;
            }
            #PARAGRAPH153 {
                top: 26.5px;
                left: 33.5px;
                padding: 0px;
                width: 236.25px;
                height: 52.5px;
            }
            #PARAGRAPH153 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP199 {
                top: 161.984375px;
                left: -1px;
                width: 304px;
                height: 324.265625px;
            }
            #HEADLINE137 {
                top: 144.96875px;
                left: 51.96875px;
                padding: 0px;
                width: 220px;
                height: 35px;
            }
            #HEADLINE137 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE138 {
                top: 119.75px;
                left: 60.484375px;
                padding: 0px;
                width: 217.91015625px;
                height: 20px;
            }
            #HEADLINE138 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX139 {
                top: 0px;
                left: 117.984375px;
                width: 111.9921875px;
                height: 110.01953125px;
            }
            #BOX140 {
                top: 191.265625px;
                left: 1px;
                width: 304px;
                height: 133px;
            }
            #PARAGRAPH141 {
                top: 26.5px;
                left: 33.5px;
                padding: 0px;
                width: 236.25px;
                height: 87.5px;
            }
            #PARAGRAPH141 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP337 {
                top: 507.96875px;
                left: 151px;
                width: 631px;
                height: 151px;
            }
            #HEADLINE338 {
                top: 131px;
                left: 1px;
                padding: 0px;
                width: 631px;
                height: 20px;
            }
            #HEADLINE338 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX340 {
                top: 0px;
                left: 269px;
                width: 121px;
                height: 121px;
            }
            #HEADLINE341 {
                top: 38px;
                left: 251px;
                padding: 0px;
                width: 154px;
                height: 42px;
            }
            #HEADLINE341 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #GROUP142 {
                top: 162px;
                left: 325px;
                width: 304px;
                height: 322.265625px;
            }
            #HEADLINE143 {
                top: 142.984375px;
                left: 51.484375px;
                padding: 0px;
                width: 201.25px;
                height: 17.5px;
            }
            #HEADLINE143 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE144 {
                top: 122.984375px;
                left: 45px;
                padding: 0px;
                width: 216px;
                height: 20px;
            }
            #HEADLINE144 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX146 {
                top: 189.265625px;
                left: 1px;
                width: 304px;
                height: 133px;
            }
            #PARAGRAPH147 {
                top: 28.1797px;
                left: 35.2969px;
                padding: 0px;
                width: 236.25px;
                height: 70px;
            }
            #PARAGRAPH147 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX145 {
                top: 0px;
                left: 96.9375px;
                width: 111.9921875px;
                height: 108.02734375px;
            }
            #HEADLINE133 {
                top: 72.9688px;
                left: 116px;
                padding: 0px;
                width: 713px;
                height: 28px;
            }
            #HEADLINE133 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #PARAGRAPH134 {
                top: 100px;
                left: 202.516px;
                padding: 0px;
                width: 555px;
                height: 18px;
            }
            #PARAGRAPH134 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #LINE43 {
                top: 122px;
                left: 490px;
                width: 98px;
                height: 25px;
            }
            #HEADLINE44 {
                top: 60px;
                left: 490px;
                padding: 0px;
                width: 395px;
                height: 52px;
            }
            #HEADLINE44 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH34 {
                top: 158px;
                left: 490px;
                padding: 0px;
                width: 435.390625px;
                height: 100px;
            }
            #PARAGRAPH34 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LISTOP262 {
                top: 272px;
                left: 483px;
                width: 479px;
                height: 140px;
            }
            #LISTOP262 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #LISTOP262 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 15px;
                height: 15px;
                top: 2px;
                font-size: 7.5px;
                margin-right: 8px;
                content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.4-.188-2.794-.688-4.094L26.688 13.5c.2.8.313 1.6.313 2.5 0 6.1-4.9 11-11 11S5 22.1 5 16 9.9 5 16 5c3 0 5.694 1.194 7.594 3.094L25 6.688C22.7 4.388 19.5 3 16 3zm11.28 4.28L16 18.563l-4.28-4.28-1.44 1.437 5 5 .72.686.72-.687 12-12-1.44-1.44z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP262 > ol.widget-content li {
                margin-bottom: 10px;
            }
            #LISTOP262 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX296 {
                top: 32.027px;
                left: 69px;
                width: 367.03125px;
                height: 398px;
            }
            #HEADLINE297 {
                top: 28px;
                left: 18px;
                padding: 0px;
                width: 340.5px;
                height: 54px;
            }
            #HEADLINE297 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #GROUP298 {
                top: 118.953125px;
                left: 39.625px;
                width: 300px;
                height: 230.96875px;
            }
            #FORM299 {
                top: 0px;
                left: 1px;
                width: 300px;
                height: 163.984375px;
            }
            #FORM299 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM300 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 46.140625px;
            }
            #ITEM_FORM300 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM301 {
                top: 58.9268px;
                left: 0px;
                width: 300px;
                height: 46.140625px;
            }
            #ITEM_FORM301 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM302 {
                top: 117.854px;
                left: 0px;
                width: 300px;
                height: 46.140625px;
            }
            #ITEM_FORM302 > .widget-content {
                font-size: 16px;
            }
            #BUTTON303 {
                top: 180.96875px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 49.5px;
            }
            #BUTTON303 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP15 {
                top: 153.984375px;
                left: 0px;
                width: 905.984375px;
                height: 198px;
            }
            #BOX16 {
                top: 0px;
                left: 81.984375px;
                width: 121px;
                height: 121px;
            }
            #HEADLINE18 {
                top: 146.984375px;
                left: 62.984375px;
                padding: 0px;
                width: 154px;
                height: 20px;
            }
            #HEADLINE18 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #PARAGRAPH19 {
                top: 180px;
                left: 1px;
                padding: 0px;
                width: 274px;
                height: 18px;
            }
            #PARAGRAPH19 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE326 {
                top: 30.96875px;
                left: 63.984375px;
                padding: 0px;
                width: 154px;
                height: 58px;
            }
            #HEADLINE326 > .widget-content {
                font-size: 52px;
                text-align: center;
            }
            #HEADLINE332 {
                top: 31.96875px;
                left: 401.984375px;
                padding: 0px;
                width: 154px;
                height: 58px;
            }
            #HEADLINE332 > .widget-content {
                font-size: 52px;
                text-align: center;
            }
            #HEADLINE336 {
                top: 30.96875px;
                left: 752.984375px;
                padding: 0px;
                width: 154px;
                height: 58px;
            }
            #HEADLINE336 > .widget-content {
                font-size: 52px;
                text-align: center;
            }
            #HEADLINE23 {
                top: 299.031px;
                left: 402px;
                padding: 0px;
                width: 154px;
                height: 20px;
            }
            #HEADLINE23 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #PARAGRAPH24 {
                top: 332.031px;
                left: 349px;
                padding: 0px;
                width: 268px;
                height: 108px;
            }
            #PARAGRAPH24 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX21 {
                top: 153.031px;
                left: 419px;
                width: 121px;
                height: 121px;
            }
            #PARAGRAPH366 {
                top: 333.984px;
                left: 17px;
                padding: 0px;
                width: 268px;
                height: 90px;
            }
            #PARAGRAPH366 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP25 {
                top: 156px;
                left: 685px;
                width: 277px;
                height: 250px;
            }
            #BOX26 {
                top: 0px;
                left: 85px;
                width: 121px;
                height: 121px;
            }
            #PARAGRAPH29 {
                top: 178px;
                left: 1px;
                padding: 0px;
                width: 277px;
                height: 72px;
            }
            #PARAGRAPH29 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE28 {
                top: 146px;
                left: 67px;
                padding: 0px;
                width: 154px;
                height: 20px;
            }
            #HEADLINE28 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE41 {
                top: 47px;
                left: 312px;
                padding: 0px;
                width: 345px;
                height: 29px;
            }
            #HEADLINE41 > .widget-content {
                font-size: 23px;
                text-align: center;
            }
            #LINE42 {
                top: 96.9688px;
                left: 434px;
                width: 98px;
                height: 25px;
            }
            #HEADLINE90 {
                top: 105.032px;
                left: 119px;
                padding: 0px;
                width: 472px;
                height: 30px;
            }
            #HEADLINE90 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH91 {
                top: 105.031px;
                left: 500px;
                padding: 0px;
                width: 460px;
                height: 420px;
            }
            #PARAGRAPH91 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #YOUTUBE89 {
                top: 185px;
                left: 17px;
                width: 430px;
                height: 248px;
            }
            #HEADLINE270 {
                top: 135.05px;
                left: 80px;
                padding: 0px;
                width: 308.0078125px;
                height: 23.75px;
            }
            #HEADLINE270 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE342 {
                top: 27px;
                left: 306px;
                padding: 0px;
                width: 345px;
                height: 22px;
            }
            #HEADLINE342 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE61 {
                top: 63.9531px;
                left: 125px;
                padding: 0px;
                width: 345px;
                height: 44px;
            }
            #HEADLINE61 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH57 {
                top: 161.047px;
                left: 13px;
                padding: 0px;
                width: 444px;
                height: 231px;
            }
            #PARAGRAPH57 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #YOUTUBE343 {
                top: 97.047px;
                left: 490px;
                width: 449px;
                height: 271px;
            }
            #PARAGRAPH344 {
                top: 86px;
                left: 84px;
                padding: 0px;
                width: 462px;
                height: 20px;
            }
            #PARAGRAPH344 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #SHAPE70 {
                top: 263px;
                left: 214px;
                width: 51px;
                height: 51px;
            }
            #LINE60 {
                top: 107.953px;
                left: 191px;
                width: 98px;
                height: 25px;
            }
            #LINE113 {
                top: 105px;
                left: 0px;
                width: 960px;
                height: 25px;
            }
            #HEADLINE118 {
                top: 50px;
                left: 82px;
                padding: 0px;
                width: 793px;
                height: 22px;
            }
            #HEADLINE118 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH265 {
                top: 157.047px;
                left: 477px;
                padding: 0px;
                width: 415px;
                height: 120px;
            }
            #PARAGRAPH265 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #SHAPE345 {
                top: 149.687px;
                left: 443px;
                width: 27px;
                height: 27px;
            }
            #SHAPE354 {
                top: 201.672px;
                left: 443px;
                width: 27px;
                height: 27px;
            }
            #SHAPE355 {
                top: 253.672px;
                left: 443px;
                width: 27px;
                height: 27px;
            }
            #BUTTON356 {
                top: 322.953px;
                left: 535px;
                padding: 0px;
                width: 315px;
                height: 90px;
            }
            #BUTTON356 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #BOX346 {
                top: 137.047px;
                left: 69px;
                width: 323px;
                height: 469px;
            }
            #HEADLINE347 {
                top: 26px;
                left: 35px;
                padding: 0px;
                width: 288px;
                height: 26.666667938232422px;
            }
            #HEADLINE347 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #FORM348 {
                top: 80px;
                left: 27.9883px;
                width: 261.9921875px;
                height: 284.00390625px;
            }
            #ITEM_FORM349 {
                top: 55.5441px;
                left: 0px;
                width: 262px;
                height: 40.6875px;
            }
            #ITEM_FORM350 {
                top: 111.089px;
                left: 0px;
                width: 262px;
                height: 40.6875px;
            }
            #ITEM_FORM351 {
                top: 160.633px;
                left: 0px;
                width: 262px;
                height: 123.390625px;
            }
            #ITEM_FORM352 {
                top: 0px;
                left: 0px;
                width: 262px;
                height: 40.6875px;
            }
            #BUTTON353 {
                top: 387px;
                left: 28.9792px;
                padding: 0px;
                width: 262.66668701171875px;
                height: 48px;
            }
            #BUTTON353 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BOX357 {
                top: 433.047px;
                left: 535px;
                width: 312.28125px;
                height: 101px;
            }
            #GROUP358 {
                top: 22px;
                left: 14px;
                width: 283px;
                height: 17px;
            }
            #PARAGRAPH359 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH359 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH360 {
                top: 0px;
                left: 74px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH360 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH361 {
                top: 0px;
                left: 148px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH361 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH362 {
                top: 0px;
                left: 223px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH362 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #COUNTDOWN363 {
                top: 38px;
                left: 10px;
                width: 298px;
                height: 45px;
            }
            #COUNTDOWN363 > .widget-content {
                font-size: 36px;
            }
            #HEADLINE369 {
                top: 329.86px;
                left: 711px;
                padding: 0px;
                width: 288px;
                height: 62px;
            }
            #HEADLINE369 > .widget-content {
                font-size: 56px;
                text-align: left;
            }
            #HEADLINE364 {
                top: 550.047px;
                left: 491px;
                padding: 0px;
                width: 397px;
                height: 22px;
            }
            #HEADLINE364 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE232 {
                top: 53px;
                left: 381px;
                padding: 0px;
                width: 198px;
                height: 28px;
            }
            #HEADLINE232 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE234 {
                top: 137.66px;
                left: 769px;
                padding: 0px;
                width: 248px;
                height: 22px;
            }
            #HEADLINE234 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP235 {
                top: 140px;
                left: -6.76171875px;
                width: 351.89453125px;
                height: 129.98046875px;
            }
            #HEADLINE236 {
                top: 0px;
                left: 8.75390625px;
                padding: 0px;
                width: 248px;
                height: 22px;
            }
            #HEADLINE236 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP237 {
                top: 50.9765625px;
                left: 1px;
                width: 351.89453125px;
                height: 21.25px;
            }
            #SHAPE238 {
                top: 0.99609375px;
                left: 1px;
                width: 28.49609375px;
                height: 20px;
            }
            #PARAGRAPH239 {
                top: 0px;
                left: 32.6445px;
                padding: 0px;
                width: 316.25px;
                height: 21.25px;
            }
            #PARAGRAPH239 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP243 {
                top: 107.98828125px;
                left: 7.69921875px;
                width: 247.98828125px;
                height: 21.9921875px;
            }
            #SHAPE244 {
                top: 0.99609375px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #PARAGRAPH245 {
                top: 0px;
                left: 26px;
                padding: 0px;
                width: 222.5px;
                height: 21.25px;
            }
            #PARAGRAPH245 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #SHAPE241 {
                top: 80.9765625px;
                left: 8.51953125px;
                width: 20px;
                height: 20px;
            }
            #PARAGRAPH242 {
                top: 79.98046875px;
                left: 33.51953125px;
                padding: 0px;
                width: 145px;
                height: 21.25px;
            }
            #PARAGRAPH242 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BUTTON257 {
                top: 318px;
                left: 668px;
                padding: 0px;
                width: 102px;
                height: 35px;
            }
            #BUTTON257 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #FORM258 {
                top: 175px;
                left: 667.969px;
                width: 266.9921875px;
                height: 132.890625px;
            }
            #ITEM_FORM259 {
                top: 0px;
                left: 0px;
                width: 267px;
                height: 37.390625px;
            }
            #ITEM_FORM260 {
                top: 46.4789px;
                left: 0px;
                width: 267px;
                height: 37.390625px;
            }
            #ITEM_FORM261 {
                top: 95.5197px;
                left: 0px;
                width: 267px;
                height: 37.390625px;
            }
            #HEADLINE271 {
                top: 197.336px;
                left: 428px;
                padding: 0px;
                width: 246px;
                height: 27px;
            }
            #HEADLINE271 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE272 {
                top: 138.629px;
                left: 357.98px;
                padding: 0px;
                width: 288px;
                height: 22px;
            }
            #HEADLINE272 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #FACEBOOK_MESSAGES273 {
                top: 179.316px;
                left: 352.988px;
                width: 265px;
                height: 210px;
            }
        }
        
        #SECTION172 {
            display: block;
            background-image: url("https://static.ladipage.net/uploads/images/2a1ae041-4f89-4d94-b525-a965b6a0c55d.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION172 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION132 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION32 {
            display: block;
            background-color: rgba(240, 240, 240, 0.46);
        }
        
        #SECTION12 {
            display: block;
            background-color: rgba(255, 255, 255, 0);
        }
        
        #SECTION88 {
            display: block;
            background-color: rgba(255, 196, 0, 1);
        }
        
        #SECTION53 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION111 {
            display: block;
            background-color: rgba(25, 32, 48, 1);
        }
        
        #SECTION231 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #GROUP175 {
            display: block;
        }
        
        #GROUP175 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE176 {
            display: block;
        }
        
        #HEADLINE176 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 300;
            line-height: 51px;
        }
        
        #HEADLINE177 {
            display: block;
        }
        
        #HEADLINE177 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 193, 7, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 26px;
            letter-spacing: 3px;
        }
        
        #HEADLINE178 {
            display: block;
        }
        
        #HEADLINE178 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Athiti', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(54, 53, 50, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #LINE179 {
            display: block;
        }
        
        #LINE179>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
            margin-top: 10.5px;
        }
        
        #LINE179 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE365 {
            display: block;
        }
        
        #IMAGE365 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE365 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #LINE135 {
            display: block;
        }
        
        #LINE135>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(251, 192, 45, 1);
            margin-top: 10.5px;
        }
        
        #LINE135 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP148 {
            display: block;
        }
        
        #GROUP148 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE149 {
            display: block;
        }
        
        #HEADLINE149 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(32, 40, 61, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 18px;
        }
        
        #HEADLINE150 {
            display: block;
        }
        
        #HEADLINE150 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #BOX151 {
            display: block;
        }
        
        #BOX151 > .widget-content {
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/trinh_tai-1512977625.jpg");
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
        
        #BOX151> .widget-content {
            border-radius: 550px;
        }
        
        #BOX151> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #BOX151 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX152 {
            display: block;
        }
        
        #BOX152 > .widget-content {
            background-color: rgba(232, 232, 232, 0.46);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 0px rgba(224, 224, 224, 1);
        }
        
        #BOX152> .widget-content {
            border-radius: 5px;
        }
        
        #BOX152> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #PARAGRAPH153 {
            display: block;
        }
        
        #PARAGRAPH153 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 18px;
        }
        
        #GROUP199 {
            display: block;
        }
        
        #GROUP199 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE137 {
            display: block;
        }
        
        #HEADLINE137 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(32, 40, 61, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 18px;
        }
        
        #HEADLINE138 {
            display: block;
        }
        
        #HEADLINE138 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #BOX139 {
            display: block;
        }
        
        #BOX139 > .widget-content {
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512977569.jpg");
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
        
        #BOX139> .widget-content {
            border-radius: 550px;
        }
        
        #BOX139> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #BOX139 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX140 {
            display: block;
        }
        
        #BOX140 > .widget-content {
            background-color: rgba(232, 232, 232, 0.46);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 0px rgba(224, 224, 224, 1);
        }
        
        #BOX140> .widget-content {
            border-radius: 5px;
        }
        
        #BOX140> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #PARAGRAPH141 {
            display: block;
        }
        
        #PARAGRAPH141 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 18px;
        }
        
        #GROUP337 {
            display: block;
        }
        
        #GROUP337 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE338 {
            display: block;
        }
        
        #HEADLINE338 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #BOX340 {
            display: block;
        }
        
        #BOX340 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX340> .widget-content {
            border-radius: 220px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(251, 192, 45, 1);
        }
        
        #BOX340> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(251, 192, 45, 1);
        }
        
        #HEADLINE341 {
            display: block;
        }
        
        #HEADLINE341 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 42px;
        }
        
        #GROUP142 {
            display: block;
        }
        
        #GROUP142 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE143 {
            display: block;
        }
        
        #HEADLINE143 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(32, 40, 61, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 18px;
        }
        
        #HEADLINE144 {
            display: block;
        }
        
        #HEADLINE144 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #BOX146 {
            display: block;
        }
        
        #BOX146 > .widget-content {
            background-color: rgba(232, 232, 232, 0.46);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 0px rgba(224, 224, 224, 1);
        }
        
        #BOX146> .widget-content {
            border-radius: 5px;
        }
        
        #BOX146> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #PARAGRAPH147 {
            display: block;
        }
        
        #PARAGRAPH147 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 18px;
        }
        
        #BOX145 {
            display: block;
        }
        
        #BOX145 > .widget-content {
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512977598.jpg");
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
        
        #BOX145> .widget-content {
            border-radius: 550px;
        }
        
        #BOX145> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #BOX145 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE133 {
            display: block;
        }
        
        #HEADLINE133 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 196, 0, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #PARAGRAPH134 {
            display: block;
        }
        
        #PARAGRAPH134 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 300;
            line-height: 18px;
        }
        
        #LINE43 {
            display: block;
        }
        
        #LINE43>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(33, 33, 33, 1);
            margin-top: 10.5px;
        }
        
        #LINE43 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE44 {
            display: block;
        }
        
        #HEADLINE44 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 193, 7, 1);
            font-weight: 700;
            line-height: 26px;
        }
        
        #PARAGRAPH34 {
            display: block;
        }
        
        #PARAGRAPH34 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #LISTOP262 {
            display: block;
        }
        
        #LISTOP262 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX296 {
            display: block;
        }
        
        #BOX296 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX296> .widget-content {
            border-radius: 5px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX296> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE297 {
            display: block;
        }
        
        #HEADLINE297 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(38, 38, 38, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #GROUP298 {
            display: block;
        }
        
        #GROUP298 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM299 {
            display: block;
        }
        
        #FORM299 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM299 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM299 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM299 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM299 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM300 {
            display: block;
        }
        
        #ITEM_FORM300 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM300> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM300> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM300 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM300 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM300 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM300 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM301 {
            display: block;
        }
        
        #ITEM_FORM301 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM301> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM301> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM301 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM301 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM301 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM301 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM302 {
            display: block;
        }
        
        #ITEM_FORM302 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM302> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM302> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM302 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM302 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM302 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM302 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #BUTTON303 {
            display: table;
        }
        
        #BUTTON303 > .widget-content {
            background-color: rgba(255, 196, 0, 1);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 22px;
        }
        
        #BUTTON303> .widget-content {
            border-radius: 2px;
        }
        
        #BUTTON303> .ladi-widget-overlay {
            border-radius: 2px;
        }
        
        #GROUP15 {
            display: block;
        }
        
        #GROUP15 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX16 {
            display: block;
        }
        
        #BOX16 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX16> .widget-content {
            border-radius: 220px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(224, 224, 224, 1);
        }
        
        #BOX16> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(224, 224, 224, 1);
        }
        
        #HEADLINE18 {
            display: block;
        }
        
        #HEADLINE18 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #PARAGRAPH19 {
            display: block;
        }
        
        #PARAGRAPH19 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 18px;
        }
        
        #HEADLINE326 {
            display: block;
        }
        
        #HEADLINE326 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(251, 192, 45, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 58px;
        }
        
        #HEADLINE332 {
            display: block;
        }
        
        #HEADLINE332 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(251, 192, 45, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 58px;
        }
        
        #HEADLINE336 {
            display: block;
        }
        
        #HEADLINE336 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(251, 192, 45, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 58px;
        }
        
        #HEADLINE23 {
            display: block;
        }
        
        #HEADLINE23 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #PARAGRAPH24 {
            display: block;
        }
        
        #PARAGRAPH24 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 18px;
        }
        
        #BOX21 {
            display: block;
        }
        
        #BOX21 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX21> .widget-content {
            border-radius: 220px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(224, 224, 224, 1);
        }
        
        #BOX21> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(224, 224, 224, 1);
        }
        
        #PARAGRAPH366 {
            display: block;
        }
        
        #PARAGRAPH366 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 18px;
        }
        
        #GROUP25 {
            display: block;
        }
        
        #GROUP25 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX26 {
            display: block;
        }
        
        #BOX26 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX26> .widget-content {
            border-radius: 220px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(224, 224, 224, 1);
        }
        
        #BOX26> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(224, 224, 224, 1);
        }
        
        #PARAGRAPH29 {
            display: block;
        }
        
        #PARAGRAPH29 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 18px;
        }
        
        #HEADLINE28 {
            display: block;
        }
        
        #HEADLINE28 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #HEADLINE41 {
            display: block;
        }
        
        #HEADLINE41 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 29px;
        }
        
        #LINE42 {
            display: block;
        }
        
        #LINE42>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(251, 192, 45, 1);
            margin-top: 10.5px;
        }
        
        #LINE42 > .widget-content {
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
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(84, 84, 84, 1);
            font-weight: 700;
            line-height: 30px;
            letter-spacing: 8px;
        }
        
        #PARAGRAPH91 {
            display: block;
        }
        
        #PARAGRAPH91 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #YOUTUBE89 {
            display: block;
        }
        
        #YOUTUBE89 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE270 {
            display: block;
        }
        
        #HEADLINE270 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 24px;
        }
        
        #HEADLINE342 {
            display: block;
        }
        
        #HEADLINE342 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #HEADLINE61 {
            display: block;
        }
        
        #HEADLINE61 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #PARAGRAPH57 {
            display: block;
        }
        
        #PARAGRAPH57 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 21px;
        }
        
        #YOUTUBE343 {
            display: block;
        }
        
        #YOUTUBE343 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 7px 12px 15px rgba(217, 217, 217, 0.69);
        }
        
        #YOUTUBE343> .widget-content {
            border-radius: 3px;
        }
        
        #YOUTUBE343> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #PARAGRAPH344 {
            display: block;
        }
        
        #PARAGRAPH344 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 700;
            line-height: 20px;
            letter-spacing: 2px;
        }
        
        #SHAPE70 {
            display: block;
        }
        
        #SHAPE70 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(251, 192, 45, 1);
        }
        
        #SHAPE70> .widget-content svg {
            fill: rgba(251, 192, 45, 1);
        }
        
        #LINE60 {
            display: block;
        }
        
        #LINE60>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(251, 192, 45, 1);
            margin-top: 10.5px;
        }
        
        #LINE60 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE113 {
            display: block;
        }
        
        #LINE113>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(238, 238, 238, 1);
            margin-top: 12px;
        }
        
        #LINE113 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE118 {
            display: block;
        }
        
        #HEADLINE118 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #PARAGRAPH265 {
            display: block;
        }
        
        #PARAGRAPH265 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #SHAPE345 {
            display: block;
        }
        
        #SHAPE345 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(251, 192, 45, 1);
        }
        
        #SHAPE345> .widget-content svg {
            fill: rgba(251, 192, 45, 1);
        }
        
        #SHAPE354 {
            display: block;
        }
        
        #SHAPE354 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(251, 192, 45, 1);
        }
        
        #SHAPE354> .widget-content svg {
            fill: rgba(251, 192, 45, 1);
        }
        
        #SHAPE355 {
            display: block;
        }
        
        #SHAPE355 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(251, 192, 45, 1);
        }
        
        #SHAPE355> .widget-content svg {
            fill: rgba(251, 192, 45, 1);
        }
        
        #BUTTON356 {
            display: table;
        }
        
        #BUTTON356 > .widget-content {
            background-color: rgba(251, 192, 45, 1);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 41px;
        }
        
        #BUTTON356> .widget-content {
            border-radius: 0px;
            border-width: 0px;
            border-style: solid;
        }
        
        #BUTTON356> .ladi-widget-overlay {
            border-radius: 0px;
            border-width: 0px;
            border-style: solid;
        }
        
        #BOX346 {
            display: block;
        }
        
        #BOX346 > .widget-content {
            background-color: rgba(59, 59, 59, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX346> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(242, 189, 2, 1);
        }
        
        #BOX346> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(242, 189, 2, 1);
        }
        
        #HEADLINE347 {
            display: block;
        }
        
        #HEADLINE347 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 27px;
        }
        
        #FORM348 {
            display: block;
        }
        
        #FORM348 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM348 .widget-content::-webkit-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #FORM348 .widget-content:-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #FORM348 .widget-content::-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #FORM348 .widget-content:-ms-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM349 {
            display: block;
        }
        
        #ITEM_FORM349 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM349> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(242, 189, 2, 1);
        }
        
        #ITEM_FORM349> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(242, 189, 2, 1);
        }
        
        #ITEM_FORM349 .widget-content::-webkit-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM349 .widget-content:-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM349 .widget-content::-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM349 .widget-content:-ms-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM350 {
            display: block;
        }
        
        #ITEM_FORM350 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM350> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(242, 189, 2, 1);
        }
        
        #ITEM_FORM350> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(242, 189, 2, 1);
        }
        
        #ITEM_FORM350 .widget-content::-webkit-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM350 .widget-content:-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM350 .widget-content::-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM350 .widget-content:-ms-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM351 {
            display: block;
        }
        
        #ITEM_FORM351 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM351> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(242, 189, 2, 1);
        }
        
        #ITEM_FORM351> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(242, 189, 2, 1);
        }
        
        #ITEM_FORM351 .widget-content::-webkit-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM351 .widget-content:-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM351 .widget-content::-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM351 .widget-content:-ms-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM352 {
            display: block;
        }
        
        #ITEM_FORM352 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM352> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(242, 189, 2, 1);
        }
        
        #ITEM_FORM352> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(242, 189, 2, 1);
        }
        
        #ITEM_FORM352 .widget-content::-webkit-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM352 .widget-content:-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM352 .widget-content::-moz-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #ITEM_FORM352 .widget-content:-ms-input-placeholder {
            color: rgba(51, 45, 45, 1)
        }
        
        #BUTTON353 {
            display: table;
        }
        
        #BUTTON353 > .widget-content {
            background-color: rgba(251, 192, 45, 1);
            color: rgba(255, 255, 255, 0.87);
            font-weight: 700;
            line-height: 40px;
        }
        
        #BUTTON353> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON353> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #BOX357 {
            display: block;
        }
        
        #BOX357 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP358 {
            display: block;
        }
        
        #GROUP358 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH359 {
            display: block;
        }
        
        #PARAGRAPH359 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #PARAGRAPH360 {
            display: block;
        }
        
        #PARAGRAPH360 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #PARAGRAPH361 {
            display: block;
        }
        
        #PARAGRAPH361 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #PARAGRAPH362 {
            display: block;
        }
        
        #PARAGRAPH362 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #COUNTDOWN363 {
            display: block;
        }
        
        #COUNTDOWN363 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
        }
        
        #HEADLINE369 {
            display: block;
        }
        
        #HEADLINE369 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 62px;
        }
        
        #HEADLINE364 {
            display: block;
        }
        
        #HEADLINE364 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(181, 181, 181, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE232 {
            display: block;
        }
        
        #HEADLINE232 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 28px;
            letter-spacing: 2px;
        }
        
        #HEADLINE234 {
            display: block;
        }
        
        #HEADLINE234 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 2px;
        }
        
        #GROUP235 {
            display: block;
        }
        
        #GROUP235 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE236 {
            display: block;
        }
        
        #HEADLINE236 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 2px;
        }
        
        #GROUP237 {
            display: block;
        }
        
        #GROUP237 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE238 {
            display: block;
        }
        
        #SHAPE238 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #000000;
        }
        
        #SHAPE238> .widget-content svg {
            fill: #000000;
        }
        
        #PARAGRAPH239 {
            display: block;
        }
        
        #PARAGRAPH239 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 22px;
        }
        
        #GROUP243 {
            display: block;
        }
        
        #GROUP243 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE244 {
            display: block;
        }
        
        #SHAPE244 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #000000;
        }
        
        #SHAPE244> .widget-content svg {
            fill: #000000;
        }
        
        #PARAGRAPH245 {
            display: block;
        }
        
        #PARAGRAPH245 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 22px;
        }
        
        #SHAPE241 {
            display: block;
        }
        
        #SHAPE241 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #000000;
        }
        
        #SHAPE241> .widget-content svg {
            fill: #000000;
        }
        
        #PARAGRAPH242 {
            display: block;
        }
        
        #PARAGRAPH242 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            line-height: 22px;
        }
        
        #BUTTON257 {
            display: table;
        }
        
        #BUTTON257 > .widget-content {
            background-color: rgba(89, 89, 89, 1);
            color: #ffffff;
            line-height: 22px;
        }
        
        #BUTTON257> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON257> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #FORM258 {
            display: block;
        }
        
        #FORM258 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM258 .widget-content::-webkit-input-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #FORM258 .widget-content:-moz-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #FORM258 .widget-content::-moz-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #FORM258 .widget-content:-ms-input-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM259 {
            display: block;
        }
        
        #ITEM_FORM259 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(84, 84, 84, 1);
        }
        
        #ITEM_FORM259> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(186, 186, 186, 1);
        }
        
        #ITEM_FORM259> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(186, 186, 186, 1);
        }
        
        #ITEM_FORM259 .widget-content::-webkit-input-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM259 .widget-content:-moz-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM259 .widget-content::-moz-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM259 .widget-content:-ms-input-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM260 {
            display: block;
        }
        
        #ITEM_FORM260 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(84, 84, 84, 1);
        }
        
        #ITEM_FORM260> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(186, 186, 186, 1);
        }
        
        #ITEM_FORM260> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(186, 186, 186, 1);
        }
        
        #ITEM_FORM260 .widget-content::-webkit-input-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM260 .widget-content:-moz-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM260 .widget-content::-moz-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM260 .widget-content:-ms-input-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM261 {
            display: block;
        }
        
        #ITEM_FORM261 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(84, 84, 84, 1);
        }
        
        #ITEM_FORM261> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(186, 186, 186, 1);
        }
        
        #ITEM_FORM261> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(186, 186, 186, 1);
        }
        
        #ITEM_FORM261 .widget-content::-webkit-input-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM261 .widget-content:-moz-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM261 .widget-content::-moz-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #ITEM_FORM261 .widget-content:-ms-input-placeholder {
            color: rgba(89, 89, 89, 1)
        }
        
        #HEADLINE271 {
            display: block;
        }
        
        #HEADLINE271 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 27px;
        }
        
        #HEADLINE272 {
            display: block;
        }
        
        #HEADLINE272 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 2px;
        }
        
        #FACEBOOK_MESSAGES273 {
            display: block;
        }
        
        #FACEBOOK_MESSAGES273 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FACEBOOK_MESSAGES273> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: #000;
        }
        
        #FACEBOOK_MESSAGES273> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: #000;
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION172 {
                width: 100%;
                height: 748.4375px;
            }
            #SECTION172 .container {}
            #SECTION172 {
                background-image: url("https://static.ladipage.net/uploads/images/2a1ae041-4f89-4d94-b525-a965b6a0c55d.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION132 {
                width: 100%;
                height: 1231.359375px;
            }
            #SECTION132 .container {}
            #SECTION132 {
                display: none;
                background-image: none;
            }
            #SECTION32 {
                width: 100%;
                height: 459px;
            }
            #SECTION32 .container {}
            #SECTION32 {
                background-image: none;
            }
            #SECTION12 {
                width: 100%;
                height: 999.546875px;
            }
            #SECTION12 .container {}
            #SECTION12 {
                background-image: none;
            }
            #SECTION88 {
                width: 100%;
                height: 756px;
            }
            #SECTION88 .container {}
            #SECTION88 {
                background-image: none;
            }
            #SECTION53 {
                width: 100%;
                height: 593.640625px;
            }
            #SECTION53 .container {}
            #SECTION53 {
                background-image: none;
            }
            #SECTION111 {
                width: 100%;
                height: 1026px;
            }
            #SECTION111 .container {}
            #SECTION111 {
                background-image: none;
            }
            #SECTION231 {
                width: 100%;
                height: 459.171875px;
            }
            #SECTION231 .container {}
            #SECTION231 {
                background-image: none;
            }
            #GROUP175 {
                top: 19px;
                left: 35.5px;
                width: 303px;
                height: 369px;
            }
            #HEADLINE176 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 303px;
                height: 176px;
            }
            #HEADLINE176 > .widget-content {
                font-size: 40px;
                text-align: left;
                line-height: 44px;
            }
            #HEADLINE177 {
                top: 186px;
                left: 1.5px;
                padding: 0px;
                width: 302px;
                height: 78px;
            }
            #HEADLINE177 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE178 {
                top: 309px;
                left: 1.5px;
                padding: 0px;
                width: 302px;
                height: 60px;
            }
            #HEADLINE178 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #LINE179 {
                top: 274px;
                left: 2.5px;
                width: 300px;
                height: 25px;
            }
            #IMAGE365 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848A0512-1512985005.png);
            }
            #IMAGE365 {
                top: 414.453px;
                left: 7.5px;
                width: 355px;
                height: 302px;
            }
            #LINE135 {
                top: 88px;
                left: 128.5px;
                width: 119px;
                height: 25px;
            }
            #GROUP148 {
                top: 714.297px;
                left: 33.5px;
                width: 304px;
                height: 230.6875px;
            }
            #HEADLINE149 {
                top: 94.9688px;
                left: 25px;
                padding: 0px;
                width: 257.5px;
                height: 17.5px;
            }
            #HEADLINE149 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #HEADLINE150 {
                top: 125.344px;
                left: 85.4844px;
                padding: 0px;
                width: 132px;
                height: 20px;
            }
            #HEADLINE150 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX151 {
                top: 0px;
                left: 115.344px;
                width: 79px;
                height: 73px;
            }
            #BOX151 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/trinh_tai-1512977625.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/trinh_tai-1512977625.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/trinh_tai-1512977625.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/trinh_tai-1512977625.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/trinh_tai-1512977625.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #BOX152 {
                top: 161.688px;
                left: 1px;
                width: 304px;
                height: 102px;
            }
            #PARAGRAPH153 {
                top: 26.5px;
                left: 33.5px;
                padding: 0px;
                width: 236.25px;
                height: 52.5px;
            }
            #PARAGRAPH153 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP199 {
                top: 410.422px;
                left: 33.5px;
                width: 304px;
                height: 270.96875px;
            }
            #HEADLINE137 {
                top: 89.9688px;
                left: 33px;
                padding: 0px;
                width: 250px;
                height: 18px;
            }
            #HEADLINE137 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #HEADLINE138 {
                top: 113.75px;
                left: 41.4844px;
                padding: 0px;
                width: 217.890625px;
                height: 20px;
            }
            #HEADLINE138 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX139 {
                top: 0px;
                left: 122.938px;
                width: 79px;
                height: 73px;
            }
            #BOX139 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512977569.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512977569.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512977569.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512977569.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/truong_thuong_huyen-1512977569.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #BOX140 {
                top: 137.969px;
                left: 1px;
                width: 304px;
                height: 133px;
            }
            #PARAGRAPH141 {
                top: 23.5px;
                left: 33.5px;
                padding: 0px;
                width: 236.25px;
                height: 87.5px;
            }
            #PARAGRAPH141 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP337 {
                top: -207px;
                left: 138px;
                width: 623.5px;
                height: 121px;
            }
            #HEADLINE338 {
                top: 40.3438px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #HEADLINE338 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX340 {
                top: 0px;
                left: 487px;
                width: 121px;
                height: 121px;
            }
            #HEADLINE341 {
                top: 43px;
                left: 470.5px;
                padding: 0px;
                width: 154px;
                height: 42px;
            }
            #HEADLINE341 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #GROUP142 {
                top: 118px;
                left: 35.5px;
                width: 304px;
                height: 259.421875px;
            }
            #HEADLINE143 {
                top: 97.9688px;
                left: 51.4844px;
                padding: 0px;
                width: 201.25px;
                height: 17.5px;
            }
            #HEADLINE143 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #HEADLINE144 {
                top: 120.969px;
                left: 45px;
                padding: 0px;
                width: 216px;
                height: 20px;
            }
            #HEADLINE144 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX146 {
                top: 146.422px;
                left: 1px;
                width: 304px;
                height: 113px;
            }
            #PARAGRAPH147 {
                top: 22.1797px;
                left: 35.2969px;
                padding: 0px;
                width: 236.25px;
                height: 70px;
            }
            #PARAGRAPH147 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX145 {
                top: 0px;
                left: 114.344px;
                width: 79px;
                height: 73px;
            }
            #BOX145 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512977598.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512977598.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512977598.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512977598.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/nguyen_thanh_huyen-1512977598.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE133 {
                top: 72.9688px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE133 > .widget-content {
                font-size: 22px;
                text-align: center;
                line-height: 24px;
            }
            #PARAGRAPH134 {
                top: 52px;
                left: 11px;
                padding: 0px;
                width: 355px;
                height: 36px;
            }
            #PARAGRAPH134 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #LINE43 {
                top: 74.3594px;
                left: 141.5px;
                width: 98px;
                height: 25px;
            }
            #HEADLINE44 {
                top: 22px;
                left: 10.5px;
                padding: 0px;
                width: 355px;
                height: 52px;
            }
            #HEADLINE44 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH34 {
                top: 99.0004px;
                left: 10.5px;
                padding: 0px;
                width: 355px;
                height: 120px;
            }
            #PARAGRAPH34 > .widget-content {
                font-size: 13px;
                text-align: justify;
            }
            #LISTOP262 {
                top: 230px;
                left: 10.5px;
                width: 355px;
                height: 140px;
            }
            #LISTOP262 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #LISTOP262 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 15px;
                height: 15px;
                top: 2px;
                font-size: 7.5px;
                margin-right: 8px;
                content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.4-.188-2.794-.688-4.094L26.688 13.5c.2.8.313 1.6.313 2.5 0 6.1-4.9 11-11 11S5 22.1 5 16 9.9 5 16 5c3 0 5.694 1.194 7.594 3.094L25 6.688C22.7 4.388 19.5 3 16 3zm11.28 4.28L16 18.563l-4.28-4.28-1.44 1.437 5 5 .72.686.72-.687 12-12-1.44-1.44z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP262 > ol.widget-content li {
                margin-bottom: 10px;
            }
            #LISTOP262 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX296 {
                display: none!important;
                top: 172.5px;
                left: 3.98438px;
                width: 367.03125px;
                height: 331.9921875px;
            }
            #HEADLINE297 {
                top: 28px;
                left: 18px;
                padding: 0px;
                width: 340.5px;
                height: 54px;
            }
            #HEADLINE297 > .widget-content {
                font-size: 18px;
                text-align: center;
                line-height: 22px;
            }
            #GROUP298 {
                top: 118.965px;
                left: 39.625px;
                width: 300px;
                height: 181.977px;
            }
            #FORM299 {
                top: 0px;
                left: 1px;
                width: 300px;
                height: 163.984px;
            }
            #FORM299 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM300 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 46.1406px;
            }
            #ITEM_FORM300 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM301 {
                top: 58.9268px;
                left: 0px;
                width: 300px;
                height: 46.1406px;
            }
            #ITEM_FORM301 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM302 {
                top: 117.854px;
                left: 0px;
                width: 300px;
                height: 46.1406px;
            }
            #ITEM_FORM302 > .widget-content {
                font-size: 16px;
            }
            #BUTTON303 {
                top: 180.977px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 49.5px;
            }
            #BUTTON303 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP15 {
                top: 124px;
                left: 49.5px;
                width: 274px;
                height: 650px;
            }
            #BOX16 {
                top: 240.438px;
                left: 78px;
                width: 121px;
                height: 119px;
            }
            #HEADLINE18 {
                top: 103px;
                left: 60px;
                padding: 0px;
                width: 154px;
                height: 20px;
            }
            #HEADLINE18 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #PARAGRAPH19 {
                top: 427px;
                left: 1px;
                padding: 0px;
                width: 274px;
                height: 18px;
            }
            #PARAGRAPH19 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #HEADLINE326 {
                top: 0px;
                left: 62px;
                padding: 0px;
                width: 154px;
                height: 58px;
            }
            #HEADLINE326 > .widget-content {
                font-size: 52px;
                text-align: center;
            }
            #HEADLINE332 {
                top: 271.438px;
                left: 61px;
                padding: 0px;
                width: 154px;
                height: 58px;
            }
            #HEADLINE332 > .widget-content {
                font-size: 52px;
                text-align: center;
            }
            #HEADLINE336 {
                top: 592px;
                left: 53px;
                padding: 0px;
                width: 154px;
                height: 58px;
            }
            #HEADLINE336 > .widget-content {
                font-size: 52px;
                text-align: center;
            }
            #HEADLINE23 {
                top: 513.55px;
                left: 111.5px;
                padding: 0px;
                width: 154px;
                height: 20px;
            }
            #HEADLINE23 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #PARAGRAPH24 {
                top: 551px;
                left: 56px;
                padding: 0px;
                width: 268px;
                height: 108px;
            }
            #PARAGRAPH24 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX21 {
                top: 94px;
                left: 127px;
                width: 121px;
                height: 121px;
            }
            #PARAGRAPH366 {
                top: 261.563px;
                left: 56px;
                padding: 0px;
                width: 276px;
                height: 72px;
            }
            #PARAGRAPH366 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #GROUP25 {
                top: 684.563px;
                left: 34px;
                width: 277px;
                height: 252.984375px;
            }
            #BOX26 {
                top: 0px;
                left: 85px;
                width: 121px;
                height: 121px;
            }
            #PARAGRAPH29 {
                top: 180.984px;
                left: 1px;
                padding: 0px;
                width: 277px;
                height: 72px;
            }
            #PARAGRAPH29 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #HEADLINE28 {
                top: 148.984px;
                left: 67px;
                padding: 0px;
                width: 154px;
                height: 20px;
            }
            #HEADLINE28 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE41 {
                top: 20px;
                left: 15px;
                padding: 0px;
                width: 345px;
                height: 29px;
            }
            #HEADLINE41 > .widget-content {
                font-size: 23px;
                text-align: center;
            }
            #LINE42 {
                top: 59px;
                left: 138.5px;
                width: 98px;
                height: 25px;
            }
            #HEADLINE90 {
                top: 51px;
                left: 28px;
                padding: 0px;
                width: 355px;
                height: 24px;
            }
            #HEADLINE90 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 24px;
            }
            #PARAGRAPH91 {
                top: 300px;
                left: 10.5px;
                padding: 0px;
                width: 355px;
                height: 440px;
            }
            #PARAGRAPH91 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #YOUTUBE89 {
                top: 130px;
                left: 37.5px;
                width: 300px;
                height: 146.66666666666666px;
            }
            #HEADLINE270 {
                top: 82px;
                left: 37.5px;
                padding: 0px;
                width: 308px;
                height: 24px;
            }
            #HEADLINE270 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE342 {
                top: 20px;
                left: 15px;
                padding: 0px;
                width: 345px;
                height: 22px;
            }
            #HEADLINE342 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE61 {
                top: 20px;
                left: 15px;
                padding: 0px;
                width: 345px;
                height: 44px;
            }
            #HEADLINE61 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH57 {
                top: 321.641px;
                left: 13px;
                padding: 0px;
                width: 355px;
                height: 252px;
            }
            #PARAGRAPH57 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #YOUTUBE343 {
                top: 104px;
                left: 10px;
                width: 355px;
                height: 177.22222222222223px;
            }
            #PARAGRAPH344 {
                top: 54.3594px;
                left: 5.5px;
                padding: 0px;
                width: 355px;
                height: 20px;
            }
            #PARAGRAPH344 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #SHAPE70 {
                display: none!important;
                top: 694px;
                left: 162px;
                width: 51px;
                height: 51px;
            }
            #LINE60 {
                top: 461px;
                left: 142.5px;
                width: 98px;
                height: 25px;
            }
            #LINE113 {
                top: 78px;
                left: 37.5px;
                width: 300px;
                height: 25px;
            }
            #HEADLINE118 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 48px;
            }
            #HEADLINE118 > .widget-content {
                font-size: 18px;
                text-align: center;
                line-height: 24px;
            }
            #PARAGRAPH265 {
                top: 623.719px;
                left: 42px;
                padding: 0px;
                width: 337px;
                height: 120px;
            }
            #PARAGRAPH265 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #SHAPE345 {
                top: 618px;
                left: 10.5px;
                width: 27px;
                height: 27px;
            }
            #SHAPE354 {
                top: 665px;
                left: 9px;
                width: 27px;
                height: 27px;
            }
            #SHAPE355 {
                top: 715px;
                left: 9px;
                width: 27px;
                height: 27px;
            }
            #BUTTON356 {
                top: 763.953px;
                left: 26px;
                padding: 0px;
                width: 315px;
                height: 90px;
            }
            #BUTTON356 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #BOX346 {
                top: 122px;
                left: 21.5px;
                width: 323px;
                height: 469px;
            }
            #HEADLINE347 {
                top: 26px;
                left: 35px;
                padding: 0px;
                width: 288px;
                height: 26.65625px;
            }
            #HEADLINE347 > .widget-content {
                font-size: 21px;
                text-align: left;
                line-height: 33px;
            }
            #FORM348 {
                top: 100px;
                left: 27.9844px;
                width: 261.984375px;
                height: 275.453125px;
            }
            #ITEM_FORM349 {
                top: 50.6875px;
                left: 0px;
                width: 261.984375px;
                height: 40.6875px;
            }
            #ITEM_FORM350 {
                top: 101.375px;
                left: 0px;
                width: 261.984375px;
                height: 40.6875px;
            }
            #ITEM_FORM351 {
                top: 152.063px;
                left: 0px;
                width: 261.984375px;
                height: 123.390625px;
            }
            #ITEM_FORM352 {
                top: 0px;
                left: 0px;
                width: 261.984375px;
                height: 40.6875px;
            }
            #BUTTON353 {
                top: 387px;
                left: 28.9792px;
                padding: 0px;
                width: 262px;
                height: 48px;
            }
            #BUTTON353 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BOX357 {
                top: 887px;
                left: 33.3125px;
                width: 312.28125px;
                height: 101px;
            }
            #GROUP358 {
                top: 22px;
                left: 14px;
                width: 283px;
                height: 17px;
            }
            #PARAGRAPH359 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH359 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH360 {
                top: 0px;
                left: 74px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH360 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH361 {
                top: 0px;
                left: 148px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH361 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH362 {
                top: 0px;
                left: 223px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH362 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #COUNTDOWN363 {
                top: 38px;
                left: 10px;
                width: 298px;
                height: 45px;
            }
            #COUNTDOWN363 > .widget-content {
                font-size: 36px;
            }
            #HEADLINE369 {
                top: 786.063px;
                left: 206.5px;
                padding: 0px;
                width: 288px;
                height: 36px;
            }
            #HEADLINE369 > .widget-content {
                font-size: 56px;
                text-align: left;
                line-height: 33px;
            }
            #HEADLINE364 {
                display: none!important;
                top: 994px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 22px;
            }
            #HEADLINE364 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE232 {
                top: 20px;
                left: 88.5px;
                padding: 0px;
                width: 198px;
                height: 28px;
            }
            #HEADLINE232 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE234 {
                top: 239px;
                left: 32.5px;
                padding: 0px;
                width: 248px;
                height: 22px;
            }
            #HEADLINE234 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP235 {
                top: 78.2188px;
                left: 31px;
                width: 275.515625px;
                height: 132.03125px;
            }
            #HEADLINE236 {
                top: 0px;
                left: 3px;
                padding: 0px;
                width: 248px;
                height: 22px;
            }
            #HEADLINE236 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP237 {
                top: 35.9688px;
                left: 3px;
                width: 273.515625px;
                height: 44px;
            }
            #SHAPE238 {
                top: 6.03125px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #PARAGRAPH239 {
                top: 0px;
                left: 26.5156px;
                padding: 0px;
                width: 248px;
                height: 44px;
            }
            #PARAGRAPH239 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP243 {
                top: 110.781px;
                left: 1px;
                width: 248.5px;
                height: 21.25px;
            }
            #SHAPE244 {
                top: 1px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #PARAGRAPH245 {
                top: 0px;
                left: 27px;
                padding: 0px;
                width: 222.5px;
                height: 21.25px;
            }
            #PARAGRAPH245 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #SHAPE241 {
                top: 80.9688px;
                left: 2.51563px;
                width: 20px;
                height: 20px;
            }
            #PARAGRAPH242 {
                top: 80.9688px;
                left: 29.5156px;
                padding: 0px;
                width: 145px;
                height: 21.25px;
            }
            #PARAGRAPH242 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BUTTON257 {
                top: 316.36px;
                left: 106.5px;
                padding: 0px;
                width: 102px;
                height: 35px;
            }
            #BUTTON257 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #FORM258 {
                top: 279.156px;
                left: 23.5px;
                width: 267px;
                height: 132.90625px;
            }
            #ITEM_FORM259 {
                top: 0px;
                left: 0px;
                width: 267px;
                height: 37.390625px;
            }
            #ITEM_FORM260 {
                top: 46.4789px;
                left: 0px;
                width: 267px;
                height: 37.390625px;
            }
            #ITEM_FORM261 {
                top: 95.5197px;
                left: 0px;
                width: 267px;
                height: 37.390625px;
            }
            #HEADLINE271 {
                display: none!important;
                top: 250.461px;
                left: 64.5px;
                padding: 0px;
                width: 246px;
                height: 27px;
            }
            #HEADLINE271 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE272 {
                display: none!important;
                top: 234.625px;
                left: 30.5px;
                padding: 0px;
                width: 288px;
                height: 22px;
            }
            #HEADLINE272 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #FACEBOOK_MESSAGES273 {
                display: none!important;
                top: 303px;
                left: 55px;
                width: 265px;
                height: 210px;
            }
        }
    </style>
