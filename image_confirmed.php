<?// 確認画面
}elseif($action==1){?>

<p>下記の内容でファイルを送信します。よろしければ「送信する」ボタンを押してください。</p>

お名前:<?=$form["nickname"]?>
レシピ画像<?if(isset($image_file)){?><a href="<?=$image_file["url"]?>" data-lightbox="image_file">
<?=$image_file["name"]?></a><?}?>
<?}?>

<form action="image_finish.php" method="post">
<p><input type="submit" value="送信する" class="button"></p>
<input type="hidden" name="action" value="2">
</form>

<form action="image_input.php" method="post">
<p><input type="submit" value="訂正する" class="button"></p>
<input type="hidden" name="action" value="0">
</form>
