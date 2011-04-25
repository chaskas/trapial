<?php use_javascript('sendmail.js') ?>
<div class="content-wrapper" id="contact">
<div id="sendmail"></div>
<form action="<?php echo url_for('static/sendmail') ?>" id="form-send" method="POST">
  <table>
    <?php echo $form ?>
    <tr>
      <td colspan="2">
        <input type="submit" id="form-submit" value="Enviar"/>
      </td>
    </tr>
  </table>
</form>
</div>
