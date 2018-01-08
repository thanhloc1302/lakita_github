
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
            var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Pattaya|Roboto:300,400,700|Source+Sans+Pro:300,400,600,700|Montserrat:300,400,600,700&amp;subset=latin-ext,vietnamese';
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
                height: 613px;
            }
            #SECTION2 .container {}
            #SECTION2 {}
            #SECTION293 {
                width: 100%;
                height: 650px;
            }
            #SECTION293 .container {}
            #SECTION293 {}
            #SECTION631 {
                width: 100%;
                height: 1243.9237060546875px;
            }
            #SECTION631 .container {}
            #SECTION631 {}
            #POPUP740 {
                width: 100%;
                height: 100%;
            }
            #POPUP740 .container {
                width: 795.4861450195312px;
                height: 339.25347900390625px;
                top: calc(100%-339.25347900390625px);
            }
            #POPUP740 {}
            #POPUP729 {
                width: 100%;
                height: 100%;
            }
            #POPUP729 .container {
                width: 904.4618530273438px;
                height: 449.23614501953125px;
                top: calc(100%-449.23614501953125px);
            }
            #POPUP729 {}
            #POPUP719 {
                width: 100%;
                height: 100%;
            }
            #POPUP719 .container {
                width: 898.263916015625px;
                height: 479.23614501953125px;
                top: calc(100%-479.23614501953125px);
            }
            #POPUP719 {}
            #POPUP708 {
                width: 100%;
                height: 100%;
            }
            #POPUP708 .container {
                width: 853.24658203125px;
                height: 482.2569580078125px;
                top: calc(100%-482.2569580078125px);
            }
            #POPUP708 {}
            #POPUP697 {
                width: 100%;
                height: 100%;
            }
            #POPUP697 .container {
                width: 948.9583740234375px;
                height: 531.232666015625px;
                top: calc(100%-531.232666015625px);
            }
            #POPUP697 {}
            #POPUP685 {
                width: 100%;
                height: 100%;
            }
            #POPUP685 .container {
                width: 940.0000610351562px;
                height: 489.5312805175781px;
                top: calc(100%-489.5312805175781px);
            }
            #POPUP685 {}
            #SECTION488 {
                width: 100%;
                height: 745.921875px;
            }
            #SECTION488 .container {}
            #SECTION488 {}
            #SECTION535 {
                width: 100%;
                height: 659.9375px;
            }
            #SECTION535 .container {}
            #SECTION535 {}
            #SECTION750 {
                width: 100%;
                height: 617.9861450195312px;
            }
            #SECTION750 .container {}
            #SECTION750 {}
            #SECTION833 {
                width: 100%;
                height: 452.9687805175781px;
            }
            #SECTION833 .container {}
            #SECTION833 {}
            #PARAGRAPH4 {
                top: 535.973px;
                left: -196.004px;
                padding: 0px;
                width: 572.96875px;
                height: 42.5px;
            }
            #PARAGRAPH4 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE6 {
                top: 239.992px;
                left: 63.9922px;
                padding: 0px;
                width: 322px;
                height: 44px;
            }
            #HEADLINE6 > .widget-content {
                font-size: 39px;
                text-align: left;
            }
            #BOX10 {
                top: 106.699px;
                left: 652.965px;
                width: 371.9921875px;
                height: 396.75347900390625px;
            }
            #HEADLINE16 {
                top: 34px;
                left: 25px;
                padding: 0px;
                width: 330px;
                height: 68px;
            }
            #HEADLINE16 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #FORM11 {
                top: 122.969px;
                left: 23.9236px;
                width: 330.0000305175781px;
                height: 206.9965362548828px;
            }
            #FORM11 > .widget-content {
                font-size: 13px;
            }
            #ITEM_FORM12 {
                top: 0px;
                left: 6.40234e-05px;
                width: 330px;
                height: 42.703125px;
            }
            #ITEM_FORM12 > .widget-content {
                font-size: 13px;
            }
            #ITEM_FORM13 {
                top: 54.1854px;
                left: 6.40234e-05px;
                width: 330px;
                height: 42.703125px;
            }
            #ITEM_FORM13 > .widget-content {
                font-size: 13px;
            }
            #ITEM_FORM14 {
                top: 109.473px;
                left: 6.40234e-05px;
                width: 330px;
                height: 42.703125px;
            }
            #ITEM_FORM14 > .widget-content {
                font-size: 13px;
            }
            #ITEM_FORM875 {
                top: 162.153px;
                left: 0px;
                width: 330.0000305175781px;
                height: 44.859375px;
            }
            #BUTTON15 {
                top: 352.7291717529297px;
                left: 24px;
                padding: 0px;
                width: 321px;
                height: 40px;
            }
            #BUTTON15 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE290 {
                top: 304.578px;
                left: -33.2422px;
                padding: 0px;
                width: 525.3333740234375px;
                height: 46.66666793823242px;
            }
            #HEADLINE290 > .widget-content {
                font-size: 41px;
                text-align: left;
            }
            #GROUP337 {
                top: 182.961px;
                left: 0.9961px;
                width: 404px;
                height: 40px;
            }
            #HEADLINE289 {
                top: 0px;
                left: 236px;
                padding: 0px;
                width: 169px;
                height: 40px;
            }
            #HEADLINE289 > .widget-content {
                font-size: 34px;
                text-align: left;
            }
            #HEADLINE5 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 273px;
                height: 40px;
            }
            #HEADLINE5 > .widget-content {
                font-size: 34px;
                text-align: left;
            }
            #GROUP350 {
                top: 373.968px;
                left: -136.192px;
                width: 786.9921875px;
                height: 65.99609375px;
            }
            #HEADLINE349 {
                top: 0px;
                left: 464.5546875px;
                padding: 0px;
                width: 293px;
                height: 66px;
            }
            #HEADLINE349 > .widget-content {
                font-size: 60px;
                text-align: left;
            }
            #HEADLINE333 {
                top: 7.98828125px;
                left: 1px;
                padding: 0px;
                width: 787px;
                height: 49px;
            }
            #HEADLINE333 > .widget-content {
                font-size: 43px;
                text-align: left;
            }
            #IMAGE615 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s1700x200/5a28c4f8c3f6592b3acabec8/a-1513758987.png);
            }
            #IMAGE615 {
                top: -56.3177px;
                left: -359.495px;
                width: 1612.03125px;
                height: 192.234375px;
            }
            #IMAGE292 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Logo__slogan_Lakita-1513685810.png);
            }
            #IMAGE292 {
                top: 45.1562px;
                left: 230.74px;
                width: 202.18751525878906px;
                height: 148.2291717529297px;
            }
            #GROUP336 {
                top: 330.00002670288086px;
                left: -0.010406494140625px;
                width: 960.0000305175781px;
                height: 305.9895935058594px;
            }
            #BOX307 {
                top: 0px;
                left: 656px;
                width: 305px;
                height: 305.9895935058594px;
            }
            #BOX308 {
                top: 31.1016px;
                left: 33px;
                width: 237.9861297607422px;
                height: 238.75001525878906px;
            }
            #HEADLINE309 {
                top: 19.0623px;
                left: 21px;
                padding: 0px;
                width: 206px;
                height: 22.0625px;
            }
            #HEADLINE309 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #LINE310 {
                top: 41.1344px;
                left: 46px;
                width: 156px;
                height: 25.078125px;
            }
            #HEADLINE311 {
                top: 59.1979px;
                left: 21.9896px;
                padding: 0px;
                width: 195px;
                height: 168.88890075683594px;
            }
            #HEADLINE311 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX302 {
                top: 0px;
                left: 330.01043701171875px;
                width: 305px;
                height: 306px;
            }
            #BOX303 {
                top: 31.1016px;
                left: 38px;
                width: 245px;
                height: 238.765625px;
            }
            #HEADLINE304 {
                top: 18.059px;
                left: 30px;
                padding: 0px;
                width: 175px;
                height: 22.0625px;
            }
            #HEADLINE304 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #LINE305 {
                top: 40.1311px;
                left: 60px;
                width: 116px;
                height: 25.078125px;
            }
            #HEADLINE306 {
                top: 65.2131px;
                left: 14px;
                padding: 0px;
                width: 217px;
                height: 160px;
            }
            #HEADLINE306 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX297 {
                top: 0px;
                left: 1px;
                width: 305px;
                height: 305.9895935058594px;
            }
            #BOX298 {
                top: 31.1016px;
                left: 41px;
                width: 237.9861297607422px;
                height: 238.75001525878906px;
            }
            #HEADLINE299 {
                top: 20.0656px;
                left: 30px;
                padding: 0px;
                width: 175px;
                height: 26.078125px;
            }
            #HEADLINE299 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #LINE300 {
                top: 42.1377px;
                left: 54px;
                width: 120px;
                height: 25.078125px;
            }
            #HEADLINE301 {
                top: 80.20831298828125px;
                left: 16.388900756835938px;
                padding: 0px;
                width: 201.11111450195312px;
                height: 133.33334350585938px;
            }
            #HEADLINE301 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP629 {
                top: 8.993057250976562px;
                left: 81.58682250976562px;
                width: 766.3368530273438px;
                height: 192.18751525878906px;
            }
            #GROUP622 {
                top: 60.19097900390625px;
                left: 86.625px;
                width: 678px;
                height: 132px;
            }
            #BOX340 {
                top: 0px;
                left: 1px;
                width: 678px;
                height: 132px;
            }
            #GROUP627 {
                top: 0px;
                left: 1px;
                width: 177.375px;
                height: 109.84375px;
            }
            #IMAGE625 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s200x100/5a28c4f8c3f6592b3acabec8/00-00-chuong-noel-1513763052.png);
            }
            #IMAGE625 {
                top: 28.2099px;
                left: 0px;
                width: 154.734375px;
                height: 81.640625px;
            }
            #IMAGE624 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s200x200/5a28c4f8c3f6592b3acabec8/b-1513761977.png);
            }
            #IMAGE624 {
                top: -8.97162px;
                left: 48.6351px;
                width: 114.546875px;
                height: 109.859375px;
            }
            #GROUP338 {
                top: 60.19097900390625px;
                left: 87.3367919921875px;
                width: 680.0000610351562px;
                height: 113.24653244018555px;
            }
            #HEADLINE334 {
                top: 66.57986450195312px;
                left: 46.625px;
                padding: 0px;
                width: 535.5556030273438px;
                height: 46.66666793823242px;
            }
            #HEADLINE334 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE295 {
                top: 0px;
                left: 75.49652099609375px;
                padding: 0px;
                width: 489.828125px;
                height: 34.21875px;
            }
            #HEADLINE295 > .widget-content {
                font-size: 31px;
                text-align: center;
            }
            #HEADLINE294 {
                top: 38.21180725097656px;
                left: 1px;
                padding: 0px;
                width: 680.0000610351562px;
                height: 46.66666793823242px;
            }
            #HEADLINE294 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #GROUP630 {
                top: 217px;
                left: 158px;
                width: 696px;
                height: 97px;
            }
            #LINE345 {
                top: 72px;
                left: 163px;
                width: 378px;
                height: 25px;
            }
            #HEADLINE335 {
                top: 0px;
                left: 0px;
                padding: 0px;
                width: 696px;
                height: 72px;
            }
            #HEADLINE335 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE632 {
                top: 30px;
                left: 255px;
                padding: 0px;
                width: 490px;
                height: 74px;
            }
            #HEADLINE632 > .widget-content {
                font-size: 31px;
                text-align: center;
            }
            #HEADLINE635 {
                top: 136.851px;
                left: 0.986064px;
                padding: 0px;
                width: 475px;
                height: 30px;
            }
            #HEADLINE635 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE652 {
                top: 418.355px;
                left: 1.00346px;
                padding: 0px;
                width: 709px;
                height: 30px;
            }
            #HEADLINE652 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE669 {
                top: 700.163px;
                left: -19.0104px;
                padding: 0px;
                width: 709px;
                height: 30px;
            }
            #HEADLINE669 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #GROUP796 {
                top: 195.98959159851074px;
                left: 154.763916015625px;
                width: 321.9618225097656px;
                height: 191.80555725097656px;
            }
            #BUTTON780 {
                top: 147.95138549804688px;
                left: 175.98263549804688px;
                padding: 0px;
                width: 111px;
                height: 32.222225189208984px;
            }
            #BUTTON780 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #HEADLINE641 {
                top: 8.541671752929688px;
                left: 110.56597900390625px;
                padding: 0px;
                width: 110px;
                height: 40.80078125px;
            }
            #HEADLINE641 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #GROUP642 {
                top: 36.05903625488281px;
                left: 13.70831298828125px;
                width: 295.109375px;
                height: 60.4375px;
            }
            #HEADLINE639 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 295.1171875px;
                height: 46px;
            }
            #HEADLINE639 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BOX636 {
                top: 0px;
                left: 1px;
                width: 321.9618225097656px;
                height: 191.80555725097656px;
            }
            #BUTTON638 {
                top: 147.96875px;
                left: 43px;
                padding: 0px;
                width: 110px;
                height: 32px;
            }
            #BUTTON638 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP929 {
                top: 87.98611450195312px;
                left: 30.736114501953125px;
                width: 284.34027099609375px;
                height: 45.763893127441406px;
            }
            #HEADLINE930 {
                top: 17.986114501953125px;
                left: 152.00692749023438px;
                padding: 0px;
                width: 133.33334350585938px;
                height: 27.77777862548828px;
            }
            #HEADLINE930 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE931 {
                top: 0px;
                left: 154.00347900390625px;
                padding: 0px;
                width: 78.234375px;
                height: 15.555556297302246px;
            }
            #HEADLINE931 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX932 {
                top: 2.986114501953125px;
                left: 1px;
                width: 139px;
                height: 39px;
            }
            #HEADLINE933 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.8888931274414px;
                height: 21.111112594604492px;
            }
            #HEADLINE933 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE904 {
                top: 982.733px;
                left: 128.979px;
                padding: 0px;
                width: 708.888916015625px;
                height: 73.33333587646484px;
            }
            #HEADLINE904 > .widget-content {
                font-size: 31px;
                text-align: center;
            }
            #GROUP917 {
                top: 1086.7882690429688px;
                left: 222.107666015625px;
                width: 524.6701354980469px;
                height: 125.86806106567383px;
            }
            #GROUP915 {
                top: 74.86111450195312px;
                left: 1px;
                width: 378.6111145019531px;
                height: 51.0069465637207px;
            }
            #BOX913 {
                top: 0px;
                left: 1px;
                width: 378.6111145019531px;
                height: 51.0069465637207px;
            }
            #HEADLINE914 {
                top: 7.96875px;
                left: 18.8992919921875px;
                padding: 0px;
                width: 222.22222900390625px;
                height: 32.222225189208984px;
            }
            #HEADLINE914 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #BUTTON910 {
                top: 79.7569580078125px;
                left: 394.55902099609375px;
                padding: 0px;
                width: 131.11111450195312px;
                height: 40px;
            }
            #BUTTON910 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #FORM905 {
                top: 0px;
                left: 30.72222900390625px;
                width: 463.29864501953125px;
                height: 40px;
            }
            #FORM905 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM912 {
                top: 1.29883e-05px;
                left: 0px;
                width: 463.29864501953125px;
                height: 40px;
            }
            #ITEM_FORM912 > .widget-content {
                font-size: 17px;
            }
            #IMAGE919 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s200x200/5a28c4f8c3f6592b3acabec8/mau-ong-gia-noel-dep-an-tuong-34-1513854103.png);
            }
            #IMAGE919 {
                top: 0.9688000000000001px;
                left: 127.823px;
                width: 154.58334350585938px;
                height: 113.95833587646484px;
            }
            #IMAGE920 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s200x200/5a28c4f8c3f6592b3acabec8/mau-ong-gia-noel-dep-an-tuong-34-1513854103.png);
            }
            #IMAGE920 {
                top: 931.04px;
                left: 120.01px;
                width: 167.01390075683594px;
                height: 167.01390075683594px;
            }
            #GROUP979 {
                top: 197.483px;
                left: 563.906px;
                width: 334.87847900390625px;
                height: 191.80555725097656px;
            }
            #BOX964 {
                top: 90.625px;
                left: 50.3472px;
                width: 139px;
                height: 39px;
            }
            #HEADLINE965 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.8888931274414px;
                height: 21.111112594604492px;
            }
            #HEADLINE965 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP961 {
                top: 86.1979px;
                left: 48.4549px;
                width: 284.3403015136719px;
                height: 45.74652862548828px;
            }
            #HEADLINE962 {
                top: 17.96875px;
                left: 152.0069580078125px;
                padding: 0px;
                width: 133.33334350585938px;
                height: 27.77777862548828px;
            }
            #HEADLINE962 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE963 {
                top: 0px;
                left: 154.00347900390625px;
                padding: 0px;
                width: 78.234375px;
                height: 15.555556297302246px;
            }
            #HEADLINE963 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX645 {
                top: 1.45833px;
                left: 1.90973px;
                width: 321.97918701171875px;
                height: 191.80555725097656px;
            }
            #HEADLINE647 {
                top: 9px;
                left: 109px;
                padding: 0px;
                width: 110px;
                height: 30px;
            }
            #HEADLINE647 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BUTTON646 {
                top: 148.99307250976562px;
                left: 36.99652099609375px;
                padding: 0px;
                width: 111px;
                height: 32px;
            }
            #BUTTON646 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BUTTON781 {
                top: 146.11111450195312px;
                left: 178.94097900390625px;
                padding: 0px;
                width: 111px;
                height: 32.222225189208984px;
            }
            #BUTTON781 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP651 {
                top: 40.4167px;
                left: 23.8021px;
                width: 311.9965515136719px;
                height: 45.989585876464844px;
            }
            #HEADLINE644 {
                top: 0px;
                left: -15px;
                padding: 0px;
                width: 312px;
                height: 44.4444465637207px;
            }
            #HEADLINE644 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP797 {
                top: 0px;
                left: 0.017395px;
                width: 333.8889465332031px;
                height: 191.80555725097656px;
            }
            #GROUP980 {
                top: 465.347px;
                left: -55.1042px;
                width: 329.826416015625px;
                height: 188.75001525878906px;
            }
            #BOX959 {
                top: 95.7466px;
                left: 47.3438px;
                width: 139px;
                height: 39px;
            }
            #HEADLINE960 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.8888931274414px;
                height: 21.111112594604492px;
            }
            #HEADLINE960 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP956 {
                top: 91.9097px;
                left: 45.4861px;
                width: 284.3403015136719px;
                height: 45.74652862548828px;
            }
            #HEADLINE957 {
                top: 17.9688px;
                left: 152.007px;
                padding: 0px;
                width: 133.33334350585938px;
                height: 27.77777862548828px;
            }
            #HEADLINE957 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE958 {
                top: 0px;
                left: 154.003px;
                padding: 0px;
                width: 78.234375px;
                height: 15.555556297302246px;
            }
            #HEADLINE958 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX655 {
                top: 0.902771px;
                left: 1.85764px;
                width: 321.9965515136719px;
                height: 188.75001525878906px;
            }
            #HEADLINE657 {
                top: 9px;
                left: 109px;
                padding: 0px;
                width: 110px;
                height: 30px;
            }
            #HEADLINE657 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE654 {
                top: 38.993064880371094px;
                left: 8.993057250976562px;
                padding: 0px;
                width: 311.1111145019531px;
                height: 44.4444465637207px;
            }
            #HEADLINE654 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP799 {
                top: 0.0173645px;
                left: 0px;
                width: 321.9965515136719px;
                height: 188.75001525878906px;
            }
            #BUTTON656 {
                top: 145.27780151367188px;
                left: 38.986114501953125px;
                padding: 0px;
                width: 111px;
                height: 32px;
            }
            #BUTTON656 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BUTTON788 {
                top: 145.27780151367188px;
                left: 162.90972900390625px;
                padding: 0px;
                width: 111px;
                height: 32.222225189208984px;
            }
            #BUTTON788 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP981 {
                top: 463.542px;
                left: 322.969px;
                width: 321.9965515136719px;
                height: 208.0382080078125px;
            }
            #BOX954 {
                top: 107.934px;
                left: 29.9826px;
                width: 139px;
                height: 39px;
            }
            #HEADLINE955 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.8888931274414px;
                height: 21.111112594604492px;
            }
            #HEADLINE955 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP951 {
                top: 104.965px;
                left: 29.0104px;
                width: 284.3403015136719px;
                height: 45.74652862548828px;
            }
            #HEADLINE952 {
                top: 17.96875px;
                left: 152.0069580078125px;
                padding: 0px;
                width: 133.33334350585938px;
                height: 27.77777862548828px;
            }
            #HEADLINE952 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE953 {
                top: 0px;
                left: 154.00347900390625px;
                padding: 0px;
                width: 78.234375px;
                height: 15.555556297302246px;
            }
            #HEADLINE953 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX665 {
                top: 0px;
                left: 0px;
                width: 321.9965515136719px;
                height: 208.0382080078125px;
            }
            #HEADLINE667 {
                top: 9px;
                left: 109px;
                padding: 0px;
                width: 110.00000762939453px;
                height: 30.000001907348633px;
            }
            #HEADLINE667 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE668 {
                top: 38.9931px;
                left: 8.99307px;
                padding: 0px;
                width: 311px;
                height: 66px;
            }
            #HEADLINE668 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BUTTON666 {
                top: 170px;
                left: 59.9861px;
                padding: 0px;
                width: 111px;
                height: 32px;
            }
            #BUTTON666 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BUTTON790 {
                top: 168.59375px;
                left: 182.931px;
                padding: 0px;
                width: 111px;
                height: 32.222225189208984px;
            }
            #BUTTON790 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP982 {
                top: 464.219px;
                left: 693.976px;
                width: 323.31597900390625px;
                height: 188.75001525878906px;
            }
            #BOX969 {
                top: 93.7847px;
                left: 39.9653px;
                width: 139px;
                height: 39px;
            }
            #HEADLINE970 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.8888931274414px;
                height: 21.111112594604492px;
            }
            #HEADLINE970 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP966 {
                top: 90.8333px;
                left: 38.9757px;
                width: 284.3403015136719px;
                height: 45.74652862548828px;
            }
            #HEADLINE967 {
                top: 17.9688px;
                left: 152.007px;
                padding: 0px;
                width: 133.33334350585938px;
                height: 27.77777862548828px;
            }
            #HEADLINE967 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE968 {
                top: 0px;
                left: 154.003px;
                padding: 0px;
                width: 78.234375px;
                height: 15.555556297302246px;
            }
            #HEADLINE968 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX660 {
                top: 0px;
                left: 0px;
                width: 321.97918701171875px;
                height: 188.75001525878906px;
            }
            #HEADLINE662 {
                top: 9px;
                left: 109px;
                padding: 0px;
                width: 110.00000762939453px;
                height: 30.000001907348633px;
            }
            #HEADLINE662 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE663 {
                top: 38.993072509765625px;
                left: 8.993072509765625px;
                padding: 0px;
                width: 311px;
                height: 46px;
            }
            #HEADLINE663 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #BUTTON661 {
                top: 146.04168701171875px;
                left: 49.9618px;
                padding: 0px;
                width: 111px;
                height: 32px;
            }
            #BUTTON661 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BUTTON789 {
                top: 146.04168701171875px;
                left: 175.95486450195312px;
                padding: 0px;
                width: 111px;
                height: 32.222225189208984px;
            }
            #BUTTON789 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP983 {
                top: 755.885px;
                left: 178.628px;
                width: 693.9931030273438px;
                height: 186.77084350585938px;
            }
            #BOX974 {
                top: 94.7917px;
                left: 199.323px;
                width: 139px;
                height: 39px;
            }
            #HEADLINE975 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.8888931274414px;
                height: 21.111112594604492px;
            }
            #HEADLINE975 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP971 {
                top: 91.8229px;
                left: 198.333px;
                width: 284.3403015136719px;
                height: 45.74652862548828px;
            }
            #HEADLINE972 {
                top: 17.96875px;
                left: 152.0069580078125px;
                padding: 0px;
                width: 133.33334350585938px;
                height: 27.77777862548828px;
            }
            #HEADLINE972 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE973 {
                top: 0px;
                left: 154.00347900390625px;
                padding: 0px;
                width: 78.234375px;
                height: 15.555556297302246px;
            }
            #HEADLINE973 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX670 {
                top: 0.0173645px;
                left: 0.0173645px;
                width: 693.9931030273438px;
                height: 186.77084350585938px;
            }
            #HEADLINE672 {
                top: 8.975677490234375px;
                left: 287.0833435058594px;
                padding: 0px;
                width: 110px;
                height: 30px;
            }
            #HEADLINE672 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE673 {
                top: 38.975677490234375px;
                left: 8.975677490234375px;
                padding: 0px;
                width: 685px;
                height: 48px;
            }
            #HEADLINE673 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BUTTON793 {
                top: 145.13888549804688px;
                left: 349.9826354980469px;
                padding: 0px;
                width: 111px;
                height: 32.222225189208984px;
            }
            #BUTTON793 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BUTTON671 {
                top: 144.01043701171875px;
                left: 230.08682250976562px;
                padding: 0px;
                width: 111px;
                height: 32px;
            }
            #BUTTON671 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #LINEVERTICAL743 {
                top: 74.875px;
                left: 388.177px;
                width: 25px;
                height: 243.47222900390625px;
            }
            #HEADLINE748 {
                top: 85.13888549804688px;
                left: 48.732635498046875px;
                padding: 0px;
                width: 348.0555725097656px;
                height: 30.000001907348633px;
            }
            #HEADLINE748 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP746 {
                top: 189.30555725097656px;
                left: 427.4653015136719px;
                width: 330.295166015625px;
                height: 135px;
            }
            #LISTOP746 > .widget-content {
                text-align: left;
            }
            #LISTOP746 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP746 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP746 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE749 {
                top: 84.2257px;
                left: 411.8576354980469px;
                padding: 0px;
                width: 337.0486145019531px;
                height: 90.00000762939453px;
            }
            #HEADLINE749 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX741 {
                top: -0.5px;
                left: -0.5px;
                width: 799.2708740234375px;
                height: 75px;
            }
            #LISTOP747 {
                top: 134.14px;
                left: 54.7105px;
                width: 342.06597900390625px;
                height: 190.00001525878906px;
            }
            #LISTOP747 > .widget-content {
                text-align: left;
            }
            #LISTOP747 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP747 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP747 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX730 {
                top: -0.5px;
                left: -0.5px;
                width: 904.9479370117188px;
                height: 75px;
            }
            #LISTOP735 {
                top: 186.90972900390625px;
                left: 63.333343505859375px;
                width: 274.4921875px;
                height: 155px;
            }
            #LISTOP735 > .widget-content {
                text-align: left;
            }
            #LISTOP735 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP735 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP735 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE737 {
                top: 83.38542175292969px;
                left: 501.3194885253906px;
                padding: 0px;
                width: 337.7778015136719px;
                height: 30.000001907348633px;
            }
            #HEADLINE737 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP736 {
                top: 125.50347900390625px;
                left: 517.4653015136719px;
                width: 274.4921875px;
                height: 315px;
            }
            #LISTOP736 > .widget-content {
                text-align: left;
            }
            #LISTOP736 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP736 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP736 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE738 {
                top: 81.31944274902344px;
                left: 62.291656494140625px;
                padding: 0px;
                width: 405.1215515136719px;
                height: 90.00000762939453px;
            }
            #HEADLINE738 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINEVERTICAL732 {
                top: 57.27430725097656px;
                left: 463.3160095214844px;
                width: 25px;
                height: 367.3958435058594px;
            }
            #BOX720 {
                top: -0.5px;
                left: -0.5px;
                width: 898.7500610351562px;
                height: 75px;
            }
            #LISTOP725 {
                top: 195.41668701171875px;
                left: 67.30902099609375px;
                width: 256.9618225097656px;
                height: 100.00000762939453px;
            }
            #LISTOP725 > .widget-content {
                text-align: left;
            }
            #LISTOP725 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP725 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP725 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LISTOP726 {
                top: 174.16668701171875px;
                left: 505.32989501953125px;
                width: 342.5px;
                height: 295px;
            }
            #LISTOP726 > .widget-content {
                text-align: left;
            }
            #LISTOP726 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP726 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP726 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE727 {
                top: 85.83334350585938px;
                left: 513.1597290039062px;
                padding: 0px;
                width: 324.6528015136719px;
                height: 30.000001907348633px;
            }
            #HEADLINE727 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINEVERTICAL722 {
                top: 61.23265075683594px;
                left: 475.32989501953125px;
                width: 25px;
                height: 383.22918701171875px;
            }
            #HEADLINE728 {
                top: 85.83334350585938px;
                left: 72.34375px;
                padding: 0px;
                width: 433.1770935058594px;
                height: 90.00000762939453px;
            }
            #HEADLINE728 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX709 {
                top: -0.5px;
                left: -0.5px;
                width: 853.732666015625px;
                height: 75px;
            }
            #LISTOP714 {
                top: 170.75px;
                left: -214.51171875px;
                width: 200px;
                height: 55px;
            }
            #LISTOP714 > .widget-content {
                text-align: left;
            }
            #LISTOP714 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP714 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP714 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LISTOP715 {
                top: 179.2882080078125px;
                left: 74.94790649414062px;
                width: 342.5px;
                height: 200px;
            }
            #LISTOP715 > .widget-content {
                text-align: left;
            }
            #LISTOP715 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP715 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP715 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE718 {
                top: 92.74305725097656px;
                left: 71.37152099609375px;
                padding: 0px;
                width: 333.3333435058594px;
                height: 71.11111450195312px;
            }
            #HEADLINE718 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #LINEVERTICAL711 {
                top: 46.75347900390625px;
                left: 416.3368225097656px;
                width: 25px;
                height: 406.6493225097656px;
            }
            #LISTOP716 {
                top: 167.74307250976562px;
                left: 448.2465515136719px;
                width: 342.5px;
                height: 295px;
            }
            #LISTOP716 > .widget-content {
                text-align: left;
            }
            #LISTOP716 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP716 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP716 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE717 {
                top: 91.89236450195312px;
                left: 453.3333435058594px;
                padding: 0px;
                width: 333.96484375px;
                height: 70px;
            }
            #HEADLINE717 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX698 {
                top: -0.5px;
                left: -0.5px;
                width: 949.453125px;
                height: 75px;
            }
            #HEADLINE705 {
                top: 53.24609375px;
                left: -154.5px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE705 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP703 {
                top: 191.02430725097656px;
                left: 74.56597900390625px;
                width: 436.19140625px;
                height: 310px;
            }
            #LISTOP703 > .widget-content {
                text-align: left;
            }
            #LISTOP703 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP703 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP703 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE707 {
                top: 111.25001525878906px;
                left: 85.5382080078125px;
                padding: 0px;
                width: 351.25px;
                height: 60px;
            }
            #HEADLINE707 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE706 {
                top: 119.16667175292969px;
                left: 524.4618530273438px;
                padding: 0px;
                width: 351.9921875px;
                height: 30px;
            }
            #HEADLINE706 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP704 {
                top: 188.4722442626953px;
                left: 512.9688110351562px;
                width: 368.5590515136719px;
                height: 225.00001525878906px;
            }
            #LISTOP704 > .widget-content {
                text-align: left;
            }
            #LISTOP704 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP704 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP704 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LINEVERTICAL700 {
                top: 58.85417175292969px;
                left: 485.55560302734375px;
                width: 25px;
                height: 448.92364501953125px;
            }
            #BOX686 {
                top: -0.5px;
                left: -0.5px;
                width: 940.48828125px;
                height: 75px;
            }
            #HEADLINE694 {
                top: 87.4727px;
                left: 94.246px;
                padding: 0px;
                width: 300.48828125px;
                height: 60px;
            }
            #HEADLINE694 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #LISTOP693 {
                top: 152.48263549804688px;
                left: 69.07986450195312px;
                width: 405.1562805175781px;
                height: 330.0000305175781px;
            }
            #LISTOP693 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP693 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP693 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP693 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LINEVERTICAL688 {
                top: 39.8365px;
                left: 462.1007080078125px;
                width: 25px;
                height: 430.2257080078125px;
            }
            #LISTOP695 {
                top: 151.12847900390625px;
                left: 485.0694580078125px;
                width: 416.73828125px;
                height: 215px;
            }
            #LISTOP695 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP695 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                margin-right: 0px;
            }
            #LISTOP695 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP695 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE696 {
                top: 83.24652099609375px;
                left: 534.1319580078125px;
                padding: 0px;
                width: 300px;
                height: 60px;
            }
            #HEADLINE696 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE493 {
                top: 62px;
                left: 296px;
                padding: 0px;
                width: 558px;
                height: 36px;
            }
            #HEADLINE493 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #GROUP526 {
                top: 217.5868148803711px;
                left: 691.5868530273438px;
                width: 403.9757080078125px;
                height: 508.6111297607422px;
            }
            #BOX466 {
                top: 217.81251525878906px;
                left: 1px;
                width: 403.984375px;
                height: 290.7986145019531px;
            }
            #HEADLINE469 {
                top: 6.29294px;
                left: 19.7733px;
                padding: 0px;
                width: 120.546875px;
                height: 27.5px;
            }
            #HEADLINE469 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #GROUP482 {
                top: 256.94446563720703px;
                left: 13.34375px;
                width: 376.1111145019531px;
                height: 235.00001525878906px;
            }
            #LISTOP468 {
                top: 0px;
                left: 1px;
                width: 376.11328125px;
                height: 235px;
            }
            #LISTOP468 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP468 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 0px;
            }
            #LISTOP468 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP468 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #GROUP523 {
                top: 223.3507080078125px;
                left: 140.7742919921875px;
                width: 248.96484375px;
                height: 21.6796875px;
            }
            #HEADLINE467 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 248.96484375px;
                height: 21.6796875px;
            }
            #HEADLINE467 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #GROUP464 {
                top: 0px;
                left: 112.75347900390625px;
                width: 204.546875px;
                height: 201.671875px;
            }
            #BOX465 {
                top: 0px;
                left: 1px;
                width: 204.55078125px;
                height: 201.6796875px;
            }
            #GROUP579 {
                top: 217.98612213134766px;
                left: -147.99652767181396px;
                width: 394.94793701171875px;
                height: 508.21183013916016px;
            }
            #BOX453 {
                top: 220.00000762939453px;
                left: 1px;
                width: 394.9609375px;
                height: 288.2118225097656px;
            }
            #HEADLINE461 {
                top: 8.60206px;
                left: 15.0109px;
                padding: 0px;
                width: 102.59765625px;
                height: 26.25px;
            }
            #HEADLINE461 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE454 {
                top: 8.42188px;
                left: 76.1216px;
                padding: 0px;
                width: 318.84765625px;
                height: 30px;
            }
            #HEADLINE454 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #GROUP486 {
                top: 259.06250762939453px;
                left: 18.152779579162598px;
                width: 359.8437805175781px;
                height: 220.00001525878906px;
            }
            #LISTOP455 {
                top: 0px;
                left: 1px;
                width: 359.84375px;
                height: 220px;
            }
            #LISTOP455 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP455 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                font-size: 15px;
                color: rgba(27, 94, 32, 1);
                margin-right: 0px;
            }
            #LISTOP455 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP455 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX495 {
                top: 0px;
                left: 84.22917079925537px;
                width: 208.49609375px;
                height: 200px;
            }
            #GROUP525 {
                top: 217.98612213134766px;
                left: 300.3715515136719px;
                width: 349.47918701171875px;
                height: 508.21183013916016px;
            }
            #GROUP522 {
                top: 224.6007080078125px;
                left: 11.833343505859375px;
                width: 292.421875px;
                height: 31.9921875px;
            }
            #HEADLINE463 {
                top: 0.9765625px;
                left: 1px;
                padding: 0px;
                width: 120.48828125px;
                height: 28.75px;
            }
            #HEADLINE463 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #HEADLINE458 {
                top: 0px;
                left: 103.421875px;
                padding: 0px;
                width: 190px;
                height: 32px;
            }
            #HEADLINE458 > .widget-content {
                font-size: 26px;
                text-align: left;
            }
            #BOX457 {
                top: 220.01737213134766px;
                left: 1px;
                width: 349.4921875px;
                height: 288.1944580078125px;
            }
            #LISTOP459 {
                top: 285.1909866333008px;
                left: 19.00347900390625px;
                width: 315.48828125px;
                height: 145px;
            }
            #LISTOP459 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP459 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 0px;
            }
            #LISTOP459 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP459 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX496 {
                top: 0px;
                left: 79.33334350585938px;
                width: 206.484375px;
                height: 200px;
            }
            #HEADLINE489 {
                top: 18px;
                left: 161px;
                padding: 0px;
                width: 761px;
                height: 31px;
            }
            #HEADLINE489 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #IMAGE835 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/nhung-bai-hat-giang-sinh-bang-tieng-viet-hay-nhat-moi-thoi-dai-5-1513848663.gif);
            }
            #IMAGE835 {
                top: 2003.61px;
                left: 463.984px;
                width: 610px;
                height: 472.98614501953125px;
            }
            #BOX491 {
                top: 111.944px;
                left: 16.0069px;
                width: 239px;
                height: 51px;
            }
            #HEADLINE492 {
                top: 10px;
                left: 18px;
                padding: 0px;
                width: 223px;
                height: 33px;
            }
            #HEADLINE492 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #SHAPE490 {
                top: 96.9444px;
                left: -70.9896px;
                width: 87px;
                height: 84px;
            }
            #GROUP590 {
                top: 125.01736640930176px;
                left: -157.99652814865112px;
                width: 387.3611145019531px;
                height: 500.9722270965576px;
            }
            #GROUP542 {
                top: 221.59722709655762px;
                left: 27.718751430511475px;
                width: 339.16015625px;
                height: 31.9921875px;
            }
            #HEADLINE543 {
                top: 0.99609375px;
                left: 1px;
                padding: 0px;
                width: 120px;
                height: 28.75px;
            }
            #HEADLINE543 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #HEADLINE544 {
                top: 0px;
                left: 82.30859375px;
                padding: 0px;
                width: 257.85418701171875px;
                height: 32px;
            }
            #HEADLINE544 > .widget-content {
                font-size: 26px;
                text-align: left;
            }
            #BOX547 {
                top: 0px;
                left: 81.79861402511597px;
                width: 208.49609375px;
                height: 198.828125px;
            }
            #LISTOP546 {
                top: 264.28820610046387px;
                left: 18.7951397895813px;
                width: 357px;
                height: 190px;
            }
            #LISTOP546 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP546 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 0px;
            }
            #LISTOP546 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP546 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX545 {
                top: 210.65972709655762px;
                left: 1px;
                width: 387.375px;
                height: 290.3125px;
            }
            #GROUP598 {
                top: 124.72222900390625px;
                left: 764.6771240234375px;
                width: 364.1319580078125px;
                height: 501.26739501953125px;
            }
            #GROUP601 {
                top: 258.00347900390625px;
                left: 15.01043701171875px;
                width: 342.32421875px;
                height: 200px;
            }
            #LISTOP602 {
                top: 0px;
                left: 1px;
                width: 342.3333435058594px;
                height: 200px;
            }
            #LISTOP602 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP602 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 0px;
            }
            #LISTOP602 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP602 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX603 {
                top: 211.90972900390625px;
                left: 1px;
                width: 364.140625px;
                height: 289.357666015625px;
            }
            #HEADLINE604 {
                top: 8.99609px;
                left: 81.8438px;
                padding: 0px;
                width: 66.484375px;
                height: 27.5px;
            }
            #HEADLINE604 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #GROUP606 {
                top: 0px;
                left: 86.72918701171875px;
                width: 204.54861450195312px;
                height: 201.6666717529297px;
            }
            #BOX607 {
                top: 0px;
                left: 1px;
                width: 204.55078125px;
                height: 201.6796875px;
            }
            #HEADLINE600 {
                top: 220.62501525878906px;
                left: 138.3958740234375px;
                padding: 0px;
                width: 176.484375px;
                height: 30px;
            }
            #HEADLINE600 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #GROUP609 {
                top: 31.3855px;
                left: -113.349px;
                width: 325.97918701171875px;
                height: 83.97917175292969px;
            }
            #BOX538 {
                top: 15px;
                left: 87px;
                width: 239px;
                height: 51px;
            }
            #HEADLINE539 {
                top: 8.583328247070312px;
                left: 29.333343505859375px;
                padding: 0px;
                width: 199.3541717529297px;
                height: 32px;
            }
            #HEADLINE539 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #GROUP557 {
                top: 0px;
                left: 0.0208435px;
                width: 325.9765625px;
                height: 83.984375px;
            }
            #SHAPE537 {
                top: 0.0195313px;
                left: 0px;
                width: 87px;
                height: 84px;
            }
            #GROUP611 {
                top: 31.3281px;
                left: 792.281px;
                width: 327.96875px;
                height: 83.984375px;
            }
            #SHAPE595 {
                top: 0px;
                left: 1px;
                width: 87px;
                height: 84px;
            }
            #BOX594 {
                top: 16.6796875px;
                left: 89.984375px;
                width: 239px;
                height: 51px;
            }
            #HEADLINE596 {
                top: 6.4791717529296875px;
                left: 25.979248046875px;
                padding: 0px;
                width: 191.4791717529297px;
                height: 32px;
            }
            #HEADLINE596 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #GROUP679 {
                top: 31.0546875px;
                left: 349.41015625px;
                width: 325px;
                height: 83.984375px;
            }
            #BOX680 {
                top: 15.52734375px;
                left: 87.015625px;
                width: 239px;
                height: 51px;
            }
            #GROUP682 {
                top: 0px;
                left: 1px;
                width: 86.9921875px;
                height: 83.984375px;
            }
            #SHAPE683 {
                top: 0px;
                left: 1px;
                width: 87px;
                height: 84px;
            }
            #HEADLINE681 {
                top: 55.72265625px;
                left: 454.7265625px;
                padding: 0px;
                width: 198.75px;
                height: 32.5px;
            }
            #HEADLINE681 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #GROUP832 {
                top: 125.62500953674316px;
                left: 333.8090515136719px;
                width: 379.94793701171875px;
                height: 500.3645935058594px;
            }
            #GROUP551 {
                top: 263.4375px;
                left: 14.71527099609375px;
                width: 341.0937805175781px;
                height: 215.00001525878906px;
            }
            #LISTOP552 {
                top: 0px;
                left: 1px;
                width: 341.09375px;
                height: 215px;
            }
            #LISTOP552 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP552 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 0px;
            }
            #LISTOP552 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP552 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #GROUP553 {
                top: 233.4375px;
                left: 43.135406494140625px;
                width: 294px;
                height: 31px;
            }
            #HEADLINE554 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 294px;
                height: 31px;
            }
            #HEADLINE554 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #BOX549 {
                top: 208.47222900390625px;
                left: 1px;
                width: 379.94793701171875px;
                height: 291.8923645019531px;
            }
            #HEADLINE550 {
                top: 0px;
                left: 86.77084350585938px;
                padding: 0px;
                width: 228.1640625px;
                height: 27.5px;
            }
            #HEADLINE550 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #GROUP811 {
                top: 0px;
                left: 94.07290649414062px;
                width: 208.26390075683594px;
                height: 197.9166717529297px;
            }
            #GROUP555 {
                top: 0px;
                left: 1px;
                width: 208.26390075683594px;
                height: 197.9166717529297px;
            }
            #BOX556 {
                top: 0px;
                left: 1px;
                width: 208.26390075683594px;
                height: 197.9166717529297px;
            }
            #HEADLINE760 {
                top: 40.0938px;
                left: 396px;
                padding: 0px;
                width: 608.9931030273438px;
                height: 36.66666793823242px;
            }
            #HEADLINE760 > .widget-content {
                font-size: 31px;
                text-align: center;
            }
            #FORM761 {
                top: 300.938px;
                left: 382.969px;
                width: 615.625px;
                height: 220.95486450195312px;
            }
            #ITEM_FORM762 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 49.640625px;
            }
            #ITEM_FORM763 {
                top: 0px;
                left: 312px;
                width: 300px;
                height: 49.640625px;
            }
            #ITEM_FORM764 {
                top: 61px;
                left: 0px;
                width: 612px;
                height: 49px;
            }
            #ITEM_FORM805 {
                top: 119.983px;
                left: 0px;
                width: 612.96875px;
                height: 40px;
            }
            #ITEM_FORM976 {
                top: 180.955px;
                left: 0.815979px;
                width: 614.80908203125px;
                height: 40px;
            }
            #BUTTON765 {
                top: 539.672px;
                left: 386.343px;
                padding: 0px;
                width: 612.2222290039062px;
                height: 51.111114501953125px;
            }
            #BUTTON765 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #GROUP766 {
                top: 221.993px;
                left: 525.98px;
                width: 290px;
                height: 55.972225189208984px;
            }
            #GROUP767 {
                top: 0px;
                left: 5.98260498046875px;
                width: 276.996524810791px;
                height: 55.989566802978516px;
            }
            #BOX768 {
                top: 0.98956298828125px;
                left: 1px;
                width: 55px;
                height: 55px;
            }
            #HEADLINE769 {
                top: 35px;
                left: 3px;
                padding: 0px;
                width: 46px;
                height: 17px;
            }
            #HEADLINE769 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX770 {
                top: 0px;
                left: 75.01043701171875px;
                width: 55px;
                height: 55px;
            }
            #HEADLINE771 {
                top: 35px;
                left: 3px;
                padding: 0px;
                width: 46px;
                height: 17px;
            }
            #HEADLINE771 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX772 {
                top: 0px;
                left: 147.99652099609375px;
                width: 55px;
                height: 55px;
            }
            #HEADLINE773 {
                top: 35px;
                left: 3px;
                padding: 0px;
                width: 46px;
                height: 17px;
            }
            #HEADLINE773 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX774 {
                top: 0px;
                left: 222.99652099609375px;
                width: 55px;
                height: 55px;
            }
            #HEADLINE775 {
                top: 35px;
                left: 3px;
                padding: 0px;
                width: 46px;
                height: 17px;
            }
            #HEADLINE775 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #COUNTDOWN776 {
                top: 5.98956298828125px;
                left: 1px;
                width: 290px;
                height: 26px;
            }
            #COUNTDOWN776 > .widget-content {
                font-size: 30px;
            }
            #HEADLINE800 {
                top: 89.316px;
                left: 395.948px;
                padding: 0px;
                width: 600px;
                height: 51.111114501953125px;
            }
            #HEADLINE800 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE758 {
                top: 164.976px;
                left: 530.99px;
                padding: 0px;
                width: 276px;
                height: 34px;
            }
            #HEADLINE758 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP921 {
                top: 126.45833587646484px;
                left: 0.44097900390625px;
                width: 310px;
                height: 447.2395935058594px;
            }
            #BOX751 {
                top: 0px;
                left: 1px;
                width: 310px;
                height: 447.2395935058594px;
            }
            #LINE755 {
                top: 180.447px;
                left: 5px;
                width: 305px;
                height: 32.43055725097656px;
            }
            #HEADLINE754 {
                top: 12.0127px;
                left: 25.9896px;
                padding: 0px;
                width: 257.7778015136719px;
                height: 46.128475189208984px;
            }
            #HEADLINE754 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #PARAGRAPH803 {
                top: 128.827px;
                left: 24.9827px;
                padding: 0px;
                width: 264.4444580078125px;
                height: 54.79166793823242px;
            }
            #PARAGRAPH803 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP808 {
                top: 61.649322509765625px;
                left: 22.71875px;
                width: 271.7361145019531px;
                height: 232.7951545715332px;
            }
            #HEADLINE804 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 257.7778015136719px;
                height: 59.982643127441406px;
            }
            #HEADLINE804 > .widget-content {
                font-size: 43px;
                text-align: center;
            }
            #PARAGRAPH757 {
                top: 150.60764694213867px;
                left: 8.291656494140625px;
                padding: 0px;
                width: 264.4444580078125px;
                height: 82.18750762939453px;
            }
            #PARAGRAPH757 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #LINE977 {
                top: 405.79864501953125px;
                left: 0px;
                width: 305px;
                height: 32.43055725097656px;
            }
            #HEADLINE978 {
                top: 438.785px;
                left: 0.0069455px;
                padding: 0px;
                width: 301.0069580078125px;
                height: 100.00000762939453px;
            }
            #HEADLINE978 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP858 {
                top: 172.75px;
                left: 0.364596px;
                width: 379.5833435058594px;
                height: 269.1840515136719px;
            }
            #GROUP857 {
                top: 107.969px;
                left: 0px;
                width: 372.3437805175781px;
                height: 49.392364501953125px;
            }
            #HEADLINE849 {
                top: 18.9063px;
                left: 62.6042px;
                padding: 0px;
                width: 309.7395935058594px;
                height: 22.22222328186035px;
            }
            #HEADLINE849 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #SHAPE848 {
                top: 0.0173645px;
                left: 0px;
                width: 49.96527862548828px;
                height: 49.392364501953125px;
            }
            #GROUP856 {
                top: 35.5903px;
                left: 1.97916px;
                width: 377.60418701171875px;
                height: 74.79167175292969px;
            }
            #HEADLINE846 {
                top: 8.125px;
                left: 61.7361px;
                padding: 0px;
                width: 315.8680725097656px;
                height: 66.66667175292969px;
            }
            #HEADLINE846 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #SHAPE847 {
                top: 0px;
                left: 0px;
                width: 48.003475189208984px;
                height: 50.329864501953125px;
            }
            #GROUP855 {
                top: 165.365px;
                left: 4.2361px;
                width: 339.25347900390625px;
                height: 49.6006965637207px;
            }
            #SHAPE851 {
                top: 0px;
                left: 0px;
                width: 41.0069465637207px;
                height: 49.6006965637207px;
            }
            #HEADLINE850 {
                top: 19.618px;
                left: 60.3646px;
                padding: 0px;
                width: 278.888916015625px;
                height: 22.22222328186035px;
            }
            #HEADLINE850 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #GROUP854 {
                top: 224.184px;
                left: 1.68402px;
                width: 334.3403015136719px;
                height: 45.000003814697266px;
            }
            #HEADLINE853 {
                top: 16.2326px;
                left: 55.4514px;
                padding: 0px;
                width: 278.888916015625px;
                height: 22.22222328186035px;
            }
            #HEADLINE853 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #SHAPE852 {
                top: 0px;
                left: 0px;
                width: 44.98263931274414px;
                height: 45.000003814697266px;
            }
            #HEADLINE845 {
                top: 0px;
                left: 26.0417px;
                padding: 0px;
                width: 235.5382080078125px;
                height: 30.000001907348633px;
            }
            #HEADLINE845 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
        }
        
        #SECTION2 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION2 > .ladi-widget-overlay {
            background-color: rgba(20, 20, 20, 0.27);
        }
        
        #SECTION293 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION293 > .ladi-widget-overlay {
            background-color: rgba(41, 40, 40, 0);
        }
        
        #SECTION631 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-size: cover;
            background-attachment: fixed;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION631 > .ladi-widget-overlay {
            background-color: rgba(10, 7, 7, 0.56);
        }
        
        #POPUP740 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP740 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP729 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP729 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP719 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP719 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP708 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP708 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP697 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP697 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP685 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP685 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION488 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
            background-color: rgba(24, 24, 24, 0.25);
            background-size: cover;
            background-attachment: fixed;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION488 > .ladi-widget-overlay {
            background-color: rgba(81, 81, 81, 0.09);
        }
        
        #SECTION535 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
            background-color: rgba(24, 24, 24, 0.25);
            background-size: cover;
            background-attachment: fixed;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION535 > .ladi-widget-overlay {
            background-color: rgba(81, 81, 81, 0.09);
        }
        
        #SECTION750 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/uploads/images/9f2cbde3-72f6-466c-981f-678ac0526eb1.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION750 > .ladi-widget-overlay {
            background-color: rgba(10, 10, 10, 0.84);
        }
        
        #SECTION833 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1440/uploads/images/b6e49a2f-9a6d-48d0-832e-54e670b97c7b.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION833 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH4 {
            display: block;
        }
        
        #PARAGRAPH4 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE6 {
            display: block;
        }
        
        #HEADLINE6 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 235, 234, 1);
            font-weight: 400;
            line-height: 45px;
            letter-spacing: 1px;
        }
        
        #BOX10 {
            display: block;
        }
        
        #BOX10 > .widget-content {
            background-color: rgba(255, 255, 255, 0.13);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 0px rgba(255, 255, 255, 1);
        }
        
        #BOX10> .widget-content {
            border-radius: 10px;
            border-width: 2px;
            border-style: dashed;
            border-color: rgba(244, 67, 54, 1);
        }
        
        #BOX10> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 2px;
            border-style: dashed;
            border-color: rgba(244, 67, 54, 1);
        }
        
        #HEADLINE16 {
            display: block;
        }
        
        #HEADLINE16 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 34px;
        }
        
        #FORM11 {
            display: block;
        }
        
        #FORM11 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM11 .widget-content::-webkit-input-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #FORM11 .widget-content:-moz-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #FORM11 .widget-content::-moz-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #FORM11 .widget-content:-ms-input-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM12 {
            display: block;
        }
        
        #ITEM_FORM12 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: #000000;
        }
        
        #ITEM_FORM12> .widget-content {
            border-radius: 2px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM12> .ladi-widget-overlay {
            border-radius: 2px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM12 .widget-content::-webkit-input-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM12 .widget-content:-moz-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM12 .widget-content::-moz-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM12 .widget-content:-ms-input-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM13 {
            display: block;
        }
        
        #ITEM_FORM13 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: #000000;
        }
        
        #ITEM_FORM13> .widget-content {
            border-radius: 2px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM13> .ladi-widget-overlay {
            border-radius: 2px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM13 .widget-content::-webkit-input-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM13 .widget-content:-moz-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM13 .widget-content::-moz-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM13 .widget-content:-ms-input-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM14 {
            display: block;
        }
        
        #ITEM_FORM14 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: #000000;
        }
        
        #ITEM_FORM14> .widget-content {
            border-radius: 2px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM14> .ladi-widget-overlay {
            border-radius: 2px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM14 .widget-content::-webkit-input-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM14 .widget-content:-moz-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM14 .widget-content::-moz-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM14 .widget-content:-ms-input-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM875 {
            display: block;
        }
        
        #ITEM_FORM875 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: #000000;
        }
        
        #ITEM_FORM875> .widget-content {
            border-radius: 2px;
        }
        
        #ITEM_FORM875> .ladi-widget-overlay {
            border-radius: 2px;
        }
        
        #ITEM_FORM875 .widget-content::-webkit-input-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM875 .widget-content:-moz-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM875 .widget-content::-moz-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #ITEM_FORM875 .widget-content:-ms-input-placeholder {
            color: rgba(117, 117, 117, 1)
        }
        
        #BUTTON15 {
            display: table;
        }
        
        #BUTTON15 > .widget-content {
            background-color: rgba(244, 67, 54, 1);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 400;
            line-height: 22px;
        }
        
        #BUTTON15> .widget-content {
            border-radius: 2px;
        }
        
        #BUTTON15> .ladi-widget-overlay {
            border-radius: 2px;
        }
        
        #HEADLINE290 {
            -webkit-animation-duration: 3s;
            animation-duration: 3s;
            display: block;
        }
        
        #HEADLINE290 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 47px;
            letter-spacing: 1px;
        }
        
        #GROUP337 {
            display: block;
        }
        
        #GROUP337 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE289 {
            display: block;
        }
        
        #HEADLINE289 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 249, 249, 1);
            font-weight: 400;
            line-height: 40px;
            letter-spacing: 1px;
        }
        
        #HEADLINE5 {
            display: block;
        }
        
        #HEADLINE5 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 237, 236, 1);
            font-weight: 400;
            line-height: 40px;
            letter-spacing: 1px;
        }
        
        #GROUP350 {
            display: block;
        }
        
        #GROUP350 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE349 {
            -webkit-animation-duration: 3s;
            animation-duration: 3s;
            display: block;
        }
        
        #HEADLINE349 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 400;
            line-height: 66px;
        }
        
        #HEADLINE333 {
            display: block;
        }
        
        #HEADLINE333 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 400;
            line-height: 49px;
        }
        
        #IMAGE615 {
            display: block;
        }
        
        #IMAGE615 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE615 > .ladi-widget-overlay {
            background-color: rgba(137, 118, 118, 0)
        }
        
        #IMAGE292 {
            display: block;
        }
        
        #IMAGE292 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE292 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #GROUP336 {
            display: block;
        }
        
        #GROUP336 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX307 {
            display: block;
        }
        
        #BOX307 > .widget-content {
            background-image: url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top right;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top right;
            background-repeat: no-repeat;
        }
        
        #BOX307 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX308 {
            display: block;
        }
        
        #BOX308 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX308> .widget-content {
            border-radius: 10px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX308> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #HEADLINE309 {
            display: block;
        }
        
        #HEADLINE309 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #LINE310 {
            display: block;
        }
        
        #LINE310>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(213, 0, 0, 1);
            margin-top: 10.5px;
        }
        
        #LINE310 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE311 {
            display: block;
        }
        
        #HEADLINE311 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BOX302 {
            display: block;
        }
        
        #BOX302 > .widget-content {
            background-image: url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top right;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top right;
            background-repeat: no-repeat;
        }
        
        #BOX302 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX303 {
            display: block;
        }
        
        #BOX303 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX303> .widget-content {
            border-radius: 10px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX303> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #HEADLINE304 {
            display: block;
        }
        
        #HEADLINE304 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #LINE305 {
            display: block;
        }
        
        #LINE305>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(213, 0, 0, 1);
            margin-top: 10.5px;
        }
        
        #LINE305 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE306 {
            display: block;
        }
        
        #HEADLINE306 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #BOX297 {
            display: block;
        }
        
        #BOX297 > .widget-content {
            background-image: url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
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
        
        #BOX297 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX298 {
            display: block;
        }
        
        #BOX298 > .widget-content {
            background-color: rgba(249, 249, 249, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX298> .widget-content {
            border-radius: 10px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX298> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #HEADLINE299 {
            display: block;
        }
        
        #HEADLINE299 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 700;
            line-height: 26px;
        }
        
        #LINE300 {
            display: block;
        }
        
        #LINE300>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(213, 0, 0, 1);
            margin-top: 10.5px;
        }
        
        #LINE300 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE301 {
            display: block;
        }
        
        #HEADLINE301 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 23px;
        }
        
        #GROUP629 {
            display: block;
        }
        
        #GROUP629 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP622 {
            display: block;
        }
        
        #GROUP622 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX340 {
            display: block;
        }
        
        #BOX340 > .widget-content {
            background-color: rgba(189, 189, 189, 0.04);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(213, 0, 0, 1);
        }
        
        #BOX340> .widget-content {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(244, 67, 54, 1);
        }
        
        #BOX340> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(244, 67, 54, 1);
        }
        
        #GROUP627 {
            display: block;
        }
        
        #GROUP627 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE625 {
            display: block;
        }
        
        #IMAGE625 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE625 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #IMAGE624 {
            display: block;
        }
        
        #IMAGE624 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE624 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #GROUP338 {
            display: block;
        }
        
        #GROUP338 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE334 {
            display: block;
        }
        
        #HEADLINE334 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(27, 94, 32, 1);
            font-weight: 600;
            line-height: 24px;
        }
        
        #HEADLINE295 {
            display: block;
        }
        
        #HEADLINE295 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(244, 67, 54, 1);
            font-weight: 700;
            line-height: 37px;
        }
        
        #HEADLINE294 {
            display: block;
        }
        
        #HEADLINE294 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(27, 94, 32, 1);
            font-weight: 600;
            line-height: 24px;
        }
        
        #GROUP630 {
            display: block;
        }
        
        #GROUP630 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE345 {
            display: block;
        }
        
        #LINE345>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dashed;
            border-color: rgba(213, 0, 0, 1);
            margin-top: 10.5px;
        }
        
        #LINE345 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE335 {
            display: block;
        }
        
        #HEADLINE335 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(27, 94, 32, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #HEADLINE632 {
            display: block;
        }
        
        #HEADLINE632 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 37px;
        }
        
        #HEADLINE635 {
            display: block;
        }
        
        #HEADLINE635 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #HEADLINE652 {
            display: block;
        }
        
        #HEADLINE652 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #HEADLINE669 {
            display: block;
        }
        
        #HEADLINE669 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #GROUP796 {
            display: block;
        }
        
        #GROUP796 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON780 {
            display: table;
        }
        
        #BUTTON780 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: #ffffff;
            line-height: 23px;
        }
        
        #BUTTON780> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON780> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE641 {
            display: block;
        }
        
        #HEADLINE641 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 30px;
        }
        
        #GROUP642 {
            display: block;
        }
        
        #GROUP642 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE639 {
            display: block;
        }
        
        #HEADLINE639 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #BOX636 {
            display: block;
        }
        
        #BOX636 > .widget-content {
            background-color: rgba(189, 189, 189, 0.02);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX636> .widget-content {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX636> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BUTTON638 {
            display: table;
        }
        
        #BUTTON638 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(255, 255, 255, 1);
            line-height: 23px;
        }
        
        #BUTTON638> .widget-content {
            border-radius: 10px;
        }
        
        #BUTTON638> .ladi-widget-overlay {
            border-radius: 10px;
        }
        
        #GROUP929 {
            display: block;
        }
        
        #GROUP929 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE930 {
            display: block;
        }
        
        #HEADLINE930 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #HEADLINE931 {
            display: block;
        }
        
        #HEADLINE931 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(250, 39, 39, 1);
            font-weight: 700;
            line-height: 16px;
        }
        
        #BOX932 {
            display: block;
        }
        
        #BOX932 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX932> .widget-content {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #BOX932> .ladi-widget-overlay {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #HEADLINE933 {
            display: block;
        }
        
        #HEADLINE933 > .widget-content {
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
        
        #HEADLINE904 {
            display: block;
        }
        
        #HEADLINE904 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 37px;
        }
        
        #GROUP917 {
            display: block;
        }
        
        #GROUP917 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP915 {
            display: block;
        }
        
        #GROUP915 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX913 {
            display: block;
        }
        
        #BOX913 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX913> .widget-content {
            border-radius: 15px;
        }
        
        #BOX913> .ladi-widget-overlay {
            border-radius: 15px;
        }
        
        #HEADLINE914 {
            display: block;
        }
        
        #HEADLINE914 > .widget-content {
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 33px;
        }
        
        #BUTTON910 {
            display: table;
        }
        
        #BUTTON910 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(244, 67, 54, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BUTTON910> .widget-content {
            border-radius: 5px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BUTTON910> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #FORM905 {
            display: block;
        }
        
        #FORM905 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM905 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM905 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM905 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM905 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM912 {
            display: block;
        }
        
        #ITEM_FORM912 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM912 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM912 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM912 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM912 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #IMAGE919 {
            display: block;
        }
        
        #IMAGE919 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE919 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #IMAGE920 {
            display: block;
        }
        
        #IMAGE920 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE920 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #GROUP979 {
            display: block;
        }
        
        #GROUP979 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX964 {
            display: block;
        }
        
        #BOX964 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX964> .widget-content {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #BOX964> .ladi-widget-overlay {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #HEADLINE965 {
            display: block;
        }
        
        #HEADLINE965 > .widget-content {
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
        
        #GROUP961 {
            display: block;
        }
        
        #GROUP961 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE962 {
            display: block;
        }
        
        #HEADLINE962 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #HEADLINE963 {
            display: block;
        }
        
        #HEADLINE963 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(250, 39, 39, 1);
            font-weight: 700;
            line-height: 16px;
        }
        
        #BOX645 {
            display: block;
        }
        
        #BOX645 > .widget-content {
            background-color: rgba(189, 189, 189, 0.02);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX645> .widget-content {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX645> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE647 {
            display: block;
        }
        
        #HEADLINE647 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 30px;
        }
        
        #BUTTON646 {
            display: table;
        }
        
        #BUTTON646 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(255, 255, 255, 1);
            line-height: 23px;
        }
        
        #BUTTON646> .widget-content {
            border-radius: 10px;
        }
        
        #BUTTON646> .ladi-widget-overlay {
            border-radius: 10px;
        }
        
        #BUTTON781 {
            display: table;
        }
        
        #BUTTON781 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: #ffffff;
            line-height: 23px;
        }
        
        #BUTTON781> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON781> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #GROUP651 {
            display: block;
        }
        
        #GROUP651 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE644 {
            display: block;
        }
        
        #HEADLINE644 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #GROUP797 {
            display: block;
        }
        
        #GROUP797 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP980 {
            display: block;
        }
        
        #GROUP980 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX959 {
            display: block;
        }
        
        #BOX959 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX959> .widget-content {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #BOX959> .ladi-widget-overlay {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #HEADLINE960 {
            display: block;
        }
        
        #HEADLINE960 > .widget-content {
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
        
        #GROUP956 {
            display: block;
        }
        
        #GROUP956 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE957 {
            display: block;
        }
        
        #HEADLINE957 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #HEADLINE958 {
            display: block;
        }
        
        #HEADLINE958 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(250, 39, 39, 1);
            font-weight: 700;
            line-height: 16px;
        }
        
        #BOX655 {
            display: block;
        }
        
        #BOX655 > .widget-content {
            background-color: rgba(189, 189, 189, 0.02);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX655> .widget-content {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX655> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE657 {
            display: block;
        }
        
        #HEADLINE657 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 30px;
        }
        
        #HEADLINE654 {
            display: block;
        }
        
        #HEADLINE654 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #GROUP799 {
            display: block;
        }
        
        #GROUP799 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON656 {
            display: table;
        }
        
        #BUTTON656 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(255, 255, 255, 1);
            line-height: 23px;
        }
        
        #BUTTON656> .widget-content {
            border-radius: 10px;
        }
        
        #BUTTON656> .ladi-widget-overlay {
            border-radius: 10px;
        }
        
        #BUTTON788 {
            display: table;
        }
        
        #BUTTON788 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: #ffffff;
            line-height: 23px;
        }
        
        #BUTTON788> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON788> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #GROUP981 {
            display: block;
        }
        
        #GROUP981 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX954 {
            display: block;
        }
        
        #BOX954 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX954> .widget-content {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #BOX954> .ladi-widget-overlay {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #HEADLINE955 {
            display: block;
        }
        
        #HEADLINE955 > .widget-content {
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
        
        #GROUP951 {
            display: block;
        }
        
        #GROUP951 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE952 {
            display: block;
        }
        
        #HEADLINE952 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #HEADLINE953 {
            display: block;
        }
        
        #HEADLINE953 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(250, 39, 39, 1);
            font-weight: 700;
            line-height: 16px;
        }
        
        #BOX665 {
            display: block;
        }
        
        #BOX665 > .widget-content {
            background-color: rgba(189, 189, 189, 0.02);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX665> .widget-content {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX665> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE667 {
            display: block;
        }
        
        #HEADLINE667 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 30px;
        }
        
        #HEADLINE668 {
            display: block;
        }
        
        #HEADLINE668 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BUTTON666 {
            display: table;
        }
        
        #BUTTON666 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(255, 255, 255, 1);
            line-height: 23px;
        }
        
        #BUTTON666> .widget-content {
            border-radius: 10px;
        }
        
        #BUTTON666> .ladi-widget-overlay {
            border-radius: 10px;
        }
        
        #BUTTON790 {
            display: table;
        }
        
        #BUTTON790 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: #ffffff;
            line-height: 23px;
        }
        
        #BUTTON790> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON790> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #GROUP982 {
            display: block;
        }
        
        #GROUP982 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX969 {
            display: block;
        }
        
        #BOX969 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX969> .widget-content {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #BOX969> .ladi-widget-overlay {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #HEADLINE970 {
            display: block;
        }
        
        #HEADLINE970 > .widget-content {
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
        
        #GROUP966 {
            display: block;
        }
        
        #GROUP966 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE967 {
            display: block;
        }
        
        #HEADLINE967 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #HEADLINE968 {
            display: block;
        }
        
        #HEADLINE968 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(250, 39, 39, 1);
            font-weight: 700;
            line-height: 16px;
        }
        
        #BOX660 {
            display: block;
        }
        
        #BOX660 > .widget-content {
            background-color: rgba(189, 189, 189, 0.02);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX660> .widget-content {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX660> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE662 {
            display: block;
        }
        
        #HEADLINE662 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 30px;
        }
        
        #HEADLINE663 {
            display: block;
        }
        
        #HEADLINE663 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #BUTTON661 {
            display: table;
        }
        
        #BUTTON661 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(255, 255, 255, 1);
            line-height: 23px;
        }
        
        #BUTTON661> .widget-content {
            border-radius: 10px;
        }
        
        #BUTTON661> .ladi-widget-overlay {
            border-radius: 10px;
        }
        
        #BUTTON789 {
            display: table;
        }
        
        #BUTTON789 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: #ffffff;
            line-height: 23px;
        }
        
        #BUTTON789> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON789> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #GROUP983 {
            display: block;
        }
        
        #GROUP983 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX974 {
            display: block;
        }
        
        #BOX974 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX974> .widget-content {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #BOX974> .ladi-widget-overlay {
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 330px;
            border-top-left-radius: 330px;
            border-top-right-radius: 0px;
        }
        
        #HEADLINE975 {
            display: block;
        }
        
        #HEADLINE975 > .widget-content {
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
        
        #GROUP971 {
            display: block;
        }
        
        #GROUP971 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE972 {
            display: block;
        }
        
        #HEADLINE972 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #HEADLINE973 {
            display: block;
        }
        
        #HEADLINE973 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(250, 39, 39, 1);
            font-weight: 700;
            line-height: 16px;
        }
        
        #BOX670 {
            display: block;
        }
        
        #BOX670 > .widget-content {
            background-color: rgba(189, 189, 189, 0.02);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX670> .widget-content {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX670> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE672 {
            display: block;
        }
        
        #HEADLINE672 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 30px;
        }
        
        #HEADLINE673 {
            display: block;
        }
        
        #HEADLINE673 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON793 {
            display: table;
        }
        
        #BUTTON793 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: #ffffff;
            line-height: 23px;
        }
        
        #BUTTON793> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON793> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON671 {
            display: table;
        }
        
        #BUTTON671 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(255, 255, 255, 1);
            line-height: 23px;
        }
        
        #BUTTON671> .widget-content {
            border-radius: 10px;
        }
        
        #BUTTON671> .ladi-widget-overlay {
            border-radius: 10px;
        }
        
        #LINEVERTICAL743 {
            display: block;
        }
        
        #LINEVERTICAL743>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL743 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE748 {
            display: block;
        }
        
        #HEADLINE748 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP746 {
            display: block;
        }
        
        #LISTOP746 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #HEADLINE749 {
            display: block;
        }
        
        #HEADLINE749 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #BOX741 {
            display: block;
        }
        
        #BOX741 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP747 {
            display: block;
        }
        
        #LISTOP747 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #BOX730 {
            display: block;
        }
        
        #BOX730 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP735 {
            display: block;
        }
        
        #LISTOP735 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #HEADLINE737 {
            display: block;
        }
        
        #HEADLINE737 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP736 {
            display: block;
        }
        
        #LISTOP736 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #HEADLINE738 {
            display: block;
        }
        
        #HEADLINE738 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINEVERTICAL732 {
            display: block;
        }
        
        #LINEVERTICAL732>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL732 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX720 {
            display: block;
        }
        
        #BOX720 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP725 {
            display: block;
        }
        
        #LISTOP725 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #LISTOP726 {
            display: block;
        }
        
        #LISTOP726 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #HEADLINE727 {
            display: block;
        }
        
        #HEADLINE727 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINEVERTICAL722 {
            display: block;
        }
        
        #LINEVERTICAL722>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL722 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE728 {
            display: block;
        }
        
        #HEADLINE728 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #BOX709 {
            display: block;
        }
        
        #BOX709 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP714 {
            display: block;
        }
        
        #LISTOP714 > .widget-content {
            line-height: 20px;
        }
        
        #LISTOP715 {
            display: block;
        }
        
        #LISTOP715 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #HEADLINE718 {
            display: block;
        }
        
        #HEADLINE718 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #LINEVERTICAL711 {
            display: block;
        }
        
        #LINEVERTICAL711>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL711 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP716 {
            display: block;
        }
        
        #LISTOP716 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #HEADLINE717 {
            display: block;
        }
        
        #HEADLINE717 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #BOX698 {
            display: block;
        }
        
        #BOX698 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE705 {
            display: block;
        }
        
        #HEADLINE705 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP703 {
            display: block;
        }
        
        #LISTOP703 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #HEADLINE707 {
            display: block;
        }
        
        #HEADLINE707 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #HEADLINE706 {
            display: block;
        }
        
        #HEADLINE706 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP704 {
            display: block;
        }
        
        #LISTOP704 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #LINEVERTICAL700 {
            display: block;
        }
        
        #LINEVERTICAL700>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL700 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX686 {
            display: block;
        }
        
        #BOX686 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE694 {
            display: block;
        }
        
        #HEADLINE694 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP693 {
            display: block;
        }
        
        #LISTOP693 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #LINEVERTICAL688 {
            display: block;
        }
        
        #LINEVERTICAL688>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL688 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP695 {
            display: block;
        }
        
        #LISTOP695 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #HEADLINE696 {
            display: block;
        }
        
        #HEADLINE696 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #HEADLINE493 {
            display: block;
        }
        
        #HEADLINE493 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 36px;
        }
        
        #GROUP526 {
            display: block;
        }
        
        #GROUP526 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX466 {
            display: block;
        }
        
        #BOX466 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX466> .widget-content {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX466> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #HEADLINE469 {
            display: block;
        }
        
        #HEADLINE469 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #GROUP482 {
            display: block;
        }
        
        #GROUP482 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP468 {
            display: block;
        }
        
        #LISTOP468 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #GROUP523 {
            display: block;
        }
        
        #GROUP523 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE467 {
            display: block;
        }
        
        #HEADLINE467 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 31px;
        }
        
        #GROUP464 {
            display: block;
        }
        
        #GROUP464 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX465 {
            display: block;
        }
        
        #BOX465 > .widget-content {
            background-image: url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/gv-1513754924.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(160, 160, 160, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #BOX465> .widget-content {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX465> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX465 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP579 {
            display: block;
        }
        
        #GROUP579 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX453 {
            display: block;
        }
        
        #BOX453 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX453> .widget-content {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX453> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #HEADLINE461 {
            display: block;
        }
        
        #HEADLINE461 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #HEADLINE454 {
            display: block;
        }
        
        #HEADLINE454 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 31px;
        }
        
        #GROUP486 {
            display: block;
        }
        
        #GROUP486 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP455 {
            display: block;
        }
        
        #LISTOP455 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #BOX495 {
            display: block;
        }
        
        #BOX495 > .widget-content {
            background-image: url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(160, 160, 160, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #BOX495> .widget-content {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX495> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX495 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP525 {
            display: block;
        }
        
        #GROUP525 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP522 {
            display: block;
        }
        
        #GROUP522 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE463 {
            display: block;
        }
        
        #HEADLINE463 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 29px;
        }
        
        #HEADLINE458 {
            display: block;
        }
        
        #HEADLINE458 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 32px;
        }
        
        #BOX457 {
            display: block;
        }
        
        #BOX457 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX457> .widget-content {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX457> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #LISTOP459 {
            display: block;
        }
        
        #LISTOP459 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 21px;
        }
        
        #BOX496 {
            display: block;
        }
        
        #BOX496 > .widget-content {
            background-image: url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/IMG_2388-1513771036.JPG");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(160, 160, 160, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #BOX496> .widget-content {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX496> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX496 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE489 {
            display: block;
        }
        
        #HEADLINE489 > .widget-content {
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(27, 94, 32, 1);
            font-weight: 400;
            line-height: 31px;
        }
        
        #IMAGE835 {
            display: block;
        }
        
        #IMAGE835 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE835 > .ladi-widget-overlay {
            background-color: rgba(37, 27, 27, 0)
        }
        
        #BOX491 {
            display: block;
        }
        
        #BOX491 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX491> .widget-content {
            border-radius: 15px;
        }
        
        #BOX491> .ladi-widget-overlay {
            border-radius: 15px;
        }
        
        #HEADLINE492 {
            display: block;
        }
        
        #HEADLINE492 > .widget-content {
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 33px;
        }
        
        #SHAPE490 {
            display: block;
        }
        
        #SHAPE490 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(213, 0, 0, 1);
        }
        
        #SHAPE490> .widget-content svg {
            fill: rgba(213, 0, 0, 1);
        }
        
        #GROUP590 {
            display: block;
        }
        
        #GROUP590 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP542 {
            display: block;
        }
        
        #GROUP542 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE543 {
            display: block;
        }
        
        #HEADLINE543 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 29px;
        }
        
        #HEADLINE544 {
            display: block;
        }
        
        #HEADLINE544 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 32px;
        }
        
        #BOX547 {
            display: block;
        }
        
        #BOX547 > .widget-content {
            background-image: url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Capture2-1513755415.JPG");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(160, 160, 160, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #BOX547> .widget-content {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX547> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX547 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #LISTOP546 {
            display: block;
        }
        
        #LISTOP546 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 21px;
        }
        
        #BOX545 {
            display: block;
        }
        
        #BOX545 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX545> .widget-content {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX545> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #GROUP598 {
            display: block;
        }
        
        #GROUP598 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP601 {
            display: block;
        }
        
        #GROUP601 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP602 {
            display: block;
        }
        
        #LISTOP602 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #BOX603 {
            display: block;
        }
        
        #BOX603 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX603> .widget-content {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX603> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #HEADLINE604 {
            display: block;
        }
        
        #HEADLINE604 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #GROUP606 {
            display: block;
        }
        
        #GROUP606 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX607 {
            display: block;
        }
        
        #BOX607 > .widget-content {
            background-image: url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/22195306_10210441347331807_6105258034518766275_n-1513757479.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(160, 160, 160, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #BOX607> .widget-content {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX607> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX607 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE600 {
            display: block;
        }
        
        #HEADLINE600 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 31px;
        }
        
        #GROUP609 {
            display: block;
        }
        
        #GROUP609 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX538 {
            display: block;
        }
        
        #BOX538 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX538> .widget-content {
            border-radius: 15px;
        }
        
        #BOX538> .ladi-widget-overlay {
            border-radius: 15px;
        }
        
        #HEADLINE539 {
            display: block;
        }
        
        #HEADLINE539 > .widget-content {
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 33px;
        }
        
        #GROUP557 {
            display: block;
        }
        
        #GROUP557 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE537 {
            display: block;
        }
        
        #SHAPE537 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(213, 0, 0, 1);
        }
        
        #SHAPE537> .widget-content svg {
            fill: rgba(213, 0, 0, 1);
        }
        
        #GROUP611 {
            display: block;
        }
        
        #GROUP611 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE595 {
            display: block;
        }
        
        #SHAPE595 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(213, 0, 0, 1);
        }
        
        #SHAPE595> .widget-content svg {
            fill: rgba(213, 0, 0, 1);
        }
        
        #BOX594 {
            display: block;
        }
        
        #BOX594 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX594> .widget-content {
            border-radius: 15px;
        }
        
        #BOX594> .ladi-widget-overlay {
            border-radius: 15px;
        }
        
        #HEADLINE596 {
            display: block;
        }
        
        #HEADLINE596 > .widget-content {
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 33px;
        }
        
        #GROUP679 {
            display: block;
        }
        
        #GROUP679 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX680 {
            display: block;
        }
        
        #BOX680 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX680> .widget-content {
            border-radius: 15px;
        }
        
        #BOX680> .ladi-widget-overlay {
            border-radius: 15px;
        }
        
        #GROUP682 {
            display: block;
        }
        
        #GROUP682 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE683 {
            display: block;
        }
        
        #SHAPE683 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(213, 0, 0, 1);
        }
        
        #SHAPE683> .widget-content svg {
            fill: rgba(213, 0, 0, 1);
        }
        
        #HEADLINE681 {
            display: block;
        }
        
        #HEADLINE681 > .widget-content {
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 33px;
        }
        
        #GROUP832 {
            display: block;
        }
        
        #GROUP832 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP551 {
            display: block;
        }
        
        #GROUP551 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP552 {
            display: block;
        }
        
        #LISTOP552 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #GROUP553 {
            display: block;
        }
        
        #GROUP553 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE554 {
            display: block;
        }
        
        #HEADLINE554 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 600;
            line-height: 31px;
        }
        
        #BOX549 {
            display: block;
        }
        
        #BOX549 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX549> .widget-content {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX549> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #HEADLINE550 {
            display: block;
        }
        
        #HEADLINE550 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #GROUP811 {
            display: block;
        }
        
        #GROUP811 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP555 {
            display: block;
        }
        
        #GROUP555 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX556 {
            display: block;
        }
        
        #BOX556 > .widget-content {
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/TrangNT_anh1-1513771191.gif");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(160, 160, 160, 1);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #BOX556> .widget-content {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX556> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(213, 0, 0, 1);
        }
        
        #BOX556 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE760 {
            display: block;
        }
        
        #HEADLINE760 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 37px;
        }
        
        #FORM761 {
            display: block;
        }
        
        #FORM761 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM761 .widget-content::-webkit-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #FORM761 .widget-content:-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #FORM761 .widget-content::-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #FORM761 .widget-content:-ms-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM762 {
            display: block;
        }
        
        #ITEM_FORM762 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(74, 74, 74, 1);
        }
        
        #ITEM_FORM762> .widget-content {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM762> .ladi-widget-overlay {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM762 .widget-content::-webkit-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM762 .widget-content:-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM762 .widget-content::-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM762 .widget-content:-ms-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM763 {
            display: block;
        }
        
        #ITEM_FORM763 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(74, 74, 74, 1);
        }
        
        #ITEM_FORM763> .widget-content {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM763> .ladi-widget-overlay {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM763 .widget-content::-webkit-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM763 .widget-content:-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM763 .widget-content::-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM763 .widget-content:-ms-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM764 {
            display: block;
        }
        
        #ITEM_FORM764 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(74, 74, 74, 1);
        }
        
        #ITEM_FORM764> .widget-content {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM764> .ladi-widget-overlay {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM764 .widget-content::-webkit-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM764 .widget-content:-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM764 .widget-content::-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM764 .widget-content:-ms-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM805 {
            display: block;
        }
        
        #ITEM_FORM805 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(74, 74, 74, 1);
        }
        
        #ITEM_FORM805> .widget-content {
            border-radius: 3px;
        }
        
        #ITEM_FORM805> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #ITEM_FORM805 .widget-content::-webkit-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM805 .widget-content:-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM805 .widget-content::-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM805 .widget-content:-ms-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM976 {
            display: block;
        }
        
        #ITEM_FORM976 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(74, 74, 74, 1);
        }
        
        #ITEM_FORM976> .widget-content {
            border-radius: 3px;
        }
        
        #ITEM_FORM976> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #ITEM_FORM976 .widget-content::-webkit-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM976 .widget-content:-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM976 .widget-content::-moz-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #ITEM_FORM976 .widget-content:-ms-input-placeholder {
            color: rgba(71, 71, 71, 1)
        }
        
        #BUTTON765 {
            display: table;
        }
        
        #BUTTON765 > .widget-content {
            background-color: rgba(198, 50, 39, 1);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 400;
            line-height: 28px;
            letter-spacing: 1px;
        }
        
        #BUTTON765> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON765> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #GROUP766 {
            display: block;
        }
        
        #GROUP766 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP767 {
            display: block;
        }
        
        #GROUP767 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX768 {
            display: block;
        }
        
        #BOX768 > .widget-content {
            background-color: rgba(244, 67, 54, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX768> .widget-content {
            border-radius: 4px;
        }
        
        #BOX768> .ladi-widget-overlay {
            border-radius: 4px;
        }
        
        #HEADLINE769 {
            display: block;
        }
        
        #HEADLINE769 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #BOX770 {
            display: block;
        }
        
        #BOX770 > .widget-content {
            background-color: rgba(244, 67, 54, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX770> .widget-content {
            border-radius: 4px;
        }
        
        #BOX770> .ladi-widget-overlay {
            border-radius: 4px;
        }
        
        #HEADLINE771 {
            display: block;
        }
        
        #HEADLINE771 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #BOX772 {
            display: block;
        }
        
        #BOX772 > .widget-content {
            background-color: rgba(244, 67, 54, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX772> .widget-content {
            border-radius: 4px;
        }
        
        #BOX772> .ladi-widget-overlay {
            border-radius: 4px;
        }
        
        #HEADLINE773 {
            display: block;
        }
        
        #HEADLINE773 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #BOX774 {
            display: block;
        }
        
        #BOX774 > .widget-content {
            background-color: rgba(244, 67, 54, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX774> .widget-content {
            border-radius: 4px;
        }
        
        #BOX774> .ladi-widget-overlay {
            border-radius: 4px;
        }
        
        #HEADLINE775 {
            display: block;
        }
        
        #HEADLINE775 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #COUNTDOWN776 {
            display: block;
        }
        
        #COUNTDOWN776 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 0px;
        }
        
        #HEADLINE800 {
            display: block;
        }
        
        #HEADLINE800 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #HEADLINE758 {
            display: block;
        }
        
        #HEADLINE758 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 34px;
        }
        
        #GROUP921 {
            display: block;
        }
        
        #GROUP921 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX751 {
            display: block;
        }
        
        #BOX751 > .widget-content {
            background-color: rgba(0, 0, 0, 0.38);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE755 {
            display: block;
        }
        
        #LINE755>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 12px;
        }
        
        #LINE755 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE754 {
            display: block;
        }
        
        #HEADLINE754 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #PARAGRAPH803 {
            display: block;
        }
        
        #PARAGRAPH803 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            line-height: 22px;
        }
        
        #GROUP808 {
            display: block;
        }
        
        #GROUP808 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE804 {
            display: block;
        }
        
        #HEADLINE804 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 700;
            line-height: 49px;
        }
        
        #PARAGRAPH757 {
            display: block;
        }
        
        #PARAGRAPH757 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            line-height: 22px;
        }
        
        #LINE977 {
            display: block;
        }
        
        #LINE977>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 12px;
        }
        
        #LINE977 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE978 {
            display: block;
        }
        
        #HEADLINE978 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #GROUP858 {
            display: block;
        }
        
        #GROUP858 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP857 {
            display: block;
        }
        
        #GROUP857 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE849 {
            display: block;
        }
        
        #HEADLINE849 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #SHAPE848 {
            display: block;
        }
        
        #SHAPE848 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE848> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP856 {
            display: block;
        }
        
        #GROUP856 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE846 {
            display: block;
        }
        
        #HEADLINE846 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #SHAPE847 {
            display: block;
        }
        
        #SHAPE847 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE847> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP855 {
            display: block;
        }
        
        #GROUP855 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE851 {
            display: block;
        }
        
        #SHAPE851 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE851> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE850 {
            display: block;
        }
        
        #HEADLINE850 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #GROUP854 {
            display: block;
        }
        
        #GROUP854 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE853 {
            display: block;
        }
        
        #HEADLINE853 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #SHAPE852 {
            display: block;
        }
        
        #SHAPE852 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE852> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE845 {
            display: block;
        }
        
        #HEADLINE845 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 30px;
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION2 {
                width: 100%;
                height: 763.09033203125px;
            }
            #SECTION2 .container {}
            #SECTION2 {
                background-image: linear-gradient(rgba(20, 20, 20, 0.27), rgba(20, 20, 20, 0.27)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
                background-image: -o-linear-gradient(rgba(20, 20, 20, 0.27), rgba(20, 20, 20, 0.27)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
                background-image: -ms-linear-gradient(rgba(20, 20, 20, 0.27), rgba(20, 20, 20, 0.27)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
                background-image: -moz-linear-gradient(rgba(20, 20, 20, 0.27), rgba(20, 20, 20, 0.27)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
                background-image: -webkit-linear-gradient(rgba(20, 20, 20, 0.27), rgba(20, 20, 20, 0.27)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION293 {
                width: 100%;
                height: 344.09722900390625px;
            }
            #SECTION293 .container {}
            #SECTION293 {
                background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION631 {
                width: 100%;
                height: 1999.4619140625px;
            }
            #SECTION631 .container {}
            #SECTION631 {
                background-image: linear-gradient(rgba(10, 7, 7, 0.56), rgba(10, 7, 7, 0.56)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
                background-image: -o-linear-gradient(rgba(10, 7, 7, 0.56), rgba(10, 7, 7, 0.56)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
                background-image: -ms-linear-gradient(rgba(10, 7, 7, 0.56), rgba(10, 7, 7, 0.56)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
                background-image: -moz-linear-gradient(rgba(10, 7, 7, 0.56), rgba(10, 7, 7, 0.56)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
                background-image: -webkit-linear-gradient(rgba(10, 7, 7, 0.56), rgba(10, 7, 7, 0.56)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/people-eiffel-tower-lights-night.jpg");
                background-size: cover;
                background-attachment: fixed;
                background-position: center top;
                background-repeat: no-repeat;
            }
            #POPUP740 {
                width: 100%;
                height: 100%;
            }
            #POPUP740 .container {
                width: 375.0000305175781px;
                height: 510.3125305175781px;
                top: calc(100%-510.3125305175781px);
            }
            #POPUP740 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP729 {
                width: 100%;
                height: 100%;
            }
            #POPUP729 .container {
                width: 375.0000305175781px;
                height: 563.9236450195312px;
                top: calc(100%-563.9236450195312px);
            }
            #POPUP729 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP719 {
                width: 100%;
                height: 100%;
            }
            #POPUP719 .container {
                width: 375.0000305175781px;
                height: 622.1875px;
                top: calc(100%-622.1875px);
            }
            #POPUP719 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP708 {
                width: 100%;
                height: 100%;
            }
            #POPUP708 .container {
                width: 375.0000305175781px;
                height: 536.2847290039062px;
                top: calc(100%-536.2847290039062px);
            }
            #POPUP708 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP697 {
                width: 100%;
                height: 100%;
            }
            #POPUP697 .container {
                width: 375.0000305175781px;
                height: 630.0347290039062px;
                top: calc(100%-630.0347290039062px);
            }
            #POPUP697 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP685 {
                width: 100%;
                height: 100%;
            }
            #POPUP685 .container {
                width: 375.0000305175781px;
                height: 732.5173950195312px;
                top: calc(100%-732.5173950195312px);
            }
            #POPUP685 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION488 {
                width: 100%;
                height: 2800.52099609375px;
            }
            #SECTION488 .container {}
            #SECTION488 {
                display: none;
                background-image: linear-gradient(rgba(81, 81, 81, 0.09), rgba(81, 81, 81, 0.09)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-image: -o-linear-gradient(rgba(81, 81, 81, 0.09), rgba(81, 81, 81, 0.09)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-image: -ms-linear-gradient(rgba(81, 81, 81, 0.09), rgba(81, 81, 81, 0.09)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-image: -moz-linear-gradient(rgba(81, 81, 81, 0.09), rgba(81, 81, 81, 0.09)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-image: -webkit-linear-gradient(rgba(81, 81, 81, 0.09), rgba(81, 81, 81, 0.09)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-size: cover;
                background-attachment: fixed;
                background-position: center top;
                background-repeat: no-repeat;
            }
            #SECTION535 {
                width: 100%;
                height: 10px;
            }
            #SECTION535 .container {}
            #SECTION535 {
                display: none;
                background-image: linear-gradient(rgba(81, 81, 81, 0.09), rgba(81, 81, 81, 0.09)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-image: -o-linear-gradient(rgba(81, 81, 81, 0.09), rgba(81, 81, 81, 0.09)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-image: -ms-linear-gradient(rgba(81, 81, 81, 0.09), rgba(81, 81, 81, 0.09)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-image: -moz-linear-gradient(rgba(81, 81, 81, 0.09), rgba(81, 81, 81, 0.09)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-image: -webkit-linear-gradient(rgba(81, 81, 81, 0.09), rgba(81, 81, 81, 0.09)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/christmas-2947257_960_720-1513736503.jpg");
                background-size: cover;
                background-attachment: fixed;
                background-position: center top;
                background-repeat: no-repeat;
            }
            #SECTION750 {
                width: 320px;
                height: 1183.854248046875px;
            }
            #SECTION750 .container {}
            #SECTION750 {
                background-image: linear-gradient(rgba(10, 10, 10, 0.84), rgba(10, 10, 10, 0.84)), url("https://static.ladipage.net/uploads/images/9f2cbde3-72f6-466c-981f-678ac0526eb1.jpg");
                background-image: -o-linear-gradient(rgba(10, 10, 10, 0.84), rgba(10, 10, 10, 0.84)), url("https://static.ladipage.net/uploads/images/9f2cbde3-72f6-466c-981f-678ac0526eb1.jpg");
                background-image: -ms-linear-gradient(rgba(10, 10, 10, 0.84), rgba(10, 10, 10, 0.84)), url("https://static.ladipage.net/uploads/images/9f2cbde3-72f6-466c-981f-678ac0526eb1.jpg");
                background-image: -moz-linear-gradient(rgba(10, 10, 10, 0.84), rgba(10, 10, 10, 0.84)), url("https://static.ladipage.net/uploads/images/9f2cbde3-72f6-466c-981f-678ac0526eb1.jpg");
                background-image: -webkit-linear-gradient(rgba(10, 10, 10, 0.84), rgba(10, 10, 10, 0.84)), url("https://static.ladipage.net/uploads/images/9f2cbde3-72f6-466c-981f-678ac0526eb1.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION833 {
                width: 100%;
                height: 706.9791870117188px;
            }
            #SECTION833 .container {}
            #SECTION833 {
                background-image: url("https://static.ladipage.net/uploads/images/b6e49a2f-9a6d-48d0-832e-54e670b97c7b.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #PARAGRAPH4 {
                top: 688.79px;
                left: 5.99998px;
                padding: 0px;
                width: 355px;
                height: 63.328125px;
            }
            #PARAGRAPH4 > .widget-content {
                font-size: 14px;
                text-align: center;
                line-height: 22px;
            }
            #HEADLINE6 {
                top: 93.1255px;
                left: 39.0798px;
                padding: 0px;
                width: 321.984375px;
                height: 41.109375px;
            }
            #HEADLINE6 > .widget-content {
                font-size: 27px;
                text-align: center;
                line-height: 42px;
            }
            #BOX10 {
                top: 285.92px;
                left: 0.503479px;
                width: 372px;
                height: 402.703125px;
            }
            #HEADLINE16 {
                top: 34px;
                left: 25px;
                padding: 0px;
                width: 330px;
                height: 67.984375px;
            }
            #HEADLINE16 > .widget-content {
                font-size: 26px;
                text-align: center;
                line-height: 34px;
            }
            #FORM11 {
                top: 122.969px;
                left: 23.9236px;
                width: 330px;
                height: 216.984375px;
            }
            #FORM11 > .widget-content {
                font-size: 13px;
            }
            #ITEM_FORM12 {
                top: 0px;
                left: 6.40234e-05px;
                width: 330px;
                height: 42.6875px;
            }
            #ITEM_FORM12 > .widget-content {
                font-size: 13px;
            }
            #ITEM_FORM13 {
                top: 54.1854px;
                left: 6.40234e-05px;
                width: 330px;
                height: 42.6875px;
            }
            #ITEM_FORM13 > .widget-content {
                font-size: 13px;
            }
            #ITEM_FORM14 {
                top: 109.473px;
                left: 6.40234e-05px;
                width: 330px;
                height: 42.6875px;
            }
            #ITEM_FORM14 > .widget-content {
                font-size: 13px;
            }
            #ITEM_FORM875 {
                top: 162.153px;
                left: 0px;
                width: 330px;
                height: 44.84375px;
            }
            #BUTTON15 {
                top: 352.729px;
                left: 24px;
                padding: 0px;
                width: 320px;
                height: 40px;
            }
            #BUTTON15 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE290 {
                top: 127.965px;
                left: 20.9375px;
                padding: 0px;
                width: 355px;
                height: 46.65625px;
            }
            #HEADLINE290 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #GROUP337 {
                top: 63.0035px;
                left: -20.4966px;
                width: 380.53125px;
                height: 30px;
            }
            #HEADLINE289 {
                top: 0px;
                left: 203.986px;
                padding: 0px;
                width: 177.546875px;
                height: 30px;
            }
            #HEADLINE289 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 30px;
            }
            #HEADLINE5 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 286.8125px;
                height: 30px;
            }
            #HEADLINE5 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 30px;
            }
            #GROUP350 {
                top: 183.021px;
                left: 7.125px;
                width: 388.53125px;
                height: 95.9375px;
            }
            #HEADLINE349 {
                top: 30.382px;
                left: 96.5556px;
                padding: 0px;
                width: 292.984375px;
                height: 65.546875px;
            }
            #HEADLINE349 > .widget-content {
                font-size: 56px;
                text-align: left;
            }
            #HEADLINE333 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 80px;
            }
            #HEADLINE333 > .widget-content {
                font-size: 38px;
                text-align: left;
                line-height: 40px;
            }
            #IMAGE615 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x200/5a28c4f8c3f6592b3acabec8/a-1513758987.png);
            }
            #IMAGE615 {
                display: block!important;
                top: -306px;
                left: 2.99998px;
                width: 355px;
                height: 183.984375px;
            }
            #IMAGE292 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Logo__slogan_Lakita-1513685810.png);
            }
            #IMAGE292 {
                top: 306.996px;
                left: 82.5px;
                width: 228.53125px;
                height: 153.984375px;
            }
            #GROUP336 {
                display: none!important;
                top: 49.583335876464844px;
                left: 245.31942749023438px;
                width: 305px;
                height: 305.9895935058594px;
            }
            #BOX307 {
                top: 0px;
                left: 1px;
                width: 305px;
                height: 305.99px;
            }
            #BOX307 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top right;
                background-repeat: no-repeat;
            }
            #BOX308 {
                top: 31.1016px;
                left: 33px;
                width: 237.986px;
                height: 238.75px;
            }
            #HEADLINE309 {
                top: 19.0623px;
                left: 21px;
                padding: 0px;
                width: 206px;
                height: 22.0625px;
            }
            #HEADLINE309 > .widget-content {
                font-size: 18px;
                text-align: center;
                line-height: 34px;
            }
            #LINE310 {
                top: 41.1344px;
                left: 46px;
                width: 156px;
                height: 25.0781px;
            }
            #HEADLINE311 {
                top: 59.1979px;
                left: 21.9896px;
                padding: 0px;
                width: 195px;
                height: 168.889px;
            }
            #HEADLINE311 > .widget-content {
                font-size: 16px;
                text-align: center;
                line-height: 20px;
            }
            #BOX302 {
                top: 0px;
                left: 1px;
                width: 305px;
                height: 305.99px;
            }
            #BOX302 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top right;
                background-repeat: no-repeat;
            }
            #BOX303 {
                top: 31.1016px;
                left: 38px;
                width: 245px;
                height: 238.766px;
            }
            #HEADLINE304 {
                top: 18.059px;
                left: 30px;
                padding: 0px;
                width: 175px;
                height: 22.0625px;
            }
            #HEADLINE304 > .widget-content {
                font-size: 18px;
                text-align: center;
                line-height: 34px;
            }
            #LINE305 {
                top: 40.1311px;
                left: 60px;
                width: 116px;
                height: 25.0781px;
            }
            #HEADLINE306 {
                top: 65.2131px;
                left: 14px;
                padding: 0px;
                width: 217px;
                height: 160px;
            }
            #HEADLINE306 > .widget-content {
                font-size: 14px;
                text-align: left;
                line-height: 20px;
            }
            #BOX297 {
                top: 0px;
                left: 1px;
                width: 305px;
                height: 305.99px;
            }
            #BOX297 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/biscuit-2871233_960_720-1513688337.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #BOX298 {
                display: none!important;
                top: 31.1016px;
                left: 41px;
                width: 237.986px;
                height: 238.75px;
            }
            #HEADLINE299 {
                top: 20.0656px;
                left: 30px;
                padding: 0px;
                width: 175px;
                height: 26.0781px;
            }
            #HEADLINE299 > .widget-content {
                font-size: 20px;
                text-align: center;
                line-height: 34px;
            }
            #LINE300 {
                top: 42.1377px;
                left: 54px;
                width: 120px;
                height: 25.0781px;
            }
            #HEADLINE301 {
                top: 80.2083px;
                left: 16.3889px;
                padding: 0px;
                width: 201.111px;
                height: 133.333px;
            }
            #HEADLINE301 > .widget-content {
                font-size: 17px;
                text-align: center;
                line-height: 20px;
            }
            #GROUP629 {
                top: 9.375px;
                left: 18.8611px;
                width: 356.875px;
                height: 162.734375px;
            }
            #GROUP622 {
                display: none!important;
                top: 111.70140075683594px;
                left: 1px;
                width: 355.0000305175781px;
                height: 119.63542175292969px;
            }
            #BOX340 {
                display: block!important;
                top: 0px;
                left: 1px;
                width: 355px;
                height: 119.635px;
            }
            #GROUP627 {
                display: none!important;
                top: 262.9340362548828px;
                left: 1px;
                width: 154.72222900390625px;
                height: 81.63195037841797px;
            }
            #IMAGE625 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s200x100/5a28c4f8c3f6592b3acabec8/00-00-chuong-noel-1513763052.png);
            }
            #IMAGE625 {
                top: 0px;
                left: 1px;
                width: 154.734px;
                height: 81.6406px;
            }
            #IMAGE624 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s200x200/5a28c4f8c3f6592b3acabec8/b-1513761977.png);
            }
            #IMAGE624 {
                display: none!important;
                top: 0px;
                left: 49.628448486328125px;
                width: 114.547px;
                height: 109.859px;
            }
            #GROUP338 {
                top: 0px;
                left: 1px;
                width: 356.875px;
                height: 162.734375px;
            }
            #HEADLINE334 {
                top: 122.743px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #HEADLINE334 > .widget-content {
                font-size: 14px;
                text-align: center;
                line-height: 20px;
            }
            #HEADLINE295 {
                top: 0px;
                left: 2.875px;
                padding: 0px;
                width: 355px;
                height: 66.65625px;
            }
            #HEADLINE295 > .widget-content {
                font-size: 31px;
                text-align: center;
                line-height: 34px;
            }
            #HEADLINE294 {
                top: 76.6319px;
                left: 2.875px;
                padding: 0px;
                width: 355px;
                height: 60px;
            }
            #HEADLINE294 > .widget-content {
                font-size: 14px;
                text-align: center;
                line-height: 20px;
            }
            #GROUP630 {
                display: none!important;
                top: 168.014px;
                left: 10px;
                width: 355px;
                height: 106.66667175292969px;
            }
            #LINE345 {
                top: 71.9792px;
                left: 1.52588e-05px;
                width: 355px;
                height: 25px;
            }
            #HEADLINE335 {
                top: 0px;
                left: 1.52588e-05px;
                padding: 0px;
                width: 355px;
                height: 106.667px;
            }
            #HEADLINE335 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE632 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 110px;
            }
            #HEADLINE632 > .widget-content {
                font-size: 27px;
                text-align: center;
            }
            #HEADLINE635 {
                top: 140px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE635 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE652 {
                top: 595.035px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 60px;
            }
            #HEADLINE652 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE669 {
                top: 1281.46px;
                left: 10.4861px;
                padding: 0px;
                width: 355px;
                height: 60px;
            }
            #HEADLINE669 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #GROUP796 {
                top: 180px;
                left: 26.4479px;
                width: 321.953125px;
                height: 191.796875px;
            }
            #BUTTON780 {
                top: 147.917px;
                left: 175.983px;
                padding: 0px;
                width: 110px;
                height: 40px;
            }
            #BUTTON780 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #HEADLINE641 {
                top: 8.54167px;
                left: 110.566px;
                padding: 0px;
                width: 110px;
                height: 40.796875px;
            }
            #HEADLINE641 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #GROUP642 {
                top: 36.0417px;
                left: 13.7083px;
                width: 295.09375px;
                height: 60.421875px;
            }
            #HEADLINE639 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 295.09375px;
                height: 45.984375px;
            }
            #HEADLINE639 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BOX636 {
                top: 0px;
                left: 1px;
                width: 321.953125px;
                height: 191.796875px;
            }
            #BUTTON638 {
                top: 144.969px;
                left: 47px;
                padding: 0px;
                width: 110px;
                height: 40px;
            }
            #BUTTON638 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP929 {
                top: 87.9861px;
                left: 30.7361px;
                width: 284.3125px;
                height: 45.75px;
            }
            #HEADLINE930 {
                top: 17.9861px;
                left: 152.007px;
                padding: 0px;
                width: 133.328125px;
                height: 27.765625px;
            }
            #HEADLINE930 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE931 {
                top: 0px;
                left: 154.003px;
                padding: 0px;
                width: 78.21875px;
                height: 15.546875px;
            }
            #HEADLINE931 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX932 {
                top: 2.98611px;
                left: 1px;
                width: 138.984375px;
                height: 38.984375px;
            }
            #HEADLINE933 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.875px;
                height: 21.109375px;
            }
            #HEADLINE933 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE904 {
                top: 1612.03px;
                left: 133.507px;
                padding: 0px;
                width: 242px;
                height: 146.65625px;
            }
            #HEADLINE904 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #GROUP917 {
                top: 1758.63px;
                left: 12.3854px;
                width: 355.984375px;
                height: 208.15625px;
            }
            #GROUP915 {
                top: 100px;
                left: 1px;
                width: 355px;
                height: 51px;
            }
            #BOX913 {
                top: 0px;
                left: 1px;
                width: 355px;
                height: 51px;
            }
            #HEADLINE914 {
                top: 6.00693px;
                left: 11.382px;
                padding: 0px;
                width: 222.21875px;
                height: 32.21875px;
            }
            #HEADLINE914 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #BUTTON910 {
                top: 168.16px;
                left: 119.941px;
                padding: 0px;
                width: 131px;
                height: 40px;
            }
            #BUTTON910 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #FORM905 {
                top: 0px;
                left: 1.98959px;
                width: 355px;
                height: 70px;
            }
            #FORM905 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM912 {
                top: 20px;
                left: 0px;
                width: 355px;
                height: 40px;
            }
            #ITEM_FORM912 > .widget-content {
                font-size: 17px;
            }
            #IMAGE919 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s200x200/5a28c4f8c3f6592b3acabec8/mau-ong-gia-noel-dep-an-tuong-34-1513854103.png);
            }
            #IMAGE919 {
                display: none!important;
                top: -0.694468px;
                left: 110.211px;
                width: 154.578125px;
                height: 113.95833587646484px;
            }
            #IMAGE920 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s200x200/5a28c4f8c3f6592b3acabec8/mau-ong-gia-noel-dep-an-tuong-34-1513854103.png);
            }
            #IMAGE920 {
                top: 1591px;
                left: -16.007px;
                width: 167px;
                height: 167px;
            }
            #GROUP979 {
                top: 392.778px;
                left: 20.9618px;
                width: 341.25px;
                height: 191.796875px;
            }
            #BOX964 {
                top: 90.625px;
                left: 39.5243px;
                width: 138.984375px;
                height: 38.984375px;
            }
            #HEADLINE965 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.875px;
                height: 21.109375px;
            }
            #HEADLINE965 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP961 {
                top: 86.1806px;
                left: 37.6493px;
                width: 284.328125px;
                height: 45.734375px;
            }
            #HEADLINE962 {
                top: 17.9688px;
                left: 152.007px;
                padding: 0px;
                width: 133.328125px;
                height: 27.765625px;
            }
            #HEADLINE962 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE963 {
                top: 0px;
                left: 154.003px;
                padding: 0px;
                width: 78.21875px;
                height: 15.546875px;
            }
            #HEADLINE963 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX645 {
                top: 0px;
                left: 1px;
                width: 321.96875px;
                height: 191.796875px;
            }
            #HEADLINE647 {
                top: 9px;
                left: 109px;
                padding: 0px;
                width: 110px;
                height: 30px;
            }
            #HEADLINE647 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BUTTON646 {
                top: 138.993px;
                left: 49.9965px;
                padding: 0px;
                width: 110px;
                height: 42px;
            }
            #BUTTON646 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BUTTON781 {
                top: 146.111px;
                left: 178.941px;
                padding: 0px;
                width: 110px;
                height: 38px;
            }
            #BUTTON781 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP651 {
                top: 40.4167px;
                left: 12.9965px;
                width: 311.984375px;
                height: 45.984375px;
            }
            #HEADLINE644 {
                top: 0px;
                left: -15px;
                padding: 0px;
                width: 311.984375px;
                height: 44.4375px;
            }
            #HEADLINE644 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP797 {
                top: 0px;
                left: 8.36111px;
                width: 333.875px;
                height: 191.796875px;
            }
            #GROUP980 {
                top: 655.868px;
                left: 26.309px;
                width: 327.9375px;
                height: 188.75px;
            }
            #BOX959 {
                top: 94.8785px;
                left: 46.4861px;
                width: 138.984375px;
                height: 38.984375px;
            }
            #HEADLINE960 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.875px;
                height: 21.109375px;
            }
            #HEADLINE960 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP956 {
                top: 91.007px;
                left: 44.6111px;
                width: 284.328125px;
                height: 45.734375px;
            }
            #HEADLINE957 {
                top: 17.9688px;
                left: 152.007px;
                padding: 0px;
                width: 133.328125px;
                height: 27.765625px;
            }
            #HEADLINE957 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE958 {
                top: 0px;
                left: 154.003px;
                padding: 0px;
                width: 78.21875px;
                height: 15.546875px;
            }
            #HEADLINE958 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX655 {
                top: 0px;
                left: 1px;
                width: 321.984375px;
                height: 188.75px;
            }
            #HEADLINE657 {
                top: 9px;
                left: 109px;
                padding: 0px;
                width: 110px;
                height: 30px;
            }
            #HEADLINE657 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE654 {
                top: 38.9931px;
                left: 8.99306px;
                padding: 0px;
                width: 311.109375px;
                height: 44.4375px;
            }
            #HEADLINE654 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP799 {
                top: 144.427px;
                left: 37.0938px;
                width: 233.921875px;
                height: 40px;
            }
            #BUTTON656 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 110px;
                height: 40px;
            }
            #BUTTON656 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BUTTON788 {
                top: 0px;
                left: 124.924px;
                padding: 0px;
                width: 110px;
                height: 40px;
            }
            #BUTTON788 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP981 {
                top: 851.424px;
                left: 29.243px;
                width: 321.984375px;
                height: 218.59375px;
            }
            #BOX954 {
                top: 107.917px;
                left: 30.9653px;
                width: 138.984375px;
                height: 38.984375px;
            }
            #HEADLINE955 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.875px;
                height: 21.109375px;
            }
            #HEADLINE955 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP951 {
                top: 104.948px;
                left: 29.9931px;
                width: 284.328125px;
                height: 45.734375px;
            }
            #HEADLINE952 {
                top: 17.9688px;
                left: 152.007px;
                padding: 0px;
                width: 133.328125px;
                height: 27.765625px;
            }
            #HEADLINE952 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE953 {
                top: 0px;
                left: 154.003px;
                padding: 0px;
                width: 78.21875px;
                height: 15.546875px;
            }
            #HEADLINE953 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX665 {
                top: 0px;
                left: 1px;
                width: 321.984375px;
                height: 218.59375px;
            }
            #HEADLINE667 {
                top: 9px;
                left: 109px;
                padding: 0px;
                width: 110px;
                height: 30px;
            }
            #HEADLINE667 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE668 {
                top: 38.9931px;
                left: 8.99307px;
                padding: 0px;
                width: 310.984375px;
                height: 65.984375px;
            }
            #HEADLINE668 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BUTTON666 {
                top: 170px;
                left: 59.9861px;
                padding: 0px;
                width: 110px;
                height: 40px;
            }
            #BUTTON666 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BUTTON790 {
                top: 168.594px;
                left: 182.931px;
                padding: 0px;
                width: 110px;
                height: 40px;
            }
            #BUTTON790 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP982 {
                top: 1082.47px;
                left: 34.4445px;
                width: 323.3125px;
                height: 188.75px;
            }
            #BOX969 {
                top: 93.7674px;
                left: 40.9653px;
                width: 138.984375px;
                height: 38.984375px;
            }
            #HEADLINE970 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.875px;
                height: 21.109375px;
            }
            #HEADLINE970 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP966 {
                top: 90.8159px;
                left: 39.9757px;
                width: 284.328125px;
                height: 45.734375px;
            }
            #HEADLINE967 {
                top: 17.9688px;
                left: 152.007px;
                padding: 0px;
                width: 133.328125px;
                height: 27.765625px;
            }
            #HEADLINE967 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE968 {
                top: 0px;
                left: 154.003px;
                padding: 0px;
                width: 78.21875px;
                height: 15.546875px;
            }
            #HEADLINE968 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX660 {
                top: 0px;
                left: 1px;
                width: 321.96875px;
                height: 188.75px;
            }
            #HEADLINE662 {
                top: 9px;
                left: 109px;
                padding: 0px;
                width: 110px;
                height: 30px;
            }
            #HEADLINE662 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE663 {
                top: 38.9931px;
                left: 8.99307px;
                padding: 0px;
                width: 310.984375px;
                height: 45.984375px;
            }
            #HEADLINE663 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #BUTTON661 {
                top: 146.042px;
                left: 49.9618px;
                padding: 0px;
                width: 110px;
                height: 40px;
            }
            #BUTTON661 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BUTTON789 {
                top: 146.042px;
                left: 175.955px;
                padding: 0px;
                width: 110px;
                height: 40px;
            }
            #BUTTON789 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #GROUP983 {
                top: 1350.94px;
                left: 9.27777px;
                width: 355px;
                height: 240px;
            }
            #BOX974 {
                top: 127.743px;
                left: 40.0104px;
                width: 138.984375px;
                height: 38.984375px;
            }
            #HEADLINE975 {
                top: 8px;
                left: 18px;
                padding: 0px;
                width: 108.875px;
                height: 21.109375px;
            }
            #HEADLINE975 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP971 {
                top: 125.99px;
                left: 195.288px;
                width: 133.328125px;
                height: 45.734375px;
            }
            #HEADLINE972 {
                top: 17.9688px;
                left: 1px;
                padding: 0px;
                width: 133.328125px;
                height: 27.765625px;
            }
            #HEADLINE972 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE973 {
                top: 0px;
                left: 2.99652px;
                padding: 0px;
                width: 78.21875px;
                height: 15.546875px;
            }
            #HEADLINE973 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX670 {
                top: 0px;
                left: 1px;
                width: 355px;
                height: 240px;
            }
            #HEADLINE672 {
                top: 13px;
                left: 122.951px;
                padding: 0px;
                width: 110px;
                height: 30px;
            }
            #HEADLINE672 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE673 {
                top: 43.0035px;
                left: -0.0868225px;
                padding: 0px;
                width: 355px;
                height: 70px;
            }
            #HEADLINE673 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BUTTON793 {
                top: 190.017px;
                left: 206.5px;
                padding: 0px;
                width: 110px;
                height: 40px;
            }
            #BUTTON793 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BUTTON671 {
                top: 188.017px;
                left: 76.5px;
                padding: 0px;
                width: 110px;
                height: 40px;
            }
            #BUTTON671 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #LINEVERTICAL743 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #HEADLINE748 {
                top: 12.1389px;
                left: 14.0449px;
                padding: 0px;
                width: 348.056px;
                height: 30px;
            }
            #HEADLINE748 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP746 {
                top: 354.219px;
                left: 25.3299px;
                width: 330.295px;
                height: 135px;
            }
            #LISTOP746 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP746 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP746 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP746 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE749 {
                top: 248.097px;
                left: 18.5139px;
                padding: 0px;
                width: 337.049px;
                height: 90px;
            }
            #HEADLINE749 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX741 {
                display: none!important;
                top: -2.8333px;
                left: 10.4965px;
                width: 355px;
                height: 75px;
            }
            #LISTOP747 {
                top: 59.0358px;
                left: 20.0434px;
                width: 342.066px;
                height: 190px;
            }
            #LISTOP747 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP747 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP747 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP747 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX730 {
                display: none!important;
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #LISTOP735 {
                top: 108.785px;
                left: 25.1672px;
                width: 274.492px;
                height: 125px;
            }
            #LISTOP735 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP735 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP735 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP735 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE737 {
                top: 233.247px;
                left: 8.14231px;
                padding: 0px;
                width: 337.778px;
                height: 30px;
            }
            #HEADLINE737 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP736 {
                top: 277.941px;
                left: 26.5104px;
                width: 274.492px;
                height: 265px;
            }
            #LISTOP736 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP736 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP736 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP736 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE738 {
                top: 9.30559px;
                left: 7.63889px;
                padding: 0px;
                width: 355px;
                height: 90px;
            }
            #HEADLINE738 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINEVERTICAL732 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #BOX720 {
                display: none!important;
                top: 320px;
                left: 32px;
                width: 354.01043701171875px;
                height: 99.01042175292969px;
            }
            #LISTOP725 {
                top: 447.535px;
                left: 24.9301px;
                width: 256.962px;
                height: 100px;
            }
            #LISTOP725 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP725 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP725 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP725 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LISTOP726 {
                top: 40.7469px;
                left: 13.6979px;
                width: 342.5px;
                height: 295px;
            }
            #LISTOP726 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP726 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP726 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP726 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE727 {
                top: 10.9722px;
                left: 21.6145px;
                padding: 0px;
                width: 324.653px;
                height: 30px;
            }
            #HEADLINE727 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINEVERTICAL722 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #HEADLINE728 {
                top: 312.097px;
                left: 18.0208px;
                padding: 0px;
                width: 355px;
                height: 90px;
            }
            #HEADLINE728 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX709 {
                display: none!important;
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #LISTOP714 {
                top: 170.75px;
                left: 87.5px;
                width: 200px;
                height: 55px;
            }
            #LISTOP714 > .widget-content {
                text-align: left;
            }
            #LISTOP714 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP714 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP714 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LISTOP715 {
                top: 377.153px;
                left: 13.3334px;
                width: 342.5px;
                height: 160px;
            }
            #LISTOP715 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP715 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP715 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP715 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE718 {
                top: 315.921px;
                left: 23.5073px;
                padding: 0px;
                width: 333.333px;
                height: 70px;
            }
            #HEADLINE718 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #LINEVERTICAL711 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #LISTOP716 {
                top: 89.743px;
                left: 14.2708px;
                width: 342.5px;
                height: 225px;
            }
            #LISTOP716 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP716 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP716 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP716 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE717 {
                top: 15.8924px;
                left: 20.9689px;
                padding: 0px;
                width: 333.965px;
                height: 70px;
            }
            #HEADLINE717 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX698 {
                display: none!important;
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #HEADLINE705 {
                display: none!important;
                top: 50.5729px;
                left: 75.5px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE705 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP703 {
                top: 67.9688px;
                left: 20.5729px;
                width: 355px;
                height: 320px;
            }
            #LISTOP703 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP703 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP703 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP703 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE707 {
                top: 14.0104px;
                left: 10.0694px;
                padding: 0px;
                width: 351.25px;
                height: 60px;
            }
            #HEADLINE707 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE706 {
                top: 387.448px;
                left: 18.4893px;
                padding: 0px;
                width: 351.992px;
                height: 30px;
            }
            #HEADLINE706 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP704 {
                top: 414.879px;
                left: 0.920137px;
                width: 360.087px;
                height: 190px;
            }
            #LISTOP704 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP704 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP704 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP704 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LINEVERTICAL700 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #BOX686 {
                display: none!important;
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #HEADLINE694 {
                top: 315.486px;
                left: 26.4929px;
                padding: 0px;
                width: 300.488px;
                height: 60px;
            }
            #HEADLINE694 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #LISTOP693 {
                top: 379.483px;
                left: 6.49304px;
                width: 355px;
                height: 320px;
            }
            #LISTOP693 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP693 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP693 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP693 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LINEVERTICAL688 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #LISTOP695 {
                top: 71.128px;
                left: 18.0208px;
                width: 355px;
                height: 245px;
            }
            #LISTOP695 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP695 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
            }
            #LISTOP695 > ol.widget-content li {
                margin-bottom: 5px;
            }
            #LISTOP695 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE696 {
                top: 10.2465px;
                left: 39.0625px;
                padding: 0px;
                width: 300px;
                height: 60px;
            }
            #HEADLINE696 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE493 {
                display: none!important;
                top: 90px;
                left: 9.99998px;
                padding: 0px;
                width: 355.0000305175781px;
                height: 71.11111450195312px;
            }
            #HEADLINE493 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #GROUP526 {
                display: none!important;
                top: 346.0763931274414px;
                left: 7.87152099609375px;
                width: 356.0243225097656px;
                height: 818.9583511352539px;
            }
            #BOX466 {
                top: 241.667px;
                left: 2.02429px;
                width: 355px;
                height: 280.625px;
            }
            #HEADLINE469 {
                top: 20px;
                left: 117.231px;
                padding: 0px;
                width: 120.538px;
                height: 27.7778px;
            }
            #HEADLINE469 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #GROUP482 {
                top: 583.958px;
                left: 1px;
                width: 355px;
                height: 235px;
            }
            #LISTOP468 {
                top: 0px;
                left: 1px;
                width: 355px;
                height: 235px;
            }
            #LISTOP468 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP468 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 8px;
            }
            #LISTOP468 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP468 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #GROUP523 {
                top: 532.292px;
                left: 55.0451px;
                width: 248.958px;
                height: 21.6667px;
            }
            #HEADLINE467 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 248.958px;
                height: 21.6667px;
            }
            #HEADLINE467 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #GROUP464 {
                top: 0px;
                left: 77.25px;
                width: 204.531px;
                height: 231.667px;
            }
            #BOX465 {
                top: 20px;
                left: 0px;
                width: 204.531px;
                height: 201.667px;
            }
            #BOX465 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/gv-1513754924.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/gv-1513754924.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/gv-1513754924.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/gv-1513754924.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/gv-1513754924.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #GROUP579 {
                display: none!important;
                top: 112.563px;
                left: 7.0278px;
                width: 355.0000305175781px;
                height: 758.2118682861328px;
            }
            #BOX453 {
                top: 210px;
                left: 1px;
                width: 355px;
                height: 288.212px;
            }
            #HEADLINE461 {
                top: 60px;
                left: 126.207px;
                padding: 0px;
                width: 102.587px;
                height: 26.6667px;
            }
            #HEADLINE461 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE454 {
                top: 20px;
                left: 18.0816px;
                padding: 0px;
                width: 318.837px;
                height: 30px;
            }
            #HEADLINE454 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #GROUP486 {
                top: 508.212px;
                left: 1px;
                width: 355px;
                height: 250px;
            }
            #LISTOP455 {
                top: 20px;
                left: 0px;
                width: 355px;
                height: 220px;
            }
            #LISTOP455 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP455 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(27, 94, 32, 1);
                margin-right: 8px;
            }
            #LISTOP455 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP455 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX495 {
                top: 0px;
                left: 74.2465px;
                width: 208.49px;
                height: 200px;
            }
            #BOX495 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #GROUP525 {
                display: none!important;
                top: 1195.0347595214844px;
                left: 12.732635498046875px;
                width: 349.47918701171875px;
                height: 508.1944580078125px;
            }
            #GROUP522 {
                top: 224.601px;
                left: 11.8333px;
                width: 292.413px;
                height: 41.9965px;
            }
            #HEADLINE463 {
                top: 0.976563px;
                left: 1px;
                padding: 0px;
                width: 120.486px;
                height: 28.75px;
            }
            #HEADLINE463 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #HEADLINE458 {
                top: 0px;
                left: 103.422px;
                padding: 0px;
                width: 190px;
                height: 31.9965px;
            }
            #HEADLINE458 > .widget-content {
                font-size: 26px;
                text-align: left;
            }
            #BOX457 {
                top: 220px;
                left: 1px;
                width: 349.479px;
                height: 288.194px;
            }
            #LISTOP459 {
                top: 285.191px;
                left: 19.0035px;
                width: 315.486px;
                height: 145px;
            }
            #LISTOP459 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP459 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 8px;
            }
            #LISTOP459 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP459 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX496 {
                top: 0px;
                left: 79.3333px;
                width: 206.476px;
                height: 200px;
            }
            #BOX496 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/IMG_2388-1513771036.JPG");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/IMG_2388-1513771036.JPG");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/IMG_2388-1513771036.JPG");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/IMG_2388-1513771036.JPG");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/IMG_2388-1513771036.JPG");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE489 {
                display: none!important;
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355.0000305175781px;
                height: 60.000003814697266px;
            }
            #HEADLINE489 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #IMAGE835 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/nhung-bai-hat-giang-sinh-bang-tieng-viet-hay-nhat-moi-thoi-dai-5-1513848663.gif);
            }
            #IMAGE835 {
                top: 2552.42px;
                left: -422px;
                width: 355px;
                height: 248.09375px;
            }
            #BOX491 {
                display: none!important;
                top: 265.104px;
                left: 68.0035px;
                width: 238.99307250976562px;
                height: 50.989585876464844px;
            }
            #HEADLINE492 {
                top: 10px;
                left: 18px;
                padding: 0px;
                width: 222.986px;
                height: 32.9861px;
            }
            #HEADLINE492 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #SHAPE490 {
                display: none!important;
                top: 171.111px;
                left: 144.002px;
                width: 86.99652862548828px;
                height: 83.99305725097656px;
            }
            #GROUP590 {
                display: none!important;
                top: 895.4167175292969px;
                left: 8.982635498046875px;
                width: 355.0000305175781px;
                height: 733.4375762939453px;
            }
            #GROUP542 {
                top: 491.424px;
                left: 8.91666px;
                width: 339.149px;
                height: 41.9965px;
            }
            #HEADLINE543 {
                top: 0.996094px;
                left: 1px;
                padding: 0px;
                width: 120px;
                height: 28.75px;
            }
            #HEADLINE543 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #HEADLINE544 {
                top: 0px;
                left: 82.3086px;
                padding: 0px;
                width: 257.847px;
                height: 31.9965px;
            }
            #HEADLINE544 > .widget-content {
                font-size: 26px;
                text-align: left;
            }
            #BOX547 {
                top: 0px;
                left: 74.2465px;
                width: 208.49px;
                height: 198.819px;
            }
            #BOX547 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Capture2-1513755415.JPG");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Capture2-1513755415.JPG");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Capture2-1513755415.JPG");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Capture2-1513755415.JPG");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Capture2-1513755415.JPG");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #LISTOP546 {
                top: 543.438px;
                left: 1px;
                width: 355px;
                height: 190px;
            }
            #LISTOP546 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP546 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 8px;
            }
            #LISTOP546 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP546 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX545 {
                top: 208.819px;
                left: 1px;
                width: 355px;
                height: 272.622px;
            }
            #GROUP598 {
                display: none!important;
                top: 354.1666965484619px;
                left: 5.37152099609375px;
                width: 364.1319580078125px;
                height: 501.26740074157715px;
            }
            #GROUP601 {
                top: 257.986px;
                left: 15.0104px;
                width: 342.309px;
                height: 230px;
            }
            #LISTOP602 {
                top: 20px;
                left: 0px;
                width: 342.309px;
                height: 200px;
            }
            #LISTOP602 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP602 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 8px;
            }
            #LISTOP602 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP602 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX603 {
                top: 211.91px;
                left: 1px;
                width: 364.132px;
                height: 289.358px;
            }
            #HEADLINE604 {
                top: 8.99609px;
                left: 81.8438px;
                padding: 0px;
                width: 66.4757px;
                height: 27.5px;
            }
            #HEADLINE604 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #GROUP606 {
                top: 0px;
                left: 86.6944px;
                width: 204.549px;
                height: 201.667px;
            }
            #BOX607 {
                top: 0px;
                left: 1px;
                width: 204.549px;
                height: 201.667px;
            }
            #BOX607 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/22195306_10210441347331807_6105258034518766275_n-1513757479.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/22195306_10210441347331807_6105258034518766275_n-1513757479.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/22195306_10210441347331807_6105258034518766275_n-1513757479.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/22195306_10210441347331807_6105258034518766275_n-1513757479.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/22195306_10210441347331807_6105258034518766275_n-1513757479.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE600 {
                top: 220.625px;
                left: 138.396px;
                padding: 0px;
                width: 176.476px;
                height: 30px;
            }
            #HEADLINE600 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #GROUP609 {
                display: none!important;
                top: 217.9861297607422px;
                left: 22.3680419921875px;
                width: 327.013916015625px;
                height: 83.99305725097656px;
            }
            #BOX538 {
                top: 14.9132px;
                left: 89.0208px;
                width: 238.993px;
                height: 50.9896px;
            }
            #HEADLINE539 {
                top: 8.58333px;
                left: 29.3333px;
                padding: 0px;
                width: 199.34px;
                height: 31.9965px;
            }
            #HEADLINE539 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #GROUP557 {
                top: 0px;
                left: 1px;
                width: 86.9965px;
                height: 83.9931px;
            }
            #SHAPE537 {
                top: 0px;
                left: 1px;
                width: 86.9965px;
                height: 83.9931px;
            }
            #GROUP611 {
                display: none!important;
                top: 113.97569274902344px;
                left: 23.49652099609375px;
                width: 327.98614501953125px;
                height: 83.99305725097656px;
            }
            #SHAPE595 {
                top: 0px;
                left: 1px;
                width: 86.9965px;
                height: 83.9931px;
            }
            #BOX594 {
                top: 16.6667px;
                left: 89.9931px;
                width: 238.993px;
                height: 50.9896px;
            }
            #HEADLINE596 {
                top: 6.47917px;
                left: 25.9792px;
                padding: 0px;
                width: 191.476px;
                height: 31.9965px;
            }
            #HEADLINE596 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #GROUP679 {
                display: none!important;
                top: 20.000015258789062px;
                left: 24.97222900390625px;
                width: 325.01739501953125px;
                height: 113.99305725097656px;
            }
            #BOX680 {
                top: 15.5208px;
                left: 87.0243px;
                width: 238.993px;
                height: 50.9896px;
            }
            #GROUP682 {
                top: 0px;
                left: 1px;
                width: 86.9792px;
                height: 113.993px;
            }
            #SHAPE683 {
                top: 20px;
                left: 0px;
                width: 86.9792px;
                height: 83.9931px;
            }
            #HEADLINE681 {
                display: none!important;
                top: 311.945px;
                left: 88.125px;
                padding: 0px;
                width: 198.75001525878906px;
                height: 32.222225189208984px;
            }
            #HEADLINE681 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #GROUP832 {
                display: none!important;
                top: 1668.8542404174805px;
                left: 8.982635498046875px;
                width: 355.0000305175781px;
                height: 765.7812728881836px;
            }
            #GROUP551 {
                top: 550.781px;
                left: 7.94443px;
                width: 341.094px;
                height: 215px;
            }
            #LISTOP552 {
                top: 0px;
                left: 1px;
                width: 341.094px;
                height: 215px;
            }
            #LISTOP552 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP552 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 8px;
            }
            #LISTOP552 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP552 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #GROUP553 {
                top: 509.809px;
                left: 31.5035px;
                width: 293.993px;
                height: 30.9896px;
            }
            #HEADLINE554 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 293.993px;
                height: 30.9896px;
            }
            #HEADLINE554 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #BOX549 {
                top: 207.917px;
                left: 1px;
                width: 355px;
                height: 291.892px;
            }
            #HEADLINE550 {
                top: 20px;
                left: 63.4202px;
                padding: 0px;
                width: 228.16px;
                height: 27.7778px;
            }
            #HEADLINE550 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #GROUP811 {
                top: 0px;
                left: 74.368px;
                width: 208.264px;
                height: 197.917px;
            }
            #GROUP555 {
                top: 0px;
                left: 1px;
                width: 208.264px;
                height: 197.917px;
            }
            #BOX556 {
                top: 0px;
                left: 1px;
                width: 208.264px;
                height: 197.917px;
            }
            #BOX556 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/TrangNT_anh1-1513771191.gif");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/TrangNT_anh1-1513771191.gif");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/TrangNT_anh1-1513771191.gif");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/TrangNT_anh1-1513771191.gif");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/TrangNT_anh1-1513771191.gif");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE760 {
                top: 13px;
                left: 10.4861px;
                padding: 0px;
                width: 355px;
                height: 73.328125px;
            }
            #HEADLINE760 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #FORM761 {
                top: 802.101px;
                left: 37.5px;
                width: 300px;
                height: 268.25px;
            }
            #ITEM_FORM762 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 49.625px;
            }
            #ITEM_FORM763 {
                top: 59.6354px;
                left: 0px;
                width: 300px;
                height: 49.625px;
            }
            #ITEM_FORM764 {
                top: 119.271px;
                left: 0px;
                width: 300px;
                height: 48.984375px;
            }
            #ITEM_FORM805 {
                top: 178.264px;
                left: 0px;
                width: 300px;
                height: 40px;
            }
            #ITEM_FORM976 {
                top: 228.264px;
                left: 0px;
                width: 300px;
                height: 40px;
            }
            #BUTTON765 {
                top: 1123.12px;
                left: 10.2778px;
                padding: 0px;
                width: 354px;
                height: 51px;
            }
            #BUTTON765 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #GROUP766 {
                top: 716.128px;
                left: 42.5px;
                width: 290px;
                height: 55.984375px;
            }
            #GROUP767 {
                top: 0px;
                left: 5.98261px;
                width: 276.96875px;
                height: 65.96875px;
            }
            #BOX768 {
                top: 0.989563px;
                left: 1px;
                width: 55px;
                height: 55px;
            }
            #HEADLINE769 {
                top: 35px;
                left: 3px;
                padding: 0px;
                width: 45.984375px;
                height: 16.984375px;
            }
            #HEADLINE769 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX770 {
                top: 0px;
                left: 75.0104px;
                width: 55px;
                height: 55px;
            }
            #HEADLINE771 {
                top: 35px;
                left: 3px;
                padding: 0px;
                width: 45.984375px;
                height: 16.984375px;
            }
            #HEADLINE771 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX772 {
                top: 0px;
                left: 147.997px;
                width: 55px;
                height: 55px;
            }
            #HEADLINE773 {
                top: 35px;
                left: 3px;
                padding: 0px;
                width: 45.984375px;
                height: 16.984375px;
            }
            #HEADLINE773 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX774 {
                top: 0px;
                left: 222.997px;
                width: 55px;
                height: 55px;
            }
            #HEADLINE775 {
                top: 35px;
                left: 3px;
                padding: 0px;
                width: 45.984375px;
                height: 16.984375px;
            }
            #HEADLINE775 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #COUNTDOWN776 {
                top: 5.98956px;
                left: 1px;
                width: 290px;
                height: 25.984375px;
            }
            #COUNTDOWN776 > .widget-content {
                font-size: 30px;
            }
            #HEADLINE800 {
                top: 87.083px;
                left: 10.9722px;
                padding: 0px;
                width: 355px;
                height: 76.65625px;
            }
            #HEADLINE800 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #HEADLINE758 {
                top: 672.795px;
                left: 49.5052px;
                padding: 0px;
                width: 275.984375px;
                height: 33.328125px;
            }
            #HEADLINE758 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP921 {
                top: 202.326px;
                left: 33.3402px;
                width: 310px;
                height: 447.234375px;
            }
            #BOX751 {
                top: 0px;
                left: 1px;
                width: 310px;
                height: 447.234375px;
            }
            #LINE755 {
                top: 180.447px;
                left: 5px;
                width: 305px;
                height: 32.421875px;
            }
            #HEADLINE754 {
                top: 12.0127px;
                left: 25.9896px;
                padding: 0px;
                width: 257.765625px;
                height: 46.125px;
            }
            #HEADLINE754 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #PARAGRAPH803 {
                top: 128.827px;
                left: 24.9827px;
                padding: 0px;
                width: 264.4375px;
                height: 54.78125px;
            }
            #PARAGRAPH803 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #GROUP808 {
                top: 74.6007px;
                left: 22.7188px;
                width: 271.734375px;
                height: 232.78125px;
            }
            #HEADLINE804 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 257.765625px;
                height: 59.96875px;
            }
            #HEADLINE804 > .widget-content {
                font-size: 43px;
                text-align: center;
            }
            #PARAGRAPH757 {
                top: 150.608px;
                left: 8.29166px;
                padding: 0px;
                width: 264.4375px;
                height: 82.1875px;
            }
            #PARAGRAPH757 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #LINE977 {
                top: 1090.36px;
                left: 35px;
                width: 305px;
                height: 32.421875px;
            }
            #HEADLINE978 {
                top: 510.731px;
                left: 47.996px;
                padding: 0px;
                width: 301px;
                height: 100px;
            }
            #HEADLINE978 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP858 {
                top: 253.111px;
                left: 3.49645px;
                width: 372.34375px;
                height: 381px;
            }
            #GROUP857 {
                top: 206.944px;
                left: 1px;
                width: 372.34375px;
                height: 49.390625px;
            }
            #HEADLINE849 {
                top: 18.8715px;
                left: 63.6042px;
                padding: 0px;
                width: 309.734375px;
                height: 22.21875px;
            }
            #HEADLINE849 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #SHAPE848 {
                top: 0px;
                left: 1px;
                width: 49.953125px;
                height: 49.390625px;
            }
            #GROUP856 {
                top: 60px;
                left: 20.5486px;
                width: 315.859375px;
                height: 126.984375px;
            }
            #HEADLINE846 {
                top: 60.3299px;
                left: 1px;
                padding: 0px;
                width: 315.859375px;
                height: 66.65625px;
            }
            #HEADLINE846 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #SHAPE847 {
                top: 0px;
                left: 134.924px;
                width: 48px;
                height: 50.328125px;
            }
            #GROUP855 {
                top: 276.406px;
                left: 8.84723px;
                width: 339.25px;
                height: 49.59375px;
            }
            #SHAPE851 {
                top: 0px;
                left: 1px;
                width: 41px;
                height: 49.59375px;
            }
            #HEADLINE850 {
                top: 19.6007px;
                left: 61.3646px;
                padding: 0px;
                width: 278.875px;
                height: 22.21875px;
            }
            #HEADLINE850 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #GROUP854 {
                top: 336.007px;
                left: 12.3368px;
                width: 334.328125px;
                height: 45px;
            }
            #HEADLINE853 {
                top: 16.2326px;
                left: 55.4514px;
                padding: 0px;
                width: 278.875px;
                height: 22.21875px;
            }
            #HEADLINE853 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #SHAPE852 {
                top: 0px;
                left: 0px;
                width: 44.96875px;
                height: 45px;
            }
            #HEADLINE845 {
                top: 0px;
                left: 61.7292px;
                padding: 0px;
                width: 235.53125px;
                height: 30px;
            }
            #HEADLINE845 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
        }
    </style>
