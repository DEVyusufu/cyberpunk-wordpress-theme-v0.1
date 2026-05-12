</main>

<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-info">
            &copy; <?php echo date('Y'); ?> ZEVA TECH. All rights reserved.
        </div>
        <div class="footer-meta">
            Broadcasting from the Neon Grid // v2.0.4
        </div>
    </div>
</footer>

</div> <style>
.site-footer {
    border-top: 1px solid var(--border);
    padding: 60px 40px;
    background: #050507;
}

.footer-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.75rem;
    color: #444;
}

.footer-meta {
    text-transform: uppercase;
    letter-spacing: 1px;
}

@media (max-width: 768px) {
    .footer-inner {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
}
</style>

<?php wp_footer(); ?>
</body>
</html>
