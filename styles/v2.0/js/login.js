//............ AJAX ............//
jQuery(function () {
    var redirect = $(".redirect").val(); //quay về khóa học của tối hay quyay về trang mua khóa học
    var redirect_type = "mobile"; //quay về tab nào
    $(".menu_login").click(function () {
        redirect_type = $(this).attr("redirect_type");
        return false;
    });

    jQuery(".click_login").click(function (e) {
        action_process(jQuery(this).val());
    });

    jQuery('#login_password').keypress(function (e) {
        if (e.which == 13) {
            action_process('login');
        }
    });

    jQuery('#signup_repassword').keypress(function (e) {
        if (e.which == 13) {
            action_process('signup');
        }
    });

    function action_process(this_click)
    {
        var url = '';
        var login_email = '';
        var login_password = '';
        var signup_name = '';
        var signup_email = '';
        var signup_phone = '';
        var signup_password = '';
        var signup_repassword = '';
        var is_remember = '';
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        var filter_phone = /^[0-9]{10,11}$/;

        if (this_click == 'login')
        {

            login_email = jQuery("#login_email").val();
            login_password = jQuery("#login_password").val();
            if ($('#is_remember').is(':checked')) {
                is_remember = '1';
            } else
                is_remember = '0';
            if (login_email == '')
            {
                alert('Bạn phải nhập địa chỉ Email');
                return;
            }

            if (login_password == '')
            {
                alert('Bạn phải nhập mật khẩu');
                return;
            }
            url = 'guest/action_login';
        } else if (this_click == 'signup')
        {
            signup_name = jQuery("#signup_name").val();
            signup_email = jQuery("#signup_email").val();
            signup_phone = jQuery("#signup_phone").val();
            signup_password = jQuery("#signup_password").val();
            signup_repassword = jQuery("#signup_repassword").val();

            if (signup_name == '')
            {
                alert('Bạn phải nhập họ tên');
                return;
            }

            if (signup_email == '')
            {
                alert('Bạn phải nhập địa chỉ Email');
                return;
            }

            if (!filter.test(signup_email))
            {
                alert('Địa chỉ Email chưa đúng định dạng');
                return;
            }
            if (!filter_phone.test(signup_phone))
            {
                alert('Số điện thoại chưa đúng định dạng');
                return;
            }

            if (signup_phone == '')
            {
                alert('Bạn phải nhập số điện thoại');
                return;
            }

            if (signup_password == '')
            {
                alert('Bạn phải nhập mật khẩu');
                return;
            }

            if (signup_repassword == '')
            {
                alert('Bạn phải nhập mật khẩu xác nhận');
                return;
            }
            if (!$("#agree_term").is(':checked'))
            {
                alert('Bạn cần đồng ý với điều khoản và dịch vụ vủa Lakita!');
                return;
            }
            url = 'guest/action_register';
        } else
        {
            return false;
        }

        jQuery.ajax({
            type: "POST",
            url: url,
            data: {
                login_email: login_email,
                login_password: login_password,
                signup_name: signup_name,
                signup_email: signup_email,
                signup_phone: signup_phone,
                signup_password: signup_password,
                signup_repassword: signup_repassword,
                is_remember: is_remember,
                redirect_type: redirect_type

            },
            dataType: "text",
            scriptCharset: "utf-8",
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            beforeSend: function (xhr)
            {
                xhr.setRequestHeader("Ajax-Request", "true");
            },
            success: function (response)
            {

                if (response == 1)
                {
                    if (!redirect)
                        window.location.href = "khoa-hoc-cua-toi.html";
                    else
                    {
                        window.location.reload();
                    }
                } else if (response == 'tutor') {
                    if (!redirect)
                        window.location.href = "tro-giang.html";
                    else
                    {
                        window.location.reload();
                    }
                } else {
                    if (response == 'Tài khoản của bạn đã được đăng nhập từ máy tính khác !! Hãy đăng xuất và đăng nhập lại.') {
                        var notify = "";
                        notify = new Notification(
                                "Có lỗi xảy ra!",
                                {
                                    body: "Tài khoản của bạn đang được đăng nhập ở nơi khác. Hãy đăng xuất và đăng nhập lại!",
                                    icon: "https://lakita.vn/styles/v2.0/img/logo2.png",
                                    tag: "https://lakita.vn/",
                                    sound: "https://lakita.vn/styles/wrong.mp3",
                                    image: "https://openclipart.org/image/2400px/svg_to_png/200369/primary-logout.png"
                                }
                        );
                        setTimeout(function () {
                            alert(response);
                        }, 500);
                    } else
                        alert(response);
                }
                return false;
            }
        });
    }
});