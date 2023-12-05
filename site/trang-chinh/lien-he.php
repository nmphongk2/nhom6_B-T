<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <link rel="stylesheet" type="text/css" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?= $CONTENT_URL ?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?= $CONTENT_URL ?>images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?= $CONTENT_URL ?>https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body>


    <section class="resume-section p-4 p-lg-5 text-center" id="contact">
        <div class="container">
            <div class="my-auto">
                <h2 class="mb-4 primary-color">Thông tin liên hệ</h2>

                <ul class="fa-ul mb-4 ml-0" style="font-size:20px">
                    <li id="mail-address" >
                        <i class="fas fa-envelope-open mr-2 contact-icons"></i>Email: thaiphu2004@gmail.com
                    </li>
                    <li>
                        <i class="fas fa-mobile-alt mr-2 contact-icons"></i>Số điện thoại: 0798934010
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt mr-2 contact-icons"></i>Địa chỉ: Nguyễn Văn Linh, phường An Khánh, quận Ninh Kiều, TP.Cần Thơ
                    </li>
                </ul>
                <form class="contact-form d-flex flex-column align-items-center" action="https://formspree.io/youremail@mail.com" method="POST">
                    <div class="form-group w-75">
                        <input type="name" class="form-control" placeholder="Tên" name="name" required />
                    </div>
                    <div class="form-group w-75">
                        <input type="email" class="form-control" placeholder="Email" name="name" required />
                    </div>

                    <div class="form-group w-75">
                        <textarea class="form-control" type="text" placeholder="Ghi chú..." rows="7" name="name" required></textarea>
                    </div>

                    <button type="submit" class="btn bg-primary btn-info w-75">Gửi</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 16765971;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/16765971/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

</body>

</html>