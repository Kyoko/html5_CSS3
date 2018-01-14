<?// 入力画面
if(!$action){?>

<?=$msg?>

<form action="image_upload.html" method="post" enctype="multipart/form-data">
<label>ニックネーム</label>
<input type="text" name="form[nickname]" value="<?=@$form["nicknamename"]?>">

<label>レシピ画像</label>
<input type="file" name="recipe_image">

<?if(isset($image_file)){?>
  <a href="<?=image_file["url"]?>" data-lightbox="files">
    <?=image_file["name"]?>
  </a>
<?}?>

<p><input type="submit" value="送信内容を確認する" class="button" /></p>
<input type="hidden" name="action" value="1" />
</form>
