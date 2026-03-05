var app = app || {};
let scrollTop,
  scrollLeft = 0;

app.init = function () {
  app.tab();
  app.anchorLink();
  app.slick();
  app.inscrease();
  // app.viewmore();
  app.quality();
  app.addtocart();
  // app.countdown();
  // app.copycode();
  // app.fontsize();
  // app.popup();
  app.checkall();
  app.review();
  // app.rating();
};
app.review = function () {
  const openBtn = document.getElementById("openReview");
  const closeBtn = document.getElementById("closeReview");
  const overlay = document.getElementById("reviewOverlay");
  function getScrollbarWidth() {
    return window.innerWidth - document.documentElement.clientWidth;
  }
  // Hàm mở popup
  const openModal = () => {
    const scrollbarWidth = getScrollbarWidth();

    if (scrollbarWidth > 0) {
      document.body.style.paddingRight = scrollbarWidth + "px";
    }
    overlay.classList.add("active");
    document.body.classList.add("no-scroll"); // 🔥 chặn scroll
  };

  // Hàm đóng popup
  const closeModal = () => {
    overlay.classList.remove("active");
    document.body.classList.remove("no-scroll"); // 🔥 mở lại scroll
    document.body.style.paddingRight = ""; // reset
  };

  // Nếu tồn tại nút mở
  if (openBtn && overlay) {
    openBtn.addEventListener("click", openModal);
  }

  // Nếu tồn tại nút đóng
  if (closeBtn && overlay) {
    closeBtn.addEventListener("click", closeModal);
  }

  // Click ra ngoài để đóng
  if (overlay) {
    overlay.addEventListener("click", (e) => {
      if (e.target === overlay) {
        closeModal();
      }
    });
  }

  // ESC để đóng (pro hơn)
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && overlay?.classList.contains("active")) {
      closeModal();
    }
  });

  // Rating
  const stars = document.querySelectorAll(".rating span");

  if (stars.length > 0) {
    stars.forEach((star, index) => {
      star.addEventListener("click", () => {
        stars.forEach((s) => s.classList.remove("active"));
        for (let i = 0; i <= index; i++) {
          stars[i].classList.add("active");
        }
      });
    });
  }
  ////updoad image video
  const imageInput = document.getElementById("imageInput");
  const videoInput = document.getElementById("videoInput");
  const previewList = document.getElementById("previewList");
  const addMore = document.getElementById("addMore");

  // Hiện preview-list
  function showPreviewList() {
    previewList?.classList.add("active");
  }

  // Kiểm tra còn file không
  function updatePreviewState() {
    const items = previewList.querySelectorAll(".preview-item");

    if (items.length === 0) {
      previewList.classList.remove("active"); // 🔥 Ẩn khi không còn file
    } else {
      previewList.classList.add("active");
    }
  }

  // Tạo preview
  function createPreview(file) {
    const wrapper = document.createElement("div");
    wrapper.className = "preview-item";

    const removeBtn = document.createElement("div");
    removeBtn.className = "preview-remove";
    removeBtn.innerHTML = "×";

    removeBtn.addEventListener("click", () => {
      wrapper.remove();
      updatePreviewState(); // 🔥 kiểm tra sau khi xoá
    });

    if (file.type.startsWith("image/")) {
      const img = document.createElement("img");
      img.src = URL.createObjectURL(file);
      wrapper.appendChild(img);
    }

    if (file.type.startsWith("video/")) {
      const video = document.createElement("video");
      video.src = URL.createObjectURL(file);
      wrapper.appendChild(video);
    }

    wrapper.appendChild(removeBtn);

    previewList.insertBefore(wrapper, addMore);
    updatePreviewState(); // 🔥 cập nhật sau khi thêm
  }

  // Upload ảnh
  imageInput?.addEventListener("change", (e) => {
    Array.from(e.target.files).forEach(createPreview);
    imageInput.value = "";
  });

  // Upload video
  videoInput?.addEventListener("change", (e) => {
    Array.from(e.target.files).forEach(createPreview);
    videoInput.value = "";
  });

  // Click "+"
  addMore?.addEventListener("click", () => {
    imageInput?.click();
  });
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

