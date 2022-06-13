// let loadingDiv = document.getElementById("loadingDiv");
// loadingDiv.style.display = "none";
pageTitle = {
    home: "Trang chủ",
    about: "Thông tin",
    products: "Dịch vụ",
    pricing: "Bảng giá",
    contact: "Liên hệ",
    news: "Tin tức",
    login: "Đăng nhập",
    register: "Đăng ký",
    account: "Tài khoản",
    post: "Tạo bài đăng"
};

initLoad = (path) => {
    $("#app").animate({ opacity: 0 }, 0);
    $(".page-title").animate({ opacity: 0 }, 0);
    $("#app").load(`/mvc_webapp/public/content/${path}.php`);
    document.title = `${pageTitle[path]} - play im@s`;

    setTimeout(() => {
        if (path === "products")
            $(".main-gallery").flickity({
                // options
                cellAlign: "center",
                contain: true,
                wrapAround: true,
            });
        $(".page-title").text(pageTitle[`${path}`]);
        $(".page-title").animate({ opacity: 1 });
        $("#app").animate({ opacity: 1 });
    }, 100);
};

changeCSS = (path, cssLinkIndex) => {
    let oldlink = document.getElementsByTagName("link").item(cssLinkIndex);

    let newlink = document.createElement("link");
    newlink.setAttribute("rel", "stylesheet");
    newlink.setAttribute("type", "text/css");
    newlink.setAttribute("href", `/mvc_webapp/public/css/${path}.css`);

    document
        .getElementsByTagName(`head`)
        .item(0)
        .replaceChild(newlink, oldlink);
};

load = (path) => {

    // loadingDiv.style.display = "block";
    $("#app").animate({ opacity: 0 }, 400);
    $(".page-title").animate({ color: "transparent" }, 400);
    setTimeout(() => {
        // $("#app").load(`/mvc_webapp/public/content/${path}.php`);
        $("#app").load(`/mvc_webapp/public/index.php?controller=HomeController&action=${path}`);
        changeCSS(path, 5);
        document.title = `${pageTitle[path]} - play im@s`;

        setTimeout(() => {
            if (path === "products")
                $(".main-gallery").flickity({
                    // options
                    cellAlign: "center",
                    contain: true,
                    wrapAround: true,
                });
            $(".page-title").text(pageTitle[`${path}`]);
            $(".page-title").animate({ color: "#ffffff" }, 100);
            $("#app").animate({ opacity: 1 });
        }, 100);
        // loadingDiv.style.display = "none";
    }, 500);
};

$(function () {
    $(document).scroll(function () {
        var $nav = $("#headerTab");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
});

window.addEventListener('popstate', function (event) {
	// The URL changed...
    console.log('a')
});




//________________________________________

navigate = (controller ,path) => {
    location.href=`/mvc_webapp/public/index.php?controller=${controller}&action=${path}`;
}

logout = () => {
    $.ajax({
        type: "POST",
        url: "/mvc_webapp/public/index.php?controller=AuthenticationController&action=logout"
    })

    navigate("HomeController", "index");
}