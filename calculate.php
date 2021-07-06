<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>
<table>
<tr><td>Shoe</td><td><input class="txtBox" type="num" name="shoe" /></td></tr>
<tr><td>Table</td><td><input class="txtBox" type="num" name="table" /></td></tr>
<tr><td>Total</td><td><input type="text" id="total" name="total" value="0" readonly/></td></tr>
</table>
<script>
$(document).ready(function(){
  var total = 0;
  $('.txtBox').keyup(function(){
    $('.txtBox').each(function() {
      var txtBoxVal = $(this).val();
      total = total + Number(txtBoxVal);
    });
  $('#total').val(total);
  total = 0;
  });
});
</script>
</body>
</html>