// app.popup = function () {
//   const openBtn = document.getElementById("open-filter");
//   const popup = document.getElementById("sidebar-popup");
//   //const closeBtn = popup.querySelector(".filter-close");
//   if (popup) {
//     const closeBtn = popup.querySelector(".filter-close");
//     if (closeBtn) {
//       closeBtn.addEventListener("click", closePopup);
//     }
//   }
//   if (openBtn && popup) {
//     openBtn.addEventListener("click", () => {
//       popup.classList.add("show");
//       document.body.style.overflow = "hidden";
//     });

//     popup.addEventListener("click", (e) => {
//       if (e.target === popup) {
//         closePopup();
//       }
//     });
//   }

//   function closePopup() {
//     popup.classList.remove("show");
//     document.body.style.overflow = "";
//   }
// };

// app.countdown = function () {
//   const targetDate = new Date("2026-8-31 23:59:59").getTime();
//   function updateCountdown() {
//     const c_countdown = document.getElementById("countdown");

//     const now = new Date().getTime();
//     const distance = targetDate - now;

//     if (distance <= 0) {
//       if (c_countdown != null) {
//         document.getElementById("countdown").innerHTML = "Hết giờ!";
//         clearInterval(timer);
//         return;
//       }
//     }

//     const days = Math.floor(distance / (1000 * 60 * 60 * 24));
//     const hours = Math.floor(
//       (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
//     );
//     const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//     const seconds = Math.floor((distance % (1000 * 60)) / 1000);
//     const c_days = document.getElementById("days");
//     const c_hours = document.getElementById("hours");
//     const c_minutes = document.getElementById("minutes");
//     const c_seconds = document.getElementById("seconds");
//     if (c_days != null) {
//       c_days.innerText = days.toString().padStart(2, "0");
//     }
//     if (c_hours != null) {
//       c_hours.innerText = hours.toString().padStart(2, "0");
//     }
//     if (c_minutes != null) {
//       c_minutes.innerText = minutes.toString().padStart(2, "0");
//     }
//     if (c_seconds != null) {
//       c_seconds.innerText = seconds.toString().padStart(2, "0");
//     }
//   }

