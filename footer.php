        </div>

        <div id="footer" class="twelve columns">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Accueil</a></li>
                <?php wp_list_pages('title_li='); ?>
            </ul>
        </div>

        <div id="copyright" class="twelve columns">
            <p>Ce site et son contenu sont entièrement libre de droits. Le code du <a href="https://github.com/vjousse/wp-vjousse">template Wordpress est disponible sur Github</a>.</p>
        </div>

    </div>
<?php wp_footer(); ?>
</body>
</html>
