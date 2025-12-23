var app = app || {};
let scrollTop,
  scrollLeft = 0;

app.init = function () {
  app.tab();
  app.anchorLink();
  app.slick();
  app.inscrease();
  app.boxanchor();
  app.viewmore();
  app.viewmoreproduct();
  app.quality();
  app.addtocart();
  app.faq();
  app.countdown();
  app.video();
  app.copycode();
  app.fontsize();
  app.popup();
  app.checkall();
};
app.checkall = function () {
  const checkAll = document.getElementById("checkAll");
  const checkAllsp = document.getElementById("checkAllSp");
  const items = document.querySelectorAll(".cart-info-item .item");
  const items_sp = document.querySelectorAll(".p-cart-lst__item .item");
  if (checkAll) {
    checkAll.addEventListener("change", function () {
      items.forEach((cb) => (cb.checked = this.checked));
    });
  }

  items.forEach((cb) => {
    cb.addEventListener("change", function () {
      checkAll.checked = [...items].every((item) => item.checked);
    });
  });
  if (checkAllsp) {
    checkAllsp.addEventListener("change", function () {
      items_sp.forEach((cb) => (cb.checked = this.checked));
    });
  }

  items_sp.forEach((cb) => {
    cb.addEventListener("change", function () {
      checkAllsp.checked = [...items_sp].every((item) => item.checked);
    });
  });
};

app.popup = function () {
  const openBtn = document.getElementById("open-filter");
  const popup = document.getElementById("sidebar-popup");
  //const closeBtn = popup.querySelector(".filter-close");
  if (popup) {
    const closeBtn = popup.querySelector(".filter-close");
    if (closeBtn) {
      closeBtn.addEventListener("click", closePopup);
    }
  }
  if (openBtn && popup) {
    openBtn.addEventListener("click", () => {
      popup.classList.add("show");
      document.body.style.overflow = "hidden";
    });

    popup.addEventListener("click", (e) => {
      if (e.target === popup) {
        closePopup();
      }
    });
  }

  function closePopup() {
    popup.classList.remove("show");
    document.body.style.overflow = "";
  }
};