//   // Cập nhật mỗi giây
//   const timer = setInterval(updateCountdown, 1000);
//   updateCountdown(); // Gọi ngay để không bị delay 1 giây đầu tiên
// };
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
  $(".mv-js").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    infinite: true,
    autoplay: true, // 🔥 bật tự chạy
    autoplaySpeed: 3000, // ⏱️ 3 giây / slide
    speed: 600, // tốc độ hiệu ứng
  });
  $(".bh-js").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    infinite: true,
    autoplay: true, // 🔥 bật tự chạy
    autoplaySpeed: 3000, // ⏱️ 3 giây / slide
    speed: 600, // tốc độ hiệu ứng
  });
  $(".features-js").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    centerPadding: "80px", // ⭐ phần ảnh thò ra 2 bên
    infinite: true,
    arrows: true,
    dots: false,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 3000,

    responsive: [
      {
        breakpoint: 1024,
        settings: { slidesToShow: 2 },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerPadding: "20px", // ⭐ phần ảnh thò ra 2 bên
        },
      },
    ],
  });
  $(".access-js").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    rows: 1,

    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          rows: 2,
          slidesPerRow: 2,
        },
      },
    ],
  });

  $(".partner-js").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });
  $(".news-reviews-js").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
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
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".new-related-js").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
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
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".why-js").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
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
          arrows: false,
          slidesToShow: 1,
        },
      },
    ],
  });
  function initServiceSlider() {
    if ($(window).width() < 768) {
      // nếu chưa có slick thì mới init
      if (!$(".service-js").hasClass("slick-initialized")) {
        $(".service-js").slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: true,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 3000,
        });
      }
    } else {
      // nếu đang là slick thì destroy
      if ($(".service-js").hasClass("slick-initialized")) {
        $(".service-js").slick("unslick");
      }
    }
  }

  // chạy khi load
  initServiceSlider();

  // chạy khi resize
  $(window).on("resize", function () {
    initServiceSlider();
  });

  // $(".sale-js").slick({
  //   slidesToShow: 4,
  //   slidesToScroll: 1,
  //   arrows: false,
  //   dots: false,
  //   infinite: true,
  //   responsive: [
  //     {
  //       breakpoint: 768,
  //       settings: {
  //         slidesToShow: 2,
  //         dots: true,
  //       },
  //     },
  //     {
  //       breakpoint: 480,
  //       settings: {
  //         slidesToShow: 2,
  //         dots: true,
  //         //variableWidth: true,
  //       },
  //     },
  //   ],
  // });
  // $(".js-sale-code").slick({
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   arrows: true,
  //   dots: false,
  //   //infinite: true,
  //   responsive: [
  //     {
  //       breakpoint: 768,
  //       settings: {
  //         slidesToShow: 1,
  //         variableWidth: true,
  //         arrows: false,
  //       },
  //     },
  //     {
  //       breakpoint: 480,
  //       settings: {
  //         slidesToShow: 1,
  //         variableWidth: true,
  //         arrows: false,
  //         //variableWidth: true,
  //       },
  //     },
  //   ],
  // });
  // $(".js-product-like").slick({
  //   slidesToShow: 4,
  //   slidesToScroll: 1,
  //   arrows: true,
  //   dots: false,
  //   infinite: true,
  //   prevArrow: $(".slick-prev-product"),
  //   nextArrow: $(".slick-next-product"),
  //   responsive: [
  //     {
  //       breakpoint: 768, // dưới 768px (tablet)
  //       settings: {
  //         slidesToShow: 3,
  //         slidesToScroll: 1,
  //       },
  //     },
  //     {
  //       breakpoint: 480, // dưới 480px (mobile)
  //       settings: {
  //         slidesToShow: 2,
  //         slidesToScroll: 1,
  //         //variableWidth: true, // kích hoạt width linh hoạt
  //       },
  //     },
  //   ],
  // });
  // $(".js-news-related").slick({
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   arrows: true,
  //   dots: false,
  //   infinite: true,
  //   prevArrow: $(".slick-prev-news"),
  //   nextArrow: $(".slick-next-news"),
  //   responsive: [
  //     {
  //       breakpoint: 768, // dưới 768px (tablet)
  //       settings: {
  //         slidesToShow: 3,
  //         slidesToScroll: 1,
  //       },
  //     },
  //     {
  //       breakpoint: 480, // dưới 480px (mobile)
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1,
  //         //variableWidth: true, // kích hoạt width linh hoạt
  //       },
  //     },
  //   ],
  // });

  // function mobileOnlySlider() {
  //   if ($(window).width() < 768) {
  //     if (!$(".js-product-home").hasClass("slick-initialized")) {
  //       $(".js-product-home").slick({
  //         slidesToShow: 2,
  //         slidesToScroll: 1,
  //         arrows: false,
  //         dots: false,
  //         variableWidth: true,
  //         autoplay: true,
  //         autoplaySpeed: 2000, // 2s
  //         speed: 600,
  //       });
  //     }
  //   } else {
  //     if ($(".js-product-home").hasClass("slick-initialized")) {
  //       $(".js-product-home").slick("unslick");
  //     }
  //   }
  // }

  // $(document).ready(function () {
  //   mobileOnlySlider();
  //   $(window).on("resize", mobileOnlySlider);
  // });
};

// app.fontsize = function () {
//   let fontSize = 1.6; // rem
//   const minSize = 0.75; // 12px
//   const maxSize = 5.5; // 24px
//   const step = 0.1;
//   const fontPlus = document.querySelector(".font-plus");
//   const fontMinus = document.querySelector(".font-minus");
//   const changeFont = document.querySelector(".change-font");

//   if (fontPlus && fontMinus && changeFont) {
//     fontPlus.addEventListener("click", () => {
//       if (fontSize < maxSize) {
//         fontSize = +(fontSize + step).toFixed(2);
//         changeFont.style.fontSize = fontSize + "rem";
//       }
//     });

//     fontMinus.addEventListener("click", () => {
//       if (fontSize > minSize) {
//         fontSize = +(fontSize - step).toFixed(2);
//         changeFont.style.fontSize = fontSize + "rem";
//       }
//     });
//   }
// };
// app.viewmore = function () {
//   document.querySelectorAll(".progress").forEach((p) => {
//     let num = parseInt(p.dataset.num);
//     let total = parseInt(p.dataset.total);
//     let percent = Math.round((num / total) * 100);

