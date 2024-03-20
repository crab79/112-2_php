<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>晚會報名表單</title>
</head>

<body>
    <form action="result.php" method="post">
        <fieldset>
            <legend>基本資料</legend>
            <label for="file">您的大頭照：</label>
            <input type="file" name="user_file" id="file">
            <label for="user_acc">學號：</label>
            <input type="text" name="user_acc" id="user_acc" placeholder="請輸入您的學號" required>
            <label for="email">您的電子郵件：</label>
            <input type="email" name="user_email" id="email">
            <label for="user_paswd">密碼：</label>
            <input type="password" name="user_paswd" id="user_paswd" placeholder="請輸入您的密碼" required>
            <label for="gender">性別：</label>
            <input type="radio" name="gender" id="female" value="女">女
            <input type="radio" name="gender" id="male" value="男">男
        </fieldset>
        <fieldset>
            <legend>想要吃的餐點</legend>
            <div class="option">
                <input type="checkbox" name="user_food[]" id="hotdogs" value="熱狗">
                <label for="hotdogs">熱狗</label>
            </div>
            <div class="option">
                <input type="checkbox" name="user_food[]" id="sushi" value="壽司">
                <label for="sushi">壽司</label>
            </div>
            <div class="option">
                <input type="checkbox" name="user_food[]" id="ramen" value="拉麵">
                <label for="ramen">拉麵</label>
            </div>
        </fieldset>
        <fieldset>
            <legend>晚會的相關細節</legend>
            <label for="color">您想要的晚會主題顏色：</label>
            <input type="color" name="user_color" id="color">
            <label for="date">您想要的晚會日期：</label>
            <input type="date" name="user_date" id="date">
            <label for="time">要幾點舉辦呢：</label>
            <input type="time" name="user_time" id="time">
            <input type="hidden" name="user_secret" id="secret" value="hahaha">
            <label for="range">您願意花多少錢購買晚會週邊：</label>
            <input type="range" name="user_range" id="range" min="0" max="1000" value="200">
            <span id="rangeValue"></span> 元
        </fieldset>
        <fieldset>
            <legend>當天的dress code：您想要大家統一穿什麼呢</legend>
            <select name="fashion[]" multiple>
                <optgroup label="服飾">
                    <option value="T恤">T恤</option>
                    <option value="毛衣" selected>毛衣</option>
                    <option value="外套">外套</option>
                </optgroup>
                <optgroup label="鞋類">
                    <option value="運動鞋" selected>運動鞋</option>
                    <option value="靴子">靴子</option>
                    <option value="涼鞋">涼鞋</option>
                </optgroup>
            </select>
        </fieldset>
        <fieldset>
            <legend>意見分享</legend>
            <label for="talk">請輸入您的想法：</label>
            <textarea name="talking" id="talk" cols="30" rows="10"></textarea>
        </fieldset>
        <button type="submit">提交</button>
        <button type="reset">重設</button>
    </form>
    <script>
        const range = document.getElementById('range');
        const rangeValue = document.getElementById('rangeValue');

        range.addEventListener('input', function() {
            rangeValue.textContent = this.value;
        });
    </script>
</body>

</html>