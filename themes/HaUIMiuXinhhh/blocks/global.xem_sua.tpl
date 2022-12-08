<!-- BEGIN: main -->
<style>
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top: 30px;
    }

    .input {
        width: 400px;
        height: 40px;
        margin-bottom: 40px;
    }
    .root {
        display: flex;
        justify-content: center;
        border: 2px solid #A9A9A9;
        border-radius: 5px;
    }
    .text {
        color: black;
        font-size: 16px;
    }

    .group_button {
        display: flex;
        justify-content: center;
    }

    .button {
        height: 40px;
        width: 100px;
        margin: 0 20px 30px 0;

    }
</style>


<body>
<div class="root">
    <div class="container">

        <label class="text">Môn Học : </label>
        <input class="input" type="text">

        <label class="text">Học Sinh Nghỉ : </label>
        <input class="input" type="text">

        <label class="text">Tên bài : </label>
        <input class="input" type="text">

        <label class="text">Nhận Xét của Giáo Viên : </label>
        <input class="input" type="text">

        <label class="text">Xếp Loại : </label>
        <input class="input" type="text">
        <div class="group_button">
            <button class="button exit">Thoát</button>
            <button class="button save">Lưu</button>
        </div>

    </div>

</div>
</body>

<!-- END: main -->