//     // set width cho thanh
//     p.querySelector(".bar").style.width = percent + "%";
//   });
// };
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
// app.copycode = function () {
//   document.querySelectorAll(".btn-copy").forEach((btn) => {
//     btn.addEventListener("click", () => {
//       const textToCopy = btn.dataset.copy || btn.innerText;

//       if (navigator.clipboard && window.isSecureContext) {
//         navigator.clipboard.writeText(textToCopy).then(() => {
//           changeCopyText(btn);
//         });
//       } else {
//         fallbackCopy(textToCopy);
//         changeCopyText(btn);
//       }
//     });
//   });

//   function fallbackCopy(text) {
//     const textarea = document.createElement("textarea");
//     textarea.value = text;
//     textarea.style.position = "fixed";
//     textarea.style.opacity = 0;
//     document.body.appendChild(textarea);
//     textarea.select();
//     document.execCommand("copy");
//     document.body.removeChild(textarea);
//   }

//   function changeCopyText(btn) {
//     const oldText = btn.innerText;
//     btn.innerText = "Đã sao chép";
//     btn.classList.add("copied");

//     setTimeout(() => {
//       btn.innerText = oldText;
//       btn.classList.remove("copied");
//     }, 2000);
//   }
// };
// const backToTop = document.getElementById("backToTop");
// if (backToTop) {
//   window.addEventListener("scroll", function () {
//     if (window.scrollY > 300) {
//       backToTop.classList.add("show");
//     } else {
//       backToTop.classList.remove("show");
//     }
//   });

//   backToTop.addEventListener("click", function (e) {
//     e.preventDefault();
//     window.scrollTo({
//       top: 0,
//       behavior: "smooth",
//     });
//   });
// }
/////

////payment
$(".menu-top").hover(
  function () {
    $(".menu-top__lst").show();
    $(".overlay").addClass("show");
  },
  function () {
    $(".menu-top__lst").hide();
    $(".overlay").removeClass("show");
  }
);

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

