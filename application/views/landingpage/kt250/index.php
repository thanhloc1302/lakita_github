<?php
$code_ladingpage = str_replace('.html', '', str_replace(base_url(), '', current_url()));
$config = array(
    'server' => 'https://crm2.lakita.vn/',
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
        <title class="title-site" lp-id="5a780ca88abdc8fa63674048">KHÓA HỌC THỰC HÀNH KẾ TOÁN TỔNG HỢP TRÊN PHẦN MỀM EXCEL</title>
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta name="description" content="Hệ thống đào tạo trực tuyến lakita – Cùng bạn vươn xa Học Online qua Video bài giảng - Học Online thỏa thích mọi lúc, mọi nơi - Học trên mọi thiết bị - Học với giảng viên, chuyên gia hàng đầu trong lĩnh vực - Hóa đơn chứng từ - Làm chủ hóa đơn chứng từ" />
        <meta name="keywords" content="undefined">
        <meta name="viewport" id="lp-viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://lakita.vn/data/source/setting/favicon.png" />
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
            }
            ;
            ladiViewport();
        </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" />
        <meta property="og:url" content="https://lakita.vn/combo-qua-khung-tet-nguyen-dan.html" />
        <meta property="og:title" content="KHÓA HỌC THỰC HÀNH KẾ TOÁN TỔNG HỢP TRÊN PHẦN MỀM EXCEL" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/5f09062860a4b078b885d98539897b3e-1513246709.jpg" />
        <meta property="og:description" content="THỰC HÀNH KẾ TOÁN TỔNG HỢP TRÊN PHẦN MỀM EXCEL" />
        <meta name="format-detection" content="telephone=no" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>public/my.js?ver=<?php echo _VER_CACHED_ ?>" type="text/javascript"></script>

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
                #SECTION2 {
                    width: 100%;
                    height: 863px;
                }
                #SECTION2 .container {}
                #SECTION2 {}
                #POPUP370 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP370 .container {
                    width: 563px;
                    height: 358px;
                    top: calc(100%-358px);
                }
                #POPUP370 {}
                #POPUP366 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP366 .container {
                    width: 563px;
                    height: 358px;
                    top: calc(100%-358px);
                }
                #POPUP366 {}
                #POPUP362 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP362 .container {
                    width: 563px;
                    height: 358px;
                    top: calc(100%-358px);
                }
                #POPUP362 {}
                #POPUP358 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP358 .container {
                    width: 563px;
                    height: 358px;
                    top: calc(100%-358px);
                }
                #POPUP358 {}
                #POPUP354 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP354 .container {
                    width: 562.98828125px;
                    height: 338.984375px;
                    top: calc(100%-338.984375px);
                }
                #POPUP354 {}
                #POPUP346 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP346 .container {
                    width: 563px;
                    height: 358px;
                    top: calc(100%-358px);
                }
                #POPUP346 {}
                #POPUP342 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP342 .container {
                    width: 563px;
                    height: 358px;
                    top: calc(100%-358px);
                }
                #POPUP342 {}
                #POPUP338 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP338 .container {
                    width: 563px;
                    height: 358px;
                    top: calc(100%-358px);
                }
                #POPUP338 {}
                #POPUP334 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP334 .container {
                    width: 563px;
                    height: 358px;
                    top: calc(100%-358px);
                }
                #POPUP334 {}
                #POPUP330 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP330 .container {
                    width: 505.99609375px;
                    height: 647.98828125px;
                    top: calc(100%-647.98828125px);
                }
                #POPUP330 {}
                #POPUP326 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP326 .container {
                    width: 520.99609375px;
                    height: 499.98046875px;
                    top: calc(100%-499.98046875px);
                }
                #POPUP326 {}
                #POPUP322 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP322 .container {
                    width: 570.9765625px;
                    height: 720.9765625px;
                    top: calc(100%-720.9765625px);
                }
                #POPUP322 {}
                #POPUP318 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP318 .container {
                    width: 563px;
                    height: 358px;
                    top: calc(100%-358px);
                }
                #POPUP318 {}
                #SECTION3 {
                    width: 100%;
                    height: 678.5px;
                }
                #SECTION3 .container {}
                #SECTION3 {}
                #SECTION11 {
                    width: 100%;
                    height: 499px;
                }
                #SECTION11 .container {}
                #SECTION11 {}
                #SECTION33 {
                    width: 100%;
                    height: 563px;
                }
                #SECTION33 .container {}
                #SECTION33 {}
                #SECTION82 {
                    width: 100%;
                    height: 900.984375px;
                }
                #SECTION82 .container {}
                #SECTION82 {}
                #SECTION63 {
                    width: 100%;
                    height: 489.98046875px;
                }
                #SECTION63 .container {}
                #SECTION63 {}
                #SECTION423 {
                    width: 100%;
                    height: 600.4296875px;
                }
                #SECTION423 .container {}
                #SECTION423 {}
                #POPUP305 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP305 .container {
                    width: 503.984375px;
                    height: 328.984375px;
                    top: calc(100%-328.984375px);
                }
                #POPUP305 {}
                #SECTION127 {
                    width: 100%;
                    height: 617px;
                }
                #SECTION127 .container {}
                #SECTION127 {}
                #SECTION174 {
                    width: 100%;
                    height: 700px;
                }
                #SECTION174 .container {}
                #SECTION174 {}
                #IMAGE225 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/logo-1517828858.png);
                }
                #IMAGE225 {
                    top: 34px;
                    left: 0px;
                    width: 167.71875px;
                    height: 44px;
                }
                #BOX226 {
                    top: 256px;
                    left: 0px;
                    width: 960px;
                    height: 470px;
                }
                #LISTOP228 {
                    top: 101px;
                    left: 68px;
                    width: 793px;
                    height: 215px;
                }
                #LISTOP228>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #LISTOP228>ol.widget-content li::before {
                    content: counter(linum, decimal);
                    width: 25px;
                    height: 25px;
                    font-size: 12.5px;
                    margin-right: 13px;
                    content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.4-.188-2.794-.688-4.094L26.688 13.5c.2.8.313 1.6.313 2.5 0 6.1-4.9 11-11 11S5 22.1 5 16 9.9 5 16 5c3 0 5.694 1.194 7.594 3.094L25 6.688C22.7 4.388 19.5 3 16 3zm11.28 4.28L16 18.563l-4.28-4.28-1.44 1.437 5 5 .72.686.72-.687 12-12-1.44-1.44z"/> </svg>');
                    background-repeat: no-repeat;
                    position: relative;
                    top: 0px;
                    left: 0;
                }
                #LISTOP228>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP228>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #HEADLINE232 {
                    top: 37.5px;
                    left: 301px;
                    padding: 0px;
                    width: 391px;
                    height: 35px;
                }
                #HEADLINE232>.widget-content {
                    font-size: 30px;
                    text-align: left;
                }
                #BUTTON229 {
                    top: 399px;
                    left: 375px;
                    padding: 0px;
                    width: 227px;
                    height: 40px;
                }
                #BUTTON229>.widget-content {
                    font-size: 16px;
                    text-align: center;
                }
                #HEADLINE445 {
                    top: 343px;
                    left: 266px;
                    padding: 0px;
                    width: 468px;
                    height: 48px;
                }
                #HEADLINE445>.widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #HEADLINE446 {
                    top: 367px;
                    left: 619px;
                    padding: 0px;
                    width: 200px;
                    height: 24px;
                }
                #HEADLINE446>.widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #HEADLINE227 {
                    top: 116px;
                    left: 105px;
                    padding: 0px;
                    width: 715px;
                    height: 90px;
                }
                #HEADLINE227>.widget-content {
                    font-size: 36px;
                    text-align: center;
                }
                #LISTOP373 {
                    top: 99px;
                    left: 79.5px;
                    width: 431.9921875px;
                    height: 215px;
                }
                #LISTOP373>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP373>ol.widget-content li::before {
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
                #LISTOP373>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP373>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX371 {
                    top: -0.878906px;
                    left: -0.253906px;
                    width: 562.98828125px;
                    height: 75.9765625px;
                }
                #HEADLINE372 {
                    top: 15.121099999999998px;
                    left: 49.7539px;
                    padding: 0px;
                    width: 488.984375px;
                    height: 60px;
                }
                #HEADLINE372>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #BOX367 {
                    top: 0px;
                    left: 0.5px;
                    width: 563px;
                    height: 116px;
                }
                #HEADLINE368 {
                    top: 42px;
                    left: 111px;
                    padding: 0px;
                    width: 386.25px;
                    height: 30px;
                }
                #HEADLINE368>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LISTOP369 {
                    top: 154px;
                    left: 79.5px;
                    width: 431.9921875px;
                    height: 55px;
                }
                #LISTOP369>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP369>ol.widget-content li::before {
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
                #LISTOP369>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP369>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX363 {
                    top: 0px;
                    left: 0.5px;
                    width: 563px;
                    height: 73.0078125px;
                }
                #HEADLINE364 {
                    top: 23px;
                    left: 82px;
                    padding: 0px;
                    width: 410.2734375px;
                    height: 30px;
                }
                #HEADLINE364>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LISTOP365 {
                    top: 154px;
                    left: 79.5px;
                    width: 431.9921875px;
                    height: 55px;
                }
                #LISTOP365>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP365>ol.widget-content li::before {
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
                #LISTOP365>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP365>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX359 {
                    top: 0px;
                    left: 0.5px;
                    width: 562.98828125px;
                    height: 78.0078125px;
                }
                #HEADLINE360 {
                    top: 25.1133px;
                    left: 78.2421875px;
                    padding: 0px;
                    width: 386.25px;
                    height: 30px;
                }
                #HEADLINE360>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LISTOP361 {
                    top: 154px;
                    left: 79.5px;
                    width: 431.9921875px;
                    height: 55px;
                }
                #LISTOP361>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP361>ol.widget-content li::before {
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
                #LISTOP361>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP361>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX355 {
                    top: 0px;
                    left: 0.5px;
                    width: 562.98828125px;
                    height: 88.0078125px;
                }
                #HEADLINE356 {
                    top: 15.988299999999999px;
                    left: 54px;
                    padding: 0px;
                    width: 478.2421875px;
                    height: 60px;
                }
                #HEADLINE356>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LISTOP357 {
                    top: 154px;
                    left: 82.5px;
                    width: 431.9921875px;
                    height: 90px;
                }
                #LISTOP357>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP357>ol.widget-content li::before {
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
                #LISTOP357>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP357>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX347 {
                    top: 0px;
                    left: 0.5px;
                    width: 562.98828125px;
                    height: 87.109375px;
                }
                #HEADLINE348 {
                    top: 13.61328125px;
                    left: 50.25390625px;
                    padding: 0px;
                    width: 482.98828125px;
                    height: 60px;
                }
                #HEADLINE348>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LISTOP349 {
                    top: 173.984375px;
                    left: 68.49609375px;
                    width: 431.9921875px;
                    height: 75px;
                }
                #LISTOP349>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP349>ol.widget-content li::before {
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
                #LISTOP349>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP349>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX343 {
                    top: 0px;
                    left: 0.5px;
                    width: 562.98828125px;
                    height: 87.109375px;
                }
                #HEADLINE344 {
                    top: 13.61328125px;
                    left: 78.57421875px;
                    padding: 0px;
                    width: 414.27734375px;
                    height: 60px;
                }
                #HEADLINE344>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LISTOP345 {
                    top: 142px;
                    left: 79.5px;
                    width: 431.9921875px;
                    height: 165px;
                }
                #LISTOP345>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP345>ol.widget-content li::before {
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
                #LISTOP345>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP345>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX339 {
                    top: 0px;
                    left: 0.5px;
                    width: 562.98828125px;
                    height: 68.0078125px;
                }
                #HEADLINE340 {
                    top: 21.11328125px;
                    left: 60.25390625px;
                    padding: 0px;
                    width: 470px;
                    height: 30px;
                }
                #HEADLINE340>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LISTOP341 {
                    top: 83.1094px;
                    left: 86.4883px;
                    width: 431.9921875px;
                    height: 250px;
                }
                #LISTOP341>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP341>ol.widget-content li::before {
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
                #LISTOP341>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP341>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX335 {
                    top: 0px;
                    left: 0.5px;
                    width: 562.98828125px;
                    height: 87.109375px;
                }
                #HEADLINE336 {
                    top: 14.6133px;
                    left: 48.25px;
                    padding: 0px;
                    width: 455.25390625px;
                    height: 60px;
                }
                #HEADLINE336>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LISTOP337 {
                    top: 127px;
                    left: 79.5px;
                    width: 431.9921875px;
                    height: 165px;
                }
                #LISTOP337>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP337>ol.widget-content li::before {
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
                #LISTOP337>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP337>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX331 {
                    top: 0px;
                    left: 0.5px;
                    width: 505.5078125px;
                    height: 72.87109375px;
                }
                #HEADLINE332 {
                    top: 11.85546875px;
                    left: 21.97265625px;
                    padding: 0px;
                    width: 403.984375px;
                    height: 55px;
                }
                #HEADLINE332>.widget-content {
                    font-size: 22px;
                    text-align: left;
                }
                #LISTOP333 {
                    top: 86px;
                    left: 35.5px;
                    width: 431.9921875px;
                    height: 545px;
                }
                #LISTOP333>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP333>ol.widget-content li::before {
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
                #LISTOP333>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP333>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #LISTOP329 {
                    top: 107px;
                    left: 61.5px;
                    width: 431.9921875px;
                    height: 355px;
                }
                #LISTOP329>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP329>ol.widget-content li::before {
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
                #LISTOP329>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP329>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX327 {
                    top: -0.878906px;
                    left: -0.253906px;
                    width: 521.23046875px;
                    height: 81.9921875px;
                }
                #HEADLINE328 {
                    top: 26.9883px;
                    left: 42.9805px;
                    padding: 0px;
                    width: 455.99609375px;
                    height: 30px;
                }
                #HEADLINE328>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LISTOP325 {
                    top: 84px;
                    left: 79.5px;
                    width: 431.9921875px;
                    height: 605px;
                }
                #LISTOP325>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP325>ol.widget-content li::before {
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
                #LISTOP325>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP325>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX323 {
                    top: 0px;
                    left: 0px;
                    width: 570.72265625px;
                    height: 64.5703125px;
                }
                #HEADLINE324 {
                    top: 20px;
                    left: 92.984px;
                    padding: 0px;
                    width: 414.27734375px;
                    height: 30px;
                }
                #HEADLINE324>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #BOX319 {
                    top: 0px;
                    left: 0.5px;
                    width: 562.98828125px;
                    height: 88.0078125px;
                }
                #HEADLINE320 {
                    top: 29.1133px;
                    left: 56.25px;
                    padding: 0px;
                    width: 466.9921875px;
                    height: 30px;
                }
                #HEADLINE320>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LISTOP321 {
                    top: 123px;
                    left: 77.5px;
                    width: 431.9921875px;
                    height: 215px;
                }
                #LISTOP321>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP321>ol.widget-content li::before {
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
                #LISTOP321>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP321>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX4 {
                    top: 126px;
                    left: 13.0078px;
                    width: 702px;
                    height: 375.984375px;
                }
                #HEADLINE234 {
                    top: 30px;
                    left: 39px;
                    padding: 0px;
                    width: 598px;
                    height: 22.5px;
                }
                #HEADLINE234>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #HEADLINE236 {
                    top: 118px;
                    left: 39px;
                    padding: 0px;
                    width: 626px;
                    height: 69px;
                }
                #HEADLINE236>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #HEADLINE237 {
                    top: 192px;
                    left: 39px;
                    padding: 0px;
                    width: 625px;
                    height: 45px;
                }
                #HEADLINE237>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #HEADLINE238 {
                    top: 261px;
                    left: 39px;
                    padding: 0px;
                    width: 626px;
                    height: 46px;
                }
                #HEADLINE238>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #HEADLINE239 {
                    top: 326px;
                    left: 39px;
                    padding: 0px;
                    width: 626px;
                    height: 23px;
                }
                #HEADLINE239>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #SHAPE241 {
                    top: 62px;
                    left: 5px;
                    width: 32px;
                    height: 32px;
                }
                #SHAPE244 {
                    top: 262px;
                    left: 3px;
                    width: 32px;
                    height: 32px;
                }
                #SHAPE243 {
                    top: 193px;
                    left: 4px;
                    width: 32px;
                    height: 32px;
                }
                #SHAPE242 {
                    top: 121px;
                    left: 5px;
                    width: 32px;
                    height: 32px;
                }
                #SHAPE240 {
                    top: 20px;
                    left: 4px;
                    width: 32px;
                    height: 32px;
                }
                #SHAPE245 {
                    top: 318px;
                    left: 4px;
                    width: 32px;
                    height: 32px;
                }
                #HEADLINE235 {
                    top: 62px;
                    left: 37px;
                    padding: 0px;
                    width: 640px;
                    height: 46px;
                }
                #HEADLINE235>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #IMAGE6 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/s300x300/57b167c9ca57d39c18a1c57c/6687568-0-owl.png);
                }
                #IMAGE6 {
                    top: 112px;
                    left: 768px;
                    width: 171.59375px;
                    height: 132px;
                }
                #HEADLINE9 {
                    top: 257px;
                    left: 727.995px;
                    padding: 0px;
                    width: 234.00390625px;
                    height: 42.5px;
                }
                #HEADLINE9>.widget-content {
                    font-size: 16px;
                    text-align: center;
                }
                #HEADLINE10 {
                    top: 311px;
                    left: 748px;
                    padding: 0px;
                    width: 211.25px;
                    height: 42.5px;
                }
                #HEADLINE10>.widget-content {
                    font-size: 16px;
                    text-align: center;
                }
                #HEADLINE233 {
                    top: 46px;
                    left: 121px;
                    padding: 0px;
                    width: 773px;
                    height: 36px;
                }
                #HEADLINE233>.widget-content {
                    font-size: 30px;
                    text-align: left;
                }
                #BOX28 {
                    top: 57.5px;
                    left: 292px;
                    width: 668px;
                    height: 384px;
                }
                #HEADLINE29 {
                    top: 23px;
                    left: 154px;
                    padding: 0px;
                    width: 385px;
                    height: 30px;
                }
                #HEADLINE29>.widget-content {
                    font-size: 24px;
                    text-align: center;
                }
                #LINE30 {
                    top: 51px;
                    left: 164px;
                    width: 360px;
                    height: 25px;
                }
                #LISTOP18 {
                    top: 83px;
                    left: 32px;
                    width: 615px;
                    height: 279px;
                }
                #LISTOP18>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #LISTOP18>ol.widget-content li::before {
                    content: counter(linum, decimal);
                    width: 23px;
                    height: 23px;
                    font-size: 11.5px;
                    color: rgba(56, 56, 56, 1);
                    margin-right: 7px;
                    content: url('data:image/svg+xml;utf8,<svg fill="rgba(56,56,56,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M9,5A3.5,3.5 0 0,1 12.5,8.5A3.5,3.5 0 0,1 9,12A3.5,3.5 0 0,1 5.5,8.5A3.5,3.5 0 0,1 9,5M9,13.75C12.87,13.75 16,15.32 16,17.25V19H2V17.25C2,15.32 5.13,13.75 9,13.75M17,12.66L14.25,9.66L15.41,8.5L17,10.09L20.59,6.5L21.75,7.91L17,12.66Z"/> </svg>');
                    background-repeat: no-repeat;
                    position: relative;
                    top: 0px;
                    left: 0;
                }
                #LISTOP18>ol.widget-content li {
                    margin-bottom: 5px;
                }
                #LISTOP18>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #IMAGE247 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/s400x500/5a28c4f8c3f6592b3acabec8/2-1517907429.png);
                }
                #IMAGE247 {
                    top: 25.5px;
                    left: 36px;
                    width: 221.84375px;
                    height: 342px;
                }
                #BOX248 {
                    top: 349.5px;
                    left: 7px;
                    width: 279px;
                    height: 82px;
                }
                #HEADLINE249 {
                    top: 12px;
                    left: 9px;
                    padding: 0px;
                    width: 270px;
                    height: 22px;
                }
                #HEADLINE249>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #HEADLINE250 {
                    top: 41px;
                    left: 41px;
                    padding: 0px;
                    width: 200px;
                    height: 31px;
                }
                #HEADLINE250>.widget-content {
                    font-size: 25px;
                    text-align: left;
                }
                #HEADLINE35 {
                    top: 58px;
                    left: 0px;
                    padding: 0px;
                    width: 472px;
                    height: 30px;
                }
                #HEADLINE35>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #LINE49 {
                    top: 88px;
                    left: 0px;
                    width: 426px;
                    height: 25px;
                }
                #LINE50 {
                    top: 200px;
                    left: 0px;
                    width: 428px;
                    height: 25px;
                }
                #LINE51 {
                    top: 299px;
                    left: 0px;
                    width: 428px;
                    height: 25px;
                }
                #LINE58 {
                    top: 400px;
                    left: 0px;
                    width: 428px;
                    height: 25px;
                }
                #LINE251 {
                    top: 199.5px;
                    left: 524px;
                    width: 428px;
                    height: 25px;
                }
                #LINE252 {
                    top: 298.5px;
                    left: 524px;
                    width: 428px;
                    height: 25px;
                }
                #SHAPE255 {
                    top: 144.5px;
                    left: 537px;
                    width: 50px;
                    height: 50px;
                }
                #HEADLINE256 {
                    top: 145.5px;
                    left: 591px;
                    padding: 0px;
                    width: 379px;
                    height: 44px;
                }
                #HEADLINE256>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #HEADLINE257 {
                    top: 236.5px;
                    left: 589px;
                    padding: 0px;
                    width: 358px;
                    height: 44px;
                }
                #HEADLINE257>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #SHAPE259 {
                    top: 229.5px;
                    left: 539px;
                    width: 50px;
                    height: 50px;
                }
                #HEADLINE39 {
                    top: 149px;
                    left: 69px;
                    padding: 0px;
                    width: 379px;
                    height: 44px;
                }
                #HEADLINE39>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #SHAPE260 {
                    top: 143.5px;
                    left: 0px;
                    width: 50px;
                    height: 50px;
                }
                #HEADLINE54 {
                    top: 248px;
                    left: 69px;
                    padding: 0px;
                    width: 379px;
                    height: 44px;
                }
                #HEADLINE54>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #SHAPE261 {
                    top: 235.5px;
                    left: 0px;
                    width: 50px;
                    height: 50px;
                }
                #SHAPE262 {
                    top: 328.5px;
                    left: 0px;
                    width: 50px;
                    height: 50px;
                }
                #HEADLINE57 {
                    top: 335px;
                    left: 58px;
                    padding: 0px;
                    width: 379px;
                    height: 66px;
                }
                #HEADLINE57>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #SHAPE263 {
                    top: 440.5px;
                    left: 0px;
                    width: 50px;
                    height: 50px;
                }
                #HEADLINE62 {
                    top: 450px;
                    left: 69px;
                    padding: 0px;
                    width: 379px;
                    height: 44px;
                }
                #HEADLINE62>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #BOX279 {
                    top: 132.312px;
                    left: 39.9922px;
                    width: 857.015625px;
                    height: 615px;
                }
                #HEADLINE265 {
                    top: 29.4922px;
                    left: 70.7656px;
                    padding: 0px;
                    width: 346.0078125px;
                    height: 26px;
                }
                #HEADLINE265>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE281 {
                    top: 17.0156px;
                    left: 13.7813px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #SHAPE282 {
                    top: 77.4844px;
                    left: 13.7813px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #HEADLINE266 {
                    top: 78.4921875px;
                    left: 71.765625px;
                    padding: 0px;
                    width: 336.25px;
                    height: 52px;
                }
                #HEADLINE266>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE267 {
                    top: 152.484375px;
                    left: 71.7421875px;
                    padding: 0px;
                    width: 336.2578125px;
                    height: 26px;
                }
                #HEADLINE267>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE283 {
                    top: 144.961px;
                    left: 14.7813px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #HEADLINE268 {
                    top: 223.031px;
                    left: 72px;
                    padding: 0px;
                    width: 336px;
                    height: 25px;
                }
                #HEADLINE268>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE284 {
                    top: 210.438px;
                    left: 13.7813px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #HEADLINE269 {
                    top: 296.289px;
                    left: 70.9922px;
                    padding: 0px;
                    width: 336.984375px;
                    height: 50px;
                }
                #HEADLINE269>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE270 {
                    top: 367.2890625px;
                    left: 68.953125px;
                    padding: 0px;
                    width: 372.0234375px;
                    height: 50px;
                }
                #HEADLINE270>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE285 {
                    top: 291.914px;
                    left: 13.7813px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #SHAPE286 {
                    top: 363.391px;
                    left: 13.7813px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #HEADLINE271 {
                    top: 451.305px;
                    left: 70.9922px;
                    padding: 0px;
                    width: 369px;
                    height: 25px;
                }
                #HEADLINE271>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE272 {
                    top: 523.289px;
                    left: 71.9765625px;
                    padding: 0px;
                    width: 315px;
                    height: 50px;
                }
                #HEADLINE272>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE288 {
                    top: 522.336px;
                    left: 14.765625px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #SHAPE287 {
                    top: 445.852px;
                    left: 13.7656px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #HEADLINE274 {
                    top: 113.813px;
                    left: 506.766px;
                    padding: 0px;
                    width: 340.03125px;
                    height: 75px;
                }
                #HEADLINE274>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE273 {
                    top: 27.7656px;
                    left: 505.773px;
                    padding: 0px;
                    width: 315px;
                    height: 50px;
                }
                #HEADLINE273>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE278 {
                    top: 413.789px;
                    left: 505.969px;
                    padding: 0px;
                    width: 315px;
                    height: 25px;
                }
                #HEADLINE278>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE277 {
                    top: 355.805px;
                    left: 505px;
                    padding: 0px;
                    width: 315px;
                    height: 25px;
                }
                #HEADLINE277>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE276 {
                    top: 297.805px;
                    left: 503.969px;
                    padding: 0px;
                    width: 315px;
                    height: 25px;
                }
                #HEADLINE276>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE289 {
                    top: 20.2265625px;
                    left: 451.2421875px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #SHAPE291 {
                    top: 208.18px;
                    left: 452.203px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #SHAPE290 {
                    top: 110.227px;
                    left: 448.781px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #SHAPE292 {
                    top: 286.672px;
                    left: 450.203px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #SHAPE294 {
                    top: 405.219px;
                    left: 452.211px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #SHAPE293 {
                    top: 344.805px;
                    left: 453px;
                    width: 49.1953125px;
                    height: 54.4921875px;
                }
                #HEADLINE275 {
                    top: 216.203px;
                    left: 505.015625px;
                    padding: 0px;
                    width: 315px;
                    height: 50px;
                }
                #HEADLINE275>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #LINE100 {
                    top: 82px;
                    left: 332px;
                    width: 267px;
                    height: 25px;
                }
                #HEADLINE101 {
                    top: 52px;
                    left: 237px;
                    padding: 0px;
                    width: 472px;
                    height: 30px;
                }
                #HEADLINE101>.widget-content {
                    font-size: 24px;
                    text-align: center;
                }
                #BOX386 {
                    top: 289.566px;
                    left: 531.977px;
                    width: 348.0078125px;
                    height: 135.99609375px;
                }
                #PARAGRAPH387 {
                    top: 22.2383px;
                    left: 21.9922px;
                    padding: 0px;
                    width: 316.25px;
                    height: 25px;
                }
                #PARAGRAPH387>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #BOX384 {
                    top: 291.586px;
                    left: 75px;
                    width: 348.0078125px;
                    height: 135.99609375px;
                }
                #BOX382 {
                    top: 104.586px;
                    left: 531.984px;
                    width: 348.0078125px;
                    height: 135.99609375px;
                }
                #PARAGRAPH383 {
                    top: 22.2383px;
                    left: 21.9922px;
                    padding: 0px;
                    width: 316.25px;
                    height: 25px;
                }
                #PARAGRAPH383>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #PARAGRAPH375 {
                    top: 19.5078px;
                    left: 32px;
                    padding: 0px;
                    width: 300.01953125px;
                    height: 100px;
                }
                #PARAGRAPH375>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE65 {
                    top: 29px;
                    left: 232px;
                    padding: 0px;
                    width: 471.25px;
                    height: 30px;
                }
                #HEADLINE65>.widget-content {
                    font-size: 24px;
                    text-align: center;
                }
                #LINE69 {
                    top: 62px;
                    left: 323px;
                    width: 292px;
                    height: 25px;
                }
                #BOX374 {
                    top: 104.594px;
                    left: 73.9961px;
                    width: 348.0078125px;
                    height: 135.99609375px;
                }
                #PARAGRAPH376 {
                    top: 22.2383px;
                    left: 21.9921875px;
                    padding: 0px;
                    width: 317px;
                    height: 104px;
                }
                #PARAGRAPH376>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #PARAGRAPH378 {
                    top: 323.063px;
                    left: 91.9922px;
                    padding: 0px;
                    width: 328.0078125px;
                    height: 75px;
                }
                #PARAGRAPH378>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #PARAGRAPH377 {
                    top: 319.078px;
                    left: 565.996px;
                    padding: 0px;
                    width: 311.9921875px;
                    height: 75px;
                }
                #PARAGRAPH377>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE424 {
                    top: 111.344px;
                    left: 19.9844px;
                    padding: 0px;
                    width: 398.984375px;
                    height: 78px;
                }
                #HEADLINE424>.widget-content {
                    font-size: 33px;
                    text-align: center;
                }
                #IMAGE441 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/s700x500/5a28c4f8c3f6592b3acabec8/Apple-Mac-Computer-Screen-PNG-1513826485.png);
                }
                #IMAGE441 {
                    top: 107.828px;
                    left: 456.036px;
                    width: 504.70703125px;
                    height: 395.9765625px;
                }
                #YOUTUBE442 {
                    top: 9.6484375px;
                    left: 20.9765625px;
                    width: 465.3125px;
                    height: 270.99609375px;
                }
                #PARAGRAPH443 {
                    top: 227.872px;
                    left: 62.98px;
                    padding: 0px;
                    width: 320px;
                    height: 52px;
                }
                #PARAGRAPH443>.widget-content {
                    font-size: 20px;
                    text-align: center;
                }
                #LISTOP308 {
                    top: 85.3125px;
                    left: 60.203125px;
                    width: 360.29296875px;
                    height: 180px;
                }
                #LISTOP308>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP308>ol.widget-content li::before {
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
                #LISTOP308>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP308>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX306 {
                    top: 0px;
                    left: 1px;
                    width: 503.984375px;
                    height: 68.73046875px;
                }
                #HEADLINE307 {
                    top: 22.7305px;
                    left: 69.2266px;
                    padding: 0px;
                    width: 383.26171875px;
                    height: 30px;
                }
                #HEADLINE307>.widget-content {
                    font-size: 24px;
                    text-align: left;
                }
                #BOX143 {
                    top: 161px;
                    left: 23px;
                    width: 446px;
                    height: 172px;
                }
                #SHAPE132 {
                    top: 32px;
                    left: 18px;
                    width: 50px;
                    height: 50px;
                }
                #HEADLINE134 {
                    top: 36px;
                    left: 78px;
                    padding: 0px;
                    width: 360px;
                    height: 25px;
                }
                #HEADLINE134>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #PARAGRAPH133 {
                    top: 70px;
                    left: 78px;
                    padding: 0px;
                    width: 336.25px;
                    height: 63.75px;
                }
                #PARAGRAPH133>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #LINE144 {
                    top: 94px;
                    left: 334px;
                    width: 267px;
                    height: 25px;
                }
                #BOX151 {
                    top: 160px;
                    left: 497px;
                    width: 446px;
                    height: 172px;
                }
                #SHAPE153 {
                    top: 32px;
                    left: 18px;
                    width: 50px;
                    height: 50px;
                }
                #PARAGRAPH154 {
                    top: 67px;
                    left: 78px;
                    padding: 0px;
                    width: 336.25px;
                    height: 63.75px;
                }
                #PARAGRAPH154>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #HEADLINE155 {
                    top: 36px;
                    left: 78px;
                    padding: 0px;
                    width: 360px;
                    height: 25px;
                }
                #HEADLINE155>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE145 {
                    top: 64px;
                    left: 236px;
                    padding: 0px;
                    width: 471.25px;
                    height: 30px;
                }
                #HEADLINE145>.widget-content {
                    font-size: 24px;
                    text-align: center;
                }
                #BOX221 {
                    top: 355px;
                    left: 23px;
                    width: 446px;
                    height: 172px;
                }
                #SHAPE222 {
                    top: 32px;
                    left: 18px;
                    width: 50px;
                    height: 50px;
                }
                #HEADLINE223 {
                    top: 36px;
                    left: 78px;
                    padding: 0px;
                    width: 360px;
                    height: 26.25px;
                }
                #HEADLINE223>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #PARAGRAPH224 {
                    top: 70px;
                    left: 78px;
                    padding: 0px;
                    width: 336.25px;
                    height: 42.5px;
                }
                #PARAGRAPH224>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #BOX217 {
                    top: 354px;
                    left: 497px;
                    width: 446px;
                    height: 172px;
                }
                #SHAPE218 {
                    top: 32px;
                    left: 18px;
                    width: 50px;
                    height: 50px;
                }
                #PARAGRAPH219 {
                    top: 67px;
                    left: 78px;
                    padding: 0px;
                    width: 336px;
                    height: 66px;
                }
                #PARAGRAPH219>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #HEADLINE220 {
                    top: 36px;
                    left: 78px;
                    padding: 0px;
                    width: 360px;
                    height: 26.25px;
                }
                #HEADLINE220>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #BOX175 {
                    top: 101px;
                    left: 575px;
                    width: 385px;
                    height: 554px;
                }
                #HEADLINE176 {
                    top: 28px;
                    left: 18px;
                    padding: 0px;
                    width: 341px;
                    height: 50px;
                }
                #HEADLINE176>.widget-content {
                    font-size: 21px;
                    text-align: center;
                }
                #GROUP177 {
                    top: 109px;
                    left: 40px;
                    width: 298px;
                    height: 98px;
                }
                #GROUP178 {
                    top: 0px;
                    left: 1.8125px;
                    width: 294.34375px;
                    height: 98px;
                }
                #BOX179 {
                    top: 28px;
                    left: 1px;
                    width: 68.453125px;
                    height: 70px;
                }
                #HEADLINE180 {
                    top: 0px;
                    left: 6.25px;
                    padding: 0px;
                    width: 61.4375px;
                    height: 18px;
                }
                #HEADLINE180>.widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE181 {
                    top: 0px;
                    left: 81.265625px;
                    padding: 0px;
                    width: 61.4375px;
                    height: 18px;
                }
                #HEADLINE181>.widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #BOX182 {
                    top: 28px;
                    left: 76px;
                    width: 68.453125px;
                    height: 70px;
                }
                #BOX183 {
                    top: 28px;
                    left: 226.890625px;
                    width: 68.453125px;
                    height: 70px;
                }
                #HEADLINE184 {
                    top: 0px;
                    left: 228.171875px;
                    padding: 0px;
                    width: 61.4375px;
                    height: 18px;
                }
                #HEADLINE184>.widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE185 {
                    top: 0px;
                    left: 156.171875px;
                    padding: 0px;
                    width: 61.4375px;
                    height: 18px;
                }
                #HEADLINE185>.widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #BOX186 {
                    top: 28px;
                    left: 150.875px;
                    width: 68.453125px;
                    height: 70px;
                }
                #COUNTDOWN187 {
                    top: 40px;
                    left: 1px;
                    width: 298px;
                    height: 43px;
                }
                #COUNTDOWN187>.widget-content {
                    font-size: 36px;
                }
                #GROUP188 {
                    top: 241px;
                    left: 40px;
                    width: 301px;
                    height: 323.984375px;
                }
                #BUTTON189 {
                    top: 237.984px;
                    left: 2px;
                    padding: 0px;
                    width: 300px;
                    height: 49px;
                }
                #BUTTON189>.widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #FORM190 {
                    top: 0px;
                    left: 2px;
                    width: 300px;
                    height: 221.96875px;
                }
                #FORM190>.widget-content {
                    font-size: 16px;
                }
                #ITEM_FORM191 {
                    top: 0px;
                    left: 0px;
                    width: 300px;
                    height: 46.140625px;
                }
                #ITEM_FORM191>.widget-content {
                    font-size: 16px;
                }
                #ITEM_FORM192 {
                    top: 58.9268px;
                    left: 0px;
                    width: 300px;
                    height: 46.140625px;
                }
                #ITEM_FORM192>.widget-content {
                    font-size: 16px;
                }
                #ITEM_FORM193 {
                    top: 117.854px;
                    left: 0px;
                    width: 300px;
                    height: 46.140625px;
                }
                #ITEM_FORM193>.widget-content {
                    font-size: 16px;
                }
                #ITEM_FORM444 {
                    top: 173.984px;
                    left: 0px;
                    width: 300px;
                    height: 48px;
                }
                #HEADLINE196 {
                    top: 208px;
                    left: 0px;
                    padding: 0px;
                    width: 440px;
                    height: 74.66667175292969px;
                }
                #HEADLINE196>.widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #PARAGRAPH197 {
                    top: 321px;
                    left: 0px;
                    padding: 0px;
                    width: 428px;
                    height: 112px;
                }
                #PARAGRAPH197>.widget-content {
                    font-size: 20px;
                    text-align: center;
                }
            }

            #SECTION2 {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x1000/5a28c4f8c3f6592b3acabec8/season-1985856_1280-1512745393626.jpg");
                background-color: rgba(255, 255, 255, 0.44);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #SECTION2>.ladi-widget-overlay {
                background-color: rgba(0, 0, 0, 0.64);
            }

            #POPUP370 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP370>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP366 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP366>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP362 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP362>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP358 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP358>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP354 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP354>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP346 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP346>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP342 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP342>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP338 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP338>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP334 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP334>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP330 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP330>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP326 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP326>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP322 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP322>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #POPUP318 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP318>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #SECTION3 {
                display: block;
                background-color: rgba(140, 2, 0, 1);
            }

            #SECTION11 {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/5a28c4f8c3f6592b3acabec8/library-869061_1920-1513152153.jpg");
                background-color: rgba(255, 255, 255, 0);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #SECTION11>.ladi-widget-overlay {
                background-color: rgba(6, 6, 6, 0.78);
            }

            #SECTION33 {
                display: block;
                background-color: rgba(140, 2, 0, 1);
            }

            #SECTION82 {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x1100/5a28c4f8c3f6592b3acabec8/computer-962971-1513659147.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }

            #SECTION82>.ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0.29);
            }

            #SECTION63 {
                display: block;
                background-color: rgba(140, 2, 0, 1);
            }

            #SECTION423 {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x800/5a28c4f8c3f6592b3acabec8/6-1513741038.png");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: 100% auto;
                background-attachment: scroll;
                background-position: top left;
                background-repeat: no-repeat;
            }

            #SECTION423>.ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0);
            }

            #POPUP305 .container {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-origin: content-box;
                background-size: cover;
                background-attachment: scroll;
                background-position: top center;
                background-repeat: no-repeat;
            }

            #POPUP305>.container .overlay-container-popup {
                background-color: rgba(0, 0, 0, 0.83);
            }

            #SECTION127 {
                display: block;
                background-image: url("https://static.ladipage.net/s1440x800/57b167c9ca57d39c18a1c57c/bg-testimonial.jpg");
                background-color: rgba(255, 255, 255, 1);
                background-size: cover;
                background-attachment: fixed;
                background-position: top left;
                background-repeat: no-repeat;
            }

            #SECTION127>.ladi-widget-overlay {
                background-color: rgba(3, 3, 3, 0.62);
            }

            #SECTION174 {
                display: block;
                background-color: rgba(140, 2, 0, 1);
            }

            #IMAGE225 {
                display: block;
            }

            #IMAGE225>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE225>.ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0)
            }

            #BOX226 {
                display: block;
            }

            #BOX226>.widget-content {
                background-color: rgba(255, 255, 255, 0.44);
                color: rgba(0, 0, 0, 1);
            }

            #BOX226>.widget-content {
                border-width: 3px;
                border-style: dashed;
                border-color: rgba(140, 2, 0, 1);
            }

            #BOX226>.ladi-widget-overlay {
                border-width: 3px;
                border-style: dashed;
                border-color: rgba(140, 2, 0, 1);
            }

            #LISTOP228 {
                display: block;
            }

            #LISTOP228>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                line-height: 20px;
            }

            #HEADLINE232 {
                display: block;
            }

            #HEADLINE232>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(17, 130, 22, 1);
                font-weight: 700;
                line-height: 36px;
            }

            #BUTTON229 {
                display: table;
            }

            #BUTTON229>.widget-content {
                background-color: rgba(21, 185, 51, 1);
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 600;
                line-height: 40px;
            }

            #BUTTON229>.widget-content {
                border-radius: 5px;
            }

            #BUTTON229>.ladi-widget-overlay {
                border-radius: 5px;
            }

            #HEADLINE445 {
                display: block;
            }

            #HEADLINE445>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 400;
                font-style: italic;
                line-height: 24px;
            }

            #HEADLINE446 {
                display: block;
            }

            #HEADLINE446>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 700;
                text-decoration: line-through;
                -webkit-text-decoration-line: line-through;
                line-height: 24px;
            }

            #HEADLINE227 {
                display: block;
            }

            #HEADLINE227>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 152, 0, 1);
                font-weight: 700;
                line-height: 45px;
                letter-spacing: 1px;
            }

            #LISTOP373 {
                display: block;
            }

            #LISTOP373>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX371 {
                display: block;
            }

            #BOX371>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE372 {
                display: block;
            }

            #HEADLINE372>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #BOX367 {
                display: block;
            }

            #BOX367>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE368 {
                display: block;
            }

            #HEADLINE368>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #LISTOP369 {
                display: block;
            }

            #LISTOP369>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX363 {
                display: block;
            }

            #BOX363>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE364 {
                display: block;
            }

            #HEADLINE364>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #LISTOP365 {
                display: block;
            }

            #LISTOP365>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX359 {
                display: block;
            }

            #BOX359>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE360 {
                display: block;
            }

            #HEADLINE360>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #LISTOP361 {
                display: block;
            }

            #LISTOP361>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX355 {
                display: block;
            }

            #BOX355>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE356 {
                display: block;
            }

            #HEADLINE356>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #LISTOP357 {
                display: block;
            }

            #LISTOP357>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX347 {
                display: block;
            }

            #BOX347>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE348 {
                display: block;
            }

            #HEADLINE348>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #LISTOP349 {
                display: block;
            }

            #LISTOP349>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX343 {
                display: block;
            }

            #BOX343>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE344 {
                display: block;
            }

            #HEADLINE344>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #LISTOP345 {
                display: block;
            }

            #LISTOP345>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX339 {
                display: block;
            }

            #BOX339>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE340 {
                display: block;
            }

            #HEADLINE340>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #LISTOP341 {
                display: block;
            }

            #LISTOP341>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX335 {
                display: block;
            }

            #BOX335>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE336 {
                display: block;
            }

            #HEADLINE336>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #LISTOP337 {
                display: block;
            }

            #LISTOP337>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX331 {
                display: block;
            }

            #BOX331>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE332 {
                display: block;
            }

            #HEADLINE332>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 28px;
            }

            #LISTOP333 {
                display: block;
            }

            #LISTOP333>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #LISTOP329 {
                display: block;
            }

            #LISTOP329>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX327 {
                display: block;
            }

            #BOX327>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE328 {
                display: block;
            }

            #HEADLINE328>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #LISTOP325 {
                display: block;
            }

            #LISTOP325>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX323 {
                display: block;
            }

            #BOX323>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE324 {
                display: block;
            }

            #HEADLINE324>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #BOX319 {
                display: block;
            }

            #BOX319>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE320 {
                display: block;
            }

            #HEADLINE320>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 600;
                line-height: 30px;
            }

            #LISTOP321 {
                display: block;
            }

            #LISTOP321>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX4 {
                display: block;
            }

            #BOX4>.widget-content {
                background-color: rgba(255, 255, 255, 0.21);
                color: rgba(0, 0, 0, 1);
            }

            #BOX4>.widget-content {
                border-width: 3px;
                border-style: dashed;
                border-color: rgba(255, 255, 255, 1);
            }

            #BOX4>.ladi-widget-overlay {
                border-width: 3px;
                border-style: dashed;
                border-color: rgba(255, 255, 255, 1);
            }

            #HEADLINE234 {
                display: block;
            }

            #HEADLINE234>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 700;
                line-height: 23px;
            }

            #HEADLINE236 {
                display: block;
            }

            #HEADLINE236>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 700;
                line-height: 23px;
            }

            #HEADLINE237 {
                display: block;
            }

            #HEADLINE237>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 700;
                line-height: 23px;
            }

            #HEADLINE238 {
                display: block;
            }

            #HEADLINE238>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 700;
                line-height: 23px;
            }

            #HEADLINE239 {
                display: block;
            }

            #HEADLINE239>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 700;
                line-height: 23px;
            }

            #SHAPE241 {
                display: block;
            }

            #SHAPE241>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 234, 6, 1);
            }

            #SHAPE241>.widget-content svg {
                fill: rgba(255, 234, 6, 1);
            }

            #SHAPE244 {
                display: block;
            }

            #SHAPE244>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 234, 6, 1);
            }

            #SHAPE244>.widget-content svg {
                fill: rgba(255, 234, 6, 1);
            }

            #SHAPE243 {
                display: block;
            }

            #SHAPE243>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 234, 6, 1);
            }

            #SHAPE243>.widget-content svg {
                fill: rgba(255, 234, 6, 1);
            }

            #SHAPE242 {
                display: block;
            }

            #SHAPE242>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 234, 6, 1);
            }

            #SHAPE242>.widget-content svg {
                fill: rgba(255, 234, 6, 1);
            }

            #SHAPE240 {
                display: block;
            }

            #SHAPE240>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 234, 6, 1);
            }

            #SHAPE240>.widget-content svg {
                fill: rgba(255, 234, 6, 1);
            }

            #SHAPE245 {
                display: block;
            }

            #SHAPE245>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(255, 234, 6, 1);
            }

            #SHAPE245>.widget-content svg {
                fill: rgba(255, 234, 6, 1);
            }

            #HEADLINE235 {
                display: block;
            }

            #HEADLINE235>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 700;
                line-height: 23px;
            }

            #IMAGE6 {
                display: block;
            }

            #IMAGE6>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE6>.ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0)
            }

            #HEADLINE9 {
                display: block;
            }

            #HEADLINE9>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                font-style: italic;
                line-height: 22px;
            }

            #HEADLINE10 {
                display: block;
            }

            #HEADLINE10>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 22px;
            }

            #HEADLINE233 {
                display: block;
            }

            #HEADLINE233>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 36px;
            }

            #BOX28 {
                display: block;
            }

            #BOX28>.widget-content {
                background-color: rgba(255, 255, 255, 0.78);
                color: rgba(0, 0, 0, 1);
            }

            #BOX28>.widget-content {
                border-radius: 24px;
                border-width: 2px;
                border-style: solid;
                border-color: rgba(69, 69, 69, 1);
            }

            #BOX28>.ladi-widget-overlay {
                border-radius: 24px;
                border-width: 2px;
                border-style: solid;
                border-color: rgba(69, 69, 69, 1);
            }

            #HEADLINE29 {
                display: block;
            }

            #HEADLINE29>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(213, 0, 0, 1);
                font-weight: 700;
                font-style: italic;
                line-height: 30px;
            }

            #LINE30 {
                display: block;
            }

            #LINE30>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(182, 166, 33, 1);
                margin-top: 10.5px;
            }

            #LINE30>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LISTOP18 {
                display: block;
            }

            #LISTOP18>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
                font-weight: 700;
                font-style: italic;
                line-height: 22px;
            }

            #IMAGE247 {
                display: block;
            }

            #IMAGE247>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE247>.widget-content {
                border-width: 0px;
                border-style: solid;
                border-color: rgba(0, 0, 0, 1);
            }

            #IMAGE247>.ladi-widget-overlay {
                border-width: 0px;
                border-style: solid;
                border-color: rgba(0, 0, 0, 1);
            }

            #IMAGE247>.ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0)
            }

            #BOX248 {
                display: block;
            }

            #BOX248>.widget-content {
                background-color: rgba(140, 2, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX248>.widget-content {
                border-radius: 17px;
            }

            #BOX248>.ladi-widget-overlay {
                border-radius: 17px;
            }

            #HEADLINE249 {
                display: block;
            }

            #HEADLINE249>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 600;
                line-height: 22px;
            }

            #HEADLINE250 {
                display: block;
            }

            #HEADLINE250>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 600;
                line-height: 31px;
            }

            #HEADLINE35 {
                display: block;
            }

            #HEADLINE35>.widget-content {
                opacity: 1;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 30px;
            }

            #LINE49 {
                display: block;
            }

            #LINE49>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE49>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE50 {
                display: block;
            }

            #LINE50>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: dashed;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE50>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE51 {
                display: block;
            }

            #LINE51>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: dashed;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE51>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE58 {
                display: block;
            }

            #LINE58>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: dashed;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE58>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE251 {
                display: block;
            }

            #LINE251>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: dashed;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE251>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #LINE252 {
                display: block;
            }

            #LINE252>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: dashed;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE252>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #SHAPE255 {
                display: block;
            }

            #SHAPE255>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE255>.widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #HEADLINE256 {
                display: block;
            }

            #HEADLINE256>.widget-content {
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 22px;
            }

            #HEADLINE257 {
                display: block;
            }

            #HEADLINE257>.widget-content {
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 22px;
            }

            #SHAPE259 {
                display: block;
            }

            #SHAPE259>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE259>.widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #HEADLINE39 {
                display: block;
            }

            #HEADLINE39>.widget-content {
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 22px;
            }

            #SHAPE260 {
                display: block;
            }

            #SHAPE260>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE260>.widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #HEADLINE54 {
                display: block;
            }

            #HEADLINE54>.widget-content {
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 22px;
            }

            #SHAPE261 {
                display: block;
            }

            #SHAPE261>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE261>.widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #SHAPE262 {
                display: block;
            }

            #SHAPE262>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE262>.widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #HEADLINE57 {
                display: block;
            }

            #HEADLINE57>.widget-content {
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 22px;
            }

            #SHAPE263 {
                display: block;
            }

            #SHAPE263>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE263>.widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #HEADLINE62 {
                display: block;
            }

            #HEADLINE62>.widget-content {
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 22px;
            }

            #BOX279 {
                display: block;
            }

            #BOX279>.widget-content {
                background-color: rgba(244, 67, 54, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX279>.widget-content {
                border-radius: 40px;
                border-width: 4px;
                border-style: dashed;
                border-color: rgba(3, 169, 244, 1);
            }

            #BOX279>.ladi-widget-overlay {
                border-radius: 40px;
                border-width: 4px;
                border-style: dashed;
                border-color: rgba(3, 169, 244, 1);
            }

            #HEADLINE265 {
                display: block;
            }

            #HEADLINE265>.widget-content {
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #SHAPE281 {
                display: block;
            }

            #SHAPE281>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE281>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #SHAPE282 {
                display: block;
            }

            #SHAPE282>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE282>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #HEADLINE266 {
                display: block;
            }

            #HEADLINE266>.widget-content {
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #HEADLINE267 {
                display: block;
            }

            #HEADLINE267>.widget-content {
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #SHAPE283 {
                display: block;
            }

            #SHAPE283>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE283>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #HEADLINE268 {
                display: block;
            }

            #HEADLINE268>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #SHAPE284 {
                display: block;
            }

            #SHAPE284>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE284>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #HEADLINE269 {
                display: block;
            }

            #HEADLINE269>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #HEADLINE270 {
                display: block;
            }

            #HEADLINE270>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #SHAPE285 {
                display: block;
            }

            #SHAPE285>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE285>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #SHAPE286 {
                display: block;
            }

            #SHAPE286>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE286>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #HEADLINE271 {
                display: block;
            }

            #HEADLINE271>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #HEADLINE272 {
                display: block;
            }

            #HEADLINE272>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #SHAPE288 {
                display: block;
            }

            #SHAPE288>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE288>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #SHAPE287 {
                display: block;
            }

            #SHAPE287>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE287>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #HEADLINE274 {
                display: block;
            }

            #HEADLINE274>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #HEADLINE273 {
                display: block;
            }

            #HEADLINE273>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #HEADLINE278 {
                display: block;
            }

            #HEADLINE278>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #HEADLINE277 {
                display: block;
            }

            #HEADLINE277>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #HEADLINE276 {
                display: block;
            }

            #HEADLINE276>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #SHAPE289 {
                display: block;
            }

            #SHAPE289>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE289>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #SHAPE291 {
                display: block;
            }

            #SHAPE291>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE291>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #SHAPE290 {
                display: block;
            }

            #SHAPE290>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE290>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #SHAPE292 {
                display: block;
            }

            #SHAPE292>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE292>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #SHAPE294 {
                display: block;
            }

            #SHAPE294>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE294>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #SHAPE293 {
                display: block;
            }

            #SHAPE293>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(243, 225, 33, 1);
            }

            #SHAPE293>.widget-content svg {
                fill: rgba(243, 225, 33, 1);
            }

            #HEADLINE275 {
                display: block;
            }

            #HEADLINE275>.widget-content {
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                text-decoration: underline;
                -webkit-text-decoration-line: underline;
                line-height: 26px;
            }

            #LINE100 {
                display: block;
            }

            #LINE100>.widget-content .line {
                border-top-width: 4px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(255, 193, 7, 1);
                margin-top: 8.4921875px;
            }

            #LINE100>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE101 {
                display: block;
            }

            #HEADLINE101>.widget-content {
                opacity: 1;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 30px;
            }

            #BOX386 {
                display: block;
            }

            #BOX386>.widget-content {
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX386>.widget-content {
                border-radius: 28px;
                border-width: 4px;
                border-style: dashed;
                border-color: rgba(255, 193, 7, 1);
            }

            #BOX386>.ladi-widget-overlay {
                border-radius: 28px;
                border-width: 4px;
                border-style: dashed;
                border-color: rgba(255, 193, 7, 1);
            }

            #PARAGRAPH387 {
                display: block;
            }

            #PARAGRAPH387>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 26px;
            }

            #BOX384 {
                display: block;
            }

            #BOX384>.widget-content {
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX384>.widget-content {
                border-radius: 28px;
                border-width: 4px;
                border-style: dashed;
                border-color: rgba(255, 193, 7, 1);
            }

            #BOX384>.ladi-widget-overlay {
                border-radius: 28px;
                border-width: 4px;
                border-style: dashed;
                border-color: rgba(255, 193, 7, 1);
            }

            #BOX382 {
                display: block;
            }

            #BOX382>.widget-content {
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX382>.widget-content {
                border-radius: 28px;
                border-width: 4px;
                border-style: dashed;
                border-color: rgba(255, 193, 7, 1);
            }

            #BOX382>.ladi-widget-overlay {
                border-radius: 28px;
                border-width: 4px;
                border-style: dashed;
                border-color: rgba(255, 193, 7, 1);
            }

            #PARAGRAPH383 {
                display: block;
            }

            #PARAGRAPH383>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 26px;
            }

            #PARAGRAPH375 {
                display: block;
            }

            #PARAGRAPH375>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 600;
                line-height: 26px;
            }

            #HEADLINE65 {
                display: block;
            }

            #HEADLINE65>.widget-content {
                opacity: 1;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 30px;
            }

            #LINE69 {
                display: block;
            }

            #LINE69>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE69>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX374 {
                display: block;
            }

            #BOX374>.widget-content {
                background-color: rgba(189, 189, 189, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX374>.widget-content {
                border-radius: 28px;
                border-width: 4px;
                border-style: dashed;
                border-color: rgba(255, 193, 7, 1);
            }

            #BOX374>.ladi-widget-overlay {
                border-radius: 28px;
                border-width: 4px;
                border-style: dashed;
                border-color: rgba(255, 193, 7, 1);
            }

            #PARAGRAPH376 {
                display: block;
            }

            #PARAGRAPH376>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 26px;
            }

            #PARAGRAPH378 {
                display: block;
            }

            #PARAGRAPH378>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 600;
                line-height: 26px;
            }

            #PARAGRAPH377 {
                display: block;
            }

            #PARAGRAPH377>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 600;
                line-height: 26px;
            }

            #HEADLINE424 {
                display: block;
            }

            #HEADLINE424>.widget-content {
                color: rgba(0, 0, 0, 1);
                font-weight: 700;
                line-height: 39px;
            }

            #IMAGE441 {
                display: block;
            }

            #IMAGE441>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #IMAGE441>.ladi-widget-overlay {
                background-color: rgba(255, 255, 255, 0)
            }

            #YOUTUBE442 {
                display: block;
            }

            #YOUTUBE442>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #PARAGRAPH443 {
                display: block;
            }

            #PARAGRAPH443>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: "Open Sans", sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(0, 0, 0, 1);
                font-weight: 600;
                font-style: italic;
                line-height: 26px;
            }

            #LISTOP308 {
                display: block;
            }

            #LISTOP308>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Roboto', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 400;
                line-height: 20px;
            }

            #BOX306 {
                display: block;
            }

            #BOX306>.widget-content {
                background-color: rgba(255, 230, 0, 1);
                color: rgba(0, 0, 0, 1);
            }

            #HEADLINE307 {
                display: block;
            }

            #HEADLINE307>.widget-content {
                font-family: 'Montserrat', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(33, 33, 33, 1);
                font-weight: 700;
                line-height: 30px;
            }

            #BOX143 {
                display: block;
            }

            #BOX143>.widget-content {
                background-color: rgba(140, 2, 0, 0.73);
                color: rgba(0, 0, 0, 1);
            }

            #SHAPE132 {
                display: block;
            }

            #SHAPE132>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE132>.widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #HEADLINE134 {
                display: block;
            }

            #HEADLINE134>.widget-content {
                opacity: 1;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 26px;
            }

            #PARAGRAPH133 {
                display: block;
            }

            #PARAGRAPH133>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                line-height: 22px;
            }

            #LINE144 {
                display: block;
            }

            #LINE144>.widget-content .line {
                border-top-width: 2px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-bottom-width: 0px;
                border-style: solid;
                border-color: rgba(255, 255, 255, 1);
                margin-top: 10.5px;
            }

            #LINE144>.widget-content {
                background-color: rgba(255, 255, 255, 0);
            }

            #BOX151 {
                display: block;
            }

            #BOX151>.widget-content {
                background-color: rgba(140, 2, 0, 0.73);
                color: rgba(0, 0, 0, 1);
            }

            #SHAPE153 {
                display: block;
            }

            #SHAPE153>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE153>.widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #PARAGRAPH154 {
                display: block;
            }

            #PARAGRAPH154>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                line-height: 22px;
            }

            #HEADLINE155 {
                display: block;
            }

            #HEADLINE155>.widget-content {
                opacity: 1;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 26px;
            }

            #HEADLINE145 {
                display: block;
            }

            #HEADLINE145>.widget-content {
                opacity: 1;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 30px;
            }

            #BOX221 {
                display: block;
            }

            #BOX221>.widget-content {
                background-color: rgba(140, 2, 0, 0.73);
                color: rgba(0, 0, 0, 1);
            }

            #SHAPE222 {
                display: block;
            }

            #SHAPE222>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE222>.widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #HEADLINE223 {
                display: block;
            }

            #HEADLINE223>.widget-content {
                opacity: 1;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 27px;
            }

            #PARAGRAPH224 {
                display: block;
            }

            #PARAGRAPH224>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                line-height: 22px;
            }

            #BOX217 {
                display: block;
            }

            #BOX217>.widget-content {
                background-color: rgba(140, 2, 0, 0.73);
                color: rgba(0, 0, 0, 1);
            }

            #SHAPE218 {
                display: block;
            }

            #SHAPE218>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
            }

            #SHAPE218>.widget-content svg {
                fill: rgba(255, 255, 255, 1);
            }

            #PARAGRAPH219 {
                display: block;
            }

            #PARAGRAPH219>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                opacity: 1;
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                line-height: 22px;
            }

            #HEADLINE220 {
                display: block;
            }

            #HEADLINE220>.widget-content {
                opacity: 1;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 27px;
            }

            #BOX175 {
                display: block;
            }

            #BOX175>.widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX175>.widget-content {
                border-radius: 5px;
            }

            #BOX175>.ladi-widget-overlay {
                border-radius: 5px;
            }

            #HEADLINE176 {
                display: block;
            }

            #HEADLINE176>.widget-content {
                color: rgba(38, 38, 38, 1);
                font-weight: 700;
                line-height: 25px;
            }

            #GROUP177 {
                display: block;
            }

            #GROUP177>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #GROUP178 {
                display: block;
            }

            #GROUP178>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BOX179 {
                display: block;
            }

            #BOX179>.widget-content {
                background-color: rgba(20, 20, 20, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX179>.widget-content {
                border-radius: 6px;
            }

            #BOX179>.ladi-widget-overlay {
                border-radius: 6px;
            }

            #HEADLINE180 {
                display: block;
            }

            #HEADLINE180>.widget-content {
                color: rgba(64, 64, 64, 1);
                font-weight: 700;
                line-height: 18px;
            }

            #HEADLINE181 {
                display: block;
            }

            #HEADLINE181>.widget-content {
                color: rgba(64, 64, 64, 1);
                font-weight: 700;
                line-height: 18px;
            }

            #BOX182 {
                display: block;
            }

            #BOX182>.widget-content {
                background-color: rgba(20, 20, 20, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX182>.widget-content {
                border-radius: 6px;
            }

            #BOX182>.ladi-widget-overlay {
                border-radius: 6px;
            }

            #BOX183 {
                display: block;
            }

            #BOX183>.widget-content {
                background-color: rgba(20, 20, 20, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX183>.widget-content {
                border-radius: 6px;
            }

            #BOX183>.ladi-widget-overlay {
                border-radius: 6px;
            }

            #HEADLINE184 {
                display: block;
            }

            #HEADLINE184>.widget-content {
                color: rgba(64, 64, 64, 1);
                font-weight: 700;
                line-height: 18px;
            }

            #HEADLINE185 {
                display: block;
            }

            #HEADLINE185>.widget-content {
                color: rgba(64, 64, 64, 1);
                font-weight: 700;
                line-height: 18px;
            }

            #BOX186 {
                display: block;
            }

            #BOX186>.widget-content {
                background-color: rgba(20, 20, 20, 1);
                color: rgba(0, 0, 0, 1);
            }

            #BOX186>.widget-content {
                border-radius: 6px;
            }

            #BOX186>.ladi-widget-overlay {
                border-radius: 6px;
            }

            #COUNTDOWN187 {
                display: block;
            }

            #COUNTDOWN187>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans', sans-serif;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 0px;
            }

            #GROUP188 {
                display: block;
            }

            #GROUP188>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #BUTTON189 {
                display: table;
            }

            #BUTTON189>.widget-content {
                background-color: #00aeef;
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: #ffffff;
                font-weight: 700;
                line-height: 22px;
            }

            #BUTTON189>.widget-content {
                border-radius: 2px;
            }

            #BUTTON189>.ladi-widget-overlay {
                border-radius: 2px;
            }

            #FORM190 {
                display: block;
            }

            #FORM190>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                color: rgba(0, 0, 0, 1);
            }

            #FORM190 .widget-content::-webkit-input-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #FORM190 .widget-content:-moz-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #FORM190 .widget-content::-moz-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #FORM190 .widget-content:-ms-input-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #FORM190 select.widget-content option:first-child {
                color: rgba(130, 130, 130, 1)
            }

            #FORM190 select.widget-content {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM191 {
                display: block;
            }

            #ITEM_FORM191>.widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: rgba(0, 0, 0, 1);
            }

            #ITEM_FORM191>.widget-content {
                border-radius: 5px;
                border-width: 1px;
                border-style: solid;
                border-color: rgba(194, 194, 194, 1);
            }

            #ITEM_FORM191>.ladi-widget-overlay {
                border-radius: 5px;
                border-width: 1px;
                border-style: solid;
                border-color: rgba(194, 194, 194, 1);
            }

            #ITEM_FORM191 .widget-content::-webkit-input-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM191 .widget-content:-moz-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM191 .widget-content::-moz-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM191 .widget-content:-ms-input-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM191 select.widget-content option:first-child {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM191 select.widget-content {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM192 {
                display: block;
            }

            #ITEM_FORM192>.widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: rgba(0, 0, 0, 1);
            }

            #ITEM_FORM192>.widget-content {
                border-radius: 5px;
                border-width: 1px;
                border-style: solid;
                border-color: rgba(194, 194, 194, 1);
            }

            #ITEM_FORM192>.ladi-widget-overlay {
                border-radius: 5px;
                border-width: 1px;
                border-style: solid;
                border-color: rgba(194, 194, 194, 1);
            }

            #ITEM_FORM192 .widget-content::-webkit-input-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM192 .widget-content:-moz-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM192 .widget-content::-moz-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM192 .widget-content:-ms-input-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM192 select.widget-content option:first-child {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM192 select.widget-content {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM193 {
                display: block;
            }

            #ITEM_FORM193>.widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: rgba(0, 0, 0, 1);
            }

            #ITEM_FORM193>.widget-content {
                border-radius: 5px;
                border-width: 1px;
                border-style: solid;
                border-color: rgba(194, 194, 194, 1);
            }

            #ITEM_FORM193>.ladi-widget-overlay {
                border-radius: 5px;
                border-width: 1px;
                border-style: solid;
                border-color: rgba(194, 194, 194, 1);
            }

            #ITEM_FORM193 .widget-content::-webkit-input-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM193 .widget-content:-moz-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM193 .widget-content::-moz-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM193 .widget-content:-ms-input-placeholder {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM193 select.widget-content option:first-child {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM193 select.widget-content {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM444 {
                display: block;
            }

            #ITEM_FORM444>.widget-content {
                background-color: rgba(255, 255, 255, 1);
                color: rgba(0, 0, 0, 1);
            }

            #ITEM_FORM444>.widget-content {
                border-radius: 5px;
                border-width: 1px;
                border-style: solid;
                border-color: rgba(194, 194, 194, 1);
            }

            #ITEM_FORM444>.ladi-widget-overlay {
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

            #ITEM_FORM444 select.widget-content option:first-child {
                color: rgba(130, 130, 130, 1)
            }

            #ITEM_FORM444 select.widget-content {
                color: rgba(130, 130, 130, 1)
            }

            #HEADLINE196 {
                display: block;
            }

            #HEADLINE196>.widget-content {
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 38px;
            }

            #PARAGRAPH197 {
                display: block;
            }

            #PARAGRAPH197>.widget-content {
                background-color: rgba(255, 255, 255, 0);
                font-family: 'Open Sans';
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                color: rgba(255, 255, 255, 1);
                font-weight: 700;
                line-height: 28px;
            }

            @media(max-width: 767px) {
                body {
                    position: relative;
                }
                #SECTION2 {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/season-1985856_1280-1512745393626.jpg");
                    background-color: rgba(255, 255, 255, 0.44);
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #SECTION2>.ladi-widget-overlay {
                    background-color: rgba(0, 0, 0, 0.64);
                }
                #SECTION2 {
                    width: 100%;
                    height: 833px;
                }
                #SECTION2 .container {}
                #SECTION2 {
                    background-image: linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/season-1985856_1280-1512745393626.jpg");
                    background-image: -o-linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/season-1985856_1280-1512745393626.jpg");
                    background-image: -ms-linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/season-1985856_1280-1512745393626.jpg");
                    background-image: -moz-linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/season-1985856_1280-1512745393626.jpg");
                    background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.64), rgba(0, 0, 0, 0.64)), url("https://static.ladipage.net/s500x1000/5a28c4f8c3f6592b3acabec8/season-1985856_1280-1512745393626.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP370 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP370>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP370 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP370 .container {
                    width: 375px;
                    height: 417px;
                    top: calc(100%-417px);
                }
                #POPUP370 {
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
                #POPUP366 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP366>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP366 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP366 .container {
                    width: 100%;
                    height: 384px;
                    top: calc(100%-384px);
                }
                #POPUP366 {
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
                #POPUP362 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP362>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP362 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP362 .container {
                    width: 100%;
                    height: 384px;
                    top: calc(100%-384px);
                }
                #POPUP362 {
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
                #POPUP358 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP358>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP358 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP358 .container {
                    width: 100%;
                    height: 384px;
                    top: calc(100%-384px);
                }
                #POPUP358 {
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
                #POPUP354 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP354>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP354 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP354 .container {
                    width: 100%;
                    height: 384px;
                    top: calc(100%-384px);
                }
                #POPUP354 {
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
                #POPUP346 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP346>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP346 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP346 .container {
                    width: 100%;
                    height: 384px;
                    top: calc(100%-384px);
                }
                #POPUP346 {
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
                #POPUP342 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP342>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP342 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP342 .container {
                    width: 100%;
                    height: 384px;
                    top: calc(100%-384px);
                }
                #POPUP342 {
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
                #POPUP338 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP338>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP338 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP338 .container {
                    width: 100%;
                    height: 384px;
                    top: calc(100%-384px);
                }
                #POPUP338 {
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
                #POPUP334 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP334>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP334 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP334 .container {
                    width: 100%;
                    height: 384px;
                    top: calc(100%-384px);
                }
                #POPUP334 {
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
                #POPUP330 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP330>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP330 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP330 .container {
                    width: 375px;
                    height: 1015px;
                    top: calc(100%-1015px);
                }
                #POPUP330 {
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
                #POPUP326 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP326>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP326 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP326 .container {
                    width: 375px;
                    height: 533px;
                    top: calc(100%-533px);
                }
                #POPUP326 {
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
                #POPUP322 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP322>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP322 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP322 .container {
                    width: 375px;
                    height: 1067px;
                    top: calc(100%-1067px);
                }
                #POPUP322 {
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
                #POPUP318 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP318>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP318 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP318 .container {
                    width: 100%;
                    height: 384px;
                    top: calc(100%-384px);
                }
                #POPUP318 {
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
                #SECTION3 {
                    display: block;
                    background-color: rgba(140, 2, 0, 1);
                }
                #SECTION3 {
                    width: 100%;
                    height: 1210.90625px;
                }
                #SECTION3 .container {}
                #SECTION3 {
                    background-image: none;
                }
                #SECTION11 {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x1200/5a28c4f8c3f6592b3acabec8/library-869061_1920-1513152153.jpg");
                    background-color: rgba(255, 255, 255, 0);
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #SECTION11>.ladi-widget-overlay {
                    background-color: rgba(6, 6, 6, 0.78);
                }
                #SECTION11 {
                    width: 100%;
                    height: 1050.4375px;
                }
                #SECTION11 .container {}
                #SECTION11 {
                    background-image: linear-gradient(rgba(6, 6, 6, 0.78), rgba(6, 6, 6, 0.78)), url("https://static.ladipage.net/s500x1200/5a28c4f8c3f6592b3acabec8/library-869061_1920-1513152153.jpg");
                    background-image: -o-linear-gradient(rgba(6, 6, 6, 0.78), rgba(6, 6, 6, 0.78)), url("https://static.ladipage.net/s500x1200/5a28c4f8c3f6592b3acabec8/library-869061_1920-1513152153.jpg");
                    background-image: -ms-linear-gradient(rgba(6, 6, 6, 0.78), rgba(6, 6, 6, 0.78)), url("https://static.ladipage.net/s500x1200/5a28c4f8c3f6592b3acabec8/library-869061_1920-1513152153.jpg");
                    background-image: -moz-linear-gradient(rgba(6, 6, 6, 0.78), rgba(6, 6, 6, 0.78)), url("https://static.ladipage.net/s500x1200/5a28c4f8c3f6592b3acabec8/library-869061_1920-1513152153.jpg");
                    background-image: -webkit-linear-gradient(rgba(6, 6, 6, 0.78), rgba(6, 6, 6, 0.78)), url("https://static.ladipage.net/s500x1200/5a28c4f8c3f6592b3acabec8/library-869061_1920-1513152153.jpg");
                    background-origin: content-box;
                    background-size: cover;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #SECTION33 {
                    display: block;
                    background-color: rgba(140, 2, 0, 1);
                }
                #SECTION33 {
                    width: 100%;
                    height: 842.9375px;
                }
                #SECTION33 .container {}
                #SECTION33 {
                    background-image: none;
                }
                #SECTION82 {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x1300/5a28c4f8c3f6592b3acabec8/computer-962971-1513659147.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top left;
                    background-repeat: no-repeat;
                }
                #SECTION82>.ladi-widget-overlay {
                    background-color: rgba(255, 255, 255, 0.29);
                }
                #SECTION82 {
                    width: 100%;
                    height: 1140.890625px;
                }
                #SECTION82 .container {}
                #SECTION82 {
                    background-image: linear-gradient(rgba(255, 255, 255, 0.29), rgba(255, 255, 255, 0.29)), url("https://static.ladipage.net/s500x1300/5a28c4f8c3f6592b3acabec8/computer-962971-1513659147.jpg");
                    background-image: -o-linear-gradient(rgba(255, 255, 255, 0.29), rgba(255, 255, 255, 0.29)), url("https://static.ladipage.net/s500x1300/5a28c4f8c3f6592b3acabec8/computer-962971-1513659147.jpg");
                    background-image: -ms-linear-gradient(rgba(255, 255, 255, 0.29), rgba(255, 255, 255, 0.29)), url("https://static.ladipage.net/s500x1300/5a28c4f8c3f6592b3acabec8/computer-962971-1513659147.jpg");
                    background-image: -moz-linear-gradient(rgba(255, 255, 255, 0.29), rgba(255, 255, 255, 0.29)), url("https://static.ladipage.net/s500x1300/5a28c4f8c3f6592b3acabec8/computer-962971-1513659147.jpg");
                    background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0.29), rgba(255, 255, 255, 0.29)), url("https://static.ladipage.net/s500x1300/5a28c4f8c3f6592b3acabec8/computer-962971-1513659147.jpg");
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top left;
                    background-repeat: no-repeat;
                }
                #SECTION63 {
                    display: block;
                    background-color: rgba(140, 2, 0, 1);
                }
                #SECTION63 {
                    width: 100%;
                    height: 843px;
                }
                #SECTION63 .container {}
                #SECTION63 {
                    background-image: none;
                }
                #SECTION423 {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/5a28c4f8c3f6592b3acabec8/6-1513741038.png");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: 100% auto;
                    background-attachment: scroll;
                    background-position: top left;
                    background-repeat: no-repeat;
                }
                #SECTION423>.ladi-widget-overlay {
                    background-color: rgba(255, 255, 255, 0);
                }
                #SECTION423 {
                    width: 100%;
                    height: 426.9586601257324px;
                }
                #SECTION423 .container {}
                #SECTION423 {
                    background-image: url("https://static.ladipage.net/s500x600/5a28c4f8c3f6592b3acabec8/6-1513741038.png");
                    background-origin: content-box;
                    background-size: 100% auto;
                    background-attachment: scroll;
                    background-position: top left;
                    background-repeat: no-repeat;
                }
                #POPUP305 .container {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x600/57b167c9ca57d39c18a1c57c/your-picture-here-1.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-origin: content-box;
                    background-size: auto 100%;
                    background-attachment: scroll;
                    background-position: top center;
                    background-repeat: no-repeat;
                }
                #POPUP305>.container .overlay-container-popup {
                    background-color: rgba(0, 0, 0, 0.83);
                }
                #POPUP305 {
                    width: 100%;
                    height: 100%;
                }
                #POPUP305 .container {
                    width: 100%;
                    height: 384px;
                    top: calc(100%-384px);
                }
                #POPUP305 {
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
                #SECTION127 {
                    display: block;
                    background-image: url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/bg-testimonial.jpg");
                    background-color: rgba(255, 255, 255, 1);
                    background-size: cover;
                    background-attachment: fixed;
                    background-position: top left;
                    background-repeat: no-repeat;
                }
                #SECTION127>.ladi-widget-overlay {
                    background-color: rgba(3, 3, 3, 0.62);
                }
                #SECTION127 {
                    width: 100%;
                    height: 950.015625px;
                }
                #SECTION127 .container {}
                #SECTION127 {
                    background-image: linear-gradient(rgba(3, 3, 3, 0.62), rgba(3, 3, 3, 0.62)), url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/bg-testimonial.jpg");
                    background-image: -o-linear-gradient(rgba(3, 3, 3, 0.62), rgba(3, 3, 3, 0.62)), url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/bg-testimonial.jpg");
                    background-image: -ms-linear-gradient(rgba(3, 3, 3, 0.62), rgba(3, 3, 3, 0.62)), url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/bg-testimonial.jpg");
                    background-image: -moz-linear-gradient(rgba(3, 3, 3, 0.62), rgba(3, 3, 3, 0.62)), url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/bg-testimonial.jpg");
                    background-image: -webkit-linear-gradient(rgba(3, 3, 3, 0.62), rgba(3, 3, 3, 0.62)), url("https://static.ladipage.net/s500x1100/57b167c9ca57d39c18a1c57c/bg-testimonial.jpg");
                    background-size: cover;
                    background-attachment: fixed;
                    background-position: center top;
                    background-repeat: no-repeat;
                }
                #SECTION174 {
                    display: block;
                    background-color: rgba(140, 2, 0, 1);
                }
                #SECTION174 {
                    width: 100%;
                    height: 717.40625px;
                }
                #SECTION174 .container {}
                #SECTION174 {
                    background-image: none;
                }
                #IMAGE225 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/s300x200/5a28c4f8c3f6592b3acabec8/logo-1517828858.png);
                }
                #IMAGE225 {
                    top: 20px;
                    left: 112.5px;
                    width: 150px;
                    height: 31.96875px;
                }
                #BOX226 {
                    top: 219px;
                    left: 3px;
                    width: 369px;
                    height: 587px;
                }
                #LISTOP228 {
                    top: 65px;
                    left: 0px;
                    width: 369px;
                    height: 215px;
                }
                #LISTOP228>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #LISTOP228>ol.widget-content li::before {
                    content: counter(linum, decimal);
                    width: 25px;
                    height: 25px;
                    font-size: 12.5px;
                    margin-right: 13px;
                    content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32"> <path d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.4-.188-2.794-.688-4.094L26.688 13.5c.2.8.313 1.6.313 2.5 0 6.1-4.9 11-11 11S5 22.1 5 16 9.9 5 16 5c3 0 5.694 1.194 7.594 3.094L25 6.688C22.7 4.388 19.5 3 16 3zm11.28 4.28L16 18.563l-4.28-4.28-1.44 1.437 5 5 .72.686.72-.687 12-12-1.44-1.44z"/> </svg>');
                    background-repeat: no-repeat;
                    position: relative;
                    top: 0px;
                    left: 0;
                }
                #LISTOP228>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP228>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #HEADLINE232 {
                    top: 11px;
                    left: 5px;
                    padding: 0px;
                    width: 369px;
                    height: 36px;
                }
                #HEADLINE232>.widget-content {
                    font-size: 29px;
                    text-align: left;
                }
                #BUTTON229 {
                    top: 527.976px;
                    left: 72.5px;
                    padding: 0px;
                    width: 225px;
                    height: 40px;
                }
                #BUTTON229>.widget-content {
                    font-size: 16px;
                    text-align: center;
                }
                #HEADLINE445 {
                    top: 439px;
                    left: 3.5px;
                    padding: 0px;
                    width: 369px;
                    height: 72px;
                }
                #HEADLINE445>.widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #HEADLINE446 {
                    top: 485.969px;
                    left: 82.5px;
                    padding: 0px;
                    width: 200px;
                    height: 24px;
                }
                #HEADLINE446>.widget-content {
                    font-size: 18px;
                    text-align: left;
                }
                #HEADLINE227 {
                    top: 61.9922px;
                    left: 10px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 132px;
                }
                #HEADLINE227>.widget-content {
                    font-size: 22px;
                    text-align: center;
                }
                #LISTOP373 {
                    top: 99px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP373>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP373>ol.widget-content li::before {
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
                #LISTOP373>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP373>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX371 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE372 {
                    top: 26.1211px;
                    left: 15px;
                    padding: 0px;
                    width: 355px;
                    height: 60px;
                }
                #HEADLINE372>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #BOX367 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE368 {
                    top: 24px;
                    left: 39px;
                    padding: 0px;
                    width: 355px;
                    height: 30px;
                }
                #HEADLINE368>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LISTOP369 {
                    top: 154px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP369>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP369>ol.widget-content li::before {
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
                #LISTOP369>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP369>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX363 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE364 {
                    top: 23px;
                    left: 6px;
                    padding: 0px;
                    width: 355px;
                    height: 30px;
                }
                #HEADLINE364>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LISTOP365 {
                    top: 154px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP365>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP365>ol.widget-content li::before {
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
                #LISTOP365>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP365>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX359 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE360 {
                    top: 24.1133px;
                    left: 7px;
                    padding: 0px;
                    width: 355px;
                    height: 30px;
                }
                #HEADLINE360>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LISTOP361 {
                    top: 154px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP361>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP361>ol.widget-content li::before {
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
                #LISTOP361>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP361>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX355 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE356 {
                    top: 10.9883px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 60px;
                }
                #HEADLINE356>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LISTOP357 {
                    top: 154px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP357>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP357>ol.widget-content li::before {
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
                #LISTOP357>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP357>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX347 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE348 {
                    top: 10.6133px;
                    left: 7px;
                    padding: 0px;
                    width: 355px;
                    height: 60px;
                }
                #HEADLINE348>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LISTOP349 {
                    top: 173.984px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP349>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP349>ol.widget-content li::before {
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
                #LISTOP349>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP349>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX343 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE344 {
                    top: 8.6133px;
                    left: 6px;
                    padding: 0px;
                    width: 355px;
                    height: 60px;
                }
                #HEADLINE344>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LISTOP345 {
                    top: 142px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP345>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP345>ol.widget-content li::before {
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
                #LISTOP345>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP345>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX339 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE340 {
                    top: 13.1133px;
                    left: 8px;
                    padding: 0px;
                    width: 355px;
                    height: 30px;
                }
                #HEADLINE340>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LISTOP341 {
                    top: 106.109px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP341>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP341>ol.widget-content li::before {
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
                #LISTOP341>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP341>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX335 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE336 {
                    top: 14.6133px;
                    left: 0px;
                    padding: 0px;
                    width: 355px;
                    height: 60px;
                }
                #HEADLINE336>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LISTOP337 {
                    top: 127px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP337>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP337>ol.widget-content li::before {
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
                #LISTOP337>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP337>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX331 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE332 {
                    top: 11.8555px;
                    left: 0px;
                    padding: 0px;
                    width: 355px;
                    height: 55px;
                }
                #HEADLINE332>.widget-content {
                    font-size: 22px;
                    text-align: left;
                }
                #LISTOP333 {
                    top: 103px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP333>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP333>ol.widget-content li::before {
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
                #LISTOP333>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP333>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #LISTOP329 {
                    top: 107px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP329>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP329>ol.widget-content li::before {
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
                #LISTOP329>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP329>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX327 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE328 {
                    top: 12.9883px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 30px;
                }
                #HEADLINE328>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LISTOP325 {
                    top: 109px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP325>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP325>ol.widget-content li::before {
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
                #LISTOP325>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP325>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX323 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE324 {
                    top: 20px;
                    left: 0px;
                    padding: 0px;
                    width: 355px;
                    height: 30px;
                }
                #HEADLINE324>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #BOX319 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE320 {
                    top: 11.1133px;
                    left: 2px;
                    padding: 0px;
                    width: 355px;
                    height: 30px;
                }
                #HEADLINE320>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #LISTOP321 {
                    top: 108px;
                    left: 10px;
                    width: 355px;
                    height: 260px;
                }
                #LISTOP321>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP321>ol.widget-content li::before {
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
                #LISTOP321>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP321>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX4 {
                    top: 128px;
                    left: 10px;
                    width: 354.96875px;
                    height: 718px;
                }
                #HEADLINE234 {
                    top: 59.9922px;
                    left: 12px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 45px;
                }
                #HEADLINE234>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #HEADLINE236 {
                    top: 260.484px;
                    left: 11px;
                    padding: 0px;
                    width: 343px;
                    height: 92px;
                }
                #HEADLINE236>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #HEADLINE237 {
                    top: 389.476px;
                    left: 14px;
                    padding: 0px;
                    width: 339px;
                    height: 92px;
                }
                #HEADLINE237>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #HEADLINE238 {
                    top: 528px;
                    left: 11px;
                    padding: 0px;
                    width: 336px;
                    height: 69px;
                }
                #HEADLINE238>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #HEADLINE239 {
                    top: 650.952px;
                    left: 20px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 45px;
                }
                #HEADLINE239>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #SHAPE241 {
                    top: 116.992px;
                    left: 163.496px;
                    width: 31.96875px;
                    height: 31.96875px;
                }
                #SHAPE244 {
                    top: 482.437px;
                    left: 166.496px;
                    width: 31.96875px;
                    height: 31.96875px;
                }
                #SHAPE243 {
                    top: 352.945px;
                    left: 166.5px;
                    width: 31.96875px;
                    height: 31.96875px;
                }
                #SHAPE242 {
                    top: 223.969px;
                    left: 165.5px;
                    width: 31.96875px;
                    height: 31.96875px;
                }
                #SHAPE240 {
                    top: 20px;
                    left: 164.496px;
                    width: 31.96875px;
                    height: 31.96875px;
                }
                #SHAPE245 {
                    top: 598.96px;
                    left: 164.496px;
                    width: 31.96875px;
                    height: 31.96875px;
                }
                #HEADLINE235 {
                    top: 152.953px;
                    left: 6.96875px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 69px;
                }
                #HEADLINE235>.widget-content {
                    font-size: 17px;
                    text-align: left;
                }
                #IMAGE6 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/s300x300/57b167c9ca57d39c18a1c57c/6687568-0-owl.png);
                }
                #IMAGE6 {
                    top: 884px;
                    left: 103.703px;
                    width: 171.578125px;
                    height: 132px;
                }
                #HEADLINE9 {
                    top: 1023.92px;
                    left: 70.5px;
                    padding: 0px;
                    width: 234px;
                    height: 39px;
                }
                #HEADLINE9>.widget-content {
                    font-size: 16px;
                    text-align: center;
                    line-height: 20px;
                }
                #HEADLINE10 {
                    top: 1085.92px;
                    left: 75.8789px;
                    padding: 0px;
                    width: 233px;
                    height: 44px;
                }
                #HEADLINE10>.widget-content {
                    font-size: 24px;
                    text-align: center;
                }
                #HEADLINE233 {
                    top: 20px;
                    left: 11.9688px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 72px;
                }
                #HEADLINE233>.widget-content {
                    font-size: 22px;
                    text-align: center;
                }
                #BOX28 {
                    top: 479.812px;
                    left: 10.6875px;
                    width: 354.96875px;
                    height: 504.96875px;
                }
                #HEADLINE29 {
                    top: 20px;
                    left: 0px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 30px;
                }
                #HEADLINE29>.widget-content {
                    font-size: 20px;
                    text-align: center;
                }
                #LINE30 {
                    top: 46.3594px;
                    left: 19.1563px;
                    width: 324px;
                    height: 24.96875px;
                }
                #LISTOP18 {
                    top: 83px;
                    left: 0px;
                    width: 354.96875px;
                    height: 279px;
                }
                #LISTOP18>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP18>ol.widget-content li::before {
                    content: counter(linum, decimal);
                    width: 23px;
                    height: 23px;
                    font-size: 11.5px;
                    color: rgba(56, 56, 56, 1);
                    margin-right: 7px;
                    content: url('data:image/svg+xml;utf8,<svg fill="rgba(56,56,56,1)" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24"> <path d="M9,5A3.5,3.5 0 0,1 12.5,8.5A3.5,3.5 0 0,1 9,12A3.5,3.5 0 0,1 5.5,8.5A3.5,3.5 0 0,1 9,5M9,13.75C12.87,13.75 16,15.32 16,17.25V19H2V17.25C2,15.32 5.13,13.75 9,13.75M17,12.66L14.25,9.66L15.41,8.5L17,10.09L20.59,6.5L21.75,7.91L17,12.66Z"/> </svg>');
                    background-repeat: no-repeat;
                    position: relative;
                    top: 0px;
                    left: 0;
                }
                #LISTOP18>ol.widget-content li {
                    margin-bottom: 5px;
                }
                #LISTOP18>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #IMAGE247 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/s500x500/5a28c4f8c3f6592b3acabec8/2-1517907429.png);
                }
                #IMAGE247 {
                    top: 38.109px;
                    left: 42.6953px;
                    width: 303.59375px;
                    height: 375px;
                }
                #BOX248 {
                    top: 383.422px;
                    left: 52.5px;
                    width: 279px;
                    height: 81.96875px;
                }
                #HEADLINE249 {
                    top: 12px;
                    left: 9px;
                    padding: 0px;
                    width: 270px;
                    height: 21.96875px;
                }
                #HEADLINE249>.widget-content {
                    font-size: 16px;
                    text-align: left;
                }
                #HEADLINE250 {
                    top: 41px;
                    left: 41px;
                    padding: 0px;
                    width: 199.96875px;
                    height: 30.96875px;
                }
                #HEADLINE250>.widget-content {
                    font-size: 25px;
                    text-align: left;
                }
                #HEADLINE35 {
                    top: 20px;
                    left: 10px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 60px;
                }
                #HEADLINE35>.widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #LINE49 {
                    top: 90px;
                    left: 40.5px;
                    width: 301px;
                    height: 24.96875px;
                }
                #LINE50 {
                    display: none!important;
                    top: 382.313px;
                    left: 11.4688px;
                    width: 354.97918701171875px;
                    height: 24.979167938232422px;
                }
                #LINE51 {
                    display: none!important;
                    top: 664.968px;
                    left: 10px;
                    width: 354.97918701171875px;
                    height: 24.979167938232422px;
                }
                #LINE58 {
                    display: none!important;
                    top: 671.984px;
                    left: 10px;
                    width: 354.97918701171875px;
                    height: 24.979167938232422px;
                }
                #LINE251 {
                    display: none!important;
                    top: 215.96800000000002px;
                    left: 9px;
                    width: 354.97918701171875px;
                    height: 24.979167938232422px;
                }
                #LINE252 {
                    display: none!important;
                    top: 625.968px;
                    left: 10px;
                    width: 354.97918701171875px;
                    height: 24.979167938232422px;
                }
                #SHAPE255 {
                    top: 234.976px;
                    left: 166.504px;
                    width: 49.96875px;
                    height: 49.96875px;
                }
                #HEADLINE256 {
                    top: 396.656px;
                    left: 8px;
                    padding: 0px;
                    width: 355px;
                    height: 75px;
                }
                #HEADLINE256>.widget-content {
                    font-size: 18px;
                    text-align: center;
                    line-height: 25px;
                }
                #HEADLINE257 {
                    top: 275.656px;
                    left: 17.5px;
                    padding: 0px;
                    width: 358px;
                    height: 75px;
                }
                #HEADLINE257>.widget-content {
                    font-size: 18px;
                    text-align: center;
                    line-height: 25px;
                }
                #SHAPE259 {
                    top: 357.984px;
                    left: 165.504px;
                    width: 49.96875px;
                    height: 49.96875px;
                }
                #HEADLINE39 {
                    top: 167.656px;
                    left: 10px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 48px;
                }
                #HEADLINE39>.widget-content {
                    font-size: 18px;
                    text-align: center;
                    line-height: 25px;
                }
                #SHAPE260 {
                    top: 124.984px;
                    left: 162.504px;
                    width: 49.96875px;
                    height: 49.96875px;
                }
                #HEADLINE54 {
                    top: 526.938px;
                    left: 12px;
                    padding: 0px;
                    width: 355px;
                    height: 44px;
                }
                #HEADLINE54>.widget-content {
                    font-size: 18px;
                    text-align: center;
                }
                #SHAPE261 {
                    top: 486.976px;
                    left: 163.504px;
                    width: 49.96875px;
                    height: 49.96875px;
                }
                #SHAPE262 {
                    top: 685.952px;
                    left: 164.504px;
                    width: 49.96875px;
                    height: 49.96875px;
                }
                #HEADLINE57 {
                    top: 723.944px;
                    left: 10px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 63px;
                }
                #HEADLINE57>.widget-content {
                    font-size: 18px;
                    text-align: center;
                }
                #SHAPE263 {
                    top: 582.968px;
                    left: 166.504px;
                    width: 49.96875px;
                    height: 49.96875px;
                }
                #HEADLINE62 {
                    top: 626.922px;
                    left: 13.5px;
                    padding: 0px;
                    width: 355px;
                    height: 44px;
                }
                #HEADLINE62>.widget-content {
                    font-size: 18px;
                    text-align: center;
                }
                #BOX279 {
                    top: 104.969px;
                    left: 8px;
                    width: 354.96875px;
                    height: 962px;
                }
                #HEADLINE265 {
                    top: 29.4922px;
                    left: 56.4844px;
                    padding: 0px;
                    width: 346px;
                    height: 26px;
                }
                #HEADLINE265>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE281 {
                    top: 60.75px;
                    left: 4.395px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #SHAPE282 {
                    top: 228.492px;
                    left: 4.395px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #HEADLINE266 {
                    top: 66.4922px;
                    left: 55.3594px;
                    padding: 0px;
                    width: 305.609375px;
                    height: 52px;
                }
                #HEADLINE266>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE267 {
                    top: 126.484px;
                    left: 55.3594px;
                    padding: 0px;
                    width: 289px;
                    height: 52px;
                }
                #HEADLINE267>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE283 {
                    top: 844.797px;
                    left: 0px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #HEADLINE268 {
                    top: 176.5px;
                    left: 55.5781px;
                    padding: 0px;
                    width: 284px;
                    height: 52px;
                }
                #HEADLINE268>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE284 {
                    top: 292.507px;
                    left: 4.895px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #HEADLINE269 {
                    top: 232.25px;
                    left: 55.5781px;
                    padding: 0px;
                    width: 274px;
                    height: 52px;
                }
                #HEADLINE269>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE270 {
                    top: 294.25px;
                    left: 55.6875px;
                    padding: 0px;
                    width: 288px;
                    height: 78px;
                }
                #HEADLINE270>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE285 {
                    top: 643.75px;
                    left: 0px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #SHAPE286 {
                    top: 379.25px;
                    left: 7.0825px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #HEADLINE271 {
                    top: 383.508px;
                    left: 56.375px;
                    padding: 0px;
                    width: 294px;
                    height: 52px;
                }
                #HEADLINE271>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE272 {
                    top: 442.477px;
                    left: 55px;
                    padding: 0px;
                    width: 291.578125px;
                    height: 52px;
                }
                #HEADLINE272>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE288 {
                    top: 564.75px;
                    left: 2px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #SHAPE287 {
                    top: 438.671px;
                    left: 6.395px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #HEADLINE274 {
                    top: 562.813px;
                    left: 59.1875px;
                    padding: 0px;
                    width: 291.390625px;
                    height: 78px;
                }
                #HEADLINE274>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE273 {
                    top: 503.859px;
                    left: 58.5313px;
                    padding: 0px;
                    width: 315px;
                    height: 50.65625px;
                }
                #HEADLINE273>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE278 {
                    top: 862.789px;
                    left: 48.49px;
                    padding: 0px;
                    width: 315px;
                    height: 25.328125px;
                }
                #HEADLINE278>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE277 {
                    top: 794.805px;
                    left: 52.99px;
                    padding: 0px;
                    width: 272px;
                    height: 52px;
                }
                #HEADLINE277>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE276 {
                    top: 720.125px;
                    left: 55.875px;
                    padding: 0px;
                    width: 277px;
                    height: 52px;
                }
                #HEADLINE276>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #SHAPE289 {
                    top: 19.75px;
                    left: 3px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #SHAPE291 {
                    top: 786.813px;
                    left: 0px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #SHAPE290 {
                    top: 112.484px;
                    left: 4px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #SHAPE292 {
                    top: 166.968px;
                    left: 4.35938px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #SHAPE294 {
                    top: 715.75px;
                    left: 6.5px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #SHAPE293 {
                    top: 501.406px;
                    left: 4px;
                    width: 49.1875px;
                    height: 54.46875px;
                }
                #HEADLINE275 {
                    top: 648.219px;
                    left: 57.1875px;
                    padding: 0px;
                    width: 315px;
                    height: 50.65625px;
                }
                #HEADLINE275>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #LINE100 {
                    top: 80px;
                    left: 54px;
                    width: 267px;
                    height: 24.96875px;
                }
                #HEADLINE101 {
                    top: 55px;
                    left: 10px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 30px;
                }
                #HEADLINE101>.widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #BOX386 {
                    top: 290.566px;
                    left: 13.5px;
                    width: 348px;
                    height: 135.96875px;
                }
                #PARAGRAPH387 {
                    top: 22.2383px;
                    left: 21.9922px;
                    padding: 0px;
                    width: 316.25px;
                    height: 25px;
                }
                #PARAGRAPH387>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #BOX384 {
                    top: 463.586px;
                    left: 13.5px;
                    width: 348px;
                    height: 135.96875px;
                }
                #BOX382 {
                    top: 117.586px;
                    left: 13.5px;
                    width: 348px;
                    height: 135.96875px;
                }
                #PARAGRAPH383 {
                    top: 22.2383px;
                    left: 21.9922px;
                    padding: 0px;
                    width: 316.25px;
                    height: 25px;
                }
                #PARAGRAPH383>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #PARAGRAPH375 {
                    top: 19.5078px;
                    left: 32px;
                    padding: 0px;
                    width: 300px;
                    height: 100px;
                }
                #PARAGRAPH375>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE65 {
                    top: 29px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 29px;
                }
                #HEADLINE65>.widget-content {
                    font-size: 24px;
                    text-align: center;
                    line-height: 29px;
                }
                #LINE69 {
                    top: 64px;
                    left: 40.5px;
                    width: 291.96875px;
                    height: 24.96875px;
                }
                #BOX374 {
                    top: 636.828px;
                    left: 15.5px;
                    width: 348px;
                    height: 135.96875px;
                }
                #PARAGRAPH376 {
                    top: 22.2383px;
                    left: 21.9922px;
                    padding: 0px;
                    width: 317px;
                    height: 104px;
                }
                #PARAGRAPH376>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #PARAGRAPH378 {
                    top: 323.063px;
                    left: 23.5px;
                    padding: 0px;
                    width: 328px;
                    height: 76px;
                }
                #PARAGRAPH378>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #PARAGRAPH377 {
                    top: 475.063px;
                    left: 34.4688px;
                    padding: 0px;
                    width: 311.96875px;
                    height: 76px;
                }
                #PARAGRAPH377>.widget-content {
                    font-size: 20px;
                    text-align: left;
                }
                #HEADLINE424 {
                    top: 7.979px;
                    left: 20.5px;
                    padding: 0px;
                    width: 355px;
                    height: 77.328125px;
                }
                #HEADLINE424>.widget-content {
                    font-size: 33px;
                    text-align: center;
                }
                #IMAGE441 .widget-content:first-child .lp-show-image:first-child {
                    width: 100%;
                    height: 100%;
                    background-position: center center;
                    background-size: cover;
                    background-image: url(https://static.ladipage.net/s500x500/5a28c4f8c3f6592b3acabec8/Apple-Mac-Computer-Screen-PNG-1513826485.png);
                }
                #IMAGE441 {
                    top: 94.297px;
                    left: 8.5px;
                    width: 355px;
                    height: 300.96875px;
                }
                #YOUTUBE442 {
                    top: 20px;
                    left: 0px;
                    width: 355px;
                    height: 177.22222222222223px;
                }
                #PARAGRAPH443 {
                    top: 227.872px;
                    left: 27.5px;
                    padding: 0px;
                    width: 320px;
                    height: 52px;
                }
                #PARAGRAPH443>.widget-content {
                    font-size: 20px;
                    text-align: center;
                }
                #LISTOP308 {
                    top: 123.313px;
                    left: 10.3535px;
                    width: 360.293px;
                    height: 215px;
                }
                #LISTOP308>.widget-content {
                    font-size: 14px;
                    text-align: left;
                }
                #LISTOP308>ol.widget-content li::before {
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
                #LISTOP308>ol.widget-content li {
                    margin-bottom: 15px;
                }
                #LISTOP308>ol.widget-content li:last-child {
                    margin-bottom: 0px;
                }
                #BOX306 {
                    top: 20px;
                    left: 10px;
                    width: 355px;
                    height: 74px;
                }
                #HEADLINE307 {
                    top: 22.7305px;
                    left: 0px;
                    padding: 0px;
                    width: 355px;
                    height: 30px;
                }
                #HEADLINE307>.widget-content {
                    font-size: 21px;
                    text-align: left;
                }
                #BOX143 {
                    top: 295px;
                    left: 10px;
                    width: 354.96875px;
                    height: 192.96875px;
                }
                #SHAPE132 {
                    top: 11px;
                    left: 152.5px;
                    width: 49.96875px;
                    height: 49.96875px;
                }
                #HEADLINE134 {
                    top: 63px;
                    left: 0px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 25.328125px;
                }
                #HEADLINE134>.widget-content {
                    font-size: 20px;
                    text-align: center;
                }
                #PARAGRAPH133 {
                    top: 91px;
                    left: 9.36459px;
                    padding: 0px;
                    width: 336.25px;
                    height: 64px;
                }
                #PARAGRAPH133>.widget-content {
                    font-size: 16px;
                    text-align: center;
                }
                #LINE144 {
                    top: 60px;
                    left: 54px;
                    width: 267px;
                    height: 24.96875px;
                }
                #BOX151 {
                    top: 94px;
                    left: 10px;
                    width: 354.96875px;
                    height: 192.96875px;
                }
                #SHAPE153 {
                    top: 5px;
                    left: 152.5px;
                    width: 49.96875px;
                    height: 49.96875px;
                }
                #PARAGRAPH154 {
                    top: 95px;
                    left: 9.36459px;
                    padding: 0px;
                    width: 336.25px;
                    height: 64px;
                }
                #PARAGRAPH154>.widget-content {
                    font-size: 16px;
                    text-align: center;
                }
                #HEADLINE155 {
                    top: 56px;
                    left: 0px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 25.328125px;
                }
                #HEADLINE155>.widget-content {
                    font-size: 20px;
                    text-align: center;
                }
                #HEADLINE145 {
                    top: 28px;
                    left: 10px;
                    padding: 0px;
                    width: 355px;
                    height: 29.328125px;
                }
                #HEADLINE145>.widget-content {
                    font-size: 30px;
                    text-align: center;
                }
                #BOX221 {
                    top: 500.016px;
                    left: 10px;
                    width: 354.96875px;
                    height: 186px;
                }
                #SHAPE222 {
                    top: -1px;
                    left: 152.5px;
                    width: 49.96875px;
                    height: 49.96875px;
                }
                #HEADLINE223 {
                    top: 50px;
                    left: -9.5px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 26.65625px;
                }
                #HEADLINE223>.widget-content {
                    font-size: 18px;
                    text-align: center;
                }
                #PARAGRAPH224 {
                    top: 87px;
                    left: 9.36459px;
                    padding: 0px;
                    width: 336.25px;
                    height: 42.65625px;
                }
                #PARAGRAPH224>.widget-content {
                    font-size: 16px;
                    text-align: center;
                }
                #BOX217 {
                    top: 702px;
                    left: 11.4063px;
                    width: 354.96875px;
                    height: 198px;
                }
                #SHAPE218 {
                    top: 9px;
                    left: 152.5px;
                    width: 49.96875px;
                    height: 49.96875px;
                }
                #PARAGRAPH219 {
                    top: 90px;
                    left: 9.48438px;
                    padding: 0px;
                    width: 336px;
                    height: 66px;
                }
                #PARAGRAPH219>.widget-content {
                    font-size: 16px;
                    text-align: center;
                }
                #HEADLINE220 {
                    top: 59px;
                    left: 0px;
                    padding: 0px;
                    width: 354.96875px;
                    height: 26.65625px;
                }
                #HEADLINE220>.widget-content {
                    font-size: 18px;
                    text-align: center;
                }
                #BOX175 {
                    top: 230.109px;
                    left: 21.5px;
                    width: 333px;
                    height: 469.390625px;
                }
                #HEADLINE176 {
                    top: 20px;
                    left: 19px;
                    padding: 0px;
                    width: 300px;
                    height: 43.96875px;
                }
                #HEADLINE176>.widget-content {
                    font-size: 18px;
                    text-align: center;
                    line-height: 22px;
                }
                #GROUP177 {
                    top: 74px;
                    left: 15px;
                    width: 297.96875px;
                    height: 97.96875px;
                }
                #GROUP178 {
                    top: 0px;
                    left: 1.8125px;
                    width: 294.3125px;
                    height: 97.96875px;
                }
                #BOX179 {
                    top: 28px;
                    left: 1px;
                    width: 68.4375px;
                    height: 69.96875px;
                }
                #HEADLINE180 {
                    top: 0px;
                    left: 6.25px;
                    padding: 0px;
                    width: 61.40625px;
                    height: 18px;
                }
                #HEADLINE180>.widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE181 {
                    top: 0px;
                    left: 81.2656px;
                    padding: 0px;
                    width: 61.40625px;
                    height: 18px;
                }
                #HEADLINE181>.widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #BOX182 {
                    top: 28px;
                    left: 76px;
                    width: 68.4375px;
                    height: 69.96875px;
                }
                #BOX183 {
                    top: 28px;
                    left: 226.891px;
                    width: 68.4375px;
                    height: 69.96875px;
                }
                #HEADLINE184 {
                    top: 0px;
                    left: 228.172px;
                    padding: 0px;
                    width: 61.40625px;
                    height: 18px;
                }
                #HEADLINE184>.widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #HEADLINE185 {
                    top: 0px;
                    left: 156.172px;
                    padding: 0px;
                    width: 61.40625px;
                    height: 18px;
                }
                #HEADLINE185>.widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #BOX186 {
                    top: 28px;
                    left: 150.875px;
                    width: 68.4375px;
                    height: 69.96875px;
                }
                #COUNTDOWN187 {
                    top: 40px;
                    left: 1px;
                    width: 297.96875px;
                    height: 42.96875px;
                }
                #COUNTDOWN187>.widget-content {
                    font-size: 36px;
                }
                #GROUP188 {
                    top: 182px;
                    left: 16px;
                    width: 301px;
                    height: 281.75px;
                }
                #BUTTON189 {
                    top: 229.75px;
                    left: 1px;
                    padding: 0px;
                    width: 300px;
                    height: 49px;
                }
                #BUTTON189>.widget-content {
                    font-size: 14px;
                    text-align: center;
                }
                #FORM190 {
                    top: 0px;
                    left: 2px;
                    width: 300px;
                    height: 163.953125px;
                }
                #FORM190>.widget-content {
                    font-size: 16px;
                }
                #ITEM_FORM191 {
                    top: 0px;
                    left: 0px;
                    width: 300px;
                    height: 46.125px;
                }
                #ITEM_FORM191>.widget-content {
                    font-size: 16px;
                }
                #ITEM_FORM192 {
                    top: 58.9268px;
                    left: 0px;
                    width: 300px;
                    height: 46.125px;
                }
                #ITEM_FORM192>.widget-content {
                    font-size: 16px;
                }
                #ITEM_FORM193 {
                    top: 117.854px;
                    left: 0px;
                    width: 300px;
                    height: 46.125px;
                }
                #ITEM_FORM193>.widget-content {
                    font-size: 16px;
                }
                #ITEM_FORM444 {
                    top: 173.984px;
                    left: 0px;
                    width: 300px;
                    height: 48px;
                }
                #HEADLINE196 {
                    top: 9.14063px;
                    left: 10.5px;
                    padding: 0px;
                    width: 355px;
                    height: 76px;
                }
                #HEADLINE196>.widget-content {
                    font-size: 26px;
                    text-align: center;
                }
                #PARAGRAPH197 {
                    top: 114.8594px;
                    left: 12px;
                    padding: 0px;
                    width: 355px;
                    height: 105px;
                }
                #PARAGRAPH197>.widget-content {
                    font-size: 20px;
                    text-align: center;
                    line-height: 21px;
                }
            }
        </style>
        <link rel="stylesheet" href="https://static.ladipage.net/googlefonts/css?family=Open+Sans:400,600,700|Montserrat:300,400,600,700|Roboto:300,400,700&amp;subset=latin-ext,vietnamese" media="none" onload="if (media != 'all')
                    media = 'all'">
        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '189614121625476');
            fbq('track', 'PageView');
        </script>
        <noscript>
    <img height="1" width="1" 
         src="https://www.facebook.com/tr?id=189614121625476&ev=PageView
         &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>

