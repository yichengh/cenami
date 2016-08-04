    $(document).ready(function(){
        loadHeader();
    });

function loadHeader() {
    var html_logo = [];
    html_logo.push("\
    <a href=\"\"> \
    <img src=\"images/site-logo.png\" height=\"50px\" width=/> \
    </a>");

    var html_menu = [];
    html_menu.push("\
    <ul> \
        <li> \
            <a href=\"index.html\">Index</a> \
        </li> \
        <li> \
            <a href=\"show_movie.php\">Movie Manage</a> \
        </li> \
        <li> \
            <a href=\"show_theater.php\">Theater Manage</a> \
        </li> \
        <li> \
            <a href=\"trends_online.php\">Trends Track</a> \
        </li> \
        <li> \
            <a href=\"buy_ticket.php\">Buy Ticket</a> \
        </li> \
    </ul> ");

    var html_description = [];
    html_description.push("Cenami - the Rearrangement of Cinema.");

    var html_footer = [];
    html_footer.push("\
    <div class=\"site-social\"> \
    <ul> \
        <a href=\"http://weibo.com/u/2095764045\" target=\"_blank\"> \
        <li> <img src='images/weibo.png'/>  </li> </a>\
        <a href=\"https://www.facebook.com/yicheng.huang.75\" target=\"_blank\"> \
        <li> <img src='images/facebook.png'/> </li> </a>\
    </ul> \
    </div>");

    html_footer.push("\
    <p>Built by <a href=mailto:anorange0409@gmail.com>Yicheng Huang</a>\
    <p> \
    HTML Theme by \
    <a href=\"http://themeraid.com\">ThemeRaid</a> \
    </p>");
    $('.site-header .site-logo').html(html_logo.join(''));
    $('.site-header .menu').html(html_menu.join(''));
    $('.site-header #site_description').html(html_description.join(''));
    $('.site-header .site-footer').html(html_footer.join(''));
}