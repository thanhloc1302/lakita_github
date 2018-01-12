
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
        
        .widget-section[lp-popup=true] .container .overlay-container-popup {
            width: 100%;
            height: 100%;
        }
    </style>
    <style id="lp-css-ladi">
        @media(min-width:768px) {
            #SECTION212 {
                width: 100%;
                height: 823px;
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
                height: 842.875px;
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
                height: 673.015625px;
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
                height: 773.4722290039062px;
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
            #BOX493 {
                top: 495px;
                left: 323px;
                width: 343px;
                height: 290px;
            }
            #FORM486 {
                top: 17px;
                left: 21px;
                width: 300px;
                height: 172px;
            }
            #FORM486 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM487 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 36px;
            }
            #ITEM_FORM487 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM488 {
                top: 45px;
                left: 0px;
                width: 300px;
                height: 36px;
            }
            #ITEM_FORM488 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM489 {
                top: 90px;
                left: 0px;
                width: 300px;
                height: 36px;
            }
            #ITEM_FORM489 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM490 {
                top: 135px;
                left: 0px;
                width: 300px;
                height: 37px;
            }
            #ITEM_FORM490 > .widget-content {
                font-size: 14px;
            }
            #BUTTON491 {
                top: 215px;
                left: 55.984375px;
                padding: 0px;
                width: 226px;
                height: 48px;
            }
            #BUTTON491 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX226 {
                top: 186px;
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
            #HEADLINE217 {
                top: 313px;
                left: 168px;
                padding: 0px;
                width: 164px;
                height: 40px;
            }
            #HEADLINE217 > .widget-content {
                font-size: 36px;
                text-align: right;
            }
            #PARAGRAPH218 {
                top: 368px;
                left: 157px;
                padding: 0px;
                width: 172px;
                height: 34.66666793823242px;
            }
            #PARAGRAPH218 > .widget-content {
                font-size: 14px;
                text-align: right;
            }
            #PARAGRAPH220 {
                top: 370px;
                left: 361px;
                padding: 0px;
                width: 148px;
                height: 17.33333396911621px;
            }
            #PARAGRAPH220 > .widget-content {
                font-size: 14px;
                text-align: right;
            }
            #HEADLINE221 {
                top: 311px;
                left: 353px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #HEADLINE221 > .widget-content {
                font-size: 36px;
                text-align: right;
            }
            #PARAGRAPH223 {
                top: 367px;
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
                top: 311px;
                left: 554px;
                padding: 0px;
                width: 180px;
                height: 40px;
            }
            #HEADLINE224 > .widget-content {
                font-size: 36px;
                text-align: right;
            }
            #HEADLINE485 {
                top: 415px;
                left: 206px;
                padding: 0px;
                width: 568px;
                height: 74px;
            }
            #HEADLINE485 > .widget-content {
                font-size: 27px;
                text-align: center;
            }
            #HEADLINE213 {
                top: 116px;
                left: -79.667px;
                padding: 0px;
                width: 1114.666748046875px;
                height: 60px;
            }
            #HEADLINE213 > .widget-content {
                font-size: 54px;
                text-align: center;
            }
            #BOX252 {
                top: 0px;
                left: -297px;
                width: 1695px;
                height: 61.984375px;
            }
            #HEADLINE254 {
                top: 17.2361px;
                left: 848.642px;
                padding: 0px;
                width: 111.11111450195312px;
                height: 30.000001907348633px;
            }
            #HEADLINE254 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BUTTON256 {
                top: 19.7743px;
                left: 1220.65px;
                padding: 0px;
                width: 151.11111450195312px;
                height: 25.555557250976562px;
            }
            #BUTTON256 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #HEADLINE255 {
                top: 20.208335876464844px;
                left: 942.638916015625px;
                padding: 0px;
                width: 279.3403015136719px;
                height: 25.555557250976562px;
            }
            #HEADLINE255 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #IMAGE492 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x200/5a28c4f8c3f6592b3acabec8/logo-1515731920.png);
            }
            #IMAGE492 {
                top: 9px;
                left: 169px;
                width: 205px;
                height: 45.75px;
            }
            #HEADLINE41 {
                top: 225.212px;
                left: -11.993px;
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
                background-image: url(https://static.ladipage.net/s400x600/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png);
            }
            #IMAGE240 {
                top: 33.8854px;
                left: 604.799px;
                width: 260.8507080078125px;
                height: 458.00347900390625px;
            }
            #HEADLINE258 {
                top: 135.843px;
                left: 54.119px;
                padding: 0px;
                width: 419.16668701171875px;
                height: 40px;
            }
            #HEADLINE258 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #HEADLINE259 {
                top: 299.973px;
                left: -19.01px;
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
            #GROUP463 {
                top: 208.26px;
                left: 356.979px;
                width: 326.9965362548828px;
                height: 576.8402862548828px;
            }
            #BOX91 {
                top: 189.375px;
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
                top: 374.84375px;
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
                left: 124.9757080078125px;
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
            #GROUP464 {
                top: 245.868px;
                left: 713.96533203125px;
                width: 323.90626525878906px;
                height: 538.5937652587891px;
            }
            #BOX93 {
                top: 149.6007080078125px;
                left: 122.90972900390625px;
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
            #BOX95 {
                top: 336.59722900390625px;
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
            #BOX262 {
                top: -48px;
                left: 2.8611px;
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
            #IMAGE480 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s600x800/5a28c4f8c3f6592b3acabec8/business-presentation-2253131_1920-1513092253.png);
            }
            #IMAGE480 {
                top: 148.273px;
                left: -67.094px;
                width: 495.451416015625px;
                height: 655.0000610351562px;
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
            #BOX301 {
                top: 266.879px;
                left: 387.035px;
                width: 587.96875px;
                height: 374.01043701171875px;
            }
            #HEADLINE302 {
                top: 35px;
                left: 35px;
                padding: 0px;
                width: 268.888916015625px;
                height: 24.444446563720703px;
            }
            #HEADLINE302 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #HEADLINE308 {
                top: 17.9896px;
                left: 35.9757px;
                padding: 0px;
                width: 277.7778015136719px;
                height: 17.77777862548828px;
            }
            #HEADLINE308 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP315 {
                top: 78.71527099609375px;
                left: 36.0242919921875px;
                width: 511.0069580078125px;
                height: 260px;
            }
            #LISTOP315 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP315 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 27px;
                height: 27px;
                font-size: 13.5px;
                color: rgba(0, 0, 0, 1);
                margin-right: 0px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(0,0,0,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
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
            #LINE479 {
                top: 49.8889px;
                left: 33.9618px;
                width: 215.79861450195312px;
                height: 25px;
            }
            #HEADLINE317 {
                top: 23.3507px;
                left: 248.99px;
                padding: 0px;
                width: 521.99658203125px;
                height: 35.55555725097656px;
            }
            #HEADLINE317 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #IMAGE478 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s600x800/5a28c4f8c3f6592b3acabec8/2-1513766663.png);
            }
            #IMAGE478 {
                top: 15.9212px;
                left: -47.071px;
                width: 491.4410095214844px;
                height: 655.12158203125px;
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
            #IMAGE465 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s600x500/5a28c4f8c3f6592b3acabec8/Apple-Mac-Computer-Screen-PNG-1513826485.png);
            }
            #IMAGE465 {
                top: 177.382px;
                left: -81.2743px;
                width: 481.9965515136719px;
                height: 378.00347900390625px;
            }
            #YOUTUBE466 {
                top: 10.57986px;
                left: 6.99653px;
                width: 465.2778015136719px;
                height: 260.0173645019531px;
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
                background-image: url(https://static.ladipage.net/s400x200/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
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
                top: 188.796px;
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
                background-image: url(https://static.ladipage.net/s400x200/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
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
                background-image: url(https://static.ladipage.net/s400x200/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
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
            #BOX476 {
                top: 364.608px;
                left: 45.976px;
                width: 270px;
                height: 140.32986450195312px;
            }
            #BOX475 {
                top: 365.288px;
                left: 402.993px;
                width: 270px;
                height: 140.32986450195312px;
            }
            #BOX474 {
                top: 366.299px;
                left: 744.994px;
                width: 270px;
                height: 140.32986450195312px;
            }
            #BOX473 {
                top: 148.559px;
                left: 746.993px;
                width: 270px;
                height: 140.32986450195312px;
            }
            #BOX470 {
                top: 147.968px;
                left: 404.729px;
                width: 270px;
                height: 140.32986450195312px;
            }
            #BOX467 {
                top: 145.288px;
                left: 45.9965px;
                width: 270px;
                height: 145.01736450195312px;
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
            #GROUP371 {
                top: 341.8576431274414px;
                left: -1px;
                width: 1011.9444885253906px;
                height: 157.91668701171875px;
            }
            #GROUP372 {
                top: 0px;
                left: 715.9479370117188px;
                width: 296.9965362548828px;
                height: 134.96530151367188px;
            }
            #PARAGRAPH373 {
                top: 94.96530151367188px;
                left: 79.00347900390625px;
                padding: 0px;
                width: 218.88890075683594px;
                height: 40px;
            }
            #PARAGRAPH373 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE374 {
                top: 41.961822509765625px;
                left: 77.99652099609375px;
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
                top: 66.96182250976562px;
                left: 77.99652099609375px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 16.666667938232422px;
            }
            #HEADLINE376 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP377 {
                top: 45.81597900390625px;
                left: 354.8368225097656px;
                width: 311.99656677246094px;
                height: 97.98611450195312px;
            }
            #PARAGRAPH378 {
                top: 57.986114501953125px;
                left: 94.00344848632812px;
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
                top: -45px;
                left: 14px;
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
                top: 16.97918701171875px;
                left: 1px;
                width: 311.97918701171875px;
                height: 140.9375px;
            }
            #PARAGRAPH383 {
                top: 60.9375px;
                left: 94.00346374511719px;
                padding: 0px;
                width: 218.88890075683594px;
                height: 80px;
            }
            #PARAGRAPH383 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE384 {
                top: 7.96875px;
                left: 92.97917175292969px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 21.111112594604492px;
            }
            #HEADLINE384 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX385 {
                top: -18px;
                left: 10px;
                width: 81px;
                height: 81px;
            }
            #HEADLINE386 {
                top: 32.96875px;
                left: 92.97917175292969px;
                padding: 0px;
                width: 220.00001525878906px;
                height: 16.666667938232422px;
            }
            #HEADLINE386 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP370 {
                top: 120.08680725097656px;
                left: 20.892364501953125px;
                width: 1006.1459045410156px;
                height: 158.8715362548828px;
            }
            #GROUP147 {
                top: 3.2118072509765625px;
                left: 677.6319885253906px;
                width: 329.5138854980469px;
                height: 139.4965362548828px;
            }
            #PARAGRAPH148 {
                top: 81.7013931274414px;
                left: 69.15972900390625px;
                padding: 0px;
                width: 221.56251525878906px;
                height: 57.795143127441406px;
            }
            #PARAGRAPH148 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE149 {
                top: 31.63195037841797px;
                left: 109.125px;
                padding: 0px;
                width: 134.0104217529297px;
                height: 21.111112594604492px;
            }
            #HEADLINE149 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX150 {
                top: 0px;
                left: 13px;
                width: 81.97917175292969px;
                height: 78.02083587646484px;
            }
            #HEADLINE151 {
                top: 52.77777862548828px;
                left: 107.84027099609375px;
                padding: 0px;
                width: 222.67361450195312px;
                height: 16.041667938232422px;
            }
            #HEADLINE151 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP142 {
                top: 0px;
                left: 347.3194885253906px;
                width: 306.0590057373047px;
                height: 156.04167938232422px;
            }
            #PARAGRAPH143 {
                top: 78.97570037841797px;
                left: 74.78472900390625px;
                padding: 0px;
                width: 221.56251525878906px;
                height: 77.06597900390625px;
            }
            #PARAGRAPH143 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE144 {
                top: 35.607643127441406px;
                left: 131.46875px;
                padding: 0px;
                width: 101.2326431274414px;
                height: 20.329862594604492px;
            }
            #HEADLINE144 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE146 {
                top: 57.77777862548828px;
                left: 69.73260498046875px;
                padding: 0px;
                width: 237.32640075683594px;
                height: 16.041667938232422px;
            }
            #HEADLINE146 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX145 {
                top: 0px;
                left: 1px;
                width: 81.97917175292969px;
                height: 78.02083587646484px;
            }
            #GROUP137 {
                top: 0px;
                left: 1px;
                width: 276.40625px;
                height: 158.8715362548828px;
            }
            #PARAGRAPH138 {
                top: 81.8041px;
                left: 55.8458px;
                padding: 0px;
                width: 221.56251525878906px;
                height: 77.06597900390625px;
            }
            #PARAGRAPH138 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE139 {
                top: 34.612px;
                left: 102.401px;
                padding: 0px;
                width: 148.8194580078125px;
                height: 20.329862594604492px;
            }
            #HEADLINE139 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE141 {
                top: 54.8038px;
                left: 101.379px;
                padding: 0px;
                width: 51.6319465637207px;
                height: 16.041667938232422px;
            }
            #HEADLINE141 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX140 {
                top: 0px;
                left: 1.01231px;
                width: 81.97917175292969px;
                height: 78.02083587646484px;
            }
            #BOX445 {
                top: 142.604px;
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
                width: 501.11114501953125px;
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
                top: 142.326px;
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
                top: 240.98959350585938px;
                left: 38.11456298828125px;
                width: 300.97222900390625px;
                height: 229.4271011352539px;
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
                top: 180.5382080078125px;
                left: 1.43402099609375px;
                padding: 0px;
                width: 300px;
                height: 48.888893127441406px;
            }
            #BUTTON431 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE418 {
                top: 31.933999999999997px;
                left: 13.9930419921875px;
                padding: 0px;
                width: 366.66668701171875px;
                height: 66.66667175292969px;
            }
            #HEADLINE418 > .widget-content {
                font-size: 17px;
                text-align: center;
            }
            #HEADLINE477 {
                top: 15.7917px;
                left: 47.993px;
                padding: 0px;
                width: 304.6528015136719px;
                height: 27.77777862548828px;
            }
            #HEADLINE477 > .widget-content {
                font-size: 22px;
                text-align: left;
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
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/logo_white-1513079500.png);
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
            background-image: url("https://static.ladipage.net/s1440x1000/5a29f2a1d35c107ff6bcd1be/business-design-social-1513078644.jpg");
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
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/banner-454815.png");
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
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP456 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION300 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x800/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
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
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP294 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP288 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP288 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP282 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP282 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP276 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP276 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP270 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP270 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #POPUP264 .container {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP264 > .container .overlay-container-popup {
            background-color: rgba(0, 0, 0, 0);
        }
        
        #SECTION98 {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION338 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x500/57b167c9ca57d39c18a1c57c/geometry.png");
            background-color: rgba(218, 30, 16, 1);
            background-position: top left;
            background-repeat: repeat;
        }
        
        #SECTION338 > .ladi-widget-overlay {
            background-color: rgba(218, 30, 16, 0.66);
        }
        
        #SECTION134 {
            display: block;
            background-image: url("https://static.ladipage.net/s1440x700/57b167c9ca57d39c18a1c57c/bg_ykienhocvien.jpg");
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
            background-image: url("https://static.ladipage.net/s1440x900/5a29f2a1d35c107ff6bcd1be/business-design-social12-1513256358.jpg");
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
            background-image: url("https://static.ladipage.net/s1440x400/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
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
        
        #BOX493 {
            display: block;
        }
        
        #BOX493 > .widget-content {
            background-color: rgba(255, 235, 59, 0.2);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX493> .widget-content {
            border-bottom-right-radius: 45px;
            border-top-left-radius: 45px;
            border-top-right-radius: 0px;
        }
        
        #BOX493> .ladi-widget-overlay {
            border-bottom-right-radius: 45px;
            border-top-left-radius: 45px;
            border-top-right-radius: 0px;
        }
        
        #FORM486 {
            display: block;
        }
        
        #FORM486 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM486 .widget-content::-webkit-input-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #FORM486 .widget-content:-moz-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #FORM486 .widget-content::-moz-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #FORM486 .widget-content:-ms-input-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #FORM486 select.widget-content option:first-child {
            color: rgba(232, 255, 0, 1)
        }
        
        #FORM486 select.widget-content {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM487 {
            display: block;
        }
        
        #ITEM_FORM487 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM487> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM487> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM487 .widget-content::-webkit-input-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM487 .widget-content:-moz-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM487 .widget-content::-moz-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM487 .widget-content:-ms-input-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM487 select.widget-content option:first-child {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM487 select.widget-content {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM488 {
            display: block;
        }
        
        #ITEM_FORM488 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM488> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM488> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM488 .widget-content::-webkit-input-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM488 .widget-content:-moz-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM488 .widget-content::-moz-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM488 .widget-content:-ms-input-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM488 select.widget-content option:first-child {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM488 select.widget-content {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM489 {
            display: block;
        }
        
        #ITEM_FORM489 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM489> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM489> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM489 .widget-content::-webkit-input-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM489 .widget-content:-moz-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM489 .widget-content::-moz-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM489 .widget-content:-ms-input-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM489 select.widget-content option:first-child {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM489 select.widget-content {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM490 {
            display: block;
        }
        
        #ITEM_FORM490 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
        }
        
        #ITEM_FORM490> .widget-content {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM490> .ladi-widget-overlay {
            border-radius: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM490 .widget-content::-webkit-input-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM490 .widget-content:-moz-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM490 .widget-content::-moz-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM490 .widget-content:-ms-input-placeholder {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM490 select.widget-content option:first-child {
            color: rgba(232, 255, 0, 1)
        }
        
        #ITEM_FORM490 select.widget-content {
            color: rgba(232, 255, 0, 1)
        }
        
        #BUTTON491 {
            display: table;
        }
        
        #BUTTON491 > .widget-content {
            background-color: rgba(210, 21, 21, 1);
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 21px;
        }
        
        #BUTTON491> .widget-content {
            border-radius: 29px;
        }
        
        #BUTTON491> .ladi-widget-overlay {
            border-radius: 29px;
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
        
        #HEADLINE485 {
            display: block;
        }
        
        #HEADLINE485 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 37px;
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
        
        #BOX252 {
            display: block;
        }
        
        #BOX252 > .widget-content {
            background-color: rgba(0, 0, 0, 1);
            color: rgba(0, 0, 0, 1);
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
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(244, 67, 54, 1);
            font-weight: 700;
            line-height: 26px;
        }
        
        #IMAGE492 {
            display: block;
        }
        
        #IMAGE492 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE492 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
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
            line-height: 41px;
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
        
        #GROUP463 {
            display: block;
        }
        
        #GROUP463 > .widget-content {
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
        
        #GROUP464 {
            display: block;
        }
        
        #GROUP464 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
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
        
        #IMAGE480 {
            display: block;
        }
        
        #IMAGE480 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE480 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
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
        
        #BOX301 {
            display: block;
        }
        
        #BOX301 > .widget-content {
            background-color: rgba(174, 239, 15, 0.82);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX301> .widget-content {
            border-radius: 60px;
        }
        
        #BOX301> .ladi-widget-overlay {
            border-radius: 60px;
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
            font-weight: 600;
            line-height: 21px;
        }
        
        #LINE479 {
            display: block;
        }
        
        #LINE479>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 152, 0, 1);
            margin-top: 10.500000953674316px;
        }
        
        #LINE479 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
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
        
        #IMAGE478 {
            display: block;
        }
        
        #IMAGE478 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE478 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
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
        
        #YOUTUBE466 {
            display: block;
        }
        
        #YOUTUBE466 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #YOUTUBE466> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #YOUTUBE466> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
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
        
        #BOX476 {
            display: block;
        }
        
        #BOX476 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX476> .widget-content {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX476> .ladi-widget-overlay {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX475 {
            display: block;
        }
        
        #BOX475 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX475> .widget-content {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX475> .ladi-widget-overlay {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX474 {
            display: block;
        }
        
        #BOX474 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX474> .widget-content {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX474> .ladi-widget-overlay {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX473 {
            display: block;
        }
        
        #BOX473 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX473> .widget-content {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX473> .ladi-widget-overlay {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX470 {
            display: block;
        }
        
        #BOX470 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX470> .widget-content {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX470> .ladi-widget-overlay {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX467 {
            display: block;
        }
        
        #BOX467 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX467> .widget-content {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX467> .ladi-widget-overlay {
            border-radius: 36px;
            border-width: 3px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
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
            background-image: url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
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
            background-image: url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
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
            background-image: url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
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
            background-image: url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
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
        
        #BOX145 {
            display: block;
        }
        
        #BOX145 > .widget-content {
            background-image: url("https://static.ladipage.net/s200x200/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
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
        
        #BOX140 {
            display: block;
        }
        
        #BOX140 > .widget-content {
            background-image: url("https://static.ladipage.net/s200x200/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
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
        
        #BOX445 {
            display: block;
        }
        
        #BOX445 > .widget-content {
            background-color: rgba(0, 0, 0, 0.67);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX445> .widget-content {
            border-bottom-left-radius: 25px;
            border-top-left-radius: 25px;
        }
        
        #BOX445> .ladi-widget-overlay {
            border-bottom-left-radius: 25px;
            border-top-left-radius: 25px;
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
            border-bottom-right-radius: 25px;
            border-bottom-left-radius: 0px;
            border-top-left-radius: 0px;
            border-top-right-radius: 25px;
        }
        
        #BOX417> .ladi-widget-overlay {
            border-bottom-right-radius: 25px;
            border-bottom-left-radius: 0px;
            border-top-left-radius: 0px;
            border-top-right-radius: 25px;
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
        
        #FORM432 select.widget-content option:first-child {
            color: rgba(130, 130, 130, 1)
        }
        
        #FORM432 select.widget-content {
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
            border-radius: 14px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM433> .ladi-widget-overlay {
            border-radius: 14px;
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
        
        #ITEM_FORM433 select.widget-content option:first-child {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM433 select.widget-content {
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
            border-radius: 14px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM435> .ladi-widget-overlay {
            border-radius: 14px;
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
        
        #ITEM_FORM435 select.widget-content option:first-child {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM435 select.widget-content {
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
            border-radius: 14px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(194, 194, 194, 1);
        }
        
        #ITEM_FORM444> .ladi-widget-overlay {
            border-radius: 14px;
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
        
        #ITEM_FORM444 select.widget-content option:first-child {
            color: rgba(130, 130, 130, 1)
        }
        
        #ITEM_FORM444 select.widget-content {
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
            border-radius: 14px;
        }
        
        #BUTTON431> .ladi-widget-overlay {
            border-radius: 14px;
        }
        
        #HEADLINE418 {
            display: block;
        }
        
        #HEADLINE418 > .widget-content {
            color: rgba(244, 67, 54, 1);
            font-weight: 700;
            line-height: 23px;
        }
        
        #HEADLINE477 {
            display: block;
        }
        
        #HEADLINE477 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 87, 34, 1);
            font-weight: 700;
            line-height: 28px;
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
                display: block;
                background-image: url("https://static.ladipage.net/s500x1000/5a29f2a1d35c107ff6bcd1be/business-design-social-1513078644.jpg");
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
            #SECTION212 {
                width: 100%;
                height: 805px;
            }
            #SECTION212 .container {}
            #SECTION212 {
                background-image: url("https://static.ladipage.net/s500x1000/5a29f2a1d35c107ff6bcd1be/business-design-social-1513078644.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION38 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/banner-454815.png");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION38 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }
            #SECTION38 {
                width: 100%;
                height: 427.8802070617676px;
            }
            #SECTION38 .container {}
            #SECTION38 {
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/banner-454815.png");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION86 {
                display: block;
                background-color: rgba(255, 255, 255, 1);
            }
            #SECTION86 {
                width: 100%;
                height: 1226.671875px;
            }
            #SECTION86 .container {}
            #SECTION86 {
                background-image: none;
            }
            #POPUP456 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP456 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0);
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
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION300 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x1000/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
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
            #SECTION300 {
                width: 100%;
                height: 851.296875px;
            }
            #SECTION300 .container {}
            #SECTION300 {
                background-image: linear-gradient(rgba(7, 19, 64, 0.82), rgba(7, 19, 64, 0.82)), url("https://static.ladipage.net/s500x1000/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -o-linear-gradient(rgba(7, 19, 64, 0.82), rgba(7, 19, 64, 0.82)), url("https://static.ladipage.net/s500x1000/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -ms-linear-gradient(rgba(7, 19, 64, 0.82), rgba(7, 19, 64, 0.82)), url("https://static.ladipage.net/s500x1000/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -moz-linear-gradient(rgba(7, 19, 64, 0.82), rgba(7, 19, 64, 0.82)), url("https://static.ladipage.net/s500x1000/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -webkit-linear-gradient(rgba(7, 19, 64, 0.82), rgba(7, 19, 64, 0.82)), url("https://static.ladipage.net/s500x1000/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #POPUP294 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP294 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0);
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
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP288 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP288 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0);
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
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP282 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP282 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0);
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
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP276 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP276 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0);
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
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP270 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP270 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0);
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
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP264 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP264 > .container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0);
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
                background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/ribbon-gia.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION98 {
                display: block;
                background-color: rgba(255, 255, 255, 1);
            }
            #SECTION98 {
                width: 100%;
                height: 831px;
            }
            #SECTION98 .container {}
            #SECTION98 {
                background-image: none;
            }
            #SECTION338 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/geometry.png");
                background-color: rgba(218, 30, 16, 1);
                background-position: top left;
                background-repeat: repeat;
            }
            #SECTION338 > .ladi-widget-overlay {
                background-color: rgba(218, 30, 16, 0.66);
            }
            #SECTION338 {
                width: 100%;
                height: 945.90625px;
            }
            #SECTION338 .container {}
            #SECTION338 {
                background-image: linear-gradient(rgba(218, 30, 16, 0.66), rgba(218, 30, 16, 0.66)), url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/geometry.png");
                background-image: -o-linear-gradient(rgba(218, 30, 16, 0.66), rgba(218, 30, 16, 0.66)), url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/geometry.png");
                background-image: -ms-linear-gradient(rgba(218, 30, 16, 0.66), rgba(218, 30, 16, 0.66)), url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/geometry.png");
                background-image: -moz-linear-gradient(rgba(218, 30, 16, 0.66), rgba(218, 30, 16, 0.66)), url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/geometry.png");
                background-image: -webkit-linear-gradient(rgba(218, 30, 16, 0.66), rgba(218, 30, 16, 0.66)), url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/geometry.png");
                background-position: top left;
                background-repeat: repeat;
            }
            #SECTION134 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/bg_ykienhocvien.jpg");
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
            #SECTION134 {
                width: 100%;
                height: 968.4375px;
            }
            #SECTION134 .container {}
            #SECTION134 {
                background-image: url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/bg_ykienhocvien.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION416 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x1200/5a29f2a1d35c107ff6bcd1be/business-design-social12-1513256358.jpg");
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
            #SECTION416 {
                width: 100%;
                height: 1040.3472595214844px;
            }
            #SECTION416 .container {}
            #SECTION416 {
                background-image: url("https://static.ladipage.net/s500x1200/5a29f2a1d35c107ff6bcd1be/business-design-social12-1513256358.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION174 {
                display: block;
                background-image: url("https://static.ladipage.net/s500x400/uploads/images/eace8a9-8f1e-panaroma-city-sunny-people-street.jpg");
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
            #SECTION174 {
                width: 100%;
                height: 238.984375px;
            }
            #SECTION174 .container {}
            #SECTION174 {
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
            #BOX493 {
                top: 472px;
                left: 16px;
                width: 343px;
                height: 290px;
            }
            #FORM486 {
                top: 19px;
                left: 21px;
                width: 300px;
                height: 172px;
            }
            #FORM486 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM487 {
                top: 0px;
                left: 0px;
                width: 300px;
                height: 36px;
            }
            #ITEM_FORM487 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM488 {
                top: 45px;
                left: 0px;
                width: 300px;
                height: 36px;
            }
            #ITEM_FORM488 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM489 {
                top: 90px;
                left: 0px;
                width: 300px;
                height: 36px;
            }
            #ITEM_FORM489 > .widget-content {
                font-size: 14px;
            }
            #ITEM_FORM490 {
                top: 135px;
                left: 0px;
                width: 300px;
                height: 37px;
            }
            #ITEM_FORM490 > .widget-content {
                font-size: 14px;
            }
            #BUTTON491 {
                top: 215px;
                left: 55.9844px;
                padding: 0px;
                width: 226px;
                height: 48px;
            }
            #BUTTON491 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #BOX226 {
                top: 163px;
                left: 4px;
                width: 367.984375px;
                height: 82.5px;
            }
            #HEADLINE225 {
                top: 10px;
                left: 5px;
                padding: 0px;
                width: 355px;
                height: 61.109375px;
            }
            #HEADLINE225 > .widget-content {
                font-size: 37px;
                text-align: center;
            }
            #HEADLINE217 {
                top: 268.531px;
                left: 29.5px;
                padding: 0px;
                width: 95.984375px;
                height: 38.984375px;
            }
            #HEADLINE217 > .widget-content {
                font-size: 28px;
                text-align: right;
                line-height: 39px;
            }
            #PARAGRAPH218 {
                top: 314.531px;
                left: 16.5px;
                padding: 0px;
                width: 123.984375px;
                height: 33.984375px;
            }
            #PARAGRAPH218 > .widget-content {
                font-size: 11px;
                text-align: center;
                line-height: 17px;
            }
            #PARAGRAPH220 {
                top: 307.75px;
                left: 148.5px;
                padding: 0px;
                width: 93.984375px;
                height: 16.984375px;
            }
            #PARAGRAPH220 > .widget-content {
                font-size: 11px;
                text-align: right;
                line-height: 17px;
            }
            #HEADLINE221 {
                top: 268.531px;
                left: 164.5px;
                padding: 0px;
                width: 67.984375px;
                height: 38.984375px;
            }
            #HEADLINE221 > .widget-content {
                font-size: 28px;
                text-align: right;
                line-height: 39px;
            }
            #PARAGRAPH223 {
                top: 314.073px;
                left: 265.5px;
                padding: 0px;
                width: 100px;
                height: 33.984375px;
            }
            #PARAGRAPH223 > .widget-content {
                font-size: 11px;
                text-align: center;
                line-height: 17px;
            }
            #HEADLINE224 {
                top: 270.02px;
                left: 279.5px;
                padding: 0px;
                width: 78.984375px;
                height: 38.984375px;
            }
            #HEADLINE224 > .widget-content {
                font-size: 28px;
                text-align: right;
                line-height: 39px;
            }
            #HEADLINE485 {
                top: 366px;
                left: -2px;
                padding: 0px;
                width: 384px;
                height: 74px;
            }
            #HEADLINE485 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE213 {
                top: 87.5px;
                left: 12.4531px;
                padding: 0px;
                width: 355px;
                height: 70px;
            }
            #HEADLINE213 > .widget-content {
                font-size: 27px;
                text-align: center;
                line-height: 35px;
            }
            #BOX252 {
                top: 0px;
                left: 0.5px;
                width: 375px;
                height: 68px;
            }
            #HEADLINE254 {
                display: none!important;
                top: 52.7344px;
                left: 32.5px;
                padding: 0px;
                width: 111.109375px;
                height: 30px;
            }
            #HEADLINE254 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BUTTON256 {
                display: none!important;
                top: 105.504px;
                left: 140.21px;
                padding: 0px;
                width: 150px;
                height: 27px;
            }
            #BUTTON256 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #HEADLINE255 {
                display: none!important;
                top: 56.6771px;
                left: 129.336px;
                padding: 0px;
                width: 246px;
                height: 26px;
            }
            #HEADLINE255 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #IMAGE492 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x200/5a28c4f8c3f6592b3acabec8/logo-1515731920.png);
            }
            #IMAGE492 {
                top: 10.7344px;
                left: 84.5px;
                width: 205px;
                height: 45.75px;
            }
            #HEADLINE41 {
                top: 283px;
                left: 10.9531px;
                padding: 0px;
                width: 355px;
                height: 40px;
            }
            #HEADLINE41 > .widget-content {
                font-size: 14px;
                text-align: center;
                line-height: 20px;
            }
            #IMAGE240 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s300x400/5a28c4f8c3f6592b3acabec8/HQT-1513416995.png);
            }
            #IMAGE240 {
                top: 22.5781px;
                left: 104.5px;
                width: 150px;
                height: 260px;
            }
            #HEADLINE258 {
                top: 18.843px;
                left: 10px;
                padding: 0px;
                width: 359px;
                height: 41px;
            }
            #HEADLINE258 > .widget-content {
                font-size: 31px;
                text-align: center;
            }
            #HEADLINE259 {
                top: 328.667px;
                left: 11.4219px;
                padding: 0px;
                width: 355px;
                height: 75.984375px;
            }
            #HEADLINE259 > .widget-content {
                font-size: 15px;
                text-align: center;
                line-height: 19px;
            }
            #HEADLINE87 {
                top: 18px;
                left: 9.99998px;
                padding: 0px;
                width: 355px;
                height: 33.296875px;
            }
            #HEADLINE87 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #GROUP463 {
                top: 66.0313px;
                left: 28.2969px;
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
                height: 105.515625px;
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
                height: 63.296875px;
            }
            #HEADLINE261 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX249 {
                top: 0px;
                left: 124.969px;
                width: 201.984375px;
                height: 201.984375px;
            }
            #HEADLINE250 {
                top: 57.0764px;
                left: 18.9167px;
                padding: 0px;
                width: 160px;
                height: 84.421875px;
            }
            #HEADLINE250 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #GROUP464 {
                top: 628.316px;
                left: 28.2708px;
                width: 325.96875px;
                height: 578.359375px;
            }
            #BOX93 {
                top: 187.986px;
                left: 124.976px;
                width: 201.984375px;
                height: 201.984375px;
            }
            #HEADLINE94 {
                top: 70px;
                left: 22px;
                padding: 0px;
                width: 160px;
                height: 63.296875px;
            }
            #HEADLINE94 > .widget-content {
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
                height: 84.421875px;
            }
            #HEADLINE96 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX262 {
                top: 376.372px;
                left: 3.93405px;
                width: 201.984375px;
                height: 201.984375px;
            }
            #HEADLINE263 {
                top: 62px;
                left: 23.9097px;
                padding: 0px;
                width: 160px;
                height: 84.421875px;
            }
            #HEADLINE263 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #IMAGE480 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x500/5a28c4f8c3f6592b3acabec8/business-presentation-2253131_1920-1513092253.png);
            }
            #IMAGE480 {
                display: none!important;
                top: 299.132px;
                left: -73px;
                width: 295.96875px;
                height: 353px;
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
            #BOX301 {
                top: 317.111px;
                left: 9.99998px;
                width: 355px;
                height: 496px;
            }
            #HEADLINE302 {
                top: 47.7778px;
                left: 43.0556px;
                padding: 0px;
                width: 268.859375px;
                height: 24.421875px;
            }
            #HEADLINE302 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE308 {
                top: 20px;
                left: 38.6111px;
                padding: 0px;
                width: 277.734375px;
                height: 17.734375px;
            }
            #HEADLINE308 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #LISTOP315 {
                top: 78.7153px;
                left: 0px;
                width: 355px;
                height: 260px;
            }
            #LISTOP315 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP315 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 8px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(0,0,0,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"/> </svg>');
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
            #LINE479 {
                top: 61.8889px;
                left: 69.6016px;
                width: 215.796875px;
                height: 25px;
            }
            #HEADLINE317 {
                top: 35px;
                left: 10.4844px;
                padding: 0px;
                width: 355px;
                height: 35.984375px;
            }
            #HEADLINE317 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #IMAGE478 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s400x400/5a28c4f8c3f6592b3acabec8/2-1513766663.png);
            }
            #IMAGE478 {
                top: 34px;
                left: 61.5px;
                width: 249.75px;
                height: 299.453125px;
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
                top: 32px;
                left: 10.4844px;
                padding: 0px;
                width: 355px;
                height: 32.984375px;
            }
            #HEADLINE119 > .widget-content {
                font-size: 20px;
                text-align: center;
                line-height: 33px;
            }
            #LISTOP319 {
                top: 319.667px;
                left: 10.4844px;
                width: 355px;
                height: 414px;
            }
            #LISTOP319 > .widget-content {
                font-size: 15px;
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
                margin-bottom: 4px;
            }
            #LISTOP319 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BUTTON320 {
                top: 757.672px;
                left: 101.044px;
                padding: 0px;
                width: 173px;
                height: 40px;
            }
            #BUTTON320 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #IMAGE465 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/s500x400/5a28c4f8c3f6592b3acabec8/Apple-Mac-Computer-Screen-PNG-1513826485.png);
            }
            #IMAGE465 {
                top: 73.382px;
                left: 10.4688px;
                width: 355px;
                height: 235px;
            }
            #YOUTUBE466 {
                top: 0px;
                left: -0.5px;
                width: 355px;
                height: 177.22222222222223px;
            }
            #BOX341 {
                top: 171.84px;
                left: 46.5px;
                width: 280px;
                height: 127.96875px;
            }
            #PARAGRAPH342 {
                top: 23px;
                left: 23px;
                padding: 0px;
                width: 222.1875px;
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
                background-image: url(https://static.ladipage.net/s400x200/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
            }
            #IMAGE343 {
                top: 123.047px;
                left: 38.0035px;
                width: 298.953125px;
                height: 38.953125px;
            }
            #HEADLINE344 {
                top: 9.86459px;
                left: 17.9722px;
                padding: 0px;
                width: 255.515625px;
                height: 21.09375px;
            }
            #HEADLINE344 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX348 {
                top: 467.935px;
                left: 48.5px;
                width: 280px;
                height: 127.96875px;
            }
            #PARAGRAPH349 {
                top: 23px;
                left: 23px;
                padding: 0px;
                width: 222.1875px;
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
                background-image: url(https://static.ladipage.net/s400x200/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
            }
            #IMAGE350 {
                top: 417.453px;
                left: 38.4688px;
                width: 298.953125px;
                height: 38.953125px;
            }
            #HEADLINE351 {
                top: 8.42014px;
                left: 18.0035px;
                padding: 0px;
                width: 255.515625px;
                height: 21.09375px;
            }
            #HEADLINE351 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX355 {
                top: 765.921px;
                left: 46.5px;
                width: 280px;
                height: 127.96875px;
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
                background-image: url(https://static.ladipage.net/s400x200/57b167c9ca57d39c18a1c57c/ribbon-xam.png);
            }
            #IMAGE357 {
                top: 714.765px;
                left: 42.5px;
                width: 298.953125px;
                height: 38.953125px;
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
                top: 616.891px;
                left: 144.5px;
                width: 90px;
                height: 85.953125px;
            }
            #SHAPE360 {
                top: 18px;
                left: 20px;
                width: 50px;
                height: 50px;
            }
            #BOX352 {
                top: 320.99px;
                left: 142.5px;
                width: 90px;
                height: 85.953125px;
            }
            #SHAPE353 {
                top: 18px;
                left: 20px;
                width: 50px;
                height: 50px;
            }
            #BOX345 {
                top: 28.0469px;
                left: 140.5px;
                width: 90px;
                height: 85.953125px;
            }
            #SHAPE346 {
                top: 18px;
                left: 20px;
                width: 50px;
                height: 50px;
            }
            #BOX476 {
                top: 364.608px;
                left: 52.5px;
                width: 270px;
                height: 140.328125px;
            }
            #BOX475 {
                top: 365.288px;
                left: 52.5px;
                width: 270px;
                height: 140.328125px;
            }
            #BOX474 {
                top: 366.299px;
                left: 52.5px;
                width: 270px;
                height: 140.328125px;
            }
            #BOX473 {
                top: 160.299px;
                left: 46.5px;
                width: 270px;
                height: 140.328125px;
            }
            #BOX470 {
                top: 763.968px;
                left: 49.5px;
                width: 270px;
                height: 140.328125px;
            }
            #BOX467 {
                top: 564.266px;
                left: 54.2653px;
                width: 270px;
                height: 145.015625px;
            }
            #HEADLINE152 {
                top: 33px;
                left: 20.5px;
                padding: 0px;
                width: 355px;
                height: 32.984375px;
            }
            #HEADLINE152 > .widget-content {
                font-size: 21px;
                text-align: center;
                line-height: 33px;
            }
            #GROUP371 {
                top: 743.25px;
                left: 28.4219px;
                width: 323.984375px;
                height: 128.234375px;
            }
            #GROUP372 {
                top: 0px;
                left: 1px;
                width: 323.984375px;
                height: 128.234375px;
            }
            #PARAGRAPH373 {
                top: 88.2344px;
                left: 59px;
                padding: 0px;
                width: 218.859375px;
                height: 40px;
            }
            #PARAGRAPH373 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE374 {
                top: 34.2344px;
                left: 104.984px;
                padding: 0px;
                width: 220px;
                height: 21.09375px;
            }
            #HEADLINE374 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX375 {
                top: 0px;
                left: 1px;
                width: 80.953125px;
                height: 80.953125px;
            }
            #BOX375 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/11390491_850585825022393_2193545903750965363_n-1513419810.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE376 {
                top: 55.3281px;
                left: 102.984px;
                padding: 0px;
                width: 220px;
                height: 16.625px;
            }
            #HEADLINE376 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP377 {
                display: none!important;
                top: 381.953125px;
                left: 1px;
                width: 311.984375px;
                height: 97.96875px;
            }
            #PARAGRAPH378 {
                top: 57.9688px;
                left: 94px;
                padding: 0px;
                width: 218.859px;
                height: 40px;
            }
            #PARAGRAPH378 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE379 {
                top: 5px;
                left: 92.9844px;
                padding: 0px;
                width: 220px;
                height: 21.0938px;
            }
            #HEADLINE379 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX380 {
                top: 0px;
                left: 1px;
                width: 80.9531px;
                height: 80.9531px;
            }
            #BOX380 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/10351598_470525099757357_3708220468651167693_n-1513419792.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE381 {
                top: 30px;
                left: 92.9844px;
                padding: 0px;
                width: 220px;
                height: 16.625px;
            }
            #HEADLINE381 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP382 {
                display: none!important;
                top: 190.734375px;
                left: 1px;
                width: 311.984375px;
                height: 140.984375px;
            }
            #PARAGRAPH383 {
                top: 60.9844px;
                left: 94px;
                padding: 0px;
                width: 218.859px;
                height: 80px;
            }
            #PARAGRAPH383 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE384 {
                top: 7.98438px;
                left: 92.9844px;
                padding: 0px;
                width: 220px;
                height: 21.0938px;
            }
            #HEADLINE384 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX385 {
                top: 0px;
                left: 1px;
                width: 80.9531px;
                height: 80.9531px;
            }
            #BOX385 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19598512_2476784115796364_8480913555474826671_n-1513419729.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE386 {
                top: 32.9844px;
                left: 92.9844px;
                padding: 0px;
                width: 220px;
                height: 16.625px;
            }
            #HEADLINE386 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP370 {
                top: 134.406px;
                left: 21.7188px;
                width: 336.890625px;
                height: 569.875px;
            }
            #GROUP147 {
                top: 0px;
                left: 14.9531px;
                width: 322.9375px;
                height: 145.9375px;
            }
            #PARAGRAPH148 {
                top: 85.9375px;
                left: 63.0469px;
                padding: 0px;
                width: 218.859375px;
                height: 60px;
            }
            #PARAGRAPH148 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE149 {
                top: 39.625px;
                left: 105.125px;
                padding: 0px;
                width: 134px;
                height: 21.109375px;
            }
            #HEADLINE149 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #BOX150 {
                top: 0px;
                left: 1px;
                width: 80.953125px;
                height: 80.953125px;
            }
            #BOX150 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/5a29f2a1d35c107ff6bcd1be/19657448_1506657509398351_7206365245466502454_n-1513419856.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #HEADLINE151 {
                top: 61.6094px;
                left: 103.938px;
                padding: 0px;
                width: 220px;
                height: 16.625px;
            }
            #HEADLINE151 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP142 {
                top: 404px;
                left: 3.76563px;
                width: 315.375px;
                height: 165.875px;
            }
            #PARAGRAPH143 {
                top: 85.875px;
                left: 66px;
                padding: 0px;
                width: 218.859375px;
                height: 80px;
            }
            #PARAGRAPH143 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE144 {
                top: 34.5px;
                left: 131.688px;
                padding: 0px;
                width: 101.21875px;
                height: 20.328125px;
            }
            #HEADLINE144 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE146 {
                top: 64.875px;
                left: 64.9531px;
                padding: 0px;
                width: 234.421875px;
                height: 16.625px;
            }
            #HEADLINE146 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX145 {
                top: 0px;
                left: 1px;
                width: 80.953125px;
                height: 80.953125px;
            }
            #BOX145 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/uploads/images/b765dadb-5e0e-4acb-97f2-7aaf24c61e8a.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #GROUP137 {
                top: 197.594px;
                left: 1px;
                width: 272.859375px;
                height: 163.25px;
            }
            #PARAGRAPH138 {
                top: 83.25px;
                left: 55px;
                padding: 0px;
                width: 218.859375px;
                height: 80px;
            }
            #PARAGRAPH138 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE139 {
                top: 41.3438px;
                left: 91.8438px;
                padding: 0px;
                width: 148.8125px;
                height: 20.328125px;
            }
            #HEADLINE139 > .widget-content {
                font-size: 18px;
                text-align: left;
            }
            #HEADLINE141 {
                top: 60.6719px;
                left: 90.8438px;
                padding: 0px;
                width: 51.625px;
                height: 16.03125px;
            }
            #HEADLINE141 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #BOX140 {
                top: 0px;
                left: 1px;
                width: 80.953125px;
                height: 80.953125px;
            }
            #BOX140 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/s200x200/uploads/images/b0d831b2-21ab-4f2b-9f5e-e460ab5daf0c.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #BOX445 {
                top: 19.7344px;
                left: 7.5px;
                width: 355px;
                height: 429px;
            }
            #SHAPE437 {
                top: 49px;
                left: 149.002px;
                width: 56.953125px;
                height: 56.953125px;
            }
            #HEADLINE438 {
                top: 108.958px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 58px;
            }
            #HEADLINE438 > .widget-content {
                font-size: 18px;
                text-align: center;
                line-height: 29px;
            }
            #HEADLINE447 {
                top: 275.33px;
                left: 31.5px;
                padding: 0px;
                width: 310px;
                height: 40px;
            }
            #HEADLINE447 > .widget-content {
                font-size: 34px;
                text-align: left;
            }
            #HEADLINE446 {
                top: 203.33px;
                left: 87.5px;
                padding: 0px;
                width: 200px;
                height: 50px;
            }
            #HEADLINE446 > .widget-content {
                font-size: 45px;
                text-align: left;
            }
            #BOX440 {
                top: 329.377px;
                left: 30.877px;
                width: 51.953125px;
                height: 51.953125px;
            }
            #SHAPE441 {
                top: 10.0938px;
                left: 8.3438px;
                width: 32.96875px;
                height: 32.96875px;
            }
            #BUTTON442 {
                top: 346.327px;
                left: 81.3889px;
                padding: 0px;
                width: 191px;
                height: 24px;
            }
            #BUTTON442 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX417 {
                top: 476.907px;
                left: 26.5156px;
                width: 324px;
                height: 488.546875px;
            }
            #GROUP419 {
                top: 109.313px;
                left: 10px;
                width: 297.96875px;
                height: 97.96875px;
            }
            #GROUP420 {
                top: 0px;
                left: 1.8125px;
                width: 294.296875px;
                height: 97.96875px;
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
                width: 61.40625px;
                height: 17.96875px;
            }
            #HEADLINE422 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE423 {
                top: 0px;
                left: 81.2656px;
                padding: 0px;
                width: 61.40625px;
                height: 17.96875px;
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
                width: 61.40625px;
                height: 17.96875px;
            }
            #HEADLINE426 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE427 {
                top: 0px;
                left: 156.172px;
                padding: 0px;
                width: 61.40625px;
                height: 17.96875px;
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
                width: 297.96875px;
                height: 42.96875px;
            }
            #COUNTDOWN429 > .widget-content {
                font-size: 36px;
            }
            #GROUP430 {
                top: 242.25px;
                left: 15.9375px;
                width: 268px;
                height: 226.1875px;
            }
            #FORM432 {
                top: 0px;
                left: 8.03125px;
                width: 267.96875px;
                height: 162.171875px;
            }
            #FORM432 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM433 {
                top: 0px;
                left: 0px;
                width: 267.96875px;
                height: 46.109375px;
            }
            #ITEM_FORM433 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM435 {
                top: 56.1285px;
                left: 0px;
                width: 267.96875px;
                height: 46.109375px;
            }
            #ITEM_FORM435 > .widget-content {
                font-size: 17px;
            }
            #ITEM_FORM444 {
                top: 112.257px;
                left: 0px;
                width: 267.96875px;
                height: 49.921875px;
            }
            #ITEM_FORM444 > .widget-content {
                font-size: 17px;
            }
            #BUTTON431 {
                top: 175.188px;
                left: 9px;
                padding: 0px;
                width: 267px;
                height: 49px;
            }
            #BUTTON431 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE418 {
                top: 31.934px;
                left: 5px;
                padding: 0px;
                width: 300px;
                height: 66px;
            }
            #HEADLINE418 > .widget-content {
                font-size: 14px;
                text-align: center;
                line-height: 22px;
            }
            #HEADLINE477 {
                top: 15.7917px;
                left: 16px;
                padding: 0px;
                width: 300px;
                height: 28px;
            }
            #HEADLINE477 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #LINE176 {
                top: 196.986px;
                left: 45.5px;
                width: 300px;
                height: 25px;
            }
            #GROUP188 {
                top: 43px;
                left: 75.9844px;
                width: 225.515625px;
                height: 86.984375px;
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
                width: 225.515625px;
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
                background-image: url(https://static.ladipage.net/s300x300/5a28c4f8c3f6592b3acabec8/logo_white-1513079500.png);
            }
            #IMAGE449 {
                display: none!important;
                top: 20px;
                left: 117.5px;
                width: 140px;
                height: 140px;
            }
            #HEADLINE452 {
                top: 140.986px;
                left: 11.4844px;
                padding: 0px;
                width: 355px;
                height: 51px;
            }
            #HEADLINE452 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
        }
    </style>
    <link rel="stylesheet" href="https://static.ladipage.net/googlefonts/css?family=Open+Sans:400,600,700|Roboto:300,400,700|Source+Sans+Pro:300,400,600,700|Montserrat:300,400,600,700&amp;subset=latin-ext,vietnamese" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="https://static.ladipage.net/source/animate.min.css?v=1515744576285" media="none" onload="if(media!='all')media='all'">
