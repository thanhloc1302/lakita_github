
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
            #SECTION34 {
                width: 100%;
                height: 759px;
            }
            #SECTION34 .container {}
            #SECTION34 {}
            #SECTION54 {
                width: 100%;
                height: 433.7500305175781px;
            }
            #SECTION54 .container {}
            #SECTION54 {}
            #SECTION75 {
                width: 100%;
                height: 536.97265625px;
            }
            #SECTION75 .container {}
            #SECTION75 {}
            #SECTION130 {
                width: 100%;
                height: 530px;
            }
            #SECTION130 .container {}
            #SECTION130 {}
            #SECTION139 {
                width: 100%;
                height: 655px;
            }
            #SECTION139 .container {}
            #SECTION139 {}
            #SECTION169 {
                width: 100%;
                height: 586.9921875px;
            }
            #SECTION169 .container {}
            #SECTION169 {}
            #SECTION226 {
                width: 100%;
                height: 337px;
            }
            #SECTION226 .container {}
            #SECTION226 {}
            #POPUP193 {
                width: 100%;
                height: 100%;
            }
            #POPUP193 .container {
                width: 480px;
                height: 457px;
                top: calc(100%-457px);
            }
            #POPUP193 {}
            #POPUP126 {
                width: 100%;
                height: 100%;
            }
            #POPUP126 .container {
                width: 563px;
                height: 923px;
                top: calc(100%-923px);
            }
            #POPUP126 {}
            #POPUP122 {
                width: 100%;
                height: 100%;
            }
            #POPUP122 .container {
                width: 563px;
                height: 351px;
                top: calc(100%-351px);
            }
            #POPUP122 {}
            #POPUP118 {
                width: 100%;
                height: 100%;
            }
            #POPUP118 .container {
                width: 563px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP118 {}
            #POPUP112 {
                width: 100%;
                height: 100%;
            }
            #POPUP112 .container {
                width: 563px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP112 {}
            #LINE35 {
                top: 155px;
                left: 101.55px;
                width: 297px;
                height: 25px;
            }
            #HEADLINE37 {
                top: 123.99px;
                left: 74.0868px;
                padding: 0px;
                width: 422.22222900390625px;
                height: 30.000001907348633px;
            }
            #HEADLINE37 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #BUTTON52 {
                top: 662px;
                left: 314.914px;
                padding: 0px;
                width: 311px;
                height: 50px;
            }
            #BUTTON52 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP258 {
                top: 0.60417px;
                left: -304.042px;
                width: 1370.9375px;
                height: 61.41666793823242px;
            }
            #BOX248 {
                top: 0px;
                left: 1px;
                width: 1370.9375px;
                height: 61.41666793823242px;
            }
            #HEADLINE251 {
                top: 14.75px;
                left: 864.928px;
                padding: 0px;
                width: 132.109375px;
                height: 30px;
            }
            #HEADLINE251 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE255 {
                top: 14.7396px;
                left: 716.698px;
                padding: 0px;
                width: 131.73828125px;
                height: 30px;
            }
            #HEADLINE255 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE250 {
                top: 14.7743px;
                left: 1022.29px;
                padding: 0px;
                width: 89.16015625px;
                height: 30px;
            }
            #HEADLINE250 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #IMAGE342 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/logo-1515293868.png);
            }
            #IMAGE342 {
                top: 9.375px;
                left: 155.696px;
                width: 136.6875px;
                height: 35.5625px;
            }
            #BUTTON257 {
                top: 4.9375px;
                left: 1135.5px;
                padding: 0px;
                width: 177.5px;
                height: 40px;
            }
            #BUTTON257 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #SHAPE245 {
                top: 565px;
                left: 426px;
                width: 95px;
                height: 91px;
            }
            #HEADLINE295 {
                top: 513.465px;
                left: 273.99px;
                padding: 0px;
                width: 200.00001525878906px;
                height: 30.000001907348633px;
            }
            #HEADLINE295 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE296 {
                top: 448.097px;
                left: -60px;
                padding: 0px;
                width: 270.0173645019531px;
                height: 23.33333396911621px;
            }
            #HEADLINE296 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #LINEVERTICAL267 {
                top: 225.125px;
                left: 153.984px;
                width: 25px;
                height: 207.98828125px;
            }
            #HEADLINE263 {
                top: 228px;
                left: 196px;
                padding: 0px;
                width: 872px;
                height: 90px;
            }
            #HEADLINE263 > .widget-content {
                font-size: 39px;
                text-align: left;
            }
            #BOX279 {
                top: 196.992px;
                left: -107.016px;
                width: 250.2777862548828px;
                height: 241.9965362548828px;
            }
            #HEADLINE265 {
                top: 296.032px;
                left: 196.516px;
                padding: 0px;
                width: 613px;
                height: 56px;
            }
            #HEADLINE265 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #SHAPE302 {
                top: 160.897px;
                left: 260.003px;
                width: 104.00390625px;
                height: 110px;
            }
            #GROUP333 {
                top: 23px;
                left: 391px;
                width: 608px;
                height: 381.015625px;
            }
            #GROUP325 {
                top: 0px;
                left: 1px;
                width: 608px;
                height: 381.015625px;
            }
            #BOX324 {
                top: 0px;
                left: 1px;
                width: 608px;
                height: 381.015625px;
            }
            #HEADLINE332 {
                top: 23.875px;
                left: 171px;
                padding: 0px;
                width: 295px;
                height: 42px;
            }
            #HEADLINE332 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #GROUP309 {
                top: 65.875px;
                left: 14px;
                width: 567.53125px;
                height: 64.9375px;
            }
            #HEADLINE307 {
                top: 22.9375px;
                left: 64.875px;
                padding: 0px;
                width: 503.65625px;
                height: 42px;
            }
            #HEADLINE307 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #SHAPE306 {
                top: 0px;
                left: 1px;
                width: 68.765625px;
                height: 51px;
            }
            #GROUP313 {
                top: 130.5625px;
                left: 15.1875px;
                width: 570.546875px;
                height: 64.9375px;
            }
            #HEADLINE314 {
                top: 22.9375px;
                left: 67px;
                padding: 0px;
                width: 504.546875px;
                height: 42px;
            }
            #HEADLINE314 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #SHAPE315 {
                top: 0px;
                left: 1px;
                width: 68.890625px;
                height: 51px;
            }
            #GROUP316 {
                top: 189.625px;
                left: 18.1875px;
                width: 517px;
                height: 51px;
            }
            #SHAPE312 {
                top: 0px;
                left: 1px;
                width: 63.5px;
                height: 51px;
            }
            #HEADLINE311 {
                top: 22.953125px;
                left: 53px;
                padding: 0px;
                width: 465px;
                height: 21px;
            }
            #HEADLINE311 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #GROUP317 {
                top: 242.640625px;
                left: 17.25px;
                width: 578.578125px;
                height: 51px;
            }
            #SHAPE318 {
                top: 0px;
                left: 1px;
                width: 63.5px;
                height: 51px;
            }
            #HEADLINE319 {
                top: 22.96875px;
                left: 70px;
                padding: 0px;
                width: 509.578125px;
                height: 21px;
            }
            #HEADLINE319 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #GROUP320 {
                top: 300.640625px;
                left: 14.3125px;
                width: 573.5625px;
                height: 51px;
            }
            #SHAPE321 {
                top: 0px;
                left: 1px;
                width: 69.015625px;
                height: 51px;
            }
            #HEADLINE322 {
                top: 22.96875px;
                left: 69.125px;
                padding: 0px;
                width: 505.4375px;
                height: 21px;
            }
            #HEADLINE322 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #GROUP335 {
                top: 99.2882080078125px;
                left: -44.00346374511719px;
                width: 283.00347900390625px;
                height: 268.2986145019531px;
            }
            #BOX298 {
                top: 0px;
                left: 1px;
                width: 283.00347900390625px;
                height: 268.2986145019531px;
            }
            #GROUP61 {
                top: 81.02432250976562px;
                left: 5.097221374511719px;
                width: 248.0034942626953px;
                height: 31.99652862548828px;
            }
            #SHAPE60 {
                top: 0px;
                left: 1px;
                width: 32px;
                height: 32px;
            }
            #HEADLINE58 {
                top: 7.93402099609375px;
                left: 39.00347900390625px;
                padding: 0px;
                width: 210px;
                height: 20px;
            }
            #HEADLINE58 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #GROUP62 {
                top: 126.49307250976562px;
                left: 6.659721374511719px;
                width: 248.00347900390625px;
                height: 31.99652862548828px;
            }
            #SHAPE63 {
                top: 0px;
                left: 1px;
                width: 32px;
                height: 32px;
            }
            #HEADLINE64 {
                top: 7.96875px;
                left: 39.00346374511719px;
                padding: 0px;
                width: 210px;
                height: 20px;
            }
            #HEADLINE64 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #GROUP66 {
                top: 167.51736450195312px;
                left: 5.774299621582031px;
                width: 248.00348663330078px;
                height: 31.99652862548828px;
            }
            #SHAPE67 {
                top: 0px;
                left: 1px;
                width: 32px;
                height: 32px;
            }
            #HEADLINE68 {
                top: 7.96875px;
                left: 39.00347137451172px;
                padding: 0px;
                width: 210px;
                height: 20px;
            }
            #HEADLINE68 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #GROUP69 {
                top: 209.47918701171875px;
                left: 4.90625px;
                width: 265.98960876464844px;
                height: 47.96875px;
            }
            #SHAPE70 {
                top: 0px;
                left: 1px;
                width: 34.3125px;
                height: 32px;
            }
            #HEADLINE71 {
                top: 7.96875px;
                left: 41.76390075683594px;
                padding: 0px;
                width: 225.234375px;
                height: 40px;
            }
            #HEADLINE71 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #BUTTON55 {
                top: 28.28125px;
                left: 56.38194274902344px;
                padding: 0px;
                width: 167.7777862548828px;
                height: 35.55555725097656px;
            }
            #BUTTON55 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE76 {
                top: 108px;
                left: 306px;
                padding: 0px;
                width: 349px;
                height: 34px;
            }
            #HEADLINE76 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #SHAPE77 {
                top: 30px;
                left: 443px;
                width: 62px;
                height: 62px;
            }
            #GROUP328 {
                top: 200.90625px;
                left: -16.203125px;
                width: 993.921875px;
                height: 287.25px;
            }
            #GROUP246 {
                top: 97.984375px;
                left: 5.21875px;
                width: 988.22265625px;
                height: 88.984375px;
            }
            #GROUP97 {
                top: 0px;
                left: 5.015625px;
                width: 989.90234375px;
                height: 88.96484375px;
            }
            #BOX108 {
                top: 198.953125px;
                left: 101.71875px;
                width: 891.484375px;
                height: 87.96875px;
            }
            #HEADLINE109 {
                top: 11px;
                left: 21.6102px;
                padding: 0px;
                width: 792.3046875px;
                height: 20px;
            }
            #HEADLINE109 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE110 {
                top: 43px;
                left: 21.6102px;
                padding: 0px;
                width: 864.375px;
                height: 20px;
            }
            #HEADLINE110 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX106 {
                top: 197.96875px;
                left: 6px;
                width: 83.28125px;
                height: 86.9921875px;
            }
            #SHAPE107 {
                top: 18px;
                left: 17.494px;
                width: 48.3203125px;
                height: 46.9921875px;
            }
            #GROUP247 {
                top: 198.296875px;
                left: 1px;
                width: 913.57421875px;
                height: 88.96484375px;
            }
            #GROUP117 {
                top: 0px;
                left: 1px;
                width: 913.57421875px;
                height: 88.96484375px;
            }
            #BOX102 {
                top: 98.984375px;
                left: 6px;
                width: 83.28125px;
                height: 86.9921875px;
            }
            #SHAPE103 {
                top: 18px;
                left: 17.494px;
                width: 48.3203125px;
                height: 46.9921875px;
            }
            #GROUP116 {
                top: 98.984375px;
                left: 4.984375px;
                width: 989.90234375px;
                height: 88.984375px;
            }
            #BOX99 {
                top: 99.9375px;
                left: 101.71875px;
                width: 891.484375px;
                height: 87.96875px;
            }
            #HEADLINE100 {
                top: 11px;
                left: 21.6102px;
                padding: 0px;
                width: 352.91015625px;
                height: 20px;
            }
            #HEADLINE100 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE101 {
                top: 43px;
                left: 21.6102px;
                padding: 0px;
                width: 864.375px;
                height: 20px;
            }
            #HEADLINE101 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX78 {
                top: 0px;
                left: 6px;
                width: 83.28125px;
                height: 86.9921875px;
            }
            #SHAPE79 {
                top: 18px;
                left: 17.494px;
                width: 48.3203125px;
                height: 46.9921875px;
            }
            #BOX80 {
                top: 0.96875px;
                left: 101.71875px;
                width: 891.484375px;
                height: 87.96875px;
            }
            #HEADLINE82 {
                top: 11px;
                left: 21.6102px;
                padding: 0px;
                width: 474.4921875px;
                height: 20px;
            }
            #HEADLINE82 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE83 {
                top: 43px;
                left: 21.6102px;
                padding: 0px;
                width: 864.375px;
                height: 20px;
            }
            #HEADLINE83 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE131 {
                top: 68.7188px;
                left: 425.001px;
                padding: 0px;
                width: 530px;
                height: 39px;
            }
            #HEADLINE131 > .widget-content {
                font-size: 33px;
                text-align: center;
            }
            #LINE136 {
                top: 100px;
                left: 403px;
                width: 239px;
                height: 25px;
            }
            #BOX137 {
                top: 113.68px;
                left: 0px;
                width: 317.98828125px;
                height: 300.99609375px;
            }
            #LISTOP138 {
                top: 145px;
                left: 381.988px;
                width: 571.015625px;
                height: 270px;
            }
            #LISTOP138 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP138 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 20px;
                height: 20px;
                top: 0px;
                font-size: 10px;
                color: rgba(230, 81, 0, 1);
                margin-right: 9px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(230,81,0,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M12.97 4.28l-1.44 1.44L21.814 16 11.53 26.28l1.44 1.44 11-11 .686-.72-.687-.72-11-11z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP138 > ol.widget-content li {
                margin-bottom: 8px;
            }
            #LISTOP138 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE337 {
                top: 75.7188px;
                left: 334.031px;
                padding: 0px;
                width: 200px;
                height: 30px;
            }
            #HEADLINE337 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE140 {
                top: 166px;
                left: 421.969px;
                width: 119px;
                height: 25px;
            }
            #PARAGRAPH141 {
                top: 129px;
                left: 131px;
                padding: 0px;
                width: 700px;
                height: 20px;
            }
            #PARAGRAPH141 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE142 {
                top: 86px;
                left: 171px;
                padding: 0px;
                width: 618px;
                height: 34px;
            }
            #HEADLINE142 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP143 {
                top: 231.99654006958008px;
                left: -1px;
                width: 300px;
                height: 322.98614501953125px;
            }
            #BOX144 {
                top: 80.00001525878906px;
                left: 1px;
                width: 300px;
                height: 243px;
            }
            #HEADLINE145 {
                top: 103px;
                left: 43px;
                padding: 0px;
                width: 209px;
                height: 20px;
            }
            #HEADLINE145 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE146 {
                top: 130px;
                left: 26px;
                padding: 0px;
                width: 249px;
                height: 15.555556297302246px;
            }
            #HEADLINE146 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #PARAGRAPH147 {
                top: 152px;
                left: 28px;
                padding: 0px;
                width: 237px;
                height: 57px;
            }
            #PARAGRAPH147 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX148 {
                top: 0px;
                left: 77.00694274902344px;
                width: 155px;
                height: 155px;
            }
            #GROUP149 {
                top: 231.99654006958008px;
                left: 327.9583435058594px;
                width: 300px;
                height: 322.98614501953125px;
            }
            #BOX150 {
                top: 80.00001525878906px;
                left: 1px;
                width: 300px;
                height: 243px;
            }
            #HEADLINE151 {
                top: 103px;
                left: 43px;
                padding: 0px;
                width: 209px;
                height: 20px;
            }
            #HEADLINE151 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE152 {
                top: 130px;
                left: 26px;
                padding: 0px;
                width: 249px;
                height: 15.555556297302246px;
            }
            #HEADLINE152 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #PARAGRAPH153 {
                top: 152px;
                left: 28px;
                padding: 0px;
                width: 237px;
                height: 76px;
            }
            #PARAGRAPH153 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX154 {
                top: 0px;
                left: 77.0069580078125px;
                width: 155px;
                height: 155px;
            }
            #GROUP155 {
                top: 231.99654006958008px;
                left: 658.96533203125px;
                width: 300px;
                height: 322.98614501953125px;
            }
            #BOX156 {
                top: 80.00001525878906px;
                left: 1px;
                width: 300px;
                height: 243px;
            }
            #HEADLINE157 {
                top: 130px;
                left: 26px;
                padding: 0px;
                width: 249px;
                height: 15.555556297302246px;
            }
            #HEADLINE157 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #HEADLINE159 {
                top: 103px;
                left: 43px;
                padding: 0px;
                width: 209px;
                height: 20px;
            }
            #HEADLINE159 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #PARAGRAPH158 {
                top: 152px;
                left: 28px;
                padding: 0px;
                width: 237px;
                height: 76px;
            }
            #PARAGRAPH158 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX160 {
                top: 0px;
                left: 77.00689697265625px;
                width: 155px;
                height: 155px;
            }
            #GROUP259 {
                top: 66.09375px;
                left: 32.015625px;
                width: 927.09375px;
                height: 454px;
            }
            #BOX186 {
                top: 18.671875px;
                left: 1px;
                width: 328.96484375px;
                height: 406.9921875px;
            }
            #PARAGRAPH188 {
                top: 184.976px;
                left: 16.9758px;
                padding: 0px;
                width: 292.67578125px;
                height: 42.5px;
            }
            #PARAGRAPH188 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #LINE187 {
                top: 154.77432250976562px;
                left: 29.791671752929688px;
                width: 280.0173645019531px;
                height: 34.18402862548828px;
            }
            #LINE189 {
                top: 233.76953125px;
                left: 32.51953125px;
                width: 281.0243225097656px;
                height: 34.18402862548828px;
            }
            #HEADLINE336 {
                top: 267.94921875px;
                left: 20.546875px;
                padding: 0px;
                width: 293.75px;
                height: 75px;
            }
            #HEADLINE336 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #FORM202 {
                top: 97.4375px;
                left: 404.859375px;
                width: 523.234375px;
                height: 269.5px;
            }
            #ITEM_FORM203 {
                top: 0px;
                left: 0px;
                width: 523.24658203125px;
                height: 50.312503814697266px;
            }
            #ITEM_FORM204 {
                top: 63.3876px;
                left: 0px;
                width: 523.24658203125px;
                height: 50.312503814697266px;
            }
            #ITEM_FORM205 {
                top: 126.776px;
                left: 0px;
                width: 523.24658203125px;
                height: 50.312503814697266px;
            }
            #ITEM_FORM206 {
                top: 190.163px;
                left: 0px;
                width: 523.24658203125px;
                height: 79.3576431274414px;
            }
            #BUTTON207 {
                top: 388.46875px;
                left: 562.96875px;
                padding: 0px;
                width: 171.25px;
                height: 37.5px;
            }
            #BUTTON207 > .widget-content {
                font-size: 19px;
                text-align: center;
            }
            #HEADLINE190 {
                top: 368.4375px;
                left: 21.171875px;
                padding: 0px;
                width: 329.9653015136719px;
                height: 40px;
            }
            #HEADLINE190 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #LINEVERTICAL192 {
                top: 0px;
                left: 351.25px;
                width: 25px;
                height: 454.01043701171875px;
            }
            #HEADLINE172 {
                top: 39.640625px;
                left: 47.203125px;
                padding: 0px;
                width: 240px;
                height: 42.5px;
            }
            #HEADLINE172 > .widget-content {
                font-size: 37px;
                text-align: center;
            }
            #SHAPE175 {
                top: 104.6875px;
                left: 33.984375px;
                width: 65px;
                height: 67px;
            }
            #PARAGRAPH174 {
                top: 246.71875px;
                left: 16.984375px;
                padding: 0px;
                width: 230px;
                height: 17px;
            }
            #PARAGRAPH174 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #HEADLINE173 {
                top: 128.671875px;
                left: 76.984375px;
                padding: 0px;
                width: 225px;
                height: 40px;
            }
            #HEADLINE173 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #HEADLINE182 {
                top: 96.171875px;
                left: 132.984375px;
                padding: 0px;
                width: 200px;
                height: 32.5px;
            }
            #HEADLINE182 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #LINE183 {
                top: 101.640625px;
                left: 134.984375px;
                width: 112.01171875px;
                height: 25px;
            }
            #HEADLINE340 {
                top: 35.2813px;
                left: 434px;
                padding: 0px;
                width: 200px;
                height: 30px;
            }
            #HEADLINE340 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE341 {
                top: 86.2813px;
                left: 434px;
                padding: 0px;
                width: 544px;
                height: 52px;
            }
            #HEADLINE341 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #LINE228 {
                top: 206px;
                left: 0px;
                width: 960px;
                height: 25px;
            }
            #GROUP237 {
                top: 41.53125px;
                left: 302px;
                width: 619px;
                height: 155.109375px;
            }
            #HEADLINE238 {
                top: 59.109375px;
                left: 1px;
                padding: 0px;
                width: 619px;
                height: 96px;
            }
            #HEADLINE238 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #IMAGE239 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Logo-xin-1514260351.png);
            }
            #IMAGE239 {
                top: 0px;
                left: 116px;
                width: 159.609375px;
                height: 31px;
            }
            #SHAPE240 {
                top: 112.632px;
                left: 264.986px;
                width: 24.005680084228516px;
                height: 19.659090042114258px;
            }
            #SHAPE241 {
                top: 170.299px;
                left: 265.986px;
                width: 21.984375px;
                height: 18px;
            }
            #SHAPE242 {
                top: 139.631px;
                left: 265.986px;
                width: 24.005680084228516px;
                height: 19.659090042114258px;
            }
            #BOX194 {
                top: -0.5px;
                left: 0px;
                width: 481px;
                height: 132px;
            }
            #HEADLINE195 {
                top: 39px;
                left: 23px;
                padding: 0px;
                width: 425px;
                height: 64px;
            }
            #HEADLINE195 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #FORM196 {
                top: 251.5px;
                left: 87px;
                width: 300px;
                height: 125.5625px;
            }
            #ITEM_FORM197 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 37.828125px;
            }
            #ITEM_FORM198 {
                top: 44.1585px;
                left: 0px;
                width: 300px;
                height: 37.828125px;
            }
            #ITEM_FORM199 {
                top: 87.744px;
                left: 0px;
                width: 300px;
                height: 37.828125px;
            }
            #BUTTON200 {
                top: 387.5px;
                left: 143px;
                padding: 0px;
                width: 195px;
                height: 44px;
            }
            #BUTTON200 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #PARAGRAPH201 {
                top: 152.5px;
                left: 27px;
                padding: 0px;
                width: 426px;
                height: 66px;
            }
            #PARAGRAPH201 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #LISTOP129 {
                top: 154px;
                left: 79.5px;
                width: 432px;
                height: 720px;
            }
            #LISTOP129 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP129 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 23px;
                height: 23px;
                top: -2px;
                font-size: 11.5px;
                color: rgba(255, 193, 7, 1);
                margin-right: 12px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,193,7,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13 13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16 9.913 5 16 5zm-5.28 7.78l-1.44 1.44 6 6 .72.686.72-.687 6-6-1.44-1.44L16 18.064l-5.28-5.282z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP129 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP129 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX127 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE128 {
                top: 42px;
                left: 78px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE128 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX123 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE124 {
                top: 42px;
                left: 78px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE124 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP125 {
                top: 154px;
                left: 79.5px;
                width: 432px;
                height: 125px;
            }
            #LISTOP125 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP125 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 23px;
                height: 23px;
                top: -2px;
                font-size: 11.5px;
                color: rgba(255, 193, 7, 1);
                margin-right: 12px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,193,7,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13 13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16 9.913 5 16 5zm-5.28 7.78l-1.44 1.44 6 6 .72.686.72-.687 6-6-1.44-1.44L16 18.064l-5.28-5.282z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP125 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP125 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX119 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE120 {
                top: 14px;
                left: 78.5px;
                padding: 0px;
                width: 387px;
                height: 90px;
            }
            #HEADLINE120 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP121 {
                top: 154px;
                left: 79.5px;
                width: 432px;
                height: 160px;
            }
            #LISTOP121 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP121 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 23px;
                height: 23px;
                top: -2px;
                font-size: 11.5px;
                color: rgba(255, 193, 7, 1);
                margin-right: 12px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,193,7,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13 13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16 9.913 5 16 5zm-5.28 7.78l-1.44 1.44 6 6 .72.686.72-.687 6-6-1.44-1.44L16 18.064l-5.28-5.282z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP121 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP121 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX113 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE114 {
                top: 42px;
                left: 78px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE114 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP115 {
                top: 154px;
                left: 79.5px;
                width: 432px;
                height: 163px;
            }
            #LISTOP115 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP115 > ol.widget-content li::before {
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
            #LISTOP115 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP115 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
        }
        
        #SECTION34 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x900/5a28c4f8c3f6592b3acabec8/student-849825_1920-1515227227.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION34 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.75);
        }
        
        #SECTION54 {
            display: block;
            background-color: rgba(255, 255, 146, 0.58);
        }
        
        #SECTION75 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x700/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
            background-color: rgba(28, 28, 28, 0.77);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION75 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.76);
        }
        
        #SECTION130 {
            display: block;
            background-color: rgba(255, 255, 141, 0.62);
        }
        
        #SECTION139 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x800/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION139 > .ladi-widget-overlay {
            background-color: rgba(31, 31, 31, 0.89);
        }
        
        #SECTION169 {
            display: block;
            background-color: rgba(255, 255, 141, 0.62);
        }
        
        #SECTION226 {
            display: block;
            background-color: rgba(31, 33, 41, 1);
        }
        
        #POPUP193 .container {
            display: block;
            background-color: rgba(25, 29, 46, 1);
        }
        
        #POPUP126 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP126 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP122 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP122 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP118 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP118 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP112 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP112 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #LINE35 {
            display: block;
        }
        
        #LINE35>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: #cb9301;
            margin-top: 10.5px;
        }
        
        #LINE35 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE37 {
            display: block;
        }
        
        #HEADLINE37 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 196, 0, 1);
            font-weight: 600;
            line-height: 31px;
            text-shadow: 2px 1px 0px rgba(0, 0, 0, 1);
        }
        
        #BUTTON52 {
            display: table;
        }
        
        #BUTTON52 > .widget-content {
            background-color: rgba(255, 152, 0, 1);
            color: #ffffff;
            font-weight: 600;
            line-height: 36px;
        }
        
        #BUTTON52> .widget-content {
            border-radius: 15px;
        }
        
        #BUTTON52> .ladi-widget-overlay {
            border-radius: 15px;
        }
        
        #GROUP258 {
            display: block;
        }
        
        #GROUP258 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX248 {
            display: block;
        }
        
        #BOX248 > .widget-content {
            background-color: rgba(0, 0, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX248> .widget-content {
            border-radius: 5px;
        }
        
        #BOX248> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE251 {
            display: block;
        }
        
        #HEADLINE251 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 152, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #HEADLINE255 {
            display: block;
        }
        
        #HEADLINE255 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 152, 0, 1);
            font-weight: 400;
            line-height: 30px;
            :hover {
                color: black;
            }
        }
        
        #HEADLINE250 {
            display: block;
        }
        
        #HEADLINE250 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 152, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #IMAGE342 {
            display: block;
        }
        
        #IMAGE342 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE342 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BUTTON257 {
            display: table;
        }
        
        #BUTTON257 > .widget-content {
            background-color: rgba(255, 152, 0, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 40px;
        }
        
        #BUTTON257> .widget-content {
            border-radius: 10px;
        }
        
        #BUTTON257> .ladi-widget-overlay {
            border-radius: 10px;
        }
        
        #SHAPE245 {
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            display: block;
        }
        
        #SHAPE245 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 152, 0, 1);
        }
        
        #SHAPE245> .widget-content svg {
            fill: rgba(255, 152, 0, 1);
        }
        
        #HEADLINE295 {
            display: block;
        }
        
        #HEADLINE295 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #HEADLINE296 {
            display: block;
        }
        
        #HEADLINE296 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
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
            border-color: rgba(255, 255, 255, 1);
            margin-left: 9.500000953674316px;
        }
        
        #LINEVERTICAL267 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE263 {
            display: block;
        }
        
        #HEADLINE263 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 45px;
        }
        
        #BOX279 {
            display: block;
        }
        
        #BOX279 > .widget-content {
            background-image: url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
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
        
        #BOX279> .widget-content {
            border-radius: 300px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(224, 224, 224, 1);
        }
        
        #BOX279> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 0px;
            border-style: solid;
            border-color: rgba(224, 224, 224, 1);
        }
        
        #BOX279 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE265 {
            display: block;
        }
        
        #HEADLINE265 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 28px;
        }
        
        #SHAPE302 {
            display: block;
        }
        
        #SHAPE302 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 152, 0, 1);
        }
        
        #SHAPE302> .widget-content svg {
            fill: rgba(255, 152, 0, 1);
        }
        
        #GROUP333 {
            display: block;
        }
        
        #GROUP333 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP325 {
            display: block;
        }
        
        #GROUP325 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX324 {
            display: block;
        }
        
        #BOX324 > .widget-content {
            background-color: rgba(0, 0, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX324> .widget-content {
            border-radius: 15px;
            border-width: 0px;
            border-style: dashed;
            border-color: rgba(255, 152, 0, 1);
        }
        
        #BOX324> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 0px;
            border-style: dashed;
            border-color: rgba(255, 152, 0, 1);
        }
        
        #HEADLINE332 {
            display: block;
        }
        
        #HEADLINE332 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(252, 159, 22, 1);
            font-weight: 600;
            line-height: 42px;
        }
        
        #GROUP309 {
            display: block;
        }
        
        #GROUP309 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE307 {
            display: block;
        }
        
        #HEADLINE307 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 21px;
        }
        
        #SHAPE306 {
            display: block;
        }
        
        #SHAPE306 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE306> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP313 {
            display: block;
        }
        
        #GROUP313 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE314 {
            display: block;
        }
        
        #HEADLINE314 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 21px;
        }
        
        #SHAPE315 {
            display: block;
        }
        
        #SHAPE315 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE315> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP316 {
            display: block;
        }
        
        #GROUP316 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
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
        
        #HEADLINE311 {
            display: block;
        }
        
        #HEADLINE311 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 21px;
        }
        
        #GROUP317 {
            display: block;
        }
        
        #GROUP317 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE318 {
            display: block;
        }
        
        #SHAPE318 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE318> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE319 {
            display: block;
        }
        
        #HEADLINE319 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 21px;
        }
        
        #GROUP320 {
            display: block;
        }
        
        #GROUP320 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE321 {
            display: block;
        }
        
        #SHAPE321 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE321> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE322 {
            display: block;
        }
        
        #HEADLINE322 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 21px;
        }
        
        #GROUP335 {
            display: block;
        }
        
        #GROUP335 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX298 {
            display: block;
        }
        
        #BOX298 > .widget-content {
            background-color: rgba(255, 255, 255, 0.64);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX298> .widget-content {
            border-radius: 15px;
            border-width: 2px;
            border-style: dashed;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX298> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 2px;
            border-style: dashed;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #GROUP61 {
            display: block;
        }
        
        #GROUP61 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE60 {
            display: block;
        }
        
        #SHAPE60 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 152, 0, 1);
        }
        
        #SHAPE60> .widget-content svg {
            fill: rgba(255, 152, 0, 1);
        }
        
        #HEADLINE58 {
            display: block;
        }
        
        #HEADLINE58 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(99, 99, 106, 1);
            font-weight: 600;
            line-height: 21px;
        }
        
        #GROUP62 {
            display: block;
        }
        
        #GROUP62 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE63 {
            display: block;
        }
        
        #SHAPE63 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 152, 0, 1);
        }
        
        #SHAPE63> .widget-content svg {
            fill: rgba(255, 152, 0, 1);
        }
        
        #HEADLINE64 {
            display: block;
        }
        
        #HEADLINE64 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(99, 99, 106, 1);
            font-weight: 600;
            line-height: 21px;
        }
        
        #GROUP66 {
            display: block;
        }
        
        #GROUP66 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE67 {
            display: block;
        }
        
        #SHAPE67 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 152, 0, 1);
        }
        
        #SHAPE67> .widget-content svg {
            fill: rgba(255, 152, 0, 1);
        }
        
        #HEADLINE68 {
            display: block;
        }
        
        #HEADLINE68 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(99, 99, 106, 1);
            font-weight: 600;
            line-height: 21px;
        }
        
        #GROUP69 {
            display: block;
        }
        
        #GROUP69 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE70 {
            display: block;
        }
        
        #SHAPE70 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 152, 0, 1);
        }
        
        #SHAPE70> .widget-content svg {
            fill: rgba(255, 152, 0, 1);
        }
        
        #HEADLINE71 {
            display: block;
        }
        
        #HEADLINE71 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(99, 99, 106, 1);
            font-weight: 600;
            line-height: 21px;
        }
        
        #BUTTON55 {
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            display: table;
        }
        
        #BUTTON55 > .widget-content {
            background-color: rgba(255, 152, 0, 1);
            color: #ffffff;
            font-weight: 600;
            line-height: 36px;
        }
        
        #BUTTON55> .widget-content {
            border-radius: 10px;
        }
        
        #BUTTON55> .ladi-widget-overlay {
            border-radius: 10px;
        }
        
        #HEADLINE76 {
            display: block;
        }
        
        #HEADLINE76 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 34px;
        }
        
        #SHAPE77 {
            display: block;
        }
        
        #SHAPE77 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 152, 0, 1);
        }
        
        #SHAPE77> .widget-content svg {
            fill: rgba(255, 152, 0, 1);
        }
        
        #GROUP328 {
            display: block;
        }
        
        #GROUP328 > .widget-content {
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
        
        #GROUP97 {
            display: block;
        }
        
        #GROUP97 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX108 {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            display: block;
        }
        
        #BOX108 > .widget-content {
            background-color: rgba(28, 28, 28, 0.77);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE109 {
            display: block;
        }
        
        #HEADLINE109 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #HEADLINE110 {
            display: block;
        }
        
        #HEADLINE110 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX106 {
            display: block;
        }
        
        #BOX106 > .widget-content {
            background-color: rgba(255, 152, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE107 {
            display: block;
        }
        
        #SHAPE107 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE107> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP247 {
            display: block;
        }
        
        #GROUP247 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP117 {
            display: block;
        }
        
        #GROUP117 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX102 {
            display: block;
        }
        
        #BOX102 > .widget-content {
            background-color: rgba(255, 152, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE103 {
            display: block;
        }
        
        #SHAPE103 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE103> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP116 {
            display: block;
        }
        
        #GROUP116 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX99 {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            display: block;
        }
        
        #BOX99 > .widget-content {
            background-color: rgba(28, 28, 28, 0.77);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE100 {
            display: block;
        }
        
        #HEADLINE100 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #HEADLINE101 {
            display: block;
        }
        
        #HEADLINE101 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX78 {
            display: block;
        }
        
        #BOX78 > .widget-content {
            background-color: rgba(255, 152, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE79 {
            display: block;
        }
        
        #SHAPE79 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE79> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #BOX80 {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            display: block;
        }
        
        #BOX80 > .widget-content {
            background-color: rgba(28, 28, 28, 0.77);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE82 {
            display: block;
        }
        
        #HEADLINE82 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #HEADLINE83 {
            display: block;
        }
        
        #HEADLINE83 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE131 {
            display: block;
        }
        
        #HEADLINE131 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 300;
            line-height: 39px;
        }
        
        #LINE136 {
            display: block;
        }
        
        #LINE136>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 152, 0, 1);
            margin-top: 10.5px;
        }
        
        #LINE136 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX137 {
            display: block;
        }
        
        #BOX137 > .widget-content {
            background-image: url("https://lakita.vn/public/kt110/img/hqt.png");
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
        
        #BOX137> .widget-content {
            border-radius: 550px;
        }
        
        #BOX137> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #BOX137 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #LISTOP138 {
            display: block;
        }
        
        #LISTOP138 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #HEADLINE337 {
            display: block;
        }
        
        #HEADLINE337 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LINE140 {
            display: block;
        }
        
        #LINE140>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 152, 0, 1);
            margin-top: 10.5px;
        }
        
        #LINE140 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH141 {
            display: block;
        }
        
        #PARAGRAPH141 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 20px;
        }
        
        #HEADLINE142 {
            display: block;
        }
        
        #HEADLINE142 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 34px;
        }
        
        #GROUP143 {
            display: block;
        }
        
        #GROUP143 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX144 {
            display: block;
        }
        
        #BOX144 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX144> .widget-content {
            border-radius: 5px;
        }
        
        #BOX144> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE145 {
            display: block;
        }
        
        #HEADLINE145 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(61, 61, 61, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #HEADLINE146 {
            display: block;
        }
        
        #HEADLINE146 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 152, 0, 1);
            font-weight: 400;
            line-height: 16px;
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
            color: rgba(13, 13, 13, 1);
            line-height: 19px;
        }
        
        #BOX148 {
            display: block;
        }
        
        #BOX148 > .widget-content {
            background-image: url("https://lakita.vn/public/kt110/img/camnhan1.png");
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
            box-shadow: 0px 0px 8px rgba(20, 20, 20, 0.16);
        }
        
        #BOX148> .widget-content {
            border-radius: 220px;
            border-width: 4px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX148> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 4px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX148 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP149 {
            display: block;
        }
        
        #GROUP149 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX150 {
            display: block;
        }
        
        #BOX150 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX150> .widget-content {
            border-radius: 5px;
        }
        
        #BOX150> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE151 {
            display: block;
        }
        
        #HEADLINE151 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(61, 61, 61, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #HEADLINE152 {
            display: block;
        }
        
        #HEADLINE152 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 152, 0, 1);
            font-weight: 400;
            line-height: 16px;
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
            color: rgba(13, 13, 13, 1);
            line-height: 19px;
        }
        
        #BOX154 {
            display: block;
        }
        
        #BOX154 > .widget-content {
            background-image: url("https://lakita.vn/public/kt110/img/camnhan2.png");
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
            box-shadow: 0px 0px 8px rgba(20, 20, 20, 0.16);
        }
        
        #BOX154> .widget-content {
            border-radius: 220px;
            border-width: 4px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX154> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 4px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX154 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP155 {
            display: block;
        }
        
        #GROUP155 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX156 {
            display: block;
        }
        
        #BOX156 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX156> .widget-content {
            border-radius: 5px;
        }
        
        #BOX156> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE157 {
            display: block;
        }
        
        #HEADLINE157 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 152, 0, 1);
            font-weight: 400;
            line-height: 16px;
        }
        
        #HEADLINE159 {
            display: block;
        }
        
        #HEADLINE159 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(61, 61, 61, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #PARAGRAPH158 {
            display: block;
        }
        
        #PARAGRAPH158 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(13, 13, 13, 1);
            line-height: 19px;
        }
        
        #BOX160 {
            display: block;
        }
        
        #BOX160 > .widget-content {
            background-image: url("https://lakita.vn/public/kt110/img/camnhan3.png");
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
            box-shadow: 0px 0px 8px rgba(20, 20, 20, 0.16);
        }
        
        #BOX160> .widget-content {
            border-radius: 220px;
            border-width: 4px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX160> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 4px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX160 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP259 {
            display: block;
        }
        
        #GROUP259 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX186 {
            display: block;
        }
        
        #BOX186 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 5px 5px 0px rgba(150, 10, 0, 1);
        }
        
        #BOX186> .widget-content {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(254, 10, 10, 1);
        }
        
        #BOX186> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(254, 10, 10, 1);
        }
        
        #PARAGRAPH188 {
            display: block;
        }
        
        #PARAGRAPH188 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #LINE187 {
            display: block;
        }
        
        #LINE187>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 193, 7, 1);
            margin-top: 9.500000953674316px;
        }
        
        #LINE187 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE189 {
            display: block;
        }
        
        #LINE189>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 193, 7, 1);
            margin-top: 9.500000953674316px;
        }
        
        #LINE189 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE336 {
            display: block;
        }
        
        #HEADLINE336 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #FORM202 {
            display: block;
        }
        
        #FORM202 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM203 {
            display: block;
        }
        
        #ITEM_FORM203 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM203> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(16, 8, 8, 1);
        }
        
        #ITEM_FORM203> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(16, 8, 8, 1);
        }
        
        #ITEM_FORM204 {
            display: block;
        }
        
        #ITEM_FORM204> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(16, 8, 8, 1);
        }
        
        #ITEM_FORM204> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(16, 8, 8, 1);
        }
        
        #ITEM_FORM205 {
            display: block;
        }
        
        #ITEM_FORM205 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM205> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(16, 8, 8, 1);
        }
        
        #ITEM_FORM205> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(16, 8, 8, 1);
        }
        
        #ITEM_FORM206 {
            display: block;
        }
        
        #ITEM_FORM206 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM206> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(16, 8, 8, 1);
        }
        
        #ITEM_FORM206> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: rgba(16, 8, 8, 1);
        }
        
        #BUTTON207 {
            display: table;
        }
        
        #BUTTON207 > .widget-content {
            background-color: rgba(255, 152, 0, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 25px;
        }
        
        #BUTTON207> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON207> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE190 {
            display: block;
        }
        
        #HEADLINE190 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(244, 67, 54, 1);
            font-weight: 700;
            line-height: 41px;
        }
        
        #LINEVERTICAL192 {
            display: block;
        }
        
        #LINEVERTICAL192>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 4px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 193, 7, 1);
            margin-left: 8.500000953674316px;
        }
        
        #LINEVERTICAL192 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE172 {
            display: block;
        }
        
        #HEADLINE172 > .widget-content {
            font-family: 'Lobster';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 193, 7, 1);
            font-weight: 400;
            line-height: 43px;
        }
        
        #SHAPE175 {
            display: block;
        }
        
        #SHAPE175 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(191, 34, 0, 1);
        }
        
        #SHAPE175> .widget-content svg {
            fill: rgba(191, 34, 0, 1);
        }
        
        #PARAGRAPH174 {
            display: block;
        }
        
        #PARAGRAPH174 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(97, 97, 97, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #HEADLINE173 {
            display: block;
        }
        
        #HEADLINE173 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(244, 67, 54, 1);
            font-weight: 700;
            line-height: 40px;
        }
        
        #HEADLINE182 {
            display: block;
        }
        
        #HEADLINE182 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 600;
            line-height: 33px;
        }
        
        #LINE183 {
            display: block;
        }
        
        #LINE183>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
            margin-top: 9.5px;
        }
        
        #LINE183 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE340 {
            display: block;
        }
        
        #HEADLINE340 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #HEADLINE341 {
            display: block;
        }
        
        #HEADLINE341 > .widget-content {
            font-family: 'Pattaya', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(245, 127, 23, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #LINE228 {
            display: block;
        }
        
        #LINE228>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.18);
            margin-top: 12px;
        }
        
        #LINE228 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP237 {
            display: block;
        }
        
        #GROUP237 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE238 {
            display: block;
        }
        
        #HEADLINE238 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(217, 217, 217, 1);
            font-weight: 400;
            line-height: 32px;
        }
        
        #IMAGE239 {
            display: block;
        }
        
        #IMAGE239 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE239 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #SHAPE240 {
            display: block;
        }
        
        #SHAPE240 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE240> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #SHAPE241 {
            display: block;
        }
        
        #SHAPE241 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE241> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
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
        
        #BOX194 {
            display: block;
        }
        
        #BOX194 > .widget-content {
            background-image: url("https://static.ladipage.net/s600x300/57b167c9ca57d39c18a1c57c/coffee-notebook-pencil-work-desk-163131.jpg");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
            background-color: rgba(201, 72, 0, 0.8);
            color: rgba(0, 0, 0, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #BOX194 > .ladi-widget-overlay {
            background-color: rgba(201, 60, 0, 0.88);
        }
        
        #HEADLINE195 {
            display: block;
        }
        
        #HEADLINE195 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 32px;
        }
        
        #FORM196 {
            display: block;
        }
        
        #FORM196 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM196 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM196 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM196 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #FORM196 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM197 {
            display: block;
        }
        
        #ITEM_FORM197 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM197> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM197> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM197 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM197 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM197 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM197 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM198 {
            display: block;
        }
        
        #ITEM_FORM198 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM198> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM198> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM198 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM198 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM198 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM198 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM199 {
            display: block;
        }
        
        #ITEM_FORM199 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #ITEM_FORM199> .widget-content {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM199> .ladi-widget-overlay {
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM199 .widget-content::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM199 .widget-content:-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM199 .widget-content::-moz-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #ITEM_FORM199 .widget-content:-ms-input-placeholder {
            color: rgba(255, 255, 255, 1)
        }
        
        #BUTTON200 {
            display: table;
        }
        
        #BUTTON200 > .widget-content {
            background-color: rgba(201, 60, 0, 1);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 40px;
        }
        
        #BUTTON200> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON200> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #PARAGRAPH201 {
            display: block;
        }
        
        #PARAGRAPH201 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #LISTOP129 {
            display: block;
        }
        
        #LISTOP129 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX127 {
            display: block;
        }
        
        #BOX127 > .widget-content {
            background-color: rgba(255, 193, 7, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE128 {
            display: block;
        }
        
        #HEADLINE128 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #BOX123 {
            display: block;
        }
        
        #BOX123 > .widget-content {
            background-color: rgba(255, 193, 7, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE124 {
            display: block;
        }
        
        #HEADLINE124 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP125 {
            display: block;
        }
        
        #LISTOP125 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX119 {
            display: block;
        }
        
        #BOX119 > .widget-content {
            background-color: rgba(255, 193, 7, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE120 {
            display: block;
        }
        
        #HEADLINE120 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP121 {
            display: block;
        }
        
        #LISTOP121 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX113 {
            display: block;
        }
        
        #BOX113 > .widget-content {
            background-color: rgba(255, 230, 0, 1);
        }
        
        #HEADLINE114 {
            display: block;
        }
        
        #HEADLINE114 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP115 {
            display: block;
        }
        
        #LISTOP115 > .widget-content {
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
            #SECTION34 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x800/5a28c4f8c3f6592b3acabec8/student-849825_1920-1515227227.jpg");
                background-color: rgba(255, 255, 255, 0);
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION34 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0.75);
            }
            #SECTION34 {
                width: 100%;
                height: 682.9999980926514px;
            }
            #SECTION34 .container {}
            #SECTION34 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://static.ladipage.net/s500x800/5a28c4f8c3f6592b3acabec8/student-849825_1920-1515227227.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://static.ladipage.net/s500x800/5a28c4f8c3f6592b3acabec8/student-849825_1920-1515227227.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://static.ladipage.net/s500x800/5a28c4f8c3f6592b3acabec8/student-849825_1920-1515227227.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://static.ladipage.net/s500x800/5a28c4f8c3f6592b3acabec8/student-849825_1920-1515227227.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://static.ladipage.net/s500x800/5a28c4f8c3f6592b3acabec8/student-849825_1920-1515227227.jpg");
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION54 {
                display: block;
                background-color: rgba(255, 255, 146, 0.58);
            }
            #SECTION54 {
                width: 100%;
                height: 374.6962585449219px;
            }
            #SECTION54 .container {}
            #SECTION54 {
                background-image: none;
            }
            #SECTION75 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-color: rgba(28, 28, 28, 0.77);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION75 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0.76);
            }
            #SECTION75 {
                width: 100%;
                height: 463.06945037841797px;
            }
            #SECTION75 .container {}
            #SECTION75 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)), url("https://static.ladipage.net/s500x600/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)), url("https://static.ladipage.net/s500x600/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)), url("https://static.ladipage.net/s500x600/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)), url("https://static.ladipage.net/s500x600/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)), url("https://static.ladipage.net/s500x600/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION130 {
                display: block;
                background-color: rgba(255, 255, 141, 0.62);
            }
            #SECTION130 {
                width: 100%;
                height: 369.05152893066406px;
            }
            #SECTION130 .container {}
            #SECTION130 {
                background-image: none;
            }
            #SECTION139 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x1300/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION139 > .ladi-widget-overlay {
                background-color: rgba(31, 31, 31, 0.89);
            }
            #SECTION139 {
                width: 100%;
                height: 1154px;
            }
            #SECTION139 .container {}
            #SECTION139 {
                background-image: linear-gradient(rgba(31, 31, 31, 0.89), rgba(31, 31, 31, 0.89)), url("https://static.ladipage.net/s500x1300/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
                background-image: -o-linear-gradient(rgba(31, 31, 31, 0.89), rgba(31, 31, 31, 0.89)), url("https://static.ladipage.net/s500x1300/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
                background-image: -ms-linear-gradient(rgba(31, 31, 31, 0.89), rgba(31, 31, 31, 0.89)), url("https://static.ladipage.net/s500x1300/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
                background-image: -moz-linear-gradient(rgba(31, 31, 31, 0.89), rgba(31, 31, 31, 0.89)), url("https://static.ladipage.net/s500x1300/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
                background-image: -webkit-linear-gradient(rgba(31, 31, 31, 0.89), rgba(31, 31, 31, 0.89)), url("https://static.ladipage.net/s500x1300/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION169 {
                display: block;
                background-color: rgba(255, 255, 141, 0.62);
            }
            #SECTION169 {
                width: 100%;
                height: 484.01043701171875px;
            }
            #SECTION169 .container {}
            #SECTION169 {
                background-image: none;
            }
            #SECTION226 {
                display: block;
                background-color: rgba(31, 33, 41, 1);
            }
            #SECTION226 {
                width: 100%;
                height: 478px;
            }
            #SECTION226 .container {}
            #SECTION226 {
                background-image: none;
            }
            #POPUP193 .container {
                display: block;
                background-color: rgba(25, 29, 46, 1);
            }
            #POPUP193 {
                width: 100%;
                height: 100%;
            }
            #POPUP193 .container {
                width: 375px;
                height: 427px;
                top: calc(100%-427px);
            }
            #POPUP193 {
                background-image: none;
            }
            #POPUP126 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP126 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }
            #POPUP126 {
                width: 100%;
                height: 100%;
            }
            #POPUP126 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP126 {
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
            #POPUP122 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP122 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }
            #POPUP122 {
                width: 100%;
                height: 100%;
            }
            #POPUP122 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP122 {
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
            #POPUP118 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP118 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }
            #POPUP118 {
                width: 100%;
                height: 100%;
            }
            #POPUP118 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP118 {
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
            #POPUP112 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP112 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }
            #POPUP112 {
                width: 100%;
                height: 100%;
            }
            #POPUP112 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP112 {
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
            #LINE35 {
                top: 428px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #HEADLINE37 {
                top: 93.99px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 62px;
            }
            #HEADLINE37 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #BUTTON52 {
                top: 215.234px;
                left: 32.5px;
                padding: 0px;
                width: 310px;
                height: 67px;
            }
            #BUTTON52 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP258 {
                top: 20.9896px;
                left: 10px;
                width: 355px;
                height: 98.984375px;
            }
            #BOX248 {
                top: 0px;
                left: 0px;
                width: 355px;
                height: 55.015625px;
            }
            #HEADLINE251 {
                top: 13.75px;
                left: 119.002px;
                padding: 0px;
                width: 116.984375px;
                height: 30px;
            }
            #HEADLINE251 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE255 {
                top: 14.7396px;
                left: 119.167px;
                padding: 0px;
                width: 116.65625px;
                height: 30px;
            }
            #HEADLINE255 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE250 {
                top: 14.7743px;
                left: 138.003px;
                padding: 0px;
                width: 78.984375px;
                height: 30px;
            }
            #HEADLINE250 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #IMAGE342 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/logo-1515293868.png);
            }
            #IMAGE342 {
                top: 9.375px;
                left: 109.156px;
                width: 136.6875px;
                height: 35.5625px;
            }
            #BUTTON257 {
                top: 59.0104px;
                left: 97.5px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON257 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #SHAPE245 {
                top: 229.016px;
                left: 140px;
                width: 95px;
                height: 90.984375px;
            }
            #HEADLINE295 {
                top: 241.481px;
                left: 87.5px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE295 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE296 {
                top: 176.113px;
                left: 52.4922px;
                padding: 0px;
                width: 270.015625px;
                height: 24px;
            }
            #HEADLINE296 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #LINEVERTICAL267 {
                top: 195.125px;
                left: 175px;
                width: 25px;
                height: 207.984375px;
            }
            #HEADLINE263 {
                top: 204px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 135px;
            }
            #HEADLINE263 > .widget-content {
                font-size: 39px;
                text-align: left;
            }
            #BOX279 {
                top: 171px;
                left: 62.3672px;
                width: 250.265625px;
                height: 241.984375px;
            }
            #BOX279 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE265 {
                top: 266.016px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 84px;
            }
            #HEADLINE265 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #SHAPE302 {
                top: 160.897px;
                left: 135.5px;
                width: 104px;
                height: 110px;
            }
            #GROUP333 {
                top: 23px;
                left: 10px;
                width: 355px;
                height: 381.015625px;
            }
            #GROUP325 {
                top: 0px;
                left: 0px;
                width: 355px;
                height: 381.015625px;
            }
            #BOX324 {
                top: 0px;
                left: 0px;
                width: 355px;
                height: 381.015625px;
            }
            #HEADLINE332 {
                top: 23.875px;
                left: 30px;
                padding: 0px;
                width: 295px;
                height: 42px;
            }
            #HEADLINE332 > .widget-content {
                font-size: 36px;
                text-align: left;
            }
            #GROUP309 {
                top: 65.875px;
                left: 0px;
                width: 355px;
                height: 64.9375px;
            }
            #HEADLINE307 {
                top: 22.9375px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 42px;
            }
            #HEADLINE307 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #SHAPE306 {
                top: 0px;
                left: 143.117px;
                width: 68.765625px;
                height: 51px;
            }
            #GROUP313 {
                top: 130.563px;
                left: 0px;
                width: 355px;
                height: 64.9375px;
            }
            #HEADLINE314 {
                top: 22.9375px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 63px;
            }
            #HEADLINE314 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #SHAPE315 {
                top: 0px;
                left: 143.055px;
                width: 68.890625px;
                height: 51px;
            }
            #GROUP316 {
                top: 189.625px;
                left: 0px;
                width: 355px;
                height: 51px;
            }
            #SHAPE312 {
                top: 0px;
                left: 145.75px;
                width: 63.5px;
                height: 51px;
            }
            #HEADLINE311 {
                top: 22.9531px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 42px;
            }
            #HEADLINE311 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #GROUP317 {
                top: 242.641px;
                left: 0px;
                width: 355px;
                height: 51px;
            }
            #SHAPE318 {
                top: 0px;
                left: 145.75px;
                width: 63.5px;
                height: 51px;
            }
            #HEADLINE319 {
                top: 22.9688px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 42px;
            }
            #HEADLINE319 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #GROUP320 {
                top: 300.641px;
                left: 0px;
                width: 355px;
                height: 51px;
            }
            #SHAPE321 {
                top: 0px;
                left: 142.992px;
                width: 69.015625px;
                height: 51px;
            }
            #HEADLINE322 {
                top: 22.9688px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 42px;
            }
            #HEADLINE322 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #GROUP335 {
                top: 99.2882px;
                left: 46px;
                width: 283px;
                height: 268.296875px;
            }
            #BOX298 {
                top: 0px;
                left: 1px;
                width: 283px;
                height: 268.296875px;
            }
            #GROUP61 {
                top: 81.0243px;
                left: 5.09722px;
                width: 248px;
                height: 31.984375px;
            }
            #SHAPE60 {
                top: 0px;
                left: 1px;
                width: 31.984375px;
                height: 31.984375px;
            }
            #HEADLINE58 {
                top: 7.93402px;
                left: 39.0035px;
                padding: 0px;
                width: 210px;
                height: 20px;
            }
            #HEADLINE58 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #GROUP62 {
                top: 126.493px;
                left: 6.65972px;
                width: 248px;
                height: 31.984375px;
            }
            #SHAPE63 {
                top: 0px;
                left: 1px;
                width: 31.984375px;
                height: 31.984375px;
            }
            #HEADLINE64 {
                top: 7.96875px;
                left: 39.0035px;
                padding: 0px;
                width: 210px;
                height: 20px;
            }
            #HEADLINE64 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #GROUP66 {
                top: 167.517px;
                left: 5.7743px;
                width: 248px;
                height: 31.984375px;
            }
            #SHAPE67 {
                top: 0px;
                left: 1px;
                width: 31.984375px;
                height: 31.984375px;
            }
            #HEADLINE68 {
                top: 7.96875px;
                left: 39.0035px;
                padding: 0px;
                width: 210px;
                height: 20px;
            }
            #HEADLINE68 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #GROUP69 {
                top: 209.479px;
                left: 4.90625px;
                width: 265.984375px;
                height: 47.96875px;
            }
            #SHAPE70 {
                top: 0px;
                left: 1px;
                width: 34.296875px;
                height: 31.984375px;
            }
            #HEADLINE71 {
                top: 7.96875px;
                left: 41.7639px;
                padding: 0px;
                width: 225.234375px;
                height: 40px;
            }
            #HEADLINE71 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #BUTTON55 {
                top: 28.2813px;
                left: 56.3819px;
                padding: 0px;
                width: 167px;
                height: 67px;
            }
            #BUTTON55 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE76 {
                top: 87.9861px;
                left: 13.0035px;
                padding: 0px;
                width: 348.984375px;
                height: 31.109375px;
            }
            #HEADLINE76 > .widget-content {
                font-size: 28px;
                text-align: center;
                line-height: 32px;
            }
            #SHAPE77 {
                top: 20px;
                left: 158.5px;
                width: 57.984375px;
                height: 57.984375px;
            }
            #GROUP328 {
                top: 200.906px;
                left: 10px;
                width: 355px;
                height: 287.25px;
            }
            #GROUP246 {
                top: 97.9844px;
                left: 0px;
                width: 355px;
                height: 88.984375px;
            }
            #GROUP97 {
                top: 0px;
                left: 0px;
                width: 355px;
                height: 88.953125px;
            }
            #BOX108 {
                top: 198.953px;
                left: 0px;
                width: 355px;
                height: 87.96875px;
            }
            #HEADLINE109 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #HEADLINE109 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE110 {
                top: 70px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #HEADLINE110 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX106 {
                top: 197.969px;
                left: 135.859px;
                width: 83.28125px;
                height: 86.984375px;
            }
            #SHAPE107 {
                top: 18px;
                left: 17px;
                width: 46.984375px;
                height: 46.984375px;
            }
            #GROUP247 {
                top: 198.297px;
                left: 0px;
                width: 355px;
                height: 88.953125px;
            }
            #GROUP117 {
                top: 30.0126px;
                left: 0px;
                width: 355px;
                height: 88.96875px;
            }
            #BOX102 {
                top: 98.9844px;
                left: 135.859px;
                width: 83.28125px;
                height: 86.984375px;
            }
            #SHAPE103 {
                top: 18px;
                left: 17px;
                width: 46.984375px;
                height: 46.984375px;
            }
            #GROUP116 {
                top: 98.9844px;
                left: 0px;
                width: 355px;
                height: 88.984375px;
            }
            #BOX99 {
                top: 99.9375px;
                left: 0px;
                width: 355px;
                height: 87.96875px;
            }
            #HEADLINE100 {
                top: 20px;
                left: 6.00696px;
                padding: 0px;
                width: 342.984375px;
                height: 20px;
            }
            #HEADLINE100 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE101 {
                top: 50px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #HEADLINE101 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX78 {
                top: 0px;
                left: 135.859px;
                width: 83.28125px;
                height: 86.984375px;
            }
            #SHAPE79 {
                top: 14px;
                left: 17px;
                width: 46.984375px;
                height: 46.984375px;
            }
            #BOX80 {
                top: 0.96875px;
                left: 0px;
                width: 355px;
                height: 87.96875px;
            }
            #HEADLINE82 {
                top: 11px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 20px;
            }
            #HEADLINE82 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE83 {
                top: 30px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 60px;
            }
            #HEADLINE83 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE131 {
                top: 68.7188px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 78px;
            }
            #HEADLINE131 > .widget-content {
                font-size: 33px;
                text-align: center;
            }
            #LINE136 {
                top: 113.667px;
                left: 116.5px;
                width: 141.984375px;
                height: 25px;
            }
            #BOX137 {
                top: 72px;
                left: 67.5px;
                width: 240px;
                height: 240px;
            }
            #BOX137 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/hqt.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/hqt.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/hqt.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/hqt.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/hqt.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #LISTOP138 {
                top: 145px;
                left: 10px;
                width: 355px;
                height: 270px;
            }
            #LISTOP138 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP138 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 20px;
                height: 20px;
                top: 0px;
                font-size: 10px;
                color: rgba(230, 81, 0, 1);
                margin-right: 9px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(230,81,0,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M12.97 4.28l-1.44 1.44L21.814 16 11.53 26.28l1.44 1.44 11-11 .686-.72-.687-.72-11-11z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP138 > ol.widget-content li {
                margin-bottom: 8px;
            }
            #LISTOP138 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #HEADLINE337 {
                top: 75.7188px;
                left: 87.5px;
                padding: 0px;
                width: 200px;
                height: 30px;
            }
            #HEADLINE337 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINE140 {
                top: 110px;
                left: 128px;
                width: 118.984375px;
                height: 25px;
            }
            #PARAGRAPH141 {
                top: 60px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #PARAGRAPH141 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE142 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE142 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 30px;
            }
            #GROUP143 {
                top: 145px;
                left: 37.5px;
                width: 300px;
                height: 332.984375px;
            }
            #BOX144 {
                top: 80px;
                left: 0px;
                width: 300px;
                height: 227.421875px;
            }
            #HEADLINE145 {
                top: 103px;
                left: 43px;
                padding: 0px;
                width: 208.984375px;
                height: 20px;
            }
            #HEADLINE145 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE146 {
                top: 130px;
                left: 26px;
                padding: 0px;
                width: 249px;
                height: 15.546875px;
            }
            #HEADLINE146 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #PARAGRAPH147 {
                top: 136.444px;
                left: 28px;
                padding: 0px;
                width: 236.984375px;
                height: 56.984375px;
            }
            #PARAGRAPH147 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX148 {
                top: 0px;
                left: 76px;
                width: 155px;
                height: 155px;
            }
            #BOX148 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan1.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan1.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan1.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan1.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan1.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #GROUP149 {
                top: 478px;
                left: 37.5px;
                width: 300px;
                height: 332.984375px;
            }
            #BOX150 {
                top: 80px;
                left: 0px;
                width: 300px;
                height: 227.421875px;
            }
            #HEADLINE151 {
                top: 103px;
                left: 43px;
                padding: 0px;
                width: 208.984375px;
                height: 20px;
            }
            #HEADLINE151 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE152 {
                top: 130px;
                left: 26px;
                padding: 0px;
                width: 249px;
                height: 15.546875px;
            }
            #HEADLINE152 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #PARAGRAPH153 {
                top: 136.444px;
                left: 28px;
                padding: 0px;
                width: 236.984375px;
                height: 75.984375px;
            }
            #PARAGRAPH153 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX154 {
                top: 0px;
                left: 76px;
                width: 155px;
                height: 155px;
            }
            #BOX154 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan2.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan2.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan2.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan2.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan2.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #GROUP155 {
                top: 811px;
                left: 37.5px;
                width: 300px;
                height: 332.984375px;
            }
            #BOX156 {
                top: 80px;
                left: 0px;
                width: 300px;
                height: 227.421875px;
            }
            #HEADLINE157 {
                top: 130px;
                left: 26px;
                padding: 0px;
                width: 249px;
                height: 15.546875px;
            }
            #HEADLINE157 > .widget-content {
                font-size: 12px;
                text-align: center;
            }
            #HEADLINE159 {
                top: 103px;
                left: 43px;
                padding: 0px;
                width: 208.984375px;
                height: 20px;
            }
            #HEADLINE159 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #PARAGRAPH158 {
                top: 136.444px;
                left: 28px;
                padding: 0px;
                width: 236.984375px;
                height: 75.984375px;
            }
            #PARAGRAPH158 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #BOX160 {
                top: 0px;
                left: 76px;
                width: 155px;
                height: 155px;
            }
            #BOX160 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan3.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan3.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan3.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan3.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://lakita.vn/public/kt110/img/camnhan3.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #GROUP259 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 1621.609375px;
            }
            #BOX186 {
                top: 484.01px;
                left: 13.0122px;
                width: 328.96875px;
                height: 419px;
            }
            #PARAGRAPH188 {
                top: 184.976px;
                left: 16.9758px;
                padding: 0px;
                width: 292.671875px;
                height: 42.5px;
            }
            #PARAGRAPH188 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #LINE187 {
                top: 154.774px;
                left: 29.7917px;
                width: 280.015625px;
                height: 34.171875px;
            }
            #LINE189 {
                top: 234.976px;
                left: 29.7845px;
                width: 281.015625px;
                height: 34.171875px;
            }
            #HEADLINE336 {
                top: 267.949px;
                left: 20.5469px;
                padding: 0px;
                width: 293.75px;
                height: 75px;
            }
            #HEADLINE336 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #FORM202 {
                top: 1026.77px;
                left: 0px;
                width: 355px;
                height: 290.28125px;
            }
            #ITEM_FORM203 {
                top: 20px;
                left: 0px;
                width: 355px;
                height: 50.3125px;
            }
            #ITEM_FORM204 {
                top: 80.3125px;
                left: 0px;
                width: 355px;
                height: 50.3125px;
            }
            #ITEM_FORM205 {
                top: 140.625px;
                left: 0px;
                width: 355px;
                height: 50.3125px;
            }
            #ITEM_FORM206 {
                top: 200.938px;
                left: 0px;
                width: 355px;
                height: 79.34375px;
            }
            #BUTTON207 {
                top: 1571.63px;
                left: 97.5px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON207 > .widget-content {
                font-size: 19px;
                text-align: center;
            }
            #HEADLINE190 {
                top: 1521.63px;
                left: 12.5174px;
                padding: 0px;
                width: 329.953125px;
                height: 40px;
            }
            #HEADLINE190 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #LINEVERTICAL192 {
                top: 20px;
                left: 165px;
                width: 25px;
                height: 454px;
            }
            #HEADLINE172 {
                top: 39.6484px;
                left: 57.5px;
                padding: 0px;
                width: 240px;
                height: 43px;
            }
            #HEADLINE172 > .widget-content {
                font-size: 37px;
                text-align: center;
            }
            #SHAPE175 {
                top: 1367.63px;
                left: 145px;
                width: 65px;
                height: 66.984375px;
            }
            #PARAGRAPH174 {
                top: 1494.63px;
                left: 62.5px;
                padding: 0px;
                width: 230px;
                height: 16.984375px;
            }
            #PARAGRAPH174 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #HEADLINE173 {
                top: 1444.63px;
                left: 65px;
                padding: 0px;
                width: 225px;
                height: 40px;
            }
            #HEADLINE173 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #HEADLINE182 {
                top: 96.1719px;
                left: 77.5px;
                padding: 0px;
                width: 200px;
                height: 33px;
            }
            #HEADLINE182 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #LINE183 {
                top: 1332.63px;
                left: 135px;
                width: 85px;
                height: 25px;
            }
            #HEADLINE340 {
                top: 35.2813px;
                left: 87.5px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE340 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE341 {
                top: 86.2813px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 78px;
            }
            #HEADLINE341 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #LINE228 {
                top: 446.292px;
                left: 38px;
                width: 300px;
                height: 25px;
            }
            #GROUP237 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 110.53125px;
            }
            #HEADLINE238 {
                top: 59.1094px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 160px;
            }
            #HEADLINE238 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #IMAGE239 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/Logo-xin-1514260351.png);
            }
            #IMAGE239 {
                top: 20px;
                left: 97.6953px;
                width: 159.59375px;
                height: 30.984375px;
            }
            #SHAPE240 {
                top: 347px;
                left: 175.503px;
                width: 23.984375px;
                height: 19.640625px;
            }
            #SHAPE241 {
                top: 406.306px;
                left: 176.51px;
                width: 21.96875px;
                height: 17.984375px;
            }
            #SHAPE242 {
                top: 376.653px;
                left: 175.503px;
                width: 23.984375px;
                height: 19.640625px;
            }
            #BOX194 {
                top: -0.5px;
                left: 10px;
                width: 355px;
                height: 132px;
            }
            #BOX194 > .widget-content {
                background-image: linear-gradient(rgba(201, 60, 0, 0.88), rgba(201, 60, 0, 0.88)), url("https://static.ladipage.net/s500x300/57b167c9ca57d39c18a1c57c/coffee-notebook-pencil-work-desk-163131.jpg");
                background-image: -o-linear-gradient(rgba(201, 60, 0, 0.88), rgba(201, 60, 0, 0.88)), url("https://static.ladipage.net/s500x300/57b167c9ca57d39c18a1c57c/coffee-notebook-pencil-work-desk-163131.jpg");
                background-image: -ms-linear-gradient(rgba(201, 60, 0, 0.88), rgba(201, 60, 0, 0.88)), url("https://static.ladipage.net/s500x300/57b167c9ca57d39c18a1c57c/coffee-notebook-pencil-work-desk-163131.jpg");
                background-image: -moz-linear-gradient(rgba(201, 60, 0, 0.88), rgba(201, 60, 0, 0.88)), url("https://static.ladipage.net/s500x300/57b167c9ca57d39c18a1c57c/coffee-notebook-pencil-work-desk-163131.jpg");
                background-image: -webkit-linear-gradient(rgba(201, 60, 0, 0.88), rgba(201, 60, 0, 0.88)), url("https://static.ladipage.net/s500x300/57b167c9ca57d39c18a1c57c/coffee-notebook-pencil-work-desk-163131.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #HEADLINE195 {
                top: 39px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 64px;
            }
            #HEADLINE195 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #FORM196 {
                top: 251.5px;
                left: 37.5px;
                width: 300px;
                height: 125.563px;
            }
            #ITEM_FORM197 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 33px;
            }
            #ITEM_FORM198 {
                top: 45px;
                left: 0px;
                width: 300px;
                height: 33px;
            }
            #ITEM_FORM199 {
                top: 90px;
                left: 0px;
                width: 300px;
                height: 33px;
            }
            #BUTTON200 {
                top: 387.5px;
                left: 90px;
                padding: 0px;
                width: 195px;
                height: 40px;
            }
            #BUTTON200 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #PARAGRAPH201 {
                top: 152.5px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 88px;
            }
            #PARAGRAPH201 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #LISTOP129 {
                top: 154px;
                left: 10px;
                width: 355px;
                height: 260px;
            }
            #LISTOP129 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP129 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 23px;
                height: 23px;
                top: -2px;
                font-size: 11.5px;
                color: rgba(255, 193, 7, 1);
                margin-right: 12px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,193,7,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13 13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16 9.913 5 16 5zm-5.28 7.78l-1.44 1.44 6 6 .72.686.72-.687 6-6-1.44-1.44L16 18.064l-5.28-5.282z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP129 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP129 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX127 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE128 {
                top: 42px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE128 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #BOX123 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE124 {
                top: 42px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE124 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LISTOP125 {
                top: 154px;
                left: 10px;
                width: 355px;
                height: 260px;
            }
            #LISTOP125 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP125 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 23px;
                height: 23px;
                top: -2px;
                font-size: 11.5px;
                color: rgba(255, 193, 7, 1);
                margin-right: 12px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,193,7,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13 13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16 9.913 5 16 5zm-5.28 7.78l-1.44 1.44 6 6 .72.686.72-.687 6-6-1.44-1.44L16 18.064l-5.28-5.282z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP125 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP125 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX119 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE120 {
                top: 14px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE120 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LISTOP121 {
                top: 154px;
                left: 10px;
                width: 355px;
                height: 260px;
            }
            #LISTOP121 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP121 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 23px;
                height: 23px;
                top: -2px;
                font-size: 11.5px;
                color: rgba(255, 193, 7, 1);
                margin-right: 12px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,193,7,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13 13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16 9.913 5 16 5zm-5.28 7.78l-1.44 1.44 6 6 .72.686.72-.687 6-6-1.44-1.44L16 18.064l-5.28-5.282z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP121 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP121 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX113 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE114 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE114 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LISTOP115 {
                top: 104px;
                left: 12px;
                width: 351px;
                height: 260px;
            }
            #LISTOP115 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP115 > ol.widget-content li::before {
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
            #LISTOP115 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP115 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://static.ladipage.net/googlefonts/css?family=Open+Sans:400,600,700|Roboto:300,400,700|Pattaya|Lobster|Montserrat:300,400,600,700&amp;subset=latin-ext,vietnamese" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="https://static.ladipage.net/source/animate.min.css?v=1515484099325" media="none" onload="if(media!='all')media='all'">
