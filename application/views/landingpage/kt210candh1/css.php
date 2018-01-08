
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
            var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Montserrat:300,400,600,700|Roboto:300,400,700|Trirong:300,400,600,700|Itim|Roboto+Slab:300,400,700|Quicksand&amp;subset=latin-ext,vietnamese';
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
                height: 656px;
            }
            #SECTION2 .container {}
            #SECTION2 {}
            #POPUP879 {
                width: 100%;
                height: 100%;
            }
            #POPUP879 .container {
                width: 479px;
                height: 259px;
                top: calc(100%-259px);
            }
            #POPUP879 {}
            #POPUP705 {
                width: 100%;
                height: 100%;
            }
            #POPUP705 .container {
                width: 600px;
                height: 345px;
                top: calc(100%-345px);
            }
            #POPUP705 {}
            #SECTION424 {
                width: 100%;
                height: 127px;
            }
            #SECTION424 .container {}
            #SECTION424 {}
            #SECTION678 {
                width: 100%;
                height: 536px;
            }
            #SECTION678 .container {}
            #SECTION678 {}
            #SECTION37 {
                width: 100%;
                height: 456px;
            }
            #SECTION37 .container {}
            #SECTION37 {}
            #POPUP559 {
                width: 100%;
                height: 100%;
            }
            #POPUP559 .container {
                width: 563px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP559 {}
            #SECTION41 {
                width: 100%;
                height: 103px;
            }
            #SECTION41 .container {}
            #SECTION41 {}
            #SECTION81 {
                width: 100%;
                height: 446px;
            }
            #SECTION81 .container {}
            #SECTION81 {}
            #SECTION787 {
                width: 100%;
                height: 644px;
            }
            #SECTION787 .container {}
            #SECTION787 {}
            #SECTION611 {
                width: 100%;
                height: 552.90625px;
            }
            #SECTION611 .container {}
            #SECTION611 {}
            #POPUP1024 {
                width: 100%;
                height: 100%;
            }
            #POPUP1024 .container {
                width: 651px;
                height: 204px;
                top: calc(100%-204px);
            }
            #POPUP1024 {}
            #POPUP1015 {
                width: 100%;
                height: 100%;
            }
            #POPUP1015 .container {
                width: 622px;
                height: 267px;
                top: calc(100%-267px);
            }
            #POPUP1015 {}
            #POPUP1006 {
                width: 100%;
                height: 100%;
            }
            #POPUP1006 .container {
                width: 674px;
                height: 354px;
                top: calc(100%-354px);
            }
            #POPUP1006 {}
            #POPUP997 {
                width: 100%;
                height: 100%;
            }
            #POPUP997 .container {
                width: 674px;
                height: 400px;
                top: calc(100%-400px);
            }
            #POPUP997 {}
            #POPUP988 {
                width: 100%;
                height: 100%;
            }
            #POPUP988 .container {
                width: 674px;
                height: 307px;
                top: calc(100%-307px);
            }
            #POPUP988 {}
            #POPUP979 {
                width: 100%;
                height: 100%;
            }
            #POPUP979 .container {
                width: 674px;
                height: 330px;
                top: calc(100%-330px);
            }
            #POPUP979 {}
            #POPUP968 {
                width: 100%;
                height: 100%;
            }
            #POPUP968 .container {
                width: 371px;
                height: 379px;
                top: calc(100%-379px);
            }
            #POPUP968 {}
            #POPUP961 {
                width: 100%;
                height: 100%;
            }
            #POPUP961 .container {
                width: 523px;
                height: 313px;
                top: calc(100%-313px);
            }
            #POPUP961 {}
            #POPUP955 {
                width: 100%;
                height: 100%;
            }
            #POPUP955 .container {
                width: 523px;
                height: 338px;
                top: calc(100%-338px);
            }
            #POPUP955 {}
            #POPUP949 {
                width: 100%;
                height: 100%;
            }
            #POPUP949 .container {
                width: 523px;
                height: 461px;
                top: calc(100%-461px);
            }
            #POPUP949 {}
            #POPUP943 {
                width: 100%;
                height: 100%;
            }
            #POPUP943 .container {
                width: 523px;
                height: 500px;
                top: calc(100%-500px);
            }
            #POPUP943 {}
            #POPUP937 {
                width: 100%;
                height: 100%;
            }
            #POPUP937 .container {
                width: 523px;
                height: 349px;
                top: calc(100%-349px);
            }
            #POPUP937 {}
            #POPUP931 {
                width: 100%;
                height: 100%;
            }
            #POPUP931 .container {
                width: 523px;
                height: 338px;
                top: calc(100%-338px);
            }
            #POPUP931 {}
            #SECTION694 {
                width: 100%;
                height: 474px;
            }
            #SECTION694 .container {}
            #SECTION694 {}
            #SECTION746 {
                width: 100%;
                height: 638.890625px;
            }
            #SECTION746 .container {}
            #SECTION746 {}
            #SECTION409 {
                width: 100%;
                height: 483.8125px;
            }
            #SECTION409 .container {}
            #SECTION409 {}
            #PARAGRAPH7 {
                top: 299px;
                left: -15px;
                padding: 0px;
                width: 582px;
                height: 28px;
            }
            #PARAGRAPH7 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #BOX471 {
                top: 218.969px;
                left: 655.742px;
                width: 385px;
                height: 424px;
            }
            #HEADLINE472 {
                top: 18px;
                left: 24px;
                padding: 0px;
                width: 341px;
                height: 54px;
            }
            #HEADLINE472 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE843 {
                top: 72px;
                left: 77px;
                padding: 0px;
                width: 218px;
                height: 60px;
            }
            #HEADLINE843 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE869 {
                top: 95px;
                left: 222px;
                padding: 0px;
                width: 131px;
                height: 46px;
            }
            #HEADLINE869 > .widget-content {
                font-size: 40px;
                text-align: left;
            }
            #GROUP484 {
                top: 141px;
                left: 53px;
                width: 300px;
                height: 263.96875px;
            }
            #FORM485 {
                top: 0px;
                left: 1px;
                width: 300px;
                height: 202.4375px;
            }
            #FORM485 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM486 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 37.0625px;
            }
            #ITEM_FORM486 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM487 {
                top: 112.491px;
                left: 0px;
                width: 300px;
                height: 39.984375px;
            }
            #ITEM_FORM487 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM488 {
                top: 56.7345px;
                left: 0px;
                width: 300px;
                height: 39.90625px;
            }
            #ITEM_FORM488 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM844 {
                top: 168.247px;
                left: 0px;
                width: 300px;
                height: 34.203125px;
            }
            #BUTTON489 {
                top: 215.96875px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 48px;
            }
            #BUTTON489 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE493 {
                top: 157px;
                left: 210px;
                padding: 0px;
                width: 927px;
                height: 41px;
            }
            #HEADLINE493 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #HEADLINE8 {
                top: 97px;
                left: 43px;
                padding: 0px;
                width: 851px;
                height: 82px;
            }
            #HEADLINE8 > .widget-content {
                font-size: 35px;
                text-align: center;
            }
            #HEADLINE845 {
                top: 358.008px;
                left: 87px;
                padding: 0px;
                width: 384px;
                height: 56px;
            }
            #HEADLINE845 > .widget-content {
                font-size: 50px;
                text-align: left;
            }
            #HEADLINE846 {
                top: 434px;
                left: 159px;
                padding: 0px;
                width: 200px;
                height: 31px;
            }
            #HEADLINE846 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #BUTTON847 {
                top: 488.5px;
                left: 162px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON847 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE923 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/989B0D146B60E3DDBAEA40F7DA8394B4E0BCA2DC174E667E38pimgpsh_fullsize_distr-1513229324.png);
            }
            #IMAGE923 {
                top: -15.5px;
                left: -43px;
                width: 127px;
                height: 113.5px;
            }
            #HEADLINE924 {
                top: 59px;
                left: -66px;
                padding: 0px;
                width: 220px;
                height: 24px;
            }
            #HEADLINE924 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX881 {
                top: 8px;
                left: 222.5px;
                width: 48px;
                height: 48px;
            }
            #SHAPE882 {
                top: 14px;
                left: 13px;
                width: 26px;
                height: 26px;
            }
            #GROUP885 {
                top: 55px;
                left: 77.5px;
                width: 305px;
                height: 36px;
            }
            #HEADLINE886 {
                top: 0px;
                left: 142px;
                padding: 0px;
                width: 164px;
                height: 36px;
            }
            #HEADLINE886 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE887 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 132px;
                height: 36px;
            }
            #HEADLINE887 > .widget-content {
                font-size: 30px;
                text-align: right;
            }
            #LINE884 {
                top: 91px;
                left: 205.5px;
                width: 64px;
                height: 25px;
            }
            #PARAGRAPH883 {
                top: 107px;
                left: 30.5px;
                padding: 0px;
                width: 413px;
                height: 144px;
            }
            #PARAGRAPH883 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE706 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/team1.jpg);
            }
            #IMAGE706 {
                top: 0.5px;
                left: 0px;
                width: 280px;
                height: 345px;
            }
            #HEADLINE707 {
                top: 24.5px;
                left: 311px;
                padding: 0px;
                width: 256px;
                height: 81px;
            }
            #HEADLINE707 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH708 {
                top: 125.5px;
                left: 316px;
                padding: 0px;
                width: 242px;
                height: 22px;
            }
            #PARAGRAPH708 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX709 {
                top: 155.5px;
                left: 304px;
                width: 271px;
                height: 57px;
            }
            #HEADLINE710 {
                top: 11px;
                left: 18px;
                padding: 0px;
                width: 237px;
                height: 36px;
            }
            #HEADLINE710 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #FORM711 {
                top: 232.5px;
                left: 304px;
                width: 269px;
                height: 44px;
            }
            #FORM711 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM712 {
                top: 0px;
                left: 0px;
                width: 269px;
                height: 44px;
            }
            #ITEM_FORM712 > .widget-content {
                font-size: 16px;
            }
            #BUTTON713 {
                top: 283.5px;
                left: 304px;
                padding: 0px;
                width: 271px;
                height: 40px;
            }
            #BUTTON713 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP425 {
                top: 27px;
                left: 0px;
                width: 236px;
                height: 65px;
            }
            #SHAPE426 {
                top: 3px;
                left: 0px;
                width: 57px;
                height: 57px;
            }
            #HEADLINE427 {
                top: 0px;
                left: 70px;
                padding: 0px;
                width: 156px;
                height: 40px;
            }
            #HEADLINE427 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #HEADLINE428 {
                top: 43px;
                left: 70px;
                padding: 0px;
                width: 166px;
                height: 22px;
            }
            #HEADLINE428 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP429 {
                top: 32px;
                left: 236px;
                width: 244px;
                height: 65px;
            }
            #SHAPE430 {
                top: 3px;
                left: 1px;
                width: 57px;
                height: 57px;
            }
            #HEADLINE431 {
                top: 0px;
                left: 71px;
                padding: 0px;
                width: 156px;
                height: 40px;
            }
            #HEADLINE431 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #HEADLINE432 {
                top: 43px;
                left: 71px;
                padding: 0px;
                width: 174px;
                height: 22px;
            }
            #HEADLINE432 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP433 {
                top: 32px;
                left: 496px;
                width: 234px;
                height: 65px;
            }
            #SHAPE434 {
                top: 3px;
                left: 1px;
                width: 57px;
                height: 57px;
            }
            #HEADLINE435 {
                top: 0px;
                left: 69px;
                padding: 0px;
                width: 156px;
                height: 40px;
            }
            #HEADLINE435 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #HEADLINE436 {
                top: 43px;
                left: 69px;
                padding: 0px;
                width: 166px;
                height: 22px;
            }
            #HEADLINE436 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP437 {
                top: 32px;
                left: 749px;
                width: 231px;
                height: 65px;
            }
            #SHAPE438 {
                top: 3px;
                left: 1px;
                width: 57px;
                height: 57px;
            }
            #HEADLINE439 {
                top: 0px;
                left: 66px;
                padding: 0px;
                width: 156px;
                height: 40px;
            }
            #HEADLINE439 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #HEADLINE440 {
                top: 43px;
                left: 66px;
                padding: 0px;
                width: 166px;
                height: 22px;
            }
            #HEADLINE440 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX679 {
                top: 433px;
                left: 590px;
                width: 322px;
                height: 87px;
            }
            #HEADLINE680 {
                top: 12px;
                left: 2px;
                padding: 0px;
                width: 320px;
                height: 48px;
            }
            #HEADLINE680 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX681 {
                top: 277px;
                left: 590px;
                width: 322px;
                height: 89px;
            }
            #HEADLINE686 {
                top: 17px;
                left: 9px;
                padding: 0px;
                width: 298px;
                height: 48px;
            }
            #HEADLINE686 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX683 {
                top: 276px;
                left: 58px;
                width: 314px;
                height: 86px;
            }
            #HEADLINE684 {
                top: 14px;
                left: 9px;
                padding: 0px;
                width: 295px;
                height: 48px;
            }
            #HEADLINE684 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX685 {
                top: 126px;
                left: 591px;
                width: 321px;
                height: 90px;
            }
            #HEADLINE690 {
                top: 9px;
                left: 0px;
                padding: 0px;
                width: 319px;
                height: 72px;
            }
            #HEADLINE690 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE687 {
                top: 26.094px;
                left: 126px;
                padding: 0px;
                width: 735px;
                height: 40px;
            }
            #HEADLINE687 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX689 {
                top: 434px;
                left: 61px;
                width: 311px;
                height: 87px;
            }
            #HEADLINE682 {
                top: 19.6875px;
                left: 11px;
                padding: 0px;
                width: 292px;
                height: 48px;
            }
            #HEADLINE682 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX691 {
                top: 126px;
                left: 54px;
                width: 317px;
                height: 86px;
            }
            #HEADLINE692 {
                top: 18px;
                left: 13px;
                padding: 0px;
                width: 293px;
                height: 48px;
            }
            #HEADLINE692 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE693 {
                top: 72.281px;
                left: 182px;
                padding: 0px;
                width: 692px;
                height: 24px;
            }
            #HEADLINE693 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE38 {
                top: 38px;
                left: -59px;
                padding: 0px;
                width: 449px;
                height: 72px;
            }
            #HEADLINE38 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #YOUTUBE40 {
                top: 63px;
                left: 526px;
                width: 515px;
                height: 354px;
            }
            #LISTOP850 {
                top: 110.977px;
                left: -52px;
                width: 421px;
                height: 312px;
            }
            #LISTOP850 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP850 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: nullpx;
                height: nullpx;
                font-size: NaNpx;
                color: rgba(76, 175, 80, 1);
                margin-right: 0px;
            }
            #LISTOP850 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP850 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LISTOP562 {
                top: 154px;
                left: 79.5px;
                width: 432px;
                height: 163px;
            }
            #LISTOP562 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP562 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 23px;
                height: 23px;
                top: -2px;
                font-size: 11.5px;
                color: rgba(255, 230, 0, 1);
                margin-right: 12px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,230,0,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13 13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16 9.913 5 16 5zm-5.28 7.78l-1.44 1.44 6 6 .72.686.72-.687 6-6-1.44-1.44L16 18.064l-5.28-5.282z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP562 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP562 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE42 {
                top: 18px;
                left: 14px;
                padding: 0px;
                width: 926px;
                height: 72px;
            }
            #HEADLINE42 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX120 {
                top: 367px;
                left: -348.773px;
                width: 1689px;
                height: 78.984375px;
            }
            #HEADLINE121 {
                top: 2.5078125px;
                left: 419.9765625px;
                padding: 0px;
                width: 849px;
                height: 75px;
            }
            #HEADLINE121 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #GROUP107 {
                top: 275px;
                left: 615px;
                width: 331px;
                height: 69px;
            }
            #SHAPE108 {
                top: 0px;
                left: 1px;
                width: 39px;
                height: 39px;
            }
            #PARAGRAPH109 {
                top: 29px;
                left: 57px;
                padding: 0px;
                width: 275px;
                height: 40px;
            }
            #PARAGRAPH109 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #IMAGE842 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/912ldp-1512808566964.jpg);
            }
            #IMAGE842 {
                top: 39px;
                left: 345px;
                width: 280px;
                height: 305px;
            }
            #HEADLINE853 {
                top: 137px;
                left: 57px;
                padding: 0px;
                width: 200px;
                height: 26px;
            }
            #HEADLINE853 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE854 {
                top: 278px;
                left: 672px;
                padding: 0px;
                width: 259px;
                height: 26px;
            }
            #HEADLINE854 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE855 {
                top: 280px;
                left: 55px;
                padding: 0px;
                width: 200px;
                height: 26px;
            }
            #HEADLINE855 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE856 {
                top: 132px;
                left: 672px;
                padding: 0px;
                width: 200px;
                height: 24px;
            }
            #HEADLINE856 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP566 {
                top: 281px;
                left: 0px;
                width: 331px;
                height: 66px;
            }
            #SHAPE567 {
                top: 0px;
                left: 1px;
                width: 39px;
                height: 39px;
            }
            #PARAGRAPH568 {
                top: 26px;
                left: 57px;
                padding: 0px;
                width: 275px;
                height: 40px;
            }
            #PARAGRAPH568 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP491 {
                top: 50px;
                left: 625px;
                width: 321px;
                height: 48px;
            }
            #SHAPE105 {
                top: 0px;
                left: 1px;
                width: 39px;
                height: 39px;
            }
            #PARAGRAPH106 {
                top: 8px;
                left: 47px;
                padding: 0px;
                width: 275px;
                height: 60px;
            }
            #PARAGRAPH106 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE857 {
                top: 32px;
                left: 665px;
                padding: 0px;
                width: 240px;
                height: 26px;
            }
            #HEADLINE857 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #GROUP101 {
                top: 150px;
                left: 623px;
                width: 324px;
                height: 106px;
            }
            #SHAPE102 {
                top: 0px;
                left: 1px;
                width: 39px;
                height: 39px;
            }
            #PARAGRAPH103 {
                top: 6px;
                left: 50px;
                padding: 0px;
                width: 275px;
                height: 100px;
            }
            #PARAGRAPH103 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP85 {
                top: 26px;
                left: 0px;
                width: 364px;
                height: 111.953125px;
            }
            #SHAPE86 {
                top: 0px;
                left: 1px;
                width: 43.703125px;
                height: 55.234375px;
            }
            #PARAGRAPH88 {
                top: 31px;
                left: 57px;
                padding: 0px;
                width: 308px;
                height: 80.953125px;
            }
            #PARAGRAPH88 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE851 {
                top: 26px;
                left: 58px;
                padding: 0px;
                width: 251px;
                height: 26px;
            }
            #HEADLINE851 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #SHAPE111 {
                top: 137.953px;
                left: 1px;
                width: 43.703125px;
                height: 50.046875px;
            }
            #PARAGRAPH112 {
                top: 163px;
                left: 58.0156px;
                padding: 0px;
                width: 272px;
                height: 80px;
            }
            #PARAGRAPH112 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE789 {
                top: 38px;
                left: 173px;
                padding: 0px;
                width: 618px;
                height: 68px;
            }
            #HEADLINE789 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP802 {
                top: 167.6041717529297px;
                left: 330.5972595214844px;
                width: 603.8889007568359px;
                height: 416.9617977142334px;
            }
            #BOX803 {
                top: 0px;
                left: 77.99649047851562px;
                width: 164px;
                height: 164px;
            }
            #PARAGRAPH804 {
                top: 297.9687957763672px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 83.33333587646484px;
            }
            #PARAGRAPH804 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #HEADLINE805 {
                top: 232.9861297607422px;
                left: 55.999969482421875px;
                padding: 0px;
                width: 184.4444580078125px;
                height: 17.77777862548828px;
            }
            #HEADLINE805 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE806 {
                top: 250.98960876464844px;
                left: 20.21875px;
                padding: 0px;
                width: 248.7673797607422px;
                height: 31.111112594604492px;
            }
            #HEADLINE806 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #SHAPE807 {
                top: 197.9861297607422px;
                left: 140.99996948242188px;
                width: 35px;
                height: 35px;
            }
            #GROUP808 {
                top: 390.9722137451172px;
                left: 82.05899047851562px;
                width: 143.99306297302246px;
                height: 25.98958396911621px;
            }
            #SHAPE809 {
                top: 0px;
                left: 1px;
                width: 26px;
                height: 26px;
            }
            #SHAPE810 {
                top: 0px;
                left: 30.01043701171875px;
                width: 26px;
                height: 26px;
            }
            #SHAPE811 {
                top: 0px;
                left: 60.01043701171875px;
                width: 26px;
                height: 26px;
            }
            #SHAPE812 {
                top: 0px;
                left: 119.00347900390625px;
                width: 26px;
                height: 26px;
            }
            #SHAPE813 {
                top: 0px;
                left: 89.00347900390625px;
                width: 26px;
                height: 26px;
            }
            #HEADLINE1033 {
                top: 245.67710876464844px;
                left: 357.1111145019531px;
                padding: 0px;
                width: 247.7777862548828px;
                height: 31.111112594604492px;
            }
            #HEADLINE1033 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #GROUP814 {
                top: 167.60418701171875px;
                left: 658.9306030273438px;
                width: 300px;
                height: 363.35072326660156px;
            }
            #BOX815 {
                top: 0px;
                left: 56.92010498046875px;
                width: 164px;
                height: 165.53125px;
            }
            #PARAGRAPH816 {
                top: 296.6840515136719px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 66.66667175292969px;
            }
            #PARAGRAPH816 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #HEADLINE817 {
                top: 225.05209350585938px;
                left: 39.923583984375px;
                padding: 0px;
                width: 184.4444580078125px;
                height: 17.77777862548828px;
            }
            #HEADLINE817 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #SHAPE819 {
                top: 189.7569580078125px;
                left: 119.923583984375px;
                width: 35px;
                height: 35.3125px;
            }
            #PARAGRAPH788 {
                top: 120px;
                left: 130px;
                padding: 0px;
                width: 700px;
                height: 20px;
            }
            #PARAGRAPH788 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #PARAGRAPH792 {
                top: 454px;
                left: 11px;
                padding: 0px;
                width: 300px;
                height: 66.66667175292969px;
            }
            #PARAGRAPH792 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #HEADLINE793 {
                top: 389px;
                left: 69px;
                padding: 0px;
                width: 184.4444580078125px;
                height: 17.77777862548828px;
            }
            #HEADLINE793 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE794 {
                top: 413px;
                left: 66.5px;
                padding: 0px;
                width: 184.4444580078125px;
                height: 31.111112594604492px;
            }
            #HEADLINE794 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #SHAPE795 {
                top: 354px;
                left: 149px;
                width: 35px;
                height: 35px;
            }
            #GROUP796 {
                top: 549px;
                left: 89px;
                width: 144px;
                height: 26px;
            }
            #SHAPE797 {
                top: 0px;
                left: 1px;
                width: 26px;
                height: 26px;
            }
            #SHAPE798 {
                top: 0px;
                left: 30px;
                width: 26px;
                height: 26px;
            }
            #SHAPE799 {
                top: 0px;
                left: 60px;
                width: 26px;
                height: 26px;
            }
            #SHAPE800 {
                top: 0px;
                left: 119px;
                width: 26px;
                height: 26px;
            }
            #SHAPE801 {
                top: 0px;
                left: 89px;
                width: 26px;
                height: 26px;
            }
            #BOX791 {
                top: 164px;
                left: 87.9965px;
                width: 164px;
                height: 164px;
            }
            #GROUP916 {
                top: 559.5486488342285px;
                left: 743.9757080078125px;
                width: 144px;
                height: 26px;
            }
            #SHAPE917 {
                top: 0px;
                left: 1px;
                width: 26px;
                height: 26px;
            }
            #SHAPE918 {
                top: 0px;
                left: 30px;
                width: 26px;
                height: 26px;
            }
            #SHAPE919 {
                top: 0px;
                left: 60px;
                width: 26px;
                height: 26px;
            }
            #SHAPE920 {
                top: 0px;
                left: 119px;
                width: 26px;
                height: 26px;
            }
            #SHAPE921 {
                top: 0px;
                left: 89px;
                width: 26px;
                height: 26px;
            }
            #HEADLINE620 {
                top: 235.704px;
                left: 11.7031px;
                padding: 0px;
                width: 30.703125px;
                height: 56.734375px;
            }
            #HEADLINE620 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE612 {
                top: 28.75px;
                left: 103px;
                padding: 0px;
                width: 733px;
                height: 84px;
            }
            #HEADLINE612 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #BOX622 {
                top: 227.579px;
                left: 359px;
                width: 270px;
                height: 117.046875px;
            }
            #HEADLINE672 {
                top: 11.765625px;
                left: 33.5px;
                padding: 0px;
                width: 221px;
                height: 60px;
            }
            #HEADLINE672 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH674 {
                top: 84.015625px;
                left: 25.5px;
                padding: 0px;
                width: 226px;
                height: 20px;
            }
            #PARAGRAPH674 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BUTTON930 {
                top: 71.765625px;
                left: 122px;
                padding: 0px;
                width: 111px;
                height: 31px;
            }
            #BUTTON930 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX615 {
                top: 226.139px;
                left: 25px;
                width: 279px;
                height: 85.46875px;
            }
            #PARAGRAPH617 {
                top: 82.8665px;
                left: 29.9013px;
                padding: 0px;
                width: 226px;
                height: 20px;
            }
            #PARAGRAPH617 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE616 {
                top: 15.25px;
                left: 40.875px;
                padding: 0px;
                width: 221.359375px;
                height: 20px;
            }
            #HEADLINE616 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BUTTON925 {
                top: 48.625px;
                left: 133px;
                padding: 0px;
                width: 111px;
                height: 31px;
            }
            #BUTTON925 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX637 {
                top: 376.828px;
                left: 25.8281px;
                width: 276.703125px;
                height: 105.046875px;
            }
            #HEADLINE639 {
                top: 15.077px;
                left: 35.0335px;
                padding: 0px;
                width: 221.296875px;
                height: 40px;
            }
            #HEADLINE639 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH676 {
                top: 97.890625px;
                left: 24.9375px;
                padding: 0px;
                width: 226px;
                height: 20px;
            }
            #PARAGRAPH676 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BUTTON927 {
                top: 66.890625px;
                left: 131.9375px;
                padding: 0px;
                width: 111px;
                height: 31px;
            }
            #BUTTON927 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX641 {
                top: 375.813px;
                left: 0px;
                width: 55.328125px;
                height: 61.234375px;
            }
            #HEADLINE642 {
                top: 7px;
                left: 15.0625px;
                padding: 0px;
                width: 27.03125px;
                height: 44.859375px;
            }
            #HEADLINE642 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #BOX644 {
                top: 386.016px;
                left: 359.485px;
                width: 276.703125px;
                height: 94.921875px;
            }
            #HEADLINE645 {
                top: 15.077px;
                left: 35.0335px;
                padding: 0px;
                width: 221.296875px;
                height: 20px;
            }
            #HEADLINE645 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH649 {
                top: 95.9368px;
                left: 30.402px;
                padding: 0px;
                width: 226px;
                height: 20px;
            }
            #PARAGRAPH649 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BUTTON928 {
                top: 56.484375px;
                left: 121.515625px;
                padding: 0px;
                width: 111px;
                height: 31px;
            }
            #BUTTON928 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX650 {
                top: 388px;
                left: 684px;
                width: 276.703125px;
                height: 112.9375px;
            }
            #PARAGRAPH653 {
                top: 92.9375px;
                left: 28.6875px;
                padding: 0px;
                width: 226px;
                height: 20px;
            }
            #PARAGRAPH653 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BUTTON926 {
                top: 61.9375px;
                left: 131px;
                padding: 0px;
                width: 111px;
                height: 31px;
            }
            #BUTTON926 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #HEADLINE651 {
                top: 11.46875px;
                left: 20.75px;
                padding: 0px;
                width: 234.015625px;
                height: 40px;
            }
            #HEADLINE651 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX629 {
                top: 225.719px;
                left: 690px;
                width: 270px;
                height: 103.265625px;
            }
            #HEADLINE630 {
                top: 14.546875px;
                left: 44.984375px;
                padding: 0px;
                width: 167px;
                height: 20px;
            }
            #HEADLINE630 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH675 {
                top: 71.390625px;
                left: 17.984375px;
                padding: 0px;
                width: 226px;
                height: 20px;
            }
            #PARAGRAPH675 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BUTTON929 {
                top: 54.28125px;
                left: 132.984375px;
                padding: 0px;
                width: 111px;
                height: 31px;
            }
            #BUTTON929 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX662 {
                top: 225.719px;
                left: 674.032px;
                width: 54px;
                height: 61px;
            }
            #HEADLINE663 {
                top: 10.1895px;
                left: 13px;
                padding: 0px;
                width: 30px;
                height: 28px;
            }
            #HEADLINE663 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #BOX658 {
                top: 226.781px;
                left: 333px;
                width: 54px;
                height: 61px;
            }
            #HEADLINE659 {
                top: 10.1895px;
                left: 13px;
                padding: 0px;
                width: 30px;
                height: 28px;
            }
            #HEADLINE659 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #BOX664 {
                top: 388.875px;
                left: 662.719px;
                width: 55.328125px;
                height: 61.234375px;
            }
            #HEADLINE665 {
                top: 7px;
                left: 15.0625px;
                padding: 0px;
                width: 27px;
                height: 36px;
            }
            #HEADLINE665 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #BOX666 {
                top: 386.016px;
                left: 339.641px;
                width: 55.328125px;
                height: 61.234375px;
            }
            #HEADLINE667 {
                top: 10px;
                left: 22.015625px;
                padding: 0px;
                width: 27px;
                height: 36px;
            }
            #HEADLINE667 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #BOX668 {
                top: 226.875px;
                left: 6px;
                width: 54px;
                height: 61px;
            }
            #HEADLINE669 {
                top: 10.1895px;
                left: 13px;
                padding: 0px;
                width: 30px;
                height: 28px;
            }
            #HEADLINE669 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE677 {
                top: 100.75px;
                left: 158px;
                padding: 0px;
                width: 678px;
                height: 30px;
            }
            #HEADLINE677 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE858 {
                top: 141px;
                left: 263px;
                padding: 0px;
                width: 512px;
                height: 30px;
            }
            #HEADLINE858 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH1026 {
                top: 27.125px;
                left: 40px;
                padding: 0px;
                width: 555px;
                height: 147px;
            }
            #PARAGRAPH1026 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #PARAGRAPH1017 {
                top: 41.578125px;
                left: 41px;
                padding: 0px;
                width: 555px;
                height: 189px;
            }
            #PARAGRAPH1017 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #PARAGRAPH1008 {
                top: 16.4375px;
                left: 32px;
                padding: 0px;
                width: 555px;
                height: 315px;
            }
            #PARAGRAPH1008 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #PARAGRAPH999 {
                top: 34.4375px;
                left: 51px;
                padding: 0px;
                width: 555px;
                height: 330px;
            }
            #PARAGRAPH999 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH990 {
                top: 33.34375px;
                left: 46px;
                padding: 0px;
                width: 555px;
                height: 220px;
            }
            #PARAGRAPH990 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH981 {
                top: 56.765625px;
                left: 34px;
                padding: 0px;
                width: 555px;
                height: 220px;
            }
            #PARAGRAPH981 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #IMAGE969 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/uploads/images/bfc1d1bf-af34-4fe2-9361-35f7f9120640.png);
            }
            #IMAGE969 {
                top: 214.5px;
                left: 257.797px;
                width: 114.734375px;
                height: 165px;
            }
            #FORM975 {
                top: 258.5px;
                left: 27.5px;
                width: 224px;
                height: 44px;
            }
            #FORM975 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM976 {
                top: 0px;
                left: 0px;
                width: 224px;
                height: 44px;
            }
            #ITEM_FORM976 > .widget-content {
                font-size: 15px;
            }
            #BUTTON977 {
                top: 309.5px;
                left: 27.5px;
                padding: 0px;
                width: 224px;
                height: 40px;
            }
            #BUTTON977 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #PARAGRAPH978 {
                top: 75.59375px;
                left: 8.53125px;
                padding: 0px;
                width: 242px;
                height: 330px;
            }
            #PARAGRAPH978 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX962 {
                top: -0.5px;
                left: -0.5px;
                width: 524px;
                height: 75px;
            }
            #LINEVERTICAL964 {
                top: 49.0312px;
                left: 32.5px;
                width: 25px;
                height: 246.984375px;
            }
            #PARAGRAPH965 {
                top: 107px;
                left: 78.5px;
                padding: 0px;
                width: 417px;
                height: 168px;
            }
            #PARAGRAPH965 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX956 {
                top: -0.5px;
                left: -0.5px;
                width: 524px;
                height: 75px;
            }
            #LINEVERTICAL958 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 316px;
            }
            #PARAGRAPH959 {
                top: 107px;
                left: 78.5px;
                padding: 0px;
                width: 419px;
                height: 216px;
            }
            #PARAGRAPH959 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX950 {
                top: -0.5px;
                left: -0.5px;
                width: 524px;
                height: 75px;
            }
            #LINEVERTICAL952 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 434px;
            }
            #PARAGRAPH953 {
                top: 74px;
                left: 65.5px;
                padding: 0px;
                width: 423px;
                height: 384px;
            }
            #PARAGRAPH953 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX944 {
                top: -0.5px;
                left: -0.5px;
                width: 524px;
                height: 75px;
            }
            #LINEVERTICAL946 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 453px;
            }
            #PARAGRAPH947 {
                top: 82.609375px;
                left: 52.484375px;
                padding: 0px;
                width: 436px;
                height: 408px;
            }
            #PARAGRAPH947 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX938 {
                top: -0.5px;
                left: -0.5px;
                width: 524px;
                height: 75px;
            }
            #LINEVERTICAL940 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 316px;
            }
            #PARAGRAPH941 {
                top: 74.5px;
                left: 57.5px;
                padding: 0px;
                width: 454px;
                height: 24px;
            }
            #PARAGRAPH941 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX932 {
                top: -0.5px;
                left: -0.5px;
                width: 524px;
                height: 75px;
            }
            #LINEVERTICAL934 {
                top: 24px;
                left: 32.5px;
                width: 25px;
                height: 316px;
            }
            #PARAGRAPH935 {
                top: 73.25px;
                left: 51.5px;
                padding: 0px;
                width: 433px;
                height: 24px;
            }
            #PARAGRAPH935 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE695 {
                top: 58.2813px;
                left: 163.032px;
                padding: 0px;
                width: 617px;
                height: 34px;
            }
            #HEADLINE695 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE697 {
                top: 178.703px;
                left: 585px;
                padding: 0px;
                width: 361px;
                height: 34px;
            }
            #HEADLINE697 > .widget-content {
                font-size: 28px;
                text-align: left;
            }
            #LINE700 {
                top: 144px;
                left: 294px;
                width: 387px;
                height: 25px;
            }
            #BOX701 {
                top: 186.094px;
                left: 79px;
                width: 240px;
                height: 240px;
            }
            #LISTOP702 {
                top: 221px;
                left: 445px;
                width: 430px;
                height: 212px;
            }
            #LISTOP702 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP702 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 18px;
                height: 18px;
                font-size: 9px;
                color: rgba(255, 87, 34, 1)rgba(255, 87, 34, 1);
                margin-right: 9px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,87,34,1)rgba(255,87,34,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M12.97 4.28l-1.44 1.44L21.814 16 11.53 26.28l1.44 1.44 11-11 .686-.72-.687-.72-11-11z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP702 > ol.widget-content li {
                margin-bottom: 8px;
            }
            #LISTOP702 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE704 {
                top: 103.094px;
                left: 350px;
                padding: 0px;
                width: 473px;
                height: 41px;
            }
            #HEADLINE704 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #BOX867 {
                top: 178.828px;
                left: 410px;
                width: 497px;
                height: 274px;
            }
            #HEADLINE967 {
                top: 183.906px;
                left: 461px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE967 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #GROUP753 {
                top: 34.09375px;
                left: 137px;
                width: 287px;
                height: 570px;
            }
            #BOX754 {
                top: 0px;
                left: 1px;
                width: 287px;
                height: 570px;
            }
            #SHAPE755 {
                top: 33.9433px;
                left: 125px;
                width: 39px;
                height: 42.6875px;
            }
            #PARAGRAPH756 {
                top: 466.094px;
                left: 30px;
                padding: 0px;
                width: 217px;
                height: 39.40625px;
            }
            #PARAGRAPH756 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX782 {
                top: 370.46875px;
                left: 42px;
                width: 203px;
                height: 70.828125px;
            }
            #HEADLINE783 {
                top: 10.9982px;
                left: 3px;
                padding: 0px;
                width: 200px;
                height: 52px;
            }
            #HEADLINE783 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX757 {
                top: 99px;
                left: 1px;
                width: 285px;
                height: 231.5px;
            }
            #HEADLINE758 {
                top: 13.1393px;
                left: 66px;
                padding: 0px;
                width: 185px;
                height: 24.078125px;
            }
            #HEADLINE758 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE759 {
                top: 32.3275px;
                left: 48px;
                padding: 0px;
                width: 232px;
                height: 77.734375px;
            }
            #HEADLINE759 > .widget-content {
                font-size: 65px;
                text-align: center;
            }
            #LINE760 {
                top: 100.5px;
                left: 66px;
                width: 182px;
                height: 27.359375px;
            }
            #HEADLINE761 {
                top: 119.75px;
                left: 20px;
                padding: 0px;
                width: 139px;
                height: 36px;
            }
            #HEADLINE761 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #SHAPE763 {
                top: 127.859375px;
                left: 169px;
                width: 53px;
                height: 59.109375px;
            }
            #LINE762 {
                top: 127.859375px;
                left: 21px;
                width: 130px;
                height: 27.359375px;
            }
            #HEADLINE764 {
                top: 311.094px;
                left: 223px;
                padding: 0px;
                width: 264px;
                height: 46px;
            }
            #HEADLINE764 > .widget-content {
                font-size: 40px;
                text-align: left;
            }
            #BOX747 {
                top: 34.0938px;
                left: 425px;
                width: 430.0000305175781px;
                height: 570px;
            }
            #HEADLINE748 {
                top: 34px;
                left: 34px;
                padding: 0px;
                width: 353px;
                height: 26px;
            }
            #HEADLINE748 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE777 {
                top: 67.5px;
                left: 93px;
                padding: 0px;
                width: 284px;
                height: 36px;
            }
            #HEADLINE777 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #FORM750 {
                top: 176.5px;
                left: 67px;
                width: 310px;
                height: 206px;
            }
            #FORM750 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM751 {
                top: 112.5px;
                left: 2px;
                width: 308px;
                height: 40px;
            }
            #ITEM_FORM751 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM774 {
                top: 0px;
                left: 0px;
                width: 310px;
                height: 36px;
            }
            #ITEM_FORM775 {
                top: 57px;
                left: 0px;
                width: 310px;
                height: 36px;
            }
            #ITEM_FORM776 {
                top: 170px;
                left: 2px;
                width: 308px;
                height: 36px;
            }
            #BUTTON752 {
                top: 406.297px;
                left: 68px;
                padding: 0px;
                width: 313px;
                height: 45px;
            }
            #BUTTON752 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #HEADLINE784 {
                top: 460px;
                left: 18px;
                padding: 0px;
                width: 412px;
                height: 100px;
            }
            #HEADLINE784 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #COUNTDOWN1035 {
                top: 109.94792175292969px;
                left: 65.9896240234375px;
                width: 320px;
                height: 57px;
            }
            #COUNTDOWN1035 > .widget-content {
                font-size: 40px;
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
            #IMAGE422 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo-white-1512779849416.png);
            }
            #IMAGE422 {
                top: 155.266px;
                left: 429.176px;
                width: 112.171875px;
                height: 20px;
            }
            #HEADLINE785 {
                top: 27.1719px;
                left: 0px;
                padding: 0px;
                width: 958px;
                height: 44px;
            }
            #HEADLINE785 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE786 {
                top: 180.234px;
                left: 0px;
                padding: 0px;
                width: 960px;
                height: 22px;
            }
            #HEADLINE786 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE868 {
                top: 64.2187px;
                left: 0px;
                padding: 0px;
                width: 960px;
                height: 72px;
            }
            #HEADLINE868 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
        }
        
        #SECTION2 {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION2 > .ladi-widget-overlay {
            background-color: rgba(51, 51, 51, 0.14);
        }
        
        #POPUP879 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/bg-2.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP879 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #POPUP705 .container {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION424 {
            display: block;
            background-image: url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION424 > .ladi-widget-overlay {
            background-color: rgba(255, 249, 249, 0.55);
        }
        
        #SECTION678 {
            display: block;
            background-image: url("https://thumbs.dreamstime.com/z/businessman-buildings-man-standing-thinking-backgrounds-56518801.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION678 > .ladi-widget-overlay {
            background-color: rgba(5, 4, 4, 0.68);
        }
        
        #SECTION37 {
            display: block;
            background-image: url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
            background-color: #r55500;
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION37 > .ladi-widget-overlay {
            background-color: rgba(248, 255, 248, 0.6);
        }
        
        #POPUP559 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP559 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #SECTION41 {
            display: block;
            background-color: rgba(93, 198, 98, 1);
        }
        
        #SECTION81 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION787 {
            display: block;
            background-image: url("https://static.ladipage.net/d/uploads/images/3de77ead-a9cd-4ec6-9dbc-e99957d8d0da.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION787 > .ladi-widget-overlay {
            background-color: rgba(40, 49, 40, 0.64);
        }
        
        #SECTION611 {
            display: block;
            background-image: url("https://static.ladipage.net/d/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
            background-color: rgba(76, 175, 80, 1);
            background-size: cover;
            background-attachment: fixed;
            background-position: top right;
            background-repeat: repeat;
        }
        
        #SECTION611 > .ladi-widget-overlay {
            background-color: rgba(200, 198, 198, 0.73);
        }
        
        #POPUP1024 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP1024 > .ladi-widget-overlay {
            background-color: rgba(15, 12, 36, 0.47);
        }
        
        #POPUP1015 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP1015 > .ladi-widget-overlay {
            background-color: rgba(15, 12, 36, 0.47);
        }
        
        #POPUP1006 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP1006 > .ladi-widget-overlay {
            background-color: rgba(15, 12, 36, 0.47);
        }
        
        #POPUP997 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP997 > .ladi-widget-overlay {
            background-color: rgba(15, 12, 36, 0.47);
        }
        
        #POPUP988 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP988 > .ladi-widget-overlay {
            background-color: rgba(15, 12, 36, 0.47);
        }
        
        #POPUP979 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP979 > .ladi-widget-overlay {
            background-color: rgba(15, 12, 36, 0.47);
        }
        
        #POPUP968 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/32132.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP968 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #POPUP961 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP961 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP955 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP955 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP949 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP949 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP943 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP943 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP937 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP937 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP931 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP931 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION694 {
            display: block;
            background-image: url("https://static.ladipage.net/d/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-size: cover;
            background-attachment: fixed;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION694 > .ladi-widget-overlay {
            background-color: rgba(36, 36, 36, 0.12);
        }
        
        #SECTION746 {
            display: block;
            background-image: url("https://static.ladipage.net/d/uploads/images/a8963f0e-6318-47ac-bc96-e8f096867a9f.jpg");
            background-color: rgba(224, 0, 40, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION746 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #SECTION409 {
            display: block;
            background-color: rgba(28, 28, 28, 1);
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
            line-height: 28px;
            letter-spacing: 1px;
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
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(38, 38, 38, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #HEADLINE843 {
            display: block;
        }
        
        #HEADLINE843 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(76, 175, 80, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #HEADLINE869 {
            -webkit-animation-delay: 6s;
            animation-delay: 6s;
            -webkit-animation-duration: 4s;
            animation-duration: 4s;
            display: block;
        }
        
        #HEADLINE869 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(249, 50, 35, 1);
            font-weight: 700;
            line-height: 46px;
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
        
        #ITEM_FORM844 {
            display: block;
        }
        
        #ITEM_FORM844 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM844> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM844> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM844 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM844 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM844 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM844 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #BUTTON489 {
            display: table;
        }
        
        #BUTTON489 > .widget-content {
            background-color: rgba(76, 175, 80, 1);
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
        
        #HEADLINE493 {
            display: block;
        }
        
        #HEADLINE493 > .widget-content {
            font-family: 'Trirong', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(246, 234, 237, 1);
            font-weight: 400;
            line-height: 41px;
            text-shadow: 1px 1px 0px rgba(0, 200, 83, 1);
        }
        
        #HEADLINE8 {
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
            -webkit-animation-duration: 5s;
            animation-duration: 5s;
            display: block;
        }
        
        #HEADLINE8 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 230, 118, 0.92);
            font-weight: 400;
            line-height: 41px;
            letter-spacing: 0px;
            text-shadow: 0px 0px 0px rgba(0, 0, 0, 1);
        }
        
        #HEADLINE845 {
            -webkit-animation-delay: 10s;
            animation-delay: 10s;
            -webkit-animation-duration: 10s;
            animation-duration: 10s;
            display: block;
        }
        
        #HEADLINE845 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 56px;
            letter-spacing: 3px;
            text-shadow: 1px 1px 0px rgba(255, 255, 255, 1);
        }
        
        #HEADLINE846 {
            display: block;
        }
        
        #HEADLINE846 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(251, 246, 246, 1);
            font-weight: 400;
            line-height: 31px;
        }
        
        #BUTTON847 {
            display: table;
        }
        
        #BUTTON847 > .widget-content {
            background-color: rgba(72, 152, 75, 1);
            color: rgba(255, 255, 255, 1);
            line-height: 24px;
        }
        
        #BUTTON847> .widget-content {
            border-radius: 10px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BUTTON847> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #IMAGE923 {
            display: block;
        }
        
        #IMAGE923 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE923 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE924 {
            display: block;
        }
        
        #HEADLINE924 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
            letter-spacing: 1px;
        }
        
        #BOX881 {
            display: block;
        }
        
        #BOX881 > .widget-content {
            background-color: rgba(72, 227, 195, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX881> .widget-content {
            border-radius: 50px;
            border-width: 2px;
            border-style: solid;
            border-color: #F6511F;
        }
        
        #BOX881> .ladi-widget-overlay {
            border-radius: 50px;
            border-width: 2px;
            border-style: solid;
            border-color: #F6511F;
        }
        
        #SHAPE882 {
            display: block;
        }
        
        #SHAPE882 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #F6511F;
        }
        
        #SHAPE882> .widget-content svg {
            fill: #F6511F;
        }
        
        #GROUP885 {
            display: block;
        }
        
        #GROUP885 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE886 {
            display: block;
        }
        
        #HEADLINE886 > .widget-content {
            font-family: 'Itim', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #F6511F;
            font-weight: 400;
            line-height: 36px;
        }
        
        #HEADLINE887 {
            display: block;
        }
        
        #HEADLINE887 > .widget-content {
            font-family: 'Itim', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(74, 74, 74, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #LINE884 {
            display: block;
        }
        
        #LINE884>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(74, 74, 74, 1);
            margin-top: 9.5px;
        }
        
        #LINE884 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH883 {
            display: block;
        }
        
        #PARAGRAPH883 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Itim', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(74, 74, 74, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #IMAGE706 {
            display: block;
        }
        
        #IMAGE706 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE707 {
            display: block;
        }
        
        #HEADLINE707 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 27px;
            letter-spacing: 0px;
        }
        
        #PARAGRAPH708 {
            display: block;
        }
        
        #PARAGRAPH708 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 1px;
        }
        
        #BOX709 {
            display: block;
        }
        
        #BOX709 > .widget-content {
            background-color: rgba(219, 0, 66, 1);
        }
        
        #BOX709> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX709> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE710 {
            display: block;
        }
        
        #HEADLINE710 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 36px;
            letter-spacing: 2px;
        }
        
        #FORM711 {
            display: block;
        }
        
        #FORM711 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM711 .widget-content::-webkit-input-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #FORM711 .widget-content:-moz-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #FORM711 .widget-content::-moz-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #FORM711 .widget-content:-ms-input-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #ITEM_FORM712 {
            display: block;
        }
        
        #ITEM_FORM712 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(89, 89, 89, 1);
        }
        
        #ITEM_FORM712> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(38, 38, 38, 1);
        }
        
        #ITEM_FORM712> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(38, 38, 38, 1);
        }
        
        #ITEM_FORM712 .widget-content::-webkit-input-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #ITEM_FORM712 .widget-content:-moz-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #ITEM_FORM712 .widget-content::-moz-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #ITEM_FORM712 .widget-content:-ms-input-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #BUTTON713 {
            display: table;
        }
        
        #BUTTON713 > .widget-content {
            background-color: rgba(0, 0, 0, 1);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 40px;
            letter-spacing: 1px;
            box-shadow: 0px 0px 0px rgba(255, 255, 255, 1);
        }
        
        #BUTTON713> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON713> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #GROUP425 {
            display: block;
        }
        
        #GROUP425 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE426 {
            display: block;
        }
        
        #SHAPE426 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(101, 148, 78, 1);
        }
        
        #SHAPE426> .widget-content svg {
            fill: rgba(101, 148, 78, 1);
        }
        
        #HEADLINE427 {
            display: block;
        }
        
        #HEADLINE427 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(54, 54, 54, 1);
            font-weight: 400;
            line-height: 40px;
        }
        
        #HEADLINE428 {
            display: block;
        }
        
        #HEADLINE428 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(43, 43, 43, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #GROUP429 {
            display: block;
        }
        
        #GROUP429 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE430 {
            display: block;
        }
        
        #SHAPE430 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(101, 148, 78, 1);
        }
        
        #SHAPE430> .widget-content svg {
            fill: rgba(101, 148, 78, 1);
        }
        
        #HEADLINE431 {
            display: block;
        }
        
        #HEADLINE431 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(54, 54, 54, 1);
            font-weight: 400;
            line-height: 40px;
        }
        
        #HEADLINE432 {
            display: block;
        }
        
        #HEADLINE432 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(43, 43, 43, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #GROUP433 {
            display: block;
        }
        
        #GROUP433 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE434 {
            display: block;
        }
        
        #SHAPE434 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(101, 148, 78, 1);
        }
        
        #SHAPE434> .widget-content svg {
            fill: rgba(101, 148, 78, 1);
        }
        
        #HEADLINE435 {
            display: block;
        }
        
        #HEADLINE435 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(54, 54, 54, 1);
            font-weight: 400;
            line-height: 40px;
        }
        
        #HEADLINE436 {
            display: block;
        }
        
        #HEADLINE436 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(43, 43, 43, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #GROUP437 {
            display: block;
        }
        
        #GROUP437 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE438 {
            display: block;
        }
        
        #SHAPE438 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #618b50;
        }
        
        #SHAPE438> .widget-content svg {
            fill: #618b50;
        }
        
        #HEADLINE439 {
            display: block;
        }
        
        #HEADLINE439 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(54, 54, 54, 1);
            font-weight: 400;
            line-height: 40px;
        }
        
        #HEADLINE440 {
            display: block;
        }
        
        #HEADLINE440 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(43, 43, 43, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX679 {
            display: block;
        }
        
        #BOX679 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(76, 175, 80, 1);
        }
        
        #HEADLINE680 {
            display: block;
        }
        
        #HEADLINE680 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX681 {
            display: block;
        }
        
        #BOX681 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(76, 175, 80, 1);
        }
        
        #HEADLINE686 {
            display: block;
        }
        
        #HEADLINE686 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX683 {
            display: block;
        }
        
        #BOX683 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(76, 175, 80, 1);
        }
        
        #HEADLINE684 {
            display: block;
        }
        
        #HEADLINE684 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX685 {
            display: block;
        }
        
        #BOX685 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(76, 175, 80, 1);
        }
        
        #HEADLINE690 {
            display: block;
        }
        
        #HEADLINE690 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #HEADLINE687 {
            display: block;
        }
        
        #HEADLINE687 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(230, 242, 229, 1);
            font-weight: 600;
            line-height: 40px;
        }
        
        #BOX689 {
            display: block;
        }
        
        #BOX689 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(76, 175, 80, 1);
        }
        
        #HEADLINE682 {
            display: block;
        }
        
        #HEADLINE682 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX691 {
            display: block;
        }
        
        #BOX691 > .widget-content {
            background-color: rgba(15, 2, 2, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(76, 175, 80, 1);
        }
        
        #HEADLINE692 {
            display: block;
        }
        
        #HEADLINE692 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(248, 243, 243, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #HEADLINE693 {
            display: block;
        }
        
        #HEADLINE693 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(248, 252, 250, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #HEADLINE38 {
            display: block;
        }
        
        #HEADLINE38 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(76, 175, 80, 1);
            font-weight: 400;
            line-height: 36px;
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
        
        #LISTOP850 {
            display: block;
        }
        
        #LISTOP850 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 21px;
        }
        
        #LISTOP562 {
            display: block;
        }
        
        #LISTOP562 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE42 {
            display: block;
        }
        
        #HEADLINE42 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #BOX120 {
            display: block;
        }
        
        #BOX120 > .widget-content {
            background-color: rgba(76, 175, 80, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE121 {
            display: block;
        }
        
        #HEADLINE121 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 15px;
        }
        
        #GROUP107 {
            display: block;
        }
        
        #GROUP107 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE108 {
            display: block;
        }
        
        #SHAPE108 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(93, 198, 98, 1);
        }
        
        #SHAPE108> .widget-content svg {
            fill: rgba(93, 198, 98, 1);
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
        
        #IMAGE842 {
            display: block;
        }
        
        #IMAGE842 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE842 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE853 {
            display: block;
        }
        
        #HEADLINE853 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #HEADLINE854 {
            display: block;
        }
        
        #HEADLINE854 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #HEADLINE855 {
            display: block;
        }
        
        #HEADLINE855 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #HEADLINE856 {
            display: block;
        }
        
        #HEADLINE856 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #GROUP566 {
            display: block;
        }
        
        #GROUP566 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE567 {
            display: block;
        }
        
        #SHAPE567 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(93, 198, 98, 1);
        }
        
        #SHAPE567> .widget-content svg {
            fill: rgba(93, 198, 98, 1);
        }
        
        #PARAGRAPH568 {
            display: block;
        }
        
        #PARAGRAPH568 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(120, 119, 119, 1);
            line-height: 20px;
        }
        
        #GROUP491 {
            display: block;
        }
        
        #GROUP491 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE105 {
            display: block;
        }
        
        #SHAPE105 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(93, 198, 98, 1);
        }
        
        #SHAPE105> .widget-content svg {
            fill: rgba(93, 198, 98, 1);
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
        
        #HEADLINE857 {
            display: block;
        }
        
        #HEADLINE857 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #GROUP101 {
            display: block;
        }
        
        #GROUP101 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE102 {
            display: block;
        }
        
        #SHAPE102 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(93, 198, 98, 1);
        }
        
        #SHAPE102> .widget-content svg {
            fill: rgba(93, 198, 98, 1);
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
        
        #SHAPE86 {
            display: block;
        }
        
        #SHAPE86 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(93, 198, 98, 1);
        }
        
        #SHAPE86> .widget-content svg {
            fill: rgba(93, 198, 98, 1);
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
        
        #HEADLINE851 {
            display: block;
        }
        
        #HEADLINE851 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #SHAPE111 {
            display: block;
        }
        
        #SHAPE111 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(93, 198, 98, 1);
        }
        
        #SHAPE111> .widget-content svg {
            fill: rgba(93, 198, 98, 1);
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
        
        #HEADLINE789 {
            display: block;
        }
        
        #HEADLINE789 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 34px;
        }
        
        #GROUP802 {
            display: block;
        }
        
        #GROUP802 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX803 {
            display: block;
        }
        
        #BOX803 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp1512-1513323610.JPG");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
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
        
        #BOX803> .widget-content {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX803> .ladi-widget-overlay {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX803 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH804 {
            display: block;
        }
        
        #PARAGRAPH804 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #HEADLINE805 {
            display: block;
        }
        
        #HEADLINE805 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 18px;
            letter-spacing: 1px;
        }
        
        #HEADLINE806 {
            display: block;
        }
        
        #HEADLINE806 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 16px;
            letter-spacing: 0px;
        }
        
        #SHAPE807 {
            display: block;
        }
        
        #SHAPE807 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE807> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #GROUP808 {
            display: block;
        }
        
        #GROUP808 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE809 {
            display: block;
        }
        
        #SHAPE809 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE809> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE810 {
            display: block;
        }
        
        #SHAPE810 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE810> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE811 {
            display: block;
        }
        
        #SHAPE811 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE811> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE812 {
            display: block;
        }
        
        #SHAPE812 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE812> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE813 {
            display: block;
        }
        
        #SHAPE813 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE813> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #HEADLINE1033 {
            display: block;
        }
        
        #HEADLINE1033 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 16px;
            letter-spacing: 0px;
        }
        
        #GROUP814 {
            display: block;
        }
        
        #GROUP814 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX815 {
            display: block;
        }
        
        #BOX815 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15123-1513325175.JPG");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
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
        
        #BOX815> .widget-content {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX815> .ladi-widget-overlay {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX815 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH816 {
            display: block;
        }
        
        #PARAGRAPH816 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #HEADLINE817 {
            display: block;
        }
        
        #HEADLINE817 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 18px;
            letter-spacing: 1px;
        }
        
        #SHAPE819 {
            display: block;
        }
        
        #SHAPE819 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE819> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #PARAGRAPH788 {
            display: block;
        }
        
        #PARAGRAPH788 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 20px;
        }
        
        #PARAGRAPH792 {
            display: block;
        }
        
        #PARAGRAPH792 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #HEADLINE793 {
            display: block;
        }
        
        #HEADLINE793 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 18px;
            letter-spacing: 1px;
        }
        
        #HEADLINE794 {
            display: block;
        }
        
        #HEADLINE794 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 16px;
            letter-spacing: 0px;
        }
        
        #SHAPE795 {
            display: block;
        }
        
        #SHAPE795 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE795> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #GROUP796 {
            display: block;
        }
        
        #GROUP796 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE797 {
            display: block;
        }
        
        #SHAPE797 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE797> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE798 {
            display: block;
        }
        
        #SHAPE798 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE798> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE799 {
            display: block;
        }
        
        #SHAPE799 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE799> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE800 {
            display: block;
        }
        
        #SHAPE800 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE800> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE801 {
            display: block;
        }
        
        #SHAPE801 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE801> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #BOX791 {
            display: block;
        }
        
        #BOX791 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15122-1513324056.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(189, 189, 189, 1);
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
        
        #BOX791> .widget-content {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX791> .ladi-widget-overlay {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX791 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP916 {
            display: block;
        }
        
        #GROUP916 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE917 {
            display: block;
        }
        
        #SHAPE917 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE917> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE918 {
            display: block;
        }
        
        #SHAPE918 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE918> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE919 {
            display: block;
        }
        
        #SHAPE919 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE919> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE920 {
            display: block;
        }
        
        #SHAPE920 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE920> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #SHAPE921 {
            display: block;
        }
        
        #SHAPE921 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 193, 74, 1);
        }
        
        #SHAPE921> .widget-content svg {
            fill: rgba(255, 193, 74, 1);
        }
        
        #HEADLINE620 {
            display: block;
        }
        
        #HEADLINE620 > .widget-content {
            font-family: 'Roboto Slab';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #HEADLINE612 {
            display: block;
        }
        
        #HEADLINE612 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(67, 147, 71, 1);
            font-weight: 400;
            line-height: 42px;
        }
        
        #BOX622 {
            display: block;
        }
        
        #BOX622 > .widget-content {
            background-color: rgba(76, 175, 80, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 4px 0px rgba(255, 235, 59, 1);
        }
        
        #BOX622> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX622> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #HEADLINE672 {
            display: block;
        }
        
        #HEADLINE672 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #PARAGRAPH674 {
            display: block;
        }
        
        #PARAGRAPH674 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BUTTON930 {
            display: table;
        }
        
        #BUTTON930 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(76, 175, 80, 1);
            line-height: 21px;
            box-shadow: 2px 2px 0px rgba(255, 193, 7, 1);
        }
        
        #BUTTON930> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON930> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX615 {
            display: block;
        }
        
        #BOX615 > .widget-content {
            background-color: rgba(76, 175, 80, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 4px 0px rgba(255, 235, 59, 1);
        }
        
        #BOX615> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX615> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #PARAGRAPH617 {
            display: block;
        }
        
        #PARAGRAPH617 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE616 {
            display: block;
        }
        
        #HEADLINE616 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #BUTTON925 {
            display: table;
        }
        
        #BUTTON925 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(76, 175, 80, 1);
            line-height: 21px;
            box-shadow: 2px 2px 0px rgba(255, 193, 7, 1);
        }
        
        #BUTTON925> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON925> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX637 {
            display: block;
        }
        
        #BOX637 > .widget-content {
            background-color: rgba(76, 175, 80, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 4px 0px rgba(227, 183, 0, 1);
        }
        
        #BOX637> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX637> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #HEADLINE639 {
            display: block;
        }
        
        #HEADLINE639 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #PARAGRAPH676 {
            display: block;
        }
        
        #PARAGRAPH676 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BUTTON927 {
            display: table;
        }
        
        #BUTTON927 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(76, 175, 80, 1);
            line-height: 21px;
            box-shadow: 2px 2px 0px rgba(255, 193, 7, 1);
        }
        
        #BUTTON927> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON927> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX641 {
            display: block;
        }
        
        #BOX641 > .widget-content {
            background-color: rgba(26, 37, 59, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(253, 208, 17, 1);
        }
        
        #BOX641> .widget-content {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX641> .ladi-widget-overlay {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #HEADLINE642 {
            display: block;
        }
        
        #HEADLINE642 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(239, 219, 219, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #BOX644 {
            display: block;
        }
        
        #BOX644 > .widget-content {
            background-color: rgba(76, 175, 80, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 4px 0px rgba(227, 183, 0, 1);
        }
        
        #BOX644> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX644> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #HEADLINE645 {
            display: block;
        }
        
        #HEADLINE645 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #PARAGRAPH649 {
            display: block;
        }
        
        #PARAGRAPH649 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BUTTON928 {
            display: table;
        }
        
        #BUTTON928 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(76, 175, 80, 1);
            line-height: 21px;
            box-shadow: 2px 2px 0px rgba(255, 193, 7, 1);
        }
        
        #BUTTON928> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON928> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX650 {
            display: block;
        }
        
        #BOX650 > .widget-content {
            background-color: rgba(76, 175, 80, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 4px 0px rgba(227, 183, 0, 1);
        }
        
        #BOX650> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX650> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #PARAGRAPH653 {
            display: block;
        }
        
        #PARAGRAPH653 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BUTTON926 {
            display: table;
        }
        
        #BUTTON926 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(76, 175, 80, 1);
            line-height: 21px;
            box-shadow: 2px 2px 0px rgba(255, 193, 7, 1);
        }
        
        #BUTTON926> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON926> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE651 {
            display: block;
        }
        
        #HEADLINE651 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #BOX629 {
            display: block;
        }
        
        #BOX629 > .widget-content {
            background-color: rgba(76, 175, 80, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 4px 0px rgba(227, 183, 0, 1);
        }
        
        #BOX629> .widget-content {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX629> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #HEADLINE630 {
            display: block;
        }
        
        #HEADLINE630 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #PARAGRAPH675 {
            display: block;
        }
        
        #PARAGRAPH675 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BUTTON929 {
            display: table;
        }
        
        #BUTTON929 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(76, 175, 80, 1);
            line-height: 21px;
            box-shadow: 2px 2px 0px rgba(255, 193, 7, 1);
        }
        
        #BUTTON929> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON929> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX662 {
            display: block;
        }
        
        #BOX662 > .widget-content {
            background-color: rgba(26, 37, 59, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(253, 208, 17, 1);
        }
        
        #BOX662> .widget-content {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX662> .ladi-widget-overlay {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #HEADLINE663 {
            display: block;
        }
        
        #HEADLINE663 > .widget-content {
            font-family: 'Roboto Slab';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #BOX658 {
            display: block;
        }
        
        #BOX658 > .widget-content {
            background-color: rgba(26, 37, 59, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(253, 208, 17, 1);
        }
        
        #BOX658> .widget-content {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX658> .ladi-widget-overlay {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #HEADLINE659 {
            display: block;
        }
        
        #HEADLINE659 > .widget-content {
            font-family: 'Roboto Slab';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #BOX664 {
            display: block;
        }
        
        #BOX664 > .widget-content {
            background-color: rgba(26, 37, 59, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(253, 208, 17, 1);
        }
        
        #BOX664> .widget-content {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX664> .ladi-widget-overlay {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #HEADLINE665 {
            display: block;
        }
        
        #HEADLINE665 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(239, 219, 219, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #BOX666 {
            display: block;
        }
        
        #BOX666 > .widget-content {
            background-color: rgba(26, 37, 59, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(253, 208, 17, 1);
        }
        
        #BOX666> .widget-content {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX666> .ladi-widget-overlay {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #HEADLINE667 {
            display: block;
        }
        
        #HEADLINE667 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(239, 219, 219, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #BOX668 {
            display: block;
        }
        
        #BOX668 > .widget-content {
            background-color: rgba(26, 37, 59, 1);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(253, 208, 17, 1);
        }
        
        #BOX668> .widget-content {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #BOX668> .ladi-widget-overlay {
            border-radius: 150px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 102, 255, 1);
        }
        
        #HEADLINE669 {
            display: block;
        }
        
        #HEADLINE669 > .widget-content {
            font-family: 'Roboto Slab';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #HEADLINE677 {
            display: block;
        }
        
        #HEADLINE677 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(27, 94, 32, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #HEADLINE858 {
            display: block;
        }
        
        #HEADLINE858 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(55, 131, 58, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #PARAGRAPH1026 {
            display: block;
        }
        
        #PARAGRAPH1026 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 21px;
            letter-spacing: 1px;
        }
        
        #PARAGRAPH1017 {
            display: block;
        }
        
        #PARAGRAPH1017 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 21px;
            letter-spacing: 1px;
        }
        
        #PARAGRAPH1008 {
            display: block;
        }
        
        #PARAGRAPH1008 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 21px;
            letter-spacing: 1px;
        }
        
        #PARAGRAPH999 {
            display: block;
        }
        
        #PARAGRAPH999 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 22px;
            letter-spacing: 1px;
        }
        
        #PARAGRAPH990 {
            display: block;
        }
        
        #PARAGRAPH990 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Quicksand', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 1px;
        }
        
        #PARAGRAPH981 {
            display: block;
        }
        
        #PARAGRAPH981 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Quicksand', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 1px;
        }
        
        #IMAGE969 {
            display: block;
        }
        
        #IMAGE969 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #FORM975 {
            display: block;
        }
        
        #FORM975 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM975 .widget-content::-webkit-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #FORM975 .widget-content:-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #FORM975 .widget-content::-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #FORM975 .widget-content:-ms-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM976 {
            display: block;
        }
        
        #ITEM_FORM976 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(89, 89, 89, 1);
        }
        
        #ITEM_FORM976> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(38, 38, 38, 1);
        }
        
        #ITEM_FORM976> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(38, 38, 38, 1);
        }
        
        #ITEM_FORM976 .widget-content::-webkit-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM976 .widget-content:-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM976 .widget-content::-moz-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #ITEM_FORM976 .widget-content:-ms-input-placeholder {
            color: rgba(110, 110, 110, 1)
        }
        
        #BUTTON977 {
            display: table;
        }
        
        #BUTTON977 > .widget-content {
            background-color: rgba(0, 0, 0, 1);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 40px;
            letter-spacing: 1px;
            box-shadow: 0px 0px 0px rgba(255, 255, 255, 1);
        }
        
        #BUTTON977> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON977> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #PARAGRAPH978 {
            display: block;
        }
        
        #PARAGRAPH978 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 1px;
        }
        
        #BOX962 {
            display: block;
        }
        
        #BOX962 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL964 {
            display: block;
        }
        
        #LINEVERTICAL964>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL964 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH965 {
            display: block;
        }
        
        #PARAGRAPH965 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX956 {
            display: block;
        }
        
        #BOX956 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
        }
        
        #LINEVERTICAL958 {
            display: block;
        }
        
        #LINEVERTICAL958>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL958 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH959 {
            display: block;
        }
        
        #PARAGRAPH959 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX950 {
            display: block;
        }
        
        #BOX950 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
        }
        
        #LINEVERTICAL952 {
            display: block;
        }
        
        #LINEVERTICAL952>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL952 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH953 {
            display: block;
        }
        
        #PARAGRAPH953 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX944 {
            display: block;
        }
        
        #BOX944 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
        }
        
        #LINEVERTICAL946 {
            display: block;
        }
        
        #LINEVERTICAL946>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL946 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH947 {
            display: block;
        }
        
        #PARAGRAPH947 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX938 {
            display: block;
        }
        
        #BOX938 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL940 {
            display: block;
        }
        
        #LINEVERTICAL940>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL940 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH941 {
            display: block;
        }
        
        #PARAGRAPH941 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX932 {
            display: block;
        }
        
        #BOX932 > .widget-content {
            background-color: rgba(255, 255, 255, 0.98);
        }
        
        #LINEVERTICAL934 {
            display: block;
        }
        
        #LINEVERTICAL934>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 3px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(66, 66, 66, 1);
            margin-left: 9.5px;
        }
        
        #LINEVERTICAL934 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH935 {
            display: block;
        }
        
        #PARAGRAPH935 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 400;
            line-height: 24px;
        }
        
        #HEADLINE695 {
            display: block;
        }
        
        #HEADLINE695 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(40, 98, 31, 1);
            font-weight: 400;
            line-height: 34px;
        }
        
        #HEADLINE697 {
            display: block;
        }
        
        #HEADLINE697 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(183, 28, 28, 1);
            font-weight: 400;
            line-height: 34px;
            letter-spacing: 0px;
            text-shadow: 0px 0px 0px rgba(0, 0, 0, 1);
        }
        
        #LINE700 {
            display: block;
        }
        
        #LINE700>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(76, 175, 80, 1);
            margin-top: 10.5px;
        }
        
        #LINE700 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX701 {
            display: block;
        }
        
        #BOX701 > .widget-content {
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
        
        #BOX701> .widget-content {
            border-radius: 550px;
        }
        
        #BOX701> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #BOX701 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #LISTOP702 {
            display: block;
        }
        
        #LISTOP702 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #HEADLINE704 {
            display: block;
        }
        
        #HEADLINE704 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(35, 71, 37, 1);
            font-weight: 600;
            line-height: 41px;
        }
        
        #BOX867 {
            display: block;
        }
        
        #BOX867 > .widget-content {
            background-color: rgba(189, 189, 189, 0.08);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX867> .widget-content {
            border-radius: 30px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(76, 175, 80, 1);
        }
        
        #BOX867> .ladi-widget-overlay {
            border-radius: 30px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(76, 175, 80, 1);
        }
        
        #HEADLINE967 {
            display: block;
        }
        
        #HEADLINE967 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #GROUP753 {
            display: block;
        }
        
        #GROUP753 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX754 {
            display: block;
        }
        
        #BOX754 > .widget-content {
            background-color: rgba(0, 0, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE755 {
            display: block;
        }
        
        #SHAPE755 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE755> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #PARAGRAPH756 {
            display: block;
        }
        
        #PARAGRAPH756 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #BOX782 {
            display: block;
        }
        
        #BOX782 > .widget-content {
            background-color: rgba(249, 239, 241, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX782> .widget-content {
            border-radius: 45px;
        }
        
        #BOX782> .ladi-widget-overlay {
            border-radius: 45px;
        }
        
        #HEADLINE783 {
            display: block;
        }
        
        #HEADLINE783 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(213, 0, 0, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #BOX757 {
            display: block;
        }
        
        #BOX757 > .widget-content {
            background-color: rgba(224, 0, 40, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE758 {
            display: block;
        }
        
        #HEADLINE758 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 22px;
            letter-spacing: 1px;
        }
        
        #HEADLINE759 {
            display: block;
        }
        
        #HEADLINE759 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 71px;
        }
        
        #LINE760 {
            display: block;
        }
        
        #LINE760>.widget-content .line {
            border-top-width: 4px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 8.5px;
        }
        
        #LINE760 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE761 {
            display: block;
        }
        
        #HEADLINE761 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 36px;
        }
        
        #SHAPE763 {
            display: block;
        }
        
        #SHAPE763 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE763> .widget-content svg {
            fill: #000000;
        }
        
        #LINE762 {
            display: block;
        }
        
        #LINE762>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(245, 233, 233, 1);
            margin-top: 11.6796875px;
        }
        
        #LINE762 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE764 {
            -webkit-animation-delay: 45s;
            animation-delay: 45s;
            -webkit-animation-duration: 5s;
            animation-duration: 5s;
            display: block;
        }
        
        #HEADLINE764 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 46px;
        }
        
        #BOX747 {
            display: block;
        }
        
        #BOX747 > .widget-content {
            background-color: rgba(38, 38, 38, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE748 {
            display: block;
        }
        
        #HEADLINE748 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #HEADLINE777 {
            display: block;
        }
        
        #HEADLINE777 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(242, 38, 23, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #FORM750 {
            display: block;
        }
        
        #FORM750 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM751 {
            display: block;
        }
        
        #ITEM_FORM751 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM751> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM751> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM774 {
            display: block;
        }
        
        #ITEM_FORM774 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM775 {
            display: block;
        }
        
        #ITEM_FORM775 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM776 {
            display: block;
        }
        
        #ITEM_FORM776 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON752 {
            display: table;
        }
        
        #BUTTON752 > .widget-content {
            background-color: rgba(224, 0, 40, 1);
            color: #ffffff;
            font-weight: 600;
            line-height: 23px;
        }
        
        #BUTTON752> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON752> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE784 {
            display: block;
        }
        
        #HEADLINE784 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(249, 239, 239, 1);
            font-weight: 300;
            line-height: 20px;
        }
        
        #COUNTDOWN1035 {
            display: block;
        }
        
        #COUNTDOWN1035 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 0px;
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
        
        #IMAGE422 {
            display: block;
        }
        
        #IMAGE422 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE422 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE785 {
            display: block;
        }
        
        #HEADLINE785 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(246, 233, 233, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE786 {
            display: block;
        }
        
        #HEADLINE786 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(245, 236, 236, 1);
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 15px;
        }
        
        #HEADLINE868 {
            display: block;
        }
        
        #HEADLINE868 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION2 {
                width: 100%;
                height: 836.3194580078125px;
            }
            #SECTION2 .container {}
            #SECTION2 {
                background-image: linear-gradient(rgba(51, 51, 51, 0.14), rgba(51, 51, 51, 0.14)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -o-linear-gradient(rgba(51, 51, 51, 0.14), rgba(51, 51, 51, 0.14)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -ms-linear-gradient(rgba(51, 51, 51, 0.14), rgba(51, 51, 51, 0.14)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -moz-linear-gradient(rgba(51, 51, 51, 0.14), rgba(51, 51, 51, 0.14)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -webkit-linear-gradient(rgba(51, 51, 51, 0.14), rgba(51, 51, 51, 0.14)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP879 {
                width: 100%;
                height: 100%;
            }
            #POPUP879 .container {
                width: 375px;
                height: 378px;
                top: calc(100%-378px);
            }
            #POPUP879 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg-2.png");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP705 {
                width: 100%;
                height: 100%;
            }
            #POPUP705 .container {
                width: 100%;
                height: 678px;
                top: calc(100%-678px);
            }
            #POPUP705 {
                background-image: none;
            }
            #SECTION424 {
                width: 100%;
                height: 188.0729217529297px;
            }
            #SECTION424 .container {}
            #SECTION424 {
                background-image: linear-gradient(rgba(255, 249, 249, 0.55), rgba(255, 249, 249, 0.55)), url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
                background-image: -o-linear-gradient(rgba(255, 249, 249, 0.55), rgba(255, 249, 249, 0.55)), url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
                background-image: -ms-linear-gradient(rgba(255, 249, 249, 0.55), rgba(255, 249, 249, 0.55)), url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
                background-image: -moz-linear-gradient(rgba(255, 249, 249, 0.55), rgba(255, 249, 249, 0.55)), url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 249, 249, 0.55), rgba(255, 249, 249, 0.55)), url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION678 {
                width: 100%;
                height: 755.4688186645508px;
            }
            #SECTION678 .container {}
            #SECTION678 {
                background-image: linear-gradient(rgba(5, 4, 4, 0.68), rgba(5, 4, 4, 0.68)), url("https://thumbs.dreamstime.com/z/businessman-buildings-man-standing-thinking-backgrounds-56518801.jpg");
                background-image: -o-linear-gradient(rgba(5, 4, 4, 0.68), rgba(5, 4, 4, 0.68)), url("https://thumbs.dreamstime.com/z/businessman-buildings-man-standing-thinking-backgrounds-56518801.jpg");
                background-image: -ms-linear-gradient(rgba(5, 4, 4, 0.68), rgba(5, 4, 4, 0.68)), url("https://thumbs.dreamstime.com/z/businessman-buildings-man-standing-thinking-backgrounds-56518801.jpg");
                background-image: -moz-linear-gradient(rgba(5, 4, 4, 0.68), rgba(5, 4, 4, 0.68)), url("https://thumbs.dreamstime.com/z/businessman-buildings-man-standing-thinking-backgrounds-56518801.jpg");
                background-image: -webkit-linear-gradient(rgba(5, 4, 4, 0.68), rgba(5, 4, 4, 0.68)), url("https://thumbs.dreamstime.com/z/businessman-buildings-man-standing-thinking-backgrounds-56518801.jpg");
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION37 {
                width: 100%;
                height: 641.3020324707031px;
            }
            #SECTION37 .container {}
            #SECTION37 {
                background-image: linear-gradient(rgba(248, 255, 248, 0.6), rgba(248, 255, 248, 0.6)), url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
                background-image: -o-linear-gradient(rgba(248, 255, 248, 0.6), rgba(248, 255, 248, 0.6)), url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
                background-image: -ms-linear-gradient(rgba(248, 255, 248, 0.6), rgba(248, 255, 248, 0.6)), url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
                background-image: -moz-linear-gradient(rgba(248, 255, 248, 0.6), rgba(248, 255, 248, 0.6)), url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
                background-image: -webkit-linear-gradient(rgba(248, 255, 248, 0.6), rgba(248, 255, 248, 0.6)), url("http://www.kyoto-be.ne.jp/nishijyouyou-hs/mt/access/images/sub_img.jpg");
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP559 {
                width: 100%;
                height: 100%;
            }
            #POPUP559 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP559 {
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
            #SECTION41 {
                width: 100%;
                height: 86.66666793823242px;
            }
            #SECTION41 .container {}
            #SECTION41 {
                background-image: none;
            }
            #SECTION81 {
                width: 100%;
                height: 975.0347900390625px;
            }
            #SECTION81 .container {}
            #SECTION81 {
                background-image: none;
            }
            #SECTION787 {
                width: 100%;
                height: 1542.7947597503662px;
            }
            #SECTION787 .container {}
            #SECTION787 {
                background-image: linear-gradient(rgba(40, 49, 40, 0.64), rgba(40, 49, 40, 0.64)), url("https://static.ladipage.net/uploads/images/3de77ead-a9cd-4ec6-9dbc-e99957d8d0da.jpg");
                background-image: -o-linear-gradient(rgba(40, 49, 40, 0.64), rgba(40, 49, 40, 0.64)), url("https://static.ladipage.net/uploads/images/3de77ead-a9cd-4ec6-9dbc-e99957d8d0da.jpg");
                background-image: -ms-linear-gradient(rgba(40, 49, 40, 0.64), rgba(40, 49, 40, 0.64)), url("https://static.ladipage.net/uploads/images/3de77ead-a9cd-4ec6-9dbc-e99957d8d0da.jpg");
                background-image: -moz-linear-gradient(rgba(40, 49, 40, 0.64), rgba(40, 49, 40, 0.64)), url("https://static.ladipage.net/uploads/images/3de77ead-a9cd-4ec6-9dbc-e99957d8d0da.jpg");
                background-image: -webkit-linear-gradient(rgba(40, 49, 40, 0.64), rgba(40, 49, 40, 0.64)), url("https://static.ladipage.net/uploads/images/3de77ead-a9cd-4ec6-9dbc-e99957d8d0da.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION611 {
                width: 100%;
                height: 903.9063110351562px;
            }
            #SECTION611 .container {}
            #SECTION611 {
                background-image: linear-gradient(rgba(200, 198, 198, 0.73), rgba(200, 198, 198, 0.73)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -o-linear-gradient(rgba(200, 198, 198, 0.73), rgba(200, 198, 198, 0.73)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -ms-linear-gradient(rgba(200, 198, 198, 0.73), rgba(200, 198, 198, 0.73)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -moz-linear-gradient(rgba(200, 198, 198, 0.73), rgba(200, 198, 198, 0.73)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -webkit-linear-gradient(rgba(200, 198, 198, 0.73), rgba(200, 198, 198, 0.73)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-size: cover;
                background-attachment: fixed;
                background-position: center top;
                background-repeat: repeat;
            }
            #POPUP1024 {
                width: 100%;
                height: 100%;
            }
            #POPUP1024 .container {
                width: 100%;
                height: 388px;
                top: calc(100%-388px);
            }
            #POPUP1024 {
                background-image: linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -o-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -ms-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -moz-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -webkit-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP1015 {
                width: 100%;
                height: 100%;
            }
            #POPUP1015 .container {
                width: 100%;
                height: 388px;
                top: calc(100%-388px);
            }
            #POPUP1015 {
                background-image: linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -o-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -ms-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -moz-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -webkit-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP1006 {
                width: 100%;
                height: 100%;
            }
            #POPUP1006 .container {
                width: 100%;
                height: 388px;
                top: calc(100%-388px);
            }
            #POPUP1006 {
                background-image: linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -o-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -ms-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -moz-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -webkit-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP997 {
                width: 100%;
                height: 100%;
            }
            #POPUP997 .container {
                width: 100%;
                height: 388px;
                top: calc(100%-388px);
            }
            #POPUP997 {
                background-image: linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -o-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -ms-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -moz-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -webkit-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP988 {
                width: 100%;
                height: 100%;
            }
            #POPUP988 .container {
                width: 100%;
                height: 388px;
                top: calc(100%-388px);
            }
            #POPUP988 {
                background-image: linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -o-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -ms-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -moz-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -webkit-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP979 {
                width: 100%;
                height: 100%;
            }
            #POPUP979 .container {
                width: 100%;
                height: 388px;
                top: calc(100%-388px);
            }
            #POPUP979 {
                background-image: linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -o-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -ms-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -moz-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-image: -webkit-linear-gradient(rgba(15, 12, 36, 0.47), rgba(15, 12, 36, 0.47)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/countdown-bg.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP968 {
                width: 100%;
                height: 100%;
            }
            #POPUP968 .container {
                width: 100%;
                height: 502px;
                top: calc(100%-502px);
            }
            #POPUP968 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/32132.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP961 {
                width: 100%;
                height: 100%;
            }
            #POPUP961 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP961 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP955 {
                width: 100%;
                height: 100%;
            }
            #POPUP955 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP955 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP949 {
                width: 100%;
                height: 100%;
            }
            #POPUP949 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP949 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP943 {
                width: 100%;
                height: 100%;
            }
            #POPUP943 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP943 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP937 {
                width: 100%;
                height: 100%;
            }
            #POPUP937 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP937 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP931 {
                width: 100%;
                height: 100%;
            }
            #POPUP931 .container {
                width: 100%;
                height: 328.328125px;
                top: calc(100%-328.328125px);
            }
            #POPUP931 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION694 {
                width: 100%;
                height: 778.1944580078125px;
            }
            #SECTION694 .container {}
            #SECTION694 {
                background-image: linear-gradient(rgba(36, 36, 36, 0.12), rgba(36, 36, 36, 0.12)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -o-linear-gradient(rgba(36, 36, 36, 0.12), rgba(36, 36, 36, 0.12)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -ms-linear-gradient(rgba(36, 36, 36, 0.12), rgba(36, 36, 36, 0.12)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -moz-linear-gradient(rgba(36, 36, 36, 0.12), rgba(36, 36, 36, 0.12)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -webkit-linear-gradient(rgba(36, 36, 36, 0.12), rgba(36, 36, 36, 0.12)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-size: cover;
                background-attachment: fixed;
                background-position: center top;
                background-repeat: no-repeat;
            }
            #SECTION746 {
                width: 100%;
                height: 1048.1944580078125px;
            }
            #SECTION746 .container {}
            #SECTION746 {
                background-image: url("https://static.ladipage.net/uploads/images/a8963f0e-6318-47ac-bc96-e8f096867a9f.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION409 {
                width: 100%;
                height: 307.65657806396484px;
            }
            #SECTION409 .container {}
            #SECTION409 {
                background-image: none;
            }
            #PARAGRAPH7 {
                top: 214.149px;
                left: 9.47915px;
                padding: 0px;
                width: 355px;
                height: 27.765625px;
            }
            #PARAGRAPH7 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #BOX471 {
                top: 393.976px;
                left: 13.455px;
                width: 355px;
                height: 426.765625px;
            }
            #HEADLINE472 {
                top: 8px;
                left: 8.96701px;
                padding: 0px;
                width: 340.984375px;
                height: 42.21875px;
            }
            #HEADLINE472 > .widget-content {
                font-size: 20px;
                text-align: center;
                line-height: 22px;
            }
            #HEADLINE843 {
                top: 50.4687px;
                left: -9.98611px;
                padding: 0px;
                width: 320px;
                height: 55.546875px;
            }
            #HEADLINE843 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 28px;
            }
            #HEADLINE869 {
                top: 78.778px;
                left: 180.512px;
                padding: 0px;
                width: 130.984375px;
                height: 45.546875px;
            }
            #HEADLINE869 > .widget-content {
                font-size: 40px;
                text-align: left;
            }
            #GROUP484 {
                top: 137.951px;
                left: 26.8819px;
                width: 300.0625px;
                height: 264.109375px;
            }
            #FORM485 {
                top: 0px;
                left: 1.06946px;
                width: 300px;
                height: 202.4375px;
            }
            #FORM485 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM486 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 37.046875px;
            }
            #ITEM_FORM486 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM487 {
                top: 112.491px;
                left: 0px;
                width: 300px;
                height: 39.96875px;
            }
            #ITEM_FORM487 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM488 {
                top: 56.7345px;
                left: 0px;
                width: 300px;
                height: 39.890625px;
            }
            #ITEM_FORM488 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM844 {
                top: 168.247px;
                left: 0px;
                width: 300px;
                height: 34.1875px;
            }
            #BUTTON489 {
                top: 216.337px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 48px;
            }
            #BUTTON489 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE493 {
                top: 124.966px;
                left: 1.00689px;
                padding: 0px;
                width: 355px;
                height: 80px;
            }
            #HEADLINE493 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #HEADLINE8 {
                top: 95.1564px;
                left: -8.98636px;
                padding: 0px;
                width: 375px;
                height: 62.21875px;
            }
            #HEADLINE8 > .widget-content {
                font-size: 21px;
                text-align: center;
                line-height: 32px;
            }
            #HEADLINE845 {
                top: 242.83px;
                left: 44.4757px;
                padding: 0px;
                width: 355px;
                height: 55.546875px;
            }
            #HEADLINE845 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #HEADLINE846 {
                top: 297.795px;
                left: 101.458px;
                padding: 0px;
                width: 200px;
                height: 30px;
            }
            #HEADLINE846 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #BUTTON847 {
                top: 340.764px;
                left: 100.476px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON847 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE923 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/989B0D146B60E3DDBAEA40F7DA8394B4E0BCA2DC174E667E38pimgpsh_fullsize_distr-1513229324.png);
            }
            #IMAGE923 {
                top: -8px;
                left: 125.512px;
                width: 126.984375px;
                height: 113.484375px;
            }
            #HEADLINE924 {
                top: 71.49px;
                left: 105.5px;
                padding: 0px;
                width: 220px;
                height: 23.328125px;
            }
            #HEADLINE924 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX881 {
                top: 20px;
                left: 163.5px;
                width: 48px;
                height: 48px;
            }
            #SHAPE882 {
                top: 14px;
                left: 13px;
                width: 26px;
                height: 26px;
            }
            #GROUP885 {
                top: 78px;
                left: 35px;
                width: 305px;
                height: 36px;
            }
            #HEADLINE886 {
                top: 0px;
                left: 142px;
                padding: 0px;
                width: 164px;
                height: 36px;
            }
            #HEADLINE886 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE887 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 132px;
                height: 36px;
            }
            #HEADLINE887 > .widget-content {
                font-size: 30px;
                text-align: right;
            }
            #LINE884 {
                top: 124px;
                left: 155.5px;
                width: 64px;
                height: 25px;
            }
            #PARAGRAPH883 {
                top: 107px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 120px;
            }
            #PARAGRAPH883 > .widget-content {
                font-size: 16px;
                text-align: center;
                line-height: 20px;
            }
            #IMAGE706 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/team1.jpg);
            }
            #IMAGE706 {
                top: 20px;
                left: 18px;
                width: 339px;
                height: 332px;
            }
            #HEADLINE707 {
                top: 362px;
                left: 59.5px;
                padding: 0px;
                width: 256px;
                height: 96px;
            }
            #HEADLINE707 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 32px;
            }
            #PARAGRAPH708 {
                top: 468px;
                left: 66.5px;
                padding: 0px;
                width: 242px;
                height: 19px;
            }
            #PARAGRAPH708 > .widget-content {
                font-size: 14px;
                text-align: center;
                line-height: 19px;
            }
            #BOX709 {
                top: 497px;
                left: 52px;
                width: 271px;
                height: 57px;
            }
            #HEADLINE710 {
                top: 11px;
                left: 18px;
                padding: 0px;
                width: 237px;
                height: 36px;
            }
            #HEADLINE710 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #FORM711 {
                top: 564px;
                left: 53px;
                width: 269px;
                height: 44px;
            }
            #FORM711 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM712 {
                top: 0px;
                left: 0px;
                width: 269px;
                height: 44px;
            }
            #ITEM_FORM712 > .widget-content {
                font-size: 16px;
            }
            #BUTTON713 {
                top: 618px;
                left: 52px;
                padding: 0px;
                width: 271px;
                height: 40px;
            }
            #BUTTON713 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP425 {
                top: 31.6667px;
                left: 0.510885px;
                width: 173.46875px;
                height: 49.75px;
            }
            #SHAPE426 {
                top: 2.32181px;
                left: 0.740579px;
                width: 42.1875px;
                height: 44.296875px;
            }
            #HEADLINE427 {
                top: 0px;
                left: 52.5811px;
                padding: 0px;
                width: 115.5px;
                height: 31.09375px;
            }
            #HEADLINE427 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #HEADLINE428 {
                top: 33.4233px;
                left: 52.5811px;
                padding: 0px;
                width: 122.90625px;
                height: 17.09375px;
            }
            #HEADLINE428 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP429 {
                top: 31.6667px;
                left: 168.566px;
                width: 216.640625px;
                height: 60.640625px;
            }
            #SHAPE430 {
                top: 2.76041px;
                left: 1px;
                width: 50.59375px;
                height: 53.203125px;
            }
            #HEADLINE431 {
                top: 0px;
                left: 63.1528px;
                padding: 0px;
                width: 138.5px;
                height: 37.34375px;
            }
            #HEADLINE431 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #HEADLINE432 {
                top: 40.1215px;
                left: 63.1528px;
                padding: 0px;
                width: 154.484375px;
                height: 20.53125px;
            }
            #HEADLINE432 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP433 {
                top: 107.326px;
                left: 0.961792px;
                width: 168.59375px;
                height: 56.765625px;
            }
            #SHAPE434 {
                top: 2.8254px;
                left: 0.756073px;
                width: 43.078125px;
                height: 53.921875px;
            }
            #HEADLINE435 {
                top: 0px;
                left: 52.1717px;
                padding: 0px;
                width: 117.921875px;
                height: 37.84375px;
            }
            #HEADLINE435 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #HEADLINE436 {
                top: 36.8616px;
                left: 38.9272px;
                padding: 0px;
                width: 124.734375px;
                height: 19.953125px;
            }
            #HEADLINE436 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP437 {
                top: 108.073px;
                left: 164.937px;
                width: 210.859375px;
                height: 65.734375px;
            }
            #SHAPE438 {
                top: 3.02084px;
                left: 1px;
                width: 52.03125px;
                height: 57.671875px;
            }
            #HEADLINE439 {
                top: 0px;
                left: 60.3403px;
                padding: 0px;
                width: 142.390625px;
                height: 40.46875px;
            }
            #HEADLINE439 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #HEADLINE440 {
                top: 43.4896px;
                left: 60.3403px;
                padding: 0px;
                width: 151.515625px;
                height: 22.25px;
            }
            #HEADLINE440 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX679 {
                top: 570.643px;
                left: 57.0052px;
                width: 260.984375px;
                height: 77.984375px;
            }
            #HEADLINE680 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 260.984375px;
                height: 46.65625px;
            }
            #HEADLINE680 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX681 {
                top: 471.65px;
                left: 57.0052px;
                width: 260.984375px;
                height: 88.984375px;
            }
            #HEADLINE686 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 260.984375px;
                height: 46.65625px;
            }
            #HEADLINE686 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX683 {
                top: 359.653px;
                left: 57.0052px;
                width: 260.984375px;
                height: 101.984375px;
            }
            #HEADLINE684 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 260.984375px;
                height: 70px;
            }
            #HEADLINE684 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX685 {
                top: 249.653px;
                left: 57.0052px;
                width: 260.984375px;
                height: 100px;
            }
            #HEADLINE690 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 260.984375px;
                height: 70px;
            }
            #HEADLINE690 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE687 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 60px;
            }
            #HEADLINE687 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 30px;
            }
            #BOX689 {
                top: 658.629px;
                left: 57.0052px;
                width: 260.984375px;
                height: 76.828125px;
            }
            #HEADLINE682 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 260.984375px;
                height: 46.65625px;
            }
            #HEADLINE682 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX691 {
                top: 146.667px;
                left: 57.0052px;
                width: 260.984375px;
                height: 92.984375px;
            }
            #HEADLINE692 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 260.984375px;
                height: 70px;
            }
            #HEADLINE692 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE693 {
                top: 90px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 46.65625px;
            }
            #HEADLINE693 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE38 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 71.109375px;
            }
            #HEADLINE38 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #YOUTUBE40 {
                top: 425.261px;
                left: 10.4688px;
                width: 355px;
                height: 177.22222222222223px;
            }
            #LISTOP850 {
                top: 91.649px;
                left: 10.4861px;
                width: 355px;
                height: 332.984375px;
            }
            #LISTOP850 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP850 > ol.widget-content li::before {
                content: counter(linum, disc);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(76, 175, 80, 1);
                margin-right: 8px;
            }
            #LISTOP850 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP850 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LISTOP562 {
                top: 30px;
                left: 12px;
                width: 351px;
                height: 260px;
            }
            #LISTOP562 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP562 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 23px;
                height: 23px;
                top: -2px;
                font-size: 11.5px;
                color: rgba(255, 230, 0, 1);
                margin-right: 12px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,230,0,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13 13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16 9.913 5 16 5zm-5.28 7.78l-1.44 1.44 6 6 .72.686.72-.687 6-6-1.44-1.44L16 18.064l-5.28-5.282z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP562 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP562 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE42 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 46.65625px;
            }
            #HEADLINE42 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 24px;
            }
            #BOX120 {
                display: none!important;
                top: 1048px;
                left: 10px;
                width: 355px;
                height: 137px;
            }
            #HEADLINE121 {
                top: 2.50781px;
                left: 1.52588e-05px;
                padding: 0px;
                width: 355px;
                height: 75px;
            }
            #HEADLINE121 > .widget-content {
                font-size: 22px;
                text-align: center;
                line-height: 26px;
            }
            #GROUP107 {
                top: 513.056px;
                left: 12.368px;
                width: 318.59375px;
                height: 68.875px;
            }
            #SHAPE108 {
                top: 0px;
                left: 1px;
                width: 38.984375px;
                height: 38.984375px;
            }
            #PARAGRAPH109 {
                top: 28.8889px;
                left: 44.5938px;
                padding: 0px;
                width: 275px;
                height: 40px;
            }
            #PARAGRAPH109 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #IMAGE842 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/912ldp-1512808566964.jpg);
            }
            #IMAGE842 {
                top: 675.022px;
                left: 6.48961px;
                width: 280px;
                height: 275px;
            }
            #HEADLINE853 {
                top: 117.709px;
                left: 69.9653px;
                padding: 0px;
                width: 200px;
                height: 25.546875px;
            }
            #HEADLINE853 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE854 {
                top: 512.96px;
                left: 57.0035px;
                padding: 0px;
                width: 258.984375px;
                height: 25.546875px;
            }
            #HEADLINE854 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE855 {
                top: 602.52px;
                left: 56.5px;
                padding: 0px;
                width: 200px;
                height: 25.546875px;
            }
            #HEADLINE855 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #HEADLINE856 {
                top: 374.738px;
                left: 68.5px;
                padding: 0px;
                width: 200px;
                height: 23.328125px;
            }
            #HEADLINE856 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #GROUP566 {
                top: 602.517px;
                left: -0.010437px;
                width: 331px;
                height: 65.984375px;
            }
            #SHAPE567 {
                top: 0px;
                left: 1px;
                width: 38.984375px;
                height: 38.984375px;
            }
            #PARAGRAPH568 {
                top: 25.9896px;
                left: 57.007px;
                padding: 0px;
                width: 275px;
                height: 40px;
            }
            #PARAGRAPH568 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP491 {
                top: 259.948px;
                left: 16.99px;
                width: 321.984375px;
                height: 88.46875px;
            }
            #SHAPE105 {
                top: 0px;
                left: 1px;
                width: 38.984375px;
                height: 38.984375px;
            }
            #PARAGRAPH106 {
                top: 28.4722px;
                left: 47.9965px;
                padding: 0px;
                width: 275px;
                height: 60px;
            }
            #PARAGRAPH106 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE857 {
                top: 260.079px;
                left: 60.9517px;
                padding: 0px;
                width: 240px;
                height: 25.546875px;
            }
            #HEADLINE857 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #GROUP101 {
                top: 381.944px;
                left: 14.4167px;
                width: 325px;
                height: 120.953125px;
            }
            #SHAPE102 {
                top: 0px;
                left: 1px;
                width: 38.984375px;
                height: 38.984375px;
            }
            #PARAGRAPH103 {
                top: 20.9549px;
                left: 51px;
                padding: 0px;
                width: 275px;
                height: 100px;
            }
            #PARAGRAPH103 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP85 {
                top: 30.5035px;
                left: 11.9861px;
                width: 363.96875px;
                height: 111.890625px;
            }
            #SHAPE86 {
                top: 0px;
                left: 1px;
                width: 43.6875px;
                height: 55.21875px;
            }
            #PARAGRAPH88 {
                top: 30.9722px;
                left: 57.0069px;
                padding: 0px;
                width: 307.984375px;
                height: 80.9375px;
            }
            #PARAGRAPH88 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE851 {
                top: 30.9031px;
                left: 69.5052px;
                padding: 0px;
                width: 250.984375px;
                height: 25.546875px;
            }
            #HEADLINE851 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #SHAPE111 {
                top: 119.908px;
                left: 12.1336px;
                width: 43.6875px;
                height: 50.03125px;
            }
            #PARAGRAPH112 {
                top: 157.912px;
                left: 69.5017px;
                padding: 0px;
                width: 271.984375px;
                height: 80px;
            }
            #PARAGRAPH112 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE789 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 80px;
            }
            #HEADLINE789 > .widget-content {
                font-size: 25px;
                text-align: center;
                line-height: 27px;
            }
            #GROUP802 {
                top: 166.993px;
                left: 38.4444px;
                width: 300px;
                height: 453.84375px;
            }
            #BOX803 {
                top: 0px;
                left: 69.0035px;
                width: 163.984375px;
                height: 163.984375px;
            }
            #BOX803 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp1512-1513323610.JPG");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp1512-1513323610.JPG");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp1512-1513323610.JPG");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp1512-1513323610.JPG");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp1512-1513323610.JPG");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #PARAGRAPH804 {
                top: 328.993px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 88.875px;
            }
            #PARAGRAPH804 > .widget-content {
                font-size: 13px;
                text-align: center;
                line-height: 18px;
            }
            #HEADLINE805 {
                top: 218.976px;
                left: 58.7778px;
                padding: 0px;
                width: 184.4375px;
                height: 17.765625px;
            }
            #HEADLINE805 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE806 {
                top: 287.882px;
                left: 26.6076px;
                padding: 0px;
                width: 248.765625px;
                height: 31.109375px;
            }
            #HEADLINE806 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #SHAPE807 {
                top: 173.993px;
                left: 133.5px;
                width: 35px;
                height: 35px;
            }
            #GROUP808 {
                top: 427.865px;
                left: 79.0035px;
                width: 143.984375px;
                height: 25.984375px;
            }
            #SHAPE809 {
                top: 0px;
                left: 1px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE810 {
                top: 0px;
                left: 30.0104px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE811 {
                top: 0px;
                left: 60.0104px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE812 {
                top: 0px;
                left: 119.003px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE813 {
                top: 0px;
                left: 89.0035px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #HEADLINE1033 {
                top: 246.753px;
                left: 27.1111px;
                padding: 0px;
                width: 247.765625px;
                height: 31.109375px;
            }
            #HEADLINE1033 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #GROUP814 {
                top: 636.823px;
                left: 36.4305px;
                width: 300px;
                height: 333.203125px;
            }
            #BOX815 {
                top: 0px;
                left: 57.9098px;
                width: 163.984375px;
                height: 165.515625px;
            }
            #BOX815 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15123-1513325175.JPG");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15123-1513325175.JPG");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15123-1513325175.JPG");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15123-1513325175.JPG");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15123-1513325175.JPG");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #PARAGRAPH816 {
                top: 266.545px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 66.65625px;
            }
            #PARAGRAPH816 > .widget-content {
                font-size: 13px;
                text-align: center;
                line-height: 18px;
            }
            #HEADLINE817 {
                top: 225.052px;
                left: 40.9132px;
                padding: 0px;
                width: 184.4375px;
                height: 17.765625px;
            }
            #HEADLINE817 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #SHAPE819 {
                top: 189.757px;
                left: 120.913px;
                width: 35px;
                height: 35.3125px;
            }
            #PARAGRAPH788 {
                top: 110px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #PARAGRAPH788 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #PARAGRAPH792 {
                top: 1373.72px;
                left: 37.5px;
                padding: 0px;
                width: 300px;
                height: 71.109375px;
            }
            #PARAGRAPH792 > .widget-content {
                font-size: 13px;
                text-align: center;
                line-height: 18px;
            }
            #HEADLINE793 {
                top: 1293.95px;
                left: 96.5105px;
                padding: 0px;
                width: 184.4375px;
                height: 17.765625px;
            }
            #HEADLINE793 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE794 {
                top: 1326.61px;
                left: 96.5105px;
                padding: 0px;
                width: 184.4375px;
                height: 31.109375px;
            }
            #HEADLINE794 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #SHAPE795 {
                top: 1242.83px;
                left: 170.503px;
                width: 35px;
                height: 35px;
            }
            #GROUP796 {
                top: 999.82px;
                left: 104.451px;
                width: 143.984375px;
                height: 25.984375px;
            }
            #SHAPE797 {
                top: 0px;
                left: 1px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE798 {
                top: 0px;
                left: 30.0104px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE799 {
                top: 0px;
                left: 60.0104px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE800 {
                top: 0px;
                left: 119.003px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE801 {
                top: 0px;
                left: 89.0035px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #BOX791 {
                top: 1054.04px;
                left: 107.49px;
                width: 163.984375px;
                height: 163.984375px;
            }
            #BOX791 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15122-1513324056.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15122-1513324056.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15122-1513324056.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15122-1513324056.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15122-1513324056.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #GROUP916 {
                top: 1465.81px;
                left: 119.476px;
                width: 143.984375px;
                height: 25.984375px;
            }
            #SHAPE917 {
                top: 0px;
                left: 1px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE918 {
                top: 0px;
                left: 30.0104px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE919 {
                top: 0px;
                left: 60.0104px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE920 {
                top: 0px;
                left: 119.003px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #SHAPE921 {
                top: 0px;
                left: 89.0035px;
                width: 25.984375px;
                height: 25.984375px;
            }
            #HEADLINE620 {
                display: none!important;
                top: 2027.23px;
                left: 172.148px;
                padding: 0px;
                width: 30.703125px;
                height: 28px;
            }
            #HEADLINE620 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE612 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 83.328125px;
            }
            #HEADLINE612 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 28px;
            }
            #BOX622 {
                top: 311.042px;
                left: 15.0104px;
                width: 351.984375px;
                height: 103.765625px;
            }
            #HEADLINE672 {
                top: 12.7656px;
                left: 59.5136px;
                padding: 0px;
                width: 275.75px;
                height: 40px;
            }
            #HEADLINE672 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #PARAGRAPH674 {
                top: 84.0156px;
                left: 25.5px;
                padding: 0px;
                width: 225.984375px;
                height: 20px;
            }
            #PARAGRAPH674 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BUTTON930 {
                top: 62.7656px;
                left: 207.99px;
                padding: 0px;
                width: 110px;
                height: 31px;
            }
            #BUTTON930 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX615 {
                top: 188.434px;
                left: 13.5069px;
                width: 351.484375px;
                height: 94.75px;
            }
            #PARAGRAPH617 {
                top: 82.8665px;
                left: 29.9013px;
                padding: 0px;
                width: 225.984375px;
                height: 20px;
            }
            #PARAGRAPH617 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE616 {
                top: 22.243px;
                left: 67.7257px;
                padding: 0px;
                width: 221.34375px;
                height: 20px;
            }
            #HEADLINE616 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BUTTON925 {
                top: 52.1875px;
                left: 211.229px;
                padding: 0px;
                width: 110px;
                height: 31px;
            }
            #BUTTON925 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX637 {
                top: 553.785px;
                left: 13.4375px;
                width: 350.984375px;
                height: 102.75px;
            }
            #HEADLINE639 {
                top: 15.945px;
                left: 73.1375px;
                padding: 0px;
                width: 263.765625px;
                height: 40px;
            }
            #HEADLINE639 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH676 {
                top: 97.8906px;
                left: 24.9375px;
                padding: 0px;
                width: 225.984375px;
                height: 20px;
            }
            #PARAGRAPH676 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BUTTON927 {
                top: 61.8906px;
                left: 203.935px;
                padding: 0px;
                width: 110px;
                height: 31px;
            }
            #BUTTON927 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX641 {
                top: 553.559px;
                left: 15.5382px;
                width: 55.3125px;
                height: 61.21875px;
            }
            #HEADLINE642 {
                top: 7px;
                left: 15.0625px;
                padding: 0px;
                width: 27.03125px;
                height: 44.84375px;
            }
            #HEADLINE642 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #BOX644 {
                top: 679.202px;
                left: 17.4652px;
                width: 350.984375px;
                height: 90.75px;
            }
            #HEADLINE645 {
                top: 15.702px;
                left: 74.0335px;
                padding: 0px;
                width: 221.28125px;
                height: 20px;
            }
            #HEADLINE645 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH649 {
                top: 95.9368px;
                left: 30.402px;
                padding: 0px;
                width: 225.984375px;
                height: 20px;
            }
            #PARAGRAPH649 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BUTTON928 {
                top: 46.4844px;
                left: 202.506px;
                padding: 0px;
                width: 110px;
                height: 31px;
            }
            #BUTTON928 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX650 {
                top: 795.24px;
                left: 17px;
                width: 346.984375px;
                height: 83.765625px;
            }
            #PARAGRAPH653 {
                top: 92.9375px;
                left: 28.6875px;
                padding: 0px;
                width: 225.984375px;
                height: 20px;
            }
            #PARAGRAPH653 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BUTTON926 {
                top: 38.9375px;
                left: 206.99px;
                padding: 0px;
                width: 110px;
                height: 31px;
            }
            #BUTTON926 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #HEADLINE651 {
                top: 12.3716px;
                left: 66.7396px;
                padding: 0px;
                width: 259.75px;
                height: 20px;
            }
            #HEADLINE651 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX629 {
                top: 439.014px;
                left: 13.5033px;
                width: 353.78125px;
                height: 94.75px;
            }
            #HEADLINE630 {
                top: 15.2935px;
                left: 67.9705px;
                padding: 0px;
                width: 166.984375px;
                height: 20px;
            }
            #HEADLINE630 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #PARAGRAPH675 {
                top: 71.3906px;
                left: 17.9844px;
                padding: 0px;
                width: 225.984375px;
                height: 20px;
            }
            #PARAGRAPH675 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BUTTON929 {
                top: 46.2813px;
                left: 207.967px;
                padding: 0px;
                width: 110px;
                height: 31px;
            }
            #BUTTON929 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX662 {
                top: 439.549px;
                left: 20.4861px;
                width: 53.984375px;
                height: 60.984375px;
            }
            #HEADLINE663 {
                top: 10.1895px;
                left: 13px;
                padding: 0px;
                width: 30px;
                height: 27.984375px;
            }
            #HEADLINE663 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #BOX658 {
                top: 324.519px;
                left: 22.5135px;
                width: 53.984375px;
                height: 60.984375px;
            }
            #HEADLINE659 {
                top: 10.1895px;
                left: 13px;
                padding: 0px;
                width: 30px;
                height: 27.984375px;
            }
            #HEADLINE659 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #BOX664 {
                top: 795.031px;
                left: 22.476px;
                width: 55.3125px;
                height: 61.21875px;
            }
            #HEADLINE665 {
                top: 7px;
                left: 15.0625px;
                padding: 0px;
                width: 26.984375px;
                height: 35.984375px;
            }
            #HEADLINE665 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #BOX666 {
                top: 679.479px;
                left: 16.4757px;
                width: 55.3125px;
                height: 61.21875px;
            }
            #HEADLINE667 {
                top: 10px;
                left: 22.0156px;
                padding: 0px;
                width: 26.984375px;
                height: 35.984375px;
            }
            #HEADLINE667 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #BOX668 {
                top: 198.29px;
                left: 20.503px;
                width: 53.984375px;
                height: 60.984375px;
            }
            #HEADLINE669 {
                top: 10.1895px;
                left: 13px;
                padding: 0px;
                width: 30px;
                height: 27.984375px;
            }
            #HEADLINE669 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE677 {
                top: 103.402px;
                left: 10.4861px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE677 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE858 {
                top: 139.333px;
                left: 10.4861px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE858 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #PARAGRAPH1026 {
                top: 27.125px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 147px;
            }
            #PARAGRAPH1026 > .widget-content {
                font-size: 15px;
                text-align: left;
                line-height: 19px;
            }
            #PARAGRAPH1017 {
                top: 41.5781px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 189px;
            }
            #PARAGRAPH1017 > .widget-content {
                font-size: 15px;
                text-align: left;
                line-height: 19px;
            }
            #PARAGRAPH1008 {
                top: 16.4375px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 315px;
            }
            #PARAGRAPH1008 > .widget-content {
                font-size: 15px;
                text-align: left;
                line-height: 19px;
            }
            #PARAGRAPH999 {
                top: 34.4375px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 264px;
            }
            #PARAGRAPH999 > .widget-content {
                font-size: 14px;
                text-align: left;
                line-height: 19px;
            }
            #PARAGRAPH990 {
                top: 33.3438px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 220px;
            }
            #PARAGRAPH990 > .widget-content {
                font-size: 16px;
                text-align: left;
                line-height: 19px;
            }
            #PARAGRAPH981 {
                top: 56.7656px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 220px;
            }
            #PARAGRAPH981 > .widget-content {
                font-size: 16px;
                text-align: left;
                line-height: 19px;
            }
            #IMAGE969 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/uploads/images/bfc1d1bf-af34-4fe2-9361-35f7f9120640.png);
            }
            #IMAGE969 {
                top: 50px;
                left: 130.133px;
                width: 114.734px;
                height: 165px;
            }
            #FORM975 {
                top: 255px;
                left: 75.5px;
                width: 224px;
                height: 44px;
            }
            #FORM975 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM976 {
                top: 0px;
                left: 0px;
                width: 224px;
                height: 44px;
            }
            #ITEM_FORM976 > .widget-content {
                font-size: 15px;
            }
            #BUTTON977 {
                top: 309px;
                left: 75.5px;
                padding: 0px;
                width: 224px;
                height: 40px;
            }
            #BUTTON977 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #PARAGRAPH978 {
                top: 75.5938px;
                left: 66.5px;
                padding: 0px;
                width: 242px;
                height: 20px;
            }
            #PARAGRAPH978 > .widget-content {
                font-size: 14px;
                text-align: center;
                line-height: 20px;
            }
            #BOX962 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #LINEVERTICAL964 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH965 {
                top: 107px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 120px;
            }
            #PARAGRAPH965 > .widget-content {
                font-size: 14px;
                text-align: left;
                line-height: 22px;
            }
            #BOX956 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #LINEVERTICAL958 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH959 {
                top: 107px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 168px;
            }
            #PARAGRAPH959 > .widget-content {
                font-size: 14px;
                text-align: left;
                line-height: 22px;
            }
            #BOX950 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #LINEVERTICAL952 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH953 {
                top: 74px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 264px;
            }
            #PARAGRAPH953 > .widget-content {
                font-size: 14px;
                text-align: left;
                line-height: 22px;
            }
            #BOX944 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #LINEVERTICAL946 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH947 {
                top: 82.6094px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 312px;
            }
            #PARAGRAPH947 > .widget-content {
                font-size: 14px;
                text-align: left;
                line-height: 22px;
            }
            #BOX938 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #LINEVERTICAL940 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH941 {
                top: 74.5px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 192px;
            }
            #PARAGRAPH941 > .widget-content {
                font-size: 14px;
                text-align: left;
                line-height: 22px;
            }
            #BOX932 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 75px;
            }
            #LINEVERTICAL934 {
                display: none!important;
                top: 105px;
                left: 175px;
                width: 25px;
                height: 410px;
            }
            #PARAGRAPH935 {
                top: 73.25px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 168px;
            }
            #PARAGRAPH935 > .widget-content {
                font-size: 14px;
                text-align: left;
                line-height: 22px;
            }
            #HEADLINE695 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 51.109375px;
            }
            #HEADLINE695 > .widget-content {
                font-size: 25px;
                text-align: center;
                line-height: 26px;
            }
            #HEADLINE697 {
                top: 407.362px;
                left: 75px;
                padding: 0px;
                width: 360.984375px;
                height: 33.328125px;
            }
            #HEADLINE697 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #LINE700 {
                top: 122.083px;
                left: 118.516px;
                width: 141.984375px;
                height: 25px;
            }
            #BOX701 {
                top: 146.837px;
                left: 61.5px;
                width: 240px;
                height: 240px;
            }
            #BOX701 > .widget-content {
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
            #LISTOP702 {
                top: 459.212px;
                left: 26.5052px;
                width: 335.984375px;
                height: 291.984375px;
            }
            #LISTOP702 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP702 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 18px;
                height: 18px;
                font-size: 9px;
                color: rgba(255, 87, 34, 1)rgba(255, 87, 34, 1);
                margin-right: 9px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,87,34,1)rgba(255,87,34,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M12.97 4.28l-1.44 1.44L21.814 16 11.53 26.28l1.44 1.44 11-11 .686-.72-.687-.72-11-11z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP702 > ol.widget-content li {
                margin-bottom: 8px;
            }
            #LISTOP702 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE704 {
                top: 81.1111px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #HEADLINE704 > .widget-content {
                font-size: 35px;
                text-align: center;
            }
            #BOX867 {
                top: 407.361px;
                left: 14px;
                width: 355px;
                height: 355.75px;
            }
            #HEADLINE967 {
                top: 412.559px;
                left: 33.4373px;
                padding: 0px;
                width: 200px;
                height: 27.765625px;
            }
            #HEADLINE967 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #GROUP753 {
                top: 24.5833px;
                left: -0.0278015px;
                width: 375.015625px;
                height: 426.765625px;
            }
            #BOX754 {
                top: 0px;
                left: 1px;
                width: 375px;
                height: 426.765625px;
            }
            #SHAPE755 {
                top: 11.1884px;
                left: 164.496px;
                width: 38.984375px;
                height: 31.9375px;
            }
            #PARAGRAPH756 {
                top: 389.043px;
                left: 82.4653px;
                padding: 0px;
                width: 216.984375px;
                height: 29.46875px;
            }
            #PARAGRAPH756 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX782 {
                top: 301.911px;
                left: 81.9861px;
                width: 202.984375px;
                height: 53.015625px;
            }
            #HEADLINE783 {
                top: 6.5475px;
                left: 3.98265px;
                padding: 0px;
                width: 200px;
                height: 38.921875px;
            }
            #HEADLINE783 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX757 {
                top: 48.0382px;
                left: 1.01736px;
                width: 375px;
                height: 235.75px;
            }
            #HEADLINE758 {
                top: 11.6146px;
                left: -7.5347px;
                padding: 0px;
                width: 185px;
                height: 16.625px;
            }
            #HEADLINE758 > .widget-content {
                font-size: 21px;
                text-align: center;
                line-height: 23px;
            }
            #HEADLINE759 {
                top: 32.0026px;
                left: 68.4896px;
                padding: 0px;
                width: 231.984375px;
                height: 58.1875px;
            }
            #HEADLINE759 > .widget-content {
                font-size: 65px;
                text-align: center;
            }
            #LINE760 {
                display: none!important;
                top: 73.8204px;
                left: 66px;
                width: 181.9965362548828px;
                height: 20.468751907348633px;
            }
            #HEADLINE761 {
                top: 111.684px;
                left: 66.4757px;
                padding: 0px;
                width: 138.984375px;
                height: 26.9375px;
            }
            #HEADLINE761 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #SHAPE763 {
                top: 144.731px;
                left: 192.476px;
                width: 52.984375px;
                height: 44.234375px;
            }
            #LINE762 {
                top: 117.135px;
                left: 67.4722px;
                width: 130px;
                height: 20.46875px;
            }
            #HEADLINE764 {
                top: 253.816px;
                left: 180.993px;
                padding: 0px;
                width: 263.984375px;
                height: 45.546875px;
            }
            #HEADLINE764 > .widget-content {
                font-size: 42px;
                text-align: left;
            }
            #BOX747 {
                top: 467.032px;
                left: -1.52116px;
                width: 377.75px;
                height: 525.984375px;
            }
            #HEADLINE748 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE748 > .widget-content {
                font-size: 20px;
                text-align: center;
                line-height: 30px;
            }
            #HEADLINE777 {
                top: 50.8333px;
                left: 15.4861px;
                padding: 0px;
                width: 327.984375px;
                height: 35.546875px;
            }
            #HEADLINE777 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #FORM750 {
                top: 151.892px;
                left: 38.6111px;
                width: 295px;
                height: 177.9375px;
            }
            #FORM750 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM751 {
                top: 91.979px;
                left: 0px;
                width: 295px;
                height: 40px;
            }
            #ITEM_FORM751 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM774 {
                top: 0px;
                left: 0px;
                width: 295px;
                height: 35.984375px;
            }
            #ITEM_FORM775 {
                top: 45.9896px;
                left: 0px;
                width: 295px;
                height: 35.984375px;
            }
            #ITEM_FORM776 {
                top: 141.979px;
                left: 0px;
                width: 295px;
                height: 35.984375px;
            }
            #BUTTON752 {
                top: 358.577px;
                left: 30.7118px;
                padding: 0px;
                width: 312px;
                height: 46px;
            }
            #BUTTON752 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #HEADLINE784 {
                top: 404.289px;
                left: 8px;
                padding: 0px;
                width: 355px;
                height: 100px;
            }
            #HEADLINE784 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #COUNTDOWN1035 {
                top: 93.948px;
                left: 29.2448px;
                width: 320px;
                height: 56.984375px;
            }
            #COUNTDOWN1035 > .widget-content {
                font-size: 40px;
            }
            #BOX410 {
                top: 236.667px;
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
            #IMAGE422 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo-white-1512779849416.png);
            }
            #IMAGE422 {
                top: 175.556px;
                left: 131.415px;
                width: 112.15625px;
                height: 20px;
            }
            #HEADLINE785 {
                top: 20px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 42.21875px;
            }
            #HEADLINE785 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE786 {
                top: 205.556px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 21.109375px;
            }
            #HEADLINE786 > .widget-content {
                font-size: 8px;
                text-align: center;
            }
            #HEADLINE868 {
                top: 72.2222px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 93.328125px;
            }
            #HEADLINE868 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
        }
    </style>
