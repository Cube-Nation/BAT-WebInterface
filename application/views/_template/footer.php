<?php if (isset($paginationView)) { ?>
    <center><p><?php echo $paginationView; ?></p></center>
<?php } ?>
</div>
</div>
</div>
<?php // Please don't remove the link to the BAT page - it's the only link in the whole webinterface ?>

<div class="Footertopdunkel">
    <div class="Footer">
        <p>
            Powered by <a href="http://www.spigotmc.org/resources/bungee-admin-tools.444/">BungeeAdminTools</a>
            - <a href="?p=admin">Administration panel</a>
            <?php if ($this->isAdmin()) {
                include("admin/footerAddon.php");
            } ?>
        </p>
    </div>
</div>

</div>

</body>
</html>