app.video = function () {
  const popup = document.getElementById("videoPopup");
  const videoFrame = document.getElementById("videoFrame");
  if (popup != null) {
    document.querySelectorAll(".video-item").forEach((item) => {
      item.addEventListener("click", () => {
        const url = item.getAttribute("data-video") + "?autoplay=1";
        videoFrame.src = url;
        popup.style.display = "flex";
      });
    });
    document.querySelector(".video-close").addEventListener("click", () => {
      popup.style.display = "none";
      videoFrame.src = "";
    });

    document.querySelector(".video-overlay").addEventListener("click", () => {
      popup.style.display = "none";
      videoFrame.src = "";
    });
  }
};
app.countdown = function () {
  const targetDate = new Date("2026-8-31 23:59:59").getTime();
  function updateCountdown() {
    const c_countdown = document.getElementById("countdown");

    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance <= 0) {
      if (c_countdown != null) {
        document.getElementById("countdown").innerHTML = "Hết giờ!";
        clearInterval(timer);
        return;
      }
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    const c_days = document.getElementById("days");
    const c_hours = document.getElementById("hours");
    const c_minutes = document.getElementById("minutes");
    const c_seconds = document.getElementById("seconds");
    if (c_days != null) {
      c_days.innerText = days.toString().padStart(2, "0");
    }
    if (c_hours != null) {
      c_hours.innerText = hours.toString().padStart(2, "0");
    }
    if (c_minutes != null) {
      c_minutes.innerText = minutes.toString().padStart(2, "0");
    }
    if (c_seconds != null) {
      c_seconds.innerText = seconds.toString().padStart(2, "0");
    }
  }

  // Cập nhật mỗi giây
  const timer = setInterval(updateCountdown, 1000);
  updateCountdown(); // Gọi ngay để không bị delay 1 giây đầu tiên
};
app.tab = function () {
  const tabBtns = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");

  tabBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      // Bỏ active tất cả button và content
      tabBtns.forEach((b) => b.classList.remove("active"));
      tabContents.forEach((c) => c.classList.remove("active"));

      // Active button vừa click
      btn.classList.add("active");

      // Active nội dung tương ứng
      const tabId = btn.getAttribute("data-tab");
      document.getElementById(tabId).classList.add("active");
    });
  });
};
app.anchorLink = function () {
  $(".anchor-link").click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      let box = document.querySelector(".p-header");
      let snum = document.querySelector(".h_number");
    }
  });
};
app.inscrease = function () {
  $(".minus").click(function () {
    var $input = $(this).parent().find("input");
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  $(".plus").click(function () {
    var $input = $(this).parent().find("input");
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });
};
app.slick = function () {
  $(".cate-js").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
    //autoplay: true,
    //autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  $(".mv-js").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: true,
  });
  $(".sale-js").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    infinite: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          dots: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          dots: true,
          //variableWidth: true,
        },
      },
    ],
  });
  $(".js-sale-code").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    //infinite: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          variableWidth: true,
          arrows: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          variableWidth: true,
          arrows: false,
          //variableWidth: true,
        },
      },
    ],
  });
  $(".js-product-like").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    infinite: true,
    prevArrow: $(".slick-prev-product"),
    nextArrow: $(".slick-next-product"),
    responsive: [
      {
        breakpoint: 768, // dưới 768px (tablet)
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480, // dưới 480px (mobile)
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          //variableWidth: true, // kích hoạt width linh hoạt
        },
      },
    ],
  });
  $(".js-news-related").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    infinite: true,
    prevArrow: $(".slick-prev-news"),
    nextArrow: $(".slick-next-news"),
    responsive: [
      {
        breakpoint: 768, // dưới 768px (tablet)
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480, // dưới 480px (mobile)
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          //variableWidth: true, // kích hoạt width linh hoạt
        },
      },
    ],
  });

  function mobileOnlySlider() {
    if ($(window).width() < 768) {
      if (!$(".js-product-home").hasClass("slick-initialized")) {
        $(".js-product-home").slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          dots: false,
          variableWidth: true,
          autoplay: true,
          autoplaySpeed: 2000, // 2s
          speed: 600,
        });
      }
    } else {
      if ($(".js-product-home").hasClass("slick-initialized")) {
        $(".js-product-home").slick("unslick");
      }
    }
  }

  $(document).ready(function () {
    mobileOnlySlider();
    $(window).on("resize", mobileOnlySlider);
  });
};
app.faq = function () {
  const ques = document.querySelectorAll(".faq-item-head");
  const ans = document.querySelectorAll(".faq-item-body");
  ques.forEach((t, i) => {
    if (t.classList.contains("active")) {
      ans[i].style.height = ans[i].scrollHeight + "px";
    }
  });
  ques.forEach((t) => {
    t.addEventListener("click", () => {
      // Đóng tất cả
      ans.forEach((c) => (c.style.height = 0));
      ques.forEach((x) => x.classList.remove("active"));

      const c = t.nextElementSibling;
      const isOpen = c.style.height && c.style.height !== "0px";

      if (!isOpen) {
        c.style.height = c.scrollHeight + "px";
        //ans.style.paddingTop = '12px'; // bỏ padding khi đóng
        t.classList.add("active");
      }
    });
  });
};
app.viewmoreproduct = function () {
  const product_detail = document.getElementById("product-detail");
  const btn_more_detail = document.getElementById("view-more-detail");
  let expanded = false;
  const collapsedHeight = 500;
  if (btn_more_detail != null) {
    btn_more_detail.addEventListener("click", () => {
      btn_more_detail.classList.add("hide");
      if (!expanded) {
        product_detail.classList.add("show");
        const fullHeight = product_detail.scrollHeight;
        product_detail.style.maxHeight = fullHeight + "px";
        $(".c-reduce").show();
        $(".c-more").hide();
      } else {
        product_detail.classList.remove("show");
        product_detail.style.maxHeight = collapsedHeight + "px";
        $(".c-reduce").hide();
        $(".c-more").show();
      }
      expanded = !expanded;
    });
  }
};
app.boxanchor = function () {
  const btnAnchor = document.querySelector(".btn-anchor");
  if (btnAnchor) {
    btnAnchor.addEventListener("click", function () {
      $(".box-anchor__lst").slideToggle(300);
    });
  }
};
app.fontsize = function () {
  let fontSize = 1.6; // rem
  const minSize = 0.75; // 12px
  const maxSize = 5.5; // 24px
  const step = 0.1;
  const fontPlus = document.querySelector(".font-plus");
  const fontMinus = document.querySelector(".font-minus");
  const changeFont = document.querySelector(".change-font");

  if (fontPlus && fontMinus && changeFont) {
    fontPlus.addEventListener("click", () => {
      if (fontSize < maxSize) {
        fontSize = +(fontSize + step).toFixed(2);
        changeFont.style.fontSize = fontSize + "rem";
      }
    });

    fontMinus.addEventListener("click", () => {
      if (fontSize > minSize) {
        fontSize = +(fontSize - step).toFixed(2);
        changeFont.style.fontSize = fontSize + "rem";
      }
    });
  }
};
app.viewmore = function () {
  document.querySelectorAll(".progress").forEach((p) => {
    let num = parseInt(p.dataset.num);
    let total = parseInt(p.dataset.total);
    let percent = Math.round((num / total) * 100);

    // set width cho thanh
    p.querySelector(".bar").style.width = percent + "%";
  });
};
app.quality = function () {
  document.querySelectorAll(".c-quantity").forEach((product) => {
    const input = product.querySelector(".qty");
    const plus = product.querySelector(".btn-plus");
    const minus = product.querySelector(".btn-minus");

    plus.addEventListener("click", () => {
      let val = parseInt(input.value) || 0;
      if (val < parseInt(input.max)) input.value = val + 1;
    });

    minus.addEventListener("click", () => {
      let val = parseInt(input.value) || 0;
      if (val > parseInt(input.min)) input.value = val - 1;
    });
  });
};
app.addtocart = function () {};
app.copycode = function () {
  document.querySelectorAll(".btn-copy").forEach((btn) => {
    btn.addEventListener("click", () => {
      const textToCopy = btn.dataset.copy || btn.innerText;

      if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(textToCopy).then(() => {
          changeCopyText(btn);
        });
      } else {
        fallbackCopy(textToCopy);
        changeCopyText(btn);
      }
    });
  });

  function fallbackCopy(text) {
    const textarea = document.createElement("textarea");
    textarea.value = text;
    textarea.style.position = "fixed";
    textarea.style.opacity = 0;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);
  }

  function changeCopyText(btn) {
    const oldText = btn.innerText;
    btn.innerText = "Đã sao chép";
    btn.classList.add("copied");

    setTimeout(() => {
      btn.innerText = oldText;
      btn.classList.remove("copied");
    }, 2000);
  }
};
const backToTop = document.getElementById("backToTop");
window.addEventListener("scroll", function () {
  if (window.scrollY > 300) {
    backToTop.classList.add("show");
  } else {
    backToTop.classList.remove("show");
  }
});

