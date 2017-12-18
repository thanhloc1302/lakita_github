<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title class="title-site" lp-id="5a2fbec231c8c06e99bf7c29">Đặt tiêu đề trang</title>
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="description" content="undefined">
    <meta name="keywords" content="undefined">
    <meta name="viewport" id="lp-viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function ladiViewport() {
            var width = (window.outerWidth > 0) ? window.outerWidth : screen.width;
            if (width > 3000) {
                width = width / 10;
            }
            var content = "width=device-width, initial-scale=1.0";
            var zoom = 1;
            if (width < 768) {
                zoom = width / 375;
                content = "width=375, initial-scale=" + zoom
            } else {
                if (width < 960) {
                    zoom = width / 960;
                    content = "width=960, initial-scale=" + zoom
                }
            }
            var meta = document.getElementsByTagName("meta");
            for (var i = 0; i < meta.length; i++) {
                if (meta[i].name.toLowerCase() == "viewport") {
                    meta[i].content = content;
                }
            }
        };
        ladiViewport();
    </script>
    <meta property="og:title" content="Đặt tiêu đề trang" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://demo.ladipage.me/5a2fbec231c8c06e99bf7c29" />
    <meta property="og:image" content="undefined">
    <meta property="og:description" content="undefined" />
    <meta name="format-detection" content="telephone=no" />
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
            var links = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Montserrat:300,400,600,700|Roboto:300,400,700|Roboto+Slab:300,400,700|Itim&amp;subset=latin-ext,vietnamese';
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
    </style>
    <style id="lp-css-ladi">
        @media(min-width:768px) {
            #SECTION2 {
                width: 100%;
                height: 527.8125px;
            }
            #SECTION2 .container {}
            #SECTION2 {}
            #POPUP107 {
                width: 100%;
                height: 100%;
            }
            #POPUP107 .container {
                width: 600px;
                height: 345px;
                top: calc(100%-345px);
            }
            #POPUP107 {}
            #SECTION52 {
                width: 100%;
                height: 729px;
            }
            #SECTION52 .container {}
            #SECTION52 {}
            #SECTION167 {
                width: 100%;
                height: 565px;
            }
            #SECTION167 .container {}
            #SECTION167 {}
            #SECTION120 {
                width: 100%;
                height: 523px;
            }
            #SECTION120 .container {}
            #SECTION120 {}
            #SECTION205 {
                width: 100%;
                height: 764px;
            }
            #SECTION205 .container {}
            #SECTION205 {}
            #POPUP328 {
                width: 100%;
                height: 100%;
            }
            #POPUP328 .container {
                width: 563px;
                height: 358px;
                top: calc(100%-358px);
            }
            #POPUP328 {}
            #POPUP324 {
                width: 100%;
                height: 100%;
            }
            #POPUP324 .container {
                width: 563px;
                height: 435px;
                top: calc(100%-435px);
            }
            #POPUP324 {}
            #POPUP320 {
                width: 100%;
                height: 100%;
            }
            #POPUP320 .container {
                width: 563px;
                height: 614px;
                top: calc(100%-614px);
            }
            #POPUP320 {}
            #SECTION361 {
                width: 100%;
                height: 349px;
            }
            #SECTION361 .container {}
            #SECTION361 {}
            #SECTION332 {
                width: 100%;
                height: 434px;
            }
            #SECTION332 .container {}
            #SECTION332 {}
            #SECTION372 {
                width: 100%;
                height: 680px;
            }
            #SECTION372 .container {}
            #SECTION372 {}
            #POPUP422 {
                width: 100%;
                height: 100%;
            }
            #POPUP422 .container {
                width: 479px;
                height: 284px;
                top: calc(100%-284px);
            }
            #POPUP422 {}
            #POPUP316 {
                width: 100%;
                height: 100%;
            }
            #POPUP316 .container {
                width: 563px;
                height: 605px;
                top: calc(100%-605px);
            }
            #POPUP316 {}
            #POPUP312 {
                width: 100%;
                height: 100%;
            }
            #POPUP312 .container {
                width: 563px;
                height: 492px;
                top: calc(100%-492px);
            }
            #POPUP312 {}
            #POPUP306 {
                width: 100%;
                height: 100%;
            }
            #POPUP306 .container {
                width: 563px;
                height: 448px;
                top: calc(100%-448px);
            }
            #POPUP306 {}
            #BUTTON3 {
                top: 46px;
                left: 757px;
                padding: 0px;
                width: 202px;
                height: 24px;
            }
            #BUTTON3 > .widget-content {
                font-size: 16px;
                text-align: right;
            }
            #BOX14 {
                top: 6.21846px;
                left: -468.783px;
                width: 1962.9749755859375px;
                height: 84.9749984741211px;
            }
            #HEADLINE415 {
                top: 55.7125px;
                left: 1395.18px;
                padding: 0px;
                width: 200px;
                height: 20px;
            }
            #HEADLINE415 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LINEVERTICAL434 {
                top: 54.75px;
                left: 1358.9765625px;
                width: 25px;
                height: 23.35069465637207px;
            }
            #LINEVERTICAL433 {
                top: 54.75px;
                left: 1189.9921875px;
                width: 25px;
                height: 23.35069465637207px;
            }
            #LINEVERTICAL432 {
                top: 51.75px;
                left: 1024.9921875px;
                width: 25px;
                height: 23.35069465637207px;
            }
            #LINEVERTICAL431 {
                top: 54.75px;
                left: 917.9765625px;
                width: 25px;
                height: 23.35069465637207px;
            }
            #HEADLINE21 {
                top: 57.46875px;
                left: 717px;
                padding: 0px;
                width: 82.984375px;
                height: 20px;
            }
            #HEADLINE21 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LINEVERTICAL175 {
                top: 53.9765625px;
                left: 799.9921875px;
                width: 25px;
                height: 23.35069465637207px;
            }
            #IMAGE416 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo-1513079436.png);
            }
            #IMAGE416 {
                top: 12.984375px;
                left: 370.9453125px;
                width: 370px;
                height: 37px;
            }
            #HEADLINE174 {
                top: 58.09375px;
                left: 839.96875px;
                padding: 0px;
                width: 78px;
                height: 20px;
            }
            #HEADLINE174 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE18 {
                top: 58.09375px;
                left: 1047.984375px;
                padding: 0px;
                width: 142px;
                height: 20px;
            }
            #HEADLINE18 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE16 {
                top: 58.09375px;
                left: 1213.984375px;
                padding: 0px;
                width: 154px;
                height: 20px;
            }
            #HEADLINE16 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE23 {
                top: 58.099998474121094px;
                left: 942.9750366210938px;
                padding: 0px;
                width: 78px;
                height: 20px;
            }
            #HEADLINE23 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE12 {
                top: 210px;
                left: 15.469px;
                padding: 0px;
                width: 603.953125px;
                height: 45px;
            }
            #HEADLINE12 > .widget-content {
                font-size: 39px;
                text-align: left;
            }
            #HEADLINE24 {
                top: 158.832px;
                left: 84px;
                padding: 0px;
                width: 432px;
                height: 31px;
            }
            #HEADLINE24 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #BUTTON25 {
                top: 279.5px;
                left: 204.276px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON25 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #IMAGE26 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/1212-1513085231.png);
            }
            #IMAGE26 {
                top: 135.828px;
                left: 374px;
                width: 616px;
                height: 392px;
            }
            #IMAGE108 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/team1.jpg);
            }
            #IMAGE108 {
                top: 0.5px;
                left: 0px;
                width: 280px;
                height: 345px;
            }
            #HEADLINE109 {
                top: 24.5px;
                left: 311px;
                padding: 0px;
                width: 256px;
                height: 81px;
            }
            #HEADLINE109 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #PARAGRAPH110 {
                top: 125.5px;
                left: 316px;
                padding: 0px;
                width: 242px;
                height: 22px;
            }
            #PARAGRAPH110 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #BOX111 {
                top: 155.5px;
                left: 304px;
                width: 271px;
                height: 57px;
            }
            #HEADLINE112 {
                top: 11px;
                left: 18px;
                padding: 0px;
                width: 237px;
                height: 36px;
            }
            #HEADLINE112 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #FORM113 {
                top: 232.5px;
                left: 304px;
                width: 269px;
                height: 44px;
            }
            #FORM113 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM114 {
                top: 0px;
                left: 0px;
                width: 269px;
                height: 44px;
            }
            #ITEM_FORM114 > .widget-content {
                font-size: 16px;
            }
            #BUTTON115 {
                top: 283.5px;
                left: 304px;
                padding: 0px;
                width: 271px;
                height: 40px;
            }
            #BUTTON115 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE53 {
                top: 58.8281px;
                left: 93.5px;
                padding: 0px;
                width: 821px;
                height: 34px;
            }
            #HEADLINE53 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX55 {
                top: 153px;
                left: 137.344px;
                width: 183px;
                height: 183px;
            }
            #BOX56 {
                top: 164px;
                left: 352.797px;
                width: 526px;
                height: 172px;
            }
            #HEADLINE58 {
                top: 17.5781px;
                left: 33.9688px;
                padding: 0px;
                width: 243px;
                height: 28px;
            }
            #HEADLINE58 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #PARAGRAPH57 {
                top: 74px;
                left: 32.671875px;
                padding: 0px;
                width: 466px;
                height: 57px;
            }
            #PARAGRAPH57 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE435 {
                top: 45.5625px;
                left: 40.203125px;
                padding: 0px;
                width: 253px;
                height: 20px;
            }
            #HEADLINE435 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP59 {
                top: 357.171875px;
                left: 23px;
                width: 849.125px;
                height: 316.21875px;
            }
            #LINE60 {
                top: 0px;
                left: 139px;
                width: 510px;
                height: 25px;
            }
            #LINE61 {
                top: 147.625px;
                left: 333.9375px;
                width: 510px;
                height: 25px;
            }
            #GROUP62 {
                top: 25px;
                left: 1px;
                width: 603.34375px;
                height: 102.46875px;
            }
            #GROUP67 {
                top: 25px;
                left: 69px;
                width: 630.640625px;
                height: 130.171875px;
            }
            #HEADLINE68 {
                top: 0px;
                left: 131.96875px;
                padding: 0px;
                width: 277px;
                height: 30px;
            }
            #HEADLINE68 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX69 {
                top: 0px;
                left: 1px;
                width: 112px;
                height: 114.609375px;
            }
            #BOX70 {
                top: 55.09375px;
                left: 129.640625px;
                width: 502px;
                height: 75.078125px;
            }
            #PARAGRAPH71 {
                top: 14.2879px;
                left: 23px;
                padding: 0px;
                width: 457px;
                height: 45.234375px;
            }
            #PARAGRAPH71 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP72 {
                top: 172.625px;
                left: 353.09375px;
                width: 497.03125px;
                height: 143.59375px;
            }
            #HEADLINE73 {
                top: 0px;
                left: 6.90625px;
                padding: 0px;
                width: 229px;
                height: 16.421875px;
            }
            #HEADLINE73 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX75 {
                top: 67.390625px;
                left: 1px;
                width: 497.03125px;
                height: 76.203125px;
            }
            #PARAGRAPH76 {
                top: 3.38757px;
                left: 13.0313px;
                padding: 0px;
                width: 457px;
                height: 31.203125px;
            }
            #PARAGRAPH76 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE51 {
                top: 101.172px;
                left: 298px;
                padding: 0px;
                width: 454px;
                height: 26px;
            }
            #HEADLINE51 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #LINE163 {
                top: 128px;
                left: 259px;
                width: 446px;
                height: 25px;
            }
            #HEADLINE436 {
                top: 413.156px;
                left: 219.641px;
                padding: 0px;
                width: 503px;
                height: 19px;
            }
            #HEADLINE436 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE437 {
                top: 561.219px;
                left: 380.062px;
                padding: 0px;
                width: 459px;
                height: 20px;
            }
            #HEADLINE437 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX438 {
                top: 521.813px;
                left: 174.626px;
                width: 183px;
                height: 183px;
            }
            #HEADLINE169 {
                top: 40.4844px;
                left: 152px;
                padding: 0px;
                width: 632px;
                height: 42px;
            }
            #HEADLINE169 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #BOX173 {
                top: 117.797px;
                left: 611px;
                width: 369px;
                height: 429px;
            }
            #LISTOP170 {
                top: 13.6875px;
                left: 20px;
                width: 330px;
                height: 396px;
            }
            #LISTOP170 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP170 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 22px;
                height: 22px;
                font-size: 11px;
                color: rgba(255, 255, 255, 1);
                margin-right: 13px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,255,255,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13 13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16 9.913 5 16 5zm-5.28 7.78l-1.44 1.44 6 6 .72.686.72-.687 6-6-1.44-1.44L16 18.064l-5.28-5.282z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP170 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP170 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #YOUTUBE168 {
                top: 159px;
                left: 23px;
                width: 543px;
                height: 324px;
            }
            #LINE181 {
                top: 82.9844px;
                left: 222px;
                width: 505px;
                height: 25px;
            }
            #BOX121 {
                top: 255px;
                left: 0px;
                width: 261px;
                height: 87px;
            }
            #HEADLINE122 {
                top: 8px;
                left: 13px;
                padding: 0px;
                width: 200px;
                height: 72px;
            }
            #HEADLINE122 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX123 {
                top: 119px;
                left: 0px;
                width: 261px;
                height: 89px;
            }
            #HEADLINE124 {
                top: 10px;
                left: 24px;
                padding: 0px;
                width: 200px;
                height: 72px;
            }
            #HEADLINE124 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX125 {
                top: 251px;
                left: 699px;
                width: 261px;
                height: 86px;
            }
            #HEADLINE126 {
                top: 14.171875px;
                left: 8px;
                padding: 0px;
                width: 234px;
                height: 48px;
            }
            #HEADLINE126 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX127 {
                top: 118.484px;
                left: 693px;
                width: 261px;
                height: 90px;
            }
            #HEADLINE128 {
                top: 8.703125px;
                left: 8px;
                padding: 0px;
                width: 253px;
                height: 72px;
            }
            #HEADLINE128 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE129 {
                top: 42px;
                left: 104px;
                padding: 0px;
                width: 735px;
                height: 36px;
            }
            #HEADLINE129 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #BOX131 {
                top: 391.172px;
                left: 0px;
                width: 261px;
                height: 87px;
            }
            #HEADLINE132 {
                top: 8px;
                left: 16px;
                padding: 0px;
                width: 200px;
                height: 72px;
            }
            #HEADLINE132 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX133 {
                top: 392.172px;
                left: 699px;
                width: 261px;
                height: 86px;
            }
            #HEADLINE134 {
                top: 14px;
                left: 8px;
                padding: 0px;
                width: 253px;
                height: 72px;
            }
            #HEADLINE134 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #LINE135 {
                top: 72px;
                left: 350px;
                width: 240px;
                height: 25px;
            }
            #IMAGE130 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/business-presentation-2253131_1920-1513092253.png);
            }
            #IMAGE130 {
                top: 110px;
                left: 358px;
                width: 316.5625px;
                height: 425px;
            }
            #HEADLINE206 {
                top: 29px;
                left: 77px;
                padding: 0px;
                width: 808px;
                height: 72px;
            }
            #HEADLINE206 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #LINE263 {
                top: 101.5px;
                left: 251px;
                width: 443px;
                height: 25px;
            }
            #HEADLINE264 {
                top: 126px;
                left: 302px;
                padding: 0px;
                width: 427px;
                height: 27px;
            }
            #HEADLINE264 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #BOX274 {
                top: 350px;
                left: 11px;
                width: 467px;
                height: 106px;
            }
            #HEADLINE294 {
                top: 19.75px;
                left: 106px;
                padding: 0px;
                width: 260px;
                height: 28px;
            }
            #HEADLINE294 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #BUTTON275 {
                top: 55px;
                left: 269px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON275 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX278 {
                top: 540.782px;
                left: 11px;
                width: 467px;
                height: 104px;
            }
            #HEADLINE297 {
                top: 18.109375px;
                left: 89px;
                padding: 0px;
                width: 260px;
                height: 28px;
            }
            #HEADLINE297 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #BUTTON279 {
                top: 52px;
                left: 262px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON279 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX283 {
                top: 249.5px;
                left: 502px;
                width: 467px;
                height: 114px;
            }
            #BUTTON284 {
                top: 69.75px;
                left: 269px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON284 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE293 {
                top: 12.5px;
                left: 71px;
                padding: 0px;
                width: 387px;
                height: 56px;
            }
            #HEADLINE293 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #BOX285 {
                top: 239px;
                left: 494px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE287 {
                top: 10.5px;
                left: 26px;
                padding: 0px;
                width: 33px;
                height: 46px;
            }
            #HEADLINE287 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #BOX269 {
                top: 165px;
                left: 6px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE301 {
                top: 19.859375px;
                left: 31px;
                padding: 0px;
                width: 32px;
                height: 41px;
            }
            #HEADLINE301 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #BOX288 {
                top: 437.5px;
                left: 502px;
                width: 467px;
                height: 121.390625px;
            }
            #BUTTON289 {
                top: 69.75px;
                left: 269px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON289 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE296 {
                top: 23.75px;
                left: 69px;
                padding: 0px;
                width: 369px;
                height: 28px;
            }
            #HEADLINE296 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #BOX290 {
                top: 619px;
                left: 501px;
                width: 467px;
                height: 119px;
            }
            #HEADLINE298 {
                top: 21.5px;
                left: 98px;
                padding: 0px;
                width: 369px;
                height: 28px;
            }
            #HEADLINE298 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #BUTTON291 {
                top: 70.5px;
                left: 269px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON291 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX276 {
                top: 340px;
                left: 0px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE300 {
                top: 10px;
                left: 22px;
                padding: 0px;
                width: 33px;
                height: 46px;
            }
            #HEADLINE300 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #BOX302 {
                top: 425px;
                left: 492px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE303 {
                top: 10.5px;
                left: 26px;
                padding: 0px;
                width: 33px;
                height: 46px;
            }
            #HEADLINE303 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #BOX280 {
                top: 532px;
                left: 0px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE281 {
                top: 14.609375px;
                left: 25px;
                padding: 0px;
                width: 33px;
                height: 46px;
            }
            #HEADLINE281 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #BOX304 {
                top: 609px;
                left: 493px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE305 {
                top: 10.5px;
                left: 26px;
                padding: 0px;
                width: 33px;
                height: 46px;
            }
            #HEADLINE305 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #BOX229 {
                top: 177px;
                left: 15px;
                width: 467px;
                height: 101px;
            }
            #BUTTON273 {
                top: 51.859375px;
                left: 269px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON273 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE230 {
                top: 11.390625px;
                left: 89px;
                padding: 0px;
                width: 285px;
                height: 26.46875px;
            }
            #HEADLINE230 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #BOX329 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE330 {
                top: 42px;
                left: 78px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE330 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP331 {
                top: 132px;
                left: 72.5px;
                width: 432px;
                height: 215px;
            }
            #LISTOP331 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP331 > ol.widget-content li::before {
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
            #LISTOP331 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP331 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX325 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE326 {
                top: 42px;
                left: 78px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE326 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP327 {
                top: 154px;
                left: 79.5px;
                width: 432px;
                height: 270px;
            }
            #LISTOP327 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP327 > ol.widget-content li::before {
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
            #LISTOP327 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP327 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX321 {
                top: -3.5px;
                left: 0px;
                width: 563px;
                height: 78px;
            }
            #HEADLINE322 {
                top: 42px;
                left: 78px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE322 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP323 {
                top: 74.5px;
                left: 32.5px;
                width: 481px;
                height: 495px;
            }
            #LISTOP323 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP323 > ol.widget-content li::before {
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
            #LISTOP323 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP323 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX362 {
                top: 178.172px;
                left: 98px;
                width: 838px;
                height: 109px;
            }
            #PARAGRAPH363 {
                top: 21.5px;
                left: 135px;
                padding: 0px;
                width: 666px;
                height: 69px;
            }
            #PARAGRAPH363 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #HEADLINE364 {
                top: 42.4687px;
                left: 204px;
                padding: 0px;
                width: 596px;
                height: 34px;
            }
            #HEADLINE364 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE365 {
                top: 119.172px;
                left: 241px;
                padding: 0px;
                width: 290px;
                height: 25px;
            }
            #HEADLINE365 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #HEADLINE366 {
                top: 154px;
                left: 238px;
                padding: 0px;
                width: 290px;
                height: 16px;
            }
            #HEADLINE366 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX367 {
                top: 62.1719px;
                left: -1px;
                width: 234px;
                height: 234px;
            }
            #LINE368 {
                top: 77.1094px;
                left: 358px;
                width: 280px;
                height: 25px;
            }
            #IMAGE346 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007673.jpg);
            }
            #IMAGE346 {
                top: 123px;
                left: 127px;
                width: 289px;
                height: 274px;
            }
            #HEADLINE347 {
                top: 25.5px;
                left: 321px;
                padding: 0px;
                width: 526px;
                height: 31px;
            }
            #HEADLINE347 > .widget-content {
                font-size: 25px;
                text-align: left;
            }
            #HEADLINE348 {
                top: 61px;
                left: 457px;
                padding: 0px;
                width: 282px;
                height: 38px;
            }
            #HEADLINE348 > .widget-content {
                font-size: 32px;
                text-align: left;
            }
            #BOX349 {
                top: 121.5px;
                left: 437px;
                width: 523px;
                height: 291px;
            }
            #HEADLINE350 {
                top: 12.5px;
                left: 29px;
                padding: 0px;
                width: 434px;
                height: 36px;
            }
            #HEADLINE350 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #LISTOP352 {
                top: 54.5px;
                left: 9px;
                width: 498px;
                height: 219px;
            }
            #LISTOP352 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP352 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 0px;
            }
            #LISTOP352 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP352 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #GROUP392 {
                top: 132px;
                left: 13px;
                width: 347px;
                height: 217.1875px;
            }
            #GROUP393 {
                top: 83.1875px;
                left: 5px;
                width: 342px;
                height: 56px;
            }
            #SHAPE394 {
                top: 4px;
                left: 1px;
                width: 29px;
                height: 29px;
            }
            #HEADLINE395 {
                top: 0px;
                left: 37px;
                padding: 0px;
                width: 293px;
                height: 28px;
            }
            #HEADLINE395 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE396 {
                top: 38px;
                left: 2px;
                padding: 0px;
                width: 341px;
                height: 18px;
            }
            #HEADLINE396 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP397 {
                top: 167.1875px;
                left: 6px;
                width: 341px;
                height: 50px;
            }
            #SHAPE398 {
                top: 0px;
                left: 1px;
                width: 29px;
                height: 29px;
            }
            #HEADLINE399 {
                top: 0px;
                left: 43px;
                padding: 0px;
                width: 299px;
                height: 28px;
            }
            #HEADLINE399 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE400 {
                top: 32px;
                left: 1px;
                padding: 0px;
                width: 340px;
                height: 18px;
            }
            #HEADLINE400 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP401 {
                top: 0px;
                left: 1px;
                width: 347px;
                height: 73px;
            }
            #HEADLINE402 {
                top: 1px;
                left: 35px;
                padding: 0px;
                width: 297px;
                height: 28px;
            }
            #HEADLINE402 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #SHAPE403 {
                top: 0px;
                left: 1px;
                width: 29px;
                height: 29px;
            }
            #HEADLINE404 {
                top: 37px;
                left: 1px;
                padding: 0px;
                width: 347px;
                height: 36px;
            }
            #HEADLINE404 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE413 {
                top: 550px;
                left: 408px;
                padding: 0px;
                width: 526px;
                height: 60px;
            }
            #HEADLINE413 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #COUNTDOWN439 {
                top: 309.188px;
                left: 534px;
                width: 320px;
                height: 57px;
            }
            #COUNTDOWN439 > .widget-content {
                font-size: 40px;
            }
            #HEADLINE440 {
                top: 276.188px;
                left: 645px;
                padding: 0px;
                width: 108px;
                height: 33px;
            }
            #HEADLINE440 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #BOX446 {
                top: -0.1875px;
                left: 526px;
                width: 333px;
                height: 216px;
            }
            #PARAGRAPH452 {
                top: 172px;
                left: 18px;
                padding: 0px;
                width: 265px;
                height: 22px;
            }
            #PARAGRAPH452 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE453 {
                top: 141.813px;
                left: 550px;
                padding: 0px;
                width: 276px;
                height: 52px;
            }
            #HEADLINE453 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE447 {
                top: 11px;
                left: 603px;
                padding: 0px;
                width: 185px;
                height: 25px;
            }
            #HEADLINE447 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE448 {
                top: 41.1875px;
                left: 544px;
                padding: 0px;
                width: 292px;
                height: 34px;
            }
            #HEADLINE448 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE449 {
                top: 75.1875px;
                left: 549px;
                padding: 0px;
                width: 287px;
                height: 42px;
            }
            #HEADLINE449 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #LINE450 {
                top: 117.1875px;
                left: 531px;
                width: 305px;
                height: 25px;
            }
            #HEADLINE472 {
                top: 232.188px;
                left: 598px;
                padding: 0px;
                width: 200px;
                height: 35px;
            }
            #HEADLINE472 > .widget-content {
                font-size: 29px;
                text-align: left;
            }
            #GROUP376 {
                top: 366.1875px;
                left: 378px;
                width: 599px;
                height: 169px;
            }
            #FORM377 {
                top: 0px;
                left: 1px;
                width: 590.984375px;
                height: 99px;
            }
            #ITEM_FORM378 {
                top: 0px;
                left: 1.00169px;
                width: 290.484375px;
                height: 41px;
            }
            #ITEM_FORM379 {
                top: 0px;
                left: 307.519px;
                width: 283.46875px;
                height: 41px;
            }
            #ITEM_FORM380 {
                top: 58px;
                left: 0px;
                width: 294px;
                height: 41px;
            }
            #ITEM_FORM410 {
                top: 60px;
                left: 311px;
                width: 279.984375px;
                height: 36px;
            }
            #BUTTON382 {
                top: 129px;
                left: 8px;
                padding: 0px;
                width: 592px;
                height: 40px;
            }
            #BUTTON382 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP383 {
                top: 394px;
                left: 0px;
                width: 287.078125px;
                height: 47px;
            }
            #BOX384 {
                top: 0px;
                left: 1px;
                width: 45.03125px;
                height: 47px;
            }
            #SHAPE385 {
                top: 9px;
                left: 8px;
                width: 29px;
                height: 29px;
            }
            #BOX388 {
                top: 0px;
                left: 243.046875px;
                width: 45.03125px;
                height: 47px;
            }
            #SHAPE389 {
                top: 9px;
                left: 8px;
                width: 29px;
                height: 29px;
            }
            #BOX390 {
                top: 0px;
                left: 81.03125px;
                width: 45.03125px;
                height: 47px;
            }
            #SHAPE391 {
                top: 9px;
                left: 8px;
                width: 29px;
                height: 29px;
            }
            #BOX386 {
                top: 0px;
                left: 156.015625px;
                width: 45.03125px;
                height: 47px;
            }
            #SHAPE387 {
                top: 9px;
                left: 8px;
                width: 29px;
                height: 29px;
            }
            #BOX424 {
                top: 19px;
                left: 222.5px;
                width: 48px;
                height: 48px;
            }
            #SHAPE425 {
                top: 14px;
                left: 13px;
                width: 26px;
                height: 26px;
            }
            #LINE427 {
                top: 110px;
                left: 208.5px;
                width: 64px;
                height: 25px;
            }
            #GROUP428 {
                top: 72px;
                left: 77.5px;
                width: 305px;
                height: 36px;
            }
            #HEADLINE429 {
                top: 0px;
                left: 142px;
                padding: 0px;
                width: 164px;
                height: 36px;
            }
            #HEADLINE429 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE430 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 132px;
                height: 36px;
            }
            #HEADLINE430 > .widget-content {
                font-size: 30px;
                text-align: right;
            }
            #PARAGRAPH426 {
                top: 139.5px;
                left: 38.5px;
                padding: 0px;
                width: 423px;
                height: 120px;
            }
            #PARAGRAPH426 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX317 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 54px;
            }
            #HEADLINE318 {
                top: 26px;
                left: 57px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE318 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP319 {
                top: 64.78125px;
                left: 11px;
                width: 515px;
                height: 530px;
            }
            #LISTOP319 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP319 > ol.widget-content li::before {
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
            #LISTOP319 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP319 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX313 {
                top: 0px;
                left: 0.5px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE314 {
                top: 42px;
                left: 78px;
                padding: 0px;
                width: 387px;
                height: 60px;
            }
            #HEADLINE314 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #LISTOP315 {
                top: 156.75px;
                left: 49.5px;
                width: 478px;
                height: 288px;
            }
            #LISTOP315 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP315 > ol.widget-content li::before {
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
            #LISTOP315 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP315 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LISTOP309 {
                top: 154px;
                left: 79.5px;
                width: 432px;
                height: 275px;
            }
            #LISTOP309 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP309 > ol.widget-content li::before {
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
            #LISTOP309 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP309 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX310 {
                top: 1px;
                left: 0px;
                width: 563px;
                height: 116px;
            }
            #HEADLINE311 {
                top: 42px;
                left: 78px;
                padding: 0px;
                width: 387px;
                height: 30px;
            }
            #HEADLINE311 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
        }
        
        #SECTION2 {
            display: block;
            background-image: url("https://static.ladipage.net/d/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION2 > .ladi-widget-overlay {
            background-color: rgba(75, 74, 74, 0.64);
        }
        
        #POPUP107 .container {
            display: block;
            background-color: rgba(255, 255, 255, 1);
        }
        
        #SECTION52 {
            display: block;
            background-color: rgba(238, 238, 238, 1);
        }
        
        #SECTION167 {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/atdesign-nordic-style-living-in-monochrome.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION167 > .ladi-widget-overlay {
            background-color: rgba(143, 143, 143, 0.5);
        }
        
        #SECTION120 {
            display: block;
            background-image: url("https://static.ladipage.net/d/5a28c4f8c3f6592b3acabec8/pencil-2782840_1920-1512838489125.jpg");
            background-color: rgba(170, 165, 165, 0.19);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #SECTION120 > .ladi-widget-overlay {
            background-color: rgba(165, 145, 145, 0.62);
        }
        
        #SECTION205 {
            display: block;
            background-color: rgba(227, 227, 227, 0.98);
        }
        
        #POPUP328 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP328 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP324 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP324 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP320 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP320 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #SECTION361 {
            display: block;
            background-color: rgba(233, 236, 242, 1);
        }
        
        #SECTION332 {
            display: block;
            background-image: url("https://static.ladipage.net/d/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION332 > .ladi-widget-overlay {
            background-color: rgba(123, 123, 123, 0.85);
        }
        
        #SECTION372 {
            display: block;
            background-image: url("https://static.ladipage.net/d/uploads/images/75f59b40-4c0c-4482-aa15-387947ff3236.jpg");
            background-color: rgba(255, 255, 255, 0);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top left;
            background-repeat: no-repeat;
        }
        
        #SECTION372 > .ladi-widget-overlay {
            background-color: rgba(1, 7, 28, 0.77);
        }
        
        #POPUP422 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/bg-2.png");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP422 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #POPUP316 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP316 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP312 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP312 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #POPUP306 .container {
            display: block;
            background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
            background-color: rgba(255, 255, 255, 1);
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
        }
        
        #POPUP306 > .ladi-widget-overlay {
            background-color: rgba(0, 0, 0, 0.83);
        }
        
        #BUTTON3 {
            display: table;
        }
        
        #BUTTON3 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(17, 133, 217, 1);
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 0px;
        }
        
        #BUTTON3> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON3> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #BOX14 {
            display: block;
        }
        
        #BOX14 > .widget-content {
            background-color: rgba(0, 0, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE415 {
            display: block;
        }
        
        #HEADLINE415 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 150, 243, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #LINEVERTICAL434 {
            display: block;
        }
        
        #LINEVERTICAL434>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 2px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(232, 237, 242, 1);
            margin-left: 10.5px;
        }
        
        #LINEVERTICAL434 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL433 {
            display: block;
        }
        
        #LINEVERTICAL433>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 2px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(232, 237, 242, 1);
            margin-left: 10.5px;
        }
        
        #LINEVERTICAL433 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL432 {
            display: block;
        }
        
        #LINEVERTICAL432>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 2px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(232, 237, 242, 1);
            margin-left: 10.5px;
        }
        
        #LINEVERTICAL432 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINEVERTICAL431 {
            display: block;
        }
        
        #LINEVERTICAL431>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 2px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(232, 237, 242, 1);
            margin-left: 10.5px;
        }
        
        #LINEVERTICAL431 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE21 {
            display: block;
        }
        
        #HEADLINE21 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 150, 243, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #LINEVERTICAL175 {
            display: block;
        }
        
        #LINEVERTICAL175>.widget-content .linevertical {
            border-top-width: 0px;
            border-right-width: 0px;
            border-left-width: 2px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(232, 237, 242, 1);
            margin-left: 10.5px;
        }
        
        #LINEVERTICAL175 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE416 {
            display: block;
        }
        
        #IMAGE416 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE416 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE174 {
            display: block;
        }
        
        #HEADLINE174 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 150, 243, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #HEADLINE18 {
            display: block;
        }
        
        #HEADLINE18 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 150, 243, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #HEADLINE16 {
            display: block;
        }
        
        #HEADLINE16 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 150, 243, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #HEADLINE23 {
            display: block;
        }
        
        #HEADLINE23 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 150, 243, 1);
            font-weight: 600;
            line-height: 20px;
        }
        
        #HEADLINE12 {
            display: block;
        }
        
        #HEADLINE12 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 45px;
        }
        
        #HEADLINE24 {
            display: block;
        }
        
        #HEADLINE24 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 31px;
        }
        
        #BUTTON25 {
            display: table;
        }
        
        #BUTTON25 > .widget-content {
            background-color: #3D9BE9;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 21px;
            letter-spacing: 0px;
        }
        
        #BUTTON25> .widget-content {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BUTTON25> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #IMAGE26 {
            display: block;
        }
        
        #IMAGE26 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE26 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #IMAGE108 {
            display: block;
        }
        
        #IMAGE108 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE109 {
            display: block;
        }
        
        #HEADLINE109 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 27px;
            letter-spacing: 0px;
        }
        
        #PARAGRAPH110 {
            display: block;
        }
        
        #PARAGRAPH110 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 1px;
        }
        
        #BOX111 {
            display: block;
        }
        
        #BOX111 > .widget-content {
            background-color: rgba(219, 0, 66, 1);
        }
        
        #BOX111> .widget-content {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX111> .ladi-widget-overlay {
            border-width: 0px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE112 {
            display: block;
        }
        
        #HEADLINE112 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            text-transform: uppercase;
            font-weight: 400;
            line-height: 36px;
            letter-spacing: 2px;
        }
        
        #FORM113 {
            display: block;
        }
        
        #FORM113 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM113 .widget-content::-webkit-input-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #FORM113 .widget-content:-moz-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #FORM113 .widget-content::-moz-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #FORM113 .widget-content:-ms-input-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #ITEM_FORM114 {
            display: block;
        }
        
        #ITEM_FORM114 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(89, 89, 89, 1);
        }
        
        #ITEM_FORM114> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(38, 38, 38, 1);
        }
        
        #ITEM_FORM114> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(38, 38, 38, 1);
        }
        
        #ITEM_FORM114 .widget-content::-webkit-input-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #ITEM_FORM114 .widget-content:-moz-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #ITEM_FORM114 .widget-content::-moz-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #ITEM_FORM114 .widget-content:-ms-input-placeholder {
            color: rgba(36, 36, 36, 1)
        }
        
        #BUTTON115 {
            display: table;
        }
        
        #BUTTON115 > .widget-content {
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
        
        #BUTTON115> .widget-content {
            border-radius: 0px;
        }
        
        #BUTTON115> .ladi-widget-overlay {
            border-radius: 0px;
        }
        
        #HEADLINE53 {
            display: block;
        }
        
        #HEADLINE53 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 300;
            line-height: 34px;
        }
        
        #BOX55 {
            display: block;
        }
        
        #BOX55 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15122-1513324056.jpg");
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
        
        #BOX55> .widget-content {
            border-radius: 550px;
        }
        
        #BOX55> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #BOX55 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX56 {
            display: block;
        }
        
        #BOX56 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX56> .widget-content {
            border-radius: 3px;
        }
        
        #BOX56> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #HEADLINE58 {
            display: block;
        }
        
        #HEADLINE58 > .widget-content {
            opacity: 1;
            font-family: 'Roboto Slab';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #PARAGRAPH57 {
            display: block;
        }
        
        #PARAGRAPH57 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Roboto Slab';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #HEADLINE435 {
            display: block;
        }
        
        #HEADLINE435 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(34, 86, 81, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #GROUP59 {
            display: block;
        }
        
        #GROUP59 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE60 {
            display: block;
        }
        
        #LINE60>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
            margin-top: 12px;
        }
        
        #LINE60 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE61 {
            display: block;
        }
        
        #LINE61>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
            margin-top: 12px;
        }
        
        #LINE61 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP62 {
            display: block;
        }
        
        #GROUP62 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP67 {
            display: block;
        }
        
        #GROUP67 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE68 {
            display: block;
        }
        
        #HEADLINE68 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #BOX69 {
            display: block;
        }
        
        #BOX69 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp1512-1513323610.JPG");
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
        
        #BOX69> .widget-content {
            border-radius: 550px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX69> .ladi-widget-overlay {
            border-radius: 550px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX69 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #BOX70 {
            display: block;
        }
        
        #BOX70 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX70> .widget-content {
            border-radius: 3px;
        }
        
        #BOX70> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #PARAGRAPH71 {
            display: block;
        }
        
        #PARAGRAPH71 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #GROUP72 {
            display: block;
        }
        
        #GROUP72 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE73 {
            display: block;
        }
        
        #HEADLINE73 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #BOX75 {
            display: block;
        }
        
        #BOX75 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX75> .widget-content {
            border-radius: 3px;
        }
        
        #BOX75> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #PARAGRAPH76 {
            display: block;
        }
        
        #PARAGRAPH76 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #HEADLINE51 {
            display: block;
        }
        
        #HEADLINE51 > .widget-content {
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 26px;
        }
        
        #LINE163 {
            display: block;
        }
        
        #LINE163>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
            margin-top: 10.5px;
        }
        
        #LINE163 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE436 {
            display: block;
        }
        
        #HEADLINE436 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(30, 78, 74, 1);
            font-weight: 400;
            line-height: 19px;
        }
        
        #HEADLINE437 {
            display: block;
        }
        
        #HEADLINE437 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(50, 90, 86, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX438 {
            display: block;
        }
        
        #BOX438 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/lp15123-1513325175.JPG");
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
        
        #BOX438> .widget-content {
            border-radius: 550px;
        }
        
        #BOX438> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #BOX438 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #HEADLINE169 {
            display: block;
        }
        
        #HEADLINE169 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 42px;
        }
        
        #BOX173 {
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
            display: block;
        }
        
        #BOX173 > .widget-content {
            background-color: rgba(116, 139, 192, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX173> .widget-content {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX173> .ladi-widget-overlay {
            border-radius: 15px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #LISTOP170 {
            display: block;
        }
        
        #LISTOP170 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(255, 255, 255, 1);
            line-height: 21px;
        }
        
        #YOUTUBE168 {
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
            display: block;
        }
        
        #YOUTUBE168 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #LINE181 {
            display: block;
        }
        
        #LINE181>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
            margin-top: 10.5px;
        }
        
        #LINE181 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX121 {
            display: block;
        }
        
        #BOX121 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(33, 150, 243, 1);
        }
        
        #HEADLINE122 {
            display: block;
        }
        
        #HEADLINE122 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX123 {
            display: block;
        }
        
        #BOX123 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(33, 150, 243, 1);
        }
        
        #HEADLINE124 {
            display: block;
        }
        
        #HEADLINE124 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX125 {
            display: block;
        }
        
        #BOX125 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(33, 150, 243, 1);
        }
        
        #HEADLINE126 {
            display: block;
        }
        
        #HEADLINE126 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX127 {
            display: block;
        }
        
        #BOX127 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(33, 150, 243, 1);
        }
        
        #HEADLINE128 {
            display: block;
        }
        
        #HEADLINE128 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #HEADLINE129 {
            display: block;
        }
        
        #HEADLINE129 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 600;
            line-height: 36px;
        }
        
        #BOX131 {
            display: block;
        }
        
        #BOX131 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(33, 150, 243, 1);
        }
        
        #HEADLINE132 {
            display: block;
        }
        
        #HEADLINE132 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX133 {
            display: block;
        }
        
        #BOX133 > .widget-content {
            background-color: rgba(0, 0, 0, 0.65);
            color: rgba(0, 0, 0, 1);
            box-shadow: 0px 3px 0px rgba(33, 150, 243, 1);
        }
        
        #HEADLINE134 {
            display: block;
        }
        
        #HEADLINE134 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #LINE135 {
            display: block;
        }
        
        #LINE135>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
            margin-top: 10.5px;
        }
        
        #LINE135 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE130 {
            display: block;
        }
        
        #IMAGE130 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE130 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE206 {
            display: block;
        }
        
        #HEADLINE206 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 700;
            line-height: 36px;
        }
        
        #LINE263 {
            display: block;
        }
        
        #LINE263>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
            margin-top: 12px;
        }
        
        #LINE263 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE264 {
            display: block;
        }
        
        #HEADLINE264 > .widget-content {
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #BOX274 {
            display: block;
        }
        
        #BOX274 > .widget-content {
            background-color: rgba(6, 21, 64, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX274> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(34, 196, 242, 1);
        }
        
        #BOX274> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(34, 196, 242, 1);
        }
        
        #HEADLINE294 {
            display: block;
        }
        
        #HEADLINE294 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #BUTTON275 {
            display: table;
        }
        
        #BUTTON275 > .widget-content {
            background-color: #3D9BE9;
            color: #ffffff;
            line-height: 24px;
        }
        
        #BUTTON275> .widget-content {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BUTTON275> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX278 {
            display: block;
        }
        
        #BOX278 > .widget-content {
            background-color: rgba(6, 21, 64, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX278> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(34, 196, 242, 1);
        }
        
        #BOX278> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(34, 196, 242, 1);
        }
        
        #HEADLINE297 {
            display: block;
        }
        
        #HEADLINE297 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #BUTTON279 {
            display: table;
        }
        
        #BUTTON279 > .widget-content {
            background-color: #3D9BE9;
            color: #ffffff;
            line-height: 24px;
        }
        
        #BUTTON279> .widget-content {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BUTTON279> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX283 {
            display: block;
        }
        
        #BOX283 > .widget-content {
            background-color: rgba(255, 255, 255, 0.02);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX283> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX283> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON284 {
            display: table;
        }
        
        #BUTTON284 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 24px;
        }
        
        #BUTTON284> .widget-content {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON284> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE293 {
            display: block;
        }
        
        #HEADLINE293 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #BOX285 {
            display: block;
        }
        
        #BOX285 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(33, 150, 243, 1);
        }
        
        #BOX285> .widget-content {
            border-radius: 100px;
        }
        
        #BOX285> .ladi-widget-overlay {
            border-radius: 100px;
        }
        
        #HEADLINE287 {
            display: block;
        }
        
        #HEADLINE287 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 46px;
        }
        
        #BOX269 {
            display: block;
        }
        
        #BOX269 > .widget-content {
            background-color: rgba(34, 196, 242, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(255, 255, 255, 1);
        }
        
        #BOX269> .widget-content {
            border-radius: 100px;
        }
        
        #BOX269> .ladi-widget-overlay {
            border-radius: 100px;
        }
        
        #HEADLINE301 {
            display: block;
        }
        
        #HEADLINE301 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 41px;
        }
        
        #BOX288 {
            display: block;
        }
        
        #BOX288 > .widget-content {
            background-color: rgba(255, 255, 255, 0.02);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX288> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX288> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON289 {
            display: table;
        }
        
        #BUTTON289 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 24px;
        }
        
        #BUTTON289> .widget-content {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON289> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE296 {
            display: block;
        }
        
        #HEADLINE296 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #BOX290 {
            display: block;
        }
        
        #BOX290 > .widget-content {
            background-color: rgba(255, 255, 255, 0.02);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX290> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX290> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE298 {
            display: block;
        }
        
        #HEADLINE298 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #BUTTON291 {
            display: table;
        }
        
        #BUTTON291 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            line-height: 24px;
        }
        
        #BUTTON291> .widget-content {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BUTTON291> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 1);
        }
        
        #BOX276 {
            display: block;
        }
        
        #BOX276 > .widget-content {
            background-color: rgba(34, 196, 242, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(255, 255, 255, 1);
        }
        
        #BOX276> .widget-content {
            border-radius: 100px;
        }
        
        #BOX276> .ladi-widget-overlay {
            border-radius: 100px;
        }
        
        #HEADLINE300 {
            display: block;
        }
        
        #HEADLINE300 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 46px;
        }
        
        #BOX302 {
            display: block;
        }
        
        #BOX302 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(33, 150, 243, 1);
        }
        
        #BOX302> .widget-content {
            border-radius: 100px;
        }
        
        #BOX302> .ladi-widget-overlay {
            border-radius: 100px;
        }
        
        #HEADLINE303 {
            display: block;
        }
        
        #HEADLINE303 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 46px;
        }
        
        #BOX280 {
            display: block;
        }
        
        #BOX280 > .widget-content {
            background-color: rgba(34, 196, 242, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(255, 255, 255, 1);
        }
        
        #BOX280> .widget-content {
            border-radius: 100px;
        }
        
        #BOX280> .ladi-widget-overlay {
            border-radius: 100px;
        }
        
        #HEADLINE281 {
            display: block;
        }
        
        #HEADLINE281 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 46px;
        }
        
        #BOX304 {
            display: block;
        }
        
        #BOX304 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(0, 0, 0, 1);
            box-shadow: 2px 2px 0px rgba(33, 150, 243, 1);
        }
        
        #BOX304> .widget-content {
            border-radius: 100px;
        }
        
        #BOX304> .ladi-widget-overlay {
            border-radius: 100px;
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
            line-height: 46px;
        }
        
        #BOX229 {
            display: block;
        }
        
        #BOX229 > .widget-content {
            background-color: rgba(6, 21, 64, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX229> .widget-content {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(34, 196, 242, 1);
        }
        
        #BOX229> .ladi-widget-overlay {
            border-width: 3px;
            border-style: solid;
            border-color: rgba(34, 196, 242, 1);
        }
        
        #BUTTON273 {
            display: table;
        }
        
        #BUTTON273 > .widget-content {
            background-color: #3D9BE9;
            color: #ffffff;
            line-height: 24px;
        }
        
        #BUTTON273> .widget-content {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BUTTON273> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE230 {
            display: block;
        }
        
        #HEADLINE230 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 27px;
        }
        
        #BOX329 {
            display: block;
        }
        
        #BOX329 > .widget-content {
            background-color: rgba(255, 230, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE330 {
            display: block;
        }
        
        #HEADLINE330 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP331 {
            display: block;
        }
        
        #LISTOP331 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX325 {
            display: block;
        }
        
        #BOX325 > .widget-content {
            background-color: rgba(255, 230, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE326 {
            display: block;
        }
        
        #HEADLINE326 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP327 {
            display: block;
        }
        
        #LISTOP327 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX321 {
            display: block;
        }
        
        #BOX321 > .widget-content {
            background-color: rgba(255, 230, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE322 {
            display: block;
        }
        
        #HEADLINE322 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP323 {
            display: block;
        }
        
        #LISTOP323 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX362 {
            display: block;
        }
        
        #BOX362 > .widget-content {
            background-color: rgba(189, 189, 189, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX362> .widget-content {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #BOX362> .ladi-widget-overlay {
            border-width: 2px;
            border-style: solid;
            border-color: rgba(33, 150, 243, 1);
        }
        
        #PARAGRAPH363 {
            display: block;
        }
        
        #PARAGRAPH363 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(29, 25, 25, 1);
            font-weight: 400;
            line-height: 23px;
        }
        
        #HEADLINE364 {
            display: block;
        }
        
        #HEADLINE364 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 34px;
        }
        
        #HEADLINE365 {
            display: block;
        }
        
        #HEADLINE365 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(66, 66, 66, 1);
            font-weight: 700;
            line-height: 25px;
        }
        
        #HEADLINE366 {
            display: block;
        }
        
        #HEADLINE366 > .widget-content {
            opacity: 1;
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(41, 98, 255, 1);
            font-weight: 400;
            line-height: 16px;
        }
        
        #BOX367 {
            display: block;
        }
        
        #BOX367 > .widget-content {
            background-image: url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png");
            background-origin: content-box;
            background-size: cover;
            background-attachment: scroll;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: rgba(255, 255, 255, 1);
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
        
        #BOX367> .widget-content {
            border-radius: 550px;
        }
        
        #BOX367> .ladi-widget-overlay {
            border-radius: 550px;
        }
        
        #BOX367 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #LINE368 {
            display: block;
        }
        
        #LINE368>.widget-content .line {
            border-top-width: 2px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dashed;
            border-color: rgba(33, 150, 243, 1);
            margin-top: 10.5px;
        }
        
        #LINE368 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE346 {
            display: block;
        }
        
        #IMAGE346 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #IMAGE346 > .ladi-widget-overlay {
            background-color: rgba(255, 255, 255, 0)
        }
        
        #HEADLINE347 {
            display: block;
        }
        
        #HEADLINE347 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 31px;
        }
        
        #HEADLINE348 {
            display: block;
        }
        
        #HEADLINE348 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 38px;
        }
        
        #BOX349 {
            display: block;
        }
        
        #BOX349 > .widget-content {
            background-color: rgba(255, 245, 245, 0.56);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX349> .widget-content {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #BOX349> .ladi-widget-overlay {
            border-radius: 20px;
            border-width: 2px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
        }
        
        #HEADLINE350 {
            display: block;
        }
        
        #HEADLINE350 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #LISTOP352 {
            display: block;
        }
        
        #LISTOP352 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
            line-height: 21px;
        }
        
        #GROUP392 {
            display: block;
        }
        
        #GROUP392 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #GROUP393 {
            display: block;
        }
        
        #GROUP393 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE394 {
            display: block;
        }
        
        #SHAPE394 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE394> .widget-content svg {
            fill: rgba(0, 204, 232, 1);
        }
        
        #HEADLINE395 {
            display: block;
        }
        
        #HEADLINE395 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #HEADLINE396 {
            display: block;
        }
        
        #HEADLINE396 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 18px;
        }
        
        #GROUP397 {
            display: block;
        }
        
        #GROUP397 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #SHAPE398 {
            display: block;
        }
        
        #SHAPE398 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE398> .widget-content svg {
            fill: rgba(0, 204, 232, 1);
        }
        
        #HEADLINE399 {
            display: block;
        }
        
        #HEADLINE399 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #HEADLINE400 {
            display: block;
        }
        
        #HEADLINE400 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 18px;
        }
        
        #GROUP401 {
            display: block;
        }
        
        #GROUP401 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE402 {
            display: block;
        }
        
        #HEADLINE402 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 28px;
        }
        
        #SHAPE403 {
            display: block;
        }
        
        #SHAPE403 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE403> .widget-content svg {
            fill: rgba(0, 204, 232, 1);
        }
        
        #HEADLINE404 {
            display: block;
        }
        
        #HEADLINE404 > .widget-content {
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 18px;
        }
        
        #HEADLINE413 {
            display: block;
        }
        
        #HEADLINE413 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #COUNTDOWN439 {
            display: block;
        }
        
        #COUNTDOWN439 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 0px;
        }
        
        #HEADLINE440 {
            -webkit-animation-duration: 3s;
            animation-duration: 3s;
            display: block;
        }
        
        #HEADLINE440 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(244, 67, 54, 1);
            font-weight: 600;
            line-height: 33px;
        }
        
        #BOX446 {
            display: block;
        }
        
        #BOX446 > .widget-content {
            background-color: rgba(0, 0, 0, 0.38);
            color: rgba(0, 0, 0, 1);
        }
        
        #PARAGRAPH452 {
            display: block;
        }
        
        #PARAGRAPH452 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            line-height: 22px;
        }
        
        #HEADLINE453 {
            display: block;
        }
        
        #HEADLINE453 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 26px;
        }
        
        #HEADLINE447 {
            display: block;
        }
        
        #HEADLINE447 > .widget-content {
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            text-decoration: line-through;
            -webkit-text-decoration-line: line-through;
            line-height: 25px;
        }
        
        #HEADLINE448 {
            display: block;
        }
        
        #HEADLINE448 > .widget-content {
            color: rgba(244, 67, 54, 1);
            font-weight: 700;
            line-height: 34px;
        }
        
        #HEADLINE449 {
            display: block;
        }
        
        #HEADLINE449 > .widget-content {
            opacity: 1;
            font-family: 'Open Sans', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 700;
            line-height: 42px;
        }
        
        #LINE450 {
            display: block;
        }
        
        #LINE450>.widget-content .line {
            border-top-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: solid;
            border-color: rgba(255, 255, 255, 1);
            margin-top: 12px;
        }
        
        #LINE450 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE472 {
            display: block;
        }
        
        #HEADLINE472 > .widget-content {
            font-family: "Open Sans", sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 35px;
        }
        
        #GROUP376 {
            display: block;
        }
        
        #GROUP376 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM377 {
            display: block;
        }
        
        #FORM377 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #FORM377 .widget-content::-webkit-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #FORM377 .widget-content:-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #FORM377 .widget-content::-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #FORM377 .widget-content:-ms-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM378 {
            display: block;
        }
        
        #ITEM_FORM378 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(18, 17, 17, 1);
        }
        
        #ITEM_FORM378> .widget-content {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM378> .ladi-widget-overlay {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM378 .widget-content::-webkit-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM378 .widget-content:-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM378 .widget-content::-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM378 .widget-content:-ms-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM379 {
            display: block;
        }
        
        #ITEM_FORM379 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(18, 17, 17, 1);
        }
        
        #ITEM_FORM379> .widget-content {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM379> .ladi-widget-overlay {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM379 .widget-content::-webkit-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM379 .widget-content:-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM379 .widget-content::-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM379 .widget-content:-ms-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM380 {
            display: block;
        }
        
        #ITEM_FORM380 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(18, 17, 17, 1);
        }
        
        #ITEM_FORM380> .widget-content {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM380> .ladi-widget-overlay {
            border-radius: 3px;
            border-width: 1px;
            border-style: solid;
            border-color: #eee;
        }
        
        #ITEM_FORM380 .widget-content::-webkit-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM380 .widget-content:-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM380 .widget-content::-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM380 .widget-content:-ms-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM410 {
            display: block;
        }
        
        #ITEM_FORM410 > .widget-content {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(18, 17, 17, 1);
        }
        
        #ITEM_FORM410> .widget-content {
            border-radius: 3px;
        }
        
        #ITEM_FORM410> .ladi-widget-overlay {
            border-radius: 3px;
        }
        
        #ITEM_FORM410 .widget-content::-webkit-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM410 .widget-content:-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM410 .widget-content::-moz-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #ITEM_FORM410 .widget-content:-ms-input-placeholder {
            color: rgba(66, 55, 55, 1)
        }
        
        #BUTTON382 {
            display: table;
        }
        
        #BUTTON382 > .widget-content {
            background-color: rgba(0, 204, 232, 1);
            font-family: 'Open Sans';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #ffffff;
            font-weight: 700;
            line-height: 22px;
        }
        
        #BUTTON382> .widget-content {
            border-radius: 5px;
        }
        
        #BUTTON382> .ladi-widget-overlay {
            border-radius: 5px;
        }
        
        #GROUP383 {
            display: block;
        }
        
        #GROUP383 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX384 {
            display: block;
        }
        
        #BOX384 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX384> .widget-content {
            border-radius: 300px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 204, 232, 1);
        }
        
        #BOX384> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE385 {
            display: block;
        }
        
        #SHAPE385 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE385> .widget-content svg {
            fill: rgba(0, 204, 232, 1);
        }
        
        #BOX388 {
            display: block;
        }
        
        #BOX388 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX388> .widget-content {
            border-radius: 300px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 204, 232, 1);
        }
        
        #BOX388> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE389 {
            display: block;
        }
        
        #SHAPE389 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE389> .widget-content svg {
            fill: rgba(0, 204, 232, 1);
        }
        
        #BOX390 {
            display: block;
        }
        
        #BOX390 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX390> .widget-content {
            border-radius: 300px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 204, 232, 1);
        }
        
        #BOX390> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE391 {
            display: block;
        }
        
        #SHAPE391 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE391> .widget-content svg {
            fill: rgba(0, 204, 232, 1);
        }
        
        #BOX386 {
            display: block;
        }
        
        #BOX386 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #BOX386> .widget-content {
            border-radius: 300px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 204, 232, 1);
        }
        
        #BOX386> .ladi-widget-overlay {
            border-radius: 300px;
            border-width: 3px;
            border-style: solid;
            border-color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE387 {
            display: block;
        }
        
        #SHAPE387 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 204, 232, 1);
        }
        
        #SHAPE387> .widget-content svg {
            fill: rgba(0, 204, 232, 1);
        }
        
        #BOX424 {
            display: block;
        }
        
        #BOX424 > .widget-content {
            background-color: rgba(72, 227, 195, 0);
        }
        
        #BOX424> .widget-content {
            border-radius: 50px;
            border-width: 2px;
            border-style: solid;
            border-color: #F6511F;
        }
        
        #BOX424> .ladi-widget-overlay {
            border-radius: 50px;
            border-width: 2px;
            border-style: solid;
            border-color: #F6511F;
        }
        
        #SHAPE425 {
            display: block;
        }
        
        #SHAPE425 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: #F6511F;
        }
        
        #SHAPE425> .widget-content svg {
            fill: #F6511F;
        }
        
        #LINE427 {
            display: block;
        }
        
        #LINE427>.widget-content .line {
            border-top-width: 3px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 0px;
            border-style: dotted;
            border-color: rgba(74, 74, 74, 1);
            margin-top: 9.5px;
        }
        
        #LINE427 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
        }
        
        #GROUP428 {
            display: block;
        }
        
        #GROUP428 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE429 {
            display: block;
        }
        
        #HEADLINE429 > .widget-content {
            font-family: 'Itim', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: #F6511F;
            font-weight: 400;
            line-height: 36px;
        }
        
        #HEADLINE430 {
            display: block;
        }
        
        #HEADLINE430 > .widget-content {
            font-family: 'Itim', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(74, 74, 74, 1);
            font-weight: 400;
            line-height: 36px;
        }
        
        #PARAGRAPH426 {
            display: block;
        }
        
        #PARAGRAPH426 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Itim', cursive;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(74, 74, 74, 1);
            font-weight: 400;
            line-height: 24px;
        }
        
        #BOX317 {
            display: block;
        }
        
        #BOX317 > .widget-content {
            background-color: rgba(255, 230, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE318 {
            display: block;
        }
        
        #HEADLINE318 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP319 {
            display: block;
        }
        
        #LISTOP319 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX313 {
            display: block;
        }
        
        #BOX313 > .widget-content {
            background-color: rgba(255, 230, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE314 {
            display: block;
        }
        
        #HEADLINE314 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        #LISTOP315 {
            display: block;
        }
        
        #LISTOP315 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #LISTOP309 {
            display: block;
        }
        
        #LISTOP309 > .widget-content {
            background-color: rgba(255, 255, 255, 0);
            font-family: 'Roboto', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
            line-height: 20px;
        }
        
        #BOX310 {
            display: block;
        }
        
        #BOX310 > .widget-content {
            background-color: rgba(255, 230, 0, 1);
            color: rgba(0, 0, 0, 1);
        }
        
        #HEADLINE311 {
            display: block;
        }
        
        #HEADLINE311 > .widget-content {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            color: rgba(33, 33, 33, 1);
            font-weight: 400;
            line-height: 30px;
        }
        
        @media(max-width: 767px) {
            body {
                position: relative;
            }
            #SECTION2 {
                width: 100%;
                height: 360px;
            }
            #SECTION2 .container {}
            #SECTION2 {
                background-image: linear-gradient(rgba(75, 74, 74, 0.64), rgba(75, 74, 74, 0.64)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -o-linear-gradient(rgba(75, 74, 74, 0.64), rgba(75, 74, 74, 0.64)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -ms-linear-gradient(rgba(75, 74, 74, 0.64), rgba(75, 74, 74, 0.64)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -moz-linear-gradient(rgba(75, 74, 74, 0.64), rgba(75, 74, 74, 0.64)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-image: -webkit-linear-gradient(rgba(75, 74, 74, 0.64), rgba(75, 74, 74, 0.64)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/25075576_1419297061526712_1956291933_o-1512810086907.jpg");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #POPUP107 {
                width: 100%;
                height: 100%;
            }
            #POPUP107 .container {
                width: 100%;
                height: 678px;
                top: calc(100%-678px);
            }
            #POPUP107 {
                background-image: none;
            }
            #SECTION52 {
                width: 100%;
                height: 1270.375px;
            }
            #SECTION52 .container {}
            #SECTION52 {
                background-image: none;
            }
            #SECTION167 {
                width: 100%;
                height: 779.875px;
            }
            #SECTION167 .container {}
            #SECTION167 {
                background-image: linear-gradient(rgba(143, 143, 143, 0.5), rgba(143, 143, 143, 0.5)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/atdesign-nordic-style-living-in-monochrome.jpg");
                background-image: -o-linear-gradient(rgba(143, 143, 143, 0.5), rgba(143, 143, 143, 0.5)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/atdesign-nordic-style-living-in-monochrome.jpg");
                background-image: -ms-linear-gradient(rgba(143, 143, 143, 0.5), rgba(143, 143, 143, 0.5)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/atdesign-nordic-style-living-in-monochrome.jpg");
                background-image: -moz-linear-gradient(rgba(143, 143, 143, 0.5), rgba(143, 143, 143, 0.5)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/atdesign-nordic-style-living-in-monochrome.jpg");
                background-image: -webkit-linear-gradient(rgba(143, 143, 143, 0.5), rgba(143, 143, 143, 0.5)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/atdesign-nordic-style-living-in-monochrome.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION120 {
                width: 100%;
                height: 996px;
            }
            #SECTION120 .container {}
            #SECTION120 {
                background-image: linear-gradient(rgba(165, 145, 145, 0.62), rgba(165, 145, 145, 0.62)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/pencil-2782840_1920-1512838489125.jpg");
                background-image: -o-linear-gradient(rgba(165, 145, 145, 0.62), rgba(165, 145, 145, 0.62)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/pencil-2782840_1920-1512838489125.jpg");
                background-image: -ms-linear-gradient(rgba(165, 145, 145, 0.62), rgba(165, 145, 145, 0.62)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/pencil-2782840_1920-1512838489125.jpg");
                background-image: -moz-linear-gradient(rgba(165, 145, 145, 0.62), rgba(165, 145, 145, 0.62)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/pencil-2782840_1920-1512838489125.jpg");
                background-image: -webkit-linear-gradient(rgba(165, 145, 145, 0.62), rgba(165, 145, 145, 0.62)), url("https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/pencil-2782840_1920-1512838489125.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #SECTION205 {
                width: 100%;
                height: 1534.375px;
            }
            #SECTION205 .container {}
            #SECTION205 {
                background-image: none;
            }
            #POPUP328 {
                width: 100%;
                height: 100%;
            }
            #POPUP328 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP328 {
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
            #POPUP324 {
                width: 100%;
                height: 100%;
            }
            #POPUP324 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP324 {
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
            #POPUP320 {
                width: 100%;
                height: 100%;
            }
            #POPUP320 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP320 {
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
            #SECTION361 {
                width: 100%;
                height: 569px;
            }
            #SECTION361 .container {}
            #SECTION361 {
                background-image: none;
            }
            #SECTION332 {
                width: 100%;
                height: 807px;
            }
            #SECTION332 .container {}
            #SECTION332 {
                background-image: linear-gradient(rgba(123, 123, 123, 0.85), rgba(123, 123, 123, 0.85)), url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -o-linear-gradient(rgba(123, 123, 123, 0.85), rgba(123, 123, 123, 0.85)), url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -ms-linear-gradient(rgba(123, 123, 123, 0.85), rgba(123, 123, 123, 0.85)), url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -moz-linear-gradient(rgba(123, 123, 123, 0.85), rgba(123, 123, 123, 0.85)), url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-image: -webkit-linear-gradient(rgba(123, 123, 123, 0.85), rgba(123, 123, 123, 0.85)), url("https://static.ladipage.net/uploads/images/6d6fef88-aec1-4aaa-8e2e-768338f07d30.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #SECTION372 {
                width: 100%;
                height: 1079px;
            }
            #SECTION372 .container {}
            #SECTION372 {
                background-image: linear-gradient(rgba(1, 7, 28, 0.77), rgba(1, 7, 28, 0.77)), url("https://static.ladipage.net/uploads/images/75f59b40-4c0c-4482-aa15-387947ff3236.jpg");
                background-image: -o-linear-gradient(rgba(1, 7, 28, 0.77), rgba(1, 7, 28, 0.77)), url("https://static.ladipage.net/uploads/images/75f59b40-4c0c-4482-aa15-387947ff3236.jpg");
                background-image: -ms-linear-gradient(rgba(1, 7, 28, 0.77), rgba(1, 7, 28, 0.77)), url("https://static.ladipage.net/uploads/images/75f59b40-4c0c-4482-aa15-387947ff3236.jpg");
                background-image: -moz-linear-gradient(rgba(1, 7, 28, 0.77), rgba(1, 7, 28, 0.77)), url("https://static.ladipage.net/uploads/images/75f59b40-4c0c-4482-aa15-387947ff3236.jpg");
                background-image: -webkit-linear-gradient(rgba(1, 7, 28, 0.77), rgba(1, 7, 28, 0.77)), url("https://static.ladipage.net/uploads/images/75f59b40-4c0c-4482-aa15-387947ff3236.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }
            #POPUP422 {
                width: 100%;
                height: 100%;
            }
            #POPUP422 .container {
                width: 375px;
                height: 378px;
                top: calc(100%-378px);
            }
            #POPUP422 {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/bg-2.png");
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #POPUP316 {
                width: 100%;
                height: 100%;
            }
            #POPUP316 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP316 {
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
            #POPUP312 {
                width: 100%;
                height: 100%;
            }
            #POPUP312 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP312 {
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
            #POPUP306 {
                width: 100%;
                height: 100%;
            }
            #POPUP306 .container {
                width: 100%;
                height: 384px;
                top: calc(100%-384px);
            }
            #POPUP306 {
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
            #BUTTON3 {
                display: none!important;
                top: 147px;
                left: -235.5px;
                padding: 0px;
                width: 202px;
                height: 24px;
            }
            #BUTTON3 > .widget-content {
                font-size: 16px;
                text-align: center;
            }
            #BOX14 {
                display: none!important;
                top: 20px;
                left: 10px;
                width: 355px;
                height: 117px;
            }
            #HEADLINE415 {
                top: 38px;
                left: 77.5px;
                padding: 0px;
                width: 200px;
                height: 20px;
            }
            #HEADLINE415 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LINEVERTICAL434 {
                top: 54.7049px;
                left: 165px;
                width: 25px;
                height: 23.3507px;
            }
            #LINEVERTICAL433 {
                top: 55px;
                left: 165px;
                width: 25px;
                height: 23.3507px;
            }
            #LINEVERTICAL432 {
                top: 56.684px;
                left: 165px;
                width: 25px;
                height: 23.3507px;
            }
            #LINEVERTICAL431 {
                top: 55px;
                left: 165px;
                width: 25px;
                height: 23.3507px;
            }
            #HEADLINE21 {
                top: 57.4688px;
                left: 136.008px;
                padding: 0px;
                width: 82.9844px;
                height: 20px;
            }
            #HEADLINE21 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LINEVERTICAL175 {
                top: 14px;
                left: 165px;
                width: 25px;
                height: 71px;
            }
            #IMAGE416 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/logo-1513079436.png);
            }
            #IMAGE416 {
                top: 9.5px;
                left: 0px;
                width: 355px;
                height: 37px;
            }
            #HEADLINE174 {
                top: 38px;
                left: 138.5px;
                padding: 0px;
                width: 78px;
                height: 20px;
            }
            #HEADLINE174 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE18 {
                top: 58px;
                left: 106.5px;
                padding: 0px;
                width: 142px;
                height: 20px;
            }
            #HEADLINE18 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE16 {
                top: 78px;
                left: 100.5px;
                padding: 0px;
                width: 154px;
                height: 20px;
            }
            #HEADLINE16 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE23 {
                top: 58px;
                left: 138.5px;
                padding: 0px;
                width: 78px;
                height: 20px;
            }
            #HEADLINE23 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE12 {
                top: 54.625px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 92px;
            }
            #HEADLINE12 > .widget-content {
                font-size: 42px;
                text-align: center;
                line-height: 46px;
            }
            #HEADLINE24 {
                top: 17px;
                left: 32px;
                padding: 0px;
                width: 374.5px;
                height: 31px;
            }
            #HEADLINE24 > .widget-content {
                font-size: 20px;
                text-align: left;
            }
            #BUTTON25 {
                top: 159.625px;
                left: 79.5px;
                padding: 0px;
                width: 160px;
                height: 40px;
            }
            #BUTTON25 > .widget-content {
                font-size: 15px;
                text-align: center;
            }
            #IMAGE26 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/1212-1513085231.png);
            }
            #IMAGE26 {
                top: 169px;
                left: 71.1719px;
                width: 333.671875px;
                height: 190px;
            }
            #IMAGE108 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/team1.jpg);
            }
            #IMAGE108 {
                top: 20px;
                left: 18px;
                width: 339px;
                height: 332px;
            }
            #HEADLINE109 {
                top: 362px;
                left: 59.5px;
                padding: 0px;
                width: 256px;
                height: 96px;
            }
            #HEADLINE109 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 32px;
            }
            #PARAGRAPH110 {
                top: 468px;
                left: 66.5px;
                padding: 0px;
                width: 242px;
                height: 19px;
            }
            #PARAGRAPH110 > .widget-content {
                font-size: 14px;
                text-align: center;
                line-height: 19px;
            }
            #BOX111 {
                top: 497px;
                left: 52px;
                width: 271px;
                height: 57px;
            }
            #HEADLINE112 {
                top: 11px;
                left: 18px;
                padding: 0px;
                width: 237px;
                height: 36px;
            }
            #HEADLINE112 > .widget-content {
                font-size: 26px;
                text-align: center;
            }
            #FORM113 {
                top: 564px;
                left: 53px;
                width: 269px;
                height: 44px;
            }
            #FORM113 > .widget-content {
                font-size: 16px;
            }
            #ITEM_FORM114 {
                top: 0px;
                left: 0px;
                width: 269px;
                height: 44px;
            }
            #ITEM_FORM114 > .widget-content {
                font-size: 16px;
            }
            #BUTTON115 {
                top: 618px;
                left: 52px;
                padding: 0px;
                width: 271px;
                height: 40px;
            }
            #BUTTON115 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #HEADLINE53 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 66px;
            }
            #HEADLINE53 > .widget-content {
                font-size: 28px;
                text-align: center;
                line-height: 33px;
            }
            #BOX55 {
                top: 167px;
                left: 96px;
                width: 183px;
                height: 183px;
            }
            #BOX55 > .widget-content {
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
            #BOX56 {
                top: 350.625px;
                left: 37.5px;
                width: 300px;
                height: 161px;
            }
            #HEADLINE58 {
                top: 17.5781px;
                left: 28.5px;
                padding: 0px;
                width: 243px;
                height: 28px;
            }
            #HEADLINE58 > .widget-content {
                font-size: 24px;
                text-align: center;
            }
            #PARAGRAPH57 {
                top: 74px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 76px;
            }
            #PARAGRAPH57 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE435 {
                top: 45.5625px;
                left: 23.5px;
                padding: 0px;
                width: 253px;
                height: 20px;
            }
            #HEADLINE435 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP59 {
                top: 462.688px;
                left: 40px;
                width: 323px;
                height: 789.25px;
            }
            #LINE60 {
                display: none!important;
                top: 169.375px;
                left: 227.5px;
                width: 300px;
                height: 17.59375px;
            }
            #LINE61 {
                display: none!important;
                top: 386.515625px;
                left: 349px;
                width: 300px;
                height: 17.59375px;
            }
            #GROUP62 {
                top: 0px;
                left: 24px;
                width: 300px;
                height: 169.375px;
            }
            #GROUP67 {
                top: 65.9219px;
                left: 10.5px;
                width: 301px;
                height: 354.765625px;
            }
            #HEADLINE68 {
                top: 209.438px;
                left: 25px;
                padding: 0px;
                width: 277px;
                height: 30px;
            }
            #HEADLINE68 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX69 {
                top: 0px;
                left: 48px;
                width: 209px;
                height: 195px;
            }
            #BOX69 > .widget-content {
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
            #BOX70 {
                top: 286.766px;
                left: 1px;
                width: 300px;
                height: 68px;
            }
            #PARAGRAPH71 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 300px;
                height: 38px;
            }
            #PARAGRAPH71 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #GROUP72 {
                top: 635.672px;
                left: 1px;
                width: 304px;
                height: 153.578125px;
            }
            #HEADLINE73 {
                top: 0px;
                left: 38.5px;
                padding: 0px;
                width: 229px;
                height: 30px;
            }
            #HEADLINE73 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX75 {
                top: 88.5781px;
                left: 1px;
                width: 304px;
                height: 65px;
            }
            #PARAGRAPH76 {
                top: -19.6124px;
                left: -0.5px;
                padding: 0px;
                width: 304px;
                height: 76px;
            }
            #PARAGRAPH76 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE51 {
                top: 96px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 26px;
            }
            #HEADLINE51 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #LINE163 {
                top: 132px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #HEADLINE436 {
                top: 768.047px;
                left: 20.5px;
                padding: 0px;
                width: 355px;
                height: 38px;
            }
            #HEADLINE436 > .widget-content {
                font-size: 13px;
                text-align: left;
            }
            #HEADLINE437 {
                top: 1128.65px;
                left: 41px;
                padding: 0px;
                width: 355px;
                height: 20px;
            }
            #HEADLINE437 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #BOX438 {
                top: 898.375px;
                left: 94.5px;
                width: 183px;
                height: 183px;
            }
            #BOX438 > .widget-content {
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
            #HEADLINE169 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 84px;
            }
            #HEADLINE169 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #BOX173 {
                top: 149px;
                left: 3px;
                width: 369px;
                height: 419.6875px;
            }
            #LISTOP170 {
                top: 13.6875px;
                left: 20px;
                width: 330px;
                height: 396px;
            }
            #LISTOP170 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP170 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 22px;
                height: 22px;
                font-size: 11px;
                color: rgba(255, 255, 255, 1);
                margin-right: 13px;
                content: url('data:image/svg+xml;utf8,<svg fill="rgba(255,255,255,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13 13-5.832 13-13S23.168 3 16 3zm0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16 9.913 5 16 5zm-5.28 7.78l-1.44 1.44 6 6 .72.686.72-.687 6-6-1.44-1.44L16 18.064l-5.28-5.282z"/> </svg>');
                background-repeat: no-repeat;
                position: relative;
                top: 0px;
                left: 0;
            }
            #LISTOP170 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP170 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #YOUTUBE168 {
                top: 578.688px;
                left: 6.42969px;
                width: 362.140625px;
                height: 181.18923611111111px;
            }
            #LINE181 {
                top: 114px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #BOX121 {
                top: 696px;
                left: 57px;
                width: 261px;
                height: 87px;
            }
            #HEADLINE122 {
                top: 8px;
                left: 13px;
                padding: 0px;
                width: 200px;
                height: 72px;
            }
            #HEADLINE122 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX123 {
                top: 501px;
                left: 57px;
                width: 261px;
                height: 89px;
            }
            #HEADLINE124 {
                top: 10px;
                left: 24px;
                padding: 0px;
                width: 200px;
                height: 72px;
            }
            #HEADLINE124 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX125 {
                top: 600px;
                left: 57px;
                width: 261px;
                height: 86px;
            }
            #HEADLINE126 {
                top: 14.1719px;
                left: 8px;
                padding: 0px;
                width: 234px;
                height: 48px;
            }
            #HEADLINE126 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX127 {
                top: 401px;
                left: 57px;
                width: 261px;
                height: 90px;
            }
            #HEADLINE128 {
                top: 8.70313px;
                left: 8px;
                padding: 0px;
                width: 253px;
                height: 72px;
            }
            #HEADLINE128 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE129 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE129 > .widget-content {
                font-size: 24px;
                text-align: center;
                line-height: 30px;
            }
            #BOX131 {
                top: 793px;
                left: 57px;
                width: 261px;
                height: 87px;
            }
            #HEADLINE132 {
                top: 8px;
                left: 16px;
                padding: 0px;
                width: 200px;
                height: 72px;
            }
            #HEADLINE132 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX133 {
                top: 890px;
                left: 57px;
                width: 261px;
                height: 86px;
            }
            #HEADLINE134 {
                top: 14px;
                left: 8px;
                padding: 0px;
                width: 253px;
                height: 72px;
            }
            #HEADLINE134 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #LINE135 {
                top: 60px;
                left: 67.5px;
                width: 240px;
                height: 25px;
            }
            #IMAGE130 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/business-presentation-2253131_1920-1513092253.png);
            }
            #IMAGE130 {
                top: 95px;
                left: 77.7813px;
                width: 219.4375px;
                height: 296px;
            }
            #HEADLINE206 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 108px;
            }
            #HEADLINE206 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #LINE263 {
                top: 138px;
                left: 10px;
                width: 355px;
                height: 25px;
            }
            #HEADLINE264 {
                top: 173px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 27px;
            }
            #HEADLINE264 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #BOX274 {
                top: 767px;
                left: 10px;
                width: 355px;
                height: 106px;
            }
            #HEADLINE294 {
                top: 20px;
                left: 47.5px;
                padding: 0px;
                width: 260px;
                height: 28px;
            }
            #HEADLINE294 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #BUTTON275 {
                top: 58px;
                left: 105px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON275 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX278 {
                top: 1192.39px;
                left: 10px;
                width: 355px;
                height: 104px;
            }
            #HEADLINE297 {
                top: 20px;
                left: 47.5px;
                padding: 0px;
                width: 260px;
                height: 28px;
            }
            #HEADLINE297 > .widget-content {
                font-size: 22px;
                text-align: left;
            }
            #BUTTON279 {
                top: 58px;
                left: 105px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON279 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX283 {
                top: 532px;
                left: 10px;
                width: 355px;
                height: 136px;
            }
            #BUTTON284 {
                top: 86px;
                left: 105px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON284 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE293 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 56px;
            }
            #HEADLINE293 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #BOX285 {
                top: 443px;
                left: 148px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE287 {
                top: 10.5px;
                left: 26px;
                padding: 0px;
                width: 33px;
                height: 46px;
            }
            #HEADLINE287 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #BOX269 {
                top: 210px;
                left: 148px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE301 {
                top: 19.8594px;
                left: 31px;
                padding: 0px;
                width: 32px;
                height: 41px;
            }
            #HEADLINE301 > .widget-content {
                font-size: 35px;
                text-align: left;
            }
            #BOX288 {
                top: 972px;
                left: 10px;
                width: 355px;
                height: 121.390625px;
            }
            #BUTTON289 {
                top: 58px;
                left: 105px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON289 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE296 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 28px;
            }
            #HEADLINE296 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #BOX290 {
                top: 1395.39px;
                left: 10px;
                width: 355px;
                height: 119px;
            }
            #HEADLINE298 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 28px;
            }
            #HEADLINE298 > .widget-content {
                font-size: 22px;
                text-align: center;
            }
            #BUTTON291 {
                top: 58px;
                left: 105px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON291 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #BOX276 {
                top: 678px;
                left: 148px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE300 {
                top: 10px;
                left: 22px;
                padding: 0px;
                width: 33px;
                height: 46px;
            }
            #HEADLINE300 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #BOX302 {
                top: 883px;
                left: 148px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE303 {
                top: 10.5px;
                left: 26px;
                padding: 0px;
                width: 33px;
                height: 46px;
            }
            #HEADLINE303 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #BOX280 {
                top: 1103.39px;
                left: 148px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE281 {
                top: 14.6094px;
                left: 25px;
                padding: 0px;
                width: 33px;
                height: 46px;
            }
            #HEADLINE281 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #BOX304 {
                top: 1306.39px;
                left: 148px;
                width: 79px;
                height: 79px;
            }
            #HEADLINE305 {
                top: 10.5px;
                left: 26px;
                padding: 0px;
                width: 33px;
                height: 46px;
            }
            #HEADLINE305 > .widget-content {
                font-size: 40px;
                text-align: center;
            }
            #BOX229 {
                top: 299px;
                left: 10px;
                width: 355px;
                height: 134px;
            }
            #BUTTON273 {
                top: 84px;
                left: 105px;
                padding: 0px;
                width: 145px;
                height: 40px;
            }
            #BUTTON273 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE230 {
                top: 20px;
                left: 35px;
                padding: 0px;
                width: 285px;
                height: 54px;
            }
            #HEADLINE230 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #BOX329 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE330 {
                top: 42px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE330 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LISTOP331 {
                top: 132px;
                left: 10px;
                width: 355px;
                height: 260px;
            }
            #LISTOP331 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP331 > ol.widget-content li::before {
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
            #LISTOP331 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP331 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX325 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE326 {
                top: 42px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE326 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LISTOP327 {
                top: 154px;
                left: 10px;
                width: 355px;
                height: 260px;
            }
            #LISTOP327 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP327 > ol.widget-content li::before {
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
            #LISTOP327 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP327 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX321 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE322 {
                top: 42px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE322 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LISTOP323 {
                top: 74.5px;
                left: 10px;
                width: 355px;
                height: 480px;
            }
            #LISTOP323 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP323 > ol.widget-content li::before {
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
            #LISTOP323 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP323 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX362 {
                top: 404px;
                left: 10px;
                width: 355px;
                height: 145px;
            }
            #PARAGRAPH363 {
                top: 10px;
                left: 0.5px;
                padding: 0px;
                width: 355px;
                height: 115px;
            }
            #PARAGRAPH363 > .widget-content {
                font-size: 17px;
                text-align: left;
            }
            #HEADLINE364 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 34px;
            }
            #HEADLINE364 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE365 {
                top: 343px;
                left: 42.5px;
                padding: 0px;
                width: 290px;
                height: 25px;
            }
            #HEADLINE365 > .widget-content {
                font-size: 19px;
                text-align: left;
            }
            #HEADLINE366 {
                top: 378px;
                left: 42.5px;
                padding: 0px;
                width: 290px;
                height: 16px;
            }
            #HEADLINE366 > .widget-content {
                font-size: 12px;
                text-align: left;
            }
            #BOX367 {
                top: 64px;
                left: 70.5px;
                width: 234px;
                height: 234px;
            }
            #BOX367 > .widget-content {
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png");
                background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png");
                background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png");
                background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png");
                background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/hqt-1512975602.png");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }
            #LINE368 {
                top: 308px;
                left: 47.5px;
                width: 280px;
                height: 25px;
            }
            #IMAGE346 .widget-content:first-child .lp-show-image:first-child {
                width: 100%;
                height: 100%;
                background-position: center center;
                background-size: cover;
                background-image: url(https://static.ladipage.net/m/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007673.jpg);
            }
            #IMAGE346 {
                top: 138px;
                left: 0.5px;
                width: 375px;
                height: 314px;
            }
            #HEADLINE347 {
                top: 20px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 62px;
            }
            #HEADLINE347 > .widget-content {
                font-size: 25px;
                text-align: center;
            }
            #HEADLINE348 {
                top: 92px;
                left: 46.5px;
                padding: 0px;
                width: 282px;
                height: 38px;
            }
            #HEADLINE348 > .widget-content {
                font-size: 32px;
                text-align: center;
            }
            #BOX349 {
                top: 462.375px;
                left: 0.5px;
                width: 364px;
                height: 338px;
            }
            #HEADLINE350 {
                top: 20px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 36px;
            }
            #HEADLINE350 > .widget-content {
                font-size: 26px;
                text-align: left;
            }
            #LISTOP352 {
                top: 66px;
                left: 0px;
                width: 355px;
                height: 219px;
            }
            #LISTOP352 > .widget-content {
                font-size: 15px;
                text-align: left;
            }
            #LISTOP352 > ol.widget-content li::before {
                content: counter(linum, decimal);
                width: 30px;
                height: 30px;
                top: 0;
                font-size: 15px;
                color: rgba(0, 0, 0, 1);
                margin-right: 8px;
            }
            #LISTOP352 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP352 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #GROUP392 {
                top: 727.437px;
                left: 8.5px;
                width: 353.5px;
                height: 213.609375px;
            }
            #GROUP393 {
                top: 91.8594px;
                left: 5px;
                width: 342px;
                height: 56.859375px;
            }
            #SHAPE394 {
                top: 4.0625px;
                left: 1px;
                width: 29px;
                height: 29.4375px;
            }
            #HEADLINE395 {
                top: 0px;
                left: 30px;
                padding: 0px;
                width: 293px;
                height: 28.421875px;
            }
            #HEADLINE395 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE396 {
                top: 38.5938px;
                left: 2px;
                padding: 0px;
                width: 341px;
                height: 18.265625px;
            }
            #HEADLINE396 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP397 {
                top: 162.844px;
                left: 13.5px;
                width: 341px;
                height: 50.765625px;
            }
            #SHAPE398 {
                top: 0px;
                left: 1px;
                width: 29px;
                height: 29.4375px;
            }
            #HEADLINE399 {
                top: 0px;
                left: 43px;
                padding: 0px;
                width: 299px;
                height: 28.421875px;
            }
            #HEADLINE399 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #HEADLINE400 {
                top: 32.5px;
                left: 1px;
                padding: 0px;
                width: 340px;
                height: 18.265625px;
            }
            #HEADLINE400 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #GROUP401 {
                top: 0px;
                left: 1px;
                width: 347px;
                height: 74.109375px;
            }
            #HEADLINE402 {
                top: 1.01563px;
                left: 35px;
                padding: 0px;
                width: 297px;
                height: 28.421875px;
            }
            #HEADLINE402 > .widget-content {
                font-size: 24px;
                text-align: left;
            }
            #SHAPE403 {
                top: 0px;
                left: 1px;
                width: 29px;
                height: 29.4375px;
            }
            #HEADLINE404 {
                top: 37.5625px;
                left: 1px;
                padding: 0px;
                width: 347px;
                height: 36.546875px;
            }
            #HEADLINE404 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #HEADLINE413 {
                top: 636.375px;
                left: 7.5px;
                padding: 0px;
                width: 355px;
                height: 80px;
            }
            #HEADLINE413 > .widget-content {
                font-size: 13px;
                text-align: center;
            }
            #COUNTDOWN439 {
                top: 306.688px;
                left: 29.5px;
                width: 320px;
                height: 57px;
            }
            #COUNTDOWN439 > .widget-content {
                font-size: 40px;
            }
            #HEADLINE440 {
                top: 273.438px;
                left: 146.5px;
                padding: 0px;
                width: 108px;
                height: 33px;
            }
            #HEADLINE440 > .widget-content {
                font-size: 27px;
                text-align: left;
            }
            #BOX446 {
                top: 11.875px;
                left: 40.5px;
                width: 310px;
                height: 211px;
            }
            #PARAGRAPH452 {
                top: 172px;
                left: 18px;
                padding: 0px;
                width: 265px;
                height: 22px;
            }
            #PARAGRAPH452 > .widget-content {
                font-size: 18px;
                text-align: center;
            }
            #HEADLINE453 {
                top: 153px;
                left: 64.5px;
                padding: 0px;
                width: 276px;
                height: 52px;
            }
            #HEADLINE453 > .widget-content {
                font-size: 20px;
                text-align: center;
            }
            #HEADLINE447 {
                top: 11px;
                left: 95px;
                padding: 0px;
                width: 185px;
                height: 25px;
            }
            #HEADLINE447 > .widget-content {
                font-size: 21px;
                text-align: center;
            }
            #HEADLINE448 {
                top: 100.188px;
                left: 58.5px;
                padding: 0px;
                width: 292px;
                height: 34px;
            }
            #HEADLINE448 > .widget-content {
                font-size: 30px;
                text-align: center;
            }
            #HEADLINE449 {
                top: 48.188px;
                left: 55px;
                padding: 0px;
                width: 287px;
                height: 42px;
            }
            #HEADLINE449 > .widget-content {
                font-size: 36px;
                text-align: center;
            }
            #LINE450 {
                top: 125.501px;
                left: 45.5px;
                width: 305px;
                height: 25px;
            }
            #HEADLINE472 {
                top: 232.375px;
                left: 105.5px;
                padding: 0px;
                width: 200px;
                height: 35px;
            }
            #HEADLINE472 > .widget-content {
                font-size: 29px;
                text-align: left;
            }
            #GROUP376 {
                top: 363.688px;
                left: 29.5px;
                width: 307.5px;
                height: 249.25px;
            }
            #FORM377 {
                top: 0px;
                left: 6.5px;
                width: 302px;
                height: 189px;
            }
            #ITEM_FORM378 {
                top: 0px;
                left: 1px;
                width: 300px;
                height: 41px;
            }
            #ITEM_FORM379 {
                top: 51px;
                left: 0.5px;
                width: 301px;
                height: 41px;
            }
            #ITEM_FORM380 {
                top: 102px;
                left: 1px;
                width: 300px;
                height: 41px;
            }
            #ITEM_FORM410 {
                top: 153px;
                left: 0px;
                width: 302px;
                height: 36px;
            }
            #BUTTON382 {
                top: 209.25px;
                left: 1px;
                padding: 0px;
                width: 301px;
                height: 40px;
            }
            #BUTTON382 > .widget-content {
                font-size: 14px;
                text-align: center;
            }
            #GROUP383 {
                top: 963.625px;
                left: 46.4219px;
                width: 287.078125px;
                height: 47px;
            }
            #BOX384 {
                top: 0px;
                left: 1px;
                width: 45.03125px;
                height: 47px;
            }
            #SHAPE385 {
                top: 9px;
                left: 8px;
                width: 29px;
                height: 29px;
            }
            #BOX388 {
                top: 0px;
                left: 243.047px;
                width: 45.03125px;
                height: 47px;
            }
            #SHAPE389 {
                top: 9px;
                left: 8px;
                width: 29px;
                height: 29px;
            }
            #BOX390 {
                top: 0px;
                left: 81.0313px;
                width: 45.03125px;
                height: 47px;
            }
            #SHAPE391 {
                top: 9px;
                left: 8px;
                width: 29px;
                height: 29px;
            }
            #BOX386 {
                top: 0px;
                left: 156.016px;
                width: 45.03125px;
                height: 47px;
            }
            #SHAPE387 {
                top: 9px;
                left: 8px;
                width: 29px;
                height: 29px;
            }
            #BOX424 {
                top: 20px;
                left: 163.5px;
                width: 48px;
                height: 48px;
            }
            #SHAPE425 {
                top: 14px;
                left: 13px;
                width: 26px;
                height: 26px;
            }
            #LINE427 {
                top: 124px;
                left: 155.5px;
                width: 64px;
                height: 25px;
            }
            #GROUP428 {
                top: 78px;
                left: 35px;
                width: 305px;
                height: 36px;
            }
            #HEADLINE429 {
                top: 0px;
                left: 142px;
                padding: 0px;
                width: 164px;
                height: 36px;
            }
            #HEADLINE429 > .widget-content {
                font-size: 30px;
                text-align: left;
            }
            #HEADLINE430 {
                top: 0px;
                left: 1px;
                padding: 0px;
                width: 132px;
                height: 36px;
            }
            #HEADLINE430 > .widget-content {
                font-size: 30px;
                text-align: right;
            }
            #PARAGRAPH426 {
                top: 139.5px;
                left: 10px;
                padding: 0px;
                width: 355px;
                height: 120px;
            }
            #PARAGRAPH426 > .widget-content {
                font-size: 16px;
                text-align: center;
                line-height: 20px;
            }
            #BOX317 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE318 {
                top: 26px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE318 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LISTOP319 {
                top: 64.7813px;
                left: 10px;
                width: 355px;
                height: 515px;
            }
            #LISTOP319 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP319 > ol.widget-content li::before {
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
            #LISTOP319 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP319 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX313 {
                top: 20px;
                left: 10px;
                width: 355px;
                height: 74px;
            }
            #HEADLINE314 {
                top: 42px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE314 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
            #LISTOP315 {
                top: 156.75px;
                left: 10px;
                width: 355px;
                height: 288px;
            }
            #LISTOP315 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP315 > ol.widget-content li::before {
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
            #LISTOP315 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP315 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #LISTOP309 {
                top: 154px;
                left: 10px;
                width: 355px;
                height: 260px;
            }
            #LISTOP309 > .widget-content {
                font-size: 14px;
                text-align: left;
            }
            #LISTOP309 > ol.widget-content li::before {
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
            #LISTOP309 > ol.widget-content li {
                margin-bottom: 15px;
            }
            #LISTOP309 > ol.widget-content li:last-child {
                margin-bottom: 0px;
            }
            #BOX310 {
                top: 1px;
                left: 10px;
                width: 355px;
                height: 116px;
            }
            #HEADLINE311 {
                top: 42px;
                left: 0px;
                padding: 0px;
                width: 355px;
                height: 30px;
            }
            #HEADLINE311 > .widget-content {
                font-size: 21px;
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <div class="ladi-wraper-page">
        <div id="SECTION2" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container"><a id="BUTTON3" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">Hotline : 0972 220 777</span> </a>
                <div id="BOX14" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-sticky="1" lp-sticky-pos="top" lp-sticky-kc="0px">
                    <div class="widget-content">
                        <div id="HEADLINE415" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION372" lp-action-type="page" lp-target="" href="">
                            <h5 class="widget-content" lp-node="h5">Đăng kí</h5> </div>
                        <div id="LINEVERTICAL434" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                            <div class="widget-content">
                                <div class="linevertical"></div>
                            </div>
                        </div>
                        <div id="LINEVERTICAL433" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                            <div class="widget-content">
                                <div class="linevertical"></div>
                            </div>
                        </div>
                        <div id="LINEVERTICAL432" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                            <div class="widget-content">
                                <div class="linevertical"></div>
                            </div>
                        </div>
                        <div id="LINEVERTICAL431" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                            <div class="widget-content">
                                <div class="linevertical"></div>
                            </div>
                        </div>
                        <div id="HEADLINE21" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION167" lp-action-type="page" lp-target="" href="">
                            <h5 class="widget-content" lp-node="h5">Đối tượng</h5> </div>
                        <div id="LINEVERTICAL175" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                            <div class="widget-content">
                                <div class="linevertical"></div>
                            </div>
                        </div>
                        <div id="IMAGE416" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                            <div class="widget-content">
                                <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/logo-1513079436.png"></div>
                                <div class="lp-show-image"></div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="HEADLINE174" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION205" lp-action-type="page" lp-target="" href="">
                            <h5 class="widget-content" lp-node="h5">Nội dung</h5> </div>
                        <div id="HEADLINE18" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION361" lp-action-type="page" lp-target="" href="">
                            <h5 class="widget-content" lp-node="h5">Ý kiến chuyên gia</h5> </div>
                        <div id="HEADLINE16" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION52" lp-action-type="page" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">Cảm nhận học viên</h3> </div>
                        <div id="HEADLINE23" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION332" lp-action-type="page" lp-target="" href="">
                            <h5 class="widget-content" lp-node="h5">Giảng viên</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE12" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">Trọn bộ kế toán thuế từ A đến Z</h2> </div>
                <div id="HEADLINE24" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">KHÓA HỌC ONLINE ĐỘC QUYỀN</h3> </div><a id="BUTTON25" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION372" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÍ NGAY</span> </a>
                <div id="IMAGE26" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/1212-1513085231.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP107" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="IMAGE108" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/57b167c9ca57d39c18a1c57c/team1.jpg"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE109" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h4 class="widget-content" lp-node="h4">Nhận ngay mã giảm giá 20% cho toàn bộ sản phẩm</h4> </div>
                <div id="PARAGRAPH110" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <p class="widget-content" lp-node="p">Đăng ký tại đây</p>
                </div>
                <div id="BOX111" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE112" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">150.000 vnđ</h2> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="FORM113" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                    <form class="widget-content">
                        <div id="ITEM_FORM114" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                            <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                        </div>
                    </form>
                </div><a id="BUTTON115" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM113" lp-display="table"><span class="widget-content">NHẬN MÃ GIẢM GIÁ</span> </a></div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION52" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="HEADLINE53" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">5000+ khách hàng đã trải nghiệm khóa học</h2> </div>
                <div id="BOX55" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX56" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE58" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">BELLA DINH</h3> </div>
                        <div id="PARAGRAPH57" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Nhờ Lakita mà em đã nắm vững được các nghiệp vụ để làm kế toán thuế trong doanh nghiệp, giúp em tự tin để tìm việc làm hơn.Em xin chân thành cảm ơn!</p>
                        </div>
                        <div id="HEADLINE435" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">&nbsp;Trường Đại học Kinh tế Huế - HCE</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="GROUP59" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="LINE60" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP59" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div id="LINE61" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP59" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div id="GROUP62" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP59">
                            <div class="widget-content"></div>
                        </div>
                        <div id="GROUP67" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP59">
                            <div class="widget-content">
                                <div id="HEADLINE68" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP67" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">HÀ VŨ PHƯƠNG THẢO</h5> </div>
                                <div id="BOX69" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP67" lp-display="block">
                                    <div class="widget-content"></div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                                <div id="BOX70" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP67" lp-display="block">
                                    <div class="widget-content">
                                        <div id="PARAGRAPH71" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                            <p class="widget-content" lp-node="p">Nội dung khóa học có nhiều điều mới và hữu dụng trong quá trình làm việc, tư vấn tận tình.</p>
                                        </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div id="GROUP72" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP59">
                            <div class="widget-content">
                                <div id="HEADLINE73" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP72" lp-display="block">
                                    <h5 class="widget-content" lp-node="h5">PHƯƠNG VISSAI</h5> </div>
                                <div id="BOX75" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP72" lp-display="block">
                                    <div class="widget-content">
                                        <div id="PARAGRAPH76" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                            <p class="widget-content" lp-node="p"><span style="font-weight: bold;">Đây là một trong những khóa học rất bổ ích mà tôi được học. Khóa học đã giúp tôi nâng cao sự hiểu biết về kế toán thuế và hỗ trợ rất nhều cho công việc quản lí doanh nghiệp.</span></p>
                                        </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="HEADLINE51" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">Hãy <span style="color: rgb(33, 150, 243);">lắng nghe</span> những cảm nhận của họ!</h3> </div>
                <div id="LINE163" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="HEADLINE436" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">Trung tâm Phát triển Cụm công nghiệp và Dịch vụ Công ích thành phố Biên Hòa</h5> </div>
                <div id="HEADLINE437" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">Quản lí tại công ty cổ phần xi măng Sông Lam</h5> </div>
                <div id="BOX438" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION167" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="HEADLINE169" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h1 class="widget-content" lp-node="h1">Khóa học sẽ <span style="color: rgb(33, 150, 243);">hỗ trợ</span> tốt nhất nếu bạn là:</h1> </div>
                <div id="BOX173" class="widget-element widget-snap ladi-drop wow bounceInRight animated" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="LISTOP170" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                            <ol class="widget-content">
                                <li color="" style=""><span style="color: rgb(0, 0, 0);">Sinh viên và kế toán mới ra trường chưa biết, chưa hiểu, chưa làm được kế toán thuế&nbsp;</span></li>
                                <li color="" style=""><span style="color: rgb(0, 0, 0);">&nbsp;Kế toán nội bộ chuyển sang làm kế toán thuế</span><span style="color: rgb(255, 255, 255);">&nbsp;</span></li>
                                <li color="" style=""><span style="color: rgb(12, 11, 11);">Chuyên viên kế toán, kế toán tổng hợp có mong muốn nâng cao bổ sung và hoàn thiện chuyên môn</span><span style="color: rgb(255, 255, 255);">&nbsp;</span></li>
                                <li color="" style=""><span style="color: rgb(0, 0, 0);">Chuyên viên nhân sự, làm lương có nhiệm vụ kê khai và quyết toán thuế TNCN</span></li>
                                <li color="" style=""><span style="color: rgb(255, 255, 255);">&nbsp;</span><span style="color: rgb(0, 0, 0);">Chủ doanh nghiệp, cá nhân, Start-up chuẩn bị khởi nghiệp muốn trang bị các kiến thức pháp luật để phòng ngừa các rủi ro phạt vi phạm về thuế hoặc muốn hiểu, biết công việc của kế toán thuế để thuận tiện theo dõi và kiểm tra</span></li>
                            </ol>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="YOUTUBE168" class="widget-element widget-snap wow bounceInLeft animated" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                    <iframe class="widget-content" src="https://www.youtube.com/embed/GruLqX5_IOY?list=UUjSgXaDgKCVycQG5uelJ49Q&amp;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE181" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION120" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX121" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE122" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Thực hành trực tiếp trên kho tài liệu phong phú đi kèm mỗi bài giảng</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX123" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE124" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Trao đổi và nhận được tư vấn chuyên môn trực tiếp từ giảng viên</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX125" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE126" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Tài khoản sử dụng trọn đời không giới hạn thời gian</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX127" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE128" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Cập nhập liên tục và hoàn toàn  <span style="color: rgb(244, 67, 54); font-weight: bold;">MIỄN PHÍ </span>các thông tin và thông tư khi có thay đổi</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE129" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2"><span style="color: rgb(0, 0, 0);">Tại sao tôi nên chọn</span><span style="color: rgb(33, 150, 243);"> Lakita&nbsp;</span><span style="color: rgb(0, 0, 0);">?</span></h2> </div>
                <div id="BOX131" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE132" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Giải quyết từng vấn đề một cách logic và dễ hiểu nhất</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX133" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE134" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Thành thạo kỹ thuật lên tờ khai và quyết toán nhanh nhất, chính xác nhất</h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE135" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="IMAGE130" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/business-presentation-2253131_1920-1513092253.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION205" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="HEADLINE206" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">Kế toán thuế&nbsp;<br color="" style="color: rgb(0, 0, 0);">Lộ trình học <span style="color: rgb(33, 150, 243);">tinh gọn</span> và <span style="color: rgb(33, 150, 243);">logic</span> nhất</h2> </div>
                <div id="LINE263" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="HEADLINE264" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">6 chương - 56 bài học - 10h học online</h3> </div>
                <div id="BOX274" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE294" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Thuế giá trị gia tăng</h3> </div><a id="BUTTON275" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP316" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX278" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE297" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Quyết toán thuế TNCN</h3> </div><a id="BUTTON279" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP324" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX283" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"><a id="BUTTON284" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP312" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                        <div id="HEADLINE293" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">Đăng ký thuế ban đầu cho Doanh nghiệp mới thành lập</h2> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX285" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE287" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">2</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX269" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE301" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">1</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX288" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"><a id="BUTTON289" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP320" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                        <div id="HEADLINE296" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Kê khai thuế thu nhập cá nhân</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX290" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE298" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Thuế Thu nhập Doanh nghiệp</h3> </div><a id="BUTTON291" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP328" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX276" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE300" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">3</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX302" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE303" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">4</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX280" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE281" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">5</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX304" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE305" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">6</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX229" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"><a id="BUTTON273" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP306" lp-action-type="popup" lp-target="" href=""><span class="widget-content">Chi tiết</span> </a>
                        <div id="HEADLINE230" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">Tổng quan về kế toán thuế</h4> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP328" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX329" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE330" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Thuế Thu nhập Doanh nghiệp</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP331" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">1. Hồ sơ quyết toán thuế TNDN</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. Chi phí được trừ khi quyết toán thuế TNDN</li>
                        <li color="" style="color: rgb(255, 255, 255);">3. Chi phí không được trừ khi quyết toán thuế TNDN</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Hướng dẫn kết chuyễn lỗ từ năm trước chuyển sang khi quyết toán thuế TNDN</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Hướng dẫn quyết toán thuế TNDN</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Thực hành quyết toán thuế TNDN</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP324" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX325" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE326" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Quyết toán thuế TNCN</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP327" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">1. Quyết toán thuế TNCN là gì? Tại sao phải làm quyết toán</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. Các trường hợp không đủ điều kiện ủy quyền quyết toán</li>
                        <li color="" style="color: rgb(255, 255, 255);">3. Hướng dẫn tạo mã số thuế thu nhập cá nhân</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Cách tính thuế TNCN cả năm</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Hướng dẫn lập bảng lương</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Hướng dẫn lập tờ khai quyết toán thuế TNCN theo TT92/2015 ( Phần 1 )</li>
                        <li color="" style="color: rgb(255, 255, 255);">7. Hướng dẫn lập tờ khai quyết toán thuế TNCN theo TT92/2015 ( Phần 2 )</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP320" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX321" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE322" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Kê khai thuế thu nhập cá nhân</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP323" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">1. Giới thiệu nội dung chương học</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. Trách nhiệm Doanh Nghiệp trong kê khai và nộp thuê Thu nhập cá nhân</li>
                        <li color="" style="color: rgb(255, 255, 255);">3. Phân Loại đối tượng chịu thuế</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Hướng dẫn tính thuế TNCN với Hợp đồng lao động trên 3 tháng</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Các khoản thu nhập chịu thuế</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Thu nhập miễn thuế</li>
                        <li color="" style="color: rgb(255, 255, 255);">7. Hướng dẫn lập tờ khai thuế TNCN</li>
                        <li color="" style="color: rgb(255, 255, 255);">8. Hướng dẫn đăng ký người phụ thuộc</li>
                        <li color="" style="color: rgb(255, 255, 255);">9. Cách tính thuế TNCN trường hợp HĐLĐ trên 3 tháng</li>
                        <li color="" style="color: rgb(255, 255, 255);">10. Cách tính thuế TNCN trường hợp HĐLĐ dưới 3 tháng</li>
                        <li color="" style="color: rgb(255, 255, 255);">11. Hồ sơ kê khai thuế TNCN</li>
                        <li color="" style="color: rgb(255, 255, 255);">12. Các khoản thuế giảm trừ</li>
                        <li color="" style="color: rgb(255, 255, 255);">13. Thực hành lập tờ khai Thuế TNCN ( theo tháng )</li>
                        <li color="" style="color: rgb(255, 255, 255);">14. Thực hành lập tờ khai Thuế TNCN ( theo quý)</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION361" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX362" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH363" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Tôi đánh giá cáo sự khác biệt của khóa học này, bài giảng rất chi tiết, giảng viên có chuyên môn sâu nhiệt tình sẽ giúp người học nắm được và làm được một báo cáo tài chính hoàn thiện và tổng thể.</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE364" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2"><span style="color: rgb(33, 150, 243);">Ý kiến</span> <span style="color: rgb(0, 0, 0);">chuyên gia</span></h2> </div>
                <div id="HEADLINE365" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Tiến sĩ: Hoàng Quang Trung</h6> </div>
                <div id="HEADLINE366" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Giám đốc công ty DV kế toán Việt Nam - VINAFAS</h6> </div>
                <div id="BOX367" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE368" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION332" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="IMAGE346" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/21761373_1704766096260447_1445339622421389708_n-1513007673.jpg"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE347" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">&nbsp;Người đồng hành cùng các bạn chinh phục</h3> </div>
                <div id="HEADLINE348" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">KẾ TOÁN THUẾ</h2> </div>
                <div id="BOX349" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE350" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">Giảng viên: <span style="color: rgb(244, 67, 54);">Phạm Thị Nhung</span></h2> </div>
                        <div id="LISTOP352" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                            <ol class="widget-content">
                                <li color="" style="color: rgb(0, 0, 0);">Chứng chỉ kế toán quốc tế CAT/ACCA do Hiệp hội kế toán công chứng Anh Quốc Cấp bằng.</li>
                                <li color="" style="color: rgb(0, 0, 0);">&nbsp;Kế toán trưởng công ty TNHH Emotive 100% vốn của Mỹ Tư vấn kế toán, thuế cho nhiều doanh nghiệp trong nước và doanh nghiệp có vốn đầu tư nước ngoài FDI&nbsp;</li>
                                <li color="" style="color: rgb(0, 0, 0);">05 năm kế toán tổng hợp và thuế Chuỗi nhà hàng ăn nhanh (BurgerKing, Pizza Domino, Gà Popeys, Dunkin Donut) thuôc tập đoàn Liên Thái Bình Dương (IPP group) Tham gia nhiều kỳ quyết toán, hoàn thuế giá trị gia tăng</li>
                            </ol>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION372" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="GROUP392" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="GROUP393" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP392">
                            <div class="widget-content">
                                <div id="SHAPE394" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP393" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="HEADLINE395" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP393" lp-display="block">
                                    <h3 class="widget-content" lp-node="h3">Số điện thoại</h3> </div>
                                <div id="HEADLINE396" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP393" lp-display="block">
                                    <h6 class="widget-content" lp-node="h6">1900 636 195 - 04 7306 2468</h6> </div>
                            </div>
                        </div>
                        <div id="GROUP397" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP392">
                            <div class="widget-content">
                                <div id="SHAPE398" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP397" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V8L12,13L20,8V18M20,6L12,11L4,6V6H20V6Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="HEADLINE399" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP397" lp-display="block">
                                    <h3 class="widget-content" lp-node="h3">Email</h3> </div>
                                <div id="HEADLINE400" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP397" lp-display="block">
                                    <h6 class="widget-content" lp-node="h6">cskh@lakita.vn</h6> </div>
                            </div>
                        </div>
                        <div id="GROUP401" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP392">
                            <div class="widget-content">
                                <div id="HEADLINE402" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP401" lp-display="block">
                                    <h3 class="widget-content" lp-node="h3">Địa điểm</h3> </div>
                                <div id="SHAPE403" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP401" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M12,2C15.31,2 18,4.66 18,7.95C18,12.41 12,19 12,19C12,19 6,12.41 6,7.95C6,4.66 8.69,2 12,2M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M20,19C20,21.21 16.42,23 12,23C7.58,23 4,21.21 4,19C4,17.71 5.22,16.56 7.11,15.83L7.75,16.74C6.67,17.19 6,17.81 6,18.5C6,19.88 8.69,21 12,21C15.31,21 18,19.88 18,18.5C18,17.81 17.33,17.19 16.25,16.74L16.89,15.83C18.78,16.56 20,17.71 20,19Z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div id="HEADLINE404" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP401" lp-display="block">
                                    <h6 class="widget-content" lp-node="h6">Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng - Hà Nội</h6> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="HEADLINE413" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">Sau khi đăng ký mua khóa học bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin và nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn.&nbsp;<br>Bạn chỉ phải trả tiền khi nhận được khóa học</h5> </div>
                <div id="COUNTDOWN439" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN" lp-endtime="Thu Jan 14 2016 00:00:00 GMT+0700 (SE Asia Standard Time)" lp-display="block">
                    <div class="widget-content">
                        <div><span>00</span></div>
                        <div><span>00</span></div>
                        <div><span>00</span></div>
                        <div><span>00</span></div>
                    </div>
                </div>
                <div id="HEADLINE440" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">Chỉ còn&nbsp;</h3> </div>
                <div id="BOX446" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH452" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <h5 class="widget-content" lp-node="h5"></h5> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE453" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">Chương trình ưu đãi áp dụng đến hết ngày .../.../...</h2> </div>
                <div id="HEADLINE447" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">895.000Đ</h2> </div>
                <div id="HEADLINE448" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">chỉ còn 395.000Đ</h2> </div>
                <div id="HEADLINE449" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h1 class="widget-content" lp-node="h1">ƯU ĐÃI 55,78%</h1> </div>
                <div id="LINE450" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="HEADLINE472" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">Nhanh tay lên!</h3> </div>
                <div id="GROUP376" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="FORM377" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:15386&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:15387&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:15388&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:15464&quot;}]" lp-group="GROUP376" lp-display="block">
                            <form class="widget-content">
                                <div id="ITEM_FORM378" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                </div>
                                <div id="ITEM_FORM379" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                </div>
                                <div id="ITEM_FORM380" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                </div>
                                <div id="ITEM_FORM410" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                    <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="street" lp-label="Địa chỉ" lp-name-id="street" required="required">
                                </div>
                            </form>
                        </div><a id="BUTTON382" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-parent="FORM377" lp-group="GROUP376" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a></div>
                </div>
                <div id="GROUP383" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="BOX384" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP383" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE385" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX388" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP383" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE389" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M21.35,11.1H12.18V13.83H18.69C18.36,17.64 15.19,19.27 12.19,19.27C8.36,19.27 5,16.25 5,12C5,7.9 8.2,4.73 12.2,4.73C15.29,4.73 17.1,6.7 17.1,6.7L19,4.72C19,4.72 16.56,2 12.1,2C6.42,2 2.03,6.8 2.03,12C2.03,17.05 6.16,22 12.25,22C17.6,22 21.5,18.33 21.5,12.91C21.5,11.76 21.35,11.1 21.35,11.1V11.1Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX390" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP383" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE391" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                        <div id="BOX386" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP383" lp-display="block">
                            <div class="widget-content">
                                <div id="SHAPE387" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                    <div class="widget-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(0,204,232,1)">
                                            <path d="M20,6.5A0.5,0.5 0 0,1 19.5,7H17.5A0.5,0.5 0 0,1 17,6.5V4.5A0.5,0.5 0 0,1 17.5,4H19.5A0.5,0.5 0 0,1 20,4.5M4.5,20A0.5,0.5 0 0,1 4,19.5V11H6.09C6.03,11.32 6,11.66 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12C18,11.66 17.96,11.32 17.91,11H20V19.5A0.5,0.5 0 0,1 19.5,20M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M20,2H4C2.89,2 2,2.89 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP422" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX424" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="SHAPE425" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="#F6511F">
                                    <path d="M28.28 6.28L11 23.563l-7.28-7.28-1.44 1.437 8 8 .72.686.72-.687 18-18-1.44-1.44z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE427" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="GROUP428" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE429" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP428" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">thành công!</h2> </div>
                        <div id="HEADLINE430" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP428" lp-display="block">
                            <h2 class="widget-content" lp-node="h2">Đăng ký</h2> </div>
                    </div>
                </div>
                <div id="PARAGRAPH426" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <h5 class="widget-content" lp-node="h5">Cảm ơn bạn đã quan tâm tới khóa học của chúng tôi!<br>Trung tâm tư vấn khách hàng sẽ liên lạc lại để tư vấn và hướng dẫn tham gia khóa học cho bạn trong thời gian sớm nhất có thể!&nbsp;<br>Xin vui lòng lưu ý điện thoại!&nbsp;</h5> </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP316" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX317" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE318" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Thuế giá trị gia tăng</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP319" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">A. Kỹ thuật lập tờ khai thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">1. Giới thiệu nội dung phần 3 - thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. 02 phương pháp tính thuế GTGT3. Xác định kỳ kê khai thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Mục đích và vai trò của kê khai thuế GTGT ở DN</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Kiểm tra các điều kiện khấu trừ với chứng từ đầu vào</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Thực hành lập bảng kê đầu vào</li>
                        <li color="" style="color: rgb(255, 255, 255);">7. Thực hành lập bảng kê đầu ra</li>
                        <li color="" style="color: rgb(255, 255, 255);">8. Kỹ thuật lên tờ khai thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">9. Đối chiếu tài khoản 1331.3331.511 với tờ khai thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">10. Kinh nghiệm kê khai và lưu trữ hóa đơn đầu vào, đầu ra</li>
                        <li color="" style="color: rgb(255, 255, 255);">11. Hướng dẫn làm báo cáo sử dụng hóa đơnB. Hướng dẫn kế khai thuế GTGT bổ sung trên HTKK</li>
                        <li color="" style="color: rgb(255, 255, 255);">12. Nguyên tắc kê khai bổ sung thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">13. Tình huống 1 : Thực hành lập tờ khai thuế GTGT bổ sung</li>
                        <li color="" style="color: rgb(255, 255, 255);">14. Tình huống 2 : Thực hành lập tờ khai thuế GTGT bổ sung</li>
                        <li color="" style="color: rgb(255, 255, 255);">15. Bài tập thu hoạch : Kê khai bổ sung thuế GTGT</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP312" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="BOX313" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE314" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Đăng ký thuế ban đầu cho Doanh nghiệp mới thành lập</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP315" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">1. 07 thủ tục cần làm cho DN mới thành lập</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. Thủ tục 1+ 2: Đăng ký mẫu dấu và tài khoản ngân hàng</li>
                        <li color="" style="color: rgb(255, 255, 255);">3. Hướng dẫn nộp đăng ký tài khoản qua mạng: dangkykinhdoanh.gdt.gov</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Thủ tục 3+ 4: Mua token và đăng ký khai thuế, nộp thuế điện tử</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Cài đặt và sử dụng phần mềm HTKK và itax viewer</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Thủ tục 05: Kê khai và nộp Lệ phí môn bài qua mạng</li>
                        <li color="" style="color: rgb(255, 255, 255);">7. Thủ tục 6: Nộp mẫu 06 GTGT - đăng ký phương pháp tính thuế GTGT</li>
                        <li color="" style="color: rgb(255, 255, 255);">8. Thủ tục 7: Đặt in và làm thông báo phát hành hóa đơn</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP306" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div id="LISTOP309" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">1. Giới thiệu và đề cương khóa học " Trọn bộ A_Z kế toán thuế cho người bắt đầu "</li>
                        <li color="" style="color: rgb(255, 255, 255);">2. Tổng quan về kế toán thuế: Kế toán thuế là gì, phân biệt với các kế toán khác</li>
                        <li color="" style="color: rgb(255, 255, 255);">3. Tìm hiểu về thực trạng hệ thống sổ sách kế toán trong DN</li>
                        <li color="" style="color: rgb(255, 255, 255);">4. Nhiệm vụ kế toán thuế ở DN</li>
                        <li color="" style="color: rgb(255, 255, 255);">5. Tình huống thực tế 1: Kế toán thuế cần làm gì khi tiếp nhận doanh nghiệp mới</li>
                        <li color="" style="color: rgb(255, 255, 255);">6. Tình huống thực tế 2: Trình tự tiếp nhận hồ sơ, sổ sách, chứng từ kế toán ở DN</li>
                    </ol>
                </div>
                <div id="BOX310" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE311" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Tổng quan về kế toán thuế</h3> </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <script type="text/javascript" async="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1513570974027"></script>
        <script>
            var loadCSSFiles = function() {
                var links = 'https://static.ladipage.net/source/animate.min.css?v=1513570974027';
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
    </div>
</body>

</html>