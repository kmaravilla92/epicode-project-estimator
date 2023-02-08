<div class="wrap">
  <div class="postbox">
    <div class="inside">
      <div class="main">
        <form action="<?= admin_url( 'admin-post.php' ) ?>" method="post">
          <input type="hidden" name="action" value="save-settings">
          <table class="widefat">
            <tbody>
              <tr>
                <td>
                  <?= __( 'Admin name', EPC_LANG_DOMAIN ) ?>
                </td>
                <td>
                  <input type="text" name="epc-settings[admin-name]" value="<?= $settings['admin-name'] ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <?= __( 'Admin e-mail', EPC_LANG_DOMAIN ) ?>
                </td>
                <td>
                  <input type="email" name="epc-settings[admin-email]" value="<?= $settings['admin-email'] ?>">
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
