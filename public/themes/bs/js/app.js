"use strict";
const header = document.getElementById("header");
// For Ninja
var animTrigger = document.querySelector("#animTrigger");
var ninjas = document.querySelectorAll(".ninja");
function handleStar() {
    var _a;
    var el = document.querySelector(".ninja");
    if (el) {
        var newone = el.cloneNode(true);
        (_a = el === null || el === void 0 ? void 0 : el.parentNode) === null || _a === void 0 ? void 0 : _a.insertBefore(newone, el);
        var allNinjas = document.querySelectorAll(".ninja");
        if (allNinjas.length > 1) {
            allNinjas[allNinjas.length - 1].remove();
        }
    }
}
animTrigger && animTrigger.addEventListener("click", handleStar);
animTrigger && animTrigger.addEventListener("mouseenter", handleStar);
ninjas.forEach(function (ninja) {
    ninja.addEventListener("click", handleStar);
});
// For Ninja
// Window Events
window.addEventListener("scroll", function () {
    const scrollHeight = this.window.scrollY;
    if (scrollHeight >= 50) {
        header && header.classList.add("headerScrolled");
    }
    else {
        header && header.classList.remove("headerScrolled");
    }
});
// switch  & popup form
const toggleSwitch = document.getElementById("switch");
const popup_form = document.getElementById("popup_form");
const close_popup_form = document.querySelectorAll("#close_popup_form");
const close_popup_form_overlay = document.querySelector(".close_popup_form_overlay");
const switchCheckbox = document.getElementById("switchCheckbox");
toggleSwitch === null || toggleSwitch === void 0 ? void 0 : toggleSwitch.addEventListener("click", function () {
    setTimeout(() => {
        popup_form === null || popup_form === void 0 ? void 0 : popup_form.classList.toggle("show");
        close_popup_form_overlay === null || close_popup_form_overlay === void 0 ? void 0 : close_popup_form_overlay.classList.toggle("hidden");
    }, 500);
});
close_popup_form.forEach((close) => {
    close === null || close === void 0 ? void 0 : close.addEventListener("click", function () {
        popup_form === null || popup_form === void 0 ? void 0 : popup_form.classList.toggle("show");
        close_popup_form_overlay === null || close_popup_form_overlay === void 0 ? void 0 : close_popup_form_overlay.classList.toggle("hidden");
        setTimeout(() => {
            switchCheckbox.checked = !(switchCheckbox === null || switchCheckbox === void 0 ? void 0 : switchCheckbox.checked);
        }, 500);
    });
});
// header
const header_nav = document.getElementById("header_nav");
const toggle_header_nav = document.getElementById("toggle_header_nav");
let is_nav_open = false;
toggle_header_nav === null || toggle_header_nav === void 0 ? void 0 : toggle_header_nav.addEventListener("click", function () {
    console.log("work");
    is_nav_open = !is_nav_open;
    header_nav === null || header_nav === void 0 ? void 0 : header_nav.classList.toggle("visible_nav");
    if (is_nav_open) {
        this.innerHTML = `<i class="fa-solid fa-xmark"></i>`;
    }
    else {
        this.innerHTML = `<i class="fa-solid fa-bars"></i>`;
    }
});
// multiple forms
const show_multiple_login = document.querySelectorAll(".show_multiple_login");
const show_multiple_register = document.querySelectorAll(".show_multiple_register");
const multiple_form = document.getElementById("multiple_form");
const multiple_form_overlay = document.getElementById("multiple_form_overlay");
const show_multiple_form = document.querySelectorAll(".show_multiple_form");
const remove_multiple_form = document.querySelectorAll(".remove_multiple_form");
show_multiple_login.forEach((ele) => {
    ele.addEventListener("click", () => {
        multiple_form === null || multiple_form === void 0 ? void 0 : multiple_form.classList.remove("showRegister");
        multiple_form === null || multiple_form === void 0 ? void 0 : multiple_form.classList.add("showLogin");
    });
});
show_multiple_register.forEach((ele) => {
    ele.addEventListener("click", () => {
        multiple_form === null || multiple_form === void 0 ? void 0 : multiple_form.classList.remove("showLogin");
        multiple_form === null || multiple_form === void 0 ? void 0 : multiple_form.classList.add("showRegister");
    });
});
show_multiple_form.forEach((ele) => {
    ele.addEventListener("click", () => {
        multiple_form === null || multiple_form === void 0 ? void 0 : multiple_form.classList.add("showMultipleForm");
        multiple_form_overlay === null || multiple_form_overlay === void 0 ? void 0 : multiple_form_overlay.classList.remove("hidden");
    });
});
remove_multiple_form.forEach((ele) => {
    ele.addEventListener("click", () => {
        multiple_form === null || multiple_form === void 0 ? void 0 : multiple_form.classList.remove("showMultipleForm");
        multiple_form_overlay === null || multiple_form_overlay === void 0 ? void 0 : multiple_form_overlay.classList.add("hidden");
    });
});
