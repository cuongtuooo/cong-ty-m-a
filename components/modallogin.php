<!-- MODAL register login -->
<div class="login-modal-overlay" id="loginModal">
    <div class="login-modal">
        <button class="login-modal__close" onclick="closeLoginModal()">×</button>
        <h2 class="login-modal__title">Đăng ký hội viên để<br>mở khóa giao dịch</h2>

        <input type="email" class="login-modal__input" placeholder="Email" />
        <div class="login-modal__password">
            <input type="password" class="login-modal__input" placeholder="Mật khẩu" />
            <i class="fa fa-eye-slash login-modal__eye"></i>
        </div>

        <small class="login-modal__subtext">Tạo tài khoản</small>
        <button onclick="showMainLoginOnly()" class="login-modal__submit">Đăng nhập</button>

        <div class="login-modal__or">hoặc</div>

        <button class="login-modal__social google">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="34" viewBox="0 0 33 34" fill="none">
                <path
                    d="M27.9419 4.54666L23.1219 9.36672C21.5123 7.80907 19.3489 6.86583 16.8221 6.86583C12.4001 6.86583 8.65305 9.74748 7.3204 13.7541L1.77344 9.4446C4.52528 3.97553 10.1934 0.228516 16.7269 0.228516C21.045 0.228516 24.9738 1.86405 27.9419 4.54666Z"
                    fill="#EA4335" />
                <path
                    d="M7.32095 20.1922L1.77399 24.4844C0.640367 22.2258 0 19.673 0 16.9731C0 14.2732 0.640367 11.7117 1.78264 9.45312L7.3296 13.7626C6.99211 14.7751 6.81039 15.8568 6.81039 16.9818C6.81039 18.1933 6.94019 19.1105 7.3296 20.1922H7.32095Z"
                    fill="#FBBC05" />
                <path
                    d="M27.7005 29.5987C24.7669 32.1515 20.9247 33.6919 16.7277 33.6919C11.8038 33.6919 7.37316 31.5631 4.30978 28.1795C3.30597 27.0719 2.44926 25.8257 1.76562 24.4758L7.31259 20.1836C8.71447 24.0691 12.4874 27.0892 16.8142 27.0892C19.1334 27.0892 21.0026 26.4575 22.4131 25.4969L27.6918 29.5987H27.7005Z"
                    fill="#34A853" />
                <path
                    d="M29.6983 27.5396C29.6983 27.5396 29.6637 27.5828 29.6464 27.6088C29.058 28.327 28.4089 28.9934 27.708 29.5991L22.4293 25.4973C24.385 24.1733 25.4927 22.2089 25.7696 20.4263H16.7266V13.9707H32.5107C33.3848 19.6821 32.13 24.2425 29.6897 27.5396H29.6983Z"
                    fill="#5581D9" />
            </svg>
            Đăng nhập với Google
        </button>
        <button class="login-modal__social facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                <path
                    d="M2.31917 0.228516H31.1443C32.4251 0.228516 33.4635 1.26695 33.4635 2.54768V31.3728C33.4635 32.6536 32.4251 33.692 31.1443 33.692H2.31917C1.03843 33.692 0 32.6536 0 31.3728V2.54768C0 1.26695 1.03843 0.228516 2.31917 0.228516Z"
                    fill="#5581D9" />
                <path
                    d="M18.7603 15.1476V16.9476H24.2121L23.3121 22.0532H18.769V33.6923H12.7288V22.0532H9.25V16.9476H12.7288V14.1871C12.7288 13.2871 12.8153 12.3612 13.0576 11.4958C13.5076 9.81702 14.321 8.51898 15.5844 7.70554C17.2113 6.62384 19.2968 6.4248 20.9237 6.4248C22.2045 6.4248 24.0477 6.69307 24.515 6.84018L24.4977 11.4612C23.615 11.4093 22.8189 11.392 22.0833 11.4266C21.815 11.4266 21.5208 11.4785 21.2526 11.5131C18.6738 11.9285 18.8122 14.3861 18.7776 15.139L18.7603 15.1476Z"
                    fill="white" />
            </svg>
            Đăng nhập với Facebook
        </button>
    </div>
</div>