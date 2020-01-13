<?php

?>
<div class="wrap">

<div id="icon-options-general" class="icon32"><br />
</div>

<h2>エクスポート画面</h2>
    <form action="<?php echo MSP_PLUGIN_DIR .'/admin/export.php'; ?>" method="post" id="form_post" target="_blank">
        <?php wp_nonce_field('csv_export');?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="inputtext">出力する項目を<br>選択してください</label></th>
                <td>
                    <select name="selecttax">
                        <option value="blog_cate">ブログ</option>
                    </select>
                </td>
            </tr>
        </table>
        <p class="submit"><input type="submit" class="button-primary" value="エクスポート" /></p>
    </form>
</div>
