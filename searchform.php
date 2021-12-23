<form method="get" class="l-header__form" action="<?php echo esc_url( home_url('/') ); ?>">
    <label class="l-header__form__box">
        <input type="text" value="\f002" class="l-header__form__icon fas fa-search fa-lg" name="s" value="" />
        <input type="text" placeholder="検索 …" class="l-header__form__search" name="s" value="" />
    </label>
    <input class="l-header__form__button" type="submit" formaction="#" value="検索">
</form>

<!--
<form class="l-header__form" action="/" method="get">
    <fieldset>
        <label for="search">Search in <?php echo home_url('/'); ?></label>
        <input class="l-header__form__box" type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
            <i class="fas fa-search"></i>
        <input class="fas fa-search fa-lg" type="image" alt="Search" value="\f002">
        <input class="l-header__form__button" type="submit" formaction="#" value="検索">
    </fieldset>
</form>

<input class="l-header__form__box fas fa-search fa-lg" type="search" value="\002" name="s" id="s">
-->

