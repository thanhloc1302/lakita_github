
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
            var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Source+Sans+Pro:300,400,600,700|Roboto:300,400,700|Montserrat:300,400,600,700&amp;subset=latin-ext,vietnamese';
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
                height: 443px;
            }
            #SECTION2 .container {}
            #SECTION2 {}
            #SECTION9 {
                width: 100%;
                height: 356px;
            }
            #SECTION9 .container {}
            #SECTION9 {}
            #SECTION184 {
                width: 297px;
                height: 431px;
            }
            #SECTION184 .container {}
            #SECTION184 {}
            #SECTION314 {
                width: 100%;
                height: 639px;
            }
            #SECTION314 .container {}
            #SECTION314 {}
            #SECTION65 {
                width: 100%;
                height: 1191px;
            }
            #SECTION65 .container {}
            #SECTION65 {}
            #POPUP623 {
                width: 100%;
                height: 100%;
            }
            #POPUP623 .container {
                width: 522px;
                height: 277px;
                top: calc(100%-277px);
            }
            #POPUP623 {}
            #POPUP615 {
                width: 100%;
                height: 100%;
            }
            #POPUP615 .container {
                width: 522px;
                height: 202px;
                top: calc(100%-202px);
            }
            #POPUP615 {}
            #POPUP607 {
                width: 100%;
                height: 100%;
            }
            #POPUP607 .container {
                width: 522px;
                height: 382px;
                top: calc(100%-382px);
            }
            #POPUP607 {}
            #POPUP599 {
                width: 100%;
                height: 100%;
            }
            #POPUP599 .container {
                width: 522px;
                height: 250px;
                top: calc(100%-250px);
            }
            #POPUP599 {}
            #POPUP591 {
                width: 100%;
                height: 100%;
            }
            #POPUP591 .container {
                width: 522px;
                height: 339px;
                top: calc(100%-339px);
            }
            #POPUP591 {}
            #POPUP583 {
                width: 100%;
                height: 100%;
            }
            #POPUP583 .container {
                width: 522px;
                height: 412px;
                top: calc(100%-412px);
            }
            #POPUP583 {}
            #POPUP574 {
                width: 100%;
                height: 100%;
            }
            #POPUP574 .container {
                width: 522px;
                height: 338px;
                top: calc(100%-338px);
            }
            #POPUP574 {}
            #POPUP557 {
                width: 100%;
                height: 100%;
            }
            #POPUP557 .container {
                width: 522px;
                height: 312px;
                top: calc(100%-312px);
            }
            #POPUP557 {}
            #SECTION40 {
                width: 100%;
                height: 745px;
            }
            #SECTION40 .container {}
            #SECTION40 {}
            #SECTION345 {
                width: 100%;
                height: 778.9375px;
            }
            #SECTION345 .container {}
            #SECTION345 {}
            #SECTION126 {
                width: 100%;
                height: 906.9375px;
            }
            #SECTION126 .container {}
            #SECTION126 {}
            #IMAGE150 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/23584698_920376338127716_1573861364_n-1513076747.png);
            }
            #IMAGE150 {
                top: 29px;
                left: -52px;
                width: 122px;
                height: 42px;
            }
            #BUTTON151 {
                top: 34px;
                left: 805px;
                padding: 0px;
                width: 263px;
                height: 36px;
            }
            #BUTTON151 > .widget-content {
                font-size: 14px;
                text-align: right;
            }
            #HEADLINE154 {
                top: 138.5px;
                left: 76px;
                padding: 0px;
                width: 824px;
                height: 122px;
            }
            #HEADLINE154 > .widget-content {
                font-size: 55px;
                text-align: center;
            }
            #LINE155 {
                top: 250.5px;
                left: 89px;
                width: 813px;
                height: 25px;
            }
            #HEADLINE157 {
                top: 276px;
                left: 76px;
                padding: 0px;
                width: 839px;
                height: 62px;
            }
            #HEADLINE157 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #IMAGE156 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png);
            }
            #IMAGE156 {
                top: 104px;
                left: 195.131px;
                width: 191.8125px;
                height: 179.5px;
            }
            #HEADLINE158 {
                top: 39px;
                left: 314px;
                padding: 0px;
                width: 394px;
                height: 38px;
            }
            #HEADLINE158 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #HEADLINE159 {
                top: 116.5px;
                left: 479px;
                padding: 0px;
                width: 200px;
                height: 30px;
            }
            #HEADLINE159 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE163 {
                top: 156.5px;
                left: 427px;
                width: 430px;
                height: 25px;
            }
            #HEADLINE162 {
                top: 143px;
                left: 428px;
                padding: 0px;
                width: 429px;
                height: 20px;
            }
            #HEADLINE162 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE161 {
                top: 116.5px;
                left: 428px;
                padding: 0px;
                width: 429px;
                height: 26px;
            }
            #HEADLINE161 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE160 {
                top: 171.5px;
                left: 427px;
                padding: 0px;
                width: 430px;
                height: 104px;
            }
            #HEADLINE160 > .widget-content {
                font-size: 20px;
                text-align: justify;
            }
            #HEADLINE194 {
                top: 21px;
                left: 259px;
                padding: 0px;
                width: 440px;
                height: 38px;
            }
            #HEADLINE194 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #HEADLINE195 {
                top: 59px;
                left: 366px;
                padding: 0px;
                width: 228px;
                height: 24px;
            }
            #HEADLINE195 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #IMAGE198 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/Untitled-1-1513140474.png);
            }
            #IMAGE198 {
                top: 112px;
                left: 186px;
                width: 199.796875px;
                height: 189px;
            }
            #HEADLINE199 {
                top: 309px;
                left: 123px;
                padding: 0px;
                width: 323px;
                height: 25px;
            }
            #HEADLINE199 > .widget-content {
                font-size: 19px;
                text-align: center;
            }
            #HEADLINE201 {
                top: 145px;
                left: 480px;
                padding: 0px;
                width: 200px;
                height: 24px;
            }
            #HEADLINE201 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP405 {
                top: 119px;
                left: 430px;
                width: 509px;
                height: 211px;
            }
            #GROUP404 {
                top: 65px;
                left: 1px;
                width: 48px;
                height: 84px;
            }
            #SHAPE207 {
                top: 44px;
                left: 0px;
                width: 48px;
                height: 40px;
            }
            #SHAPE206 {
                top: 0px;
                left: 0px;
                width: 48px;
                height: 40px;
            }
            #HEADLINE205 {
                top: 13px;
                left: 49px;
                padding: 0px;
                width: 461px;
                height: 198px;
            }
            #HEADLINE205 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #SHAPE203 {
                top: 0px;
                left: 2px;
                width: 48px;
                height: 40px;
            }
            #HEADLINE316 {
                top: 20.75px;
                left: 291.375px;
                padding: 0px;
                width: 420px;
                height: 76px;
            }
            #HEADLINE316 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #YOUTUBE327 {
                top: 135px;
                left: 480px;
                width: 480px;
                height: 289.25px;
            }
            #GROUP651 {
                top: 101px;
                left: 11px;
                width: 421.9375px;
                height: 436px;
            }
            #GROUP361 {
                top: 0px;
                left: 28.9375px;
                width: 394px;
                height: 436px;
            }
            #HEADLINE326 {
                top: 0px;
                left: 4.796875px;
                padding: 0px;
                width: 293.59375px;
                height: 56px;
            }
            #HEADLINE326 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #HEADLINE318 {
                top: 36px;
                left: 1px;
                padding: 0px;
                width: 394px;
                height: 400px;
            }
            #HEADLINE318 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE328 {
                top: 114px;
                left: 1px;
                padding: 0px;
                width: 393px;
                height: 66px;
            }
            #HEADLINE328 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #GROUP650 {
                top: 27.5px;
                left: 1px;
                width: 39px;
                height: 379.5px;
            }
            #SHAPE640 {
                top: 340.5px;
                left: 0px;
                width: 39px;
                height: 39px;
            }
            #GROUP649 {
                top: 0px;
                left: 0px;
                width: 39px;
                height: 319.5px;
            }
            #SHAPE639 {
                top: 280.5px;
                left: 0px;
                width: 39px;
                height: 39px;
            }
            #GROUP648 {
                top: 0px;
                left: 0px;
                width: 39px;
                height: 280.5px;
            }
            #SHAPE638 {
                top: 241.5px;
                left: 0px;
                width: 39px;
                height: 39px;
            }
            #GROUP647 {
                top: 0px;
                left: 0px;
                width: 39px;
                height: 220.5px;
            }
            #SHAPE637 {
                top: 181.5px;
                left: 0px;
                width: 39px;
                height: 39px;
            }
            #GROUP646 {
                top: 0px;
                left: 0px;
                width: 39px;
                height: 98.5px;
            }
            #SHAPE636 {
                top: 59.5px;
                left: 0px;
                width: 39px;
                height: 39px;
            }
            #SHAPE635 {
                top: 0px;
                left: 0px;
                width: 39px;
                height: 39px;
            }
            #BOX71 {
                top: 324.3px;
                left: 499px;
                width: 327px;
                height: 99.703125px;
            }
            #HEADLINE305 {
                top: 12px;
                left: 10px;
                padding: 0px;
                width: 293px;
                height: 48px;
            }
            #HEADLINE305 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON537 {
                top: 59.703125px;
                left: 10px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON537 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP85 {
                top: 490px;
                left: 303.188px;
                width: 123.78125px;
                height: 40px;
            }
            #HEADLINE111 {
                top: 33px;
                left: 291px;
                padding: 0px;
                width: 384px;
                height: 38px;
            }
            #HEADLINE111 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #BOX272 {
                top: 424px;
                left: 133px;
                width: 327px;
                height: 93px;
            }
            #HEADLINE309 {
                top: 14px;
                left: 20px;
                padding: 0px;
                width: 293px;
                height: 24px;
            }
            #HEADLINE309 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON539 {
                top: 53px;
                left: 21px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON539 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX296 {
                top: 517.969px;
                left: 498px;
                width: 327px;
                height: 96.53125px;
            }
            #HEADLINE306 {
                top: 11px;
                left: 11px;
                padding: 0px;
                width: 293px;
                height: 48px;
            }
            #HEADLINE306 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON538 {
                top: 57px;
                left: 11px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON538 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX297 {
                top: 613px;
                left: 133px;
                width: 327px;
                height: 96px;
            }
            #HEADLINE310 {
                top: 11px;
                left: 20px;
                padding: 0px;
                width: 292.8000183105469px;
                height: 48px;
            }
            #HEADLINE310 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON542 {
                top: 56px;
                left: 20px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON542 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX298 {
                top: 714.7px;
                left: 499px;
                width: 327px;
                height: 92px;
            }
            #HEADLINE307 {
                top: 25px;
                left: 10px;
                padding: 0px;
                width: 293px;
                height: 24px;
            }
            #HEADLINE307 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON540 {
                top: 52px;
                left: 10px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON540 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX299 {
                top: 821.5px;
                left: 133px;
                width: 327px;
                height: 93px;
            }
            #HEADLINE311 {
                top: 11px;
                left: 20px;
                padding: 0px;
                width: 293px;
                height: 48px;
            }
            #HEADLINE311 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON541 {
                top: 53px;
                left: 20px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON541 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX300 {
                top: 914.5px;
                left: 499px;
                width: 327px;
                height: 89px;
            }
            #HEADLINE308 {
                top: 23px;
                left: 11px;
                padding: 0px;
                width: 293px;
                height: 24px;
            }
            #HEADLINE308 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON548 {
                top: 49px;
                left: 12px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON548 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP415 {
                top: 256px;
                left: 489px;
                width: 132px;
                height: 39px;
            }
            #SHAPE221 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 39px;
            }
            #HEADLINE222 {
                top: 6px;
                left: 42px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE222 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX301 {
                top: 229.472px;
                left: 133px;
                width: 327px;
                height: 96px;
            }
            #HEADLINE304 {
                top: 12px;
                left: 20px;
                padding: 0px;
                width: 293px;
                height: 48px;
            }
            #HEADLINE304 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON536 {
                top: 56px;
                left: 21px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON536 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX271 {
                top: 124.988px;
                left: 499px;
                width: 327px;
                height: 96px;
            }
            #HEADLINE302 {
                top: 26px;
                left: 13px;
                padding: 0px;
                width: 293px;
                height: 24px;
            }
            #HEADLINE302 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON527 {
                top: 56px;
                left: 13px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON527 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP416 {
                top: 167.984375px;
                left: 470px;
                width: 20px;
                height: 87px;
            }
            #BOX98 {
                top: 29px;
                left: 6px;
                width: 11.5px;
                height: 58px;
            }
            #BOX97 {
                top: 0px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #GROUP430 {
                top: 447px;
                left: 491px;
                width: 132px;
                height: 39px;
            }
            #HEADLINE249 {
                top: 6px;
                left: 41px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE249 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #SHAPE248 {
                top: 0px;
                left: 0px;
                width: 41px;
                height: 39px;
            }
            #GROUP431 {
                top: 348.7px;
                left: 331px;
                width: 132px;
                height: 39px;
            }
            #HEADLINE245 {
                top: 12.3px;
                left: 41px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE245 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #SHAPE244 {
                top: 0px;
                left: 0px;
                width: 41px;
                height: 39px;
            }
            #GROUP432 {
                top: 547.3px;
                left: 332px;
                width: 132px;
                height: 39px;
            }
            #SHAPE257 {
                top: 0px;
                left: 0px;
                width: 41px;
                height: 39px;
            }
            #HEADLINE256 {
                top: 6px;
                left: 41px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE256 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP433 {
                top: 645px;
                left: 491px;
                width: 132px;
                height: 39px;
            }
            #HEADLINE265 {
                top: 6px;
                left: 41px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE265 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #SHAPE266 {
                top: 0px;
                left: 0px;
                width: 41px;
                height: 39px;
            }
            #GROUP449 {
                top: 737.5px;
                left: 331px;
                width: 132px;
                height: 39px;
            }
            #HEADLINE259 {
                top: 11.2px;
                left: 41px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE259 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #SHAPE260 {
                top: 0px;
                left: 0px;
                width: 41px;
                height: 39px;
            }
            #GROUP450 {
                top: 840.975px;
                left: 491px;
                width: 132px;
                height: 39px;
            }
            #SHAPE269 {
                top: 0px;
                left: 0px;
                width: 41px;
                height: 39px;
            }
            #HEADLINE270 {
                top: 6px;
                left: 41px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE270 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP451 {
                top: 935px;
                left: 331px;
                width: 132px;
                height: 39px;
            }
            #SHAPE263 {
                top: 0px;
                left: 0px;
                width: 41px;
                height: 39px;
            }
            #HEADLINE262 {
                top: 6px;
                left: 41px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE262 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP486 {
                top: 361.969px;
                left: 471px;
                width: 20px;
                height: 87px;
            }
            #BOX487 {
                top: 29px;
                left: 5px;
                width: 11.5px;
                height: 58px;
            }
            #BOX488 {
                top: 0px;
                left: 0px;
                width: 20px;
                height: 20px;
            }
            #GROUP492 {
                top: 555.969px;
                left: 471px;
                width: 20px;
                height: 87px;
            }
            #BOX493 {
                top: 29px;
                left: 5px;
                width: 11.5px;
                height: 58px;
            }
            #BOX494 {
                top: 0px;
                left: 0px;
                width: 20px;
                height: 20px;
            }
            #GROUP495 {
                top: 650.969px;
                left: 471px;
                width: 20px;
                height: 87px;
            }
            #BOX496 {
                top: 29px;
                left: 5px;
                width: 11.5px;
                height: 58px;
            }
            #BOX497 {
                top: 0px;
                left: 0px;
                width: 20px;
                height: 20px;
            }
            #GROUP498 {
                top: 749.5px;
                left: 471px;
                width: 20px;
                height: 87px;
            }
            #BOX499 {
                top: 29px;
                left: 5px;
                width: 11.5px;
                height: 58px;
            }
            #BOX500 {
                top: 0px;
                left: 0px;
                width: 20px;
                height: 20px;
            }
            #GROUP501 {
                top: 846.5px;
                left: 471px;
                width: 20px;
                height: 87px;
            }
            #BOX502 {
                top: 29px;
                left: 5px;
                width: 11.5px;
                height: 58px;
            }
            #BOX503 {
                top: 0px;
                left: 0px;
                width: 20px;
                height: 20px;
            }
            #GROUP504 {
                top: 943.5px;
                left: 470px;
                width: 20px;
                height: 115px;
            }
            #BOX505 {
                top: 29px;
                left: 6px;
                width: 11.5px;
                height: 58px;
            }
            #BOX506 {
                top: 0px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #BOX517 {
                top: 96px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #SHAPE513 {
                top: 1032.82px;
                left: 492px;
                width: 47px;
                height: 37.6875px;
            }
            #GROUP516 {
                top: 1030.23px;
                left: 137px;
                width: 321.8125px;
                height: 44px;
            }
            #BOX514 {
                top: 0px;
                left: 1px;
                width: 321.8125px;
                height: 44px;
            }
            #HEADLINE515 {
                top: 9.578125px;
                left: 67.84375px;
                padding: 0px;
                width: 180.09375px;
                height: 24px;
            }
            #HEADLINE515 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP489 {
                top: 458.969px;
                left: 471px;
                width: 20px;
                height: 87px;
            }
            #BOX490 {
                top: 29px;
                left: 5px;
                width: 11.5px;
                height: 58px;
            }
            #BOX491 {
                top: 0px;
                left: 0px;
                width: 20px;
                height: 20px;
            }
            #GROUP483 {
                top: 264.984px;
                left: 471px;
                width: 20px;
                height: 87px;
            }
            #BOX484 {
                top: 29px;
                left: 5px;
                width: 11.5px;
                height: 58px;
            }
            #BOX485 {
                top: 0px;
                left: 0px;
                width: 20px;
                height: 20px;
            }
            #GROUP652 {
                top: 159px;
                left: 333.219px;
                width: 131.234375px;
                height: 39px;
            }
            #HEADLINE92 {
                top: 10px;
                left: 40px;
                padding: 0px;
                width: 91.234375px;
                height: 20px;
            }
            #HEADLINE92 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #SHAPE93 {
                top: 0px;
                left: 0px;
                width: 41px;
                height: 39px;
            }
            #HEADLINE624 {
                top: 34px;
                left: 40px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE624 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE626 {
                top: 62px;
                left: 44px;
                width: 434px;
                height: 25px;
            }
            #LINE630 {
                top: 212px;
                left: 41px;
                width: 241px;
                height: 25px;
            }
            #PARAGRAPH627 {
                top: 81.5px;
                left: 43px;
                padding: 0px;
                width: 412px;
                height: 132px;
            }
            #PARAGRAPH627 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #HEADLINE616 {
                top: 34px;
                left: 40px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE616 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE618 {
                top: 62px;
                left: 44px;
                width: 434px;
                height: 25px;
            }
            #PARAGRAPH619 {
                top: 83px;
                left: 43px;
                padding: 0px;
                width: 412px;
                height: 66px;
            }
            #PARAGRAPH619 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LINE622 {
                top: 144px;
                left: 40px;
                width: 241px;
                height: 25px;
            }
            #HEADLINE608 {
                top: 34px;
                left: 40px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE608 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE610 {
                top: 62px;
                left: 44px;
                width: 434px;
                height: 25px;
            }
            #LINE614 {
                top: 302px;
                left: 42px;
                width: 241px;
                height: 25px;
            }
            #PARAGRAPH611 {
                top: 84.5px;
                left: 42px;
                padding: 0px;
                width: 412px;
                height: 220px;
            }
            #PARAGRAPH611 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #HEADLINE600 {
                top: 34px;
                left: 40px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE600 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE602 {
                top: 62px;
                left: 44px;
                width: 434px;
                height: 25px;
            }
            #PARAGRAPH603 {
                top: 84px;
                left: 43px;
                padding: 0px;
                width: 423px;
                height: 110px;
            }
            #PARAGRAPH603 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE606 {
                top: 189px;
                left: 40px;
                width: 241px;
                height: 25px;
            }
            #HEADLINE592 {
                top: 34px;
                left: 40px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE592 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE594 {
                top: 62px;
                left: 44px;
                width: 434px;
                height: 25px;
            }
            #PARAGRAPH595 {
                top: 84px;
                left: 43px;
                padding: 0px;
                width: 414px;
                height: 198px;
            }
            #PARAGRAPH595 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE598 {
                top: 278px;
                left: 40px;
                width: 241px;
                height: 25px;
            }
            #HEADLINE584 {
                top: 34px;
                left: 40px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE584 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE586 {
                top: 62px;
                left: 44px;
                width: 434px;
                height: 25px;
            }
            #LINE590 {
                top: 350px;
                left: 40px;
                width: 241px;
                height: 25px;
            }
            #PARAGRAPH587 {
                top: 84px;
                left: 43px;
                padding: 0px;
                width: 414px;
                height: 264px;
            }
            #PARAGRAPH587 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #HEADLINE575 {
                top: 34px;
                left: 40px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE575 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE577 {
                top: 62px;
                left: 44px;
                width: 434px;
                height: 25px;
            }
            #PARAGRAPH578 {
                top: 85px;
                left: 42px;
                padding: 0px;
                width: 415px;
                height: 176px;
            }
            #PARAGRAPH578 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #LINE581 {
                top: 255.5px;
                left: 41px;
                width: 241px;
                height: 25px;
            }
            #HEADLINE558 {
                top: 34px;
                left: 40px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE558 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE560 {
                top: 62px;
                left: 44px;
                width: 434px;
                height: 25px;
            }
            #LINE564 {
                top: 218px;
                left: 40px;
                width: 241px;
                height: 25px;
            }
            #PARAGRAPH561 {
                top: 88.5px;
                left: 43px;
                padding: 0px;
                width: 414px;
                height: 132px;
            }
            #PARAGRAPH561 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE166 {
                top: 26px;
                left: 263px;
                padding: 0px;
                width: 447px;
                height: 38px;
            }
            #HEADLINE166 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #CAROUSEL659 {
                top: 79px;
                left: -44px;
                width: 1061px;
                height: 632px;
            }
            #ITEM-CAROUSEL661 {
                top: 0px;
                left: 0px;
                width: 1061px;
                height: 632px;
            }
            #HEADLINE180 {
                top: 312.5px;
                left: 116px;
                padding: 0px;
                width: 220px;
                height: 110px;
            }
            #HEADLINE180 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE177 {
                top: 264px;
                left: 125px;
                padding: 0px;
                width: 200px;
                height: 40px;
            }
            #HEADLINE177 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE173 {
                top: 240px;
                left: 128px;
                padding: 0px;
                width: 200px;
                height: 24px;
            }
            #HEADLINE173 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE169 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x300/5a28c4f8c3f6592b3acabec8/luu_tuan_anh-1513135583.PNG);
            }
            #IMAGE169 {
                top: 46px;
                left: 99px;
                width: 227.75px;
                height: 182px;
            }
            #IMAGE511 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/Untitled-1-1513736731.png);
            }
            #IMAGE511 {
                top: 35px;
                left: 727px;
                width: 229px;
                height: 225.5px;
            }
            #HEADLINE512 {
                top: 263.5px;
                left: 719px;
                padding: 0px;
                width: 259px;
                height: 40px;
            }
            #HEADLINE512 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE175 {
                top: 239px;
                left: 732px;
                padding: 0px;
                width: 237px;
                height: 24px;
            }
            #HEADLINE175 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE183 {
                top: 311px;
                left: 734.5px;
                padding: 0px;
                width: 235px;
                height: 132px;
            }
            #HEADLINE183 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE181 {
                top: 312px;
                left: 389px;
                padding: 0px;
                width: 282px;
                height: 286px;
            }
            #HEADLINE181 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE178 {
                top: 264px;
                left: 405px;
                padding: 0px;
                width: 242px;
                height: 40px;
            }
            #HEADLINE178 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE174 {
                top: 240px;
                left: 420px;
                padding: 0px;
                width: 200px;
                height: 24px;
            }
            #HEADLINE174 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE167 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x300/5a28c4f8c3f6592b3acabec8/Lac_hong-1513135584.PNG);
            }
            #IMAGE167 {
                top: 33px;
                left: 427.094px;
                width: 203.09375px;
                height: 193px;
            }
            #ITEM-CAROUSEL662 {
                top: 0px;
                left: 0px;
                width: 1061px;
                height: 632px;
            }
            #HEADLINE674 {
                top: 308px;
                left: 726.5px;
                padding: 0px;
                width: 235px;
                height: 88px;
            }
            #HEADLINE674 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE676 {
                top: 260.5px;
                left: 711px;
                padding: 0px;
                width: 259px;
                height: 20px;
            }
            #HEADLINE676 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP700 {
                top: 53px;
                left: 723px;
                width: 237px;
                height: 207px;
            }
            #HEADLINE667 {
                top: 183px;
                left: 1px;
                padding: 0px;
                width: 237px;
                height: 24px;
            }
            #HEADLINE667 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE675 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/Untitled-1-1513828284.png);
            }
            #IMAGE675 {
                top: 0px;
                left: 25px;
                width: 177.90625px;
                height: 179px;
            }
            #HEADLINE672 {
                top: 308px;
                left: 426px;
                padding: 0px;
                width: 220px;
                height: 110px;
            }
            #HEADLINE672 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE673 {
                top: 308.5px;
                left: 91px;
                padding: 0px;
                width: 269px;
                height: 88px;
            }
            #HEADLINE673 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE671 {
                top: 260.5px;
                left: 98px;
                padding: 0px;
                width: 242px;
                height: 20px;
            }
            #HEADLINE671 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE668 {
                top: 236.5px;
                left: 98px;
                padding: 0px;
                width: 251px;
                height: 24px;
            }
            #HEADLINE668 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE665 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/Untitled-2-1513745137.png);
            }
            #IMAGE665 {
                top: 50.5px;
                left: 132.719px;
                width: 178.96875px;
                height: 177px;
            }
            #HEADLINE670 {
                top: 260.5px;
                left: 429.063px;
                padding: 0px;
                width: 200px;
                height: 40px;
            }
            #HEADLINE670 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP697 {
                top: 53.5px;
                left: 428px;
                width: 203.0625px;
                height: 207px;
            }
            #HEADLINE669 {
                top: 183px;
                left: 4.0625px;
                padding: 0px;
                width: 200px;
                height: 24px;
            }
            #HEADLINE669 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE693 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/Untitled-1-1513743060.png);
            }
            #IMAGE693 {
                top: 0px;
                left: 1px;
                width: 189.140625px;
                height: 176px;
            }
            #BOX348 {
                top: 214.5px;
                left: 491px;
                width: 457px;
                height: 144px;
            }
            #HEADLINE349 {
                top: 10px;
                left: 82px;
                padding: 0px;
                width: 288px;
                height: 54px;
            }
            #HEADLINE349 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH350 {
                top: 75px;
                left: 62px;
                padding: 0px;
                width: 336px;
                height: 40px;
            }
            #PARAGRAPH350 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX354 {
                top: 214.5px;
                left: 12px;
                width: 457px;
                height: 144.5px;
            }
            #HEADLINE355 {
                top: 11px;
                left: 82px;
                padding: 0px;
                width: 288px;
                height: 54px;
            }
            #HEADLINE355 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH356 {
                top: 76px;
                left: 62px;
                padding: 0px;
                width: 336px;
                height: 20px;
            }
            #PARAGRAPH356 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX357 {
                top: 551px;
                left: 491px;
                width: 457px;
                height: 144px;
            }
            #HEADLINE358 {
                top: 12.5px;
                left: 48px;
                padding: 0px;
                width: 358px;
                height: 54px;
            }
            #HEADLINE358 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH363 {
                top: 81.5px;
                left: 35px;
                padding: 0px;
                width: 392px;
                height: 40px;
            }
            #PARAGRAPH363 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE346 {
                top: 37px;
                left: 202px;
                padding: 0px;
                width: 580px;
                height: 38px;
            }
            #HEADLINE346 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #HEADLINE362 {
                top: 79px;
                left: 257px;
                padding: 0px;
                width: 466px;
                height: 48px;
            }
            #HEADLINE362 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX351 {
                top: 383.5px;
                left: 12px;
                width: 457px;
                height: 144px;
            }
            #HEADLINE352 {
                top: 11px;
                left: 41px;
                padding: 0px;
                width: 375px;
                height: 54px;
            }
            #HEADLINE352 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH353 {
                top: 81px;
                left: 62px;
                padding: 0px;
                width: 354px;
                height: 40px;
            }
            #PARAGRAPH353 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX521 {
                top: 383.5px;
                left: 491px;
                width: 457px;
                height: 144px;
            }
            #HEADLINE522 {
                top: 12px;
                left: 41px;
                padding: 0px;
                width: 375px;
                height: 54px;
            }
            #HEADLINE522 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH523 {
                top: 82px;
                left: 51px;
                padding: 0px;
                width: 354px;
                height: 40px;
            }
            #PARAGRAPH523 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX642 {
                top: 551.5px;
                left: 12px;
                width: 457px;
                height: 144px;
            }
            #HEADLINE643 {
                top: 12px;
                left: 41px;
                padding: 0px;
                width: 375px;
                height: 54px;
            }
            #HEADLINE643 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH644 {
                top: 82px;
                left: 51px;
                padding: 0px;
                width: 354px;
                height: 40px;
            }
            #PARAGRAPH644 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #LINE129 {
                top: 182px;
                left: 0px;
                width: 470px;
                height: 25px;
            }
            #BOX365 {
                top: 32.7258px;
                left: 512.754px;
                width: 437px;
                height: 547.28125px;
            }
            #FORM393 {
                top: 115.813px;
                left: 55.6875px;
                width: 340.09375px;
                height: 317.265625px;
            }
            #ITEM_FORM394 {
                top: 0px;
                left: 0px;
                width: 340.046875px;
                height: 49.8125px;
            }
            #ITEM_FORM395 {
                top: 62.3499px;
                left: 0px;
                width: 340.046875px;
                height: 49.8125px;
            }
            #ITEM_FORM396 {
                top: 124.699px;
                left: 0px;
                width: 340.046875px;
                height: 49.8125px;
            }
            #ITEM_FORM400 {
                top: 197.418px;
                left: 0.053125px;
                width: 340.046875px;
                height: 119.859375px;
            }
            #BUTTON398 {
                top: 476.922px;
                left: 149.25px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON398 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE399 {
                top: 39.8438px;
                left: 9.25px;
                padding: 0px;
                width: 421.03125px;
                height: 49px;
            }
            #HEADLINE399 > .widget-content {
                font-size: 43px;
                text-align: center;
            }
            #HEADLINE366 {
                top: 60.9063px;
                left: -111.273px;
                padding: 0px;
                width: 659.015625px;
                height: 101.33333587646484px;
            }
            #HEADLINE366 > .widget-content {
                font-size: 45px;
                text-align: center;
            }
            #GROUP370 {
                top: 198.875px;
                left: 32.1562px;
                width: 371.828125px;
                height: 59.6875px;
            }
            #BOX368 {
                top: 0px;
                left: 0.804823px;
                width: 184.9375px;
                height: 59.6875px;
            }
            #HEADLINE706 {
                top: 10.1875px;
                left: 11.1418px;
                padding: 0px;
                width: 160.953125px;
                height: 36px;
            }
            #HEADLINE706 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX369 {
                top: 0px;
                left: 184.984px;
                width: 188.015625px;
                height: 59.6875px;
            }
            #HEADLINE705 {
                top: 11.6875px;
                left: 8.04823px;
                padding: 0px;
                width: 160.953125px;
                height: 36px;
            }
            #HEADLINE705 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE375 {
                top: 777.5px;
                left: 49px;
                padding: 0px;
                width: 872px;
                height: 100px;
            }
            #HEADLINE375 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE386 {
                top: 553px;
                left: -34px;
                padding: 0px;
                width: 499px;
                height: 27px;
            }
            #HEADLINE386 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #GROUP470 {
                top: 393.5px;
                left: 13.6692px;
                width: 410.60418701171875px;
                height: 132px;
            }
            #BOX471 {
                top: 37.9611px;
                left: 0.959356px;
                width: 94.3125px;
                height: 94.89583587646484px;
            }
            #HEADLINE472 {
                top: 0px;
                left: 8.1995px;
                padding: 0px;
                width: 84.625px;
                height: 28.08333396911621px;
            }
            #HEADLINE472 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #HEADLINE473 {
                top: 0px;
                left: 111.563px;
                padding: 0px;
                width: 84.625px;
                height: 28.08333396911621px;
            }
            #HEADLINE473 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #BOX474 {
                top: 37.9611px;
                left: 104.322px;
                width: 94.3125px;
                height: 94.89583587646484px;
            }
            #BOX475 {
                top: 37.0205px;
                left: 314.938px;
                width: 94.3125px;
                height: 94.89583587646484px;
            }
            #HEADLINE476 {
                top: 0px;
                left: 314.039px;
                padding: 0px;
                width: 84.625px;
                height: 28.08333396911621px;
            }
            #HEADLINE476 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #HEADLINE477 {
                top: 0px;
                left: 214.813px;
                padding: 0px;
                width: 84.625px;
                height: 28.08333396911621px;
            }
            #HEADLINE477 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #BOX478 {
                top: 37.9611px;
                left: 207.528px;
                width: 94.3125px;
                height: 94.89583587646484px;
            }
            #COUNTDOWN479 {
                top: 58.3213px;
                left: 0.959356px;
                width: 410.6875px;
                height: 58.270835876464844px;
            }
            #COUNTDOWN479 > .widget-content {
                font-size: 36px;
            }
            #GROUP481 {
                top: 291.406px;
                left: 17px;
                width: 386.90625px;
                height: 72px;
            }
            #LINE372 {
                top: 30.125px;
                left: 1px;
                width: 57px;
                height: 25px;
            }
            #LINE373 {
                top: 30px;
                left: 330.90625px;
                width: 57px;
                height: 25px;
            }
            #HEADLINE371 {
                top: 0px;
                left: 58px;
                padding: 0px;
                width: 281.984375px;
                height: 72px;
            }
            #HEADLINE371 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #LINE707 {
                top: 216.063px;
                left: 46.1406px;
                width: 160px;
                height: 25px;
            }
        }
        
        #SECTION2 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/5a28c4f8c3f6592b3acabec8/chart-2785979_960_720-1513079466.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION2 > .ladi-widget-overlay {
            background-color: rgba(33, 34, 34, 0.61);
        }
        
        #SECTION9 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x500/57b167c9ca57d39c18a1c57c/ricepaper_v3.png");
            background-color: rgba(255, 255, 255, 1);
            background-position: top left;
            background-repeat: repeat;
        }
        
        #SECTION9 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION184 {
            display: block;
            background-color: rgba(0, 0, 0, 0.08);
        }
        
        #SECTION314 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x800/5a28c4f8c3f6592b3acabec8/businessman-2606509_960_720-1513155872.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-size: cover;
            background-attachment: fixed;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION314 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0.78);
        }
        
        #SECTION65 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1300/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1513141348.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-size: cover;
            background-attachment: fixed;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION65 > .ladi-widget-overlay {
            background-color: rgba(1, 87, 155, 1);
        }
        
        #POPUP623 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP623 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0.92);
        }
        
        #POPUP615 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP615 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0.92);
        }
        
        #POPUP607 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP607 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0.92);
        }
        
        #POPUP599 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP599 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0.92);
        }
        
        #POPUP591 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP591 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0.92);
        }
        
        #POPUP583 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP583 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0.92);
        }
        
        #POPUP574 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP574 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0.92);
        }
        
        #POPUP557 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP557 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION40 {
            display: block;
            background-color: rgba(158, 158, 158, 0.15);
        }
        
        #SECTION345 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x900/57b167c9ca57d39c18a1c57c/dd3cdbba3680d18827a37ae5ceb81e95-377777.jpg");
            background-color: rgba(255, 255, 255, 0.21);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION345 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION126 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1100/5a28c4f8c3f6592b3acabec8/student-849825_960_720-1513163357.jpg");
            background-color: rgba(0, 129, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION126 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.31);
        }
        
        #IMAGE150 {
            display: block;
        }
        
        #IMAGE150 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE150 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BUTTON151 {
            display: table;
        }
        
        #BUTTON151 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 11px;
        }
        
        #BUTTON151> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON151> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE154 {
            display: block;
        }
        
        #HEADLINE154 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 61px;
        }
        
        #LINE155 {
            display: block;
        }
        
        #LINE155>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(145, 211, 242, 1);
            margin-top: 9.5px;
        }
        
        #LINE155 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE157 {
            display: block;
        }
        
        #HEADLINE157 > .widget-content {
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 31px;
        }
        
        #IMAGE156 {
            display: block;
        }
        
        #IMAGE156 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE156 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE158 {
            display: block;
        }
        
        #HEADLINE158 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 700;
            line-height: 38px;
        }
        
        #HEADLINE159 {
            display: block;
        }
        
        #HEADLINE159 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINE163 {
            display: block;
        }
        
        #LINE163>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
            margin-top: 12px;
        }
        
        #LINE163 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE162 {
            display: block;
        }
        
        #HEADLINE162 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE161 {
            display: block;
        }
        
        #HEADLINE161 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #HEADLINE160 {
            display: block;
        }
        
        #HEADLINE160 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #HEADLINE194 {
            display: block;
        }
        
        #HEADLINE194 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 700;
            line-height: 38px;
        }
        
        #HEADLINE195 {
            display: block;
        }
        
        #HEADLINE195 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #IMAGE198 {
            display: block;
        }
        
        #IMAGE198 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE198 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE199 {
            display: block;
        }
        
        #HEADLINE199 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE201 {
            display: block;
        }
        
        #HEADLINE201 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #GROUP405 {
            display: block;
        }
        
        #GROUP405 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP404 {
            display: block;
        }
        
        #GROUP404 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE207 {
            display: block;
        }
        
        #SHAPE207 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(70, 185, 224, 1);
        }
        
        #SHAPE207> .widget-content svg {
            fill: rgba(70, 185, 224, 1);
        }
        
        #SHAPE206 {
            display: block;
        }
        
        #SHAPE206 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(70, 185, 224, 1);
        }
        
        #SHAPE206> .widget-content svg {
            fill: rgba(70, 185, 224, 1);
        }
        
        #HEADLINE205 {
            display: block;
        }
        
        #HEADLINE205 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #SHAPE203 {
            display: block;
        }
        
        #SHAPE203 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(70, 185, 224, 1);
        }
        
        #SHAPE203> .widget-content svg {
            fill: rgba(70, 185, 224, 1);
        }
        
        #HEADLINE316 {
            display: block;
        }
        
        #HEADLINE316 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 700;
            line-height: 38px;
        }
        
        #YOUTUBE327 {
            display: block;
        }
        
        #YOUTUBE327 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP651 {
            display: block;
        }
        
        #GROUP651 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP361 {
            display: block;
        }
        
        #GROUP361 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE326 {
            display: block;
        }
        
        #HEADLINE326 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #HEADLINE318 {
            display: block;
        }
        
        #HEADLINE318 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE328 {
            display: block;
        }
        
        #HEADLINE328 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #GROUP650 {
            display: block;
        }
        
        #GROUP650 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE640 {
            display: block;
        }
        
        #SHAPE640 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 129, 255, 1);
        }
        
        #SHAPE640> .widget-content svg {
            fill: rgba(0, 129, 255, 1);
        }
        
        #GROUP649 {
            display: block;
        }
        
        #GROUP649 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE639 {
            display: block;
        }
        
        #SHAPE639 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 129, 255, 1);
        }
        
        #SHAPE639> .widget-content svg {
            fill: rgba(0, 129, 255, 1);
        }
        
        #GROUP648 {
            display: block;
        }
        
        #GROUP648 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE638 {
            display: block;
        }
        
        #SHAPE638 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 129, 255, 1);
        }
        
        #SHAPE638> .widget-content svg {
            fill: rgba(0, 129, 255, 1);
        }
        
        #GROUP647 {
            display: block;
        }
        
        #GROUP647 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE637 {
            display: block;
        }
        
        #SHAPE637 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 129, 255, 1);
        }
        
        #SHAPE637> .widget-content svg {
            fill: rgba(0, 129, 255, 1);
        }
        
        #GROUP646 {
            display: block;
        }
        
        #GROUP646 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE636 {
            display: block;
        }
        
        #SHAPE636 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 129, 255, 1);
        }
        
        #SHAPE636> .widget-content svg {
            fill: rgba(0, 129, 255, 1);
        }
        
        #SHAPE635 {
            display: block;
        }
        
        #SHAPE635 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 129, 255, 1);
        }
        
        #SHAPE635> .widget-content svg {
            fill: rgba(0, 129, 255, 1);
        }
        
        #BOX71 {
            display: block;
        }
        
        #BOX71 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX71> .widget-content {
            border-radius: 5px;
        }
        
        #BOX71> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE305 {
            display: block;
        }
        
        #HEADLINE305 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON537 {
            display: table;
        }
        
        #BUTTON537 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 40px;
        }
        
        #BUTTON537> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON537> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #GROUP85 {
            display: block;
        }
        
        #GROUP85 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE111 {
            display: block;
        }
        
        #HEADLINE111 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 38px;
        }
        
        #BOX272 {
            display: block;
        }
        
        #BOX272 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX272> .widget-content {
            border-radius: 5px;
        }
        
        #BOX272> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE309 {
            display: block;
        }
        
        #HEADLINE309 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON539 {
            display: table;
        }
        
        #BUTTON539 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 40px;
        }
        
        #BUTTON539> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON539> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX296 {
            display: block;
        }
        
        #BOX296 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX296> .widget-content {
            border-radius: 5px;
        }
        
        #BOX296> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE306 {
            display: block;
        }
        
        #HEADLINE306 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON538 {
            display: table;
        }
        
        #BUTTON538 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 40px;
        }
        
        #BUTTON538> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON538> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX297 {
            display: block;
        }
        
        #BOX297 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX297> .widget-content {
            border-radius: 5px;
        }
        
        #BOX297> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE310 {
            display: block;
        }
        
        #HEADLINE310 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON542 {
            display: table;
        }
        
        #BUTTON542 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 40px;
        }
        
        #BUTTON542> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON542> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX298 {
            display: block;
        }
        
        #BOX298 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX298> .widget-content {
            border-radius: 5px;
        }
        
        #BOX298> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE307 {
            display: block;
        }
        
        #HEADLINE307 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON540 {
            display: table;
        }
        
        #BUTTON540 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 40px;
        }
        
        #BUTTON540> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON540> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX299 {
            display: block;
        }
        
        #BOX299 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX299> .widget-content {
            border-radius: 5px;
        }
        
        #BOX299> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE311 {
            display: block;
        }
        
        #HEADLINE311 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON541 {
            display: table;
        }
        
        #BUTTON541 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 40px;
        }
        
        #BUTTON541> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON541> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX300 {
            display: block;
        }
        
        #BOX300 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX300> .widget-content {
            border-radius: 5px;
        }
        
        #BOX300> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE308 {
            display: block;
        }
        
        #HEADLINE308 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON548 {
            display: table;
        }
        
        #BUTTON548 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 40px;
        }
        
        #BUTTON548> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON548> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #GROUP415 {
            display: block;
        }
        
        #GROUP415 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE221 {
            display: block;
        }
        
        #SHAPE221 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE221> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE222 {
            display: block;
        }
        
        #HEADLINE222 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #BOX301 {
            display: block;
        }
        
        #BOX301 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX301> .widget-content {
            border-radius: 5px;
        }
        
        #BOX301> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE304 {
            display: block;
        }
        
        #HEADLINE304 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON536 {
            display: table;
        }
        
        #BUTTON536 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 40px;
        }
        
        #BUTTON536> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON536> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX271 {
            display: block;
        }
        
        #BOX271 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX271> .widget-content {
            border-radius: 5px;
        }
        
        #BOX271> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE302 {
            display: block;
        }
        
        #HEADLINE302 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON527 {
            display: table;
        }
        
        #BUTTON527 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 40px;
        }
        
        #BUTTON527> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON527> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #GROUP416 {
            display: block;
        }
        
        #GROUP416 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX98 {
            display: block;
        }
        
        #BOX98 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX97 {
            display: block;
        }
        
        #BOX97 > .widget-content {
            background-color: rgba(95, 192, 245, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX97> .widget-content {
            border-radius: 220px;
        }
        
        #BOX97> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #GROUP430 {
            display: block;
        }
        
        #GROUP430 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE249 {
            display: block;
        }
        
        #HEADLINE249 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #SHAPE248 {
            display: block;
        }
        
        #SHAPE248 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE248> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP431 {
            display: block;
        }
        
        #GROUP431 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE245 {
            display: block;
        }
        
        #HEADLINE245 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #SHAPE244 {
            display: block;
        }
        
        #SHAPE244 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE244> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP432 {
            display: block;
        }
        
        #GROUP432 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE257 {
            display: block;
        }
        
        #SHAPE257 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE257> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE256 {
            display: block;
        }
        
        #HEADLINE256 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #GROUP433 {
            display: block;
        }
        
        #GROUP433 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE265 {
            display: block;
        }
        
        #HEADLINE265 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #SHAPE266 {
            display: block;
        }
        
        #SHAPE266 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE266> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP449 {
            display: block;
        }
        
        #GROUP449 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE259 {
            display: block;
        }
        
        #HEADLINE259 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #SHAPE260 {
            display: block;
        }
        
        #SHAPE260 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE260> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP450 {
            display: block;
        }
        
        #GROUP450 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE269 {
            display: block;
        }
        
        #SHAPE269 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE269> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE270 {
            display: block;
        }
        
        #HEADLINE270 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #GROUP451 {
            display: block;
        }
        
        #GROUP451 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE263 {
            display: block;
        }
        
        #SHAPE263 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE263> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE262 {
            display: block;
        }
        
        #HEADLINE262 > .widget-content {
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
        
        #BOX487 {
            display: block;
        }
        
        #BOX487 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX488 {
            display: block;
        }
        
        #BOX488 > .widget-content {
            background-color: rgba(95, 192, 245, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX488> .widget-content {
            border-radius: 220px;
        }
        
        #BOX488> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #GROUP492 {
            display: block;
        }
        
        #GROUP492 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX493 {
            display: block;
        }
        
        #BOX493 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX494 {
            display: block;
        }
        
        #BOX494 > .widget-content {
            background-color: rgba(95, 192, 245, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX494> .widget-content {
            border-radius: 220px;
        }
        
        #BOX494> .ladi-widget-overlay {
            border-radius: 220px;
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
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX497 {
            display: block;
        }
        
        #BOX497 > .widget-content {
            background-color: rgba(95, 192, 245, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX497> .widget-content {
            border-radius: 220px;
        }
        
        #BOX497> .ladi-widget-overlay {
            border-radius: 220px;
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
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX500 {
            display: block;
        }
        
        #BOX500 > .widget-content {
            background-color: rgba(95, 192, 245, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX500> .widget-content {
            border-radius: 220px;
        }
        
        #BOX500> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #GROUP501 {
            display: block;
        }
        
        #GROUP501 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX502 {
            display: block;
        }
        
        #BOX502 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX503 {
            display: block;
        }
        
        #BOX503 > .widget-content {
            background-color: rgba(95, 192, 245, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX503> .widget-content {
            border-radius: 220px;
        }
        
        #BOX503> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #GROUP504 {
            display: block;
        }
        
        #GROUP504 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX505 {
            display: block;
        }
        
        #BOX505 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX506 {
            display: block;
        }
        
        #BOX506 > .widget-content {
            background-color: rgba(95, 192, 245, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX506> .widget-content {
            border-radius: 220px;
        }
        
        #BOX506> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #BOX517 {
            display: block;
        }
        
        #BOX517 > .widget-content {
            background-color: rgba(95, 192, 245, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX517> .widget-content {
            border-radius: 220px;
        }
        
        #BOX517> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #SHAPE513 {
            display: block;
        }
        
        #SHAPE513 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE513> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP516 {
            display: block;
        }
        
        #GROUP516 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX514 {
            display: block;
        }
        
        #BOX514 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX514> .widget-content {
            border-radius: 5px;
        }
        
        #BOX514> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE515 {
            display: block;
        }
        
        #HEADLINE515 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #GROUP489 {
            display: block;
        }
        
        #GROUP489 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX490 {
            display: block;
        }
        
        #BOX490 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX491 {
            display: block;
        }
        
        #BOX491 > .widget-content {
            background-color: rgba(95, 192, 245, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX491> .widget-content {
            border-radius: 220px;
        }
        
        #BOX491> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #GROUP483 {
            display: block;
        }
        
        #GROUP483 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX484 {
            display: block;
        }
        
        #BOX484 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX485 {
            display: block;
        }
        
        #BOX485 > .widget-content {
            background-color: rgba(95, 192, 245, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX485> .widget-content {
            border-radius: 220px;
        }
        
        #BOX485> .ladi-widget-overlay {
            border-radius: 220px;
        }
        
        #GROUP652 {
            display: block;
        }
        
        #GROUP652 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE92 {
            display: block;
        }
        
        #HEADLINE92 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #SHAPE93 {
            display: block;
        }
        
        #SHAPE93 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE93> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE624 {
            display: block;
        }
        
        #HEADLINE624 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(51, 51, 51, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINE626 {
            display: block;
        }
        
        #LINE626>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE626 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE630 {
            display: block;
        }
        
        #LINE630>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE630 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH627 {
            display: block;
        }
        
        #PARAGRAPH627 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(42, 64, 71, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE616 {
            display: block;
        }
        
        #HEADLINE616 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(51, 51, 51, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINE618 {
            display: block;
        }
        
        #LINE618>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE618 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH619 {
            display: block;
        }
        
        #PARAGRAPH619 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(42, 64, 71, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #LINE622 {
            display: block;
        }
        
        #LINE622>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE622 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE608 {
            display: block;
        }
        
        #HEADLINE608 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(51, 51, 51, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINE610 {
            display: block;
        }
        
        #LINE610>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE610 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE614 {
            display: block;
        }
        
        #LINE614>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE614 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH611 {
            display: block;
        }
        
        #PARAGRAPH611 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(42, 64, 71, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE600 {
            display: block;
        }
        
        #HEADLINE600 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(51, 51, 51, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINE602 {
            display: block;
        }
        
        #LINE602>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE602 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH603 {
            display: block;
        }
        
        #PARAGRAPH603 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(42, 64, 71, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #LINE606 {
            display: block;
        }
        
        #LINE606>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE606 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE592 {
            display: block;
        }
        
        #HEADLINE592 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(51, 51, 51, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINE594 {
            display: block;
        }
        
        #LINE594>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE594 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH595 {
            display: block;
        }
        
        #PARAGRAPH595 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(42, 64, 71, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #LINE598 {
            display: block;
        }
        
        #LINE598>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE598 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE584 {
            display: block;
        }
        
        #HEADLINE584 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(51, 51, 51, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINE586 {
            display: block;
        }
        
        #LINE586>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE586 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #LINE590 {
            display: block;
        }
        
        #LINE590>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE590 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH587 {
            display: block;
        }
        
        #PARAGRAPH587 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(42, 64, 71, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE575 {
            display: block;
        }
        
        #HEADLINE575 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(51, 51, 51, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINE577 {
            display: block;
        }
        
        #LINE577>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE577 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH578 {
            display: block;
        }
        
        #PARAGRAPH578 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(42, 64, 71, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #LINE581 {
            display: block;
        }
        
        #LINE581>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE581 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE558 {
            display: block;
        }
        
        #HEADLINE558 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(51, 51, 51, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINE560 {
            display: block;
        }
        
        #LINE560>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE560 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #LINE564 {
            display: block;
        }
        
        #LINE564>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(80, 111, 191, 1);
            margin-top: 10.5px;
        }
        
        #LINE564 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH561 {
            display: block;
        }
        
        #PARAGRAPH561 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(42, 64, 71, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE166 {
            display: block;
        }
        
        #HEADLINE166 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 700;
            line-height: 38px;
        }
        
        #CAROUSEL659 {
            display: block;
        }
        
        #CAROUSEL659 > .widget-content {
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM-CAROUSEL661 {}
        
        #ITEM-CAROUSEL661 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE180 {
            display: block;
        }
        
        #HEADLINE180 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE177 {
            display: block;
        }
        
        #HEADLINE177 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE173 {
            display: block;
        }
        
        #HEADLINE173 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #IMAGE169 {
            display: block;
        }
        
        #IMAGE169 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE169 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #IMAGE511 {
            display: block;
        }
        
        #IMAGE511 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE511 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE512 {
            display: block;
        }
        
        #HEADLINE512 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE175 {
            display: block;
        }
        
        #HEADLINE175 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #HEADLINE183 {
            display: block;
        }
        
        #HEADLINE183 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE181 {
            display: block;
        }
        
        #HEADLINE181 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE178 {
            display: block;
        }
        
        #HEADLINE178 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE174 {
            display: block;
        }
        
        #HEADLINE174 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #IMAGE167 {
            display: block;
        }
        
        #IMAGE167 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE167 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #ITEM-CAROUSEL662 {}
        
        #ITEM-CAROUSEL662 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE674 {
            display: block;
        }
        
        #HEADLINE674 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE676 {
            display: block;
        }
        
        #HEADLINE676 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #GROUP700 {
            display: block;
        }
        
        #GROUP700 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE667 {
            display: block;
        }
        
        #HEADLINE667 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #IMAGE675 {
            display: block;
        }
        
        #IMAGE675 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE675 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE672 {
            display: block;
        }
        
        #HEADLINE672 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE673 {
            display: block;
        }
        
        #HEADLINE673 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE671 {
            display: block;
        }
        
        #HEADLINE671 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE668 {
            display: block;
        }
        
        #HEADLINE668 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #IMAGE665 {
            display: block;
        }
        
        #IMAGE665 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE665 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE670 {
            display: block;
        }
        
        #HEADLINE670 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #GROUP697 {
            display: block;
        }
        
        #GROUP697 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE669 {
            display: block;
        }
        
        #HEADLINE669 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #IMAGE693 {
            display: block;
        }
        
        #IMAGE693 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE693 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX348 {
            display: block;
        }
        
        #BOX348 > .widget-content {
            background-color: rgba(0, 129, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 0px 0px rgba(255, 255, 255, 1);
        }
        
        #BOX348> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX348> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE349 {
            display: block;
        }
        
        #HEADLINE349 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #PARAGRAPH350 {
            display: block;
        }
        
        #PARAGRAPH350 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX354 {
            display: block;
        }
        
        #BOX354 > .widget-content {
            background-color: rgba(0, 129, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 0px 0px rgba(255, 255, 255, 1);
        }
        
        #BOX354> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX354> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE355 {
            display: block;
        }
        
        #HEADLINE355 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #PARAGRAPH356 {
            display: block;
        }
        
        #PARAGRAPH356 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX357 {
            display: block;
        }
        
        #BOX357 > .widget-content {
            background-color: rgba(0, 129, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 0px 0px rgba(255, 255, 255, 1);
        }
        
        #BOX357> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX357> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE358 {
            display: block;
        }
        
        #HEADLINE358 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #PARAGRAPH363 {
            display: block;
        }
        
        #PARAGRAPH363 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE346 {
            display: block;
        }
        
        #HEADLINE346 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 700;
            line-height: 38px;
        }
        
        #HEADLINE362 {
            display: block;
        }
        
        #HEADLINE362 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX351 {
            display: block;
        }
        
        #BOX351 > .widget-content {
            background-color: rgba(0, 129, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 0px 0px rgba(255, 255, 255, 1);
        }
        
        #BOX351> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX351> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE352 {
            display: block;
        }
        
        #HEADLINE352 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #PARAGRAPH353 {
            display: block;
        }
        
        #PARAGRAPH353 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX521 {
            display: block;
        }
        
        #BOX521 > .widget-content {
            background-color: rgba(0, 129, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 0px 0px rgba(255, 255, 255, 1);
        }
        
        #BOX521> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX521> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE522 {
            display: block;
        }
        
        #HEADLINE522 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #PARAGRAPH523 {
            display: block;
        }
        
        #PARAGRAPH523 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX642 {
            display: block;
        }
        
        #BOX642 > .widget-content {
            background-color: rgba(0, 129, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 0px 0px rgba(255, 255, 255, 1);
        }
        
        #BOX642> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX642> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE643 {
            display: block;
        }
        
        #HEADLINE643 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #PARAGRAPH644 {
            display: block;
        }
        
        #PARAGRAPH644 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #LINE129 {
            display: block;
        }
        
        #LINE129>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.06);
            margin-top: 12px;
        }
        
        #LINE129 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX365 {
            display: block;
        }
        
        #BOX365 > .widget-content {
            background-color: rgba(255, 255, 255, 0.87);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX365> .widget-content {
            border-radius: 14px;
        }
        
        #BOX365> .ladi-widget-overlay {
            border-radius: 14px;
        }
        
        #FORM393 {
            display: block;
        }
        
        #FORM393 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM394 {
            display: block;
        }
        
        #ITEM_FORM394 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM394> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM394> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM395 {
            display: block;
        }
        
        #ITEM_FORM395 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM395> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM395> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM396 {
            display: block;
        }
        
        #ITEM_FORM396 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM396> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM396> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM400 {
            display: block;
        }
        
        #ITEM_FORM400 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM400> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM400> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON398 {
            display: table;
        }
        
        #BUTTON398 > .widget-content {
            background-color: #3D9BE9;
            color: #ffffff;
            line-height: 40px;
        }
        
        #BUTTON398> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON398> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE399 {
            display: block;
        }
        
        #HEADLINE399 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 129, 255, 1);
            font-weight: 400;
            line-height: 49px;
        }
        
        #HEADLINE366 {
            display: block;
        }
        
        #HEADLINE366 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 51px;
        }
        
        #GROUP370 {
            display: block;
        }
        
        #GROUP370 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX368 {
            display: block;
        }
        
        #BOX368 > .widget-content {
            background-color: rgba(0, 129, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX368> .widget-content {
            border-bottom-left-radius: 40px;
            border-top-left-radius: 40px;
        }
        
        #BOX368> .ladi-widget-overlay {
            border-bottom-left-radius: 40px;
            border-top-left-radius: 40px;
        }
        
        #HEADLINE706 {
            display: block;
        }
        
        #HEADLINE706 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #BOX369 {
            display: block;
        }
        
        #BOX369 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX369> .widget-content {
            border-bottom-right-radius: 40px;
            border-top-right-radius: 40px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 129, 255, 1);
        }
        
        #BOX369> .ladi-widget-overlay {
            border-bottom-right-radius: 40px;
            border-top-right-radius: 40px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 129, 255, 1);
        }
        
        #HEADLINE705 {
            display: block;
        }
        
        #HEADLINE705 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE375 {
            display: block;
        }
        
        #HEADLINE375 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE386 {
            display: block;
        }
        
        #HEADLINE386 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #GROUP470 {
            display: block;
        }
        
        #GROUP470 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX471 {
            display: block;
        }
        
        #BOX471 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX471> .widget-content {
            border-radius: 6px;
        }
        
        #BOX471> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #HEADLINE472 {
            display: block;
        }
        
        #HEADLINE472 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 32px;
        }
        
        #HEADLINE473 {
            display: block;
        }
        
        #HEADLINE473 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 32px;
        }
        
        #BOX474 {
            display: block;
        }
        
        #BOX474 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX474> .widget-content {
            border-radius: 6px;
        }
        
        #BOX474> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #BOX475 {
            display: block;
        }
        
        #BOX475 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX475> .widget-content {
            border-radius: 6px;
        }
        
        #BOX475> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #HEADLINE476 {
            display: block;
        }
        
        #HEADLINE476 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 32px;
        }
        
        #HEADLINE477 {
            display: block;
        }
        
        #HEADLINE477 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 32px;
        }
        
        #BOX478 {
            display: block;
        }
        
        #BOX478 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX478> .widget-content {
            border-radius: 6px;
        }
        
        #BOX478> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #COUNTDOWN479 {
            display: block;
        }
        
        #COUNTDOWN479 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 0px;
        }
        
        #GROUP481 {
            display: block;
        }
        
        #GROUP481 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE372 {
            display: block;
        }
        
        #LINE372>.widget-content .line {
            border-top-width: 4px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 8.5px;
        }
        
        #LINE372 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE373 {
            display: block;
        }
        
        #LINE373>.widget-content .line {
            border-top-width: 4px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 8.5px;
        }
        
        #LINE373 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE371 {
            display: block;
        }
        
        #HEADLINE371 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #LINE707 {
            display: block;
        }
        
        #LINE707>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 10.5px;
        }
        
        #LINE707 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION2 {
                width: 100%;
                height: 467px;
            }
            #SECTION2 .container {}
            #SECTION2 {
                background-image: linear-gradient(rgba(33, 34, 34, 0.61), rgba(33, 34, 34, 0.61)), url("https://static.ladipage.net/s500x600/5a28c4f8c3f6592b3acabec8/chart-2785979_960_720-1513079466.jpg");
                background-image: -o-linear-gradient(rgba(33, 34, 34, 0.61), rgba(33, 34, 34, 0.61)), url("https://static.ladipage.net/s500x600/5a28c4f8c3f6592b3acabec8/chart-2785979_960_720-1513079466.jpg");
                background-image: -ms-linear-gradient(rgba(33, 34, 34, 0.61), rgba(33, 34, 34, 0.61)), url("https://static.ladipage.net/s500x600/5a28c4f8c3f6592b3acabec8/chart-2785979_960_720-1513079466.jpg");
                background-image: -moz-linear-gradient(rgba(33, 34, 34, 0.61), rgba(33, 34, 34, 0.61)), url("https://static.ladipage.net/s500x600/5a28c4f8c3f6592b3acabec8/chart-2785979_960_720-1513079466.jpg");
                background-image: -webkit-linear-gradient(rgba(33, 34, 34, 0.61), rgba(33, 34, 34, 0.61)), url("https://static.ladipage.net/s500x600/5a28c4f8c3f6592b3acabec8/chart-2785979_960_720-1513079466.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION9 {
                width: 100%;
                height: 515px;
            }
            #SECTION9 .container {}
            #SECTION9 {
                background-image: linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x700/57b167c9ca57d39c18a1c57c/ricepaper_v3.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x700/57b167c9ca57d39c18a1c57c/ricepaper_v3.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x700/57b167c9ca57d39c18a1c57c/ricepaper_v3.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x700/57b167c9ca57d39c18a1c57c/ricepaper_v3.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x700/57b167c9ca57d39c18a1c57c/ricepaper_v3.png");
                background-position: top left;
                background-repeat: repeat;
            }
            #SECTION184 {
                width: 100%;
                height: 697.96875px;
            }
            #SECTION184 .container {}
            #SECTION184 {
                background-image: none;
            }
            #SECTION314 {
                width: 100%;
                height: 812.03125px;
            }
            #SECTION314 .container {}
            #SECTION314 {
                background-image: linear-gradient(rgba(255, 255, 255, 0.78), rgba(255, 255, 255, 0.78)), url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/businessman-2606509_960_720-1513155872.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0.78), rgba(255, 255, 255, 0.78)), url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/businessman-2606509_960_720-1513155872.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0.78), rgba(255, 255, 255, 0.78)), url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/businessman-2606509_960_720-1513155872.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0.78), rgba(255, 255, 255, 0.78)), url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/businessman-2606509_960_720-1513155872.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.78), rgba(255, 255, 255, 0.78)), url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/businessman-2606509_960_720-1513155872.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION65 {
                width: 100%;
                height: 1470.46875px;
            }
            #SECTION65 .container {}
            #SECTION65 {
                background-image: linear-gradient(rgba(1, 87, 155, 1), rgba(1, 87, 155, 1)), url("https://static.ladipage.net/s500x1600/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1513141348.jpg");
                background-image: -o-linear-gradient(rgba(1, 87, 155, 1), rgba(1, 87, 155, 1)), url("https://static.ladipage.net/s500x1600/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1513141348.jpg");
                background-image: -ms-linear-gradient(rgba(1, 87, 155, 1), rgba(1, 87, 155, 1)), url("https://static.ladipage.net/s500x1600/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1513141348.jpg");
                background-image: -moz-linear-gradient(rgba(1, 87, 155, 1), rgba(1, 87, 155, 1)), url("https://static.ladipage.net/s500x1600/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1513141348.jpg");
                background-image: -webkit-linear-gradient(rgba(1, 87, 155, 1), rgba(1, 87, 155, 1)), url("https://static.ladipage.net/s500x1600/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1513141348.jpg");
                background-size: cover;
                background-attachment: fixed;
                background-position: center top;
                background-repeat: no-repeat;
            }
            #POPUP623 {
                width: 100%;
                height: 100%;
            }
            #POPUP623 .container {
                width: 100%;
                height: 573px;
                top: calc(100%-573px);
            }
            #POPUP623 {
                background-image: linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP615 {
                width: 100%;
                height: 100%;
            }
            #POPUP615 .container {
                width: 100%;
                height: 573px;
                top: calc(100%-573px);
            }
            #POPUP615 {
                background-image: linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP607 {
                width: 100%;
                height: 100%;
            }
            #POPUP607 .container {
                width: 100%;
                height: 573px;
                top: calc(100%-573px);
            }
            #POPUP607 {
                background-image: linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP599 {
                width: 100%;
                height: 100%;
            }
            #POPUP599 .container {
                width: 100%;
                height: 573px;
                top: calc(100%-573px);
            }
            #POPUP599 {
                background-image: linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP591 {
                width: 100%;
                height: 100%;
            }
            #POPUP591 .container {
                width: 100%;
                height: 573px;
                top: calc(100%-573px);
            }
            #POPUP591 {
                background-image: linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP583 {
                width: 100%;
                height: 100%;
            }
            #POPUP583 .container {
                width: 100%;
                height: 573px;
                top: calc(100%-573px);
            }
            #POPUP583 {
                background-image: linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP574 {
                width: 100%;
                height: 100%;
            }
            #POPUP574 .container {
                width: 100%;
                height: 573px;
                top: calc(100%-573px);
            }
            #POPUP574 {
                background-image: linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP557 {
                width: 100%;
                height: 100%;
            }
            #POPUP557 .container {
                width: 100%;
                height: 573px;
                top: calc(100%-573px);
            }
            #POPUP557 {
                background-image: linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x500/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x500/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x500/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x500/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x500/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION40 {
                width: 100%;
                height: 861px;
            }
            #SECTION40 .container {}
            #SECTION40 {
                background-image: none;
            }
            #SECTION345 {
                width: 100%;
                height: 1096px;
            }
            #SECTION345 .container {}
            #SECTION345 {
                background-image: linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x1200/57b167c9ca57d39c18a1c57c/dd3cdbba3680d18827a37ae5ceb81e95-377777.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x1200/57b167c9ca57d39c18a1c57c/dd3cdbba3680d18827a37ae5ceb81e95-377777.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x1200/57b167c9ca57d39c18a1c57c/dd3cdbba3680d18827a37ae5ceb81e95-377777.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x1200/57b167c9ca57d39c18a1c57c/dd3cdbba3680d18827a37ae5ceb81e95-377777.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 1)), url("https://static.ladipage.net/s500x1200/57b167c9ca57d39c18a1c57c/dd3cdbba3680d18827a37ae5ceb81e95-377777.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION126 {
                width: 100%;
                height: 1213.625px;
            }
            #SECTION126 .container {}
            #SECTION126 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.31), rgba(0, 0, 0, 0.31)), url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/student-849825_960_720-1513163357.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.31), rgba(0, 0, 0, 0.31)), url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/student-849825_960_720-1513163357.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.31), rgba(0, 0, 0, 0.31)), url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/student-849825_960_720-1513163357.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.31), rgba(0, 0, 0, 0.31)), url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/student-849825_960_720-1513163357.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.31), rgba(0, 0, 0, 0.31)), url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/student-849825_960_720-1513163357.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #IMAGE150 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/23584698_920376338127716_1573861364_n-1513076747.png);
            }
            #IMAGE150 {
                top: 20px;
                left: 128.594px;
                width: 117.8125px;
                height: 37px;
            }
            #BUTTON151 {
                top: 67px;
                left: 56.5px;
                padding: 0px;
                width: 262px;
                height: 27px;
            }
            #BUTTON151 > .widget-content {
                font-size: 14px;
                text-align: right;
            }
            #HEADLINE154 {
                top: 112px;
                left: -2px;
                padding: 0px;
                width: 384px;
                height: 150px;
            }
            #HEADLINE154 > .widget-content {
                font-size: 37px;
                text-align: center;
                line-height: 50px;
            }
            #LINE155 {
                top: 251px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #HEADLINE157 {
                top: 275px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 155px;
            }
            #HEADLINE157 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #IMAGE156 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png);
            }
            #IMAGE156 {
                top: 77px;
                left: 85.5001px;
                width: 206.1875px;
                height: 203px;
            }
            #HEADLINE158 {
                top: 24px;
                left: 15px;
                padding: 0px;
                width: 355px;
                height: 38px;
            }
            #HEADLINE158 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #HEADLINE159 {
                display: none!important;
                top: 230px;
                left: 389.5px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE159 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE163 {
                top: 323px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #HEADLINE162 {
                top: 310px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 20px;
            }
            #HEADLINE162 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE161 {
                top: 285px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 26px;
            }
            #HEADLINE161 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE160 {
                top: 342px;
                left: 11px;
                padding: 0px;
                width: 355px;
                height: 130px;
            }
            #HEADLINE160 > .widget-content {
                font-size: 22px;
                text-align: justify;
            }
            #HEADLINE194 {
                top: 16px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 38px;
            }
            #HEADLINE194 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #HEADLINE195 {
                top: 47px;
                left: 73.5px;
                padding: 0px;
                width: 228px;
                height: 24px;
            }
            #HEADLINE195 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #IMAGE198 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/Untitled-1-1513140474.png);
            }
            #IMAGE198 {
                top: 85px;
                left: 58.5px;
                width: 258px;
                height: 251px;
            }
            #HEADLINE199 {
                top: 333.969px;
                left: 26px;
                padding: 0px;
                width: 323px;
                height: 25px;
            }
            #HEADLINE199 > .widget-content {
                font-size: 19px;
                text-align: center;
            }
            #HEADLINE201 {
                display: none!important;
                top: 704.969px;
                left: 87.5px;
                padding: 0px;
                width: 200px;
                height: 22px;
            }
            #HEADLINE201 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP405 {
                top: 358.969px;
                left: 25.5px;
                width: 308px;
                height: 320.03125px;
            }
            #GROUP404 {
                top: 86.0313px;
                left: 1px;
                width: 42.34375px;
                height: 105px;
            }
            #SHAPE207 {
                top: 65px;
                left: 3px;
                width: 40.34375px;
                height: 40px;
            }
            #SHAPE206 {
                top: 0px;
                left: 1px;
                width: 40.34375px;
                height: 40px;
            }
            #HEADLINE205 {
                top: 12.0313px;
                left: 40px;
                padding: 0px;
                width: 269px;
                height: 308px;
            }
            #HEADLINE205 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #SHAPE203 {
                top: 0px;
                left: 3px;
                width: 36.34375px;
                height: 37.96875px;
            }
            #HEADLINE316 {
                top: 16.75px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 76px;
            }
            #HEADLINE316 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #YOUTUBE327 {
                top: 593.5px;
                left: 9px;
                width: 358px;
                height: 178.88888888888889px;
            }
            #GROUP651 {
                top: 68px;
                left: -1.5px;
                width: 360.1875px;
                height: 525px;
            }
            #GROUP361 {
                top: 0px;
                left: 33.5px;
                width: 327.6875px;
                height: 525px;
            }
            #HEADLINE326 {
                top: 0px;
                left: 27.625px;
                padding: 0px;
                width: 284.5625px;
                height: 56px;
            }
            #HEADLINE326 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #HEADLINE318 {
                top: 45px;
                left: 1px;
                padding: 0px;
                width: 326.84375px;
                height: 480px;
            }
            #HEADLINE318 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE328 {
                top: 140px;
                left: 1.84375px;
                padding: 0px;
                width: 326.84375px;
                height: 88px;
            }
            #HEADLINE328 > .widget-content {
                font-size: 15px;
                text-align: justify;
            }
            #GROUP650 {
                top: 36.0313px;
                left: 1px;
                width: 43px;
                height: 459.5px;
            }
            #SHAPE640 {
                display: none!important;
                top: 1038.46875px;
                left: 163.71875px;
                width: 39px;
                height: 39px;
            }
            #GROUP649 {
                top: 0px;
                left: 1px;
                width: 43px;
                height: 459.5px;
            }
            #SHAPE639 {
                top: 420.5px;
                left: 5px;
                width: 39px;
                height: 39px;
            }
            #GROUP648 {
                top: 0px;
                left: 1px;
                width: 42px;
                height: 378.5px;
            }
            #SHAPE638 {
                top: 339.5px;
                left: 4px;
                width: 39px;
                height: 39px;
            }
            #GROUP647 {
                top: 0px;
                left: 1px;
                width: 40.28125px;
                height: 238px;
            }
            #SHAPE637 {
                top: 199px;
                left: 2.28125px;
                width: 39px;
                height: 39px;
            }
            #GROUP646 {
                top: 0px;
                left: 1px;
                width: 39px;
                height: 118.5px;
            }
            #SHAPE636 {
                top: 79.5px;
                left: 1px;
                width: 39px;
                height: 39px;
            }
            #SHAPE635 {
                top: 0px;
                left: 1px;
                width: 39px;
                height: 39px;
            }
            #BOX71 {
                top: 396.375px;
                left: 31.5938px;
                width: 325.8125px;
                height: 109.6875px;
            }
            #HEADLINE305 {
                top: 12px;
                left: 10px;
                padding: 0px;
                width: 293px;
                height: 48px;
            }
            #HEADLINE305 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON537 {
                top: 59.7031px;
                left: 10px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON537 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP85 {
                top: 1183.81px;
                left: 125.617px;
                width: 123.765625px;
                height: 40px;
            }
            #HEADLINE111 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 38px;
            }
            #HEADLINE111 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #BOX272 {
                top: 544.875px;
                left: 32px;
                width: 326.5px;
                height: 103px;
            }
            #HEADLINE309 {
                top: 14px;
                left: 20px;
                padding: 0px;
                width: 293px;
                height: 24px;
            }
            #HEADLINE309 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON539 {
                top: 53px;
                left: 21px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON539 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX296 {
                top: 686.875px;
                left: 31.5px;
                width: 327px;
                height: 107px;
            }
            #HEADLINE306 {
                top: 11px;
                left: 11px;
                padding: 0px;
                width: 293px;
                height: 48px;
            }
            #HEADLINE306 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON538 {
                top: 57px;
                left: 11px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON538 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX297 {
                top: 832.875px;
                left: 31.5px;
                width: 327px;
                height: 106px;
            }
            #HEADLINE310 {
                top: 11px;
                left: 20px;
                padding: 0px;
                width: 292.796875px;
                height: 48px;
            }
            #HEADLINE310 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON542 {
                top: 56px;
                left: 20px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON542 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX298 {
                top: 978.675px;
                left: 30.5px;
                width: 328px;
                height: 102px;
            }
            #HEADLINE307 {
                top: 25px;
                left: 10px;
                padding: 0px;
                width: 293px;
                height: 24px;
            }
            #HEADLINE307 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON540 {
                top: 52px;
                left: 10px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON540 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX299 {
                top: 1120.47px;
                left: 30.5px;
                width: 328px;
                height: 103px;
            }
            #HEADLINE311 {
                top: 11px;
                left: 20px;
                padding: 0px;
                width: 293px;
                height: 48px;
            }
            #HEADLINE311 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON541 {
                top: 53px;
                left: 20px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON541 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX300 {
                top: 1261.8px;
                left: 30.5px;
                width: 328px;
                height: 99px;
            }
            #HEADLINE308 {
                top: 23px;
                left: 11px;
                padding: 0px;
                width: 293px;
                height: 24px;
            }
            #HEADLINE308 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON548 {
                top: 49px;
                left: 12px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON548 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP415 {
                top: 220.688px;
                left: 0px;
                width: 132px;
                height: 39px;
            }
            #SHAPE221 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 39px;
            }
            #HEADLINE222 {
                top: 8px;
                left: 42px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE222 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX301 {
                top: 259.188px;
                left: 31.25px;
                width: 326.5px;
                height: 98px;
            }
            #HEADLINE304 {
                top: 12px;
                left: 20px;
                padding: 0px;
                width: 293px;
                height: 48px;
            }
            #HEADLINE304 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON536 {
                top: 56px;
                left: 21px;
                padding: 0px;
                width: 93px;
                height: 40px;
            }
            #BUTTON536 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX271 {
                top: 124.688px;
                left: 32.5px;
                width: 327px;
                height: 96px;
            }
            #HEADLINE302 {
                top: 26px;
                left: 13px;
                padding: 0px;
                width: 293px;
                height: 24px;
            }
            #HEADLINE302 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BUTTON527 {
                top: 56px;
                left: 13px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON527 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP416 {
                top: 124px;
                left: 14.5px;
                width: 11.5px;
                height: 93.3125px;
            }
            #BOX98 {
                top: 0px;
                left: 1px;
                width: 11.5px;
                height: 93.3125px;
            }
            #BOX97 {
                display: none!important;
                top: 0px;
                left: 1px;
                width: 10px;
                height: 52.765625px;
            }
            #GROUP430 {
                top: 505.875px;
                left: 0px;
                width: 132px;
                height: 39px;
            }
            #HEADLINE249 {
                top: 7px;
                left: 42px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE249 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #SHAPE248 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 39px;
            }
            #GROUP431 {
                top: 357.188px;
                left: 0px;
                width: 132px;
                height: 39px;
            }
            #HEADLINE245 {
                top: 12.2969px;
                left: 42px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE245 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #SHAPE244 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 39px;
            }
            #GROUP432 {
                top: 647.875px;
                left: 0px;
                width: 132px;
                height: 39px;
            }
            #SHAPE257 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 39px;
            }
            #HEADLINE256 {
                top: 6px;
                left: 42px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE256 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP433 {
                top: 793.875px;
                left: 0px;
                width: 132px;
                height: 39px;
            }
            #HEADLINE265 {
                top: 6px;
                left: 42px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE265 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #SHAPE266 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 39px;
            }
            #GROUP449 {
                top: 938.875px;
                left: 0px;
                width: 132px;
                height: 39px;
            }
            #HEADLINE259 {
                top: 11.1875px;
                left: 42px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE259 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #SHAPE260 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 39px;
            }
            #GROUP450 {
                top: 1080.67px;
                left: 0px;
                width: 132px;
                height: 39px;
            }
            #SHAPE269 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 39px;
            }
            #HEADLINE270 {
                top: 6px;
                left: 42px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE270 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP451 {
                top: 1223.8px;
                left: 0px;
                width: 132px;
                height: 39px;
            }
            #SHAPE263 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 39px;
            }
            #HEADLINE262 {
                top: 6px;
                left: 42px;
                padding: 0px;
                width: 91px;
                height: 20px;
            }
            #HEADLINE262 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP486 {
                top: 397.063px;
                left: 13.5313px;
                width: 12.609375px;
                height: 108.8125px;
            }
            #BOX487 {
                top: 0px;
                left: 1px;
                width: 12.609375px;
                height: 108.8125px;
            }
            #BOX488 {
                display: none!important;
                top: 0px;
                left: 0px;
                width: 12.609375px;
                height: 70.375px;
            }
            #GROUP492 {
                top: 686.875px;
                left: 14.5156px;
                width: 11.046875px;
                height: 107px;
            }
            #BOX493 {
                top: 0px;
                left: 1px;
                width: 11.046875px;
                height: 107px;
            }
            #BOX494 {
                display: none!important;
                top: 0px;
                left: 0px;
                width: 19.265625px;
                height: 36.890625px;
            }
            #GROUP495 {
                top: 832.875px;
                left: 15.4375px;
                width: 10.5625px;
                height: 106px;
            }
            #BOX496 {
                top: 0px;
                left: 1px;
                width: 10.5625px;
                height: 106px;
            }
            #BOX497 {
                display: none!important;
                top: 0px;
                left: 0px;
                width: 18.390625px;
                height: 36.546875px;
            }
            #GROUP498 {
                top: 978.672px;
                left: 14.5px;
                width: 11.5px;
                height: 102px;
            }
            #BOX499 {
                top: 0px;
                left: 1px;
                width: 11.5px;
                height: 102px;
            }
            #BOX500 {
                display: none!important;
                top: 0px;
                left: 0px;
                width: 20px;
                height: 35.171875px;
            }
            #GROUP501 {
                top: 1119.66px;
                left: 15.5938px;
                width: 11.4375px;
                height: 103.8125px;
            }
            #BOX502 {
                top: 0px;
                left: 1.03977px;
                width: 11.9375px;
                height: 103.8125px;
            }
            #BOX503 {
                display: none!important;
                top: 0px;
                left: 0px;
                width: 20.75px;
                height: 35.796875px;
            }
            #GROUP504 {
                top: 1264px;
                left: 14.5px;
                width: 12.53125px;
                height: 96.796875px;
            }
            #BOX505 {
                top: 0px;
                left: 1px;
                width: 12.53125px;
                height: 96.796875px;
            }
            #BOX506 {
                display: none!important;
                top: 0px;
                left: 1.09091px;
                width: 21.8125px;
                height: 33.375px;
            }
            #BOX517 {
                display: none!important;
                top: 0px;
                left: 1.09091px;
                width: 21.8125px;
                height: 33.375px;
            }
            #SHAPE513 {
                display: none!important;
                top: 1375px;
                left: 1px;
                width: 29.5px;
                height: 31px;
            }
            #GROUP516 {
                display: block!important;
                top: 1406.48px;
                left: 30.5px;
                width: 321.8125px;
                height: 44px;
            }
            #BOX514 {
                top: 0px;
                left: 1px;
                width: 321.8125px;
                height: 44px;
            }
            #HEADLINE515 {
                top: 9.57813px;
                left: 67.8438px;
                padding: 0px;
                width: 180.09375px;
                height: 24px;
            }
            #HEADLINE515 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP489 {
                top: 544.875px;
                left: 14.6406px;
                width: 11.28125px;
                height: 103px;
            }
            #BOX490 {
                top: 0px;
                left: 1px;
                width: 11.28125px;
                height: 103px;
            }
            #BOX491 {
                display: none!important;
                top: 0px;
                left: 0px;
                width: 11.28125px;
                height: 62.515625px;
            }
            #GROUP483 {
                top: 259.688px;
                left: 13.9375px;
                width: 13px;
                height: 97.5px;
            }
            #BOX484 {
                top: 0px;
                left: 1px;
                width: 13px;
                height: 97.5px;
            }
            #BOX485 {
                display: none!important;
                top: 0px;
                left: 1.44444px;
                width: 13px;
                height: 33.609375px;
            }
            #GROUP652 {
                top: 85px;
                left: 0px;
                width: 131.234375px;
                height: 39px;
            }
            #HEADLINE92 {
                top: 10px;
                left: 41px;
                padding: 0px;
                width: 91.234375px;
                height: 20px;
            }
            #HEADLINE92 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #SHAPE93 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 39px;
            }
            #HEADLINE624 {
                top: 34px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE624 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE626 {
                top: 60px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #LINE630 {
                top: 215px;
                left: 67px;
                width: 241px;
                height: 25px;
            }
            #PARAGRAPH627 {
                top: 81.5px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 110px;
            }
            #PARAGRAPH627 > .widget-content {
                font-size: 14px;
                text-align: justify;
                line-height: 20px;
            }
            #HEADLINE616 {
                top: 34px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE616 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE618 {
                top: 60px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #PARAGRAPH619 {
                top: 83px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 66px;
            }
            #PARAGRAPH619 > .widget-content {
                font-size: 14px;
                text-align: left;
                line-height: 20px;
            }
            #LINE622 {
                top: 215px;
                left: 67px;
                width: 241px;
                height: 25px;
            }
            #HEADLINE608 {
                top: 34px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE608 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE610 {
                top: 60px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #LINE614 {
                top: 215px;
                left: 67px;
                width: 241px;
                height: 25px;
            }
            #PARAGRAPH611 {
                top: 84.5px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 220px;
            }
            #PARAGRAPH611 > .widget-content {
                font-size: 14px;
                text-align: justify;
                line-height: 20px;
            }
            #HEADLINE600 {
                top: 34px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE600 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE602 {
                top: 60px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #PARAGRAPH603 {
                top: 84px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 110px;
            }
            #PARAGRAPH603 > .widget-content {
                font-size: 14px;
                text-align: justify;
                line-height: 20px;
            }
            #LINE606 {
                top: 215px;
                left: 67px;
                width: 241px;
                height: 25px;
            }
            #HEADLINE592 {
                top: 34px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE592 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE594 {
                top: 60px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #PARAGRAPH595 {
                top: 84px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 198px;
            }
            #PARAGRAPH595 > .widget-content {
                font-size: 14px;
                text-align: justify;
                line-height: 20px;
            }
            #LINE598 {
                top: 215px;
                left: 67px;
                width: 241px;
                height: 25px;
            }
            #HEADLINE584 {
                top: 34px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE584 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE586 {
                top: 60px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #LINE590 {
                top: 215px;
                left: 67px;
                width: 241px;
                height: 25px;
            }
            #PARAGRAPH587 {
                top: 84px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 264px;
            }
            #PARAGRAPH587 > .widget-content {
                font-size: 14px;
                text-align: justify;
                line-height: 20px;
            }
            #HEADLINE575 {
                top: 34px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE575 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE577 {
                top: 60px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #PARAGRAPH578 {
                top: 85px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 176px;
            }
            #PARAGRAPH578 > .widget-content {
                font-size: 14px;
                text-align: justify;
                line-height: 20px;
            }
            #LINE581 {
                top: 215px;
                left: 67px;
                width: 241px;
                height: 25px;
            }
            #HEADLINE558 {
                top: 34px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE558 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE560 {
                top: 60px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #LINE564 {
                top: 115px;
                left: 67px;
                width: 241px;
                height: 25px;
            }
            #PARAGRAPH561 {
                top: 88.5px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 132px;
            }
            #PARAGRAPH561 > .widget-content {
                font-size: 14px;
                text-align: left;
                line-height: 20px;
            }
            #HEADLINE166 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 38px;
            }
            #HEADLINE166 > .widget-content {
                font-size: 27px;
                text-align: center;
            }
            #CAROUSEL659 {
                top: 68px;
                left: 0px;
                width: 375px;
                height: 788px;
            }
            #ITEM-CAROUSEL661 {
                top: 0px;
                left: 0px;
                width: 375px;
                height: 788px;
            }
            #HEADLINE180 {
                top: 66.3238px;
                left: 126.5px;
                padding: 0px;
                width: 232.75px;
                height: 88px;
            }
            #HEADLINE180 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #HEADLINE177 {
                top: 47.0188px;
                left: 123px;
                padding: 0px;
                width: 233px;
                height: 20px;
            }
            #HEADLINE177 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #HEADLINE173 {
                top: 26.1215px;
                left: 108.5px;
                padding: 0px;
                width: 164px;
                height: 24px;
            }
            #HEADLINE173 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE169 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/luu_tuan_anh-1513135583.PNG);
            }
            #IMAGE169 {
                top: 21.1094px;
                left: -2px;
                width: 125.5px;
                height: 108px;
            }
            #IMAGE511 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/Untitled-1-1513736731.png);
            }
            #IMAGE511 {
                top: 177.109px;
                left: 7.78862px;
                width: 120.703125px;
                height: 131.109375px;
            }
            #HEADLINE512 {
                top: 213.469px;
                left: 125.844px;
                padding: 0px;
                width: 231px;
                height: 28px;
            }
            #HEADLINE512 > .widget-content {
                font-size: 12px;
                text-align: left;
                line-height: 14px;
            }
            #HEADLINE175 {
                top: 188px;
                left: 109px;
                padding: 0px;
                width: 247px;
                height: 24px;
            }
            #HEADLINE175 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE183 {
                top: 241px;
                left: 126.844px;
                padding: 0px;
                width: 230.984375px;
                height: 110px;
            }
            #HEADLINE183 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #HEADLINE181 {
                top: 435.531px;
                left: 125.969px;
                padding: 0px;
                width: 230.46875px;
                height: 286px;
            }
            #HEADLINE181 > .widget-content {
                font-size: 14px;
                text-align: justify;
            }
            #HEADLINE178 {
                top: 407.967px;
                left: 125px;
                padding: 0px;
                width: 242px;
                height: 28px;
            }
            #HEADLINE178 > .widget-content {
                font-size: 12px;
                text-align: left;
                line-height: 14px;
            }
            #HEADLINE174 {
                top: 384.157px;
                left: 78.5px;
                padding: 0px;
                width: 200px;
                height: 24px;
            }
            #HEADLINE174 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE167 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/Lac_hong-1513135584.PNG);
            }
            #IMAGE167 {
                top: 372.156px;
                left: 12px;
                width: 113px;
                height: 107px;
            }
            #ITEM-CAROUSEL662 {
                top: 0px;
                left: 0px;
                width: 375px;
                height: 788px;
            }
            #HEADLINE674 {
                top: 458px;
                left: 126px;
                padding: 0px;
                width: 232.5px;
                height: 88px;
            }
            #HEADLINE674 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE676 {
                top: 438.531px;
                left: 125.5px;
                padding: 0px;
                width: 76px;
                height: 20px;
            }
            #HEADLINE676 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #GROUP700 {
                top: 413.531px;
                left: 16.5px;
                width: 303.265625px;
                height: 101px;
            }
            #HEADLINE667 {
                top: 0px;
                left: 67.2656px;
                padding: 0px;
                width: 237px;
                height: 24px;
            }
            #HEADLINE667 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE675 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s200x300/5a28c4f8c3f6592b3acabec8/Untitled-1-1513828284.png);
            }
            #IMAGE675 {
                top: 0px;
                left: 1px;
                width: 98.265625px;
                height: 101px;
            }
            #HEADLINE672 {
                top: 281px;
                left: 126px;
                padding: 0px;
                width: 232.5px;
                height: 110px;
            }
            #HEADLINE672 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE673 {
                top: 72.9997px;
                left: 125.5px;
                padding: 0px;
                width: 233px;
                height: 110px;
            }
            #HEADLINE673 > .widget-content {
                font-size: 16px;
                text-align: justify;
            }
            #HEADLINE671 {
                top: 53.4688px;
                left: 126px;
                padding: 0px;
                width: 375px;
                height: 20px;
            }
            #HEADLINE671 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #HEADLINE668 {
                top: 29px;
                left: 55.5px;
                padding: 0px;
                width: 375px;
                height: 24px;
            }
            #HEADLINE668 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE665 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s200x300/5a28c4f8c3f6592b3acabec8/Untitled-2-1513745137.png);
            }
            #IMAGE665 {
                top: 25.5313px;
                left: 20.094px;
                width: 97.40625px;
                height: 100.640625px;
            }
            #HEADLINE670 {
                top: 241px;
                left: 127px;
                padding: 0px;
                width: 231.5px;
                height: 40px;
            }
            #HEADLINE670 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #GROUP697 {
                top: 218.516px;
                left: 14px;
                width: 285.5px;
                height: 98px;
            }
            #HEADLINE669 {
                top: 0.484375px;
                left: 86.5px;
                padding: 0px;
                width: 200px;
                height: 24px;
            }
            #HEADLINE669 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE693 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Untitled-1-1513743060.png);
            }
            #IMAGE693 {
                top: 0px;
                left: 1px;
                width: 104.921875px;
                height: 98px;
            }
            #BOX348 {
                top: 126px;
                left: 11px;
                width: 353px;
                height: 130px;
            }
            #HEADLINE349 {
                top: 20px;
                left: 32.5px;
                padding: 0px;
                width: 288px;
                height: 54px;
            }
            #HEADLINE349 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH350 {
                top: 84px;
                left: 8.5px;
                padding: 0px;
                width: 336px;
                height: 40px;
            }
            #PARAGRAPH350 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX354 {
                top: 266px;
                left: 10px;
                width: 355px;
                height: 137px;
            }
            #HEADLINE355 {
                top: 20px;
                left: 33.5px;
                padding: 0px;
                width: 288px;
                height: 54px;
            }
            #HEADLINE355 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH356 {
                top: 84px;
                left: 9.5px;
                padding: 0px;
                width: 336px;
                height: 20px;
            }
            #PARAGRAPH356 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX357 {
                top: 711px;
                left: 10px;
                width: 355px;
                height: 154px;
            }
            #HEADLINE358 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 54px;
            }
            #HEADLINE358 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH363 {
                top: 84px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 60px;
            }
            #PARAGRAPH363 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE346 {
                top: 1px;
                left: 5px;
                padding: 0px;
                width: 355px;
                height: 76px;
            }
            #HEADLINE346 > .widget-content {
                font-size: 27px;
                text-align: center;
            }
            #HEADLINE362 {
                top: 73px;
                left: 9px;
                padding: 0px;
                width: 355px;
                height: 48px;
            }
            #HEADLINE362 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX351 {
                top: 413px;
                left: 10px;
                width: 355px;
                height: 134px;
            }
            #HEADLINE352 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 54px;
            }
            #HEADLINE352 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH353 {
                top: 84px;
                left: 0.5px;
                padding: 0px;
                width: 354px;
                height: 40px;
            }
            #PARAGRAPH353 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX521 {
                top: 557px;
                left: 10px;
                width: 355px;
                height: 144px;
            }
            #HEADLINE522 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 54px;
            }
            #HEADLINE522 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH523 {
                top: 84px;
                left: 0.5px;
                padding: 0px;
                width: 354px;
                height: 40px;
            }
            #PARAGRAPH523 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX642 {
                top: 875px;
                left: 10px;
                width: 355px;
                height: 144px;
            }
            #HEADLINE643 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 54px;
            }
            #HEADLINE643 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH644 {
                top: 84px;
                left: 0.5px;
                padding: 0px;
                width: 354px;
                height: 40px;
            }
            #PARAGRAPH644 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #LINE129 {
                top: 631.266px;
                left: 37.5px;
                width: 300px;
                height: 25px;
            }
            #BOX365 {
                top: 466px;
                left: 10px;
                width: 355px;
                height: 452.265625px;
            }
            #FORM393 {
                top: 85px;
                left: 27.5px;
                width: 300px;
                height: 299.296875px;
            }
            #ITEM_FORM394 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 49.8125px;
            }
            #ITEM_FORM395 {
                top: 59.8125px;
                left: 0px;
                width: 300px;
                height: 49.8125px;
            }
            #ITEM_FORM396 {
                top: 119.625px;
                left: 0px;
                width: 300px;
                height: 49.8125px;
            }
            #ITEM_FORM400 {
                top: 179.438px;
                left: 0px;
                width: 300px;
                height: 119.859375px;
            }
            #BUTTON398 {
                top: 402.266px;
                left: 97.5px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON398 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE399 {
                top: 28.8438px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #HEADLINE399 > .widget-content {
                font-size: 40px;
                text-align: center;
                line-height: 40px;
            }
            #HEADLINE366 {
                top: 17.266px;
                left: 2px;
                padding: 0px;
                width: 375px;
                height: 102px;
            }
            #HEADLINE366 > .widget-content {
                font-size: 35px;
                text-align: center;
            }
            #GROUP370 {
                top: 131.672px;
                left: 23.5781px;
                width: 319.640625px;
                height: 46px;
            }
            #BOX368 {
                top: 0px;
                left: 1px;
                width: 159.390625px;
                height: 46px;
            }
            #HEADLINE706 {
                top: 6.1875px;
                left: 2px;
                padding: 0px;
                width: 159.390625px;
                height: 36px;
            }
            #HEADLINE706 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX369 {
                top: 0px;
                left: 158.625px;
                width: 162.015625px;
                height: 46px;
            }
            #HEADLINE705 {
                top: 5.6875px;
                left: 0.04823px;
                padding: 0px;
                width: 160.953125px;
                height: 36px;
            }
            #HEADLINE705 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE375 {
                top: 1085.64px;
                left: 8px;
                padding: 0px;
                width: 353.65625px;
                height: 120px;
            }
            #HEADLINE375 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE386 {
                top: 391.703px;
                left: 37.5px;
                padding: 0px;
                width: 301px;
                height: 54px;
            }
            #HEADLINE386 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #GROUP470 {
                top: 271.703px;
                left: 3px;
                width: 362.65625px;
                height: 102px;
            }
            #BOX471 {
                top: 32px;
                left: 189.656px;
                width: 79.21875px;
                height: 70px;
            }
            #HEADLINE472 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 102.15625px;
                height: 32px;
            }
            #HEADLINE472 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #HEADLINE473 {
                top: 0px;
                left: 87.5px;
                padding: 0px;
                width: 102.15625px;
                height: 32px;
            }
            #HEADLINE473 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #BOX474 {
                top: 32px;
                left: 101.141px;
                width: 79.21875px;
                height: 70px;
            }
            #BOX475 {
                top: 32px;
                left: 15.5px;
                width: 79.21875px;
                height: 70px;
            }
            #HEADLINE476 {
                top: 0px;
                left: 261.5px;
                padding: 0px;
                width: 102.15625px;
                height: 32px;
            }
            #HEADLINE476 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #HEADLINE477 {
                top: 0px;
                left: 177.5px;
                padding: 0px;
                width: 102.15625px;
                height: 32px;
            }
            #HEADLINE477 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #BOX478 {
                top: 32px;
                left: 279.656px;
                width: 79.21875px;
                height: 70px;
            }
            #COUNTDOWN479 {
                top: 43px;
                left: 15.5px;
                width: 345px;
                height: 43px;
            }
            #COUNTDOWN479 > .widget-content {
                font-size: 36px;
            }
            #GROUP481 {
                top: 190.641px;
                left: 40.5px;
                width: 281.96875px;
                height: 72px;
            }
            #LINE372 {
                display: none!important;
                top: 97px;
                left: 113.46875px;
                width: 57px;
                height: 25px;
            }
            #LINE373 {
                display: none!important;
                top: 82px;
                left: 112.46875px;
                width: 57px;
                height: 25px;
            }
            #HEADLINE371 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 281.96875px;
                height: 72px;
            }
            #HEADLINE371 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #LINE707 {
                top: 144.359px;
                left: 33.5px;
                width: 147px;
                height: 25px;
            }
        }
    </style>
