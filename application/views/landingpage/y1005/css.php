
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
            var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Lobster|Roboto:300,400,700|Trirong:300,400,600,700|Roboto+Slab:300,400,700&amp;subset=latin-ext,vietnamese';
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
                height: 855px;
            }
            #SECTION2 .container {}
            #SECTION2 {}
            #SECTION37 {
                width: 100%;
                height: 609px;
            }
            #SECTION37 .container {}
            #SECTION37 {}
            #SECTION16 {
                width: 100%;
                height: 617px;
            }
            #SECTION16 .container {}
            #SECTION16 {}
            #SECTION59 {
                width: 100%;
                height: 1110px;
            }
            #SECTION59 .container {}
            #SECTION59 {}
            #SECTION88 {
                width: 100%;
                height: 755.6458740234375px;
            }
            #SECTION88 .container {}
            #SECTION88 {}
            #SECTION113 {
                width: 100%;
                height: 286px;
            }
            #SECTION113 .container {}
            #SECTION113 {}
            #SECTION123 {
                width: 100%;
                height: 906px;
            }
            #SECTION123 .container {}
            #SECTION123 {}
            #POPUP103 {
                width: 100%;
                height: 100%;
            }
            #POPUP103 .container {
                width: 426px;
                height: 478px;
                top: calc(100%-478px);
            }
            #POPUP103 {}
            #IMAGE11 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/uploads/images/9c774750-cf11-45f4-9b17-fa488a720e31.png);
            }
            #IMAGE11 {
                top: 34px;
                left: -359px;
                width: 114.28125px;
                height: 24px;
            }
            #GROUP12 {
                top: 34px;
                left: 1224px;
                width: 112px;
                height: 24px;
            }
            #SHAPE13 {
                top: 0px;
                left: 0px;
                width: 24px;
                height: 24px;
            }
            #SHAPE14 {
                top: 0px;
                left: 88px;
                width: 24px;
                height: 24px;
            }
            #SHAPE15 {
                top: 0px;
                left: 44px;
                width: 24px;
                height: 24px;
            }
            #BOX3 {
                top: 163px;
                left: 255px;
                width: 420.5px;
                height: 536.3333740234375px;
            }
            #HEADLINE4 {
                top: 32px;
                left: 70px;
                padding: 0px;
                width: 188.33334350585938px;
                height: 56px;
            }
            #HEADLINE4 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #GROUP5 {
                top: 94px;
                left: 76.66668701171875px;
                width: 138px;
                height: 28px;
            }
            #LINE6 {
                top: 0px;
                left: 1px;
                width: 44px;
                height: 25px;
            }
            #SHAPE7 {
                top: 0px;
                left: 58px;
                width: 28px;
                height: 28px;
            }
            #LINE8 {
                top: 0px;
                left: 98px;
                width: 41px;
                height: 25px;
            }
            #HEADLINE10 {
                top: 122px;
                left: 78.97918701171875px;
                padding: 0px;
                width: 318.66668701171875px;
                height: 240px;
            }
            #HEADLINE10 > .widget-content {
                font-size: 72px;
                text-align: left;
            }
            #HEADLINE9 {
                top: 391.31251525878906px;
                left: 71.625px;
                padding: 0px;
                width: 262.3333435058594px;
                height: 109.33333587646484px;
            }
            #HEADLINE9 > .widget-content {
                font-size: 49px;
                text-align: left;
            }
            #BOX38 {
                top: 322px;
                left: 104px;
                width: 261px;
                height: 87px;
            }
            #HEADLINE39 {
                top: 20px;
                left: 33.64581298828125px;
                padding: 0px;
                width: 200px;
                height: 56px;
            }
            #HEADLINE39 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #BOX40 {
                top: 208px;
                left: 104px;
                width: 261px;
                height: 89px;
            }
            #HEADLINE41 {
                top: 30px;
                left: 33.64581298828125px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE41 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #BOX42 {
                top: 318px;
                left: 602px;
                width: 261px;
                height: 86px;
            }
            #HEADLINE43 {
                top: 29px;
                left: 33.66668701171875px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE43 > .widget-content {
                font-size: 23px;
                text-align: center;
            }
            #BOX44 {
                top: 207px;
                left: 601px;
                width: 261px;
                height: 90px;
            }
            #HEADLINE45 {
                top: 28px;
                left: 33.66668701171875px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE45 > .widget-content {
                font-size: 23px;
                text-align: center;
            }
            #HEADLINE46 {
                top: 103px;
                left: 110px;
                padding: 0px;
                width: 734.6666870117188px;
                height: 72px;
            }
            #HEADLINE46 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX48 {
                top: 431px;
                left: 106px;
                width: 261px;
                height: 87px;
            }
            #HEADLINE49 {
                top: 13px;
                left: 33.64581298828125px;
                padding: 0px;
                width: 200px;
                height: 56px;
            }
            #HEADLINE49 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #BOX50 {
                top: 427px;
                left: 604px;
                width: 261px;
                height: 86px;
            }
            #HEADLINE51 {
                top: 27px;
                left: 33.66668701171875px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE51 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #HEADLINE19 {
                top: 66px;
                left: 0.666687px;
                padding: 0px;
                width: 428px;
                height: 56px;
            }
            #HEADLINE19 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #GROUP24 {
                top: 401px;
                left: 647.5px;
                width: 227px;
                height: 124px;
            }
            #SHAPE25 {
                top: 0px;
                left: 1px;
                width: 50px;
                height: 50px;
            }
            #HEADLINE26 {
                top: 64px;
                left: 4px;
                padding: 0px;
                width: 224px;
                height: 60px;
            }
            #HEADLINE26 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP28 {
                top: 392px;
                left: 295.5px;
                width: 247px;
                height: 124px;
            }
            #SHAPE29 {
                top: 0px;
                left: 1px;
                width: 50px;
                height: 50px;
            }
            #HEADLINE30 {
                top: 64px;
                left: 4px;
                padding: 0px;
                width: 244px;
                height: 40px;
            }
            #HEADLINE30 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP32 {
                top: 389px;
                left: 1px;
                width: 251px;
                height: 104px;
            }
            #SHAPE33 {
                top: 0px;
                left: 1px;
                width: 50px;
                height: 50px;
            }
            #HEADLINE34 {
                top: 64px;
                left: 4px;
                padding: 0px;
                width: 248px;
                height: 40px;
            }
            #HEADLINE34 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #YOUTUBE36 {
                top: 12px;
                left: 380.793px;
                width: 567.875px;
                height: 314.3333435058594px;
            }
            #HEADLINE52 {
                top: 136px;
                left: 0.666687px;
                padding: 0px;
                width: 310.3333435058594px;
                height: 48px;
            }
            #HEADLINE52 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #SHAPE21 {
                top: 213px;
                left: 2px;
                width: 50px;
                height: 50px;
            }
            #HEADLINE22 {
                top: 277px;
                left: 5px;
                padding: 0px;
                width: 249px;
                height: 60px;
            }
            #HEADLINE22 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX62 {
                top: -1.33334px;
                left: 0.02081px;
                width: 960px;
                height: 73.33333587646484px;
            }
            #HEADLINE60 {
                top: 19.25px;
                left: 327.3125px;
                padding: 0px;
                width: 368.3333435058594px;
                height: 36px;
            }
            #HEADLINE60 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE65 {
                top: 87px;
                left: 0.999987px;
                padding: 0px;
                width: 424.3333435058594px;
                height: 72px;
            }
            #HEADLINE65 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE70 {
                top: 165px;
                left: 0.999687px;
                padding: 0px;
                width: 430.3333435058594px;
                height: 72px;
            }
            #HEADLINE70 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE72 {
                top: 244.667px;
                left: 0.666687px;
                padding: 0px;
                width: 405.3333435058594px;
                height: 72px;
            }
            #HEADLINE72 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE74 {
                top: 323px;
                left: 0.333687px;
                padding: 0px;
                width: 438.66668701171875px;
                height: 72px;
            }
            #HEADLINE74 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE76 {
                top: 395.001px;
                left: 7.40117e-05px;
                padding: 0px;
                width: 425.3333435058594px;
                height: 72px;
            }
            #HEADLINE76 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE77 {
                top: 90.6667px;
                left: 515.666px;
                padding: 0px;
                width: 405.3333435058594px;
                height: 72px;
            }
            #HEADLINE77 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE81 {
                top: 245.334px;
                left: 516px;
                padding: 0px;
                width: 432px;
                height: 36px;
            }
            #HEADLINE81 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE87 {
                top: 1042px;
                left: 123.021px;
                padding: 0px;
                width: 956.6666870117188px;
                height: 36px;
            }
            #HEADLINE87 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE79 {
                top: 161.667px;
                left: 514.667px;
                padding: 0px;
                width: 468px;
                height: 36px;
            }
            #HEADLINE79 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE85 {
                top: 321px;
                left: 508px;
                padding: 0px;
                width: 430.66668701171875px;
                height: 36px;
            }
            #HEADLINE85 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #IMAGE89 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/MG_4718-1512982071.JPG);
            }
            #IMAGE89 {
                top: 40px;
                left: 2px;
                width: 435.3333435058594px;
                height: 452.3333435058594px;
            }
            #PARAGRAPH90 {
                top: 34px;
                left: 490.687px;
                padding: 0px;
                width: 477.3333435058594px;
                height: 576px;
            }
            #PARAGRAPH90 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #PARAGRAPH91 {
                top: 551px;
                left: 33px;
                padding: 0px;
                width: 404px;
                height: 72px;
            }
            #PARAGRAPH91 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE92 {
                top: 505px;
                left: 60.3541px;
                padding: 0px;
                width: 271.3333435058594px;
                height: 36px;
            }
            #HEADLINE92 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #SHAPE93 {
                top: 34.6458px;
                left: 451px;
                width: 40.333335876464844px;
                height: 40.333335876464844px;
            }
            #SHAPE94 {
                top: 98.667px;
                left: 450.979px;
                width: 40.333335876464844px;
                height: 40.333335876464844px;
            }
            #SHAPE95 {
                top: 161.333px;
                left: 451px;
                width: 40.333335876464844px;
                height: 40.333335876464844px;
            }
            #SHAPE97 {
                top: 321.979px;
                left: 451px;
                width: 40.333335876464844px;
                height: 40.333335876464844px;
            }
            #SHAPE98 {
                top: 218.667px;
                left: 450.667px;
                width: 40.333335876464844px;
                height: 40.333335876464844px;
            }
            #SHAPE100 {
                top: 387.333px;
                left: 451px;
                width: 40.333335876464844px;
                height: 40.333335876464844px;
            }
            #SHAPE101 {
                top: 450.333px;
                left: 451.666px;
                width: 40.333335876464844px;
                height: 40.333335876464844px;
            }
            #BUTTON102 {
                top: 650.646px;
                left: 325px;
                padding: 0px;
                width: 346.66668701171875px;
                height: 72px;
            }
            #BUTTON102 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #HEADLINE114 {
                top: 11.3125px;
                left: 319px;
                padding: 0px;
                width: 393.3333435058594px;
                height: 36px;
            }
            #HEADLINE114 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #SHAPE116 {
                top: 44.6875px;
                left: 119.354px;
                width: 92.33333587646484px;
                height: 92.33333587646484px;
            }
            #SHAPE118 {
                top: 42.2917px;
                left: 411.666px;
                width: 98.33333587646484px;
                height: 98.33333587646484px;
            }
            #SHAPE119 {
                top: 41.3716px;
                left: 735.354px;
                width: 101.33333587646484px;
                height: 97px;
            }
            #HEADLINE120 {
                top: 139.667px;
                left: 50.2708px;
                padding: 0px;
                width: 234.33334350585938px;
                height: 76px;
            }
            #HEADLINE120 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE121 {
                top: 138.667px;
                left: 379.667px;
                padding: 0px;
                width: 200px;
                height: 101.33333587646484px;
            }
            #HEADLINE121 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE122 {
                top: 139px;
                left: 699px;
                padding: 0px;
                width: 200px;
                height: 101.33333587646484px;
            }
            #HEADLINE122 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE124 {
                top: 166px;
                left: 260px;
                padding: 0px;
                width: 392px;
                height: 28px;
            }
            #HEADLINE124 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #HEADLINE125 {
                top: 74.6458px;
                left: 236px;
                padding: 0px;
                width: 463px;
                height: 66.66667175292969px;
            }
            #HEADLINE125 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP127 {
                top: 233px;
                left: 173px;
                width: 593px;
                height: 324.00001525878906px;
            }
            #FORM128 {
                top: 0px;
                left: 1px;
                width: 592px;
                height: 268px;
            }
            #ITEM_FORM129 {
                top: 0px;
                left: 1px;
                width: 290px;
                height: 41px;
            }
            #ITEM_FORM130 {
                top: 0px;
                left: 307px;
                width: 283px;
                height: 41px;
            }
            #ITEM_FORM131 {
                top: 58px;
                left: 0px;
                width: 592px;
                height: 41px;
            }
            #ITEM_FORM132 {
                top: 116px;
                left: 1px;
                width: 591px;
                height: 152px;
            }
            #BUTTON133 {
                top: 284.00001525878906px;
                left: 2px;
                padding: 0px;
                width: 592px;
                height: 40px;
            }
            #BUTTON133 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE156 {
                top: 671px;
                left: 173.979px;
                padding: 0px;
                width: 627.3333740234375px;
                height: 200px;
            }
            #HEADLINE156 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #SHAPE157 {
                top: 707.333px;
                left: 106.292px;
                width: 45.60416793823242px;
                height: 42.333335876464844px;
            }
            #SHAPE158 {
                top: 786.666px;
                left: 107.271px;
                width: 44.3125px;
                height: 46.333335876464844px;
            }
            #SHAPE159 {
                top: 749.333px;
                left: 106.917px;
                width: 45.645835876464844px;
                height: 37.333335876464844px;
            }
            #SHAPE161 {
                top: 839px;
                left: 117.167px;
                width: 35.333335876464844px;
                height: 37.333335876464844px;
            }
            #FORM104 {
                top: 189px;
                left: 46px;
                width: 334px;
                height: 160.984375px;
            }
            #FORM104 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM105 {
                top: 0px;
                left: 0px;
                width: 334px;
                height: 43.1875px;
            }
            #ITEM_FORM105 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM106 {
                top: 58.9024px;
                left: 0px;
                width: 334px;
                height: 43.1875px;
            }
            #ITEM_FORM106 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM107 {
                top: 117.805px;
                left: 0px;
                width: 334px;
                height: 43.1875px;
            }
            #ITEM_FORM107 > .widget-content {
                font-size: 14px;
            }
            #BUTTON108 {
                top: 374px;
                left: 47px;
                padding: 0px;
                width: 334px;
                height: 44px;
            }
            #BUTTON108 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE109 {
                top: 49px;
                left: 77px;
                padding: 0px;
                width: 330.66668701171875px;
                height: 82.66667175292969px;
            }
            #HEADLINE109 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #SHAPE111 {
                top: 50px;
                left: 29px;
                width: 43px;
                height: 43px;
            }
            #PARAGRAPH112 {
                top: 129px;
                left: 41px;
                padding: 0px;
                width: 340px;
                height: 53.333335876464844px;
            }
            #PARAGRAPH112 > .widget-content {
                font-size: 48px;
                text-align: center;
            }
        }
        
        #SECTION2 {
            display: block;
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/maxresdefault-1512976141.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION2 > .ladi-widget-overlay {
            background-color: rgba(33, 33, 33, 0.21);
        }
        
        #SECTION37 {
            display: block;
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1512793662930.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION37 > .ladi-widget-overlay {
            background-color: rgba(54, 54, 54, 0.59);
        }
        
        #SECTION16 {
            display: block;
            background-color: rgba(158, 158, 158, 0.38);
        }
        
        #SECTION59 {
            display: block;
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/18422140_10209260136442273_9054001877007743146_o-1512979666.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION59 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #SECTION88 {
            display: block;
            background-color: rgba(194, 255, 7, 0.26);
        }
        
        #SECTION113 {
            display: block;
            background-color: rgba(255, 255, 255, 0);
        }
        
        #SECTION123 {
            display: block;
            background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-381653_1920-1512984377.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION123 > .ladi-widget-overlay {
            background-color: rgba(1, 7, 28, 0.29);
        }
        
        #POPUP103 .container {
            display: block;
            background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/01.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: auto 100%;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP103 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #IMAGE11 {
            display: block;
        }
        
        #IMAGE11 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE11 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #GROUP12 {
            display: block;
        }
        
        #GROUP12 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE13 {
            display: block;
        }
        
        #SHAPE13 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE13> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #SHAPE14 {
            display: block;
        }
        
        #SHAPE14 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE14> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #SHAPE15 {
            display: block;
        }
        
        #SHAPE15 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE15> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #BOX3 {
            display: block;
        }
        
        #BOX3 > .widget-content {
            background-color: rgba(189, 189, 189, 0.02);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX3> .widget-content {
            border-width: 8px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX3> .ladi-widget-overlay {
            border-width: 8px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE4 {
            display: block;
        }
        
        #HEADLINE4 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Lobster';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #GROUP5 {
            display: block;
        }
        
        #GROUP5 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE6 {
            display: block;
        }
        
        #LINE6>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 10.5px;
        }
        
        #LINE6 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE7 {
            display: block;
        }
        
        #SHAPE7 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE7> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #LINE8 {
            display: block;
        }
        
        #LINE8>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 10.5px;
        }
        
        #LINE8 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE10 {
            display: block;
        }
        
        #HEADLINE10 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 80px;
            letter-spacing: 1px;
        }
        
        #HEADLINE9 {
            display: block;
        }
        
        #HEADLINE9 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 55px;
            letter-spacing: 4.6px;
        }
        
        #BOX38 {
            display: block;
        }
        
        #BOX38 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(255, 31, 0, 1);
        }
        
        #HEADLINE39 {
            display: block;
        }
        
        #HEADLINE39 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 29px;
        }
        
        #BOX40 {
            display: block;
        }
        
        #BOX40 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(255, 31, 0, 1);
        }
        
        #HEADLINE41 {
            display: block;
        }
        
        #HEADLINE41 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 29px;
        }
        
        #BOX42 {
            display: block;
        }
        
        #BOX42 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(255, 31, 0, 1);
        }
        
        #HEADLINE43 {
            display: block;
        }
        
        #HEADLINE43 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 29px;
        }
        
        #BOX44 {
            display: block;
        }
        
        #BOX44 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(255, 31, 0, 1);
        }
        
        #HEADLINE45 {
            display: block;
        }
        
        #HEADLINE45 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 29px;
        }
        
        #HEADLINE46 {
            display: block;
        }
        
        #HEADLINE46 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 36px;
        }
        
        #BOX48 {
            display: block;
        }
        
        #BOX48 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(255, 31, 0, 1);
        }
        
        #HEADLINE49 {
            display: block;
        }
        
        #HEADLINE49 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 29px;
        }
        
        #BOX50 {
            display: block;
        }
        
        #BOX50 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(255, 31, 0, 1);
        }
        
        #HEADLINE51 {
            display: block;
        }
        
        #HEADLINE51 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 29px;
        }
        
        #HEADLINE19 {
            display: block;
        }
        
        #HEADLINE19 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 700;
            line-height: 28px;
            letter-spacing: 1px;
        }
        
        #GROUP24 {
            display: block;
        }
        
        #GROUP24 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE25 {
            display: block;
        }
        
        #SHAPE25 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 87, 34, 1);
        }
        
        #SHAPE25> .widget-content svg {
            fill: rgba(255, 87, 34, 1);
        }
        
        #HEADLINE26 {
            display: block;
        }
        
        #HEADLINE26 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #GROUP28 {
            display: block;
        }
        
        #GROUP28 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE29 {
            display: block;
        }
        
        #SHAPE29 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 87, 34, 1);
        }
        
        #SHAPE29> .widget-content svg {
            fill: rgba(255, 87, 34, 1);
        }
        
        #HEADLINE30 {
            display: block;
        }
        
        #HEADLINE30 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #GROUP32 {
            display: block;
        }
        
        #GROUP32 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE33 {
            display: block;
        }
        
        #SHAPE33 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 87, 34, 1);
        }
        
        #SHAPE33> .widget-content svg {
            fill: rgba(255, 87, 34, 1);
        }
        
        #HEADLINE34 {
            display: block;
        }
        
        #HEADLINE34 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #YOUTUBE36 {
            display: block;
        }
        
        #YOUTUBE36 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE52 {
            display: block;
        }
        
        #HEADLINE52 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #SHAPE21 {
            display: block;
        }
        
        #SHAPE21 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 87, 34, 1);
        }
        
        #SHAPE21> .widget-content svg {
            fill: rgba(255, 87, 34, 1);
        }
        
        #HEADLINE22 {
            display: block;
        }
        
        #HEADLINE22 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 20px;
        }
        
        #BOX62 {
            display: block;
        }
        
        #BOX62 > .widget-content {
            background-color: rgba(76, 175, 80, 0.36);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE60 {
            display: block;
        }
        
        #HEADLINE60 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Trirong', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE65 {
            display: block;
        }
        
        #HEADLINE65 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE70 {
            display: block;
        }
        
        #HEADLINE70 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE72 {
            display: block;
        }
        
        #HEADLINE72 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE74 {
            display: block;
        }
        
        #HEADLINE74 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE76 {
            display: block;
        }
        
        #HEADLINE76 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE77 {
            display: block;
        }
        
        #HEADLINE77 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE81 {
            display: block;
        }
        
        #HEADLINE81 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(4, 3, 3, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE87 {
            display: block;
        }
        
        #HEADLINE87 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Lobster', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #HEADLINE79 {
            display: block;
        }
        
        #HEADLINE79 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE85 {
            display: block;
        }
        
        #HEADLINE85 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #IMAGE89 {
            display: block;
        }
        
        #IMAGE89 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE89 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #PARAGRAPH90 {
            display: block;
        }
        
        #PARAGRAPH90 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 33px;
        }
        
        #PARAGRAPH91 {
            display: block;
        }
        
        #PARAGRAPH91 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 24px;
        }
        
        #HEADLINE92 {
            display: block;
        }
        
        #HEADLINE92 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Lobster', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(139, 195, 74, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #SHAPE93 {
            display: block;
        }
        
        #SHAPE93 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE93> .widget-content svg {
            fill: #000000;
        }
        
        #SHAPE94 {
            display: block;
        }
        
        #SHAPE94 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE94> .widget-content svg {
            fill: #000000;
        }
        
        #SHAPE95 {
            display: block;
        }
        
        #SHAPE95 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE95> .widget-content svg {
            fill: #000000;
        }
        
        #SHAPE97 {
            display: block;
        }
        
        #SHAPE97 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE97> .widget-content svg {
            fill: #000000;
        }
        
        #SHAPE98 {
            display: block;
        }
        
        #SHAPE98 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE98> .widget-content svg {
            fill: #000000;
        }
        
        #SHAPE100 {
            display: block;
        }
        
        #SHAPE100 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE100> .widget-content svg {
            fill: #000000;
        }
        
        #SHAPE101 {
            display: block;
        }
        
        #SHAPE101 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE101> .widget-content svg {
            fill: #000000;
        }
        
        #BUTTON102 {
            display: table;
        }
        
        #BUTTON102 > .widget-content {
            background-color: #3D9BE9;
            color: #ffffff;
            line-height: 34px;
        }
        
        #BUTTON102> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON102> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE114 {
            display: block;
        }
        
        #HEADLINE114 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Lobster', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #SHAPE116 {
            display: block;
        }
        
        #SHAPE116 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE116> .widget-content svg {
            fill: #000000;
        }
        
        #SHAPE118 {
            display: block;
        }
        
        #SHAPE118 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE118> .widget-content svg {
            fill: #000000;
        }
        
        #SHAPE119 {
            display: block;
        }
        
        #SHAPE119 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE119> .widget-content svg {
            fill: #000000;
        }
        
        #HEADLINE120 {
            display: block;
        }
        
        #HEADLINE120 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Lobster', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 0.6);
            font-weight: 300;
            line-height: 26px;
        }
        
        #HEADLINE121 {
            display: block;
        }
        
        #HEADLINE121 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Lobster', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 0.6);
            font-weight: 400;
            line-height: 26px;
        }
        
        #HEADLINE122 {
            display: block;
        }
        
        #HEADLINE122 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Lobster', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 0.54);
            font-weight: 400;
            line-height: 26px;
        }
        
        #HEADLINE124 {
            display: block;
        }
        
        #HEADLINE124 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Lobster', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #HEADLINE125 {
            display: block;
        }
        
        #HEADLINE125 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 34px;
        }
        
        #GROUP127 {
            display: block;
        }
        
        #GROUP127 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM128 {
            display: block;
        }
        
        #FORM128 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM128 .widget-content::-webkit-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #FORM128 .widget-content:-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #FORM128 .widget-content::-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #FORM128 .widget-content:-ms-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM129 {
            display: block;
        }
        
        #ITEM_FORM129 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(18, 17, 17, 1);
        }
        
        #ITEM_FORM129> .widget-content {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM129> .ladi-widget-overlay {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM129 .widget-content::-webkit-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM129 .widget-content:-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM129 .widget-content::-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM129 .widget-content:-ms-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM130 {
            display: block;
        }
        
        #ITEM_FORM130 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(18, 17, 17, 1);
        }
        
        #ITEM_FORM130> .widget-content {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM130> .ladi-widget-overlay {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM130 .widget-content::-webkit-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM130 .widget-content:-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM130 .widget-content::-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM130 .widget-content:-ms-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM131 {
            display: block;
        }
        
        #ITEM_FORM131 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(18, 17, 17, 1);
        }
        
        #ITEM_FORM131> .widget-content {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM131> .ladi-widget-overlay {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM131 .widget-content::-webkit-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM131 .widget-content:-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM131 .widget-content::-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM131 .widget-content:-ms-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM132 {
            display: block;
        }
        
        #ITEM_FORM132 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(18, 17, 17, 1);
        }
        
        #ITEM_FORM132> .widget-content {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM132> .ladi-widget-overlay {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM132 .widget-content::-webkit-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM132 .widget-content:-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM132 .widget-content::-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM132 .widget-content:-ms-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #BUTTON133 {
            display: table;
        }
        
        #BUTTON133 > .widget-content {
            background-color: rgba(0, 204, 232, 1);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 22px;
        }
        
        #BUTTON133> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON133> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE156 {
            display: block;
        }
        
        #HEADLINE156 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 40px;
        }
        
        #SHAPE157 {
            display: block;
        }
        
        #SHAPE157 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE157> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #SHAPE158 {
            display: block;
        }
        
        #SHAPE158 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE158> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #SHAPE159 {
            display: block;
        }
        
        #SHAPE159 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE159> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #SHAPE161 {
            display: block;
        }
        
        #SHAPE161 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE161> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #FORM104 {
            display: block;
        }
        
        #FORM104 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM104 .widget-content::-webkit-input-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #FORM104 .widget-content:-moz-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #FORM104 .widget-content::-moz-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #FORM104 .widget-content:-ms-input-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM105 {
            display: block;
        }
        
        #ITEM_FORM105 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM105> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(47, 161, 120, 1);
        }
        
        #ITEM_FORM105> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(47, 161, 120, 1);
        }
        
        #ITEM_FORM105 .widget-content::-webkit-input-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM105 .widget-content:-moz-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM105 .widget-content::-moz-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM105 .widget-content:-ms-input-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM106 {
            display: block;
        }
        
        #ITEM_FORM106 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM106> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(47, 161, 120, 1);
        }
        
        #ITEM_FORM106> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(47, 161, 120, 1);
        }
        
        #ITEM_FORM106 .widget-content::-webkit-input-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM106 .widget-content:-moz-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM106 .widget-content::-moz-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM106 .widget-content:-ms-input-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM107 {
            display: block;
        }
        
        #ITEM_FORM107 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM107> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(47, 161, 120, 1);
        }
        
        #ITEM_FORM107> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(47, 161, 120, 1);
        }
        
        #ITEM_FORM107 .widget-content::-webkit-input-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM107 .widget-content:-moz-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM107 .widget-content::-moz-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #ITEM_FORM107 .widget-content:-ms-input-placeholder {
            color: rgba(47, 161, 120, 1)
        }
        
        #BUTTON108 {
            display: table;
        }
        
        #BUTTON108 > .widget-content {
            background-color: rgba(59, 103, 168, 1);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 40px;
        }
        
        #BUTTON108> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON108> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE109 {
            display: block;
        }
        
        #HEADLINE109 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(59, 103, 168, 1);
            font-weight: 700;
            line-height: 42px;
        }
        
        #SHAPE111 {
            display: block;
        }
        
        #SHAPE111 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(47, 161, 120, 1);
        }
        
        #SHAPE111> .widget-content svg {
            fill: rgba(47, 161, 120, 1);
        }
        
        #PARAGRAPH112 {
            display: block;
        }
        
        #PARAGRAPH112 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(47, 161, 120, 1);
            font-weight: 600;
            line-height: 54px;
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION2 {
                width: 100%;
                height: 608.6458358764648px;
            }
            #SECTION2 .container {}
            #SECTION2 {
                background-image: linear-gradient(rgba(33, 33, 33, 0.21), rgba(33, 33, 33, 0.21)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/maxresdefault-1512976141.jpg");
                background-image: -o-linear-gradient(rgba(33, 33, 33, 0.21), rgba(33, 33, 33, 0.21)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/maxresdefault-1512976141.jpg");
                background-image: -ms-linear-gradient(rgba(33, 33, 33, 0.21), rgba(33, 33, 33, 0.21)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/maxresdefault-1512976141.jpg");
                background-image: -moz-linear-gradient(rgba(33, 33, 33, 0.21), rgba(33, 33, 33, 0.21)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/maxresdefault-1512976141.jpg");
                background-image: -webkit-linear-gradient(rgba(33, 33, 33, 0.21), rgba(33, 33, 33, 0.21)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/maxresdefault-1512976141.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION37 {
                width: 100%;
                height: 961px;
            }
            #SECTION37 .container {}
            #SECTION37 {
                background-image: linear-gradient(rgba(54, 54, 54, 0.59), rgba(54, 54, 54, 0.59)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1512793662930.jpg");
                background-image: -o-linear-gradient(rgba(54, 54, 54, 0.59), rgba(54, 54, 54, 0.59)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1512793662930.jpg");
                background-image: -ms-linear-gradient(rgba(54, 54, 54, 0.59), rgba(54, 54, 54, 0.59)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1512793662930.jpg");
                background-image: -moz-linear-gradient(rgba(54, 54, 54, 0.59), rgba(54, 54, 54, 0.59)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1512793662930.jpg");
                background-image: -webkit-linear-gradient(rgba(54, 54, 54, 0.59), rgba(54, 54, 54, 0.59)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/istock_000036986398_large-1512793662930.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION16 {
                width: 100%;
                height: 1038.9376220703125px;
            }
            #SECTION16 .container {}
            #SECTION16 {
                background-image: none;
            }
            #SECTION59 {
                width: 100%;
                height: 1244.3125px;
            }
            #SECTION59 .container {}
            #SECTION59 {
                background-image: url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/18422140_10209260136442273_9054001877007743146_o-1512979666.jpg");
                background-size: cover;
                background-attachment: fixed;
                background-position: center top;
                background-repeat: no-repeat;
            }
            #SECTION88 {
                width: 100%;
                height: 1432.104248046875px;
            }
            #SECTION88 .container {}
            #SECTION88 {
                background-image: none;
            }
            #SECTION113 {
                width: 100%;
                height: 692.3125px;
            }
            #SECTION113 .container {}
            #SECTION113 {
                background-image: none;
            }
            #SECTION123 {
                width: 100%;
                height: 911px;
            }
            #SECTION123 .container {}
            #SECTION123 {
                background-image: linear-gradient(rgba(1, 7, 28, 0.29), rgba(1, 7, 28, 0.29)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-381653_1920-1512984377.jpg");
                background-image: -o-linear-gradient(rgba(1, 7, 28, 0.29), rgba(1, 7, 28, 0.29)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-381653_1920-1512984377.jpg");
                background-image: -ms-linear-gradient(rgba(1, 7, 28, 0.29), rgba(1, 7, 28, 0.29)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-381653_1920-1512984377.jpg");
                background-image: -moz-linear-gradient(rgba(1, 7, 28, 0.29), rgba(1, 7, 28, 0.29)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-381653_1920-1512984377.jpg");
                background-image: -webkit-linear-gradient(rgba(1, 7, 28, 0.29), rgba(1, 7, 28, 0.29)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/yoga-381653_1920-1512984377.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP103 {
                width: 100%;
                height: 100%;
            }
            #POPUP103 .container {
                width: 375px;
                height: 419.984375px;
                top: calc(100%-419.984375px);
            }
            #POPUP103 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/home_insurance_about_bg-598402.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #IMAGE11 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/uploads/images/9c774750-cf11-45f4-9b17-fa488a720e31.png);
            }
            #IMAGE11 {
                top: 20px;
                left: 130.359px;
                width: 114.25px;
                height: 24px;
            }
            #GROUP12 {
                top: 54px;
                left: 131.5px;
                width: 112px;
                height: 24px;
            }
            #SHAPE13 {
                top: 0px;
                left: 0px;
                width: 24px;
                height: 24px;
            }
            #SHAPE14 {
                top: 0px;
                left: 88px;
                width: 24px;
                height: 24px;
            }
            #SHAPE15 {
                top: 0px;
                left: 44px;
                width: 24px;
                height: 24px;
            }
            #BOX3 {
                top: 88px;
                left: 37.5px;
                width: 300px;
                height: 463.3125px;
            }
            #HEADLINE4 {
                top: 20px;
                left: 55.8333px;
                padding: 0px;
                width: 188.3125px;
                height: 56px;
            }
            #HEADLINE4 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #GROUP5 {
                top: 124px;
                left: 80.5px;
                width: 139px;
                height: 28px;
            }
            #LINE6 {
                top: 3px;
                left: 0px;
                width: 44px;
                height: 25px;
            }
            #SHAPE7 {
                top: 0px;
                left: 57px;
                width: 28px;
                height: 28px;
            }
            #LINE8 {
                top: 3px;
                left: 98px;
                width: 41px;
                height: 25px;
            }
            #HEADLINE10 {
                top: 162px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 172px;
            }
            #HEADLINE10 > .widget-content {
                font-size: 48px;
                text-align: center;
                line-height: 58px;
            }
            #HEADLINE9 {
                top: 344px;
                left: 18.8333px;
                padding: 0px;
                width: 262.3125px;
                height: 109.3125px;
            }
            #HEADLINE9 > .widget-content {
                font-size: 49px;
                text-align: center;
            }
            #BOX38 {
                top: 557px;
                left: 59px;
                width: 261px;
                height: 87px;
            }
            #HEADLINE39 {
                top: 20px;
                left: 33.6458px;
                padding: 0px;
                width: 200px;
                height: 56px;
            }
            #HEADLINE39 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #BOX40 {
                top: 289px;
                left: 59px;
                width: 261px;
                height: 89px;
            }
            #HEADLINE41 {
                top: 30px;
                left: 33.6458px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE41 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #BOX42 {
                top: 428px;
                left: 59px;
                width: 261px;
                height: 86px;
            }
            #HEADLINE43 {
                top: 29.3125px;
                left: 34.5001px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE43 > .widget-content {
                font-size: 23px;
                text-align: center;
            }
            #BOX44 {
                top: 156px;
                left: 59.1667px;
                width: 261px;
                height: 90px;
            }
            #HEADLINE45 {
                top: 28px;
                left: 33.6667px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE45 > .widget-content {
                font-size: 23px;
                text-align: center;
            }
            #HEADLINE46 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 88px;
            }
            #HEADLINE46 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 30px;
            }
            #BOX48 {
                top: 821px;
                left: 57.1667px;
                width: 261px;
                height: 87px;
            }
            #HEADLINE49 {
                top: 13px;
                left: 33.6458px;
                padding: 0px;
                width: 200px;
                height: 56px;
            }
            #HEADLINE49 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #BOX50 {
                top: 690px;
                left: 57.1667px;
                width: 261px;
                height: 86px;
            }
            #HEADLINE51 {
                top: 27px;
                left: 33.6667px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE51 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #HEADLINE19 {
                top: 344.333px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 48px;
            }
            #HEADLINE19 > .widget-content {
                font-size: 21px;
                text-align: center;
                line-height: 25px;
            }
            #GROUP24 {
                top: 586.021px;
                left: 60px;
                width: 224px;
                height: 119px;
            }
            #SHAPE25 {
                top: 0px;
                left: 106.813px;
                width: 50px;
                height: 50px;
            }
            #HEADLINE26 {
                top: 59px;
                left: 1px;
                padding: 0px;
                width: 224px;
                height: 60px;
            }
            #HEADLINE26 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP28 {
                top: 866.688px;
                left: 60px;
                width: 244px;
                height: 98.25px;
            }
            #SHAPE29 {
                top: 0px;
                left: 105.813px;
                width: 50px;
                height: 50px;
            }
            #HEADLINE30 {
                top: 58.25px;
                left: 1px;
                padding: 0px;
                width: 244px;
                height: 40px;
            }
            #HEADLINE30 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP32 {
                top: 725px;
                left: 60px;
                width: 248px;
                height: 101.6875px;
            }
            #SHAPE33 {
                top: 0px;
                left: 105.813px;
                width: 50px;
                height: 50px;
            }
            #HEADLINE34 {
                top: 61.6875px;
                left: 1px;
                padding: 0px;
                width: 248px;
                height: 40px;
            }
            #HEADLINE34 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #YOUTUBE36 {
                top: 91px;
                left: 10.1667px;
                width: 355px;
                height: 177.22222222222223px;
            }
            #HEADLINE52 {
                top: 402.333px;
                left: 32.3333px;
                padding: 0px;
                width: 310.3125px;
                height: 48px;
            }
            #HEADLINE52 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #SHAPE21 {
                top: 460.625px;
                left: 166.5px;
                width: 50px;
                height: 50px;
            }
            #HEADLINE22 {
                top: 520.333px;
                left: 63px;
                padding: 0px;
                width: 249px;
                height: 60px;
            }
            #HEADLINE22 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX62 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 73.3125px;
            }
            #HEADLINE60 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 36px;
            }
            #HEADLINE60 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE65 {
                top: 132px;
                left: 10.1667px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE65 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE70 {
                top: 217.917px;
                left: 10.1667px;
                padding: 0px;
                width: 355px;
                height: 108px;
            }
            #HEADLINE70 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE72 {
                top: 325.667px;
                left: 12px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE72 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE74 {
                top: 407.667px;
                left: 10.9792px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE74 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE76 {
                top: 479.667px;
                left: 10.9792px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE76 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE77 {
                top: 558.083px;
                left: 11.8125px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE77 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE81 {
                top: 710.083px;
                left: 12.8125px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE81 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE87 {
                top: 1102.75px;
                left: 21px;
                padding: 0px;
                width: 355px;
                height: 108px;
            }
            #HEADLINE87 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE79 {
                top: 630.729px;
                left: 11.9376px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE79 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE85 {
                top: 782.083px;
                left: 0.979187px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE85 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #IMAGE89 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/MG_4718-1512982071.JPG);
            }
            #IMAGE89 {
                top: 14.771px;
                left: 12.8333px;
                width: 355px;
                height: 332.453125px;
            }
            #PARAGRAPH90 {
                top: 34px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 736px;
            }
            #PARAGRAPH90 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #PARAGRAPH91 {
                top: 388.438px;
                left: 11.8333px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #PARAGRAPH91 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE92 {
                top: 347.276px;
                left: 67.8333px;
                padding: 0px;
                width: 271.3125px;
                height: 36px;
            }
            #HEADLINE92 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #SHAPE93 {
                top: 474.188px;
                left: 0.999997px;
                width: 40.3125px;
                height: 40.3125px;
            }
            #SHAPE94 {
                top: 530.81px;
                left: 0.499687px;
                width: 40.3125px;
                height: 40.3125px;
            }
            #SHAPE95 {
                top: 632.771px;
                left: 0.166687px;
                width: 40.3125px;
                height: 40.3125px;
            }
            #SHAPE97 {
                top: 823.8px;
                left: 0.666374px;
                width: 40.3125px;
                height: 40.3125px;
            }
            #SHAPE98 {
                top: 1014.47px;
                left: 0.666374px;
                width: 40.3125px;
                height: 40.3125px;
            }
            #SHAPE100 {
                top: 725.104px;
                left: 0.166687px;
                width: 40.3125px;
                height: 40.3125px;
            }
            #SHAPE101 {
                top: 916.147px;
                left: 0.666374px;
                width: 40.3125px;
                height: 40.3125px;
            }
            #BUTTON102 {
                top: 1322.79px;
                left: 21.1667px;
                padding: 0px;
                width: 345px;
                height: 69px;
            }
            #BUTTON102 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #HEADLINE114 {
                top: 20.6667px;
                left: 40px;
                padding: 0px;
                width: 286.3125px;
                height: 36px;
            }
            #HEADLINE114 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #SHAPE116 {
                top: 484.333px;
                left: 136.333px;
                width: 92.3125px;
                height: 92.3125px;
            }
            #SHAPE118 {
                top: 66px;
                left: 137.333px;
                width: 98.3125px;
                height: 98.3125px;
            }
            #SHAPE119 {
                top: 271.333px;
                left: 137.146px;
                width: 101.3125px;
                height: 97px;
            }
            #HEADLINE120 {
                top: 585.332px;
                left: 71.1458px;
                padding: 0px;
                width: 234.3125px;
                height: 76px;
            }
            #HEADLINE120 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE121 {
                top: 164.666px;
                left: 96.5px;
                padding: 0px;
                width: 200px;
                height: 101.3125px;
            }
            #HEADLINE121 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE122 {
                top: 369.999px;
                left: 108.5px;
                padding: 0px;
                width: 200px;
                height: 101.3125px;
            }
            #HEADLINE122 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE124 {
                top: 138px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 28px;
            }
            #HEADLINE124 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #HEADLINE125 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 108px;
            }
            #HEADLINE125 > .widget-content {
                font-size: 28px;
                text-align: center;
                line-height: 36px;
            }
            #GROUP127 {
                top: 189px;
                left: 37px;
                width: 301px;
                height: 415px;
            }
            #FORM128 {
                top: 20px;
                left: 0px;
                width: 301px;
                height: 335px;
            }
            #ITEM_FORM129 {
                top: 20px;
                left: 0.5px;
                width: 300px;
                height: 41px;
            }
            #ITEM_FORM130 {
                top: 71px;
                left: 0px;
                width: 301px;
                height: 41px;
            }
            #ITEM_FORM131 {
                top: 122px;
                left: 0.5px;
                width: 300px;
                height: 41px;
            }
            #ITEM_FORM132 {
                top: 173px;
                left: 0.5px;
                width: 300px;
                height: 152px;
            }
            #BUTTON133 {
                top: 365px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 40px;
            }
            #BUTTON133 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE156 {
                top: 669.334px;
                left: 68.0001px;
                padding: 0px;
                width: 355px;
                height: 200px;
            }
            #HEADLINE156 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #SHAPE157 {
                top: 699.333px;
                left: 22.698px;
                width: 45.578125px;
                height: 42.3125px;
            }
            #SHAPE158 {
                top: 779.334px;
                left: 24.5732px;
                width: 44.3125px;
                height: 46.3125px;
            }
            #SHAPE159 {
                top: 741.666px;
                left: 23.2604px;
                width: 45.625px;
                height: 37.3125px;
            }
            #SHAPE161 {
                top: 832px;
                left: 29.833px;
                width: 35.3125px;
                height: 37.3125px;
            }
            #FORM104 {
                top: 187px;
                left: 23.5px;
                width: 334px;
                height: 160.984px;
            }
            #FORM104 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM105 {
                top: 0px;
                left: 0px;
                width: 334px;
                height: 43.1875px;
            }
            #ITEM_FORM105 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM106 {
                top: 58.9024px;
                left: 0px;
                width: 334px;
                height: 43.1875px;
            }
            #ITEM_FORM106 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM107 {
                top: 117.805px;
                left: 0px;
                width: 334px;
                height: 43.1875px;
            }
            #ITEM_FORM107 > .widget-content {
                font-size: 14px;
            }
            #BUTTON108 {
                top: 359.984px;
                left: 37.5px;
                padding: 0px;
                width: 300px;
                height: 40px;
            }
            #BUTTON108 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE109 {
                top: 49px;
                left: 22.1665px;
                padding: 0px;
                width: 330.667px;
                height: 42px;
            }
            #HEADLINE109 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #SHAPE111 {
                top: 72px;
                left: 166px;
                width: 43px;
                height: 43px;
            }
            #PARAGRAPH112 {
                top: 129px;
                left: 17.5px;
                padding: 0px;
                width: 340px;
                height: 53.3333px;
            }
            #PARAGRAPH112 > .widget-content {
                font-size: 48px;
                text-align: center;
            }
        }
    </style>