<body>
    <?php include_once("plugin/messenger.php") ?>

    <div class="ladi-wraper-page">
        <div id="SECTION2" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="IMAGE225" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/logo-1517828858.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX226" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="LISTOP228" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                            <ol class="widget-content">
                                <li color="" style="color: rgb(0, 0, 0);">Kế toán viên, kế toán nội bộ thực sự muốn trở thành kế toán tổng hợp</li>
                                <li color="" style="color: rgb(0, 0, 0);">&nbsp;Kế toán đã làm nhiều năm nhưng vẫn còn làm Kế toán viên, kế toán nội bộ</li>
                                <li color="" style="color: rgb(0, 0, 0);">&nbsp;Đã học kế toán thực hành nhưng chưa tự tay mình làm dược báo cáo tài chính, sổ sách&nbsp;</li>
                                <li color="" style="color: rgb(0, 0, 0);">&nbsp;Kế toán, đối tượng khác muốn thành thạo kỹ năng làm kế toán trên Excel</li>
                                <li color="" style="color: rgb(0, 0, 0);">Sinh viên kế toán cần định hướng phát triển lâu dài sau khi ra trường</li>
                                <li color="" style="color: rgb(0, 0, 0);">Sinh viên kế toán muốn tích lũy kinh nghiệm thực tế làm hành trang cho con đường phía trước</li>
                            </ol>
                        </div>
                        <div id="HEADLINE232" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">KHÓA HỌC PHÙ HỢP VỚI</h3>
                        </div>
                        <a id="BUTTON229" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION174" lp-action-type="page" lp-target="" href="#e_form_submit">
                            <span class="widget-content">ĐĂNG KÝ NGAY</span>
                        </a>
                        <div id="HEADLINE445" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">Đăng ký hôm nay để được giảm
                                <span style="color: rgba(255, 152, 0, 1);"><?php echo round((1 - $rs->price / $rs->price_root) * 100, 2) ?>%</span> và tặng khóa học
                                <span style="font-weight: bold; color: rgba(255, 152, 0, 1);" color="">Yoga và Excel</span> giá không đôi chỉ
                                <span style="font-weight: bold;"><?php echo substr($rs->price, 0, 3); ?>K</span>
                            </h5>
                        </div>
                        <div id="HEADLINE446" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h5 class="widget-content" lp-node="h5">(giá gốc <?php echo substr($rs->price_root, 0, 3); ?>K)</h5>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE227" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h1 class="widget-content" lp-node="h1">KHÓA HỌC THỰC HÀNH KẾ TOÁN TỔNG HỢP TRÊN PHẦN MỀM EXCEL</h1>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP370" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="LISTOP373" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 71: Hai bộ sách gối đầu giường của dân kế toán&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 72: Kênh học kê khai thuế không tốn phí</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 73: Những kênh giúp nâng cao, mở rộng kiến thức hiệu quả</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 74: Chiến lược trở thành kế toán thuế cho người đang làm kế toán nội bộ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 75: Chiến lược quay lại chinh phục doanh nghiệp lớn</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 76: Chiến lược phát triển 10 năm cho kế toán mới ra trường</li>
                    </ol>
                </div>
                <div id="BOX371" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE372" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">CHƯƠNG X: Chiến lược phát triển dành cho kế toán chưa có kinh nghiệm</h3>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP366" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX367" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE368" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG XIV: Tổng kết</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP369" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 84: Báo cáo kết quả kinh doanh nội bộ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 85: Lời chia sẽ từ giảng viên</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP362" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX363" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE364" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG XIII: Quỳ trình kế toán&nbsp;</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP365" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 82: Quỳ trình kế toán cơ bản</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 83: Những việc quan trọng cần làm trong kỳ và cuối kỳ&nbsp;</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP358" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX359" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE360" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG XII: Cách lưu hóa đơn</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP361" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 80: Lưu hóa đơn đối với công ty lớn</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 81: Lưu hóa đơn đối với công ty vừa và nhỏ</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP354" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX355" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE356" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG XI: Một số thủ thủ thuật excel liên quan</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP357" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 77: Set vùng in</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 78: Hai cách ẩn ô có giá trị bằng Zero</li>
                        <li color="" style="color: rgb(255, 255, 255);">&nbsp;Bài 79: Đánh số trang tự động</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP346" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX347" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE348" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG IX: Thuế Thu nhập doanh nghiệp tạm tính</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP349" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 69: Xác định số tiền thuế thu nhập doanh nghiệp tạm tính</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 70: Xác định số tiền thuế thu nhập doanh nghiệp cần tạm nộp trong kỳ</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP342" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX343" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE344" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG VIII: Quy trình Kê khai và nộp thuế qua internet</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP345" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 65: Kê khai thuế qua website của Tổng Cục thuế</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 66: Tải và cài đặt phần mềm kê khai thuế</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 67: Quy trình kê khai qua HTKK và nộp qua website của Cục thuế</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 68: Hướng dẫn Lập giấy nộp tiền và nộp thuế qua website của Cục thuế</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP338" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX339" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE340" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG VII: Làm Sổ cái và sổ chi tiết</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP341" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 58: Tổng quan về sổ cái và các bước chuẩn bị&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 59: Lập công thức cho tiêu thức Số tiền</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 60: Lập công thức cho tiêu thức Tài khoản đối ứng</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 61: Lập công thức cho tiêu thức Diễn giải, ngày chứng từ, số chứng từ, ngày tháng ghi sổ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 62: Hoàn thiện sổ cái từ tháng 1 đến tháng 12</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 63: Hoàn thiện sổ cái năm</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 64: Thực hành làm sổ chi tiết tài khoản</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP334" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX335" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE336" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG VI: Tờ khai Quyết toán thuế thu nhập doanh nghiệp</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP337" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 54: Phụ lục chuyển lỗ và các phụ lục khác phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 55: Phụ lục chuyển lỗ và các phụ lục khác phần 2</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 56: Lập Tờ khai quyết toán thuế thu nhập doanh nghiệp phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 57: Lập Tờ khai quyết toán thuế thu nhập doanh nghiệp phần 2</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP330" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX331" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE332" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG V: Lập và kiểm tra&nbsp;
                                <br>Báo cáo tài chính</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP333" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 38: Lên Bảng cân đối tài khoản - Phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 39: Lên Bảng cân đối tài khoản - phần 2</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 40: Lên Bảng cân đối kế toán - phần Tài Sản - Phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 41: Lên Bảng cân đối kế toán - phần Tài Sản - Phần 2</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 42: Lên Bảng cân đối kế toán - phần Nguồn vốn - Phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 43: Lên Bảng cân đối kế toán - phần Nguồn vốn - Phần 2</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 44: Hướng dẫn lập bảng cân đối kế toán nâng cao - Phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 45: Hướng dẫn lập bảng cân đối kế toán nâng cao - Phần 2</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 46: Lên Báo cáo kết quả hoạt động kinh doanh - Phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 47: Lên Báo cáo kết quả hoạt động kinh doanh - Phần 2</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 48: Kiểm tra lại báo cáo kết quả hoạt động kinh doanh</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 49: Lên Báo cáo lưu chuyển tiền tệ phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 50: Lên Báo cáo lưu chuyển tiền tệ phần 2</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 51: Lên Báo cáo lưu chuyển tiền tệ phần 3&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 52: Thuyết minh báo cáo tài chính phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 53: Thuyết minh báo cáo tài chính phần 2</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP326" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="LISTOP329" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 28: Tổng quan về sổ Nhật ký chung</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 29: Các bước cần chuẩn bị để lên sổ Nhật ký chung</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 30: Hướng dẫn sử dụng hàm OFFSET&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 31: Lập công thức cho tiêu thức SỐ TIỀN NỢ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 32: Lập công thức cho tiêu thức SỐ TIỀN CÓ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 33: Lập công thức cho cột phụ: Mã xử lý</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 34: Lập công thức cho tiêu thức Số hiệu tài khoản&nbsp;</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 35: Lập công thức cho tiêu thức Đã ghi sổ cá</li>
                        <li color="" style="color: rgb(255, 255, 255);">iBài 36: Lập công thức cho tiêu thức Diễn giải</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 37: Lập công thức cho tiêu thức ngày chứng từ, số hiệu chứng từ. Hoàn thiện Nhật ký chung</li>
                    </ol>
                </div>
                <div id="BOX327" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE328" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG IV: Lên sổ Nhật ký chung</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP322" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="LISTOP325" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 12: Hướng dẫn sử dụng hàm SUMIF làm công thức kết chuyển cuối kỳ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 13: Tổng hợp công cụ dụng cụ sang chi phí trả trước phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 14: Tổng hợp công cụ dụng cụ sang chi phí trả trước phần 2</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 15: Kết chuyển thuế môn bài vào chi phí quản lý</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 16: Kết chuyển thuế GTGT đầu vào với đầu ra</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 17: Chênh lệch tỷ giá tiền gửi có gốc ngoại tệ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 18: Thực hành kết chuyển lãi, lỗ tỷ giá</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 19: Thực hành tổng hợp chi phí nguyên vật liệu trực tiếp phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 20: Thực hành tổng hợp chi phí nguyên vật liệu trực tiếp phần 2</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 21: Kết chuyển chi phí tiền lương vào chi phí sản xuất</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 22: Tổng hợp chi chí sản xuất kinh doanh dở dang</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 23: Xác định giá vốn</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 24: Kết chuyển doanh thu sang Xác định kết quả kinh doanh</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 25: Kết chuyển chi phí sang xác định kết quả kinh doanh</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 26: Xác định kết quả kinh doanh lãi, lỗ phần 1</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 27: Xác định kết quả kinh doanh lãi, lỗ phần 2</li>
                    </ol>
                </div>
                <div id="BOX323" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE324" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">PHẦN III: KẾT CHUYỂN CUỐI KỲ</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP318" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="BOX319" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE320" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG II: Những bút toán cần lưu ý</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LISTOP321" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 6: 4 Nguyên tắc cân đối khi hạch toán cần nhớ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 7: Cơ sở hạch toán tài khoản 214; 242; 3383; 3384; 3386</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 8: Bảng lương và hạch toán tiền lương</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 9: Hạch toán kết chuyển tài khoản 4212 sang 4211</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 10: Đánh giá chênh lệch tỷ giá tài khoản tiền gửi có gốc ngoại tệ</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 11: Hạch toán tài khoản 8211</li>
                    </ol>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION3" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX4" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE234" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Làm nhiều năm ở vị trí kế toán nội bộ ... ngại thay đổi</h3>
                        </div>
                        <div id="HEADLINE236" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Bạn đã làm kế toán nội bộ nhiều năm nên đã quên kiến thức hạch toán, càng không biết lập và kiểm tra báo cáo tài chính, sổ sách, quyết toán cuối năm</h3>
                        </div>
                        <div id="HEADLINE237" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Đã học kế toán thực hành nhưng chưa tự tay làm được báo cáo tài chính sổ sách, chưa biết kiểm tra lại nên bạn không tự tin</h3>
                        </div>
                        <div id="HEADLINE238" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Nhà tuyển dụng luôn ưu tiên người đã có kinh nghiệm và bạn chưa biết cách vượt qua</h3>
                        </div>
                        <div id="HEADLINE239" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Sinh viên mới ra trường thiếu kinh nghiệm thực tế</h3>
                        </div>
                        <div id="SHAPE241" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,234,6,1)">
                                <path d="M20,16V10H22V16A2,2 0 0,1 20,18H8C6.89,18 6,17.1 6,16V4C6,2.89 6.89,2 8,2H16V4H8V16H20M10.91,7.08L14,10.17L20.59,3.58L22,5L14,13L9.5,8.5L10.91,7.08M16,20V22H4A2,2 0 0,1 2,20V7H4V20H16Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE244" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,234,6,1)">
                                <path d="M20,16V10H22V16A2,2 0 0,1 20,18H8C6.89,18 6,17.1 6,16V4C6,2.89 6.89,2 8,2H16V4H8V16H20M10.91,7.08L14,10.17L20.59,3.58L22,5L14,13L9.5,8.5L10.91,7.08M16,20V22H4A2,2 0 0,1 2,20V7H4V20H16Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE243" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,234,6,1)">
                                <path d="M20,16V10H22V16A2,2 0 0,1 20,18H8C6.89,18 6,17.1 6,16V4C6,2.89 6.89,2 8,2H16V4H8V16H20M10.91,7.08L14,10.17L20.59,3.58L22,5L14,13L9.5,8.5L10.91,7.08M16,20V22H4A2,2 0 0,1 2,20V7H4V20H16Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE242" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,234,6,1)">
                                <path d="M20,16V10H22V16A2,2 0 0,1 20,18H8C6.89,18 6,17.1 6,16V4C6,2.89 6.89,2 8,2H16V4H8V16H20M10.91,7.08L14,10.17L20.59,3.58L22,5L14,13L9.5,8.5L10.91,7.08M16,20V22H4A2,2 0 0,1 2,20V7H4V20H16Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE240" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,234,6,1)">
                                <path d="M20,16V10H22V16A2,2 0 0,1 20,18H8C6.89,18 6,17.1 6,16V4C6,2.89 6.89,2 8,2H16V4H8V16H20M10.91,7.08L14,10.17L20.59,3.58L22,5L14,13L9.5,8.5L10.91,7.08M16,20V22H4A2,2 0 0,1 2,20V7H4V20H16Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE245" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,234,6,1)">
                                <path d="M20,16V10H22V16A2,2 0 0,1 20,18H8C6.89,18 6,17.1 6,16V4C6,2.89 6.89,2 8,2H16V4H8V16H20M10.91,7.08L14,10.17L20.59,3.58L22,5L14,13L9.5,8.5L10.91,7.08M16,20V22H4A2,2 0 0,1 2,20V7H4V20H16Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE235" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Bạn bế tắc, không biết bắt đầu từ đâu để trở thành&nbsp;kế toán tổng hợp
                                <br>kế toán thuế&nbsp;</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE6" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/57b167c9ca57d39c18a1c57c/6687568-0-owl.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE9" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">"Chúng tôi luôn nỗ lực hết mình để phục vụ khách hàng"</h6>
                </div>
                <div id="HEADLINE10" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">- Hãy để chúng tôi được phục vụ bạn -</h6>
                </div>
                <div id="HEADLINE233" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">LÝ DO BẠN CHƯA TRỞ THÀNH KẾ TOÁN TỔNG HỢP</h2>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION11" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX28" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE29" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">Giảng viên đồng hành cùng bạn</h3>
                        </div>
                        <div id="LINE30" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                            <div class="widget-content">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div id="LISTOP18" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                            <ol class="widget-content">
                                <li>10 năm kinh nghiệm là kế toán, là kế toán tổng hợp, kế toán trưởng các công ty may mặc, bệnh viện, trường học; làm kế toán dịch vụ cho các công ty vừa và nhỏ.&nbsp;&nbsp;</li>
                                <li>Thành công với nhiều chương trình hướng dẫn làm kế toán trên excel miễn phí như khóa Offline Lập và kiểm tra Báo cáo tài chính và cả có phí như Thực hành làm kế toán tổng hợp trên excle&nbsp;</li>
                                <li>Diễn giả đồng thời là nhà tổ chức chương trình THAY ĐỔI TƯ DUY - THÀNH CÔNG VỚI NGHỀ KẾ TOÁN, giúp tạo động lực và định hướng cho kế toán trẻ</li>
                                <li>Chủ nhân chương trình "Kế toán trên Excel" theo thông tư 133 của ông đã được ra mắt năm 2017 và nhận được sự đánh giá cao về chuyên môn và cả tính ứng dụng của các đồng nghiệp.&nbsp;</li>
                            </ol>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="IMAGE247" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/2-1517907429.png"></div>
                        <div class="lp-show-image"></div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX248" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE249" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHUYÊN GIA KẾ TOÁN TỔNG HỢP</h3>
                        </div>
                        <div id="HEADLINE250" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">PHẠM VĂN HỌC</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION33" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="HEADLINE35" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">Bạn học được gì từ khóa học này?</h3>
                </div>
                <div id="LINE49" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="LINE50" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="LINE51" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="LINE58" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="LINE251" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="LINE252" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="SHAPE255" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                    <div class="widget-content">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                        </svg>
                    </div>
                </div>
                <div id="HEADLINE256" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Thành thạo công thức excel để lập công thức kết chuyển cuối kỳ, lên bảng cân đối tài khoản</h6>
                </div>
                <div id="HEADLINE257" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Thành thạo công thức excel để lên sổ cái, sổ chi tiết một cách đơn giản, chính xác nhất</h6>
                </div>
                <div id="SHAPE259" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                    <div class="widget-content">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                        </svg>
                    </div>
                </div>
                <div id="HEADLINE39" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Thành thạo kỹ năng làm kế toán tổng hợp. Đặc biệt là làm kế toán trên Excel</h6>
                </div>
                <div id="SHAPE260" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                    <div class="widget-content">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                        </svg>
                    </div>
                </div>
                <div id="HEADLINE54" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Biết làm kế toán trên Excel với cả 2 hình thức phổ biến là NKC và CTGS</h6>
                </div>
                <div id="SHAPE261" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                    <div class="widget-content">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                        </svg>
                    </div>
                </div>
                <div id="SHAPE262" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                    <div class="widget-content">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                        </svg>
                    </div>
                </div>
                <div id="HEADLINE57" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Tìm thấy định hướng phù hợp để nhanh chóng trở thành kế toán tổng hợp khi chưa có nhiều kinh nghiệm</h6>
                </div>
                <div id="SHAPE263" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                    <div class="widget-content">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                        </svg>
                    </div>
                </div>
                <div id="HEADLINE62" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Lập và kiểm tra Báo cáo tài chính dễ dàng bằng công thức Excel đơn giản</h6>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION82" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX279" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block" lp-action-link="POPUP299" lp-action-type="popup" lp-target="" href="">
                    <div class="widget-content">
                        <div id="HEADLINE265" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP305" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG I: Chứng từ ghi sổ</h3>
                        </div>
                        <div id="SHAPE281" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE282" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE266" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP318" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG II: Những bút toán cần lưu ý</h3>
                        </div>
                        <div id="HEADLINE267" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP322" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG III: Kết chuyển cuối kỳ</h3>
                        </div>
                        <div id="SHAPE283" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE268" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP326" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG IV: Lên sổ Nhật ký chung</h3>
                        </div>
                        <div id="SHAPE284" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE269" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP330" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG V: Lập và kiểm tra Báo cáo tài chính</h3>
                        </div>
                        <div id="HEADLINE270" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP334" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG VI: Tờ khai Quyết toán thuế thu nhập doanh nghiệp</h3>
                        </div>
                        <div id="SHAPE285" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE286" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE271" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP338" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG VII: Làm Sổ cái và sổ chi tiết</h3>
                        </div>
                        <div id="HEADLINE272" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP342" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG VIII: Quy trình Kê khai và nộp thuế qua internet</h3>
                        </div>
                        <div id="SHAPE288" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE287" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE274" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP370" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG X: Chiến lược phát triển dành cho kế toán chưa có kinh nghiệm</h3>
                        </div>
                        <div id="HEADLINE273" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP346" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG IX: Thuế Thu nhập doanh nghiệp tạm tính</h3>
                        </div>
                        <div id="HEADLINE278" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP366" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG XIV: Tổng kết</h3>
                        </div>
                        <div id="HEADLINE277" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP362" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG XIII: Quỳ trình kế toán&nbsp;</h3>
                        </div>
                        <div id="HEADLINE276" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP358" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG XII:&nbsp; Cách lưu hóa đơn</h3>
                        </div>
                        <div id="SHAPE289" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE291" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE290" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE292" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE294" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="SHAPE293" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(243,225,33,1)">
                                <path d="M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE275" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP354" lp-action-type="popup" lp-target="" href="">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG XI: Một số thủ thủ thuật excel liên quan</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE100" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="HEADLINE101" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">LỘ TRÌNH KHÓA HỌC</h3>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION63" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX386" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH387" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p"></p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX384" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content"></div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX382" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH383" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p"></p>
                        </div>
                        <div id="PARAGRAPH375" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Được tư vấn, hỗ trợ nghiệp vụ kế toán sau khóa học mãi mãi qua điện thoại, email, Facebook ...&nbsp;</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE65" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">LỢI ÍCH ĐI KÈM KHÓA HỌC</h3>
                </div>
                <div id="LINE69" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="BOX374" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="PARAGRAPH376" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Thực hành thực tế trên excel giúp bạn hiểu quy trình làm các báo cáo, sổ sách, hiểu bản chất các con số&nbsp;</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="PARAGRAPH378" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <p class="widget-content" lp-node="p">Có luôn File kế toán excel theo TT 200 để sử dụng vào công việc mà không phải mua thêm.&nbsp;</p>
                </div>
                <div id="PARAGRAPH377" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <p class="widget-content" lp-node="p">Số liệu thực hành: Số liệu thực tế 1 năm của công ty sản xuất. Và các file tham khảo liên quan</p>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION423" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="HEADLINE424" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">KHÁCH HÀNG NÓI GÌ VỀ LAKITA</h2>
                </div>
                <div id="IMAGE441" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                    <div class="widget-content">
                        <div class="lp-show-image" alt="https://static.ladipage.net/5a28c4f8c3f6592b3acabec8/Apple-Mac-Computer-Screen-PNG-1513826485.png"></div>
                        <div class="lp-show-image"></div>
                        <div id="YOUTUBE442" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="0" lp-display="block">
                            <iframe class="widget-content" src="https://www.youtube.com/embed/oAit5IWP-Qk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="PARAGRAPH443" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <p class="widget-content" lp-node="p">"Chúng tôi luôn nỗ lực hết mình để làm hài lòng khách hàng"</p>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="POPUP305" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
            <div class="container">
                <div class="overlay-container-popup"></div>
                <div id="LISTOP308" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                    <ol class="widget-content">
                        <li color="" style="color: rgb(255, 255, 255);">Bài 1: Tôi đã học kế toán thực hành như thế nào
                            <br>
                        </li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 2: Hướng dẫn cách thức thực hành</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 3: Hướng dẫn xây dựng Hệ thống tài khoản</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 4: Cách thức tổ chức hạch toán trên excel</li>
                        <li color="" style="color: rgb(255, 255, 255);">Bài 5: Bí quyết giúp Bảng cân đối tài khoản luôn cân bằng</li>
                    </ol>
                </div>
                <div id="BOX306" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE307" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h3 class="widget-content" lp-node="h3">CHƯƠNG I: CHỨNG TỪ GHI SỔ</h3>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION127" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX143" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="SHAPE132" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg [removed]="" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(255,255,255,1)">
                                <path d="M4 4v20h7v-2H6V6h12v1h2V4H4zm8 4v20h16V8H12zm2 2h12v16H14V10z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE134" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">KỸ NĂNG</h4>
                        </div>
                        <div id="PARAGRAPH133" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Tự tay bạn sẽ làm được công thức kết chuyển, lên báo tài chính, sổ sách bằng công thức excel thật dễ dàng</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="LINE144" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                    <div class="widget-content">
                        <div class="line"></div>
                    </div>
                </div>
                <div id="BOX151" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="SHAPE153" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                <path d="M12,11A1,1 0 0,0 11,12A1,1 0 0,0 12,13A1,1 0 0,0 13,12A1,1 0 0,0 12,11M12,16.5C9.5,16.5 7.5,14.5 7.5,12C7.5,9.5 9.5,7.5 12,7.5C14.5,7.5 16.5,9.5 16.5,12C16.5,14.5 14.5,16.5 12,16.5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="PARAGRAPH154" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Được hoàn tiền 100% nếu không hài lòng với bất kỳ lý do gì sau 60 ngày kể từ ngày bắt đầu học</p>
                        </div>
                        <div id="HEADLINE155" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">HOÀN TIỀN NẾU KHÔNG HÀI LÒNG</h4>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE145" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h3 class="widget-content" lp-node="h3">CHÚNG TÔI CAM KẾT</h3>
                </div>
                <div id="BOX221" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="SHAPE222" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg [removed]="" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(255,255,255,1)">
                                <path d="M4 4v20h7v-2H6V6h12v1h2V4H4zm8 4v20h16V8H12zm2 2h12v16H14V10z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="HEADLINE223" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">HỖ TRỢ</h4>
                        </div>
                        <div id="PARAGRAPH224" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Hỗ trợ thắc mắc về bài học và công việc của học viên hết khả năng của mình</p>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="BOX217" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="SHAPE218" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                            <div class="widget-content">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                <path d="M12,11A1,1 0 0,0 11,12A1,1 0 0,0 12,13A1,1 0 0,0 13,12A1,1 0 0,0 12,11M12,16.5C9.5,16.5 7.5,14.5 7.5,12C7.5,9.5 9.5,7.5 12,7.5C14.5,7.5 16.5,9.5 16.5,12C16.5,14.5 14.5,16.5 12,16.5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div id="PARAGRAPH219" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                            <p class="widget-content" lp-node="p">Cam kết cập nhật tất cả các thông tư chính sách mới nhất cho tất cả học viên của Lakita một cách tự động hoàn toàn miễn phí</p>
                        </div>
                        <div id="HEADLINE220" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">LUÔN CẬP NHẬT</h4>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="SECTION174" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
            <div class="container">
                <div id="BOX175" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                    <div class="widget-content">
                        <div id="HEADLINE176" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                            <h4 class="widget-content" lp-node="h4">Nhanh tay lên!
                                <br>Bạn muốn nhận được Ưu đãi tốt</h4>
                        </div>
                        <div id="GROUP177" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                            <div class="widget-content">
                                <div id="GROUP178" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block" lp-group="GROUP177">
                                    <div class="widget-content">
                                        <div id="BOX179" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP178" lp-display="block">
                                            <div class="widget-content"></div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                        <div id="HEADLINE180" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP178" lp-display="block">
                                            <h6 class="widget-content" lp-node="h6">NGÀY</h6>
                                        </div>
                                        <div id="HEADLINE181" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP178" lp-display="block">
                                            <h6 class="widget-content" lp-node="h6">GIỜ</h6>
                                        </div>
                                        <div id="BOX182" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP178" lp-display="block">
                                            <div class="widget-content"></div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                        <div id="BOX183" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP178" lp-display="block">
                                            <div class="widget-content"></div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                        <div id="HEADLINE184" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP178" lp-display="block">
                                            <h6 class="widget-content" lp-node="h6">GIÂY</h6>
                                        </div>
                                        <div id="HEADLINE185" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP178" lp-display="block">
                                            <h6 class="widget-content" lp-node="h6">PHÚT</h6>
                                        </div>
                                        <div id="BOX186" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP178" lp-display="block">
                                            <div class="widget-content"></div>
                                            <div class="ladi-widget-overlay"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="COUNTDOWN187" class="widget-element widget-snap" lp-type="countdown" lp-group="GROUP177" lp-display="block">
                                    <div class="widget-content">
                                        <div>
                                            <span class="num-day" >0</span>
                                        </div>
                                        <div>
                                            <span class="num-hour" >14</span>
                                        </div>
                                        <div>
                                            <span class="num-minute">2</span>
                                        </div>
                                        <div>
                                            <span class="num-second">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="GROUP188" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                            <div class="widget-content">

                                <div id="FORM190" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-vt-item="[{&quot;id&quot;:&quot;ITEM_FORM191&quot;,&quot;vt&quot;:0,&quot;name&quot;:&quot;name&quot;,&quot;valueName&quot;:&quot;name&quot;,&quot;$$hashKey&quot;:&quot;object:8880&quot;},{&quot;id&quot;:&quot;ITEM_FORM192&quot;,&quot;vt&quot;:1,&quot;name&quot;:&quot;email&quot;,&quot;valueName&quot;:&quot;email&quot;,&quot;$$hashKey&quot;:&quot;object:8881&quot;},{&quot;id&quot;:&quot;ITEM_FORM193&quot;,&quot;vt&quot;:2,&quot;name&quot;:&quot;phone&quot;,&quot;valueName&quot;:&quot;phone&quot;,&quot;$$hashKey&quot;:&quot;object:8882&quot;},{&quot;id&quot;:&quot;ITEM_FORM444&quot;,&quot;vt&quot;:3,&quot;name&quot;:&quot;street&quot;,&quot;valueName&quot;:&quot;street&quot;,&quot;$$hashKey&quot;:&quot;object:8883&quot;}]"
                                     lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-ss-f="[{&quot;name&quot;:&quot;name&quot;,&quot;value&quot;:&quot;name&quot;},{&quot;name&quot;:&quot;email&quot;,&quot;value&quot;:&quot;email&quot;},{&quot;name&quot;:&quot;phone&quot;,&quot;value&quot;:&quot;phone&quot;},{&quot;name&quot;:&quot;street&quot;,&quot;value&quot;:&quot;street&quot;}]"
                                     lp-group="GROUP188" lp-display="block">
                                    <form class="widget-content LeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2" method="POST"  name="fr_register" action="<?php echo $code_ladingpage . '/'; ?>thank-you.html">
                                        <div id="ITEM_FORM191" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                            <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                        </div>
                                        <div id="ITEM_FORM192" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                            <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                        </div>
                                        <div id="ITEM_FORM193" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                            <input class="widget-content" type="tel" pattern="((\+[1-9]{1,4}[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9 \-]{6,15}?$" required="required" placeholder="Nhập Số điện thoại" name="phone" lp-label="Điện thoại">
                                        </div>
                                        <div id="ITEM_FORM444" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                            <input class="widget-content" type="text" placeholder="Nhập địa chỉ" name="address" lp-label="Địa chỉ" lp-name-id="street" required="required">
                                        </div>
                                        <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                        <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                        <input style="background : #00aeef; color : #FFF; font-weight: bold; margin-top: 230px; cursor: pointer" id="BUTTON189" class="e_btn_submit reg_bt"  type="submit"  name="submit" value="Đăng ký ngay">
