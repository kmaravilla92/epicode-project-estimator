<div class="wrap">
    <h2><?= __( 'Epicode Project Calculator', EPC_LANG_DOMAIN ) ?></h2>
    <div class="nav-tab-wrapper">
    <?php foreach ($tabs as $tab_slug => $tab) { ?>
        <a
            href="?page=<?= EPC_PREFIX ?>&tab=<?= $tab_slug ?>"
            class="nav-tab <?= $active_tab == $tab_slug ? 'nav-tab-active' : '' ?>"
        >
            <?= $tab['title'] ?>
        </a>
    <?php } ?>
    </div>
    <div class="wrap">
        <?= $tabs[$active_tab]['view'] ?>
    </div>
</div>
