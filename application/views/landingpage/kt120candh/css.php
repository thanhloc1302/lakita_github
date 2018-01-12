
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
            #SECTION23 {
                width: 100%;
                height: 687px;
            }
            #SECTION23 .container {}
            #SECTION23 {}
            #SECTION184 {
                width: 100%;
                height: 1131px;
            }
            #SECTION184 .container {}
            #SECTION184 {}
            #SECTION495 {
                width: 100%;
                height: 749.9583740234375px;
            }
            #SECTION495 .container {}
            #SECTION495 {}
            #SECTION42 {
                width: 100%;
                height: 620px;
            }
            #SECTION42 .container {}
            #SECTION42 {}
            #SECTION689 {
                width: 100%;
                height: 855.9801025390625px;
            }
            #SECTION689 .container {}
            #SECTION689 {}
            #SECTION658 {
                width: 100%;
                height: 760px;
            }
            #SECTION658 .container {}
            #SECTION658 {}
            #SECTION353 {
                width: 100%;
                height: 231px;
            }
            #SECTION353 .container {}
            #SECTION353 {}
            #POPUP176 {
                width: 100%;
                height: 100%;
            }
            #POPUP176 .container {
                width: 441px;
                height: 463px;
                top: calc(100%-463px);
            }
            #POPUP176 {}
            #POPUP172 {
                width: 100%;
                height: 100%;
            }
            #POPUP172 .container {
                width: 441px;
                height: 540px;
                top: calc(100%-540px);
            }
            #POPUP172 {}
            #POPUP168 {
                width: 100%;
                height: 100%;
            }
            #POPUP168 .container {
                width: 441px;
                height: 491px;
                top: calc(100%-491px);
            }
            #POPUP168 {}
            #POPUP164 {
                width: 100%;
                height: 100%;
            }
            #POPUP164 .container {
                width: 441px;
                height: 486px;
                top: calc(100%-486px);
            }
            #POPUP164 {}
            #POPUP160 {
                width: 100%;
                height: 100%;
            }
            #POPUP160 .container {
                width: 441px;
                height: 447px;
                top: calc(100%-447px);
            }
            #POPUP160 {}
            #POPUP156 {
                width: 100%;
                height: 100%;
            }
            #POPUP156 .container {
                width: 441px;
                height: 505px;
                top: calc(100%-505px);
            }
            #POPUP156 {}
            #POPUP152 {
                width: 100%;
                height: 100%;
            }
            #POPUP152 .container {
                width: 441px;
                height: 552px;
                top: calc(100%-552px);
            }
            #POPUP152 {}
            #IMAGE28 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x200/5a28c4f8c3f6592b3acabec8/26732576_924367494406122_1838958175_o-1515211058.png);
            }
            #IMAGE28 {
                top: 14.9336px;
                left: -146px;
                width: 204.98046875px;
                height: 48.9453125px;
            }
            #HEADLINE29 {
                top: 139.973px;
                left: 347px;
                padding: 0px;
                width: 784px;
                height: 31px;
            }
            #HEADLINE29 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE30 {
                top: 261.98px;
                left: 344px;
                padding: 0px;
                width: 783.75px;
                height: 30px;
            }
            #HEADLINE30 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #BUTTON31 {
                top: 353px;
                left: 372px;
                padding: 0px;
                width: 215px;
                height: 51px;
            }
            #BUTTON31 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #SHAPE33 {
                top: 488px;
                left: 451px;
                width: 61px;
                height: 61px;
            }
            #LINE37 {
                top: 267px;
                left: 152px;
                width: 167px;
                height: 25px;
            }
            #LINE38 {
                top: 267.984px;
                left: 670px;
                width: 154px;
                height: 25px;
            }
            #HEADLINE27 {
                top: 193px;
                left: 192px;
                padding: 0px;
                width: 666.9921875px;
                height: 45px;
            }
            #HEADLINE27 > .widget-content {
                font-size: 40px;
                text-align: left;
            }
            #HEADLINE568 {
                top: 660.6666660308838px;
                left: 380px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE568 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #IMAGE644 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s1400x300/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE644 {
                top: 696.662px;
                left: -161.563px;
                width: 1279.703125px;
                height: 130px;
            }
            #IMAGE645 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s1400x300/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE645 {
                top: 696.662px;
                left: -161.563px;
                width: 1279.703125px;
                height: 130px;
            }
            #IMAGE24 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s1400x300/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE24 {
                top: 570.653px;
                left: -162.897px;
                width: 1279.703125px;
                height: 130px;
            }
            #IMAGE648 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s1400x300/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE648 {
                top: 2446.41px;
                left: -162.742px;
                width: 1279.703125px;
                height: 130px;
            }
            #BOX185 {
                top: -24.0039px;
                left: -162px;
                width: 1278.5653076171875px;
                height: 102.99715423583984px;
            }
            #LINE187 {
                top: 167px;
                left: -1.29883e-05px;
                width: 957.3333740234375px;
                height: 25px;
            }
            #HEADLINE192 {
                top: 604.667px;
                left: -120.667px;
                padding: 0px;
                width: 1236px;
                height: 29.33333396911621px;
            }
            #HEADLINE192 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LINEVERTICAL202 {
                top: 241.016px;
                left: 1211.99px;
                width: 25px;
                height: 399px;
            }
            #LINEVERTICAL203 {
                top: 14px;
                left: 391px;
                width: 25px;
                height: 112px;
            }
            #HEADLINE566 {
                top: 137px;
                left: -106px;
                padding: 0px;
                width: 438.3125px;
                height: 30.909090042114258px;
            }
            #HEADLINE566 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE567 {
                top: 21px;
                left: 455.625px;
                padding: 0px;
                width: 712.7272338867188px;
                height: 134.5454559326172px;
            }
            #HEADLINE567 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #HEADLINE569 {
                top: 204.667px;
                left: 296.313px;
                padding: 0px;
                width: 593px;
                height: 76px;
            }
            #HEADLINE569 > .widget-content {
                font-size: 70px;
                text-align: left;
            }
            #HEADLINE570 {
                top: 549.001px;
                left: 180.667px;
                padding: 0px;
                width: 762.3333740234375px;
                height: 40px;
            }
            #HEADLINE570 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #GROUP578 {
                top: 655.0000305175781px;
                left: -129.66668701171875px;
                width: 566.6666717529297px;
                height: 179px;
            }
            #HEADLINE573 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE573 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #LISTOP571 {
                top: 34px;
                left: 25.666671752929688px;
                width: 542px;
                height: 145px;
            }
            #LISTOP571 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP571 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 20px;
                height: 20px;
                font-size: 10px;
                margin-right: 3px;
                content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP571 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP571 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #GROUP579 {
                top: 852.3125px;
                left: -127.66668701171875px;
                width: 563.6666717529297px;
                height: 86.6875px;
            }
            #HEADLINE575 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE575 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #LISTOP574 {
                top: 31.6875px;
                left: 22.666671752929688px;
                width: 542px;
                height: 55px;
            }
            #LISTOP574 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP574 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 20px;
                height: 20px;
                font-size: 10px;
                margin-right: 3px;
                content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP574 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP574 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #GROUP580 {
                top: 957.625px;
                left: -126.00001525878906px;
                width: 562.6666717529297px;
                height: 149.33334350585938px;
            }
            #HEADLINE577 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 200px;
                height: 28px;
            }
            #HEADLINE577 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #LISTOP576 {
                top: 39.333343505859375px;
                left: 21.666671752929688px;
                width: 542px;
                height: 110px;
            }
            #LISTOP576 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP576 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 20px;
                height: 20px;
                font-size: 10px;
                margin-right: 3px;
                content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP576 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP576 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #YOUTUBE582 {
                top: 688.334px;
                left: 483.979px;
                width: 698.3238525390625px;
                height: 418.62213134765625px;
            }
            #GROUP583 {
                top: 309.313px;
                left: -65.6667px;
                width: 507.4583435058594px;
                height: 209.02084350585938px;
            }
            #GROUP188 {
                top: 0px;
                left: 68.9792px;
                width: 438.4791717529297px;
                height: 71px;
            }
            #LINEVERTICAL189 {
                top: 0px;
                left: 1px;
                width: 25px;
                height: 71px;
            }
            #BUTTON190 {
                top: 0px;
                left: 19.479171752929688px;
                padding: 0px;
                width: 420px;
                height: 71px;
            }
            #BUTTON190 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #GROUP196 {
                top: 138.021px;
                left: 0px;
                width: 438.5px;
                height: 71px;
            }
            #LINEVERTICAL197 {
                top: 0px;
                left: 0px;
                width: 25px;
                height: 71px;
            }
            #BUTTON198 {
                top: 0px;
                left: 18.5px;
                padding: 0px;
                width: 420px;
                height: 71px;
            }
            #BUTTON198 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #GROUP584 {
                top: 306.917px;
                left: 513.75px;
                width: 511.5px;
                height: 210px;
            }
            #GROUP199 {
                top: 139px;
                left: 73px;
                width: 438.5px;
                height: 71px;
            }
            #LINEVERTICAL200 {
                top: 0px;
                left: 0px;
                width: 25px;
                height: 71px;
            }
            #BUTTON201 {
                top: 0px;
                left: 18.5px;
                padding: 0px;
                width: 420px;
                height: 71px;
            }
            #BUTTON201 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #GROUP193 {
                top: 0px;
                left: 0px;
                width: 438.5px;
                height: 71px;
            }
            #LINEVERTICAL194 {
                top: 0px;
                left: 0px;
                width: 25px;
                height: 71px;
            }
            #BUTTON195 {
                top: 0px;
                left: 18.5px;
                padding: 0px;
                width: 420px;
                height: 71px;
            }
            #BUTTON195 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #HEADLINE186 {
                top: 2.54262px;
                left: -137.994px;
                padding: 0px;
                width: 767.272705078125px;
                height: 118.18181610107422px;
            }
            #HEADLINE186 > .widget-content {
                font-size: 113px;
                text-align: left;
            }
            #BOX453 {
                top: 110.538px;
                left: 975.329px;
                width: 163.9630584716797px;
                height: 448.5085144042969px;
            }
            #PARAGRAPH456 {
                top: 260.988px;
                left: 1.9726599999999999px;
                padding: 0px;
                width: 161px;
                height: 80px;
            }
            #PARAGRAPH456 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE459 {
                top: 56px;
                left: 0.976563px;
                padding: 0px;
                width: 147px;
                height: 26px;
            }
            #HEADLINE459 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE630 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE630 {
                top: 0px;
                left: 0.984375px;
                width: 162px;
                height: 56px;
            }
            #IMAGE455 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE455 {
                top: 38px;
                left: 1px;
                width: 162px;
                height: 18px;
            }
            #LINE631 {
                top: 70.140625px;
                left: 2.96875px;
                width: 135px;
                height: 25px;
            }
            #BOX601 {
                top: 111.777px;
                left: 788.849px;
                width: 164.44601440429688px;
                height: 447.984375px;
            }
            #IMAGE603 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE603 {
                top: 0px;
                left: 0px;
                width: 162px;
                height: 56px;
            }
            #IMAGE605 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE605 {
                top: 38px;
                left: 0px;
                width: 162px;
                height: 18px;
            }
            #LINE606 {
                top: 75px;
                left: 1px;
                width: 135px;
                height: 25px;
            }
            #IMAGE512 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(http://www.rwth-aachen.de/global/show_picture.asp?mod=w%3D%26h%3D%26gray%3D%26neg%3D%26mirror%3D%26flip%3D%26rleft%3D%26rright%3D%26r180%3D%26crop%3D1%252C14%252C1021%252C587%26id%3Daaaaaaaaaaajjmm&id=aaaaaaaaaaajjmm);
            }
            #IMAGE512 {
                top: 99.984375px;
                left: 0px;
                width: 162px;
                height: 135px;
            }
            #BOX589 {
                top: 110.954px;
                left: 404.461px;
                width: 162px;
                height: 448px;
            }
            #PARAGRAPH590 {
                top: 260px;
                left: 1px;
                padding: 0px;
                width: 160px;
                height: 100px;
            }
            #PARAGRAPH590 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE591 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE591 {
                top: 0px;
                left: 0px;
                width: 162px;
                height: 56px;
            }
            #HEADLINE592 {
                top: 58px;
                left: 1px;
                padding: 0px;
                width: 146.25px;
                height: 25px;
            }
            #HEADLINE592 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE593 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE593 {
                top: 38px;
                left: 0px;
                width: 162px;
                height: 18px;
            }
            #LINE594 {
                top: 78px;
                left: 1px;
                width: 135px;
                height: 25px;
            }
            #BOX558 {
                top: 108.938px;
                left: -159.984px;
                width: 161.9921875px;
                height: 447.98828125px;
            }
            #PARAGRAPH559 {
                top: 261px;
                left: 1px;
                padding: 0px;
                width: 160px;
                height: 80px;
            }
            #PARAGRAPH559 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE560 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE560 {
                top: 0px;
                left: 0px;
                width: 162px;
                height: 56px;
            }
            #HEADLINE561 {
                top: 58px;
                left: 1px;
                padding: 0px;
                width: 146.25px;
                height: 25px;
            }
            #HEADLINE561 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE562 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE562 {
                top: 38px;
                left: 0px;
                width: 162px;
                height: 18px;
            }
            #BOX595 {
                top: 112.492px;
                left: 593.836px;
                width: 161.98863220214844px;
                height: 447.9829406738281px;
            }
            #IMAGE597 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE597 {
                top: 0px;
                left: 0px;
                width: 162px;
                height: 56px;
            }
            #HEADLINE598 {
                top: 58px;
                left: 1px;
                padding: 0px;
                width: 146.25px;
                height: 25px;
            }
            #HEADLINE598 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE599 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE599 {
                top: 38px;
                left: 0px;
                width: 162px;
                height: 18px;
            }
            #LINE600 {
                top: 75px;
                left: 1px;
                width: 135px;
                height: 25px;
            }
            #IMAGE506 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHKUWBwozuABcrtipV8zcK4N3PAjPKCfwy11-VBkPioJIVgUeh);
            }
            #IMAGE506 {
                top: 99.97158813476562px;
                left: 6.04609e-05px;
                width: 161.81817626953125px;
                height: 130.49716186523438px;
            }
            #HEADLINE502 {
                top: 34px;
                left: 306px;
                padding: 0px;
                width: 349px;
                height: 34px;
            }
            #HEADLINE502 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX527 {
                top: 111.305px;
                left: 30.305px;
                width: 161.9921875px;
                height: 447.98828125px;
            }
            #PARAGRAPH528 {
                top: 260px;
                left: 1px;
                padding: 0px;
                width: 161px;
                height: 100px;
            }
            #PARAGRAPH528 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE530 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE530 {
                top: 0px;
                left: 0px;
                width: 162px;
                height: 56px;
            }
            #HEADLINE531 {
                top: 58px;
                left: 1px;
                padding: 0px;
                width: 147px;
                height: 26px;
            }
            #HEADLINE531 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE532 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE532 {
                top: 38px;
                left: 0px;
                width: 162px;
                height: 18px;
            }
            #LINE545 {
                top: 76.9961px;
                left: 0.09765625px;
                width: 135px;
                height: 25px;
            }
            #GROUP610 {
                top: 183.001px;
                left: -161.953px;
                width: 124px;
                height: 25px;
            }
            #LINE609 {
                top: 0px;
                left: 1px;
                width: 124.00390625px;
                height: 25px;
            }
            #BUTTON523 {
                top: 497.977px;
                left: 218.414px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON523 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE524 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(http://study.com/cimages/course-image/clep-financial-accounting-course_129295_large.jpg);
            }
            #IMAGE524 {
                top: 207.891px;
                left: 219.375px;
                width: 161.34765625px;
                height: 135px;
            }
            #BOX546 {
                top: 109.961px;
                left: 218.18px;
                width: 161.34765625px;
                height: 447.98828125px;
            }
            #IMAGE548 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE548 {
                top: 0px;
                left: 0px;
                width: 161.34765625px;
                height: 55.99609375px;
            }
            #HEADLINE549 {
                top: 58px;
                left: 0.996164px;
                padding: 0px;
                width: 145.6640625px;
                height: 25px;
            }
            #HEADLINE549 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE550 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE550 {
                top: 38px;
                left: 0px;
                width: 161.34765625px;
                height: 17.98828125px;
            }
            #LINE551 {
                top: 75px;
                left: 0.996164px;
                width: 134.47265625px;
                height: 25px;
            }
            #IMAGE498 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStjpoMbvNCq3wT8Rb8NvoSug3FDXnKQpqfTI7pR_3Y0nptVLUE);
            }
            #IMAGE498 {
                top: 212.93px;
                left: 403.477px;
                width: 164px;
                height: 135px;
            }
            #BUTTON501 {
                top: 518.938px;
                left: 404.469px;
                padding: 0px;
                width: 162.72726440429688px;
                height: 40px;
            }
            #BUTTON501 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH504 {
                top: 371.008px;
                left: 594.82px;
                padding: 0px;
                width: 161px;
                height: 40px;
            }
            #PARAGRAPH504 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BUTTON505 {
                top: 520.001px;
                left: 593.836px;
                padding: 0px;
                width: 161.81817626953125px;
                height: 40px;
            }
            #BUTTON505 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE479 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://media-exp2.licdn.com/media-proxy/ext?w=800&h=800&hash=08EY%2FhkTsT4qVxKk004MwJpzzaY%3D&ora=1%2CaFBCTXdkRmpGL2lvQUFBPQ%2CxAVta5g-0R6nlh8Tw1It6a2FowGz60oISIfYC2G8G2f1spyfNT-tdoDSeLClpEtOdSoImBJkcrG-GGGiSp61IvGpNJUC49GHbdOmX1cqfgUvgUBV79kqExJh5rDgCvnxPX8LgM9ZSw2eB4HtbGAyGgIbr-CfHLL-C20gnASvVfnXDc0ce6UyxYADy3hgnpzSTMVp2ZlZ3mRe9wi31ZPIOWo_zce-RmiWHUMnX2TGFc9T75WI_Rqkv2-Pzxn4gqKaK5C5JYkg4SC6qsbgQV61hy8xkmM71T9Nv9ImIA);
            }
            #IMAGE479 {
                top: 213.129px;
                left: -159.986px;
                width: 162.96875px;
                height: 131.81817626953125px;
            }
            #BUTTON529 {
                top: 519.247px;
                left: 30.227px;
                padding: 0px;
                width: 161.81817626953125px;
                height: 40px;
            }
            #BUTTON529 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE542 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://assets.entrepreneur.com/content/3x2/1300/20170814221038-GettyImages-645670208.jpeg);
            }
            #IMAGE542 {
                top: 210.511px;
                left: 30.455px;
                width: 162px;
                height: 135px;
            }
            #BUTTON641 {
                top: 516.903px;
                left: -160.014px;
                padding: 0px;
                width: 162.72726440429688px;
                height: 40px;
            }
            #BUTTON641 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BUTTON642 {
                top: 517.931px;
                left: 217.415px;
                padding: 0px;
                width: 161.81817626953125px;
                height: 40px;
            }
            #BUTTON642 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE465 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(http://study.com/cimages/course-image/clep-financial-accounting-course_129295_large.jpg);
            }
            #IMAGE465 {
                top: 207.88351440429688px;
                left: 217.702px;
                width: 162px;
                height: 135px;
            }
            #PARAGRAPH547 {
                top: 370.949px;
                left: 219.159px;
                padding: 0px;
                width: 159.375px;
                height: 100px;
            }
            #PARAGRAPH547 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE437 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStjpoMbvNCq3wT8Rb8NvoSug3FDXnKQpqfTI7pR_3Y0nptVLUE);
            }
            #IMAGE437 {
                top: 208.926px;
                left: 403.446px;
                width: 164px;
                height: 135px;
            }
            #BUTTON457 {
                top: 519.0340881347656px;
                left: 975.307px;
                padding: 0px;
                width: 164.5454559326172px;
                height: 40px;
            }
            #BUTTON457 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE651 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/student-849825_1920-1515227227.jpg);
            }
            #IMAGE651 {
                top: 209.67px;
                left: 975.389px;
                width: 165.46875px;
                height: 134.31817626953125px;
            }
            #PARAGRAPH510 {
                top: 367.898px;
                left: 788.855px;
                padding: 0px;
                width: 161px;
                height: 100px;
            }
            #PARAGRAPH510 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BUTTON511 {
                top: 519.941px;
                left: 787.841px;
                padding: 0px;
                width: 165.4545440673828px;
                height: 40px;
            }
            #BUTTON511 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE513 {
                top: 168.969px;
                left: 790.841px;
                padding: 0px;
                width: 147px;
                height: 26px;
            }
            #HEADLINE513 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #LINE50 {
                top: 122px;
                left: -81px;
                width: 452px;
                height: 25px;
            }
            #LINEVERTICAL47 {
                top: 164px;
                left: 377px;
                width: 25px;
                height: 399px;
            }
            #BOX206 {
                top: 209px;
                left: -28px;
                width: 297px;
                height: 297px;
            }
            #LINEVERTICAL77 {
                top: -18px;
                left: 384px;
                width: 25px;
                height: 112px;
            }
            #HEADLINE618 {
                top: -13.5703px;
                left: 425.996px;
                padding: 0px;
                width: 632.5px;
                height: 82.5px;
            }
            #HEADLINE618 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE45 {
                top: -7.00851px;
                left: -161.747px;
                padding: 0px;
                width: 865.3124389648438px;
                height: 95.45454406738281px;
            }
            #HEADLINE45 > .widget-content {
                font-size: 90px;
                text-align: left;
            }
            #HEADLINE209 {
                top: 283.984px;
                left: 406.894px;
                padding: 0px;
                width: 631px;
                height: 243.75px;
            }
            #HEADLINE209 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #HEADLINE208 {
                top: 240.976px;
                left: 405.898px;
                padding: 0px;
                width: 499px;
                height: 18px;
            }
            #HEADLINE208 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE207 {
                top: 201.992px;
                left: 405.898px;
                padding: 0px;
                width: 499px;
                height: 34px;
            }
            #HEADLINE207 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #PARAGRAPH690 {
                top: 74px;
                left: 168px;
                padding: 0px;
                width: 700px;
                height: 20px;
            }
            #PARAGRAPH690 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE691 {
                top: 27.0313px;
                left: 236px;
                padding: 0px;
                width: 618px;
                height: 34px;
            }
            #HEADLINE691 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP721 {
                top: 391.983px;
                left: -13.2671px;
                width: 789.9715576171875px;
                height: 163.22442626953125px;
            }
            #BOX232 {
                top: 36.0085px;
                left: 5.18466px;
                width: 83.8352279663086px;
                height: 80px;
            }
            #PARAGRAPH715 {
                top: 145.966px;
                left: 23.0114px;
                padding: 0px;
                width: 362.7272644042969px;
                height: 17.27272605895996px;
            }
            #PARAGRAPH715 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LINE714 {
                top: 107.997px;
                left: 113.011px;
                width: 677px;
                height: 25px;
            }
            #PARAGRAPH713 {
                top: 50.9659px;
                left: 113.011px;
                padding: 0px;
                width: 663.6363525390625px;
                height: 36.3636360168457px;
            }
            #PARAGRAPH713 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP706 {
                top: 0px;
                left: 168.878px;
                width: 108.25281715393066px;
                height: 20px;
            }
            #SHAPE707 {
                top: 0px;
                left: 1px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE708 {
                top: 0px;
                left: 22.43463134765625px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE709 {
                top: 0px;
                left: 43.91192626953125px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE710 {
                top: 0px;
                left: 65.36077880859375px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE711 {
                top: 0px;
                left: 87.803955078125px;
                width: 21.453125px;
                height: 20px;
            }
            #PARAGRAPH705 {
                top: 2.01703px;
                left: -2.98578px;
                padding: 0px;
                width: 170.39772033691406px;
                height: 17.27272605895996px;
            }
            #PARAGRAPH705 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP734 {
                top: 169.04827880859375px;
                left: -14.147735595703125px;
                width: 789.9715576171875px;
                height: 169.00567626953125px;
            }
            #GROUP694 {
                top: 0px;
                left: 171.96px;
                width: 85.80964088439941px;
                height: 20px;
            }
            #SHAPE695 {
                top: 0px;
                left: 1px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE696 {
                top: 0px;
                left: 22.4488525390625px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE697 {
                top: 0px;
                left: 43.91192626953125px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE698 {
                top: 2px;
                left: 81.3608px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE720 {
                top: 2.00284px;
                left: 232.713px;
                width: 21.453125px;
                height: 20px;
            }
            #PARAGRAPH703 {
                top: 149.02px;
                left: 3.02557px;
                padding: 0px;
                width: 362.7272644042969px;
                height: 20px;
            }
            #PARAGRAPH703 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LINE702 {
                top: 109.02px;
                left: 113.011px;
                width: 677px;
                height: 25px;
            }
            #PARAGRAPH701 {
                top: 51.9886px;
                left: 113.011px;
                padding: 0px;
                width: 663.6363525390625px;
                height: 36.3636360168457px;
            }
            #PARAGRAPH701 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH693 {
                top: 3.02557px;
                left: 0.0142212px;
                padding: 0px;
                width: 146.36363220214844px;
                height: 17.27272605895996px;
            }
            #PARAGRAPH693 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX220 {
                top: 32.2869px;
                left: 4.26138px;
                width: 84.81533813476562px;
                height: 85.05681610107422px;
            }
            #GROUP735 {
                top: 587.742px;
                left: -13.3523px;
                width: 796.9459838867188px;
                height: 163.21022033691406px;
            }
            #GROUP727 {
                top: 0px;
                left: 176.847px;
                width: 108.25281715393066px;
                height: 20px;
            }
            #SHAPE728 {
                top: 0px;
                left: 1px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE729 {
                top: 0px;
                left: 22.4346px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE730 {
                top: 0px;
                left: 43.9119px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE731 {
                top: 0px;
                left: 65.3608px;
                width: 21.453125px;
                height: 20px;
            }
            #SHAPE732 {
                top: 0px;
                left: 87.804px;
                width: 21.453125px;
                height: 20px;
            }
            #GROUP722 {
                top: 0px;
                left: 0.0141907px;
                width: 796.9601745605469px;
                height: 163.21022605895996px;
            }
            #PARAGRAPH724 {
                top: 145.9375px;
                left: 30.985809326171875px;
                padding: 0px;
                width: 362.7272644042969px;
                height: 17.27272605895996px;
            }
            #PARAGRAPH724 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LINE725 {
                top: 107.96875px;
                left: 120.97158813476562px;
                width: 677px;
                height: 25px;
            }
            #PARAGRAPH726 {
                top: 50.9375px;
                left: 120.97158813476562px;
                padding: 0px;
                width: 663.6363525390625px;
                height: 36.3636360168457px;
            }
            #PARAGRAPH726 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #PARAGRAPH733 {
                top: 1.9886474609375px;
                left: 1px;
                padding: 0px;
                width: 191.2783966064453px;
                height: 17.27272605895996px;
            }
            #PARAGRAPH733 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX244 {
                top: 38.7358px;
                left: 15.2699px;
                width: 84.82954406738281px;
                height: 85.05681610107422px;
            }
            #YOUTUBE736 {
                top: 167.315px;
                left: 842.957px;
                width: 295.8522644042969px;
                height: 170.6392059326172px;
            }
            #YOUTUBE737 {
                top: 368.878px;
                left: 845.341px;
                width: 295.8522644042969px;
                height: 170.6392059326172px;
            }
            #YOUTUBE738 {
                top: 576.037px;
                left: 845.327px;
                width: 295.8522644042969px;
                height: 170.6392059326172px;
            }
            #BOX659 {
                top: 142px;
                left: 575px;
                width: 385px;
                height: 532.9971313476562px;
            }
            #HEADLINE660 {
                top: 28px;
                left: 18px;
                padding: 0px;
                width: 341px;
                height: 50px;
            }
            #HEADLINE660 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #GROUP661 {
                top: 109px;
                left: 40px;
                width: 298px;
                height: 98px;
            }
            #GROUP662 {
                top: 0px;
                left: 1.8125px;
                width: 294.34375px;
                height: 98px;
            }
            #BOX663 {
                top: 28px;
                left: 1px;
                width: 68.453125px;
                height: 70px;
            }
            #HEADLINE664 {
                top: 0px;
                left: 6.25px;
                padding: 0px;
                width: 61.4375px;
                height: 18px;
            }
            #HEADLINE664 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE665 {
                top: 0px;
                left: 81.265625px;
                padding: 0px;
                width: 61.4375px;
                height: 18px;
            }
            #HEADLINE665 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX666 {
                top: 28px;
                left: 76px;
                width: 68.453125px;
                height: 70px;
            }
            #BOX667 {
                top: 28px;
                left: 226.890625px;
                width: 68.453125px;
                height: 70px;
            }
            #HEADLINE668 {
                top: 0px;
                left: 228.171875px;
                padding: 0px;
                width: 61.4375px;
                height: 18px;
            }
            #HEADLINE668 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE669 {
                top: 0px;
                left: 156.171875px;
                padding: 0px;
                width: 61.4375px;
                height: 18px;
            }
            #HEADLINE669 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX670 {
                top: 28px;
                left: 150.875px;
                width: 68.453125px;
                height: 70px;
            }
            #COUNTDOWN671 {
                top: 40px;
                left: 1px;
                width: 298px;
                height: 43px;
            }
            #COUNTDOWN671 > .widget-content {
                font-size: 36px;
            }
            #GROUP672 {
                top: 240.98013305664062px;
                left: 39.8948974609375px;
                width: 300.96588134765625px;
                height: 275.4971580505371px;
            }
            #BUTTON673 {
                top: 226.40625px;
                left: 1px;
                padding: 0px;
                width: 300px;
                height: 49.09090805053711px;
            }
            #BUTTON673 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #FORM674 {
                top: 0px;
                left: 1.96588134765625px;
                width: 300px;
                height: 209.38919067382812px;
            }
            #FORM674 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM675 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 46.140625px;
            }
            #ITEM_FORM675 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM676 {
                top: 58.9268px;
                left: 0px;
                width: 300px;
                height: 46.140625px;
            }
            #ITEM_FORM676 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM677 {
                top: 117.854px;
                left: 0px;
                width: 300px;
                height: 46.140625px;
            }
            #ITEM_FORM677 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM685 {
                top: 173.963px;
                left: 0px;
                width: 300px;
                height: 35.45454406738281px;
            }
            #HEADLINE686 {
                top: 225.554px;
                left: -12.1051px;
                padding: 0px;
                width: 95px;
                height: 29.999998092651367px;
            }
            #HEADLINE686 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE680 {
                top: 187.761px;
                left: -85.0142px;
                padding: 0px;
                width: 440.9090881347656px;
                height: 30.909090042114258px;
            }
            #HEADLINE680 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #PARAGRAPH681 {
                top: 309.31px;
                left: -79.892px;
                padding: 0px;
                width: 417.272705078125px;
                height: 40px;
            }
            #PARAGRAPH681 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE687 {
                top: 220.554px;
                left: 79.892px;
                padding: 0px;
                width: 191.81817626953125px;
                height: 35.45454406738281px;
            }
            #HEADLINE687 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE688 {
                top: 258.554px;
                left: -90.1051px;
                padding: 0px;
                width: 440.9090881347656px;
                height: 35.45454406738281px;
            }
            #HEADLINE688 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #PARAGRAPH335 {
                top: 620.418px;
                left: -161.25px;
                padding: 0px;
                width: 620.9090576171875px;
                height: 51.818180084228516px;
            }
            #PARAGRAPH335 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE354 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/logo-1515293868.png);
            }
            #IMAGE354 {
                top: 30px;
                left: -40.3182px;
                width: 177.58334350585938px;
                height: 49px;
            }
            #LINE355 {
                top: 206px;
                left: -1px;
                width: 959px;
                height: 25px;
            }
            #GROUP367 {
                top: 100px;
                left: -36.9063px;
                width: 226px;
                height: 88px;
            }
            #HEADLINE368 {
                top: 0px;
                left: 2px;
                padding: 0px;
                width: 220px;
                height: 20px;
            }
            #HEADLINE368 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #HEADLINE369 {
                top: 37px;
                left: 1px;
                padding: 0px;
                width: 225.33334350585938px;
                height: 48px;
            }
            #HEADLINE369 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE358 {
                top: 98.798px;
                left: 713.5px;
                padding: 0px;
                width: 351.81817626953125px;
                height: 59.999996185302734px;
            }
            #HEADLINE358 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
            #BOX177 {
                top: 0px;
                left: -0.5px;
                width: 444px;
                height: 101px;
            }
            #HEADLINE178 {
                top: 35px;
                left: 45px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE178 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH179 {
                top: 134px;
                left: 50.5px;
                padding: 0px;
                width: 359px;
                height: 264px;
            }
            #PARAGRAPH179 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX173 {
                top: 0px;
                left: -0.5px;
                width: 444px;
                height: 101px;
            }
            #HEADLINE174 {
                top: 35px;
                left: 45px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE174 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH175 {
                top: 134px;
                left: 50.5px;
                padding: 0px;
                width: 359px;
                height: 330px;
            }
            #PARAGRAPH175 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX169 {
                top: 0px;
                left: -0.5px;
                width: 444px;
                height: 101px;
            }
            #HEADLINE170 {
                top: 35px;
                left: 45px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE170 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH171 {
                top: 134px;
                left: 50.5px;
                padding: 0px;
                width: 359px;
                height: 286px;
            }
            #PARAGRAPH171 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX165 {
                top: 0px;
                left: -0.5px;
                width: 444px;
                height: 101px;
            }
            #HEADLINE166 {
                top: 35px;
                left: 45px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE166 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH167 {
                top: 134px;
                left: 50.5px;
                padding: 0px;
                width: 359px;
                height: 264px;
            }
            #PARAGRAPH167 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX161 {
                top: 0px;
                left: -0.5px;
                width: 444px;
                height: 101px;
            }
            #HEADLINE162 {
                top: 35px;
                left: 45px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE162 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH163 {
                top: 134px;
                left: 50.5px;
                padding: 0px;
                width: 359px;
                height: 264px;
            }
            #PARAGRAPH163 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX157 {
                top: 0px;
                left: -0.5px;
                width: 444px;
                height: 101px;
            }
            #HEADLINE158 {
                top: 35px;
                left: 45px;
                padding: 0px;
                width: 386.3636169433594px;
                height: 29.999998092651367px;
            }
            #HEADLINE158 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH159 {
                top: 134px;
                left: 50.5px;
                padding: 0px;
                width: 359px;
                height: 308px;
            }
            #PARAGRAPH159 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX153 {
                top: 0px;
                left: -0.5px;
                width: 444px;
                height: 101px;
            }
            #HEADLINE154 {
                top: 35px;
                left: 10px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE154 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH155 {
                top: 121px;
                left: 47.5px;
                padding: 0px;
                width: 359px;
                height: 374px;
            }
            #PARAGRAPH155 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
        }
        
        #SECTION23 {
            display: block;
            background-image: url("https://assets.entrepreneur.com/content/3x2/1300/20170814221038-GettyImages-645670208.jpeg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: 100% auto;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION23 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.65);
        }
        
        #SECTION184 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION495 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x900/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
            background-color: rgba(28, 28, 28, 0.77);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION495 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.76);
        }
        
        #SECTION42 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION689 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x1000/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION689 > .ladi-widget-overlay {
            background-color: rgba(31, 31, 31, 0.89);
        }
        
        #SECTION658 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x900/uploads/images/5a8563a5-5f68-4470-b806-42ec62e2cac6.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION658 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION353 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x400/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION353 > .ladi-widget-overlay {
            background-color: rgba(4, 22, 43, 0.95);
        }
        
        #POPUP176 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/01.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP176 > .container .overlay-container-popup {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #POPUP172 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/01.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP172 > .container .overlay-container-popup {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #POPUP168 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/01.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP168 > .container .overlay-container-popup {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #POPUP164 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/01.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP164 > .container .overlay-container-popup {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #POPUP160 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/01.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP160 > .container .overlay-container-popup {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #POPUP156 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/01.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP156 > .container .overlay-container-popup {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #POPUP152 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/01.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP152 > .container .overlay-container-popup {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #IMAGE28 {
            display: block;
        }
        
        #IMAGE28 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE28 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE29 {
            display: block;
        }
        
        #HEADLINE29 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 31px;
        }
        
        #HEADLINE30 {
            display: block;
        }
        
        #HEADLINE30 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 31px;
        }
        
        #BUTTON31 {
            display: table;
        }
        
        #BUTTON31 > .widget-content {
            background-color: rgba(15, 91, 152, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BUTTON31> .widget-content {
            border-radius: 30px;
        }
        
        #BUTTON31> .ladi-widget-overlay {
            border-radius: 30px;
        }
        
        #SHAPE33 {
            display: block;
        }
        
        #SHAPE33 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE33> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #LINE37 {
            display: block;
        }
        
        #LINE37>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 10.5px;
        }
        
        #LINE37 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE38 {
            display: block;
        }
        
        #LINE38>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 10.5px;
        }
        
        #LINE38 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE27 {
            display: block;
        }
        
        #HEADLINE27 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 46px;
        }
        
        #HEADLINE568 {
            display: block;
        }
        
        #HEADLINE568 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #IMAGE644 {
            display: block;
        }
        
        #IMAGE644 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE644 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #IMAGE645 {
            display: block;
        }
        
        #IMAGE645 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE645 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #IMAGE24 {
            display: block;
        }
        
        #IMAGE24 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE24 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #IMAGE648 {
            display: block;
        }
        
        #IMAGE648 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE648 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX185 {
            display: block;
        }
        
        #BOX185 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE187 {
            -webkit-animation-delay: 1.1s;
            animation-delay: 1.1s;
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            display: block;
        }
        
        #LINE187>.widget-content .line {
            border-top-width: 5px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(86, 147, 244, 1);
            margin-top: 7.5px;
        }
        
        #LINE187 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE192 {
            -webkit-animation-delay: 1.7s;
            animation-delay: 1.7s;
            display: block;
        }
        
        #HEADLINE192 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(86, 147, 244, 1);
            font-weight: 700;
            line-height: 30px;
        }
        
        #LINEVERTICAL202 {
            -webkit-animation-delay: 1.1s;
            animation-delay: 1.1s;
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            display: block;
        }
        
        #LINEVERTICAL202>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 5px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(86, 147, 244, 1);
            margin-left: 7.5px;
        }
        
        #LINEVERTICAL202 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL203 {
            -webkit-animation-delay: 1.1s;
            animation-delay: 1.1s;
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            display: block;
        }
        
        #LINEVERTICAL203>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 5px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(86, 147, 244, 1);
            margin-left: 7.5px;
        }
        
        #LINEVERTICAL203 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE566 {
            display: block;
        }
        
        #HEADLINE566 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 31px;
            letter-spacing: 2px;
        }
        
        #HEADLINE567 {
            display: block;
        }
        
        #HEADLINE567 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 34px;
        }
        
        #HEADLINE569 {
            display: block;
        }
        
        #HEADLINE569 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 76px;
        }
        
        #HEADLINE570 {
            display: block;
        }
        
        #HEADLINE570 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 41px;
            letter-spacing: 0px;
        }
        
        #GROUP578 {
            display: block;
        }
        
        #GROUP578 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE573 {
            display: block;
        }
        
        #HEADLINE573 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #LISTOP571 {
            display: block;
        }
        
        #LISTOP571 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 21px;
        }
        
        #GROUP579 {
            display: block;
        }
        
        #GROUP579 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE575 {
            display: block;
        }
        
        #HEADLINE575 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #LISTOP574 {
            display: block;
        }
        
        #LISTOP574 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 21px;
        }
        
        #GROUP580 {
            display: block;
        }
        
        #GROUP580 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE577 {
            display: block;
        }
        
        #HEADLINE577 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #LISTOP576 {
            display: block;
        }
        
        #LISTOP576 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 21px;
        }
        
        #YOUTUBE582 {
            display: block;
        }
        
        #YOUTUBE582 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP583 {
            display: block;
        }
        
        #GROUP583 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP188 {
            -webkit-animation-delay: 1.1s;
            animation-delay: 1.1s;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            display: block;
        }
        
        #GROUP188 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL189 {
            display: block;
        }
        
        #LINEVERTICAL189>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 5px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(61, 155, 233, 1);
            margin-left: 7.5px;
        }
        
        #LINEVERTICAL189 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON190 {
            display: table;
        }
        
        #BUTTON190 > .widget-content {
            background-color: rgba(61, 155, 233, 1);
            color: #ffffff;
            font-weight: 600;
            line-height: 31px;
        }
        
        #BUTTON190> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON190> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #GROUP196 {
            -webkit-animation-delay: 1.2s;
            animation-delay: 1.2s;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            display: block;
        }
        
        #GROUP196 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL197 {
            display: block;
        }
        
        #LINEVERTICAL197>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 5px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(61, 155, 233, 1);
            margin-left: 7.5px;
        }
        
        #LINEVERTICAL197 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON198 {
            display: table;
        }
        
        #BUTTON198 > .widget-content {
            background-color: rgba(61, 155, 233, 1);
            color: #ffffff;
            font-weight: 600;
            line-height: 31px;
        }
        
        #BUTTON198> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON198> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #GROUP584 {
            display: block;
        }
        
        #GROUP584 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP199 {
            -webkit-animation-delay: 1.3s;
            animation-delay: 1.3s;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            display: block;
        }
        
        #GROUP199 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL200 {
            display: block;
        }
        
        #LINEVERTICAL200>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 5px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(61, 155, 233, 1);
            margin-left: 7.5px;
        }
        
        #LINEVERTICAL200 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON201 {
            display: table;
        }
        
        #BUTTON201 > .widget-content {
            background-color: rgba(61, 155, 233, 1);
            color: #ffffff;
            font-weight: 600;
            line-height: 31px;
        }
        
        #BUTTON201> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON201> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #GROUP193 {
            -webkit-animation-delay: 1.1s;
            animation-delay: 1.1s;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            display: block;
        }
        
        #GROUP193 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL194 {
            display: block;
        }
        
        #LINEVERTICAL194>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 5px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(61, 155, 233, 1);
            margin-left: 7.5px;
        }
        
        #LINEVERTICAL194 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON195 {
            display: table;
        }
        
        #BUTTON195 > .widget-content {
            background-color: rgba(61, 155, 233, 1);
            color: #ffffff;
            font-weight: 600;
            line-height: 31px;
        }
        
        #BUTTON195> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON195> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #HEADLINE186 {
            display: block;
        }
        
        #HEADLINE186 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(86, 147, 244, 1);
            font-weight: 300;
            line-height: 119px;
        }
        
        #BOX453 {
            -webkit-animation-duration: 1.6s;
            animation-duration: 1.6s;
            display: block;
        }
        
        #BOX453 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 8px rgba(255, 255, 255, 1);
        }
        
        #PARAGRAPH456 {
            display: block;
        }
        
        #PARAGRAPH456 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #HEADLINE459 {
            display: block;
        }
        
        #HEADLINE459 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(3, 169, 244, 1);
            font-weight: 700;
            line-height: 26px;
            letter-spacing: 0px;
        }
        
        #IMAGE630 {
            display: block;
        }
        
        #IMAGE630 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE630 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #IMAGE455 {
            display: block;
        }
        
        #IMAGE455 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE455 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #LINE631 {
            display: block;
        }
        
        #LINE631>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(3, 169, 244, 1);
            margin-top: 9.5px;
        }
        
        #LINE631 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX601 {
            -webkit-animation-duration: 1.1s;
            animation-duration: 1.1s;
            display: block;
        }
        
        #BOX601 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 8px rgba(255, 255, 255, 1);
        }
        
        #IMAGE603 {
            display: block;
        }
        
        #IMAGE603 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE603 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #IMAGE605 {
            display: block;
        }
        
        #IMAGE605 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE605 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #LINE606 {
            display: block;
        }
        
        #LINE606>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(3, 169, 244, 1);
            margin-top: 9.5px;
        }
        
        #LINE606 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE512 {
            display: block;
        }
        
        #IMAGE512 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE512 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX589 {
            -webkit-animation-duration: 1.1s;
            animation-duration: 1.1s;
            display: block;
        }
        
        #BOX589 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 8px rgba(255, 255, 255, 1);
        }
        
        #PARAGRAPH590 {
            display: block;
        }
        
        #PARAGRAPH590 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #IMAGE591 {
            display: block;
        }
        
        #IMAGE591 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE591 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE592 {
            display: block;
        }
        
        #HEADLINE592 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(3, 169, 244, 1);
            font-weight: 700;
            line-height: 26px;
            letter-spacing: 0px;
        }
        
        #IMAGE593 {
            display: block;
        }
        
        #IMAGE593 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE593 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #LINE594 {
            display: block;
        }
        
        #LINE594>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(3, 169, 244, 1);
            margin-top: 9.5px;
        }
        
        #LINE594 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX558 {
            -webkit-animation-duration: 1.1s;
            animation-duration: 1.1s;
            display: block;
        }
        
        #BOX558 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 8px rgba(255, 255, 255, 1);
        }
        
        #PARAGRAPH559 {
            display: block;
        }
        
        #PARAGRAPH559 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(30, 32, 33, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #IMAGE560 {
            display: block;
        }
        
        #IMAGE560 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE560 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE561 {
            display: block;
        }
        
        #HEADLINE561 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(3, 169, 244, 1);
            font-weight: 700;
            line-height: 26px;
            letter-spacing: 0px;
        }
        
        #IMAGE562 {
            display: block;
        }
        
        #IMAGE562 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE562 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX595 {
            -webkit-animation-duration: 1.1s;
            animation-duration: 1.1s;
            display: block;
        }
        
        #BOX595 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 8px rgba(255, 255, 255, 1);
        }
        
        #IMAGE597 {
            display: block;
        }
        
        #IMAGE597 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE597 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE598 {
            display: block;
        }
        
        #HEADLINE598 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(3, 169, 244, 1);
            font-weight: 700;
            line-height: 26px;
            letter-spacing: 0px;
        }
        
        #IMAGE599 {
            display: block;
        }
        
        #IMAGE599 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE599 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #LINE600 {
            display: block;
        }
        
        #LINE600>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(3, 169, 244, 1);
            margin-top: 9.5px;
        }
        
        #LINE600 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE506 {
            display: block;
        }
        
        #IMAGE506 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE506 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE502 {
            display: block;
        }
        
        #HEADLINE502 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 34px;
        }
        
        #BOX527 {
            -webkit-animation-duration: 1.1s;
            animation-duration: 1.1s;
            display: block;
        }
        
        #BOX527 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 8px rgba(255, 255, 255, 1);
        }
        
        #PARAGRAPH528 {
            display: block;
        }
        
        #PARAGRAPH528 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #IMAGE530 {
            display: block;
        }
        
        #IMAGE530 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE530 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE531 {
            display: block;
        }
        
        #HEADLINE531 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(3, 169, 244, 1);
            font-weight: 700;
            line-height: 26px;
            letter-spacing: 0px;
        }
        
        #IMAGE532 {
            display: block;
        }
        
        #IMAGE532 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE532 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #LINE545 {
            display: block;
        }
        
        #LINE545>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(3, 169, 244, 1);
            margin-top: 9.5px;
        }
        
        #LINE545 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP610 {
            display: block;
        }
        
        #GROUP610 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE609 {
            display: block;
        }
        
        #LINE609>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(33, 150, 243, 1);
            margin-top: 10.5px;
        }
        
        #LINE609 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON523 {
            display: table;
        }
        
        #BUTTON523 > .widget-content {
            background-color: rgba(33, 150, 243, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BUTTON523> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON523> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #IMAGE524 {
            display: block;
        }
        
        #IMAGE524 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE524 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BOX546 {
            -webkit-animation-duration: 1.1s;
            animation-duration: 1.1s;
            display: block;
        }
        
        #BOX546 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 0px 8px rgba(255, 255, 255, 1);
        }
        
        #IMAGE548 {
            display: block;
        }
        
        #IMAGE548 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE548 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE549 {
            display: block;
        }
        
        #HEADLINE549 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(3, 169, 244, 1);
            font-weight: 700;
            line-height: 26px;
            letter-spacing: 0px;
        }
        
        #IMAGE550 {
            display: block;
        }
        
        #IMAGE550 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE550 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #LINE551 {
            display: block;
        }
        
        #LINE551>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(3, 169, 244, 1);
            margin-top: 9.5px;
        }
        
        #LINE551 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE498 {
            display: block;
        }
        
        #IMAGE498 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE498 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BUTTON501 {
            display: table;
        }
        
        #BUTTON501 > .widget-content {
            background-color: rgba(33, 150, 243, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BUTTON501> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON501> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #PARAGRAPH504 {
            display: block;
        }
        
        #PARAGRAPH504 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BUTTON505 {
            display: table;
        }
        
        #BUTTON505 > .widget-content {
            background-color: rgba(33, 150, 243, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BUTTON505> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON505> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #IMAGE479 {
            display: block;
        }
        
        #IMAGE479 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE479 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BUTTON529 {
            display: table;
        }
        
        #BUTTON529 > .widget-content {
            background-color: rgba(33, 150, 243, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BUTTON529> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON529> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #IMAGE542 {
            display: block;
        }
        
        #IMAGE542 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE542 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BUTTON641 {
            display: table;
        }
        
        #BUTTON641 > .widget-content {
            background-color: rgba(33, 150, 243, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BUTTON641> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON641> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #BUTTON642 {
            display: table;
        }
        
        #BUTTON642 > .widget-content {
            background-color: rgba(33, 150, 243, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BUTTON642> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON642> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #IMAGE465 {
            display: block;
        }
        
        #IMAGE465 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE465 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #PARAGRAPH547 {
            display: block;
        }
        
        #PARAGRAPH547 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #IMAGE437 {
            display: block;
        }
        
        #IMAGE437 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE437 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #BUTTON457 {
            display: table;
        }
        
        #BUTTON457 > .widget-content {
            background-color: rgba(33, 150, 243, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BUTTON457> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON457> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #IMAGE651 {
            display: block;
        }
        
        #IMAGE651 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE651 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #PARAGRAPH510 {
            display: block;
        }
        
        #PARAGRAPH510 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BUTTON511 {
            display: table;
        }
        
        #BUTTON511 > .widget-content {
            background-color: rgba(33, 150, 243, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 22px;
        }
        
        #BUTTON511> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON511> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #HEADLINE513 {
            display: block;
        }
        
        #HEADLINE513 > .widget-content {
            font-family: 'Roboto Slab', serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(3, 169, 244, 1);
            font-weight: 700;
            line-height: 26px;
            letter-spacing: 0px;
        }
        
        #LINE50 {
            -webkit-animation-delay: 1.1s;
            animation-delay: 1.1s;
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            display: block;
        }
        
        #LINE50>.widget-content .line {
            border-top-width: 5px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(86, 147, 244, 1);
            margin-top: 7.5px;
        }
        
        #LINE50 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL47 {
            -webkit-animation-delay: 1.1s;
            animation-delay: 1.1s;
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            display: block;
        }
        
        #LINEVERTICAL47>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 5px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(86, 147, 244, 1);
            margin-left: 7.5px;
        }
        
        #LINEVERTICAL47 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX206 {
            display: block;
        }
        
        #BOX206 > .widget-content {
            background-image: url("https://lakita.vn/public/kt110/img/hqt.png");
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
        
        #BOX206> .widget-content {
            border-radius: 220px;
            border-width: 5px;
            border-style: solid;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX206> .ladi-widget-overlay {
            border-radius: 220px;
            border-width: 5px;
            border-style: solid;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX206 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #LINEVERTICAL77 {
            -webkit-animation-delay: 1.1s;
            animation-delay: 1.1s;
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
            display: block;
        }
        
        #LINEVERTICAL77>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 5px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(86, 147, 244, 1);
            margin-left: 7.5px;
        }
        
        #LINEVERTICAL77 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE618 {
            display: block;
        }
        
        #HEADLINE618 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 42px;
        }
        
        #HEADLINE45 {
            display: block;
        }
        
        #HEADLINE45 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(86, 147, 244, 1);
            font-weight: 300;
            line-height: 96px;
        }
        
        #HEADLINE209 {
            display: block;
        }
        
        #HEADLINE209 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(71, 71, 71, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #HEADLINE208 {
            display: block;
        }
        
        #HEADLINE208 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(171, 171, 171, 1);
            font-weight: 400;
            line-height: 18px;
        }
        
        #HEADLINE207 {
            display: block;
        }
        
        #HEADLINE207 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 150, 243, 1);
            font-weight: 700;
            line-height: 34px;
        }
        
        #PARAGRAPH690 {
            display: block;
        }
        
        #PARAGRAPH690 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 300;
            line-height: 20px;
        }
        
        #HEADLINE691 {
            display: block;
        }
        
        #HEADLINE691 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 34px;
        }
        
        #GROUP721 {
            display: block;
        }
        
        #GROUP721 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX232 {
            display: block;
        }
        
        #BOX232 > .widget-content {
            background-image: url("https://lakita.vn/public/kt110/img/camnhan2.png");
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
        
        #BOX232> .widget-content {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX232> .ladi-widget-overlay {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX232 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #PARAGRAPH715 {
            display: block;
        }
        
        #PARAGRAPH715 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #LINE714 {
            display: block;
        }
        
        #LINE714>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.16);
            margin-top: 12px;
        }
        
        #LINE714 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH713 {
            display: block;
        }
        
        #PARAGRAPH713 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #GROUP706 {
            display: block;
        }
        
        #GROUP706 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE707 {
            display: block;
        }
        
        #SHAPE707 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE707> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE708 {
            display: block;
        }
        
        #SHAPE708 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE708> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE709 {
            display: block;
        }
        
        #SHAPE709 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE709> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE710 {
            display: block;
        }
        
        #SHAPE710 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE710> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE711 {
            display: block;
        }
        
        #SHAPE711 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE711> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #PARAGRAPH705 {
            display: block;
        }
        
        #PARAGRAPH705 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #GROUP734 {
            display: block;
        }
        
        #GROUP734 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP694 {
            display: block;
        }
        
        #GROUP694 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE695 {
            display: block;
        }
        
        #SHAPE695 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE695> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE696 {
            display: block;
        }
        
        #SHAPE696 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE696> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE697 {
            display: block;
        }
        
        #SHAPE697 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE697> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE698 {
            display: block;
        }
        
        #SHAPE698 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE698> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE720 {
            display: block;
        }
        
        #SHAPE720 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE720> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #PARAGRAPH703 {
            display: block;
        }
        
        #PARAGRAPH703 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #LINE702 {
            display: block;
        }
        
        #LINE702>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.16);
            margin-top: 12px;
        }
        
        #LINE702 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH701 {
            display: block;
        }
        
        #PARAGRAPH701 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #PARAGRAPH693 {
            display: block;
        }
        
        #PARAGRAPH693 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #BOX220 {
            display: block;
        }
        
        #BOX220 > .widget-content {
            background-image: url("https://lakita.vn/public/kt110/img/camnhan1.png");
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
        
        #BOX220> .widget-content {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX220> .ladi-widget-overlay {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX220 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP735 {
            display: block;
        }
        
        #GROUP735 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP727 {
            display: block;
        }
        
        #GROUP727 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE728 {
            display: block;
        }
        
        #SHAPE728 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE728> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE729 {
            display: block;
        }
        
        #SHAPE729 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE729> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE730 {
            display: block;
        }
        
        #SHAPE730 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE730> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE731 {
            display: block;
        }
        
        #SHAPE731 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 199, 0, 1);
        }
        
        #SHAPE731> .widget-content svg {
            fill: rgba(255, 199, 0, 1);
        }
        
        #SHAPE732 {
            display: block;
        }
        
        #SHAPE732 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #SHAPE732> .widget-content svg {
            fill: rgba(255, 255, 255, 1);
        }
        
        #GROUP722 {
            display: block;
        }
        
        #GROUP722 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH724 {
            display: block;
        }
        
        #PARAGRAPH724 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #LINE725 {
            display: block;
        }
        
        #LINE725>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.16);
            margin-top: 12px;
        }
        
        #LINE725 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH726 {
            display: block;
        }
        
        #PARAGRAPH726 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #PARAGRAPH733 {
            display: block;
        }
        
        #PARAGRAPH733 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #BOX244 {
            display: block;
        }
        
        #BOX244 > .widget-content {
            background-image: url("https://lakita.vn/public/kt110/img/camnhan3.png");
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
        
        #BOX244> .widget-content {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX244> .ladi-widget-overlay {
            border-radius: 110px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX244 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #YOUTUBE736 {
            display: block;
        }
        
        #YOUTUBE736 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #YOUTUBE737 {
            display: block;
        }
        
        #YOUTUBE737 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #YOUTUBE738 {
            display: block;
        }
        
        #YOUTUBE738 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX659 {
            display: block;
        }
        
        #BOX659 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX659> .widget-content {
            border-radius: 5px;
        }
        
        #BOX659> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #HEADLINE660 {
            display: block;
        }
        
        #HEADLINE660 > .widget-content {
            color: rgba(38, 38, 38, 1);
            font-weight: 700;
            line-height: 25px;
        }
        
        #GROUP661 {
            display: block;
        }
        
        #GROUP661 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP662 {
            display: block;
        }
        
        #GROUP662 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX663 {
            display: block;
        }
        
        #BOX663 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX663> .widget-content {
            border-radius: 6px;
        }
        
        #BOX663> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #HEADLINE664 {
            display: block;
        }
        
        #HEADLINE664 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #HEADLINE665 {
            display: block;
        }
        
        #HEADLINE665 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #BOX666 {
            display: block;
        }
        
        #BOX666 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX666> .widget-content {
            border-radius: 6px;
        }
        
        #BOX666> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #BOX667 {
            display: block;
        }
        
        #BOX667 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX667> .widget-content {
            border-radius: 6px;
        }
        
        #BOX667> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #HEADLINE668 {
            display: block;
        }
        
        #HEADLINE668 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #HEADLINE669 {
            display: block;
        }
        
        #HEADLINE669 > .widget-content {
            color: rgba(64, 64, 64, 1);
            font-weight: 700;
            line-height: 18px;
        }
        
        #BOX670 {
            display: block;
        }
        
        #BOX670 > .widget-content {
            background-color: rgba(20, 20, 20, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX670> .widget-content {
            border-radius: 6px;
        }
        
        #BOX670> .ladi-widget-overlay {
            border-radius: 6px;
        }
        
        #COUNTDOWN671 {
            display: block;
        }
        
        #COUNTDOWN671 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 0px;
        }
        
        #GROUP672 {
            display: block;
        }
        
        #GROUP672 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON673 {
            display: table;
        }
        
        #BUTTON673 > .widget-content {
            background-color: #4db90a;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 26px;
        }
        
        #BUTTON673> .widget-content {
            border-radius: 2px;
        }
        
        #BUTTON673> .ladi-widget-overlay {
            border-radius: 2px;
        }
        
        #FORM674 {
            display: block;
        }
        
        #FORM674 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM674 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM674 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM674 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM674 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM675 {
            display: block;
        }
        
        #ITEM_FORM675 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM675> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM675> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM675 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM675 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM675 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM675 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM676 {
            display: block;
        }
        
        #ITEM_FORM676 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM676> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM676> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM676 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM676 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM676 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM676 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM677 {
            display: block;
        }
        
        #ITEM_FORM677 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #ITEM_FORM677> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM677> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM677 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM677 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM677 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM677 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM685 {
            display: block;
        }
        
        #ITEM_FORM685 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM685> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM685> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM685 .widget-content::-webkit-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM685 .widget-content:-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM685 .widget-content::-moz-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM685 .widget-content:-ms-input-placeholder {
            color: rgba(130, 130, 130, 1)
        }
        
        #HEADLINE686 {
            display: block;
        }
        
        #HEADLINE686 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(222, 255, 0, 1);
            font-weight: 700;
            line-height: 30px;
        }
        
        #HEADLINE680 {
            display: block;
        }
        
        #HEADLINE680 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            text-decoration: line-through;
            -webkit-text-decoration-line: line-through;
            line-height: 31px;
        }
        
        #PARAGRAPH681 {
            display: block;
        }
        
        #PARAGRAPH681 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #HEADLINE687 {
            display: block;
        }
        
        #HEADLINE687 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(222, 255, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #HEADLINE688 {
            display: block;
        }
        
        #HEADLINE688 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 36px;
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
            font-weight: 300;
            line-height: 18px;
        }
        
        #IMAGE354 {
            display: block;
        }
        
        #IMAGE354 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE354 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #LINE355 {
            display: block;
        }
        
        #LINE355>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 0.09);
            margin-top: 12px;
        }
        
        #LINE355 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP367 {
            display: block;
        }
        
        #GROUP367 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE368 {
            display: block;
        }
        
        #HEADLINE368 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #HEADLINE369 {
            display: block;
        }
        
        #HEADLINE369 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 17px;
        }
        
        #HEADLINE358 {
            display: block;
        }
        
        #HEADLINE358 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 20px;
        }
        
        #BOX177 {
            display: block;
        }
        
        #BOX177 > .widget-content {
            background-color: rgba(15, 94, 186, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE178 {
            display: block;
        }
        
        #HEADLINE178 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #PARAGRAPH179 {
            display: block;
        }
        
        #PARAGRAPH179 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX173 {
            display: block;
        }
        
        #BOX173 > .widget-content {
            background-color: rgba(15, 94, 186, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE174 {
            display: block;
        }
        
        #HEADLINE174 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #PARAGRAPH175 {
            display: block;
        }
        
        #PARAGRAPH175 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX169 {
            display: block;
        }
        
        #BOX169 > .widget-content {
            background-color: rgba(15, 94, 186, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE170 {
            display: block;
        }
        
        #HEADLINE170 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #PARAGRAPH171 {
            display: block;
        }
        
        #PARAGRAPH171 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX165 {
            display: block;
        }
        
        #BOX165 > .widget-content {
            background-color: rgba(15, 94, 186, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE166 {
            display: block;
        }
        
        #HEADLINE166 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #PARAGRAPH167 {
            display: block;
        }
        
        #PARAGRAPH167 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX161 {
            display: block;
        }
        
        #BOX161 > .widget-content {
            background-color: rgba(15, 94, 186, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE162 {
            display: block;
        }
        
        #HEADLINE162 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #PARAGRAPH163 {
            display: block;
        }
        
        #PARAGRAPH163 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX157 {
            display: block;
        }
        
        #BOX157 > .widget-content {
            background-color: rgba(15, 94, 186, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE158 {
            display: block;
        }
        
        #HEADLINE158 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #PARAGRAPH159 {
            display: block;
        }
        
        #PARAGRAPH159 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        #BOX153 {
            display: block;
        }
        
        #BOX153 > .widget-content {
            background-color: rgba(15, 94, 186, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE154 {
            display: block;
        }
        
        #HEADLINE154 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #PARAGRAPH155 {
            display: block;
        }
        
        #PARAGRAPH155 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 22px;
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION23 {
                display: block;
                background-image: url("https://assets.entrepreneur.com/content/3x2/1300/20170814221038-GettyImages-645670208.jpeg");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION23 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0.65);
            }
            #SECTION23 {
                width: 100%;
                height: 244.65908813476562px;
            }
            #SECTION23 .container {}
            #SECTION23 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("https://assets.entrepreneur.com/content/3x2/1300/20170814221038-GettyImages-645670208.jpeg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("https://assets.entrepreneur.com/content/3x2/1300/20170814221038-GettyImages-645670208.jpeg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("https://assets.entrepreneur.com/content/3x2/1300/20170814221038-GettyImages-645670208.jpeg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("https://assets.entrepreneur.com/content/3x2/1300/20170814221038-GettyImages-645670208.jpeg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("https://assets.entrepreneur.com/content/3x2/1300/20170814221038-GettyImages-645670208.jpeg");
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION184 {
                display: block;
                background-color: rgba(255, 255, 255, 1);
            }
            #SECTION184 {
                width: 100%;
                height: 2059.26123046875px;
            }
            #SECTION184 .container {}
            #SECTION184 {
                background-image: none;
            }
            #SECTION495 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x1500/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-color: rgba(28, 28, 28, 0.77);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION495 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0.76);
            }
            #SECTION495 {
                width: 100%;
                height: 1363.7925415039062px;
            }
            #SECTION495 .container {}
            #SECTION495 {
                background-image: linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)), url("https://static.ladipage.net/s500x1500/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-image: -o-linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)), url("https://static.ladipage.net/s500x1500/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)), url("https://static.ladipage.net/s500x1500/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)), url("https://static.ladipage.net/s500x1500/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.76), rgba(0, 0, 0, 0.76)), url("https://static.ladipage.net/s500x1500/uploads/images/95529413-e08a-45c9-b555-f8e52cffecc7.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION42 {
                display: block;
                background-color: rgba(255, 255, 255, 1);
            }
            #SECTION42 {
                width: 100%;
                height: 1067.6988525390625px;
            }
            #SECTION42 .container {}
            #SECTION42 {
                background-image: none;
            }
            #SECTION689 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x1300/uploads/images/8c30618e-ec4f-4c39-931d-36ac6757e672.jpg");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION689 > .ladi-widget-overlay {
                background-color: rgba(31, 31, 31, 0.89);
            }
            #SECTION689 {
                width: 100%;
                height: 1144.6448974609375px;
            }
            #SECTION689 .container {}
            #SECTION689 {
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
            #SECTION658 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x1000/uploads/images/5a8563a5-5f68-4470-b806-42ec62e2cac6.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION658 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }
            #SECTION658 {
                width: 100%;
                height: 857.5283813476562px;
            }
            #SECTION658 .container {}
            #SECTION658 {
                background-image: url("https://static.ladipage.net/s500x1000/uploads/images/5a8563a5-5f68-4470-b806-42ec62e2cac6.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION353 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x400/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION353 > .ladi-widget-overlay {
                background-color: rgba(4, 22, 43, 0.95);
            }
            #SECTION353 {
                width: 100%;
                height: 275.9659118652344px;
            }
            #SECTION353 .container {}
            #SECTION353 {
                background-image: linear-gradient(rgba(4, 22, 43, 0.95), rgba(4, 22, 43, 0.95)), url("https://static.ladipage.net/s500x400/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-image: -o-linear-gradient(rgba(4, 22, 43, 0.95), rgba(4, 22, 43, 0.95)), url("https://static.ladipage.net/s500x400/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-image: -ms-linear-gradient(rgba(4, 22, 43, 0.95), rgba(4, 22, 43, 0.95)), url("https://static.ladipage.net/s500x400/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-image: -moz-linear-gradient(rgba(4, 22, 43, 0.95), rgba(4, 22, 43, 0.95)), url("https://static.ladipage.net/s500x400/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-image: -webkit-linear-gradient(rgba(4, 22, 43, 0.95), rgba(4, 22, 43, 0.95)), url("https://static.ladipage.net/s500x400/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #POPUP176 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP176 > .container .overlay-container-popup {
                background-color: rgba(255, 255, 255, 0);
            }
            #POPUP176 {
                width: 100%;
                height: 100%;
            }
            #POPUP176 .container {
                width: 100%;
                height: 208px;
                top: calc(100%-208px);
            }
            #POPUP176 {
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP172 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP172 > .container .overlay-container-popup {
                background-color: rgba(255, 255, 255, 0);
            }
            #POPUP172 {
                width: 100%;
                height: 100%;
            }
            #POPUP172 .container {
                width: 100%;
                height: 208px;
                top: calc(100%-208px);
            }
            #POPUP172 {
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP168 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP168 > .container .overlay-container-popup {
                background-color: rgba(255, 255, 255, 0);
            }
            #POPUP168 {
                width: 100%;
                height: 100%;
            }
            #POPUP168 .container {
                width: 100%;
                height: 208px;
                top: calc(100%-208px);
            }
            #POPUP168 {
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP164 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP164 > .container .overlay-container-popup {
                background-color: rgba(255, 255, 255, 0);
            }
            #POPUP164 {
                width: 100%;
                height: 100%;
            }
            #POPUP164 .container {
                width: 100%;
                height: 208px;
                top: calc(100%-208px);
            }
            #POPUP164 {
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP160 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP160 > .container .overlay-container-popup {
                background-color: rgba(255, 255, 255, 0);
            }
            #POPUP160 {
                width: 100%;
                height: 100%;
            }
            #POPUP160 .container {
                width: 100%;
                height: 208px;
                top: calc(100%-208px);
            }
            #POPUP160 {
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP156 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP156 > .container .overlay-container-popup {
                background-color: rgba(255, 255, 255, 0);
            }
            #POPUP156 {
                width: 100%;
                height: 100%;
            }
            #POPUP156 .container {
                width: 100%;
                height: 208px;
                top: calc(100%-208px);
            }
            #POPUP156 {
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP152 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP152 > .container .overlay-container-popup {
                background-color: rgba(255, 255, 255, 0);
            }
            #POPUP152 {
                width: 100%;
                height: 100%;
            }
            #POPUP152 .container {
                width: 100%;
                height: 208px;
                top: calc(100%-208px);
            }
            #POPUP152 {
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/01.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #IMAGE28 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x200/5a28c4f8c3f6592b3acabec8/26732576_924367494406122_1838958175_o-1515211058.png);
            }
            #IMAGE28 {
                top: 20px;
                left: 85.0142px;
                width: 204.96875px;
                height: 48.921875px;
            }
            #HEADLINE29 {
                top: 74.912px;
                left: 102px;
                padding: 0px;
                width: 355px;
                height: 30.90625px;
            }
            #HEADLINE29 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #HEADLINE30 {
                top: 141.514px;
                left: 35.3949px;
                padding: 0px;
                width: 355px;
                height: 30.90625px;
            }
            #HEADLINE30 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #BUTTON31 {
                top: 184.662px;
                left: 81.2273px;
                padding: 0px;
                width: 213px;
                height: 40px;
            }
            #BUTTON31 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #SHAPE33 {
                display: none!important;
                top: 381.662px;
                left: 157.003px;
                width: 60.99431610107422px;
                height: 60.99431610107422px;
            }
            #LINE37 {
                display: none!important;
                top: 261.662px;
                left: 104.006px;
                width: 166.98863220214844px;
                height: 25px;
            }
            #LINE38 {
                display: none!important;
                top: 296.662px;
                left: 110.504px;
                width: 153.99147033691406px;
                height: 25px;
            }
            #HEADLINE27 {
                top: 105.866px;
                left: 13px;
                padding: 0px;
                width: 355px;
                height: 45.453125px;
            }
            #HEADLINE27 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE568 {
                display: none!important;
                top: 495.156px;
                left: 87.5px;
                padding: 0px;
                width: 200px;
                height: 29.999998092651367px;
            }
            #HEADLINE568 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #IMAGE644 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s500x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE644 {
                display: none!important;
                top: 577.656px;
                left: 10px;
                width: 355px;
                height: 32.5px;
            }
            #IMAGE645 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s500x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE645 {
                display: none!important;
                top: 535.156px;
                left: 10px;
                width: 355px;
                height: 32.5px;
            }
            #IMAGE24 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s500x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE24 {
                display: none!important;
                top: 452.656px;
                left: 10px;
                width: 355px;
                height: 32.5px;
            }
            #IMAGE648 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s500x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE648 {
                display: none!important;
                top: 620.156px;
                left: 10px;
                width: 355px;
                height: 32.5px;
            }
            #BOX185 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 102.984375px;
            }
            #LINE187 {
                display: none!important;
                top: 872.264px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #HEADLINE192 {
                top: 1097.42px;
                left: 11.5966px;
                padding: 0px;
                width: 355px;
                height: 119.984375px;
            }
            #HEADLINE192 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #LINEVERTICAL202 {
                display: none!important;
                top: 1068.17px;
                left: 175px;
                width: 25px;
                height: 398.991455078125px;
            }
            #LINEVERTICAL203 {
                display: none!important;
                top: 453.906px;
                left: 175px;
                width: 25px;
                height: 111.98863220214844px;
            }
            #HEADLINE566 {
                top: 20.9946px;
                left: 28px;
                padding: 0px;
                width: 355px;
                height: 30.90625px;
            }
            #HEADLINE566 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE567 {
                top: 299.773px;
                left: 9.38922px;
                padding: 0px;
                width: 355px;
                height: 235.453125px;
            }
            #HEADLINE567 > .widget-content {
                font-size: 23px;
                text-align: left;
            }
            #HEADLINE569 {
                top: 549.088px;
                left: 11.5994px;
                padding: 0px;
                width: 408px;
                height: 75.453125px;
            }
            #HEADLINE569 > .widget-content {
                font-size: 60px;
                text-align: left;
            }
            #HEADLINE570 {
                top: 982.338px;
                left: 9.66193px;
                padding: 0px;
                width: 355px;
                height: 81.796875px;
            }
            #HEADLINE570 > .widget-content {
                font-size: 35px;
                text-align: center;
            }
            #GROUP578 {
                top: 1231.32px;
                left: 12.5085px;
                width: 355px;
                height: 182.1875px;
            }
            #HEADLINE573 {
                top: 0px;
                left: 78.5px;
                padding: 0px;
                width: 200px;
                height: 27.265625px;
            }
            #HEADLINE573 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #LISTOP571 {
                top: 37.2017px;
                left: 1px;
                width: 355px;
                height: 145px;
            }
            #LISTOP571 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP571 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
                content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP571 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP571 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #GROUP579 {
                top: 1512.9px;
                left: 14.4261px;
                width: 355px;
                height: 92.1875px;
            }
            #HEADLINE575 {
                top: 0px;
                left: 78.5px;
                padding: 0px;
                width: 200px;
                height: 27.265625px;
            }
            #HEADLINE575 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #LISTOP574 {
                top: 37.2159px;
                left: 1px;
                width: 355px;
                height: 54.984375px;
            }
            #LISTOP574 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP574 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
                content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP574 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP574 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #GROUP580 {
                top: 1644.05px;
                left: 13.5029px;
                width: 355px;
                height: 147.171875px;
            }
            #HEADLINE577 {
                top: 0px;
                left: 78.5px;
                padding: 0px;
                width: 200px;
                height: 27.265625px;
            }
            #HEADLINE577 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #LISTOP576 {
                top: 37.1875px;
                left: 1px;
                width: 355px;
                height: 109.984375px;
            }
            #LISTOP576 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP576 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                margin-right: 8px;
                content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP576 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP576 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #YOUTUBE582 {
                top: 1855.63px;
                left: 10px;
                width: 355px;
                height: 177.22222222222223px;
            }
            #GROUP583 {
                top: 795.327px;
                left: 4.49719px;
                width: 356.5625px;
                height: 152.65625px;
            }
            #GROUP188 {
                top: 0px;
                left: 1px;
                width: 354.53125px;
                height: 70.90625px;
            }
            #LINEVERTICAL189 {
                display: none!important;
                top: 0px;
                left: 166px;
                width: 25px;
                height: 70.99431610107422px;
            }
            #BUTTON190 {
                top: 0px;
                left: 2px;
                padding: 0px;
                width: 354px;
                height: 71px;
            }
            #BUTTON190 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #GROUP196 {
                top: 81.7898px;
                left: 3.03125px;
                width: 354.53125px;
                height: 70.90625px;
            }
            #LINEVERTICAL197 {
                display: none!important;
                top: 0px;
                left: 166px;
                width: 25px;
                height: 70.99431610107422px;
            }
            #BUTTON198 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 354px;
                height: 71px;
            }
            #BUTTON198 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #GROUP584 {
                top: 630.497px;
                left: 5.79828px;
                width: 356px;
                height: 155.890625px;
            }
            #GROUP199 {
                top: 84.9858px;
                left: 1px;
                width: 354.53125px;
                height: 70.90625px;
            }
            #LINEVERTICAL200 {
                display: none!important;
                top: 0px;
                left: 166.95166015625px;
                width: 25px;
                height: 70.99431610107422px;
            }
            #BUTTON201 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 354px;
                height: 71px;
            }
            #BUTTON201 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #GROUP193 {
                top: 0px;
                left: 2.46307px;
                width: 354.53125px;
                height: 70.90625px;
            }
            #LINEVERTICAL194 {
                display: none!important;
                top: 0px;
                left: 166px;
                width: 25px;
                height: 70.99431610107422px;
            }
            #BUTTON195 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 354px;
                height: 71px;
            }
            #BUTTON195 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #HEADLINE186 {
                top: 51.8723px;
                left: 10.5994px;
                padding: 0px;
                width: 355px;
                height: 236.359375px;
            }
            #HEADLINE186 > .widget-content {
                font-size: 113px;
                text-align: center;
            }
            #BOX453 {
                top: 1045.2px;
                left: 109.768px;
                width: 163.953125px;
                height: 297px;
            }
            #PARAGRAPH456 {
                top: 115.988px;
                left: 0.324955px;
                padding: 0px;
                width: 160.984375px;
                height: 80px;
            }
            #PARAGRAPH456 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE459 {
                top: 56px;
                left: 0.976563px;
                padding: 0px;
                width: 146.984375px;
                height: 25.984375px;
            }
            #HEADLINE459 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE630 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE630 {
                top: 0px;
                left: -0.015625px;
                width: 161.984375px;
                height: 55.984375px;
            }
            #IMAGE455 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE455 {
                top: 38px;
                left: 1px;
                width: 161.984375px;
                height: 17.984375px;
            }
            #LINE631 {
                top: 70.1406px;
                left: 2.96875px;
                width: 135px;
                height: 25px;
            }
            #BOX601 {
                top: 720.063px;
                left: 205.193px;
                width: 161.984375px;
                height: 298.5625px;
            }
            #IMAGE603 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE603 {
                top: 0px;
                left: 0px;
                width: 161.984375px;
                height: 55.984375px;
            }
            #IMAGE605 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE605 {
                top: 38px;
                left: 0px;
                width: 161.984375px;
                height: 17.984375px;
            }
            #LINE606 {
                top: 75px;
                left: 1px;
                width: 135px;
                height: 25px;
            }
            #IMAGE512 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(http://www.rwth-aachen.de/global/show_picture.asp?mod=w%3D%26h%3D%26gray%3D%26neg%3D%26mirror%3D%26flip%3D%26rleft%3D%26rright%3D%26r180%3D%26crop%3D1%252C14%252C1021%252C587%26id%3Daaaaaaaaaaajjmm&id=aaaaaaaaaaajjmm);
            }
            #IMAGE512 {
                display: none!important;
                top: 99.9844px;
                left: 0px;
                width: 161.98863220214844px;
                height: 135px;
            }
            #BOX589 {
                top: 419.699px;
                left: 195.006px;
                width: 161.984375px;
                height: 275.4375px;
            }
            #PARAGRAPH590 {
                top: 103.608px;
                left: 2.59093px;
                padding: 0px;
                width: 160px;
                height: 100px;
            }
            #PARAGRAPH590 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE591 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE591 {
                top: 0px;
                left: 0px;
                width: 161.984375px;
                height: 55.984375px;
            }
            #HEADLINE592 {
                top: 58px;
                left: 1px;
                padding: 0px;
                width: 146.25px;
                height: 25px;
            }
            #HEADLINE592 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE593 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE593 {
                top: 38px;
                left: 0px;
                width: 161.984375px;
                height: 17.984375px;
            }
            #LINE594 {
                top: 78px;
                left: 1px;
                width: 135px;
                height: 25px;
            }
            #BOX558 {
                top: 90.9517px;
                left: 14.7873px;
                width: 161.984375px;
                height: 305px;
            }
            #PARAGRAPH559 {
                top: 95px;
                left: 2.67613px;
                padding: 0px;
                width: 160px;
                height: 80px;
            }
            #PARAGRAPH559 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE560 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE560 {
                top: 0px;
                left: 0px;
                width: 161.984375px;
                height: 55.984375px;
            }
            #HEADLINE561 {
                top: 58.7528px;
                left: 16.6818px;
                padding: 0px;
                width: 146.25px;
                height: 25px;
            }
            #HEADLINE561 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE562 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE562 {
                top: 38px;
                left: 0px;
                width: 161.984375px;
                height: 17.984375px;
            }
            #BOX595 {
                top: 720.33px;
                left: 17.4176px;
                width: 162.96875px;
                height: 297px;
            }
            #IMAGE597 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE597 {
                top: -0.48011px;
                left: -0.076752px;
                width: 163.046875px;
                height: 55.984375px;
            }
            #HEADLINE598 {
                top: 58px;
                left: 1px;
                padding: 0px;
                width: 146.25px;
                height: 25px;
            }
            #HEADLINE598 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE599 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE599 {
                top: 38px;
                left: 0px;
                width: 161.984375px;
                height: 17.984375px;
            }
            #LINE600 {
                top: 75px;
                left: 1px;
                width: 135px;
                height: 25px;
            }
            #IMAGE506 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHKUWBwozuABcrtipV8zcK4N3PAjPKCfwy11-VBkPioJIVgUeh);
            }
            #IMAGE506 {
                display: none!important;
                top: 99.9716px;
                left: 6.04609e-05px;
                width: 161.81817626953125px;
                height: 130.49716186523438px;
            }
            #HEADLINE502 {
                top: 20px;
                left: 13.0043px;
                padding: 0px;
                width: 348.96875px;
                height: 31.8125px;
            }
            #HEADLINE502 > .widget-content {
                font-size: 28px;
                text-align: center;
                line-height: 32px;
            }
            #BOX527 {
                top: 91.5771px;
                left: 195.591px;
                width: 161.984375px;
                height: 305.96875px;
            }
            #PARAGRAPH528 {
                top: 96px;
                left: 0.98865px;
                padding: 0px;
                width: 160.984375px;
                height: 100px;
            }
            #PARAGRAPH528 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE530 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE530 {
                top: 0px;
                left: 0px;
                width: 161.984375px;
                height: 55.984375px;
            }
            #HEADLINE531 {
                top: 58px;
                left: 1px;
                padding: 0px;
                width: 146.984375px;
                height: 25.984375px;
            }
            #HEADLINE531 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE532 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE532 {
                top: 38px;
                left: 0px;
                width: 161.984375px;
                height: 17.984375px;
            }
            #LINE545 {
                top: 76.9961px;
                left: 0.0976563px;
                width: 135px;
                height: 25px;
            }
            #GROUP610 {
                display: none!important;
                top: 3157.11px;
                left: -52.4347px;
                width: 123.99147033691406px;
                height: 25px;
            }
            #LINE609 {
                top: 0px;
                left: 1px;
                width: 123.991px;
                height: 25px;
            }
            #BUTTON523 {
                display: none!important;
                top: 1400.69px;
                left: 134.356px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON523 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE524 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(http://study.com/cimages/course-image/clep-financial-accounting-course_129295_large.jpg);
            }
            #IMAGE524 {
                display: none!important;
                top: 2895.14px;
                left: -114.506px;
                width: 161.33522033691406px;
                height: 135px;
            }
            #BOX546 {
                top: 420.142px;
                left: 16.0395px;
                width: 161.328125px;
                height: 275px;
            }
            #IMAGE548 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/LSBFSIN-2837-1-1514949952.jpg);
            }
            #IMAGE548 {
                top: 0px;
                left: 0px;
                width: 161.328125px;
                height: 55.984375px;
            }
            #HEADLINE549 {
                top: 58px;
                left: 0.996164px;
                padding: 0px;
                width: 145.625px;
                height: 25px;
            }
            #HEADLINE549 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE550 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/foot_of_banner-1515210627.png);
            }
            #IMAGE550 {
                top: 38px;
                left: 0px;
                width: 161.328125px;
                height: 17.96875px;
            }
            #LINE551 {
                top: 75px;
                left: 0.996164px;
                width: 134.453125px;
                height: 25px;
            }
            #IMAGE498 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStjpoMbvNCq3wT8Rb8NvoSug3FDXnKQpqfTI7pR_3Y0nptVLUE);
            }
            #IMAGE498 {
                display: none!important;
                top: 1229.68px;
                left: 252.75px;
                width: 163.99147033691406px;
                height: 135px;
            }
            #BUTTON501 {
                top: 1019.48px;
                left: 194.991px;
                padding: 0px;
                width: 162px;
                height: 40px;
            }
            #BUTTON501 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #PARAGRAPH504 {
                top: 524.423px;
                left: 18.3214px;
                padding: 0px;
                width: 160.984375px;
                height: 40px;
            }
            #PARAGRAPH504 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BUTTON505 {
                top: 358.082px;
                left: 195.421px;
                padding: 0px;
                width: 162px;
                height: 40px;
            }
            #BUTTON505 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE479 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://media-exp2.licdn.com/media-proxy/ext?w=800&h=800&hash=08EY%2FhkTsT4qVxKk004MwJpzzaY%3D&ora=1%2CaFBCTXdkRmpGL2lvQUFBPQ%2CxAVta5g-0R6nlh8Tw1It6a2FowGz60oISIfYC2G8G2f1spyfNT-tdoDSeLClpEtOdSoImBJkcrG-GGGiSp61IvGpNJUC49GHbdOmX1cqfgUvgUBV79kqExJh5rDgCvnxPX8LgM9ZSw2eB4HtbGAyGgIbr-CfHLL-C20gnASvVfnXDc0ce6UyxYADy3hgnpzSTMVp2ZlZ3mRe9wi31ZPIOWo_zce-RmiWHUMnX2TGFc9T75WI_Rqkv2-Pzxn4gqKaK5C5JYkg4SC6qsbgQV61hy8xkmM71T9Nv9ImIA);
            }
            #IMAGE479 {
                display: none!important;
                top: 1997.71px;
                left: 106.591px;
                width: 162.96875px;
                height: 131.81817626953125px;
            }
            #BUTTON529 {
                top: 355.952px;
                left: 14.7813px;
                padding: 0px;
                width: 161px;
                height: 40px;
            }
            #BUTTON529 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE542 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://assets.entrepreneur.com/content/3x2/1300/20170814221038-GettyImages-645670208.jpeg);
            }
            #IMAGE542 {
                display: none!important;
                top: 327.585px;
                left: 22.5px;
                width: 161.98863220214844px;
                height: 135px;
            }
            #BUTTON641 {
                top: 1303.8px;
                left: 107.733px;
                padding: 0px;
                width: 167px;
                height: 40px;
            }
            #BUTTON641 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BUTTON642 {
                top: 978.886px;
                left: 205.415px;
                padding: 0px;
                width: 161px;
                height: 40px;
            }
            #BUTTON642 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE465 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(http://study.com/cimages/course-image/clep-financial-accounting-course_129295_large.jpg);
            }
            #IMAGE465 {
                display: none!important;
                top: 1532.32px;
                left: 204.5px;
                width: 161.98863220214844px;
                height: 135px;
            }
            #PARAGRAPH547 {
                top: 820.824px;
                left: 22.4149px;
                padding: 0px;
                width: 159.375px;
                height: 100px;
            }
            #PARAGRAPH547 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE437 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStjpoMbvNCq3wT8Rb8NvoSug3FDXnKQpqfTI7pR_3Y0nptVLUE);
            }
            #IMAGE437 {
                display: none!important;
                top: 3810.99px;
                left: 97.452px;
                width: 163.99147033691406px;
                height: 135px;
            }
            #BUTTON457 {
                top: 655.355px;
                left: 16.066px;
                padding: 0px;
                width: 161px;
                height: 40px;
            }
            #BUTTON457 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #IMAGE651 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/student-849825_1920-1515227227.jpg);
            }
            #IMAGE651 {
                display: none!important;
                top: 621.943px;
                left: 107.612px;
                width: 161.98863220214844px;
                height: 128.35226440429688px;
            }
            #PARAGRAPH510 {
                top: 820.256px;
                left: 206.159px;
                padding: 0px;
                width: 160.984375px;
                height: 100px;
            }
            #PARAGRAPH510 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BUTTON511 {
                top: 977.33px;
                left: 15.6252px;
                padding: 0px;
                width: 165px;
                height: 40px;
            }
            #BUTTON511 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE513 {
                top: 777.051px;
                left: 208.17px;
                padding: 0px;
                width: 146.984375px;
                height: 25.453125px;
            }
            #HEADLINE513 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #LINE50 {
                display: none!important;
                top: 598.353px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #LINEVERTICAL47 {
                display: none!important;
                top: 633.353px;
                left: 175px;
                width: 25px;
                height: 398.991455078125px;
            }
            #BOX206 {
                top: 384.886px;
                left: 35.7273px;
                width: 296.984375px;
                height: 296.984375px;
            }
            #BOX206 > .widget-content {
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
            #LINEVERTICAL77 {
                display: none!important;
                top: 340.909px;
                left: 175px;
                width: 25px;
                height: 111.98863220214844px;
            }
            #HEADLINE618 {
                top: 258.352px;
                left: 15.7955px;
                padding: 0px;
                width: 355px;
                height: 125.453125px;
            }
            #HEADLINE618 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #HEADLINE45 {
                top: 29.7756px;
                left: 10.5966px;
                padding: 0px;
                width: 355px;
                height: 190.90625px;
            }
            #HEADLINE45 > .widget-content {
                font-size: 90px;
                text-align: center;
            }
            #HEADLINE209 {
                top: 741.554px;
                left: 8.59662px;
                padding: 0px;
                width: 355px;
                height: 294.53125px;
            }
            #HEADLINE209 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #HEADLINE208 {
                top: 454.976px;
                left: 15px;
                padding: 0px;
                width: 355px;
                height: 17.265625px;
            }
            #HEADLINE208 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE207 {
                display: block!important;
                top: 696.992px;
                left: 11px;
                padding: 0px;
                width: 355px;
                height: 33.625px;
            }
            #HEADLINE207 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #PARAGRAPH690 {
                top: 143px;
                left: 11px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #PARAGRAPH690 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE691 {
                top: 35px;
                left: 14px;
                padding: 0px;
                width: 355px;
                height: 33.96875px;
            }
            #HEADLINE691 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP721 {
                top: 458.196px;
                left: 9.41196px;
                width: 357.96875px;
                height: 278.6875px;
            }
            #BOX232 {
                top: 0px;
                left: 136.369px;
                width: 83.828125px;
                height: 80px;
            }
            #BOX232 > .widget-content {
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
            #PARAGRAPH715 {
                top: 117.898px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 17.265625px;
            }
            #PARAGRAPH715 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #LINE714 {
                top: 253.693px;
                left: 3.96875px;
                width: 355px;
                height: 25px;
            }
            #PARAGRAPH713 {
                top: 190.639px;
                left: 3.96875px;
                padding: 0px;
                width: 355px;
                height: 54.53125px;
            }
            #PARAGRAPH713 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #GROUP706 {
                top: 153.764px;
                left: 122.903px;
                width: 107.234375px;
                height: 20.984375px;
            }
            #SHAPE707 {
                top: 1.00848px;
                left: 1px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE708 {
                top: 0.0709839px;
                left: 22.4347px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE709 {
                top: 0px;
                left: 43.9119px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE710 {
                top: 0.0568237px;
                left: 65.3608px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE711 {
                top: 1.00848px;
                left: 86.8097px;
                width: 21.421875px;
                height: 20px;
            }
            #PARAGRAPH705 {
                top: 96.2358px;
                left: 95.3892px;
                padding: 0px;
                width: 170.390625px;
                height: 17.265625px;
            }
            #PARAGRAPH705 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP734 {
                top: 200.81px;
                left: -1px;
                width: 367.1875px;
                height: 257.34375px;
            }
            #GROUP694 {
                top: 134.588px;
                left: 127.051px;
                width: 87.765625px;
                height: 20px;
            }
            #SHAPE695 {
                top: 0px;
                left: 1px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE696 {
                top: 0px;
                left: 23.4432px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE697 {
                top: 0px;
                left: 45.9006px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE698 {
                top: 0px;
                left: 67.3494px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE720 {
                top: 134.588px;
                left: 215.119px;
                width: 21.421875px;
                height: 20px;
            }
            #PARAGRAPH703 {
                top: 114.56px;
                left: 4.87787px;
                padding: 0px;
                width: 355px;
                height: 20px;
            }
            #PARAGRAPH703 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #LINE702 {
                top: 232.358px;
                left: 1px;
                width: 355px;
                height: 25px;
            }
            #PARAGRAPH701 {
                top: 162.372px;
                left: 13.1875px;
                padding: 0px;
                width: 355px;
                height: 36.359375px;
            }
            #PARAGRAPH701 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH693 {
                top: 95.5398px;
                left: 110.176px;
                padding: 0px;
                width: 146.359375px;
                height: 17.265625px;
            }
            #PARAGRAPH693 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX220 {
                top: 0px;
                left: 137.946px;
                width: 84.8125px;
                height: 85.046875px;
            }
            #BOX220 > .widget-content {
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
            #GROUP735 {
                top: 737.727px;
                left: 11.1023px;
                width: 356.984375px;
                height: 247.53125px;
            }
            #GROUP727 {
                top: 139.915px;
                left: 127.605px;
                width: 104.625px;
                height: 20px;
            }
            #SHAPE728 {
                top: 0px;
                left: 1px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE729 {
                top: 0px;
                left: 20.7017px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE730 {
                top: 0px;
                left: 41.7244px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE731 {
                top: 0px;
                left: 62.7614px;
                width: 21.421875px;
                height: 20px;
            }
            #SHAPE732 {
                top: 0px;
                left: 84.196px;
                width: 21.421875px;
                height: 20px;
            }
            #GROUP722 {
                top: 95.7528px;
                left: 1px;
                width: 356.984375px;
                height: 151.78125px;
            }
            #PARAGRAPH724 {
                top: 21.9318px;
                left: 3.00281px;
                padding: 0px;
                width: 355px;
                height: 17.265625px;
            }
            #PARAGRAPH724 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #LINE725 {
                top: 126.79px;
                left: 1.01422px;
                width: 355px;
                height: 25px;
            }
            #PARAGRAPH726 {
                top: 72.2301px;
                left: 1px;
                padding: 0px;
                width: 355px;
                height: 54.53125px;
            }
            #PARAGRAPH726 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #PARAGRAPH733 {
                top: 0px;
                left: 83.7557px;
                padding: 0px;
                width: 191.25px;
                height: 17.265625px;
            }
            #PARAGRAPH733 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX244 {
                top: 0px;
                left: 138.571px;
                width: 84.828125px;
                height: 85.046875px;
            }
            #BOX244 > .widget-content {
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
            #YOUTUBE736 {
                display: none!important;
                top: 114px;
                left: 39.5739px;
                width: 295.8522644042969px;
                height: 144.36236911349826px;
            }
            #YOUTUBE737 {
                display: none!important;
                top: 619px;
                left: 40.5966px;
                width: 295.8522644042969px;
                height: 144.36236911349826px;
            }
            #YOUTUBE738 {
                display: none!important;
                top: 1103.03px;
                left: 39.5739px;
                width: 295.8522644042969px;
                height: 144.36236911349826px;
            }
            #BOX659 {
                top: 30px;
                left: 37.5994px;
                width: 300px;
                height: 503.984375px;
            }
            #HEADLINE660 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 43.96875px;
            }
            #HEADLINE660 > .widget-content {
                font-size: 18px;
                text-align: center;
                line-height: 22px;
            }
            #GROUP661 {
                top: 74px;
                left: 0px;
                width: 300px;
                height: 97.984375px;
            }
            #GROUP662 {
                top: 0px;
                left: 1.8125px;
                width: 294.328125px;
                height: 97.984375px;
            }
            #BOX663 {
                top: 28px;
                left: 1px;
                width: 68.4375px;
                height: 70px;
            }
            #HEADLINE664 {
                top: 0px;
                left: 6.25px;
                padding: 0px;
                width: 61.421875px;
                height: 17.984375px;
            }
            #HEADLINE664 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE665 {
                top: 0px;
                left: 81.2656px;
                padding: 0px;
                width: 61.421875px;
                height: 17.984375px;
            }
            #HEADLINE665 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX666 {
                top: 28px;
                left: 76px;
                width: 68.4375px;
                height: 70px;
            }
            #BOX667 {
                top: 28px;
                left: 226.891px;
                width: 68.4375px;
                height: 70px;
            }
            #HEADLINE668 {
                top: 0px;
                left: 228.172px;
                padding: 0px;
                width: 61.421875px;
                height: 17.984375px;
            }
            #HEADLINE668 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE669 {
                top: 0px;
                left: 156.172px;
                padding: 0px;
                width: 61.421875px;
                height: 17.984375px;
            }
            #HEADLINE669 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX670 {
                top: 28px;
                left: 150.875px;
                width: 68.4375px;
                height: 70px;
            }
            #COUNTDOWN671 {
                top: 40px;
                left: 1px;
                width: 297.984375px;
                height: 42.984375px;
            }
            #COUNTDOWN671 > .widget-content {
                font-size: 36px;
            }
            #GROUP672 {
                top: 201.989px;
                left: 14.9943px;
                width: 267.984375px;
                height: 292.953125px;
            }
            #BUTTON673 {
                top: 243.864px;
                left: 1px;
                padding: 0px;
                width: 266px;
                height: 49px;
            }
            #BUTTON673 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #FORM674 {
                top: 0px;
                left: 1px;
                width: 267.984375px;
                height: 233.859375px;
            }
            #FORM674 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM675 {
                top: 20px;
                left: 0px;
                width: 267.984375px;
                height: 46.109375px;
            }
            #ITEM_FORM675 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM676 {
                top: 76.1406px;
                left: 0px;
                width: 267.984375px;
                height: 46.109375px;
            }
            #ITEM_FORM676 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM677 {
                top: 132.281px;
                left: 0px;
                width: 267.984375px;
                height: 46.109375px;
            }
            #ITEM_FORM677 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM685 {
                top: 188.417px;
                left: 0px;
                width: 267.984375px;
                height: 35.453125px;
            }
            #HEADLINE686 {
                top: 591.082px;
                left: 42.5824px;
                padding: 0px;
                width: 95px;
                height: 29.984375px;
            }
            #HEADLINE686 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE680 {
                top: 552.179px;
                left: 10.5966px;
                padding: 0px;
                width: 355px;
                height: 30.90625px;
            }
            #HEADLINE680 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #PARAGRAPH681 {
                top: 681.565px;
                left: 14.3892px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #PARAGRAPH681 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE687 {
                top: 585.068px;
                left: 137.373px;
                padding: 0px;
                width: 191.8125px;
                height: 35.453125px;
            }
            #HEADLINE687 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE688 {
                top: 627.767px;
                left: 10.5966px;
                padding: 0px;
                width: 355px;
                height: 35.453125px;
            }
            #HEADLINE688 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #PARAGRAPH335 {
                top: 758.221px;
                left: 11.9319px;
                padding: 0px;
                width: 355px;
                height: 86.359375px;
            }
            #PARAGRAPH335 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #IMAGE354 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/logo-1515293868.png);
            }
            #IMAGE354 {
                top: 20px;
                left: 118px;
                width: 138.984375px;
                height: 28.984375px;
            }
            #LINE355 {
                top: 237.668px;
                left: 36.5px;
                width: 300px;
                height: 25px;
            }
            #GROUP367 {
                top: 77.991px;
                left: 72.483px;
                width: 225.296875px;
                height: 84.96875px;
            }
            #HEADLINE368 {
                top: 0px;
                left: 1.99432px;
                padding: 0px;
                width: 219.984375px;
                height: 20px;
            }
            #HEADLINE368 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #HEADLINE369 {
                top: 36.9886px;
                left: 1px;
                padding: 0px;
                width: 225.296875px;
                height: 47.984375px;
            }
            #HEADLINE369 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #HEADLINE358 {
                top: 176.997px;
                left: 12.5909px;
                padding: 0px;
                width: 351.8125px;
                height: 59.984375px;
            }
            #HEADLINE358 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX177 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 70px;
            }
            #HEADLINE178 {
                top: 35px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE178 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #PARAGRAPH179 {
                top: 134px;
                left: 8px;
                padding: 0px;
                width: 359px;
                height: 88px;
            }
            #PARAGRAPH179 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX173 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 70px;
            }
            #HEADLINE174 {
                top: 35px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE174 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #PARAGRAPH175 {
                top: 134px;
                left: 8px;
                padding: 0px;
                width: 359px;
                height: 88px;
            }
            #PARAGRAPH175 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX169 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 70px;
            }
            #HEADLINE170 {
                top: 35px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE170 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #PARAGRAPH171 {
                top: 134px;
                left: 8px;
                padding: 0px;
                width: 359px;
                height: 88px;
            }
            #PARAGRAPH171 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX165 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 70px;
            }
            #HEADLINE166 {
                top: 35px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE166 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #PARAGRAPH167 {
                top: 134px;
                left: 8px;
                padding: 0px;
                width: 359px;
                height: 88px;
            }
            #PARAGRAPH167 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX161 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 70px;
            }
            #HEADLINE162 {
                top: 35px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE162 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #PARAGRAPH163 {
                top: 134px;
                left: 8px;
                padding: 0px;
                width: 359px;
                height: 88px;
            }
            #PARAGRAPH163 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX157 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 70px;
            }
            #HEADLINE158 {
                top: 35px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE158 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #PARAGRAPH159 {
                top: 134px;
                left: 8px;
                padding: 0px;
                width: 359px;
                height: 88px;
            }
            #PARAGRAPH159 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX153 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 70px;
            }
            #HEADLINE154 {
                top: 35px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE154 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #PARAGRAPH155 {
                top: 121px;
                left: 8px;
                padding: 0px;
                width: 359px;
                height: 286px;
            }
            #PARAGRAPH155 > .widget-content {
                font-size: 16px;
                text-align: left;
            }
        }
    </style>
    <link rel="stylesheet" href="https://static.ladipage.net/googlefonts/css?family=Open+Sans:400,600,700|Montserrat:300,400,600,700|Roboto:300,400,700|Roboto+Slab:300,400,700&amp;subset=latin-ext,vietnamese" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="https://static.ladipage.net/source/animate.min.css?v=1515579011603" media="none" onload="if(media!='all')media='all'">
