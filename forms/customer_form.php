<fieldset>
    <div class="form-group">
        <label for="f_name"> نام *</label>
        <input type="text" name="f_name" value="<?php echo htmlspecialchars($edit ? $customer['f_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="نام" class="form-control" required="required" id="f_name">
    </div>

    <div class="form-group">
        <label for="l_name">نام خانوادگی *</label>
        <input type="text" name="l_name" value="<?php echo htmlspecialchars($edit ? $customer['l_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="نام خانوادگی" class="form-control" required="required" id="l_name">
    </div>
    <div class="form-group">
        <label for="l_name">نام پدر *</label>
        <input type="text" name="father" value="<?php echo htmlspecialchars($edit ? $customer['father'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="نام پدر" class="form-control" required="required" id="father">
    </div>

    <div class="form-group">
        <label for="l_name">کد ملی *</label>
        <input type="number" name="code" value="<?php echo htmlspecialchars($edit ? $customer['code'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="کد ملی" class="form-control" required="required" id="code">
    </div>

    <div class="form-group">
        <label>جنسیت * </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="مرد" <?php echo ($edit && $customer['gender'] == 'male') ? "checked" : ""; ?> required="required" /> مرد
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="زن" <?php echo ($edit && $customer['gender'] == 'female') ? "checked" : ""; ?> required="required" id="female" /> زن
        </label>
    </div>

    <div class="form-group">
        <label for="address">آدرس</label>
        <textarea name="address" placeholder="Address" class="form-control" id="address"><?php echo htmlspecialchars(($edit) ? $customer['address'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>

    <div class="form-group">
        <label>استان </label>
        <?php $opt_arr = array("تهران", "شیراز", "اصفهان", "قزوین");
        ?>
        <select name="state" class="form-control selectpicker" required>
            <option value=" ">استان شهر خود را انتخاب کنید</option>
            <?php
            foreach ($opt_arr as $opt) {
                if ($edit && $opt == $customer['state']) {
                    $sel = "selected";
                } else {
                    $sel = "";
                }
                echo '<option value="' . $opt . '"' . $sel . '>' . $opt . '</option>';
            }

            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="phone">موبایل</label>
        <input name="phone" value="<?php echo htmlspecialchars($edit ? $customer['phone'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="987654321" class="form-control" type="text" id="phone">
    </div>
    <div class="form-group">
        <label for="phone">تلفن ثابت</label>
        <input name="tel" value="<?php echo htmlspecialchars($edit ? $customer['tel'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="021334698" class="form-control" type="text" id="tel">
    </div>
    <div class="form-group">
        <label>تاریخ تولد</label>
        <input name="date_of_birth" value="<?php echo htmlspecialchars($edit ? $customer['date_of_birth'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="تاریخ تولد" class="form-control" type="date">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning">ذخیره <span class="glyphicon glyphicon-send"></span></button>
    </div>
</fieldset>