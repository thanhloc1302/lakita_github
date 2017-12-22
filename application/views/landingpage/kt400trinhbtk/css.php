
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
            var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,700|Source+Sans+Pro:300,400,600,700|Pattaya|Montserrat:300,400,600,700&amp;subset=latin-ext,vietnamese';
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
            #SECTION212 {
                width: 100%;
                height: 733px;
            }
            #SECTION212 .container {}
            #SECTION212 {}
            #SECTION38 {
                width: 100%;
                height: 491.97918701171875px;
            }
            #SECTION38 .container {}
            #SECTION38 {}
            #SECTION86 {
                width: 100%;
                height: 770.43408203125px;
            }
            #SECTION86 .container {}
            #SECTION86 {}
            #POPUP456 {
                width: 100%;
                height: 100%;
            }
            #POPUP456 .container {
                width: 511.0069580078125px;
                height: 337.9861145019531px;
                top: calc(100%-337.9861145019531px);
            }
            #POPUP456 {}
            #SECTION300 {
                width: 100%;
                height: 686px;
            }
            #SECTION300 .container {}
            #SECTION300 {}
            #POPUP294 {
                width: 100%;
                height: 100%;
            }
            #POPUP294 .container {
                width: 511.0243225097656px;
                height: 337.9861145019531px;
                top: calc(100%-337.9861145019531px);
            }
            #POPUP294 {}
            #POPUP288 {
                width: 100%;
                height: 100%;
            }
            #POPUP288 .container {
                width: 510.0000305175781px;
                height: 337.9861145019531px;
                top: calc(100%-337.9861145019531px);
            }
            #POPUP288 {}
            #POPUP282 {
                width: 100%;
                height: 100%;
            }
            #POPUP282 .container {
                width: 510.0000305175781px;
                height: 337.9861145019531px;
                top: calc(100%-337.9861145019531px);
            }
            #POPUP282 {}
            #POPUP276 {
                width: 100%;
                height: 100%;
            }
            #POPUP276 .container {
                width: 511.9965515136719px;
                height: 337.9861145019531px;
                top: calc(100%-337.9861145019531px);
            }
            #POPUP276 {}
            #POPUP270 {
                width: 100%;
                height: 100%;
            }
            #POPUP270 .container {
                width: 510.01739501953125px;
                height: 337.9861145019531px;
                top: calc(100%-337.9861145019531px);
            }
            #POPUP270 {}
            #POPUP264 {
                width: 100%;
                height: 100%;
            }
            #POPUP264 .container {
                width: 820.0173950195312px;
                height: 544.0104370117188px;
                top: calc(100%-544.0104370117188px);
            }
            #POPUP264 {}
            #SECTION98 {
                width: 100%;
                height: 678.9583740234375px;
            }
            #SECTION98 .container {}
            #SECTION98 {}
            #SECTION338 {
                width: 100%;
                height: 379.9653015136719px;
            }
            #SECTION338 .container {}
            #SECTION338 {}
            #SECTION134 {
                width: 100%;
                height: 581.9618530273438px;
            }
            #SECTION134 .container {}
            #SECTION134 {}
            #SECTION416 {
                width: 100%;
                height: 760px;
            }
            #SECTION416 .container {}
            #SECTION416 {}
            #SECTION174 {
                width: 100%;
                height: 264.982666015625px;
            }
            #SECTION174 .container {}
            #SECTION174 {}
            #BOX226 {
                top: 301px;
                left: 205px;
                width: 582px;
                height: 85px;
            }
            #HEADLINE225 {
                top: 11.66668701171875px;
                left: 0px;
                padding: 0px;
                width: 581.6666870117188px;
                height: 61.333335876464844px;
            }
            #HEADLINE225 > .widget-content {
                font-size: 56px;
                text-align: center;
            }
            #HEADLINE213 {
                top: 231px;
                left: -79.667px;
                padding: 0px;
                width: 1114.666748046875px;
                height: 60px;
            }
            #HEADLINE213 > .widget-content {
                font-size: 54px;
                text-align: center;
            }
            #PARAGRAPH214 {
                top: 421px;
                left: 213.327px;
                padding: 0px;
                width: 565px;
                height: 53.333335876464844px;
            }
            #PARAGRAPH214 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE217 {
                top: 589px;
                left: 214px;
                padding: 0px;
                width: 164px;
                height: 40px;
            }
            #HEADLINE217 > .widget-content {
                font-size: 36px;
                text-align: right;
            }
            #PARAGRAPH218 {
                top: 629px;
                left: 214px;
                padding: 0px;
                width: 172px;
                height: 34.66666793823242px;
            }
            #PARAGRAPH218 > .widget-content {
                font-size: 14px;
                text-align: right;
            }
            #PARAGRAPH220 {
                top: 629px;
                left: 398px;
                padding: 0px;
                width: 148px;
                height: 17.33333396911621px;
            }
            #PARAGRAPH220 > .widget-content {
                font-size: 14px;
                text-align: right;
            }
            #HEADLINE221 {
                top: 589px;
                left: 388px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #HEADLINE221 > .widget-content {
                font-size: 36px;
                text-align: right;
            }
            #PARAGRAPH223 {
                top: 629px;
                left: 558px;
                padding: 0px;
                width: 172px;
                height: 17.33333396911621px;
            }
            #PARAGRAPH223 > .widget-content {
                font-size: 14px;
                text-align: right;
            }
            #HEADLINE224 {
                top: 589px;
                left: 558px;
                padding: 0px;
                width: 180px;
                height: 40px;
            }
            #HEADLINE224 > .widget-content {
                font-size: 36px;
                text-align: right;
            }
            #BUTTON251 {
                top: 512.333px;
                left: 411px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON251 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BOX252 {
                top: 0.989586px;
                left: -305.639px;
                width: 1695.0001220703125px;
                height: 61.99653244018555px;
            }
            #IMAGE253 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo-1512734330941.png);
            }
            #IMAGE253 {
                top: 10px;
                left: 136px;
                width: 435.6458435058594px;
                height: 40px;
            }
            #HEADLINE254 {
                top: 15.2361px;
                left: 837.642px;
                padding: 0px;
                width: 111.97917175292969px;
                height: 30.000001907348633px;
            }
            #HEADLINE254 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BUTTON256 {
                top: 19.7743px;
                left: 1203.65px;
                padding: 0px;
                width: 151.11111450195312px;
                height: 25.555557250976562px;
            }
            #BUTTON256 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #HEADLINE255 {
                top: 20.2153px;
                left: 942.653px;
                padding: 0px;
                width: 239.0104217529297px;
                height: 25.555557250976562px;
            }
            #HEADLINE255 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE41 {
                top: 172.212px;
                left: 359.007px;
                padding: 0px;
                width: 531.1111450195312px;
                height: 47.77777862548828px;
            }
            #HEADLINE41 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE240 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png);
            }
            #IMAGE240 {
                top: 33.0067px;
                left: 54px;
                width: 260.8507080078125px;
                height: 458.00347900390625px;
            }
            #HEADLINE258 {
                top: 124.819px;
                left: 441.973px;
                padding: 0px;
                width: 357.9861145019531px;
                height: 35.55555725097656px;
            }
            #HEADLINE258 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE259 {
                top: 243.973px;
                left: 356.99px;
                padding: 0px;
                width: 557.77783203125px;
                height: 73.33333587646484px;
            }
            #HEADLINE259 > .widget-content {
                font-size: 19px;
                text-align: center;
            }
            #HEADLINE87 {
                top: 68px;
                left: 168px;
                padding: 0px;
                width: 643.3333740234375px;
                height: 33.333335876464844px;
            }
            #HEADLINE87 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #IMAGE88 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/uploads/images/bfc1d1bf-af34-4fe2-9361-35f7f9120640.png);
            }
            #IMAGE88 {
                top: 296.528px;
                left: 360.973px;
                width: 298px;
                height: 474px;
            }
            #GROUP453 {
                top: 171.9965362548828px;
                left: -1px;
                width: 326.9965362548828px;
                height: 576.8403015136719px;
            }
            #BOX91 {
                top: 189.37501525878906px;
                left: 1px;
                width: 202px;
                height: 202px;
            }
            #HEADLINE92 {
                top: 55px;
                left: 23.0069px;
                padding: 0px;
                width: 160px;
                height: 105.55555725097656px;
            }
            #HEADLINE92 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX260 {
                top: 374.84376525878906px;
                left: 126px;
                width: 202px;
                height: 202px;
            }
            #HEADLINE261 {
                top: 62px;
                left: 23.007px;
                padding: 0px;
                width: 160px;
                height: 63.333335876464844px;
            }
            #HEADLINE261 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX249 {
                top: 0px;
                left: 124.99307250976562px;
                width: 202px;
                height: 202px;
            }
            #HEADLINE250 {
                top: 57.0764px;
                left: 18.9167px;
                padding: 0px;
                width: 160px;
                height: 84.44445037841797px;
            }
            #HEADLINE250 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #GROUP454 {
                top: 171.9965362548828px;
                left: 632.8541870117188px;
                width: 325.98963928222656px;
                height: 578.3680877685547px;
            }
            #BOX262 {
                top: 376.3715515136719px;
                left: 3.951416015625px;
                width: 202px;
                height: 202px;
            }
            #HEADLINE263 {
                top: 62px;
                left: 23.9097px;
                padding: 0px;
                width: 160px;
                height: 84.44445037841797px;
            }
            #HEADLINE263 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX95 {
                top: 0px;
                left: 1px;
                width: 202px;
                height: 202px;
            }
            #HEADLINE96 {
                top: 59px;
                left: 22.9896px;
                padding: 0px;
                width: 160px;
                height: 84.44445037841797px;
            }
            #HEADLINE96 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX93 {
                top: 188.00348663330078px;
                left: 124.99310302734375px;
                width: 202px;
                height: 202px;
            }
            #HEADLINE94 {
                top: 70px;
                left: 22px;
                padding: 0px;
                width: 160px;
                height: 63.333335876464844px;
            }
            #HEADLINE94 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #LINEVERTICAL459 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 316px;
            }
            #PARAGRAPH460 {
                top: 40px;
                left: 58.3959px;
                padding: 0px;
                width: 412.22222900390625px;
                height: 180.00001525878906px;
            }
            #PARAGRAPH460 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #IMAGE314 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007569.jpg);
            }
            #IMAGE314 {
                top: 127.771px;
                left: 101.014px;
                width: 375px;
                height: 470px;
            }
            #BOX301 {
                top: 128.268px;
                left: 477.021px;
                width: 390.9895935058594px;
                height: 470.0000305175781px;
            }
            #HEADLINE302 {
                top: 43px;
                left: 34px;
                padding: 0px;
                width: 268.888916015625px;
                height: 24.444446563720703px;
            }
            #HEADLINE302 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE308 {
                top: 25.989593505859375px;
                left: 33.9757080078125px;
                padding: 0px;
                width: 277.7778015136719px;
                height: 17.77777862548828px;
            }
            #HEADLINE308 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP315 {
                top: 78.125px;
                left: 19.982666015625px;
                width: 358.00347900390625px;
                height: 340.0000305175781px;
            }
            #LISTOP315 > .widget-content {
                text-align: left;
            }
            #LISTOP315 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 27px;
                height: 27px;
                font-size: 13.5px;
                color: rgba(13, 71, 161, 1);
                margin-right: 0px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(13,71,161,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP315 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP315 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE317 {
                top: 39.3507px;
                left: 248.99px;
                padding: 0px;
                width: 521.99658203125px;
                height: 35.55555725097656px;
            }
            #HEADLINE317 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #LINEVERTICAL297 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 316px;
            }
            #PARAGRAPH298 {
                top: 32.96875px;
                left: 49.4444580078125px;
                padding: 0px;
                width: 388.4375305175781px;
                height: 160px;
            }
            #PARAGRAPH298 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LINEVERTICAL291 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 316px;
            }
            #PARAGRAPH292 {
                top: 39.61805725097656px;
                left: 51.597259521484375px;
                padding: 0px;
                width: 410.0000305175781px;
                height: 100.00000762939453px;
            }
            #PARAGRAPH292 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LINEVERTICAL285 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 316px;
            }
            #PARAGRAPH286 {
                top: 48.62847900390625px;
                left: 57.500030517578125px;
                padding: 0px;
                width: 449.01043701171875px;
                height: 140px;
            }
            #PARAGRAPH286 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LINEVERTICAL279 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 316px;
            }
            #PARAGRAPH280 {
                top: 34.96528625488281px;
                left: 54.01043701171875px;
                padding: 0px;
                width: 410.0000305175781px;
                height: 160px;
            }
            #PARAGRAPH280 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LINEVERTICAL273 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 316px;
            }
            #PARAGRAPH274 {
                top: 32.986114501953125px;
                left: 52.500030517578125px;
                padding: 0px;
                width: 410.0000305175781px;
                height: 180.00001525878906px;
            }
            #PARAGRAPH274 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #PARAGRAPH268 {
                top: 75.34722137451172px;
                left: 65.0867919921875px;
                padding: 0px;
                width: 690.9896240234375px;
                height: 380.0000305175781px;
            }
            #PARAGRAPH268 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LINEVERTICAL267 {
                top: 79.3472px;
                left: 44.5px;
                width: 25px;
                height: 375.0000305175781px;
            }
            #HEADLINE119 {
                top: 36px;
                left: 161px;
                padding: 0px;
                width: 643.3333740234375px;
                height: 33.333335876464844px;
            }
            #HEADLINE119 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #YOUTUBE318 {
                top: 113.972px;
                left: -57.2893px;
                width: 465.2778015136719px;
                height: 260.0173645019531px;
            }
            #LISTOP319 {
                top: 113.16px;
                left: 437.031px;
                width: 523.0034790039062px;
                height: 473.3333435058594px;
            }
            #LISTOP319 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #LISTOP319 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                color: rgba(244, 67, 54, 1);
                margin-right: 0px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(244,67,54,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP319 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP319 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BUTTON320 {
                top: 625.417px;
                left: 377.657px;
                padding: 0px;
                width: 154.4444580078125px;
                height: 35.55555725097656px;
            }
            #BUTTON320 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX341 {
                top: 186.441px;
                left: 11.0174px;
                width: 280px;
                height: 128px;
            }
            #PARAGRAPH342 {
                top: 23px;
                left: 23px;
                padding: 0px;
                width: 222.22222900390625px;
                height: 80px;
            }
            #PARAGRAPH342 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE343 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
            }
            #IMAGE343 {
                top: 148.441px;
                left: 0.0174055px;
                width: 298.9930725097656px;
                height: 38.99305725097656px;
            }
            #HEADLINE344 {
                top: 9.427093505859375px;
                left: 5.97222900390625px;
                padding: 0px;
                width: 255.55557250976562px;
                height: 21.111112594604492px;
            }
            #HEADLINE344 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX348 {
                top: 187.424px;
                left: 335.001px;
                width: 280px;
                height: 128px;
            }
            #PARAGRAPH349 {
                top: 23px;
                left: 23px;
                padding: 0px;
                width: 222.22222900390625px;
                height: 60.000003814697266px;
            }
            #PARAGRAPH349 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE350 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
            }
            #IMAGE350 {
                top: 149.42px;
                left: 325.001px;
                width: 298.9930725097656px;
                height: 38.99305725097656px;
            }
            #HEADLINE351 {
                top: 8.420135498046875px;
                left: 18.00347900390625px;
                padding: 0px;
                width: 255.55557250976562px;
                height: 21.111112594604492px;
            }
            #HEADLINE351 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX355 {
                top: 188.431px;
                left: 670.869px;
                width: 280px;
                height: 128px;
            }
            #PARAGRAPH356 {
                top: 23px;
                left: 23px;
                padding: 0px;
                width: 222.22222900390625px;
                height: 80px;
            }
            #PARAGRAPH356 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE357 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
            }
            #IMAGE357 {
                top: 150.427px;
                left: 659.862px;
                width: 298.9930725097656px;
                height: 38.99305725097656px;
            }
            #HEADLINE358 {
                top: 10.41668701171875px;
                left: 15px;
                padding: 0px;
                width: 255.55557250976562px;
                height: 21.111112594604492px;
            }
            #HEADLINE358 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX359 {
                top: 32.1181px;
                left: 767.327px;
                width: 90px;
                height: 86px;
            }
            #SHAPE360 {
                top: 18px;
                left: 20px;
                width: 50px;
                height: 50px;
            }
            #BOX352 {
                top: 29.0799px;
                left: 424.601px;
                width: 90px;
                height: 86px;
            }
            #SHAPE353 {
                top: 18px;
                left: 20px;
                width: 50px;
                height: 50px;
            }
            #BOX345 {
                top: 28.125px;
                left: 100.608px;
                width: 90px;
                height: 86px;
            }
            #SHAPE346 {
                top: 18px;
                left: 20px;
                width: 50px;
                height: 50px;
            }
            #HEADLINE152 {
                top: 49px;
                left: 154px;
                padding: 0px;
                width: 644px;
                height: 34px;
            }
            #HEADLINE152 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP370 {
                top: 145.9722442626953px;
                left: -3.135406494140625px;
                width: 961.8750610351562px;
                height: 180.95486450195312px;
            }
            #GROUP147 {
                top: 0px;
                left: 650.8785095214844px;
                width: 311.9965515136719px;
                height: 180.95487213134766px;
            }
            #PARAGRAPH148 {
                top: 60.954864501953125px;
                left: 94.00347900390625px;
                padding: 0px;
                width: 218.88890075683594px;
                height: 60.000003814697266px;
            }
            #PARAGRAPH148 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE149 {
                top: 7.96875px;
                left: 92.99652099609375px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 21.111112594604492px;
            }
            #HEADLINE149 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX150 {
                top: 0px;
                left: 1px;
                width: 81px;
                height: 81px;
            }
            #HEADLINE151 {
                top: 32.96875px;
                left: 92.99652099609375px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 16.666667938232422px;
            }
            #HEADLINE151 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP142 {
                top: 2.96875px;
                left: 326.8507080078125px;
                width: 326.45831298828125px;
                height: 177.98612213134766px;
            }
            #PARAGRAPH143 {
                top: 57.986114501953125px;
                left: 94.00344848632812px;
                padding: 0px;
                width: 218.88890075683594px;
                height: 80px;
            }
            #PARAGRAPH143 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE144 {
                top: 5px;
                left: 92.99649047851562px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 21.111112594604492px;
            }
            #HEADLINE144 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX145 {
                top: 0px;
                left: 1px;
                width: 81px;
                height: 81px;
            }
            #HEADLINE146 {
                top: 30px;
                left: 92.99649047851562px;
                padding: 0px;
                width: 234.46182250976562px;
                height: 16.666667938232422px;
            }
            #HEADLINE146 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP137 {
                top: 0px;
                left: 1px;
                width: 311.9965515136719px;
                height: 180.95487213134766px;
            }
            #PARAGRAPH138 {
                top: 60.954864501953125px;
                left: 94.00347900390625px;
                padding: 0px;
                width: 218.88890075683594px;
                height: 80px;
            }
            #PARAGRAPH138 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE139 {
                top: 7.96875px;
                left: 92.99653625488281px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 21.111112594604492px;
            }
            #HEADLINE139 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX140 {
                top: 0px;
                left: 1px;
                width: 81px;
                height: 81px;
            }
            #HEADLINE141 {
                top: 32.96875px;
                left: 92.99653625488281px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 16.666667938232422px;
            }
            #HEADLINE141 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP371 {
                top: 373.8889045715332px;
                left: -0.9131927490234375px;
                width: 961.9792022705078px;
                height: 180.98959350585938px;
            }
            #GROUP372 {
                top: 0px;
                left: 650.9826507568359px;
                width: 311.9965515136719px;
                height: 180.9896011352539px;
            }
            #PARAGRAPH373 {
                top: 60.989593505859375px;
                left: 94.00347900390625px;
                padding: 0px;
                width: 218.88890075683594px;
                height: 40px;
            }
            #PARAGRAPH373 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE374 {
                top: 7.986114501953125px;
                left: 92.99652099609375px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 21.111112594604492px;
            }
            #HEADLINE374 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX375 {
                top: 0px;
                left: 1px;
                width: 81px;
                height: 81px;
            }
            #HEADLINE376 {
                top: 32.986114501953125px;
                left: 92.99652099609375px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 16.666667938232422px;
            }
            #HEADLINE376 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP377 {
                top: 3.00347900390625px;
                left: 327.0243377685547px;
                width: 311.99658203125px;
                height: 177.98612213134766px;
            }
            #PARAGRAPH378 {
                top: 57.986114501953125px;
                left: 94.00350952148438px;
                padding: 0px;
                width: 218.88890075683594px;
                height: 40px;
            }
            #PARAGRAPH378 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE379 {
                top: 5px;
                left: 92.99655151367188px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 21.111112594604492px;
            }
            #HEADLINE379 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX380 {
                top: 0px;
                left: 1px;
                width: 81px;
                height: 81px;
            }
            #HEADLINE381 {
                top: 30px;
                left: 92.99655151367188px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 16.666667938232422px;
            }
            #HEADLINE381 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP382 {
                top: 0px;
                left: 1px;
                width: 311.9965515136719px;
                height: 180.9896011352539px;
            }
            #PARAGRAPH383 {
                top: 60.989593505859375px;
                left: 94.00347900390625px;
                padding: 0px;
                width: 218.88890075683594px;
                height: 80px;
            }
            #PARAGRAPH383 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE384 {
                top: 7.986114501953125px;
                left: 92.99653625488281px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 21.111112594604492px;
            }
            #HEADLINE384 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX385 {
                top: 0px;
                left: 1px;
                width: 81px;
                height: 81px;
            }
            #HEADLINE386 {
                top: 32.986114501953125px;
                left: 92.99653625488281px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 16.666667938232422px;
            }
            #HEADLINE386 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX445 {
                top: 142.691px;
                left: 0px;
                width: 575px;
                height: 501.7708435058594px;
            }
            #SHAPE437 {
                top: 29.0104px;
                left: 245.261px;
                width: 57px;
                height: 57px;
            }
            #HEADLINE438 {
                top: 108.958px;
                left: 33.2639px;
                padding: 0px;
                width: 502.013916015625px;
                height: 75.55555725097656px;
            }
            #HEADLINE438 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE447 {
                top: 291.9271049499512px;
                left: 138.9757080078125px;
                padding: 0px;
                width: 310px;
                height: 40px;
            }
            #HEADLINE447 > .widget-content {
                font-size: 34px;
                text-align: left;
            }
            #HEADLINE446 {
                top: 225.88541793823242px;
                left: 194.982666015625px;
                padding: 0px;
                width: 200.00001525878906px;
                height: 50.000003814697266px;
            }
            #HEADLINE446 > .widget-content {
                font-size: 45px;
                text-align: left;
            }
            #BOX440 {
                top: 395.9548759460449px;
                left: 55.520843505859375px;
                width: 52px;
                height: 52px;
            }
            #SHAPE441 {
                top: 9px;
                left: 9px;
                width: 33px;
                height: 33px;
            }
            #BUTTON442 {
                top: 408.024px;
                left: 107.517px;
                padding: 0px;
                width: 193px;
                height: 24px;
            }
            #BUTTON442 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX417 {
                top: 142px;
                left: 575px;
                width: 385.0000305175781px;
                height: 503.9930725097656px;
            }
            #GROUP419 {
                top: 109px;
                left: 40px;
                width: 298px;
                height: 98px;
            }
            #GROUP420 {
                top: 0px;
                left: 1.8125px;
                width: 294.34375px;
                height: 98px;
            }
            #BOX421 {
                top: 28px;
                left: 1px;
                width: 68.453125px;
                height: 70px;
            }
            #HEADLINE422 {
                top: 0px;
                left: 6.25px;
                padding: 0px;
                width: 61.4375px;
                height: 18px;
            }
            #HEADLINE422 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE423 {
                top: 0px;
                left: 81.265625px;
                padding: 0px;
                width: 61.4375px;
                height: 18px;
            }
            #HEADLINE423 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX424 {
                top: 28px;
                left: 76px;
                width: 68.453125px;
                height: 70px;
            }
            #BOX425 {
                top: 28px;
                left: 226.890625px;
                width: 68.453125px;
                height: 70px;
            }
            #HEADLINE426 {
                top: 0px;
                left: 228.171875px;
                padding: 0px;
                width: 61.4375px;
                height: 18px;
            }
            #HEADLINE426 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE427 {
                top: 0px;
                left: 156.171875px;
                padding: 0px;
                width: 61.4375px;
                height: 18px;
            }
            #HEADLINE427 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX428 {
                top: 28px;
                left: 150.875px;
                width: 68.453125px;
                height: 70px;
            }
            #COUNTDOWN429 {
                top: 40px;
                left: 1px;
                width: 298px;
                height: 43px;
            }
            #COUNTDOWN429 > .widget-content {
                font-size: 36px;
            }
            #GROUP430 {
                top: 240.9895884990692px;
                left: 39.329833984375px;
                width: 300.97222900390625px;
                height: 229.427090883255px;
            }
            #FORM432 {
                top: 0px;
                left: 1px;
                width: 300.97222900390625px;
                height: 162.9166717529297px;
            }
            #FORM432 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM433 {
                top: 0px;
                left: 0.972229px;
                width: 300px;
                height: 46.140625px;
            }
            #ITEM_FORM433 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM435 {
                top: 55.9549px;
                left: -0.017334px;
                width: 300px;
                height: 46.140625px;
            }
            #ITEM_FORM435 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM444 {
                top: 112.965px;
                left: -0.017334px;
                width: 300px;
                height: 49.982635498046875px;
            }
            #ITEM_FORM444 > .widget-content {
                font-size: 17px;
            }
            #BUTTON431 {
                top: 180.5381977558136px;
                left: 1.173583984375px;
                padding: 0px;
                width: 300px;
                height: 49px;
            }
            #BUTTON431 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE418 {
                top: 29.131942749023438px;
                left: 11.99652099609375px;
                padding: 0px;
                width: 367.013916015625px;
                height: 48.888893127441406px;
            }
            #HEADLINE418 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #LINE176 {
                top: 206px;
                left: -1px;
                width: 959px;
                height: 25px;
            }
            #GROUP188 {
                top: 76px;
                left: 250px;
                width: 226px;
                height: 88px;
            }
            #HEADLINE189 {
                top: 0px;
                left: 2px;
                padding: 0px;
                width: 220px;
                height: 20px;
            }
            #HEADLINE189 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE190 {
                top: 37px;
                left: 1px;
                padding: 0px;
                width: 225.55557250976562px;
                height: 50.000003814697266px;
            }
            #HEADLINE190 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #IMAGE449 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo_white-1513079500.png);
            }
            #IMAGE449 {
                top: 17.482635498046875px;
                left: 13.9757080078125px;
                width: 140px;
                height: 140px;
            }
            #HEADLINE452 {
                top: 113.317px;
                left: 466.955px;
                padding: 0px;
                width: 379.01043701171875px;
                height: 33.333335876464844px;
            }
            #HEADLINE452 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
        }
        
        #SECTION212 {
            display: block;
            background-image: url("https://static.ladipage.net/d/5a29f2a1d35c107ff6bcd1be/business-design-social-1513078644.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION212 > .ladi-widget-overlay {
            background-color: rgba(245, 73, 0, 0);
        }
        
        #SECTION38 {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/banner-454815.png");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION38 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #SECTION86 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #POPUP456 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP456 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION300 {
            display: block;
            background-image: url("https://static.ladipage.net/d/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION300 > .ladi-widget-overlay {
            background-color: rgba(7, 19, 64, 0.82);
        }
        
        #POPUP294 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP294 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP288 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP288 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP282 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP282 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP276 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP276 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP270 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP270 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP264 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP264 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION98 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION338 {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/geometry.png");
            background-color: rgba(218, 30, 16, 1);
            background-position: top left;
            background-repeat: repeat;
        }
        
        #SECTION338 > .ladi-widget-overlay {
            background-color: rgba(218, 30, 16, 0.66);
        }
        
        #SECTION134 {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/bg_ykienhocvien.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION134 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #SECTION416 {
            display: block;
            background-image: url("https://static.ladipage.net/d/5a29f2a1d35c107ff6bcd1be/business-design-social12-1513256358.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION416 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION174 {
            display: block;
            background-image: url("https://static.ladipage.net/d/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION174 > .ladi-widget-overlay {
            background-color: rgba(4, 22, 43, 0.95);
        }
        
        #BOX226 {
            display: block;
        }
        
        #BOX226 > .widget-content {
            background-color: rgba(15, 15, 15, 0.71);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE225 {
            display: block;
        }
        
        #HEADLINE225 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 62px;
        }
        
        #HEADLINE213 {
            display: block;
        }
        
        #HEADLINE213 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 60px;
            text-shadow: 7px 4px 17px rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH214 {
            display: block;
        }
        
        #PARAGRAPH214 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #HEADLINE217 {
            display: block;
        }
        
        #HEADLINE217 > .widget-content {
            color: #ee1c25;
            font-weight: 700;
            line-height: 40px;
        }
        
        #PARAGRAPH218 {
            display: block;
        }
        
        #PARAGRAPH218 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #PARAGRAPH220 {
            display: block;
        }
        
        #PARAGRAPH220 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #HEADLINE221 {
            display: block;
        }
        
        #HEADLINE221 > .widget-content {
            color: #ee1c25;
            font-weight: 700;
            line-height: 40px;
        }
        
        #PARAGRAPH223 {
            display: block;
        }
        
        #PARAGRAPH223 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #HEADLINE224 {
            display: block;
        }
        
        #HEADLINE224 > .widget-content {
            color: #ee1c25;
            font-weight: 700;
            line-height: 40px;
        }
        
        #BUTTON251 {
            display: table;
        }
        
        #BUTTON251 > .widget-content {
            background-color: rgba(198, 40, 40, 1);
            color: #ffffff;
            font-weight: 700;
            line-height: 23px;
        }
        
        #BUTTON251> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON251> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX252 {
            display: block;
        }
        
        #BOX252 > .widget-content {
            background-color: rgba(224, 224, 224, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE253 {
            display: block;
        }
        
        #IMAGE253 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE253 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE254 {
            display: block;
        }
        
        #HEADLINE254 > .widget-content {
            font-family: 'Source Sans Pro', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(244, 67, 54, 1);
            font-weight: 700;
            line-height: 30px;
        }
        
        #BUTTON256 {
            display: table;
        }
        
        #BUTTON256 > .widget-content {
            background-color: rgba(198, 40, 40, 1);
            color: #ffffff;
            font-weight: 700;
            line-height: 21px;
        }
        
        #BUTTON256> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON256> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE255 {
            display: block;
        }
        
        #HEADLINE255 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(244, 67, 54, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #HEADLINE41 {
            display: block;
        }
        
        #HEADLINE41 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #IMAGE240 {
            display: block;
        }
        
        #IMAGE240 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE240 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE258 {
            display: block;
        }
        
        #HEADLINE258 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE259 {
            display: block;
        }
        
        #HEADLINE259 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 25px;
        }
        
        #HEADLINE87 {
            display: block;
        }
        
        #HEADLINE87 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ee1c25;
            font-weight: 600;
            line-height: 34px;
        }
        
        #IMAGE88 {
            display: block;
        }
        
        #IMAGE88 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE88 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #GROUP453 {
            display: block;
        }
        
        #GROUP453 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX91 {
            display: block;
        }
        
        #BOX91 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 5px 5px 7px rgba(199, 195, 195, 0.49);
        }
        
        #BOX91> .widget-content {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #BOX91> .ladi-widget-overlay {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #HEADLINE92 {
            display: block;
        }
        
        #HEADLINE92 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BOX260 {
            display: block;
        }
        
        #BOX260 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 5px 5px 7px rgba(199, 195, 195, 0.49);
        }
        
        #BOX260> .widget-content {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #BOX260> .ladi-widget-overlay {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #HEADLINE261 {
            display: block;
        }
        
        #HEADLINE261 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BOX249 {
            display: block;
        }
        
        #BOX249 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 5px 5px 7px rgba(199, 195, 195, 0.49);
        }
        
        #BOX249> .widget-content {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #BOX249> .ladi-widget-overlay {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #HEADLINE250 {
            display: block;
        }
        
        #HEADLINE250 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #GROUP454 {
            display: block;
        }
        
        #GROUP454 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX262 {
            display: block;
        }
        
        #BOX262 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 5px 5px 7px rgba(199, 195, 195, 0.49);
        }
        
        #BOX262> .widget-content {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #BOX262> .ladi-widget-overlay {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #HEADLINE263 {
            display: block;
        }
        
        #HEADLINE263 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BOX95 {
            display: block;
        }
        
        #BOX95 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 5px 5px 7px rgba(199, 195, 195, 0.49);
        }
        
        #BOX95> .widget-content {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #BOX95> .ladi-widget-overlay {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #HEADLINE96 {
            display: block;
        }
        
        #HEADLINE96 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BOX93 {
            display: block;
        }
        
        #BOX93 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 5px 5px 7px rgba(199, 195, 195, 0.49);
        }
        
        #BOX93> .widget-content {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #BOX93> .ladi-widget-overlay {
            border-radius: 200px;
            border-width: 2px;
            border-style: solid;
            border-color: #ee1c25;
        }
        
        #HEADLINE94 {
            display: block;
        }
        
        #HEADLINE94 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #LINEVERTICAL459 {
            display: block;
        }
        
        #LINEVERTICAL459>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL459 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH460 {
            display: block;
        }
        
        #PARAGRAPH460 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 21px;
        }
        
        #IMAGE314 {
            display: block;
        }
        
        #IMAGE314 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE314 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX301 {
            display: block;
        }
        
        #BOX301 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE302 {
            display: block;
        }
        
        #HEADLINE302 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(23, 30, 94, 1);
            font-weight: 400;
            line-height: 25px;
        }
        
        #HEADLINE308 {
            display: block;
        }
        
        #HEADLINE308 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(23, 30, 94, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #LISTOP315 {
            display: block;
        }
        
        #LISTOP315 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 20px;
        }
        
        #HEADLINE317 {
            display: block;
        }
        
        #HEADLINE317 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #LINEVERTICAL297 {
            display: block;
        }
        
        #LINEVERTICAL297>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL297 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH298 {
            display: block;
        }
        
        #PARAGRAPH298 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 21px;
        }
        
        #LINEVERTICAL291 {
            display: block;
        }
        
        #LINEVERTICAL291>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL291 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH292 {
            display: block;
        }
        
        #PARAGRAPH292 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 21px;
        }
        
        #LINEVERTICAL285 {
            display: block;
        }
        
        #LINEVERTICAL285>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL285 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH286 {
            display: block;
        }
        
        #PARAGRAPH286 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 21px;
        }
        
        #LINEVERTICAL279 {
            display: block;
        }
        
        #LINEVERTICAL279>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL279 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH280 {
            display: block;
        }
        
        #PARAGRAPH280 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 21px;
        }
        
        #LINEVERTICAL273 {
            display: block;
        }
        
        #LINEVERTICAL273>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL273 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH274 {
            display: block;
        }
        
        #PARAGRAPH274 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 21px;
        }
        
        #PARAGRAPH268 {
            display: block;
        }
        
        #PARAGRAPH268 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 21px;
        }
        
        #LINEVERTICAL267 {
            display: block;
        }
        
        #LINEVERTICAL267>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL267 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE119 {
            display: block;
        }
        
        #HEADLINE119 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ee1c25;
            font-weight: 700;
            line-height: 34px;
            text-shadow: 0px 0px 0px rgba(0, 0, 0, 1);
        }
        
        #YOUTUBE318 {
            display: block;
        }
        
        #YOUTUBE318 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #YOUTUBE318> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #YOUTUBE318> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP319 {
            display: block;
        }
        
        #LISTOP319 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 26px;
        }
        
        #BUTTON320 {
            display: table;
        }
        
        #BUTTON320 > .widget-content {
            background-color: rgba(198, 40, 40, 1);
            color: #ffffff;
            font-weight: 700;
            line-height: 21px;
        }
        
        #BUTTON320> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON320> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX341 {
            display: block;
        }
        
        #BOX341 > .widget-content {
            background-color: rgba(240, 240, 240, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX341> .widget-content {
            border-radius: 7px;
            border-width: 1px;
            border-style: dashed;
            border-color: rgba(161, 161, 161, 1);
        }
        
        #BOX341> .ladi-widget-overlay {
            border-radius: 7px;
            border-width: 1px;
            border-style: dashed;
            border-color: rgba(161, 161, 161, 1);
        }
        
        #PARAGRAPH342 {
            display: block;
        }
        
        #PARAGRAPH342 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #IMAGE343 {
            display: block;
        }
        
        #IMAGE343 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE343 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE344 {
            display: block;
        }
        
        #HEADLINE344 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 600;
            line-height: 22px;
        }
        
        #BOX348 {
            display: block;
        }
        
        #BOX348 > .widget-content {
            background-color: rgba(240, 240, 240, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX348> .widget-content {
            border-radius: 7px;
            border-width: 1px;
            border-style: dashed;
            border-color: rgba(161, 161, 161, 1);
        }
        
        #BOX348> .ladi-widget-overlay {
            border-radius: 7px;
            border-width: 1px;
            border-style: dashed;
            border-color: rgba(161, 161, 161, 1);
        }
        
        #PARAGRAPH349 {
            display: block;
        }
        
        #PARAGRAPH349 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #IMAGE350 {
            display: block;
        }
        
        #IMAGE350 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE350 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE351 {
            display: block;
        }
        
        #HEADLINE351 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 600;
            line-height: 22px;
        }
        
        #BOX355 {
            display: block;
        }
        
        #BOX355 > .widget-content {
            background-color: rgba(240, 240, 240, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX355> .widget-content {
            border-radius: 7px;
            border-width: 1px;
            border-style: dashed;
            border-color: rgba(161, 161, 161, 1);
        }
        
        #BOX355> .ladi-widget-overlay {
            border-radius: 7px;
            border-width: 1px;
            border-style: dashed;
            border-color: rgba(161, 161, 161, 1);
        }
        
        #PARAGRAPH356 {
            display: block;
        }
        
        #PARAGRAPH356 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #IMAGE357 {
            display: block;
        }
        
        #IMAGE357 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE357 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE358 {
            display: block;
        }
        
        #HEADLINE358 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 600;
            line-height: 22px;
        }
        
        #BOX359 {
            display: block;
        }
        
        #BOX359 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX359> .widget-content {
            border-radius: 550px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(71, 71, 71, 1);
        }
        
        #BOX359> .ladi-widget-overlay {
            border-radius: 550px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(71, 71, 71, 1);
        }
        
        #SHAPE360 {
            display: block;
        }
        
        #SHAPE360 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE360> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #BOX352 {
            display: block;
        }
        
        #BOX352 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX352> .widget-content {
            border-radius: 550px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(71, 71, 71, 1);
        }
        
        #BOX352> .ladi-widget-overlay {
            border-radius: 550px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(71, 71, 71, 1);
        }
        
        #SHAPE353 {
            display: block;
        }
        
        #SHAPE353 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE353> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #BOX345 {
            display: block;
        }
        
        #BOX345 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX345> .widget-content {
            border-radius: 550px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(71, 71, 71, 1);
        }
        
        #BOX345> .ladi-widget-overlay {
            border-radius: 550px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(71, 71, 71, 1);
        }
        
        #SHAPE346 {
            display: block;
        }
        
        #SHAPE346 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE346> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE152 {
            display: block;
        }
        
        #HEADLINE152 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ee1c25;
            font-weight: 700;
            line-height: 34px;
        }
        
        #GROUP370 {
            display: block;
        }
        
        #GROUP370 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP147 {
            display: block;
        }
        
        #GROUP147 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH148 {
            display: block;
        }
        
        #PARAGRAPH148 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(94, 94, 94, 0.92);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE149 {
            display: block;
        }
        
        #HEADLINE149 > .widget-content {
            color: rgba(84, 84, 84, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #BOX150 {
            display: block;
        }
        
        #BOX150 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
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
        
        #BOX150> .widget-content {
            border-radius: 360px;
        }
        
        #BOX150> .ladi-widget-overlay {
            border-radius: 360px;
        }
        
        #BOX150 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE151 {
            display: block;
        }
        
        #HEADLINE151 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(99, 99, 99, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 17px;
        }
        
        #GROUP142 {
            display: block;
        }
        
        #GROUP142 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH143 {
            display: block;
        }
        
        #PARAGRAPH143 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(94, 94, 94, 0.92);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE144 {
            display: block;
        }
        
        #HEADLINE144 > .widget-content {
            color: rgba(84, 84, 84, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #BOX145 {
            display: block;
        }
        
        #BOX145 > .widget-content {
            background-image: url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
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
        
        #BOX145> .widget-content {
            border-radius: 360px;
        }
        
        #BOX145> .ladi-widget-overlay {
            border-radius: 360px;
        }
        
        #BOX145 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE146 {
            display: block;
        }
        
        #HEADLINE146 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(99, 99, 99, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 17px;
        }
        
        #GROUP137 {
            display: block;
        }
        
        #GROUP137 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH138 {
            display: block;
        }
        
        #PARAGRAPH138 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(94, 94, 94, 0.92);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE139 {
            display: block;
        }
        
        #HEADLINE139 > .widget-content {
            color: rgba(84, 84, 84, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #BOX140 {
            display: block;
        }
        
        #BOX140 > .widget-content {
            background-image: url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
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
        
        #BOX140> .widget-content {
            border-radius: 360px;
        }
        
        #BOX140> .ladi-widget-overlay {
            border-radius: 360px;
        }
        
        #BOX140 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE141 {
            display: block;
        }
        
        #HEADLINE141 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(99, 99, 99, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 17px;
        }
        
        #GROUP371 {
            display: block;
        }
        
        #GROUP371 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP372 {
            display: block;
        }
        
        #GROUP372 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH373 {
            display: block;
        }
        
        #PARAGRAPH373 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(94, 94, 94, 0.92);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE374 {
            display: block;
        }
        
        #HEADLINE374 > .widget-content {
            color: rgba(84, 84, 84, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #BOX375 {
            display: block;
        }
        
        #BOX375 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
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
        
        #BOX375> .widget-content {
            border-radius: 360px;
        }
        
        #BOX375> .ladi-widget-overlay {
            border-radius: 360px;
        }
        
        #BOX375 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE376 {
            display: block;
        }
        
        #HEADLINE376 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(99, 99, 99, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 17px;
        }
        
        #GROUP377 {
            display: block;
        }
        
        #GROUP377 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH378 {
            display: block;
        }
        
        #PARAGRAPH378 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(94, 94, 94, 0.92);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE379 {
            display: block;
        }
        
        #HEADLINE379 > .widget-content {
            color: rgba(84, 84, 84, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #BOX380 {
            display: block;
        }
        
        #BOX380 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
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
        
        #BOX380> .widget-content {
            border-radius: 360px;
        }
        
        #BOX380> .ladi-widget-overlay {
            border-radius: 360px;
        }
        
        #BOX380 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE381 {
            display: block;
        }
        
        #HEADLINE381 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(99, 99, 99, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 17px;
        }
        
        #GROUP382 {
            display: block;
        }
        
        #GROUP382 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH383 {
            display: block;
        }
        
        #PARAGRAPH383 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(94, 94, 94, 0.92);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE384 {
            display: block;
        }
        
        #HEADLINE384 > .widget-content {
            color: rgba(84, 84, 84, 1);
            font-weight: 700;
            line-height: 22px;
        }
        
        #BOX385 {
            display: block;
        }
        
        #BOX385 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
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
        
        #BOX385> .widget-content {
            border-radius: 360px;
        }
        
        #BOX385> .ladi-widget-overlay {
            border-radius: 360px;
        }
        
        #BOX385 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE386 {
            display: block;
        }
        
        #HEADLINE386 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(99, 99, 99, 1);
            font-weight: 400;
            font-style: italic;
            line-height: 17px;
        }
        
        #BOX445 {
            display: block;
        }
        
        #BOX445 > .widget-content {
            background-color: rgba(0, 0, 0, 0.67);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE437 {
            display: block;
        }
        
        #SHAPE437 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE437> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE438 {
            display: block;
        }
        
        #HEADLINE438 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 38px;
        }
        
        #HEADLINE447 {
            display: block;
        }
        
        #HEADLINE447 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 40px;
        }
        
        #HEADLINE446 {
            display: block;
        }
        
        #HEADLINE446 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(244, 67, 54, 1);
            font-weight: 700;
            text-decoration: line-through;
            -webkit-text-decoration-line: line-through;
            line-height: 51px;
        }
        
        #BOX440 {
            display: block;
        }
        
        #BOX440 > .widget-content {
            background-color: rgba(244, 67, 54, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX440> .widget-content {
            border-radius: 550px;
        }
        
        #BOX440> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #SHAPE441 {
            display: block;
        }
        
        #SHAPE441 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE441> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #BUTTON442 {
            display: table;
        }
        
        #BUTTON442 > .widget-content {
            background-color: rgba(77, 185, 10, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 22px;
        }
        
        #BUTTON442> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON442> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX417 {
            display: block;
        }
        
        #BOX417 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX417> .widget-content {
            border-radius: 5px;
        }
        
        #BOX417> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #GROUP419 {
            display: block;
        }
        
        #GROUP419 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP420 {
            display: block;
        }
        
        #GROUP420 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX421 {
            display: block;
        }
        
        #BOX421 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX421> .widget-content {
            border-radius: 6px;
        }
        
        #BOX421> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #HEADLINE422 {
            display: block;
        }
        
        #HEADLINE422 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #HEADLINE423 {
            display: block;
        }
        
        #HEADLINE423 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #BOX424 {
            display: block;
        }
        
        #BOX424 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX424> .widget-content {
            border-radius: 6px;
        }
        
        #BOX424> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #BOX425 {
            display: block;
        }
        
        #BOX425 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX425> .widget-content {
            border-radius: 6px;
        }
        
        #BOX425> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #HEADLINE426 {
            display: block;
        }
        
        #HEADLINE426 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #HEADLINE427 {
            display: block;
        }
        
        #HEADLINE427 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #BOX428 {
            display: block;
        }
        
        #BOX428 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX428> .widget-content {
            border-radius: 6px;
        }
        
        #BOX428> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #COUNTDOWN429 {
            display: block;
        }
        
        #COUNTDOWN429 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 0px;
        }
        
        #GROUP430 {
            display: block;
        }
        
        #GROUP430 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM432 {
            display: block;
        }
        
        #FORM432 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM432 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM432 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM432 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM432 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM433 {
            display: block;
        }
        
        #ITEM_FORM433 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM433> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM433> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM433 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM433 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM433 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM433 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM435 {
            display: block;
        }
        
        #ITEM_FORM435 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM435> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM435> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM435 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM435 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM435 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM435 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM444 {
            display: block;
        }
        
        #ITEM_FORM444 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM444> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM444> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM444 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM444 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM444 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM444 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #BUTTON431 {
            display: table;
        }
        
        #BUTTON431 > .widget-content {
            background-color: rgba(244, 67, 54, 1);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 22px;
        }
        
        #BUTTON431> .widget-content {
            border-radius: 2px;
        }
        
        #BUTTON431> .ladi-widget-overlay {
            border-radius: 2px;
        }
        
        #HEADLINE418 {
            display: block;
        }
        
        #HEADLINE418 > .widget-content {
            color: rgba(244, 67, 54, 1);
            font-weight: 700;
            line-height: 25px;
        }
        
        #LINE176 {
            display: block;
        }
        
        #LINE176>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.09);
            margin-top: 12px;
        }
        
        #LINE176 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP188 {
            display: block;
        }
        
        #GROUP188 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE189 {
            display: block;
        }
        
        #HEADLINE189 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #HEADLINE190 {
            display: block;
        }
        
        #HEADLINE190 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #IMAGE449 {
            display: block;
        }
        
        #IMAGE449 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE449 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE452 {
            display: block;
        }
        
        #HEADLINE452 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION212 {
                width: 100%;
                height: 979.5834426879883px;
            }
            #SECTION212 .container {}
            #SECTION212 {
                background-image: url("https://static.ladipage.net/5a29f2a1d35c107ff6bcd1be/business-design-social-1513078644.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION38 {
                width: 100%;
                height: 555.5554809570312px;
            }
            #SECTION38 .container {}
            #SECTION38 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/banner-454815.png");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION86 {
                width: 100%;
                height: 1557.5348205566406px;
            }
            #SECTION86 .container {}
            #SECTION86 {
                background-image: none;
            }
            #POPUP456 {
                width: 100%;
                height: 100%;
            }
            #POPUP456 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP456 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION300 {
                width: 100%;
                height: 1023.2987060546875px;
            }
            #SECTION300 .container {}
            #SECTION300 {
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
            #POPUP294 {
                width: 100%;
                height: 100%;
            }
            #POPUP294 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP294 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP288 {
                width: 100%;
                height: 100%;
            }
            #POPUP288 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP288 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP282 {
                width: 100%;
                height: 100%;
            }
            #POPUP282 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP282 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP276 {
                width: 100%;
                height: 100%;
            }
            #POPUP276 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP276 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP270 {
                width: 100%;
                height: 100%;
            }
            #POPUP270 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP270 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP264 {
                width: 100%;
                height: 100%;
            }
            #POPUP264 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP264 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION98 {
                width: 100%;
                height: 1345.0068969726562px;
            }
            #SECTION98 .container {}
            #SECTION98 {
                background-image: none;
            }
            #SECTION338 {
                width: 100%;
                height: 878.9062805175781px;
            }
            #SECTION338 .container {}
            #SECTION338 {
                background-image: linear-gradient(rgba(218, 30, 16, 0.66), rgba(218, 30, 16, 0.66)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/geometry.png");
                background-image: -o-linear-gradient(rgba(218, 30, 16, 0.66), rgba(218, 30, 16, 0.66)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/geometry.png");
                background-image: -ms-linear-gradient(rgba(218, 30, 16, 0.66), rgba(218, 30, 16, 0.66)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/geometry.png");
                background-image: -moz-linear-gradient(rgba(218, 30, 16, 0.66), rgba(218, 30, 16, 0.66)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/geometry.png");
                background-image: -webkit-linear-gradient(rgba(218, 30, 16, 0.66), rgba(218, 30, 16, 0.66)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/geometry.png");
                background-position: top left;
                background-repeat: repeat;
            }
            #SECTION134 {
                width: 100%;
                height: 1306.4932250976562px;
            }
            #SECTION134 .container {}
            #SECTION134 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg_ykienhocvien.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION416 {
                width: 100%;
                height: 1040.3472595214844px;
            }
            #SECTION416 .container {}
            #SECTION416 {
                background-image: url("https://static.ladipage.net/5a29f2a1d35c107ff6bcd1be/business-design-social12-1513256358.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION174 {
                width: 100%;
                height: 372.96875190734863px;
            }
            #SECTION174 .container {}
            #SECTION174 {
                background-image: linear-gradient(rgba(4, 22, 43, 0.95), rgba(4, 22, 43, 0.95)), url("https://static.ladipage.net/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-image: -o-linear-gradient(rgba(4, 22, 43, 0.95), rgba(4, 22, 43, 0.95)), url("https://static.ladipage.net/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-image: -ms-linear-gradient(rgba(4, 22, 43, 0.95), rgba(4, 22, 43, 0.95)), url("https://static.ladipage.net/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-image: -moz-linear-gradient(rgba(4, 22, 43, 0.95), rgba(4, 22, 43, 0.95)), url("https://static.ladipage.net/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-image: -webkit-linear-gradient(rgba(4, 22, 43, 0.95), rgba(4, 22, 43, 0.95)), url("https://static.ladipage.net/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #BOX226 {
                top: 452.5px;
                left: 9.99998px;
                width: 355px;
                height: 152.65625px;
            }
            #HEADLINE225 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 122.21875px;
            }
            #HEADLINE225 > .widget-content {
                font-size: 56px;
                text-align: center;
            }
            #HEADLINE213 {
                top: 202.5px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 240px;
            }
            #HEADLINE213 > .widget-content {
                font-size: 54px;
                text-align: center;
            }
            #PARAGRAPH214 {
                top: 615.156px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 53.328125px;
            }
            #PARAGRAPH214 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE217 {
                top: 778.489px;
                left: 105.503px;
                padding: 0px;
                width: 163.984375px;
                height: 40px;
            }
            #HEADLINE217 > .widget-content {
                font-size: 36px;
                text-align: right;
            }
            #PARAGRAPH218 {
                top: 906.267px;
                left: 101.502px;
                padding: 0px;
                width: 171.984375px;
                height: 35.546875px;
            }
            #PARAGRAPH218 > .widget-content {
                font-size: 14px;
                text-align: right;
            }
            #PARAGRAPH220 {
                top: 878.489px;
                left: 113.507px;
                padding: 0px;
                width: 147.984375px;
                height: 17.765625px;
            }
            #PARAGRAPH220 > .widget-content {
                font-size: 14px;
                text-align: right;
            }
            #HEADLINE221 {
                top: 828.489px;
                left: 107.5px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #HEADLINE221 > .widget-content {
                font-size: 36px;
                text-align: right;
            }
            #PARAGRAPH223 {
                top: 951.823px;
                left: 101.502px;
                padding: 0px;
                width: 171.984375px;
                height: 17.765625px;
            }
            #PARAGRAPH223 > .widget-content {
                font-size: 14px;
                text-align: right;
            }
            #HEADLINE224 {
                top: 728.489px;
                left: 97.5px;
                padding: 0px;
                width: 180px;
                height: 40px;
            }
            #HEADLINE224 > .widget-content {
                font-size: 36px;
                text-align: right;
            }
            #BUTTON251 {
                top: 678.489px;
                left: 107.5px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON251 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BOX252 {
                top: 20px;
                left: 9.99998px;
                width: 355px;
                height: 172.5px;
            }
            #IMAGE253 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo-1512734330941.png);
            }
            #IMAGE253 {
                top: 20px;
                left: 0px;
                width: 355px;
                height: 31.375px;
            }
            #HEADLINE254 {
                top: 61.3889px;
                left: 121.51px;
                padding: 0px;
                width: 111.96875px;
                height: 30px;
            }
            #HEADLINE254 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BUTTON256 {
                top: 101.389px;
                left: 101.944px;
                padding: 0px;
                width: 151px;
                height: 26px;
            }
            #BUTTON256 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #HEADLINE255 {
                top: 136.945px;
                left: 57.9948px;
                padding: 0px;
                width: 239px;
                height: 25.546875px;
            }
            #HEADLINE255 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE41 {
                top: 335.556px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 77.765625px;
            }
            #HEADLINE41 > .widget-content {
                font-size: 21px;
                text-align: center;
                line-height: 26px;
            }
            #IMAGE240 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png);
            }
            #IMAGE240 {
                top: 20px;
                left: 112.5px;
                width: 150px;
                height: 260px;
            }
            #HEADLINE258 {
                top: 290px;
                left: 8.50694px;
                padding: 0px;
                width: 357.984375px;
                height: 35.546875px;
            }
            #HEADLINE258 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE259 {
                top: 423.334px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 122.21875px;
            }
            #HEADLINE259 > .widget-content {
                font-size: 19px;
                text-align: center;
            }
            #HEADLINE87 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 33.328125px;
            }
            #HEADLINE87 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #IMAGE88 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/uploads/images/bfc1d1bf-af34-4fe2-9361-35f7f9120640.png);
            }
            #IMAGE88 {
                display: block!important;
                top: 1248.54px;
                left: 93.75px;
                width: 187.5px;
                height: 298.984375px;
            }
            #GROUP453 {
                top: 63.3333px;
                left: 24.0017px;
                width: 326.984375px;
                height: 576.828125px;
            }
            #BOX91 {
                top: 189.375px;
                left: 1px;
                width: 201.984375px;
                height: 201.984375px;
            }
            #HEADLINE92 {
                top: 55px;
                left: 23.0069px;
                padding: 0px;
                width: 160px;
                height: 105.546875px;
            }
            #HEADLINE92 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX260 {
                top: 374.844px;
                left: 126px;
                width: 201.984375px;
                height: 201.984375px;
            }
            #HEADLINE261 {
                top: 62px;
                left: 23.007px;
                padding: 0px;
                width: 160px;
                height: 63.328125px;
            }
            #HEADLINE261 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX249 {
                top: 0px;
                left: 124.993px;
                width: 201.984375px;
                height: 201.984375px;
            }
            #HEADLINE250 {
                top: 57.0764px;
                left: 18.9167px;
                padding: 0px;
                width: 160px;
                height: 84.4375px;
            }
            #HEADLINE250 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #GROUP454 {
                top: 650.174px;
                left: 24.5052px;
                width: 325.984375px;
                height: 588.359375px;
            }
            #BOX262 {
                top: 376.372px;
                left: 3.95142px;
                width: 201.984375px;
                height: 201.984375px;
            }
            #HEADLINE263 {
                top: 62px;
                left: 23.9097px;
                padding: 0px;
                width: 160px;
                height: 84.4375px;
            }
            #HEADLINE263 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX95 {
                top: 0px;
                left: 1px;
                width: 201.984375px;
                height: 201.984375px;
            }
            #HEADLINE96 {
                top: 59px;
                left: 22.9896px;
                padding: 0px;
                width: 160px;
                height: 84.4375px;
            }
            #HEADLINE96 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX93 {
                top: 188.003px;
                left: 124.993px;
                width: 201.984375px;
                height: 201.984375px;
            }
            #HEADLINE94 {
                top: 70px;
                left: 22px;
                padding: 0px;
                width: 160px;
                height: 63.328125px;
            }
            #HEADLINE94 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #LINEVERTICAL459 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH460 {
                top: 40.9896px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 180px;
            }
            #PARAGRAPH460 > .widget-content {
                font-size: 15px;
                text-align: left;
                line-height: 22px;
            }
            #IMAGE314 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007569.jpg);
            }
            #IMAGE314 {
                top: 101.111px;
                left: 9.99998px;
                width: 355px;
                height: 470px;
            }
            #BOX301 {
                top: 581.111px;
                left: 9.99998px;
                width: 355px;
                height: 432.203125px;
            }
            #HEADLINE302 {
                top: 47.7778px;
                left: 43.0556px;
                padding: 0px;
                width: 268.875px;
                height: 24.4375px;
            }
            #HEADLINE302 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE308 {
                top: 20px;
                left: 38.6111px;
                padding: 0px;
                width: 277.765625px;
                height: 17.765625px;
            }
            #HEADLINE308 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #LISTOP315 {
                top: 82.2223px;
                left: 0px;
                width: 355px;
                height: 340px;
            }
            #LISTOP315 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP315 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(13, 71, 161, 1);
                margin-right: 8px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(13,71,161,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP315 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP315 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE317 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 71.109375px;
            }
            #HEADLINE317 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #LINEVERTICAL297 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH298 {
                top: 32.9688px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 160px;
            }
            #PARAGRAPH298 > .widget-content {
                font-size: 15px;
                text-align: left;
                line-height: 22px;
            }
            #LINEVERTICAL291 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH292 {
                top: 39.6181px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 100px;
            }
            #PARAGRAPH292 > .widget-content {
                font-size: 15px;
                text-align: left;
                line-height: 22px;
            }
            #LINEVERTICAL285 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH286 {
                top: 48.6285px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 140px;
            }
            #PARAGRAPH286 > .widget-content {
                font-size: 15px;
                text-align: left;
                line-height: 22px;
            }
            #LINEVERTICAL279 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH280 {
                top: 34.9653px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 160px;
            }
            #PARAGRAPH280 > .widget-content {
                font-size: 15px;
                text-align: left;
                line-height: 22px;
            }
            #LINEVERTICAL273 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH274 {
                top: 32.9861px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 180px;
            }
            #PARAGRAPH274 > .widget-content {
                font-size: 15px;
                text-align: left;
                line-height: 22px;
            }
            #PARAGRAPH268 {
                top: 75.3472px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 380px;
            }
            #PARAGRAPH268 > .widget-content {
                font-size: 15px;
                text-align: left;
                line-height: 22px;
            }
            #LINEVERTICAL267 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #HEADLINE119 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 66.65625px;
            }
            #HEADLINE119 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #YOUTUBE318 {
                top: 580px;
                left: 9.99998px;
                width: 355px;
                height: 177.22222222222223px;
            }
            #LISTOP319 {
                top: 96.6667px;
                left: 9.99998px;
                width: 355px;
                height: 473.328125px;
            }
            #LISTOP319 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #LISTOP319 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(244, 67, 54, 1);
                margin-right: 8px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(244,67,54,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M4,10V14H13L9.5,17.5L11.92,19.92L19.84,12L11.92,4.08L9.5,6.5L13,10H4Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP319 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP319 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BUTTON320 {
                top: 767.222px;
                left: 110.278px;
                padding: 0px;
                width: 154px;
                height: 26px;
            }
            #BUTTON320 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX341 {
                top: 454.949px;
                left: 47.5px;
                width: 280px;
                height: 127.984375px;
            }
            #PARAGRAPH342 {
                top: 23px;
                left: 23px;
                padding: 0px;
                width: 222.21875px;
                height: 80px;
            }
            #PARAGRAPH342 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE343 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
            }
            #IMAGE343 {
                top: 307.97px;
                left: 38.0035px;
                width: 298.984375px;
                height: 38.984375px;
            }
            #HEADLINE344 {
                top: 9.42709px;
                left: 5.97223px;
                padding: 0px;
                width: 255.546875px;
                height: 21.109375px;
            }
            #HEADLINE344 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX348 {
                top: 592.935px;
                left: 47.5px;
                width: 280px;
                height: 127.984375px;
            }
            #PARAGRAPH349 {
                top: 23px;
                left: 23px;
                padding: 0px;
                width: 222.21875px;
                height: 60px;
            }
            #PARAGRAPH349 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE350 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
            }
            #IMAGE350 {
                top: 356.963px;
                left: 38.0035px;
                width: 298.984375px;
                height: 38.984375px;
            }
            #HEADLINE351 {
                top: 8.42014px;
                left: 18.0035px;
                padding: 0px;
                width: 255.546875px;
                height: 21.109375px;
            }
            #HEADLINE351 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX355 {
                top: 730.921px;
                left: 47.5px;
                width: 280px;
                height: 127.984375px;
            }
            #PARAGRAPH356 {
                top: 23px;
                left: 23px;
                padding: 0px;
                width: 222.21875px;
                height: 80px;
            }
            #PARAGRAPH356 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE357 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
            }
            #IMAGE357 {
                top: 405.956px;
                left: 38.0035px;
                width: 298.984375px;
                height: 38.984375px;
            }
            #HEADLINE358 {
                top: 10.4167px;
                left: 15px;
                padding: 0px;
                width: 255.546875px;
                height: 21.109375px;
            }
            #HEADLINE358 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX359 {
                top: 211.98px;
                left: 142.5px;
                width: 90px;
                height: 85.984375px;
            }
            #SHAPE360 {
                top: 18px;
                left: 20px;
                width: 50px;
                height: 50px;
            }
            #BOX352 {
                top: 115.99px;
                left: 142.5px;
                width: 90px;
                height: 85.984375px;
            }
            #SHAPE353 {
                top: 18px;
                left: 20px;
                width: 50px;
                height: 50px;
            }
            #BOX345 {
                top: 20px;
                left: 142.5px;
                width: 90px;
                height: 85.984375px;
            }
            #SHAPE346 {
                top: 18px;
                left: 20px;
                width: 50px;
                height: 50px;
            }
            #HEADLINE152 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 66.65625px;
            }
            #HEADLINE152 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP370 {
                top: 96.6667px;
                left: 9.99998px;
                width: 355px;
                height: 589.875px;
            }
            #GROUP147 {
                top: 20px;
                left: 21.5017px;
                width: 311.984375px;
                height: 180.953125px;
            }
            #PARAGRAPH148 {
                top: 60.9549px;
                left: 94.0035px;
                padding: 0px;
                width: 218.875px;
                height: 60px;
            }
            #PARAGRAPH148 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE149 {
                top: 7.96875px;
                left: 92.9965px;
                padding: 0px;
                width: 220px;
                height: 21.109375px;
            }
            #HEADLINE149 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX150 {
                top: 0px;
                left: 1px;
                width: 80.984375px;
                height: 80.984375px;
            }
            #BOX150 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE151 {
                top: 32.9688px;
                left: 92.9965px;
                padding: 0px;
                width: 220px;
                height: 16.65625px;
            }
            #HEADLINE151 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP142 {
                top: 401.91px;
                left: 14.2795px;
                width: 326.4375px;
                height: 177.984375px;
            }
            #PARAGRAPH143 {
                top: 57.9861px;
                left: 94.0034px;
                padding: 0px;
                width: 218.875px;
                height: 80px;
            }
            #PARAGRAPH143 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE144 {
                top: 5px;
                left: 92.9965px;
                padding: 0px;
                width: 220px;
                height: 21.109375px;
            }
            #HEADLINE144 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX145 {
                top: 0px;
                left: 1px;
                width: 80.984375px;
                height: 80.984375px;
            }
            #BOX145 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE146 {
                top: 30px;
                left: 92.9965px;
                padding: 0px;
                width: 234.453125px;
                height: 16.65625px;
            }
            #HEADLINE146 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP137 {
                top: 210.955px;
                left: 21.5017px;
                width: 311.984375px;
                height: 180.953125px;
            }
            #PARAGRAPH138 {
                top: 60.9549px;
                left: 94.0035px;
                padding: 0px;
                width: 218.875px;
                height: 80px;
            }
            #PARAGRAPH138 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE139 {
                top: 7.96875px;
                left: 92.9965px;
                padding: 0px;
                width: 220px;
                height: 21.109375px;
            }
            #HEADLINE139 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX140 {
                top: 0px;
                left: 1px;
                width: 80.984375px;
                height: 80.984375px;
            }
            #BOX140 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE141 {
                top: 32.9688px;
                left: 92.9965px;
                padding: 0px;
                width: 220px;
                height: 16.65625px;
            }
            #HEADLINE141 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP371 {
                top: 696.545px;
                left: 9.99998px;
                width: 355px;
                height: 589.9375px;
            }
            #GROUP372 {
                top: 20px;
                left: 21.5017px;
                width: 311.984375px;
                height: 180.984375px;
            }
            #PARAGRAPH373 {
                top: 60.9896px;
                left: 94.0035px;
                padding: 0px;
                width: 218.875px;
                height: 40px;
            }
            #PARAGRAPH373 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE374 {
                top: 7.98611px;
                left: 92.9965px;
                padding: 0px;
                width: 220px;
                height: 21.109375px;
            }
            #HEADLINE374 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX375 {
                top: 0px;
                left: 1px;
                width: 80.984375px;
                height: 80.984375px;
            }
            #BOX375 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE376 {
                top: 32.9861px;
                left: 92.9965px;
                padding: 0px;
                width: 220px;
                height: 16.65625px;
            }
            #HEADLINE376 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP377 {
                top: 401.98px;
                left: 21.5017px;
                width: 311.984375px;
                height: 177.984375px;
            }
            #PARAGRAPH378 {
                top: 57.9861px;
                left: 94.0035px;
                padding: 0px;
                width: 218.875px;
                height: 40px;
            }
            #PARAGRAPH378 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE379 {
                top: 5px;
                left: 92.9966px;
                padding: 0px;
                width: 220px;
                height: 21.109375px;
            }
            #HEADLINE379 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX380 {
                top: 0px;
                left: 1px;
                width: 80.984375px;
                height: 80.984375px;
            }
            #BOX380 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE381 {
                top: 30px;
                left: 92.9966px;
                padding: 0px;
                width: 220px;
                height: 16.65625px;
            }
            #HEADLINE381 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP382 {
                top: 210.99px;
                left: 21.5017px;
                width: 311.984375px;
                height: 180.984375px;
            }
            #PARAGRAPH383 {
                top: 60.9896px;
                left: 94.0035px;
                padding: 0px;
                width: 218.875px;
                height: 80px;
            }
            #PARAGRAPH383 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE384 {
                top: 7.98611px;
                left: 92.9965px;
                padding: 0px;
                width: 220px;
                height: 21.109375px;
            }
            #HEADLINE384 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX385 {
                top: 0px;
                left: 1px;
                width: 80.984375px;
                height: 80.984375px;
            }
            #BOX385 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE386 {
                top: 32.9861px;
                left: 92.9965px;
                padding: 0px;
                width: 220px;
                height: 16.65625px;
            }
            #HEADLINE386 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX445 {
                top: 518.576px;
                left: 9.99998px;
                width: 355px;
                height: 501.765625px;
            }
            #SHAPE437 {
                top: 20px;
                left: 149.002px;
                width: 56.984375px;
                height: 56.984375px;
            }
            #HEADLINE438 {
                top: 86.9965px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 113.328125px;
            }
            #HEADLINE438 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE447 {
                top: 270.33px;
                left: 22.5px;
                padding: 0px;
                width: 310px;
                height: 40px;
            }
            #HEADLINE447 > .widget-content {
                font-size: 34px;
                text-align: left;
            }
            #HEADLINE446 {
                top: 210.33px;
                left: 77.5px;
                padding: 0px;
                width: 200px;
                height: 50px;
            }
            #HEADLINE446 > .widget-content {
                font-size: 45px;
                text-align: left;
            }
            #BOX440 {
                top: 320.33px;
                left: 151.502px;
                width: 51.984375px;
                height: 51.984375px;
            }
            #SHAPE441 {
                top: 9px;
                left: 9px;
                width: 32.984375px;
                height: 32.984375px;
            }
            #BUTTON442 {
                top: 382.327px;
                left: 81.3889px;
                padding: 0px;
                width: 192px;
                height: 24px;
            }
            #BUTTON442 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX417 {
                top: 20px;
                left: 37.5px;
                width: 300px;
                height: 488.5625px;
            }
            #GROUP419 {
                top: 93.3333px;
                left: 0px;
                width: 300px;
                height: 97.984375px;
            }
            #GROUP420 {
                top: 0px;
                left: 1.8125px;
                width: 294.328125px;
                height: 97.984375px;
            }
            #BOX421 {
                top: 28px;
                left: 1px;
                width: 68.4375px;
                height: 70px;
            }
            #HEADLINE422 {
                top: 0px;
                left: 6.25px;
                padding: 0px;
                width: 61.421875px;
                height: 17.984375px;
            }
            #HEADLINE422 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE423 {
                top: 0px;
                left: 81.2656px;
                padding: 0px;
                width: 61.421875px;
                height: 17.984375px;
            }
            #HEADLINE423 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX424 {
                top: 28px;
                left: 76px;
                width: 68.4375px;
                height: 70px;
            }
            #BOX425 {
                top: 28px;
                left: 226.891px;
                width: 68.4375px;
                height: 70px;
            }
            #HEADLINE426 {
                top: 0px;
                left: 228.172px;
                padding: 0px;
                width: 61.421875px;
                height: 17.984375px;
            }
            #HEADLINE426 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE427 {
                top: 0px;
                left: 156.172px;
                padding: 0px;
                width: 61.421875px;
                height: 17.984375px;
            }
            #HEADLINE427 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX428 {
                top: 28px;
                left: 150.875px;
                width: 68.4375px;
                height: 70px;
            }
            #COUNTDOWN429 {
                top: 40px;
                left: 1px;
                width: 297.984375px;
                height: 42.984375px;
            }
            #COUNTDOWN429 > .widget-content {
                font-size: 36px;
            }
            #GROUP430 {
                top: 201.319px;
                left: 16.0069px;
                width: 267.984375px;
                height: 277.28125px;
            }
            #FORM432 {
                top: 20px;
                left: 0px;
                width: 267.984375px;
                height: 192.203125px;
            }
            #FORM432 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM433 {
                top: 20px;
                left: 0px;
                width: 267.984375px;
                height: 46.125px;
            }
            #ITEM_FORM433 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM435 {
                top: 76.1285px;
                left: 0px;
                width: 267.984375px;
                height: 46.125px;
            }
            #ITEM_FORM435 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM444 {
                top: 132.257px;
                left: 0px;
                width: 267.984375px;
                height: 49.953125px;
            }
            #ITEM_FORM444 > .widget-content {
                font-size: 17px;
            }
            #BUTTON431 {
                top: 222.205px;
                left: 0px;
                padding: 0px;
                width: 267px;
                height: 49px;
            }
            #BUTTON431 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE418 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 63.328125px;
            }
            #HEADLINE418 > .widget-content {
                font-size: 18px;
                text-align: center;
                line-height: 22px;
            }
            #LINE176 {
                top: 327.986px;
                left: 37.5px;
                width: 300px;
                height: 25px;
            }
            #GROUP188 {
                top: 170px;
                left: 74.5052px;
                width: 225.984375px;
                height: 87.984375px;
            }
            #HEADLINE189 {
                top: 0px;
                left: 2px;
                padding: 0px;
                width: 220px;
                height: 20px;
            }
            #HEADLINE189 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE190 {
                top: 37px;
                left: 1px;
                padding: 0px;
                width: 225.546875px;
                height: 50px;
            }
            #HEADLINE190 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #IMAGE449 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo_white-1513079500.png);
            }
            #IMAGE449 {
                top: 20px;
                left: 117.5px;
                width: 140px;
                height: 140px;
            }
            #HEADLINE452 {
                top: 267.986px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 50px;
            }
            #HEADLINE452 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
        }
    </style>