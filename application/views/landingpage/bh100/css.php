
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
        
        .widget-section[lp-popup=true] .container .overlay-container-popup {
            width: 100%;
            height: 100%;
        }
    </style>
    <style id="lp-css-ladi">
        @media(min-width:768px) {
            #SECTION2 {
                width: 100%;
                height: 736.5625px;
            }
            #SECTION2 .container {}
            #SECTION2 {}
            #SECTION9 {
                width: 100%;
                height: 278.94097900390625px;
            }
            #SECTION9 .container {}
            #SECTION9 {}
            #SECTION36 {
                width: 100%;
                height: 515.9722290039062px;
            }
            #SECTION36 .container {}
            #SECTION36 {}
            #SECTION212 {
                width: 100%;
                height: 640.9548950195312px;
            }
            #SECTION212 .container {}
            #SECTION212 {}
            #SECTION94 {
                width: 100%;
                height: 929px;
            }
            #SECTION94 .container {}
            #SECTION94 {}
            #SECTION353 {
                width: 100%;
                height: 533px;
            }
            #SECTION353 .container {}
            #SECTION353 {}
            #POPUP296 {
                width: 100%;
                height: 100%;
            }
            #POPUP296 .container {
                width: 563px;
                height: 509px;
                top: calc(100%-509px);
            }
            #POPUP296 {}
            #POPUP292 {
                width: 100%;
                height: 100%;
            }
            #POPUP292 .container {
                width: 563px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP292 {}
            #POPUP285 {
                width: 100%;
                height: 100%;
            }
            #POPUP285 .container {
                width: 563px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP285 {}
            #SECTION42 {
                width: 100%;
                height: 365.4861145019531px;
            }
            #SECTION42 .container {}
            #SECTION42 {}
            #POPUP300 {
                width: 100%;
                height: 100%;
            }
            #POPUP300 .container {
                width: 563px;
                height: 536px;
                top: calc(100%-536px);
            }
            #POPUP300 {}
            #SECTION308 {
                width: 100%;
                height: 861.9618530273438px;
            }
            #SECTION308 .container {}
            #SECTION308 {}
            #GROUP374 {
                top: 418.75px;
                left: -155.9375px;
                width: 630px;
                height: 239px;
            }
            #BOX167 {
                top: 0px;
                left: 1px;
                width: 630px;
                height: 239px;
            }
            #BUTTON170 {
                top: 175.125px;
                left: 170px;
                padding: 0px;
                width: 284px;
                height: 45px;
            }
            #BUTTON170 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #FORM168 {
                top: 20.9375px;
                left: 15.9375px;
                width: 601.09375px;
                height: 138.265625px;
            }
            #FORM168 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM169 {
                top: 101.281px;
                left: 0.046875px;
                width: 601.05908203125px;
                height: 37px;
            }
            #ITEM_FORM169 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM173 {
                top: 0px;
                left: -9.96094e-07px;
                width: 297.96875px;
                height: 35.72916793823242px;
            }
            #ITEM_FORM174 {
                top: 0px;
                left: 309.053px;
                width: 292.013916015625px;
                height: 35.72916793823242px;
            }
            #ITEM_FORM175 {
                top: 51.5139px;
                left: 0px;
                width: 601.05908203125px;
                height: 38.99305725097656px;
            }
            #HEADLINE5 {
                top: 87.4348px;
                left: -130.879px;
                padding: 0px;
                width: 835px;
                height: 51px;
            }
            #HEADLINE5 > .widget-content {
                font-size: 45px;
                text-align: left;
            }
            #HEADLINE171 {
                top: 156.465px;
                left: -75.9792px;
                padding: 0px;
                width: 834.4444580078125px;
                height: 46px;
            }
            #HEADLINE171 > .widget-content {
                font-size: 40px;
                text-align: left;
            }
            #IMAGE177 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Logo-xin-1516271280.png);
            }
            #IMAGE177 {
                top: 7.059px;
                left: -174.941px;
                width: 152.9166717529297px;
                height: 36.440975189208984px;
            }
            #HEADLINE372 {
                top: 272.84px;
                left: -135.457px;
                padding: 0px;
                width: 683.75px;
                height: 60px;
            }
            #HEADLINE372 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #GROUP11 {
                top: 30.4375px;
                left: -133.37501525878906px;
                width: 283.85418701171875px;
                height: 206.18751525878906px;
            }
            #GROUP12 {
                top: 103.58334350585938px;
                left: 1px;
                width: 283.85418701171875px;
                height: 102.60416793823242px;
            }
            #HEADLINE13 {
                top: 0px;
                left: 11.875px;
                padding: 0px;
                width: 270.138916015625px;
                height: 21.406251907348633px;
            }
            #HEADLINE13 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH14 {
                top: 47.5625px;
                left: 1px;
                padding: 0px;
                width: 283.85418701171875px;
                height: 55.052085876464844px;
            }
            #PARAGRAPH14 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #SHAPE15 {
                top: 0px;
                left: 100.35417175292969px;
                width: 94.96527862548828px;
                height: 91.75347900390625px;
            }
            #GROUP26 {
                top: 29.203125px;
                left: 179.625px;
                width: 315.71875px;
                height: 240.34375px;
            }
            #SHAPE30 {
                top: 0px;
                left: 112.28125px;
                width: 96.31945037841797px;
                height: 99.32292175292969px;
            }
            #GROUP27 {
                top: 104px;
                left: 1px;
                width: 315.72918701171875px;
                height: 136.3541488647461px;
            }
            #HEADLINE28 {
                top: 0px;
                left: 16.4375px;
                padding: 0px;
                width: 273.9930725097656px;
                height: 23.17708396911621px;
            }
            #HEADLINE28 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH29 {
                top: 46.8958px;
                left: 1px;
                padding: 0px;
                width: 315.7465515136719px;
                height: 79.46180725097656px;
            }
            #PARAGRAPH29 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP250 {
                top: 28.0625px;
                left: 556.640625px;
                width: 284px;
                height: 232.21875px;
            }
            #GROUP32 {
                top: 105.453125px;
                left: 1px;
                width: 284px;
                height: 126.765625px;
            }
            #HEADLINE33 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 284px;
                height: 24px;
            }
            #HEADLINE33 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH34 {
                top: 46.765625px;
                left: 5px;
                padding: 0px;
                width: 263.1944580078125px;
                height: 80px;
            }
            #PARAGRAPH34 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #SHAPE242 {
                top: 0px;
                left: 72.6875px;
                width: 100px;
                height: 90.85417175292969px;
            }
            #BOX252 {
                top: -5.21px;
                left: -277px;
                width: 1797px;
                height: 23.375px;
            }
            #GROUP251 {
                top: 18.125px;
                left: 832.90625px;
                width: 284.4375px;
                height: 200.4375px;
            }
            #GROUP246 {
                top: 115.6875px;
                left: 1px;
                width: 284.4375px;
                height: 84.75px;
            }
            #HEADLINE247 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 284.4444580078125px;
                height: 23.33333396911621px;
            }
            #HEADLINE247 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH248 {
                top: 45.75px;
                left: 41.875px;
                padding: 0px;
                width: 209.33334350585938px;
                height: 40px;
            }
            #PARAGRAPH248 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #SHAPE245 {
                top: 0px;
                left: 90.015625px;
                width: 86.00695037841797px;
                height: 100.59028625488281px;
            }
            #YOUTUBE38 {
                top: 127px;
                left: 542.983px;
                width: 523px;
                height: 341.0069580078125px;
            }
            #GROUP306 {
                top: 105.5078125px;
                left: -112.015625px;
                width: 593.984375px;
                height: 386.11328125px;
            }
            #LISTOP256 {
                top: 34.86328125px;
                left: 1px;
                width: 593.984375px;
                height: 351.25px;
            }
            #LISTOP256 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #LISTOP256 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                color: rgba(251, 192, 45, 1);
                margin-right: 10px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(251,192,45,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M22,16A2,2 0 0,1 20,18H8C6.89,18 6,17.1 6,16V4C6,2.89 6.89,2 8,2H20A2,2 0 0,1 22,4V16M16,20V22H4A2,2 0 0,1 2,20V7H4V20H16M13,14L20,7L18.59,5.59L13,11.17L9.91,8.09L8.5,9.5L13,14Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP256 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP256 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE255 {
                top: 0px;
                left: 132.97265625px;
                padding: 0px;
                width: 347.013916015625px;
                height: 32.5px;
            }
            #HEADLINE255 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #GROUP373 {
                top: 23.2813px;
                left: 0.984375px;
                width: 1033px;
                height: 69.984375px;
            }
            #HEADLINE254 {
                top: 41.9844px;
                left: 0px;
                padding: 0px;
                width: 1033px;
                height: 28px;
            }
            #HEADLINE254 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #HEADLINE249 {
                top: 0px;
                left: 244px;
                padding: 0px;
                width: 511.9270935058594px;
                height: 41.111114501953125px;
            }
            #HEADLINE249 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #BOX215 {
                top: 159.007px;
                left: -0.00689351px;
                width: 428.9930725097656px;
                height: 120.00000762939453px;
            }
            #PARAGRAPH217 {
                top: 37.51734924316406px;
                left: 22.048614501953125px;
                padding: 0px;
                width: 387.013916015625px;
                height: 51.111114501953125px;
            }
            #PARAGRAPH217 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX230 {
                top: 158.516px;
                left: 527px;
                width: 435.95489501953125px;
                height: 118.95833587646484px;
            }
            #PARAGRAPH232 {
                top: 39px;
                left: 15px;
                padding: 0px;
                width: 407.953125px;
                height: 52px;
            }
            #PARAGRAPH232 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX233 {
                top: 320.465px;
                left: 526.986px;
                width: 434.982666015625px;
                height: 114.07986450195312px;
            }
            #PARAGRAPH235 {
                top: 26.09375px;
                left: 7.9756px;
                padding: 0px;
                width: 394.01043701171875px;
                height: 51.111114501953125px;
            }
            #PARAGRAPH235 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX236 {
                top: 479.969px;
                left: 2.02425px;
                width: 423.0208435058594px;
                height: 116.92708587646484px;
            }
            #PARAGRAPH238 {
                top: 31.99652099609375px;
                left: 17.9931px;
                padding: 0px;
                width: 381.9965515136719px;
                height: 51.111114501953125px;
            }
            #PARAGRAPH238 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX239 {
                top: 479.462px;
                left: 526.007px;
                width: 434.045166015625px;
                height: 120.38195037841797px;
            }
            #PARAGRAPH229 {
                top: 31.84027099609375px;
                left: 0px;
                padding: 0px;
                width: 412.98614501953125px;
                height: 51.111114501953125px;
            }
            #PARAGRAPH229 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #GROUP375 {
                top: 30px;
                left: 207.156px;
                width: 572px;
                height: 100.3125px;
            }
            #HEADLINE214 {
                top: 58.0938px;
                left: 0.015625px;
                padding: 0px;
                width: 572.013916015625px;
                height: 42.222225189208984px;
            }
            #HEADLINE214 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE213 {
                top: 0px;
                left: 100.156px;
                padding: 0px;
                width: 357.7778015136719px;
                height: 41.111114501953125px;
            }
            #HEADLINE213 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #GROUP376 {
                top: 321.031px;
                left: 0px;
                width: 431.328125px;
                height: 113.84375px;
            }
            #PARAGRAPH241 {
                top: 19.2656px;
                left: 18px;
                padding: 0px;
                width: 413.3333435058594px;
                height: 76.66667175292969px;
            }
            #PARAGRAPH241 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX227 {
                top: 0.015625px;
                left: 0px;
                width: 428.9930725097656px;
                height: 113.85417175292969px;
            }
            #GROUP370 {
                top: 369.578125px;
                left: 138px;
                width: 648.09375px;
                height: 196.4375px;
            }
            #BOX118 {
                top: 17.4375px;
                left: 1px;
                width: 648.09375px;
                height: 179px;
            }
            #HEADLINE119 {
                top: 24.9281px;
                left: 154px;
                padding: 0px;
                width: 284px;
                height: 32.171875px;
            }
            #HEADLINE119 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE120 {
                top: 62.0735px;
                left: 154.313px;
                padding: 0px;
                width: 458px;
                height: 48px;
            }
            #HEADLINE120 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON290 {
                top: 119.035px;
                left: 414px;
                padding: 0px;
                width: 160px;
                height: 41px;
            }
            #BUTTON290 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #GROUP117 {
                top: 0px;
                left: 25px;
                width: 119px;
                height: 120.46875px;
            }
            #BOX122 {
                top: 0px;
                left: 1px;
                width: 119px;
                height: 120.46875px;
            }
            #GROUP371 {
                top: 632.578125px;
                left: 138px;
                width: 647px;
                height: 220px;
            }
            #BOX279 {
                top: 36px;
                left: 1px;
                width: 647px;
                height: 184px;
            }
            #HEADLINE280 {
                top: 24.1719px;
                left: 154.802px;
                padding: 0px;
                width: 395.46875px;
                height: 31.09375px;
            }
            #HEADLINE280 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE281 {
                top: 59.1094px;
                left: 154.458px;
                padding: 0px;
                width: 403.390625px;
                height: 96.328125px;
            }
            #HEADLINE281 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BUTTON291 {
                top: 123.453px;
                left: 415.015px;
                padding: 0px;
                width: 153px;
                height: 40px;
            }
            #BUTTON291 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX283 {
                top: 0px;
                left: 28px;
                width: 114px;
                height: 116.390625px;
            }
            #GROUP377 {
                top: 14.0938px;
                left: 245px;
                width: 464px;
                height: 80.96875px;
            }
            #HEADLINE95 {
                top: 50.9688px;
                left: 0px;
                padding: 0px;
                width: 464px;
                height: 30px;
            }
            #HEADLINE95 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE304 {
                top: 0px;
                left: 38px;
                padding: 0px;
                width: 357px;
                height: 42px;
            }
            #HEADLINE304 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #GROUP378 {
                top: 126.125px;
                left: 139.46875px;
                width: 646.625px;
                height: 177.453125px;
            }
            #BOX145 {
                top: 9.453125px;
                left: 1px;
                width: 646.625px;
                height: 168px;
            }
            #HEADLINE146 {
                top: 13px;
                left: 153px;
                padding: 0px;
                width: 284px;
                height: 31px;
            }
            #HEADLINE146 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE147 {
                top: 51.3438px;
                left: 137.063px;
                padding: 0px;
                width: 494.625px;
                height: 48px;
            }
            #HEADLINE147 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BUTTON284 {
                top: 109.3125px;
                left: 411.0625px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON284 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #GROUP144 {
                top: 0px;
                left: 22.421875px;
                width: 118.9930648803711px;
                height: 115.98958587646484px;
            }
            #BOX149 {
                top: 0px;
                left: 1px;
                width: 119px;
                height: 116px;
            }
            #BOX354 {
                top: 42px;
                left: 474px;
                width: 391px;
                height: 470px;
            }
            #LISTOP368 {
                top: 127.5625px;
                left: 28px;
                width: 347px;
                height: 280px;
            }
            #LISTOP368 > .widget-content {
                text-align: left;
            }
            #LISTOP368 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 25px;
                height: 25px;
                font-size: 12.5px;
                color: rgba(249, 168, 37, 1);
                margin-right: 4px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(249,168,37,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP368 > ol.widget-content li {
                margin-bottom: 20px;
            }
            #LISTOP368 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE355 {
                top: 19.3125px;
                left: 75px;
                padding: 0px;
                width: 269px;
                height: 36px;
            }
            #HEADLINE355 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE361 {
                top: 73.4375px;
                left: 46px;
                padding: 0px;
                width: 309.6875px;
                height: 42px;
            }
            #HEADLINE361 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #IMAGE367 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/TrangNT_anh1-1513771191.gif);
            }
            #IMAGE367 {
                top: 41px;
                left: 101px;
                width: 375px;
                height: 470px;
            }
            #BOX297 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE298 {
                top: 30.1875px;
                left: 20px;
                padding: 0px;
                width: 519px;
                height: 54px;
            }
            #HEADLINE298 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #LISTOP299 {
                top: 154px;
                left: 79.5px;
                width: 432px;
                height: 340px;
            }
            #LISTOP299 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP299 > ol.widget-content li::before {
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
            #LISTOP299 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP299 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX293 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE294 {
                top: 31px;
                left: 22px;
                padding: 0px;
                width: 523px;
                height: 60px;
            }
            #HEADLINE294 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #LISTOP295 {
                top: 154px;
                left: 79.5px;
                width: 432px;
                height: 145px;
            }
            #LISTOP295 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP295 > ol.widget-content li::before {
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
            #LISTOP295 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP295 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX286 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE287 {
                top: 42px;
                left: 78px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE287 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP288 {
                top: 154px;
                left: 79.5px;
                width: 432px;
                height: 163px;
            }
            #LISTOP288 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP288 > ol.widget-content li::before {
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
            #LISTOP288 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP288 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE43 {
                top: 26px;
                left: 172.771px;
                padding: 0px;
                width: 617.77783203125px;
                height: 60.000003814697266px;
            }
            #HEADLINE43 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #PARAGRAPH44 {
                top: 92px;
                left: 130px;
                padding: 0px;
                width: 700px;
                height: 22px;
            }
            #PARAGRAPH44 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #GROUP50 {
                top: 145.3125px;
                left: 247.7109375px;
                width: 372.03125px;
                height: 140.48828125px;
            }
            #BOX51 {
                top: 0px;
                left: 1px;
                width: 94.00390625px;
                height: 102.8125px;
            }
            #PARAGRAPH52 {
                top: 10.83984375px;
                left: 106.0390625px;
                padding: 0px;
                width: 266.9921875px;
                height: 80px;
            }
            #PARAGRAPH52 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH53 {
                top: 104.8046875px;
                left: 4.125px;
                padding: 0px;
                width: 241.25px;
                height: 17.5px;
            }
            #PARAGRAPH53 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH54 {
                top: 125.48828125px;
                left: 42.9375px;
                padding: 0px;
                width: 151.25px;
                height: 15px;
            }
            #PARAGRAPH54 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP55 {
                top: 146.62109375px;
                left: 636.65625px;
                width: 368.984375px;
                height: 140.48828125px;
            }
            #BOX56 {
                top: 0px;
                left: 3.98828125px;
                width: 112.98828125px;
                height: 101.50390625px;
            }
            #PARAGRAPH57 {
                top: 10.9765625px;
                left: 136.9765625px;
                padding: 0px;
                width: 233px;
                height: 80px;
            }
            #PARAGRAPH57 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH58 {
                top: 102.5px;
                left: 31.99609375px;
                padding: 0px;
                width: 241.25px;
                height: 17.5px;
            }
            #PARAGRAPH58 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH59 {
                top: 125.48828125px;
                left: 20px;
                padding: 0px;
                width: 211.2890625px;
                height: 15px;
            }
            #PARAGRAPH59 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP45 {
                top: 146.62109375px;
                left: -138.03125px;
                width: 341.015625px;
                height: 142.36328125px;
            }
            #BOX46 {
                top: 0px;
                left: 1.99609375px;
                width: 109.98046875px;
                height: 101.34765625px;
            }
            #PARAGRAPH47 {
                top: 11.34765625px;
                left: 121.01953125px;
                padding: 0px;
                width: 220.99609375px;
                height: 80px;
            }
            #PARAGRAPH47 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH48 {
                top: 105.348px;
                left: 24.0078125px;
                padding: 0px;
                width: 241.25px;
                height: 17.5px;
            }
            #PARAGRAPH48 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH49 {
                top: 127.36328125px;
                left: 1px;
                padding: 0px;
                width: 279.00390625px;
                height: 15px;
            }
            #PARAGRAPH49 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP303 {
                top: 146.75px;
                left: 50.5px;
                width: 494px;
                height: 370px;
            }
            #LISTOP303 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP303 > ol.widget-content li::before {
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
            #LISTOP303 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP303 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX301 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE302 {
                top: 17px;
                left: 10.5px;
                padding: 0px;
                width: 552px;
                height: 81px;
            }
            #HEADLINE302 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #BOX315 {
                top: 669.167px;
                left: 0px;
                width: 960.984375px;
                height: 140px;
            }
            #FORM316 {
                top: 36.9444px;
                left: 26.9965px;
                width: 465.3472595214844px;
                height: 57.986114501953125px;
            }
            #FORM316 > .widget-content {
                font-size: 16px;
            }
            #HEADLINE80 {
                top: 61.45832824707031px;
                left: 26.996536254882812px;
                padding: 0px;
                width: 248px;
                height: 20px;
            }
            #HEADLINE80 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP81 {
                top: 60.9375px;
                left: 260px;
                width: 247.65625px;
                height: 66px;
            }
            #SHAPE82 {
                top: 1px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #PARAGRAPH83 {
                top: 0px;
                left: 26px;
                padding: 0px;
                width: 222.6666717529297px;
                height: 66px;
            }
            #PARAGRAPH83 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP84 {
                top: 62.5625px;
                left: 532.59375px;
                width: 301.71875px;
                height: 22px;
            }
            #SHAPE85 {
                top: 0.65625px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #PARAGRAPH86 {
                top: 0px;
                left: 38.34375px;
                padding: 0px;
                width: 264.375px;
                height: 22px;
            }
            #PARAGRAPH86 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP87 {
                top: 95.234375px;
                left: 532.953125px;
                width: 247.21875px;
                height: 22px;
            }
            #SHAPE88 {
                top: 0.984375px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #PARAGRAPH89 {
                top: 0px;
                left: 26px;
                padding: 0px;
                width: 222.22222900390625px;
                height: 22px;
            }
            #PARAGRAPH89 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE79 {
                top: 8.53125px;
                left: 13.984375px;
                padding: 0px;
                width: 239px;
                height: 40px;
            }
            #HEADLINE79 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #BOX319 {
                top: 15.7118px;
                left: 450.104px;
                width: 59.109375px;
                height: 60px;
            }
            #SHAPE320 {
                top: 14px;
                left: 13px;
                width: 34px;
                height: 34px;
            }
            #HEADLINE344 {
                top: 499.5312728881836px;
                left: 630.9896240234375px;
                padding: 0px;
                width: 337.7778015136719px;
                height: 26.666667938232422px;
            }
            #HEADLINE344 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #GROUP379 {
                top: 82.109375px;
                left: 58.953125px;
                width: 858.078125px;
                height: 142.9375px;
            }
            #HEADLINE338 {
                top: 33.15625px;
                left: 1.3125px;
                padding: 0px;
                width: 857.77783203125px;
                height: 35px;
            }
            #HEADLINE338 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE337 {
                top: 77.28125px;
                left: 85.03125px;
                padding: 0px;
                width: 720.0000610351562px;
                height: 30.000001907348633px;
            }
            #HEADLINE337 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE314 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 857.77783203125px;
                height: 55px;
            }
            #HEADLINE314 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #HEADLINE313 {
                top: 108.938px;
                left: 195.047px;
                padding: 0px;
                width: 460px;
                height: 23px;
            }
            #HEADLINE313 > .widget-content {
                font-size: 19px;
                text-align: center;
            }
            #GROUP380 {
                top: 224.09375px;
                left: -29px;
                width: 989px;
                height: 444.015625px;
            }
            #FORM345 {
                top: 104.96875px;
                left: 168.015625px;
                width: 316.1875px;
                height: 198.25px;
            }
            #ITEM_FORM346 {
                top: 0px;
                left: 1.13463px;
                width: 315.0625px;
                height: 45px;
            }
            #ITEM_FORM347 {
                top: 104.26px;
                left: 1.21599px;
                width: 314.984375px;
                height: 45.203125px;
            }
            #ITEM_FORM348 {
                top: 52px;
                left: -0.000292809px;
                width: 315.0625px;
                height: 45px;
            }
            #ITEM_FORM351 {
                top: 155.257px;
                left: 1.17531px;
                width: 315.015625px;
                height: 43px;
            }
            #BUTTON350 {
                top: 318px;
                left: 168px;
                padding: 0px;
                width: 313px;
                height: 48px;
            }
            #BUTTON350 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX309 {
                top: 0px;
                left: 1px;
                width: 989px;
                height: 444.015625px;
            }
            #HEADLINE310 {
                top: 25px;
                left: 144px;
                padding: 0px;
                width: 396.66668701171875px;
                height: 50px;
            }
            #HEADLINE310 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE352 {
                top: 378.031px;
                left: 41.125px;
                padding: 0px;
                width: 877px;
                height: 66px;
            }
            #HEADLINE352 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX332 {
                top: 89.0622px;
                left: 623px;
                width: 330.015625px;
                height: 274.171875px;
            }
            #HEADLINE342 {
                top: 162.538px;
                left: 27.9132px;
                padding: 0px;
                width: 280.10418701171875px;
                height: 65.55555725097656px;
            }
            #HEADLINE342 > .widget-content {
                font-size: 60px;
                text-align: left;
            }
            #SHAPE343 {
                top: 121.26px;
                left: 143.81939697265625px;
                width: 46.19791793823242px;
                height: 45.24305725097656px;
            }
            #HEADLINE340 {
                top: 80.25px;
                left: 84px;
                padding: 0px;
                width: 200px;
                height: 41px;
            }
            #HEADLINE340 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #COUNTDOWN385 {
                top: 1.25px;
                left: 5.0156px;
                width: 320px;
                height: 57px;
            }
            #COUNTDOWN385 > .widget-content {
                font-size: 40px;
            }
            #LINE387 {
                top: 91px;
                left: 79.9688px;
                width: 161px;
                height: 25px;
            }
            #HEADLINE386 {
                top: 280.094px;
                left: 555px;
                padding: 0px;
                width: 438px;
                height: 26px;
            }
            #HEADLINE386 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
        }
        
        #SECTION2 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x900/5a28c4f8c3f6592b3acabec8/professional-skills-bureau_orig-1516201532.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION2 > .ladi-widget-overlay {
            background-color: rgba(56, 56, 56, 0);
        }
        
        #SECTION9 {
            display: block;
            background-color: rgba(212, 164, 19, 0.94);
        }
        
        #SECTION36 {
            display: block;
            background-color: rgba(235, 235, 235, 1);
        }
        
        #SECTION212 {
            display: block;
            background-image: url("https://static1.squarespace.com/static/57043f73f699bbb46bec147e/t/58c72fc017bffc0fdea6fdf9/1489448900887/white-bg.jpg?format=2500w");
            background-color: rgba(255, 234, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION212 > .ladi-widget-overlay {
            background-color: rgba(44, 44, 44, 0.77);
        }
        
        #SECTION94 {
            display: block;
            background-color: rgba(220, 173, 32, 0.95);
        }
        
        #SECTION353 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x700/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION353 > .ladi-widget-overlay {
            background-color: rgba(110, 110, 110, 0.82);
        }
        
        #POPUP296 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP296 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP292 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP292 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP285 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP285 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #SECTION42 {
            display: block;
            background-color: rgba(236, 240, 241, 1);
        }
        
        #POPUP300 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP300 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #SECTION308 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1000/5a28c4f8c3f6592b3acabec8/write-593333-1513659582.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION308 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.72);
        }
        
        #GROUP374 {
            display: block;
        }
        
        #GROUP374 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX167 {
            display: block;
        }
        
        #BOX167 > .widget-content {
            background-color: rgba(255, 214, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX167> .widget-content {
            border-radius: 3px;
        }
        
        #BOX167> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #BUTTON170 {
            display: table;
        }
        
        #BUTTON170 > .widget-content {
            background-color: rgba(46, 45, 44, 1);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 22px;
        }
        
        #BUTTON170> .widget-content {
            border-radius: 14px;
        }
        
        #BUTTON170> .ladi-widget-overlay {
            border-radius: 14px;
        }
        
        #FORM168 {
            display: block;
        }
        
        #FORM168 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM168 .widget-content::-webkit-input-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #FORM168 .widget-content:-moz-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #FORM168 .widget-content::-moz-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #FORM168 .widget-content:-ms-input-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #FORM168 select.widget-content option:first-child {
            color: rgba(99, 99, 99, 1)
        }
        
        #FORM168 select.widget-content {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM169 {
            display: block;
        }
        
        #ITEM_FORM169 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(61, 61, 61, 1);
        }
        
        #ITEM_FORM169> .widget-content {
            border-radius: 5px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(176, 176, 176, 1);
        }
        
        #ITEM_FORM169> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(176, 176, 176, 1);
        }
        
        #ITEM_FORM169 .widget-content::-webkit-input-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM169 .widget-content:-moz-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM169 .widget-content::-moz-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM169 .widget-content:-ms-input-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM169 select.widget-content option:first-child {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM169 select.widget-content {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM173 {
            display: block;
        }
        
        #ITEM_FORM173 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(61, 61, 61, 1);
        }
        
        #ITEM_FORM173> .widget-content {
            border-radius: 5px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(176, 176, 176, 1);
        }
        
        #ITEM_FORM173> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(176, 176, 176, 1);
        }
        
        #ITEM_FORM173 .widget-content::-webkit-input-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM173 .widget-content:-moz-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM173 .widget-content::-moz-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM173 .widget-content:-ms-input-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM173 select.widget-content option:first-child {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM173 select.widget-content {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM174 {
            display: block;
        }
        
        #ITEM_FORM174 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(61, 61, 61, 1);
        }
        
        #ITEM_FORM174> .widget-content {
            border-radius: 5px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(176, 176, 176, 1);
        }
        
        #ITEM_FORM174> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(176, 176, 176, 1);
        }
        
        #ITEM_FORM174 .widget-content::-webkit-input-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM174 .widget-content:-moz-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM174 .widget-content::-moz-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM174 .widget-content:-ms-input-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM174 select.widget-content option:first-child {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM174 select.widget-content {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM175 {
            display: block;
        }
        
        #ITEM_FORM175 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(61, 61, 61, 1);
        }
        
        #ITEM_FORM175> .widget-content {
            border-radius: 5px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(176, 176, 176, 1);
        }
        
        #ITEM_FORM175> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(176, 176, 176, 1);
        }
        
        #ITEM_FORM175 .widget-content::-webkit-input-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM175 .widget-content:-moz-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM175 .widget-content::-moz-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM175 .widget-content:-ms-input-placeholder {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM175 select.widget-content option:first-child {
            color: rgba(99, 99, 99, 1)
        }
        
        #ITEM_FORM175 select.widget-content {
            color: rgba(99, 99, 99, 1)
        }
        
        #HEADLINE5 {
            display: block;
        }
        
        #HEADLINE5 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 0, 63, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 51px;
            letter-spacing: 0px;
        }
        
        #HEADLINE171 {
            display: block;
        }
        
        #HEADLINE171 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 0, 72, 1);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 46px;
            letter-spacing: 0px;
        }
        
        #IMAGE177 {
            display: block;
        }
        
        #IMAGE177 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE177 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE372 {
            display: block;
        }
        
        #HEADLINE372 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 30px;
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
            font-family: 'Roboto';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
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
            font-family: 'Roboto';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
            letter-spacing: 1px;
        }
        
        #GROUP250 {
            display: block;
        }
        
        #GROUP250 > .widget-content {
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
            font-family: 'Roboto';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
            letter-spacing: 1px;
        }
        
        #SHAPE242 {
            display: block;
        }
        
        #SHAPE242 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE242> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #BOX252 {
            display: block;
        }
        
        #BOX252 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP251 {
            display: block;
        }
        
        #GROUP251 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP246 {
            display: block;
        }
        
        #GROUP246 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE247 {
            display: block;
        }
        
        #HEADLINE247 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 24px;
            letter-spacing: 2px;
        }
        
        #PARAGRAPH248 {
            display: block;
        }
        
        #PARAGRAPH248 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
            letter-spacing: 1px;
        }
        
        #SHAPE245 {
            display: block;
        }
        
        #SHAPE245 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE245> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #YOUTUBE38 {
            display: block;
        }
        
        #YOUTUBE38 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP306 {
            display: block;
        }
        
        #GROUP306 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP256 {
            display: block;
        }
        
        #LISTOP256 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 22px;
        }
        
        #HEADLINE255 {
            display: block;
        }
        
        #HEADLINE255 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 33px;
            letter-spacing: 1px;
        }
        
        #GROUP373 {
            display: block;
        }
        
        #GROUP373 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE254 {
            display: block;
        }
        
        #HEADLINE254 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 28px;
            text-shadow: 0px 0px 0px rgba(0, 0, 0, 1);
        }
        
        #HEADLINE249 {
            display: block;
        }
        
        #HEADLINE249 > .widget-content {
            font-family: 'Lobster', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 42px;
        }
        
        #BOX215 {
            display: block;
        }
        
        #BOX215 > .widget-content {
            background-color: rgba(255, 255, 255, 0.21);
            color: rgba(0, 0, 0, 1);
            box-shadow: 3px 3px 0px rgba(251, 192, 45, 1);
        }
        
        #BOX215> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX215> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH217 {
            display: block;
        }
        
        #PARAGRAPH217 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #BOX230 {
            display: block;
        }
        
        #BOX230 > .widget-content {
            background-color: rgba(255, 255, 255, 0.21);
            color: rgba(0, 0, 0, 1);
            box-shadow: 3px 3px 0px rgba(251, 192, 45, 1);
        }
        
        #BOX230> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX230> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH232 {
            display: block;
        }
        
        #PARAGRAPH232 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #BOX233 {
            display: block;
        }
        
        #BOX233 > .widget-content {
            background-color: rgba(255, 255, 255, 0.21);
            color: rgba(0, 0, 0, 1);
            box-shadow: 3px 3px 0px rgba(251, 192, 45, 1);
        }
        
        #BOX233> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX233> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH235 {
            display: block;
        }
        
        #PARAGRAPH235 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #BOX236 {
            display: block;
        }
        
        #BOX236 > .widget-content {
            background-color: rgba(255, 255, 255, 0.19);
            color: rgba(0, 0, 0, 1);
            box-shadow: 3px 3px 0px rgba(251, 192, 45, 1);
        }
        
        #BOX236> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX236> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH238 {
            display: block;
        }
        
        #PARAGRAPH238 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #BOX239 {
            display: block;
        }
        
        #BOX239 > .widget-content {
            background-color: rgba(255, 255, 255, 0.21);
            color: rgba(0, 0, 0, 1);
            box-shadow: 3px 3px 0px rgba(251, 192, 45, 1);
        }
        
        #BOX239> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX239> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH229 {
            display: block;
        }
        
        #PARAGRAPH229 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #GROUP375 {
            display: block;
        }
        
        #GROUP375 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE214 {
            display: block;
        }
        
        #HEADLINE214 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #HEADLINE213 {
            display: block;
        }
        
        #HEADLINE213 > .widget-content {
            font-family: 'Lobster', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 214, 0, 1);
            font-weight: 400;
            line-height: 42px;
        }
        
        #GROUP376 {
            display: block;
        }
        
        #GROUP376 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH241 {
            display: block;
        }
        
        #PARAGRAPH241 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #BOX227 {
            display: block;
        }
        
        #BOX227 > .widget-content {
            background-color: rgba(255, 255, 255, 0.21);
            color: rgba(0, 0, 0, 1);
            box-shadow: 3px 3px 0px rgba(251, 192, 45, 1);
        }
        
        #BOX227> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX227> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #GROUP370 {
            display: block;
        }
        
        #GROUP370 > .widget-content {
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
            line-height: 31px;
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
        
        #BUTTON290 {
            display: table;
        }
        
        #BUTTON290 > .widget-content {
            background-color: rgba(0, 0, 0, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 19px;
        }
        
        #BUTTON290> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BUTTON290> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #GROUP117 {
            display: block;
        }
        
        #GROUP117 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX122 {
            display: block;
        }
        
        #BOX122 > .widget-content {
            background-image: url("https://static.ladipage.net/s300x300/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
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
            border-color: rgba(34, 196, 242, 1);
        }
        
        #BOX122> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(34, 196, 242, 1);
        }
        
        #BOX122 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP371 {
            display: block;
        }
        
        #GROUP371 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX279 {
            display: block;
        }
        
        #BOX279 > .widget-content {
            background-color: rgba(6, 21, 64, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX279> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX279> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE280 {
            display: block;
        }
        
        #HEADLINE280 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 31px;
        }
        
        #HEADLINE281 {
            display: block;
        }
        
        #HEADLINE281 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 24px;
        }
        
        #BUTTON291 {
            display: table;
        }
        
        #BUTTON291 > .widget-content {
            background-color: rgba(0, 0, 0, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 19px;
        }
        
        #BUTTON291> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BUTTON291> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX283 {
            display: block;
        }
        
        #BOX283 > .widget-content {
            background-image: url("https://static.ladipage.net/s300x300/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
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
        
        #BOX283> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(34, 196, 242, 1);
        }
        
        #BOX283> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(34, 196, 242, 1);
        }
        
        #BOX283 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP377 {
            display: block;
        }
        
        #GROUP377 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE95 {
            display: block;
        }
        
        #HEADLINE95 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 30px;
        }
        
        #HEADLINE304 {
            display: block;
        }
        
        #HEADLINE304 > .widget-content {
            font-family: 'Lobster', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 42px;
        }
        
        #GROUP378 {
            display: block;
        }
        
        #GROUP378 > .widget-content {
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
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX145> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
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
            line-height: 31px;
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
        
        #BUTTON284 {
            display: table;
        }
        
        #BUTTON284 > .widget-content {
            background-color: rgba(0, 0, 0, 1);
            color: #ffffff;
            font-weight: 600;
            line-height: 19px;
            letter-spacing: 0px;
        }
        
        #BUTTON284> .widget-content {
            border-radius: 10px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BUTTON284> .ladi-widget-overlay {
            border-radius: 10px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #GROUP144 {
            display: block;
        }
        
        #GROUP144 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX149 {
            display: block;
        }
        
        #BOX149 > .widget-content {
            background-image: url("https://static.ladipage.net/s300x300/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
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
        
        #BOX354 {
            display: block;
        }
        
        #BOX354 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #LISTOP368 {
            display: block;
        }
        
        #LISTOP368 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #HEADLINE355 {
            display: block;
        }
        
        #HEADLINE355 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 171, 0, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #HEADLINE361 {
            display: block;
        }
        
        #HEADLINE361 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 21px;
        }
        
        #IMAGE367 {
            display: block;
        }
        
        #IMAGE367 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE367 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX297 {
            display: block;
        }
        
        #BOX297 > .widget-content {
            background-color: rgba(255, 230, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE298 {
            display: block;
        }
        
        #HEADLINE298 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #LISTOP299 {
            display: block;
        }
        
        #LISTOP299 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX293 {
            display: block;
        }
        
        #BOX293 > .widget-content {
            background-color: rgba(255, 214, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE294 {
            display: block;
        }
        
        #HEADLINE294 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP295 {
            display: block;
        }
        
        #LISTOP295 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX286 {
            display: block;
        }
        
        #BOX286 > .widget-content {
            background-color: rgba(255, 230, 0, 1);
        }
        
        #HEADLINE287 {
            display: block;
        }
        
        #HEADLINE287 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP288 {
            display: block;
        }
        
        #LISTOP288 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
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
            background-image: url("https://lakita.vn/public/kt110/img/camnhan2.png");
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
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 400;
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
            background-image: url("https://lakita.vn/public/kt110/img/camnhan3.png");
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
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 400;
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
            background-image: url("https://lakita.vn/public/kt110/img/camnhan1.png");
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
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 400;
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
        
        #PARAGRAPH49 {
            display: block;
        }
        
        #PARAGRAPH49 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(150, 150, 150, 1);
            font-weight: 400;
            line-height: 16px;
        }
        
        #LISTOP303 {
            display: block;
        }
        
        #LISTOP303 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX301 {
            display: block;
        }
        
        #BOX301 > .widget-content {
            background-color: rgba(255, 230, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE302 {
            display: block;
        }
        
        #HEADLINE302 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #BOX315 {
            display: block;
        }
        
        #BOX315 > .widget-content {
            background-color: rgba(232, 195, 65, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX315> .widget-content {
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        
        #BOX315> .ladi-widget-overlay {
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        
        #FORM316 {
            display: block;
        }
        
        #FORM316 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM316 .widget-content::-webkit-input-placeholder {
            color: rgba(153, 153, 153, 1)
        }
        
        #FORM316 .widget-content:-moz-placeholder {
            color: rgba(153, 153, 153, 1)
        }
        
        #FORM316 .widget-content::-moz-placeholder {
            color: rgba(153, 153, 153, 1)
        }
        
        #FORM316 .widget-content:-ms-input-placeholder {
            color: rgba(153, 153, 153, 1)
        }
        
        #FORM316 select.widget-content option:first-child {
            color: rgba(153, 153, 153, 1)
        }
        
        #FORM316 select.widget-content {
            color: rgba(153, 153, 153, 1)
        }
        
        #HEADLINE80 {
            display: block;
        }
        
        #HEADLINE80 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 700;
            line-height: 20px;
            letter-spacing: 2px;
        }
        
        #GROUP81 {
            display: block;
        }
        
        #GROUP81 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE82 {
            display: block;
        }
        
        #SHAPE82 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE82> .widget-content svg {
            fill: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH83 {
            display: block;
        }
        
        #PARAGRAPH83 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #GROUP84 {
            display: block;
        }
        
        #GROUP84 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE85 {
            display: block;
        }
        
        #SHAPE85 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE85> .widget-content svg {
            fill: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH86 {
            display: block;
        }
        
        #PARAGRAPH86 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #GROUP87 {
            display: block;
        }
        
        #GROUP87 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE88 {
            display: block;
        }
        
        #SHAPE88 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE88> .widget-content svg {
            fill: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH89 {
            display: block;
        }
        
        #PARAGRAPH89 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #HEADLINE79 {
            display: block;
        }
        
        #HEADLINE79 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 40px;
        }
        
        #BOX319 {
            display: block;
        }
        
        #BOX319 > .widget-content {
            background-color: rgba(240, 173, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX319> .widget-content {
            border-radius: 300px;
        }
        
        #BOX319> .ladi-widget-overlay {
            border-radius: 300px;
        }
        
        #SHAPE320 {
            display: block;
        }
        
        #SHAPE320 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE320> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE344 {
            display: block;
        }
        
        #HEADLINE344 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #GROUP379 {
            display: block;
        }
        
        #GROUP379 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE338 {
            display: block;
        }
        
        #HEADLINE338 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE337 {
            display: block;
        }
        
        #HEADLINE337 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 31px;
        }
        
        #HEADLINE314 {
            display: block;
        }
        
        #HEADLINE314 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 28px;
        }
        
        #HEADLINE313 {
            display: block;
        }
        
        #HEADLINE313 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 199, 0, 1);
            font-weight: 600;
            line-height: 23px;
        }
        
        #GROUP380 {
            display: block;
        }
        
        #GROUP380 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM345 {
            display: block;
        }
        
        #FORM345 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM345 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM345 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM345 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM345 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM345 select.widget-content option:first-child {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM345 select.widget-content {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM346 {
            display: block;
        }
        
        #ITEM_FORM346 > .widget-content {
            background-color: rgba(78, 114, 131, 1);
            color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM346> .widget-content {
            border-radius: 12px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM346> .ladi-widget-overlay {
            border-radius: 12px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM346 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM346 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM346 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM346 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM346 select.widget-content option:first-child {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM346 select.widget-content {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM347 {
            display: block;
        }
        
        #ITEM_FORM347 > .widget-content {
            background-color: rgba(78, 114, 131, 1);
            color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM347> .widget-content {
            border-radius: 12px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM347> .ladi-widget-overlay {
            border-radius: 12px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM347 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM347 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM347 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM347 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM347 select.widget-content option:first-child {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM347 select.widget-content {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM348 {
            display: block;
        }
        
        #ITEM_FORM348 > .widget-content {
            background-color: rgba(78, 114, 131, 1);
            color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM348> .widget-content {
            border-radius: 12px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM348> .ladi-widget-overlay {
            border-radius: 12px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM348 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM348 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM348 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM348 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM348 select.widget-content option:first-child {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM348 select.widget-content {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM351 {
            display: block;
        }
        
        #ITEM_FORM351 > .widget-content {
            background-color: rgba(78, 114, 131, 1);
            color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM351> .widget-content {
            border-radius: 12px;
        }
        
        #ITEM_FORM351> .ladi-widget-overlay {
            border-radius: 12px;
        }
        
        #ITEM_FORM351 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM351 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM351 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM351 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM351 select.widget-content option:first-child {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM351 select.widget-content {
            color: rgba(255, 255, 255, 1)
        }
        
        #BUTTON350 {
            display: table;
        }
        
        #BUTTON350 > .widget-content {
            background-color: rgba(213, 0, 0, 1);
            color: #ffffff;
            font-weight: 600;
            line-height: 26px;
        }
        
        #BUTTON350> .widget-content {
            border-radius: 15px;
        }
        
        #BUTTON350> .ladi-widget-overlay {
            border-radius: 15px;
        }
        
        #BOX309 {
            display: block;
        }
        
        #BOX309 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE310 {
            display: block;
        }
        
        #HEADLINE310 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 25px;
        }
        
        #HEADLINE352 {
            display: block;
        }
        
        #HEADLINE352 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX332 {
            display: block;
        }
        
        #BOX332 > .widget-content {
            background-color: rgba(224, 0, 40, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX332> .widget-content {
            border-radius: 26px;
        }
        
        #BOX332> .ladi-widget-overlay {
            border-radius: 26px;
        }
        
        #HEADLINE342 {
            display: block;
        }
        
        #HEADLINE342 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 66px;
        }
        
        #SHAPE343 {
            display: block;
        }
        
        #SHAPE343 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #000000;
        }
        
        #SHAPE343> .widget-content svg {
            fill: #000000;
        }
        
        #HEADLINE340 {
            display: block;
        }
        
        #HEADLINE340 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 41px;
        }
        
        #COUNTDOWN385 {
            display: block;
        }
        
        #COUNTDOWN385 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 0px;
        }
        
        #LINE387 {
            display: block;
        }
        
        #LINE387>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
            margin-top: 9.5px;
        }
        
        #LINE387 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
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
            line-height: 26px;
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION2 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x700/5a28c4f8c3f6592b3acabec8/professional-skills-bureau_orig-1516201532.jpg");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION2 > .ladi-widget-overlay {
                background-color: rgba(56, 56, 56, 0);
            }
            #SECTION2 {
                width: 100%;
                height: 515.421875px;
            }
            #SECTION2 .container {}
            #SECTION2 {
                background-image: url("https://static.ladipage.net/s500x700/5a28c4f8c3f6592b3acabec8/professional-skills-bureau_orig-1516201532.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION9 {
                display: block;
                background-color: rgba(212, 164, 19, 0.94);
            }
            #SECTION9 {
                width: 320px;
                height: 881.375px;
            }
            #SECTION9 .container {}
            #SECTION9 {
                background-image: none;
            }
            #SECTION36 {
                display: block;
                background-color: rgba(235, 235, 235, 1);
            }
            #SECTION36 {
                width: 100%;
                height: 901.46875px;
            }
            #SECTION36 .container {}
            #SECTION36 {
                background-image: none;
            }
            #SECTION212 {
                display: block;
                background-image: url("https://static1.squarespace.com/static/57043f73f699bbb46bec147e/t/58c72fc017bffc0fdea6fdf9/1489448900887/white-bg.jpg?format=2500w");
                background-color: rgba(255, 234, 0, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION212 > .ladi-widget-overlay {
                background-color: rgba(44, 44, 44, 0.77);
            }
            #SECTION212 {
                width: 100%;
                height: 728.171875px;
            }
            #SECTION212 .container {}
            #SECTION212 {
                background-image: linear-gradient(rgba(44, 44, 44, 0.77), rgba(44, 44, 44, 0.77)), url("https://static1.squarespace.com/static/57043f73f699bbb46bec147e/t/58c72fc017bffc0fdea6fdf9/1489448900887/white-bg.jpg?format=2500w");
                background-image: -o-linear-gradient(rgba(44, 44, 44, 0.77), rgba(44, 44, 44, 0.77)), url("https://static1.squarespace.com/static/57043f73f699bbb46bec147e/t/58c72fc017bffc0fdea6fdf9/1489448900887/white-bg.jpg?format=2500w");
                background-image: -ms-linear-gradient(rgba(44, 44, 44, 0.77), rgba(44, 44, 44, 0.77)), url("https://static1.squarespace.com/static/57043f73f699bbb46bec147e/t/58c72fc017bffc0fdea6fdf9/1489448900887/white-bg.jpg?format=2500w");
                background-image: -moz-linear-gradient(rgba(44, 44, 44, 0.77), rgba(44, 44, 44, 0.77)), url("https://static1.squarespace.com/static/57043f73f699bbb46bec147e/t/58c72fc017bffc0fdea6fdf9/1489448900887/white-bg.jpg?format=2500w");
                background-image: -webkit-linear-gradient(rgba(44, 44, 44, 0.77), rgba(44, 44, 44, 0.77)), url("https://static1.squarespace.com/static/57043f73f699bbb46bec147e/t/58c72fc017bffc0fdea6fdf9/1489448900887/white-bg.jpg?format=2500w");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION94 {
                display: block;
                background-color: rgba(220, 173, 32, 0.95);
            }
            #SECTION94 {
                width: 100%;
                height: 929.390625px;
            }
            #SECTION94 .container {}
            #SECTION94 {
                background-image: none;
            }
            #SECTION353 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION353 > .ladi-widget-overlay {
                background-color: rgba(110, 110, 110, 0.82);
            }
            #SECTION353 {
                width: 100%;
                height: 435px;
            }
            #SECTION353 .container {}
            #SECTION353 {
                background-image: linear-gradient(rgba(110, 110, 110, 0.82), rgba(110, 110, 110, 0.82)), url("https://static.ladipage.net/s500x600/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -o-linear-gradient(rgba(110, 110, 110, 0.82), rgba(110, 110, 110, 0.82)), url("https://static.ladipage.net/s500x600/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -ms-linear-gradient(rgba(110, 110, 110, 0.82), rgba(110, 110, 110, 0.82)), url("https://static.ladipage.net/s500x600/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -moz-linear-gradient(rgba(110, 110, 110, 0.82), rgba(110, 110, 110, 0.82)), url("https://static.ladipage.net/s500x600/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -webkit-linear-gradient(rgba(110, 110, 110, 0.82), rgba(110, 110, 110, 0.82)), url("https://static.ladipage.net/s500x600/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #POPUP296 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP296 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }
            #POPUP296 {
                width: 100%;
                height: 100%;
            }
            #POPUP296 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP296 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP292 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP292 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }
            #POPUP292 {
                width: 100%;
                height: 100%;
            }
            #POPUP292 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP292 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP285 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP285 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }
            #POPUP285 {
                width: 100%;
                height: 100%;
            }
            #POPUP285 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP285 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION42 {
                display: block;
                background-color: rgba(236, 240, 241, 1);
            }
            #SECTION42 {
                width: 100%;
                height: 487.359375px;
            }
            #SECTION42 .container {}
            #SECTION42 {
                background-image: none;
            }
            #POPUP300 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP300 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }
            #POPUP300 {
                width: 100%;
                height: 100%;
            }
            #POPUP300 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP300 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.83)), url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION308 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/write-593333-1513659582.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION308 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0.72);
            }
            #SECTION308 {
                width: 100%;
                height: 1281.796875px;
            }
            #SECTION308 .container {}
            #SECTION308 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.72), rgba(0, 0, 0, 0.72)), url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/write-593333-1513659582.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.72), rgba(0, 0, 0, 0.72)), url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/write-593333-1513659582.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.72), rgba(0, 0, 0, 0.72)), url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/write-593333-1513659582.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.72), rgba(0, 0, 0, 0.72)), url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/write-593333-1513659582.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.72), rgba(0, 0, 0, 0.72)), url("https://static.ladipage.net/s500x1400/5a28c4f8c3f6592b3acabec8/write-593333-1513659582.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #GROUP374 {
                top: 211px;
                left: 27px;
                width: 321px;
                height: 272px;
            }
            #BOX167 {
                top: 0px;
                left: 1px;
                width: 321px;
                height: 272px;
            }
            #BUTTON170 {
                top: 212.844px;
                left: 21px;
                padding: 0px;
                width: 284px;
                height: 45px;
            }
            #BUTTON170 > .widget-content {
                font-size: 14px;
                text-align: center;
                line-height: 16px;
            }
            #FORM168 {
                top: 7.42188px;
                left: 19px;
                width: 286px;
                height: 185.421875px;
            }
            #FORM168 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM169 {
                top: 140.422px;
                left: 0px;
                width: 286px;
                height: 45px;
            }
            #ITEM_FORM169 > .widget-content {
                font-size: 15px;
            }
            #ITEM_FORM173 {
                top: 0px;
                left: 0px;
                width: 286px;
                height: 35.71875px;
            }
            #ITEM_FORM174 {
                top: 45.7188px;
                left: 0px;
                width: 286px;
                height: 35.71875px;
            }
            #ITEM_FORM175 {
                top: 91.438px;
                left: 0px;
                width: 286px;
                height: 38.984375px;
            }
            #HEADLINE5 {
                top: 43.4348px;
                left: -0.5px;
                padding: 0px;
                width: 376px;
                height: 48px;
            }
            #HEADLINE5 > .widget-content {
                font-size: 23px;
                text-align: center;
                line-height: 48px;
            }
            #HEADLINE171 {
                top: 81.465px;
                left: 9px;
                padding: 0px;
                width: 355px;
                height: 48px;
            }
            #HEADLINE171 > .widget-content {
                font-size: 22px;
                text-align: center;
                line-height: 48px;
            }
            #IMAGE177 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Logo-xin-1516271280.png);
            }
            #IMAGE177 {
                top: 9px;
                left: 115.492px;
                width: 145.578125px;
                height: 33px;
            }
            #HEADLINE372 {
                top: 126.453px;
                left: -2.5px;
                padding: 0px;
                width: 379px;
                height: 60px;
            }
            #HEADLINE372 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #GROUP11 {
                top: 676.563px;
                left: 61.5px;
                width: 270.125px;
                height: 180.6875px;
            }
            #GROUP12 {
                top: 72.1875px;
                left: 1px;
                width: 270.125px;
                height: 108.5px;
            }
            #HEADLINE13 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 270.125px;
                height: 18px;
            }
            #HEADLINE13 > .widget-content {
                font-size: 15px;
                text-align: center;
                line-height: 18px;
            }
            #PARAGRAPH14 {
                top: 28.5px;
                left: 35px;
                padding: 0px;
                width: 184.5px;
                height: 80px;
            }
            #PARAGRAPH14 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #SHAPE15 {
                top: 0px;
                left: 99px;
                width: 68px;
                height: 67px;
            }
            #GROUP26 {
                top: 221.563px;
                left: 13.5px;
                width: 339px;
                height: 222.484375px;
            }
            #SHAPE30 {
                top: 0px;
                left: 138.266px;
                width: 96.3125px;
                height: 99.3125px;
            }
            #GROUP27 {
                top: 109.313px;
                left: 1px;
                width: 339px;
                height: 113.171875px;
            }
            #HEADLINE28 {
                top: 0px;
                left: 41.4375px;
                padding: 0px;
                width: 273.984375px;
                height: 18px;
            }
            #HEADLINE28 > .widget-content {
                font-size: 17px;
                text-align: center;
                line-height: 18px;
            }
            #PARAGRAPH29 {
                top: 33.1719px;
                left: 1px;
                padding: 0px;
                width: 339px;
                height: 80px;
            }
            #PARAGRAPH29 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #GROUP250 {
                top: 464.766px;
                left: 27.0625px;
                width: 327px;
                height: 204.203125px;
            }
            #GROUP32 {
                top: 105.453px;
                left: 1px;
                width: 327px;
                height: 98.75px;
            }
            #HEADLINE33 {
                top: 0px;
                left: 27px;
                padding: 0px;
                width: 284px;
                height: 18px;
            }
            #HEADLINE33 > .widget-content {
                font-size: 17px;
                text-align: center;
                line-height: 18px;
            }
            #PARAGRAPH34 {
                top: 38.75px;
                left: 1px;
                padding: 0px;
                width: 323.4375px;
                height: 60px;
            }
            #PARAGRAPH34 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #SHAPE242 {
                top: 0px;
                left: 115.688px;
                width: 100px;
                height: 90.84375px;
            }
            #BOX252 {
                top: 7.42188px;
                left: 15.5px;
                width: 347px;
                height: 27px;
            }
            #GROUP251 {
                top: 39.375px;
                left: 51.2812px;
                width: 284.4375px;
                height: 168.203125px;
            }
            #GROUP246 {
                top: 79.6875px;
                left: 1px;
                width: 284.4375px;
                height: 88.515625px;
            }
            #HEADLINE247 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 284.4375px;
                height: 18px;
            }
            #HEADLINE247 > .widget-content {
                font-size: 15px;
                text-align: center;
                line-height: 18px;
            }
            #PARAGRAPH248 {
                top: 28.5156px;
                left: 41.7188px;
                padding: 0px;
                width: 186px;
                height: 60px;
            }
            #PARAGRAPH248 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #SHAPE245 {
                top: 0px;
                left: 103.219px;
                width: 74px;
                height: 74px;
            }
            #YOUTUBE38 {
                top: 713.25px;
                left: 10.4922px;
                width: 355.015625px;
                height: 177.23090277777777px;
            }
            #GROUP306 {
                top: 141px;
                left: 9.5px;
                width: 355px;
                height: 558px;
            }
            #LISTOP256 {
                top: 43px;
                left: 1px;
                width: 355px;
                height: 515px;
            }
            #LISTOP256 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP256 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(251, 192, 45, 1);
                margin-right: 8px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(251,192,45,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M22,16A2,2 0 0,1 20,18H8C6.89,18 6,17.1 6,16V4C6,2.89 6.89,2 8,2H20A2,2 0 0,1 22,4V16M16,20V22H4A2,2 0 0,1 2,20V7H4V20H16M13,14L20,7L18.59,5.59L13,11.17L9.91,8.09L8.5,9.5L13,14Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP256 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP256 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE255 {
                top: 0px;
                left: 5px;
                padding: 0px;
                width: 347px;
                height: 33px;
            }
            #HEADLINE255 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #GROUP373 {
                top: 8.20313px;
                left: 8px;
                width: 355px;
                height: 126px;
            }
            #HEADLINE254 {
                top: 42px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 84px;
            }
            #HEADLINE254 > .widget-content {
                font-size: 19px;
                text-align: center;
            }
            #HEADLINE249 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 42px;
            }
            #HEADLINE249 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #BOX215 {
                top: 236.953px;
                left: 11.5px;
                width: 353px;
                height: 84px;
            }
            #PARAGRAPH217 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 353px;
                height: 52px;
            }
            #PARAGRAPH217 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX230 {
                top: 118px;
                left: 10.5px;
                width: 355px;
                height: 99px;
            }
            #PARAGRAPH232 {
                top: 10px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 78px;
            }
            #PARAGRAPH232 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX233 {
                top: 341.953px;
                left: 10.5px;
                width: 355px;
                height: 67px;
            }
            #PARAGRAPH235 {
                top: 11px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 52px;
            }
            #PARAGRAPH235 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX236 {
                top: 635.25px;
                left: 9px;
                width: 355px;
                height: 73px;
            }
            #PARAGRAPH238 {
                top: 14px;
                left: 0.5px;
                padding: 0px;
                width: 355px;
                height: 52px;
            }
            #PARAGRAPH238 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX239 {
                top: 538px;
                left: 8.5px;
                width: 355px;
                height: 80px;
            }
            #PARAGRAPH229 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 52px;
            }
            #PARAGRAPH229 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #GROUP375 {
                top: 14.2656px;
                left: 9.5px;
                width: 354.5px;
                height: 87px;
            }
            #HEADLINE214 {
                top: 49.1739px;
                left: 0.998591px;
                padding: 0px;
                width: 354.5px;
                height: 37.8125px;
            }
            #HEADLINE214 > .widget-content {
                font-size: 14px;
                text-align: center;
                line-height: 20px;
            }
            #HEADLINE213 {
                top: 0px;
                left: 0.998591px;
                padding: 0px;
                width: 354.5px;
                height: 39.703125px;
            }
            #HEADLINE213 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP376 {
                top: 428.016px;
                left: 8.5px;
                width: 356px;
                height: 92px;
            }
            #PARAGRAPH241 {
                top: 6.71875px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 78px;
            }
            #PARAGRAPH241 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX227 {
                top: 0px;
                left: 2px;
                width: 355px;
                height: 92px;
            }
            #GROUP370 {
                top: 396.563px;
                left: 9.5px;
                width: 355px;
                height: 211.796875px;
            }
            #BOX118 {
                top: 9.79688px;
                left: 1px;
                width: 355px;
                height: 202px;
            }
            #HEADLINE119 {
                top: 19.6016px;
                left: 154.5px;
                padding: 0px;
                width: 284px;
                height: 30.375px;
            }
            #HEADLINE119 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE120 {
                top: 62.0735px;
                left: 8px;
                padding: 0px;
                width: 355px;
                height: 90px;
            }
            #HEADLINE120 > .widget-content {
                font-size: 21px;
                text-align: left;
                line-height: 30px;
            }
            #BUTTON290 {
                top: 155.063px;
                left: 105px;
                padding: 0px;
                width: 160px;
                height: 39px;
            }
            #BUTTON290 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #GROUP117 {
                top: 0px;
                left: 12px;
                width: 102px;
                height: 77.421875px;
            }
            #BOX122 {
                top: 0px;
                left: 1px;
                width: 102px;
                height: 77.421875px;
            }
            #BOX122 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #GROUP371 {
                top: 647.344px;
                left: 8.5px;
                width: 355px;
                height: 267px;
            }
            #BOX279 {
                top: 13.6867px;
                left: 1px;
                width: 355px;
                height: 253.875px;
            }
            #HEADLINE280 {
                top: 41.221px;
                left: 153px;
                padding: 0px;
                width: 284px;
                height: 29.03125px;
            }
            #HEADLINE280 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE281 {
                top: 81.8716px;
                left: 12.6563px;
                padding: 0px;
                width: 333px;
                height: 112.40625px;
            }
            #HEADLINE281 > .widget-content {
                font-size: 20px;
                text-align: center;
                line-height: 30px;
            }
            #BUTTON291 {
                top: 200.484px;
                left: 97.5px;
                padding: 0px;
                width: 160px;
                height: 38px;
            }
            #BUTTON291 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX283 {
                top: 0px;
                left: 14.6563px;
                width: 102.34375px;
                height: 83.9375px;
            }
            #BOX283 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/531c2c32-887e-4482-87f4-ce716369ae3d.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #GROUP377 {
                top: 7px;
                left: 9.5px;
                width: 355px;
                height: 112px;
            }
            #HEADLINE95 {
                top: 52px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 60px;
            }
            #HEADLINE95 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE304 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 42px;
            }
            #HEADLINE304 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP378 {
                top: 139.563px;
                left: 9.5px;
                width: 355px;
                height: 216.4375px;
            }
            #BOX145 {
                top: 23.4375px;
                left: 1px;
                width: 355px;
                height: 193px;
            }
            #HEADLINE146 {
                top: 43.0625px;
                left: 147.5px;
                padding: 0px;
                width: 284px;
                height: 31px;
            }
            #HEADLINE146 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #HEADLINE147 {
                top: 83px;
                left: -1px;
                padding: 0px;
                width: 355px;
                height: 48px;
            }
            #HEADLINE147 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #BUTTON284 {
                top: 143px;
                left: 97.5px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON284 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #GROUP144 {
                top: 0px;
                left: 10.5px;
                width: 104px;
                height: 98px;
            }
            #BOX149 {
                top: 0px;
                left: 1px;
                width: 104px;
                height: 98px;
            }
            #BOX149 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s300x200/uploads/images/085ab618-7e64-4681-920a-32de89792717.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #BOX354 {
                top: 11px;
                left: 11.1718px;
                width: 355px;
                height: 382px;
            }
            #LISTOP368 {
                top: 127.563px;
                left: 4px;
                width: 347px;
                height: 280px;
            }
            #LISTOP368 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP368 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 28px;
                height: 28px;
                top: 0;
                font-size: 14px;
                color: rgba(249, 168, 37, 1);
                margin-right: 4px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(249,168,37,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP368 > ol.widget-content li {
                margin-bottom: 13px;
            }
            #LISTOP368 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE355 {
                top: 20px;
                left: 43px;
                padding: 0px;
                width: 269px;
                height: 36px;
            }
            #HEADLINE355 > .widget-content {
                font-size: 28px;
                text-align: center;
            }
            #HEADLINE361 {
                top: 73.4375px;
                left: 22.6563px;
                padding: 0px;
                width: 309.6875px;
                height: 34px;
            }
            #HEADLINE361 > .widget-content {
                font-size: 13px;
                text-align: center;
                line-height: 17px;
            }
            #IMAGE367 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/TrangNT_anh1-1513771191.gif);
            }
            #IMAGE367 {
                display: none!important;
                top: 49.8281px;
                left: 10.5px;
                width: 242.828125px;
                height: 194px;
            }
            #BOX297 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE298 {
                top: 30.1875px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 54px;
            }
            #HEADLINE298 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #LISTOP299 {
                top: 154px;
                left: 10px;
                width: 355px;
                height: 260px;
            }
            #LISTOP299 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP299 > ol.widget-content li::before {
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
            #LISTOP299 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP299 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX293 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE294 {
                top: 31px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 60px;
            }
            #HEADLINE294 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #LISTOP295 {
                top: 154px;
                left: 10px;
                width: 355px;
                height: 260px;
            }
            #LISTOP295 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP295 > ol.widget-content li::before {
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
            #LISTOP295 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP295 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX286 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE287 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE287 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LISTOP288 {
                top: 104px;
                left: 12px;
                width: 351px;
                height: 260px;
            }
            #LISTOP288 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP288 > ol.widget-content li::before {
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
            #LISTOP288 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP288 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE43 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 60px;
            }
            #HEADLINE43 > .widget-content {
                font-size: 19px;
                text-align: center;
                line-height: 30px;
            }
            #PARAGRAPH44 {
                display: none!important;
                top: 89px;
                left: 23px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #PARAGRAPH44 > .widget-content {
                font-size: 16px;
                text-align: center;
                line-height: 20px;
            }
            #GROUP50 {
                top: 86.1719px;
                left: 2.5px;
                width: 372px;
                height: 117.8125px;
            }
            #BOX51 {
                top: 0px;
                left: 1px;
                width: 94px;
                height: 102.8125px;
            }
            #BOX51 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan2.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan2.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan2.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan2.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan2.png");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #PARAGRAPH52 {
                top: 10.8125px;
                left: 106.016px;
                padding: 0px;
                width: 266.984375px;
                height: 80px;
            }
            #PARAGRAPH52 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH53 {
                top: 82.8125px;
                left: 105.375px;
                padding: 0px;
                width: 241.25px;
                height: 17.5px;
            }
            #PARAGRAPH53 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH54 {
                top: 104.813px;
                left: 29px;
                padding: 0px;
                width: 151.25px;
                height: 15px;
            }
            #PARAGRAPH54 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP55 {
                top: 214.938px;
                left: 0px;
                width: 369.75px;
                height: 127.46875px;
            }
            #BOX56 {
                top: 0px;
                left: 1px;
                width: 112.984375px;
                height: 101.5px;
            }
            #BOX56 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan3.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan3.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan3.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan3.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan3.png");
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #PARAGRAPH57 {
                top: 10.9688px;
                left: 133.969px;
                padding: 0px;
                width: 233px;
                height: 80px;
            }
            #PARAGRAPH57 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH58 {
                top: 90.9688px;
                left: 129.5px;
                padding: 0px;
                width: 241.25px;
                height: 17.5px;
            }
            #PARAGRAPH58 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH59 {
                top: 113.469px;
                left: 5.7969px;
                padding: 0px;
                width: 211.28125px;
                height: 15px;
            }
            #PARAGRAPH59 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP45 {
                top: 357.172px;
                left: 0.984375px;
                width: 368.5px;
                height: 116px;
            }
            #BOX46 {
                top: 0px;
                left: 1px;
                width: 109.96875px;
                height: 101.34375px;
            }
            #BOX46 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan1.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan1.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan1.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan1.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan1.png");
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #PARAGRAPH47 {
                top: 11.3438px;
                left: 120.016px;
                padding: 0px;
                width: 248px;
                height: 60px;
            }
            #PARAGRAPH47 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH48 {
                top: 84.3438px;
                left: 128.25px;
                padding: 0px;
                width: 241.25px;
                height: 17.5px;
            }
            #PARAGRAPH48 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #PARAGRAPH49 {
                top: 107px;
                left: 6.5px;
                padding: 0px;
                width: 279px;
                height: 15px;
            }
            #PARAGRAPH49 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #LISTOP303 {
                top: 146.75px;
                left: 10px;
                width: 355px;
                height: 163px;
            }
            #LISTOP303 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP303 > ol.widget-content li::before {
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
            #LISTOP303 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP303 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX301 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE302 {
                top: 17px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 81px;
            }
            #HEADLINE302 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #BOX315 {
                top: 1112.81px;
                left: 0px;
                width: 375px;
                height: 155px;
            }
            #FORM316 {
                top: 70px;
                left: 12px;
                width: 276px;
                height: 30px;
            }
            #FORM316 > .widget-content {
                font-size: 16px;
            }
            #HEADLINE80 {
                display: none!important;
                top: 106px;
                left: 329px;
                padding: 0px;
                width: 248px;
                height: 20px;
            }
            #HEADLINE80 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #GROUP81 {
                top: 46.9844px;
                left: 12.9375px;
                width: 348.203125px;
                height: 44px;
            }
            #SHAPE82 {
                top: 1px;
                left: 1px;
                width: 28.90625px;
                height: 20px;
            }
            #PARAGRAPH83 {
                top: 0px;
                left: 25.5625px;
                padding: 0px;
                width: 323.640625px;
                height: 44px;
            }
            #PARAGRAPH83 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP84 {
                top: 93.625px;
                left: 20.5px;
                width: 263px;
                height: 22.359375px;
            }
            #SHAPE85 {
                top: 0px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #PARAGRAPH86 {
                top: 1.35938px;
                left: 25px;
                padding: 0px;
                width: 246px;
                height: 22px;
            }
            #PARAGRAPH86 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP87 {
                top: 115.984px;
                left: 20.2188px;
                width: 238.21875px;
                height: 22px;
            }
            #SHAPE88 {
                top: 0.984375px;
                left: 1px;
                width: 20px;
                height: 20px;
            }
            #PARAGRAPH89 {
                top: 0px;
                left: 17px;
                padding: 0px;
                width: 222.21875px;
                height: 22px;
            }
            #PARAGRAPH89 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE79 {
                top: 0.984375px;
                left: 7.5px;
                padding: 0px;
                width: 239px;
                height: 39px;
            }
            #HEADLINE79 > .widget-content {
                font-size: 32px;
                text-align: left;
                line-height: 39px;
            }
            #BOX319 {
                top: 11.8125px;
                left: 160.508px;
                width: 54px;
                height: 54px;
            }
            #SHAPE320 {
                top: 14px;
                left: 13px;
                width: 34px;
                height: 34px;
            }
            #HEADLINE344 {
                display: none!important;
                top: 1472.58px;
                left: 18.6172px;
                padding: 0px;
                width: 337.765625px;
                height: 27px;
            }
            #HEADLINE344 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #GROUP379 {
                top: 78.1875px;
                left: 7.5px;
                width: 357px;
                height: 232.625px;
            }
            #HEADLINE338 {
                top: 32.625px;
                left: 2px;
                padding: 0px;
                width: 355px;
                height: 108px;
            }
            #HEADLINE338 > .widget-content {
                font-size: 28px;
                text-align: center;
                line-height: 36px;
            }
            #HEADLINE337 {
                top: 170.625px;
                left: 2px;
                padding: 0px;
                width: 355px;
                height: 62px;
            }
            #HEADLINE337 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE314 {
                top: 0px;
                left: 3px;
                padding: 0px;
                width: 355px;
                height: 72px;
            }
            #HEADLINE314 > .widget-content {
                font-size: 20px;
                text-align: center;
                line-height: 36px;
            }
            #HEADLINE313 {
                top: 148.625px;
                left: 1px;
                padding: 0px;
                width: 356px;
                height: 22px;
            }
            #HEADLINE313 > .widget-content {
                font-size: 19px;
                text-align: center;
                line-height: 22px;
            }
            #GROUP380 {
                top: 428.813px;
                left: -11.625px;
                width: 370.40625px;
                height: 534px;
            }
            #FORM345 {
                top: 236.766px;
                left: 28.4063px;
                width: 343px;
                height: 228.953125px;
            }
            #ITEM_FORM346 {
                top: 0.0035px;
                left: 0.60475px;
                width: 339.65625px;
                height: 49.53125px;
            }
            #ITEM_FORM347 {
                top: 125.832px;
                left: 0.74975px;
                width: 342.265625px;
                height: 43.8125px;
            }
            #ITEM_FORM348 {
                top: 67.6068px;
                left: 1.60475px;
                width: 339.65625px;
                height: 43.8125px;
            }
            #ITEM_FORM351 {
                top: 183.219px;
                left: -0.00025px;
                width: 342.265625px;
                height: 45.734375px;
            }
            #BUTTON350 {
                top: 481px;
                left: 26.875px;
                padding: 0px;
                width: 343px;
                height: 53px;
            }
            #BUTTON350 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #BOX309 {
                top: 0px;
                left: 1px;
                width: 369.890625px;
                height: 455px;
            }
            #HEADLINE310 {
                top: -113px;
                left: 10.625px;
                padding: 0px;
                width: 369.890625px;
                height: 48.234375px;
            }
            #HEADLINE310 > .widget-content {
                font-size: 17px;
                text-align: center;
                line-height: 22px;
            }
            #HEADLINE352 {
                top: 545px;
                left: 17.5px;
                padding: 0px;
                width: 369.890625px;
                height: 120.59375px;
            }
            #HEADLINE352 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX332 {
                top: -58px;
                left: 39px;
                width: 320.71875px;
                height: 282px;
            }
            #HEADLINE342 {
                top: 198.921px;
                left: 24.2188px;
                padding: 0px;
                width: 291.828125px;
                height: 68.3125px;
            }
            #HEADLINE342 > .widget-content {
                font-size: 60px;
                text-align: left;
            }
            #SHAPE343 {
                top: 133.544px;
                left: 137.853px;
                width: 48.109375px;
                height: 47.140625px;
            }
            #HEADLINE340 {
                top: 70.672px;
                left: 86.9688px;
                padding: 0px;
                width: 200px;
                height: 44.9375px;
            }
            #HEADLINE340 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #COUNTDOWN385 {
                top: 6.67188px;
                left: 1.0156px;
                width: 320px;
                height: 62.484375px;
            }
            #COUNTDOWN385 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #LINE387 {
                top: 81.771px;
                left: 77.9688px;
                width: 161px;
                height: 27.40625px;
            }
            #HEADLINE386 {
                display: none!important;
                top: 280.094px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 52px;
            }
            #HEADLINE386 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
        }
    </style>
    <link rel="stylesheet" href="https://static.ladipage.net/googlefonts/css?family=Open+Sans:400,600,700|Roboto+Slab:300,400,700|Roboto:300,400,700|Pattaya|Lobster|Montserrat:300,400,600,700&amp;subset=latin-ext,vietnamese" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="https://static.ladipage.net/source/animate.min.css?v=1516332486812" media="none" onload="if(media!='all')media='all'">
