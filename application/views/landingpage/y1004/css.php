
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
            var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,700|Tinos:400,700|Montserrat:300,400,600,700|Arima+Madurai:300,400,700&amp;subset=latin-ext,vietnamese';
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
            #SECTION19 {
                width: 100%;
                height: 793px;
            }
            #SECTION19 .container {}
            #SECTION19 {}
            #SECTION80 {
                width: 100%;
                height: 884px;
            }
            #SECTION80 .container {}
            #SECTION80 {}
            #SECTION125 {
                width: 100%;
                height: 617px;
            }
            #SECTION125 .container {}
            #SECTION125 {}
            #SECTION157 {
                width: 100%;
                height: 770px;
            }
            #SECTION157 .container {}
            #SECTION157 {}
            #SECTION224 {
                width: 100%;
                height: 734px;
            }
            #SECTION224 .container {}
            #SECTION224 {}
            #SECTION269 {
                width: 100%;
                height: 662px;
            }
            #SECTION269 .container {}
            #SECTION269 {}
            #SECTION303 {
                width: 100%;
                height: 780px;
            }
            #SECTION303 .container {}
            #SECTION303 {}
            #POPUP315 {
                width: 100%;
                height: 100%;
            }
            #POPUP315 .container {
                width: 449px;
                height: 462px;
                top: calc(100%-462px);
            }
            #POPUP315 {}
            #POPUP147 {
                width: 100%;
                height: 100%;
            }
            #POPUP147 .container {
                width: 443px;
                height: 422px;
                top: calc(100%-422px);
            }
            #POPUP147 {}
            #POPUP45 {
                width: 100%;
                height: 100%;
            }
            #POPUP45 .container {
                width: 390px;
                height: 489px;
                top: calc(100%-489px);
            }
            #POPUP45 {}
            #POPUP36 {
                width: 100%;
                height: 100%;
            }
            #POPUP36 .container {
                width: 431px;
                height: 463px;
                top: calc(100%-463px);
            }
            #POPUP36 {}
            #LINE20 {
                top: 215px;
                left: 0.666687px;
                width: 431px;
                height: 25px;
            }
            #HEADLINE22 {
                top: 126px;
                left: 0.666687px;
                padding: 0px;
                width: 481.3333435058594px;
                height: 82.66667175292969px;
            }
            #HEADLINE22 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #IMAGE23 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848a0382-1512807460466.png);
            }
            #IMAGE23 {
                top: 65px;
                left: 263px;
                width: 697.3333740234375px;
                height: 694px;
            }
            #BOX24 {
                top: 552px;
                left: -1px;
                width: 71.796875px;
                height: 71px;
            }
            #SHAPE25 {
                top: 17px;
                left: 16px;
                width: 37px;
                height: 37px;
            }
            #BOX26 {
                top: 563px;
                left: 80px;
                width: 331px;
                height: 54px;
            }
            #HEADLINE27 {
                top: 14px;
                left: 24.64581298828125px;
                padding: 0px;
                width: 280px;
                height: 24px;
            }
            #HEADLINE27 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX28 {
                top: 464px;
                left: -1px;
                width: 71.796875px;
                height: 71px;
            }
            #SHAPE29 {
                top: 17px;
                left: 16px;
                width: 37px;
                height: 37px;
            }
            #BOX30 {
                top: 475px;
                left: 80.6667px;
                width: 331px;
                height: 54px;
            }
            #HEADLINE31 {
                top: 6px;
                left: 16.645843505859375px;
                padding: 0px;
                width: 280px;
                height: 48px;
            }
            #HEADLINE31 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX32 {
                top: 387px;
                left: 83px;
                width: 328px;
                height: 54px;
            }
            #BOX34 {
                top: 376px;
                left: -1px;
                width: 71.796875px;
                height: 71px;
            }
            #SHAPE35 {
                top: 17px;
                left: 16px;
                width: 37px;
                height: 37px;
            }
            #HEADLINE33 {
                top: 399px;
                left: 93.3125px;
                padding: 0px;
                width: 324px;
                height: 24px;
            }
            #HEADLINE33 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX81 {
                top: 135.333px;
                left: 531.667px;
                width: 429px;
                height: 301px;
            }
            #FORM82 {
                top: 44px;
                left: 36px;
                width: 358px;
                height: 153.984375px;
            }
            #FORM82 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM83 {
                top: 0px;
                left: 0px;
                width: 358px;
                height: 41.3125px;
            }
            #ITEM_FORM83 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM84 {
                top: 56.3415px;
                left: 0px;
                width: 358px;
                height: 41.3125px;
            }
            #ITEM_FORM84 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM85 {
                top: 112.683px;
                left: 0px;
                width: 358px;
                height: 41.3125px;
            }
            #ITEM_FORM85 > .widget-content {
                font-size: 14px;
            }
            #BUTTON86 {
                top: 226.646px;
                left: 154px;
                padding: 0px;
                width: 126px;
                height: 40px;
            }
            #BUTTON86 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE87 {
                top: 83px;
                left: 572px;
                padding: 0px;
                width: 428px;
                height: 36px;
            }
            #HEADLINE87 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #GROUP88 {
                top: 141px;
                left: -1px;
                width: 483px;
                height: 315px;
            }
            #BOX90 {
                top: 0px;
                left: 1px;
                width: 58px;
                height: 58px;
            }
            #SHAPE91 {
                top: 12px;
                left: 12px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE92 {
                top: 11px;
                left: 74px;
                padding: 0px;
                width: 362.66668701171875px;
                height: 24px;
            }
            #HEADLINE92 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH93 {
                top: 46px;
                left: 76px;
                padding: 0px;
                width: 408px;
                height: 40px;
            }
            #PARAGRAPH93 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH94 {
                top: 169px;
                left: 76px;
                padding: 0px;
                width: 402.66668701171875px;
                height: 40px;
            }
            #PARAGRAPH94 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE95 {
                top: 134px;
                left: 74px;
                padding: 0px;
                width: 362.66668701171875px;
                height: 24px;
            }
            #HEADLINE95 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX96 {
                top: 123px;
                left: 1px;
                width: 58px;
                height: 58px;
            }
            #SHAPE97 {
                top: 12px;
                left: 12px;
                width: 33px;
                height: 33px;
            }
            #BOX98 {
                top: 249px;
                left: 1px;
                width: 58px;
                height: 58px;
            }
            #SHAPE99 {
                top: 12px;
                left: 12.64581298828125px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE100 {
                top: 260px;
                left: 74px;
                padding: 0px;
                width: 362.66668701171875px;
                height: 24px;
            }
            #HEADLINE100 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH101 {
                top: 295px;
                left: 76px;
                padding: 0px;
                width: 389.3333435058594px;
                height: 20px;
            }
            #PARAGRAPH101 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP126 {
                top: 321px;
                left: 748.0000610351562px;
                width: 213px;
                height: 158px;
            }
            #HEADLINE127 {
                top: 67px;
                left: 2px;
                padding: 0px;
                width: 212px;
                height: 20px;
            }
            #HEADLINE127 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH128 {
                top: 101px;
                left: 1px;
                padding: 0px;
                width: 188px;
                height: 56px;
            }
            #PARAGRAPH128 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #SHAPE129 {
                top: 0px;
                left: 1px;
                width: 50px;
                height: 50px;
            }
            #GROUP130 {
                top: 321px;
                left: 521px;
                width: 215px;
                height: 163px;
            }
            #SHAPE131 {
                top: 0px;
                left: 3px;
                width: 50px;
                height: 50px;
            }
            #PARAGRAPH132 {
                top: 107px;
                left: 1px;
                padding: 0px;
                width: 188px;
                height: 56px;
            }
            #PARAGRAPH132 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE133 {
                top: 67px;
                left: 4px;
                padding: 0px;
                width: 212px;
                height: 40px;
            }
            #HEADLINE133 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP134 {
                top: 114px;
                left: 746.0000610351562px;
                width: 213px;
                height: 163px;
            }
            #SHAPE135 {
                top: 0px;
                left: 3px;
                width: 50px;
                height: 50px;
            }
            #PARAGRAPH136 {
                top: 107px;
                left: 1px;
                padding: 0px;
                width: 188px;
                height: 56px;
            }
            #PARAGRAPH136 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE137 {
                top: 67px;
                left: 2px;
                padding: 0px;
                width: 212px;
                height: 40px;
            }
            #HEADLINE137 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP138 {
                top: 114px;
                left: 519px;
                width: 217px;
                height: 145.0000228881836px;
            }
            #HEADLINE139 {
                top: 67px;
                left: 6px;
                padding: 0px;
                width: 212px;
                height: 40px;
            }
            #HEADLINE139 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH140 {
                top: 107.66668701171875px;
                left: 1px;
                padding: 0px;
                width: 188px;
                height: 37.333335876464844px;
            }
            #PARAGRAPH140 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #SHAPE141 {
                top: 0px;
                left: 5px;
                width: 50px;
                height: 50px;
            }
            #IMAGE142 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/uploads/images/5a8563a5-5f68-4470-b806-42ec62e2cac6.jpg);
            }
            #IMAGE142 {
                top: 0px;
                left: -515px;
                width: 960px;
                height: 617px;
            }
            #HEADLINE143 {
                top: 288px;
                left: 453.00001525878906px;
                padding: 0px;
                width: 350.66668701171875px;
                height: 72px;
            }
            #HEADLINE143 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #LINE145 {
                top: 360px;
                left: 477.3333435058594px;
                width: 164.33334350585938px;
                height: 25px;
            }
            #BUTTON146 {
                top: 514.604px;
                left: 562px;
                padding: 0px;
                width: 325.3333435058594px;
                height: 64px;
            }
            #BUTTON146 > .widget-content {
                font-size: 23px;
                text-align: center;
            }
            #IMAGE171 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/_mg_4725-1512813471785.jpg);
            }
            #IMAGE171 {
                top: 209px;
                left: 99.6667px;
                width: 375px;
                height: 465px;
            }
            #BOX158 {
                top: 206.667px;
                left: 474px;
                width: 391px;
                height: 467.3333435058594px;
            }
            #HEADLINE170 {
                top: 65.66665649414062px;
                left: 35px;
                padding: 0px;
                width: 321.3333435058594px;
                height: 360px;
            }
            #HEADLINE170 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE159 {
                top: 9.333343505859375px;
                left: 34px;
                padding: 0px;
                width: 268px;
                height: 24px;
            }
            #HEADLINE159 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE165 {
                top: 248px;
                left: 501.313px;
                padding: 0px;
                width: 277.3333435058594px;
                height: 34.66666793823242px;
            }
            #HEADLINE165 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE172 {
                top: 77.667px;
                left: 125.687px;
                padding: 0px;
                width: 717.3333740234375px;
                height: 36px;
            }
            #HEADLINE172 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE226 {
                top: 119px;
                left: 72px;
                padding: 0px;
                width: 408px;
                height: 40px;
            }
            #HEADLINE226 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #YOUTUBE227 {
                top: 212px;
                left: 320.555px;
                width: 605.1041870117188px;
                height: 371.3333435058594px;
            }
            #BOX228 {
                top: 194px;
                left: 0px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE229 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 25px;
                height: 25px;
            }
            #HEADLINE229 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE230 {
                top: 201px;
                left: 45px;
                padding: 0px;
                width: 334.66668701171875px;
                height: 21.33333396911621px;
            }
            #HEADLINE230 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX231 {
                top: 240px;
                left: 0px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE232 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 25px;
                height: 25px;
            }
            #HEADLINE232 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE233 {
                top: 247px;
                left: 44px;
                padding: 0px;
                width: 392px;
                height: 21.33333396911621px;
            }
            #HEADLINE233 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX234 {
                top: 287px;
                left: 0.046875px;
                width: 34.578125px;
                height: 33px;
            }
            #HEADLINE235 {
                top: 5px;
                left: 4.19289px;
                padding: 0px;
                width: 26.203125px;
                height: 25px;
            }
            #HEADLINE235 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE236 {
                top: 292px;
                left: 46.9844px;
                padding: 0px;
                width: 330.66668701171875px;
                height: 21.33333396911621px;
            }
            #HEADLINE236 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX237 {
                top: 339px;
                left: 0px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE238 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 25px;
                height: 25px;
            }
            #HEADLINE238 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE239 {
                top: 346px;
                left: 45px;
                padding: 0px;
                width: 348px;
                height: 21.33333396911621px;
            }
            #HEADLINE239 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX240 {
                top: 390px;
                left: 1px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE241 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 25px;
                height: 25px;
            }
            #HEADLINE241 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE242 {
                top: 397px;
                left: 46px;
                padding: 0px;
                width: 348px;
                height: 21.33333396911621px;
            }
            #HEADLINE242 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX243 {
                top: 441px;
                left: 0px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE244 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 25px;
                height: 25px;
            }
            #HEADLINE244 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE245 {
                top: 448px;
                left: 45px;
                padding: 0px;
                width: 384px;
                height: 21.33333396911621px;
            }
            #HEADLINE245 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX246 {
                top: 484px;
                left: 0px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE247 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 24px;
                height: 24px;
            }
            #HEADLINE247 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #BOX249 {
                top: 527px;
                left: 0px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE250 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 24px;
                height: 24px;
            }
            #HEADLINE250 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #BOX251 {
                top: 570px;
                left: 0px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE252 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 24px;
                height: 24px;
            }
            #HEADLINE252 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE254 {
                top: 492.979px;
                left: 45.6667px;
                padding: 0px;
                width: 384px;
                height: 21.33333396911621px;
            }
            #HEADLINE254 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE255 {
                top: 537.917px;
                left: 46px;
                padding: 0px;
                width: 384px;
                height: 21.33333396911621px;
            }
            #HEADLINE255 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE256 {
                top: 577.25px;
                left: 46.6667px;
                padding: 0px;
                width: 384px;
                height: 21.33333396911621px;
            }
            #HEADLINE256 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE270 {
                top: 59px;
                left: 69.3541px;
                padding: 0px;
                width: 841.3333740234375px;
                height: 33.333335876464844px;
            }
            #HEADLINE270 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE271 {
                top: 101px;
                left: 325px;
                padding: 0px;
                width: 310px;
                height: 20px;
            }
            #HEADLINE271 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #GROUP276 {
                top: 157.3333282470703px;
                left: -1px;
                width: 603.3125px;
                height: 400.5625px;
            }
            #LINE277 {
                top: 109px;
                left: 93.3125px;
                width: 510px;
                height: 25px;
            }
            #LINE278 {
                top: 261px;
                left: 93.3125px;
                width: 510px;
                height: 25px;
            }
            #GROUP279 {
                top: 0px;
                left: 1px;
                width: 603.3125px;
                height: 102.4375px;
            }
            #HEADLINE280 {
                top: 5.4375px;
                left: 105.4375px;
                padding: 0px;
                width: 357.3333435058594px;
                height: 21.33333396911621px;
            }
            #HEADLINE280 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX281 {
                top: 0px;
                left: 1px;
                width: 81px;
                height: 81px;
            }
            #BOX282 {
                top: 40.4375px;
                left: 102.3125px;
                width: 502px;
                height: 62px;
            }
            #PARAGRAPH283 {
                top: 12px;
                left: 23px;
                padding: 0px;
                width: 456px;
                height: 37.333335876464844px;
            }
            #PARAGRAPH283 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP284 {
                top: 134px;
                left: 1px;
                width: 600.4375px;
                height: 114.5625px;
            }
            #HEADLINE285 {
                top: 11.3125px;
                left: 103.625px;
                padding: 0px;
                width: 223.3541717529297px;
                height: 21.33333396911621px;
            }
            #HEADLINE285 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX286 {
                top: 0px;
                left: 1px;
                width: 81px;
                height: 81px;
            }
            #BOX287 {
                top: 52.5625px;
                left: 99.4375px;
                width: 502px;
                height: 62px;
            }
            #PARAGRAPH288 {
                top: 6px;
                left: 22.97918701171875px;
                padding: 0px;
                width: 456px;
                height: 56px;
            }
            #PARAGRAPH288 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP326 {
                top: 286px;
                left: 1px;
                width: 600.4375px;
                height: 114.5625px;
            }
            #HEADLINE327 {
                top: 0px;
                left: 103.9375px;
                padding: 0px;
                width: 369.3333435058594px;
                height: 42.66666793823242px;
            }
            #HEADLINE327 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX328 {
                top: 0px;
                left: 1px;
                width: 81px;
                height: 81px;
            }
            #BOX329 {
                top: 52.5625px;
                left: 99.4375px;
                width: 502px;
                height: 62px;
            }
            #PARAGRAPH330 {
                top: 6px;
                left: 22.9792px;
                padding: 0px;
                width: 456px;
                height: 37.333335876464844px;
            }
            #PARAGRAPH330 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX294 {
                top: 174.849px;
                left: 641px;
                width: 296px;
                height: 392.3333435058594px;
            }
            #HEADLINE296 {
                top: 22.0313px;
                left: 35px;
                padding: 0px;
                width: 237px;
                height: 77.33333587646484px;
            }
            #HEADLINE296 > .widget-content {
                font-size: 33px;
                text-align: left;
            }
            #BUTTON297 {
                top: 321.593px;
                left: 89px;
                padding: 0px;
                width: 104px;
                height: 38.66666793823242px;
            }
            #BUTTON297 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #FORM298 {
                top: 123.609375px;
                left: 35px;
                width: 229px;
                height: 158.609375px;
            }
            #ITEM_FORM299 {
                top: 0px;
                left: 0px;
                width: 229px;
                height: 45.609375px;
            }
            #ITEM_FORM300 {
                top: 57.1951px;
                left: 0px;
                width: 229px;
                height: 45.609375px;
            }
            #ITEM_FORM301 {
                top: 113px;
                left: 0px;
                width: 229px;
                height: 45.609375px;
            }
            #HEADLINE304 {
                top: 378.667px;
                left: 274px;
                padding: 0px;
                width: 397.3333435058594px;
                height: 42.66666793823242px;
            }
            #HEADLINE304 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BUTTON305 {
                top: 485px;
                left: 363px;
                padding: 0px;
                width: 235px;
                height: 56px;
            }
            #BUTTON305 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE307 {
                top: 91px;
                left: 243px;
                padding: 0px;
                width: 472px;
                height: 80px;
            }
            #HEADLINE307 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #BOX308 {
                top: 251px;
                left: 323px;
                width: 312px;
                height: 101px;
            }
            #GROUP309 {
                top: 22px;
                left: 15px;
                width: 283px;
                height: 17px;
            }
            #PARAGRAPH310 {
                top: 0px;
                left: 0px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH310 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH311 {
                top: 0px;
                left: 73px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH311 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH312 {
                top: 0px;
                left: 147px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH312 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH313 {
                top: 0px;
                left: 222px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH313 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #COUNTDOWN314 {
                top: 38px;
                left: 10px;
                width: 298px;
                height: 45px;
            }
            #COUNTDOWN314 > .widget-content {
                font-size: 36px;
            }
            #PARAGRAPH331 {
                top: 672.667px;
                left: 0.666687px;
                padding: 0px;
                width: 476px;
                height: 106.66667175292969px;
            }
            #PARAGRAPH331 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX316 {
                top: 30px;
                left: 57.5px;
                width: 337px;
                height: 397px;
            }
            #HEADLINE318 {
                top: 13px;
                left: 13px;
                padding: 0px;
                width: 309px;
                height: 27px;
            }
            #HEADLINE318 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #FORM320 {
                top: 147.125px;
                left: 29px;
                width: 274px;
                height: 156.125px;
            }
            #FORM320 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM321 {
                top: 0px;
                left: 0px;
                width: 274px;
                height: 41.875px;
            }
            #ITEM_FORM321 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM322 {
                top: 55px;
                left: 0px;
                width: 274px;
                height: 41.875px;
            }
            #ITEM_FORM322 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM323 {
                top: 114.255px;
                left: 0px;
                width: 274px;
                height: 41.875px;
            }
            #ITEM_FORM323 > .widget-content {
                font-size: 16px;
            }
            #BUTTON324 {
                top: 320px;
                left: 49px;
                padding: 0px;
                width: 230px;
                height: 43px;
            }
            #BUTTON324 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #PARAGRAPH319 {
                top: 70px;
                left: 26px;
                padding: 0px;
                width: 284px;
                height: 20px;
            }
            #PARAGRAPH319 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #BOX317 {
                top: 29px;
                left: 57.5px;
                width: 337px;
                height: 91px;
            }
            #HEADLINE325 {
                top: 24px;
                left: 87px;
                padding: 0px;
                width: 200px;
                height: 36px;
            }
            #HEADLINE325 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #BOX148 {
                top: 0px;
                left: -2px;
                width: 445px;
                height: 75px;
            }
            #HEADLINE149 {
                top: 24px;
                left: 57.5px;
                padding: 0px;
                width: 365.3333435058594px;
                height: 29.33333396911621px;
            }
            #HEADLINE149 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #FORM151 {
                top: 157.75px;
                left: 68.5px;
                width: 329px;
                height: 156.125px;
            }
            #FORM151 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM152 {
                top: 0px;
                left: 0px;
                width: 329px;
                height: 41.875px;
            }
            #ITEM_FORM152 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM153 {
                top: 55px;
                left: 0px;
                width: 329px;
                height: 41.875px;
            }
            #ITEM_FORM153 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM154 {
                top: 114.255px;
                left: 0px;
                width: 329px;
                height: 41.875px;
            }
            #ITEM_FORM154 > .widget-content {
                font-size: 15px;
            }
            #BUTTON155 {
                top: 333.75px;
                left: 136.5px;
                padding: 0px;
                width: 199px;
                height: 48px;
            }
            #BUTTON155 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #LINEVERTICAL156 {
                top: 12.5px;
                left: 30.5px;
                width: 25px;
                height: 410px;
            }
            #BOX46 {
                top: 73px;
                left: 0px;
                width: 390px;
                height: 158px;
            }
            #HEADLINE47 {
                top: 35.16668701171875px;
                left: 17px;
                padding: 0px;
                width: 356.3333435058594px;
                height: 72px;
            }
            #HEADLINE47 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #FORM49 {
                top: 245.125px;
                left: 42px;
                width: 315px;
                height: 156.125px;
            }
            #FORM49 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM50 {
                top: 0px;
                left: 0px;
                width: 312px;
                height: 41.875px;
            }
            #ITEM_FORM50 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM51 {
                top: 57.875px;
                left: 1px;
                width: 312px;
                height: 41.875px;
            }
            #ITEM_FORM51 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM52 {
                top: 114.255px;
                left: 0px;
                width: 312px;
                height: 41.875px;
            }
            #ITEM_FORM52 > .widget-content {
                font-size: 15px;
            }
            #BUTTON53 {
                top: 411px;
                left: 89px;
                padding: 0px;
                width: 216px;
                height: 52px;
            }
            #BUTTON53 > .widget-content {
                font-size: 27px;
                text-align: center;
            }
            #FORM41 {
                top: 311.5px;
                left: 83.5px;
                width: 271px;
                height: 52px;
            }
            #FORM41 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM42 {
                top: 0px;
                left: 0px;
                width: 271px;
                height: 52px;
            }
            #ITEM_FORM42 > .widget-content {
                font-size: 16px;
            }
            #BUTTON43 {
                top: 376px;
                left: 133.5px;
                padding: 0px;
                width: 169px;
                height: 45px;
            }
            #BUTTON43 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #SHAPE38 {
                top: -8.5px;
                left: 180.16668701171875px;
                width: 67px;
                height: 67px;
            }
            #HEADLINE37 {
                top: 58.5px;
                left: 77.5px;
                padding: 0px;
                width: 272px;
                height: 124px;
            }
            #HEADLINE37 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #LINE40 {
                top: 176.5px;
                left: 93.5px;
                width: 240px;
                height: 25px;
            }
        }
        
        #SECTION19 {
            display: block;
            background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/5237-small.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION19 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #SECTION80 {
            display: block;
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-2137288_1920-1512876840255.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top right;
            background-repeat: no-repeat;
        }
        
        #SECTION80 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.37);
        }
        
        #SECTION125 {
            display: block;
            background-color: rgba(40, 39, 61, 1);
        }
        
        #SECTION157 {
            display: block;
            background-image: url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION157 > .ladi-widget-overlay {
            background-color: rgba(7, 19, 64, 0.82);
        }
        
        #SECTION224 {
            display: block;
            background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg-spa4.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION224 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #SECTION269 {
            display: block;
            background-color: rgba(255, 215, 64, 0.58);
        }
        
        #SECTION303 {
            display: block;
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/woman-945822_1920-1512876496283.jpg");
            background-color: #729e00;
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION303 > .ladi-widget-overlay {
            background-color: rgba(31, 31, 31, 0.32);
        }
        
        #POPUP315 .container {
            display: block;
            background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/fopr.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP315 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP147 .container {
            display: block;
            background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg-282977.png");
            background-color: rgba(255, 60, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP147 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP45 .container {
            display: block;
            background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/32132.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top right;
            background-repeat: no-repeat;
        }
        
        #POPUP45 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP36 .container {
            display: block;
            background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg-3.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP36 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #LINE20 {
            display: block;
        }
        
        #LINE20>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(5, 5, 5, 1);
            margin-top: 10.5px;
        }
        
        #LINE20 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE22 {
            display: block;
        }
        
        #HEADLINE22 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 42px;
        }
        
        #IMAGE23 {
            display: block;
        }
        
        #IMAGE23 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE23 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0)
        }
        
        #BOX24 {
            display: block;
        }
        
        #BOX24 > .widget-content {
            background-color: rgba(203, 147, 1, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX24> .widget-content {
            border-radius: 330px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX24> .ladi-widget-overlay {
            border-radius: 330px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE25 {
            display: block;
        }
        
        #SHAPE25 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE25> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #BOX26 {
            display: block;
        }
        
        #BOX26 > .widget-content {
            background-color: rgba(255, 255, 255, 0.73);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX26> .widget-content {
            border-radius: 4px;
        }
        
        #BOX26> .ladi-widget-overlay {
            border-radius: 4px;
        }
        
        #HEADLINE27 {
            display: block;
        }
        
        #HEADLINE27 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(203, 147, 1, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX28 {
            display: block;
        }
        
        #BOX28 > .widget-content {
            background-color: rgba(203, 147, 1, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX28> .widget-content {
            border-radius: 330px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX28> .ladi-widget-overlay {
            border-radius: 330px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE29 {
            display: block;
        }
        
        #SHAPE29 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE29> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #BOX30 {
            display: block;
        }
        
        #BOX30 > .widget-content {
            background-color: rgba(255, 255, 255, 0.73);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX30> .widget-content {
            border-radius: 4px;
        }
        
        #BOX30> .ladi-widget-overlay {
            border-radius: 4px;
        }
        
        #HEADLINE31 {
            display: block;
        }
        
        #HEADLINE31 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(203, 147, 1, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX32 {
            display: block;
        }
        
        #BOX32 > .widget-content {
            background-color: rgba(255, 255, 255, 0.73);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX32> .widget-content {
            border-radius: 4px;
        }
        
        #BOX32> .ladi-widget-overlay {
            border-radius: 4px;
        }
        
        #BOX34 {
            display: block;
        }
        
        #BOX34 > .widget-content {
            background-color: rgba(203, 147, 1, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX34> .widget-content {
            border-radius: 330px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX34> .ladi-widget-overlay {
            border-radius: 330px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
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
        
        #HEADLINE33 {
            display: block;
        }
        
        #HEADLINE33 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(203, 147, 1, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX81 {
            display: block;
        }
        
        #BOX81 > .widget-content {
            background-color: rgba(255, 232, 20, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX81> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 232, 20, 1);
        }
        
        #BOX81> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 232, 20, 1);
        }
        
        #FORM82 {
            display: block;
        }
        
        #FORM82 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #FORM82 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM82 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM82 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM82 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM83 {
            display: block;
        }
        
        #ITEM_FORM83 > .widget-content {
            background-color: rgba(255, 255, 255, 0.28);
        }
        
        #ITEM_FORM83> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM83> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM83 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM83 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM83 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM83 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM84 {
            display: block;
        }
        
        #ITEM_FORM84 > .widget-content {
            background-color: rgba(255, 255, 255, 0.28);
        }
        
        #ITEM_FORM84> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM84> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM84 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM84 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM84 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM84 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM85 {
            display: block;
        }
        
        #ITEM_FORM85 > .widget-content {
            background-color: rgba(255, 255, 255, 0.28);
        }
        
        #ITEM_FORM85> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM85> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM85 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM85 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM85 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM85 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #BUTTON86 {
            display: table;
        }
        
        #BUTTON86 > .widget-content {
            background-color: rgba(255, 232, 20, 1);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 40px;
        }
        
        #BUTTON86> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON86> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE87 {
            display: block;
        }
        
        #HEADLINE87 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #GROUP88 {
            display: block;
        }
        
        #GROUP88 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX90 {
            display: block;
        }
        
        #BOX90 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX90> .widget-content {
            border-radius: 220px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 232, 20, 1);
        }
        
        #BOX90> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 232, 20, 1);
        }
        
        #SHAPE91 {
            display: block;
        }
        
        #SHAPE91 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 232, 20, 1);
        }
        
        #SHAPE91> .widget-content svg {
            fill: rgba(255, 232, 20, 1);
        }
        
        #HEADLINE92 {
            display: block;
        }
        
        #HEADLINE92 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 232, 20, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #PARAGRAPH93 {
            display: block;
        }
        
        #PARAGRAPH93 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #PARAGRAPH94 {
            display: block;
        }
        
        #PARAGRAPH94 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE95 {
            display: block;
        }
        
        #HEADLINE95 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 232, 20, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX96 {
            display: block;
        }
        
        #BOX96 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX96> .widget-content {
            border-radius: 220px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 232, 20, 1);
        }
        
        #BOX96> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 232, 20, 1);
        }
        
        #SHAPE97 {
            display: block;
        }
        
        #SHAPE97 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 232, 20, 1);
        }
        
        #SHAPE97> .widget-content svg {
            fill: rgba(255, 232, 20, 1);
        }
        
        #BOX98 {
            display: block;
        }
        
        #BOX98 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX98> .widget-content {
            border-radius: 220px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 232, 20, 1);
        }
        
        #BOX98> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 232, 20, 1);
        }
        
        #SHAPE99 {
            display: block;
        }
        
        #SHAPE99 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 232, 20, 1);
        }
        
        #SHAPE99> .widget-content svg {
            fill: rgba(255, 232, 20, 1);
        }
        
        #HEADLINE100 {
            display: block;
        }
        
        #HEADLINE100 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 232, 20, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #PARAGRAPH101 {
            display: block;
        }
        
        #PARAGRAPH101 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #GROUP126 {
            display: block;
        }
        
        #GROUP126 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE127 {
            display: block;
        }
        
        #HEADLINE127 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #PARAGRAPH128 {
            display: block;
        }
        
        #PARAGRAPH128 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            line-height: 19px;
        }
        
        #SHAPE129 {
            display: block;
        }
        
        #SHAPE129 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE129> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP130 {
            display: block;
        }
        
        #GROUP130 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE131 {
            display: block;
        }
        
        #SHAPE131 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE131> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #PARAGRAPH132 {
            display: block;
        }
        
        #PARAGRAPH132 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            line-height: 19px;
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
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #GROUP134 {
            display: block;
        }
        
        #GROUP134 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE135 {
            display: block;
        }
        
        #SHAPE135 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE135> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #PARAGRAPH136 {
            display: block;
        }
        
        #PARAGRAPH136 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            line-height: 19px;
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
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #GROUP138 {
            display: block;
        }
        
        #GROUP138 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE139 {
            display: block;
        }
        
        #HEADLINE139 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #PARAGRAPH140 {
            display: block;
        }
        
        #PARAGRAPH140 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            line-height: 19px;
        }
        
        #SHAPE141 {
            display: block;
        }
        
        #SHAPE141 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE141> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
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
        
        #HEADLINE143 {
            display: block;
        }
        
        #HEADLINE143 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #LINE145 {
            display: block;
        }
        
        #LINE145>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 10.5px;
        }
        
        #LINE145 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON146 {
            display: table;
        }
        
        #BUTTON146 > .widget-content {
            background-color: #3D9BE9;
            color: rgba(253, 216, 53, 1);
            font-weight: 700;
            line-height: 29px;
        }
        
        #BUTTON146> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON146> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #IMAGE171 {
            display: block;
        }
        
        #IMAGE171 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE171 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX158 {
            display: block;
        }
        
        #BOX158 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE170 {
            display: block;
        }
        
        #HEADLINE170 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(23, 30, 94, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE159 {
            display: block;
        }
        
        #HEADLINE159 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(84, 110, 122, 1);
            font-weight: 700;
            line-height: 25px;
        }
        
        #HEADLINE165 {
            display: block;
        }
        
        #HEADLINE165 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(23, 30, 94, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #HEADLINE172 {
            display: block;
        }
        
        #HEADLINE172 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(218, 179, 64, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE226 {
            display: block;
        }
        
        #HEADLINE226 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Tinos', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 40px;
        }
        
        #YOUTUBE227 {
            display: block;
        }
        
        #YOUTUBE227 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX228 {
            display: block;
        }
        
        #BOX228 > .widget-content {
            background-color: rgba(151, 79, 158, 0.7);
        }
        
        #BOX228> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX228> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE229 {
            display: block;
        }
        
        #HEADLINE229 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE230 {
            display: block;
        }
        
        #HEADLINE230 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX231 {
            display: block;
        }
        
        #BOX231 > .widget-content {
            background-color: rgba(151, 79, 158, 0.7);
        }
        
        #BOX231> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX231> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE232 {
            display: block;
        }
        
        #HEADLINE232 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE233 {
            display: block;
        }
        
        #HEADLINE233 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX234 {
            display: block;
        }
        
        #BOX234 > .widget-content {
            background-color: rgba(151, 79, 158, 0.7);
        }
        
        #BOX234> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX234> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE235 {
            display: block;
        }
        
        #HEADLINE235 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE236 {
            display: block;
        }
        
        #HEADLINE236 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX237 {
            display: block;
        }
        
        #BOX237 > .widget-content {
            background-color: rgba(151, 79, 158, 0.7);
        }
        
        #BOX237> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX237> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE238 {
            display: block;
        }
        
        #HEADLINE238 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE239 {
            display: block;
        }
        
        #HEADLINE239 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX240 {
            display: block;
        }
        
        #BOX240 > .widget-content {
            background-color: rgba(151, 79, 158, 0.7);
        }
        
        #BOX240> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX240> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE241 {
            display: block;
        }
        
        #HEADLINE241 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE242 {
            display: block;
        }
        
        #HEADLINE242 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX243 {
            display: block;
        }
        
        #BOX243 > .widget-content {
            background-color: rgba(151, 79, 158, 0.7);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX243> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX243> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE244 {
            display: block;
        }
        
        #HEADLINE244 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE245 {
            display: block;
        }
        
        #HEADLINE245 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX246 {
            display: block;
        }
        
        #BOX246 > .widget-content {
            background-color: rgba(151, 79, 158, 0.7);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX246> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX246> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE247 {
            display: block;
        }
        
        #HEADLINE247 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #BOX249 {
            display: block;
        }
        
        #BOX249 > .widget-content {
            background-color: rgba(151, 79, 158, 0.7);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX249> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX249> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE250 {
            display: block;
        }
        
        #HEADLINE250 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #BOX251 {
            display: block;
        }
        
        #BOX251 > .widget-content {
            background-color: rgba(151, 79, 158, 0.7);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX251> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX251> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE252 {
            display: block;
        }
        
        #HEADLINE252 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE254 {
            display: block;
        }
        
        #HEADLINE254 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE255 {
            display: block;
        }
        
        #HEADLINE255 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE256 {
            display: block;
        }
        
        #HEADLINE256 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE270 {
            display: block;
        }
        
        #HEADLINE270 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 300;
            line-height: 34px;
        }
        
        #HEADLINE271 {
            display: block;
        }
        
        #HEADLINE271 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 300;
            line-height: 20px;
        }
        
        #GROUP276 {
            display: block;
        }
        
        #GROUP276 > .widget-content {
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
            border-style: dashed;
            border-color: rgba(189, 189, 189, 1);
            margin-top: 12px;
        }
        
        #LINE277 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE278 {
            display: block;
        }
        
        #LINE278>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dashed;
            border-color: rgba(189, 189, 189, 1);
            margin-top: 12px;
        }
        
        #LINE278 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP279 {
            display: block;
        }
        
        #GROUP279 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE280 {
            display: block;
        }
        
        #HEADLINE280 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #BOX281 {
            display: block;
        }
        
        #BOX281 > .widget-content {
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_5380-1512806157919.jpg");
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
        
        #BOX281> .widget-content {
            border-radius: 550px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX281> .ladi-widget-overlay {
            border-radius: 550px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX281 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX282 {
            display: block;
        }
        
        #BOX282 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX282> .widget-content {
            border-radius: 3px;
        }
        
        #BOX282> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #PARAGRAPH283 {
            display: block;
        }
        
        #PARAGRAPH283 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(117, 117, 117, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #GROUP284 {
            display: block;
        }
        
        #GROUP284 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE285 {
            display: block;
        }
        
        #HEADLINE285 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #BOX286 {
            display: block;
        }
        
        #BOX286 > .widget-content {
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
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
        
        #BOX286> .widget-content {
            border-radius: 550px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX286> .ladi-widget-overlay {
            border-radius: 550px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX286 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX287 {
            display: block;
        }
        
        #BOX287 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX287> .widget-content {
            border-radius: 3px;
        }
        
        #BOX287> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #PARAGRAPH288 {
            display: block;
        }
        
        #PARAGRAPH288 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(117, 117, 117, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #GROUP326 {
            display: block;
        }
        
        #GROUP326 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE327 {
            display: block;
        }
        
        #HEADLINE327 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #BOX328 {
            display: block;
        }
        
        #BOX328 > .widget-content {
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
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
        
        #BOX328> .widget-content {
            border-radius: 550px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX328> .ladi-widget-overlay {
            border-radius: 550px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX328 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX329 {
            display: block;
        }
        
        #BOX329 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX329> .widget-content {
            border-radius: 3px;
        }
        
        #BOX329> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #PARAGRAPH330 {
            display: block;
        }
        
        #PARAGRAPH330 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(117, 117, 117, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #BOX294 {
            display: block;
        }
        
        #BOX294 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX294> .widget-content {
            border-radius: 5px;
            border-width: 2px;
            border-style: dashed;
            border-color: rgba(189, 189, 189, 1);
        }
        
        #BOX294> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 2px;
            border-style: dashed;
            border-color: rgba(189, 189, 189, 1);
        }
        
        #HEADLINE296 {
            display: block;
        }
        
        #HEADLINE296 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 700;
            line-height: 39px;
        }
        
        #BUTTON297 {
            display: table;
        }
        
        #BUTTON297 > .widget-content {
            background-color: #3D9BE9;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 22px;
        }
        
        #BUTTON297> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON297> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #FORM298 {
            display: block;
        }
        
        #FORM298 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM298 .widget-content::-webkit-input-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #FORM298 .widget-content:-moz-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #FORM298 .widget-content::-moz-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #FORM298 .widget-content:-ms-input-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM299 {
            display: block;
        }
        
        #ITEM_FORM299 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(89, 89, 89, 1);
        }
        
        #ITEM_FORM299> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(196, 196, 196, 1);
        }
        
        #ITEM_FORM299> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(196, 196, 196, 1);
        }
        
        #ITEM_FORM299 .widget-content::-webkit-input-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM299 .widget-content:-moz-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM299 .widget-content::-moz-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM299 .widget-content:-ms-input-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM300 {
            display: block;
        }
        
        #ITEM_FORM300 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(89, 89, 89, 1);
        }
        
        #ITEM_FORM300> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(196, 196, 196, 1);
        }
        
        #ITEM_FORM300> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(196, 196, 196, 1);
        }
        
        #ITEM_FORM300 .widget-content::-webkit-input-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM300 .widget-content:-moz-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM300 .widget-content::-moz-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM300 .widget-content:-ms-input-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM301 {
            display: block;
        }
        
        #ITEM_FORM301 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(89, 89, 89, 1);
        }
        
        #ITEM_FORM301> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(196, 196, 196, 1);
        }
        
        #ITEM_FORM301> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(196, 196, 196, 1);
        }
        
        #ITEM_FORM301 .widget-content::-webkit-input-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM301 .widget-content:-moz-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM301 .widget-content::-moz-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #ITEM_FORM301 .widget-content:-ms-input-placeholder {
            color: rgba(94, 94, 94, 1)
        }
        
        #HEADLINE304 {
            display: block;
        }
        
        #HEADLINE304 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 253, 253, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BUTTON305 {
            display: table;
        }
        
        #BUTTON305 > .widget-content {
            background-color: #1176f6;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 22px;
        }
        
        #BUTTON305> .widget-content {
            border-radius: 0px;
            border-width: 0px;
            border-style: solid;
        }
        
        #BUTTON305> .ladi-widget-overlay {
            border-radius: 0px;
            border-width: 0px;
            border-style: solid;
        }
        
        #HEADLINE307 {
            display: block;
        }
        
        #HEADLINE307 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 40px;
        }
        
        #BOX308 {
            display: block;
        }
        
        #BOX308 > .widget-content {
            background-color: #1176f6;
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP309 {
            display: block;
        }
        
        #GROUP309 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH310 {
            display: block;
        }
        
        #PARAGRAPH310 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #PARAGRAPH311 {
            display: block;
        }
        
        #PARAGRAPH311 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #PARAGRAPH312 {
            display: block;
        }
        
        #PARAGRAPH312 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #PARAGRAPH313 {
            display: block;
        }
        
        #PARAGRAPH313 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 17px;
        }
        
        #COUNTDOWN314 {
            display: block;
        }
        
        #COUNTDOWN314 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
        }
        
        #PARAGRAPH331 {
            display: block;
        }
        
        #PARAGRAPH331 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #BOX316 {
            display: block;
        }
        
        #BOX316 > .widget-content {
            background-color: rgba(0, 0, 0, 0.71);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX316> .widget-content {
            border-radius: 10px;
        }
        
        #BOX316> .ladi-widget-overlay {
            border-radius: 10px;
        }
        
        #HEADLINE318 {
            display: block;
        }
        
        #HEADLINE318 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(25, 23, 23, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #FORM320 {
            display: block;
        }
        
        #FORM320 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM320 .widget-content::-webkit-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #FORM320 .widget-content:-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #FORM320 .widget-content::-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #FORM320 .widget-content:-ms-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM321 {
            display: block;
        }
        
        #ITEM_FORM321 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM321> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM321> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM321 .widget-content::-webkit-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM321 .widget-content:-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM321 .widget-content::-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM321 .widget-content:-ms-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM322 {
            display: block;
        }
        
        #ITEM_FORM322 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM322> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM322> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM322 .widget-content::-webkit-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM322 .widget-content:-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM322 .widget-content::-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM322 .widget-content:-ms-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM323 {
            display: block;
        }
        
        #ITEM_FORM323 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM323> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM323> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM323 .widget-content::-webkit-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM323 .widget-content:-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM323 .widget-content::-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM323 .widget-content:-ms-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #BUTTON324 {
            display: table;
        }
        
        #BUTTON324 > .widget-content {
            background-color: rgba(60, 219, 255, 1);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(31, 31, 31, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #BUTTON324> .widget-content {
            border-radius: 25px;
        }
        
        #BUTTON324> .ladi-widget-overlay {
            border-radius: 25px;
        }
        
        #PARAGRAPH319 {
            display: block;
        }
        
        #PARAGRAPH319 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 21px;
        }
        
        #BOX317 {
            display: block;
        }
        
        #BOX317 > .widget-content {
            background-color: #3cdbff;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX317> .widget-content {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        
        #BOX317> .ladi-widget-overlay {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        
        #HEADLINE325 {
            display: block;
        }
        
        #HEADLINE325 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #BOX148 {
            display: block;
        }
        
        #BOX148 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE149 {
            display: block;
        }
        
        #HEADLINE149 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(59, 59, 59, 1);
            font-weight: 600;
            line-height: 30px;
            letter-spacing: 1px;
        }
        
        #FORM151 {
            display: block;
        }
        
        #FORM151 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM151 .widget-content::-webkit-input-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #FORM151 .widget-content:-moz-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #FORM151 .widget-content::-moz-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #FORM151 .widget-content:-ms-input-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM152 {
            display: block;
        }
        
        #ITEM_FORM152 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM152> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM152> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM152 .widget-content::-webkit-input-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM152 .widget-content:-moz-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM152 .widget-content::-moz-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM152 .widget-content:-ms-input-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM153 {
            display: block;
        }
        
        #ITEM_FORM153 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM153> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM153> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM153 .widget-content::-webkit-input-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM153 .widget-content:-moz-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM153 .widget-content::-moz-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM153 .widget-content:-ms-input-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM154 {
            display: block;
        }
        
        #ITEM_FORM154 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM154> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM154> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM154 .widget-content::-webkit-input-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM154 .widget-content:-moz-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM154 .widget-content::-moz-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #ITEM_FORM154 .widget-content:-ms-input-placeholder {
            color: rgba(150, 150, 150, 1)
        }
        
        #BUTTON155 {
            display: table;
        }
        
        #BUTTON155 > .widget-content {
            background-color: #FF4F19;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 600;
            line-height: 36px;
            box-shadow: 0px 2px 0px rgba(255, 255, 255, 1);
        }
        
        #BUTTON155> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON155> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #LINEVERTICAL156 {
            display: block;
        }
        
        #LINEVERTICAL156>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL156 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX46 {
            display: block;
        }
        
        #BOX46 > .widget-content {
            background-color: rgba(255, 91, 19, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE47 {
            display: block;
        }
        
        #HEADLINE47 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 36px;
        }
        
        #FORM49 {
            display: block;
        }
        
        #FORM49 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM49 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM49 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM49 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM49 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM50 {
            display: block;
        }
        
        #ITEM_FORM50 > .widget-content {
            background-color: rgba(27, 194, 151, 1);
            color: rgba(224, 224, 224, 1);
        }
        
        #ITEM_FORM50> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM50> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM50 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM50 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM50 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM50 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM51 {
            display: block;
        }
        
        #ITEM_FORM51 > .widget-content {
            background-color: rgba(27, 194, 151, 1);
            color: rgba(224, 224, 224, 1);
        }
        
        #ITEM_FORM51> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM51> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM51 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM51 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM51 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM51 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM52 {
            display: block;
        }
        
        #ITEM_FORM52 > .widget-content {
            background-color: rgba(27, 194, 151, 1);
            color: rgba(224, 224, 224, 1);
        }
        
        #ITEM_FORM52> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM52> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(204, 204, 204, 1);
        }
        
        #ITEM_FORM52 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM52 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM52 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM52 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #BUTTON53 {
            display: table;
        }
        
        #BUTTON53 > .widget-content {
            background-color: rgba(255, 91, 19, 1);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 600;
            line-height: 33px;
        }
        
        #BUTTON53> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON53> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #FORM41 {
            display: block;
        }
        
        #FORM41 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM41 .widget-content::-webkit-input-placeholder {
            color: rgba(23, 58, 82, 1)
        }
        
        #FORM41 .widget-content:-moz-placeholder {
            color: rgba(23, 58, 82, 1)
        }
        
        #FORM41 .widget-content::-moz-placeholder {
            color: rgba(23, 58, 82, 1)
        }
        
        #FORM41 .widget-content:-ms-input-placeholder {
            color: rgba(23, 58, 82, 1)
        }
        
        #ITEM_FORM42 {
            display: block;
        }
        
        #ITEM_FORM42 > .widget-content {
            background-color: rgba(52, 152, 219, 1);
            color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM42> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(191, 191, 191, 1);
        }
        
        #ITEM_FORM42> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(191, 191, 191, 1);
        }
        
        #ITEM_FORM42 .widget-content::-webkit-input-placeholder {
            color: rgba(23, 58, 82, 1)
        }
        
        #ITEM_FORM42 .widget-content:-moz-placeholder {
            color: rgba(23, 58, 82, 1)
        }
        
        #ITEM_FORM42 .widget-content::-moz-placeholder {
            color: rgba(23, 58, 82, 1)
        }
        
        #ITEM_FORM42 .widget-content:-ms-input-placeholder {
            color: rgba(23, 58, 82, 1)
        }
        
        #BUTTON43 {
            display: table;
        }
        
        #BUTTON43 > .widget-content {
            background-color: rgba(250, 90, 0, 1);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 40px;
            letter-spacing: 0px;
            box-shadow: 0px 0px 0px rgba(255, 255, 255, 1);
        }
        
        #BUTTON43> .widget-content {
            border-radius: 10px;
        }
        
        #BUTTON43> .ladi-widget-overlay {
            border-radius: 10px;
        }
        
        #SHAPE38 {
            display: block;
        }
        
        #SHAPE38 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #3498DB;
        }
        
        #SHAPE38> .widget-content svg {
            fill: #3498DB;
        }
        
        #HEADLINE37 {
            display: block;
        }
        
        #HEADLINE37 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Arima Madurai', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #3498DB;
            text-transform: uppercase;
            font-weight: 600;
            line-height: 42px;
        }
        
        #LINE40 {
            display: block;
        }
        
        #LINE40>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(250, 90, 0, 1);
            margin-top: 10.5px;
        }
        
        #LINE40 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION19 {
                width: 100%;
                height: 1094px;
            }
            #SECTION19 .container {}
            #SECTION19 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/5237-small.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION80 {
                width: 100%;
                height: 1157px;
            }
            #SECTION80 .container {}
            #SECTION80 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.37), rgba(0, 0, 0, 0.37)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-2137288_1920-1512876840255.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.37), rgba(0, 0, 0, 0.37)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-2137288_1920-1512876840255.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.37), rgba(0, 0, 0, 0.37)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-2137288_1920-1512876840255.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.37), rgba(0, 0, 0, 0.37)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-2137288_1920-1512876840255.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.37), rgba(0, 0, 0, 0.37)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-2137288_1920-1512876840255.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top right;
                background-repeat: no-repeat;
            }
            #SECTION125 {
                width: 100%;
                height: 1194px;
            }
            #SECTION125 .container {}
            #SECTION125 {
                background-image: none;
            }
            #SECTION157 {
                width: 100%;
                height: 1215.6458740234375px;
            }
            #SECTION157 .container {}
            #SECTION157 {
                background-image: linear-gradient(rgba(7, 19, 64, 0.82), rgba(7, 19, 64, 0.82)), url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -o-linear-gradient(rgba(7, 19, 64, 0.82), rgba(7, 19, 64, 0.82)), url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -ms-linear-gradient(rgba(7, 19, 64, 0.82), rgba(7, 19, 64, 0.82)), url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -moz-linear-gradient(rgba(7, 19, 64, 0.82), rgba(7, 19, 64, 0.82)), url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -webkit-linear-gradient(rgba(7, 19, 64, 0.82), rgba(7, 19, 64, 0.82)), url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION224 {
                width: 100%;
                height: 962.3123378753662px;
            }
            #SECTION224 .container {}
            #SECTION224 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg-spa4.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION269 {
                width: 100%;
                height: 1460.791748046875px;
            }
            #SECTION269 .container {}
            #SECTION269 {
                background-image: none;
            }
            #SECTION303 {
                width: 100%;
                height: 800.6666870117188px;
            }
            #SECTION303 .container {}
            #SECTION303 {
                background-image: linear-gradient(rgba(31, 31, 31, 0.32), rgba(31, 31, 31, 0.32)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/woman-945822_1920-1512876496283.jpg");
                background-image: -o-linear-gradient(rgba(31, 31, 31, 0.32), rgba(31, 31, 31, 0.32)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/woman-945822_1920-1512876496283.jpg");
                background-image: -ms-linear-gradient(rgba(31, 31, 31, 0.32), rgba(31, 31, 31, 0.32)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/woman-945822_1920-1512876496283.jpg");
                background-image: -moz-linear-gradient(rgba(31, 31, 31, 0.32), rgba(31, 31, 31, 0.32)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/woman-945822_1920-1512876496283.jpg");
                background-image: -webkit-linear-gradient(rgba(31, 31, 31, 0.32), rgba(31, 31, 31, 0.32)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/woman-945822_1920-1512876496283.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP315 {
                width: 100%;
                height: 100%;
            }
            #POPUP315 .container {
                width: 100%;
                height: 437px;
                top: calc(100%-437px);
            }
            #POPUP315 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/fopr.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP147 {
                width: 100%;
                height: 100%;
            }
            #POPUP147 .container {
                width: 100%;
                height: 388.125px;
                top: calc(100%-388.125px);
            }
            #POPUP147 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg-282977.png");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP45 {
                width: 100%;
                height: 100%;
            }
            #POPUP45 .container {
                width: 100%;
                height: 417.125px;
                top: calc(100%-417.125px);
            }
            #POPUP45 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/32132.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top right;
                background-repeat: no-repeat;
            }
            #POPUP36 {
                width: 100%;
                height: 100%;
            }
            #POPUP36 .container {
                width: 375px;
                height: 403px;
                top: calc(100%-403px);
            }
            #POPUP36 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg-3.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #LINE20 {
                top: 580px;
                left: 10.1667px;
                width: 355px;
                height: 25px;
            }
            #HEADLINE22 {
                top: 463px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 124px;
            }
            #HEADLINE22 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #IMAGE23 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/848a0382-1512807460466.png);
            }
            #IMAGE23 {
                top: 134.333px;
                left: 38.8896px;
                width: 314.453125px;
                height: 317.3125px;
            }
            #BOX24 {
                top: 911px;
                left: 153.144px;
                width: 71.765625px;
                height: 71px;
            }
            #SHAPE25 {
                top: 17px;
                left: 16px;
                width: 37px;
                height: 37px;
            }
            #BOX26 {
                top: 997px;
                left: 22.1667px;
                width: 331px;
                height: 54px;
            }
            #HEADLINE27 {
                top: 14px;
                left: 24.6458px;
                padding: 0px;
                width: 280px;
                height: 24px;
            }
            #HEADLINE27 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX28 {
                top: 750px;
                left: 153.144px;
                width: 71.765625px;
                height: 71px;
            }
            #SHAPE29 {
                top: 17px;
                left: 16px;
                width: 37px;
                height: 37px;
            }
            #BOX30 {
                top: 839px;
                left: 22.1667px;
                width: 331px;
                height: 54px;
            }
            #HEADLINE31 {
                top: 6px;
                left: 16.6458px;
                padding: 0px;
                width: 280px;
                height: 48px;
            }
            #HEADLINE31 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX32 {
                top: 690px;
                left: 26.1667px;
                width: 324px;
                height: 54px;
            }
            #BOX34 {
                top: 605px;
                left: 153.144px;
                width: 71.765625px;
                height: 71px;
            }
            #SHAPE35 {
                top: 17px;
                left: 16px;
                width: 37px;
                height: 37px;
            }
            #HEADLINE33 {
                top: 702px;
                left: 26.1667px;
                padding: 0px;
                width: 324px;
                height: 24px;
            }
            #HEADLINE33 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX81 {
                top: 836px;
                left: 10px;
                width: 355px;
                height: 301px;
            }
            #FORM82 {
                top: 20px;
                left: 0px;
                width: 355px;
                height: 173.9375px;
            }
            #FORM82 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM83 {
                top: 20px;
                left: 0px;
                width: 355px;
                height: 41.3125px;
            }
            #ITEM_FORM83 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM84 {
                top: 71.3125px;
                left: 0px;
                width: 355px;
                height: 41.3125px;
            }
            #ITEM_FORM84 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM85 {
                top: 122.625px;
                left: 0px;
                width: 355px;
                height: 41.3125px;
            }
            #ITEM_FORM85 > .widget-content {
                font-size: 14px;
            }
            #BUTTON86 {
                top: 203.938px;
                left: 114.5px;
                padding: 0px;
                width: 124px;
                height: 40px;
            }
            #BUTTON86 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE87 {
                top: 840.625px;
                left: 10.1667px;
                padding: 0px;
                width: 355px;
                height: 36px;
            }
            #HEADLINE87 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #GROUP88 {
                top: 310.292px;
                left: 9.5px;
                width: 355px;
                height: 466px;
            }
            #BOX90 {
                top: 0px;
                left: 149.5px;
                width: 58px;
                height: 58px;
            }
            #SHAPE91 {
                top: 12px;
                left: 12px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE92 {
                top: 68px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 24px;
            }
            #HEADLINE92 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH93 {
                top: 102px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #PARAGRAPH93 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH94 {
                top: 274px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #PARAGRAPH94 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE95 {
                top: 240px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 24px;
            }
            #HEADLINE95 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX96 {
                top: 172px;
                left: 149.5px;
                width: 58px;
                height: 58px;
            }
            #SHAPE97 {
                top: 12px;
                left: 12px;
                width: 33px;
                height: 33px;
            }
            #BOX98 {
                top: 344px;
                left: 149.5px;
                width: 58px;
                height: 58px;
            }
            #SHAPE99 {
                top: 12px;
                left: 12px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE100 {
                top: 412px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 24px;
            }
            #HEADLINE100 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #PARAGRAPH101 {
                top: 446px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 20px;
            }
            #PARAGRAPH101 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP126 {
                top: 902px;
                left: 88.1667px;
                width: 213px;
                height: 157px;
            }
            #HEADLINE127 {
                top: 67px;
                left: 2px;
                padding: 0px;
                width: 212px;
                height: 20px;
            }
            #HEADLINE127 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH128 {
                top: 101px;
                left: 1px;
                padding: 0px;
                width: 188px;
                height: 56px;
            }
            #PARAGRAPH128 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #SHAPE129 {
                top: 0px;
                left: 1px;
                width: 50px;
                height: 50px;
            }
            #GROUP130 {
                top: 528px;
                left: 94.5001px;
                width: 215px;
                height: 163px;
            }
            #SHAPE131 {
                top: 0px;
                left: 1px;
                width: 50px;
                height: 50px;
            }
            #PARAGRAPH132 {
                top: 107px;
                left: 1px;
                padding: 0px;
                width: 188px;
                height: 56px;
            }
            #PARAGRAPH132 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE133 {
                top: 67px;
                left: 4px;
                padding: 0px;
                width: 212px;
                height: 40px;
            }
            #HEADLINE133 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP134 {
                top: 353.334px;
                left: 95px;
                width: 213px;
                height: 163px;
            }
            #SHAPE135 {
                top: 0px;
                left: 1px;
                width: 50px;
                height: 50px;
            }
            #PARAGRAPH136 {
                top: 107px;
                left: 1px;
                padding: 0px;
                width: 188px;
                height: 56px;
            }
            #PARAGRAPH136 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE137 {
                top: 67px;
                left: 2px;
                padding: 0px;
                width: 212px;
                height: 40px;
            }
            #HEADLINE137 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP138 {
                top: 721.333px;
                left: 94.5001px;
                width: 217px;
                height: 144.9375px;
            }
            #HEADLINE139 {
                top: 67px;
                left: 6px;
                padding: 0px;
                width: 212px;
                height: 40px;
            }
            #HEADLINE139 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH140 {
                top: 107.625px;
                left: 1px;
                padding: 0px;
                width: 188px;
                height: 37.3125px;
            }
            #PARAGRAPH140 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #SHAPE141 {
                top: 0px;
                left: 1px;
                width: 50px;
                height: 50px;
            }
            #IMAGE142 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/uploads/images/5a8563a5-5f68-4470-b806-42ec62e2cac6.jpg);
            }
            #IMAGE142 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 205.640625px;
            }
            #HEADLINE143 {
                top: 20px;
                left: 2.16666px;
                padding: 0px;
                width: 350.640625px;
                height: 72px;
            }
            #HEADLINE143 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #LINE145 {
                top: 102px;
                left: 95.3333px;
                width: 164.3125px;
                height: 25px;
            }
            #BUTTON146 {
                top: 1077.67px;
                left: 25.8333px;
                padding: 0px;
                width: 324px;
                height: 64px;
            }
            #BUTTON146 > .widget-content {
                font-size: 23px;
                text-align: center;
            }
            #IMAGE171 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/_mg_4725-1512813471785.jpg);
            }
            #IMAGE171 {
                top: 255px;
                left: 0.166687px;
                width: 375px;
                height: 470px;
            }
            #BOX158 {
                top: 736.333px;
                left: 0.999997px;
                width: 376.3125px;
                height: 424px;
            }
            #HEADLINE170 {
                top: 65.6667px;
                left: 27.4896px;
                padding: 0px;
                width: 321.328125px;
                height: 360px;
            }
            #HEADLINE170 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE159 {
                top: 12px;
                left: 43.9792px;
                padding: 0px;
                width: 268px;
                height: 24px;
            }
            #HEADLINE159 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE165 {
                top: 773px;
                left: 54.2709px;
                padding: 0px;
                width: 277.3125px;
                height: 34.640625px;
            }
            #HEADLINE165 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE172 {
                top: 53px;
                left: 10.1667px;
                padding: 0px;
                width: 355px;
                height: 108px;
            }
            #HEADLINE172 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE226 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 41.3125px;
            }
            #HEADLINE226 > .widget-content {
                font-size: 36px;
                text-align: center;
                line-height: 42px;
            }
            #YOUTUBE227 {
                top: 114px;
                left: 22.1016px;
                width: 330.765625px;
                height: 163.75868055555554px;
            }
            #BOX228 {
                top: 288px;
                left: 171px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE229 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 25px;
                height: 25px;
            }
            #HEADLINE229 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE230 {
                top: 331px;
                left: 20.1667px;
                padding: 0px;
                width: 334.640625px;
                height: 21.3125px;
            }
            #HEADLINE230 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX231 {
                top: 359px;
                left: 171px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE232 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 25px;
                height: 25px;
            }
            #HEADLINE232 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE233 {
                top: 402px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 21.3125px;
            }
            #HEADLINE233 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX234 {
                top: 430px;
                left: 170.211px;
                width: 34.5625px;
                height: 33px;
            }
            #HEADLINE235 {
                top: 5px;
                left: 4.19289px;
                padding: 0px;
                width: 26.1875px;
                height: 25px;
            }
            #HEADLINE235 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE236 {
                top: 473px;
                left: 22.1667px;
                padding: 0px;
                width: 330.640625px;
                height: 21.3125px;
            }
            #HEADLINE236 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX237 {
                top: 523px;
                left: 171px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE238 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 25px;
                height: 25px;
            }
            #HEADLINE238 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE239 {
                top: 566px;
                left: 13.5px;
                padding: 0px;
                width: 348px;
                height: 21.3125px;
            }
            #HEADLINE239 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX240 {
                top: 594px;
                left: 171px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE241 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 25px;
                height: 25px;
            }
            #HEADLINE241 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE242 {
                top: 637px;
                left: 13.5px;
                padding: 0px;
                width: 348px;
                height: 21.3125px;
            }
            #HEADLINE242 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX243 {
                top: 665px;
                left: 171px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE244 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 25px;
                height: 25px;
            }
            #HEADLINE244 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE245 {
                top: 708px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 21.3125px;
            }
            #HEADLINE245 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX246 {
                top: 739.333px;
                left: 171px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE247 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 24px;
                height: 24px;
            }
            #HEADLINE247 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX249 {
                top: 813.666px;
                left: 171px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE250 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 24px;
                height: 24px;
            }
            #HEADLINE250 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX251 {
                top: 887.999px;
                left: 171px;
                width: 33px;
                height: 33px;
            }
            #HEADLINE252 {
                top: 5px;
                left: 4px;
                padding: 0px;
                width: 24px;
                height: 24px;
            }
            #HEADLINE252 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE254 {
                top: 782.333px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 21.3125px;
            }
            #HEADLINE254 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE255 {
                top: 856.666px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 21.3125px;
            }
            #HEADLINE255 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE256 {
                top: 930.999px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 21.3125px;
            }
            #HEADLINE256 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE270 {
                top: 59px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 100px;
            }
            #HEADLINE270 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE271 {
                top: 172px;
                left: 29.5px;
                padding: 0px;
                width: 310px;
                height: 20px;
            }
            #HEADLINE271 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #GROUP276 {
                top: 202px;
                left: 34.1667px;
                width: 303px;
                height: 766.125px;
            }
            #LINE277 {
                top: 230px;
                left: 4px;
                width: 300px;
                height: 25px;
            }
            #LINE278 {
                top: 505px;
                left: 4px;
                width: 300px;
                height: 25px;
            }
            #GROUP279 {
                top: 0px;
                left: 3px;
                width: 300px;
                height: 280.3125px;
            }
            #HEADLINE280 {
                top: 91px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 42.640625px;
            }
            #HEADLINE280 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX281 {
                top: 0px;
                left: 110.5px;
                width: 81px;
                height: 81px;
            }
            #BOX281 > .widget-content {
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
            #BOX282 {
                top: 175.667px;
                left: 1px;
                width: 300px;
                height: 104.640625px;
            }
            #PARAGRAPH283 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 74.640625px;
            }
            #PARAGRAPH283 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP284 {
                top: 316.063px;
                left: 3px;
                width: 300px;
                height: 227.375px;
            }
            #HEADLINE285 {
                top: 91px;
                left: 40.3125px;
                padding: 0px;
                width: 223.328125px;
                height: 21.3125px;
            }
            #HEADLINE285 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX286 {
                top: 0px;
                left: 111.5px;
                width: 81px;
                height: 81px;
            }
            #BOX286 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/img_6791-1512745745809.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #BOX287 {
                top: 122.708px;
                left: 1px;
                width: 300px;
                height: 104.640625px;
            }
            #PARAGRAPH288 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 74.640625px;
            }
            #PARAGRAPH288 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP326 {
                top: 565.438px;
                left: 1px;
                width: 302px;
                height: 200.6875px;
            }
            #HEADLINE327 {
                top: 86.125px;
                left: 1px;
                padding: 0px;
                width: 301px;
                height: 42.640625px;
            }
            #HEADLINE327 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX328 {
                top: 0px;
                left: 112px;
                width: 81px;
                height: 81px;
            }
            #BOX328 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/thay_phu-1512980182.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #BOX329 {
                top: 138.688px;
                left: 2px;
                width: 301px;
                height: 62px;
            }
            #PARAGRAPH330 {
                top: 6px;
                left: 0px;
                padding: 0px;
                width: 301px;
                height: 56px;
            }
            #PARAGRAPH330 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX294 {
                top: 1029.98px;
                left: 38.1667px;
                width: 296px;
                height: 394.4375px;
            }
            #HEADLINE296 {
                top: 22.0313px;
                left: 35px;
                padding: 0px;
                width: 237px;
                height: 77.3125px;
            }
            #HEADLINE296 > .widget-content {
                font-size: 33px;
                text-align: left;
            }
            #BUTTON297 {
                top: 321.593px;
                left: 89px;
                padding: 0px;
                width: 104px;
                height: 39px;
            }
            #BUTTON297 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #FORM298 {
                top: 123.604px;
                left: 35px;
                width: 229px;
                height: 158.578125px;
            }
            #ITEM_FORM299 {
                top: 0px;
                left: 0px;
                width: 229px;
                height: 45.578125px;
            }
            #ITEM_FORM300 {
                top: 57.1951px;
                left: 0px;
                width: 229px;
                height: 45.578125px;
            }
            #ITEM_FORM301 {
                top: 113px;
                left: 0px;
                width: 229px;
                height: 45.578125px;
            }
            #HEADLINE304 {
                top: 354.667px;
                left: 10.1667px;
                padding: 0px;
                width: 355px;
                height: 42.640625px;
            }
            #HEADLINE304 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BUTTON305 {
                top: 405.041px;
                left: 74.8334px;
                padding: 0px;
                width: 233px;
                height: 56px;
            }
            #BUTTON305 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE307 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 56px;
            }
            #HEADLINE307 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 28px;
            }
            #BOX308 {
                top: 183px;
                left: 32.1667px;
                width: 312px;
                height: 101px;
            }
            #GROUP309 {
                top: 22px;
                left: 14px;
                width: 283px;
                height: 17px;
            }
            #PARAGRAPH310 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH310 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH311 {
                top: 0px;
                left: 74px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH311 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH312 {
                top: 0px;
                left: 148px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH312 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH313 {
                top: 0px;
                left: 223px;
                padding: 0px;
                width: 61px;
                height: 17px;
            }
            #PARAGRAPH313 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #COUNTDOWN314 {
                top: 38px;
                left: 10px;
                width: 298px;
                height: 45px;
            }
            #COUNTDOWN314 > .widget-content {
                font-size: 36px;
            }
            #PARAGRAPH331 {
                top: 672.667px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 128px;
            }
            #PARAGRAPH331 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX316 {
                top: 20px;
                left: 19px;
                width: 337px;
                height: 334px;
            }
            #HEADLINE318 {
                top: 13px;
                left: 13px;
                padding: 0px;
                width: 309px;
                height: 27px;
            }
            #HEADLINE318 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #FORM320 {
                top: 84.125px;
                left: 29px;
                width: 274px;
                height: 156.125px;
            }
            #FORM320 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM321 {
                top: 0px;
                left: 0px;
                width: 274px;
                height: 41.875px;
            }
            #ITEM_FORM321 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM322 {
                top: 55px;
                left: 0px;
                width: 274px;
                height: 41.875px;
            }
            #ITEM_FORM322 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM323 {
                top: 114.255px;
                left: 0px;
                width: 274px;
                height: 41.875px;
            }
            #ITEM_FORM323 > .widget-content {
                font-size: 16px;
            }
            #BUTTON324 {
                top: 257px;
                left: 49px;
                padding: 0px;
                width: 230px;
                height: 43px;
            }
            #BUTTON324 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #PARAGRAPH319 {
                top: 70px;
                left: 26px;
                padding: 0px;
                width: 284px;
                height: 20px;
            }
            #PARAGRAPH319 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #BOX317 {
                top: -1px;
                left: 0px;
                width: 337px;
                height: 57px;
            }
            #HEADLINE325 {
                top: 24px;
                left: 87px;
                padding: 0px;
                width: 200px;
                height: 36px;
            }
            #HEADLINE325 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #BOX148 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #HEADLINE149 {
                top: 24px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE149 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #FORM151 {
                top: 159px;
                left: 23px;
                width: 329px;
                height: 156.125px;
            }
            #FORM151 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM152 {
                top: 0px;
                left: 0px;
                width: 329px;
                height: 41.875px;
            }
            #ITEM_FORM152 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM153 {
                top: 55px;
                left: 0px;
                width: 329px;
                height: 41.875px;
            }
            #ITEM_FORM153 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM154 {
                top: 114.255px;
                left: 0px;
                width: 329px;
                height: 41.875px;
            }
            #ITEM_FORM154 > .widget-content {
                font-size: 15px;
            }
            #BUTTON155 {
                top: 325.125px;
                left: 88px;
                padding: 0px;
                width: 199px;
                height: 43px;
            }
            #BUTTON155 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #LINEVERTICAL156 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #BOX46 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 158px;
            }
            #HEADLINE47 {
                top: 35.1667px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE47 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #FORM49 {
                top: 188px;
                left: 30px;
                width: 315px;
                height: 156.125px;
            }
            #FORM49 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM50 {
                top: 0px;
                left: 0px;
                width: 312px;
                height: 41.875px;
            }
            #ITEM_FORM50 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM51 {
                top: 57.875px;
                left: 1px;
                width: 312px;
                height: 41.875px;
            }
            #ITEM_FORM51 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM52 {
                top: 114.255px;
                left: 0px;
                width: 312px;
                height: 41.875px;
            }
            #ITEM_FORM52 > .widget-content {
                font-size: 15px;
            }
            #BUTTON53 {
                top: 411px;
                left: 79.5px;
                padding: 0px;
                width: 216px;
                height: 48px;
            }
            #BUTTON53 > .widget-content {
                font-size: 27px;
                text-align: center;
            }
            #FORM41 {
                top: 274px;
                left: 52px;
                width: 271px;
                height: 52px;
            }
            #FORM41 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM42 {
                top: 0px;
                left: 0px;
                width: 271px;
                height: 52px;
            }
            #ITEM_FORM42 > .widget-content {
                font-size: 16px;
            }
            #BUTTON43 {
                top: 336px;
                left: 103px;
                padding: 0px;
                width: 169px;
                height: 47px;
            }
            #BUTTON43 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #SHAPE38 {
                top: 20px;
                left: 154px;
                width: 67px;
                height: 67px;
            }
            #HEADLINE37 {
                top: 58.5px;
                left: 51.5px;
                padding: 0px;
                width: 272px;
                height: 84px;
            }
            #HEADLINE37 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #LINE40 {
                top: 239px;
                left: 67.5px;
                width: 240px;
                height: 25px;
            }
        }
    </style>
