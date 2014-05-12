<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

  <div class="container">
    <h1>Sidan kunde inte hittas</h1>
    <p>Tyvärr fungerade inte den länk du försökte gå till. Sidan du letar kan ha flyttats, ändrat sin adress eller av någon annan anledning inte nås för tillfället.</p>
    <p>Kanske kan något av dessa alternativ hjälpa dig hitta det du söker?</p>
    <ul>
      <li>Om du skrev in adressen själv, kontrollera stavningen och försök igen.</li>
      <li>Gå <a href="javascript:history.go(-1);">tillbaka till den sida</a> du kom ifrån</li>
      <li>Gå till startsidan för <a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a></li>
    </ul>
  </div>

<?php get_footer(); ?>