backToTop.addEventListener("click", function (e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
const currentUrl = window.location.pathname;
document.querySelectorAll(".menu-item a").forEach((link) => {
  if (link.getAttribute("href") === currentUrl) {
    link.classList.add("active");
  }
});
document.querySelectorAll(".num-price").forEach((input) => {
  input.addEventListener("input", function () {
    let value = this.value.replace(/\D/g, ""); // chỉ giữ số

    if (value === "") {
      this.value = "";
      return;
    }

    this.value = Number(value).toLocaleString("vi-VN");
  });
});
document.querySelectorAll(".star-rating").forEach((el) => {
  el.style.setProperty("--rating", el.dataset.rating);
});

$(document).ready(function () {
  $(".gt_selected").click(function () {
    $(".gt_selected span").toggleClass("is-active");
    $(".gt_option").toggleClass("is-active");
  });
  $(".ic_search").click(function () {
    $(this).toggleClass("show");
    $(".p-header__search").slideToggle();
  });
  $(".ic_menu").click(function () {
    $(".menu-sp").addClass("show");
    $(".bg-close-menu").addClass("show");
    document.documentElement.classList.add("noscroll");
  });

  $(".bg-close-menu").click(function () {
    $(".menu-sp").removeClass("show");
    $(".cart-content").removeClass("show");
    $(this).removeClass("show");
    document.documentElement.classList.remove("noscroll");
  });

  $(".menu-sp .ic-sub").on("click", function (e) {
    e.preventDefault();
    e.stopPropagation();

    const li = $(this).closest("li");

    // Đóng các menu khác, TRỪ menu mặc định
    $(".menu-sp li")
      .not(li)
      .not(".product")
      .removeClass("active")
      .children("ul")
      .slideUp();

    // Toggle menu hiện tại
    li.toggleClass("active");
    li.children("ul").slideToggle();
  });

  app.init();
});

// $(function () {
//   $("include").each(function () {
//     var file = $(this).attr("src");
//     $(this).load(file, function () {
//
//       $(".button-support").click(function () {
//         $(".support-content").toggleClass("is-show");
//       });

//       $(".support-btn-close").click(function () {
//         $(".support-content").removeClass("is-show");
//       });
//       $(".new-related-js").slick({
//         dots: false,
//         arrows: true,
//         speed: 1000,
//         slidesToShow: 3,
//         slidesToScroll: 1,
//         autoplay: true,
//         autoplaySpeed: 4000,
//         responsive: [
//           {
//             breakpoint: 767,
//             settings: {
//               slidesToShow: 1,
//               dots: true,
//               arrows: false,
//               slidesToScroll: 1,
//             },
//           },
//         ],
//       });
//       window.addEventListener("scroll", function () {
//         const fixedBox = document.getElementById("pos-pay");
//         const footer = document.getElementById("footer");

//         const footerRect = footer.getBoundingClientRect();
//         const windowHeight = window.innerHeight;
//         if (fixedBox != null) {
//           if (footerRect.top <= windowHeight) {
//             // Đã chạm footer -> gỡ fixed, đặt lên ngay trên footer
//             fixedBox.style.position = "absolute";
//             fixedBox.style.bottom =
//               document.body.offsetHeight - footer.offsetTop + "px";
//           } else {
//             // Chưa chạm footer -> giữ fixed
//             fixedBox.style.position = "fixed";
//             fixedBox.style.bottom = "0";
//           }
//         }
//       });
//       const btnaddcart = document.getElementById("add-to-cart");
//       const boxcart = document.getElementById("box-add-cart");
//       if (btnaddcart != null) {
//         btnaddcart.addEventListener("click", function () {
//           boxcart.classList.add("is-show");

//           setTimeout(() => {
//             boxcart.classList.remove("is-show");
//           }, 5000); // 5000ms = 5 giây
//         });
//       }

//       const btnclose = document.getElementById("btn-close-cart");
//       if (btnclose != null) {
//         btnclose.addEventListener("click", function () {
//           boxcart.classList.remove("is-show");
//           // Nếu muốn chỉ add (không toggle), dùng: target.classList.add('active');
//         });
//       }
//     });
//   });
// });
