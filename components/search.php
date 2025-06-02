<div class="sidebar__filter-popup" id="filterPopup">
    <div class="filter-section">
        <div class="filter-header">
            <span>Thời gian</span>
            <button class="toggle-arrow" data-target="timeFilter">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                    <path
                        d="M6.99768 2.47956L1.28538 8L8.06412e-08 6.76243L6.99768 8.35018e-08L14 6.76243L12.7146 8L6.99768 2.47956Z"
                        fill="#5581D9" />
                </svg>
            </button>
        </div>
        <div class="filter-options" id="timeFilter">
            <label><input type="checkbox" name="time" value="newest" /> Mới nhất</label><br />
            <label><input type="checkbox" name="time" value="oldest" /> Cũ nhất</label>
        </div>
    </div>
    <div class="filter-section">
        <div class="filter-header">
            <span>Lượt xem</span>
            <button class="toggle-arrow" data-target="viewFilter">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                    <path
                        d="M6.99768 2.47956L1.28538 8L8.06412e-08 6.76243L6.99768 8.35018e-08L14 6.76243L12.7146 8L6.99768 2.47956Z"
                        fill="#5581D9" />
                </svg>
            </button>
        </div>
        <div class="filter-options" id="viewFilter">
            <label><input type="checkbox" name="view" value="most" /> Xem nhiều nhất</label><br />
            <label><input type="checkbox" name="view" value="least" /> Xem ít nhất</label>
        </div>
    </div>
    <button class="filter-btn-search">
        Tìm
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path
                d="M12.2829 11.255L16 14.9729L14.9731 16L11.256 12.2821C10.0701 13.2441 8.55864 13.8192 6.90983 13.8192C3.09514 13.8228 0 10.7269 0 6.91139C0 3.09584 3.09514 0 6.90983 0C10.7245 0 13.8197 3.09584 13.8197 6.91139C13.8197 8.55696 13.2447 10.0687 12.2829 11.2586V11.255ZM6.90983 12.3689C9.92181 12.3689 12.3661 9.92767 12.3661 6.91139C12.3661 3.89512 9.92542 1.45389 6.90983 1.45389C3.89424 1.45389 1.45356 3.89512 1.45356 6.91139C1.45356 9.92767 3.89424 12.3689 6.90983 12.3689Z"
                fill="white" />
        </svg>
    </button>
</div>