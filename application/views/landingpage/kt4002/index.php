<?php
$code_ladingpage = str_replace('.html', '', str_replace('https://lakita.vn/', '', current_url()));
$config = array(
    'server' => 'http://crm2.lakita.vn/',
    'api_key' => 'RrF3rcmYdWQbviO5tuki3fdgfgr4',
    'api_name' => 'lakita-key',
);
$restClient = new Rest_Client($config);
$uri = "landingpage_api/price/" . $code_ladingpage;
$result = $restClient->get($uri);
$rs = json_decode($result);
?>

<!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <title class="title-site" lp-id="59c484ed701897b41e8a9df4">Trọn bộ hướng dẫn lập báo cáo tài chính năm 2017</title>
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta name="description" content="undefined">
        <meta name="keywords" content="undefined">
        <meta name="viewport" id="lp-viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">   
        <script>
            function ladiViewport() {
                var width = (window.outerWidth > 0) ? window.outerWidth : screen.width;
                if (width > 3000) {
                    width = width / 10;
                }
                var content = "width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0";
                var zoom = 1;
                if (width < 768) {
                    zoom = width / 375;
                    content = "width=375, initial-scale=" + zoom + ", maximum-scale=" + zoom + ",minimum-scale=" + zoom;
                } else {
                    if (width < 960) {
                        zoom = width / 960;
                        content = "width=960, initial-scale=" + zoom + ", maximum-scale=" + zoom + ",minimum-scale=" + zoom;
                    }
                }
                var meta = document.getElementsByTagName("meta");
                for (var i = 0; i < meta.length; i++) {
                    if (meta[i].name.toLowerCase() == "viewport") {
                        meta[i].content = content;
                    }
                }
            }
            ;
            ladiViewport();
        </script>
        <meta property="og:title" content="Trọn bộ hướng dẫn lập báo cáo tài chính năm 2017" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://lakita.vn/tron-bo-lap-bao-cao-tai-chinh-2017.html" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/268x150/tron-bo-huong-dan-lap-bao-cao-tai-chinh-nam-2016.png">
        <meta property="og:description" content="Khóa học được thiết kế dành cho kế toán đi làm và máy tính có kết nối internet" />
        <meta name="format-detection" content="telephone=no" />
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=315347858825221";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>
            function reveal() {
                for (var a = 0; a < view_elements.length; a++) {
                    var b = 0,
                            c = view_elements[a];
                    do
                        isNaN(c.offsetTop) || (b += c.offsetTop);
                    while (c = c.offsetParent);
                    var d = window.pageYOffset,
                            e = window.innerHeight,
                            c = view_elements[a];
                    window.pageXOffset, window.innerWidth;
                    b >= d && d + e >= b && (view_elements[a].classList.remove("hide-background-image"), view_elements.splice(a, 1), a--)
                }
            }

            function qazy_list_maker() {
                for (var a = document.getElementsByClassName("hide-background-image"), b = 0; b < a.length; b++)
                    view_elements.push(a[b])
            }
            var view_elements = [];
            window.addEventListener("resize", reveal, !1), window.addEventListener("scroll", reveal, !1);
            var intervalObject = setInterval(function () {
                qazy_list_maker()
            }, 50);
            window.addEventListener("load", function () {
                clearInterval(intervalObject), qazy_list_maker(), reveal();
            }, !1);
        </script>
        <link rel="shortcut icon" type="image/png" href="https://static.ladipage.net//59c0798c55a6f2f159d40cd8/tron-bo-huong-dan-lap-bao-cao-tai-chinh-nam-2016-1506091214909.png" />
        <style id="lp-css-page">
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
                display: table;
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
                font-family: Roboto, sans-serif
            }

            .popup.ladi-popup-form,
            .popup.ladi-popup-form .popup-title {
                font-family: roboto, "Open Sans", sans-serif
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
                border-color: transparent transparent #323232;
                border-style: solid;
                border-width: 15px;
                content: " ";
                margin-bottom: 27px;
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

            body {
                font-family: Roboto, "Open Sans", sans-serif
            }

            ;
            .widget-element input,
            ;
            .widget-element textarea,
            ;
            body input,
            ;
            body textarea {
                font-family: Roboto, sans-serif!important
            }

            ;
            input::-webkit-input-placeholder {
                font-family: Roboto, sans-serif
            }

            input:-moz-placeholder {
                font-family: Roboto, sans-serif
            }

            input::-moz-placeholder {
                font-family: Roboto, sans-serif
            }

            input::-ms-input-placeholder {
                font-family: Roboto, sans-serif
            }

            textarea::-webkit-input-placeholder {
                font-family: Roboto, sans-serif
            }

            textarea:-moz-placeholder {
                font-family: Roboto, sans-serif
            }

            textarea::-moz-placeholder {
                font-family: Roboto, sans-serif
            }

            textarea::-ms-input-placeholder {
                font-family: Roboto, sans-serif
            }

            .fb-comments iframe {
                overflow: inherit!important
            }

            .widget-element[lp-type=item_form] .widget-content {
                font-family: Roboto, sans-serif
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
                width: 100vw;
                margin: 0 auto;
                overflow-x: hidden
            }

            .ladi-wraper-page {
                width: 100%;
                height: 100%;
                overflow: hidden
            }

            .widget-element[lp-type=facebook_comment] .lp-strikeThrough {
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
        <style id="lp-css-font">
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTf8zf_FOSsgRmwsS7Aa9k2w.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTT0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/opensans/v13/59ZRklaO5bWGqF5A9baEERJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/opensans/v13/u-WUoqrET9fUeobQW7jkRRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzP8zf_FOSsgRmwsS7Aa9k2w.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzD0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzOgdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
            }

            @font-face {
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/roboto/v15/NdF9MtnOpLzo-noMoG0miPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
            }

            @font-face {
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/roboto/v15/Fcx7Wwv8OzT71A3E1XOAjvesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/roboto/v15/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
            }

            @font-face {
                font-family: 'Roboto Slab';
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJafJul7RR1X4poJgi27uS4w.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
            }

            @font-face {
                font-family: 'Roboto Slab';
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJavyPXdneeGd26m9EmFSSWg.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Roboto Slab';
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJUo2lTMeWA_kmIyWrkNCwPc.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
            }

            @font-face {
                font-family: 'Roboto Slab';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/robotoslab/v6/y7lebkjgREBJK96VQi37Zr6up8jxqWt8HVA3mDhkV_0.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
            }

            @font-face {
                font-family: 'Roboto Slab';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/robotoslab/v6/y7lebkjgREBJK96VQi37ZiYE0-AqJ3nfInTTiDXDjU4.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Roboto Slab';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/robotoslab/v6/y7lebkjgREBJK96VQi37Zo4P5ICox8Kq3LLUNMylGO4.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
            }

            @font-face {
                font-family: 'Roboto Slab';
                font-style: normal;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJWhQUTDJGru-0vvUpABgH8I.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
            }

            @font-face {
                font-family: 'Roboto Slab';
                font-style: normal;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJejkDdvhIIFj_YMdgqpnSB0.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Roboto Slab';
                font-style: normal;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/robotoslab/v6/dazS1PrQQuCxC3iOAJFEJYlIZu-HDpmDIZMigmsroc4.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
            }

            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/montserrat/v10/IVeH6A3MiFyaSEiudUMXE_oTkEokFSrSpvYSpZOeZRs.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
            }

            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/montserrat/v10/IVeH6A3MiFyaSEiudUMXE0_0lycXMw8PhobHtu2Qgco.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 300;
                src: url(https://fonts.gstatic.com/s/montserrat/v10/IVeH6A3MiFyaSEiudUMXE8u2Q0OS-KeTAWjgkS85mDg.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
            }

            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/montserrat/v10/SKK6Nusyv8QPNMtI4j9J2yEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
            }

            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/montserrat/v10/gFXtEMCp1m_YzxsBpKl68iEAvth_LlrfE80CYdSH47w.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/montserrat/v10/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
            }

            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/montserrat/v10/IQHow_FEYlDC4Gzy_m8fcjh33M2A-6X0bdu871ruAGs.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
            }

            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/montserrat/v10/IQHow_FEYlDC4Gzy_m8fchHJTnCUrjaAm2S9z52xC3Y.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 700;
                src: url(https://fonts.gstatic.com/s/montserrat/v10/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
            }

            @font-face {
                font-family: 'Athiti';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/athiti/v1/cE0EpAzSj2z7Ci1CuJ9ScfesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
                unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
            }

            @font-face {
                font-family: 'Athiti';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/athiti/v1/fzjiCwJnuAIRRk4chJuDO_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
            }

            @font-face {
                font-family: 'Athiti';
                font-style: normal;
                font-weight: 400;
                src: url(https://fonts.gstatic.com/s/athiti/v1/Qu8ThwHksrdlln0AKZNung.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
            }
        </style>
        <style id="lp-css-ladi">
            @media(min-width:768px) {
                #SECTION9 {
                    width: 100%;
                    height: 75px;
                }
                #SECTION9 .container {}
                #SECTION9 {}
                #SECTION2 {
                    width: 100%;
                    height: 406px;
                }
                #SECTION2 .container {}
                #SECTION2 {}
                #SECTION507 {
                    width: 100%;
                    height: 406px;
                }
                #SECTION507 .container {}
                #SECTION507 {}
                #SECTION502 {
                    width: 100%;
                    height: 405px;
                }
                #SECTION502 .container {}
                #SECTION502 {}
                #SECTION527 {
                    width: 100%;
                    height: 406px;
                }
                #SECTION527 .container {}
                #SECTION527 {}
                #SECTION472 {
                    width: 100%;
                    height: 344.9573669433594px;
                }
                #SECTION472 .container {}
                #SECTION472 {}
                #SECTION594 {
                    width: 100%;
                    height: 848px;
                }
                #SECTION594 .container {}
                #SECTION594 {}
                #SECTION42 {
                    width: 100%;
                    height: 424.5px;
                }
                #SECTION42 .container {}
                #SECTION42 {}
                #SECTION547 {
                    width: 100%;
                    height: 611px;
                }
                #SECTION547 .container {}
                #SECTION547 {}
                #POPUP212 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP212 .container {
                    width: 447.96875px;
                    height: 295.0390625px;
                    top: calc(100%-295.0390625px);
                }
                #POPUP212 {}
                #SECTION94 {
                    width: 100%;
                    height: 982px;
                }
                #SECTION94 .container {}
                #SECTION94 {}
                #SECTION171 {
                    width: 100%;
                    height: 294px;
                }
                #SECTION171 .container {}
                #SECTION171 {}
                #SECTION341 {
                    width: 100%;
                    height: 822px;
                }
                #SECTION341 .container {}
                #SECTION341 {}
                #POPUP656 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP656 .container {
                    width: 662px;
                    height: 607px;
                    top: calc(100%-607px);
                }
                #POPUP656 {}
                #POPUP368 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP368 .container {
                    width: 780px;
                    height: 423px;
                    top: calc(100%-423px);
                }
                #POPUP368 {}
                #IMAGE187 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/logo-lakita-w-1506052010771.png);
                }
                #IMAGE187 {
                    top: 19px;
                    left: 9px;
                    width: 150.53125px;
                    height: 45px;
                }
                #HEADLINE513 {
                    top: 46px;
                    left: 241px;
                    padding: 0px;
                    width: 180px;
                    height: 18px;
                }
                #HEADLINE513 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #HEADLINE514 {
                    top: 46px;
                    left: 393px;
                    padding: 0px;
                    width: 158px;
                    height: 18px;
                }
                #HEADLINE514 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #HEADLINE515 {
                    top: 46px;
                    left: 556px;
                    padding: 0px;
                    width: 200px;
                    height: 18px;
                }
                #HEADLINE515 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #LINEVERTICAL516 {
                    top: 46px;
                    left: 373px;
                    width: 25px;
                    height: 17px;
                }
                #LINEVERTICAL517 {
                    top: 46px;
                    left: 536px;
                    width: 25px;
                    height: 18px;
                }
                #LINEVERTICAL518 {
                    top: 46px;
                    left: 616px;
                    width: 25px;
                    height: 18px;
                }
                #HEADLINE519 {
                    top: 46px;
                    left: 634px;
                    padding: 0px;
                    width: 134px;
                    height: 18px;
                }
                #HEADLINE519 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #LINEVERTICAL520 {
                    top: 46px;
                    left: 753px;
                    width: 25px;
                    height: 18px;
                }
                #HEADLINE524 {
                    top: 46px;
                    left: 772px;
                    padding: 0px;
                    width: 200px;
                    height: 18px;
                }
                #HEADLINE524 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #PARAGRAPH4 {
                    top: 186px;
                    left: 0px;
                    padding: 0px;
                    width: 434px;
                    height: 27px;
                }
                #PARAGRAPH4 > .widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #HEADLINE7 {
                    top: 190px;
                    left: 0px;
                    padding: 0px;
                    width: 679px;
                    height: 72px;
                }
                #HEADLINE7 > .widget-content {
                    font-size: 30px;
                    text-align: left;
                }
                #HEADLINE5 {
                    top: 116px;
                    left: 0px;
                    padding: 0px;
                    width: 755px;
                    height: 61px;
                }
                #HEADLINE5 > .widget-content {
                    font-size: 50px;
                    text-align: left;
                }
                #BUTTON454 {
                    top: 252px;
                    left: 213px;
                    padding: 0px;
                    width: 160px;
                    height: 40px;
                }
                #BUTTON454 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE509 {
                    top: 92px;
                    left: 265px;
                    padding: 0px;
                    width: 679px;
                    height: 36px;
                }
                #HEADLINE509 > .widget-content {
                    font-size: 30px;
                    text-align: left;
                }
                #HEADLINE510 {
                    top: 128px;
                    left: 162px;
                    padding: 0px;
                    width: 755px;
                    height: 61px;
                }
                #HEADLINE510 > .widget-content {
                    font-size: 50px;
                    text-align: left;
                }
                #PARAGRAPH508 {
                    top: 214px;
                    left: 25px;
                    padding: 0px;
                    width: 922px;
                    height: 27px;
                }
                #PARAGRAPH508 > .widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LINE526 {
                    top: 189px;
                    left: 94px;
                    width: 733px;
                    height: 25px;
                }
                #BUTTON511 {
                    top: 258px;
                    left: 389px;
                    padding: 0px;
                    width: 160px;
                    height: 40px;
                }
                #BUTTON511 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE504 {
                    top: 133px;
                    left: 388px;
                    padding: 0px;
                    width: 679px;
                    height: 36px;
                }
                #HEADLINE504 > .widget-content {
                    font-size: 30px;
                    text-align: left;
                }
                #HEADLINE505 {
                    top: 59px;
                    left: 388px;
                    padding: 0px;
                    width: 755px;
                    height: 66px;
                }
                #HEADLINE505 > .widget-content {
                    font-size: 60px;
                    text-align: left;
                }
                #BUTTON506 {
                    top: 190px;
                    left: 507px;
                    padding: 0px;
                    width: 160px;
                    height: 40px;
                }
                #BUTTON506 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE525 {
                    top: 50px;
                    left: 159px;
                    padding: 0px;
                    width: 250px;
                    height: 126px;
                }
                #HEADLINE525 > .widget-content {
                    font-size: 120px;
                    text-align: left;
                }
                #HEADLINE528 {
                    top: 155px;
                    left: 195px;
                    padding: 0px;
                    width: 679px;
                    height: 62px;
                }
                #HEADLINE528 > .widget-content {
                    font-size: 25px;
                    text-align: left;
                }
                #HEADLINE529 {
                    top: 95px;
                    left: 189px;
                    padding: 0px;
                    width: 755px;
                    height: 45.45454406738281px;
                }
                #HEADLINE529 > .widget-content {
                    font-size: 40px;
                    text-align: left;
                }
                #BUTTON530 {
                    top: 244px;
                    left: 324px;
                    padding: 0px;
                    width: 160px;
                    height: 40px;
                }
                #BUTTON530 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE531 {
                    top: 73px;
                    left: 0px;
                    padding: 0px;
                    width: 250px;
                    height: 106px;
                }
                #HEADLINE531 > .widget-content {
                    font-size: 100px;
                    text-align: left;
                }
                #HEADLINE475 {
                    top: 87.983px;
                    left: 262.912px;
                    padding: 0px;
                    width: 596px;
                    height: 34px;
                }
                #HEADLINE475 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #HEADLINE476 {
                    top: 123.974px;
                    left: 401.903px;
                    padding: 0px;
                    width: 397.99713134765625px;
                    height: 25.454544067382812px;
                }
                #HEADLINE476 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE477 {
                    top: 195.994px;
                    left: 278.906px;
                    padding: 0px;
                    width: 182.72726440429688px;
                    height: 15.454545021057129px;
                }
                #HEADLINE477 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #BOX480 {
                    top: 86.9886px;
                    left: 59.9148px;
                    width: 186.00851440429688px;
                    height: 186.00851440429688px;
                }
                #PARAGRAPH633 {
                    top: 211.438px;
                    left: 308px;
                    padding: 0px;
                    width: 529.0056762695312px;
                    height: 70.90908813476562px;
                }
                #PARAGRAPH633 > .widget-content {
                    font-size: 18px;
                    text-align: justify;
                }
                #LINE634 {
                    top: 170px;
                    left: 348px;
                    width: 418px;
                    height: 25px;
                }
                #HEADLINE673 {
                    top: 155px;
                    left: 348.891px;
                    padding: 0px;
                    width: 475px;
                    height: 24px;
                }
                #HEADLINE673 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #HEADLINE631 {
                    top: 89.5781px;
                    left: 171.688px;
                    padding: 0px;
                    width: 617.272705078125px;
                    height: 33.6363639831543px;
                }
                #HEADLINE631 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #PARAGRAPH632 {
                    top: 143.578px;
                    left: 128.688px;
                    padding: 0px;
                    width: 700px;
                    height: 20px;
                }
                #PARAGRAPH632 > .widget-content {
                    font-size: 16px;
                    text-align: center;
                }
                #HEADLINE598 {
                    top: 488.452px;
                    left: 6.07812px;
                    padding: 0px;
                    width: 292px;
                    height: 18px;
                }
                #HEADLINE598 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE599 {
                    top: 510.437px;
                    left: 5.0625px;
                    padding: 0px;
                    width: 297px;
                    height: 16px;
                }
                #HEADLINE599 > .widget-content {
                    font-size: 12px;
                    text-align: center;
                }
                #SHAPE600 {
                    top: 439.546px;
                    left: 138.079px;
                    width: 35px;
                    height: 35px;
                }
                #BOX608 {
                    top: 250.625px;
                    left: 404.063px;
                    width: 164px;
                    height: 164px;
                }
                #HEADLINE611 {
                    top: 509.531px;
                    left: 343.063px;
                    padding: 0px;
                    width: 288px;
                    height: 16px;
                }
                #HEADLINE611 > .widget-content {
                    font-size: 12px;
                    text-align: center;
                }
                #SHAPE612 {
                    top: 438.609px;
                    left: 467.063px;
                    width: 35px;
                    height: 35px;
                }
                #BOX620 {
                    top: 251.562px;
                    left: 735.766px;
                    width: 164px;
                    height: 164px;
                }
                #PARAGRAPH621 {
                    top: 560.499px;
                    left: 661.766px;
                    padding: 0px;
                    width: 301px;
                    height: 38px;
                }
                #PARAGRAPH621 > .widget-content {
                    font-size: 13px;
                    text-align: justify;
                }
                #HEADLINE622 {
                    top: 487.625px;
                    left: 665.063px;
                    padding: 0px;
                    width: 295px;
                    height: 18px;
                }
                #HEADLINE622 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE623 {
                    top: 510.468px;
                    left: 672.75px;
                    padding: 0px;
                    width: 290px;
                    height: 32px;
                }
                #HEADLINE623 > .widget-content {
                    font-size: 12px;
                    text-align: center;
                }
                #SHAPE624 {
                    top: 439.546px;
                    left: 798.766px;
                    width: 35px;
                    height: 35px;
                }
                #BOX596 {
                    top: 251.562px;
                    left: 75.0781px;
                    width: 164px;
                    height: 164px;
                }
                #HEADLINE610 {
                    top: 487.515px;
                    left: 341.047px;
                    padding: 0px;
                    width: 285px;
                    height: 18px;
                }
                #HEADLINE610 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #PARAGRAPH597 {
                    top: 560.499px;
                    left: 1.07812px;
                    padding: 0px;
                    width: 301px;
                    height: 57px;
                }
                #PARAGRAPH597 > .widget-content {
                    font-size: 13px;
                    text-align: justify;
                }
                #PARAGRAPH609 {
                    top: 559.562px;
                    left: 330.063px;
                    padding: 0px;
                    width: 301px;
                    height: 190px;
                }
                #PARAGRAPH609 > .widget-content {
                    font-size: 13px;
                    text-align: justify;
                }
                #BUTTON641 {
                    top: 777.046875px;
                    left: 400px;
                    padding: 0px;
                    width: 159px;
                    height: 40px;
                }
                #BUTTON641 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE43 {
                    top: 80px;
                    left: 168px;
                    padding: 0px;
                    width: 618px;
                    height: 36px;
                }
                #HEADLINE43 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #HEADLINE287 {
                    top: 179px;
                    left: 328px;
                    padding: 0px;
                    width: 420px;
                    height: 30px;
                }
                #HEADLINE287 > .widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #PARAGRAPH285 {
                    top: 234px;
                    left: 372px;
                    padding: 0px;
                    width: 539px;
                    height: 24px;
                }
                #PARAGRAPH285 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #LINE286 {
                    top: 209px;
                    left: 328px;
                    width: 514px;
                    height: 25px;
                }
                #HEADLINE290 {
                    top: 147px;
                    left: 330px;
                    padding: 0px;
                    width: 200px;
                    height: 26px;
                }
                #HEADLINE290 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE532 {
                    top: 268px;
                    left: 373px;
                    padding: 0px;
                    width: 478px;
                    height: 72px;
                }
                #HEADLINE532 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #HEADLINE533 {
                    top: 346px;
                    left: 374px;
                    padding: 0px;
                    width: 477px;
                    height: 48px;
                }
                #HEADLINE533 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #SHAPE534 {
                    top: 228px;
                    left: 338px;
                    width: 32px;
                    height: 32px;
                }
                #SHAPE535 {
                    top: 262px;
                    left: 340px;
                    width: 32px;
                    height: 32px;
                }
                #SHAPE536 {
                    top: 340px;
                    left: 342px;
                    width: 32px;
                    height: 32px;
                }
                #BOX537 {
                    top: 133px;
                    left: 41px;
                    width: 241px;
                    height: 237px;
                }
                #BOX283 {
                    top: 147px;
                    left: 56px;
                    width: 211px;
                    height: 207px;
                }
                #HEADLINE548 {
                    top: 103.48px;
                    left: 103.906px;
                    padding: 0px;
                    width: 779px;
                    height: 34px;
                }
                #HEADLINE548 > .widget-content {
                    font-size: 28px;
                    text-align: left;
                }
                #LISTOP549 {
                    top: 198.5px;
                    left: 57px;
                    width: 352px;
                    height: 330px;
                }
                #LISTOP549 > .widget-content {
                    font-size: 18px;
                    text-align: justify;
                }
                #LISTOP549 > ol.widget-content li::before {
                    content: counter(linum, disc);
                    width: 30px;
                    height: 30px;
                    font-size: 15px;
                    color: rgba(51, 51, 51, 1);
                    margin-right: 0px;
                }
                #LISTOP549 > ol.widget-content li {
                    margin-bottom: 10px;
                }
                #LISTOP549 > ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #YOUTUBE550 {
                    top: 229px;
                    left: 437px;
                    width: 523px;
                    height: 291px;
                }
                #SHAPE566 {
                    top: 351.918px;
                    left: 38px;
                    width: 18px;
                    height: 17px;
                }
                #SHAPE567 {
                    top: 416.918px;
                    left: 38px;
                    width: 18px;
                    height: 17px;
                }
                #SHAPE568 {
                    top: 473.906px;
                    left: 38px;
                    width: 18px;
                    height: 17px;
                }
                #SHAPE569 {
                    top: 292.912px;
                    left: 36.9148px;
                    width: 18px;
                    height: 17px;
                }
                #SHAPE570 {
                    top: 232.912px;
                    left: 35.9034px;
                    width: 18px;
                    height: 17px;
                }
                #SHAPE571 {
                    top: 205.5px;
                    left: 36px;
                    width: 18px;
                    height: 17px;
                }
                #PARAGRAPH216 {
                    top: 94.5px;
                    left: 37.5px;
                    padding: 0px;
                    width: 625px;
                    height: 24px;
                }
                #PARAGRAPH216 > .widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #IMAGE675 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/popip2-1506090959037.png);
                }
                #IMAGE675 {
                    top: -223.484px;
                    left: -565.016px;
                    width: 1514.1875px;
                    height: 689px;
                }
                #HEADLINE95 {
                    top: 90.5px;
                    left: 315.242px;
                    padding: 0px;
                    width: 348px;
                    height: 34px;
                }
                #HEADLINE95 > .widget-content {
                    font-size: 28px;
                    text-align: center;
                }
                #GROUP248 {
                    top: 394.546875px;
                    left: 1px;
                    width: 467px;
                    height: 192px;
                }
                #BOX249 {
                    top: 24px;
                    left: 1px;
                    width: 467px;
                    height: 168px;
                }
                #HEADLINE250 {
                    top: 24px;
                    left: 152px;
                    padding: 0px;
                    width: 285px;
                    height: 27px;
                }
                #HEADLINE250 > .widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #BUTTON251 {
                    top: 111px;
                    left: 204px;
                    padding: 0px;
                    width: 138px;
                    height: 40px;
                }
                #BUTTON251 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE252 {
                    top: 55px;
                    left: 152px;
                    padding: 0px;
                    width: 303px;
                    height: 48px;
                }
                #HEADLINE252 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #BOX253 {
                    top: 0px;
                    left: 20px;
                    width: 119px;
                    height: 116px;
                }
                #GROUP254 {
                    top: 397.5px;
                    left: 493.234375px;
                    width: 467px;
                    height: 192px;
                }
                #BOX243 {
                    top: 24px;
                    left: 1px;
                    width: 467px;
                    height: 168px;
                }
                #HEADLINE244 {
                    top: 24px;
                    left: 152px;
                    padding: 0px;
                    width: 285px;
                    height: 27px;
                }
                #HEADLINE244 > .widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #HEADLINE245 {
                    top: 55px;
                    left: 152px;
                    padding: 0px;
                    width: 303px;
                    height: 48px;
                }
                #HEADLINE245 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #BUTTON246 {
                    top: 111px;
                    left: 204px;
                    padding: 0px;
                    width: 138px;
                    height: 40px;
                }
                #BUTTON246 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #BOX247 {
                    top: 0px;
                    left: 20px;
                    width: 119px;
                    height: 116px;
                }
                #GROUP262 {
                    top: 628.5px;
                    left: 494.234375px;
                    width: 467px;
                    height: 192px;
                }
                #BOX263 {
                    top: 24px;
                    left: 1px;
                    width: 467px;
                    height: 168px;
                }
                #HEADLINE264 {
                    top: 24px;
                    left: 152px;
                    padding: 0px;
                    width: 285px;
                    height: 27px;
                }
                #HEADLINE264 > .widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #BUTTON265 {
                    top: 111px;
                    left: 204px;
                    padding: 0px;
                    width: 138px;
                    height: 40px;
                }
                #BUTTON265 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE266 {
                    top: 55px;
                    left: 152px;
                    padding: 0px;
                    width: 303px;
                    height: 48px;
                }
                #HEADLINE266 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #BOX267 {
                    top: 0px;
                    left: 20px;
                    width: 119px;
                    height: 116px;
                }
                #GROUP282 {
                    top: 629.5px;
                    left: 0.234375px;
                    width: 467px;
                    height: 192px;
                }
                #BOX275 {
                    top: 24px;
                    left: 1px;
                    width: 467px;
                    height: 168px;
                }
                #HEADLINE276 {
                    top: 24px;
                    left: 152px;
                    padding: 0px;
                    width: 285px;
                    height: 27px;
                }
                #HEADLINE276 > .widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #HEADLINE277 {
                    top: 55px;
                    left: 152px;
                    padding: 0px;
                    width: 303px;
                    height: 48px;
                }
                #HEADLINE277 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #BUTTON278 {
                    top: 111px;
                    left: 204px;
                    padding: 0px;
                    width: 138px;
                    height: 40px;
                }
                #BUTTON278 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #BOX279 {
                    top: 0px;
                    left: 20px;
                    width: 119px;
                    height: 116px;
                }
                #GROUP453 {
                    top: 161.54296875px;
                    left: 0.97265625px;
                    width: 466.9921875px;
                    height: 191.97265625px;
                }
                #BOX118 {
                    top: 23.984375px;
                    left: 1px;
                    width: 467px;
                    height: 168px;
                }
                #HEADLINE119 {
                    top: 24px;
                    left: 152px;
                    padding: 0px;
                    width: 285px;
                    height: 27px;
                }
                #HEADLINE119 > .widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #HEADLINE120 {
                    top: 55px;
                    left: 152px;
                    padding: 0px;
                    width: 303px;
                    height: 48px;
                }
                #HEADLINE120 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #BUTTON205 {
                    top: 111px;
                    left: 204px;
                    padding: 0px;
                    width: 138px;
                    height: 40px;
                }
                #BUTTON205 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #BOX218 {
                    top: 0px;
                    left: 20.00390625px;
                    width: 119px;
                    height: 116px;
                }
                #BUTTON471 {
                    top: 888.5px;
                    left: 387.242px;
                    padding: 0px;
                    width: 191px;
                    height: 46px;
                }
                #BUTTON471 > .widget-content {
                    font-size: 20px;
                    text-align: center;
                }
                #GROUP538 {
                    top: 161.5px;
                    left: 493.234375px;
                    width: 467px;
                    height: 192px;
                }
                #BOX229 {
                    top: 24px;
                    left: 1px;
                    width: 467px;
                    height: 168px;
                }
                #HEADLINE230 {
                    top: 24px;
                    left: 152px;
                    padding: 0px;
                    width: 285px;
                    height: 27px;
                }
                #HEADLINE230 > .widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #BUTTON232 {
                    top: 111px;
                    left: 204px;
                    padding: 0px;
                    width: 138px;
                    height: 40px;
                }
                #BUTTON232 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE231 {
                    top: 55px;
                    left: 152px;
                    padding: 0px;
                    width: 303px;
                    height: 48px;
                }
                #HEADLINE231 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #BOX233 {
                    top: 0px;
                    left: 19.984375px;
                    width: 119px;
                    height: 116px;
                }
                #HEADLINE213 {
                    top: 220.546875px;
                    left: -233px;
                    padding: 0px;
                    width: 548px;
                    height: undefinedpx;
                }
                #HEADLINE213 > .widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #GROUP449 {
                    top: 137px;
                    left: 1px;
                    width: 285px;
                    height: 121px;
                }
                #LINE193 {
                    top: 16px;
                    left: 21px;
                    width: 247px;
                    height: 25px;
                }
                #HEADLINE174 {
                    top: 0px;
                    left: 1px;
                    padding: 0px;
                    width: 285px;
                    height: 24px;
                }
                #HEADLINE174 > .widget-content {
                    font-size: 18px;
                    text-align: center;
                }
                #PARAGRAPH175 {
                    top: 41px;
                    left: 21px;
                    padding: 0px;
                    width: 247px;
                    height: 80px;
                }
                #PARAGRAPH175 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #GROUP450 {
                    top: 136.5px;
                    left: 349px;
                    width: 285px;
                    height: 101px;
                }
                #LINE195 {
                    top: 16px;
                    left: 18px;
                    width: 250px;
                    height: 25px;
                }
                #HEADLINE179 {
                    top: 0px;
                    left: 1px;
                    padding: 0px;
                    width: 285px;
                    height: 24px;
                }
                #HEADLINE179 > .widget-content {
                    font-size: 18px;
                    text-align: center;
                }
                #PARAGRAPH180 {
                    top: 41px;
                    left: 38px;
                    padding: 0px;
                    width: 211px;
                    height: 60px;
                }
                #PARAGRAPH180 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #GROUP451 {
                    top: 137px;
                    left: 688px;
                    width: 251px;
                    height: 101px;
                }
                #LINE196 {
                    top: 16px;
                    left: 2px;
                    width: 250px;
                    height: 25px;
                }
                #HEADLINE184 {
                    top: 0px;
                    left: 1px;
                    padding: 0px;
                    width: 250px;
                    height: 24px;
                }
                #HEADLINE184 > .widget-content {
                    font-size: 18px;
                    text-align: center;
                }
                #PARAGRAPH185 {
                    top: 41px;
                    left: 14px;
                    padding: 0px;
                    width: 228px;
                    height: 60px;
                }
                #PARAGRAPH185 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #SHAPE181 {
                    top: 28.5px;
                    left: 474px;
                    width: 50.609375px;
                    height: 92px;
                }
                #IMAGE201 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png);
                }
                #IMAGE201 {
                    top: 32.5469px;
                    left: 556px;
                    width: 79px;
                    height: 79px;
                }
                #SHAPE176 {
                    top: 29.5px;
                    left: 123px;
                    width: 50.609375px;
                    height: 92px;
                }
                #IMAGE198 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png);
                }
                #IMAGE198 {
                    top: 36.5469px;
                    left: 196px;
                    width: 80px;
                    height: 80px;
                }
                #SHAPE186 {
                    top: 28.5px;
                    left: 787.219px;
                    width: 50.609375px;
                    height: 92px;
                }
                #IMAGE197 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png);
                }
                #IMAGE197 {
                    top: 26.5469px;
                    left: 897px;
                    width: 79px;
                    height: 79px;
                }
                #BOX349 {
                    top: 68px;
                    left: 548px;
                    width: 387px;
                    height: 414px;
                }
                #HEADLINE355 {
                    top: 38px;
                    left: 32px;
                    padding: 0px;
                    width: 330px;
                    height: 34px;
                }
                #HEADLINE355 > .widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #HEADLINE356 {
                    top: 120px;
                    left: 32px;
                    padding: 0px;
                    width: 330px;
                    height: 19px;
                }
                #HEADLINE356 > .widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #FORM350 {
                    top: 121.984px;
                    left: 31.9844px;
                    width: 321px;
                    height: 194.5px;
                }
                #FORM350 > .widget-content {
                    font-size: 13px;
                }
                #ITEM_FORM351 {
                    top: 0px;
                    left: 0px;
                    width: 320px;
                    height: 35.640625px;
                }
                #ITEM_FORM351 > .widget-content {
                    font-size: 13px;
                }
                #ITEM_FORM352 {
                    top: 54.1875px;
                    left: 1px;
                    width: 320px;
                    height: 35.640625px;
                }
                #ITEM_FORM352 > .widget-content {
                    font-size: 13px;
                }
                #ITEM_FORM353 {
                    top: 107.5px;
                    left: 1px;
                    width: 320px;
                    height: 35.640625px;
                }
                #ITEM_FORM353 > .widget-content {
                    font-size: 13px;
                }
                #ITEM_FORM377 {
                    top: 161.5px;
                    left: 0px;
                    width: 321px;
                    height: 33px;
                }
                #BUTTON354 {
                    top: 345.484px;
                    left: 83px;
                    padding: 0px;
                    width: 233px;
                    height: 40px;
                }
                #BUTTON354 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #IMAGE379 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/logo-lakita-w-1506052010771.png);
                }
                #IMAGE379 {
                    top: 24.5px;
                    left: 82px;
                    width: 215.375px;
                    height: 67px;
                }
                #GROUP437 {
                    top: 324.247px;
                    left: 61.003px;
                    width: 422px;
                    height: 113px;
                }
                #SHAPE431 {
                    top: 4px;
                    left: 314px;
                    width: 109px;
                    height: 109px;
                }
                #SHAPE434 {
                    top: 2px;
                    left: 208px;
                    width: 109px;
                    height: 109px;
                }
                #SHAPE430 {
                    top: 0px;
                    left: 1px;
                    width: 108px;
                    height: 108px;
                }
                #SHAPE432 {
                    top: 1px;
                    left: 104px;
                    width: 109px;
                    height: 109px;
                }
                #COUNTDOWN4355 {
                    top: 14px;
                    left: 1px;
                    width: 421px;
                    height: 57px;
                }
                #COUNTDOWN4355 > .widget-content {
                    font-size: 70px;
                }
                #HEADLINE438 {
                    top: 68.696px;
                    left: 57.0086px;
                    padding: 0px;
                    width: 448px;
                    height: 72px;
                }
                #HEADLINE438 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #GROUP452 {
                    top: 154.696px;
                    left: 111.009px;
                    width: 377px;
                    height: 62px;
                }
                #BOX439 {
                    top: 0px;
                    left: 1px;
                    width: 343px;
                    height: 62px;
                }
                #BOX440 {
                    top: 0px;
                    left: 0px;
                    width: 171px;
                    height: 62px;
                }
                #HEADLINE441 {
                    top: 9px;
                    left: 27px;
                    padding: 0px;
                    width: 140px;
                    height: 40px;
                }
                #HEADLINE441 > .widget-content {
                    font-size: 34px;
                    text-align: center;
                }
                #HEADLINE444 {
                    top: 9px;
                    left: 178px;
                    padding: 0px;
                    width: 200px;
                    height: 41px;
                }
                #HEADLINE444 > .widget-content {
                    font-size: 35px;
                    text-align: left;
                }
                #HEADLINE499 {
                    top: 278.247px;
                    left: 165.003px;
                    padding: 0px;
                    width: 218px;
                    height: 34px;
                }
                #HEADLINE499 > .widget-content {
                    font-size: 28px;
                    text-align: left;
                }
                #LINE500 {
                    top: 287.247px;
                    left: 81.003px;
                    width: 66px;
                    height: 25px;
                }
                #LINE501 {
                    top: 286.247px;
                    left: 400.003px;
                    width: 67px;
                    height: 25px;
                }
                #HEADLINE636 {
                    top: 441.221px;
                    left: 81.9121px;
                    padding: 0px;
                    width: 557.9971313476562px;
                    height: 25.454544067382812px;
                }
                #HEADLINE636 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE637 {
                    top: 229.829px;
                    left: 70.9092px;
                    padding: 0px;
                    width: 569.0056762695312px;
                    height: 29.999998092651367px;
                }
                #HEADLINE637 > .widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #IMAGE639 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/123-1506087514195.png);
                }
                #IMAGE639 {
                    top: 600.547px;
                    left: -312px;
                    width: 1587px;
                    height: 222px;
                }
                #PARAGRAPH640 {
                    top: 109px;
                    left: 485px;
                    padding: 0px;
                    width: 640px;
                    height: 95px;
                }
                #PARAGRAPH640 > .widget-content {
                    font-size: 13px;
                    text-align: center;
                }
                #FORM660 {
                    top: 358.5px;
                    left: 96px;
                    width: 469px;
                    height: 164.109375px;
                }
                #FORM660 > .widget-content {
                    font-size: 14px;
                }
                #ITEM_FORM661 {
                    top: 0px;
                    left: 0px;
                    width: 469px;
                    height: 44.015625px;
                }
                #ITEM_FORM661 > .widget-content {
                    font-size: 14px;
                }
                #ITEM_FORM662 {
                    top: 58.7167px;
                    left: 0px;
                    width: 469px;
                    height: 44.015625px;
                }
                #ITEM_FORM662 > .widget-content {
                    font-size: 14px;
                }
                #ITEM_FORM663 {
                    top: 120.103px;
                    left: 0px;
                    width: 469px;
                    height: 44.015625px;
                }
                #ITEM_FORM663 > .widget-content {
                    font-size: 14px;
                }
                #BUTTON664 {
                    top: 541.5px;
                    left: 243px;
                    padding: 0px;
                    width: 175px;
                    height: 40px;
                }
                #BUTTON664 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #SHAPE668 {
                    top: 181.5px;
                    left: 104px;
                    width: 26px;
                    height: 26px;
                }
                #BOX657 {
                    top: 1.5px;
                    left: 0px;
                    width: 661px;
                    height: 84px;
                }
                #SHAPE659 {
                    top: 23px;
                    left: 34px;
                    width: 50px;
                    height: 50px;
                }
                #HEADLINE658 {
                    top: 33px;
                    left: 101px;
                    padding: 0px;
                    width: 497px;
                    height: 29px;
                }
                #HEADLINE658 > .widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #HEADLINE665 {
                    top: 178.5px;
                    left: 134px;
                    padding: 0px;
                    width: 557px;
                    height: 150px;
                }
                #HEADLINE665 > .widget-content {
                    font-size: 15px;
                    text-align: left;
                }
                #SHAPE669 {
                    top: 239.5px;
                    left: 104px;
                    width: 27px;
                    height: 27px;
                }
                #SHAPE671 {
                    top: 270.5px;
                    left: 105px;
                    width: 26px;
                    height: 26px;
                }
                #HEADLINE672 {
                    top: 111.5px;
                    left: 57px;
                    padding: 0px;
                    width: 554px;
                    height: 60px;
                }
                #HEADLINE672 > .widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #BOX369 {
                    top: 38.5px;
                    left: 59px;
                    width: 680px;
                    height: 342px;
                }
                #IMAGE370 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/phong-2.png);
                }
                #IMAGE370 {
                    top: 58px;
                    left: 21.515625px;
                    width: 251.515625px;
                    height: 206px;
                }
                #BOX371 {
                    top: 0px;
                    left: 290px;
                    width: 390px;
                    height: 342px;
                }
                #BOX372 {
                    top: 54px;
                    left: 167px;
                    width: 63px;
                    height: 63px;
                }
                #SHAPE373 {
                    top: 12px;
                    left: 14px;
                    width: 36px;
                    height: 36px;
                }
                #HEADLINE374 {
                    top: 141px;
                    left: 30px;
                    padding: 0px;
                    width: 334px;
                    height: 36px;
                }
                #HEADLINE374 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #LINE376 {
                    top: 177px;
                    left: 51px;
                    width: 301px;
                    height: 25px;
                }
                #PARAGRAPH375 {
                    top: 196px;
                    left: 350px;
                    padding: 0px;
                    width: 286px;
                    height: 110px;
                }
                #PARAGRAPH375 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
            }

            #SECTION9 {
                display: block;
                background-color: rgba(9, 142, 201, 1);
            }

            #SECTION9 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #SECTION2 {
                display: block;
                background-image: url("https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }

            #SECTION2 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0.25);
            }

            #SECTION507 {
                display: block;
                background-image: url("https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png");
                background-color: rgba(255, 255, 255, 0);
                background-position: top center;
                background-repeat: repeat;
            }

            #SECTION507 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0.57);
            }

            #SECTION502 {
                display: block;
                background-image: url("https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }

            #SECTION502 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0.49);
            }

            #SECTION527 {
                display: block;
                background-image: url("https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/untitled-3-1506079046658.jpg");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }

            #SECTION527 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #SECTION472 {
                display: block;
                background-color: rgba(224, 224, 224, 1);
            }

            #SECTION472 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SECTION594 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #SECTION594 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #SECTION42 {
                display: block;
                background-color: rgba(224, 224, 224, 1);
            }

            #SECTION42 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #SECTION547 {
                display: block;
                background-color: rgba(255, 255, 255, 1);
            }

            #SECTION547 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #POPUP212 .container {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #POPUP212 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #SECTION94 {
                display: block;
                background-image: url("https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png");
                background-color: rgba(0, 176, 255, 1);
                background-size: cover;
                background-attachment: fixed;
                background-position: top left;
                background-repeat: no-repeat;
            }

            #SECTION94 > .ladi-widget-overlay {
                background-color: rgba(242, 242, 242, 0.81);
            }

            #SECTION171 {
                display: block;
                background-color: rgba(255, 255, 255, 1);
            }

            #SECTION171 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #SECTION341 {
                display: block;
                background-image: url("https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png");
                background-color: rgba(255, 255, 255, 0);
                background-size: cover;
                background-attachment: fixed;
                background-position: top left;
                background-repeat: no-repeat;
            }

            #SECTION341 > .ladi-widget-overlay {
                background-color: rgba(6, 13, 46, 0.4);
            }

            #POPUP656 .container {
                display: block;
                background-image: url("https://static.ladipage.net/d/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png");
                background-color: rgba(237, 237, 237, 1);
                background-origin: content-box;
                background-size: auto 100%;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }

            #POPUP656 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0.64);
            }

            #POPUP368 .container {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #POPUP368 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #IMAGE187 {
                display: block;
            }

            #IMAGE187 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE187 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE513 {
                display: block;
            }

            #HEADLINE513 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 18px;
            }

            #HEADLINE513 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE514 {
                display: block;
            }

            #HEADLINE514 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 18px;
            }

            #HEADLINE514 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE515 {
                display: block;
            }

            #HEADLINE515 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 18px;
            }

            #HEADLINE515 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINEVERTICAL516 {
                display: block;
            }

            #LINEVERTICAL516>.widget-content .linevertical {
                border-top-width: 0px;
                border-right-width: 0px;
                border-left-width: 1px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(0, 229, 255, 1);
                margin-left: 12px;
            }

            #LINEVERTICAL516 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINEVERTICAL516 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINEVERTICAL517 {
                display: block;
            }

            #LINEVERTICAL517>.widget-content .linevertical {
                border-top-width: 0px;
                border-right-width: 0px;
                border-left-width: 1px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(0, 229, 255, 1);
                margin-left: 12px;
            }

            #LINEVERTICAL517 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINEVERTICAL517 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINEVERTICAL518 {
                display: block;
            }

            #LINEVERTICAL518>.widget-content .linevertical {
                border-top-width: 0px;
                border-right-width: 0px;
                border-left-width: 1px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(0, 229, 255, 1);
                margin-left: 12px;
            }

            #LINEVERTICAL518 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINEVERTICAL518 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE519 {
                display: block;
            }

            #HEADLINE519 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 18px;
            }

            #HEADLINE519 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINEVERTICAL520 {
                display: block;
            }

            #LINEVERTICAL520>.widget-content .linevertical {
                border-top-width: 0px;
                border-right-width: 0px;
                border-left-width: 1px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(0, 229, 255, 1);
                margin-left: 12px;
            }

            #LINEVERTICAL520 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINEVERTICAL520 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE524 {
                display: block;
            }

            #HEADLINE524 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 18px;
            }

            #HEADLINE524 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH4 {
                display: block;
            }

            #PARAGRAPH4 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(238, 238, 238, 1);
                font-weight: 400;
                line-height: 27px;
            }

            #PARAGRAPH4 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE7 {
                display: block;
            }

            #HEADLINE7 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 36px;
            }

            #HEADLINE7 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE5 {
                display: block;
            }

            #HEADLINE5 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                font-weight: 700;
                line-height: 61px;
                letter-spacing: 0px;
            }

            #HEADLINE5 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON454 {
                display: table;
            }

            #BUTTON454 > .widget-content {
                background-color: #3D9BE9;
                color: #ffffff;
                line-height: 40px;
            }

            #BUTTON454 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON454 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE509 {
                display: block;
            }

            #HEADLINE509 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 36px;
            }

            #HEADLINE509 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE510 {
                display: block;
            }

            #HEADLINE510 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto Slab', serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                font-weight: 400;
                line-height: 61px;
                letter-spacing: 0px;
            }

            #HEADLINE510 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH508 {
                display: block;
            }

            #PARAGRAPH508 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(238, 238, 238, 1);
                font-weight: 400;
                line-height: 27px;
            }

            #PARAGRAPH508 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINE526 {
                display: block;
            }

            #LINE526>.widget-content .line {
                border-top-width: 3px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(3, 169, 244, 1);
                margin-top: 9.5px;
            }

            #LINE526 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE526 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON511 {
                display: table;
            }

            #BUTTON511 > .widget-content {
                background-color: #3D9BE9;
                color: #ffffff;
                line-height: 40px;
            }

            #BUTTON511 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON511 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE504 {
                display: block;
            }

            #HEADLINE504 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 36px;
            }

            #HEADLINE504 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE505 {
                display: block;
            }

            #HEADLINE505 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                font-weight: 400;
                line-height: 66px;
                letter-spacing: 0px;
            }

            #HEADLINE505 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON506 {
                display: table;
            }

            #BUTTON506 > .widget-content {
                background-color: #3D9BE9;
                color: #ffffff;
                line-height: 40px;
            }

            #BUTTON506 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON506 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE525 {
                display: block;
            }

            #HEADLINE525 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 126px;
            }

            #HEADLINE525 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE528 {
                display: block;
            }

            #HEADLINE528 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 31px;
            }

            #HEADLINE528 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE529 {
                display: block;
            }

            #HEADLINE529 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                font-weight: 400;
                line-height: 46px;
                letter-spacing: 0px;
            }

            #HEADLINE529 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON530 {
                display: table;
            }

            #BUTTON530 > .widget-content {
                background-color: #3D9BE9;
                color: #ffffff;
                line-height: 40px;
            }

            #BUTTON530 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON530 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE531 {
                display: block;
            }

            #HEADLINE531 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 176, 255, 1);
                font-weight: 400;
                line-height: 106px;
            }

            #HEADLINE531 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE475 {
                display: block;
            }

            #HEADLINE475 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 400;
                line-height: 34px;
            }

            #HEADLINE475 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE476 {
                display: block;
            }

            #HEADLINE476 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(66, 66, 66, 1);
                font-weight: 700;
                line-height: 26px;
            }

            #HEADLINE476 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE477 {
                display: block;
            }

            #HEADLINE477 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(41, 98, 255, 1);
                font-weight: 400;
                line-height: 16px;
            }

            #HEADLINE477 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX480 {
                display: block;
            }

            #BOX480 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg");
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

            #BOX480 > .widget-content {
                border-radius: 550px;
            }

            #BOX480 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH633 {
                display: block;
            }

            #PARAGRAPH633 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 24px;
            }

            #PARAGRAPH633 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINE634 {
                display: block;
            }

            #LINE634>.widget-content .line {
                border-top-width: 1px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(0, 0, 0, 1);
                margin-top: 12px;
            }

            #LINE634 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE634 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE673 {
                display: block;
            }

            #HEADLINE673 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 24px;
            }

            #HEADLINE673 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE631 {
                display: block;
            }

            #HEADLINE631 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(41, 41, 41, 1);
                font-weight: 700;
                line-height: 34px;
            }

            #HEADLINE631 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH632 {
                display: block;
            }

            #PARAGRAPH632 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(46, 46, 46, 1);
                font-weight: 300;
                line-height: 20px;
            }

            #PARAGRAPH632 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE598 {
                display: block;
            }

            #HEADLINE598 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(3, 169, 244, 1);
                text-transform: uppercase;
                font-weight: 700;
                line-height: 18px;
                letter-spacing: 1px;
            }

            #HEADLINE598 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE599 {
                display: block;
            }

            #HEADLINE599 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(66, 66, 66, 1);
                font-weight: 300;
                line-height: 16px;
                letter-spacing: 0px;
            }

            #HEADLINE599 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE600 {
                display: block;
            }

            #SHAPE600 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE600> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE600 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX608 {
                display: block;
            }

            #BOX608 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg");
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

            #BOX608 > .widget-content {
                border-radius: 110px;
                border-width: 3px;
                border-style: solid;
                border-color: rgba(3, 169, 244, 1);
            }

            #BOX608 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE611 {
                display: block;
            }

            #HEADLINE611 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(66, 66, 66, 1);
                font-weight: 300;
                line-height: 16px;
                letter-spacing: 0px;
            }

            #HEADLINE611 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE612 {
                display: block;
            }

            #SHAPE612 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE612> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE612 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX620 {
                display: block;
            }

            #BOX620 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png");
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

            #BOX620 > .widget-content {
                border-radius: 110px;
                border-width: 3px;
                border-style: solid;
                border-color: rgba(3, 169, 244, 1);
            }

            #BOX620 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH621 {
                display: block;
            }

            #PARAGRAPH621 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(66, 66, 66, 1);
                font-weight: 400;
                line-height: 19px;
            }

            #PARAGRAPH621 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE622 {
                display: block;
            }

            #HEADLINE622 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(66, 66, 66, 1);
                text-transform: uppercase;
                font-weight: 700;
                line-height: 18px;
                letter-spacing: 1px;
            }

            #HEADLINE622 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE623 {
                display: block;
            }

            #HEADLINE623 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(66, 66, 66, 1);
                font-weight: 300;
                line-height: 16px;
                letter-spacing: 0px;
            }

            #HEADLINE623 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE624 {
                display: block;
            }

            #SHAPE624 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE624> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE624 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX596 {
                display: block;
            }

            #BOX596 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg");
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

            #BOX596 > .widget-content {
                border-radius: 110px;
                border-width: 3px;
                border-style: solid;
                border-color: rgba(3, 169, 244, 1);
            }

            #BOX596 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE610 {
                display: block;
            }

            #HEADLINE610 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(3, 169, 244, 1);
                text-transform: uppercase;
                font-weight: 700;
                line-height: 18px;
                letter-spacing: 1px;
            }

            #HEADLINE610 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH597 {
                display: block;
            }

            #PARAGRAPH597 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(66, 66, 66, 1);
                font-weight: 400;
                line-height: 19px;
            }

            #PARAGRAPH597 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH609 {
                display: block;
            }

            #PARAGRAPH609 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(66, 66, 66, 1);
                font-weight: 400;
                line-height: 19px;
            }

            #PARAGRAPH609 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON641 {
                display: table;
            }

            #BUTTON641 > .widget-content {
                background-color: #3D9BE9;
                color: #ffffff;
                line-height: 40px;
            }

            #BUTTON641 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON641 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE43 {
                display: block;
            }

            #HEADLINE43 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 55, 85, 1);
                font-weight: 400;
                line-height: 36px;
            }

            #HEADLINE43 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE287 {
                display: block;
            }

            #HEADLINE287 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 700;
                line-height: 30px;
            }

            #HEADLINE287 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH285 {
                display: block;
            }

            #PARAGRAPH285 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 24px;
            }

            #PARAGRAPH285 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINE286 {
                display: block;
            }

            #LINE286>.widget-content .line {
                border-top-width: 1px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(3, 169, 244, 1);
                margin-top: 12px;
            }

            #LINE286 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE286 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE290 {
                display: block;
            }

            #HEADLINE290 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(3, 169, 244, 1);
                font-weight: 400;
                line-height: 26px;
            }

            #HEADLINE290 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE532 {
                display: block;
            }

            #HEADLINE532 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 24px;
            }

            #HEADLINE532 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE533 {
                display: block;
            }

            #HEADLINE533 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 24px;
            }

            #HEADLINE533 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE534 {
                display: block;
            }

            #SHAPE534 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE534> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE534 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE535 {
                display: block;
            }

            #SHAPE535 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE535> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE535 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE536 {
                display: block;
            }

            #SHAPE536 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE536> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE536 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX537 {
                display: block;
            }

            #BOX537 > .widget-content {
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX537 > .widget-content {
                border-radius: 200px;
                border-width: 1px;
                border-style: solid;
                border-color: rgba(3, 169, 244, 1);
            }

            #BOX537 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX283 {
                display: block;
            }

            #BOX283 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png");
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
                box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.36);
            }

            #BOX283 > .widget-content {
                border-radius: 100px;
            }

            #BOX283 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE548 {
                display: block;
            }

            #HEADLINE548 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 176, 255, 1);
                font-weight: 400;
                line-height: 34px;
            }

            #HEADLINE548 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LISTOP549 {
                display: block;
            }

            #LISTOP549 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
                line-height: 30px;
            }

            #LISTOP549 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #YOUTUBE550 {
                display: block;
            }

            #YOUTUBE550 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #YOUTUBE550 > .widget-content {
                border-width: 5px;
                border-style: solid;
                border-color: rgba(0, 188, 212, 1);
            }

            #YOUTUBE550 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE566 {
                display: block;
            }

            #SHAPE566 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE566> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE566 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE567 {
                display: block;
            }

            #SHAPE567 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE567> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE567 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE568 {
                display: block;
            }

            #SHAPE568 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE568> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE568 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE569 {
                display: block;
            }

            #SHAPE569 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE569> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE569 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE570 {
                display: block;
            }

            #SHAPE570 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE570> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE570 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE571 {
                display: block;
            }

            #SHAPE571 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE571> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE571 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH216 {
                display: block;
            }

            #PARAGRAPH216 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 24px;
            }

            #PARAGRAPH216 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #IMAGE675 {
                display: block;
            }

            #IMAGE675 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE675 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE95 {
                display: block;
            }

            #HEADLINE95 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 34px;
            }

            #HEADLINE95 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP248 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP248 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX249 {
                display: block;
            }

            #BOX249 > .widget-content {
                background-color: rgba(6, 21, 64, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX249 > .widget-content {
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX249 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #HEADLINE250 {
                display: block;
            }

            #HEADLINE250 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 27px;
            }

            #HEADLINE250 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON251 {
                display: table;
            }

            #BUTTON251 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: #ffffff;
                line-height: 40px;
            }

            #BUTTON251 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON251 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE252 {
                display: block;
            }

            #HEADLINE252 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(41, 182, 246, 1);
                text-transform: uppercase;
                font-weight: 400;
                line-height: 24px;
            }

            #HEADLINE252 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX253 {
                display: block;
            }

            #BOX253 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #BOX253 > .widget-content {
                border-radius: 0px;
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX253 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP254 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP254 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX243 {
                display: block;
            }

            #BOX243 > .widget-content {
                background-color: rgba(6, 21, 64, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX243 > .widget-content {
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX243 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #HEADLINE244 {
                display: block;
            }

            #HEADLINE244 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 27px;
            }

            #HEADLINE244 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE245 {
                display: block;
            }

            #HEADLINE245 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(34, 196, 242, 1);
                text-transform: uppercase;
                font-weight: 400;
                line-height: 24px;
            }

            #HEADLINE245 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON246 {
                display: table;
            }

            #BUTTON246 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: #ffffff;
                line-height: 40px;
            }

            #BUTTON246 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON246 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX247 {
                display: block;
            }

            #BOX247 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #BOX247 > .widget-content {
                border-radius: 0px;
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX247 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP262 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP262 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX263 {
                display: block;
            }

            #BOX263 > .widget-content {
                background-color: rgba(6, 21, 64, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX263 > .widget-content {
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX263 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #HEADLINE264 {
                display: block;
            }

            #HEADLINE264 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 27px;
            }

            #HEADLINE264 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON265 {
                display: table;
            }

            #BUTTON265 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: #ffffff;
                line-height: 40px;
            }

            #BUTTON265 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON265 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE266 {
                display: block;
            }

            #HEADLINE266 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(41, 182, 246, 1);
                text-transform: uppercase;
                font-weight: 400;
                line-height: 24px;
            }

            #HEADLINE266 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX267 {
                display: block;
            }

            #BOX267 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #BOX267 > .widget-content {
                border-radius: 0px;
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX267 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP282 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP282 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX275 {
                display: block;
            }

            #BOX275 > .widget-content {
                background-color: rgba(6, 21, 64, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX275 > .widget-content {
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX275 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #HEADLINE276 {
                display: block;
            }

            #HEADLINE276 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 27px;
            }

            #HEADLINE276 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE277 {
                display: block;
            }

            #HEADLINE277 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(34, 196, 242, 1);
                text-transform: uppercase;
                font-weight: 400;
                line-height: 24px;
            }

            #HEADLINE277 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON278 {
                display: table;
            }

            #BUTTON278 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: #ffffff;
                line-height: 40px;
            }

            #BUTTON278 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON278 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX279 {
                display: block;
            }

            #BOX279 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #BOX279 > .widget-content {
                border-radius: 0px;
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX279 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP453 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP453 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX118 {
                display: block;
            }

            #BOX118 > .widget-content {
                background-color: rgba(6, 21, 64, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX118 > .widget-content {
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX118 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #HEADLINE119 {
                display: block;
            }

            #HEADLINE119 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 27px;
            }

            #HEADLINE119 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE120 {
                display: block;
            }

            #HEADLINE120 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                text-transform: uppercase;
                font-weight: 400;
                line-height: 24px;
            }

            #HEADLINE120 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON205 {
                display: table;
            }

            #BUTTON205 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: rgba(3, 169, 244, 1);
                line-height: 40px;
            }

            #BUTTON205 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON205 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX218 {
                display: block;
            }

            #BOX218 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #BOX218 > .widget-content {
                border-radius: 0px;
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX218 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON471 {
                display: table;
            }

            #BUTTON471 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: rgba(3, 169, 244, 1);
                line-height: 26px;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 1);
            }

            #BUTTON471 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON471 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP538 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP538 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX229 {
                display: block;
            }

            #BOX229 > .widget-content {
                background-color: rgba(6, 21, 64, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX229 > .widget-content {
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX229 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #HEADLINE230 {
                display: block;
            }

            #HEADLINE230 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 27px;
            }

            #HEADLINE230 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON232 {
                display: table;
            }

            #BUTTON232 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: #ffffff;
                line-height: 40px;
            }

            #BUTTON232 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON232 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE231 {
                display: block;
            }

            #HEADLINE231 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(41, 182, 246, 1);
                text-transform: uppercase;
                font-weight: 400;
                line-height: 24px;
            }

            #HEADLINE231 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX233 {
                display: block;
            }

            #BOX233 > .widget-content {
                background-image: url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #BOX233 > .widget-content {
                border-radius: 0px;
                border-width: 3px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX233 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE213 {
                display: block;
            }

            #HEADLINE213 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 30px;
            }

            #HEADLINE213 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP449 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP449 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINE193 {
                display: block;
            }

            #LINE193>.widget-content .line {
                border-top-width: 1px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(0, 188, 212, 1);
                margin-top: 12px;
            }

            #LINE193 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE193 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE174 {
                display: block;
            }

            #HEADLINE174 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(3, 169, 244, 1);
                font-weight: 700;
                line-height: 24px;
                letter-spacing: 2px;
            }

            #HEADLINE174 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH175 {
                display: block;
            }

            #PARAGRAPH175 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 20px;
                letter-spacing: 1px;
            }

            #PARAGRAPH175 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP450 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP450 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINE195 {
                display: block;
            }

            #LINE195>.widget-content .line {
                border-top-width: 1px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(0, 188, 212, 1);
                margin-top: 12px;
            }

            #LINE195 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE195 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE179 {
                display: block;
            }

            #HEADLINE179 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(3, 169, 244, 1);
                font-weight: 700;
                line-height: 24px;
                letter-spacing: 2px;
            }

            #HEADLINE179 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH180 {
                display: block;
            }

            #PARAGRAPH180 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 20px;
                letter-spacing: 1px;
            }

            #PARAGRAPH180 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP451 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP451 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINE196 {
                display: block;
            }

            #LINE196>.widget-content .line {
                border-top-width: 1px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(0, 188, 212, 1);
                margin-top: 12px;
            }

            #LINE196 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE196 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE184 {
                display: block;
            }

            #HEADLINE184 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(3, 169, 244, 1);
                font-weight: 700;
                line-height: 24px;
                letter-spacing: 2px;
            }

            #HEADLINE184 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH185 {
                display: block;
            }

            #PARAGRAPH185 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 20px;
                letter-spacing: 1px;
            }

            #PARAGRAPH185 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE181 {
                display: block;
            }

            #SHAPE181 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE181> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE181 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #IMAGE201 {
                display: block;
            }

            #IMAGE201 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE201 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE176 {
                display: block;
            }

            #SHAPE176 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE176> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE176 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #IMAGE198 {
                display: block;
            }

            #IMAGE198 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE198 > .widget-content {
                border-width: 0px;
                border-style: solid;
                border-color: rgba(0, 0, 0, 1);
            }

            #IMAGE198 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE186 {
                display: block;
            }

            #SHAPE186 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(3, 169, 244, 1);
            }

            #SHAPE186> .widget-content svg {
                fill: rgba(3, 169, 244, 1);
            }

            #SHAPE186 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #IMAGE197 {
                display: block;
            }

            #IMAGE197 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE197 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX349 {
                display: block;
            }

            #BOX349 > .widget-content {
                background-color: rgba(1, 1, 1, 0.61);
                color: rgba(0, 0, 0, 1);
                box-shadow: 0px 5px 0px rgba(255, 255, 255, 1);
            }

            #BOX349 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE355 {
                display: block;
            }

            #HEADLINE355 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: #10E698;
                font-weight: 400;
                line-height: 34px;
            }

            #HEADLINE355 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE356 {
                display: block;
            }

            #HEADLINE356 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 19px;
            }

            #HEADLINE356 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #FORM350 {
                display: block;
            }

            #FORM350 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #FORM350 .widget-content::-webkit-input-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #FORM350 .widget-content:-moz-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #FORM350 .widget-content::-moz-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #FORM350 .widget-content:-ms-input-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #FORM350 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #ITEM_FORM351 {
                display: block;
            }

            #ITEM_FORM351 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: #000000;
            }

            #ITEM_FORM351 > .widget-content {
                border-radius: 2px;
                border-width: 1px;
                border-style: solid;
                border-color: #eee;
            }

            #ITEM_FORM351 .widget-content::-webkit-input-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM351 .widget-content:-moz-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM351 .widget-content::-moz-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM351 .widget-content:-ms-input-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM351 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #ITEM_FORM352 {
                display: block;
            }

            #ITEM_FORM352 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: #000000;
            }

            #ITEM_FORM352 > .widget-content {
                border-radius: 2px;
                border-width: 1px;
                border-style: solid;
                border-color: #eee;
            }

            #ITEM_FORM352 .widget-content::-webkit-input-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM352 .widget-content:-moz-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM352 .widget-content::-moz-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM352 .widget-content:-ms-input-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM352 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #ITEM_FORM353 {
                display: block;
            }

            #ITEM_FORM353 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: #000000;
            }

            #ITEM_FORM353 > .widget-content {
                border-radius: 2px;
                border-width: 1px;
                border-style: solid;
                border-color: #eee;
            }

            #ITEM_FORM353 .widget-content::-webkit-input-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM353 .widget-content:-moz-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM353 .widget-content::-moz-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM353 .widget-content:-ms-input-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM353 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #ITEM_FORM377 {
                display: block;
            }

            #ITEM_FORM377 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: #000000;
            }

            #ITEM_FORM377 > .widget-content {
                border-radius: 2px;
            }

            #ITEM_FORM377 .widget-content::-webkit-input-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM377 .widget-content:-moz-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM377 .widget-content::-moz-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM377 .widget-content:-ms-input-placeholder {
                color: rgba(117, 117, 117, 1)
            }

            #ITEM_FORM377 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON354 {
                display: table;
            }

            #BUTTON354 > .widget-content {
                background-color: rgba(3, 169, 244, 1);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: #ffffff;
                font-weight: 700;
                line-height: 22px;
            }

            #BUTTON354 > .widget-content {
                border-radius: 5px;
            }

            #BUTTON354 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #IMAGE379 {
                display: block;
            }

            #IMAGE379 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE379 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP437 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP437 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE431 {
                display: block;
            }

            #SHAPE431 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(1, 87, 155, 1);
            }

            #SHAPE431> .widget-content svg {
                fill: rgba(1, 87, 155, 1);
            }

            #SHAPE431 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE434 {
                display: block;
            }

            #SHAPE434 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(1, 87, 155, 1);
            }

            #SHAPE434> .widget-content svg {
                fill: rgba(1, 87, 155, 1);
            }

            #SHAPE434 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE430 {
                display: block;
            }

            #SHAPE430 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(1, 87, 155, 1);
            }

            #SHAPE430> .widget-content svg {
                fill: rgba(1, 87, 155, 1);
            }

            #SHAPE430 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE432 {
                display: block;
            }

            #SHAPE432 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(1, 87, 155, 1);
            }

            #SHAPE432> .widget-content svg {
                fill: rgba(1, 87, 155, 1);
            }

            #SHAPE432 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #COUNTDOWN4355 {
                display: block;
            }

            #COUNTDOWN4355 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Athiti', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 76px;
            }

            #COUNTDOWN4355 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE438 {
                display: block;
            }

            #HEADLINE438 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 36px;
            }

            #HEADLINE438 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP452 {
                display: block;
                background-color: rgba(255, 255, 255, 0);
            }

            #GROUP452 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX439 {
                display: block;
            }

            #BOX439 > .widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX439 > .widget-content {
                border-radius: 100px;
                border-width: 1px;
                border-style: solid;
                border-color: rgba(239, 83, 80, 1);
            }

            #BOX439 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX440 {
                display: block;
            }

            #BOX440 > .widget-content {
                background-color: rgba(239, 83, 80, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX440 > .widget-content {
                border-bottom-left-radius: 50px;
                border-top-left-radius: 50px;
            }

            #BOX440 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE441 {
                display: block;
            }

            #HEADLINE441 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                text-decoration: line-through;
                line-height: 40px;
            }

            #HEADLINE441 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE444 {
                display: block;
            }

            #HEADLINE444 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 41px;
            }

            #HEADLINE444 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE499 {
                display: block;
            }

            #HEADLINE499 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 34px;
            }

            #HEADLINE499 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINE500 {
                display: block;
            }

            #LINE500>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE500 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE500 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINE501 {
                display: block;
            }

            #LINE501>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE501 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE501 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE636 {
                display: block;
            }

            #HEADLINE636 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 26px;
            }

            #HEADLINE636 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE637 {
                display: block;
            }

            #HEADLINE637 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 30px;
            }

            #HEADLINE637 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #IMAGE639 {
                display: block;
            }

            #IMAGE639 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE639 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH640 {
                display: block;
            }

            #PARAGRAPH640 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 19px;
            }

            #PARAGRAPH640 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #FORM660 {
                display: block;
            }

            #FORM660 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #FORM660 .widget-content::-webkit-input-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #FORM660 .widget-content:-moz-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #FORM660 .widget-content::-moz-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #FORM660 .widget-content:-ms-input-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #FORM660 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #ITEM_FORM661 {
                display: block;
            }

            #ITEM_FORM661 > .widget-content {
                background-color: rgba(255, 255, 255, 0.32);
                color: rgba(0, 0, 0, 1);
            }

            #ITEM_FORM661 > .widget-content {
                border-width: 1px;
                border-style: solid;
                border-color: rgba(204, 204, 204, 1);
            }

            #ITEM_FORM661 .widget-content::-webkit-input-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM661 .widget-content:-moz-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM661 .widget-content::-moz-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM661 .widget-content:-ms-input-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM661 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #ITEM_FORM662 {
                display: block;
            }

            #ITEM_FORM662 > .widget-content {
                background-color: rgba(255, 255, 255, 0.32);
                color: rgba(0, 0, 0, 1);
            }

            #ITEM_FORM662 > .widget-content {
                border-width: 1px;
                border-style: solid;
                border-color: rgba(204, 204, 204, 1);
            }

            #ITEM_FORM662 .widget-content::-webkit-input-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM662 .widget-content:-moz-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM662 .widget-content::-moz-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM662 .widget-content:-ms-input-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM662 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #ITEM_FORM663 {
                display: block;
            }

            #ITEM_FORM663 > .widget-content {
                background-color: rgba(255, 255, 255, 0.32);
                color: rgba(0, 0, 0, 1);
            }

            #ITEM_FORM663 > .widget-content {
                border-width: 1px;
                border-style: solid;
                border-color: rgba(204, 204, 204, 1);
            }

            #ITEM_FORM663 .widget-content::-webkit-input-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM663 .widget-content:-moz-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM663 .widget-content::-moz-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM663 .widget-content:-ms-input-placeholder {
                color: rgba(255, 255, 255, 1)
            }

            #ITEM_FORM663 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BUTTON664 {
                display: table;
            }

            #BUTTON664 > .widget-content {
                background-color: rgba(3, 169, 244, 1);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: #ffffff;
                font-weight: 400;
                line-height: 40px;
                box-shadow: 0px 2px 0px rgba(255, 255, 255, 1);
            }

            #BUTTON664 > .widget-content {
                border-radius: 0px;
            }

            #BUTTON664 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #SHAPE668 {
                display: block;
            }

            #SHAPE668 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE668> .widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #SHAPE668 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX657 {
                display: block;
            }

            #BOX657 > .widget-content {
                background-color: rgba(3, 169, 244, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX657 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #SHAPE659 {
                display: block;
            }

            #SHAPE659 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE659> .widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #SHAPE659 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE658 {
                display: block;
            }

            #HEADLINE658 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 29px;
            }

            #HEADLINE658 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE665 {
                display: block;
            }

            #HEADLINE665 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 30px;
            }

            #HEADLINE665 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE669 {
                display: block;
            }

            #SHAPE669 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE669> .widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #SHAPE669 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #SHAPE671 {
                display: block;
            }

            #SHAPE671 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE671> .widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #SHAPE671 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE672 {
                display: block;
            }

            #HEADLINE672 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                line-height: 30px;
            }

            #HEADLINE672 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX369 {
                display: block;
            }

            #BOX369 > .widget-content {
                background-color: rgba(255, 250, 210, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX369 > .widget-content {
                border-radius: 20px;
            }

            #BOX369 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #IMAGE370 {
                display: block;
            }

            #IMAGE370 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE370 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX371 {
                display: block;
            }

            #BOX371 > .widget-content {
                background-image: url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg");
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
                background-color: rgba(19, 207, 168, 1);
                color: rgba(0, 0, 0, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #BOX371 > .widget-content {
                border-bottom-right-radius: 20px;
                border-bottom-left-radius: 0px;
                border-top-left-radius: 0px;
                border-top-right-radius: 20px;
            }

            #BOX371 > .ladi-widget-overlay {
                background-color: rgba(9, 181, 145, 0.73);
            }

            #BOX372 {
                display: block;
            }

            #BOX372 > .widget-content {
                background-color: rgba(72, 227, 195, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX372 > .widget-content {
                border-radius: 50px;
                border-width: 2px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX372 > .ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0);
            }

            #SHAPE373 {
                display: block;
            }

            #SHAPE373 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE373> .widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #SHAPE373 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #HEADLINE374 {
                display: block;
            }

            #HEADLINE374 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 36px;
            }

            #HEADLINE374 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #LINE376 {
                display: block;
            }

            #LINE376>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE376 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE376 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #PARAGRAPH375 {
                display: block;
            }

            #PARAGRAPH375 > .widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 22px;
            }

            #PARAGRAPH375 > .ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            @media(max-width: 767px) {
                body {
                    position: relative;
                }
                #SECTION9 {
                    width: 320px;
                    height: 308.00852394104004px;
                }
                #SECTION9 .container {}
                #SECTION9 {
                    background-image: none;
                }
                #SECTION2 {
                    width: 100%;
                    height: 283px;
                }
                #SECTION2 .container {}
                #SECTION2 {
                    background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg");
                    background-image: -o-linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg");
                    background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg");
                    background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg");
                    background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/bgr1-1506079321015.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top left;
                    background-repeat: no-repeat;
                }
                #SECTION507 {
                    width: 100%;
                    height: 300px;
                }
                #SECTION507 .container {}
                #SECTION507 {
                    background-image: linear-gradient(rgba(0, 0, 0, 0.57), rgba(0, 0, 0, 0.57)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png");
                    background-image: -o-linear-gradient(rgba(0, 0, 0, 0.57), rgba(0, 0, 0, 0.57)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png");
                    background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.57), rgba(0, 0, 0, 0.57)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png");
                    background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.57), rgba(0, 0, 0, 0.57)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png");
                    background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.57), rgba(0, 0, 0, 0.57)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/1765825-0-background-75-1506076970520.png");
                    background-position: top center;
                    background-repeat: repeat;
                }
                #SECTION502 {
                    width: 100%;
                    height: 353.984375px;
                }
                #SECTION502 .container {}
                #SECTION502 {
                    background-image: linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.49)), url("https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg");
                    background-image: -o-linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.49)), url("https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg");
                    background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.49)), url("https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg");
                    background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.49)), url("https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg");
                    background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.49), rgba(0, 0, 0, 0.49)), url("https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/sl13-3-1200x800.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top left;
                    background-repeat: no-repeat;
                }
                #SECTION527 {
                    width: 100%;
                    height: 385px;
                }
                #SECTION527 .container {}
                #SECTION527 {
                    background-image: url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/untitled-3-1506079046658.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top left;
                    background-repeat: no-repeat;
                }
                #SECTION472 {
                    width: 100%;
                    height: 644.1818189620972px;
                }
                #SECTION472 .container {}
                #SECTION472 {
                    background-image: none;
                }
                #SECTION594 {
                    width: 100%;
                    height: 1298.625px;
                }
                #SECTION594 .container {}
                #SECTION594 {
                    background-image: none;
                }
                #SECTION42 {
                    width: 100%;
                    height: 750px;
                }
                #SECTION42 .container {}
                #SECTION42 {
                    background-image: none;
                }
                #SECTION547 {
                    width: 100%;
                    height: 922.9261360168457px;
                }
                #SECTION547 .container {}
                #SECTION547 {
                    background-image: none;
                }
                #POPUP212 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP212 .container {
                    width: 100%;
                    height: 407px;
                    top: calc(100%-407px);
                }
                #POPUP212 {
                    background-image: none;
                }
                #SECTION94 {
                    width: 100%;
                    height: 1065px;
                }
                #SECTION94 .container {}
                #SECTION94 {
                    background-image: linear-gradient(rgba(242, 242, 242, 0.81), rgba(242, 242, 242, 0.81)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png");
                    background-image: -o-linear-gradient(rgba(242, 242, 242, 0.81), rgba(242, 242, 242, 0.81)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png");
                    background-image: -ms-linear-gradient(rgba(242, 242, 242, 0.81), rgba(242, 242, 242, 0.81)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png");
                    background-image: -moz-linear-gradient(rgba(242, 242, 242, 0.81), rgba(242, 242, 242, 0.81)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png");
                    background-image: -webkit-linear-gradient(rgba(242, 242, 242, 0.81), rgba(242, 242, 242, 0.81)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/jeshoots-com-219386-1503389262106.png");
                    background-size: cover;
                    background-attachment: fixed;
                    background-position: center top;
                    background-repeat: no-repeat;
                }
                #SECTION171 {
                    width: 320px;
                    height: 784.0625px;
                }
                #SECTION171 .container {}
                #SECTION171 {
                    background-image: none;
                }
                #SECTION341 {
                    width: 100%;
                    height: 1696.875px;
                }
                #SECTION341 .container {}
                #SECTION341 {
                    background-image: linear-gradient(rgba(6, 13, 46, 0.4), rgba(6, 13, 46, 0.4)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png");
                    background-image: -o-linear-gradient(rgba(6, 13, 46, 0.4), rgba(6, 13, 46, 0.4)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png");
                    background-image: -ms-linear-gradient(rgba(6, 13, 46, 0.4), rgba(6, 13, 46, 0.4)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png");
                    background-image: -moz-linear-gradient(rgba(6, 13, 46, 0.4), rgba(6, 13, 46, 0.4)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png");
                    background-image: -webkit-linear-gradient(rgba(6, 13, 46, 0.4), rgba(6, 13, 46, 0.4)), url("https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/stefan-stefancik-257625-1503383536790.png");
                    background-size: cover;
                    background-attachment: fixed;
                    background-position: center top;
                    background-repeat: no-repeat;
                }
                #POPUP656 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP656 .container {
                    width: 375px;
                    height: 416.109375px;
                    top: calc(100%-416.109375px);
                }
                #POPUP656 {
                    background-image: linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png");
                    background-image: -o-linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png");
                    background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png");
                    background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png");
                    background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://static.ladipage.net/m/59c0798c55a6f2f159d40cd8/1765773-0-background-25-1506072988867.png");
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top left;
                    background-repeat: no-repeat;
                }
                #POPUP368 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP368 .container {
                    width: 375px;
                    height: 527px;
                    top: calc(100%-527px);
                }
                #POPUP368 {
                    background-image: none;
                }
                #IMAGE187 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/logo-lakita-w-1506052010771.png);
                }
                #IMAGE187 {
                    top: 12px;
                    left: 13.5px;
                    width: 84.4375px;
                    height: 25px;
                }
                #HEADLINE513 {
                    top: 47px;
                    left: 97.5px;
                    padding: 0px;
                    width: 180px;
                    height: 17.984375px;
                }
                #HEADLINE513 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #HEADLINE514 {
                    top: 75px;
                    left: 108.5px;
                    padding: 0px;
                    width: 157.984375px;
                    height: 17.984375px;
                }
                #HEADLINE514 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #HEADLINE515 {
                    top: 103px;
                    left: 87.5px;
                    padding: 0px;
                    width: 200px;
                    height: 17.984375px;
                }
                #HEADLINE515 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #LINEVERTICAL516 {
                    top: 131px;
                    left: 175px;
                    width: 25px;
                    height: 16.984375px;
                }
                #LINEVERTICAL517 {
                    top: 158px;
                    left: 175px;
                    width: 25px;
                    height: 17.984375px;
                }
                #LINEVERTICAL518 {
                    top: 186px;
                    left: 175px;
                    width: 25px;
                    height: 17.984375px;
                }
                #HEADLINE519 {
                    top: 214px;
                    left: 120.5px;
                    padding: 0px;
                    width: 133.984375px;
                    height: 17.984375px;
                }
                #HEADLINE519 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #LINEVERTICAL520 {
                    top: 242px;
                    left: 175px;
                    width: 25px;
                    height: 17.984375px;
                }
                #HEADLINE524 {
                    top: 270px;
                    left: 87.5px;
                    padding: 0px;
                    width: 200px;
                    height: 17.984375px;
                }
                #HEADLINE524 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #PARAGRAPH4 {
                    top: 196px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 26.984375px;
                }
                #PARAGRAPH4 > .widget-content {
                    font-size: 18px;
                    text-align: center;
                }
                #HEADLINE7 {
                    top: 78px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 107.984375px;
                }
                #HEADLINE7 > .widget-content {
                    font-size: 21px;
                    text-align: center;
                }
                #HEADLINE5 {
                    top: 20px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 47.984375px;
                }
                #HEADLINE5 > .widget-content {
                    font-size: 28px;
                    text-align: center;
                    line-height: 48px;
                }
                #BUTTON454 {
                    top: 233px;
                    left: 107.5px;
                    padding: 0px;
                    width: 160px;
                    height: 40px;
                }
                #BUTTON454 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE509 {
                    top: 20px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 35.984375px;
                }
                #HEADLINE509 > .widget-content {
                    font-size: 21px;
                    text-align: center;
                }
                #HEADLINE510 {
                    top: 66px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 47.984375px;
                }
                #HEADLINE510 > .widget-content {
                    font-size: 28px;
                    text-align: center;
                    line-height: 48px;
                }
                #PARAGRAPH508 {
                    top: 159px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 80.984375px;
                }
                #PARAGRAPH508 > .widget-content {
                    font-size: 18px;
                    text-align: center;
                }
                #LINE526 {
                    top: 124px;
                    left: 10px;
                    width: 355px;
                    height: 25px;
                }
                #BUTTON511 {
                    top: 250px;
                    left: 107.5px;
                    padding: 0px;
                    width: 160px;
                    height: 40px;
                }
                #BUTTON511 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE504 {
                    top: 272px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 71.984375px;
                }
                #HEADLINE504 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #HEADLINE505 {
                    top: 166px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 95.984375px;
                }
                #HEADLINE505 > .widget-content {
                    font-size: 60px;
                    text-align: center;
                    line-height: 48px;
                }
                #BUTTON506 {
                    top: 218px;
                    left: 107.5px;
                    padding: 0px;
                    width: 160px;
                    height: 40px;
                }
                #BUTTON506 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE525 {
                    top: 20px;
                    left: 62.5px;
                    padding: 0px;
                    width: 250px;
                    height: 126px;
                }
                #HEADLINE525 > .widget-content {
                    font-size: 120px;
                    text-align: left;
                }
                #HEADLINE528 {
                    top: 232px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 92.984375px;
                }
                #HEADLINE528 > .widget-content {
                    font-size: 25px;
                    text-align: center;
                }
                #HEADLINE529 {
                    top: 135.994px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 94.53125px;
                }
                #HEADLINE529 > .widget-content {
                    font-size: 40px;
                    text-align: center;
                    line-height: 48px;
                }
                #BUTTON530 {
                    top: 335px;
                    left: 107.5px;
                    padding: 0px;
                    width: 160px;
                    height: 40px;
                }
                #BUTTON530 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE531 {
                    top: 20px;
                    left: 62.5px;
                    padding: 0px;
                    width: 249.984375px;
                    height: 105.984375px;
                }
                #HEADLINE531 > .widget-content {
                    font-size: 100px;
                    text-align: left;
                }
                #HEADLINE475 {
                    top: 20px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 33.984375px;
                }
                #HEADLINE475 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #HEADLINE476 {
                    top: 63.9915px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 25.453125px;
                }
                #HEADLINE476 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE477 {
                    top: 192.446px;
                    left: 96.1364px;
                    padding: 0px;
                    width: 182.71875px;
                    height: 15.453125px;
                }
                #HEADLINE477 > .widget-content {
                    font-size: 12px;
                    text-align: left;
                }
                #BOX480 {
                    top: 98px;
                    left: 70.5px;
                    width: 233.984375px;
                    height: 233.984375px;
                }
                #BOX480 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/hqt-1506079574723.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #PARAGRAPH633 {
                    top: 159.901px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 118.171875px;
                }
                #PARAGRAPH633 > .widget-content {
                    font-size: 18px;
                    text-align: justify;
                }
                #LINE634 {
                    top: 157.446px;
                    left: 10px;
                    width: 355px;
                    height: 25px;
                }
                #HEADLINE673 {
                    top: 99.4446px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 48px;
                }
                #HEADLINE673 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #HEADLINE631 {
                    top: 20px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 33.625px;
                }
                #HEADLINE631 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #PARAGRAPH632 {
                    top: 63.625px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 40px;
                }
                #PARAGRAPH632 > .widget-content {
                    font-size: 16px;
                    text-align: center;
                }
                #HEADLINE598 {
                    top: 826.625px;
                    left: 41.5px;
                    padding: 0px;
                    width: 292px;
                    height: 18px;
                }
                #HEADLINE598 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE599 {
                    top: 880.625px;
                    left: 39px;
                    padding: 0px;
                    width: 297px;
                    height: 16px;
                }
                #HEADLINE599 > .widget-content {
                    font-size: 12px;
                    text-align: center;
                }
                #SHAPE600 {
                    top: 725.625px;
                    left: 170px;
                    width: 35px;
                    height: 35px;
                }
                #BOX608 {
                    top: 113.625px;
                    left: 105.5px;
                    width: 164px;
                    height: 164px;
                }
                #BOX608 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/le-thi-nhan-1506082115357.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #HEADLINE611 {
                    top: 854.625px;
                    left: 43.5px;
                    padding: 0px;
                    width: 288px;
                    height: 16px;
                }
                #HEADLINE611 > .widget-content {
                    font-size: 12px;
                    text-align: center;
                }
                #SHAPE612 {
                    top: 635.625px;
                    left: 170px;
                    width: 35px;
                    height: 35px;
                }
                #BOX620 {
                    top: 287.625px;
                    left: 105.5px;
                    width: 164px;
                    height: 164px;
                }
                #BOX620 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nguyenthihang1-1-1506082407991.png");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #PARAGRAPH621 {
                    top: 1202.63px;
                    left: 37px;
                    padding: 0px;
                    width: 301px;
                    height: 36px;
                }
                #PARAGRAPH621 > .widget-content {
                    font-size: 13px;
                    text-align: justify;
                    line-height: 18px;
                }
                #HEADLINE622 {
                    top: 798.625px;
                    left: 40px;
                    padding: 0px;
                    width: 295px;
                    height: 18px;
                }
                #HEADLINE622 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE623 {
                    top: 906.625px;
                    left: 42.5px;
                    padding: 0px;
                    width: 290px;
                    height: 32px;
                }
                #HEADLINE623 > .widget-content {
                    font-size: 12px;
                    text-align: center;
                }
                #SHAPE624 {
                    top: 680.625px;
                    left: 170px;
                    width: 35px;
                    height: 35px;
                }
                #BOX596 {
                    top: 461.625px;
                    left: 105.5px;
                    width: 164px;
                    height: 164px;
                }
                #BOX596 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/vuthikimnga-1503381480457.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #HEADLINE610 {
                    top: 770.625px;
                    left: 45px;
                    padding: 0px;
                    width: 285px;
                    height: 18px;
                }
                #HEADLINE610 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #PARAGRAPH597 {
                    top: 1138.63px;
                    left: 37px;
                    padding: 0px;
                    width: 301px;
                    height: 54px;
                }
                #PARAGRAPH597 > .widget-content {
                    font-size: 13px;
                    text-align: justify;
                    line-height: 18px;
                }
                #PARAGRAPH609 {
                    top: 948.625px;
                    left: 37px;
                    padding: 0px;
                    width: 301px;
                    height: 180px;
                }
                #PARAGRAPH609 > .widget-content {
                    font-size: 13px;
                    text-align: justify;
                    line-height: 18px;
                }
                #BUTTON641 {
                    top: 1248.63px;
                    left: 108px;
                    padding: 0px;
                    width: 159px;
                    height: 40px;
                }
                #BUTTON641 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE43 {
                    top: 20px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 59.984375px;
                }
                #HEADLINE43 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                    line-height: 30px;
                }
                #HEADLINE287 {
                    top: 307px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 29.984375px;
                }
                #HEADLINE287 > .widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #PARAGRAPH285 {
                    top: 444px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 23.984375px;
                }
                #PARAGRAPH285 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #LINE286 {
                    top: 367px;
                    left: 10px;
                    width: 355px;
                    height: 25px;
                }
                #HEADLINE290 {
                    top: 336.984px;
                    left: 87.5px;
                    padding: 0px;
                    width: 200px;
                    height: 26px;
                }
                #HEADLINE290 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE532 {
                    top: 520px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 119.984375px;
                }
                #HEADLINE532 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #HEADLINE533 {
                    top: 692px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 47.984375px;
                }
                #HEADLINE533 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #SHAPE534 {
                    top: 402px;
                    left: 171.5px;
                    width: 31.984375px;
                    height: 31.984375px;
                }
                #SHAPE535 {
                    top: 478px;
                    left: 171.5px;
                    width: 31.984375px;
                    height: 31.984375px;
                }
                #SHAPE536 {
                    top: 650px;
                    left: 171.5px;
                    width: 31.984375px;
                    height: 31.984375px;
                }
                #BOX537 {
                    top: 90px;
                    left: 67px;
                    width: 240.984375px;
                    height: 236.984375px;
                }
                #BOX283 {
                    top: 90px;
                    left: 82px;
                    width: 210.984375px;
                    height: 206.984375px;
                }
                #BOX283 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/nhungpt-1506075225320.png");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #HEADLINE548 {
                    top: 20px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 90px;
                }
                #HEADLINE548 > .widget-content {
                    font-size: 28px;
                    text-align: center;
                    line-height: 30px;
                }
                #LISTOP549 {
                    top: 120px;
                    left: 11.5057px;
                    width: 351.984375px;
                    height: 330px;
                }
                #LISTOP549 > .widget-content {
                    font-size: 18px;
                    text-align: justify;
                }
                #LISTOP549 > ol.widget-content li::before {
                    content: counter(linum, disc);
                    width: 30px;
                    height: 30px;
                    font-size: 15px;
                    color: rgba(51, 51, 51, 1);
                    margin-right: 0px;
                }
                #LISTOP549 > ol.widget-content li {
                    margin-bottom: 10px;
                }
                #LISTOP549 > ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #YOUTUBE550 {
                    top: 486.989px;
                    left: 10px;
                    width: 355px;
                    height: 177.22222222222223px;
                }
                #SHAPE566 {
                    top: 841.961px;
                    left: 178.501px;
                    width: 17.984375px;
                    height: 16.984375px;
                }
                #SHAPE567 {
                    top: 868.95px;
                    left: 178.501px;
                    width: 17.984375px;
                    height: 16.984375px;
                }
                #SHAPE568 {
                    top: 895.939px;
                    left: 178.501px;
                    width: 17.984375px;
                    height: 16.984375px;
                }
                #SHAPE569 {
                    top: 814.972px;
                    left: 178.501px;
                    width: 17.984375px;
                    height: 16.984375px;
                }
                #SHAPE570 {
                    top: 787.983px;
                    left: 178.501px;
                    width: 17.984375px;
                    height: 16.984375px;
                }
                #SHAPE571 {
                    top: 460px;
                    left: 178.501px;
                    width: 17.984375px;
                    height: 16.984375px;
                }
                #PARAGRAPH216 {
                    top: 94.5px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 288px;
                }
                #PARAGRAPH216 > .widget-content {
                    font-size: 13px;
                    text-align: left;
                }
                #IMAGE675 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/59c0798c55a6f2f159d40cd8/popip2-1506090959037.png);
                }
                #IMAGE675 {
                    top: -223.484px;
                    left: 10px;
                    width: 355px;
                    height: 145.609px;
                }
                #HEADLINE95 {
                    top: 20px;
                    left: 13.5px;
                    padding: 0px;
                    width: 347.984375px;
                    height: 33.984375px;
                }
                #HEADLINE95 > .widget-content {
                    font-size: 28px;
                    text-align: center;
                }
                #GROUP248 {
                    top: 221px;
                    left: 10px;
                    width: 355px;
                    height: 191.984375px;
                }
                #BOX249 {
                    top: 20px;
                    left: 0px;
                    width: 355px;
                    height: 167.984375px;
                }
                #HEADLINE250 {
                    top: 20px;
                    left: 35px;
                    padding: 0px;
                    width: 285px;
                    height: 26.984375px;
                }
                #HEADLINE250 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #BUTTON251 {
                    top: 103px;
                    left: 108.5px;
                    padding: 0px;
                    width: 137px;
                    height: 40px;
                }
                #BUTTON251 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE252 {
                    top: 57px;
                    left: 26px;
                    padding: 0px;
                    width: 302.984375px;
                    height: 35.984375px;
                }
                #HEADLINE252 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                    line-height: 18px;
                }
                #BOX253 {
                    display: none!important;
                    top: 515.77px;
                    left: 118px;
                    width: 119px;
                    height: 116px;
                }
                #BOX253 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6f0-1506068842267.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #GROUP254 {
                    top: 423px;
                    left: 10px;
                    width: 355px;
                    height: 191.984375px;
                }
                #BOX243 {
                    top: 20px;
                    left: 0px;
                    width: 355px;
                    height: 167.984375px;
                }
                #HEADLINE244 {
                    top: 20px;
                    left: 35px;
                    padding: 0px;
                    width: 285px;
                    height: 26.984375px;
                }
                #HEADLINE244 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE245 {
                    top: 57px;
                    left: 26px;
                    padding: 0px;
                    width: 302.984375px;
                    height: 35.984375px;
                }
                #HEADLINE245 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                    line-height: 18px;
                }
                #BUTTON246 {
                    top: 103px;
                    left: 108.5px;
                    padding: 0px;
                    width: 137px;
                    height: 40px;
                }
                #BUTTON246 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #BOX247 {
                    display: none!important;
                    top: 515.77px;
                    left: 118px;
                    width: 119px;
                    height: 116px;
                }
                #BOX247 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/om6uv10-1506068855386.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #GROUP262 {
                    top: 625px;
                    left: 10px;
                    width: 355px;
                    height: 191.984375px;
                }
                #BOX263 {
                    top: 20px;
                    left: 0px;
                    width: 355px;
                    height: 167.984375px;
                }
                #HEADLINE264 {
                    top: 20px;
                    left: 35px;
                    padding: 0px;
                    width: 285px;
                    height: 26.984375px;
                }
                #HEADLINE264 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #BUTTON265 {
                    top: 103px;
                    left: 108.5px;
                    padding: 0px;
                    width: 137px;
                    height: 40px;
                }
                #BUTTON265 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE266 {
                    top: 57px;
                    left: 26px;
                    padding: 0px;
                    width: 302.984375px;
                    height: 35.984375px;
                }
                #HEADLINE266 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                    line-height: 18px;
                }
                #BOX267 {
                    display: none!important;
                    top: 515.77px;
                    left: 118px;
                    width: 119px;
                    height: 116px;
                }
                #BOX267 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/onzfb90-1506069041434.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #GROUP282 {
                    top: 827px;
                    left: 10px;
                    width: 355px;
                    height: 191.984375px;
                }
                #BOX275 {
                    top: 20px;
                    left: 0px;
                    width: 355px;
                    height: 167.984375px;
                }
                #HEADLINE276 {
                    top: 20px;
                    left: 35px;
                    padding: 0px;
                    width: 285px;
                    height: 26.984375px;
                }
                #HEADLINE276 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE277 {
                    top: 57px;
                    left: 26px;
                    padding: 0px;
                    width: 302.984375px;
                    height: 35.984375px;
                }
                #HEADLINE277 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                    line-height: 18px;
                }
                #BUTTON278 {
                    top: 103px;
                    left: 108.5px;
                    padding: 0px;
                    width: 137px;
                    height: 40px;
                }
                #BUTTON278 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #BOX279 {
                    display: none!important;
                    top: 515.77px;
                    left: 118px;
                    width: 119px;
                    height: 116px;
                }
                #BOX279 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/olqe6y0-1506068899287.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #GROUP453 {
                    top: 64px;
                    left: 10px;
                    width: 355px;
                    height: 191.984375px;
                }
                #BOX118 {
                    top: 20px;
                    left: 0px;
                    width: 355px;
                    height: 152.984375px;
                }
                #HEADLINE119 {
                    top: 20px;
                    left: 21px;
                    padding: 0px;
                    width: 285px;
                    height: 26.984375px;
                }
                #HEADLINE119 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE120 {
                    top: 56.9844px;
                    left: 26px;
                    padding: 0px;
                    width: 303px;
                    height: 36px;
                }
                #HEADLINE120 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                    line-height: 18px;
                }
                #BUTTON205 {
                    top: 102.984px;
                    left: 108.5px;
                    padding: 0px;
                    width: 138px;
                    height: 40px;
                }
                #BUTTON205 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #BOX218 {
                    display: none!important;
                    top: 483.77px;
                    left: 118px;
                    width: 119px;
                    height: 116px;
                }
                #BOX218 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/163381-ovp8rr-900-1506068809815.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #BUTTON471 {
                    top: 1029px;
                    left: 92px;
                    padding: 0px;
                    width: 190px;
                    height: 26px;
                }
                #BUTTON471 > .widget-content {
                    font-size: 20px;
                    text-align: center;
                }
                #GROUP538 {
                    top: 64px;
                    left: 10px;
                    width: 355px;
                    height: 191.984375px;
                }
                #BOX229 {
                    top: 20px;
                    left: 0px;
                    width: 355px;
                    height: 167.984375px;
                }
                #HEADLINE230 {
                    top: 20px;
                    left: 35px;
                    padding: 0px;
                    width: 285px;
                    height: 26.984375px;
                }
                #HEADLINE230 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #BUTTON232 {
                    top: 103px;
                    left: 108.5px;
                    padding: 0px;
                    width: 137px;
                    height: 40px;
                }
                #BUTTON232 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE231 {
                    top: 57px;
                    left: 26px;
                    padding: 0px;
                    width: 302.984375px;
                    height: 35.984375px;
                }
                #HEADLINE231 > .widget-content {
                    font-size: 18px;
                    text-align: left;
                    line-height: 18px;
                }
                #BOX233 {
                    display: none!important;
                    top: 515.77px;
                    left: 118px;
                    width: 119px;
                    height: 116px;
                }
                #BOX233 > .widget-content {
                    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url("https://static.ladipage.net/59c0798c55a6f2f159d40cd8/ojz2id0-1506068827440.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #HEADLINE213 {
                    top: 26.5px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 30px;
                }
                #HEADLINE213 > .widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #GROUP449 {
                    top: 643.063px;
                    left: 45px;
                    width: 285px;
                    height: 131px;
                }
                #LINE193 {
                    top: 16px;
                    left: 21px;
                    width: 246.984375px;
                    height: 25px;
                }
                #HEADLINE174 {
                    top: 0px;
                    left: 1px;
                    padding: 0px;
                    width: 285px;
                    height: 24px;
                }
                #HEADLINE174 > .widget-content {
                    font-size: 18px;
                    text-align: center;
                    line-height: 18px;
                }
                #PARAGRAPH175 {
                    top: 41px;
                    left: 21px;
                    padding: 0px;
                    width: 247px;
                    height: 80px;
                }
                #PARAGRAPH175 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #GROUP450 {
                    top: 624.047px;
                    left: 45px;
                    width: 285px;
                    height: 111px;
                }
                #LINE195 {
                    top: 16px;
                    left: 18px;
                    width: 249.984375px;
                    height: 25px;
                }
                #HEADLINE179 {
                    top: 0px;
                    left: 1px;
                    padding: 0px;
                    width: 285px;
                    height: 24px;
                }
                #HEADLINE179 > .widget-content {
                    font-size: 18px;
                    text-align: center;
                    line-height: 18px;
                }
                #PARAGRAPH180 {
                    top: 41px;
                    left: 38px;
                    padding: 0px;
                    width: 211px;
                    height: 60px;
                }
                #PARAGRAPH180 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #GROUP451 {
                    top: 596.063px;
                    left: 62px;
                    width: 250.984375px;
                    height: 111px;
                }
                #LINE196 {
                    top: 16px;
                    left: 1px;
                    width: 249.984375px;
                    height: 25px;
                }
                #HEADLINE184 {
                    top: 0px;
                    left: 1px;
                    padding: 0px;
                    width: 250px;
                    height: 24px;
                }
                #HEADLINE184 > .widget-content {
                    font-size: 18px;
                    text-align: center;
                    line-height: 18px;
                }
                #PARAGRAPH185 {
                    top: 41px;
                    left: 14px;
                    padding: 0px;
                    width: 228px;
                    height: 60px;
                }
                #PARAGRAPH185 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #SHAPE181 {
                    top: 211px;
                    left: 162.195px;
                    width: 50.609375px;
                    height: 92px;
                }
                #IMAGE201 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png);
                }
                #IMAGE201 {
                    top: 415px;
                    left: 148px;
                    width: 79px;
                    height: 79px;
                }
                #SHAPE176 {
                    top: 313px;
                    left: 162.195px;
                    width: 50.609375px;
                    height: 92px;
                }
                #IMAGE198 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png);
                }
                #IMAGE198 {
                    top: 504px;
                    left: 147.5px;
                    width: 80px;
                    height: 80px;
                }
                #SHAPE186 {
                    top: 109px;
                    left: 162.195px;
                    width: 50.609375px;
                    height: 92px;
                }
                #IMAGE197 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/tron-1506053396602.png);
                }
                #IMAGE197 {
                    top: 20px;
                    left: 148px;
                    width: 79px;
                    height: 79px;
                }
                #BOX349 {
                    top: 158px;
                    left: 13.5px;
                    width: 347.984375px;
                    height: 473.890625px;
                }
                #HEADLINE355 {
                    top: 97px;
                    left: 9px;
                    padding: 0px;
                    width: 330px;
                    height: 33.984375px;
                }
                #HEADLINE355 > .widget-content {
                    font-size: 26px;
                    text-align: center;
                    line-height: 34px;
                }
                #HEADLINE356 {
                    top: 141px;
                    left: 9px;
                    padding: 0px;
                    width: 330px;
                    height: 47.984375px;
                }
                #HEADLINE356 > .widget-content {
                    font-size: 13px;
                    text-align: center;
                    line-height: 48px;
                }
                #FORM350 {
                    top: 214px;
                    left: 16.6719px;
                    width: 314.640625px;
                    height: 199.890625px;
                }
                #FORM350 > .widget-content {
                    font-size: 13px;
                }
                #ITEM_FORM351 {
                    top: 20px;
                    left: 0px;
                    width: 314.640625px;
                    height: 35.625px;
                }
                #ITEM_FORM351 > .widget-content {
                    font-size: 13px;
                }
                #ITEM_FORM352 {
                    top: 65.6406px;
                    left: 0px;
                    width: 314.640625px;
                    height: 35.625px;
                }
                #ITEM_FORM352 > .widget-content {
                    font-size: 13px;
                }
                #ITEM_FORM353 {
                    top: 111.281px;
                    left: 0px;
                    width: 314.640625px;
                    height: 35.625px;
                }
                #ITEM_FORM353 > .widget-content {
                    font-size: 13px;
                }
                #ITEM_FORM377 {
                    top: 156.922px;
                    left: 0px;
                    width: 314.640625px;
                    height: 32.984375px;
                }
                #BUTTON354 {
                    top: 423.906px;
                    left: 57.5px;
                    padding: 0px;
                    width: 232px;
                    height: 40px;
                }
                #BUTTON354 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #IMAGE379 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/logo-lakita-w-1506052010771.png);
                }
                #IMAGE379 {
                    top: 20px;
                    left: 66.3125px;
                    width: 215.359375px;
                    height: 66.984375px;
                }
                #GROUP437 {
                    top: 908.906px;
                    left: 10px;
                    width: 355px;
                    height: 561.984375px;
                }
                #SHAPE431 {
                    top: 376px;
                    left: 123px;
                    width: 108.984375px;
                    height: 108.984375px;
                }
                #SHAPE434 {
                    top: 257px;
                    left: 123px;
                    width: 108.984375px;
                    height: 108.984375px;
                }
                #SHAPE430 {
                    top: 20px;
                    left: 123.5px;
                    width: 107.984375px;
                    height: 107.984375px;
                }
                #SHAPE432 {
                    top: 138px;
                    left: 123px;
                    width: 108.984375px;
                    height: 108.984375px;
                }
                #COUNTDOWN4355 {
                    top: 495px;
                    left: 0px;
                    width: 355px;
                    height: 56.984375px;
                }
                #COUNTDOWN4355 > .widget-content {
                    font-size: 70px;
                }
                #HEADLINE438 {
                    top: 20px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 107.984375px;
                }
                #HEADLINE438 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #GROUP452 {
                    top: 641.906px;
                    left: 10px;
                    width: 355px;
                    height: 142.984375px;
                }
                #BOX439 {
                    top: 20px;
                    left: 6px;
                    width: 342.984375px;
                    height: 61.984375px;
                }
                #BOX440 {
                    top: 0px;
                    left: 0px;
                    width: 170.984375px;
                    height: 61.984375px;
                }
                #HEADLINE441 {
                    top: 9px;
                    left: 27px;
                    padding: 0px;
                    width: 140px;
                    height: 40px;
                }
                #HEADLINE441 > .widget-content {
                    font-size: 34px;
                    text-align: center;
                }
                #HEADLINE444 {
                    top: 92px;
                    left: 77.5px;
                    padding: 0px;
                    width: 200px;
                    height: 40.984375px;
                }
                #HEADLINE444 > .widget-content {
                    font-size: 35px;
                    text-align: left;
                }
                #HEADLINE499 {
                    top: 864.906px;
                    left: 78.5px;
                    padding: 0px;
                    width: 217.984375px;
                    height: 33.984375px;
                }
                #HEADLINE499 > .widget-content {
                    font-size: 28px;
                    text-align: left;
                }
                #LINE500 {
                    top: 873.906px;
                    left: 154.5px;
                    width: 65.984375px;
                    height: 25px;
                }
                #LINE501 {
                    top: 908.906px;
                    left: 154px;
                    width: 66.984375px;
                    height: 25px;
                }
                #HEADLINE636 {
                    top: 1480.89px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 52px;
                }
                #HEADLINE636 > .widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE637 {
                    top: 794.89px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 60px;
                }
                #HEADLINE637 > .widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #IMAGE639 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m//59c0798c55a6f2f159d40cd8/123-1506087514195.png);
                }
                #IMAGE639 {
                    top: 1542.89px;
                    left: 10px;
                    width: 355px;
                    height: 144px;
                }
                #PARAGRAPH640 {
                    top: 20px;
                    left: 0px;
                    padding: 0px;
                    width: 355px;
                    height: 114px;
                }
                #PARAGRAPH640 > .widget-content {
                    font-size: 13px;
                    text-align: center;
                }
                #FORM660 {
                    top: 124px;
                    left: 37.5px;
                    width: 300px;
                    height: 164.109px;
                }
                #FORM660 > .widget-content {
                    font-size: 14px;
                }
                #ITEM_FORM661 {
                    top: 0px;
                    left: 0px;
                    width: 300px;
                    height: 44.0156px;
                }
                #ITEM_FORM661 > .widget-content {
                    font-size: 14px;
                }
                #ITEM_FORM662 {
                    top: 58.7167px;
                    left: 0px;
                    width: 300px;
                    height: 44.0156px;
                }
                #ITEM_FORM662 > .widget-content {
                    font-size: 14px;
                }
                #ITEM_FORM663 {
                    top: 120.103px;
                    left: 0px;
                    width: 300px;
                    height: 44.0156px;
                }
                #ITEM_FORM663 > .widget-content {
                    font-size: 14px;
                }
                #BUTTON664 {
                    top: 541.5px;
                    left: 100px;
                    padding: 0px;
                    width: 175px;
                    height: 40px;
                }
                #BUTTON664 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #SHAPE668 {
                    top: 181.5px;
                    left: 174.5px;
                    width: 26px;
                    height: 26px;
                }
                #BOX657 {
                    top: 0px;
                    left: 0px;
                    width: 375px;
                    height: 152px;
                }
                #SHAPE659 {
                    top: 91px;
                    left: 162.5px;
                    width: 50px;
                    height: 50px;
                }
                #HEADLINE658 {
                    top: 33px;
                    left: 0px;
                    padding: 0px;
                    width: 375px;
                    height: 29px;
                }
                #HEADLINE658 > .widget-content {
                    font-size: 21px;
                    text-align: center;
                }
                #HEADLINE665 {
                    top: 178.5px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 150px;
                }
                #HEADLINE665 > .widget-content {
                    font-size: 15px;
                    text-align: left;
                }
                #SHAPE669 {
                    top: 239.5px;
                    left: 174px;
                    width: 27px;
                    height: 27px;
                }
                #SHAPE671 {
                    top: 270.5px;
                    left: 174.5px;
                    width: 26px;
                    height: 26px;
                }
                #HEADLINE672 {
                    top: 111.5px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 60px;
                }
                #HEADLINE672 > .widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #BOX369 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 487px;
                }
                #IMAGE370 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/m/57b167c9ca57d39c18a1c57c/phong-2.png);
                }
                #IMAGE370 {
                    top: 297px;
                    left: 78.8281px;
                    width: 197.344px;
                    height: 163px;
                }
                #BOX371 {
                    top: 20px;
                    left: 0px;
                    width: 355px;
                    height: 267px;
                }
                #BOX371 > .widget-content {
                    background-image: linear-gradient(rgba(9, 181, 145, 0.73), rgba(9, 181, 145, 0.73)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg");
                    background-image: -o-linear-gradient(rgba(9, 181, 145, 0.73), rgba(9, 181, 145, 0.73)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg");
                    background-image: -ms-linear-gradient(rgba(9, 181, 145, 0.73), rgba(9, 181, 145, 0.73)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg");
                    background-image: -moz-linear-gradient(rgba(9, 181, 145, 0.73), rgba(9, 181, 145, 0.73)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg");
                    background-image: -webkit-linear-gradient(rgba(9, 181, 145, 0.73), rgba(9, 181, 145, 0.73)), url("https://static.ladipage.net/57b167c9ca57d39c18a1c57c/pexels-photo-123.jpg");
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #BOX372 {
                    top: 20px;
                    left: 146px;
                    width: 63px;
                    height: 63px;
                }
                #SHAPE373 {
                    top: 12px;
                    left: 14px;
                    width: 36px;
                    height: 36px;
                }
                #HEADLINE374 {
                    top: 141px;
                    left: 10.5px;
                    padding: 0px;
                    width: 334px;
                    height: 36px;
                }
                #HEADLINE374 > .widget-content {
                    font-size: 30px;
                    text-align: center;
                    line-height: 30px;
                }
                #LINE376 {
                    top: 133px;
                    left: 145.5px;
                    width: 64px;
                    height: 25px;
                }
                #PARAGRAPH375 {
                    top: 196px;
                    left: 34.5px;
                    padding: 0px;
                    width: 286px;
                    height: 60px;
                }
                #PARAGRAPH375 > .widget-content {
                    font-size: 14px;
                    text-align: center;
                    line-height: 20px;
                }
            }
        </style>
    </head>

    <body>
        <div class="ladi-wraper-page">
            <div id="SECTION9" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE187" class="widget-element widget-snap ladi-drop wow bounceInLeft animated" lp-type="image" lp-lang="IMAGE" lp-display="block" lp-action-link="https://lakita.vn/" lp-action-type="url" lp-target="_blank" href="">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/logo-lakita-w-1506052010771.png"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE513" class="widget-element widget-snap wow bounceInDown animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION472" lp-action-type="page" lp-target="" href="">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);">Ý KIẾN CỦA CHUYÊN GIA</span>&nbsp;</h5> </div>
                    <div id="HEADLINE514" class="widget-element widget-snap wow bounceInDown animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION472" lp-action-type="page" lp-target="" href="">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);" color="">CẢM NHẬN CỦA HỌC VIÊN</span></h5> </div>
                    <div id="HEADLINE515" class="widget-element widget-snap wow bounceInDown animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION42" lp-action-type="page" lp-target="" href="">
                        <h5 class="widget-content" lp-node="h5">GIẢNG VIÊN</h5> </div>
                    <div id="LINEVERTICAL516" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="LINEVERTICAL517" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="LINEVERTICAL518" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="HEADLINE519" class="widget-element widget-snap wow bounceInDown animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION36" lp-action-type="page" lp-target="" href="">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);">TẠI</span> <span style="color: rgb(255, 255, 255);">SAO CHỌN</span> <span style="color: rgb(255, 255, 255);">LAKITA</span></h5> </div>
                    <div id="LINEVERTICAL520" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="HEADLINE524" class="widget-element widget-snap wow bounceInDown animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href="">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);">NỘI DUNG KHÓA HỌ</span><span style="color: rgb(229, 213, 213);">C</span></h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>



            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div id="SECTION2" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                            <div class="container">
                                <div id="PARAGRAPH4" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                    <p class="widget-content" lp-node="p"></p>
                                </div>
                                <div id="HEADLINE7" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">VỚI HƠN&nbsp;<span style="font-weight: bold;"><span style="color: rgb(3, 169, 244);">3000</span> </span>HỌC VIÊN TRÊN TOÀN QUỐC&nbsp;<br><br></h2> </div>
                                <div id="HEADLINE5" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h1 class="widget-content" lp-node="h1">học mọi lúc mọi nơi</h1> </div><a id="BUTTON454" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION341" lp-action-type="page" lp-target="" href=""><span class="widget-content">BẮT ĐẦU NGAY</span> </a></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="SECTION507" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                            <div class="container">
                                <div id="HEADLINE509" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">TRỌN BỘ HƯỚNG DẪN LẬP</h2> </div>
                                <div id="HEADLINE510" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h1 class="widget-content" lp-node="h1">báo cáo tài chính 2017</h1> </div>
                                <div id="PARAGRAPH508" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                    <p class="widget-content" lp-node="p">Khóa học dành cho nhân viên hành chính văn phòng kiêm kế toán trong doanh nghiệp vừa, nhỏ.</p>
                                </div>
                                <div id="LINE526" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                    <div class="widget-content">
                                        <div class="line"></div>
                                    </div>
                                </div><a id="BUTTON511" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href=""><span class="widget-content">TÌM HIỂU NGAY</span> </a></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="item">

                        <div id="SECTION502" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                            <div class="container">
                                <div id="HEADLINE504" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">VỀ CÁC KHÓA HỌC&nbsp;<span style="font-weight: bold;">KẾ TOÁN </span>TẠI LAKITA</h2> </div>
                                <div id="HEADLINE505" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h1 class="widget-content" lp-node="h1">học viên <span style="font-weight: bold;">hài lòng</span>&nbsp;<br></h1> </div><a id="BUTTON506" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                                <div id="HEADLINE525" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2"><span style="font-weight: bold;">93%</span></h2> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="SECTION527" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                            <div class="container">
                                <div id="HEADLINE528" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">VỚI <span style="font-weight: bold; color: rgb(3, 169, 244);">BÁO CÁO TÀI CHÍNH</span> CỦA MÌNH LÀM<br>TẠI DOANH NGHIỆP&nbsp;</h2> </div>
                                <div id="HEADLINE529" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h1 class="widget-content" lp-node="h1">học viên<span style="font-weight: bold;"> <span style="color: rgb(0, 176, 255);">tự tin HƠN</span></span></h1> </div><a id="BUTTON530" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                                <div id="HEADLINE531" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2"><span style="font-weight: bold;">82%</span></h2> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="SECTION527" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                            <div class="container">
                                <div id="HEADLINE528" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">VỚI <span style="font-weight: bold;">BÁO CÁO TÀI CHÍNH</span> CỦA MÌNH LÀM<br>TẠI DOANH NGHIỆP&nbsp;</h2> </div>
                                <div id="HEADLINE529" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h1 class="widget-content" lp-node="h1">học viên<span style="font-weight: bold;"> tự tin HƠN</span></h1> </div><a id="BUTTON530" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                                <div id="HEADLINE531" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2"><span style="font-weight: bold;"><span style="color: rgb(255, 255, 255);">82%</span></span></h2> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>






            <div id="SECTION472" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE475" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2"><span style="color: rgb(3, 169, 244);">Ý KIẾN CỦA CHUYÊN GIA</span></h2> </div>
                    <div id="HEADLINE476" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Tiến sĩ HOÀNG QUANG TRUNG</h6> </div>
                    <div id="HEADLINE477" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6"></h6> </div>
                    <div id="BOX480" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH633" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Tôi đánh giá cao sự khác biệt của khóa học này, bài giảng rất chi tiết và tận tình sẽ giúp người học nắm được và làm được một báo cáo tài chính hoàn thiện và tổng thể</p>
                    </div>
                    <div id="LINE634" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE673" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Giám đốc Công ty DV kế toán Việt Nam - VINAFAS</h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION594" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block" lp-ani="wow pulse animated">
                <div class="container">
                    <div id="HEADLINE631" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2"><span style="color: rgb(3, 169, 244);">CẢM NHẬN HỌC VIÊN</span></h2> </div>
                    <div id="PARAGRAPH632" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="h6">Chúng tôi nỗ lực mỗi ngày để mang đến cho các bạn những khóa học kế toán tốt nhất !</p>
                    </div>
                    <div id="HEADLINE598" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Vũ Thị Kim Nga</h6> </div>
                    <div id="HEADLINE599" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Kế toán&nbsp;</h6> </div>
                    <div id="SHAPE600" class="widget-element widget-snap wow pulse animated" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M256 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5H928q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5T736 448q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5H960q-96 0-189.5-22.5T554 1576q-116-40-138-40H128q-53 0-90.5-37.5T0 1408V768q0-53 37.5-90.5T128 640h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5T712 145t62-108q39-37 90-37 84 0 151 32.5T1117 134t35 186q0 93-48 192h176q104 0 180 76t76 179z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="BOX608" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE611" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Công ty cổ phần đầu tư&nbsp; và xây dựng Lạc Hồng</h6> </div>
                    <div id="SHAPE612" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M256 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5H928q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5T736 448q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5H960q-96 0-189.5-22.5T554 1576q-116-40-138-40H128q-53 0-90.5-37.5T0 1408V768q0-53 37.5-90.5T128 640h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5T712 145t62-108q39-37 90-37 84 0 151 32.5T1117 134t35 186q0 93-48 192h176q104 0 180 76t76 179z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="BOX620" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH621" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Tôi cảm thấy tốt và tôi nhận được những thông tin hữu ích mà mình mong muốn</p>
                    </div>
                    <div id="HEADLINE622" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6"><span style="color: rgb(3, 169, 244);">Nguyễn Thị</span> <span style="color: rgb(3, 169, 244);">Hằng</span></h6> </div>
                    <div id="HEADLINE623" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Chuyên viên kế toán tại Công ty cổ phần thương mại và vận tải Đông Hải</h6> </div>
                    <div id="SHAPE624" class="widget-element widget-snap wow pulse animated" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M256 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5H928q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5T736 448q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5H960q-96 0-189.5-22.5T554 1576q-116-40-138-40H128q-53 0-90.5-37.5T0 1408V768q0-53 37.5-90.5T128 640h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5T712 145t62-108q39-37 90-37 84 0 151 32.5T1117 134t35 186q0 93-48 192h176q104 0 180 76t76 179z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="BOX596" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE610" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Lê Thị Nhàn</h6> </div>
                    <div id="PARAGRAPH597" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Khóa học thật sư bổ ích, qua khóa học này tôi đã học được rất nhiều kinh nghiệm trong lĩnh vực kế toán.</p>
                    </div>
                    <div id="PARAGRAPH609" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Đầu tiên tôi xin gửi lời cảm ơn tới giảng viên Phạm Thị Nhung trong thời gian qua đã quan tâm, nhiệt tình hướng dẫn và giảng dạy cho tôi. Tôi đã tiếp thu được nhiều kiến thức bổ ích phục vụ cho việc làm hiện tại ở doanh nghiệp của mình. Bài giảng rõ ràng, giảng viên thân thiện giảng dạy dễ hiểu , tiếp thu kiến thức nhanh. Hy vọng trung tâm sẽ mở rộng để có nhiều học viên mới ra trường sẽ tiếp cận thực tế nhanh và dễ dàng kiếm việc</p>
                    </div><a id="BUTTON641" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table"><span class="widget-content">ĐĂNG KÝ NGAY</span> </a></div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION42" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE43" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NGƯỜI ĐỒNG HÀNH CÙNG BẠN LÀ AI ?</h3> </div>
                    <div id="HEADLINE287" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">PHẠM THỊ NHUNG</h3> </div>
                    <div id="PARAGRAPH285" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Đạt chứng chỉ kế toán quốc tế CAT.</p>
                    </div>
                    <div id="LINE286" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE290" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(3, 169, 244);" color="">GIẢNG</span> <span style="color: rgb(3, 169, 244);" color="">VIÊN</span></h5> </div>
                    <div id="HEADLINE532" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Kế toán tổng hợp tại chi nhánh công ty TNHH Dịch vụ Thực phẩm và Giải khát Cánh Diều Xanh, thuộc tập đoàn Tập đoàn Liên Thái Bình Dương (Imex Pan Pacific Group).</h5> </div>
                    <div id="HEADLINE533" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">5 năm kinh nghiệm ở vị trí kế toán tổng hợp kiêm phụ trách toàn bộ mảng thuế.</h5> </div>
                    <div id="SHAPE534" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE535" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE536" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="BOX537" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX283" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION547" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE548" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href="">
                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 176, 255);" color="">BẠN BỎ LỠ GÌ KHI KHÔNG THAM GIA KHÓA HỌC NÀY ?</span></h4> </div>
                    <div id="LISTOP549" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">Tăng kỹ năng trong công việc, học tập&nbsp;
                            <div>Cơ hội thăng tiến và phát triển nghề nghiệp kế toán</div>
                            <div>46 video bài giảng hướng dẫn chi tiết với 9h học online</div>
                            <div>Thầy Cô trực tiếp trả lời thắc mắc của&nbsp;<span style="background-color: rgba(255, 255, 255, 0);">học viên&nbsp;</span></div>
                            <div>Được hỗ trợ thường xuyên với đội ngũ trợ giảng chuyên nghiệp&nbsp;</div>
                            <div>Hướng dẫn lập đúng và 08 bước kiểm tra Bảng cân đối phát sinh</div>
                        </ol>
                    </div>
                    <div id="YOUTUBE550" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="1" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/UPkqH3VV7jc?rel=0&amp;showinfo=1" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="SHAPE566" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE567" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE568" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE569" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE570" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE571" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP212" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" lp-ani="wow pulse animated" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH216" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">
                            <br>
                        </p>
                    </div>
                    <div id="IMAGE675" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/59c0798c55a6f2f159d40cd8/popip2-1506090959037.png"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION94" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE95" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"><span style="color: rgb(0, 0, 0);">NỘI DUNG KHÓA HỌC</span></h3> </div>
                    <div id="GROUP248" class="widget-element widget-snap widget-group wow fadeInLeftBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX249" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP248" lp-display="block" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href="">
                                <div class="widget-content">
                                    <div id="HEADLINE250" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 3:</span></h4> </div><a id="BUTTON251" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href=""><span class="widget-content"><span style="color: rgb(3, 169, 244);">CHI TIẾT</span></span> </a>
                                    <div id="HEADLINE252" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">Hướng dẫn lập bảng cân đối kế toán</span></h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX253" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP248" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP254" class="widget-element widget-snap widget-group wow fadeInRightBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX243" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP254" lp-display="block" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href="">
                                <div class="widget-content">
                                    <div id="HEADLINE244" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 4:</span></h4> </div>
                                    <div id="HEADLINE245" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">Hướng dẫn lập báo cáo kết quả               kinh doanh</span></h5> </div><a id="BUTTON246" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href=""><span class="widget-content"><span style="color: rgb(3, 169, 244);">CHI TIẾT</span></span> </a></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX247" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP254" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP262" class="widget-element widget-snap widget-group wow fadeInRightBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX263" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP262" lp-display="block" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href="">
                                <div class="widget-content">
                                    <div id="HEADLINE264" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 6:</span></h4> </div><a id="BUTTON265" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href=""><span class="widget-content"><span style="color: rgb(3, 169, 244);">CHI TIẾT</span></span> </a>
                                    <div id="HEADLINE266" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">Hướng dẫn lập thuyết minh báo cáo tài chính</span></h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX267" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP262" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP282" class="widget-element widget-snap widget-group wow fadeInLeftBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX275" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP282" lp-display="block" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href="">
                                <div class="widget-content">
                                    <div id="HEADLINE276" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 5:</span></h4> </div>
                                    <div id="HEADLINE277" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">Hướng dẫn lập báo cáo lưu chuyển tiền tệ</span></h5> </div><a id="BUTTON278" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href=""><span class="widget-content"><span style="color: rgb(3, 169, 244);">CHI TIẾT</span></span> </a></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX279" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP282" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP453" class="widget-element widget-snap widget-group wow fadeInLeftBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX118" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP453" lp-display="block" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href="">
                                <div class="widget-content">
                                    <div id="HEADLINE119" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 1:</span></h4> </div>
                                    <div id="HEADLINE120" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">08 nhiệm vụ kế toán cần thực hiện tại thời điểm cuối kỳ</span></h5> </div><a id="BUTTON205" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href=""><span class="widget-content">CHI TIẾT</span> </a></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX218" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP453" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div><a id="BUTTON471" class="widget-element widget-snap style-1 ladi-drop wow bounce animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION341" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                    <div id="GROUP538" class="widget-element widget-snap widget-group wow fadeInRightBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX229" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP538" lp-display="block" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href="">
                                <div class="widget-content">
                                    <div id="HEADLINE230" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 2:</span></h4> </div><a id="BUTTON232" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href=""><span class="widget-content"><span style="color: rgb(3, 169, 244);">CHI TIẾT</span></span> </a>
                                    <div id="HEADLINE231" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">Hướng dẫn lập và 09 bước kiểm tra bảng Cân đối phát sinh</span>&nbsp;</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX233" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP538" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE213" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"></h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION171" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP449" class="widget-element widget-snap widget-group wow fadeInUp animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE193" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP449" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="HEADLINE174" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP449" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">CẦM TAY CHỈ VIỆC</h5> </div>
                            <div id="PARAGRAPH175" class="widget-element widget-snap wow fadeInDown animated" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP449" lp-display="block">
                                <p class="widget-content" lp-node="p">Các bài giảng được thiết kế theo dạng cầm tay chỉ việc, học viên có thể thực hành, áp dụng được ngay vào trong công việc</p>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP450" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE195" class="widget-element widget-snap wow fadeInUp animated" lp-type="line" lp-lang="LINE" lp-group="GROUP450" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="HEADLINE179" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP450" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">TIẾT KIỆM THỜI GIAN</h5> </div>
                            <div id="PARAGRAPH180" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP450" lp-display="block">
                                <p class="widget-content" lp-node="p">46 video bài giảng, thao tác với 9h học online. Giải đáp trong 68 giờ</p>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP451" class="widget-element widget-snap widget-group wow fadeInUp animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE196" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP451" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="HEADLINE184" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP451" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">HỌC ONLINE</h5> </div>
                            <div id="PARAGRAPH185" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP451" lp-display="block">
                                <p class="widget-content" lp-node="p">Mọi thời điểm, mô hình học tiên tiến, tương tác liên tục: cùng thầy và hàng trăm học viên</p>
                            </div>
                        </div>
                    </div>
                    <div id="SHAPE181" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(3,169,244,1)">
                            <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22A9,9 0 0,0 21,13A9,9 0 0,0 12,4M12.5,8H11V14L15.75,16.85L16.5,15.62L12.5,13.25V8M7.88,3.39L6.6,1.86L2,5.71L3.29,7.24L7.88,3.39M22,5.72L17.4,1.86L16.11,3.39L20.71,7.25L22,5.72Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="IMAGE201" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/tron-1506053396602.png"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="SHAPE176" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(3,169,244,1)">
                            <path d="M10.5,17.5L7,14L8.41,12.59L10.5,14.67L15.68,9.5L17.09,10.91M10,4H14V6H10M20,6H16V4L14,2H10L8,4V6H4C2.89,6 2,6.89 2,8V19C2,20.11 2.89,21 4,21H20C21.11,21 22,20.11 22,19V8C22,6.89 21.11,6 20,6Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="IMAGE198" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/tron-1506053396602.png"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="SHAPE186" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(3,169,244,1)">
                            <path d="M4.93,4.93C3.12,6.74 2,9.24 2,12C2,14.76 3.12,17.26 4.93,19.07L6.34,17.66C4.89,16.22 4,14.22 4,12C4,9.79 4.89,7.78 6.34,6.34L4.93,4.93M19.07,4.93L17.66,6.34C19.11,7.78 20,9.79 20,12C20,14.22 19.11,16.22 17.66,17.66L19.07,19.07C20.88,17.26 22,14.76 22,12C22,9.24 20.88,6.74 19.07,4.93M7.76,7.76C6.67,8.85 6,10.35 6,12C6,13.65 6.67,15.15 7.76,16.24L9.17,14.83C8.45,14.11 8,13.11 8,12C8,10.89 8.45,9.89 9.17,9.17L7.76,7.76M16.24,7.76L14.83,9.17C15.55,9.89 16,10.89 16,12C16,13.11 15.55,14.11 14.83,14.83L16.24,16.24C17.33,15.15 18,13.65 18,12C18,10.35 17.33,8.85 16.24,7.76M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="IMAGE197" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/tron-1506053396602.png"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION341" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="BOX349" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE355" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3"><br></h3> </div>
                            <div id="HEADLINE356" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <p class="widget-content" lp-node="p"></p>
                            </div>
                            <div id="FORM350" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-id-pop-sub="POPUP368" lp-display="block">
                                <form class="LeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="thank-you.html">
                                    <div id="ITEM_FORM351" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                    </div>
                                    <div id="ITEM_FORM352" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                    </div>
                                    <div id="ITEM_FORM353" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" placeholder="Nhập Số điện thoại" name="phone" onblur="checkphone(this)" onkeydown="removecheckphone()" lp-label="Điện thoại" required="required">
                                    </div>
                                    <div class="wrap-icon-province hidden" style="display:none">
                                        <input id="tinh" type="text" name="tinh" class="LeadPanel_form_company" placeholder="Tỉnh thành" value=""/>
                                    </div>

                                    <div class="wrap-icon-district hidden" style="display:none">
                                        <input id="quan" type="text" name="quan" class="LeadPanel_form_company" placeholder="Quận huyện" value="" />
                                    </div>

                                    <div id="ITEM_FORM377" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Nhập địa chỉ"  name="dia_chi"  lp-label="Địa chỉ" lp-name-id="street" required="required">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <div id="ITEM_FORM377" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block" style="top: 211.5px;">
                                        <button   id="form-submit-2" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt">ĐĂNG KÝ NGAY</button>
                                    </div>
                                </form>
                            </div>

                            <div id="IMAGE379" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block" lp-action-link="https://lakita.vn/" lp-action-type="url" lp-target="_blank" href="">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/logo-lakita-w-1506052010771.png"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="GROUP437" class="widget-element widget-snap widget-group wow bounce animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE431" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(1,87,155,1)">
                                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE434" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(1,87,155,1)">
                                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE430" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(1,87,155,1)">
                                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE432" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(1,87,155,1)">
                                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="COUNTDOWN4355" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN"  lp-endtimetype="timedown" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <div><span>0</span></div>
                                    <div><span class="num-hour">21</span></div>
                                    <div><span class="num-minute">23</span></div>
                                    <div><span class="num-second">0</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE438" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2"><span style="color: rgb(255, 255, 255);">ĐĂNG KÍ</span> <span style="color: rgb(255, 255, 255);">
                                MUA NGAY NHẬN NGAY ƯU ĐÃI LÊN ĐẾN&nbsp;</span><span style="color: rgb(239, 83, 80);">  <?php echo round((1 - $rs->price / $rs->price_root) * 100, 2) ?>%</span></h2> </div>
                    <div id="GROUP452" class="widget-element widget-snap widget-group wow bounceInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX439" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP452" lp-display="block">
                                <div class="widget-content">
                                    <div id="BOX440" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="HEADLINE441" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3"><span style="color: rgb(255, 255, 255);"><?php echo number_format($rs->price_root, 0, ",", "."); ?></span></h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE444" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP452" lp-display="block">
                                <h2 class="widget-content" lp-node="h2"><span style="color: rgb(239, 83, 80);"><?php echo number_format($rs->price, 0, ",", "."); ?>đ</span></h2> </div>
                        </div>
                    </div>
                    <div id="HEADLINE499" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);">Thời gian còn lại</span></h5> </div>
                    <div id="LINE500" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="LINE501" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE636" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2"><span style="color: rgb(255, 255, 255);">MIỄN PHÍ GIAO HÀNG</span> <span style="color: rgb(255, 255, 255);">TRÊN TOÀN QUỐC</span></h2> </div>
                    <div id="HEADLINE637" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"><span style="color: rgb(255, 255, 255);">ÁP DỤNG ĐẾN HẾT NGÀY <span class="fullyear"> 24/04/2017</span></span>&nbsp;</h3> </div>
                    <div id="IMAGE639" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/123-1506087514195.png"></div>
                            <div id="PARAGRAPH640" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p"><span style="color: rgb(255, 255, 255);">Địa chỉ: Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng - Hà Nội Hotline: 1900 636 195 - 04 7306 2468&nbsp;</span>
                                    <br><span style="color: rgb(255, 255, 255);">Hỗ trợ: cskh@lakita.vn</span>
                                    <br><span style="color: rgb(255, 255, 255);">© Copyright 2016 Lakita.vn, All rights reserved</span>
                                    <br><span style="color: rgb(255, 255, 255);">® Lakita.vn giữ bản quyền nội dung trên website này.</span></p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP656" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-show-popup-page="1" lp-delay-show-popup-page="1" lp-display="block" lp-ani="wow bounce animated" style="display: none;">
                <div class="container">
                    <div id="FORM660" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                        <form class="LeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="thank-you.html">
                            <div id="ITEM_FORM661" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                            </div>
                            <div id="ITEM_FORM662" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                            </div>
                            <div id="ITEM_FORM663" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="tel" placeholder="Nhập Số điện thoại" name="phone" onblur="checkphone(this)" onkeydown="removecheckphone()" lp-label="Điện thoại" lp-name-id="phone" required="required">
                            </div>
                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                            <div id="ITEM_FORM665" class="widget-element widget-snap widget-dragg widget-item-child" 
                                 lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block" style="top: 171.103px; left: 0px; width: 469px;">
                                <button   id="form-submit-2" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt">HOÀN TẤT ĐĂNG KÝ</button>
                            </div>
                        </form>
                    </div>
                    <div id="SHAPE668" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="BOX657" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE659" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(255,255,255,1)">
                                    <path d="M384 1184v64q0 13-9.5 22.5T352 1280h-64q-13 0-22.5-9.5T256 1248v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zm0-256v64q0 13-9.5 22.5T352 1024h-64q-13 0-22.5-9.5T256 992v-64q0-13 9.5-22.5T288 896h64q13 0 22.5 9.5T384 928zm0-256v64q0 13-9.5 22.5T352 768h-64q-13 0-22.5-9.5T256 736v-64q0-13 9.5-22.5T288 640h64q13 0 22.5 9.5T384 672zm1152 512v64q0 13-9.5 22.5t-22.5 9.5H544q-13 0-22.5-9.5T512 1248v-64q0-13 9.5-22.5t22.5-9.5h960q13 0 22.5 9.5t9.5 22.5zm0-256v64q0 13-9.5 22.5t-22.5 9.5H544q-13 0-22.5-9.5T512 992v-64q0-13 9.5-22.5T544 896h960q13 0 22.5 9.5t9.5 22.5zm0-256v64q0 13-9.5 22.5T1504 768H544q-13 0-22.5-9.5T512 736v-64q0-13 9.5-22.5T544 640h960q13 0 22.5 9.5t9.5 22.5zm128 704V544q0-13-9.5-22.5T1632 512H160q-13 0-22.5 9.5T128 544v832q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm128-1088v1088q0 66-47 113t-113 47H160q-66 0-113-47T0 1376V288q0-66 47-113t113-47h1472q66 0 113 47t47 113z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE658" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">ĐĂNG KÝ ĐỂ ĐƯỢC NHẬN ƯU ĐÃI LÊN ĐẾN <?php echo round((1 - $rs->price / $rs->price_root) * 100, 2) ?>%</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE665" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);">Mô hình học trực tuyến tiên tiến tâp trung vào thực hành,</span><br><span style="color: rgb(255, 255, 255);">&nbsp;thực hành và thực hành</span><br><span style="color: rgb(255, 255, 255);">81% học viên khen bài giảng hay và chi tiết</span><br><span style="color: rgb(255, 255, 255);">86% được hỗ trợ giải quyết vấn đề tại doanh nghiệp&nbsp;</span><span style="color: rgb(255, 255, 255);">trong</span><br><span style="color: rgb(255, 255, 255);">&nbsp;quá trình học trực tuyến</span></h5> </div>
                    <div id="SHAPE669" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE671" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="HEADLINE672" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"><span style="color: rgb(255, 255, 255);">Khóa học được thiết kế dành cho kế toán đi làm và máy tính có kết nối internet</span></h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP368" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX369" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="IMAGE370" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/phong-2.png"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX371" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                <div class="widget-content">
                                    <div id="BOX372" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                        <div class="widget-content">
                                            <div id="SHAPE373" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                                <div class="widget-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(255,255,255,1)">
                                                    <path d="M28.28 6.28L11 23.563l-7.28-7.28-1.44 1.437 8 8 .72.686.72-.687 18-18-1.44-1.44z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="HEADLINE374" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">Đăng ký thành công!</h2> </div>
                                    <div id="LINE376" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                        <div class="widget-content">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="PARAGRAPH375" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Sau khi đăng ký mua khóa học, bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin và nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn. Bạn chỉ phải trả tiền khi nhận được khóa học.</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
                    </div>
                </div>
            </div>
            <div style="position: fixed; bottom: 0; display: inline-block !important; z-index: 100000;">
                <a href="#register_area" title="Đăng ký ngay!" style="display: inline-block !important;float: right; position: fixed;  right: 0px;  bottom: 10px;">
                    <img src="https://lakita.vn/styles/images/email/rgt-now.png" alt="Đăng ký ngay!" id="img-rgt" style="float: right;">
                </a>
                <a href="tel:1900636195" title="Đăng ký ngay!" style="display: inline-block !important;">
                    <img src="https://lakita.vn/styles/images/email/contact.png" alt="Đăng ký ngay!" 
                         id="img-contact" style="float: left; transition: all 0.3s ease-in-out; margin-left:-200px;">
                </a>
            </div>
            <script type="text/javascript" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <link rel="stylesheet" id="animate" href="https://static.ladipage.net/source/animate.min.css">
            <script type="text/javascript" src="https://static.ladipage.net/source/landingpage.1-0-1.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>public/my.js" type="text/javascript"></script>
            <script type="text/javascript">
                                    $(document).ready(function () {
                                        var left = $('#img-contact').css('margin-left');

                                        $('#img-contact').hover(function () {
                                            $(this).css('margin-left', '0');
                                        }, function () {
                                            $(this).css('margin-left', left);
                                        });
                                    });
            </script>
        </div>
    </body>

</html>