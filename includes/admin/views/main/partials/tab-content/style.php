<div class="wrap">
  <div class="postbox">
    <div class="inside">
      <div class="main">
        <form action="<?= admin_url( 'admin-post.php' ) ?>" method="post">
          <input type="hidden" name="action" value="save-style">
          <table class="widefat">
            <tbody>
              <tr>
                <td>
                  <?= __( 'Use default style?', EPC_LANG_DOMAIN ) ?>
                </td>
                <td>
                  <input type="hidden" name="epc-use-default-style" value="no">
                  <input type="checkbox" name="epc-use-default-style" value="yes" <?php checked($use_default_style) ?>>
                </td>
              </tr>
              <tr>
                <td>
                  <?= __( 'Custom CSS', EPC_LANG_DOMAIN ) ?>
                </td>
                <td>
                  <textarea name="epc-custom-css" rows="8" cols="80"><?= $custom_css ?></textarea>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="2">
                  <div class="alignright">
                    <button class="button button-primary">
                      <?= __( 'Save', EPC_LANG_DOMAIN ) ?>
                    </button>
                  </div>
                </td>
              </tr>
            </tfoot>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
