<!-- BEGIN: main -->
<style>
    .choose {
        display: flex;
        align-items: center;
        width: 100%;
        height: 100px;
    }
    .chon_nam {
        width: 100%;
    }
    .chon_tuan {
        width: 100%;
    }
    .chon_lop {
        width: 100%;
    }

    .text {
        color: black;
        font-size: 16px;
    }
    .select {
        height: 30px;
        width: 100px;
        font-size: 16px;
    }
    .text_lag {
        color: black;
        font-size: 16px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .table {
        border: 1px solid #A9A9A9;
        display: flex;
        flex-direction: column;
    }
    .hang {
        display: flex;
        justify-content: center;
    }
    .picxel {
        width: 35%;
        border: 1px solid #A9A9A9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
    }
    .picxel_small {
        width: 10%;
        border: 1px solid #A9A9A9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
    }
    .picxel_medium {
        width: 15%;
        border: 1px solid #A9A9A9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
    }
    .cum_hang {
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .thu {
        width: 10%;
        border: 1px solid #A9A9A9;
    }
    .banghi {
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .tiet_trong_ngay {
        width: 100%;
    }
</style>




<body>
<div class="parent">
    <div class="choose">
        <div class="chon_nam text">
            <label for="cars">Chọn Năm : </label>
            <select class="select" name="cars" id="cars">
                <option class="text" value="">2019</option>
                <option value="">2020</option>
                <option value="">2021</option>
                <option value="">2022</option>
            </select>
        </div>
        <div class="chon_tuan text">
            <label for="cars">Chọn Tuần : </label>
            <select class="select" name="cars" id="cars">
                <option value="">01</option>
                <option value="">02</option>
                <option value="">03</option>
                <option value="">04</option>
            </select>
        </div>
        <div class="chon_lop text">
            <label for="cars">Chọn Lớp : </label>
            <select class="select" name="cars" id="cars">
                <option value="">8A</option>
                <option value="">8B</option>
                <option value="">9A</option>
                <option value="">9C</option>
            </select>
        </div>
    </div>
    <div class="table">
        <div class="hang text">
            <div class="picxel_small">Thứ</div>
            <div class="picxel_small">Tiết</div>
            <div class="picxel_medium">Môn Học</div>
            <div class="picxel_medium">Tên Hs Nghỉ</div>
            <div class="picxel_medium">Tên Bài Học</div>
            <div class="picxel">Nhận Xét</div>
            <div class="picxel_small">Xếp Loại</div>
        </div>
        <div class="cum_hang">
            <div class="thu text">Thứ 2</div>
            <div class="tiet_trong_ngay">
                <div class="banghi text">
                    <div class="picxel_small">1</div>
                    <div class="picxel_medium">{MonHoc_2_1}</div>
                    <div class="picxel_medium">{TenHSNGhi_2_1}</div>
                    <div class="picxel_medium">{TenBaiHoc_2_1}</div>
                    <div class="picxel">{NhanXet_2_1}</div>
                    <div class="picxel_small">{XepLoai_2_1}</div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">2</div>
                    <div class="picxel_medium">{MonHoc_2_2}</div>
                    <div class="picxel_medium">{TenHSNghi_2_2}</div>
                    <div class="picxel_medium">{TenBaiHoc_2_2}</div>
                    <div class="picxel">{NhanXet_2_2}</div>
                    <div class="picxel_small">{XepLoai_2_2}</div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">3</div>
                    <div class="picxel_medium">{MonHoc_2_2}</div>
                    <div class="picxel_medium">{TenHSNghi_2_3}</div>
                    <div class="picxel_medium">{TenBaiHoc_2_3}</div>
                    <div class="picxel">{NhanXet_2_3}</div>
                    <div class="picxel_small">{XepLoai_2_3}</div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">4</div>
                    <div class="picxel_medium">{MonHoc_2_2}</div>
                    <div class="picxel_medium">{TenHSNghi_2_4}</div>
                    <div class="picxel_medium">{TenBaiHoc_2_4}</div>
                    <div class="picxel">{NhanXet_2_4}</div>
                    <div class="picxel_small">{XepLoai_2_4}</div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">5</div>
                    <div class="picxel_medium">{MonHoc_2_2}</div>
                    <div class="picxel_medium">{TenHSNghi_2_5}</div>
                    <div class="picxel_medium">{TenBaiHoc_2_5}</div>
                    <div class="picxel">{NhanXet_2_5}</div>
                    <div class="picxel_small">{XepLoai_2_5}</div>
                </div>

                <div class="banghi text">
                    <div class="picxel_small">7</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">8</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">9</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">10</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>

            </div>
        </div>
        <div class="cum_hang">
            <div class="thu text">Thứ 3</div>
            <div class="tiet_trong_ngay">
                <div class="banghi text">
                    <div class="picxel_small">1</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">2</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">3</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">4</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">5</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">6</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">7</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">8</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">9</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">10</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>

            </div>
        </div>
        <div class="cum_hang">
            <div class="thu text">Thứ 4</div>
            <div class="tiet_trong_ngay">
                <div class="banghi text">
                    <div class="picxel_small">1</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">2</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">3</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">4</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">5</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">6</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">7</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">8</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">9</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">10</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>

            </div>
        </div>
        <div class="cum_hang">
            <div class="thu text">Thứ 5</div>
            <div class="tiet_trong_ngay">
                <div class="banghi text">
                    <div class="picxel_small">1</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">2</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">3</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">4</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">5</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">6</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">7</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">8</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">9</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">10</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>

            </div>
        </div>
        <div class="cum_hang">
            <div class="thu text">Thứ 6</div>
            <div class="tiet_trong_ngay">
                <div class="banghi text">
                    <div class="picxel_small">1</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">2</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">3</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">4</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">5</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">6</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">7</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">8</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">9</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">10</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>

            </div>
        </div>
        <div class="cum_hang">
            <div class="thu text">Thứ 7</div>
            <div class="tiet_trong_ngay">
                <div class="banghi text">
                    <div class="picxel_small">1</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">2</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">3</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">4</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">5</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">6</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">7</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">8</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">9</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>
                <div class="banghi text">
                    <div class="picxel_small">10</div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel_medium"></div>
                    <div class="picxel"></div>
                    <div class="picxel_small"></div>
                </div>

            </div>
        </div>

        <div>

        </div>
    </div>
</body>

<!-- END: main -->