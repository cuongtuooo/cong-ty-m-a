// modal post
const postModal = document.getElementById("postModal");
const openBtn = document.querySelector(".main__post-btn");

openBtn.addEventListener("click", (e) => {
    e.preventDefault();
    postModal.style.display = "flex";
});

// Tắt modal khi nhấn ngoài khung
window.addEventListener("click", function (e) {
    if (e.target === postModal) {
        postModal.style.display = "none";
    }
});


//modal register

function openLoginModal() {
    document.getElementById("loginModal").style.display = "flex";
}

function closeLoginModal() {
    document.getElementById("loginModal").style.display = "none";
}

//control modal
function showMainLoginOnly() {
    document.getElementById("sidebar").style.display = "none";
    document.getElementById("main-content").style.display = "none";
    document.getElementById("tags").style.display = "none";
    document.getElementById("main-login").style.display = "block";
    document.getElementById("layout").style.display = "block";
    closeLoginModal();
}

function returnToMain() {
    document.getElementById("main-login").style.display = "none";
    document.getElementById("sidebar").style.display = "block";
    document.getElementById("main-content").style.display = "block";
    document.getElementById("tags").style.display = "block";
    document.getElementById("layout").style.display = "grid";

}


// search
const filterBtn = document.querySelector('.sidebar__filter-btn');
const popup = document.getElementById('filterPopup');

filterBtn.addEventListener('click', () => {
    if (popup.style.display === 'block') {
        popup.style.display = 'none';
        filterBtn.classList.remove('active');
    } else {
        popup.style.display = 'block';
        filterBtn.classList.add('active');
    }
});

// Thu gọn/hiện checkbox
document.querySelectorAll('.toggle-arrow').forEach(btn => {
    btn.addEventListener('click', e => {
        const targetId = btn.getAttribute('data-target');
        const options = document.getElementById(targetId);
        if (options.style.display === 'none' || options.style.display === '') {
            options.style.display = 'block';
            btn.classList.remove('collapsed');
        } else {
            options.style.display = 'none';
            btn.classList.add('collapsed');
        }
    });
});


// sibar chude
function toggleSection(id, btn) {
    const list = document.getElementById(id);
    list.classList.toggle("sidebar__list--hidden");
    btn.classList.toggle("sidebar__toggle--open");
}