<!--                                            <input style="background : #00aeef; color : #FFF; font-weight: bold" id="BUTTON189" class="widget-element widget-snap style-1 ladi-drop LeadPanel_action button radius e_btn_submit reg_bt" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-group="GROUP188" lp-display="table" type="submit"  name="submit" value="Đăng ký ngay">-->
                                    </form>
                                    <div id="e_form_submit"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ladi-widget-overlay"></div>
                </div>
                <div id="HEADLINE196" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                    <h2 class="widget-content" lp-node="h2">ĐĂNG KÝ KHÓA HỌC NGAY TIẾT KIỆM NGAY <?php echo round((1 - $rs->price / $rs->price_root) * 100, 2) ?>%</h2>
                    <h4 class="widget-content" lp-node="h4" ><span style="text-decoration:line-through; color: rgb(255, 193, 7)"> <?php echo number_format($rs->price_root, 0, ",", "."); ?>đ</span> chỉ còn <span style="color:rgb(255, 193, 7)"><?php echo number_format($rs->price, 0, ",", "."); ?>đ</span></h4>
                </div>
                <div id="PARAGRAPH197" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                    <h6 class="widget-content" lp-node="h6">Đăng ký hôm nay để là một trong những khách hàng may mắn được tặng một
                        <span style="color: rgb(255, 193, 7); font-style: italic;">khóa học Yoga và Excel</span> khi đăng ký tại đây!!!
                        <br>
                        <span style="font-style: italic;">Miễn phí giao hàng toàn quốc!!!</span>
                    </h6>
                </div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <script type="text/javascript" async="" defer="" src="https://static.ladipage.net/source/ladipage.lib.1.js?v=1517991511062"></script>
    </div>




    <div id="fb-root"></div>
    <script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=315347858825221";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="container">
        <div class="fb-comments" data-href="https://lakita.vn/tron-bo-thuc-hanh-ke-toan-tong-hop-tren-phan-mem-excel.html" data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
    </div>
    <!-- sau này 16/3/2018 thì xóa đoạn script dưới để đếm ngược hết ngày reset đếm lại từ đầu -->
    <script>
        countdown();
        setInterval(function () {
            countdown();
        }, 1000);
        function countdown() {
            var d = new Date();
            var r_date = 16 - d.getDate();
            r_date = (r_hours < 10) ? '0' + r_date : r_date;
            var r_hours = 24 - d.getHours();
            r_hours = (r_hours < 10) ? '0' + r_hours : r_hours;
            var r_minus = 59 - d.getMinutes();
            r_minus = (r_minus < 10) ? '0' + r_minus : r_minus;
            var r_seconds = 59 - d.getSeconds();
            r_seconds = (r_seconds < 10) ? '0' + r_seconds : r_seconds;
            $(".num-day").text(r_date);
            $(".num-hour").text(r_hours);
            $(".num-minute").text(r_minus);
            $(".num-second").text(r_seconds);
        }
    </script>
</body>

</html>