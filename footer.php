        </div>

        <div id="footer" class="twelve columns">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Accueil</a></li>
                <?php wp_list_pages('title_li='); ?>
            </ul>
        </div>

        <div id="copyright" class="twelve columns">
            <p>Ce site est entièrement libre de droits. Le code du template Wordpress est disponible sur Github.</p>
        </div>

    </div>
<?php wp_footer(); ?>
</body>
</html>