document.querySelectorAll(".ic-sub").forEach((icon) => {
  icon.addEventListener("click", function (e) {
    e.stopPropagation();

    const li = this.closest(".has-sub");

    // đóng tất cả menu khác
    document.querySelectorAll(".has-sub").forEach((item) => {
      if (item !== li) item.classList.remove("open");
    });

    li.classList.toggle("open");
  });
});
$(document).ready(function () {
  const brand = document.getElementById("brand");
  const model = document.getElementById("model");
  if (brand) {
    brand.addEventListener("change", function () {
      if (this.value === "") {
        model.disabled = true; // chưa chọn → khóa
      } else {
        model.disabled = false; // chọn rồi → mở khóa
      }
    });
  }

  // $(".gt_selected").click(function () {
  //   $(".gt_selected span").toggleClass("is-active");
  //   $(".gt_option").toggleClass("is-active");
  // });
  // ///open menu
  // $(".ic-menu").click(function () {
  //   $(".menu-top__lst").addClass("show");
  //   $(".bg-close-menu").addClass("show");
  //   document.documentElement.classList.add("noscroll");
  // });

  // $(".bg-close-menu").click(function () {
  //   $(".menu-top__lst").removeClass("show");
  //   $(this).removeClass("show");
  //   document.documentElement.classList.remove("noscroll");
  // });
  // ///openmneu con

  ///addcart

  const btnaddcart = document.getElementById("add-to-cart");
  const boxcart = document.getElementById("box-add-cart");
  if (btnaddcart != null) {
    btnaddcart.addEventListener("click", function () {
      boxcart.classList.add("is-show");

      setTimeout(() => {
        boxcart.classList.remove("is-show");
      }, 5000); // 5000ms = 5 giây
    });
  }
  const btnclose = document.getElementById("btn-close-cart");
  if (btnclose != null) {
    btnclose.addEventListener("click", function () {
      boxcart.classList.remove("is-show");
      // Nếu muốn chỉ add (không toggle), dùng: target.classList.add('active');
    });
  }

  ///backtotop

  const backToTopBtn = document.getElementById("backToTop");
  if (!backToTopBtn) return; // không có thì thoát luôn
  window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
      backToTopBtn.style.display = "flex";
    } else {
      backToTopBtn.style.display = "none";
    }
  });
  backToTopBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  ////popup

  const btncontact = document.getElementById("contactBtn");
  const popup = document.getElementById("contactPopup");
  const close = document.querySelector(".close");
  if (btncontact) {
    // Mở popup
    btncontact.onclick = () => {
      popup.classList.add("show");
      document.body.classList.add("no-scroll");
    };

    // Đóng popup
    close.onclick = () => {
      popup.classList.remove("show");
      document.body.classList.remove("no-scroll");
    }; // Click nền ngoài
    popup.onclick = (e) => {
      if (e.target === popup) {
        popup.classList.remove("show");
        document.body.classList.remove("no-scroll");
      }
    };
  }

  ////open cart
  const openCart = document.getElementById("openCart");
  const closeCart = document.getElementById("closeCart");
  const cartPanel = document.getElementById("cartPanel");
  const overlay = document.getElementById("cartOverlay");
  function getScrollbarWidth() {
    return window.innerWidth - document.documentElement.clientWidth;
  }
  function showCart() {
    const scrollbarWidth = getScrollbarWidth();
    if (scrollbarWidth > 0) {
      document.body.style.paddingRight = scrollbarWidth + "px";
    }

    cartPanel.classList.add("show");
    overlay.classList.add("show");
    document.body.classList.add("no-scroll");
  }

  function hideCart() {
    cartPanel.classList.remove("show");
    overlay.classList.remove("show");
    document.body.classList.remove("no-scroll");
    document.body.style.paddingRight = ""; // reset
  }
  if (openCart && cartPanel && overlay) {
    openCart.onclick = showCart;
    closeCart && (closeCart.onclick = hideCart);
    overlay.onclick = hideCart;
  }

  ////fixheader

  const header = document.querySelector(".p-header-content");

  if (header) {
    const headerOffset = header.offsetTop;
    window.addEventListener("scroll", function () {
      if (window.scrollY > headerOffset) {
        header.classList.add("is-fixed");
      } else {
        header.classList.remove("is-fixed");
      }
    });
  }

  ///catefootersp
  const btnCategory = document.getElementById("btnCategory");
  const panel = document.getElementById("categoryPanel");
  if (btnCategory) {
    btnCategory.onclick = () => {
      panel.classList.toggle("show");
      if (panel.classList.contains("show")) {
        document.body.classList.add("no-scroll");
      } else {
        document.body.classList.remove("no-scroll");
      }
    };
  }

  const parents = document.querySelectorAll(".parent-item");
  const groups = document.querySelectorAll(".child-group");

  parents.forEach((parent) => {
    parent.onclick = () => {
      // bỏ active cũ
      parents.forEach((p) => p.classList.remove("active"));
      groups.forEach((g) => g.classList.remove("active"));

      // active mới
      parent.classList.add("active");

      const id = parent.dataset.id;

      document
        .querySelector('.child-group[data-id="' + id + '"]')
        .classList.add("active");
    };
  });
  //toc
  $("#tocToggle").on("click", function () {
    $("#tocBody").slideToggle(250);
  });
  ///load more

  const btnmore = document.getElementById("view-more-detail");
  const content = document.getElementById("contentText");
  const fade = document.querySelector(".fade-overlay");
  if (btnmore && content) {
    btnmore.addEventListener("click", function () {
      content.classList.toggle("active");
      btnmore.style.display = "none";
      fade.style.display = "none";
    });
  }

  ///faq
  const items = document.querySelectorAll(".faq-item");

  items.forEach((item) => {
    item.querySelector(".faq-question").addEventListener("click", () => {
      items.forEach((i) => {
        if (i !== item) i.classList.remove("active");
      });

      item.classList.toggle("active");
    });
  });
  //rate
  $(".star-rating").each(function () {
    let rating = parseInt($(this).data("rating")) || 0;
    let html = "";

    for (let i = 1; i <= 5; i++) {
      if (i <= rating) {
        // sao vàng đặc
        html += '<i class="fa-solid fa-star"></i>';
      } else {
        // sao viền vàng
        html += '<i class="fa-regular fa-star"></i>';
      }
    }

    $(this).html(html);
  });

  app.init();
});
