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

removeBox = (e) => {
    e.parentNode.remove();
}

createInput = (id, className, name) => {
    let tmp = document.createElement("input");
    tmp.setAttribute("id", id);
    tmp.setAttribute("name", name);
    tmp.setAttribute("class", className);

    if (name === "servicesId")
        tmp.setAttribute("readonly", "");

    return tmp;
}

createLabel = (text, idx) => {
    let tmp = document.createElement("label");
    tmp.setAttribute("for", "label");
    tmp.innerText = text;

    return tmp;
}

addServicesBox = () => {
    let idx = document.querySelectorAll("[id*=servicesName]").length + 1;
    let box = document.createElement("form");
    box.setAttribute("method", "post")
    box.setAttribute("action", "");
    box.setAttribute("class", "servicesBox");

    let sId = createInput(`servicesId-${idx}`, "servicesInput", `servicesId`);
    let sName = createInput(`servicesName-${idx}`, "servicesInput", `servicesName`);
    let sDesc = createInput(`servicesDesc-${idx}`, "servicesInput", `servicesDesc`);
    let sPrice = createInput(`servicesPrice-${idx}`, "servicesInput", `servicesPrice`);
    let sImg = createInput(`servicesImg-${idx}`, "servicesInput", `servicesImg`);

    let labelId = createLabel("Id dịch vụ", idx - 1);
    let labelName = createLabel("Tên dịch vụ", idx - 1);
    let labelDesc = createLabel("Mô tả dịch vụ", idx - 1);
    let labelPrice = createLabel("Giá", idx - 1);
    let labelImg = createLabel("Hình ảnh", idx - 1);

    let save = document.createElement("input");
    save.setAttribute("type", "submit")
    save.setAttribute("id", `saveButton-${idx - 1}`);
    save.setAttribute("class", "saveButton");
    save.setAttribute("value", "Lưu");

    let remover = document.createElement("div");
    remover.setAttribute("class", "remover");
    remover.setAttribute("onclick", "removeBox(this)");
    remover.innerText = '-';

    box.append(labelId, sId, labelName, sName, labelDesc, sDesc, labelPrice, sPrice, labelImg, sImg, save, remover);

    document.getElementsByClassName("innerSection")[0].insertBefore(box, document.getElementsByClassName("addBox")[0]);
}

post = () => {
    let postTitle = document.getElementById("postTitle").value;
    let postImg = document.getElementById("postImg").value;
    let postContent = sceditor.instance(textArea).fromBBCode(sceditor.instance(textArea).val(), true);

    $.ajax({
        type: "POST",
        url: "",
        data: {
            title: postTitle,
            content: postContent,
            img: postImg
        }
    })
}